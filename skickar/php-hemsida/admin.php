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

    <!-- Favicon -->
    <link rel="icon" href="public/assets/img/favicon.ico" type="image/ico" sizes="16x16">

    <!-- Title of the webpage-->
    <title>Admin</title>

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
        <a class='navbar-brand' href='index.php'><img src='public/assets/img/logo.png' width='30' height='30' alt=''>
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


    <header class='mt-5'>
        <div class='container text-center'>
            <h1 class='display-1 mb-5'>Admin page</h1>
        </div>
    </header>

<?php
    if (isset($_POST['password'])) {
    $pass = $_POST['password'];
        if ($pass === 'freddy') {
            $_SESSION['admin'] = TRUE;
            echo "<h2 class='text-center text-success'>inloggad</h2>";
        }else{
        echo "<h2 class='text-center text-danger'>lösenordet är fel. Försök igen</h2>";
        }
    }

        if(isset($_SESSION['admin']) && $_SESSION['admin']) {
        header('Location: login.php');
    }
?>

<aside>
    <div class='container'>

        <form method='post' action='' class='form-signin'>
            <h2 class='form-signin-heading'>Logga in!</h2>
            <label for='inputPassword' class='sr-only'>Password</label>
            <input name='password' type='password' id='inputPassword' class='form-control' placeholder='Lösenord' required>
            <button class='btn btn-lg btn-primary btn-block' type='submit'>Logga in</button>
        </form>

    </div>
<!-- /container -->
</aside>




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