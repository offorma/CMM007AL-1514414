

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
    <div class="row">
        <div class="col-lg-8 ">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div class="col-lg-4">
            <img src="images/blog.png" alt="">
        </div>
    </div>

</content>

<footer  class ="container"><hr>
    <div class="row">
        <p>Designed by Chukwunonso Offorma, "2016</p>
    </div>
</footer>
<script   src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: 1514414
 * Date: 04/05/2016
 * Time: 10:29
 */