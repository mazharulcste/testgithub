<?php
include 'db_connect.php';
if (!isset($_FILES['image']['tmp_name'])){
	echo "";
	}
        else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);
			
			$location="uploads/" . $_FILES["image"]["name"];
//			$caption=$_POST['caption'];
//                        $category_1=$_POST['category_1'];
                        $catregory=$_POST['category'];
                        $caption=$_POST['caption'];
                        $text=str_replace("'", "\'", $_POST['editor1']);
			
			$save=mysql_query("INSERT INTO tbl_image(image,category,caption,details) VALUES('$location','$catregory','$caption','$text')");
                        
			header("location:image_add.php");
			exit();					
	}      
?>












