<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">

    <!-- Hangman CSS -->
    <link rel="stylesheet" href="public/assets/css/hangman.css">

    <!-- Favicon -->
    <link rel="icon" href="public/assets/img/favicon.ico" type="image/ico" sizes="16x16">

    <!-- Title of the webpage -->
    <title>Info</title>

     <!-- Custom stylesheet -->
    <link rel="stylesheet" href="public/assets/css/stylesheet.css">


    <!--Specific page styling-->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Varela+Round');
        @import url('https://fonts.googleapis.com/css?family=VT323');
        .lead {
            font-family: 'Varela Round';
        }

        .display-1 {
            font-family: 'VT323';
            color: #34495e;
        }

        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
            background-image: url('public/assets/img/transparent.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .display-1:hover {
            color: #e74c3c;
        }

        .lead {
            color: #fff;
            font-size: 3rem;
        }

        .card {
            /*            box-shadow: 0px 0px 0 rgba(0, 0, 0, 0.50), 5px 0 5px 0 rgba(0, 0, 0, 0.50), 0 5px 5px 0 rgba(0, 0, 0, 0.50);*/
            box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.50);
        }

        .card:hover {
            transform: translate(3px, 3px);
        }

        .card-img-top {
            border-top: 8px solid #000;
        }



    </style>
</head>


<?php
include ('includes/index.navbar.php');
?>

<header>
    <div class="container text-center">
        <h1 class="display-1">Guled Abdikarim Ali</h1>
        <p class="lead">Junior front end developer.</p>
    </div>
</header>

<?php
include 'includes/card.php';
?>
<?php
include 'includes/hangman.php';
?>

<?php
include 'includes/footer.php';
?>



<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
    crossorigin="anonymous"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Hangman JS file -->
<script src="public/assets/js/hangman.js"></script>
</body>

</html>
