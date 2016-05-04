<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MY blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="container">
    <div class="row">
        <nav>
            <ul class = "nav nav-pills">
                <li class="mynav"><a href="list.html">All Blog Items</a></li>
                <li class="mynav"><a href="blog.html">Work Blog Items</a></li>
                <li class="mynav"><a href="blog.html">University Blog Items</a></li>
                <li class="mynav"><a href="blog.html">Family Blog Items</a></li>
                <li class="mynav" ><a href="add.html">Insert Blog Item</a></li>
            </ul>
        </nav>
    </div>
</header>

<content class = "container">


<?php
/**
 * Created by PhpStorm.
 * User: 1514414
 * Date: 04/05/2016
 * Time: 10:37
 */
include('connection.php');
$sql = "SELECT entryTitle, entrySummary, category, submitter FROM blogView";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)){
   echo"<div class='row'> <div class='col-lg-8 col-lg-offset-2 '>
            <div>
                <span><a href='#'>{$row['entryTitle']}</a> <span>By</span><span>{$row['submitter']}</span></span>
                <P>{$row['category']}</P>
                <p>{$row['entrySummary']}</p>
            </div>
            </div><hr>";
}
?>


</content><hr>

<footer  class ="container">
    <div class="row">
        <p>Designed by Chukwunonso Offorma, "2016</p>
    </div>
</footer>
<script   src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
