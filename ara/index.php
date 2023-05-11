<?php
include_once 'koneksi.php';
include_once 'header.php';
include_once 'hero.php';
require_once 'models/Produk.php';
// Buat Object
$obj = new Produk();
$rs = $obj->dataProduk();
?>
<main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="product" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Product</h2>
                <p></p>
            </div>

            <div class="row gy-4 portfolio-container">

                <?php foreach ($rs as $prod) : ?>
                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="assets/img/produk.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"><?= $prod['nama'];  ?></a></h4>
                                <p><?= $prod['kategori'];  ?></p>
                                <a href="detailProduk.php?id=<?= $prod['id'] ?>" class="btn btn-success">Detail</a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->
                <?php endforeach; ?>
            </div><!-- End Portfolio Container -->

        </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Testimonials</h2>
            </div>

            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="f.png" class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Fiby Naya</h3>
                                        <h4>Student</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Recommended bgt beli AC disini. Adminnya fast respon,pemasangan ACnya cpt bgt,teknisinya jg sopan+ramah.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="d.png" class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Dewi</h3>
                                        <h4>Student</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Rasanya enak banget,dagingny berasa ditambah pengirimannya cpet banget
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="g.png" class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Galuh</h3>
                                        <h4>Student</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Paket sampai dengan cepat,kondisi bagus,barang juga tidak ada yang kurang, adminnya responsif pelayanan bagus
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                   
                </div>
               
            </div>

        </div>
    </section><!-- End Testimonials Section -->


</main><!-- End #main -->

<?php
include_once 'footer.php';
?>