<?php

if(isset($_POST['submit'])){
   $Name = $_POST['Name'];
   $Email = $_POST['Email'];
   $Telephone = $_POST['Telephone'];
   $Subject = $_POST['Subject'];
   $Message = $_POST['Message'];

   $mailTo = "metaknight28@gmail.com"; 
   $headers = "From: ".$Email;
    $txt = "You have received an e-mail from ".$name.".\n\n".$Message.".\n".$Telephone;


   mail($mailTo, $Subject, $txt, $headers);
   header("Location: index.php?mailsend");
}