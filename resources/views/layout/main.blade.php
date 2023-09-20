<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="landing-page/landing_page.css">
    <title>SEVENKOS | Landing Page</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg " style="padding: 5px 40px;  background: linear-gradient(90deg, rgba(83, 104, 118, 0.8) 0%, rgba(41, 46, 73, 0.8) 100%);">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <div class="logo" style="display: flex; font-size:15px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33" viewBox="0 0 41 44" fill="none">
              <path d="M20.1075 21.1273C20.2459 21.0877 20.4871 21.0614 20.8153 21.0482C21.0888 21.0383 21.4233 21.0416 21.5553 21.0548C21.6872 21.068 21.8834 21.1042 21.9896 21.1339C22.0957 21.1602 22.2309 21.1898 22.2888 21.1964C22.3435 21.203 22.4561 21.2392 22.5365 21.2755C22.6169 21.3117 22.6845 21.338 22.6909 21.3315C22.6941 21.3282 22.7649 21.3545 22.8421 21.3874C22.9226 21.4237 23.0673 21.4895 23.1639 21.5389C23.2604 21.5851 23.3858 21.6542 23.4373 21.6871C23.4888 21.7201 23.6561 21.8321 23.8009 21.9309C23.9521 22.0362 24.2255 22.2734 24.4218 22.4776C24.6148 22.6752 24.8464 22.9419 24.9333 23.0704C25.0202 23.1988 25.1553 23.4195 25.2325 23.5644C25.3129 23.7093 25.4127 23.9168 25.4545 24.0255C25.4995 24.1342 25.5639 24.312 25.6636 24.6183L39.4429 24.6348V44H1.28691V25.3922H7.46393L7.48001 37.6602L33.298 37.6767V27.6318H25.5446L25.477 27.7865C25.4416 27.8755 25.3451 28.0764 25.2647 28.241C25.1843 28.4057 25.0942 28.5671 25.0652 28.6033C25.033 28.6395 24.9591 28.7449 24.8979 28.8404C24.8368 28.9327 24.6212 29.1797 24.4186 29.3871C24.2159 29.5946 23.9585 29.8285 23.8459 29.9075C23.7333 29.9865 23.5885 30.0854 23.5242 30.1249C23.4598 30.1644 23.3858 30.2105 23.3665 30.2303C23.344 30.25 23.3183 30.2665 23.3086 30.2665C23.299 30.2665 23.2443 30.2928 23.1896 30.3225C23.1317 30.3554 23.0384 30.3982 22.9869 30.418C22.9354 30.441 22.7681 30.5036 22.6169 30.5629C22.4657 30.6189 22.3081 30.6716 22.263 30.6782C22.218 30.6848 22.0539 30.7177 21.8931 30.7539C21.6486 30.8099 21.5038 30.8165 20.9601 30.8099C20.4807 30.8033 20.2684 30.7868 20.1236 30.744C20.0174 30.7144 19.8952 30.6848 19.8501 30.6782C19.8051 30.6716 19.6603 30.6255 19.5284 30.5794C19.3965 30.53 19.2357 30.4707 19.1745 30.4443C19.1134 30.4147 18.9558 30.3389 18.8303 30.2731C18.7016 30.2072 18.5954 30.1413 18.5954 30.1249C18.5954 30.1117 18.5793 30.1018 18.5633 30.1018C18.5472 30.1018 18.4474 30.0458 18.3477 29.98C18.2448 29.9141 18.0324 29.7395 17.8748 29.5913C17.7171 29.4464 17.4887 29.2093 17.3697 29.0644C17.2539 28.9195 17.093 28.6988 17.0158 28.5704C16.9354 28.4419 16.8099 28.2147 16.7359 28.0599C16.6619 27.9051 16.5976 27.7503 16.5879 27.7141C16.5815 27.6779 16.5557 27.6021 16.53 27.5494C16.5043 27.4967 16.4689 27.4045 16.456 27.3518C16.4431 27.2991 16.427 27.23 16.4238 27.2036C16.4206 27.1773 16.3884 27.0587 16.3563 26.9401C16.308 26.759 16.2984 26.6075 16.2984 25.9357C16.2984 25.2737 16.308 25.109 16.3563 24.9312C16.3884 24.8126 16.4206 24.6874 16.4238 24.6512C16.427 24.615 16.4431 24.5491 16.456 24.503C16.4721 24.4569 16.5043 24.368 16.53 24.3054C16.5589 24.2428 16.5815 24.1737 16.5847 24.1572C16.5879 24.1407 16.6651 23.9662 16.7584 23.7686C16.8485 23.5743 16.9386 23.4096 16.9547 23.3997C16.9707 23.3898 16.9804 23.3668 16.9707 23.3503C16.9611 23.3339 16.9643 23.3174 16.9772 23.3174C16.9933 23.3174 17.0351 23.2614 17.0737 23.1955C17.1123 23.1264 17.1734 23.0407 17.2088 23.0045C17.2474 22.9683 17.2796 22.9222 17.2796 22.9057C17.2796 22.8892 17.4565 22.6949 17.6721 22.4776C17.9338 22.2141 18.1772 22.0066 18.4024 21.8551C18.589 21.73 18.7627 21.6213 18.7885 21.6114C18.8142 21.6015 18.8914 21.5587 18.959 21.5159C19.0233 21.4731 19.078 21.4467 19.078 21.4566C19.078 21.4665 19.152 21.4368 19.2389 21.3907C19.329 21.3446 19.3997 21.315 19.3997 21.3249C19.3997 21.3348 19.4737 21.3117 19.5606 21.2755C19.6507 21.2392 19.7601 21.203 19.8083 21.1964C19.8598 21.1898 19.9917 21.1569 20.1075 21.1273Z" fill="#FAF4F4"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4936 0C20.5032 0 25.1263 4.72275 30.7661 10.4961C36.4058 16.2728 41.0128 21.0054 41 21.0219C40.9871 21.035 39.0343 21.0449 32.3489 21.0449L20.4968 8.90868L8.65426 21.0449H4.32713C1.46383 21.0449 0 21.035 0 21.012C0 20.9955 1.14211 19.8099 5.08317 15.7754V9.4521H11.2441L15.8608 4.72605C18.3992 2.12754 20.4839 0 20.4936 0Z" fill="#FAF4F4"/>
            </svg>
              <div class="seven" style="display: flex; margin-top:7px; margin-left:5px; color:white;">SEVEN<div class="kos" style="color: #FC6767;">KOS</div></div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            </li>
          </ul>
          <span class="navbar-text">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0" style=" padding-right:200px; ">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('landin-page.home') }}" style="color: white;">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('daftar.kos') }}" style="color: white;">Kost </a>
                  </li>
                </ul>
          </span>
          <span class="navbar-text">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('login') }}" style="color: white;">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('register') }}" style="background-color: #FC6767; border-radius:5px; color:white;">Register</a>
                  </li>
                </ul>
          </span>
        </div>
      </div>
    </nav>
    {{-- end --}}

    {{-- landing page --}}
    <div class="landing-page">
        @yield('landing-page')
    </div>

    {{-- kost --}}
    <div class="kost">
        @yield('kost')
    </div>

    {{-- detail kos --}}
    <div class="detail-kost">
        @yield('detail_kos')
    </div>
    
  {{-- footer --}}
  <footer>
    <div class="container-footer">
      <div class="footer1">
    <h1>SEVEN<span style="color: #FC6767">KOS</span></h1>
    <p>Temukan Hunian Nyaman 
            dengan Mudah!</p>
            <button type="button" class="btn btn-outline-light">Get strated</button>
          </div>
    <table style="font-size: 13px; width:800px;">
      <thead>
      <tr>
        <th><a href="" style="color: #FC6767">SEVENKOS</a></th>
        <th><a href="" style="color: #FC6767"></a></th>
        <th><a href="" style="color: #FC6767">produk</a></th>
        <th><a href="" style="color: #FC6767">Lainya</a></th>
        <th><a href="" style="color: #FC6767">Kontak</a></th>
      </tr>
    </thead>
    <tbody>
      <tr >
        <td><a href="">Tentang Kami</a></td>
        <td><a href="">Pusat Bantuan</a></td>
        <td><a href="">Sewa Kos</a></td>
        <td><a href="">Syarat dan ketentuan</a></td>
        <td><a href="">Jl. Aksdnasd kasnfaf no 34 asdsa. Indonesia</a></td>
      </tr>
      <tr>
        <td><a href="">Job SEVENKOS</a></td>
        <td><a href="">Cara Pesan</a></td>
        <td><a href="">Harga</a></td>
        <td><a href="">Patnership</a></td>
        <td><a href="">+62 123456789</a></td>
      </tr>
      <tr>
        <td><a href="">promosikan Kos Anda</a></td>
        <td><a href="">Fitur SEVENKOS</a></td>
        <td><a href=""></a></td>
        <td><a href="">Blog</a></td>
        <td>
          <a href="" style="margin-right: 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
          </a>
          <a href="" style="margin-right: 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
              <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
            </svg>
          </a>
          <a href="" style="margin-right: 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
            </svg>
          </a>
          <a href="" style="margin-right: 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
          </a>
        </td>
      </tr>
    </tbody>
    </table>   
    </div>
  </footer>
  <script src="landing-page/style.js"></script>
  </body>
</html>