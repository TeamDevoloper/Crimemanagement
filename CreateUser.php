<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Creating user document</title>
    </head>

    <body>
        <?php
        $Name = $_POST['txtName'];
        $Address = $_POST['txtAdd'];
        $City = $_POST['cmbCity'];
        $Email = $_POST['txtEmail'];
        $Mobile = $_POST['txtMobile'];
        $Gender = $_POST['cmbGender'];
        $Station = $_POST['cmbStation'];
        $BirthDate = $_POST['txtDate'];
        $path1 = $_FILES["txtFile"]["name"];
        $UserName = $_POST['txtUserName'];
        $Password = $_POST['txtPassword'];
        move_uploaded_file($_FILES["txtFile"]["tmp_name"], "Documents/" . $_FILES["txtFile"]["name"]);
        

            $con = mysqli_connect("localhost", "root","","cms");
        

        $sql = "insert into user_tbl(Name,Address,City,Mobile,Email,Gender,BirthDate,UserName,Password,Station_Name,VerificationProof) values('" . $Name . "','" . $Address . "','" . $City . "','" . $Mobile . "','" . $Email . "','" . $Gender . "','" . $BirthDate . "','" . $UserName . "','" . $Password . "','" . $Station . "','" . $path1 . "')";
        
       mysqli_query($con,$sql);
        
        mysqli_close($con);

        echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
        ?>
    </body>
</html>
