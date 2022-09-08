@extends('layouts.master')
@section('title', 'JAMU KITA')
@section('konten')
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
            <img src="assets/img/produksi/" style="width: 100;">
            <h4><a href="">XXXX</a></h4>
            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
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
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
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

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-laptop"></i></div>
            <h4 class="title"><a href="">Explore Jamu Tradisional</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-clipboard-data"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title">
        <span>Team</span>
        <h2>Team</h2>
        <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/team/team-1.jpg" alt="">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <p>
              Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
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
            <img src="assets/img/team/team-1.jpg" alt="">
            <h4>Sarah Jhinson</h4>
            <span>Product Manager</span>
            <p>
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
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
            <img src="assets/img/team/team-1.jpg" alt="">
            <h4>William Anderson</h4>
            <span>CTO</span>
            <p>
              Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
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
            <img src="assets/img/team/team-1.jpg" alt="">
            <h4>William Anderson</h4>
            <span>CTO</span>
            <p>
              Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
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
  </section><!-- End Team Section -->