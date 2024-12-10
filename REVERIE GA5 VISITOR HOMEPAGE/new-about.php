<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About Us</h3>
   <p> <a href="home.php">Home</a> /About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/newLogo.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>More than just products, we offer an experience.  At Reverie, we're dedicated to providing exceptional customer service.  Our team of skincare experts is available to answer your questions and guide you in finding the perfect products for your unique needs.  We offer personalized recommendations, easy online ordering, and fast, reliable shipping.  Your satisfaction is our top priority, and we're committed to building long-lasting relationships with our customers.
</p>
      
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Customer's Product Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/rosmar.jpg" alt="">
         <p>I bought a toner in this site and it blends well to my skin. I will definitely order again.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rosmar Kagayaku</h3>
      </div>

      <div class="box">
         <img src="images/kyla.jpg" alt="">
         <p>Ang ganda ng productssss</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kyla Isabelle Sayson</h3>
      </div>

      <div class="box">
         <img src="images/tine.jpg" alt="">
         <p>5 star to sakin</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Kristine Villanueva</h3>
      </div>

      <div class="box">
         <img src="images/rence.jpg" alt="">
         <p>Nice!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lorenze Prepotente</h3>
      </div>

      <div class="box">
         <img src="images/claries.jpg" alt="">
         <p>Bumili ako ng eyelashes here and it is so cutie</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Claries Amistoso</h3>
      </div>

      <div class="box">
         <img src="images/baby ko.jpg" alt="">
         <p>Gandaaa</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Ymir</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">REVERIE MEMBERS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/rechelle.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-tiktok"></a>
         </div>
         <h3>RECHELLE BORBE<h3>
      </div>

      <div class="box">
         <img src="images/faith.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-tiktok"></a>
         </div>
         <h3>FAITH ANN SAÑADO</h3>
      </div>

      <div class="box">
         <img src="images/susaine.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-tiktok"></a>
         </div>
         <h3>SUSAINE RICO</h3>
      </div>

      <div class="box">
         <img src="images/curt1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-tiktok"></a>
         </div>
         <h3>CURT JUSTIN REODIQUE</h3>
      </div>

      <div class="box">
         <img src="images/mhelarry.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-tiktok"></a>
         </div>
         <h3>MHELARRY VALEZA</h3>
      </div>

      <div class="box">
         <img src="images/reymar.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>REYMAR LLAGAS</h3>
         <h2>(Instructor)</h2>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>