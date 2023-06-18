<?php
 session_start();
// $useridl=$_SESSION['user_id'];
if(isset($_SESSION['user_id'])) 
{

include("db.php");

$user=$_SESSION['user_id'];
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

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/style.css" rel="stylesheet">        

    </head>
    
    <body>


<style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }

      h1 {
        text-align: center;
        margin-top: 30px;
        margin-bottom: 30px;
        color: #333;
      }

      .container {
      }

      .btn {
        background-color: #000;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        margin-bottom: 10px;
      }

      .btn:hover {
        background-color: #ff0000;
      }

      .input-container {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
      }

      .input-container label {
        font-weight: bold;
        margin-bottom: 5px;
      }

      .input-container input[type="text"],
      .input-container textarea {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        background-color: #fff;
        resize: vertical;
        min-height: 100px;
      }

      .input-container input[type="text"]:hover {
        border-color: red;
      }

      .input-container input[type="file"] {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        background-color: #fff;
      }

      .notes-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        grid-gap: 20px;
        margin-top: 30px;
      }

      .note {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .note-caption {
        font-weight: bold;
        margin-bottom: 5px;
      }

      .note-img {
        max-width: 100%;
        margin-bottom: 10px;
      }

      .note-pdf {
        background-color: #eee;
        padding: 10px;
        margin-bottom: 10px;
      }
      .file-info {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  border-bottom: 1px solid #ccc;
}
.file-info {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.file-caption {
  width: 30%;
  vertical-align: top;
}

.file-date {
  width: 30%;
  vertical-align: top;
}

.file-type {
  width: 10%;
  vertical-align: top;
}

.file-view {
  width: 30%;
  vertical-align: top;
  text-align: right;
}

.file-view a {
  color: #337ab7;
  text-decoration: none;
}

.file-view a:hover {
  text-decoration: underline;
}
.input-container select,
.input-container input[type="date"] {
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  padding: 8px;
  width: 100%;
  box-sizing: border-box;
  margin-bottom: 16px;
}

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
                            <li class="nav-item">
                                <a class="nav-link active" href="server.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.html">Story</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="faq.html">FAQs</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
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
                            <h2 class="mb-5">WEL<span>COME</span></h2> 
                        </div>

                            <div class="col-lg-4 mb-4 col-12">
                                <a href="serverRecords.php" class="team-link">
                                    <div class="team-thumb d-flex align-items-center">
                                        <img src="images/assets/asset1.png" class="img-fluid custom-circle-image team-image me-4" alt="">
                                        <div class="team-info">
                                    <h5 class="mb-0">Academic Records</h5>                               
                                        </div>
                                    </div>
                                    <div class="team-overlay"></div>
                                </a>
                            </div>
                            <div class="col-lg-4 mb-4 col-12">
                                <a href="serverClasswork.php" class="team-link">
                                    <div class="team-thumb d-flex align-items-center">
                                        <img src="images/assets/asset2.png" class="img-fluid custom-circle-image team-image me-4" alt="">
                                        <div class="team-info">
                                            <h5 class="mb-0">Classwork</h5>                                
                                        </div>
                                    </div>
                                    <div class="team-overlay"></div>
                                </a>
                            </div>

                            <div class="col-lg-4 mb-4 col-12">
                                <a href="serverObjective.php" class="team-link">
                                    <div class="team-thumb d-flex align-items-center">
                                        <img src="images/assets/asset3.png" class="img-fluid custom-circle-image team-image me-4" alt="">
                                        <div class="team-info">
                                            <h5 class="mb-0">Objectives</h5>                                
                                        </div>
                                    </div>
                                    <div class="team-overlay"></div>
                                </a>
                            </div>

                            <div class="col-lg-4 mb-4 col-12">
                                <a href="serverDeadline.php" class="team-link">
                                    <div class="team-thumb d-flex align-items-center">
                                        <img src="images/assets/asset4.png" class="img-fluid custom-circle-image team-image me-4" alt="">
                                        <div class="team-info">
                                            <h5 class="mb-0">Deadlines</h5>                                
                                        </div>
                                    </div>
                                    <div class="team-overlay"></div>
                                </a>
                            </div>

                            <div class="col-lg-4 mb-4 col-12">
                                <a href="serverReport.php" class="team-link">
                                    <div class="team-thumb d-flex align-items-center">
                                        <img src="images/assets/asset5.png" class="img-fluid custom-circle-image team-image me-4" alt="">
                                        <div class="team-info">
                                            <h5 class="mb-0">Completed</h5>                                
                                        </div>
                                    </div>
                                    <div class="team-overlay"></div>
                                </a>
                            </div>         
                            
                            <div class="col-lg-4 mb-4 col-12">
                                <a href="home.php" class="team-link">
                                    <div class="team-thumb d-flex align-items-center">
                                        <img src="images/assets/teacher4.png" class="img-fluid custom-circle-image team-image me-4" alt="">
                                        <div class="team-info">
                                            <h5 class="mb-0">Chat</h5>                                
                                        </div>
                                    </div>
                                    <div class="team-overlay"></div>
                                </a>
                            </div>               

                      
                    </div>
                </div>
                <br>
                <br>

                <center><h2 class="text">Upcoming<span> Deadlines</span></h2></center>
            <div class="notes-container">
            
                  <div style="background:white;"class="container">
                    <div class="row">


                        <div class="col-lg-12 mx-auto col-11">
                        <br>
              
                            <br>
                          
               <?php
// Retrieve data from the database
 $query = "SELECT * FROM objective where completed=0 and course='server' ORDER BY duedate ASC limit 6";
$result = mysqli_query($conn, $query);
// if (!$result) {
//     die('Error in query: ' . mysqli_error($conn));
// }

// Display the data
if (mysqli_num_rows($result) > 0)
 {
    echo '<div class="">';
    while ($row = mysqli_fetch_assoc($result)) {
        $filename = $row['file'];
        $caption = ucfirst($row['caption']);
        $date = $row['duedate'];
        $file_type = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $currentDate = new DateTime(); // Create a new DateTime object for the current date
        $futureDate = new DateTime($date); // Create a new DateTime object for the future set date

        $interval = $currentDate->diff($futureDate); // Get the difference between the two dates as a DateInterval object
        $remain = $interval->format('%a'); // Format the interval to get the number of remaining days

        // Display file information
        echo '<div class="file-info">';
        echo '<div class="file-caption">' . $caption . '</div>';
        echo 'Due: <div class="file-date"> ' . $date . '</div>';
        
        if ($currentDate > $futureDate) {
            // Display late information
            $lateDays = $currentDate->diff($futureDate)->format('%a');
            echo '<div style="color:red;" class="file-date">' . $lateDays . ' days late</div>';
        } else {
            // Display remaining days information
            echo '<div style="color:green;" class="file-date">' . $remain . ' days left</div>';
        }
        
        echo '<div class="file-type">' . strtoupper($file_type) . '</div>';
        echo '<div class="file-view"><a class="btn-download" href="AcademicRecords/' . $filename . '" target="_blank">View/Download</a></div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo 'No records found.';
}
?>

                            <br>
                            <!-- php code for upcoming deadlines  -->
                            <br>
                            <br>
                             <br>
                            <br>
                    </div>
                </div>
 
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
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
<?php
}
else
{
    header("Location: sign-in.html");
}
?>