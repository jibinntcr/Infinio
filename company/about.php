<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About | Infinio Technology Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favi.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php include('../partials/header.php') ?>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 pt-5">
                        <div class="col-12 text-center text-lg-start">
                            <!-- <h1 class="display-4 text-white animated slideInLeft">Web Application Development</h1> -->
                            <nav aria-label="breadcrumb">
                                <ol
                                    class="breadcrumb justify-content-center justify-content-lg-start animated slideInLeft">
                                    <li class="breadcrumb-item">
                                        <a class="text-white" href="../index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a class="text-white" href="">Company</a>
                                    </li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 40, 51, 0.8);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3"
                                placeholder="Type search keyword">
                            <button class="btn btn-light px-4">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-4">
                            <h1 class="mb-2">ABOUT US</h1>
                        </div>
                        <p class="mb-4 para-justify">Infinio Technology Solutions is a professional IT company
                            based in India. We
                            have spread our wings in the business of software development, Web Designing & Multimedia,
                            E-Commerce Solutions, Search Engine Optimization, Mobile Application Development, Business
                            Software Services, Digital Marketing Solutions, etc. We follow three main rules to get to
                            our goals: do it on time, do it within the scope, and offer the best service at a lower
                            cost.</p>
                    </div>
                    <div class="col-lg-5">
                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="../img/about-img.jpg">
                    </div>
                </div>
            </div>
        </div>


        <!-- Comparison Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5 comparison position-relative">
                    <div class="col-lg-6 pe-lg-5 align-items-center justify">
                        <div class="section-title position-relative mx-auto mb-4 pb-4 wow fadeIn" data-wow-delay="0.1s">
                            <h3 class="fw-bold mb-0">Our Mission</h3>
                        </div>
                        <div class="wow fadeIn" data-wow-delay="0.5s">
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5 align-items-center justify">
                        <div class="section-title position-relative mx-auto mb-4 pb-4 wow fadeIn" data-wow-delay="0.1s">
                            <h3 class="fw-bold mb-0">Our Vission</h3>
                        </div>
                        <div class="wow fadeIn" data-wow-delay="0.5s">
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <?php include('../partials/footer.php') ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top">
            <i class="bi bi-arrow-up"></i>
        </a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>