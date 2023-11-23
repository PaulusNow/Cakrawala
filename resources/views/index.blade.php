<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cakrawala Trans</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/index.css">

    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="font/GarnetCapitals-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <!-- End Font -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  </head>
  <body>
    <?php
      include('navbar/navbar.php');
    ?>

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

    <!-- End Card Isi -->

    <!-- Footer -->
    <?php include('footer/footer.php') ?>
    <!-- End Footer -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
  </body>
</html>