@extends('layout.main')
@section('kost')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SEVENKOS | Kost</title>
        <link rel="stylesheet" href="landing-page/kost.css">
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
    </head>

    <body>

        {{-- form --}}
        <form action="{{ route('#') }}" method="get">

            <div class="row g-2"
                style="padding:10px; margin:20px 40px; border-radius:10px; background: linear-gradient(90deg, rgba(83, 104, 118, 0.80) 0%, rgba(41, 46, 73, 0.80) 100%), url(<path-to-image>), lightgray 50% / cover no-repeat; font-family:'Montserrat'; ">

                <div class="col-md">
                    <label for="floatingSelectGrid" style="font-size: 17px;">Tipe <span>penghuni</span> </label>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelectGrid">
                            <option selected>Laki-Laki</option>
                            <option value="1">Perempuan</option>
                            <option value="2">Pasutri</option>
                            <option value="3">Mahasiswa</option>
                        </select>
                    </div>
                </div>
                <div class="col-md">
                    <label for="floatingSelectGrid" style="font-size: 17px;">Urutkan <span>berdasarkan</span> </label>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelectGrid">
                            <option selected>Paling rekomendasi</option>
                            <option value="1">Terbaru</option>
                            <option value="2">Paling Diminati</option>
                            <option value="3">Banyak Dilihat</option>
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
                <div class="col-md">
                    <label for="floatingInputGrid"></label>
                    <div class="form-floating">
                        <input style="background-color: #FC6767;" type="button" class="form-control" id="floatingInputGrid"
                            value="Set">
                    </div>
                </div>
            </div>

        </form>
        {{-- end form --}}
        {{-- end --}}

        {{-- card kos tersedia --}}
        <div class="card-image-kos-kost">

            <div class="image">

                {{-- card image kos --}}
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                        {{-- kos data --}}
                        @foreach ($kost as $kos)
                            <div class="col-sm-5">
                                <a href="{{ route('detail-kos') }}">
                                    <div class="card" style="border: 0px;">
                                        <img src="assets/Rectangle 9 (8).png" class="card-img" alt="gambar">
                                        <div class="card-img-overlay" style="color: white;">
                                            <p style="text-align:end;"><span
                                                    style="background-color: #FC6767; padding:5px; border-radius:5px;">Campur</span>
                                            </p>
                                            <br>
                                            <h5>{{ $kos->namaKos }}</h5>
                                            <p>{{ $kos->alamatKos }}</p>
                                            <p>{{ $kos->hargaPerbulan }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        {{-- end kos data --}}

                    </div>
                </div>
                {{-- end --}}

                {{-- load more --}}
                <div class="buttom-load-more" style="margin:5px;">
                    <center><a href="">Tampilkan lebih banyak</a></center>
                </div>
                {{-- end --}}

            </div>

            {{-- card search --}}
            <div class="card" style="width: 20rem; border:2px solid #FC6767;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Tampilkan berdasarkan
                        <div class="toggle" style="margin: 10px 0px;">
                            <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                                autocomplete="off" checked>
                            <label class="btn btn-outline-danger" for="success-outlined">Terbaru</label>

                            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined"
                                autocomplete="off">
                            <label class="btn btn-outline-danger" for="danger-outlined">Paling Sesuai</label>
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
                            <center><button type="submit"
                                    style="background-color: #FC6767; border:0; border-radius:5px; padding:5px 25px;">Terapkan</button>
                            </center>
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
