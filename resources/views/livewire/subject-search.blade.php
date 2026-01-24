<div>

    <div class="row mb-5 justify-content-center">
        <div class="col-md-6 text-center">
            <h2 class="mb-4" style="color: #4C1D95; font-weight: bold;">Explore Subjects</h2>
            <input type="text"  wire:model.live.debounce.500ms="search" class="form-control search-input" placeholder="Search for a subject (e.g. Math)...">
        </div>
    </div>
  
    <div wire:loading class="text-center my-4">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

   
    <div class="row gy-5" wire:loading.remove>
        @forelse ($subjects as $subject)
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" wire:key="subject-{{ $subject->id }}">
                <div class="member-img">
                    <img src="{{ asset('assets/home/img/course-details.jpg') }}" class="img-fluid" alt="">
                </div>

                <div class="member-info text-center">
                    <h4>{{ $subject->name }}</h4>

                    <p>{{ $subject->bio }}</p>

                    <a href="{{ route('home.course_details', $subject->id) }}" class="btn btn-purple mt-2">
                        View Subject
                    </a>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>No Subjects found.</p>
            </div>
        @endforelse
    </div>


    @if($subjects->hasPages())
        <div class="mt-5">
            {{ $subjects->links() }}
        </div>
    @endif
</div>