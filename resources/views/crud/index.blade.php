<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
<h1>Subjects Table</h1>
<form action="{{ route('crud.index') }}" method="GET">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search subjects...">
    <button type="submit">Search</button>
</form>
</form>
<a href="{{route('crud.create')}}">Add new Subject</a>
<table border="1" cellpadding="5">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
@if(session('success'))
<p>{{ session('success') }}</p>
@endif
     @foreach ($subjects as $subject)
         <tr>
            <td>{{$subject->id}}</td>
            <td>{{$subject->name}}</td>
            <td>{{$subject->description}}</td>
         <td>
         <a href="{{route('crud.edit',$subject->id)}}">Edit</a>

         <form action="{{route('crud.destroy',$subject->id)}}" method="POST">
             @csrf
             @method('DELETE')
             <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
         </form>
        </td>
        </tr>
     @endforeach
    </tbody>
</table>

{{ $subjects->links('pagination::bootstrap-4') }}

 
</body>
</html>
