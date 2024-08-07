<section>
    <div class="sec-wrapper">
        <img class="header-logo" src="/img/logo/Logo_332x331.png" alt="" width="180">

        <div class="header-cnt">
            <nav class="short-nav">
                <ul>
                    <li id="nv-lst-item-tel" class="list-tel">Call Now +201221418956</li>
                    <li class="list-space"></li>
                    <li id="nv-lst-item-curr" class="list-currency">Currency</li>
                    <li class="list-space"></li>
                    <li id="nv-lst-item-lang" class="list-lang"></li>
                    <li id="nv-lst-item-srch" class="list-search"></li>
                    <li id="nv-lst-item-notf" class="list-notifi"></li>
                    

                    <?php
                        if (isset($user)){
                            echo '<li id="nv-lst-item-accn" class="list-accn">';
                            echo $user->fullname ;
                            echo    '<ul class="sub-nav">';
                            echo        '<li><a href="/account/dashboard/">Dashboard</a></li>' ;
                            echo        '<li><a href="/account/History/">History</a></li>' ;
                            echo        '<li><a href="/account/payment/">Payment Methods</a></li>' ;
                            echo        '<li><a href="/account/invoices/">Invoices</a></li>' ;
                            echo        '<li><a href="/account/settings/">Settings</a></li>' ;
                            echo        '<li><a href="/account/support/">Support</a></li>' ;
                            echo        '<li><a href="/account/signout/">Sign out</a></li>';
                            echo    '</ul>' ;
                            echo '</li>';
                        }else{
                            echo '<li id="nv-lst-item-sign" class="list-sign">Sign in</li>';
                            
                        }
                    ?>
                    
                    <li class="list-space"></li>
                </ul>
            </nav>
            <nav class="main-nav">
                <ul>
                    <li id="nv-lst-item-home">Home</li>
                    <li id="nv-lst-item-abot">About</li>
                    <li id="nv-lst-item-tour">Tours</li>
                    <li id="nv-lst-item-excu">Excursions</li>
                    <li id="nv-lst-item-nile">Nile Cruises</li>
                    <!-- <li id="nv-lst-item-acco">Accommedetations</li> -->
                    <li id="nv-lst-item-trns">transfer</li>
                    <li id="nv-lst-item-cont">Contact us</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<article>
    <div class="header-bottom-bar"></div>
</article>