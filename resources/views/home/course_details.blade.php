@extends('layouts.home')
@section('title', 'Home Page')
@section('style')
<style>
  .btn-purple {
  background-color: #6f42c1 !important;
  border-color: #6f42c1 !important;
  color: #fff !important;
  width: 60%;
}

.btn-purple:hover {
  background-color: #5a32a3 !important;
  border-color: #5a32a3 !important;
  color: #fff;
}
</style>
@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Course Details</h1>
              <p class="mb-0">Explore everything you need to know about this course</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Course Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section">

      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="{{asset('assets/home/img/subject.png')}}" class="img-fluid" alt="{{$subject->name}}" >
            <h3>Subject description</h3>
            <p>
                {{-- {{$subject->description}} --}}
            </p>
          </div>
          <div class="col-lg-4">
               
              <div class="course-info d-flex justify-content-between align-items-center">
              <h5>{{$subject->name}}</h5>
            </div> 

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>tutor</h5>
              <div>
            @forelse($subject->tutors as $tutor)
              <p><a href="{{ route('home.tutor_profile', $tutor->id) }}">{{ $tutor->user->name }}</a></p>
            @empty
              <p class="text-muted">No tutors available.</p>
            @endforelse
          </div>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Price Per Hour</h5>
               <div>
            @forelse($subject->tutors as $tutor)
              <p>{{ $tutor->pivot->price_per_hour ?? 'N/A' }}</p>
            @empty
              <p class="text-muted">N/A</p>
            @endforelse
          </div>
            </div>
          <div class="text-center"   data-bs-toggle="modal" data-bs-target="#requestModal" style="margin-top:90% ;" >
        <a href="#" class="btn btn-purple">Book Now</a>
           </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Courses Course Details Section -->


<div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">Send Request to Tutor</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form id="requestForm" action="{{ route('home.book',$subject->id) }}" method="POST">
            @csrf
            <input type="hidden" name="tutor_id" value="{{ $tutor->id }}">
            <input type="hidden" name="student_id" value="{{ auth()->user()->id }}">
            
          <div class="mb-3">
    <label>Subject</label>
    <input type="text" class="form-control" value="{{ $subject->name }}" readonly>
    <input type="hidden" name="subject_id" value="{{ $subject->id }}">
</div>


    <div class="mb-3">
    <label>Select Tutor</label>
    <select name="tutor_id" class="form-control" required>
        @foreach($subject->tutors as $tutor)
            <option value="{{ $tutor->id }}">
                {{ $tutor->user->name }} — {{ $tutor->pivot->price_per_hour ?? 'N/A' }} JD/hr
            </option>
        @endforeach
    </select>
</div>
            {{-- <div class="mb-3">
                <label>Grade</label>
                <select name="grade_id" class="form-control" required>
                    @foreach($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach
                </select>
            </div> --}}

            <div class="mb-3">
                <label>Proposed Date & Time</label>
                <input type="datetime-local" name="proposed_datetime" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Notes</label>
                <textarea name="notes" class="form-control" rows="3"></textarea>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" style="background-color: #5a32a3; border:none;">Send Request</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>


     
@endsection