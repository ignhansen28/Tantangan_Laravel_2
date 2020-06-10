<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Create Employee</title>
</head>
<body>
<div class="container">
<h1>Add a New Employee</h1>
    <form action="{{route('employee.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Employee Name</label>
                <input type="text" name="employee_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Company Name</label>
                <select name="employee_company" class = "form-control" id="">
                @foreach ($companies as $comp)
                <option value="{{$comp->id}}">{{$comp->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Employee's Age</label>
                <input type="number" name="employee_age" class="form-control" id="exampleInputPassword1">
            </div>
        <button type="submit" class="btn btn-primary" a href="/">Submit</button>
        <a href="/" class="btn btn-danger ">Return</a>
      
       
    </form>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>

