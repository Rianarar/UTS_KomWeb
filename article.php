<!DOCTYPE html>
<html lang="en">

<?php 
include "conn.php";
$sql = "SELECT * FROM art";
$result = mysqli_query($koneksi, $sql);
$row = $result->fetch_assoc();
?>

<head>
    <meta charset="utf-8">
    <title><?php echo $row["name"];?></title>
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
                        <a href="experience.php" class="nav-item nav-link">
                        <?php echo $row["exp"];?>
                        </a>
                        <a href="article.php" class="nav-item nav-link active">
                        <?php echo $row["art"];?>
                        </a>
                    </div>
                    <a href="question.php" class="btn btn-primary py-2 px-4"><?php echo $row["ask"];?></a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo $row["title_art"];?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item text-white active"><a><?php echo $row["desc_art"];?></a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal"><?php echo $row["title_abt"];?></h5>
                    <h1 class="mb-5"><?php echo $row["desc_art"];?></h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <a href="<?php echo $row["link1"];?>" class="testimonial-item bg-transparent border rounded p-4 d-block text-decoration-none" style="background-color: #f8f9fa; color: #333;">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p><?php echo $row["desc1"];?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="https://assets.kompasiana.com/items/album/2023/12/20/binus-alam-sutera-658266a5c57afb34d11b0504.jpg?t=o&v=740&x=416" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1"><?php echo $row["judul1"];?></h5>
                                <small><?php echo $row["kom"];?></small>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo $row["link2"];?>" class="testimonial-item bg-transparent border rounded p-4 d-block text-decoration-none" style="background-color: #f8f9fa; color: #333;">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p><?php echo $row["desc2"];?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="https://assets.kompasiana.com/items/album/2024/04/02/newspaper-background-concept-1024x681-660aec6b14709355ef342522.jpg?t=o&v=736&x=414" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1"><?php echo $row["judul2"];?></h5>
                                <small><?php echo $row["kom"];?></small>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo $row["link3"];?>" class="testimonial-item bg-transparent border rounded p-4 d-block text-decoration-none" style="background-color: #f8f9fa; color: #333;">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p><?php echo $row["desc3"];?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01ja8n571bhddcsx8571gyaqrt.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1"><?php echo $row["judul3"]?></h5>
                                <small><?php echo $row["kum"];?></small>
                            </div>
                        </div>
                    </a>
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