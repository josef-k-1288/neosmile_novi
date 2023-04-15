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

    

    <!-- header section starts  -->


    <?php
    require('header.php');
    ?>

    <!-- header section ends -->

    <!-- home section -->

    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>NeoSmile</h3>
                    <p>Lorem ipsum dolor sit, sequi aliquid vel asperiores non similique necessitatibus! Ab, nostrum amet.</p>
                    <a href="contact.php" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>

    </section>

    <!-- home section ends -->





    <!-- about section starts -->

    <section class="about" id="about">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 image">
                    <img src="images/stolica.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>O nama</span>
                    <h3>True Healthcare For Your Family</h3>
                    <p>Dežurni stomatolog u srcu Zemuna, preko puta Zemunskog parka.
                        Naš tim predvodi dr Ljiljana Tomašević, stomatolog sa 25 godina radnog iskustva.
                        U prijatnom i lepo uređenom prostoru sačekaće Vas stručnjaci koje je spojila ljubav prema poslu.
                        Mi smo spoj znanja, iskustva, ljubaznosti i posvećenosti.
                        Topao doček, dobra analiza Vašeg problema, kao i uvažavanje Vaših zahteva i želja je nešto na šta možete računati.

                        Dobro došli, čekamo Vaš poziv!</p>
                    <a href="about.php" class="link-btn">Detaljnije</a>
                </div>

            </div>

        </div>

    </section>


    <!-- about section ends -->



    <!-- services section starts -->

    <section class="services" id="services">
        <h1 class="heading">Usluge</h1>

        <div class="align-items-center">
            <div class="content text-center">

                <p>Dežurni stomatolog NeoSmile Dr Ljiljana Tomašević. Bol u zubima i ustima najčešće nastaje od kvara zuba,
                    nicanja umnjaka, parodontalnih džepova ili od povreda zuba .
                    Dežurni Stomatolog Neosmile dr Ljiljana Tomašević je tu za vas 24/7 .
                    <br>
                    <hr>
                    INTENZITET BOLA KOJI UPALJEN ŽIVAC MOŽE IZAZVATI JE NAJJACI BOL KOJI LJUDSKI ORGANIZAM MOŽE DA ISTRPI.
                    OBIČNO SE JAVLJA NOĆU.
                    LEKOVI PROTIV BOLOVA NE POMAŽU.
                    INFICIRAN ZUB KOJI JE POČEO DA OTIČE ,OSEĆATE DA VAM OBRAZ RASTE ,
                    OTOCI MOGU BITI PRACENI I POVIŠENOM TEMPERATUROM. NE UZIMAJTE ANTIBIOTIKE NA SVOJU RUKU.
                    JAVITE SE DEŽURNOM STOMATOLOGU NEOSMILE DR Ljiljana Tomasević.
                    TU SMO ZA VAS DA VAM POMOGNEMO U ROKU OD 30 MINUTA OD VASEG POZIVA.
                </p>

            </div>
        </div>


        <div class="box-container container">

            <div class="box">
                <img src="images/icon-1.svg" alt="">
                <h3>Konzervativna stomatologija</h3>
                <p>Konzervativna stomatologija je deo stomatologije koji se bavi oboljenjima zuba... </p>
                <a href="konzervativa.php" class="link-btn">Vidi više</a>
            </div>

            <div class="box">
                <img src="images/icon-2.svg" alt="">
                <h3>Protetika</h3>
                <p>Protetika je grana stomatologije koja se bavi nadoknadom izgubljenih zuba i okolnih mekih ...</p>
                <a href="protetika.php" class="link-btn">Vidi više</a>
            </div>

            <div class="box">
                <img src="images/icon-3.svg" alt="">
                <h3>Oralna hirurgija</h3>
                <p>Oralna hirurgija je grana stomatologije, koja kod ljudi uglavnom izaziva strah i nelagodu... </p>
                <a href="hirurgija.php" class="link-btn">Vidi više</a>
            </div>

            <div class="box">
                <img src="images/icon-4.svg" alt="">
                <h3>Ortodoncija</h3>
                <p>Ortodoncija je grana stomatologije koja se bavi ispravljanjem nepravilnog položaja zuba...</p>
                <a href="ortodoncija.php" class="link-btn">Vidi više</a>
            </div>

        </div>

    </section>

    <!-- services section ends -->



    <!-- process section start -->

    <!-- <section class="process">
        <h1 class="heading">work process</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>



            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>Pediatric Dentistry</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>



            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>Dental Implants</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>

        </div>


    </section> -->

    <!-- process section ends -->









    <!-- cene sekcija -->

    <div class="accordion" id="cene">
        <h1 class="heading">Cene</h1>

        <ul>
            <h2>Konzervativna stomatologija</h2>
            <li>
                <h3>Bela plomba</h3>
                <div>3000-4000 RSD</div>
            </li>
            <li>
                <h3>Lečenje kanala mašinski</h3>
                <div>2.400-6.000 RSD</div>
            </li>
            <li>
                <h3>Uklanjanje zubnog kamenca peskiranje I poliranje obe vilice</h3>
                <div>3.500 RSD</div>
            </li>
        </ul>


        <ul>
            <h2>Protetika</h2>
            <li>
                <h3>Metalokeramička krunica</h3>
                <div>10.800 RSD</div>
            </li>
            <li>
                <h3>Bezmetalna cirkonijum krunica</h3>
                <div>24.000 RSD</div>
            </li>
            <li>
                <h3>Zubna parcijalana ili totalna proteza</h3>
                <div>24.000 RSD</div>
            </li>
            <li>
                <h3>Zubna skeletirana proteza</h3>
                <div>42.000 RSD</div>
            </li>
        </ul>

        <ul>
            <h2>Hirurgija i parodontologija</h2>
            <li>
                <h3>Rutinsko vadjenje zuba</h3>
                <div>3.500 RSD</div>
            </li>
            <li>
                <h3>Komplikovano vadjenje zuba</h3>
                <div>5.000 RSD</div>
            </li>
            <li>
                <h3>Hirursko vadjenje impaktiranog(neizraslog) zuba</h3>
                <div>12.000 RSD</div>
            </li>
            <li>
                <h3>Apikotomija (resekcija vrha korena)</h3>
                <div>12.000 RSD</div>
            </li>
            <li>
                <h3>Režanj operacija desni</h3>
                <div>od 6.000 RSD</div>
            </li>
            <li>
                <h3>Ugradnja implantata</h3>
                <div>od 54.000 RSD</div>
            </li>
            <li>
                <h3>Resekcija frenuluma laserom</h3>
                <div>18.000 RSD</div>
            </li>
            <li>
                <h3>Gingivektomija</h3>
                <div>6.000 RSD</div>
            </li>


        </ul>

        <ul>
            <h2>Ortodoncija</h2>
            <li>
                <h3>Mobilni aparat</h3>
                <div>30.000 RSD</div>
            </li>
            <li>
                <h3>Fiksna proteza</h3>
                <div>od 78.000 RSD</div>
            </li>
            <li>
                <h3>Folije za ispravljanje zuba</h3>
                <div>od 12.000 RSD</div>
            </li>
        </ul>


        <ul>
            <h2>Beljenje zuba</h2>
            <li>
                <h3>Beljenje avitalnog zuba</h3>
                <div>3.600 RSD</div>
            </li>
            <li>
                <h3>Beljenje zuba kućno(folije+2 šprica)</h3>
                <div>18.000 RSD</div>
            </li>
            <li>
                <h3>Beljenje zuba odinacijsko po vilici</h3>
                <div>7.200 RSD</div>
            </li>
            <li>
                <h3>Kompozitne fasete</h3>
                <div>6.000 RSD</div>
            </li>
            <li>
                <h3>Keramičke fasete (viniri)</h3>
                <div>26.400 RSD</div>
            </li>
        </ul>

        <ul>
            <h2>Dečija stomatologija</h2>
            <li>
                <h3>Zalivanje fisura</h3>
                <div>1.200 RSD</div>
            </li>
            <li>
                <h3>Fluorizacija zuba</h3>
                <div>1.200 RSD</div>
            </li>
        </ul>


        <ul>
            <h2>Dežurni stomatolog</h2>
            <li>
                <h3>Izlazak van radnog vremena</h3>
                <div>2.000 RSD</div>
            </li>
        </ul>
        <br><br>

    </div>



    <!-- cene sekcija kraj -->




















    <!-- reviews section starts -->


    <section class="reviews" id="reviews">

        <h1 class="heading"> DEŽURNI STOMATOLOG NEOSMILE - TIM </h1>


        <!-- <div class="box-container1 container">

            <div class="box1">
                <img src="images/tim/Ljiska_test.jpg" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                <h3>Ljiljana Tomašević</h3>
                <span>Dr Stomatologije</span>
            </div>

        </div> -->

        <br>

        <div class="box-container container">

            <div class="box">
                <img src="images/tim/Ljiska_test.jpg" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                <h3>Ljiljana Tomašević</h3>
                <span>Dr Stomatologije</span>
            </div>

            <div class="box">
                <img src="images/tim/tim1_test.jpg" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                <h3>Milica Dimitrijević</h3>
                <span>Viši zubni tehničar</span>
            </div>

            <div class="box">
                <img src="images/tim/tim2_test.jpg" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                <h3>Sava Dimitrijević</h3>
                <span>Viši zubni tehničar</span>
            </div>

            <div class="box">
                <img src="images/tim/Yvone_test.jpg" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                <h3>Yvonne Munene</h3>
                <span>Dr Stomatologije</span>
            </div>

        </div>

    </section>

    <!-- reviews sections ends -->


















    <!-- contact section starts -->

    <!-- .. nekad bila forma -->

    <!-- contact section ends -->



    <!-- footer section starts -->

    <?php
    require('footer.php');
    ?>


    <!-- footer section ends -->





    <!-- custom js file link  -->
    <!-- <script src="js/script.js"></script> -->

    <!-- script za accordion link -->
    <script src="js/accordion-script.js"></script>






    <script>
        // var accordionItems = document.querySelectorAll('.accordion li');

        // accordionItems.forEach(function(item) {
        //     var title = item.querySelector('h3');
        //     var content = item.querySelector('div');

        //     title.addEventListener('click', function() {
        //         if (content.style.display === 'none') {
        //             content.style.display = 'block';
        //         } else {
        //             content.style.display = 'none';
        //         }
        //     });
        // });
    </script>

</body>

</html>