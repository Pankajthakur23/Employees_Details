<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class=""></div>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-dark text-white text-center p-3">
                    <h2>Employees Create Form</h2>
                </div>
    <form action="{{route('store')}}" method="post">

        @csrf

        <label for="">Enter name</label>
        <input type="text" name="name" placeholder="enter name" class="form-control">
        @error('name')
        <span style="color:red;">{{$message}}</span>
        @enderror

        <label for="">Enter age</label>
        <input type="text" name="age" placeholder="enter  age" class="form-control">
        @error('age')
        <span style="color:red;">{{$message}}</span>
        @enderror

        <label for="">Enter jd</label>
        <input type="date" name="jd" placeholder="enter jd" class="form-control">
        @error('jd')
        <span style="color:red;">{{$message}}</span>
        @enderror

        <label for="">Enter designation</label>
        <input type="text" name="designation" placeholder="enter designation" class="form-control">
        @error('designation')
        <span style="color:red;">{{$message}}</span>
        @enderror

        <label for="">Enter student emailid</label>
        <input type="text" name="emailid" placeholder="enter student emailid" class="form-control">
        @error('emailid')
        <span style="color:red;">{{$message}}</span>
        @enderror

        <label for="">Enter sallery</label>
        <input type="text" name="sallery" placeholder="enter sallery" class="form-control">
        @error('sallery')
        <span style="color:red;">{{$message}}</span>
        @enderror

        <input type="submit" class="btn btn-warning" value="create">



    </form>
</div>

</body>
</html>
