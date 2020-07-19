<?php
include_once 'config.php';
if(isset($_POST['save']))
{	 
	 $email = $_POST['email'];
	 $sql = "INSERT INTO emailcapture (email,regDate)
	 VALUES ('$email', now())";
	 if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
        
            //Start the session if already not started.
    session_start();
        $_SESSION['success_messagetwo'] = "Email saved successfully.";
    header("Location: index.php");
    exit();
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);

           session_start();
        $_SESSION['error_messagetwo'] = "There was an error saving the email.";

    header("Location: index.php");
    exit();
	 }
	 mysqli_close($conn);
}
?>







