<?php
session_start();
//create_cat.php
include 'connect.php';
include 'indexheader.php';
 
//first select the category based on $_GET['cat_id']
$sql = "SELECT
            cat_id,
            cat_name,
            cat_description
        FROM
            categories
        WHERE
            cat_id = " . mysqli_real_escape_string($link, $_GET['id']);
 
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
        //display category data
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<h2>Topics in <b>' . $row['cat_name'] . '</b> category</h2>';
        }
     
        //do a query for the topics
        $sql = "SELECT  
                    topic_id,
                    topic_subject,
                    topic_date,
                    topic_cat
                FROM
                    topics
                WHERE
                    topic_cat = " . mysqli_real_escape_string($link, $_GET['id']);
         
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
                echo '<div class="tab-content" id="nav-tabContent">
                <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">Topic</th>
                    <th scope="col">Created At</th>
                    </tr>
                    </thead>
                    <tbody>';
                        while($row = mysqli_fetch_assoc($result)) {
                        echo'<tr>';
                        echo'<td>';
                        echo '<a href="topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a>';
                        echo '<td>';
                        echo date('d-m-Y', strtotime($row['topic_date']));
                        echo '</td>';
                        echo '</tr>      
                        </tbody>';        
                }
                echo '</table>';
            }
        }
    }
}
 
include 'indexfooter.php';
?>