@extends('layouts.home')
@section('title','My Requests')
@section('content')

  <div class="container-fluid px-4">
                        <h1 class="mt-4">My Requests</h1>
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <table id="datatablesSimple" border="1" cellpadding="8" width="100%">
                                    <thead>
                                        <tr>
                                           <th>Tutor Name</th>
                                            <th>Subject</th>
                                            <th>Grade</th>
                                            <th>Proposed Date & Time</th> 
                                            <th>Notes</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ali Yousef</td>
                                            <td>Math</td>
                                            <td>Grade 3</td>
                                            <td>2026/02/25  3:00 PM</td>
                                            <td>I am really bad in math</td>
                                            <td>Pending</td>
                                            <td>2026/02/20  1:23 AM</td>
                            
                                        </tr>
                                        <tr>
                                            <td>Ahmad Yaseen</td>
                                            <td>English</td>
                                            <td>Grade 5</td>
                                             <td>2026/01/25  8:20 PM</td>
                                            <td>My English is good but I am not perfect on writing</td>
                                            <td>Pending</td>
                                            <td>2026/02/2  3:00 PM</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Ola Khalid</td>
                                            <td>English</td>
                                             <td>Grade 7</td>
                                             <td>2026/02/2  5:12 PM</td>
                                             <td>I have a very crucial exam tomorow</td>
                                             <td>Pending</td>
                                             <td>2026/02/7  2:00 PM</td>
                                           
                                         
                                        </tr>
                                        <tr>
                                            <td>yara nemer</td>
                                            <td>Math</td>
                                             <td>Grade 3</td>
                                             <td>2026/02/7  7:00 PM<</td>
                                             <td>no any</td>
                                             <td>Pending</td>
                                             <td>2026/02/7  2:00 PM</td>

                                        </tr>
                                        <tr>
                                            <td>yara nemer</td>
                                            <td>History</td>
                                             <td>Grade 3</td>
                                             <td>2026/02/7  7:00 PM<</td>
                                             <td>no any</td>
                                             <td>Pending</td>
                                             <td>2026/02/7  2:00 PM</td>
                    
                                        </tr>
                                        <tr>
                                           <td>noha nemer</td>
                                            <td>Arabic</td>
                                             <td>Grade 10 </td>
                                             <td>2026/02/7  7:00 PM<</td>
                                             <td>no any</td>
                                             <td>Pending</td>
                                             <td>2026/02/7  2:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td>yara nemer</td>
                                            <td>Math</td>
                                             <td>Grade 3</td>
                                             <td>2026/02/7  7:00 PM<</td>
                                             <td>no any</td>
                                             <td>Pending</td>
                                             <td>2026/02/7  2:00 PM</td>
                                        </tr>
                                    </tbody>
                                </table>
                     </div>
                    </div>
                </div>
@endsection
