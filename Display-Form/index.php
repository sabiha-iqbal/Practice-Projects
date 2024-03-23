<?php require "database.php";  

?>
<!DOCTYPE html> <html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info-Display Form</title>
    <link href="style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card bg-dark text white">
                        <h5 class="card-title pt-2">User Data</h5>
                        <p>Please Provide Us Your Valid Information:</p>
                    <div class="card-body pt-0">
                        <form action="index.php" method="post">
                           <input type="text" name="FName"  placeholder="First Name" class="text-name" required>
        <input type="text" name="LName"  placeholder="Last Name" class="text-name" required>
        <input type="email" name="Email"  placeholder="Valid Email" class="text-name" required>
        <input type="password" name="Password"  placeholder="Password" class="text-name" required>
        <input type="number" name="Phone"  placeholder="Phone" class="text-name" required>
        <input type="text" name="Country"  placeholder="Country" class="text-name" required>
        <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>   
        </div>
    </div>    
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
$fname = $_POST['FName'];
$lname = $_POST['LName'];
$email = $_POST['Email'];
$pass = $_POST['Password'];
$phone = $_POST['Phone'];
$country = $_POST['Country'];
echo  "<div class='col-sm-5'>"."<div class='container'>" ."<h5 style=color:rgb(211, 3, 142);>Your Full Name is:  " . $fname . $lname . "</h5>";
echo "<h5 style=color:rgb(211, 3, 142);>Your Email is: " . $email . "</h5>";
echo "<h5 style=color:rgb(211, 3, 142);>Your Password is: " . $pass . "</h5>";
echo "<h5 style=color:rgb(211, 3, 142);>Your Phone is: " . $phone . "</h5>";
echo "<h5 style=color:rgb(211, 3, 142);>Your Country is: " . $country . "</h5>"."</div>" . "</div>";
}

?> 
