<html>
<head>
<title>TO upload image file!</title>
</head>
<body>
<?php 

    $uploadok = true;
    $target_dir = "uploads/";
    $target_file = $target_dir.$_FILES['fname']['name'];
    $extension = pathinfo($_FILES['fname']['name'],PATHINFO_EXTENSION);
   
    if(isset($_FILES['fname'])){
        //check if file already exists
        if(file_exists($target_file)){
            echo "file already exists <br>";
            $uploadok = false;
        }
        //checking whether the file is image or fake
        if($extension !="jpeg" && $extension !="gif" && $extension !="jpg" && $extension !="png"){
            $uploadok = false;
            echo "file is not an image <br>";
        }
        //checking file size
        if($_FILES['fname']['size'] >5000000){
                echo "file is very large";
                $uploadok = false;
            }
        if($uploadok){
        move_uploaded_file($_FILES['fname']['tmp_name'],$target_file);
        echo "filse is successfully uploaded";   
        }
        else
            echo "Try again";
    }
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
        <input type="file" name="fname"><br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
