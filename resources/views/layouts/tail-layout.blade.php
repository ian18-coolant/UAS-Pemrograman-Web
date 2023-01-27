
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <!-- Header Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-2 py-6 flex gap-2">
            <img src="{{ url('img') }}/logo.png" alt="" />
            <a href="#home" class="font-bold text-lg text-white block">HightSchool</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
              <span class="hamburger-line transition duration-300 origin-top-left"></span>
              <span class="hamburger-line transition duration-300"></span>
              <span class="hamburger-line transition duration-300 origin-bottom-left"></span>
            </button>
            <nav id="nav-menu" class="hidden absolute right-4 py-5 bg-[#0E2123] rounded-lg shadow-lg max-w-[250px] w-full top-full transition duration-700 lg:block lg:static lg:max-w-full lg:shadow-none lg:rounded-none lg:bg-transparent">
              <ul class="block lg:flex lg:items-center">
                <li class="group">
                  <a href="#home" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">Home</a>
                </li>
                <li class="group">
                  <a href="#profil" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">Profil Sekolah</a>
                </li>
                <li class="group">
                  <a href="#jurusan" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">Data Akademik</a>
                </li>
                <li class="group">
                  <a href="#artikel" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">Artikel</a>
                </li>
                <li class="group">
                  <a href="#" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">Fasilitas</a>
                </li>
                <li class="group">
                  <a href="#galery" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">Galery</a>
                </li>
                <li class="group">
                  <a href="#" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">E-Learning</a>
                </li>
                <li class="group">
                  <a href="#" class="button-primary invisible xl:visible">Hubungi kami</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Hero Start -->
    <section id="home" class="py-40 bg-cover" style="background-image: url({{ url('img') }}/hero.png)">
      <div class="container">
        <h1 class="font-bold text-4xl text-white md:max-w-lg lg:text-6xl">Buku - Buku yang dapat membuat anda Termotivasi</h1>
        <p class="font-thin text-xs text-slate-200 my-6 lg:text-sm">September 6, 2022</p>
        <p class="font-thin text-sm text-slate-200 mb-8 lg:w-1/2">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror. Karriärcoach pyjuskap andropatologi.</p>
        <button type="button" class="button-primary">Read more</button>
      </div>
    </section>
    <!-- Hero End -->

    <!-- Visi Start -->
    <section id="profil" class="py-28">
      <div class="container">
        <div class="flex flex-wrap w-full justify-center">
          <div class="py-6 w-full px-4 text-center md:w-1/2 lg:w-1/3">
            <img src="{{ url('img') }}/ident.png" alt="Identitas" class="mx-auto" />
            <h2 class="font-bold text-xl text-three my-6">Identitas Sekolah</h2>
            <p class="font-medium text-sm text-secondary mb-4">Hight School berdiri sejak tahun 1980 dengan nama Hight School 1. Sekolah yang akan membimbing muridnya hingga benar</p>
            <a href="#" class="font-semibold text-sm text-primary">Read more</a>
          </div>
          <div class="py-6 w-full px-4 text-center md:w-1/2 lg:w-1/3">
            <img src="{{ url('img') }}/visi.png" alt="Identitas" class="mx-auto" />
            <h2 class="font-bold text-xl text-three my-6">Visi Misi</h2>
            <p class="font-medium text-sm text-secondary mb-4">Hight School berdiri sejak tahun 1980 dengan nama Hight School 1. Sekolah yang akan membimbing muridnya hingga benar</p>
            <a href="#" class="font-semibold text-sm text-primary">Read more</a>
          </div>
          <div class="py-6 w-full px-4 text-center md:w-1/2 lg:w-1/3">
            <img src="{{ url('img') }}/struktur.png" alt="Identitas" class="mx-auto" />
            <h2 class="font-bold text-xl text-three my-6">Struktur Sekolah</h2>
            <p class="font-medium text-sm text-secondary mb-4">Hight School berdiri sejak tahun 1980 dengan nama Hight School 1. Sekolah yang akan membimbing muridnya hingga benar</p>
            <a href="#" class="font-semibold text-xm text-primary">Read more</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Visi End -->

    <!-- Pembuka Start -->
    <section class="flex flex-wrap items-center bg-slate-100">
      <div class="w-full lg:w-1/2">
        <img src="{{ url('img') }}/Frame.png" alt="" class="w-full" />
      </div>
      <div class="w-full py-4 px-4 lg:w-1/2">
        <p class="font-medium text-sm text-primary">Pembukaan Kepala Sekolah</p>
        <h2 class="font-bold text-xl text-three mt-4 mb-6 max-w-md md:text-2xl">Ucapan Kepala Sekolah HIGHT SCHOOL</h2>
        <p class="font-medium text-sm text-slate-600 mb-6 max-w-md">“ Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror. Karriärcoach pyjuskap andropatologi. “</p>
        <div class="flex w-full">
          <img src="{{ url('img') }}/image 34.png" alt="Kepala sekolah" class="rounded-full mr-2" />
          <h4>
            <span class="block font-semibold text-sm text-three">Bpk. Robert stent</span>
            <span class="block font-normal text-sm text-slate-600">Kepala Sekolah</span>
          </h4>
        </div>
      </div>
    </section>
    <!-- Pembuka End -->

    <!-- Main Start -->
    <main class="py-32">
      <div class="container">
        <!-- jurusan Start -->
        <section id="jurusan">
          <div class="container mb-28">
            <h2 class="font-bold text-xl text-three mb-6 lg:text-2xl">Jurusan (Program Study)</h2>
            <div class="flex flex-wrap w-full justify-between items-end mb-10">
              <p class="font-medium text-sm text-slate-600 mb-4 md:w-1/2 md:mb-0">Terdapat Beberapa Jurusan atau Program Study di SMA PGRI CICURUG yang dapat dipilih sesuai dengan minat Siswa</p>
              <button type="button" class="button-primary">Academic Data</button>
            </div>
            <div class="flex flex-wrap gap-4">
              <div class="w-full text-center py-6 px-4 border rounded-xl md:w-[48%]">
                <img src="{{ url('img') }}/ips.png" alt="IPS" class="mx-auto" />
                <h4 class="font-bold text-xl text-three my-6">IPS</h4>
                <p class="font-medium text-sm text-secondary">Jurusan IPS mempelajari tentang hubungan antar manusia dan hubungan manusia dengan lingkungannya, serta berbagai aspek sosial</p>
              </div>
              <div class="w-full text-center py-6 px-4 border rounded-xl md:w-[48%]">
                <img src="{{ url('img') }}/ipa.png" alt="IPS" class="mx-auto" />
                <h4 class="font-bold text-xl text-three my-6">IPA</h4>
                <p class="font-medium text-sm text-secondary">
                  Selain belajar Ilmu Alam, anak SMA belajar matematika juga. Oleh sebab itu selain disebut dengan jurusan IPA (Ilmu Pengetahuan Alam) jurusan ini punya dua nama lain lagi, yaitu: MIPA , MIA
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- jurusan End -->

        <!-- prestasi Start -->
        <section id="prestasi">
          <div class="container mb-28">
            <div class="flex flex-wrap w-full justify-between items-end mb-4">
              <div class="w-full md:w-1/2">
                <h3 class="font-bold text-xl text-three mb-4 lg:text-2xl">Prestasi Siswa - Siswi</h3>
                <p class="font-medium text-sm text-slate-500 mb-4">Prestasi dari Siswa - Siswi SMA PGRI CICURUG</p>
              </div>
              <button type="button" class="button-primary">See all prestation</button>
            </div>
            <div class="flex flex-wrap w-full justify-center">
              <div class="rounded-xl p-4 overflow-hidden w-full md:w-1/2 lg:w-1/3">
                <img src="{{ url('img') }}/bola.png" alt="bola" class="w-full" />
              </div>
              <div class="rounded-xl p-4 overflow-hidden w-full md:w-1/2 lg:w-1/3">
                <img src="{{ url('img') }}/batminton.png" alt="bola" class="w-full" />
              </div>
              <div class="rounded-xl p-4 overflow-hidden w-full md:w-1/2 lg:w-1/3">
                <img src="{{ url('img') }}/tenis.png" alt="bola" class="w-full" />
              </div>
            </div>
          </div>
        </section>
        <!-- prestasi End -->

        <!-- Artikel Start -->
        <section id="artikel">
          <div class="text-center">
            <h1 class="text-2xl font-bold mb-4">Artikel</h1>
            <p class="text-sm font-medium text-slate-700 mb-10 max-w-lg mx-auto">Kami menyediakan beberapa artikel dari kegiatan - kegiatan pembelajaran maupun lorem ipsum donot saas</p>
          </div>
          <div class="lg:columns-2">
            <div class="mb-3 relative cursor-pointer">
              <img src="{{ url('img') }}/artikel 1.png" alt="" class="h-full w-full" />
              <div class="w-full py-3 px-10 absolute top-5 lg:top-56 p-6 left-0">
                <p class="text-sm font-medium text-slate-300">September 2, 2022</p>
                <h3 class="text-lg font-semibold lg:text-2xl my-4 text-white">Bully Kerap terjadi di Semua Sekolah</h3>
                <p class="text-sm text-slate-200">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror.</p>
              </div>
            </div>
            <div class="mb-3 cursor-pointer">
              <img src="{{ url('img') }}/artikel 2.png" alt="" class="lg:float-left mr-4" />
              <div class="w-full py-3">
                <p class="text-sm font-medium text-slate-500">September 2, 2022</p>
                <h3 class="text-lg font-semibold my-4">Belajar dirumah Ketika Covid-19 Menyebar</h3>
                <p class="text-sm">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror.</p>
              </div>
            </div>
            <div class="mb-3 cursor-pointer">
              <img src="{{ url('img') }}/artikel 3.png" alt="" class="lg:float-left mr-4" />
              <div class="w-full py-3">
                <p class="text-sm font-medium text-slate-500">September 2, 2022</p>
                <h3 class="text-lg font-semibold my-4">Perpaduan antara musik rock dan keroncong</h3>
                <p class="text-sm">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror.</p>
              </div>
            </div>
          </div>
          <div class="text-center mt-10 mb-32">
            <button type="button" class="button-primary">See more</button>
          </div>
        </section>
        <!-- Artikel End -->
      </div>
    </main>
    <!-- Main End -->

    <!-- Galeri Start -->
    <section id="galery" class="py-16 bg-[#f7fbfa]">
      <div class="w-full text-center mb-14">
        <h2 class="font-bold text-2xl mb-6">Gallery</h2>
        <p class="font-medium text-sm text-slate-600 mb-10">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet</p>

        <div class="flex flex-wrap gap-2 justify-center mb-10 lg:flex-nowrap lg:w-full lg:mx-auto lg:overflow-x-scroll">
          <img src="{{ url('img') }}/galeri 4.png" alt="" />
          <img src="{{ url('img') }}/galeri 1.png" alt="" />
          <img src="{{ url('img') }}/galeri 2.png" alt="" />
          <img src="{{ url('img') }}/galeri 3.png" alt="" />
          <img src="{{ url('img') }}/galeri 5.png" alt="" />
        </div>
        <button type="button" class="button-primary">See more</button>
      </div>
    </section>
    <!-- Galeri End -->

    <!-- Footer Start -->
    <footer class="pt-24 bg-[#0E2123] text-white">
      <div class="container">
        <div class="flex items-center gap-2 mb-11">
          <img src="{{ url('img') }}/logo.png" alt="" />
          <h4 class="font-semibold text-base lg:text-lg">Hight School</h4>
        </div>
        <div class="flex flex-wrap w-full">
          <div class="w-full mb-10 p-6 md:w-1/2 lg:w-1/4">
            <p class="font-thin text-sm mb-10">“ Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror. Karriärcoach pyjuskap andropatologi. “</p>
            <div class="flex gap-x-4">
              <img src="{{ url('img') }}/medsos/facebook.png" alt="" />
              <img src="{{ url('img') }}/medsos/Twitter.png" alt="" />
              <img src="{{ url('img') }}/medsos/linkedin.png" alt="" />
              <img src="{{ url('img') }}/medsos/instagram.png" alt="" />
            </div>
          </div>
          <div class="w-full mb-10 p-6 md:w-1/2 lg:w-1/4">
            <h4 class="font-semibold text-base mb-6 lg:text-lg">Jelajah</h4>
            <ul class="font-medium text-sm text-slate-300">
              <li class="mb-4"><a href="">Identitas Sekolah</a></li>
              <li class="mb-4"><a href="">Berita</a></li>
              <li class="mb-4"><a href="">Galery</a></li>
              <li class="mb-4"><a href="">Fasilitas</a></li>
              <li class="mb-4"><a href="">Kontak Kami</a></li>
            </ul>
          </div>
          <div class="w-full mb-10 p-6 md:w-1/2 lg:w-1/4">
            <h4 class="font-semibold text-base mb-6 lg:text-lg">Data Akademi</h4>
            <ul class="font-medium text-sm text-slate-300">
              <li class="mb-4"><a href="">Tenaga Pendidik</a></li>
              <li class="mb-4"><a href="">Tenaga Kependidikan</a></li>
              <li class="mb-4"><a href="">Dafar Siswa</a></li>
              <li class="mb-4"><a href="">Absensi Siswa</a></li>
              <li class="mb-4"><a href="">Organisasi Sekolah</a></li>
              <li class="mb-4"><a href="">Jadwal Pelajaran</a></li>
              <li class="mb-4"><a href="">Jadwal Ujian</a></li>
            </ul>
          </div>
          <div class="w-full mb-10 p-6 md:w-1/2 lg:w-1/4">
            <h4 class="font-semibold text-base mb-6 lg:text-lg">Lokasi</h4>
            <div class="flex items-start w-full mb-4 gap-4">
              <img src="{{ url('img') }}/location.png" alt="alamat" />
              <div class="font-medium text-sm">
                <h5 class="mb-4">Alamat</h5>
                <p class="text-slate-300">3891 Ranchview Dr. Richardson,</p>
                <p class="text-slate-300">California 62639</p>
              </div>
            </div>
            <div class="flex items-start w-full gap-4">
              <img src="{{ url('img') }}/mail.png" alt="kontak" />
              <div class="font-medium text-sm">
                <h5 class="mb-4">Kontak Kami</h5>
                <p class="text-slate-300">Telp: (0266) 123456</p>
                <p class="text-slate-300">Web : www.higntschool.sch.id</p>
                <p class="text-slate-300">email : info@hightschool.sch.id</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->
    <script src="dist/js/script.js"></script>
  </body>
</html>