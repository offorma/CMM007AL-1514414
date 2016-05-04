<?php
/**
 * Created by PhpStorm.
 * User: 1514414
 * Date: 04/05/2016
 * Time: 11:11
 */

if ($_SERVER['REQUEST_METHOD']==='GET'){
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MY blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="container">
    <div class="row">
        <nav>
            <ul class = "nav nav-pills">
                <li class="mynav"><a href="blog.php">All Blog Items</a></li>
                <li class="mynav"><a href="blog.php">Work Blog Items</a></li>
                <li class="mynav"><a href="blog.php">University Blog Items</a></li>
                <li class="mynav"><a href="blog.php">Family Blog Items</a></li>
                <li class="mynav" ><a href="add.php">Insert Blog Item</a></li>
            </ul>
        </nav>
    </div>
</header>

<content class = "container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 ">
            <form action="add.php" method="post">
                <div class="form-group">
                    <label for="title">Entry Title</label>
                    <input class="form-control" type="text" name="title" required>
                </div>
                <div class="form-group">
                    <label for="title">Entry Summary</label>
                    <textarea  class="form-control" name="summary"  cols="30" rows="10" required></textarea>
                </div>
                <div class="form-group">
                    <label for="title">Category</label>
                    <select class="form-control"  name="category" required>
                        <option value="politics"> Work</option>
                        <option value="sports"> University</option>
                        <option value="tech">Family</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Submitter By:</label>
                    <input class="form-control" type="text" name="submitter" >
                </div>


                    <button class="right" value="Submit" name="submit">Submit</button>


            </form>
        </div>
    </div>


</content><hr>

<footer  class ="container">
    <div class="row">
        <p>Designed by Chukwunonso Offorma, "2016</p>
    </div>
</footer>
<script   src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>';


}elseif($_SERVER['REQUEST_METHOD']==='POST'){

    include(connection.php);
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $category = $_POST['category'];
    $submitter = $_POST['submitter'];
    $sql = "INSERT INTO blogView (entryTitle, entrySummary, category, submitter)
            VALUES ('$title','$summary','$category','$submitter')";

    $result = mysqli_query($con,$sql);

    header('Location: blog.php');

}else{
    header('Location: index.php');
}