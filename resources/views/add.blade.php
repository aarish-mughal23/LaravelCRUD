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
            <form action="{{ Route() }}" method="post"></form>
            <div class="card p-4">
                <div class="row">
                    <div class="col-lg">
                        <h1 class="display-4">Add New Item</h1><hr>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg">
                        <label for="name" class="form-text">Enter Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg">
                        <label for="quantity" class="form-text">Enter Quantity</label>
                        <input type="text" name="quantity" id="quantity" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg">
                        <label for="price" class="form-text">Enter Price</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-8">
                        <button class="btn btn-primary" style="width:100%">Add</button>
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
