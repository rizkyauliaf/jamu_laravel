@extends('layouts.master')
@section('title', 'JAMU KITA')
@section('konten')
<br>
<br>
<br>
<br>
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Jamu Herbal Alami</h1>
        <h2>Produk Dalam Negeri</h2>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="https://www.femina.co.id/images/images/Peluang-Usaha-Jamu-Kemasan-Dan-Analisa-Usahanya.jpg" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->
<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <img src="https://d220hvstrn183r.cloudfront.net/attachment/52881024896939622944.large" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content">
          <h3>SEJARAH JAMU</h3>
          <p class="">
            INDUSTRI JAMU YANG BERMANFAAT BAGI MASYARAKAT DAN LINGKUNGAN
          </p>
          <p>
            Jamu umumnya digunakan masyarakat Indonesia sebagai minuman obat alami untuk menjaga kesehatam, serta menyembuhkan berbagai penyakit. Tradisi minum jamu ini diperkirakan sudah ada sejak 1300 M dan merupakan minuman bersejarah. Jamu merupakan minuman berkhasiat dari Indonesia sebagai minuman kesehatan, mencegah, dan menyembuhkan berbagai penyakit. Jamu disajikan dengan berbagai jenis, mengingat di Indonesia memiliki tanaman herbal berjumlah cukup banyak. Setiap daerah mempunyai jenis Jamu yang berbeda, menyesuaikan dengan tanaman herbal yng tumbuh didaerahnya.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container">

      <div class="section-title">
        <span>Proses Produksi</span>
      </div>
      <br>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <img src="assets/img/produksi/environmental.png" style="width: 100;">
            <h4><a href="">PELESTARIAN LINGKUNGAN</a></h4>
            <p>Mengurangi dampak kegiatan usaha perusahaan terhadap lingkungan</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <img src="assets/img/produksi/inclusive.png" style="width: 100;">
            <h4><a href="">BISNIS INKLUSIF</a></h4>
            <p>Mendukung keterlibatan petani dalam rantai pasok serta berkontrikusi dalam pembangunan sosial ekonomi di sekitar kami</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <img src="assets/img/produksi/employee.png" style="width: 100;">
            <h4><a href="">KESEJAHTERAAN KARYAWAN</a></h4>
            <p>Menjujung tinggi HAM dan meningkatkan kesejahteraan pegawai</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <img src="assets/img/produksi/product.png" style="width: 100;">
            <h4><a href="">PRODUK BERINTEGRASI</a></h4>
            <p>Menyediakan produk berkualitas tinggi, aman, dan sehat</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <img src="assets/img/produksi/sustainable.png" style="width: 100;">
            <h4><a href="">PENGADAAN BERKELANJUTAN</a></h4>
            <p>Menjamin pengadaan yang berkelanjutan dan bertanggung jawab di seluruh rantai pasok</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <img src="assets/img/produksi/mobil.png" style="width: 100;">
            <h4><a href="">DISTRIBUSI</a></h4>
            <p>Pendistribusian dengan penuh tanggung jawab</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <span>PRODUK INOVASI</span>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">ALL</li>
            <li data-filter=".filter-app">BUBUK</li>
            <li data-filter=".filter-card">CAIR</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/produk/jamupahitan.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>BUBUK 1</h4>
            <p>BUBUK</p>
            <a href="assets/img/produk/jamupahitan.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/produk/jamukunyit.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>CAIR 1</h4>
            <p>CAIR</p>
            <a href="assets/img/produk/jamukunyit.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/produk/jamugalian.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>BUBUK 2</h4>
            <p>BUBUK</p>
            <a href="assets/img/produk/jamugalian.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/produk/jamusinom.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>CAIR 2</h4>
            <p>CAIR</p>
            <a href="assets/img/produk/jamusinom.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/produk/jamupahitan.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>BUBUK 3</h4>
            <p>BUBUK</p>
            <a href="assets/img/produk/jamupahitan.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/produk/jamukunci.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>CAIR 3</h4>
            <p>CAIR</p>
            <a href="assets/img/produk/jamukunci.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/produk/jamugalian.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>BUBUK 4</h4>
            <p>BUBUK</p>
            <a href="assets/img/produk/jamugalian.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/produk/jamukudulaos.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>CAIR 4</h4>
            <p>CAIR</p>
            <a href="assets/img/produk/jamukudulaos.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/produk/jamugalian.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>BUBUK 5</h4>
            <p>BUBUK</p>
            <a href="assets/img/produk/jamugalian.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container">
      <div class="section-title">
        <span>ULASAN</span>
      </div>
      <br>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Jamunya sangat bagus, ditubuh menjadi lebih segar.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Lalalisa</h3>
              <h4>Founder</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Sangat direkomendasikan untuk memebeli jamu diperusahaan ini
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Sarah</h3>
              <h4>Pengusaha</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Sangat banyaK varian yang dijual, jadi pembeli dapat memilih sesuai dengan keluhan yang dimiliki.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Tatang</h3>
              <h4>Pedagang</h4>
            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Jamu tradisional memiliki banyak manfaat sehingga saya menyarakan untuk mengkonsumsi jamu tradisional.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Tomi</h3>
              <h4>Pemilik Toko</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Jamu trasional memiliki efek samping yang lebih kecil sehingga saya mengkonsumsi jamu tradisional daripada obat kimia.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Jeni</h3>
              <h4>Penyanyi</h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container">
      <br><br>
      <div class="section-title">
        <span>BERITA TERKINI</span>
      </div>
      <br><br>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <img src="https://disk.mediaindonesia.com/thumbs/1200x-/news/2020/07/107f38017622cdae037ee6eb98ef64af.jpg" style="width: 200;">
            <h5><a href="">EXPLORE JAMU TRADISIONAL</a></h5>
            <p></p>
            <p>Incar Pasar Eropa, jamu Kami ingin mengexplore jamu lebih banyak lagi ke Eropa. Jamu Akan lebih diexplore dengan lebih...<a href="https://mediaindonesia.com/humaniora/407719/agar-konsumsi-jamu-tetap-menjadi-budaya-bangsa">Selengkapnya</a></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <img src="https://akcdn.detik.net.id/visual/2015/05/10/09544490-be6f-4a2c-970d-c6372bd9c300_169.jpg?w=650" style="width: 200;">
            <h5><a href="">SEHAT DENGAN JAMU, AYO MINUM JAMU</a></h5>
            <p></p>
            <p>Upaya peningkatan kualitas hidup manusia dapat diperoleh dengan meningkatkan kondisi kesehatan, dimana berpengaruh positif..<a href="https://www.bing.com/search?q=media+indonesia.com+tentang+jamu&qs=n&form=QBRE&sp=-1&pq=media+indonesia.com+tentang+jamu&sc=8-32&sk=&cvid=A47F55F4A3C24C019B59BACC67698E83&ghsh=0&ghacc=0&ghpl=">Selengkapnya</a></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <img src="https://warta.jogjakota.go.id/assets/instansi/warta/article/Untitled-161.jpg" style="width: 200;">
            <h5><a href="">JAMU, RAMUAN TRADISIONAL KAYA MANFAAT</a></h5>
            <p></p>
            <p>Jamu di Indonesia biasa digunakan sebagai obat herbal atau hasil meramu bahan-bahan yang berasal dari alam dan memiliki khas..<a href="https://mediaindonesia.com/nusantara/390156/industri-jamu-tradisional-tumbuh-10-20-persen-saat-pandemi">Selengkapnya</a></p>
          </div>
        </div>

      </div>
      <br><br>
    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title">
        <span>TIM</span>
      </div>
      <br>

      <div class="row">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/tim/rose.jpg" alt="">
            <h4>FATIN FURAIDA</h4>
            <span>KELAS : WEB B</span>
            <p>
              POLITEKNIK NEGERI MALANG
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/tim/jeni.jpg" alt="">
            <h4>MARETYATIANHAR GUNSA</h4>
            <span>KELAS : WEB B</span>
            <p>
              POLITEKNIK NEGERI MALANG
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/tim/jiso.jpg" alt="">
            <h4>RIZKY AULIA FARIDATUUZHRO</h4>
            <span>KELAS WEB : B</span>
            <p>
              POLITEKNIK NEGERI MALANG
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/tim/lisa.jpg" alt="">
            <h4>VIRGINIA ABRINSA</h4>
            <span>KELAS WEB : B</span>
            <p>
              POLITEKNIK NEGERI MALANG
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Team Section -->