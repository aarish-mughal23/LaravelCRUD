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
    <title>Add New Item</title>
</head>

<body>
    <div class="row d-flex content-align-center align-items-center vh-100">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="card p-4">
                <div class="row">
                    <div class="col-lg">
                        <h1 class="display-4">Confirm Delete</h1>
                        <hr>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg">
                        <h5 for="name" class="fw-light">ID: {{ $item->id }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg">
                        <h5 for="name" class="fw-light">Name: {{ $item->name }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg">
                        <h5 for="name" class="fw-light">Quantity: {{ $item->quantity }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg">
                        <h5 for="name" class="fw-light">Price: ${{ $item->price }}</h5>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-8">
                        <a href="{{ Route('deleteItem',$item->id) }}" class="btn btn-danger" style="width:100%">Delete</a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ Route('index') }}" class="btn btn-outline-dark" style="width:100%">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</body>

</html>

