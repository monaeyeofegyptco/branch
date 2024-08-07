<?php

$subPage =  $URL[0] .'/dashboard.php';
$subtitle = "Dashboard" ;
if(!empty($URL[1])){
    //$subPage   =  'pages/package_details.php';
    $subPage =  $URL[0] .'/'. $URL[1] . '.php';
    $subtitle =  ucfirst($URL[1]) ;
    //$header =  'pages/header.php';
    //$strPageTitle = $strPageTitle . " | " . strtoupper($URL[0]);
}



?>


<article class="acc-heading">
    <section class="axcd">
        <div>
            <h3> Welcome <?= $user->fullname ?></h3>

        </div>
        <div class="acc-nav-box">
            <span><?= $subtitle ?></span>            
            <ul class="acc-nav">
                <li><a href="/account/dashboard/">Dashboard</a></li>
                <li><a href="/account/History/">History</a></li>
                <li><a href="/account/payment/">Payment Methods</a></li>
                <li><a href="/account/invoices/">Invoices</a></li>
                <li><a href="/account/settings/">Settings</a></li>
                <li><a href="/account/support/">Support</a></li>
            </ul>
        </div>
    </section>
</article>
<article>
    <section><?php require_once($subPage);?></section>
</article>