<html>
    <head>
        <title>Natural Selection Timeline</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Natural Selection</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="jamesSite.html">Sentient Games</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="SG.html">
                                <img class="icon" src="nsLogo.png"> Natural Selection
                            </a>
                        </li>
                        <li class="active">
                            <a href="Authors.html">
                                <img class="icon" src="meetAuthor.jpg"> Meet the Authors
                            </a>
                        </li>   
                        <li>
                            <a href="TimeLine.html">
                                <img class="icon" src="icon.png"> Timeline
                            </a>
                        </li>   
                        <li>
                            <a href="SGContact.html">
                            <img class="icon" src="phoneIcon.png"> Contact Us
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <button class="buy">
                                <img class="iconImg" src="moneyIcon.jpeg">
                                Pre-order Now
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1>Thank You</h1>
        <p>Your message has been sent.</p>
        
        <?php
        
        if(isset($_POST['send'])){
            $to = 'naturalselection.sg@gmail.com';

            $subject = 'Feedback from my site';
            
            $message = 'First Name: ' . $_POST['firstName'] . "\r\n\r\n";
            $message .= 'email: ' . $_POST['email'] . "\r\n\r\n";
            $message .= 'phone: ' . $_POST['phone'] . "\r\n\r\n";
            $message .= 'Message: ' . $_POST['message'] . "\r\n\r\n";
            
            $headers = "From:  webmaster@example.com\r\n";
            $headers .= 'Content-Type: text/plain; charset=utf-8';
            
            $success = mail($to, $subject, $message, $headers, '-fnaturalselection.sg@gmail.com');
        }
        
        ?>
        
    </body>
</html>