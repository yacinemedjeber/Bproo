<?php

session_start();
    include 'php/db.php';
    $unique_id = $_SESSION['unique_id'];
    $email = $_SESSION['email'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $phone = $_SESSION['phone'];
    $image = $_SESSION['image'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/logo1.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="form">
        <h2>Info</h2>
        <p></p>
        <form action="" enctype="multipart/form-data">
            <div class="error-text">Error</div>
            <div class="grid-details">
                <div class="input">
                    <label>First Name</label><br>
                    <div class="info"><span><?php echo $fname;?></span></div>
                </div>
                <div class="input">
                    <label>Last Name</label><br>
                    <div class="info"><span><?php echo $lname;?></span></div>
                </div>
            </div>
            <div class="input">
                <label>Email</label><br>
                <div class="info"><span><?php  echo $email;   ?></span></div>
            </div>
            <div class="input">
                <label>Phone :</label><br>
                <div class="info"><span><?php  echo $phone;   ?></span></div>
            </div>
            <div class="profile-img">
            <img src="imagess/<?php echo $image  ?>" class="image_profile">
            </div>
        </form>
        <div class="buttonn">
        <a href="Home.php"><button>go back</button></a>
        </div>
    </div>
    <script src="register.js"></script>
</body>
</html>