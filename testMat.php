<?php 
session_start();
include 'indexheader.php';
// echo "<a href='/forum2/category.php?id=1, class='link-button right'><span> Transport</span></a>";

//create_cat.php
include 'connect.php';
echo '<h2>Forum</h2>';
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

//echo '<div class="tab-content" id="nav-tabContent">

while($row = mysqli_fetch_assoc($result)) {

 echo' <div class="row">
      <div class="col-sm-7">
<div class="feature-center animate-box" data-animate-effect="fadeIn">

 <a href="#" class="probootstrap-featured-news-box">
  <figure class="probootstrap-media"><img src="img/bitcoin.jpg" class="img-responsive" width=30%></figure>
  <div class="probootstrap-text">
    <h3><a href="category.php?id='. $row['cat_id'] . '">' . $row['cat_name'] . '</a></h3>
    <p>><a href="category.php?id='. $row['cat_id'] . '">' . $row['cat_description'] . '</a></p>
  </div>
</a>
</div>
</div>

</div>';
<button type="button" class="btn btn-lg btn-warning " active>
<a href="category.php?id='. $row['cat_id'] . '">' . $row['cat_name'] . '</a>
</button>

//echo '<div class="tab-content" id="nav-tabContent">
//         <table class="table">
//         <thead class="thead-dark">
//             <tr>
//             <th scope="col">Category</th>
//             <th scope="col">Description</th>
//             <th scope="col">Last Topic</th>
//             </tr>
//             </thead>
//             <tbody>';
//                 while($row = mysqli_fetch_assoc($result)) {
//                 echo'<tr>';
//                 echo'<td>';
//                 echo '<a href="category.php?id='. $row['cat_id'] . '">' . $row['cat_name'] . '</a>';
//                 echo '</td>';
//                 echo '<td>';
//                 echo '<a href=""category.php?id='. $row['cat_id'] . '"></a>' . $row['cat_description'] ;
//                 echo '</td>';
//                 echo '<td>';
//                 echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
//                 echo '</td>';
//                 echo '</tr>      
//                 </tbody>';

// }
// echo '</table>';
}
}
}
include 'indexfooter.php';
?>


//echo '<div class="tab-content" id="nav-tabContent">
//         <table class="table">
//         <thead class="thead-dark">
//             <tr>
//             <th scope="col">Category</th>
//             <th scope="col">Description</th>
//             <th scope="col">Last Topic</th>
//             </tr>
//             </thead>
//             <tbody>';
//                 while($row = mysqli_fetch_assoc($result)) {
//                 echo'<tr>';
//                 echo'<td>';
//                 echo '<a href="category.php?id='. $row['cat_id'] . '">' . $row['cat_name'] . '</a>';
//                 echo '</td>';
//                 echo '<td>';
//                 echo '<a href=""category.php?id='. $row['cat_id'] . '"></a>' . $row['cat_description'] ;
//                 echo '</td>';
//                 echo '<td>';
//                 echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
//                 echo '</td>';
//                 echo '</tr>      
//                 </tbody>';

// }
// echo '</table>';