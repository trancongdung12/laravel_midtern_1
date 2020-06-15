<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Home</title>
</head>
<body>
    @include('partials/header')
      <div class="container">
          @foreach ($tour as $item)
          <div class="item">
          <img src="storage/{{$item->image}}" alt="" height="300px" width="348px">
                <div class="top-title">
                    <div class="day">{{$item->depart}}</div>
                    <div class="from">{{$item->typetour}}</div>
                </div>
                <div class="title">
                    {{$item->name}}
                </div>
                <div class="bottom-title">

                    <i class="far fa-clock"></i> Lịch trình: {{$item->shedule}}<br>
                    <i class="fas fa-calendar-plus"></i> Khởi hành: {{$item->depart}}<br>
                    <i class="far fa-user"></i> Số chỗ còn nhận: {{$item->number}}<br>
                <p class="price">{{$item->getFormatedMoney()}}</p>
                </div>
            </div>
          @endforeach

      </div>
</body>
</html>
