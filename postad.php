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
    <link rel="stylesheet" type="text/css" href="style1.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <body>
    <header class="Headerbox">
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

    <br />
    <div >
      <table cellspacing="20">
        <tr>
          <td>
            <form action="" method="POST" enctype="multipart/form-data">
              <label for="">Pet Name</label><br />
              <input
                type="text"
                placeholder="Enter pet name"
                name="petName"
                required
              /><br /><br />
              <label for="">Choose a Category:</label><br /><br />
              <input
                type="text"
                placeholder="Category"
                name="category"
                required
              /><br /><br />
              <label for="">Price</label><br /><br />
              <input
                type="number"
                placeholder="Enter the price"
                name="price"
                required
              /><br /><br />
              <label for="">Description:</label><br /><br />
              <textarea
                type="text"
                cols="50"
                rows="4"
                name="description"
                required
              ></textarea
              ><br /><br />
              <label for="">Address</label><br>
              <textarea
                type="text"
                cols="50"
                rows="2"
                name="address"
                required
              ></textarea
              ><br /><br />
              <label for=""> Pet gazzete certificate</label><br />
              <input type="file" name="petGazzete" /><br /><br />
              <label for="">Medical certificate:</label><br />
              <input type="file" name="medicalCertificate" /><br /><br />
              <label for="">Add pictures:</label><br />
              <input type="file" name="image1" id="fileToUpload" /><br />
              <input type="file" name="image2" id="fileToUpload" /><br /><br />
              <input type="submit" name="submit" value="Submit" />
            </form>
          </td>
          <td>
            <img
              src="https://i.pinimg.com/originals/3d/22/29/3d22297cd3c803379de51d15402b7137.jpg"
              alt=""
            />
          </td>
        </tr>
      </table>
    </div>
    <br /><br /><br /><br />

<?php
    if(isset($_POST["submit"])){
        $target1="images/".basename($_FILES['image1']['name']);
        $target2="images/".basename($_FILES['image2']['name']);
        $target3="files/".basename($_FILES['petGazzete']['name']);
        $target4="files/".basename($_FILES['medicalCertificate']['name']);

        if(!empty($_POST["petName"]) && !empty($_POST["category"]) && !empty($_POST["price"]) && !empty($_POST["address"])&& !empty($_POST["description"])){

            $petName=$_POST["petName"];
            $category=$_POST["category"];
            $price=$_POST["price"];
            $description=$_POST["description"];
            $address=$_POST["address"];
            $gazzete=$_FILES["petGazzete"]['name'];
            $certificate=$_FILES["medicalCertificate"]['name'];
            $image1=$_FILES["image1"]['name'];
            $image2=$_FILES["image2"]['name'];

            $con=mysqli_connect('localhost','root','') or die(mysqli_error());  //PDO, mysql, mysqli
            mysqli_select_db($con,'WDmini') or die("cannot select DB");  
        
            $query=mysqli_query($con,"SELECT * FROM post WHERE PetName='".$petName."'"); 
            
            $numrows=mysqli_num_rows($query);

            if($numrows==0)
            {  
                $sql="INSERT INTO post (PetName,category,price,description,address,PetGazzete,MedicalCertificate,image1,image2) 
                VALUES('$petName','$category','$price','$description','$address','$gazzete','$certificate',
                '$image1','$image2')";  
        
                $result=mysqli_query($con,$sql); 

                if($result){  
                    //header('location: index.php');
                    move_uploaded_file($_FILES['image1']['tmp_name'],$target1);
                    move_uploaded_file($_FILES['image2']['tmp_name'],$target2);
                    move_uploaded_file($_FILES['petGazzete']['tmp_name'],$target3);
                    move_uploaded_file($_FILES['medicalCertificate']['tmp_name'],$target4);
                    echo "uploaded successfully";
                }
                else {  
                    echo "Failure!";
                }
            } 
            else { 
                echo "That username already exists! Please try again with another.";  
            }
        }
        else{
            echo  "All fields are required!"; 
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
