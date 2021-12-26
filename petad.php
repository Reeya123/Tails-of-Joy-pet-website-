<!DOCTYPE html>
<?php 
 session_start();
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['sess_user']);
  	header("location: login.php");
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Tails of Joy</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="style1.css" />
  </head>
  
  <body>
    <header>
        <nav>
        <div class="HeaderBox">
            <div style="padding-left: 5px; float: left"><h2>TAILS OF JOY</h2></div>
            <div class="titlebar">
            <ul>
                <li class="Home">
                <a href="index.php">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <p>Home</p>
                </a>
                </li>
                <li class="Home">
                <a href="postad.php">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <p>Post Add</p>
                </a>
                </li>
                <li class="Home">
                <a href="dogsupplies.php">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <p>Pet Supplies</p>
                </a>
                </li>

                <!--<li class="Home">
                <a href="#">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <p>Cart</p>
                </a>
                </li>-->

                <?php if(isset($_SESSION['sess_user'])) :?>
                <li class="Home">
                <a href="#">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p><?php echo $_SESSION['sess_user'];?></p>
                </a>
                <ul>
                    <li><a href="index.php?logout='1'">logout</a></li>
                </ul>
                </li>
                <?php endif ?>

                <?php if(!isset($_SESSION['sess_user'])): ?>
                <li class="Home">
                <a href="#">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p>Sign up</p>
                </a>
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
                </li>
                <?php endif ?>
            </ul>
            </div>
        </div>
        </nav>
    </header>
    
    
  <?php
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  //PDO, mysql, mysqli
    mysqli_select_db($con,'WDmini') or die("cannot select DB");  

    $query="SELECT * FROM post";

    $result=mysqli_query($con,$query);
    
    while($row=mysqli_fetch_array($result))
    {
    $id=$row['id'];
    echo '<div class="whitebox">';
       echo '<table cellspacing="20">';
            echo '<tr>';
                echo '<td>';
                    echo '<img src="images/'.$row['image1'].'" style="height:400px; width:250px; margin-left:relative;">';
                    echo "<br><br>";
                    echo '<label><strong>Pet Name :  </strong></label>';
                        echo $row['PetName'];
                        echo "<br><br>";
                    echo '<label><strong>Price :  </strong></label>';
                        echo $row['price'];
                        echo "<br><br>";
                   echo '<label><strong>Address :  </strong></label>';
                        echo $row['address'];
                        echo "<br><br>";
                    echo '<label><strong>Description :  </strong></label>';
                        echo $row['description'];
                        echo "<br><br>";
                    echo"<form action='buypet.php?id=$id'>";
                        echo "<button name='buy' value='$id' type='submit' > BUY </button>";
                        echo "<br><br>";
                    echo"</form>";
                echo '</td>';
           echo '</tr>';
        echo '</table>';
    echo '</div>';
    }
  ?>

  <?php
    /*if(isset($_POST['buy']))
    {
      $id = $_POST['buy'];
      $newLocation = "buypet.php?id=$id";
      header("Location:$newLocation");
    }*/
  ?>

    <br><br><br><br>
    <footer>
      <div class="main-content">
        <div class="left box">
          <h2>About us</h2>
          <div class="content">
            <p>
              Tails of joy is your one-stop online pet supply store, where you
              can find high-quality pet supplies, which helps your pet at every
              life-stage. Tails of joy will help you choose the most appropriate
              dog food, supplements, treats, toys, dog accessories. Not only
              that but also for cats, guinea pigs, rabbits, hamsters, turtles,
              birds & aquatic animals.
            </p>
            <div class="social">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>

        <div class="cenetr box">
          <h2>Customer Care</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Kurla, Mumbai</span>
            </div>
            <div class="Phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+91-7658760980</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">TailsOfJoy@gamil.com</span>
            </div>
          </div>
        </div>
        <div class="right box">
          <h2>Contact us</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" required />
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <textarea rows="2" cols="25" required></textarea>
              </div>
              <div class="btn">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>