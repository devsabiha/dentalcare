<?php

  $conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn,"INSERT INTO contact_form(name, email, number, date)
     VALUES('$name', '$email', '$number', '$date')") or die('query failed');
      if($insert){
        $message[] = 'appointment made successfully';
      }else{
        $message[] = 'appointment failed';
      }
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Dental Care</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Custom css file link-->
    <link rel="stylesheet" href="css/style.css">

</head>
  <body>
      
<!--header section start-->

    <div class="header fixed-top">
        <div class="container">
            <div class="row align-item-center justify-content-between">
                <a href="#home" class="logo">Dental<span>Care.</span></a>
                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#doctor">Doctor</a>
                    <a href="#contact">Contact</a>
                </nav>

                <a href="#contact" class="link-btn">make appointment</a>
               <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </div>

    <!--header section ends-->


    <!--home section starts-->

    <section class="home" id="home">
      <div class="container">
        <div class="row min-vh-100 align-items-center">
          <div class="content  text-mid-left">
            <h3>Let Us Brighten <br> Your Smile</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sed <br> incidunt distinctio accusantium reiciendis error.</p>
            <a href="#contact" class="link-btn">Make Appointment</a>
          </div>
        </div>

      </div>
    </section>
<!--home section ends-->

<!--about section start-->
  <section class="about" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 image">
          <img src="img/about.jpg" class="w-100 mb-4 mb-md-0" alt="">
        </div>
        <div class="col-md-6 content">
          <span>Aout Us</span>
          <h3>True Healthcare For Your Family</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ratione animi deserunt, iste praesentium incidunt? Deleniti vel consequatur provident fugiat!</p>
          <a href="#contact" class="link-btn">Make Appointment</a>

        </div>
      </div>
    </div>
  </section>
  <!--about section ends-->
  <section class="services" id="services">
    <h1 class="heading">Our Services</h1>

    <div class="box-container container">


      <div class="box">
      <img  src="img/tooth1.png" alt="">

        <h3>Alignment Specialist</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sit?</p>
      </div>

      <div class="box">
      <img  src="img/tooth1.png" alt="">
        <h3>Alignment Specialist</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sit?</p>
      </div>

      <div class="box">
      <img  src="img/tooth1.png" alt="">
        <h3>Alignment Specialist</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sit?</p>
      </div>

      <div class="box">
      <img  src="img/tooth1.png" alt="">
        <h3>Alignment Specialist</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sit?</p>
      </div>

      <div class="box">
      <img  src="img/tooth1.png" alt="">
        <h3>Alignment Specialist</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sit?</p>
      </div>

      <div class="box">
      <img  src="img/tooth1.png" alt="">
        <h3>Alignment Specialist</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sit?</p>
      </div>
    </div>
  </section>

  <!--about section end-->

  <!--process section start-->

  <section class="process">
    <h1 class="heading">Work Process</h1>
    <div class="box-container container">

      <div class="box">
        <img src="img/pros1.jpg" alt="">
        <h3>Cosmetic Densitry</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, sint!</p>
      </div>
      <div class="box">
        <img src="img/pros2.jpg" alt="">
        <h3>Cosmetic Densitry</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, sint!</p>
      </div>
      <div class="box">
        <img src="img/pros3.jpg" alt="">
        <h3>Cosmetic Densitry</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, sint!</p>
      </div>
    </div>

  </section>

  <!--process section end-->
   

  <!--Review section start-->

<section class="reviews" id="reviews">
  <h1 class="heading">Satisfied Client</h1>
  <div class="box-container container">

    <div class="box">
      <img src="img/t1.jpg" alt="">
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur doloribus quam at laudantium explicabo ipsam, consequatur quod perspiciatis culpa eum!</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>Jhon Deo</h3>
      <span>satisfied client</span>
    </div>


    <div class="box">
      <img src="img/t5.jpg" alt="">
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur doloribus quam at laudantium explicabo ipsam, consequatur quod perspiciatis culpa eum!</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>Jhon Deo</h3>
      <span>satisfied client</span>
    </div>


    <div class="box">
      <img src="img/t2.jpg" alt="">
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur doloribus quam at laudantium explicabo ipsam, consequatur quod perspiciatis culpa eum!</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>Jhon Deo</h3>
      <span>satisfied client</span>
    </div>

  </div>
</section>

<!--review section end-->
<!--contact starts-->

<section class="contact" id="contact">
  <h1 class="heading">Make Appointment</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <?php
            if(isset($message)){
              foreach($message as $message){
                echo '<p class="message">'.$message.'</p>' ;
              }
            }
        ?>
     
      <span>your name :</span>
      <input type="text" name="name" placeholder="Enter your name" class="box" >
      <span>your email :</span>
      <input type="email" name="email" placeholder="Enter your email" class="box" >
      <span>your number :</span>
      <input type="number" name="number" placeholder="Enter your number" class="box">
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" >
      <input type="submit" value="make appointment" name="submit" class="link-btn">
     
    
  </form>
</section>


<!--contact end-->


  </body>
</html>