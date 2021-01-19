<html>
<head>
<style>
.error {
    color: red;
}
</style>
</head>
<body>
    <?php
        $nameerr = $gendererr = $websiteerr = $emailerr = "";
        $name = $email = $website = $comments = $gender = "";

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
                if(empty($_POST['fname']))
                    $nameerr = "name is empty";
                else{
                    $name = test_input($_POST['fname']);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameerr = "Only letters and white space allowed";
                      }
                    } 
                if(empty($_POST['email']))
                    $emailerr = "email is empty";
                else   {
                    $email = test_input($_POST['email']);   
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailerr = "Invalid email format";
                      }
                    }
                if(empty($_POST['website']))
                    $website = "";
                else     {
                    $website = test_input($_POST['website']); 
                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                        $websiteerr = "Invalid URL";
                      }    
                    }
                if(empty($_POST['textarea']))
                      $commnets = "";
                else    
                    $comments = test_input($_POST['textarea']);   
                if(empty($_POST['gender']))
                    $gendererr = "gender is required";
                else    
                    $gender = test_input($_POST['gender']);    
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <h3>Form validation using php</h3>
    <p class="error">* Requeried field</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        Name: <input type="text" name="fname"><span class="error">*<?php echo $nameerr;?></span><br><br>
        Email: <input type="text" name="email" ><span class="error">*<?php echo $emailerr;?></span><br><br>
        Website: <input type="text" name="website"><span class="error"><?php echo $websiteerr;?></span><br><br>
        Comments: <textarea name="textarea" id="" cols="30" rows="10"></textarea><br><br>
        Gender:
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="female") echo "checked";?>
        value="female">Female
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
        value="male">Male
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="other") echo "checked";?>
        value="other">Other
        <br><br>
        <input type="submit" name="submit">
    </form>
    <?php
          echo "<h2>Your Input:</h2>";
          echo $name;
          echo "<br>";
          echo $email;
          echo "<br>";
          echo $website;
          echo "<br>";
          echo $comments;
          echo "<br>";
          echo $gender;
    ?>
</body>
</html>