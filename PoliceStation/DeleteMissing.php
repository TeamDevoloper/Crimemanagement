<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
        <?php
        $Id = $_GET['MissingId'];
		
        
         $con = mysqli_connect("localhost", "root","","cms");
        
        $sql = "delete from missingperson_tbl where Person_Id ='" . $Id . "'";
      
       mysqli_query($con,$sql);
        
        mysqli_close($con);
        echo '<script type="text/javascript">alert("Missing Person Deleted Succesfully");window.location=\'Missing.php\';</script>';
        ?>
    </body>
</html>
