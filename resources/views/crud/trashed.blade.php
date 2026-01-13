<h1>Deleted Subjects</h1>

@if($deletedSubjects->isEmpty())
    <p>No deleted subjects found.</p>
@else
    <ul>
        @foreach($deletedSubjects as $subject)
            <li>{{ $subject->name }}
                @if(session('success'))
                {{session('success')}}
                @endif
                <form action="{{ route('crud.restore', $subject->id) }}" method="POST" >
                    @csrf
                    @method('PUT')
                    <button type="submit">Restore</button>
                </form>
            </li>
        @endforeach
    </ul>
@endif
