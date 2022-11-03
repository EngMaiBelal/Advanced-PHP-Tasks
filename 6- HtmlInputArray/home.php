<?php
  // if(isset($_POST['mode'])){
  //   $cookie_name = "mode";
  //   $cookie_value = $_POST['mode'];
  //   setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  // }
?>



<!doctype html>
<html lang="en">
  <head>
    <title>Supermarket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php  if(isset($_COOKIE['mode']) && $_COOKIE['mode'] == 'dark'){ ?>
      <link rel="stylesheet" href="assets/css/dark.css">
    <?php }else{ ?>
      <link rel="stylesheet" href="assets/css/light.css">
    <?php } ?>


  </head>
  <body class="mode-bg">
  <nav class="navbar navbar-expand-lg mode-bg mode-text">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="navbar-brand" href="history.php">History</a>
        </li>
        <li class="nav-item">
          <form action="change-mode.php" method="post">
              <?php if(isset($_COOKIE['mode']) && $_COOKIE['mode'] == 'dark' ){ ?>

                <button name="mode" value="light" class="">
                  <i style="cursor: pointer;" class="fa fa-sun-o" aria-hidden="true"></i>
                </button>
                <?php }else{ ?>
                <button name="mode" value="dark" class="">
                  <i style="cursor: pointer;" class="fa fa-moon-o" aria-hidden="true"></i>
                </button>
                <?php } ?>
            
          </form>

        </li>
        
      </ul>
      
    </div>
  </nav>





      <div class="container">
        
            <div class="row mt-5">
                <div class="col-12 my-5">
                    <h1 class="text-center text-dark mode-text"> Buy Now </h1>
                </div>
                <div class="col-4 offset-4">
                    <form action="buy.php" method="POST"> <!-- go to buy.php  -->
                        <div class="form-group">
                          <label for="members_number" class="mode-text">Number Of Family Members</label>
                          <input type="number" name="members_number" id="members_number" class="form-control mode-text" placeholder="" aria-describedby="helpId">
                        </div>
                        <button class=" btn btn-outline-dark form-control mode-text"> Choose Fruits </button>
                    </form>
                </div>
            </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <!-- <script>
          function toogleMode(){
            var x= document.body;
            // document.body.classList.toggle("dark-mode");
            x.Element.classList.toggle("dark-mode");
          }

    </script> when i need to not reload-->
  
  
  </body>
</html>