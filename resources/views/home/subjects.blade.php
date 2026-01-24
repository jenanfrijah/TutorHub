@extends('layouts.home')

@section('title', 'Subjects')
@section('styles')
<style>
  .btn-purple {
  background-color: #6f42c1 !important;
  border-color: #6f42c1 !important;
  color: #fff !important;
  width: 40%;
}

.btn-purple:hover {
  background-color: #5a32a3 !important;
  border-color: #5a32a3 !important;
  color: #fff;
}

</style>
@endsection
@section('content')

<!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Subjects</h1>
              <p class="mb-0">  Explore our Subjects and learn at your own pace with guidance from expert trainers.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Subjects</li>
          </ol>
        </div>
      </nav>
    </div>
  <!-- End Page Title -->

    <!-- Subjects Section -->
    <section id="courses" class="courses section">
  <div class="row mb-5 justify-content-center">
      <div class="col-lg-10 mx-auto">
   <livewire:subject-search />
</div>
      </div>

    </section><!-- /Subjects Section -->

@endsection