<article>
    <section class="tours-c1"> 
        <div>
            <h1>Tours</h1>
            <p><?=$lorem .'<br>'. $lorem . $lorem ?></p>
        </div>
        <div>
        <img class="tours-img0" src="/img/pages/tours/001.jpg" alt="">
        </div>
    </section>
    <section><div class="line-h"></div></section>

    <section><div class="mod1"></div></section>
    <section><div class="line-h"></div></section>

    <section><div class="mod2"></div></section>
    <section><div class="line-h"></div></section>


    <section><div class="mod3"></div></section>
    <br><br><br><br>
</article>

<script type="text/javascript">

    setTimeout(() => {
        const req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) { 
                //console.log(this.responseText) ;
                var tour_home = new Packages(this.responseText, 'mod1','pageClass1','packstyle-a',2,500,4,'y');
                tour_home.pagging();
                tour_home.heading("Tow Days Tours", "Explore the Most Fancy Tour Package");
                tour_home.filter(['hot deals', 'NEW price', 'sea sports']); 
            };
        };
        req.open("POST", apiUri, false);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send("func=1&section=tours&category=2d&subcategory=General");

    }, 100);
    

    setTimeout(() => {
        const req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) { 
                //console.log(this.responseText) ;
                var tour_home = new Packages(this.responseText, 'mod2','pageClass1','packstyle-a',2,500,4,'y');
                tour_home.pagging();
                tour_home.heading("Three Days Tours", "Explore the Most Fancy Tour Package");
                tour_home.filter(['hot deals', 'NEW price', 'sea sports']); 
            };
        };
        req.open("POST", apiUri, false);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send("func=1&section=tours&category=3d&subcategory=General");

    }, 100);


    setTimeout(() => {
        const req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) { 
                //console.log(this.responseText) ;
                var tour_home = new Packages(this.responseText, 'mod3','pageClass1','packstyle-a',2,500,4,'y');
                tour_home.pagging();
                tour_home.heading("Four Days Tours", "Explore the Most Fancy Tour Package");
                tour_home.filter(['hot deals', 'NEW price', 'sea sports']); 
            };
        };
        req.open("POST", apiUri, false);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send("func=1&section=tours&category=4d&subcategory=General");

    }, 100);



</script>