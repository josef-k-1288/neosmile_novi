<?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <!-- font awesome cdn link  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">  -->

    <!-- bootstrap cdn link  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"> -->

    <!-- custom css file link  -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <!-- Lightbox2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

</head>

<body>



    <div class="gallery">

        <ul class="controls">
            <li class="buttons active" data-filter="all">all</li>
            <li class="buttons" data-filter="ordinacija">ordinacija</li>
            <li class="buttons" data-filter="radovi">radovi</li>
            <li class="buttons" data-filter="tim">tim</li>
        </ul>

        <div class="image-container">
            <a href="images/nove/ordinacija-1.jpg" data-lightbox="roadtrip" class="image ordinacija">
                <img src="images/nove/ordinacija-1.jpg" alt="ordinacija1">
            </a>
            <a href="images/nove/ordinacija-2.jpg" data-lightbox="roadtrip" class="image ordinacija">
                <img src="images/nove/ordinacija-2.jpg" alt="ordinacija2">
            </a>
            <a href="images/nove/ordinacija-3.jpg" data-lightbox="roadtrip" class="image ordinacija">
                <img src="images/nove/ordinacija-3.jpg" alt="ordinacija3">
            </a>
            <a href="images/nove/ordinacija-4.jpg" data-lightbox="roadtrip" class="image ordinacija">
                <img src="images/nove/ordinacija-4.jpg" alt="ordinacija4">
            </a>

            <a href="images/nove/rad-1.jpg" data-lightbox="roadtrip" class="image radovi">
                <img src="images/nove/rad-1.jpg" alt="radovi1">
            </a>
            <a href="images/nove/rad-2.jpg" data-lightbox="roadtrip" class="image radovi">
                <img src="images/nove/rad-2.jpg" alt="radovi2">
            </a>
            <a href="images/nove/rad-3.jpg" data-lightbox="roadtrip" class="image radovi">
                <img src="images/nove/rad-3.jpg" alt="radovi3">
            </a>

            <a href="images/nove/tim-4.jpg" data-lightbox="roadtrip" class="image tim">
                <img src="images/nove/tim-4.jpg" alt="tim4">
            </a>
            <a href="images/nove/tim-1.jpg" data-lightbox="roadtrip" class="image tim">
                <img src="images/nove/tim-1.jpg" alt="tim1">
            </a>
            <a href="images/nove/tim-2.jpg" data-lightbox="roadtrip" class="image tim">
                <img src="images/nove/tim-2.jpg" alt="tim2">
            </a>
            <a href="images/nove/tim-3.jpg" data-lightbox="roadtrip" class="image tim">
                <img src="images/nove/tim-3.jpg" alt="tim3">
            </a>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script> -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.buttons').click(function() {
                $(this).addClass('active').siblings().removeClass('active');

                var filter = $(this).attr('data-filter');

                if (filter == 'all') {
                    $('.image').show(400);
                } else {
                    $('.image').not('.' + filter).hide(200);
                    $('.image').filter('.' + filter).show(400);
                }

            });

            // $('.gallery').magnificPopup({
            //     delegate: 'a',
            //     type: 'image',
            //     gallery:{
            //         enabled: true,
            //     }
            // })

            // Inicijalizacija Lightboxa
            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true,
                'alwaysShowNavOnTouchDevices': true,
                'imageFadeDuration': 300,
                'fitImagesInViewport': true,
                'maxWidth': 1100, // Postavite maksimalnu širinu slike u lightboxu
                'maxHeight': 1100, // Postavite maksimalnu visinu slike u lightboxu
                
            });

        });
    </script>


    <style>
        /* Strelice za skrolovanje */
        .lb-nav .lb-prev {
            left: 55px;
        }

        .lb-nav .lb-next {
            right: 15px;
        }

        /* X za zatvaranje */
        /* X za zatvaranje u gornjem desnom uglu */
        .lb-close {
            top: 10px;
            right: 10px;
            font-size: 30px;
            color: #fff;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 50%;
            padding: 5px;
            position: fixed;
            z-index: 9999;
        }

        /* .gallery .image-container .image {
            width: 500px;
        } */

        .lightbox .lb-image {
            max-width: 800px;
            /* Maksimalna širina slike u Lightboxu */
            max-height: 600px;
            /* Maksimalna visina slike u Lightboxu */
            width: auto !important;
            /* Ovo će poništiti bilo koji drugi CSS koji pokušava da postavi širinu */
            height: auto !important;
            /* Ovo će poništiti bilo koji drugi CSS koji pokušava da postavi visinu */
            min-width: 450px;
            /* Minimalna širina slike u Lightboxu */
            min-height: 300px;
            /* Minimalna visina slike u Lightboxu */
            margin: 50px 0 auto;
            /* Centriranje slike unutar Lightboxa */
           
        }
    </style>



    <?php include 'footer.php' ?>










</body>

</html>