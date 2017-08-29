<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

$to = "reuben_lim94@outlook.com";
$subject = "New Website Message";

if ($_POST['submit']) {
	 if (mail($to, $subject, $Message)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>