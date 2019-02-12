<!DOCTYPE html>
<html>
<head>
	<title>Ingage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<ul>
		<li><form action="" method="POST"><input id="createEventBtn" type="submit" name="xx"></form></li>
		<?php

		?>
		<li><a href="#">Event1</a></li>
		<li><a href="#">Event2</a></li>
		<li><a href="#">Event3</a></li>
		<li><a href="#">Contact</a></li>				
	</ul>			  

	<div class="postdiv">
	 <div id="searchdiv">
	 	<input id= "searchbox" align="center" name="txtsearch" value="searchvalue" type="search" autocomplete="on">
		<input class="buttonSearch" type="submit" name="btnSearch" value="search">
<?php
require "connection.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
	if(isset($_POST['btnSearch'])){ 
	$sql="select * from posts where post_topic like '%".$_POST['txtsearch']."%'";
	 		$result=mysqli_query($conn,$sql);
			if($result){
				$num=mysqli_num_rows($result);
				if($num>0){
					while ($row=mysqli_fetch_array($result,MYSQLI_NUM)) {
						echo "<div class='viewPost'>";
						echo "<h1>".$row[3]."</h1><br>";
						echo "<p>".$row[1]."</p>";
						echo "</div>";
					}
				}
			}else{
				echo "error";
			}
		}
	}
?>
	 </div>
	<form action="" method="POST">
	<div id="postsdiv">
	 	<p class= "Headings">Create new Post</p>
	 	Post Topic: <textarea rows="2" cols="110" name="post_topic" value="post_topic"></textarea>
		<textarea class= "postTextArea" placeholder="Write here.." name="post_content" value="post_content"></textarea>
		<p><input id="buttonPost" type="submit" name="btnpost" value="submit" onclick="console.log('sumbmitted!!!')"></p>
	</div> 
	</form>				
	 <div class="viewPost">
	 	<?php
	 		
	 		$sql="select * from posts order by post_id desc";
	 		$result=mysqli_query($conn,$sql);
			if($result){
				$num=mysqli_num_rows($result);
				if($num>0){
					while ($row=mysqli_fetch_array($result,MYSQLI_NUM)) {
						echo "<div class='viewPost'>";
						echo "<h1>".$row[3]."</h1><br>";
						echo "<p>".$row[1]."</p>";
						echo "</div>";
					}
				}
			}else{
				echo "error";
			}
	 	?>
	 </div> 		
	</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	if(isset($_POST['btnpost'])){ 
		$sql="insert into posts(post_content,post_date,post_topic,post_by) values ('".$_POST['post_content']."','".date("Y/m/d h:i:sa")."','".$_POST['post_topic']."','user01')";
		$result=mysqli_query($conn,$sql);
		header('location:Home.php');
	}
}
?>