<nav class="navbar navbar-expand-lg bg-danger border-bottom border-bottom-dark fixed-top" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laravel zer05</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('contacts')}}">Contact us</a>
        </li>
        
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="fa-brands fa-xbox"></i></a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="fa-brands fa-playstation"></i></a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-gamepad"></i></a>
            </li> 
        </ul>
    </div>
  </div>
</nav>