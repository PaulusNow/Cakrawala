@extends('layouts.main')

@section('container')
<!-- My CSS -->
<link rel="stylesheet" href="css/index.css">

<!-- Card #1-->
<div class="card">
  <div class="btncard">
    <img src="asset/button.png" alt="...">
  </div>
  <img src="asset/card_new.png" alt="...">
</div>
<!-- End Card #1-->

<!-- Card #2 -->
<div class="cardinfo">
  <h1>pilih kendaraan bersama kami</h1>
</div>
<div class="cardisi">
  <p>Kami menawarkan beragam layanan dan jenis kendaraan yang dapat disesuaikan dengan kebutuhan Anda, mulai dari sewa kendaraan jangka pendek dan panjang untuk keperluan operasional bisnis hingga sewa mobil harian dengan pengemudi maupun lepas kunci sesuai dengan kebutuhan pribadi Anda</p>
</div>
<!-- End Card #2 -->

<!-- Card Isi -->
<div class="text1">
  <h1>MPV</h1>
  <h1>TRAVEL</h1>
</div>
<div class="Ccontainer">
  <div class="c1">
    <img src="asset/mobil1.png" alt="...">
    <p>Mobil berjenis MPV yang diproduksi oleh Toyota yang dirancang untuk mampu mengangkut 7 orang penumpang</p>
    <div class="btnsewa1">  
      <a href="#">Sewa Sekarang</a>
    </div>
  </div>
  <div class="c2">
    <img src="asset/mobil2.png" alt="...">
    <p>Mobil travel yang memiliki ruangan serta kenyamanan cukup, keleluasaan kabin Toyota Hiace yang mampu memuat hingga 16 penumpang</p>
    <div class="btnsewa2">  
      <a href="#">Sewa Sekarang</a>
    </div>
  </div>
</div>

<div class="btnarmada">
  <a href="#">Lihat Semua Armada <img src="asset/arrow.png" alt=""></a>
</div>

<div class="review">
  <h1>Pencapaian Kami Untuk <br> Memberikan Layanan Terbaik</h1>
</div>

<div class="reviewcon">
  <div class="reviewcard">
    <div class="reviewcardcontent">
      <h1>Louis Maxi</h1>
      <img src="asset/user1.png" alt="...">
      <div class="star-icon">
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
      </div>
      <p>Pelayanan sangat ramah, supir handal segala medan</p>
    </div>
  </div>
  <div class="reviewcard">
    <div class="reviewcardcontent">
      <h1>Yoseph Hakim</h1>
      <img src="asset/user2.png" alt="...">
      <div class="star-icon2">
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
      </div>
      <div class="testimoni1">
        <p>Harga termasuk jauh lebih murah dari pada rentcar lain, mantap pokoknya</p>
      </div>
    </div>
  </div>
  <div class="reviewcard">
    <div class="reviewcardcontent">
      <h1>Aldo</h1>
      <img src="asset/user3.png" alt="...">
      <div class="star-icon3">
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
      </div>
      <span>Mobil bisa lepas kunci, sangat recomended</span>
    </div>
  </div>
</div>

<?= include('footer/footer.php') ?>
@endsection