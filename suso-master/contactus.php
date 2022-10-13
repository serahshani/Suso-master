<!--php script to send email-->
<?php 

//variable declaration
$name = $_POST['name'];  //name of sender 
$email = $_POST['email']; // email of sender
$phone = $_POST['phone'];  //phone no. of sender
$message = $_POST['message'];  //message by sender

//form content
$formcontent="From: $name \n Phone no.: $phone \n Message: $message";

$recipient = ""; // recipient email
$subject = "TRPWS - Contact Form ";     //Email Subject
$mailheader = "From: $email \r\n";    //mail header   

mail($recipient, $subject, $formcontent, $mailheader) ;

//showing alert and redirected to contact page
echo "<script>
setTimeout(SWAL, 1000);
function SWAL(){
    swal('Thanks!', 'Your Message Sent Successfully!', 'success');
}
setTimeout(OUT, 2000);
function OUT(){
    window.location.href = '/contactus.html';
}
</script>";
?>
<!--sweet alert cdn-->
<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
