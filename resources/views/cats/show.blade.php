<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $cat->name }}</title>
</head>
<body>
    <h1>{{ $cat->name }}</h1>
    <a href="{{ route('cats.index') }}">Back to cats</a>
    <br>
    <img src="{{ $cat->image_url }}" alt="{{ $cat->name }}" width="200">
    <p>Breed: {{ $cat->breed }}</p>
    <p>Age: {{ $cat->age }}</p>
    <p>Color: {{ $cat->color }}</p>
    <p>Created at: {{ $cat->created_at }}</p>
    <p>Updated at: {{ $cat->updated_at }}</p>
    <a href="{{ route('cats.edit', $cat->id) }}">Edit</a>
    <form action="{{ route('cats.destroy', $cat->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
