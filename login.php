<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tails of joy</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="myscript.js"></script>
  </head>

  <div style="background-color: #fff">
    <body>
      <nav>
        <div class="HeaderBox">
          <div style="padding-left: 5px; float: left">
            <h2>TAILS OF JOY</h2>
          </div>
          <div class="titlebar">
            <ul>
              <li class="Home">
                <a href="index.php">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="Home">
              <a href="petad.php">
                <i class="fa fa-paw" aria-hidden="true"></i>
                <p>Pet Add</p>
              </a>
            </li>
              <li class="Home">
                <a href="postad.php">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  <p>Post Add</p>
                </a>
              </li>
              <!--<li class="Home">
                <a href="#">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <p>cart</p>
                </a>
              </li>-->
              <li class="Home">
                <a href="register.php">
                  <i class="fa fa-user-circle" aria-hidden="true"></i>
                  <p>Register</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <div class="registerbox" style="padding-top: 20px; padding-bottom: 20px">

          <div style="padding-left: 35%;">
            <font color="white">
              <h2>Login</h2>
              <br />
            </div>
            <div  style="padding-left: 25%;">
              <p><b>All fields are required</b></p>
              <br />
            </font>
          </div>

        <form onsubmit="return validate()" method="POST">
            <input
              type="text"
              name="user"
              placeholder="Username"
              required
            />
            <input
              type="Password"
              id="password"
              name="pass"
              placeholder="Password"
              required
            />
            <br /><br />
            <input class="button" type="submit" name="submit" value="Login" />
        </form>
        </div>
      <br /><br />
    
<?php  
        if(isset($_POST["submit"])){  
        
        if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
            $user=$_POST['user'];  
            $pass=$_POST['pass']; 
            $txt1 = "Learn PHP";  
        
            $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
            mysqli_select_db($con,'WDmini') or die("cannot select DB");  
        
            $query=mysqli_query($con,"SELECT * FROM registerdb WHERE user='".$user."' AND pass='".$pass."'");  
            $numrows=mysqli_num_rows($query);  
            if($numrows!=0)  
            {  
            while($row=mysqli_fetch_assoc($query))  
            {  
            $dbusername=$row['user'];  
            $dbpassword=$row['pass'];  
            }  
        
            if($user == $dbusername && $pass == $dbpassword)  
            {  
            session_start();
            $_SESSION['sess_user']=$user;  
            header("Location: index.php");  
            }  
            } else {  
            echo "Invalid username or password!";     
            }  
        
        } else {  
            echo "All fields are required!";  
        }  
        }  
?> 
  <br><br>
      <footer>
        <div class="main-content">
          <div class="left box">
            <h2>About us</h2>
            <div class="content">
              <p>
                Tails of joy is your one-stop online pet supply store, where you
                can find high-quality pet supplies, which helps your pet at
                every life-stage. Tails of joy will help you choose the most
                appropriate dog food, supplements, treats, toys, dog
                accessories. Not only that but also for cats, guinea pigs,
                rabbits, hamsters, turtles, birds & aquatic animals.
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
  </div>
</html>
