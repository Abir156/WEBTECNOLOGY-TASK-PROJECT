<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    

      
    
    
    ?>

    <?php
    $fname =  $fname1 = $gender = $dob = $religion = $address1 = $address2 = $phone = $email = $userName = $Password = "";
    $fnameEr = $fname1Er = $genderEr = $dobEr = $religionEr =  $emailEr = $PasswordEr =  $userNameEr = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

     
        
        $regions = $_POST["religion"];
        $address1 = $_POST["address1"];
        $address2 = $_POST["address2"];
   
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $userName = $_POST["userName"];
        $Password = $_POST["Password"];

        if (!empty($_POST["fname"])) {

            $fname = $_POST["fname"];
          } else {
           
            $fnameEr = "First Name is required";
         }
        if (!empty($_POST["fname1"])) {
            $fname1 = $_POST["fname1"];
            
          } else {
            $fname1Er = "Last Name is required";
         }
        if (!empty($_POST["gender"])) {

            $gender = $_POST["gender"];
          } else {
            
            $genderEr = "Gender is required";
          
         }
         if (!empty($_POST["dob"])) {
            $dob = $_POST["dob"];
            
          } else {
            $dobEr = "Date of Birth is required";
           
         }
        if (!empty($_POST["religion"])) {
            $religion = $_POST["religion"];
            
          } else {
            $religionEr = "Religion is required";
           
         }

        if (!empty($_POST["email"])) {
            $email = $_POST["email"];
          
          } else {
            $emailEr = "Email is required";
           
         }
        if (!empty($_POST["userName"])) {
            $userName = $_POST["userName"];
          
          } else {
            $userNameEr = "User Name is required";
           
         }
        if (!empty($_POST["Password"])) {
            $Password = $_POST["Password"];
          
          } else {
            $PasswordEr = "Password is required";
           
         }
        }
      
      function input ($v){
        $v = htmlspecialchars($v);
        $v = trim($v);
        $v = stripslashes($v);
        return $v;
         
    }
    


?>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
        <fieldset>
        <legend>Basic information</legend>
        <label for="fname">first name :</label>
        <input type="text" id="fname" name="fname" value="<?php echo $fname;  ?>"> 
        <span style="color: red;"> * <?php echo $fnameEr;  ?></span>
        <br>
        <label for="fname1">Last name :</label>
        <input type="text" id="fname1" name="fname1">
        <span style="color: red;"> * <?php echo $fname1Er;  ?></span>
        <br>
        <label for="gender" >Gender</label>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span style="color: red;"> * <?php echo $genderEr;  ?></span>
        <br><br>
        <label for="dob">DOB</label>
        <input type="text" id="dob" name="dob">
        <span style="color: red;"> * <?php echo $dobEr;  ?></span>
        <br>
        <label for="religion">Religion</label>
        <select name="religion" id="Rname">
            <option value="">Select one</option>
        <option value="Muslim" >Muslim</option>
        <option value="Hindu">Hindu</option>
    
        </select>
        <span style="color: red;"> * <?php echo $religionEr;  ?></span>


        </fieldset>
        <fieldset>
        <legend>Contact information</legend>

        <label for="address1">Present Address :</label>
        <textarea name="address1" id="address1" cols="30" rows="3"></textarea> <br>
        <label for="address2">Permanent Address :</label>
        <textarea name="address2" id="address2" cols="30" rows="3"></textarea> <br>
        <label for="phone">phone :</label>
        <textarea name="phone" id="phone" cols="30" rows="3"></textarea> <br>
      

        <label for="email">Email :</label>
        <input type="text" id="email" name="email">
        <span style="color: red;"> * <?php echo $emailEr;  ?></span>
        <br>
        <label for="Pweb">Perasonal Website Link :</label>
        <a href="">https://github.com/Abir156/Frist-task</a><br>
        
        </fieldset>
        <fieldset>
        <legend>Account  information</legend>

        <label for="userName">UserName :</label>
        <input type="text" id="userName" name="userName">
        <span style="color: red;"> * <?php echo $userNameEr;  ?></span>
        <br>
        <label for="Password">Password :</label>
        <input type="password" id="Password" name="Password"> 
        <span style="color: red;"> * <?php echo $PasswordEr;  ?></span>
        <br>
        </fieldset>
        <input type="submit">
    </form>
    <?php 
    
echo  input($fname) ."<br>";
echo input($fname1). "<br>";
echo input($gender) ."<br>";
echo input($dob) ."<br>";
echo input($religion) ."<br>";
echo input($address1) ."<br>";
echo input($address2) ."<br>";
echo input($phone) ."<br>";
echo input($email) ."<br>";
echo input($userName) ."<br>";
echo input($Password) ."<br>";
    ?>
</body>
</html>