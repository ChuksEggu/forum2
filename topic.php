<?php
session_start();
//create_cat.php
include 'indexheader.php';
include 'connect.php';

 
//first select the category based on $_GET['cat_id']
$sql = "SELECT topic_id,
            topic_subject
        FROM 
            topics
        WHERE
            topics.topic_id = " . mysql_real_escape_string($_GET['id']);
 
$result = mysqli_query($link,$sql);



if(!$result)
{
    echo 'The category could not be displayed, please try again later.';
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'This category does not exist.';
    }   
    else
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<div class="tab-content" id="nav-tabContent">
                    <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">'. $row['topic_subject']. '</th>
                        </tr>
                        </thead>
                        <tbody>';
             
        }

        //do a query for the topics
        $sql = "SELECT posts.post_topic,
                posts.post_content,
                posts.post_date,
                posts.post_by,
                users.user_id,
                users.user_name
                FROM 
                    posts
                LEFT JOIN
                        users
                ON
                        posts.post_by = users.user_id
                WHERE
                        posts.post_topic = " . mysql_real_escape_string($_GET['id']);
         
        $result = mysqli_query($link, $sql);
         
        if(!$result)
        {
            echo 'The topics could not be displayed, please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                echo 'There are no topics in this category yet.';
            }
            else
            {
                //prepare the table 
        
                while($row = mysqli_fetch_assoc($result))
                { 
                                  
                echo'<tr>';
                echo'<td>';
                echo '<h5>' . $row['user_name'] . '</h5>' . $row['post_date'];
                echo '<br>' . $row['post_content'] . '';
                echo '</td>';
                echo '</tr>      
                </tbody>';

                }
                echo '</table>';

            }
        }
    }
}
 //do a query for the topics
 $sql = "SELECT posts.post_topic,
 posts.post_content,
 posts.post_date,
 posts.post_by,
 users.user_id,
 users.user_name
 FROM 
     posts
 LEFT JOIN
         users
 ON
         posts.post_by = users.user_id
 WHERE
         posts.post_topic = " . mysql_real_escape_string($_GET['id']);

$result = mysqli_query($link, $sql);
$row =  mysqli_fetch_assoc($result); 
echo'

<form method="post" action="reply.php?id='. $row['post_topic'] . '">
        <div class="form-group">
        <label><h3>Add A Reply</h3></label>
        <textarea name="reply-content" class="form-control" rows="5" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="float: right">Reply</button>
</form>';

    
include 'indexfooter.php';
?>