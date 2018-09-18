<?php
session_start();
//create_cat.php
include 'connect.php';
include 'indexheader.php';
echo '<h2>Forum</h2><br>';
$sql = "SELECT cat_id, cat_name, cat_description FROM categories";

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
//prepare the table

echo '<div class="tab-content" id="nav-tabContent">
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Last Topic</th>
            </tr>
            </thead>
            <tbody>';
                while($row = mysqli_fetch_assoc($result)) {
                echo'<tr>';
                echo'<td>';
                echo '<a href="category.php?id='. $row['cat_id'] . '">' . $row['cat_name'] . '</a>';
                echo '</td>';
                echo '<td>';
                echo '<a href=""category.php?id='. $row['cat_id'] . '"></a>' . $row['cat_description'] ;
                echo '</td>';
                echo '<td>';
                echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
                echo '</td>';
                echo '</tr>      
                </tbody>';

}
echo '</table>';
}
}
include 'indexfooter.php';
?>



    
