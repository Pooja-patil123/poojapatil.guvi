<!DOCTYPE html>
<html>
<head>

	<title>offer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="test1.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display|Roboto&display=swap');

/* Testimonials css*/
.slideUp {
    animation-name: slideUp;
    animation-name: slideUp;
    animation-duration: 1s;
    animation-duration: 1s;
    visibility: visible;
}

.testimonials {
    margin-top: 5px;
    margin-bottom: 5px;
    position: relative;
    display: block;
    width: 100%;
    min-height: 250px;
}

.testimonials ul {
    list-style: none;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
}

.testimonials li {
    background-color: #b0d1f7;
    margin: 50px 20px 10px 20px;
    width: 30%;
    height: 250px;
    border: solid 2px rgb(14, 13, 13);
    position: relative;
    transition: ease-in-out 0.3s;
    color: rgb(11, 8, 8);
    border-radius: 12px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
        0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.testimonials li img {
    height: 70px;
    width: 70px;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    border-radius: 50%;
    box-shadow: 0px 0px 0px 2px #fff;
    background-color: #fff;
    transition: box-shadow 0.3s linear;
}

.testimonials li p {
    position: relative;
    width: 70%;
    text-align: center;
    top: 70px;
    left: 15%;
    /* transform: translatex(-50%); */
    font-size: 17px;


}

.testimonials li h1 {
    position: absolute;
    text-decoration: bold;
    bottom: 10px;
    left: 50%;
    transform: translatex(-50%);
    font-size: 17px;
}

.testimonials li:hover {
    background-color: #eff4f2;
    color: rgb(13, 10, 10);
}

.testimonials li:hover img {
    height: 80px;
    width: 80px;
}

@media only screen and (max-width: 860px) {
    .testimonials li {
        width: 70%;
        margin: auto;
        display: block;
        margin-top: 70px;
    }

    .testimonials li:first-child {
        margin-top: 50px;
    }
}

.credit {
    text-align: center;
    color: #fff;
    font-weight: 900;
    font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
        "Lucida Sans", Arial, sans-serif;
}

.credit a {
    text-decoration: none;
    color: #202124;
    font-weight: bold;
}

/* lineup class and keyframes */
.lineUp {
    animation: 4s anim-lineUp ease-in;

}

@keyframes anim-lineUp {
    0% {
        opacity: 0;
        transform: translateY(80%);
    }

    20% {
        opacity: 0.50;
    }

    50% {
        opacity: 1;
        transform: translateY(0%);
    }

    100% {
        opacity: 1;
        transform: translateY(0%);
    }
}
    </style>
</head>	
<body>
  <section>
    <h2 align="center"style=""></h2>
    <div class="container3" id="container3">
      <div class="testimonials">
        <ul>
          <li>
            <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" />
            <p class="lineUp">
              " Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Assumenda labore."
            </p>
            <h1>-Sam-</h1>
          </li>
          <li>
            <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" />
            <p class="lineUp">
              " Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Assumenda labore."
            </p>
            <h1>-Joe-</h1>
          </li>
          <li>
            <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" />
            <p class="lineUp">
              " Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Assumenda labore."
            </p>
            <h1>-Ram-</h1>
          </li>
          <li>
            <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" />
            <p class="lineUp">
              " Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Assumenda labore."
            </p>
            <h1>-Sam-</h1>
          </li>
          <li>
            <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" />
            <p class="lineUp">
              " Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Assumenda labore."
            </p>
            <h1>-Joe-</h1>
          </li>
          <li>
            <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" />
            <p class="lineUp">
              " Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Assumenda labore."
            </p>
            <h1>-Ram-</h1>
          </li>
        </ul>
      </div>
    </div>
</section>
<script>
  window.onscroll = function() {myFunction()};
  
  function myFunction() {
    if (document.documentElement.scrollTop > 350) {
      document.getElementById("container3").className = "lineUp";
    }
  }
  </script>
  
</body>

</html>


