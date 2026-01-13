@extends('layouts.tutor')
@section('title','My Requests')
@section('content')

  <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"git><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Requests Table</li>
                        </ol>
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <table id="datatablesSimple" border="1" cellpadding="8" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Subject Name</th>
                                            <th>Notes</th>
                                            <th>Proposed Date & Time</th> 
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ali Yousef</td>
                                            <td>Math</td>
                                            <td>I am really bad in math</td>
                                            <td>2026/02/25  3:00 PM</td>
                                            <td>Pending</td>
                                          <td>
                                             <button class="btn btn-success btn-sm"><i class="fa fa-check"></i> Accept</button>
                                             <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Deny</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ahmad Yaseen</td>
                                            <td>English</td>
                                            <td>My English is good but I am not perfect on writing</td>
                                            <td>2026/02/2  3:00 PM</td>
                                            <td>Pending</td>
                                           <td>
                                             <button class="btn btn-success btn-sm"><i class="fa fa-check"></i> Accept</button>
                                             <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Deny</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ola Khalid</td>
                                            <td>English</td>
                                            <td>I have a very crucial exam tomorow</td>
                                            <td>2026/02/7  2:00 PM</td>
                                            <td>Pending</td>
                                           <td>
                                             <button class="btn btn-success btn-sm"><i class="fa fa-check"></i> Accept</button>
                                             <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Deny</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>yara nemer</td>
                                            <td>Math</td>
                                            <td>no any</td>
                                            <td>2026/02/7  7:00 PM</td>
                                            <td>Pending</td>
                                          <td>
                                             <button class="btn btn-success btn-sm"><i class="fa fa-check"></i> Accept</button>
                                             <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Deny</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Islam mohammad</td>
                                            <td>Math</td>

                                            <td>no any</td>
                                            <td>2026/03/4  7:00 PM</td>
                                            <td>Pending</td>
                                           <td>
                                             <button class="btn btn-success btn-sm"><i class="fa fa-check"></i> Accept</button>
                                             <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Deny</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>noor khaild</td>
                                            <td>English</td>
                                            <td>I am not good at all in English</td>
                                            <td>2026/02/11 2:00 PM</td>
                                            <td>Pending</td>
                                             <td>
                                             <button class="btn btn-success btn-sm"><i class="fa fa-check"></i> Accept</button>
                                             <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Deny</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hossam yasser</td>
                                            <td>Math</td>
                                            <td>no any</td>
                                            <td>2026/02/23  7:00 PM</td>
                                            <td>Pending</td>
                                            <td>
                                             <button class="btn btn-success btn-sm"><i class="fa fa-check"></i> Accept</button>
                                             <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Deny</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                     </div>
                    </div>
                </div>
@endsection
