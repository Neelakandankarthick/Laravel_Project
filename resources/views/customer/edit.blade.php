<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Edit</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-top: 50px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            color: #428bca;
        }
        .gender-checkbox {
            margin-top: 10px;
        }
        .btn-primary {
            background-color: #428bca;
            border: none;
            width: 100%;
            padding: 10px;
        }
        .btn-primary:hover {
            background-color: #3071a9;
        }
        .container:hover {
            background-color: #e7e7e7;
            box-shadow: 10px 10px 5px lightblue;
        }
    </style>
</head>
<body>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container mt-5">
    <h2 class="text-center" style="color: #428bca; font-family: 'Arial', sans-serif; font-weight: bold;">Edit Customer</h2>
    <form action="{{ url('customer-update') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$customer->id}}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$customer->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" value="{{ $customer->email  }}">
        </div>
        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
            <input type="text" name="mobile_number" class="form-control" value="{{ $customer->mobile_number }}">
        </div>
        <div class="form-group">
            <label>Gender</label>
            <div class="gender-checkbox">
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="gender[]" class="form-check-input" value="male" @if($customer->gender=='male')checked @endif>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="gender[]" class="form-check-input" value="female" @if($customer->gender=='female')checked @endif>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

</body>
</html>
