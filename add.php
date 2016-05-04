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
                    <label for="title">Submitted By:</label>
                    <input class="form-control" type="text" name="submitted" >
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

}else{
    header('Location: index.php');
}