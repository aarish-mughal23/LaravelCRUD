<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Laravel CRUD</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col">
                <h1 class="display-1">CRUD Application</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-hover table-dark rounded-4">
                    <thead>
                        <tr>
                            <th class="display-5 fs-4">ID</th>
                            <th class="display-5 fs-4">Name</th>
                            <th class="display-5 fs-4">Quantity</th>
                            <th class="display-5 fs-4">Price Per Item</th>
                            <th class="display-5 fs-4">Options</th>

                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td><a href="{{ route('view', $item->id) }}">   
                                        {{ $item->name }}
                                    </a>
                                </td>
                                <td>{{ $item->quantity }}</td>
                                <td>${{ $item->price }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <a style="width:100%;" class="btn btn-warning"
                                                href="{{ route('update', $item->id) }}">Edit</a>
                                        </div>
                                        <div class="col">
                                            <a style="width:100%;" class="btn btn-danger"
                                                href="{{ route('delete', $item->id) }}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    <div class="alert alert-danger fst-italic m-0">
                                        No Items saved yet.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row border-top">
            <div class="col">
                <a href="{{ route('add') }}" class="btn btn-primary mt-2">Add New Item</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="#" class="btn btn-success mt-2">Perform One Time Database Setup</a>
            </div>
        </div>
    </div>
</body>

</html>

</html>
