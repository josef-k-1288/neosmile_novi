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
     <p class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1414.5539179994519!2d20.40714957227955!3d44.839737223863075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65b1fcd45ad5%3A0x91a8d8a4586e280!2sStomatolo%C5%A1ka%20ordinacija%20NeoSmile!5e0!3m2!1ssr!2srs!4v1690284564737!5m2!1ssr!2srs" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>

     <style>
         .mapa {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin: 0;
        }
     </style>

     <?php include 'footer.php' ?>


 </body>

 </html>