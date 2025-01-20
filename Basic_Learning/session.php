<?php

//session- super global variable used to store information on a user to be used across multiple pages. A user is assigned a session-id ex. login credentials
//session_start() - starts a new session or resumes an existing session
session_start();
//$_SESSION - a superglobal array that stores information to be used across multiple pages
$_SESSION['username'] = 'admin';
$_SESSION['email'] = 'prithvi@gmail.com';
echo 'Session is active';

?>