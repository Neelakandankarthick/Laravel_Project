<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
         body {
            background-color: #f5f5f5;
        }
        .container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-top: 6%;
        }
        .container:hover {
            background-color: #e7e7e7;
            box-shadow: 10px 10px 5px lightblue;
        }

        </style>
</head>
<body>

<div class="container">
    @csrf
    <h2 class="text-center" style="color: #428bca; font-family: 'Arial', sans-serif; font-weight: bold;">Customer Details</h2>
        @if (Session::has('delete'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('delete') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (Session::has('update'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('update') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->mobile_number }}</td>
                    <td>{{ $customer->gender }}</td>
                    <td>
                        <a href="{{ url('customer-edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ url('customer-delete', $customer->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-md-12 text-center">
        {{ $customers->links() }}
    </div>
</div>

</body>
</html>
