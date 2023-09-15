@extends('layout.main')
@section('detail_kos')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing-page/detail_kos.css">
</head>
<body>
  {{-- detail foto kos --}}
  <div style="display: flex;padding:10px 40px; position: relative;">

  <div class="container-jojo">
    <img class="image-jojo" src="assets/Rectangle 88.png" alt="Gambar">
</div>
  <div class="container-jojo1">
    <img class="image-jojo" src="assets/Rectangle 89.png" alt="Gambar">
</div>
  <div class="container-jojo2">
    <img class="image-jojo" src="assets/Rectangle 90.png" alt="Gambar">
    <div class="image-text">
      Kost Cozy Haven
      <p style="color: #FC6767; font-size:20px;">Yogyakarta</p>
    </div>
</div>

</div>
{{-- end --}}

  {{-- fasilitas kos --}}
  <div class="fasilitas-kos" >
      <h4>Fasilitas <span style="color: #FC6767">Kost</span></h4>

    {{-- <div class="container-cari-kos" style="display: flex;"> --}}

      {{-- fasilitas kamar --}}
      <div class="Fkamar">Fasilitas Kamar
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
      <div class="Fbersama">Fasilitas Bersama
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
      <div class="Akost" style="margin-left:5px">Aturan Kost
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

      {{-- form cord sewa --}}
      <form action="" method="post">

      {{-- card sewa --}}
      <div class="card-sewa" style="text-align: center;">
        <p style="font-size: 20px; margin:5px">Rp 1.700.000<span style="color:#FC6767;">/Bulan</span></p>
        
        <div style="display: flex;">
        <input type="date" name="" id="" >
        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background: rgba(41, 46, 73, 0.50);">
            Per Bulan
          </button>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item">
              <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Per Bulan
              </button>
              </a></li>
            <li><a class="dropdown-item">
              <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Per 3 Bulan
              </button>
              </a></li>
            <li><a class="dropdown-item">
              <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Per 6 Bulan
              </button>
              </a></li>
            <li><a class="dropdown-item">
              <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Per 1 Tahun
              </button>
              </a></li>
          </ul>
        </div>
      </div>
        <div class="collapse " id="collapseExample" style="margin:0; padding:0;">
            <table style=" text-align:start;">
              <tr >
                <td colspan="2">Jika Kamu Bayar Menggunakan DP :</td>
              </tr>
              <tr>
                <td>Uang Muka (DP) :</td>
                <td>Rp 1.500.000</td>
              </tr>
              <tr>
                <td style="border-bottom: 2px solid #FC6767">Pelunasan :</td>
                <td style="border-bottom: 2px solid #FC6767">Rp 1.500.000</td>
              </tr>
              <tr>
                <td colspan="2">Jika Kamu Bayar Penuh :</td>
              </tr>
              <tr>
                <td style="border-bottom: 2px solid #FC6767">Pembayaran Penuh :</td>
                <td style="border-bottom: 2px solid #FC6767">Rp 1.500.000</td>
              </tr>
              <tr>
                <td>Total Pembayaran Pertama :</td>
                <td>Rp 1.500.000</td>
              </tr>

            </table>
         
        </div>
        <br>
        <div class="d-grid gap-2">
          <button class="btn" type="button" style="background: rgba(41, 46, 73, 0.50);  font-size: 13px;"><a href="" style="font-size: 13px;">Tanya Pemilik</a></button>
          <button class="btn" type="button" style=" background-color: #FC6767; font-size: 13px;">Ajukan Sewa</button>
        </div>
      </div>
    </form>
     {{-- end form --}}

    {{-- </div> --}}

    {{-- table tempat terdekat --}}
    <table>
      <tr>
         <th>
        Tempat <span style="color: #FC6767">Terdekat</span>
      </th>
      <th></th>
      </tr>
      <tr>
        <td>Universitas Gajah Mada</td>
        <td style="color: #FC6767">1.2km</td>
      </tr>
      <tr>
        <td>Indomaret</td>
        <td style="color: #FC6767">500m</td>
      </tr>
      <tr>
        <td>Cicle K</td>
        <td style="color: #FC6767">200m</td>
      </tr>
    </table>
    {{-- end --}}
            {{-- tentang kos --}}
            <div class="tentang-kos">
              <p>Tentang <span style="color: #FC6767">Kos</span></p>
              <p>
                Kost Eksklusif, Lift, Finger print/Access card, kapasitas parkir 50 mobil, dan keamanan 24 jam (cctv).
              </p>
            </div>
              {{-- end --}}

  </div>
  {{-- end --}}
  {{-- kamu mungkin menyukainya --}}
 
  <div class="card-scroll-container">
    <h4>Kamu Mungkin <span style="color: #FC6767;">menyukainya</span></h4>
    <div class="card-scroll">
      
        <div class="col-sm-3" style="margin: 5px;">
            <div class="card">
                <img src="assets/Rectangle 9 (4).png" class="card-img" alt="gambar">
                <a href="{{ route('detail-kos')}}">
                <div class="card-img-overlay">
                  <p style="text-align:end;"><span style="background-color: #FC6767; padding:5px; border-radius:5px; color:white;">Campur</span></p>
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
              </a>
            </div>
        </div>
        <div class="col-sm-3" style="margin: 5px;">
            <div class="card">
                <img src="assets/Rectangle 9 (4).png" class="card-img" alt="gambar">
                <a href="{{ route('detail-kos')}}">
                <div class="card-img-overlay">
                  <p style="text-align:end;"><span style="background-color: #FC6767; padding:5px; border-radius:5px; color:white;">Campur</span></p>
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
              </a>
            </div>
        </div>
        <div class="col-sm-3" style="margin: 5px;">
            <div class="card">
                <img src="assets/Rectangle 9 (4).png" class="card-img" alt="gambar">
                <a href="{{ route('detail-kos')}}">
                <div class="card-img-overlay">
                  <p style="text-align:end;"><span style="background-color: #FC6767; padding:5px; border-radius:5px; color:white;">Campur</span></p>
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
              </a>
            </div>
        </div>
        <div class="col-sm-3" style="margin: 5px;">
            <div class="card">
                <img src="assets/Rectangle 9 (4).png" class="card-img" alt="gambar">
                <a href="{{ route('detail-kos')}}">
                <div class="card-img-overlay">
                  <p style="text-align:end;"><span style="background-color: #FC6767; padding:5px; border-radius:5px; color:white;">Campur</span></p>
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
              </a>
            </div>
        </div>
        <div class="col-sm-3" style="margin: 5px;">
            <div class="card">
                <img src="assets/Rectangle 9 (4).png" class="card-img" alt="gambar">
                <a href="{{ route('detail-kos')}}">
                <div class="card-img-overlay">
                  <p style="text-align:end;"><span style="background-color: #FC6767; padding:5px; border-radius:5px; color:white;">Campur</span></p>
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
              </a>
            </div>
        </div>
        <div class="col-sm-3" style="margin: 5px;">
            <div class="card">
                <img src="assets/Rectangle 9 (4).png" class="card-img" alt="gambar">
                <a href="{{ route('detail-kos')}}">
                <div class="card-img-overlay">
                  <p style="text-align:end;"><span style="background-color: #FC6767; padding:5px; border-radius:5px; color:white;">Campur</span></p>
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
              </a>
            </div>
        </div>
        
    </div>
</div>
{{-- end --}}
<script src="landing-page/style.js"></script>

</body>
</html>

@endsection