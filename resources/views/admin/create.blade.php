<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <style>
        .alert{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Add tours</h1>
    <div class="container">
        <form action="/tour" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                @error('name')
                    <div class="alert">{{$message}}</div>
                @enderror
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
                @error('image')
                <div class="alert">{{$message}}</div>
                @enderror
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="form-group">
                @error('type')
                <div class="alert">{{$message}}</div>
                @enderror
                <label for="exampleInputEmail1">Typetour</label>
                <input type="text" name="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                @error('schedule')
                <div class="alert">{{$message}}</div>
                 @enderror
                <label for="exampleInputEmail1">Schedule</label>
                <input type="text" name="schedule" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                @error('depart')
                <div class="alert">{{$message}}</div>
                @enderror
                <label for="exampleInputEmail1">Depart</label>
                <input type="text" name="depart" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                @error('number')
                <div class="alert">{{$message}}</div>
                @enderror
                <label for="exampleInputEmail1">Number</label>
                <input type="text" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                @error('price')
                <div class="alert">{{$message}}</div>
                @enderror
                <label for="exampleInputEmail1">Price</label>
                <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
    </div>
</body>
</html>
