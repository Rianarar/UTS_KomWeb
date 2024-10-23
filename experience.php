<!DOCTYPE html>
<html lang="en">

<?php 
include "conn.php";
$sql = "SELECT * FROM exp";
$result = mysqli_query($koneksi, $sql);
$row = $result->fetch_assoc();
?>

<head>
    <meta charset="utf-8">
    <title>Nurfajrian Abdurrohman</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="container-xxl pozsition-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"></i><p>
                    <?php echo $row["prof"];?>
                    </p></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">
                        <?php echo $row["home"];?>
                        </a>
                        <a href="about.php" class="nav-item nav-link">
                        <?php echo $row["abt"];?>
                        </a>
                        <a href="experience.php" class="nav-item nav-link active">
                        <?php echo $row["exp"];?>
                        </a>
                        <a href="article.php" class="nav-item nav-link">
                        <?php echo $row["art"];?>
                        </a>
                    </div>
                    <a href="question.php" class="btn btn-primary py-2 px-4"><?php echo $row["ask"];?></a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo $row["title_exp"];?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item text-white active"><a><?php echo $row["desc_exp"];?></a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/pengajar.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/hima.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/naluri.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal"><?php echo $row["title_abt"];?></h5>
                        <h1 class="mb-4"><?php echo $row["title"];?></h1>
                        <h3 class="mb-2"><?php echo $row["pengajar"];?>r</h3>
                        <p class="mb-4"><?php echo $row["desc_pengajar"];?></p>
                        <h3 class="mb-2"><?php echo $row["hima"];?></h3>
                        <p class="mb-4"><?php echo $row["desc_hima"];?></p>
                        <h3 class="mb-2"><?php echo $row["part"];?></h3>
                        <p class="mb-4"><?php echo $row["desc_part"];?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $row["adr"];?></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $row["nmb"];?></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $row["eml"];?></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=<?php echo $row["ig"];?>><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=<?php echo $row["wa"];?>><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-outline-light btn-social" href=<?php echo $row["link"];?>><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <small><i class="fa fa-copyright me-3"></i><?php echo $row["cr"];?></small>
                </div>
            </div>
        </div>

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>