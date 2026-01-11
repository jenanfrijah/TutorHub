@extends('layouts.admin')
@section ('title',' Grades Table')
@section('content')
  <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"git><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Grades Table</li>
                        </ol>
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
        <span><i class="me-1"></i></span>
        <button class="btn btn-success ms-5" data-bs-toggle="modal" data-bs-target="#addModal">
            <i class="fas fa-plus"></i> Add Grade
        </button>
        </div>
                            <div class="card-body">
                                <table id="datatablesSimple" border="1" cellpadding="8" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Grade Id</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Grade 1</td>
                                            <td>2011/04/25</td>
                                            <td> 
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"> 
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Grade 2</td>
                                            <td>2011/10/21</td>
                                            <td> 
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"> 
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Grade 3</td>
                                            <td>2004/09/7</td>
                                            <td> 
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"> 
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>4</td>
                                            <td>Grade 4</td>
                                            <td>2019/03/2</td>
                                            <td> 
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"> 
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Grade 5</td>
                                            <td>2015/08/9</td>
                                            <td> 
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"> 
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Grade 6</td>
                                            <td>2018/07/3</td>
                                            <td> 
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"> 
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                          <td>7</td>
                                            <td>Grade 7</td>
                                            <td>2014/02/15</td>
                                            <td> 
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"> 
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                     </div>
                    </div>
                </div>

  <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          Are you sure you want to delete this item?
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Cancel
          </button>
          <button type="button" class="btn btn-danger">
            Yes, Delete
          </button>
        </div>

      </div>
    </div>
  </div>   

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Grade</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form id="editGradeForm">
            <div class="mb-3">
              <label for="edit_grade_name" class="form-label">Grade Name</label>
              <input type="text" class="form-control" id="edit_grade_name">
            </div>
          </form>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Cancel
          </button>
          <button type="submit" form="editGradeForm" class="btn btn-primary">
            Save Changes
          </button>
        </div>

      </div>
    </div>
  </div>

 
    <!-- Add Grade Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add New Grade</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addGradeForm">
                        <div class="mb-3">
                            <label for="grade_name" class="form-label">Grade Name</label>
                            <input type="text" name="name" id="grade_name" class="form-control" placeholder="Enter grade name" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="addGradeForm" class="btn btn-success">Add Grade</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>