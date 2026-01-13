@extends('layouts.admin')
@section ('title',' Students Table')
@section('content')
  <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tutors Table</li>
                        </ol>
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span></span>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
  <i class="fas fa-plus"></i> Add New Tutor
</button>
        </div>
                            <div class="card-body">
                                <table id="datatablesSimple" border="1" cellpadding="8" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Tutor Id</th>
                                            <th>Name</th>
                                            <th>Bio</th>
                                            <th>Profile Img</th>
                                            <th>Start date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tiger Nixon</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button></td>  
                                        <tr>
                                            <td>2</td>
                                            <td>Garrett Winters</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ashton Cox</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button></td>
                                        </tr>
                                        <tr>
                                             <td>4</td>
                                            <td>Cedric Kelly</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button></td>
                                        </tr>
                                        <tr>
                                             <td>5</td>
                                            <td>Airi Satou</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Brielle Williamson</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Herrod Chandler</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<!-- Delete Tutor Modal -->
 <div class="modal fade" id="deleteModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        Are you sure you want to delete this item?
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Cancel
        </button>
        <button type="button" class="btn btn-danger">
          Yes, Delete
        </button>
      </div>

    </div>
  </div>
</div>


 <!-- Add Tutor Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add New Tutor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addTutorForm">
          <div class="mb-3">
            <label for="tutor_name" class="form-label">Tutor Name</label>
            <input type="text" name="name" id="tutor_name" class="form-control" placeholder="Enter tutor name" required>

            <label for="tutor_bio" class="form-label">Bio</label>
            <input type="text" name="bio" id="tutor_bio" class="form-control" placeholder="Enter bio" required>

            <label for="profile_img" class="form-label">Profile Img</label>
            <input type="file" name="profile_img" id="profile_img" class="form-control" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" form="addTutorForm" class="btn btn-success">Add Tutor</button>
      </div>
    </div>
  </div>
</div>


@endsection

