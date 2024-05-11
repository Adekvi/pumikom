<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="{{ asset('user/assets/images/logo-v3.png') }}" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section dropdown">
                <a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#visi">Visi</a>
                        <a class="dropdown-item" href="#misi">Misi</a>
                        <a class="dropdown-item" href="#struktur-organisasi">Struktur Organisasi</a>
                    </div>
                </li>                       
              {{-- <li class="scroll-to-section"><a href="#about">Profil</a></li> --}}
              <li class="scroll-to-section"><a href="#services">Regulasi</a></li>
              <li class="scroll-to-section dropdown">
                <a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#ukmk">UKMK</a>
                        <a class="dropdown-item" href="#fasilitator">Fasilitator</a>
                    </div>
                </li>
              <li class="scroll-to-section"><div class="border-first-button"><a href="{{ url('admin/dashboard') }}">Admin</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
</header>