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
                <a href="login.php">
                  <i class="fa fa-user-circle" aria-hidden="true"></i>
                  <p>Login</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
  </nav>

        <div
          class="registerbox"
          style="padding-top: 20px; padding-bottom: 20px"
        >
          <div style="padding-left: 23%;">
            <font color="white">
              <h2>Create Free Account</h2>
              <br />
              <p style="padding-left:7%;"><b>All fields are required</b></p>
              <br />
            </font>
          </div>
<form onsubmit="return validate()"  method="POST">
            <input type="text" name="Fname" placeholder="First Name" required />

            <input type="text" name="Lname" placeholder="Last Name" required />
            <br /><br />
            <input type="text" name="Username" placeholder="Username" required />
            <input type="email" name="Email" placeholder=" E-mail Address" required />
            <br /><br />

            <select name="Gender">
              <option value="" disabled selected>Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>

            <select name="Country">
              <option value="" disabled selected>Country</option>
              <option value="India">India</option>
              <option value="USA">USA</option>
              <option value="other">Other</option>
            </select>
            <br /><br />

            <input
              placeholder="Date of Birth"
              class="textbox-n"
              name="date"
              type="text"
              onfocus="(this.type='date')"
              id="date"
            />  
            <input
              type="text"
              id="phone"
              name="phone"
              placeholder="Phone Number"
              required
            />
            <br /><br />
            <input
              type="Password"
              id="password"
              name="password"
              placeholder="Password"
              required
            />
            <input
              type="Password"
              id="confirm"
              name=""
              placeholder="Password Confirmation"
              required
            />
            <br /><br />
            <input class="button" type="submit" name="submit" value="submit" />
</form>
        </div>
<br /><br />

<?php
    if(isset($_POST["submit"])){  
        if(!empty($_POST['Username']) && !empty($_POST['password']) && !empty($_POST['Email']) && !empty($_POST['Fname']) && !empty($_POST['Lname']) && !empty($_POST['Gender']) && !empty($_POST['Country']) && !empty($_POST['phone']) && !empty($_POST['date'])) 
        { 

            $fname=$_POST['Fname'];
            $lname=$_POST['Lname'];
            $user=$_POST['Username'];
            $gender=$_POST['Gender'];
            $country=$_POST['Country']; 
            $pass=$_POST['password'];  
            $email=$_POST['Email'];
            $date=$_POST['date'];
            $phone=$_POST['phone'];
            
            $con=mysqli_connect('localhost','root','') or die(mysqli_error());  //PDO, mysql, mysqli
            mysqli_select_db($con,'WDmini') or die("cannot select DB");  
        
            $query=mysqli_query($con,"SELECT * FROM registerdb WHERE user='".$user."'"); 
            
            $numrows=mysqli_num_rows($query);  
            if($numrows==0)
            {  
                $sql="INSERT INTO registerdb(fname,lname,user,email,gender,country,date,phone,pass) VALUES('$fname','$lname'
                ,'$user','$email','$gender','$country','$date','$phone','$pass')";  
        
                $result=mysqli_query($con,$sql); 

                if($result){  
                    header('location: index.php');
                }
                else {  
                    echo "Failure!";
                }
            } 
            else { 
                echo "That username already exists! Please try again with another.";  
            }  
        
        } 
        else {  
            echo "All fields are required!";  
        }  
    } 
?>

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
