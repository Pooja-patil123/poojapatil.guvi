<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slider</title>
    <link rel="stylesheet" href="homeStyle.css">
    <link rel="stylesheet" href="service.css">
    <link rel="stylesheet" href="pricing.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="packages.css">
    <link rel="stylesheet" href="works.css">
</head>


<style>
    /* --- header css starts---- */
    * {
        font-family: 'Poppins', sans-serif;

    }

    body {
        margin: 0px;

    }

    .header {

        overflow: hidden;
        background-color: #74b0f5;
        height: 100px;
        position: sticky;
        top: 0%;
        z-index: 25;
    }

    .header a {
        float: left;
        color: white;
        text-align: center;
        padding: 22px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
        padding: 30px;


    }

    .header a.logo {
        padding: 30px;
        font-size: 25px;
        font-weight: bold;
    }

    .header a:hover {
        background-color: white;
        color: black;
    }

    .header-right {
        float: right;
    }

    .icon-location {
        background: url("https://img.icons8.com/material-outlined/24/undefined/marker.png") no-repeat left;
        background-size: 20px;
        padding-left: 25px;
        width: 316px;
        height: 48px;
        resize: vertical;
        margin: 16px;
        overflow: visible;
        font-size: larger;
    }

    .icon-location::placeholder {
        font-size: 20px;
    }

    .icon-search {
        padding-left: 25px;
        background: url("https://static.thenounproject.com/png/101791-200.png") no-repeat left;
        background-size: 20px;
        height: 48px;
        margin-left: 36%;
        background-color: white;
        resize: vertical;
        margin: 16px;
        overflow: visible;
        font-size: larger;
        width: 35%;
    }

    .icon-search::placeholder {
        font-size: 20px;


    }

    @media screen and (max-width: 1040px) {
        .header {
            height: 5%;
            position: static;
            z-index: 10;
        }

        .logo {
            height: 5px;
        }

        .header a {
            float: none;
            display: block;
            text-align: left;

        }

        .header-right {

            float: none;

        }

        .icon-search {
            float: none;
            display: block;
            text-align: left;
            height: 35px;
            background-color: white;
            margin-left: 3%;
            width: 264px;
        }

        .icon-location {
            float: none;
            display: block;
            text-align: left;

        }

        .select {
            font-size: 20px;

        }

        #cities {
            height: 15px;
            overflow: visible;
        }

        #cities::placeholder {
            font-size: 10px;
        }
    }
    

    /* -----header ends--- */

    /* ----- testimonial css starts---- */

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

    /* ---- testimonial css ends------- */

    /* -----footer css starts---- */

     

    body {
        display: grid;
        justify-content: end;
        align-content: end;
        min-height: 100vh;
    }

    footer {
        position: relative;
        width: 100%;
        height: auto;
        padding: 50px 100px;
        background: black;
    }

    footer .container {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-gap: 20px;
    }

    footer .container .sec h2 {
        position: relative;
        color: #fff;
        font-weight: 500;
        margin-bottom: 15px;
    }

    footer .container .sec h2::before {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 50px;
        height: 2px;
        background: yellow;
    }

    footer .container .sec p {
        color: white;
    }

    .sci {
        margin-top: 20px;
        display: grid;
        grid-template-columns: repeat(4, 50px);
        grid-gap: 10px;
    }

    .sci li {
        list-style: none;
    }

    .sci li a {
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

    .sci li a:hover {
        background: #ffeb3b;
    }

    .sci li a .fa {
        color: black;
        font-size: 20px;
    }

    .quicklinks {
        position: relative;
    }

    .quicklinks li {
        list-style: none;
    }

    .quicklinks li a {
        color: #f7f7f7;
        text-decoration: none;
        margin-bottom: 10px;
        display: inline-block;
    }

    .quicklinks li a:hover {
        color: #ffeb3b;
    }

    .info {
        position: relative;
    }

    .info li {
        display: grid;
        grid-template-columns: 30px 1fr;
        margin-bottom: 16px;
    }

    .info li span:nth-child(1) {
        color: #fff;
        font-size: 20px;
    }

    .info li span {
        color: #fff;
    }

    .info a {
        color: #fff;
        text-decoration: none;
    }

    .info a:hover {
        color: #ffeb3b;
    }

    @media(max-width:991px) {
        footer {
            padding: 40px;
        }

        footer .container {

            grid-template-columns: (2, 1fr);
        }
    }

    @media(max-width:768px) {
        footer {
            padding: 40px;
        }

        footer .container {

            grid-template-columns: (1, 1fr);
        }
    }

    /* ------footer css ends------ */


    .sidebar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  
  .sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
  
  }
  
  .sidebar a:hover {
    color: #f1f1f1;
  }
  
  .sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }
  
  .openbtn {
    font-size: 20px;
    cursor: pointer;
    background-color: #111;
    color: white;
    padding: 10px 15px;
    border: none;
    width: 100px;
  }
  
  .openbtn:hover {
    background-color: #444;
  }
  
  #main {
    transition: margin-right .5s;
    padding: 16px;
  }
  
  @media screen and (max-height: 450px) {
    .sidebar {padding-top: 15px;}
    .sidebar a {font-size: 18px;}
  }
  
  
</style>

<body>

    <!--HEADER-->
    <div class="header">
        <a href="#default" class="logo">Laundary</a>


        <select name="cities" id="cities" placeholder="City" style="background:url(https://img.icons8.com/material-outlined/24/undefined/marker.png) no-repeat left;width: 264px; padding: 17px; size: 100%; 
            border-width: 3px; margin: 15px; background-color: white; @media screen and (max-width: 1040px){
                height: 15px;}">
            <option value="Adilabad">Adilabad</option>
            <option value="Agra">Agra</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Ahmednagar">Ahmednagar</option>
            <option value="Aizawl">Aizawl</option>
            <option value="Ajitgarh(Mohali)">Ajitgarh (Mohali)</option>
            <option value="Ajmer">Ajmer</option>
            <option value="Akola">Akola</option>
            <option value="Alappuzha">Alappuzha</option>
            <option value="Aligarh">Aligarh</option>
            <option value="Alirajpur">Alirajpur</option>
            <option value="Allahabad">Allahabad</option>
            <option value="Almora">Almora</option>
            <option value="Alwar">Alwar</option>
            <option value="Ambala">Ambala</option>
            <option value="AmbedkarNagar">Ambedkar Nagar</option>
            <option value="Amravati">Amravati</option>
            <option value="Amrelidistrict">Amreli district</option>
            <option value="Amritsar">Amritsar</option>
            <option value="Anand">Anand</option>
            <option value="Anantapur">Anantapur</option>
            <option value="Anantnag">Anantnag</option>
            <option value="Angul">Angul</option>
            <option value="Anjaw">Anjaw</option>
            <option value="Anuppur">Anuppur</option>
            <option value="Araria">Araria</option>
            <option value="Ariyalur">Ariyalur</option>
            <option value="Arwal">Arwal</option>
            <option value="AshokNagar">Ashok Nagar</option>
            <option value="Auraiya">Auraiya</option>
            <option value="Aurangabad">Aurangabad</option>
            <option value="Aurangabad">Aurangabad</option>
            <option value="Azamgarh">Azamgarh</option>
            <option value="Badgam">Badgam</option>
            <option value="Bagalkot">Bagalkot</option>
            <option value="Bageshwar">Bageshwar</option>
            <option value="Bagpat">Bagpat</option>
            <option value="Bahraich">Bahraich</option>
            <option value="Baksa">Baksa</option>
            <option value="Balaghat">Balaghat</option>
            <option value="Balangir">Balangir</option>
            <option value="Balasore">Balasore</option>
            <option value="Ballia">Ballia</option>
            <option value="Balrampur">Balrampur</option>
            <option value="Banaskantha">Banaskantha</option>
            <option value="Banda">Banda</option>
            <option value="Bandipora">Bandipora</option>
            <option value="BangaloreRural">Bangalore Rural</option>
            <option value="BangaloreUrban">Bangalore Urban</option>
            <option value="Banka">Banka</option>
            <option value="Bankura">Bankura</option>
            <option value="Banswara">Banswara</option>
            <option value="Barabanki">Barabanki</option>
            <option value="Baramulla">Baramulla</option>
            <option value="Baran">Baran</option>
            <option value="Bardhaman">Bardhaman</option>
            <option value="Bareilly">Bareilly</option>
            <option value="Bargarh(Baragarh)">Bargarh (Baragarh)</option>
            <option value="Barmer">Barmer</option>
            <option value="Barnala">Barnala</option>
            <option value="Barpeta">Barpeta</option>
            <option value="Barwani">Barwani</option>
            <option value="Bastar">Bastar</option>
            <option value="Basti">Basti</option>
            <option value="Bathinda">Bathinda</option>
            <option value="Beed">Beed</option>
            <option value="Begusarai">Begusarai</option>
            <option value="Belgaum">Belgaum</option>
            <option value="Bellary">Bellary</option>
            <option value="Betul">Betul</option>
            <option value="Bhadrak">Bhadrak</option>
            <option value="Bhagalpur">Bhagalpur</option>
            <option value="Bhandara">Bhandara</option>
            <option value="Bharatpur">Bharatpur</option>
            <option value="Bharuch">Bharuch</option>
            <option value="Bhavnagar">Bhavnagar</option>
            <option value="Bhilwara">Bhilwara</option>
            <option value="Bhind">Bhind</option>
            <option value="Bhiwani">Bhiwani</option>
            <option value="Bhojpur">Bhojpur</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Bidar">Bidar</option>
            <option value="Bijapur">Bijapur</option>
            <option value="Bijapur">Bijapur</option>
            <option value="Bijnor">Bijnor</option>
            <option value="Bikaner">Bikaner</option>
            <option value="Bilaspur">Bilaspur</option>
            <option value="Bilaspur">Bilaspur</option>
            <option value="Birbhum">Birbhum</option>
            <option value="Bishnupur">Bishnupur</option>
            <option value="Bokaro">Bokaro</option>
            <option value="Bongaigaon">Bongaigaon</option>
            <option value="Boudh(Bauda)">Boudh (Bauda)</option>
            <option value="Budaun">Budaun</option>
            <option value="Bulandshahr">Bulandshahr</option>
            <option value="Buldhana">Buldhana</option>
            <option value="Bundi">Bundi</option>
            <option value="Burhanpur">Burhanpur</option>
            <option value="Buxar">Buxar</option>
            <option value="Cachar">Cachar</option>
            <option value="CentralDelhi">Central Delhi</option>
            <option value="Chamarajnagar">Chamarajnagar</option>
            <option value="Chamba">Chamba</option>
            <option value="Chamoli">Chamoli</option>
            <option value="Champawat">Champawat</option>
            <option value="Champhai">Champhai</option>
            <option value="Chandauli">Chandauli</option>
            <option value="Chandel">Chandel</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chandrapur">Chandrapur</option>
            <option value="Changlang">Changlang</option>
            <option value="Chatra">Chatra</option>
            <option value="Chennai">Chennai</option>
            <option value="Chhatarpur">Chhatarpur</option>
            <option value="ChhatrapatiShahujiMaharajNagar"> Chhatrapati Shahuji Maharaj Nagar </option>
            <option value="Chhindwara">Chhindwara</option>
            <option value="Chikkaballapur">Chikkaballapur</option>
            <option value="Chikkamagaluru">Chikkamagaluru</option>
            <option value="Chirang">Chirang</option>
            <option value="Chitradurga">Chitradurga</option>
            <option value="Chitrakoot">Chitrakoot</option>
            <option value="Chittoor">Chittoor</option>
            <option value="Chittorgarh">Chittorgarh</option>
            <option value="Churachandpur">Churachandpur</option>
            <option value="Churu">Churu</option>
            <option value="Coimbatore">Coimbatore</option>
            <option value="CoochBehar">Cooch Behar</option>
            <option value="Cuddalore">Cuddalore</option>
            <option value="Cuttack">Cuttack</option>
            <option value="DadraandNagarHaveli"> Dadra and Nagar Haveli </option>
            <option value="Dahod">Dahod</option>
            <option value="DakshinDinajpur">Dakshin Dinajpur</option>
            <option value="DakshinaKannada">Dakshina Kannada</option>
            <option value="Daman">Daman</option>
            <option value="Damoh">Damoh</option>
            <option value="Dantewada">Dantewada</option>
            <option value="Darbhanga">Darbhanga</option>
            <option value="Darjeeling">Darjeeling</option>
            <option value="Darrang">Darrang</option>
            <option value="Datia">Datia</option>
            <option value="Dausa">Dausa</option>
            <option value="Davanagere">Davanagere</option>
            <option value="Debagarh(Deogarh)">Debagarh (Deogarh)</option>
            <option value="Dehradun">Dehradun</option>
            <option value="Deoghar">Deoghar</option>
            <option value="Deoria">Deoria</option>
            <option value="Dewas">Dewas</option>
            <option value="Dhalai">Dhalai</option>
            <option value="Dhamtari">Dhamtari</option>
            <option value="Dhanbad">Dhanbad</option>
            <option value="Dhar">Dhar</option>
            <option value="Dharmapuri">Dharmapuri</option>
            <option value="Dharwad">Dharwad</option>
            <option value="Dhemaji">Dhemaji</option>
            <option value="Dhenkanal">Dhenkanal</option>
            <option value="Dholpur">Dholpur</option>
            <option value="Dhubri">Dhubri</option>
            <option value="Dhule">Dhule</option>
            <option value="DibangValley">Dibang Valley</option>
            <option value="Dibrugarh">Dibrugarh</option>
            <option value="DimaHasao">Dima Hasao</option>
            <option value="Dimapur">Dimapur</option>
            <option value="Dindigul">Dindigul</option>
            <option value="Dindori">Dindori</option>
            <option value="Diu">Diu</option>
            <option value="Doda">Doda</option>
            <option value="Dumka">Dumka</option>
            <option value="Dungapur">Dungapur</option>
            <option value="Durg">Durg</option>
            <option value="EastChamparan">East Champaran</option>
            <option value="EastDelhi">East Delhi</option>
            <option value="EastGaroHills">East Garo Hills</option>
            <option value="EastKhasiHills">East Khasi Hills</option>
            <option value="EastSiang">East Siang</option>
            <option value="EastSikkim">East Sikkim</option>
            <option value="EastSinghbhum">East Singhbhum</option>
            <option value="Eluru">Eluru</option>
            <option value="Ernakulam">Ernakulam</option>
            <option value="Erode">Erode</option>
            <option value="Etah">Etah</option>
            <option value="Etawah">Etawah</option>
            <option value="Faizabad">Faizabad</option>
            <option value="Faridabad">Faridabad</option>
            <option value="Faridkot">Faridkot</option>
            <option value="Farrukhabad">Farrukhabad</option>
            <option value="Fatehabad">Fatehabad</option>
            <option value="FatehgarhSahib">Fatehgarh Sahib</option>
            <option value="Fatehpur">Fatehpur</option>
            <option value="Fazilka">Fazilka</option>
            <option value="Firozabad">Firozabad</option>
            <option value="Firozpur">Firozpur</option>
            <option value="Gadag">Gadag</option>
            <option value="Gadchiroli">Gadchiroli</option>
            <option value="Gajapati">Gajapati</option>
            <option value="Ganderbal">Ganderbal</option>
            <option value="Gandhinagar">Gandhinagar</option>
            <option value="Ganganagar">Ganganagar</option>
            <option value="Ganjam">Ganjam</option>
            <option value="Garhwa">Garhwa</option>
            <option value="GautamBuddhNagar">Gautam Buddh Nagar</option>
            <option value="Gaya">Gaya</option>
            <option value="Ghaziabad">Ghaziabad</option>
            <option value="Ghazipur">Ghazipur</option>
            <option value="Giridih">Giridih</option>
            <option value="Goalpara">Goalpara</option>
            <option value="Godda">Godda</option>
            <option value="Golaghat">Golaghat</option>
            <option value="Gonda">Gonda</option>
            <option value="Gondia">Gondia</option>
            <option value="Gopalganj">Gopalganj</option>
            <option value="Gorakhpur">Gorakhpur</option>
            <option value="Gulbarga">Gulbarga</option>
            <option value="Gumla">Gumla</option>
            <option value="Guna">Guna</option>
            <option value="Guntur">Guntur</option>
            <option value="Gurdaspur">Gurdaspur</option>
            <option value="Gurgaon">Gurgaon</option>
            <option value="Gwalior">Gwalior</option>
            <option value="Hailakandi">Hailakandi</option>
            <option value="Hamirpur">Hamirpur</option>
            <option value="Hamirpur">Hamirpur</option>
            <option value="Hanumangarh">Hanumangarh</option>
            <option value="Harda">Harda</option>
            <option value="Hardoi">Hardoi</option>
            <option value="Haridwar">Haridwar</option>
            <option value="Hassan">Hassan</option>
            <option value="Haveridistrict">Haveri district</option>
            <option value="Hazaribag">Hazaribag</option>
            <option value="Hingoli">Hingoli</option>
            <option value="Hissar">Hissar</option>
            <option value="Hooghly">Hooghly</option>
            <option value="Hoshangabad">Hoshangabad</option>
            <option value="Hoshiarpur">Hoshiarpur</option>
            <option value="Howrah">Howrah</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Idukki">Idukki</option>
            <option value="ImphalEast">Imphal East</option>
            <option value="ImphalWest">Imphal West</option>
            <option value="Indore">Indore</option>
            <option value="Jabalpur">Jabalpur</option>
            <option value="Jagatsinghpur">Jagatsinghpur</option>
            <option value="JaintiaHills">Jaintia Hills</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Jaisalmer">Jaisalmer</option>
            <option value="Jajpur">Jajpur</option>
            <option value="Jalandhar">Jalandhar</option>
            <option value="Jalaun">Jalaun</option>
            <option value="Jalgaon">Jalgaon</option>
            <option value="Jalna">Jalna</option>
            <option value="Jalore">Jalore</option>
            <option value="Jalpaiguri">Jalpaiguri</option>
            <option value="Jammu">Jammu</option>
            <option value="Jamnagar">Jamnagar</option>
            <option value="Jamtara">Jamtara</option>
            <option value="Jamui">Jamui</option>
            <option value="Janjgir-Champa">Janjgir-Champa</option>
            <option value="Jashpur">Jashpur</option>
            <option value="Jaunpurdistrict">Jaunpur district</option>
            <option value="Jehanabad">Jehanabad</option>
            <option value="Jhabua">Jhabua</option>
            <option value="Jhajjar">Jhajjar</option>
            <option value="Jhalawar">Jhalawar</option>
            <option value="Jhansi">Jhansi</option>
            <option value="Jharsuguda">Jharsuguda</option>
            <option value="Jhunjhunu">Jhunjhunu</option>
            <option value="Jind">Jind</option>
            <option value="Jodhpur">Jodhpur</option>
            <option value="Jorhat">Jorhat</option>
            <option value="Junagadh">Junagadh</option>
            <option value="JyotibaPhuleNagar">Jyotiba Phule Nagar</option>
            <option value="Kabirdham(formerlyKawardha)"> Kabirdham (formerly Kawardha) </option>
            <option value="Kadapa">Kadapa</option>
            <option value="Kaimur">Kaimur</option>
            <option value="Kaithal">Kaithal</option>
            <option value="Kakinada">Kakinada</option>
            <option value="Kalahandi">Kalahandi</option>
            <option value="Kamrup">Kamrup</option>
            <option value="KamrupMetropolitan">Kamrup Metropolitan</option>
            <option value="Kanchipuram">Kanchipuram</option>
            <option value="Kandhamal">Kandhamal</option>
            <option value="Kangra">Kangra</option>
            <option value="Kanker">Kanker</option>
            <option value="Kannauj">Kannauj</option>
            <option value="Kannur">Kannur</option>
            <option value="Kanpur">Kanpur</option>
            <option value="KanshiRamNagar">Kanshi Ram Nagar</option>
            <option value="Kanyakumari">Kanyakumari</option>
            <option value="Kapurthala">Kapurthala</option>
            <option value="Karaikal">Karaikal</option>
            <option value="Karauli">Karauli</option>
            <option value="KarbiAnglong">Karbi Anglong</option>
            <option value="Kargil">Kargil</option>
            <option value="Karimganj">Karimganj</option>
            <option value="Karimnagar">Karimnagar</option>
            <option value="Karnal">Karnal</option>
            <option value="Karur">Karur</option>
            <option value="Kasaragod">Kasaragod</option>
            <option value="Kathua">Kathua</option>
            <option value="Katihar">Katihar</option>
            <option value="Katni">Katni</option>
            <option value="Kaushambi">Kaushambi</option>
            <option value="Kendrapara">Kendrapara</option>
            <option value="Kendujhar(Keonjhar)"> Kendujhar (Keonjhar) </option>
            <option value="Khagaria">Khagaria</option>
            <option value="Khammam">Khammam</option>
            <option value="Khandwa(EastNimar)">Khandwa (East Nimar)</option>
            <option value="Khargone(WestNimar)"> Khargone (West Nimar) </option>
            <option value="Kheda">Kheda</option>
            <option value="Khordha">Khordha</option>
            <option value="Khowai">Khowai</option>
            <option value="Khunti">Khunti</option>
            <option value="Kinnaur">Kinnaur</option>
            <option value="Kishanganj">Kishanganj</option>
            <option value="Kishtwar">Kishtwar</option>
            <option value="Kodagu">Kodagu</option>
            <option value="Koderma">Koderma</option>
            <option value="Kohima">Kohima</option>
            <option value="Kokrajhar">Kokrajhar</option>
            <option value="Kolar">Kolar</option>
            <option value="Kolasib">Kolasib</option>
            <option value="Kolhapur">Kolhapur</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Kollam">Kollam</option>
            <option value="Koppal">Koppal</option>
            <option value="Koraput">Koraput</option>
            <option value="Korba">Korba</option>
            <option value="Koriya">Koriya</option>
            <option value="Kota">Kota</option>
            <option value="Kottayam">Kottayam</option>
            <option value="Kozhikode">Kozhikode</option>
            <option value="Krishna">Krishna</option>
            <option value="Kulgam">Kulgam</option>
            <option value="Kullu">Kullu</option>
            <option value="Kupwara">Kupwara</option>
            <option value="Kurnool">Kurnool</option>
            <option value="Kurukshetra">Kurukshetra</option>
            <option value="KurungKumey">Kurung Kumey</option>
            <option value="Kushinagar">Kushinagar</option>
            <option value="Kutch">Kutch</option>
            <option value="LahaulandSpiti">Lahaul and Spiti</option>
            <option value="Lakhimpur">Lakhimpur</option>
            <option value="LakhimpurKheri">Lakhimpur Kheri</option>
            <option value="Lakhisarai">Lakhisarai</option>
            <option value="Lalitpur">Lalitpur</option>
            <option value="Latehar">Latehar</option>
            <option value="Latur">Latur</option>
            <option value="Lawngtlai">Lawngtlai</option>
            <option value="Leh">Leh</option>
            <option value="Lohardaga">Lohardaga</option>
            <option value="Lohit">Lohit</option>
            <option value="LowerDibangValley">Lower Dibang Valley</option>
            <option value="LowerSubansiri">Lower Subansiri</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Ludhiana">Ludhiana</option>
            <option value="Lunglei">Lunglei</option>
            <option value="Madhepura">Madhepura</option>
            <option value="Madhubani">Madhubani</option>
            <option value="Madurai">Madurai</option>
            <option value="MahamayaNagar">Mahamaya Nagar</option>
            <option value="Maharajganj">Maharajganj</option>
            <option value="Mahasamund">Mahasamund</option>
            <option value="Mahbubnagar">Mahbubnagar</option>
            <option value="Mahe">Mahe</option>
            <option value="Mahendragarh">Mahendragarh</option>
            <option value="Mahoba">Mahoba</option>
            <option value="Mainpuri">Mainpuri</option>
            <option value="Malappuram">Malappuram</option>
            <option value="Maldah">Maldah</option>
            <option value="Malkangiri">Malkangiri</option>
            <option value="Mamit">Mamit</option>
            <option value="Mandi">Mandi</option>
            <option value="Mandla">Mandla</option>
            <option value="Mandsaur">Mandsaur</option>
            <option value="Mandya">Mandya</option>
            <option value="Mansa">Mansa</option>
            <option value="Marigaon">Marigaon</option>
            <option value="Mathura">Mathura</option>
            <option value="Mau">Mau</option>
            <option value="Mayurbhanj">Mayurbhanj</option>
            <option value="Medak">Medak</option>
            <option value="Meerut">Meerut</option>
            <option value="Mehsana">Mehsana</option>
            <option value="Mewat">Mewat</option>
            <option value="Mirzapur">Mirzapur</option>
            <option value="Moga">Moga</option>
            <option value="Mokokchung">Mokokchung</option>
            <option value="Mon">Mon</option>
            <option value="Moradabad">Moradabad</option>
            <option value="Morena">Morena</option>
            <option value="MumbaiCity">Mumbai City</option>
            <option value="Mumbaisuburban">Mumbai suburban</option>
            <option value="Munger">Munger</option>
            <option value="Murshidabad">Murshidabad</option>
            <option value="Muzaffarnagar">Muzaffarnagar</option>
            <option value="Muzaffarpur">Muzaffarpur</option>
            <option value="Mysore">Mysore</option>
            <option value="Nabarangpur">Nabarangpur</option>
            <option value="Nadia">Nadia</option>
            <option value="Nagaon">Nagaon</option>
            <option value="Nagapattinam">Nagapattinam</option>
            <option value="Nagaur">Nagaur</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Nainital">Nainital</option>
            <option value="Nalanda">Nalanda</option>
            <option value="Nalbari">Nalbari</option>
            <option value="Nalgonda">Nalgonda</option>
            <option value="Namakkal">Namakkal</option>
            <option value="Nanded">Nanded</option>
            <option value="Nandurbar">Nandurbar</option>
            <option value="Narayanpur">Narayanpur</option>
            <option value="Narmada">Narmada</option>
            <option value="Narsinghpur">Narsinghpur</option>
            <option value="Nashik">Nashik</option>
            <option value="Navsari">Navsari</option>
            <option value="Nawada">Nawada</option>
            <option value="Nawanshahr">Nawanshahr</option>
            <option value="Nayagarh">Nayagarh</option>
            <option value="Neemuch">Neemuch</option>
            <option value="Nellore">Nellore</option>
            <option value="NewDelhi">New Delhi</option>
            <option value="Nilgiris">Nilgiris</option>
            <option value="Nizamabad">Nizamabad</option>
            <option value="North24Parganas">North 24 Parganas</option>
            <option value="NorthDelhi">North Delhi</option>
            <option value="NorthEastDelhi">North East Delhi</option>
            <option value="NorthGoa">North Goa</option>
            <option value="NorthSikkim">North Sikkim</option>
            <option value="NorthTripura">North Tripura</option>
            <option value="NorthWestDelhi">North West Delhi</option>
            <option value="Nuapada">Nuapada</option>
            <option value="Ongole">Ongole</option>
            <option value="Osmanabad">Osmanabad</option>
            <option value="Pakur">Pakur</option>
            <option value="Palakkad">Palakkad</option>
            <option value="Palamu">Palamu</option>
            <option value="Pali">Pali</option>
            <option value="Palwal">Palwal</option>
            <option value="Panchkula">Panchkula</option>
            <option value="Panchmahal">Panchmahal</option>
            <option value="PanchsheelNagardistrict(Hapur)"> Panchsheel Nagar district (Hapur) </option>
            <option value="Panipat">Panipat</option>
            <option value="Panna">Panna</option>
            <option value="PapumPare">Papum Pare</option>
            <option value="Parbhani">Parbhani</option>
            <option value="PaschimMedinipur">Paschim Medinipur</option>
            <option value="Patan">Patan</option>
            <option value="Pathanamthitta">Pathanamthitta</option>
            <option value="Pathankot">Pathankot</option>
            <option value="Patiala">Patiala</option>
            <option value="Patna">Patna</option>
            <option value="PauriGarhwal">Pauri Garhwal</option>
            <option value="Perambalur">Perambalur</option>
            <option value="Phek">Phek</option>
            <option value="Pilibhit">Pilibhit</option>
            <option value="Pithoragarh">Pithoragarh</option>
            <option value="Pondicherry">Pondicherry</option>
            <option value="Poonch">Poonch</option>
            <option value="Porbandar">Porbandar</option>
            <option value="Pratapgarh">Pratapgarh</option>
            <option value="Pratapgarh">Pratapgarh</option>
            <option value="Pudukkottai">Pudukkottai</option>
            <option value="Pulwama">Pulwama</option>
            <option value="Pune">Pune</option>
            <option value="PurbaMedinipur">Purba Medinipur</option>
            <option value="Puri">Puri</option>
            <option value="Purnia">Purnia</option>
            <option value="Purulia">Purulia</option>
            <option value="Raebareli">Raebareli</option>
            <option value="Raichur">Raichur</option>
            <option value="Raigad">Raigad</option>
            <option value="Raigarh">Raigarh</option>
            <option value="Raipur">Raipur</option>
            <option value="Raisen">Raisen</option>
            <option value="Rajauri">Rajauri</option>
            <option value="Rajgarh">Rajgarh</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Rajnandgaon">Rajnandgaon</option>
            <option value="Rajsamand">Rajsamand</option>
            <option value="RamabaiNagar(KanpurDehat)"> Ramabai Nagar (Kanpur Dehat) </option>
            <option value="Ramanagara">Ramanagara</option>
            <option value="Ramanathapuram">Ramanathapuram</option>
            <option value="Ramban">Ramban</option>
            <option value="Ramgarh">Ramgarh</option>
            <option value="Rampur">Rampur</option>
            <option value="Ranchi">Ranchi</option>
            <option value="Ratlam">Ratlam</option>
            <option value="Ratnagiri">Ratnagiri</option>
            <option value="Rayagada">Rayagada</option>
            <option value="Reasi">Reasi</option>
            <option value="Rewa">Rewa</option>
            <option value="Rewari">Rewari</option>
            <option value="RiBhoi">Ri Bhoi</option>
            <option value="Rohtak">Rohtak</option>
            <option value="Rohtas">Rohtas</option>
            <option value="Rudraprayag">Rudraprayag</option>
            <option value="Rupnagar">Rupnagar</option>
            <option value="Sabarkantha">Sabarkantha</option>
            <option value="Sagar">Sagar</option>
            <option value="Saharanpur">Saharanpur</option>
            <option value="Saharsa">Saharsa</option>
            <option value="Sahibganj">Sahibganj</option>
            <option value="Saiha">Saiha</option>
            <option value="Salem">Salem</option>
            <option value="Samastipur">Samastipur</option>
            <option value="Samba">Samba</option>
            <option value="Sambalpur">Sambalpur</option>
            <option value="Sangli">Sangli</option>
            <option value="Sangrur">Sangrur</option>
            <option value="SantKabirNagar">Sant Kabir Nagar</option>
            <option value="SantRavidasNagar">Sant Ravidas Nagar</option>
            <option value="Saran">Saran</option>
            <option value="Satara">Satara</option>
            <option value="Satna">Satna</option>
            <option value="SawaiMadhopur">Sawai Madhopur</option>
            <option value="Sehore">Sehore</option>
            <option value="Senapati">Senapati</option>
            <option value="Seoni">Seoni</option>
            <option value="SeraikelaKharsawan">Seraikela Kharsawan</option>
            <option value="Serchhip">Serchhip</option>
            <option value="Shahdol">Shahdol</option>
            <option value="Shahjahanpur">Shahjahanpur</option>
            <option value="Shajapur">Shajapur</option>
            <option value="Shamli">Shamli</option>
            <option value="Sheikhpura">Sheikhpura</option>
            <option value="Sheohar">Sheohar</option>
            <option value="Sheopur">Sheopur</option>
            <option value="Shimla">Shimla</option>
            <option value="Shimoga">Shimoga</option>
            <option value="Shivpuri">Shivpuri</option>
            <option value="Shopian">Shopian</option>
            <option value="Shravasti">Shravasti</option>
            <option value="Sibsagar">Sibsagar</option>
            <option value="Siddharthnagar">Siddharthnagar</option>
            <option value="Sidhi">Sidhi</option>
            <option value="Sikar">Sikar</option>
            <option value="Simdega">Simdega</option>
            <option value="Sindhudurg">Sindhudurg</option>
            <option value="Singrauli">Singrauli</option>
            <option value="Sirmaur">Sirmaur</option>
            <option value="Sirohi">Sirohi</option>
            <option value="Sirsa">Sirsa</option>
            <option value="Sitamarhi">Sitamarhi</option>
            <option value="Sitapur">Sitapur</option>
            <option value="Sivaganga">Sivaganga</option>
            <option value="Siwan">Siwan</option>
            <option value="Solan">Solan</option>
            <option value="Solapur">Solapur</option>
            <option value="Sonbhadra">Sonbhadra</option>
            <option value="Sonipat">Sonipat</option>
            <option value="Sonitpur">Sonitpur</option>
            <option value="South24Parganas">South 24 Parganas</option>
            <option value="SouthDelhi">South Delhi</option>
            <option value="SouthGaroHills">South Garo Hills</option>
            <option value="SouthGoa">South Goa</option>
            <option value="SouthSikkim">South Sikkim</option>
            <option value="SouthTripura">South Tripura</option>
            <option value="SouthWestDelhi">South West Delhi</option>
            <option value="SriMuktsarSahib">Sri Muktsar Sahib</option>
            <option value="Srikakulam">Srikakulam</option>
            <option value="Srinagar">Srinagar</option>
            <option value="Subarnapur(Sonepur)"> Subarnapur (Sonepur) </option>
            <option value="Sultanpur">Sultanpur</option>
            <option value="Sundergarh">Sundergarh</option>
            <option value="Supaul">Supaul</option>
            <option value="Surat">Surat</option>
            <option value="Surendranagar">Surendranagar</option>
            <option value="Surguja">Surguja</option>
            <option value="Tamenglong">Tamenglong</option>
            <option value="TarnTaran">Tarn Taran</option>
            <option value="Tawang">Tawang</option>
            <option value="TehriGarhwal">Tehri Garhwal</option>
            <option value="Thane">Thane</option>
            <option value="Thanjavur">Thanjavur</option>
            <option value="TheDangs">The Dangs</option>
            <option value="Theni">Theni</option>
            <option value="Thiruvananthapuram">Thiruvananthapuram</option>
            <option value="Thoothukudi">Thoothukudi</option>
            <option value="Thoubal">Thoubal</option>
            <option value="Thrissur">Thrissur</option>
            <option value="Tikamgarh">Tikamgarh</option>
            <option value="Tinsukia">Tinsukia</option>
            <option value="Tirap">Tirap</option>
            <option value="Tiruchirappalli">Tiruchirappalli</option>
            <option value="Tirunelveli">Tirunelveli</option>
            <option value="Tirupur">Tirupur</option>
            <option value="Tiruvallur">Tiruvallur</option>
            <option value="Tiruvannamalai">Tiruvannamalai</option>
            <option value="Tiruvarur">Tiruvarur</option>
            <option value="Tonk">Tonk</option>
            <option value="Tuensang">Tuensang</option>
            <option value="Tumkur">Tumkur</option>
            <option value="Udaipur">Udaipur</option>
            <option value="Udalguri">Udalguri</option>
            <option value="UdhamSinghNagar">Udham Singh Nagar</option>
            <option value="Udhampur">Udhampur</option>
            <option value="Udupi">Udupi</option>
            <option value="Ujjain">Ujjain</option>
            <option value="Ukhrul">Ukhrul</option>
            <option value="Umaria">Umaria</option>
            <option value="Una">Una</option>
            <option value="Unnao">Unnao</option>
            <option value="UpperSiang">Upper Siang</option>
            <option value="UpperSubansiri">Upper Subansiri</option>
            <option value="UttarDinajpur">Uttar Dinajpur</option>
            <option value="UttaraKannada">Uttara Kannada</option>
            <option value="Uttarkashi">Uttarkashi</option>
            <option value="Vadodara">Vadodara</option>
            <option value="Vaishali">Vaishali</option>
            <option value="Valsad">Valsad</option>
            <option value="Varanasi">Varanasi</option>
            <option value="Vellore">Vellore</option>
            <option value="Vidisha">Vidisha</option>
            <option value="Viluppuram">Viluppuram</option>
            <option value="Virudhunagar">Virudhunagar</option>
            <option value="Visakhapatnam">Visakhapatnam</option>
            <option value="Vizianagaram">Vizianagaram</option>
            <option value="Vyara">Vyara</option>
            <option value="Warangal">Warangal</option>
            <option value="Wardha">Wardha</option>
            <option value="Washim">Washim</option>
            <option value="Wayanad">Wayanad</option>
            <option value="WestChamparan">West Champaran</option>
            <option value="WestDelhi">West Delhi</option>
            <option value="WestGaroHills">West Garo Hills</option>
            <option value="WestKameng">West Kameng</option>
            <option value="WestKhasiHills">West Khasi Hills</option>
            <option value="WestSiang">West Siang</option>
            <option value="WestSikkim">West Sikkim</option>
            <option value="WestSinghbhum">West Singhbhum</option>
            <option value="WestTripura">West Tripura</option>
            <option value="Wokha">Wokha</option>
            <option value="Yadgir">Yadgir</option>
            <option value="YamunaNagar">Yamuna Nagar</option>
            <option value="Yanam">Yanam</option>
            <option value="Yavatmal">Yavatmal</option>
            <option value="Zunheboto">Zunheboto</option>
        </select>



        <!-- <input type="text" class="icon-location" value placeholder="location"> -->
        <input type="text" class="icon-search" value placeholder="Search">
        <div class="header-right">
            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#">User Login <br><br></a>
                <a href="../Buy/selling_homepage.php">Sell Your Product <br><br></a>
                <a href="./user_profile.html">Update Profile <br><br></a>
                <a href="#">Contact Us <br><br></a>
              </div>
              
              <div id="main">
                <button class="openbtn" onclick="openNav()">User Profile</button>  
                
              </div>
       
        
       
              
              <script>
                    function openNav() {
                        document.getElementById("mySidebar").style.width = "250px";
                        document.getElementById("main").style.marginLeft = "250px";
                    }
                    
                    function closeNav() {
                        document.getElementById("mySidebar").style.width = "0";
                        document.getElementById("main").style.marginLeft= "0";
                    }
              </script>
              

                </div>
        
        </div>

        


    </div>

    <!--HEADER END-->


    <!-- ---slider starts--- -->


    <header>


        <span class="Home"><a cqqlass="act" href="#">PRICING</a></span>
        <span class="service"><a class="act" href="#">SERVICE</a></span>
        <span class="pricing"><a class="act" href="#">HOME</a></span>


    </header>

    <div class="slider">

        <div class="myslider fade" style="display: block;">
            <div class="text">
                Washing service
            </div>
            <button class="btnn">button</button>
            <img src="img1.jpg" style="width: 100%; height: 100%;">

        </div>

    </div>
    <div class="slider">
        <div class="myslider fade">
            <div class="text">
                Ironing clothes
            </div>
            <button class="btnn">button</button>
            <img src="img2.jpg" style="width: 100%; height: 100%;">
        </div>

    </div>
    <div class="slider">
        <div class="myslider fade">
            <div class="text">
                Dry cleaning
            </div>
            <button class="btnn">button</button>
            <img src="img3.jpg" style="width: 100%; height: 100%;">
        </div>

    </div>
    <div class="slider">
        <div class="myslider fade">
            <div class="text">
                Shoe cleaning
            </div>
            <button class="btnn">button</button>
            <img src="img4.jpg" style="width: 100%; height: 100%;">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="dotsbox" style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </div>
    <script src="home.js"></script>

    <!-- --slider end-- -->

    <!-- -- service--starts-- -->


    <section class="services">
        <!--------heading-->
        <div class="s-heading">
            <h1>services</h1>
        </div>
        <!-------service box container-------->
        <div class="s-box-container">
            <!-------box-1------->
            <div class="s-box">
                <!------top bar---->
                <div class="bar"></div>
                <!------img------>
                <img src="washing.jpg" alt="1">
                <!----service name------->
                <h1>washing</h1>
                <!-------btn------->
                <a href="#" class="s-btn">More</a>

            </div>
            <!-------box-2------->
            <div class="s-box">
                <!------top bar---->
                <div class="bar"></div>
                <!------img------>
                <img src="ironing.jpg" alt="2">
                <!----service name------->
                <h1>ironing</h1>
                <!-------btn------->
                <a href="#" class="s-btn">More</a>

            </div>
            <!-------box-3------->
            <div class="s-box">
                <!------top bar---->
                <div class="bar"></div>
                <!------img------>
                <img src="dryCleaning.jpg" alt="3">
                <!----service name------->
                <h1>dry cleaning</h1>
                <!-------btn------->
                <a href="#" class="s-btn">More</a>

            </div>
            <!-------box-4------->
            <div class="s-box">
                <!------top bar---->
                <div class="bar"></div>
                <!------img------>
                <img src="shoe.jpg" alt="4">
                <!----service name------->
                <h1>shoe cleaning</h1>
                <!-------btn------->
                <a href="#" class="s-btn">More</a>

            </div>
        </div>
    </section>


    <!-- ---service ends--- -->

    <!-- pricing starts -- -->


    <div class="row">
        <div class="circal">
            <div class="box">
                <img src="washing.jpg" alt="1">
                <h2>washing service</h2>
                <a href="#">view price</a>
            </div>
        </div>
        <div class="circal">
            <div class="box">
                <img src="ironing.jpg" alt="2">
                <h2>ironing service</h2>
                <a href="#">view price</a>
            </div>
        </div>
        <div class="circal">
            <div class="box">
                <img src="dryCleaning.jpg" alt="3">
                <h2>Dry Cleaning service</h2>
                <a href="#">view price</a>
            </div>
        </div>
        <div class="circal">
            <div class="box">
                <img src="shoe.jpg" alt="4">
                <h2>shoe Cleaning service</h2>
                <a href="#">view price</a>
            </div>
        </div>
    </div>


    <!-- --pricing ends ---->

    <!-- --offers starts-- -->


    <div class="pricing-table">
        <div class="pricing-card">
            <h3 class="pricing-card-header">Personal</h3>
            <div class="price"><sup>$</sup>15<span>/MO</span></div>
            <ul>
                <li><strong>3</strong> Websites</li>
                <li><strong>20 GB</strong> SSD</li>
                <li><strong>1</strong> Domain Name</li>
                <li><strong>5</strong> Email</li>
                <li><strong>1x</strong> CPU & RAM</li>
            </ul>
            <a href="#" class="order-btn">Order Now</a>
        </div>

        <div class="pricing-card">
            <h3 class="pricing-card-header">Professional</h3>
            <div class="price"><sup>$</sup>30<span>/MO</span></div>
            <ul>
                <li><strong>10</strong> Websites</li>
                <li><strong>50 GB</strong> SSD</li>
                <li><strong>1</strong> Domain Name</li>
                <li><strong>20</strong> Email</li>
                <li><strong>1.5x</strong> CPU & RAM</li>
            </ul>
            <a href="#" class="order-btn">Order Now</a>
        </div>

        <div class="pricing-card">
            <h3 class="pricing-card-header">Premium</h3>
            <div class="price"><sup>$</sup>50<span>/MO</span></div>
            <ul>
                <li><strong>30</strong> Websites</li>
                <li><strong>150 GB</strong> SSD</li>
                <li><strong>1</strong> Domain Name</li>
                <li><strong>40</strong> Email</li>
                <li><strong>2x</strong> CPU & RAM</li>
            </ul>
            <a href="#" class="order-btn">Order Now</a>
        </div>


    </div>

    <!-- -- offers ends-- -->

    <!-- --works starts-- -->


    <div class="progress">

        <ul>
            <li>
                <img src="dirty clothes.jpg"><br>
                <i class="fa fa-check"></i>
                <p>Bag up dirty clothes</p>
            </li>`


            <li>
                <img src="truck_page.jpg"><br>
                <i class="fa fa-check"></i>
                <p>pick up dirty clothes</p>
            </li>


            <li>
                <img src="washing_steps.jpg"><br>
                <i class="fa fa-check"></i>
                <p>we clean your clothes</p>
            </li>


            <li>
                <img src="folded_.jpg"><br>
                <i class="fa fa-check"></i>
                <p>we deliver your clean, folded clothes</p>
            </li>

        </ul>

    </div>



    <!--   works ends-- -->



    <!-- ---testimonial strats-- -->


    <section>
        <h2 align="center"></h2>
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
        window.onscroll = function () { myFunction() };

        function myFunction() {
            if (document.documentElement.scrollTop > 350) {
                document.getElementById("container3").className = "lineUp";
            }
        }
    </script>


    <!-- ---testimonial ends -- -->

    <!-- ---footer starts---- -->

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
                            <a href="tel:0000000000">+91 1234567899</a>
                        </p>
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


    <!-- -----footer ends---- -->


</body>

</html>