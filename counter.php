<!doctype html>
<html>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Snippet - BBBootstrap</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <style>
    ::-webkit-scrollbar {
      width: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    .container {
      margin-top: 100px;
      font-size: 20%;
    }

    .counter-box {
      display: block;
      background: #f6f6f6;
      padding: 40px 20px 37px;
      text-align: center
    }

    .counter-box p {
      margin: 5px 0 0;
      padding: 0;
      color: #909090;
      font-size: 10px;
      font-weight: 500
    }

    .counter-box i {
      font-size: 45px;
      margin: 0 0 15px;
      color: #d2d2d2
    }

    .counter {
      display: block;
      font-size: 32px;
      font-weight: 700;
      color: #666;
      line-height: 28px
    }

    .counter-box.colored {
      background: #0099ff;
    }

    .counter-box.colored p,
    .counter-box.colored i,
    .counter-box.colored .counter {
      color: #fff
    }
  </style>
</head>

<body className='snippet-body'>
  <div class="container">

    <div class="row">

      <div class="four col-md-3">
        <div class="counter-box colored">
          <span class="material-symbols-outlined" style="font-size:45px ;">
            laundry
          </span>
          <span class="counter">2214</span>
          <p>Washing</p>
        </div>
      </div>
      <div class="four col-md-3">
        <div class="counter-box">
          <span class="material-symbols-outlined" style ="font-size:45px ;" >
            dry_cleaning
            </span>
          <span class="counter">3275</span>
          <p>Dry Cleaning</p>
        </div>
      </div>
      <div class="four col-md-3">
        <div class="counter-box">
          <span class="material-symbols-outlined" style="font-size:45px">
            local_laundry_service
            </span>
          <span class="counter">1289</span>
          <p>Ironing</p>
        </div>
      </div>
      <div class="four col-md-3">
        <div class="counter-box">
          <span class="material-symbols-outlined" style="font-size:45px">
            roller_skating
            </span>
          <span class="counter">1563</span>
          <p>Shoe Cleaning</p>
        </div>
      </div>
    </div>
  </div>
  <script type='text/javascript'
  src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
  <script type='text/javascript' src='#'></script>
  <script type='text/javascript' src='#'></script>
  <script type='text/javascript' src='#'></script>
  <script type='text/javascript'>


    $(document).ready(function () {

      $('.counter').each(function () {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
        }, {
          duration: 4000,
          easing: 'swing',
          step: function (now) {
            $(this).text(Math.ceil(now));
          }
        });
      });

    });

  </script>
  <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function (e) {
      e.preventDefault();
    });</script>

</body>

</html>