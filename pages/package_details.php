<?php

use EOE\Package;

$package = str_replace("-", " ", $URL[1]);
$images = [] ;

$sql = "SELECT * FROM packages WHERE Name = '". $package ."'  ;" ;
$res = $conn->query($sql) ;
if ($res->num_rows > 0 ){
   $row = $res->fetch_assoc() ;
   $packid  = $row['id'] ;
   $package = $row['Name'] ;
   $folder = 'img/pack/' .  $row['Section'] .'/'. $row['Category'] .'/'. $row['SubCategory']  .'/'. $row['id'] .'/' ; 
   $images = glob($folder.'*.jpg') ;
   //var_dump($folder) ;
   //var_dump($images) ;
}

?>


<article>
    <section class="det-cnt">
        <div class="det-colmn">
            <div class="det-heading-title">
                <div>
                    <h2><?= ucfirst($package) ; ?></h2>
                    <span>3 days Tour</span><br>
                    <span>Location</span>
                </div>
                <h2 class="det-price">Price 120$</h2>
            </div>

            <div class="img-gall-cnt">
                <div class="pv-cnt">
                    <ul>
                        <li>Pictures</li>
                        <li>Video</li>
                    </ul>
                </div>
                <div class="img-cnt">
                    <?php
                    foreach ($images as $image) {
                        echo '<img class="det-img" src="/'. $image .'">' ;
                      }
                    ?>
                </div>

                <div class="vid-cnt" >
                    Videos 
                </div>
                
            </div>

            <div class="det-book">
                <div class="details-det">
                    <img class="icon" src="/icon/pack/location-arrow.svg" width="" alt="" />
                    <p>Location Cairo</p>
                    <img class="icon" src="/icon/pack/person-icon.svg" width="" alt="" />
                    <p>8 Max trip Persons count</p>
                    <img class="icon" src="/icon/pack/money-icon.svg" width="" alt="" />
                    <p>Entrance fees</p>
                    <img class="icon" src="/icon/pack/watch-icon.svg" width="" alt="" />
                    <p>8 trip hours</p>
                    <img class="icon" src="/icon/pack/car-icon.svg" width="" alt="" />
                    <p>Include Transportation </p>
                    <img class="icon" src="/icon/pack/lunch-icon.svg" width="" alt="" />
                    <p>Include Lunch at resturant</p>
                </div>
                <div class="box-booking">
                    <form>
                        <label for="dep-date">Departure date</label>
                        <input type="text" name="" id="dep-date">
                        <label for="dep-date">Adults</label>
                        <input type="text" name="" id="dep-date">
                        <label for="dep-date">Children</label>
                        <input type="text" name="" id="dep-date">
                        <label for="dep-date">Infants</label>
                        <input type="text" name="" id="dep-date">
                    </form>
                    <div><input type="button" value="Book Now"></div>
                </div>
            </div>


            <div>
                <h2>Description</h2>
                <p><?= $lorem ?></p>
            </div>

            <div>
                <h2>The Main Program</h2>
                <ul>
                    <li>Visit the Nation al Museum of Egyptian Civilization</li>
                    <li>Visit Old Cairo Churches</li>
                    <li>Visit the Citadel of Salah El-Din</li>
                    <li>Private guide </li>
                    <li>Lunch</li>
                </ul>
            </div>

            <div>
                <h2>Itinerary</h2>
                <ul>
                <li>Visit the Nation al Museum of Egyptian Civilization</li>
                    <li>Visit Old Cairo Churches</li>
                    <li>Visit the Citadel of Salah El-Din</li>
                    <li>Private guide </li>
                    <li>Lunch</li>
                </ul>
            </div>

            <div>
                <h2>What's Included</h2>
                <ul>
                    <li>Visit the Nation al Museum of Egyptian Civilization</li>
                    <li>Visit Old Cairo Churches</li>
                    <li>Visit the Citadel of Salah El-Din</li>
                    <li>Private guide </li>
                    <li>Lunch</li>
                </ul>
            </div>

            <div>
                <h2>What's Excluded</h2>
                <ul>
                    <li>Tipping for guide & driver</li>
                    <li>Any Extra not mentioned</li>
                </ul>
            </div>


            <div>
                <h2>Prices</h2>
                <ul class="price-ul">
                    <li><span>Single Traveler</span> <span>$ 195 Single</span></li>
                    <li><span>From 2 Persons</span> <span>$ 135-Per Person</span></li>
                    <li><span>From 4 Persons</span> <span>$ 110-Per person</span></li>
                    <li><span>From 5 – 8 Persons</span> <span>$ 100 Per Person</span></li>
                    <li><span>From 10 – 20 Persons</span> <span>$ 95 Per Person </span></li>
                </ul>
            </div>


            <div>
                <div class="line-h"></div>
            </div>

            <br><br><br><br><br><br><br>


        </div>

        <div class="y-line"></div>
        <div class="det-aside">
            <h3>More Featured Excursions Packages</h3>

            <div class="aside1">

                <div class="asaide-pack">
                    <div>
                        <img class="pack-img-4" src="/img/pack/alex-roman.jpg">
                    </div>
                    <h3>Packname</h3>
                    <div class="option-box">
                        <img class="icon" src="/icon/pack/location-arrow.svg" width="" alt="" />
                        <p>Cairo</p>
                        <img class="icon" src="/icon/pack/person-icon.svg" width="" alt="" />
                        <p>8 persons</p>
                        <img class="icon" src="/icon/pack/money-icon.svg" width="" alt="" />
                        <p>fees</p>
                        <img class="icon" src="/icon/pack/watch-icon.svg" width="" alt="" />
                        <p>8 hours</p>
                        <img class="icon" src="/icon/pack/car-icon.svg" width="" alt="" />
                        <p>transport</p>
                        <img class="icon" src="/icon/pack/lunch-icon.svg" width="" alt="" />
                        <p>lunch</p>
                    </div>
                    <div class="pack-price-4">
                        <h3>Price 120$</h3>
                        <a href="/'+ pack.packTypeName.toLowerCase() +'/'+ pack.name.replace(/\s/g, '-').toLowerCase() +'/"><img src="/icon/book_now_btn.svg" /></a>
                    </div>
                </div>


                <div class="asaide-pack">
                    <div>
                        <img class="pack-img-4" src="/img/pack/alex-roman.jpg">
                    </div>
                    <h3>Packname</h3>
                    <div class="option-box">
                        <img class="icon" src="/icon/pack/location-arrow.svg" width="" alt="" />
                        <p>Cairo</p>
                        <img class="icon" src="/icon/pack/person-icon.svg" width="" alt="" />
                        <p>8 persons</p>
                        <img class="icon" src="/icon/pack/money-icon.svg" width="" alt="" />
                        <p>fees</p>
                        <img class="icon" src="/icon/pack/watch-icon.svg" width="" alt="" />
                        <p>8 hours</p>
                        <img class="icon" src="/icon/pack/car-icon.svg" width="" alt="" />
                        <p>transport</p>
                        <img class="icon" src="/icon/pack/lunch-icon.svg" width="" alt="" />
                        <p>lunch</p>
                    </div>
                    <div class="pack-price-4">
                        <h3>Price 120$</h3>
                        <a href="/'+ pack.packTypeName.toLowerCase() +'/'+ pack.name.replace(/\s/g, '-').toLowerCase() +'/"><img src="/icon/book_now_btn.svg" /></a>
                    </div>
                </div>


                <div class="asaide-pack">
                    <div>
                        <img class="pack-img-4" src="/img/pack/alex-roman.jpg">
                    </div>
                    <h3>Packname</h3>
                    <div class="option-box">
                        <img class="icon" src="/icon/pack/location-arrow.svg" width="" alt="" />
                        <p>Cairo</p>
                        <img class="icon" src="/icon/pack/person-icon.svg" width="" alt="" />
                        <p>8 persons</p>
                        <img class="icon" src="/icon/pack/money-icon.svg" width="" alt="" />
                        <p>fees</p>
                        <img class="icon" src="/icon/pack/watch-icon.svg" width="" alt="" />
                        <p>8 hours</p>
                        <img class="icon" src="/icon/pack/car-icon.svg" width="" alt="" />
                        <p>transport</p>
                        <img class="icon" src="/icon/pack/lunch-icon.svg" width="" alt="" />
                        <p>lunch</p>
                    </div>
                    <div class="pack-price-4">
                        <h3>Price 120$</h3>
                        <a href="/'+ pack.packTypeName.toLowerCase() +'/'+ pack.name.replace(/\s/g, '-').toLowerCase() +'/"><img src="/icon/book_now_btn.svg" /></a>
                    </div>
                </div>


                <div class="asaide-pack">
                    <div>
                        <img class="pack-img-4" src="/img/pack/alex-roman.jpg">
                    </div>
                    <h3>Packname</h3>
                    <div class="option-box">
                        <img class="icon" src="/icon/pack/location-arrow.svg" width="" alt="" />
                        <p>Cairo</p>
                        <img class="icon" src="/icon/pack/person-icon.svg" width="" alt="" />
                        <p>8 persons</p>
                        <img class="icon" src="/icon/pack/money-icon.svg" width="" alt="" />
                        <p>fees</p>
                        <img class="icon" src="/icon/pack/watch-icon.svg" width="" alt="" />
                        <p>8 hours</p>
                        <img class="icon" src="/icon/pack/car-icon.svg" width="" alt="" />
                        <p>transport</p>
                        <img class="icon" src="/icon/pack/lunch-icon.svg" width="" alt="" />
                        <p>lunch</p>
                    </div>
                    <div class="pack-price-4">
                        <h3>Price 120$</h3>
                        <a href="/'+ pack.packTypeName.toLowerCase() +'/'+ pack.name.replace(/\s/g, '-').toLowerCase() +'/"><img src="/icon/book_now_btn.svg" /></a>
                    </div>
                </div>


                <div class="asaide-pack">
                    <div>
                        <img class="pack-img-4" src="/img/pack/alex-roman.jpg">
                    </div>
                    <h3>Packname</h3>
                    <div class="option-box">
                        <img class="icon" src="/icon/pack/location-arrow.svg" width="" alt="" />
                        <p>Cairo</p>
                        <img class="icon" src="/icon/pack/person-icon.svg" width="" alt="" />
                        <p>8 persons</p>
                        <img class="icon" src="/icon/pack/money-icon.svg" width="" alt="" />
                        <p>fees</p>
                        <img class="icon" src="/icon/pack/watch-icon.svg" width="" alt="" />
                        <p>8 hours</p>
                        <img class="icon" src="/icon/pack/car-icon.svg" width="" alt="" />
                        <p>transport</p>
                        <img class="icon" src="/icon/pack/lunch-icon.svg" width="" alt="" />
                        <p>lunch</p>
                    </div>
                    <div class="pack-price-4">
                        <h3>Price 120$</h3>
                        <a href="/'+ pack.packTypeName.toLowerCase() +'/'+ pack.name.replace(/\s/g, '-').toLowerCase() +'/"><img src="/icon/book_now_btn.svg" /></a>
                    </div>
                </div>

            </div>
        </div>



    </section>





    </section>
</article>



<script type="text/javascript">






</script>