<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    <h1>Edit Cat</h1>

    <form action="{{ route('cats.update', $cat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $cat->name }}">
        <br>
        <label for="breed">Breed</label>
        <input type="text" name="breed" value="{{ $cat->breed }}">
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" value="{{ $cat->age }}">
        <br>
        <label for="color">Color</label>
        <input type="text" name="color" value="{{ $cat->color }}">
        <br>
        <button type="submit">Update</button>
</body>
</html>
