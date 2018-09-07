<?php
session_start();
if(isset($_POST['pay_with_code'])){
   // demo giftcode and password
   $code = "todcocusemer";
   $password = "urpass";

   if(empty($_POST['giftCode']) || empty($_POST['password']) ){
       $_SESSION['errorMessage'] = "Both Field are required";
       redirectURL('html_form');
   }else{

       if($_POST['giftCode'] == $code && $_POST['password'] == $password){
           redirectURL('success');
       }else{
           $_SESSION['errorMessage'] = "Sorry Invalid Details";
           redirectURL('html_form');
       }
   }

}


function redirectURL($url){
   header("location: $url.php");
}
