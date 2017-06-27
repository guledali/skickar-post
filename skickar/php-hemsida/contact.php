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
            background-image: url('public/assets/img/transparent-3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .display-2 {
            color: #fff;
        }

        h3 {
            color: #8e44ad;
            font-weight: 700;
        }

        h1 {
            color: #f39c12;
        }

        svg {
            width: 160px;
            height: 160px;
        }

        svg:hover {
            transition-duration: 2s;
            transform: scale(1.3);
            cursor: pointer;
            fill: #fff;
        }

/*        .btn-primary {
            border-radius: 50px;
            opacity: 0.9;
        }*/

        h1 {
            font-size: 5rem;
        }
    </style>
</head>


<body>

       <?php
        include 'includes/contact.navbar.php';
    ?>

    <header class='mt-5'>
        <div class='container text-center'>
            <h1 class='display-1'>Dagar kvar till min praktik</h1>
        </div>
    </header>

    <article class='mb-5'>
        <div class='container text-center'>
            <div class='row'>
                <div class='col-md-12'>
                    <h3 id='countdown'></h3>
                </div>
            </div>
        </div>
    </article>

    <?php
           $db = mysqli_connect("localhost", "root","", "php-hemsida");
           mysqli_query($db, "SET NAMES utf8");

       	if(isset($_POST['send_form'])) {
               foreach($_POST as $k => $v){
                   $clean[$k] = mysqli_real_escape_string($db, $v);
               }

               $name = $clean['name'];
               $email = $clean['email'];
               $message = $clean['message'];

               $query = "
                   INSERT INTO messages (name, email, message)
                   VALUES ('$name', '$email', '$message')
               ";

               mysqli_query($db, $query);

               if(mysqli_query($db, $query)) {
                   echo "<h4 class='ml-5 text-info'>Ditt meddelande har skickats!</h4>";
               }else{
                   echo "<p>Något har gått fel</p>";
               }
           }
       ?>


    <section class='container'>
        <div class='row'>
            <div class='col-md-6'>
                <h1 class='p-2'>Hör av er</h1>
                <form method='post' action=''>
                    <div class='form-group'>
                        <input type='text' name='name' class='form-control' id='formGroupExampleInput' placeholder='Name'>
                        <input type='text' name='email' class='form-control mt-2' id='formGroupExampleInput' placeholder='Email'>
                        <textarea name='message' class='form-control mt-2' id='exampleTextarea' rows='5' placeholder='Säg något!!!'></textarea>
                        <input type='submit' value='skicka' class='float-right mt-2 btn btn-primary' name='send_form'>Submit</button>
                    </div>
                </form>
            </div>

            <div class='col-md-3'>
            </div>
            <div class='col-md-3 pt-5 '>
                <svg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd' stroke-linejoin='round'
                    stroke-miterlimit='1.414'>
                    <path d='M100 0C44.77 0 0 44.77 0 100s44.77 100 100 100 100-44.77 100-100S155.23 0 100 0zm59.386 159.386c-7.72 7.718-16.702 13.776-26.7 18.005-2.54 1.075-5.12 2.018-7.736 2.83v-14.986c0-7.877-2.702-13.672-8.105-17.382 3.385-.326 6.494-.782 9.326-1.368 2.833-.586 5.828-1.432 8.985-2.54 3.158-1.105 5.99-2.424 8.496-3.954 2.508-1.53 4.917-3.515 7.228-5.957 2.31-2.44 4.248-5.208 5.81-8.3 1.563-3.093 2.8-6.804 3.71-11.133.913-4.33 1.368-9.1 1.368-14.307 0-10.09-3.287-18.685-9.863-25.78 2.995-7.814 2.67-16.31-.976-25.49l-2.442-.293c-1.692-.195-4.736.52-9.13 2.15-4.395 1.627-9.327 4.296-14.796 8.007-7.748-2.15-15.788-3.223-24.12-3.223-8.4 0-16.408 1.074-24.025 3.223-3.45-2.344-6.722-4.28-9.814-5.81-3.092-1.53-5.566-2.572-7.42-3.126-1.857-.552-3.582-.894-5.177-1.024-1.595-.13-2.62-.163-3.076-.098-.456.065-.78.13-.977.195-3.645 9.245-3.97 17.74-.976 25.49-6.576 7.095-9.863 15.69-9.863 25.78 0 5.208.456 9.977 1.368 14.307.91 4.33 2.148 8.04 3.71 11.132 1.563 3.093 3.5 5.86 5.81 8.3 2.313 2.443 4.72 4.428 7.228 5.958 2.506 1.53 5.338 2.85 8.496 3.955 3.157 1.107 6.152 1.953 8.984 2.54 2.832.585 5.94 1.04 9.326 1.367-5.338 3.645-8.007 9.44-8.007 17.382v15.28c-2.95-.878-5.856-1.915-8.71-3.123-10-4.228-18.983-10.286-26.702-18.004-7.718-7.718-13.776-16.702-18.005-26.7-4.374-10.344-6.592-21.34-6.592-32.686 0-11.345 2.218-22.342 6.593-32.686 4.228-9.998 10.286-18.982 18.004-26.7 7.718-7.718 16.702-13.776 26.7-18.005 10.344-4.376 21.34-6.594 32.686-6.594 11.345 0 22.342 2.218 32.686 6.593 10 4.228 18.982 10.286 26.7 18.004 7.72 7.718 13.776 16.702 18.005 26.7 4.376 10.344 6.594 21.34 6.594 32.686 0 11.345-2.218 22.342-6.593 32.686-4.228 9.998-10.286 18.982-18.004 26.7z'
                        fill-rule='nonzero' alt='Link to my portfolio' onclick='window.open('https://github.com/guledali', '_blank');'
                    />
                </svg>
            </div>
        </div>
    </section>

    <aside class='container p-3'>
<div class='embed-responsive embed-responsive-21by9'>
  <iframe class='embed-responsive-item' src='https://www.youtube.com/embed/Lb4IcGF5iTQ'  frameborder='0' allowfullscreen></iframe>
</div>
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
    <script src='public/assets/js/countdown.js'></script>

   

</body>

</html>