<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Services | Infinio Technology Solutions</title>
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
                                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
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

        <!-- Pricing Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp"
                    data-wow-delay="0.1s" style="max-width: 600px">
                    <h1 class="mb-3">SERVICE OFFERINGS</h1>
                    <!-- <p class="mb-1">
                        Vero justo sed sed vero clita amet. Et justo vero sea diam elitr
                        amet ipsum eos ipsum clita duo sed. Sed vero sea diam erat vero
                        elitr sit clita.
                    </p> -->
                </div>
                <div class="row gy-5 gx-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle"
                                style="width: 45px; height: 45px; margin-top: -3px">
                                <i class="fa fa-desktop text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Web Application Development</h4>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="mb-5">
                                    End-to-end personalized web application development employs a methodical approach
                                    that keeps...
                                </p>

                                <a class="btn btn-primary px-4 py-2" href="web-application-dev.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle"
                                style="width: 45px; height: 45px; margin-top: -3px">
                                <i class="fa fa-cogs text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Enterprise Application Development</h4>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="mb-5">
                                    Many off-the-shelf solutions would be unable to fulfil the precise business
                                    requirements of a large..
                                </p>

                                <a class="btn btn-primary px-4 py-2"
                                    href="enterprise-application-development-services.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mb-5" data-wow-delay="0.6s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle"
                                style="width: 45px; height: 45px; margin-top: -3px">
                                <i class="fa fa-code text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Custom Application Development</h4>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="mb-5">
                                    Partner with Infinio to create unique and cost-effective software solutions for
                                    increasing business...
                                </p>

                                <a class="btn btn-primary px-4 py-2" href="custom-application-development.php">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mb-5" data-wow-delay="0.6s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle"
                                style="width: 45px; height: 45px; margin-top: -3px">
                                <i class="fa fa-code text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Internet Of Things</h4>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="mb-5">
                                    The idea of IoT is possibly one of the most revolutionary and innovative
                                    advancements in the field...
                                </p>

                                <a class="btn btn-primary px-4 py-2" href="internet-of-things.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mb-5" data-wow-delay="0.6s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle"
                                style="width: 45px; height: 45px; margin-top: -3px">
                                <i class="fa fa-code text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Digital Marketing</h4>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="mb-5">
                                    Whatever it takes, we'll make sure your brand is visible to consumers in this
                                    digital age...
                                </p>

                                <a class="btn btn-primary px-4 py-2" href="digital-marketing.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mb-5" data-wow-delay="0.6s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle"
                                style="width: 45px; height: 45px; margin-top: -3px">
                                <i class="fa fa-code text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Technology Training</h4>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="mb-5">
                                    Professional Training by Industrial leading developers. So the learners can
                                    experience..
                                </p>

                                <a class="btn btn-primary px-4 py-2" href="technology-training.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow mx-autol fadeInUp mb-5" data-wow-delay="0.6s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle"
                                style="width: 45px; height: 45px; margin-top: -3px">
                                <i class="fa fa-code text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Mobile Application Development</h4>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="mb-5">
                                    We provide rich and intuitive mobile solutions for iOS, Android, Windows Phone,
                                    responsive web...
                                </p>

                                <a class="btn btn-primary px-4 py-2" href="mobile-application-development.php">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mx-autor mb-5" data-wow-delay="0.6s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle"
                                style="width: 45px; height: 45px; margin-top: -3px">
                                <i class="fa fa-code text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Learning Management System</h4>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="mb-5">
                                    We deliver comprehensive and Customized learning management solutions using Moodle
                                    tools...
                                </p>

                                <a class="btn btn-primary px-4 py-2" href="learning-management-system.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp section-title"
                    data-wow-delay="0.1s" style="max-width: 600px">
                    <!-- <a href="" class="text-black btn btn-secondary py-sm-3 px-sm-5 me-3 animated slideInLeft">Explore More</a> -->
                </div>
            </div>
        </div>
        <!-- Pricing End -->

        <?php include('../partials/footer.php') ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top">
            <i class="bi bi-arrow-up"></i>
        </a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="//code.tidio.co/7eu3fr4z7oetu8afoorijlhybeaooh18.js" async></script>
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