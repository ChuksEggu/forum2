<?php
session_start();
//create_cat.php
include 'connect.php';
include 'indexheader.php';
 
 
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    //the form hasn't been posted yet, display it
            echo '<div id="catop">
            <form method="post" action="">
                <h2>Create A Category</h2>
                    <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" name="cat_name">
                    </div>
                    <div class="form-group">
                    <label>Category Description</label>
                    <textarea class="form-control" rows="5" name="cat_description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: right; font-size: 25px">Create</button>
            </form>
        </div>';
}
else
{
    
        /* so, the form has been posted, we'll process the data in three steps:
            1.  Check the data
            2.  Let the user refill the wrong fields (if necessary)
            3.  Varify if the data is correct and return the correct response
        */
    $errors = array(); /* declare the array for later use */
         
    if(!isset($_POST['cat_name']))
    {
        $errors[] = 'Enter a Catergory Name.';
    }
     
    if(!isset($_POST['cat_description']))
    {
        $errors[] = 'Category Description, Please.';
    }
    if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
        {
            echo 'Uh-oh.. a couple of fields are not filled in correctly..';
            echo '<ul>';
            foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
            {
                echo '<li>' . $value . '</li>'; /* this generates a nice error list */
            }
            echo '</ul>';
        }
        else
        {
            //the form has been posted without errors, so save it
            //notice the use of mysqli_real_escape_string, keep everything safe!
            //also notice the sha1 function which hashes the password
            $sql = "SELECT 
                        cat_id,
                        cat_name,
                        cat_description
                    FROM
                        categories
                    WHERE
                        cat_name = '" . mysqli_real_escape_string($link,$_POST['cat_name']) . "'";
                    
                         
            $result = mysqli_query($link,$sql);
            if(!$result)
            {
                //something went wrong, display the error
                echo 'Something went wrong while signing in. Please try again later.';
                //echo mysqli_error(); //debugging purposes, uncomment when needed
            }
            else
            {
                //the query was successfully executed, there are 2 possibilities
                //1. the query returned data, the user can be signed in
                //2. the query returned an empty result set, the credentials were wrong
                if(mysqli_num_rows($result) == 1)
                {
                    echo 'category Exist already.';
                }
                else{
                    //the form has been posted, so save it
                            $sql = "INSERT INTO categories(cat_name, cat_description)
                            VALUES('" . mysqli_real_escape_string($link, $_POST['cat_name']) . "',
                                '" . mysqli_real_escape_string($link, $_POST['cat_description']). "')";


                        $result = mysqli_query($link,$sql);
                        if(!$result)
                        {
                        //something went wrong, display the error
                        echo 'Error' . mysql_error();
                        }
                        else
                        {
                        echo 'New category successfully added.';

                        }
                     }
            }




        }
}
include 'indexfooter.php';
?>