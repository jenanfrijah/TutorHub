<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Request as CourseRequest; 

class RequestController extends Controller
{
    public function store(Request $request)
{
    
    $request->validate([
        'tutor_id' => 'required|exists:tutors,id',
        'student_id' => 'required|exists:users,id',
        'subject_id' => 'required|exists:subjects,id',
        'grade_id' => 'nullable|exists:grades,id',
        'proposed_datetime' => 'required|date',
        'notes' => 'nullable|string',
    ]);

       CourseRequest::create([
        'student_id' => $request->student_id,
        'tutor_id' => $request->tutor_id,
        'subject_id' => $request->subject_id,
        'grade_id' => $request->grade_id,
        'proposed_datetime' => $request->proposed_datetime,
        'notes' => $request->notes,
        'status' => 'pending', 
    ]);

    return redirect()->back()->with('success', 'Request sent successfully!');
}

}
