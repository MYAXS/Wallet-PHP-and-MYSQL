<?php
require_once('assets/php/functions.php');
sleep(2);
if(isset($_SESSION['Auth']) && $_SESSION['Auth']==true){ 
//for home page
viewPage('header','Homepage');
viewPage('home');
}elseif(isset($_GET['login'])){
// for login page
    viewPage('header','DeTym - Login');
    viewPage('login_page');

}elseif(isset($_GET['signup'])){
// for signup page

    viewPage('header','DeTym - Signup');
    viewPage('signup_page');

}else{
// for deafult page

    viewPage('header','DeTym - Login');
    viewPage('login_page');

}

// for clearing previous submitted form value
if(isset($_SESSION['form_data'])){
    unset($_SESSION['form_data']);
}

//including footer
viewPage('footer');
