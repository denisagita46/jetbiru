<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("head.php"); ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="index.html">
                    <img src="<?php echo base_url(); ?>public/assets/img/jbbu/logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?php echo site_url("/"); ?>">About Us</a></li>
                    <li><a href="<?php echo site_url("product"); ?>">Product</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <?php echo $contents; ?>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <?php $this->load->view("foot.php"); ?>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url() ?>/public/assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url() ?>/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url() ?>/public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>/public/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url() ?>/public/assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?php echo base_url() ?>/public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/public/assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>/public/assets/js/main.js"></script>

</body>

</html>