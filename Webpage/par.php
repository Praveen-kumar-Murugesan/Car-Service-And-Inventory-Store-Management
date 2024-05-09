<!DOCTYPE html>
<?php
   session_start();
   
    if (!isset($_SESSION["username"]))
   {
      header("location: par.html");
   }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">



    <style>
        body {
            background-image: url("auto-1868726.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            color: rgb(255, 255, 255);
            padding: 0;
            margin: 0;
        }
        
        html {
            font-family: 'Roboto Condensed', sans-serif;
        }
        
        #mainnav {
            position: absolute;
            font-family: 'Roboto Condensed', sans-serif;
            z-index: 1;
        }
        
        #mainnav li {
            margin: 55px 0;
            left: -550px;
            position: relative;
            display: none;
        }
        
        #mainnav a {
            color: white;
            text-decoration: none;
            font-size: 1.4em;
        }
        
        ul li {
            list-style: none;
            margin-top: -50px;
        }
        
        .hamb {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 2.5em;
            z-index: 1;
        }
        
        .hamb a {
            color: #fff;
            text-decoration: none;
        }
        
        html,
        body,
        .hero {
            height: 100%;
        }
        
        .hero {
            width: 100%;
            min-height: 600px;
            background-image: url(testmonial-bg.jpg);
            background-size: cover;
        }
        
        h1 {
            font-size: 5em;
            text-align: center;
            font-weight: 700;
            font-family: 'Roboto Condensed', sans-serif;
            color: #fff;
            width: 100%;
            position: absolute;
            top: 42%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        
        #bubble {
            width: 100%;
            height: 100%;
            opacity: 0.9;
            position: fixed;
            display: none;
            z-index: 1;
            background: rgba(0, 0, 0, .5);
        }
        
        .gap {
            color: white;
            margin-top: 100px;
            width: 200px;
        }
        
        h1 span {
            font-size: 90px;
            letter-spacing: 4;
            margin-left: -30px;
            color: orange;
        }
    </style>
</head>

<body>

<h1>Welcome <?php echo $_SESSION["username"]; ?></h1> 

    <nav role='navigation' id="mainnav">
        <br><br><br>
        <ul class="gap">
            <li><a href="home.html">HOME</a></li>
            <li><a href="carservice.html">SERVICES</a></li>
            <li><a href="accessories.html">ACCESSORIES</a></li>
            <li><a href="Shopping-Cart-UI-main/cart.php">CART</a></li>
            <li><a href="Feedback\contact-form-01\contact-form-01\index.html">FEEDBACK</a></li>
           
			
			      <?php
				  
				  if(isset($_SESSION)){
					echo "<li><a href='logout.php'>LogOut</a></li>";
				  }else{
					echo "<li><a href=login (1).html>LOGIN</a></li>";
				  }

?>
			
			

        </ul>
    </nav>
    <div class="hamb">
        <a href="#"><i class="fa fa-bars"></i></a>
    </div>

    <div class="hero">
        <h1>It's not just OIL <br> <span>It's LIFE</span></h1>
    </div>

    <canvas id="bubble"></canvas>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"></script>
    <script>
        //navigation (this is my code)
        var animation = 'easeOutCubic';
        delay = 60;

        $(document)
            .on('click', '.fa-bars', function() {
                var i = 0;
                $('nav').before($('#bubble'));
                $('#bubble').fadeIn();
                $('#mainnav').find('li').each(function() {
                    var that = $(this);
                    i++;
                    (function(i, that) {
                        setTimeout(function() {
                            that
                                .animate({
                                    'left': '20px'
                                }, {
                                    duration: 350,
                                    easing: animation
                                })
                                .fadeIn({
                                    queue: false
                                });
                        }, delay * i)
                    }(i, that))
                });
                $('.fa-bars').fadeOut(100, function() {
                    $(this)
                        .removeClass('fa-bars')
                        .addClass('fa-times')
                        .fadeIn();
                });
            })
            .on('click', '#bubble, .fa-times', function() {
                $('#bubble').fadeOut();
                $('#mainnav').find('li')
                    .animate({
                        'left': '-550px'
                    }, {
                        duration: 250
                    })
                    .fadeOut({
                        queue: false
                    });

                $('.hamb').fadeOut(100, function() {
                    $(this)
                        .find($('i'))
                        .removeClass('fa-times')
                        .addClass('fa-bars')
                        .end()
                        .fadeIn();
                });
            })
    </script>
</body>

</html>