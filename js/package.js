class Package{
    constructor(options){
        Object.assign(this, options); 
    }      
}

class Packages {    
    
    constructor(response,containerClass,pageClass,packClass,packStyle,packContainerHeight,pageSize,scrollDir='x') {
        
        let objs = null ;
        this.container = document.querySelector('.'+ containerClass) ;        
         
        // Check if Response not jason
        try {
            objs = JSON.parse(response);
            console.log (response );
        } catch (error) {
            console.log('Response not JSON : ' + response) ;
            return ;
        }
        

        if(this.container && objs){

            this.packages             = new Array() ;
            this.packagesToDisplay    = new Array() ; 
            this.pages                = new Array() ; 

            this.containerClass     = containerClass ;
            this.packHeight         = packContainerHeight ;
            this.pageSize           = pageSize ;
            this.scrollDir          = scrollDir ;
            this.packClass          = packClass ;
            this.pageClass          = pageClass ;
            this.packStyle          = packStyle ;


            // Load main container main css class           
            this.container.classList.add('pack-module') ;


            //Create Containers 
            this.packHeading =  document.createElement('div');
            this.packHeading.setAttribute('class','pack-heading') ;
            
            this.packFilter = document.createElement('div') ; 
            this.packFilter.setAttribute('class' , 'pack-filter') ;

            this.packContainer =  document.createElement('div');
            this.packContainer.setAttribute('class' , 'pack-container') ;
            this.packContainer.setAttribute('style' , 'height:' + this.packHeight +'px') ;
            this.packContainer.classList.add('scroll-'+ scrollDir ) ;
            
            this.packPagging =  document.createElement('div');
            this.packPagging.setAttribute('class','pack-pagging') ;


            // Setting Package Array
            objs.forEach(element => {
                this.packages.push(new Package(element)) ;
            });

            this.packagesToDisplay = this.packages;
            
            
            // Append Children ;
            this.container.innerHTML = '';
            //this.container.appendChild(this.packHeading) ;
            this.container.appendChild(this.packContainer);
            this.container.appendChild(this.packPagging); 

            this.display();    

        }
    }


    display(){    
        if(this.container){   

            // Setting Pages 

            this.totalPages  = Math.ceil( this.packagesToDisplay.length / this.pageSize )  ;

            // Setting Pages Array 
            for(let i = 1 ; i <= this.totalPages ; i++) {
                let elem = document.createElement('div') ;
                elem.setAttribute('class','page '+ this.pageClass) ;
                elem.innerHTML = 'page' + (i) ;
                this.pages.push(elem) ;
                this.packContainer.appendChild(elem) ;
            }
            //console.log(this.pages.length) ;


            //console.log(this.pageSize) ;
            let currentPage = 0 ;
            this.pages.forEach(page=>{
                page.innerHTML = '' ;
                for(let i = 0 ; i < this.pageSize ; i++){
                    let index = i + (currentPage*this.pageSize) ;
                    if(index < this.packagesToDisplay.length ){
                        page.appendChild(this.card(this.packagesToDisplay[index],this.packStyle));
                    }                    
                }
                currentPage++ ;
            }) ;   
            //this.pages[0].scrollIntoView();   
        }
    }



    card (pack,style){

        let card = document.createElement('div') ;
        card.setAttribute('class', this.packClass ) ;            
        //card.setAttribute("style","min-width:"+ this.packWidth +";min-height:"+this.packHeight+";") ;
        
        
        let html = "" ;
        
        switch(style){
            case 1 :
                
                html = '<img class="package-img" src="' + pack.images[0]+'"width="100%" alt="">';
                html += '<div class="wrapper">';
                html += '    <h3>' + pack.name +'['+pack.packID+']'+ '</h3>';
                html += '    <p class="a">'+pack.overview+'</p>';
                html += '    <div class="det-box">';
                html += '    <img class="icon" src="/icon/pack/location-arrow.svg" width="" alt="" />';
                html += '    <p>Cairo</p>';
                html += '    <img class="icon" src="/icon/pack/person-icon.svg" width="" alt="" />';
                html += '    <p>8 persons</p>';
                html += '    <img class="icon" src="/icon/pack/money-icon.svg" width="" alt="" />';
                html += '    <p>fees</p>';
                html += '    <img class="icon" src="/icon/pack/watch-icon.svg" width="" alt="" />';
                html += '    <p>8 hours</p>';
                html += '    <img class="icon" src="/icon/pack/car-icon.svg" width="" alt="" />';
                html += '    <p>transport</p>';
                html += '    <img class="icon" src="/icon/pack/lunch-icon.svg" width="" alt="" />';
                html += '    <p>lunch</p>';
                html += '    </div>';
                html += '    <div class="pack-price">';
                html += '    <img src="icon/pack/dollar-sign-icon.svg" alt="" />';
                html += '    <span class="price-text">PRICE 120$</span>';
                //html += '    <a href="/index.php?packs='+ pack.typeId +'&packid='+ pack.packID +'"><img src="icon/book_now_btn.svg" /></a>';
                //html += '    <a href="/index.php?packid='+ pack.packID +'"><img src="icon/book_now_btn.svg" /></a>';
                html += '    <a href="/'+ pack.section.toLowerCase() +'/'+ pack.name.replace(/\s/g, '-').toLowerCase() +'/"><img src="/icon/book_now_btn.svg" /></a>';
                html += '    </div>';
                html += '</div>';
                break;
            case 2 :
                html =  '<div class="asdv">' ;                
                html +=     '<h3>' + pack.name +'['+pack.packID+']'+'</h3>';
                html +=     '<p>' + pack.overview + '</p>' ;
                html +=     '<div class="asdv1">';
                html +=         '<a href="/'+ pack.section.toLowerCase() +'/'+ pack.name.replace(/\s/g, '-').toLowerCase() +'/"><img src="/icon/book_now_btn.svg" /></a>';
                html +=         '<h3>Price '+ pack.price +'$</h3>';
                html +=     '</div>' ;
                html += '</div>' ;                
                html += '<div><img src="'+ pack.images[0] +'"></div>' ;   
                break;             
            case 3 :
                html =  '<div class="a"> ' ;                
                html +=     '<h3>' + pack.name +'['+pack.packID+']'+'</h3>' ; 
                html +=     '<img src="icon/5stars.svg">';
                html +=  '</div>' ;                                               
                html +=  '<div><img class="pack-img-3" src="'+ pack.images[0]  +'"></div>' ;
                html +=  '<p class="pack-overview-3">' + pack.overview + '</p>'  ;
                html +=     '<div class="pack-price-3">';
                html +=         '<h3>Price '+ pack.price +'$</h3>';
                html +=         '<a href="/'+ pack.section.toLowerCase() +'/'+ pack.name.replace(/\s/g, '-').toLowerCase() +'/"><img src="/icon/book_now_btn.svg" /></a>';                
                html +=     '</div>' ;
                break;
            case 4 :
                html =  '<div><img class="pack-img-4" src="'+ pack.images[0]  +'"></div>' ;               
                html += '<h3>' + pack.name +'['+pack.packID+']'+'</h3>' ;
                //html += '<p class="pack-overview-4">' + pack.overview + '</p>'  ;
                html += '<div class="option-box">' ;                
                html += '    <img class="icon" src="/icon/pack/location-arrow.svg" width="" alt="" />';
                html += '    <p>Cairo</p>';
                html += '    <img class="icon" src="/icon/pack/person-icon.svg" width="" alt="" />';
                html += '    <p>8 persons</p>';
                html += '    <img class="icon" src="/icon/pack/money-icon.svg" width="" alt="" />';
                html += '    <p>fees</p>';
                html += '    <img class="icon" src="/icon/pack/watch-icon.svg" width="" alt="" />';
                html += '    <p>8 hours</p>';
                html += '    <img class="icon" src="/icon/pack/car-icon.svg" width="" alt="" />';
                html += '    <p>transport</p>';
                html += '    <img class="icon" src="/icon/pack/lunch-icon.svg" width="" alt="" />';
                html += '    <p>lunch</p>';
                html += '</div>' ;
                html += '<div class="pack-price-4">';
                html +=     '<h3>Price '+ pack.price +'$</h3>';
                html +=     '<a href="/'+ pack.section.toLowerCase() +'/'+ pack.name.replace(/\s/g, '-').toLowerCase() +'/"><img src="/icon/book_now_btn.svg" /></a>';                
                html += '</div>' ;
                              
                
                break;                
            default:
                html = "no html" ;
        }
        card.innerHTML = html ;
        return card ;
    }


    filter(rule,Morelocation){
        if(!this.container){
            return ;
        }

        let el = document.createElement('a') ;
        el.innerHTML = 'ALL' ;
        el.addEventListener('click',ev=>{
            this.packagesToDisplay = this.packages ;
            this.display(ev);
            this.pagging() ;
        });

        this.packFilter.appendChild(el) ;

        if(rule){
            rule.forEach(item=>{
                let el = document.createElement('a') ;
                el.innerHTML = item ;
                // Imortant Refercee https://stackoverflow.com/questions/43727516/how-adding-event-handler-inside-a-class-with-a-class-method-as-the-callback
                //el.addEventListener('click',this.display.bind(this)); 
                el.addEventListener('click',ev=>{                   
                    this.packagesToDisplay = this.packages.filter(pack => pack.filter.includes( item.toLowerCase() ));
                    this.display(ev) ;
                    this.pagging()  ;
                    this.pages[0].scrollIntoView();  
                    this.packHeading.scrollIntoView();  
                });

                this.packFilter.appendChild(el) ;
            });
        }

        if(Morelocation){
            el = document.createElement('a') ;        
            el.innerHTML = 'More' ;
            el.addEventListener('click',function(){
                window.location = Morelocation ;
            });
            this.packFilter.appendChild(el) ;
        }  

        this.packHeading.appendChild(this.packFilter);
        
    }


    pagging(){

        if(this.container){

            this.packPagging.innerHTML = '' ;
            let currentPage =  1 ; 
            let bulletID = 'bu_' + this.containerClass +'_' ;
            
            for( let index = 1 ; index <= this.totalPages ; index++){
                let bullet = document.createElement('div') ;
                bullet.setAttribute('class','page-bullet') ; 
                bullet.setAttribute('id', bulletID + index ) ;
                bullet.addEventListener('click',ev=>{      
                    let element = this.pages[index-1]    ; 
                    currentPage =  index ;
                    element.scrollIntoView();  
                    
                    try{
                        this.packHeading.scrollIntoView();
                    }catch{}
                    
                    //console.log(currentPage)                   ;
                }) ;        
                this.packPagging.appendChild(bullet) ;
            };


            // first bullet enabled 
            document.getElementById(bulletID + "1").classList.add('bu-active') ;


            this.packContainer.addEventListener('scroll',ev=>{        
                               
                let classes = '.' + this.containerClass + ' .page-bullet' ; 
                let bulleta = document.querySelectorAll(classes) ;
                bulleta.forEach(item=>{               
                    item.classList.remove('bu-active') ;
                });


                let bulletb = document.getElementById(bulletID + currentPage);
                //console.log('current-page' + currentPage) ;
                bulletb.classList.add('bu-active') ;
                
            })

            this.packHeading.scrollIntoView();

            //this.packHeading.scrollIntoView({behavior: 'smooth'});
        }
    }


    heading(title,subtitle){
        if(this.container){
            let html = '<div><h2>'+title+'</h2><h5>'+ subtitle+'</h5></div>' ;
            this.packHeading.innerHTML = html;
            
            //this.container.appendChild(this.packHeading) ;
            this.container.insertBefore(this.packHeading, this.container.firstChild);
            return 1 ;
        }
    } 
    
    
}




