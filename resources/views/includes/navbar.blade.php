<!-- Navbar -->
<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
  <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Menu Pencarian -->
          <!-- <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
              <div class="form-group mb-0">
                  <div class="input-group input-group-alternative input-group-merge">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-search"></i></span>
                      </div>
                      <input class="form-control" placeholder="Search" type="text">
                  </div>
              </div>
              <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </form> -->
          <!-- End Menu Pencarian -->

          <!-- Nav Icon -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
              <li class="nav-item d-xl-none">
                  <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                      <div class="sidenav-toggler-inner">
                          <i class="sidenav-toggler-line"></i>
                          <i class="sidenav-toggler-line"></i>
                          <i class="sidenav-toggler-line"></i>
                      </div>
                  </div>
              </li>
              <li class="nav-item d-sm-none">
                  <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                      <i class="ni ni-zoom-split-in"></i>
                  </a>
              </li>
          </ul>
          <!-- End Nav Icon -->

          <!-- Nav Profile -->
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
              <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media align-items-center">
                          <span class="avatar avatar-sm rounded-circle">
                              <img alt="Image" placeholder=" " style="border-radius: 50%; !important" src="{{ url('backend/assets/img/brand/garut.png') }}"></span>
                          <div class=" media-body ml-2 d-none d-lg-block">
                              <span class="mb-0 text-sm  font-weight-bold"> {{ Auth::user()->name }} </span>
                          </div>
                      </div>
                  </a>
                  <div class="dropdown-menu  dropdown-menu-right ">
                      <div class="dropdown-header noti-title">
                          <h6 class="text-overflow m-0">Selamat Datang !</h6>
                      </div>
                      <div class="dropdown-divider"></div>
                      
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="ni ni-user-run"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            


                      <!-- <form action="{{  url('logout') }}" method="POST"> -->
                <!-- @csrf 
                
                <button  type="submit"><i class="ni ni-user-run"></i>Logout</button> -->
            
                      
                      <!-- </form> -->
                  </div>
              </li>
          </ul>
          <!-- End Nav Profile -->
      </div>
  </div>
</nav>
<!-- End Navbar -->