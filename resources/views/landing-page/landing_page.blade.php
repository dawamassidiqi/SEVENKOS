@extends('layout.main')
@section('landing-page')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="landing-page/landing_page.css">
        {{-- <title>SEVENKOS | Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
    </head>

    <body>

        <div class="card2"
            style="background: linear-gradient(90deg, rgba(83, 104, 118, 0.8) 0%, rgba(41, 46, 73, 0.8) 100%);">

            {{-- navbar --}}
            <div class="card-body" style=" width:80%; margin-left:40px;">
                <br>
                <br>

                <h1 style=" color:white;">SEVEN<span style="color: #FC6767">KOS</span></h1>
                <p style="font-size:20px; width:250px; color:white;">Temukan Hunian Nyaman
                    dengan Mudah!</p>
                <br>
                <nav class="navbar">
                    <div class="container-fluid" style="background-color: white; border-radius:5px; width:100%">
                        <form class="d-flex" role="search" method="get" action="{{ route('landin-page.home') }}">
                            <input class="input-search" name="kos_search" type="search" placeholder="Nama Kos/Lokasi"
                                aria-label="Search" style=" border:0; margin:end">
                            <button class="btn btn-outline-success" type="submit"
                                style="margin:5px; padding:5px 40px; background: linear-gradient(90deg, rgba(83, 104, 118, 0.8) 0%, rgba(41, 46, 73, 0.8) 100%); border:0; color:white;">Cari</button>
                        </form>
                    </div>
                </nav>
            </div>
            {{-- </div> --}}

            <div class="flex">
                <div class="coba" style="display: flex; ">
                    <div class="col-sm-5" style="margin: 5px 8px">
                        <a href="{{ route('detail-kos') }}">
                            <div class="card">
                                <img src="assets/Rectangle 9.png" class="card-img" alt="gambar">
                                <div class="card-img-overlay">
                                    <p style="text-align:end;"><span
                                            style="background-color: #FC6767; padding:5px; border-radius:5px;">Campur</span>
                                    </p>
                                    <br><br><br><br>
                                    <h5 class="card-title" style="color: white;">Kost Cozy Haven</h5>
                                    <p class="card-text" style="color: white;">Yogyakarta</p>
                                    <p class="card-text" style="color: white;"><small>1.700.000/Bulan</small></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-5" style="margin: 5px; 8px">
                        <a href="{{ route('detail-kos') }}">
                            <div class="card">
                                <img src="assets/Rectangle 9 (2).png" class="card-img" alt="gambar">
                                <div class="card-img-overlay">
                                    <p style="text-align:end;"><span
                                            style="background-color: #FC6767; padding:5px; border-radius:5px;">Campur</span>
                                    </p>
                                    <br><br><br><br>
                                    <h5 class="card-title" style="color: white;">Kost Cozy Haven</h5>
                                    <p class="card-text" style="color: white;">Yogyakarta</p>
                                    <p class="card-text"><small style="color: white;">1.700.000/Bulan</small></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>


        </div>

        {{-- card info --}}
        <div class="container-info">
            <div class="tetang-kami">
                <h3 style="color: #FC6767">Tentang kami</h3>
                <p>
                    Kami adalah tim yang berdedikasi untuk membantu Anda
                    menemukan tempat kost ideal. Dengan pengalaman dan
                    pengetahuan dalam industri perumahan, kami berkomitmen
                    untuk menyediakan layanan pencarian kost yang efisien dan akurat,
                    membantu Anda meraih kenyamanan tempat tinggal yang Anda cari
                    <br>
                    <br>

                    <a href="{{ route('#') }}" class="button"
                        style="background-color: rgba(67, 64, 93, 1); padding:5px; border-radius:7px; text-decoration:none; color:white; font-size:12px;">Selengkapnya</a>
                </p>

            </div>
            <a href="{{ route('detail-kos') }}">

                <div class="card-kos">
                    <div class="card-kos1">
                        <h2
                            style="position: absolute; margin-top:100px; margin-left:50px; text-align:center; color:white; ">
                            12K+</h2>

                        <p style="position: absolute; margin-top:150px; text-align:center; color:white; margin-left:10px;">
                            Kos
                            untuk di tinggali</p>
                        <img src="assets/rectangle 12.png" alt="gambar" id="gambar1">
                    </div>
                    <div class="card-kos1">
                        <h2
                            style="position: absolute; margin-top:100px; margin-left:50px; text-align:center; color:white; ">
                            1000+</h2>
                        <p style="position: absolute; margin-top:150px; text-align:center; color:white; margin-left:10px;">
                            wilayah di indonesia</p>
                        <img src="assets/rectangle 12 (1).png" alt="gambar" id="gambar1">
                    </div>
                    <div class="card-kos1">
                        <h2
                            style="position: absolute; margin-top:100px; margin-left:50px; text-align:center; color:white; ">
                            100%</h2>
                        <p style="position: absolute; margin-top:150px; text-align:center; color:white; margin-left:5px;">
                            tanpa
                            biaya tambahan</p>
                        <img src="assets/rectangle 12 (2).png" alt="gambar" id="gambar1">
                    </div>
                    <div class="card-kos1">
                        <h2
                            style="position: absolute; margin-top:100px; margin-left:50px; text-align:center; color:white; ">
                            100%</h2>
                        <p style="position: absolute; margin-top:150px; text-align:center; color:white; margin-left:5px;">
                            tempat
                            aman dan nyaman</p>
                        <img src="assets/rectangle 12 (3).png" alt="gambar" id="gambar1">
                    </div>

                </div>

            </a>

        </div>
        <h4 style="margin-left: 40px;">Rekomendasi Kost di <span style="color: #FC6767">YOGYAKARTA</span></h4>

        {{--  rekomendasi kos di sekitar jogja --}}

        <div class="container-info-rekomendasi">

            <div class="info">
                <p style="margin-bottom: 20px;"><a href="{{ route('daftar.kos') }}"
                        style="background-color: #FC6767; padding:5px; border-radius:7px; text-decoration:none; color:white; font-size:18px;">Saturan</a>
                </p>
                <p style="margin-bottom: 20px;"><a href="{{ route('daftar.kos') }}"
                        style="background-color: #FC6767; padding:5px; border-radius:7px; text-decoration:none; color:white; font-size:18px;">Babarsari</a>
                </p>
                <p style="margin-bottom: 20px;"><a href="{{ route('daftar.kos') }}"
                        style="background-color: #FC6767; padding:5px; border-radius:7px; text-decoration:none; color:white; font-size:18px;">Condong
                        Catur</a></p>
                <p style="margin-bottom: 20px;"><a href="{{ route('daftar.kos') }}"
                        style="background-color:#FC6767; padding:5px; border-radius:7px; text-decoration:none; color:white; font-size:18px;">Demangan</a>
                </p>
                <p style="margin-bottom: 20px;"><a href="{{ route('daftar.kos') }}"
                        style="background-color: #FC6767; padding: 5px; border-radius:7px; text-decoration:none; color:white; font-size:18px;">Taman
                        Siswa</a></p>
                <p style="margin-bottom: 20px;"><a href="{{ route('daftar.kos') }}"
                        style="background-color: #FC6767; padding: 5px; border-radius:7px; text-decoration:none; color:white; font-size:18px;">Maguwoharjo</a>
                </p>
            </div>

            <div class="card-scroll-container">
                <div class="card-scroll">

                    {{-- include card kos kos disekitar jogja --}}
                    {{-- @include('layout.card-kost') --}}
                    {{-- end --}}

                    @foreach ($saturan as $kost)
                        <div class="saturan" id="saturan">
                            <div class="col-sm-3" style="margin: 5px;">
                                <div class="card">
                                    <img src="assets/Rectangle 9 l(4).png" class="card-img" alt="gambar">
                                    <a href="{{ route('detail-kos') }}">
                                        <div class="card-img-overlay">
                                            <br><br><br><br><br><br>
                                            <h5 class="card-title" style="color: white;">{{ $kost->namaKos }}</h5>
                                            <p class="card-text" style="color: white;">{{ $kost->alamatKos }}</p>
                                            <p class="card-text" style="color: white;"><small>1.700.000/Bulan</small></p>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
        {{-- end --}}


        {{-- cari kos --}}
        <div class="bottom-cari-kos">

            <p>
            <h4 style="margin: 20px; color:white; padding-top:20px;">Cari <span style="color: #FC6767">Kost</span>
                Berdasarkan Apa Yang Anda Inginkan
            </h4>
            </p>
            <div class="container-cari-kos" style="display: flex">
                {{-- fasilitas kamar --}}
                <div class="kamar" style="border-right: 3px solid #FC6767; margin:10px; color:white; margin-left:5px">
                    Fasilitas Kamar
                    <br>

                    <input type="checkbox" class="btn-check" id="btn-check-4" checked autocomplete="off">
                    <label class="btn" for="btn-check-4">Lemari Baju</label>

                    <input type="checkbox" class="btn-check" id="btn-check-5" checked autocomplete="off">
                    <label class="btn" for="btn-check-5">KM Dalam</label>

                    <input type="checkbox" class="btn-check" id="btn-check-6" checked autocomplete="off">
                    <label class="btn" for="btn-check-6">Termasuk Listrik</label>

                    <input type="checkbox" class="btn-check" id="btn-check-7" checked autocomplete="off">
                    <label class="btn" for="btn-check-7">Kursi Latar</label>
                    <input type="checkbox" class="btn-check" id="btn-check-8" checked autocomplete="off">
                    <label class="btn" for="btn-check-8">AC</label>
                    <input type="checkbox" class="btn-check" id="btn-check-9" checked autocomplete="off">
                    <label class="btn" for="btn-check-9">Kloset Duduk</label>
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
                <a href="{{ route('daftar.kos') }}">
                    <button
                        style="size: 20; margin: 10px; border:0;   background-color: #FC6767;  border-radius: 10px; ">Cari</button>
                </a>


            </div>

        </div>

        {{-- KOS SEKITAR KAMPUS --}}
        <h4 style=" margin-left:40px; display:flex; justify-content: space-between;"><span>Kos Sekitar <span
                    style="color: #FC6767; ">Kampus</span></span><a href="{{route('daftar.kos')}}"
                style="color: #FC6767;  text-decoration:none; margin-right:40px; font-size:18px;">Lihat semua</a></h4>
                



        <div class="card-image-kampus">

            <div class="card text-bg-dark" style="margin: 5px; border:0;">
                <img src="assets/rectangle 81.png" class="card-img" alt="image-kampus">
                <a href="{{ route('daftar.kos') }}" style="color: white">
                    <div class="card-img-overlay">
                        <h3>
                            <center>Telkom Universitas</center>
                        </h3>
                    </div>
                </a>
            </div>

            <div class="card text-bg-dark" style="margin: 5px; border:0;">
                <img src="assets/rectangle 81 (1).png" class="card-img" alt="image-kampus">
                <a href="{{ route('daftar.kos') }}" style="color: white">
                    <div class="card-img-overlay">
                        <h3>
                            <center>Universitas Indonesia</center>
                        </h3>
                    </div>
                </a>
            </div>
            <div class="card text-bg-dark" style="margin: 5px; border:0;">
                <img src="assets/rectangle 81 (2).png" class="card-img" alt="image-kampus">
                <a href="{{ route('daftar.kos') }}" style="color: white">
                    <div class="card-img-overlay">
                        <h3>
                            <center>Universitas Brawijaya</center>
                        </h3>
                    </div>
                </a>
            </div>
            <div class="card text-bg-dark" style="margin: 5px; border:0;">
                <img src="assets/rectangle 85.png" class="card-img" alt="image-kampus">
                <a href="{{ route('daftar.kos') }}" style="color: white">
                    <div class="card-img-overlay">
                        <h3>
                            <center>Universitas gajah Mada</center>
                        </h3>
                    </div>
                </a>
            </div>

        </div>
    </body>

    </html>
@endsection
