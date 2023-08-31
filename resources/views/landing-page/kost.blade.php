@extends('layout.main')
@section('kost')
    
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEVENKOS | Kost</title>
    <link rel="stylesheet" href="landing-page/detailKos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    {{-- navbar  --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin: 0px 40px;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SEVENKOS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              </li>
            </ul>
            <span class="navbar-text">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style=" padding-right:200px;">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('landing.page.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('daftar.kos') }}" style="color: #FC6767; "><u>Kost</u> </a>
                    </li>
                  </ul>
            </span>
            <span class="navbar-text">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('#') }}">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('#') }}" style=" background: linear-gradient(90deg, rgba(83, 104, 118, 0.8) 0%, rgba(41, 46, 73, 0.8) 100%); border-radius:5px;">Register</a>
                    </li>
                  </ul>
            </span>
          </div>
        </div>
      </nav>
      {{-- end --}}
   
      {{-- set --}}

      {{-- form --}}
      <form action="{{ route('#') }}" method="post">
      <div class="row g-2" style="padding:10px; margin:20px 40px; border-radius:10px; background: linear-gradient(90deg, rgba(83, 104, 118, 0.80) 0%, rgba(41, 46, 73, 0.80) 100%), url(<path-to-image>), lightgray 50% / cover no-repeat; font-family:'Montserrat'; ">

        <div class="col-md">
            <label for="floatingSelectGrid" style="font-size: 17px;">Tipe <span>penghuni</span> </label>
          <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
        <div class="col-md">
            <label for="floatingSelectGrid" style="font-size: 17px;">Urutkan <span>berdasarkan</span> </label>
          <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
    
        <div class="col-md">
            <label for="floatingInputGrid" style="font-size: 17px;">Rentan <span>Harga</span> </label>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGrid" placeholder="Rp.0">
            
          </div>
        </div>
        <div class="col-md">
            <label for="floatingInputGrid"></label>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGrid" placeholder="Rp.0">
            
          </div>
        </div>
        <div class="col-md" >
            <label for="floatingInputGrid"></label>
          <div class="form-floating">
            <input style="background-color: #FC6767;" type="button" class="form-control" id="floatingInputGrid" value="Set">
          </div>
        </div>
      </div>

    </form>
      {{-- end form --}}
      {{-- end --}}

      {{-- card kos tersedia --}}
      <div class="card-image-kos-kost">
<div class="image">
  <a href="{{ route('#') }}">
        <img src="assets/rectangle 85.png" class="rounded " alt="gambar">
      </a>
  <a href="{{ route('#') }}">
        <img src="assets/rectangle 85.png" class="rounded " alt="gambar">
      </a>
  <a href="{{ route('#') }}">
        <img src="assets/rectangle 85.png" class="rounded " alt="gambar">
      </a>
  <a href="{{ route('#') }}">
        <img src="assets/rectangle 85.png" class="rounded " alt="gambar">
      </a>
  <a href="{{ route('#') }}">
        <img src="assets/rectangle 85.png" class="rounded " alt="gambar">
      </a>
  <a href="{{ route('#') }}">
        <img src="assets/rectangle 85.png" class="rounded " alt="gambar">
      </a>
  <a href="{{ route('#') }}">
        <img src="assets/rectangle 85.png" class="rounded " alt="gambar">
      </a>
  <a href="{{ route('#') }}">
        <img src="assets/rectangle 85.png" class="rounded " alt="gambar">
      </a>
        <div class="buttom-load-more" style="margin:5px;">
            <center><a href="">Tampilkan lebih banyak</a></center>  
        </div>

    </div>

        {{-- card search --}}
        <div class="card" style="width: 20rem; border:2px solid #FC6767;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Tampilkan berdasarkan
                <div class="toggle" style="display: flex">
                <button>Terbaru</button>
                <button>Paling Sesuai</button>
            </div>
              </li>

              {{-- form --}}
              <form action="{{ route('#') }}" method="post">
              <li class="list-group-item">Fasilitas
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="meja" value="ac">
                    <label class="form-check-label" for="ac">AC</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="lemari" value="lemari">
                    <label class="form-check-label" for="lemari">Lemari</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="wifi" value="wifi">
                    <label class="form-check-label" for="wifi">WIFI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="">
                    <label class="form-check-label" for="">Meja</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="">
                    <label class="form-check-label" for="">K. Mandi Dalam</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="">
                    <label class="form-check-label" for="">Termaksud Listrik</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="">
                    <label class="form-check-label" for="">parkir Mobil</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="">
                    <label class="form-check-label" for="">Parkir Motor</label>
                  </div>
              </li>
              <li class="list-group-item">Lokasi
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="meja" value="ac">
                    <label class="form-check-label" for="ac">AC</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="lemari" value="lemari">
                    <label class="form-check-label" for="lemari">Lemari</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="wifi" value="wifi">
                    <label class="form-check-label" for="wifi">WIFI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="">
                    <label class="form-check-label" for="">Meja</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="">
                    <label class="form-check-label" for="">K. Mandi Dalam</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="">
                    <label class="form-check-label" for="">Termaksud Listrik</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="">
                    <label class="form-check-label" for="">parkir Mobil</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="">
                    <label class="form-check-label" for="">Parkir Motor</label>
                  </div>
                
                  <br>
                  <br>
                  <br>
                  <center><button type="submit" style="background-color: #FC6767; border:0; border-radius:5px; padding:5px 25px;">Terapkan</button></center>
              </li>
            </ul>
            
          </form>
          {{-- end form --}}

          </div>

      </div>
      {{-- end --}}

  </body>
</html>

@endsection