@extends('layouts.main')

@section('container')
  <link href="https://fonts.googleapis.com/css2?family=Karla&family=Poppins:wght@600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link rel="stylesheet" href="css/login.css">

<div class="lcontainer">
    <p>Mari bergabung bersama Kami untuk  <br> solusi Terbaik Perjalanan Anda!</p>
    <img src="asset/t_login.png" alt="">
    <div class="card-login">
      <h1>Halaman Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="email" name="email"required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pass" required>
          <span></span>
          <label>Kata Sandi</label>
        </div>
          <div class="forget">Lupa Sandi?</div>
          <button type="submit" class="btn btn-outline-dark" style="width: 73%">Masuk</button>
        </form>
        <div class="atau">
          Atau
        </div>
       <button type="submit" class="btn btn-outline-dark" style="width: 65%"><i class="fa-brands fa-google"></i> Masuk Dengan Google</button>
        <div class="signup">
          Tidak punya akun? <a href="/register">Buat Sekarang</a>
        </div>
      </div>
    </div>
  </div>
@endsection