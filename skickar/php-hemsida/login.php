<?php session_start();
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='bootstrap/dist/css/bootstrap.min.css'>

    <!-- Custom stylesheet -->
    <link rel='stylesheet' href='public/assets/css/stylesheet.css'>
    <!--Specific page styling-->


    <!--Specific page styling-->
    <style>
        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
            background-image: url('public/assets/img/transparent-4.jpg');
            background-size: cover;
            background-repeat: no-repeat;

        }

        .display-1 {
            color: #16a085;
        }

        .lead {
            color: #c0392b;
        }

        h2 {
            color: #fff;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin .checkbox {
            font-weight: normal;
        }

        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type='email'] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type='password'] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>


<body>

    <nav class='navbar navbar-toggleable-md navbar-inverse bg-inverse'>
        <button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
            aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>
        <a class='navbar-brand' href='index.html'><img src='public/assets/img/logo.png' width='30' height='30' alt=''>
  </a>

        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <div class='navbar-nav ml-auto'>

                <ul class='nav nav-pills flex-column flex-sm-row'>
                    <li class='nav-item'>
                        <a class='flex-sm-fill text-sm-center nav-link text-success' href='about.php'>About</a>
                    </li>
                    <li class='nav-item'>
                        <a class='flex-sm-fill text-sm-center nav-link text-info' href='contact.php'>Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


<?php 
        if(isset($_SESSION['admin']) && $_SESSION['admin']) {
                echo "    <form method='post' action=''>
        <div class='form-group'>
            <label for='exampleTextarea'></label>
            <textarea class='form-control' id='exampleTextarea' rows='30'><section class='mt-5'>
                <div class='container'>
            <div class='accordion'>
                <ul class='list-unstyled'>
                    <li class='open js-question-wrapper'>
                        <div class='question'>
                            <h2>Utbildningar</h2>
                            <i class='fa fa-arrow-down' aria-hidden='true'></i>
                        </div>
                        <div class='answer'>
                            <p>Har gått i flera skolor runt om  landet, gymnasieskolor har varit primärt didaktus men ett kort tag innan studerade jag i huddinge gymnasiet, efter de var de ett halvår hällefors där jag gick på en folkhögskola med inriktning industridesign. Sedan kom jag in på lärarprogrammet i dalarna. Vilket jag hoppade väldigt fort läste sedan fristående kurser i stockholms universitet. </p>
                        </div>
                    </li>
                    <li class='js-question-wrapper'>
                        <div class='question'>
                            <h2>Arbete</h2>
                            <i class='fa fa-arrow-down' aria-hidden='true'></i>
                        </div>
                        <div class='answer'>
                            <p>Jag har jobbat som telefonförsäljare, jag har praktisserat i coop 3 månader och sen har haft student jobb som att sortera poster.</p>
                        </div>
                    </li>
                    <li class='js-question-wrapper'>
                        <div class='question'>
                            <h2>Fritiden</h2>
                            <i class='fa fa-arrow-down' aria-hidden='true'></i>
                        </div>
                        <div class='answer'>
                            <p>Jag gör inte så mycket under fritiden läser gärna neil gaiman om jag har tid. Älskar att läsa serier och lyssna på rapmusik</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</textarea>
            <input type='submit' value='skicka' class='float-right mt-2 btn btn-primary' name='send_form'></button>
        </div>
    </form>";
        }else{
        header('Location: admin.php');
        }
?>
   




    <footer class='footer'>
        <div class='container text-center'>
            <a href='https://plus.google.com/u/0/102873376610745733364' target='_blank'>
    <img src='public/assets/img/Google+.svg' width='30' height='30' alt='Sharing link'>
    </a>
            <span class='text-white'>Copyright &copy; 2017</span>
        </div>
    </footer>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js' integrity='sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n'
        crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js' integrity='sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb'
        crossorigin='anonymous'></script>
    <script src='bootstrap/dist/js/bootstrap.min.js'></script>

</body>

</html>