<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/logo1.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/fform.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="preloader"></div>
    <div class="form">
        <h2>Signup Form</h2>
        <p>It's free and always will be.</p>
        <form action="" enctype="multipart/form-data">
            <div class="error-text">Error</div>
            <div class="grid-details">
                <div class="input">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="First Name" required pattern="[a-zA-Z'-'\s]*">
                </div>
                <div class="input">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name" required pattern="[a-zA-Z'-'\s]*">
                </div>
            </div>
            <div class="input">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter You Email" required>
            </div>
            <div class="input">
                <label>Phone</label>
                <input type="phone" name="phone" placeholder="Phone Number" required pattern="[0-9]{10}" oninvalid="this.setCustomValidity('Enter 10 Digits Number')" oninput="this.setCustomValidity('')">
            </div>
            <div class="grid-details">
                <div class="input">
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="Password" required>
                </div>
                <div class="input">
                    <label>Confirm Password</label>
                    <input type="password" name="cpass" placeholder="Confirm Password" required>
                </div>
            </div>
            <div class="profile-img">
                <div class="file-upload">
                    <input type="file" id="image-preview" name="image" class="file-input" required oninvalid="this.setCustomValidity('Select an Profile Image')" oninput="this.setCustomValidity('')">
                    <i class="fas fa-user-edit"></i>
                </div>
            </div>
            <div class="submit">
                <input type="submit" value="Signup Now" class="button">
            </div>
        </form>
        <div class="link">Already signed up? <a href="index.html">Login Now</a> </div>
    </div>
    <script src="register.js"></script>
    <script>
    
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function(){
        loader.style.display = "none";
    })
    </script>
</body>
</html>