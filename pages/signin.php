<article>
    <section>
        <form name="" class="frm-signin">
            <div>
                <h3>Please Sign in</h3>
                <p>Sign in using your email and password used in your registration.</p>
            </div>
            <div>
                <label for="uid">Email Address</label>
                <input type="text" id="uid"  name="" value="">
                <label for="pwd">Password</label>
                <input  type="password" id="pwd" name="" value="">
            </div>
            <div>
                <input type="checkbox" id="rem" >
                <label for="rem">Remember me next time</label>
                <img src="/icon/eye.svg" alt="">
            </div>

            <div>
                <input id="signinbtn" type="button" value="sign in">
            </div>
        </form>
    </section>

</article>



<script>
    var btnsubmit = document.getElementById('signinbtn') ;
    
    
    btnsubmit.addEventListener('click',function(){

        var uid = document.getElementById('uid').value ;
        var pwd = document.getElementById('pwd').value ;
        var rem = document.getElementById('rem').checked ;

        var data = "func=3&uid="+uid+"&pwd="+pwd+"&rem="+rem ;
       /*  console.log(data) ; */
        const req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) { 
                //console.log(this.responseText) ;
                if(this.responseText == 'ok'){
                    location.href = '/account' ;
                }
            };
        };
        req.open("POST", apiUri, false);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.send(data);

    })

</script>