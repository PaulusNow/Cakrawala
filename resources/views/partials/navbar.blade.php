<link rel="stylesheet" href="navbar/navbar.css">
 
 <!-- Navbar -->
 <div class="fContainer">
      <nav class="wrapper">
      <div class="brand">
        <img src="asset/logo.png" alt="user">
      </div>  
      <ul class="navigation">
          <li><a href="/" class= {{$title === "Beranda" ? 'active' : ''}}>Beranda</a></li>
          <li><a href="/about" class= {{$title === "Tentang Kami" ? 'active' : ''}}>Tentang Kami</a></li>
          <li><a href="/produk" class= {{$title === "Produk" ? 'active' : ''}}>Produk</a></li>
          <li><a href="/bantuan" class= {{$title === "Pusat Bantuan" ? 'active' : ''}}>Pusat Bantuan</a></li>
          <li><a href="/login"><img src="asset/icon.png" alt="user"></a></li>
        </ul>
      </nav>
    </div>
    <!-- End Navbar -->