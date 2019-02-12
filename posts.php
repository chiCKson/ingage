<?php
    //the user is signed in
if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    if(isset($_POST['post_topic']) && isset($_POST['post_content'])){
		//$sql = "insert into posts(post_content,post_date,post_topic, post_by)
		        //values(" . ($_POST["post_content"]) . ",". NOW() ."," . ($_POST["post_topic"]) . "," . $_SESSION["user_id"] . ")";
    	$sql = "Insert into posts values('hi','date','hey t1', 'user1')";
		                $result = mysqli_query($conn,$sql);
		              
		                echo 'Waiting for reply';
		                if(!$result)
		                {
		                    //something went wrong, display the error
		                    echo 'An error occured while inserting your post. Please try again later.' . mysqli_error();
		                    $sql = "ROLLBACK;";
		                    $result = mysqli_query($sql);
		                }
		                else
		                {
		                    $sql = "COMMIT;";
		                    $result = mysqli_query($sql);
		                     
		                    //after a lot of work, the query succeeded!
		                    echo 'You have successfully created <a href="posts.php?id='. $post_topic . '">your new topic</a>.';
		                }
		}

    }


    




?>