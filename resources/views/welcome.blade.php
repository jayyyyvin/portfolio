<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
  
  <title>Melgazo Portfolio</title>

  <link rel="shortcut icon" href="../homepage/assets/favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="../homepage/assets/css/themify-icons.css">
  
  <link rel="stylesheet" type="text/css" href="../homepage/assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="../homepage/assets/vendor/animate/animate.css">
  
  <link rel="stylesheet" type="text/css" href="../homepage/assets/vendor/owl-carousel/owl.carousel.css">
  
  <link rel="stylesheet" type="text/css" href="../homepage/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  
  <link rel="stylesheet" type="text/css" href="../homepage/assets/vendor/nice-select/css/nice-select.css">
  
  <link rel="stylesheet" type="text/css" href="../homepage/assets/vendor/fancybox/css/jquery.fancybox.min.css">
  
  <link rel="stylesheet" type="text/css" href="../homepage/assets/css/virtual.css">
  
  <link rel="stylesheet" type="text/css" href="../homepage/assets/css/topbar.virtual.css">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
      <!-- Puschase -->
      <div class="d-block">
        <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm" title="Get this template" data-toggle="tooltip" data-placement="left"><span class="ti-download"></span></a>
      </div>
      <!-- Help -->
      <div class="d-block">
        <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip" data-placement="left"><span class="ti-help"></span></a>
      </div>
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
      <select class="custom-select d-block my-2" id="change-page">
        <option value="">Choose Page</option>
        <option value="index">Topbar</option>
        <option value="blog-topbar">Blog (Topbar)</option>
        <option value="index-2">Minibar</option>
        <option value="blog-minibar">Blog (Minibar)</option>
      </select>
    </div>
  </div>
  
  <div class="vg-page page-home" id="home" style="background-image: url(../homepage/assets/img/wew.jpg)">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">Melgazo</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
          
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-animate="scrolling">About</a>
            </li>
            <li class="nav-item">
              <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
            </li>
            <li class="nav-item">
              <a href="#blog" class="nav-link" data-animate="scrolling">Blog</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link" data-animate="scrolling">Contact</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
          </ul>
          <ul class="nav ml-auto">
            <li class="nav-item">
         
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->
    
    <!-- Caption header -->
    @foreach($admin as $user)
    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Welcome</h5>
      <h1 class="fw-light mb-4">I'm <b class="fg-theme">Jay Alvin</b> Melgazo</h1>
      <div class="badge">{{ $user-> job}}</div>
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>
  
  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="img-place wow fadeInUp">
            <img src="../homepage/assets/img/jay.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight">
          <h1 class="fw-light">{{ $user-> name}}</h1>
          <h5 class="fg-theme mb-3">{{ $user-> job}}</h5>
          <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form but the majority have suffered alteration in some</p>
          <ul class="theme-list">
            <li><b>From:</b> Philippines</li>
            <li><b>Lives In:</b> {{ $user-> address}}</li>
            <li><b>Age:</b> {{ $user-> age}}</li>
            <li><b>Gender:</b> {{ $user-> gender}}</li>
            <li><b>Birthday:</b> {{ $user-> birthday}}</li>
            <li><b>Religion:</b> {{ $user-> religion}}</li>
            <li><b>Status:</b> {{ $user-> status}}</li>
            <li><b>Phone:</b> +{{ $user-> phone}}</li>
            <li><b>Email:</b> {{ $user-> email}}</li>
          </ul>
          
        </div>
      </div>
    </div>
    @endforeach

    <div class="container py-5">
      <h1 class="text-center fw-normal wow fadeIn">My Skills</h1>
      @foreach($skills as $skill) 
      <div class="row py-3">
        <div class="col-md-6">
          <div class="px-lg-3">
            <h4 class="wow fadeInUp">Coding skills</h4>
            
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">{{$skill->skill_name}}</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">{{$skill->percentage}}%</div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="col-md-6">
          <div class="px-lg-3">
            <h4 class="wow fadeInUp">Design Skills</h4>
            
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Web Design</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 99%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">99%</div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
     
    </div>
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-6 wow fadeInRight">
          <h2 class="fw-normal">Education</h2>
        @foreach($educations as $education )
          <ul class="timeline mt-4 pr-md-5">
            <li>
              <div class="title">{{$education->year_graduated}}</div>
              <div class="details">
                <h5>{{$education->grade_level}}</h5>
                <p>{{ $education->school }}</p>
              </div>
            </li>
          @endforeach
          </ul>
        </div>
        <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
          <h2 class="fw-normal">Experience</h2>
          @foreach($experiences as $experience )
          <ul class="timeline mt-4 pr-md-5">
            <li>
              <div class="title">{{$experience->date_hire}}</div>
              <div class="details">
                <h5>{{$experience->work_experience}}</h5>
                <small class="fg-theme">{{$experience->address}}</small>
                <p>{{$experience->description}}</p>
              </div>
            </li>
           @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="vg-page page-contact" id="contact">
    <div class="container-fluid">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Contact</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Get in touch</h1>
      <div class="row py-5">
        <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">
          <div class="vg-maps">
            <div id="google-maps" style="width: 100%; height: 100%;"></div>
          </div>
        </div>
       
        <div class="col-lg-5">
        <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="form-row">
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="name" placeholder="Your Name">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="email" placeholder="Email Address">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="subject" placeholder="Subject">
              </div>
              <div class="col-12 mt-3 wow fadeInUp">
                <textarea class="form-control" name="message" rows="6" placeholder="Enter message here.."></textarea>
              </div>
              <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- End Contact -->
  
  <!-- Footer -->
  @foreach($admin as $user)
  <div class="vg-footer">
    <h1 class="text-center">Melgazo Portfolio</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="footer-info">
            <p>Where to find me</p>
            <hr class="divider">
            <p class="fs-large fg-white">Barangay {{$user -> address}}, Philippines</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Follow me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li><a href="{{$user -> linkedin}}">Linked In</a></li>
              <li><a href="{{$user -> facebook}}">Facebook</a></li>
              <li><a href="{{$user -> instagram}}#">Instagram</a></li>
              <li><a href="{{$user -> youtube}}">Youtube</a></li>
              <li><a href="{{$user -> github}}">Github</a></li>
        
            </ul>
          </div>
        </div>
      
      </div>
      <div class="row justify-content-center mt-3">
       
       
        
      </div>
    </div>
  </div> <!-- End footer -->
  @endforeach
  
  <script src="../homepage/assets/js/jquery-3.5.1.min.js"></script>
    
  <script src="../homepage/assets/js/bootstrap.bundle.min.js"></script>
    
  <script src="../homepage/assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    
  <script src="../homepage/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    
  <script src="../homepage/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    
  <script src="../homepage/assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    
  <script src="../homepage/assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="../homepage/assets/vendor/wow/wow.min.js"></script>

  <script src="../homepage/assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="../homepage/assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="../homepage/assets/js/google-maps.js"></script>
    
  <script src="../homepage/assets/js/topbar-virtual.js"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>