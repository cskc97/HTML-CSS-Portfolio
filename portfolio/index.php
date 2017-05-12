<!DOCTYPE html>


<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Testing Stuff</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="materialize/materialize/css/materialize.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	
</head>
<body>

<div class="container-fluid">


<div class="row">
    <div class="col-md-12">
    <div class="carousel-item">
        <img class="img-responsive" src="images/header3.jpg" alt="cover image">
        <div class="carousel-caption d-none d-md-block">
            <h3>Santhoshkrishnachaitanya Chelikavada</h3>
            <p>Entrepreneur, Developer and Student</p>
        </div>
    </div>
    </div>
</div>




	<div class="row">
		<div class="col-md-12">
            <h5>PROJECTS</h5>

		</div>
	</div>

    <div class="row">


            <?php

                require_once ("projects.php");
                $projects = new ProjectsDB();

                $projects->getProjects();


            ?>


    </div>



</div>

</body>
</html>