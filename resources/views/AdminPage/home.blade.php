<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">
    <title>Admin - NCI</title>
</head>
<body>
    <div class="wrapper">
        @include('UserPage.Layouts.admin')
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Header </h2>
                 </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="admin-create"> Create </a>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td> <a type="button" class="btn btn-warning" href="admin-update">Edit</a>
            <a type="button" class="btn btn-danger">Delete</a></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td> <a href="admin-update" type="button" class="btn btn-warning">Edit</a>
             <a type="button" class="btn btn-danger">Delete</a></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td> <a href="admin-update" type="button" class="btn btn-warning">Edit</a>
            <a type="button" class="btn btn-danger">Delete</a></td>
        </tr>
        </tbody>
    </div>
</table>
</body>
</html>