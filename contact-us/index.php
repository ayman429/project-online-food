<?php

/*********Contact_us*********************/
include '../Back_end/db.php';
include '../Back_end/DB_Contact_us.php';
/****************************************/


/**********subscribe********************/
include '../Back_end/db.php';
include '../Back_end/DB_Subscribe.php';
/****************************************/


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Play:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Open+Sans:wght@300;400&display=swap"
        rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">

    <title>Contact Us</title>



</head>

<body>


    <!-- information-contact -->
    <section class="information-contact">


        <!-- location -->
        <div class="location">
            <i class="fas fa-map-marker-alt"></i>

            <span>4578 El Fayoum ,FCI-Fayoum University</span>
        </div>
        <!-- end location -->

        <!-- phone -->
        <div class="phone">

            <i class="fas fa-phone-alt"></i>

            <span>+(02) 01013485756</span>

        </div>
        <!-- end phone -->

    </section>
    <!-- end  information-contact -->


<!-- start main Nav -->
<nav class=" navbar-light bg-black">
    <a href="#" class="logo">Avenue</a>

    <ul class="links">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../About-Us/index.php">About</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Location & Hours</a></li>
        <li><a href="#" >Contact</a></li>
    </ul>
</nav>
<!-- End main Nav -->


    <!-- contact us -->

    <section class="contact-us">

        <div class="contact" data-aos="fade-left" data-aos-duration="2000">
            <h1>Contact Us</h1>
        </div>

        <div class="data-form">
            <div class="form" data-aos="fade-right" data-aos-duration="2000">

            <form action="index.php" method="POST">               
                    <input type="text" name="FullName_contact" id="FullName_contact" placeholder="Your Name">
                    <input type="email" name="email_contact" id="email_contact" placeholder="Email">

                    <textarea name="messages" id="messages" placeholder="Message"></textarea>

                    <input type="submit" name="Send" id="Send" value="Send">
                </form>
            </div>


            <div class="map" data-aos="fade-up" data-aos-duration="2000">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.7261652083153!2d30.83566478494771!3d29.319707182151685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1459793d9d2458b5%3A0xafc7f3258784c2f3!2z2YPZhNmK2Kkg2KfZhNit2KfYs9io2KfYqiDZiNin2YTZhdi52YTZiNmF2KfYqiAtINis2KfZhdi52Kkg2KfZhNmB2YrZiNmF!5e0!3m2!1sar!2seg!4v1639424116147!5m2!1sar!2seg"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

    </section>
    <!-- contact us -->

    <?php include "../Footer/footer.php" ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="./js/main.js"></script>
</body>

</html>