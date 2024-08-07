window.addEventListener('load', function() {
    
    //console.log('intro Listner') ;
    var cont = document.getElementById('gimg-cnt');
    
    if(cont){
        var imgs = cont.querySelectorAll('img');
        var curimg = 0;
        var speed = 5000;
        setTimeout(function () {
            imgs[curimg].classList.add('fadein');
            curimg++;
        }, 0);

        var home_bg_loop = setInterval(function () {
            if (curimg == imgs.length) {
                curimg = 0;
            }
            if (curimg > 0) {
                imgs[curimg - 1].classList.remove('fadein');
            } else {
                imgs[imgs.length - 1].classList.remove('fadein');
            }
            imgs[curimg].classList.add('fadein');
            curimg++;
    
        }, speed);

    }
  });

