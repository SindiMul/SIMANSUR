<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ url('backend/assets/img/brand/sistem.png') }}" class="navbar-brand-img" alt="..." style="
            width: 200px;
            height: 325px;
            object-fit: cover;
          ">
        </a>
      </div>
      <div class="navbar-inner">
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Nav items -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{route ('dashboard')}}">
            <i class="ni ni-tv-2 text-primary"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('surat-masuk.index')}}">
            <i class="fas fa-envelope text-primary"></i>
            <span class="nav-link-text">Surat Masuk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('surat-keluar.index')}}">
            <i class="fas fa-envelope-open-text text-primary"></i>
            <span class="nav-link-text">Surat Keluar</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="examples/tables.html">
            <i class="fas fa-book text-primary"></i>
            <span class="nav-link-text">Buku Agenda</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('surat-tugas.index')}}">
            <i class="ni ni-key-25 text-info"></i>
            <span class="nav-link-text">Surat Tugas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('data-petugas.index')}}">
            <i class="ni ni-key-25 text-info"></i>
            <span class="nav-link-text">Data Petugas</span>
          </a>
        </li>
      </ul>
      <!-- Divider -->
      <hr class="my-3">
      <!-- Heading -->
      <h6 class="navbar-heading p-0 text-muted">
        <span class="docs-normal">Data Master</span>
      </h6>
      <!-- <div class="navbar-inner">
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Nav items -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{route ('data-pegawai.index')}}">
          <i class="fas fa-user-alt text-primary"></i>
            <span class="nav-link-text">Data Pegawai</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('surat-masuk.index')}}">
          <i class="fas fa-circle text-primary"></i>
            <span class="nav-link-text">Golongan</span>
          </a>
        </li>
        
      <!-- Navigation -->
      <!-- <ul class="navbar-nav mb-md-3"> -->
        <li class="nav-item">
          <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Getting started</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  
</div>
</nav>