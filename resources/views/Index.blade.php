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
    <table class="table table-bordered table-striped  table-dark  table-active">
        <thead>
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td >JD</td>
            <td>Designation</td>
            <td>emailid</td>
            <td>Sallery</td>

            <td colspan="2" class="text-center">action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->jd}}</td>
                <td>{{$item->designation}}</td>
                <td>{{$item->emailid}}</td>
                <td>{{$item->sallery}}</td>

                <td><a href="{{route('edit',['id'=>$item])}}" class="btn btn-warning">edit</a></td>
                <td><a href="{{route('delete',['employee_detail'=>$item->id])}}" class="btn btn-danger">delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
