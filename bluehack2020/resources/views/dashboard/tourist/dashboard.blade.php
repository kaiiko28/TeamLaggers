<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tourist</title>
    <link rel="stylesheet" href="{{ asset('/mdb/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('/mdb/css/bootstrap.min.css')}}">
    <script src="{{ asset('/mdb/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('/mdb/js/bootstrap.js')}}"></script>
    <script src="{{asset('/mdb/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
<body>
    <nav style="background:pink;" class="navbar navbar-expand-lg navbar-dark primary-color">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Tourist</a>
      
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
      
          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
      
            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
      
          </ul>
          <!-- Links -->
      
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->
      
      </nav>
      {{-- <div style="text-align:center;">
        <h1>---Hello Mara---</h1>
        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium fugiat eaque et dicta, aliquid excepturi dolor ut, vel dolorum impedit nisi voluptas corrupti earum rerum officiis quidem exercitationem? Labore?</h3>
      </div>
      <div style="background:pink;">
        <ul style="background:pink;" class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#booking" role="tab" aria-controls="home"
                aria-selected="true">Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Gallery" role="tab" aria-controls="profile"
                aria-selected="false">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Profile" role="tab" aria-controls="contact"
                aria-selected="false">Profile</a>
            </li>
        </ul>
        <div id="booking" style="align:center">
            <div class="col-sm-6" style="background:red;color:white;text-align:center;">
            <p>DEC</p>
            </div>
          </div>
      </div> --}}
      <div style="text-align:center;">
        <h1>---Hello Mara---</h1>
        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium fugiat eaque et dicta, aliquid excepturi dolor ut, vel dolorum impedit nisi voluptas corrupti earum rerum officiis quidem exercitationem? Labore?</h3>
      </div>
      <ul style="background:pink;" class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="booking-tab-md" data-toggle="tab" href="#booking-md" role="tab" aria-controls="booking-md"
            aria-selected="true">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="gallery-tab-md" data-toggle="tab" href="#gallery-md" role="tab" aria-controls="gallery-md"
            aria-selected="false">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab" aria-controls="profile-md"
            aria-selected="false">Profile</a>
        </li>
      </ul>
      <div class="tab-content card pt-5" id="myTabContentMD">
        <div class="tab-pane fade show active" id="booking-md" role="tabpanel" aria-labelledby="booking-tab-md">
          <div class="row">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <div style="background:red;color:white; text-align:center;">
                        <p>Dec</p>
                    </div>
                    <div style="text-align:center;background:;">
                        <h1>23</h1>
                        <h5>SAT</h5>
                    </div>
                    <div>
                        <button style="width:100%;background:lightblue;">
                            Edit
                        </button><br>
                        <button style="width:100%;background:gray;">
                            Cancel
                        </button>
                    </div>
                </div>
                <div class="col-sm-4">

                </div>
           </div>
        </div>
        <div class="tab-pane fade" id="gallery-md" role="tabpanel" aria-labelledby="gallery-tab-md">
          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
            Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko
            farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip
            jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna
            delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan
            fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry
            richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus
            tattooed echo park.</p>
        </div>
        <div class="tab-pane fade" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">
          <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo
            retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer,
            iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
            Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles
            pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of
            them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
        </div>
      </div>
     
</body>
</html>