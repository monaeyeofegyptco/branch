<?php
session_start();
require_once('../eoe/user.php') ;
require_once('../eoe/package.php') ;
use EOE\Package ;
use EOE\User ;

// Database Connection
const SERVER = 'localhost';
const DB     = 'eoe_db';
const UID    = 'hany';
const PWD    = 'tigerisback';
const conn = new mysqli(SERVER, UID, PWD, DB);



$func = $_POST['func'] ;


switch ($func){
    case 1 :
        LoadPackages() ;
        break ;
    case 2 :
        //LoadCards() ;
        break ;
    case 3 :
            //sign in() ;
            SignIn() ;
            break ;
    default :
        echo "nofunc" ; 
}



function LoadPackages(){ 
    
    $array = [] ;
     
    $sql = "SELECT * FROM packages WHERE Section = '".$_POST['section'] ."' " ;

    if (isset($_POST['category'])) {
        if(!empty($_POST['category'])){
            $sql = $sql . " AND Category = '". $_POST['category'] ."' " ;
        }
        
    }

    if (isset($_POST['subcategory'])){
        if(!empty($_POST['subcategory'])){
            $sql = $sql . " AND SubCategory = '". $_POST['subcategory'] ."' " ;
        }
        
    }

    $sql = $sql . " ;" ;


    $res = conn->query($sql )  ; 

    if ($res->num_rows > 0) {
        while($row = $res->fetch_assoc()){
          
           $item = new Package() ;
           
           $item->packID       = (int)$row['id']; ;
           //$item->packTypeID   = (int)$row['type_id'];
           //$item->packTypeName = $row['type_name'] ;

           $item->section     = $row['Section'] ;
           $item->category     = $row['Category'] ;
           $item->subCategory     = $row['SubCategory'] ;
   
           $item->name         = $row['Name']; 
           $item->overview     = $row['Overview']; 
           $item->description  = $row['Description']; 
           //$item->location     = $row['location']; 
           
           //$item->images       = json_decode($row['images']) ;  
           
           $item->imageFolder  = $row['ImageFolder'] ; 

           $folder = '..'. $row['ImageFolder'] .  $row['Section'] .'/'. $row['Category'] .'/'. $row['SubCategory']  .'/'. $row['id'] .'/' ; 

           
           $item->images       = glob($folder.'*.jpg');

           
           $item->overview     = get_words($row['Description'],24) . '... Read more';

           //$item->imageFolder = $dir ;
           //$item->videos       = json_decode($row['videos']) ;    
           //$item->videosFolder = $row['video_folder'] ;
           
           //$item->price         = $row['price'] ;
   
           //$item->filter       = json_decode($row['filter'] ) ;     
           //$item->category     = json_decode($row['category'] ) ; 

           array_push($array,$item) ; 
           
        }
    }    
      
    echo json_encode($array) ;
}



function get_words($sentence, $count = 10) {
    preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
    return $matches[0];
  }


/* 
function LoadCards(){ 
    $array = [] ;    
    $res = My::$mysqli->query("SELECT id FROM cards")  ; 
    
    
    if ($res->num_rows > 0) {
        while($row = $res->fetch_assoc()){
            $item = new Card($row['id']) ;
            array_push($array,$item) ;
        }
    }    
    
    echo json_encode($array) ;
} */



function  SignIn(){

    if ( isset($_POST['uid']) && isset($_POST['pwd']) && isset($_POST['rem']) ) {
        
        if(!empty($_POST['uid']) && !empty($_POST['pwd'])) {

            $uid = $_POST['uid'] ;
            $pwd = $_POST['pwd'] ;
            $sql = "SELECT * FROM users WHERE uid = '".$uid."' AND pwd = '".$pwd."'   ;" ;
            $res = conn->query($sql )  ; 
            if($res->num_rows > 0){
                $row = $res->fetch_assoc();
                

                $user = new User();
                $user->firstname = $row['firstname'];
                $user->lastname = $row['lastname'];
                $user->fullname  = $row['firstname'] . " " . $row['lastname'] ; 
                $user->country   = $row['country'] ;

                $_SESSION['user'] = serialize($user) ;

                echo "ok" ;
            } else {
                echo "no" ;
            }
            //echo $uid .'/'.  $pwd ;
            // var_dump($res)  ;
        }
        
        
        $rem = $_POST['rem'] ;

        if($rem == 'true'){

        }

        
        return ;
    }
}

conn->close();




