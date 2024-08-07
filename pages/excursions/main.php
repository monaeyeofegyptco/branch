<article>
    <section class="excur-heading">
        <h1>Day Trip Excursions in Egypt</h1>
        <ul class="excursions-gov-nav">
            
            <li onclick="change_country('car')">Cairo</li>
            <li onclick="change_country('alx')">Alexandria</li>
            <li onclick="change_country('lux')">Luxor</li>
            <li onclick="change_country('asw')">Aswan</li>
            <li onclick="change_country('shr')">Sharm</li>
            <li onclick="change_country('hur')">Hurghada</li>
            <li onclick="change_country('mrs')">Marsa Alam</li>
        </ul>
    </section>
</article>
<br>
<article id="art-cnt" class="excur-heading-art">
    <div class="excur-box-title">
        <h1 id="gov-name" >Cairo</h1>
        <span>Enjoy our day trips for Cairo and visit more places </span>
    </div>
</article>


<article>
    <section class="excur-pack-cnt"><div class="mod1"></div></section>
</article>

<br><br><br><br><br><br><br>






<script type="text/javascript">

    loadData('excursions','Cairo','');

    function loadData(section,category,subcategory){
        setTimeout(() => {
        const req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) { 
                //console.log(this.responseText) ;
                var tour_home = new Packages(this.responseText, 'mod1','pageClass3','packstyle-c',4,780,6,'x');
                tour_home.pagging();
                tour_home.heading("Most Attractive Packages in "+category, "");
                tour_home.filter(['hot deals', 'NEW price', 'sea sports']); 
            };
        };
        req.open("POST", apiUri, false);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send("func=1&section="+section+"&category="+category+"&subcategory="+subcategory);
        

    }, 100);
    

    }
    

    


    function change_country(country){
        
        let cnt = document.getElementById('art-cnt') ;
        let title = document.getElementById('gov-name') ; 

        //cnt.style.backgroundImage = "url('/img/bg/excur/cairo.jpg')" ;

        
        switch(country){
            case 'alx':
                cnt.style.backgroundImage = "url('./img/bg/excur/alex.jpg')" ;
                title.innerHTML = 'Alexandria' ;
                loadData('excursions','Alexandria','');
                break;
            case 'car':
                cnt.style.backgroundImage = "url('./img/bg/excur/cairo.jpg')" ;
                title.innerHTML = 'Cairo' ;
                loadData('excursions','Cairo','');
                break;
            case 'lux':
                cnt.style.backgroundImage = "url('./img/bg/excur/luxor.jpg')" ;
                title.innerHTML = 'Luxor' ;
                loadData('excursions','Luxor','');
                break;
            case 'asw':
                cnt.style.backgroundImage = "url('./img/bg/excur/aswan.jpg')" ;
                title.innerHTML = 'Aswan' ;
                loadData('excursions','Aswan','');
                break;
            case 'shr':
                cnt.style.backgroundImage = "url('./img/bg/excur/sharm.jpg')" ;
                title.innerHTML = 'Sharm El Sheikh' ;
                loadData('excursions','Sharm','');
                break; 
            case 'hur':
                cnt.style.backgroundImage = "url('./img/bg/excur/Hurghada.jpg')" ;
                title.innerHTML = 'Hurghada' ;
                loadData('excursions','Hurghada','');
                break;             

            case 'mrs':
                cnt.style.backgroundImage = "url('./img/bg/excur/Marsa.jpg')" ;
                title.innerHTML = 'Marsa Alam' ;
                loadData('excursions','Marsa','');
                break; 

            default:
                cnt.style.backgroundImage = "url('./img/bg/excur/cairo.jpg')" ;
                loadData('excursions','Cairo','');

        }

    }
</script>