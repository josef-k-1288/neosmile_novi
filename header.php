 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Neosmile</title>

     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

     <!-- bootstrap cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

     <!-- custom css file link  -->
     <link rel="stylesheet" href="css/style.css">
     

 </head>

 <body>

     <div class="pre-header">
         <div class="pre-header__container">
             <span class="contact-info"><i class="fas fa-phone-alt"></i> Telefon: +381 69 2717 777</span>
             <span class="contact-info"><i class="far fa-clock"></i> Radno vreme: Pon - Pet: 11:00 - 19:00, Vikendom: 11:00 - 17:00</span>
             <span class="contact-info"><i class="fas fa-map-marker-alt"></i> Adresa: Vrtlarska 7b, 11 080, Zemun</span>
         </div>
     </div>
     <div class="container">
         <div class="row align-items-center justify-content-between">
         </div>
     </div>


     <header class="header fixed-top">

         <div class="container">

             <div class="row align-items-center justify-content-between">



                 <!-- <a href="index.php" class="logo">dental<span>Care.</span></a> -->
                 <img src="images/logo.png" alt="logo" width="75" height="55">

                 <nav class="nav">
                     <a href="index.php">Početna</a>
                     <a href="#services">Usluge</a>
                     <a href="#cene">Cene</a>
                     <a href="galerija.php">galerija</a>
                     <a href="questions.php">Pitanja</a>
                     <a href="contact.php">Kontakt</a>
                 </nav>

                 <a href="contact.php" class="link-btn">Kontakt</a>

                 <div id="menu-btn" class="fas fa-bars"></div>

             </div>

         </div>



     </header>

     <script>
         let menu = document.querySelector('#menu-btn');
         let navbar = document.querySelector('.header .nav');
         let header = document.querySelector('.header');


         menu.onclick = () => {
             menu.classList.toggle('fa-times');
             navbar.classList.toggle('active');
         }

         window.onscroll = () => {
             menu.classList.remove('fa-times');
             navbar.classList.remove('active');

             if (window.scrollY > 0) {
                 header.classList.add('active');
             } else {
                 header.classList.remove('active');
             }

         }
     </script>


     <!-- custom js file link  -->
     <!-- <script src="js/script.js"></script> -->


 </body>

 </html>