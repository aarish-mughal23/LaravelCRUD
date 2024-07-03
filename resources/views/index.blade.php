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
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row border-top">
            <div class="col">
                <a href="{{Route('add')}}" class="btn btn-primary mt-2">Add New Item</a>
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
