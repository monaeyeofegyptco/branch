<?php
session_start();

require_once('../eoe/user.php') ;
use EOE\User ;

/* require_once('../eoe/package.php') ;
use EOE\Package ; */

// Database Connection
const SERVER = 'localhost';
const DB     = 'eoe_db';
const UID    = 'hany';
const PWD    = 'tigerisback';
const conn = new mysqli(SERVER, UID, PWD, DB);


//Close Connection
conn->close();
