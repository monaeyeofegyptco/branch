<?php 
$nileCruiseDescription = <<<START

<p>Do you want to go on a cruise on the Nile? You've come to the right place, because Eye of Egypt Travel offers the best Nile cruises in Egypt. </p>

<p>Choose your dream cruise through a variety of Nile cruises in the land of the Pharaohs, sailing through southern Egypt and discover the most incredible and majestic temples between the cities of Luxor and Aswan.</p>

<p>The Nile Cruise from Luxor to Aswan takes 5 days and vice versa Nile cruise from Aswan to Luxor 4 days. You also have the option to go on a round Nile Cruise from Luxor to Luxor or from Aswan to Aswan.</p>

<p>During the tour days on board your Nile River Cruise, you will visit the East Bank in Luxor which includes the Temple of Karnak and Luxor Temple. Enjoy dinner on board and feast your eyes on a Belly Dance Show.</p>

<p>Another day features a visit to the West Bank to see the Valley of the Kings, Valley of the Queens, and Hatshepsut Temple, then dressing in casual attire for the Captain’s welcome party and chat the night away as you sail to Edfu.</p>

<p>A day tour to Edfu and Kom Ombo will let you explore the Temple of Kom Ombo and Temple of Horus in Edfu then sail to Aswan to visit the Aswan High Dam, Unfinished Obelisk and the Temple of Philae</p>

<p>Nile River Cruise Prices starting from $417.</p>

START ;

$nileCruiseDescription = <<<START

<p>Do you want to go on a cruise on the Nile? You've come to the right place, because Eye of Egypt Travel offers the best Nile cruises in Egypt. </p>

<p>Choose your dream cruise through a variety of Nile cruises in the land of the Pharaohs, sailing through southern Egypt and discover the most incredible and majestic temples between the cities of Luxor and Aswan.</p>

<p>The Nile Cruise from Luxor to Aswan takes 5 days and vice versa Nile cruise from Aswan to Luxor 4 days. You also have the option to go on a round Nile Cruise from Luxor to Luxor or from Aswan to Aswan.</p>



START ;

$strStandardNileCruise = "Luxor Aswan Standard Nile Cruises" ;
$strStandardNileCruiseOverview = "Standard Nile Cruise ships are an excellent option for those who are looking for Nile Cruise ships Luxor Aswan price with a good standard of service and variety of the provided food. Modern cabins with a better standard." ;

$strDeluxeNileCruise ="Luxor Aswan Deluxe Nile Cruises" ;
$strDeluxeNileCruiseOverview ="See the wonders of ancient Egypt on board one of our Nile Cruises from Aswan or Luxor. Let us guide you around magnificent temples and five thousand years of culture, our cruises also offer" ;

$strUltraDeluxeNileCruise = "Luxor Aswan Ultra Deluxe Nile Cruises" ;
$strUltraDeluxeNileCruiseOverview = "Top-Rated Ultra Deluxe Nile Cruises including all sightseeing tours with English speaking Egyptologist guides. Book your dream Ultra Deluxe Nile River cruise now!" ;


$strBestLuxuryNileCruise= "Luxor Aswan Luxury Nile Cruises" ;
$strBestLuxuryNileCruiseOverview = "Cruise along the Nile on board a Luxury Nile Cruise in 2023/2024 and fall in love with the secrets of ancient Egypt from timeless monuments to hand carved temples and tombs, Book now your Luxury Nile Cruise with Luxor and Aswan Travel.";


$strDahabiyaNileCruise = "Dahabiya Nile Cruises" ;
$strDahabiyaNileCruiseOverView = "Take the classic way to see the Nile. Enjoy a tranquil sailing and explore unique temples & tombs not on your average Nile River cruise route onboard a Dahabiya, most exclusive and luxurious way to experience the river." ;

$strLakeNasserNileCruise = "Lake Nasser Cruises" ;
$strLakeNasserNileCruiseOverView = "Discover the best of Egypt and leave the stress and worries you have behind by sailing and experiencing a relaxing journey south on Lake Nasser to see the monuments and ruins of Ancient Nubia and Abu Simbel.";



?>


<article>
    <section class="tours-c1"> 
        <div>
            <h1>Egypt Nile Cruise</h1>
            <p><?=$nileCruiseDescription?></p>
        </div>
        <div>
        <img class="tours-img0" src="/img/pages/nile/001.jpg" alt="">
        </div>
    </section>
    <section><div class="line-h"></div></section>

    <section><div class="mod1"></div></section>
    <section><div class="line-h"></div></section>

    <section><div class="mod2"></div></section>
    <section><div class="line-h"></div></section>

    <section><div class="mod3"></div></section>
    <section><div class="line-h"></div></section>

    <section><div class="mod4"></div></section>
    <section><div class="line-h"></div></section>

    <section><div class="mod5"></div></section>
    <section><div class="line-h"></div></section>

    <section><div class="mod6"></div></section>
    
    <br><br><br><br>


</article>


<script type="text/javascript">
    
    
    
    


    //Standard Nile Cruise
    setTimeout(() => {
        const req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) { 
                //console.log(this.responseText) ;
                var nile1 = new Packages(this.responseText, 'mod1','pageClass2','packstyle-b',3,500,3,'x');
                nile1.pagging();
                nile1.heading('<?= $strStandardNileCruise ?>', '<?= $strStandardNileCruiseOverview ?>');
                nile1.filter(['hot deals', 'NEW price', 'sea sports']); 
            };
        };
        req.open("POST", apiUri, false);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send("func=1&section=nilecruise&category=LA&subcategory=Standard");

    }, 100);

    //Deluxe Nile Cruise
    setTimeout(() => {
        const req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) { 
                //console.log(this.responseText) ;
                var nile1 = new Packages(this.responseText, 'mod2','pageClass2','packstyle-b',3,500,3,'x');
                nile1.pagging();
                nile1.heading('<?= $strDeluxeNileCruise ?>', '<?= $strDeluxeNileCruiseOverview ?>');
                nile1.filter(['hot deals', 'NEW price', 'sea sports']); 
            };
        };
        req.open("POST", apiUri, false);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send("func=1&section=nilecruise&category=LA&subcategory=Deluxe");

    }, 200);


    //Ultra Deluxe Nile Cruise
    setTimeout(() => {
        const req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) { 
                //console.log(this.responseText) ;
                var nile1 = new Packages(this.responseText, 'mod3','pageClass2','packstyle-b',3,500,3,'x');
                nile1.pagging();
                nile1.heading('<?= $strUltraDeluxeNileCruise ?>', '<?= $strUltraDeluxeNileCruiseOverview ?>');
                nile1.filter(['hot deals', 'NEW price', 'sea sports']); 
            };
        };
        req.open("POST", apiUri, false);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send("func=1&section=nilecruise&category=LA&subcategory=UltraDeluxe");

    }, 200);

    //Best Luxury Nile Cruise
    setTimeout(() => {
        const req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) { 
                //console.log(this.responseText) ;
                var nile1 = new Packages(this.responseText, 'mod4','pageClass2','packstyle-b',3,500,3,'x');
                nile1.pagging();
                nile1.heading('<?= $strBestLuxuryNileCruise ?>', '<?= $strBestLuxuryNileCruiseOverview ?>');
                nile1.filter(['hot deals', 'NEW price', 'sea sports']); 
            };
        };
        req.open("POST", apiUri, false);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send("func=1&section=nilecruise&category=LA&subcategory=Luxury");

    }, 200);


    // Dayhbia Nile Cruise
    setTimeout(() => {
        const req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) { 
                //console.log(this.responseText) ;
                var nile1 = new Packages(this.responseText, 'mod5','pageClass2','packstyle-b',3,500,3,'x');
                nile1.pagging();
                nile1.heading('<?= $strDahabiyaNileCruise ?>', '<?= $strDahabiyaNileCruiseOverView ?>');
                nile1.filter(['hot deals', 'NEW price', 'sea sports']); 
            };
        };
        req.open("POST", apiUri, false);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send("func=1&section=nilecruise&category=DA&subcategory=Standard");

    }, 200);


    // nasser Nile Cruise
    setTimeout(() => {
        const req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) { 
                //console.log(this.responseText) ;
                var nile1 = new Packages(this.responseText, 'mod6','pageClass2','packstyle-b',3,500,3,'x');
                nile1.pagging();
                nile1.heading('<?= $strLakeNasserNileCruise ?>', '<?= $strLakeNasserNileCruiseOverView ?>');
                nile1.filter(['hot deals', 'NEW price', 'sea sports']); 
            };
        };
        req.open("POST", apiUri, false);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send("func=1&section=nilecruise&category=LN&subcategory=Standard");

    }, 200);

</script>