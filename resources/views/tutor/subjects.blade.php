@extends('layouts.tutor')
@section('title','Subjects Table')
@section('content')
  <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                             <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Subjects Table</li>
                        </ol>
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">               
      <div class="card-header d-flex justify-content-between align-items-center">
        <span></span>
           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
  <i class="fas fa-plus"></i> Add New Subject
</button>
        </div>
         <div class="card-body">
                                <table id="datatablesSimple" border="1" cellpadding="8" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Subject Id</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>System Architecture</td>
                                            <td>2011/04/25</td>
                                            <td> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal"> <i class="fas fa-edit"></i> Edit</button>
                                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Wireless</td>
                                            <td>2011/10/21</td>
                                            <td> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal"> <i class="fas fa-edit"></i> Edit</button>
                                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Simulation</td>
                                            <td>2004/09/7</td>
                                             <td> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal"> <i class="fas fa-edit"></i> Edit</button>
                                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>4</td>
                                            <td>data structure</td>
                                            <td>2019/03/2</td>
                                             <td> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal"> <i class="fas fa-edit"></i> Edit</button>
                                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Theory</td>
                                            <td>2015/08/9</td>
                                            <td> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal"> <i class="fas fa-edit"></i> Edit</button>
                                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Java</td>
                                            <td>2018/07/3</td>
                                            <td> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal"> <i class="fas fa-edit"></i> Edit</button>
                                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                          <td>7</td>
                                            <td>OOP</td>
                                            <td>2014/02/15</td>
                                            <td> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal"> <i class="fas fa-edit"></i> Edit</button>
                                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                     </div>
                    </div>
                </div>
<!-- Delete Subject Modal -->
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

<!-- Edit Subject Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Edit Subject</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Subject Name</label>
            <input type="text" class="form-control" >
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Cancel
        </button>
        <button type="submit" class="btn btn-primary">
          Save Changes
        </button>
      </div>

    </div>
  </div>
</div>

<!-- Add Subject Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add New Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addSubjectForm">
          <div class="mb-3">
            <label for="subject_name" class="form-label">Subject Name</label>
            <input type="text" name="name" id="subject_name" class="form-control" placeholder="Enter Subject name" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" form="addSubjectForm" class="btn btn-success">Add Subject</button>
      </div>
    </div>
  </div>
</div>
@endsection

