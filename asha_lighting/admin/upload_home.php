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
			$description=$_POST['details'];
			
			$save=mysql_query("INSERT INTO tbl_home (pro_pic,description) VALUES ('$location','$description')");
                        
			header("location:home_article.php");
			exit();					
	}

        
?>












