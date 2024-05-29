<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name=$_POST['uname'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $msg=$_POST['msg'];
 $to="gaurizarekar14@gmail.com";
 $headers="From:$email";
 if(isset($name)&&isset($email)&&isset($subject)&&isset($msg)){
//     echo "$name form submitted successfully";
   if(mail($to,$subject,$email,$headers)){
        echo "<span style='color:green'>$name form submitted succesfully</span>";
   }
   else{
    echo "<span style='color:red'>mail not sent try again</span>";
   }
 }
 else{
    echo "please fill all feilds";
 }
}
?>