@extends('layout.main')
@section('landing-page')
    
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="landing-page/landing_page.css">
    <title>SEVENKOS | Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

        
        <div class="card2">

            {{-- navbar --}}
            
      
            <div class="card" style=" height:300px; width:100%;  background: linear-gradient(90deg, rgba(83, 104, 118, 0.8) 0%, rgba(41, 46, 73, 0.8) 100%); border:0; border-radius:0px 0px 5px 0px;">
              <div class="card-body">
                <div class="logo" style="display: flex; font-size:12px; margin-left:30px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 41 44" fill="none">
                    <path d="M20.1075 21.1273C20.2458 21.0877 20.4871 21.0614 20.8153 21.0482C21.0887 21.0383 21.4233 21.0416 21.5552 21.0548C21.6871 21.068 21.8834 21.1042 21.9895 21.1339C22.0957 21.1602 22.2308 21.1898 22.2887 21.1964C22.3434 21.203 22.456 21.2392 22.5365 21.2755C22.6169 21.3117 22.6844 21.338 22.6909 21.3315C22.6941 21.3282 22.7649 21.3545 22.8421 21.3874C22.9225 21.4237 23.0673 21.4895 23.1638 21.5389C23.2603 21.5851 23.3858 21.6542 23.4373 21.6871C23.4887 21.7201 23.656 21.8321 23.8008 21.9309C23.952 22.0362 24.2255 22.2734 24.4217 22.4776C24.6148 22.6752 24.8464 22.9419 24.9333 23.0704C25.0201 23.1988 25.1553 23.4195 25.2325 23.5644C25.3129 23.7093 25.4126 23.9168 25.4545 24.0255C25.4995 24.1342 25.5638 24.312 25.6636 24.6183L39.4428 24.6348V44H1.28687V25.3922H7.46389L7.47997 37.6602L33.298 37.6767V27.6318H25.5445L25.477 27.7865C25.4416 27.8755 25.3451 28.0764 25.2646 28.241C25.1842 28.4057 25.0941 28.5671 25.0652 28.6033C25.033 28.6395 24.959 28.7449 24.8979 28.8404C24.8368 28.9327 24.6212 29.1797 24.4185 29.3871C24.2158 29.5946 23.9585 29.8285 23.8459 29.9075C23.7333 29.9865 23.5885 30.0854 23.5241 30.1249C23.4598 30.1644 23.3858 30.2105 23.3665 30.2303C23.344 30.25 23.3182 30.2665 23.3086 30.2665C23.2989 30.2665 23.2442 30.2928 23.1895 30.3225C23.1316 30.3554 23.0383 30.3982 22.9869 30.418C22.9354 30.441 22.7681 30.5036 22.6169 30.5629C22.4657 30.6189 22.308 30.6716 22.263 30.6782C22.218 30.6848 22.0539 30.7177 21.893 30.7539C21.6485 30.8099 21.5037 30.8165 20.96 30.8099C20.4807 30.8033 20.2683 30.7868 20.1236 30.744C20.0174 30.7144 19.8951 30.6848 19.8501 30.6782C19.8051 30.6716 19.6603 30.6255 19.5284 30.5794C19.3965 30.53 19.2356 30.4707 19.1745 30.4443C19.1134 30.4147 18.9557 30.3389 18.8302 30.2731C18.7016 30.2072 18.5954 30.1413 18.5954 30.1249C18.5954 30.1117 18.5793 30.1018 18.5632 30.1018C18.5471 30.1018 18.4474 30.0458 18.3477 29.98C18.2447 29.9141 18.0324 29.7395 17.8747 29.5913C17.7171 29.4464 17.4887 29.2093 17.3696 29.0644C17.2538 28.9195 17.093 28.6988 17.0157 28.5704C16.9353 28.4419 16.8098 28.2147 16.7359 28.0599C16.6619 27.9051 16.5975 27.7503 16.5879 27.7141C16.5814 27.6779 16.5557 27.6021 16.5299 27.5494C16.5042 27.4967 16.4688 27.4045 16.456 27.3518C16.4431 27.2991 16.427 27.23 16.4238 27.2036C16.4206 27.1773 16.3884 27.0587 16.3562 26.9401C16.308 26.759 16.2983 26.6075 16.2983 25.9357C16.2983 25.2737 16.308 25.109 16.3562 24.9312C16.3884 24.8126 16.4206 24.6874 16.4238 24.6512C16.427 24.615 16.4431 24.5491 16.456 24.503C16.472 24.4569 16.5042 24.368 16.5299 24.3054C16.5589 24.2428 16.5814 24.1737 16.5846 24.1572C16.5879 24.1407 16.6651 23.9662 16.7584 23.7686C16.8485 23.5743 16.9385 23.4096 16.9546 23.3997C16.9707 23.3898 16.9804 23.3668 16.9707 23.3503C16.9611 23.3339 16.9643 23.3174 16.9771 23.3174C16.9932 23.3174 17.035 23.2614 17.0737 23.1955C17.1123 23.1264 17.1734 23.0407 17.2088 23.0045C17.2474 22.9683 17.2796 22.9222 17.2796 22.9057C17.2796 22.8892 17.4565 22.6949 17.6721 22.4776C17.9337 22.2141 18.1772 22.0066 18.4024 21.8551C18.589 21.73 18.7627 21.6213 18.7884 21.6114C18.8142 21.6015 18.8914 21.5587 18.9589 21.5159C19.0233 21.4731 19.078 21.4467 19.078 21.4566C19.078 21.4665 19.152 21.4368 19.2388 21.3907C19.3289 21.3446 19.3997 21.315 19.3997 21.3249C19.3997 21.3348 19.4737 21.3117 19.5605 21.2755C19.6506 21.2392 19.76 21.203 19.8083 21.1964C19.8597 21.1898 19.9917 21.1569 20.1075 21.1273Z" fill="#FAF4F4"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4936 0C20.5032 0 25.1263 4.72275 30.7661 10.4961C36.4058 16.2728 41.0128 21.0054 41 21.0219C40.9871 21.035 39.0343 21.0449 32.3489 21.0449L20.4968 8.90868L8.65426 21.0449H4.32713C1.46383 21.0449 0 21.035 0 21.012C0 20.9955 1.14211 19.8099 5.08317 15.7754V9.4521H11.2441L15.8608 4.72605C18.3992 2.12754 20.4839 0 20.4936 0Z" fill="#FAF4F4"/>
                  </svg>
                  <div class="seven" style="display: flex; margin-top:4px; margin-left:5px; color:white;">SEVEN<div class="kos" style="color: #FC6767;">KOS</div></div>
                </div>
                  <br>
                  <br>
                <h1 style="margin-left: 30px; color:white;">SEVEN<span style="color: #FC6767">KOS</span></h1>
                <p style="font-size:20px; width:250px; margin-left:30px; color:white;">Temukan Hunian Nyaman 
                        dengan Mudah!</p>
                        <br>
     
                <nav class="navbar">
                    
                    
                    <div class="container-fluid" style="background-color: white; margin-left:30px; border-radius:5px;">
                      <form class="d-flex" role="search">
                        <input class="input-search" type="search" placeholder="Nama Kos/Lokasi" aria-label="Search" style=" border:0; margin:5px; ">
                        <button class="btn btn-outline-success" type="submit" style="margin:5px; padding:5px 50px 5px 50px; background: linear-gradient(90deg, rgba(83, 104, 118, 0.8) 0%, rgba(41, 46, 73, 0.8) 100%); border:0; color:white;">Cari</button>
                      </form>
                    </div>
                  </nav>
              </div>
            </div>
       
          <div class="flex" >
              <div class="navbar" style="display: flex; justify-content: space-between; margin-top:10px;">
                <div class="navbar-card1">
                <a href="{{ route('landing.page.home') }}" style=" margin-left:15px; color: #FC6767; padding:5px;" class="navbar-a"><u>Home</u></a> <a href="{{ route('daftar.kos') }}" style="text-decoration:none; margin-left:40px; color:black" class="navbar-a">Kos</a>
              </div>
              <div class="navbar-card2">
                <a href="" style="text-decoration:none;  margin-right:40px; color:black" class="navbar-a">Login</a><a href="" style="text-decoration:none; margin-right:40px; background: linear-gradient(90deg, rgba(83, 104, 118, 0.8) 0%, rgba(41, 46, 73, 0.8) 100%); padding:5px; border-radius:5px; color:white" class="navbar-a">Register</a>
              </div>
              </div>
            <div class="coba" style="display: flex;">
        <div class="col-sm-5" style="margin: 1px 10px 5px 20px;">
            <div class="card">
                <img src="assets/Rectangle 9.png" class="card-img" alt="gambar">
                <div class="card-img-overlay">
                  <br>
                  <br>
                  <br>
                  <br>
               
                  <h5 class="card-title" style="color: white;">Kost Cozy Haven</h5>
                  <p class="card-text" style="color: white;">Yogyakarta</p>
                  <p class="card-text" style="color: white;"><small>1.700.000/Bulan</small></p>
                </div>
              </div>

              
        </div>
        <div class="col-sm-5" style="margin: 1px;">
           
            <div class="card">
                <img src="assets/Rectangle 9 (2).png" class="card-img" alt="gambar">
                <div class="card-img-overlay">
                  <br>
                  <br>
                  <br>
                  <br>
                 
                  <h5 class="card-title" style="color: white;">Kost Cozy Haven</h5>
                  <p class="card-text" style="color: white;">Yogyakarta</p>
                  <p class="card-text"><small style="color: white;">1.700.000/Bulan</small></p>
                </div>
              </div>

        </div>
    </div>

    </div>

    
        </div>

    {{-- card info --}}
    <div class="container-info" style="border-top: 3px solid #FC6767; border-left: 3px solid #FC6767; margin: 40px; border-radius: 10px 0px; padding:10px 0px 0px 10px;">
        <div class="info">
        <h3 style="color: #FC6767">Tentang kami</h3>
        <p>
            Kami adalah tim yang berdedikasi untuk membantu Anda 
            menemukan tempat kost ideal. Dengan pengalaman dan 
            pengetahuan dalam industri perumahan, kami berkomitmen 
            untuk menyediakan layanan pencarian kost yang efisien dan akurat, 
            membantu Anda meraih kenyamanan tempat tinggal yang Anda cari
            <br>
            <br>
            
            <a href="#" class="button" style="background-color: rgba(67, 64, 93, 1); padding:5px; border-radius:5px; text-decoration:none; color:white; font-size:13px;">Selengkapnya</a>
        </p>
      
    </div>
    <div class="card-kos">
      <div class="card-kos1">
        <h2 style="position: absolute; margin-top:100px; margin-left:50px; text-align:center; color:white; ">12K+</h2>
        <p style="position: absolute; margin-top:150px; text-align:center; color:white; margin-left:10px;">Kos untuk di tinggali</p>
      <img src="assets/rectangle 12.png" alt="gambar" id="gambar1" >
    </div>
      <div class="card-kos1">
        <h2 style="position: absolute; margin-top:100px; margin-left:50px; text-align:center; color:white; ">1000+</h2>
        <p style="position: absolute; margin-top:150px; text-align:center; color:white; margin-left:10px;">wilayah di indonesia</p>
      <img src="assets/rectangle 12 (1).png" alt="gambar" id="gambar1" >
    </div>
      <div class="card-kos1">
        <h2 style="position: absolute; margin-top:100px; margin-left:50px; text-align:center; color:white; ">100%</h2>
        <p style="position: absolute; margin-top:150px; text-align:center; color:white; margin-left:5px;">tanpa biaya tambahan</p>
      <img src="assets/rectangle 12 (2).png" alt="gambar" id="gambar1" >
    </div>
      <div class="card-kos1">
        <h2 style="position: absolute; margin-top:100px; margin-left:50px; text-align:center; color:white; ">100%</h2>
        <p style="position: absolute; margin-top:150px; text-align:center; color:white; margin-left:5px;">tempat aman dan nyaman</p>
      <img src="assets/rectangle 12 (3).png" alt="gambar" id="gambar1" >
    </div>

    </div>
    </div>
    <h4 style="margin-left: 40px;">Rekomendasi Kost di <span style="color: #FC6767">YOGYAKARTA</span></h4>

    {{--  rekomendasi --}}

    <div class="container-info-rekomendasi" style="border-left: 3px solid #FC6767; border-bottom: 3px solid #FC6767;   border-radius: 0px 10px; padding:10px 0px 0px 10px; margin:0px 40px; 0px 40px;">
      <div class="info" style=" width:300px;">
        <p style="margin-bottom: 25px;"><a href="" >Saturan</a></p>
        <p style="margin-bottom: 20px;"><a href="" >Babarsari</a></p>
        <p style="margin-bottom: 25px;"><a href="" >Condong Catur</a></p>
        <p style="margin-bottom: 25px;"><a href="" >Demangan</a></p>
        <p style="margin-bottom: 30px;"><a href="" >Taman Siswa</a></p>
        <p style="margin-bottom: 0px;"><a href="" >Maguwoharjo</a></p>
  </div>
  <div class="coba" style="display: flex; margin-right:40px;">
    <div class="col-sm-3" style="margin: 5px;">
        <div class="card">
            <img src="assets/Rectangle 9 (4).png" class="card-img" alt="gambar">
            <div class="card-img-overlay">
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
           
              <h5 class="card-title" style="color: white;">Kost Cozy Haven</h5>
              <p class="card-text" style="color: white;">Yogyakarta</p>
              <p class="card-text" style="color: white;"><small>1.700.000/Bulan</small></p>
            </div>
          </div>

    </div>
    <div class="col-sm-3" style="margin: 5px;">
       
        <div class="card">
            <img src="assets/Rectangle 9 (5).png" class="card-img" alt="gambar">
            <div class="card-img-overlay">
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
             
              <h5 class="card-title" style="color: white;">Kost Cozy Haven</h5>
              <p class="card-text" style="color: white;">Yogyakarta</p>
              <p class="card-text"><small style="color: white;">1.700.000/Bulan</small></p>
            </div>
          </div>
    </div>
    <div class="col-sm-3" style="margin: 5px;">
       
        <div class="card">
            <img src="assets/Rectangle 9 (6).png" class="card-img" alt="gambar">
            <div class="card-img-overlay">
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
             
              <h5 class="card-title" style="color: white;">Kost Cozy Haven</h5>
              <p class="card-text" style="color: white;">Yogyakarta</p>
              <p class="card-text"><small style="color: white;">1.700.000/Bulan</small></p>
            </div>
          </div>
    </div>
    <div class="col-sm-3" style="margin: 5px;">
       
        <div class="card">
            <img src="assets/Rectangle 9 (7).png" class="card-img" alt="gambar">
            <div class="card-img-overlay">
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
             
              <h5 class="card-title" style="color: white;">Kost Cozy Haven</h5>
              <p class="card-text" style="color: white;">Yogyakarta</p>
              <p class="card-text"><small style="color: white;">1.700.000/Bulan</small></p>
            </div>
          </div>
    </div>
</div>
  
  </div>

  {{-- cari kos --}}
  <div class="bottom-cari-kos">
    <p>
      <h4 style="margin: 20px; color:white; padding-top:20px;">Cari <span style="color: #FC6767">Kost</span>  Berdasarkan Apa Yang Anda Inginkan
      </h4>
    </p>
    <div class="container-cari-kos" style="display: flex">
      {{-- fasilitas kamar --}}
      <div class="kamar" style="border-right: 3px solid #FC6767; margin:10px; color:white; margin-left:5px">Fasilitas Kamar
        <br>
        <input type="checkbox" class="btn-check" id="btn-check-4" checked autocomplete="off">
<label class="btn" for="btn-check-4">Lemari Baju</label>

        <input type="checkbox" class="btn-check" id="btn-check-5" checked autocomplete="off">
<label class="btn" for="btn-check-5">K.Mandi Dalam</label>

        <input type="checkbox" class="btn-check" id="btn-check-6" checked autocomplete="off">
<label class="btn" for="btn-check-6">termaksud Listrik</label>

        <input type="checkbox" class="btn-check" id="btn-check-7" checked autocomplete="off">
<label class="btn" for="btn-check-7">kursi</label>
        <input type="checkbox" class="btn-check" id="btn-check-8" checked autocomplete="off">
<label class="btn" for="btn-check-8">Ac</label>
        <input type="checkbox" class="btn-check" id="btn-check-9" checked autocomplete="off">
<label class="btn" for="btn-check-9">kloset Duduk</label>
        <input type="checkbox" class="btn-check" id="btn-check-10" checked autocomplete="off">
<label class="btn" for="btn-check-10">Bantal</label>
        <input type="checkbox" class="btn-check" id="btn-check-11" checked autocomplete="off">
<label class="btn" for="btn-check-11">Kasur</label>
      </div>

      {{-- fasilitas bersama --}}
      <div class="bersama" style="border-right: 3px solid #FC6767; margin:10px; color:white;">Fasilitas Bersama
        <br>

        <input type="checkbox" class="btn-check" id="btn-check-12" checked autocomplete="off">
        <label class="btn" for="btn-check-12">WIFI</label>
        
                <input type="checkbox" class="btn-check" id="btn-check-13" checked autocomplete="off">
        <label class="btn" for="btn-check-13">Laundry</label>
        
                <input type="checkbox" class="btn-check" id="btn-check-14" checked autocomplete="off">
        <label class="btn" for="btn-check-14">Parkir Mobil</label>
        
                <input type="checkbox" class="btn-check" id="btn-check-15" checked autocomplete="off">
        <label class="btn" for="btn-check-15">Parkir Motor</label>
                <input type="checkbox" class="btn-check" id="btn-check-16" checked autocomplete="off">
        <label class="btn" for="btn-check-16">Penjaga Kost</label>
                <input type="checkbox" class="btn-check" id="btn-check-17" checked autocomplete="off">
        <label class="btn" for="btn-check-17">Dapur</label>
                <input type="checkbox" class="btn-check" id="btn-check-18" checked autocomplete="off">
        <label class="btn" for="btn-check-18">Mesin Cuci</label>

      </div>

      {{-- aturan kos --}}
      <div class="kost" style="color:white; margin-left:5px">Aturan Kost
        <br>

        <input type="checkbox" class="btn-check" id="btn-check-19" checked autocomplete="off">
        <label class="btn" for="btn-check-19">Akses 24 jam</label>
        
                <input type="checkbox" class="btn-check" id="btn-check-20" checked autocomplete="off">
        <label class="btn" for="btn-check-20">Pet Friendly</label>
        
                <input type="checkbox" class="btn-check" id="btn-check-21" checked autocomplete="off">
        <label class="btn" for="btn-check-21">Boleh Pasutri</label>
        
                <input type="checkbox" class="btn-check" id="btn-check-22" checked autocomplete="off">
        <label class="btn" for="btn-check-22">TV</label>
                <input type="checkbox" class="btn-check" id="btn-check-23" checked autocomplete="off">
        <label class="btn" for="btn-check-23">Khusus Mahasiswa</label>
                <input type="checkbox" class="btn-check" id="btn-check-24" checked autocomplete="off">
        <label class="btn" for="btn-check-24">Khusus Karyawan</label>
                <input type="checkbox" class="btn-check" id="btn-check-25" checked autocomplete="off">
        <label class="btn" for="btn-check-25">Maksimal 2 Orang</label>

      </div>
      <button style="margin: 10px; border:0;   background-color: #FC6767;  border-radius: 5px; ">Cari</button>

    </div>

  </div>

  {{-- KOS SEKITAR KAMPUS --}}
  <h4 style=" margin-left:40px; display:flex; justify-content: space-between;"><span>Kos Sekitar <span style="color: #FC6767; ">Kampus</span></span><a href="" style="color: #FC6767; text-decoration:none; margin-right:40px; font-size:15px;">Lihat semua</a></h4>

  

<div class="card-image-kampus">

  <div class="card text-bg-dark" style="margin: 5px;">
    <img src="assets/rectangle 81.png" class="card-img" alt="image-kampus">
    <div class="card-img-overlay">
      <h3><center>Telkom Universitas</center></h3>
    </div>
  </div>

  <div class="card text-bg-dark" style="margin: 5px;">
    <img src="assets/rectangle 81 (1).png" class="card-img" alt="image-kampus">
    <div class="card-img-overlay">
      <h3><center>Universitas Indonesia</center></h3>
    </div>
  </div>
  <div class="card text-bg-dark" style="margin: 5px;">
    <img src="assets/rectangle 81 (2).png" class="card-img" alt="image-kampus">
    <div class="card-img-overlay">
      <h3><center>Universitas Brawijaya</center></h3>
    </div>
  </div>
  <div class="card text-bg-dark" style="margin: 5px;">
    <img src="assets/rectangle 85.png" class="card-img" alt="image-kampus">
    <div class="card-img-overlay">
      <h3><center>Universitas gajah Mada</center></h3>
    </div>
  </div>

</div>


  </body>
</html>
@endsection