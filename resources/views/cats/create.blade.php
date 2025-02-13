<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new cat</title>
</head>
<body>
    <h1>Add new cat</h1>
    <form action="{{ route('cats.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="breed">Breed</label>
        <input type="text" name="breed" id="breed">
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age">
        <br>
        <label for="color">Color</label>
        <input type="text" name="color" id="color">
        <br>
        <button type="submit">Save</button>
</body>
</html>
