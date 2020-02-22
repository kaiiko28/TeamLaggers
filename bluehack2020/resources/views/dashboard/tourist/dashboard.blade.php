


@extends('layouts.app')
@section('style')
    <style>
        * { box-sizing: border-box; }

        .grid:after {
            content: '';
            display: block;
            clear: both;
        }

        .grid-item {
            width: auto;
            height: 200px;
            float: left;
            background: #00997B;
            border: 1px solid #333;
            border-color: hsla(0, 0%, 0%, 0.5);
            border-radius: 5px;
            margin: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="banner-info">
        <div class="banner-logo text-center" style="background:url('{{ asset('/img/bg/banner.jpg') }}');background-size:cover;background-attachment:fixed;background-position:bottom;">
            <div class="banner-text text-center " style="background: rgba(0, 0, 0, 0.42);color:#fff;height:100%">
                <div class="context-holder py-5">
                    <h1 class="white">Your Tagline Here</h1>
                    <p>Some text for discription</p>
                </div>
            </div>
        </div>
        
    </div>
    
    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Bookings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
            aria-selected="false">Profile</a>
        </li>
      </ul>
      <div class="tab-content mt-5" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            
            <div class="container">
                
            <table class="table table-responsive-lg text-nowrap table-bordered" style="width:100%">
                <tr>
                    <th>Schedule</th>
                    <th>Destination</th>
                    <th>Special Request</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @if (count($booking) > 0)
                    @foreach ($booking as $book)
                        <tr>
                            <td>
                                Date: {{date( 'M d, Y', strtotime($book->date))}} <br>
                                Time: {{$book->time}} <br>
                            </td>
                            <td>
                                From: {{$book->from}} <br>
                                To: {{$book->to}}
                            </td>
                            
                            <td>
                                {{$book->note}} 
                            </td>
                            <td>
                                <span class="badge 
                                @if($book->status == 'pending') 
                                badge-warning 
                                @elseif($book->status == 'approve') 
                                badge-success 
                                @else 
                                badge-danger 
                                @endif">{{$book->status}} </span>
                                
                            </td>
                            <td>
                            
                            <a href="{{ route('book.edit') . '?id=' . $book->id }}"><button type="button" class="btn btn-warning px-3"><i class="fas fa-pen" aria-hidden="true"></i></button></a>
                            <a href="#"><button type="button" class="btn btn-danger px-3"><i class="fas fa-trash" aria-hidden="true"></i></button></a>

                            </td>
                        </tr>
                    @endforeach
                @endif  
            </table>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container">
                <div class="grid">
                    <img class="grid-item" src="https://www.investopedia.com/thmb/ImL1yAoeYuFWFcR6ClHYkxYWKVs=/735x0/x_best_beach_towns_in_the_philippines-5bfc3429c9e77c0026b69a30.jpg" alt="">
                    <img class="grid-item" src="https://usercontent1.hubstatic.com/14633042_f520.jpg" alt="">
                    <img class="grid-item" src="https://sgp1.digitaloceanspaces.com/tz-mag-ph/wp-content/uploads/2018/04/030304040808/image8-770x578.png" alt="">
                    <img class="grid-item" src="https://files.tripstodiscover.com/files/2018/02/El-Nido-Palawan.jpg" alt="">
                    <img class="grid-item" src="https://dynaimage.cdn.cnn.com/cnn/q_auto,w_412,c_fill,g_auto,h_232,ar_16:9/http%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F140210175738-philippines-best---el-nido.jpg" alt="">
                    <img class="grid-item" src="https://www.investopedia.com/thmb/ImL1yAoeYuFWFcR6ClHYkxYWKVs=/735x0/x_best_beach_towns_in_the_philippines-5bfc3429c9e77c0026b69a30.jpg" alt="">
                    <img class="grid-item" src="https://usercontent1.hubstatic.com/14633042_f520.jpg" alt="">
                    <img class="grid-item" src="https://sgp1.digitaloceanspaces.com/tz-mag-ph/wp-content/uploads/2018/04/030304040808/image8-770x578.png" alt="">
                    <img class="grid-item" src="https://files.tripstodiscover.com/files/2018/02/El-Nido-Palawan.jpg" alt="">
                    <img class="grid-item" src="https://dynaimage.cdn.cnn.com/cnn/q_auto,w_412,c_fill,g_auto,h_232,ar_16:9/http%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F140210175738-philippines-best---el-nido.jpg" alt="">
                
                    <img class="grid-item" src="https://www.investopedia.com/thmb/ImL1yAoeYuFWFcR6ClHYkxYWKVs=/735x0/x_best_beach_towns_in_the_philippines-5bfc3429c9e77c0026b69a30.jpg" alt="">
                    <img class="grid-item" src="https://usercontent1.hubstatic.com/14633042_f520.jpg" alt="">
                    <img class="grid-item" src="https://sgp1.digitaloceanspaces.com/tz-mag-ph/wp-content/uploads/2018/04/030304040808/image8-770x578.png" alt="">
                    <img class="grid-item" src="https://files.tripstodiscover.com/files/2018/02/El-Nido-Palawan.jpg" alt="">
                    <img class="grid-item" src="https://dynaimage.cdn.cnn.com/cnn/q_auto,w_412,c_fill,g_auto,h_232,ar_16:9/http%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F140210175738-philippines-best---el-nido.jpg" alt="">
                
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4" style="background:#ccc;">
                        <div class="profile-pic">
                            <img src="https://www.vippng.com/png/detail/96-960867_computer-icons-user-profile-avatar-person.png" class="mt-2" style="width:100%" alt="">
                        </div>
                    
                        <div class="profile">
                            <table class="table table-responsive">
                            <tr><th>First name</th> <td>{{Auth::user()->firstname}}</td>
                                </tr>
                                <tr><th>Last name</th> <td>{{Auth::user()->lastname}}</td>
                                </tr>
                                <tr><th>Phone number</th> <td>---</td>
                                </tr>
                                <tr><th>Date of birth</th> <td>---</td>
                                </tr>
                                <tr><th>Address</th> <td>---</td>
                                </tr>
                                <tr><th>Email</th> <td>{{Auth::user()->email}}</td>
                                </tr>
                                <tr><th>Country</th> <td> --- </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-8 text-center">
                        <!--Section: Live preview-->
                    <section class="form-dark">

                        <!--Form without header-->
                        <div class="card">
                        <div class="rgba-stylish-strong py-5 px-5 z-depth-4">
                    
                            <!--Header-->
                            <div class="text-center">
                                <h3 class="mb-5 mt-4 font-weight-bold"><strong>EDIT</strong> <a
                                class="green-text font-weight-bold"><strong> PROFILE</strong></a></h3>
                            </div>
                    
                            <!--Body-->
                            <div class="row">
                                <div class="md-form col-sm-6">
                                    <input type="text" id="firstname" class="form-control ">
                                    <label for="firstname">First Name</label>
                                </div>
                                
                                <div class="md-form col-sm-6">
                                    <input type="text" id="lastname" class="form-control ">
                                    <label for="lastname">last Name</label>
                                </div>

                                <div class="md-form col-sm-12">
                                    <input type="text" id="address" class="form-control ">
                                    <label for="address">Address</label>
                                </div>
                                
                                <div class="md-form col-sm-6">
                                    <input type="text" id="mobile" class="form-control ">
                                    <label for="mobile">Mobile Number</label>
                                </div>
                                
                                <div class="md-form col-sm-6">
                                    <input type="text" id="email" class="form-control ">
                                    <label for="email">Email Address</label>
                                </div>

                                <div class="md-form col-sm-3">
                                    <input type="date" id="bday" class="form-control ">
                                    <label for="bday">Birthday</label>
                                </div>

                                <div class="md-form col-sm-4">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="female" name="gender" value="female">
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                                    
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="male" name="gender" value="male">
                                        <label class="custom-control-label" for="male">Male</label>
                                    </div>
                                    
                                </div>

                                <div class="md-form col-sm-5">
                                    <input type="text" id="country" class="form-control ">
                                    <label for="bday">Country</label>
                                </div>
                            </div>
                    
                        </div>
                        </div>
                        <!--/Form without header-->
                    
                    </section>
                    <!--Section: Live preview-->
                    </div>
                </div>
            </div>

        </div>
      </div>
    
@endsection