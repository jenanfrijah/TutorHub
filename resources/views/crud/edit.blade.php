
<h1>Edit Subject</h1>
@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<form action="{{route('crud.update',$subject->id)}}" method="POST">
@csrf
@method('PUT')
Name: <input  value="{{$subject->name}}" type="text" name="name">
@error('name')
<p>{{ $message }}</p>
@enderror


<br><br>
Description:<textarea   name="description" id="desc" cols="30" rows="10">{{$subject->description}} </textarea>
<br><br>
<button type="submit">Update Subject</button>
</form>
