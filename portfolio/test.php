<!DOCTYPE html>


<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Testing Stuff</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	
</head>
<body>

<div class="container">

	<div class="row" >

		
		<div class="col-md-6">
			<img class="img-responsive" src="https://source.unsplash.com/random/500x150">

		</div>
		<div class="col-md-6 text-uppercase text-right">

		<h1>Santhoshkrishnachaitanya Chelikavada</h1>
		<h3> Human Being </h3>

		</div>


	</div>

	<div class="row">
		<div class="col-md-12">
		</div>
	</div>

<!--    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">-->
<!--            <div class="carousel-inner" role="listbox">-->

            <?php

                require_once ("projects.php");
                $projects = new ProjectsDB();

                $projects->getProjects();


            ?>

<!--            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">-->
<!--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                <span class="sr-only">Previous</span>-->
<!--            </a>-->
<!--            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">-->
<!--                <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                <span class="sr-only">Next</span>-->
<!--            </a>-->
<!--        </div>-->
<!--	-->
	



</div>

</body>
</html>