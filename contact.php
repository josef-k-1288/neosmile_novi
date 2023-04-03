 <?php include 'header.php' ?>

 <?php
    $conn = mysqli_connect('localhost', 'root', '', 'dentist_db') or die('connect failed');

    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $number = $_POST['number'];
        $date = $_POST['date'];

        $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, date) VALUES('$name', '$email', '$number', '$date')") or die('query failed');

        if ($insert) {
            $message[] = 'appointment made successfully!';
            //header("Location: /dentist_sajt");
        } else {
            $message[] = 'appointment failed';
        }
    }

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Header</title>

     <!-- font awesome cdn link  -->
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->

     <!-- bootstrap cdn link  -->
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"> -->

     <!-- custom css file link  -->
     <!-- <link rel="stylesheet" href="css/style.css"> -->

 </head>

 <body>

     <!-- home section -->
     <!-- ovo ne sme da bude home section vec neka druga za kontakt -->
     <section class="home" id="home">
         <div class="container">
             <div class="row min-vh-100 align-items-center">
                 <div class="content text-center text-md-left">
                     <h3>Kontakt</h3>
                     <p>Lorem ipsum dolor sit, sequi aliquid vel asperiores non similique necessitatibus! Ab, nostrum amet.</p>
                     <!-- <a href="#contact" class="link-btn">make appointment</a> -->
                 </div>
             </div>
         </div>

     </section>

     <!-- home section ends -->

     <!-- contact section starts -->

     <section class="contact" id="contact">
         <h1 class="heading">make appointment</h1>
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
             <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<p class="message">' . $message . '</p>';
                    }
                }
                ?>
             <!-- <p class="message">testing message box</p> -->

             <span>Your name:</span>
             <input type="text" name="name" placeholder="enter your name" class="box" required>
             <span>Your email:</span>
             <input type="email" name="email" placeholder="enter your email" class="box" required>
             <span>Your number:</span>
             <input type="number" name="number" placeholder="enter your number" class="box" required>
             <span>appointment date:</span>
             <input type="datetime-local" name="date" class="box" required>
             <input type="submit" value="make appointment" name="submit" class="link-btn">
         </form>
     </section>

     <!-- contact section ends -->


     <?php include 'footer.php' ?>


 </body>

 </html>