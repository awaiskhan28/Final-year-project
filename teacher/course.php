<?php 
  session_start();

  if (isset($_SESSION['username'])) {
    # database connection file
    include 'app/db.conn.php';
    include 'app/helpers/user.php';
    include 'app/helpers/conversations.php';
    include 'app/helpers/timeAgo.php';
    include 'app/helpers/last_chat.php';

    # Getting User data data
    $user = getUser($_SESSION['username'], $conn);

    # Getting User conversations
    $conversations = getConversation($user['user_id'], $conn);

?>
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
        <link href="css/style2.css" rel="stylesheet">      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        

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
                                <a class="nav-link " href="home.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="#">Chat</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="logout.php" class="bi-person custom-icon me-3"></a>

                          
                        </div>
                    </div>
                </div>
            </nav>
            <br>
                        <br>

                        
<body class="d-flex
             justify-content-center
             align-items-center
             vh-100">
    <div class="p-2 w-400
                rounded shadow">
      <div>
        <div class="d-flex
                    mb-3 p-3 bg-light
                  justify-content-between
                  align-items-center">
          <div class="d-flex
                      align-items-center">
            <img src="img/profile.png" 
            class="w-25 rounded-circle">
                    <h3 class="fs-xs m-2"><?=$user['name']?></h3> 
          </div>
          <a 
             class="btn btn-dark">Chat</a>
        </div>

        <div class="input-group mb-3">
          <input type="text"
                 placeholder="Search..."
                 id="searchText"
                 class="form-control">
          <button class="btn btn-primary" 
                  id="serachBtn">
                  <i style="font-size:25px;"class="fa fa-search"></i>  
          </button>       
        </div>
        <ul id="chatList"
            class="list-group mvh-50 overflow-auto">
          <?php if (!empty($conversations)) { ?>
              <?php 

              foreach ($conversations as $conversation){ ?>
            <li class="list-group-item">
              <a style="text-decoration: none;text-transform: capitalize;" href="chat.php?user=<?=$conversation['username']?>"
                 class="d-flex
                        justify-content-between
                        align-items-center p-2">
                <div class="d-flex
                            align-items-center">
                    <img src="img/profile.png" 
                         class="w-10 rounded-circle">
                    <h3 class="fs-xs m-2">
                      <?=$conversation['name']?><br>
                      <small>
                        <?php 
                          echo lastChat($_SESSION['user_id'], $conversation['user_id'], $conn);
                        ?>
                      </small>
                    </h3>             
                </div>
                <?php if (last_seen($conversation['last_seen']) == "Active") { ?>
                  <div title="online">
                    <div class="online"></div>
                  </div>
                <?php } ?>
              </a>
            </li>
              <?php } ?>
          <?php }else{ ?>
            <div class="alert alert-info 
                        text-center">
             <i class="fa fa-comments d-block fs-big"></i>
                       No messages yet, Start the conversation
          </div>
          <?php } ?>
        </ul>
      </div>
    </div>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  $(document).ready(function(){
      
      // Search
       $("#searchText").on("input", function(){
         var searchText = $(this).val();
         if(searchText == "") return;
         $.post('app/ajax/search.php', 
               {
                key: searchText
               },
             function(data, status){
                  $("#chatList").html(data);
             });
       });

       // Search using the button
       $("#serachBtn").on("click", function(){
         var searchText = $("#searchText").val();
         if(searchText == "") return;
         $.post('app/ajax/search.php', 
               {
                key: searchText
               },
             function(data, status){
                  $("#chatList").html(data);
             });
       });


      /** 
      auto update last seen 
      for logged in user
      **/
      let lastSeenUpdate = function(){
        $.get("app/ajax/update_last_seen.php");
      }
      lastSeenUpdate();
      /** 
      auto update last seen 
      every 10 sec
      **/
      setInterval(lastSeenUpdate, 10000);

    });
</script>
       
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
  }else{
    header("Location: index.php");
    exit;
  }
 ?>