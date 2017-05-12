<!DOCTYPE html>


<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Testing Stuff</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	
</head>
<body>

<div class="container">

	<div class="row" >


		<div class="col-md-12 text-right">

		<h2>Santhoshkrishnachaitanya Chelikavada</h2>


		</div>


	</div>

    <div class="row">
        <div class="col-md-12">

            <img class="img-responsive" src="images/header.jpg">
            <h3 id="overimage">Santhoshkrishnachaitanya Chelikavada</h3>





        </div>

    </div>

	<div class="row">
		<div class="col-md-12">
            <h2>PROJECTS</h2>

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