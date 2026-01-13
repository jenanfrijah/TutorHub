<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;



class SubjectController extends Controller
{
 public function index(Request $request)
 {
    // dd($subjects);
    $search = $request->input('search');

    $subjects = Subject::when($search, function ($q) use ($search) {
        $q->where('name', 'like', "%$search%")
          ->orWhere('description', 'like', "%$search%");
    })
    ->paginate(5);

    return view('crud.index', compact('subjects'));
 }



public function create(){
    return view('crud.create');
}

public function store(Request $request){

$request->validate([
    'name'=>'required|string|max:255',
    'description'=> 'nullable|string',
]);

Subject::create([
    'name'=> $request->name,
    'description'=>$request->description,
]);

return redirect()->route('crud.index')->with('success', 'Subject added successfully!');
}

public function edit($id){
    $subject=Subject::findOrFail($id);
    if (!$subject) {
abort(404);
}
    return view('crud.edit',compact('subject'))->with('success','subject Added successfully '); 
}

public function update(Request $request , $id){

$request->validate([
    'name'=> 'required|string|max:255',
    'description'=> 'nullable|string',
]);

$subject= Subject::findOrFail($id);

$subject->update([
    'name'=>$request->name,
    'description'=> $request->description,
]);


return redirect()->route('crud.index') ->with('success', 'Subject updated successfully!');

}

public function destroy($id){
   $subject= Subject::findOrFail($id);
 
   $subject->delete();

   return redirect()->route('crud.index') ->with('success', 'Subject deleted successfully!');
}

public function trashedSubjects(){

    $deletedSubjects = Subject::onlyTrashed()->get();

    return view('crud.trashed', compact('deletedSubjects'));
}
public function restore($id){
    $subject = Subject::withTrashed()->findOrFail($id); 
    $subject->restore(); 
    return redirect()->route('crud.trashed')->with('success','Subject restored successfully');
}

















}
