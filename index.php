<?php
session_start();
require_once('eoe/user.php') ;
require_once('eoe/package.php') ;
use EOE\Package ;
use EOE\User ;





$lorem  = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga ullam voluptatibus odit, facere quod excepturi repudiandae perferendis eveniet! Autem, corporis et? Debitis ipsa distinctio delectus pariatur. Tempora eaque excepturi laborum." ;

// Database Connection
const SERVER = 'localhost';
const DB     = 'eoe_db';
const UID    = 'hany';
const PWD    = 'tigerisback';
$conn = new mysqli(SERVER, UID, PWD, DB);

// Load Page
$URL = explode('/', $_SERVER['QUERY_STRING']);
$strPageTitle = "Eye of Egypt";
$page = 'pages/home.php';
$header = 'pages/intro.php';
$footer = 'pages/footer.php';

if (!empty($URL[0])) {
    $page =  'pages/' . $URL[0] . '.php';
    $header = 'pages/header.php';
    $strPageTitle = $strPageTitle . " | " . strtoupper($URL[0]);
    if (!file_exists($page)) {
        $page = "pages/404.php";
    }
}

/*
if(!empty($URL[1])){
    $page   =  'pages/package_details.php';
    $header =  'pages/header.php';
    $strPageTitle = $strPageTitle . " | " . strtoupper($URL[0]);
}
*/

// ------------------ SESSION USER -------------------

if ( isset($_SESSION['user']) ){
    $user = unserialize($_SESSION['user']) ;  
}


// ------------------ Global Functions ---------------


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $strPageTitle  ?></title>
    <link rel="stylesheet" href="/css/font.css" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/intro.css" />
    <link rel="stylesheet" href="/css/header.css" />
    <link rel="stylesheet" href="/css/about.css" />
    <link rel="stylesheet" href="/css/package.css" />
    <link rel="stylesheet" href="/css/excursions.css" />
    <link rel="stylesheet" href="/css/tours.css" />
    <link rel="stylesheet" href="/css/package-details.css" />
    <link rel="stylesheet" href="/css/transfer.css" />
    <link rel="stylesheet" href="/css/signin.css" />
    <link rel="stylesheet" href="/css/account.css" />
    <link rel="stylesheet" href="/css/footer.css" />
    <script type="text/javascript" src="/js/intro.js"></script>
    <script type="text/javascript" src="/js/package.js"></script>
    <script type="text/javascript" src="/js/transfer.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</head>

<body>

    <header><?php require_once($header); ?></header>
    <main>
        <?php require_once($page); ?>
    </main>
    <footer><?php require_once($footer); ?></footer>


</body>

</html>

<?php
$conn->close();
?>