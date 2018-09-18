<?php 
session_start();
include 'indexheader.php';

//create_cat.php
include 'connect.php';
echo '<h2 style="border:1px solid black; text-align:center;background-color:lightbergie; margin-top:1px;border-radius: 25px;">Categories</h2>';
$sql = "SELECT cat_id, cat_name, cat_description FROM categories
        ";
$result = mysqli_query($link, $sql);

if(!$result)
{
echo 'The categories could not be displayed, please try again later.';
}
else
{
if(mysqli_num_rows($result) == 0)
{
echo 'No categories defined yet.';
}
else
{
while($row = mysqli_fetch_assoc($result)) {
 echo'   <a href="category.php?id='. $row['cat_id'] . '">
  <button type="button" class="btn btn-md btn-danger" style="margin:3px 3px">' . $row['cat_name'] . ' </button></a>';
    }
  }
}

echo '<h2 style="border:1px solid black; text-align:center; background-color:lightgreen; margin-top:30px;border-radius: 25px;">Recent Topics</h2>';

$sql="SELECT topic_id,topic_subject,topic_date FROM topics";
$result = mysqli_query($link, $sql);
if(!$result)
{
echo 'The topics could not be displayed, please try again later.';
}
else
{
if(mysqli_num_rows($result) == 0)
{
echo 'No topics defined yet.';
}
else
{
// prepare the table
// echo '<div class="tab-content" id="nav-tabContent">
while($row = mysqli_fetch_assoc($result)) {


  
  echo'   <h6 style="text-align:center "> <ul>
  <a style="color:green;padding-top:-3px; text-decoration: none" href="topic.php?id='. $row['topic_id'] . '">' 
  .$row['topic_subject'] . '</a>  </ul> </h6>';
}
}
}

include 'indexfooter.php';
?>


