<?php
session_start();
include_once 'db.php';
$email = $_POST['email'];

if (!empty($email)){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            $random_id = rand(time(), 10000000); 
            $otp = mt_rand(1111, 9999);
            // Insert data into table
            $sql2 = mysqli_query($conn, "UPDATE users SET otp = '$otp', unique_id = '$random_id',verification_status = '0' WHERE email = '$email'");
            $db_info = "SELECT fname,lname, email, phone, image FROM users WHERE email = '{$email}'";
            $db_result = mysqli_query($conn, $db_info);
            $rt = mysqli_fetch_array($db_result);
            if ($sql2) {
                $sql3 = mysqli_query($conn, "SELECT  * FROM users WHERE email = '{$email}'");
                if (mysqli_num_rows($sql3) > 0) {
                    $row = mysqli_fetch_assoc($sql3);       // fetching data
                    $_SESSION['fname'] = $rt['fname'];
                    $_SESSION['lname'] = $rt['lname'];
                    $_SESSION['phone'] = $rt['phone'];
                    $_SESSION['image'] = $rt['image'];
                    $_SESSION['unique_id'] = $row['unique_id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['otp'] = $row['otp'];


                    // lets start mail function
            
                    if ($otp) {
                        $mail->setFrom('From: Yacine Medjeber');
                        $mail->addAddress($email);
                        $mail->Subject = "Your verify code";
                        $mail->Body    = "Name: " . " $fname $lname <br> Email: " . " $email <br> OTP Code: " . " $otp";
                        $mail->send();
                        if ($mail) {
                            echo "success";
                        } else {
                            echo "Email Problem!" . mysqli_error($conn);
                        }
                    }

                    // mail function end

                }
            }
            else {
                echo "Somthings went wrong!";
            }
        }else{
            echo "$email ~ not exist";
        }
    }else{
        echo "$email ~ This is not a Valid Email";
    }
}else{
    echo "All Inputs Fields are  Required!";
}