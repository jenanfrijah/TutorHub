<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subject;
use Livewire\WithPagination;

class SubjectSearch extends Component
{
    use WithPagination;

    public $search = '';
    
    protected $paginationTheme = 'bootstrap'; 

    public function updated($propertyName)
    {
        if ($propertyName === 'search') {
            $this->resetPage();
        }
    }

    public function render()
    {
        $subjects = Subject::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
                     
            })
            ->paginate(9);

        return view('livewire.subject-search', [
            'subjects' => $subjects
        ]);
    }
}