<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Tutor;


class Subject extends Model
{
    use SoftDeletes;

    protected $fillable=['name','description'];

    protected $dates =['deleted_at'];

    public function tutors(){
            return $this->belongsToMany(Subject::class , 'subject_tutor','tutor_id', 'subject_id');
    }
}
