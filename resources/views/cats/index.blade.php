<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cats is life</h1>
    <a href="{{ route('cats.create') }}">Create new cat</a>

    <table border="1">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Breed</th>
                <th>Age</th>
                <th>Color</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cats as $cat)
                <tr>
                    <td>
                        <img src="{{ $cat->image_url }}" alt="{{ $cat->name }}" width="100">
                    </td>
                    <td><a href="{{ route('cats.show', $cat->id) }}">{{ $cat->name }}</td>
                    <td>{{ $cat->breed }}</td>
                    <td>{{ $cat->age }}</td>
                    <td>{{ $cat->color }}</td>
                    <td>
                        {{--<a href="{{ route('cats.show', $cat->id) }}">Show</a>--}}
                        <a href="{{ route('cats.edit', $cat->id) }}">Edit</a>
                        <form action="{{ route('cats.destroy', $cat->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No cats found</td>
                </tr>
            @endforelse
        </tbody>
</body>
</html>
