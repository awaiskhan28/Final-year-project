<?php
 session_start();
// $useridl=$_SESSION['user_id'];
if(isset($_SESSION['user_id'])) 
{

?>
 <!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Learning Managemeny System</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/slick.css"/>
        <link href="../css/style.css" rel="stylesheet">        

    </head>
    
    <body>

<style>
    .team-link {
        display: block;
        position: relative;
    }
    .team-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(250, 25, 25, 0.5);
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }
    .team-link:hover .team-overlay {
        opacity: 4;
    }
</style>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <strong><span>L</span>MS</strong>
                    </a>

                    <div class="d-lg-none">
                        <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

                       
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                          
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="logout.php" class="bi-person custom-icon me-3"></a>

                          
                        </div>
                    </div>
                </div>
            </nav>
 
            <section class="team section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5">Wel<span>come</span></h2>
                        </div>

                            <div class="col-lg-4 mb-4 col-12">
                                <a href="notes.php" class="team-link">
                                    <div class="team-thumb d-flex align-items-center">
                                        <img src="../images/assets/teacher1.png" class="img-fluid custom-circle-image team-image me-4" alt="">
                                        <div class="team-info">
                                            <h5 class="mb-0">Course notes</h5>                                
                                        </div>
                                    </div>
                                    <div class="team-overlay"></div>
                                </a>
                            </div>
                              <div class="col-lg-4 mb-4 col-12">
                                <a href="assignment.php" class="team-link">
                                    <div class="team-thumb d-flex align-items-center">
                                        <img src="../images/assets/teacher3.png" class="img-fluid custom-circle-image team-image me-4" alt="">
                                        <div class="team-info">
                                            <h5 class="mb-0">Assigments</h5>                                
                                        </div>
                                    </div>
                                    <div class="team-overlay"></div>
                                </a>
                            </div>

                            <div class="col-lg-4 mb-4 col-12">
                                <a href="course.php" class="team-link">
                                    <div class="team-thumb d-flex align-items-center">
                                        <img src="../images/assets/teacher4.png" class="img-fluid custom-circle-image team-image me-4" alt="">
                                        <div class="team-info">
                                            <h5 class="mb-0">Students' Chat</h5>                                
                                        </div>
                                    </div>
                                    <div class="team-overlay"></div>
                                </a>
                            </div>
                        
                      
                    </div>
                </div>
                <br>
                <br>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="index.html">Learning Management</a></h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2023 <strong>LMS</strong></p>
                        <br>
                        <p class="copyright-text">Designed by <a href="" target="_blank">LMS</a></p>
                    </div>

                    <div class="col-lg-5 col-8">
                        <h5 class="text-white mb-3">Sitemap</h5>

                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="about.html" class="footer-menu-link">Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Products</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy policy</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">FAQs</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-skype"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        
        <!-- JAVASCRIPT FILES -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/Headroom.js"></script>
        <script src="../js/jQuery.headroom.js"></script>
        <script src="../js/slick.min.js"></script>
        <script src="../js/custom.js"></script>

    </body>
</html>
<?php
}
else
{
    header("Location: index.php");
}
?>