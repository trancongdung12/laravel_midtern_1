<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="https://static.tuoitre.vn/tto/i/s626/2011/12/27/rxr20OFA.jpg" alt="" height="100px" width="200px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">DU LỊCH <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">BOOK VÉ MÁY BAY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">BOOK VÉ MÁY BAY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">BOOK KHÁCH SẠN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">DỊCH VỤ VISA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">THUÊ XÊ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">TIN TỨC</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">GIỚI THIỆU</a>
              </li>

          </ul>
        </div>
      </nav>
      <div class="container">
          @foreach ($tour as $item)
          <div class="item">
          <img src="storage/{{$item->image}}" alt="" height="300px" width="350px">
                <div class="top-title">
                    <div class="day">{{$item->depart}}</div>
                    <div class="from">{{$item->typetour}}</div>
                </div>
                <div class="title">
                    {{$item->name}}
                </div>
                <div class="bottom-title">

                    Lịch trình: {{$item->shedule}}<br>
                    Khởi hành: {{$item->depart}}<br>
                    Số chỗ còn nhận: {{$item->number}}<br>
                    <p class="price">{{number_format($item->price)}} đ</p>
                </div>
            </div>
          @endforeach

      </div>
</body>
</html>
