@extends('layouts/app')

@section('content')

    <div class="header">
        <div class="headerinfo">
            <h2>
                Memulihkan kembali hidup, kehidupan, dan penghidupan
            </h2>
            <h3>
                Memberikan bimbingan kemasyarakatan dan pengentasan anak sesuai dengan peraturan perundang-udangan yang berlaku
            </h3>
            <div class="jadwal">
                <div>
                    <p>Senin-Kamis</p>
                    <p>07:30-16:00</p>
                </div>
                <div>
                    <p>Senin-Kamis</p>
                    <p>07:30-16:00</p>
                </div>
                <div>
                    <p>Senin-Kamis</p>
                    <p>07:30-16:00</p>
                </div>
            </div>
        </div>
    </div>

    <div class="profile tengah">
        <label> Profile </label>
        <h2>
            Bapas Kelas I Jakarta Timur/Utara
        </h2>
        <iframe src="https://www.youtube.com/embed/pQHhAOtp92k" title="Video Profil Balai Pemasyarakatan Kelas I Jakarta Timur Utara" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="layanan tengah">
        <label> Info Layanan </label>
        <h2>
            Program litmas balas pemasyarakatan
        </h2>
        
        <div class="col-3 flex-wrap center">
            
            <div class="menulayanan">
                <a href="">
                    <div class="menuicon"></div>
                    <div>
                        <h1> Informasi Pelayanan Bapas </h1>
                        <p> Menyediakan langkah-langkah untuk menggunakan layanan di Bapas </p>
                    </div>
                </a>
            </div>
            
            <div class="menulayanan">
                <a href="">
                    <div class="menuicon"></div>
                    <div>
                        <h1> Lacak Litmas </h1>
                        <p> Memantau kebutuhan dan progress klien melalui program Lacak Litmas </p>
                    </div>
                </a>
            </div>

            <div class="menulayanan">
                <a href="">
                    <div class="menuicon"></div>
                    <div>
                        <h1> Info Sidang TPP </h1>
                        <p> Menyediakan langkah-langkah untuk menggunakan layanan di Bapas </p>
                    </div>
                </a>
            </div>

            <div class="menulayanan">
                <a href="">
                    <div class="menuicon"></div>
                    <div>
                        <h1> Update Klien Bebas </h1>
                        <p> Menyediakan langkah-langkah untuk menggunakan layanan di Bapas </p>
                    </div>
                </a>
            </div>

            <div class="menulayanan">
                <a href="">
                    <div class="menuicon"></div>
                    <div>
                        <h1> Indeks Kepuasan Masyarakat </h1>
                        <p> Menyediakan langkah-langkah untuk menggunakan layanan di Bapas </p>
                    </div>
                </a>
            </div>

            <div class="menulayanan">
                <a href="">
                    <div class="menuicon"></div>
                    <div>
                        <h1> Update Wajib Lapor </h1>
                        <p> Menyediakan langkah-langkah untuk menggunakan layanan di Bapas </p>
                    </div>
                </a>
            </div>

        </div>
    </div>


<br><br>

<!-- IMAGE SLIDER -->

<!-- <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="{{ asset('assets/img/bapas_pelayanan.png') }}" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="{{ asset('assets/img/head_bapas.png') }}" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="{{ asset('assets/img/bapas_pelayanan.png') }}" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> -->
<br><br>

<!-- <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script> -->


@endsection