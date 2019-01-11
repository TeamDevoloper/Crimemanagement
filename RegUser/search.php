<?php
   $con = mysqli_connect("localhost", "root","","cms");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    
    <title>Crime Management System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
     <body>
        <div id="templatemo_wrapper">
            <?php
            include "Header.php"
            ?>
            <div id="templatemo_content">
                <div class="section_w800">
  



     
<?php
    $query = $_GET['query']; 
    
     
    $min_length = 3;
    
     
    if(strlen($query) >= $min_length){   
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($con,$query);
        
         
        $raw_results = mysqli_query($con,"SELECT * FROM news_tbl
            WHERE (`News_Title` LIKE '%".$query."%') OR (`News_Title` LIKE '%".$query."%')") or die(mysqli_error($con));
             
     
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results['News_Title']."</h3>"."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ 
            echo "No results";
        }
         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }
?>
               <div class="cleaner"></div>
                </div> <!-- end of section_w760 -->

            </div> <!-- end of templatemo_content -->
            <?php
            include "Footer.php";
            ?>

        </div> <!-- end of templatemo_wrapper -->
    </body>
    </html>