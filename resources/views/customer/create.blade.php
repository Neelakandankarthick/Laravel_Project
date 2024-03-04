<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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
            background-color: #0c72ca;
            border: none;
            width: 100%;
            padding: 10px;
        }
        .btn-primary:hover {
            background-color: #1389f0;
        }
        .custom-file-input:lang(en)~.custom-file-label::after {
            content: "Browse";
        }
        .container:hover {
            background-color: #e7e7e7;
            box-shadow: 10px 10px 5px lightblue;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center" style="color: #428bca; font-family: 'Arial', sans-serif; font-weight: bold;">Customer Registration</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('customer-save') }}" method="POST" enctype="multipart/from-data">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
            <input type="text" name="mobile_number" class="form-control" value="{{ old('mobile_number') }}">
        </div>

        <div class="form-group">
            <label for="image">Image Upload</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>

        <div class="form-group">
            <label>Gender</label>
            <div class="gender-checkbox">
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="gender[]" class="form-check-input" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="gender[]" class="form-check-input" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

</body>
</html>
