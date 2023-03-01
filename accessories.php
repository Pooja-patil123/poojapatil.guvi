<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dropdown.css">
    <title>Accessories</title>
    <style>

form{
            display: flex;
            margin-top: -85px;
            margin-left: 500px;
        }
        
        :root {
            --red: #ff5a3c;
            --light-red: #f9edeb;
        }

        * {
            font-family: 'poppins', sans-serif;
            /* zoom: 94%; */
        }

        section {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* outline: none; 
        border:none; */
            text-decoration: none;
            text-transform: capitalize;
           
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-behavior: smooth;
            scroll-padding-top: 7rem;
        }


        body {
            margin: 0px;
        }

        #GFG {
            text-decoration: none;
        }

        .icon-location {
            background: url("https://img.icons8.com/material-outlined/24/undefined/marker.png") no-repeat left;
            background-size: 20px;
            padding-left: 25px;

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
            width: 50%;
            resize: vertical;
            margin: 16px;
            overflow: visible;
            font-size: larger;
        }

        .icon-search::placeholder {
            font-size: 20px;


        }

        .featured .box-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        section {
            padding: 2rem 9%;
            position: relative;
        }

        .featured .box-container .box {
            border: .1rem solid rgba(0, 0, 0, .2);
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
            border-radius: .5rem;
            overflow: hidden;
            background: #fff;
            flex: 1 1 50rem;
        }

        .featured .box-container .box .image-container {
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 45rem;
        }

        .featured .box-container .box .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .2s linear;
        }

        .featured .box-container .box:hover .image-container img {
            transform: scale(1.1);
        }

        .featured .box-container .box .image-container .info {
            position: absolute;
            top: 1rem;
            left: 0;
            display: flex;
        }

        .featured .box-container .box .image-container .info h3 {
            font-weight: 500;
            font-size: 1.4rem;
            color: #fff;
            background: rgba(0, 0, 0, .3);
            border-radius: .5rem;
            padding: .5rem 1.5rem;
            margin-left: 1rem;
        }

        .featured .box-container .box .image-container .icons {
            position: absolute;
            bottom: 1rem;
            right: 0;
            display: flex;
        }

        .featured .box-container .box .image-container .icons a {
            font-size: 1.4rem;
            color: #fff;
            display: flex;
            border-radius: .5rem;
            background: rgba(0, 0, 0, .3);
            margin-right: 1rem;
            padding: .7rem;
        }

        .featured .box-container .box .image-container .icons a h3 {
            font-weight: 500;
            padding-left: .5rem;
        }

        .featured .box-container .box .image-container .icons a:hover {
            background: var(--red);
        }

        .featured .box-container .box .content {
            padding: 1.5rem;
        }

        .featured .box-container .box .content .price {
            display: flex;
            align-items: center;
        }

        .featured .box-container .box .content .price h3 {
            color: var(--red);
            font-size: 2rem;
            margin-right: auto;
        }

        .featured .box-container .box .content .price a {
            color: #666;
            font-size: 1.5rem;
            margin-right: .5rem;
            border-radius: .5rem;
            height: 4rem;
            width: 4rem;
            line-height: 4rem;
            text-align: center;
            background: #f7f7f7;
        }

        .featured .box-container .box .content .price a:hover {
            background: var(--red);
            color: #fff;
        }

        .featured .box-container .box .content .location {
            padding: 1rem 0;
        }

        .featured .box-container .box .content .location h3 {
            font-size: 2.5rem;
            color: #333;
        }

        .featured .box-container .box .content .location p {
            font-size: 1.5rem;
            color: #666;
            line-height: 1.5;
            padding-top: .5rem;
        }

        .featured .box-container .box .content .details {
            padding: .5rem 0;
            display: flex;
        }

        .featured .box-container .box .content .details h3 {
            flex: 1;
            padding: 1rem;
            border: .1rem solid rgba(0, 0, 0, .1);
            color: #999;
            font-size: 1.3rem;
        }

        .featured .box-container .box .content .details h3 i {
            color: #333;
            padding-left: .5rem;
        }

        .featured .box-container .box .content .buttons {
            display: flex;
            gap: 1rem;
        }

        .featured .box-container .box .content .buttons .btn {
            flex: 1;
            font-size: 1.5rem;
        }

        h1.heading {
            font-size: 30PX;
            text-align: center;
            margin-bottom: 50px;
            margin-top: 50px;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .rating span,
        .rating {
            color: var(--carribean-green);
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

        .info {
            position: relative;
        }

        .info li {
            display: grid;
            grid-template-columns: 30px 1fr;
            margin-bottom: 2px;
        }

        .info li span:nth-child(1) {
            color: black;
            font-size: 20px;
        }

        .info li span {
            color: black;
        }

        .info a {
            color: black;
            text-decoration: none;
        }

        .info a:hover {
            color: #ffeb3b;
        }
        @media(max-width: 767px) {
            form
            {
                display: block ;
            margin-top: 0px;
            margin-left: 0px;
            }
 }
@media(max-width: 767px) {
    .header-right {
    /* float: none; */
}
.header-right {
    margin-top: 110px;
    margin-right: 10px;
}
.header-right {
    top: 0px;
    right: 0px;
    height: 0px;
    width: 0px;
}
}
    </style>
</head>

<body>
    <div class="header">
        <a href="index.html" class="logo">Buy & Sell</a>
        <div class="header_float">
        <select name="cities" id="cities" placeholder="City" style="
              background: url(https://img.icons8.com/material-outlined/24/undefined/marker.png)
                no-repeat left;
              width: 264px;
              padding: 17px;
              size: 100%;
              border-width: 3px;
              margin: 15px;
              background-color: white;
              @media screen and (max-width: 1040px) {
                height: 15px;
              }
            ">
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
            <option value="ChhatrapatiShahujiMaharajNagar">
                Chhatrapati Shahuji Maharaj Nagar
            </option>
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
            <option value="DadraandNagarHaveli">Dadra and Nagar Haveli</option>
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
            <option value="Kabirdham(formerlyKawardha)">
                Kabirdham (formerly Kawardha)
            </option>
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
            <option value="Kendujhar(Keonjhar)">Kendujhar (Keonjhar)</option>
            <option value="Khagaria">Khagaria</option>
            <option value="Khammam">Khammam</option>
            <option value="Khandwa(EastNimar)">Khandwa (East Nimar)</option>
            <option value="Khargone(WestNimar)">Khargone (West Nimar)</option>
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
            <option value="PanchsheelNagardistrict(Hapur)">
                Panchsheel Nagar district (Hapur)
            </option>
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
            <option value="RamabaiNagar(KanpurDehat)">
                Ramabai Nagar (Kanpur Dehat)
            </option>
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
            <option value="Subarnapur(Sonepur)">Subarnapur (Sonepur)</option>
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

        <form action="search.php" method="post">
        <input class="icon-search" type="text" name="srch" placeholder="Search">
        </form>
        <div class="header-right">
            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#">About <br><br></a>
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



    <div class="topnav" id="myTopnav">

        Menu

        <div class="dropdown">

            <!-- <div class="spacing"> -->
            <button class="dropbtn">Mobile
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="tablet.php">Tablet</a>
                <a href="android.php">Andriod</a>
                <a href="iphone.php">Iphone</a>
                <a href="accessories.php">Accesories</a>
                <a href="see all mobile.php"><u>See all</u></a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Electronics
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="tv.php">TVs</a>
                <a href="fridge.php">Fridge</a>
                <a href="ac.php">ACs</a>
                <a href="camera&lens.php">Cameras & Lenses</a>
                <a href="computer&laptop.php">Computers & laptops</a>
                <a href="See all electronics.php"><u>See all</u></a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Furniture
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="sofa.php">Sofa & Dining</a>
                <a href="bed.php">Beds & Wardrobes</a>
                <a href="homedecore.php">Home Decor & Garden</a>
                <a href="kid furniture.php">Kids Furniture</a>
                <a href="furniture seeall.php"><u>See all</u></a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Bikes
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="Motorcycle.php">Motorcycles</a>
                <a href="scooter.php">Scooters</a>
                <a href="s_parts.php">Spare Parts</a>
                <a href="Bicycle.php">Bicycles</a>
                <a href="bike.php"><u>See all</u></a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Cars
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="automatic.php">Automatic</a>
                <a href="manual.php">Manual</a>
                <a href="see all cars.php"><u>See all</u></a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Sports and Gym Equipments
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="gym.php">Gym & Fitness</a>
                <a href="sports.php">Sports Equipment</a>
                <a href="see all equipment.php"><u>See all</u></a>
            </div>
            </div>
            <div class="dropdown">
            <button class="dropbtn">Books
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="book.php">Books</a>
            </div>
        </div>
        <!-- </div> -->
        <a href="javascript:void(0);" style="font-size:20px;" class="icon" onclick="myFunction()">&#9776; Menu</a>

    </div>



    <section class="featured" id="featured">
        <h1 class="heading"><span>Accessories</span></h1>

        <div class="box-container">
        <?php
      error_reporting(E_ERROR | E_PARSE);
      $connect=mysqli_connect("localhost","root","","gradientek");
      if (mysqli_connect_error())
      {
       die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
      }
      
      
      
      $r=mysqli_query($connect,"select * from sell_mobile_form where type = 'Accessories'");
      
      while($row=mysqli_fetch_array($r)){
      ?>
            <div class="box" onclick="location.href='#';">

            <?php echo "<a id='GFG' href='mobile_detail.php?mobile_id=".$row[0]."'>"; ?>
                    <div class="image-container">
                    <?PHP echo "<img src='../files/{$row[6]}'>" ?>
                        <div class="info">
                            <h3>1 days ago</h3>


                        </div>

                    </div>
                    <div class="content">
                        <div class="price">
                            <h3><?php echo "₹$row[5]";?></h3>
                            <div class="rating" style="color: black" ;>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                        </div>
                        <div class="location">

                            <h3><?php echo "$row[4]";?></h3>
                                    <h3><?php echo "$row[2]";?></h3>
                             
                            <p><?php echo "$row[3]";?></p>
                        </div>

                    </div>
                </a>
            </div>
<?php } ?>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>






        </div>

    </section>
    <footer class="footer">
        <div class="containerFooter">
            <div class="rowFooter">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <ul class="info">
                        <li>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span>GradienTek<br>India</span>

                        </li>
                        <li>
                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <p><a href="tel:7719020404">7000000000</a></p>
                        </li>
                        <li>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <p><a href="mail:gradientek@gmail.com">gradientek@gmail.com</a><br>
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>