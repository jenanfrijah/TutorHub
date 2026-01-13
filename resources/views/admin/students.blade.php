@extends('layouts.admin')
@section ('title',' Students Table')
@section('content')
  <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active"> Students Table</li>
                        </ol>
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <table id="datatablesSimple" border="1" cellpadding="8" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Student Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Location</th>
                                            <th>Start date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tiger Nixon</td>
                                            <td>tiger@gmail.com</td>
                                            <td>07851246278</td>
                                            <td>Amman</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                        <tr>
                                           <td>2</td>
                                            <td>Yousra Shaheen</td>
                                            <td>Yousra@gmail.com</td>
                                            <td>07851246278</td>
                                            <td>Irbid</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Yara Nemer</td>
                                            <td>Yara@gmail.com</td>
                                            <td>07851246278</td>
                                            <td>Amman</td>
                                            <td>2007/01/13</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Yousef Tayseer</td>
                                            <td>Yousef@gmail.com</td>
                                            <td>07851246278</td>
                                            <td>Irbid</td>
                                            <td>2004/02/5</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Khalid Othman</td>
                                            <td>Khalid@gmail.com</td>
                                            <td>07851246278</td>
                                            <td>Zarqa</td>
                                            <td>2021/06/15</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Yasser Hani</td>
                                            <td>Yasser@gmail.com</td>
                                            <td>0782225438</td>
                                            <td>Amman</td>
                                            <td>2014/07/02</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Noor ahmad</td>
                                            <td>Noor@gmail.com</td>
                                            <td>0781542378</td>
                                            <td>Amman</td>
                                            <td>2011/02/7</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection

