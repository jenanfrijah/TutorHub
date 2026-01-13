
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>   
    @if(session('success'))
<p>{{ session('success') }}</p>
@endif
<h1>Add New Subject</h1>
<form action="{{route('crud.store')}}" method="POST" >
    @csrf
    Name: <input type="text" name="name">
    <br>
    @error('name')
<p>{{ $message }}</p>
@enderror

    Description: <textarea name="description"></textarea>
    <br>
    <button type="submit">Add Subject</button>
</form>

</body>
</html>
