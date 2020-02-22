<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="{{ asset('/mdb/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('/mdb/css/bootstrap.min.css')}}">
    <script src="{{ asset('/mdb/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('/mdb/js/bootstrap.js')}}"></script>
    <script src="{{asset('/mdb/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
</head>
<body>
    @extends('layouts.app')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('/img/subic-bay-philippines-volcano.jpg')}}"
              alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/img/shutterstock_634025597.jpg')}}"
              alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/img/Phillippines_text.jpg')}}"
              alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="container">
          <div>
              <h1 style="text-align:center;">About</h1>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id veritatis praesentium laboriosam rerum, perferendis itaque totam explicabo exercitationem nam delectus mollitia labore saepe cumque deleniti libero ducimus architecto amet? Vel! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi totam corporis est error eos odit itaque, consequuntur quibusdam repellendus nulla id facere quis dolorum quos consectetur veritatis. Corporis, dolor suscipit.</p>
          </div>
          <div>
              <h3>Language</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus laborum voluptatibus dolorem voluptatem alias quo possimus impedit ut! Eaque tempore nulla, dolores corporis esse voluptatem optio commodi iste aspernatur dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio natus eius, nam dolorum amet impedit possimus, explicabo quod provident quam ratione harum velit dolores dolorem ipsa quibusdam voluptatibus animi aperiam!</p>
              <button class="btn btn-success" onclick="window.location.href='/dictionary'">Dictionary</button>
          </div>
          <div>
              <h3>Transportation</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim libero, facilis voluptas alias molestiae quasi totam voluptate illo eius perferendis maxime ut nostrum amet similique soluta. Officia maiores mollitia quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum deserunt facere quisquam impedit quis minus accusamus repellat! Accusantium unde delectus, soluta culpa nobis odio quas, ullam qui, quisquam assumenda molestias?</p>
          </div>
          <button class="btn btn-success" onclick="window.location.href='/trans'">Transportation</button>
      </div>
      <div class="container">
        <div class="row blog">
            <div class="col-md-12">
                <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="{{asset('/img/kalabaw1.jpg')}}" alt="Image" style="width:200px;height:200px;">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="{{asset('/img/kalesa1.jpg')}}" alt="Image" style="width:200px;height:200px;">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="{{asset('/img/etrik2.jpg')}}" alt="Image" style="width:200px;height:200px;">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="{{asset('/img/habal1.jpg')}}" alt="Image" style="width:200px;height:200px;">
                                    </a>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="{{asset('/img/banka1.jpg')}}" alt="Image" style="width:200px;height:200px;">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="{{asset('/img/kalabaw5.jpg')}}" alt="Image" style="width:200px;height:200px;">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="{{asset('/img/kalesa2.jpg')}}" alt="Image" style="width:200px;height:200px;">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="{{asset('/img/kalabaw2.jpg')}}" alt="Image" style="width:200px;height:200px;">
                                    </a>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                    </div>
                    <!--.carousel-inner-->
                </div>
                <!--.Carousel-->

            </div>
        </div>
</div>
<script>$('#blogCarousel').carousel({
    interval: 5000
});</script>
</body>

</html>