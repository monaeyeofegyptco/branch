class Package{
    constructor(options){
        Object.assign(this, options); 
    }      
}

class Packages {    
    
    constructor(response,containerClass,containerStyleCls,cardStyle,scrollDir='x',colmns = 4,rows = 1,padding=20) {
        
        let objs = null ;
        this.container = document.querySelector('.'+ containerClass) ;        
            
        try {
            objs = JSON.parse(response);
        } catch (error) {
            console.log('Response not JSON : ' + response) ;
            return ;
        }
        

        if(this.container && objs){

            this.packages             = new Array() ;
            this.packagesToDisplay    = new Array() ; 

            this.containerClass     = containerClass ;
            this.containerStyleCls  = containerStyleCls ;

            this.packClass  = 'package' ;
            this.cardStyle  = cardStyle ;
            this.scrollDir  = scrollDir ;
            this.colmns     =  colmns  ;
            this.rows       =  rows  ;
            this.padding    = padding ;
            
            

            // Load Containers  ||| -----------------------          
            this.container.classList.add('pack-module') ;

            this.packHeading =  document.createElement('div');
            this.packHeading.setAttribute('class','pack-heading') ;
            
            this.packFilter = document.createElement('div') ; 
            this.packFilter.setAttribute('class' , 'pack-filter') ;

            this.packContainer =  document.createElement('div');
            this.packContainer.setAttribute('class',this.containerStyleCls) ;            
            this.packContainer.classList.add('scroll-'+ scrollDir ) ;
            
            this.packPagging =  document.createElement('div');
            this.packPagging.setAttribute('class','pack-pagging') ;

            // Filter  Packages  To Display ||| -----------------------
            this.packagesToDisplay = this.packages;
            this.packsCount  = this.packagesToDisplay.length ;
            
            // Create Package element for each child ||| -----------------------
            objs.forEach(element => {
                this.packages.push(new Package(element)) ;
            });


            // Seting Conatiner and card size ;
            let box             = window.getComputedStyle(this.packContainer) ;                                    
            //this.totalPadding   = this.padding * (this.colmns-1);

            this.pages          = Math.ceil( (this.packagesToDisplay.length/this.colmns)  /this.rows )  ;
            console.log(this.pages) ;
            // Append Children ; 

            this.container.innerHTML = '';
            //this.container.appendChild(this.packHeading) ;
            this.container.appendChild(this.packContainer);
            this.container.appendChild(this.packPagging);  


           /*  if(this.scrollDir == 'x'){  
                this.packContainer.setAttribute('style','display:grid;grid-template-columns:repeat('+ this.packagesToDisplay.length /this.rows +', 1fr);gap:20px;') ;
                this.totalPadding   = this.padding * (this.colmns-1);
                this.packWidth      = (parseInt(box.width)-this.totalPadding) / this.colmns  + "px";  
                this.packHeight     = '100%' ;                  
                this.scrollposition    = parseInt(box.width)  + this.padding ;
            } else{   
                
                this.packContainer.setAttribute('style','height:'+ this.packHeight*this.rows +'px; display:grid;grid-template-columns:repeat('+ this.colmns +', 1fr);gap:20px;') ;
                this.totalPadding   = this.padding * (this.colmns  );
                this.packWidth      = '100%' ;   
                this.packHeight     = parseInt( (parseInt(box.height) - this.totalPadding ) / this.colmns ) + "px";                         
                this.scrollposition = parseInt(box.height)  ;                              
            } */


            if(this.scrollDir == 'x'){  
                this.packContainer.setAttribute('style','display:grid;grid-template-columns:repeat('+ this.packagesToDisplay.length /this.rows +', 1fr);gap:20px;') ;                
                this.totalPadding   = this.padding * (this.colmns-1);
                this.packWidth      = (parseInt(box.width)-this.totalPadding) / this.colmns  + "px"; 
                this.scrollposition    = parseInt(box.width)  + this.padding ;
            } else{         
                
                this.totalPadding   = this.padding * (this.colmns  );
                this.packWidth      = '100%' ;   
                //this.packHeight     = parseInt( (parseInt(box.height) - this.totalPadding ) / this.colmns );  
                this.packHeight     = 380 ;  
                this.packContainerHeight = this.packHeight* this.rows   ;   
                this.packHeight     = this.packHeight + "px";  

                //this.scrollposition = parseInt(box.height)  ; 
                this.scrollposition = parseInt(this.packContainerHeight)  ; 
                this.packContainer.setAttribute('style','height:'+ this.packContainerHeight+'px; display:grid;grid-template-columns:repeat('+ this.colmns +', 1fr);gap:20px;') ;
                                            
            }
            
            
            this.display(); 
            
            

            

                      
        }
    }


    display(){    
        if(this.container){
            this.packContainer.innerHTML = '' ;
            this.packagesToDisplay.forEach(pack=>{                     
                this.packContainer.appendChild(this.card(pack,this.cardStyle));
            })
            /* this.container.innerHTML = '';
            this.container.appendChild(this.packHeading) ;
            this.container.appendChild(this.packContainer);
            this.container.appendChild(this.packPagging);   */         
        }
    }



    card (pack,style){

        let card = document.createElement('div') ;
        card.setAttribute('class', this.packClass ) ;            
        card.setAttribute("style","min-width:"+ this.packWidth +";min-height:"+this.packHeight+";") ;
        
        
        let html = "" ;
        
        switch(style){
            case 1 :
                
                html = '<img class="package-img" src="/img/pack/alex-roman.jpg" width="100%" alt="">';
                html += '<div class="wrapper">';
                html += '    <h3>' + pack.name + '</h3>';
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
                html += '    <a href="/'+ pack.packTypeName.toLowerCase() +'/'+ pack.name.replace(/\s/g, '-').toLowerCase() +'/"><img src="/icon/book_now_btn.svg" /></a>';
                html += '    </div>';
                html += '</div>';
                break;
            case 2 :
                html =  '<div>' ;                
                html +=  pack.name ;                
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
            // TODO
            this.packagesToDisplay = this.packages ;
            this.display(ev);
            this.pagging() ;
        });

        this.packFilter.appendChild(el) ;

        if(rule){
            rule.forEach(item=>{
                let el = document.createElement('a') ;
                //el.setAttribute('href','') ;
                el.innerHTML = item ;
                // Imortant Refercee https://stackoverflow.com/questions/43727516/how-adding-event-handler-inside-a-class-with-a-class-method-as-the-callback
                //el.addEventListener('click',this.display.bind(this)); 
                el.addEventListener('click',ev=>{                   
                    this.packagesToDisplay = this.packages.filter(pack => pack.filter.includes( item.toLowerCase() )); ;
                    this.pages = Math.ceil(this.packagesToDisplay.length/this.colmns)  ;
                    this.display(ev) ;
                    this.pagging()  ;
                });

                this.packFilter.appendChild(el) ;
            });
        }

        el = document.createElement('a') ;        
        el.innerHTML = 'More' ;
        el.addEventListener('click',function(){
            window.location = Morelocation ;
        });


        this.packFilter.appendChild(el) ;
        this.packHeading.appendChild(this.packFilter);
        
    }


    pagging(){
        if(this.container){

            this.packPagging.innerHTML = '' ;            
            let currentPage =  1 ;            
            let bulletID = 'bu_' + this.containerClass +'_' ;
            
            console.log('pages '+this.pages);
            for( let index = 1 ; index <= this.pages ; index++){
                let bullet = document.createElement('div') ;
                bullet.setAttribute('class','page-bullet') ; 
                bullet.setAttribute('id', bulletID + index ) ;

                bullet.addEventListener('click',ev=>{      
                    if(this.scrollDir == 'x'){
                       
                        this.packContainer.scrollTo( ( this.scrollposition * (index-1) ) ,0) ;
                    }else{
                        this.packContainer.scrollTo(  0 , (this.scrollposition * (index-1)) ) ;
                    }
                    
                }) ;            
                this.packPagging.appendChild(bullet) ;
            };

            
            document.getElementById(bulletID + "1").classList.add('bu-active') ;

            this.packContainer.addEventListener('scroll',ev=>{        
                
                if(this.scrollDir == 'x'){
                    currentPage = Math.ceil(this.packContainer.scrollLeft / this.scrollposition) + 1 ;
                }else{
                    currentPage = Math.ceil(this.packContainer.scrollTop / this.scrollposition) + 1 ;
                    console.log('current page' + currentPage ); 
                }

                let classs = '.' + this.containerClass + ' .page-bullet' ; 

                let bulleta = document.querySelectorAll(classs) ;

                bulleta.forEach(item=>{               
                    item.classList.remove('bu-active') ;
                });

                let bulletb = document.getElementById(bulletID + currentPage);
                //console.log('current-page' + currentPage) ;
                bulletb.classList.add('bu-active') ;
                
            })
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


