const timeout = 100 ;
const apiUri = "/api/index.php";
var packageResponse;
var cardArray = new Array();
var navsArray = new Array();


window.addEventListener('load', function() {
    //console.log('first Listner') ;

    // Get Packages From Server 
    /*
    setTimeout(() => {
        const req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) { 
                console.log(this.responseText) ;
                var tour_home = new Packages(this.responseText, 'mod1',1,'x',4);
                tour_home.pagging();
                tour_home.heading("Explore the Most Fancy Tour Package", "More Please");
                tour_home.filter(['hot deals', 'NEW price', 'sea sports'], '/excursions'); 

                var tour_home2 = new Packages(this.responseText, 'mod2',1,'x',4);
                tour_home2.pagging();
                tour_home2.heading("Explore the Most Fancy Tour Package", "More Please");
                tour_home2.filter(['hot deals', 'NEW price', 'sea sports'], '/excursions');

                var tour_home3 = new Packages(this.responseText, 'mod3',1,'x',4);
                tour_home3.pagging();
                tour_home3.heading("Explore the Most Fancy Tour Package", "More Please");
                tour_home3.filter(['hot deals', 'NEW price', 'sea sports'], '/excursions');
            };
        };
        req.open("POST", apiUri, false);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send("func=1");

    }, timeout*1);
    */

    
    setupLink() ;

    

});




function setupLink(){
    // setting Hyperlisnks 
    const links = [
        {id:"nv-lst-item-home",url:"/"},
        {id:"nv-lst-item-abot",url:"/about"} ,
        {id:"nv-lst-item-tour",url:"/tours"} ,
        {id:"nv-lst-item-excu",url:"/excursions"} ,
        {id:"nv-lst-item-nile",url:"/nilecruises"} ,
        {id:"nv-lst-item-acco",url:"/accommedetations"} ,
        {id:"nv-lst-item-trns",url:"/transfer"} , 
        {id:"nv-lst-item-cont",url:"/contact"} ,
        {id:"nv-lst-item-sign",url:"/signin"} ,
        {id:"nv-lst-item-accn",url:"/account"} ,
        {id:"nv-lst-item-srch",url:"/search"} ,
        {id:"nv-lst-item-notf",url:"/account/?ac=notifi"} ,

        {id:"btn_intro_trs",url:"/tours"} ,
        {id:"btn_intro_exc",url:"/excursions"} ,
        {id:"btn_intro_crs",url:"/nilecruises"} ,
        {id:"btn_intro_acc",url:"/accommedetations"} ,
        {id:"btn_intro_trn",url:"/transfer"} , 
    ];

    links.forEach(function( item ){
        var d = document.getElementById(item.id) ; 
        if (d){
            d.addEventListener('click',function(){
                window.location = item.url ;
            }) ;  
        }
    }); 

}