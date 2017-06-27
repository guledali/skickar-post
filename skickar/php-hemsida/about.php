<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="public/assets/css/stylesheet.css">
    <!--Specific page styling-->

    <!-- Icons for the accordion-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">

    <!-- Accordian styling -->
    <link rel="stylesheet" href="public/assets/css/accordion.css">

    <!--Specific page styling-->
    <style>
        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
            background-image: url('public/assets/img/transparent-2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: #5a5a5a;
        }

           /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */
        /* Carousel base class */

        .carousel {
            margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */

        .carousel-caption {
            z-index: 10;
            bottom: 3rem;
        }
        /* Declare heights because of positioning of img element */

        .carousel-item {
            height: 32rem;
            background-color: #777;
        }

        .carousel-item>img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 32rem;
        }
        
        /* MARKETING CONTENT
        -------------------------------------------------- */
        /* Center align the text within the three columns below the carousel */

        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .marketing h2 {
            font-weight: normal;
        }

        .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }
        /* Featurettes
        ------------------------- */

        .featurette-divider {
            margin: 5rem 0;
            /* Space out the Bootstrap <hr> more */
        }
        /* Thin out the marketing headings */

        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -.05rem;
        }
        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.7rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }
        .display-1 {
            color: #3498db;
        }

        .display-4 {
            color: #e74c3c;
            font-weight: 800;
        }


        .display-1 {
            color: #3498db;
        }

        .display-4 {
            color: #e74c3c;
            font-weight: 800;
        }
    </style>
</head>


<body>

   <?php
        include 'includes/about.navbar.php';
    ?>




    <header class="mt-5">
        <div class="container text-center">
            <h1 class="display-1">Fun facts</h1>
            <h1 class="display-4">Några ord om mig!</h1>
        </div>
    </header>

    <?php
           $db = mysqli_connect("localhost", "root","", "php-hemsida");
           mysqli_query($db, "SET NAMES utf8");

        $query = "SELECT content FROM page";

        $result = mysqli_query($db, $query);
        while($row = mysqli_fetch_assoc($result)){
            echo  $row['content'];
        }   

    ?>

    
    <article class="container p-3">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="img-fluid first-slide" src="public/assets/img/scoreboard.jpg">
                    <div class="container">
                        <div class="carousel-caption d-none d-md-block text-left">
                              <a style="text-decoration: none;" href="https://github.com/guledali/React" target="_blank"><h4 class="display-3 text-info">Hatar React!</h4></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid second-slide" src="public/assets/img/style.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption d-none d-md-block text-right">
               <a style="text-decoration: none;" href="https://github.com/guledali/daily-task" target="_blank"> <p class="text-success">Älskar flat-design</p></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid third-slide" src="public/assets/img/todolist.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption d-none d-md-block text-left">
                                <a style="text-decoration: none;" href="https://github.com/guledali/dolist-example" target="_blank"> <p class="lead">Vet hur man bygger som interraktioner genom JavaScript</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
        </div>
    </article>






<?php
include ('includes/footer.php');
?>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Script for the accordian app-->
    <script src="public/assets/js/accordion.js"></script>

</body>

</html>