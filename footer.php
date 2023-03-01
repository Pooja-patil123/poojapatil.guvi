<!DOCTYPE html>
<html>
    <haed>
        <meta name="viewport" content="width=device-width, initial-sacle=1.0">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <style>   
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Popppins',sans-serif;
        }
        body
        {
            display: grid;
            justify-content: end;
            align-content: end;
            min-height: 100vh;
        }
        footer
        {
            position: relative;
            width: 100%;
            height: auto;
            padding: 50px 100px;
            background:black;
        }
        footer .container
        {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-gap: 20px;
        }
        footer .container .sec h2
        {
            position: relative;
            color: #fff;
            font-weight: 500;
            margin-bottom: 15px;
        }
        footer .container .sec h2::before
        {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50px;
            height: 2px;
            background: yellow;
        }
        footer .container .sec p
        {
            color: white;
        }
        .sci
        {
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(4, 50px);
            grid-gap: 10px;
        }
        .sci li
        {
            list-style: none;
        }
        .sci li a
        {
            display: inline-block;
            width: 48px;
            height: 48px;
            background: white;
            display: grid;
            align-content: center;
            justify-content: center;
            text-decoration: none;
            border-radius: 25px;
        }
        .sci li a:hover
        {
            background:#ffeb3b;
        }
        .sci li a .fa
        {
            color:black;
            font-size: 20px;
        }
        .quicklinks
        {
            position: relative;
        }
        .quicklinks li
        {
            list-style: none;
        }
        .quicklinks li a
        {
            color: #f7f7f7;
            text-decoration: none;
            margin-bottom: 10px;
            display: inline-block;
        }
        .quicklinks li a:hover
        {
            color: #ffeb3b;
        }
        .info
        {
            position: relative;
        }
        .info li

        {
            display: grid;
            grid-template-columns: 30px 1fr;
            margin-bottom: 16px;
        }
        .info li span:nth-child(1)
        {
            color: #fff;
            font-size: 20px;
        }
        .info li span
        {
            color: #fff;
        }
        .info a
        {
            color: #fff;
            text-decoration: none;
        }
        .info a:hover
        {
            color: #ffeb3b;
        }
        @media(max-width:991px)
        {
            footer
            {
                padding: 40px;
            }
            footer .container
            {
                
                grid-template-columns: (2,1fr);
            }
        }
        @media(max-width:768px)
        {
            footer
            {
                padding: 40px;
            }
            footer .container
            {
               
                grid-template-columns: (1,1fr);
            }
        }
        </style>
    </haed>
    <body>
        <footer>
            <div class="container">     
                <div class="sec aboutus">
                    <h2>About US</h2>
                    <p>A Laundry Website where we wash clothes hahahahha</p>
                    <ul class="sci">
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>  
                        <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></i></a></li> 
                        <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li> 
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="sec quicklinks">
                    <h2>
                        Ouick Links
                    </h2>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Terms And Conditions</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="sec quicklinks">
                    <h2>
                        Shop
                    </h2>
                    <ul>
                        <li><a href="#">Women Clothes</a></li>
                        <li><a href="#">Men's Clothes</a></li>
                        <li><a href="#">Kids Wear</a></li>
                       
                        
                    </ul>
                </div>
                <div class="sec contact">
                    <h2>Contact Us</h2>
                    <ul class="info">
                        <li> 
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span>Faiza Momin,Pune.<br>India</span>
                            
                        </li>
                        <li>
                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <p><a href="tel:0000000000">+91 1234567899</a><br>
                                <a href="tel:0000000000">+91 1234567899</a></p>
                        </li>
                        <li>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <p><a href="mailto:laundary.com">laundary@gmial.com</a><br>
                                </p>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>
