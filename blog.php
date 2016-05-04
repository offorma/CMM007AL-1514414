<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MY blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="container">
    <div class="row">
        <div class="pull-left ">
            <p class = "logo">myBlog</p>
            <p>because the internet needs to know what i think</p>
        </div>
    </div>
    <div class="row">
        <nav>
            <ul class = "nav nav-pills">
                <li class="mynav"><a href="blog.php">All Blog Items</a></li>
                <li class="mynav"><a href="blog.php?category=work">Work Blog Items</a></li>
                <li class="mynav"><a href="blog.php?category=university">University Blog Items</a></li>
                <li class="mynav"><a href="blog.php?category=family">Family Blog Items</a></li>
                <li class="mynav" ><a href="add.php">Insert Blog Item</a></li>
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
if($_GET['category'] == 'work'){
$sql = "SELECT entryTitle, entrySummary, category, submitter FROM blogView WHERE category = 'work'";
$result = mysqli_query($con,$sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='row'>
                <div class='col-lg-8 col-lg-offset-2 '>
                    <div>
                        <span><a href='#'>{$row['entryTitle']}</a> <span>By </span><span>{$row['submitter']}</span></span>
                        <P>{$row['category']}</P>
                        <p>{$row['entrySummary']}</p>
                    </div>
            </div></div><hr>";
        }
    }
}elseif($_GET['category'] == 'university'){
$sql = "SELECT entryTitle, entrySummary, category, submitter FROM blogView WHERE category = 'university'";
$result = mysqli_query($con,$sql);
if ($result) {
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='row'>
                <div class='col-lg-8 col-lg-offset-2 '>
                    <div>
                        <span><a href='#'>{$row['entryTitle']}</a> <span>By </span><span>{$row['submitter']}</span></span>
                        <P>{$row['category']}</P>
                        <p>{$row['entrySummary']}</p>
                    </div>
            </div></div><hr>";
            }
        }
}elseif($_GET['category'] == 'family'){
    $sql = "SELECT entryTitle, entrySummary, category, submitter FROM blogView WHERE category = 'family'";
    $result = mysqli_query($con,$sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='row'>
                <div class='col-lg-8 col-lg-offset-2 '>
                    <div>
                        <span><a href='#'>{$row['entryTitle']}</a> <span>By </span><span>{$row['submitter']}</span></span>
                        <P>{$row['category']}</P>
                        <p>{$row['entrySummary']}</p>
                    </div>
            </div></div><hr>";
        }
    }
}
elseif($_GET['category'] == ''){
$sql = "SELECT entryTitle, entrySummary, category, submitter FROM blogView";
$result = mysqli_query($con,$sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='row'>
                <div class='col-lg-8 col-lg-offset-2 '>
                    <div>
                        <span><a href='#'>{$row['entryTitle']}</a> <span>By </span><span>{$row['submitter']}</span></span>
                        <P>{$row['category']}</P>
                        <p>{$row['entrySummary']}</p>
                    </div>
            </div></div><hr>";
        }
    }
}else{
    echo "Sorry something went wrong with ur request!!!";
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
