<?php
session_start();
//create_cat.php
include 'connect.php';
include 'indexheader.php';
 

if($_SESSION['signed_in'] == false)
{
    //the user is not signed in
    echo 'Sorry, you have to be <a href="signin.php">signed in</a> to create a topic.';
}
else
{
    //the user is signed in
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {   
        //the form hasn't been posted yet, display it
        //retrieve the categories from the database for use in the dropdown
        $sql = "SELECT
                    cat_id,
                    cat_name,
                    cat_description
                FROM
                    categories";
         
        $result = mysqli_query($link, $sql);
         
        if(!$result)
        {
            //the query failed, uh-oh :-(
            echo 'Error while selecting from database. Please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                //there are no categories, so a topic can't be posted
                if($_SESSION['user_level'] == 1)
                {
                    echo 'You have not created categories yet.';
                }
                else
                {
                    echo 'Before you can post a topic, you must wait for an admin to create some categories.';
                }
            }
            else
            {
         
                echo '<div id="catop" style="height: 600px;">
                <form method="post" action="">
                    <h2>Create A Topic</h2>
                        <div class="form-group">
                          <label>Topic Subject</label>
                          <input type="text" class="form-control" name="topic_subject">
                        </div>
                        <div class="form-group">
                                <label>Category</label>';
                             echo '<select class="form-control" name="topic_cat">';
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
                                        }
                          echo     '</select>';
                        echo     ' </div>
                        <div class="form-group">
                          <label>
                           Topic Content   
                          </label>
                          <textarea class="form-control" rows="5" name="post_content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right; font-size: 25px">Create</button>
                </form>
                </div>';
            }
        }
    }
    else
    {
        //start the transaction
        $query  = "BEGIN WORK;";
        $result = mysqli_query($link, $query);
         
        if(!$result)
        {
            //Damn! the query failed, quit
            echo 'An error occured while creating your topic. Please try again later.';
        }
        else
        {
     
            //the form has been posted, so save it
            //insert the topic into the topics table first, then we'll save the post into the posts table
            $sql = "INSERT INTO 
                        topics(topic_subject,
                               topic_date,
                               topic_cat,
                               topic_by)
                   VALUES('" . mysqli_real_escape_string($link, $_POST['topic_subject']) . "',
                               NOW(),
                               " . mysqli_real_escape_string($link, $_POST['topic_cat']) . ",
                               " . $_SESSION['user_id'] . "
                               )";
                      
            $result = mysqli_query($link, $sql);
            if(!$result)
            {
                //something went wrong, display the error
                echo 'An error occured while inserting your data. Please try again later.' . mysqli_error();
                $sql = "ROLLBACK;";
                $result = mysqli_query($link,$sql);
            }
            else
            {
                //the first query worked, now start the second, posts query
                //retrieve the id of the freshly created topic for usage in the posts query
                $topicid = mysqli_insert_id($link);
                 
                $sql = "INSERT INTO
                            posts(post_content,
                                  post_date,
                                  post_topic,
                                  post_by)
                        VALUES
                            ('" . mysqli_real_escape_string($link, $_POST['post_content']) . "',
                                  NOW(),
                                  " . $topicid . ",
                                  " . $_SESSION['user_id'] . "
                            )";
                $result = mysqli_query($link, $sql);
                 
                if(!$result)
                {
                    //something went wrong, display the error
                    echo 'An error occured while inserting your data. Please try again later.' . mysqli_error();
                $sql = "ROLLBACK;";
                $result = mysqli_query($link,$sql);
                }
                else
                {
                    $sql = "COMMIT;";
                    $result = mysqli_query($link,$sql);
                     
                    //after a lot of work, the query succeeded!
                    echo 'You have successfully created <a href="topic.php?id='. $topicid . '">your new topic</a>.';
                }
            }
        }
    }
}
 
include 'indexfooter.php';
?>