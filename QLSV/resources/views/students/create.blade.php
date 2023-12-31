<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a new Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<form action="{{route('students.store')}}" method="POST" class="mt-5 ms-5 col-6">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name ="name" class="form-control col-5" required>
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input type="text" name ="name" class="form-control col-5" required>
        </div>
        <div class="form-group">
            <label for="name">Phone Number</label>
            <input type="text" name ="name" class="form-control col-5" required>
        </div>

        

        <div class="form-group">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>