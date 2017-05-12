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
        <div class="carousel-item" data-ride="carousel">
            <img class="img-responsive" src="images/header3.jpg" alt="cover image">
            <div class="carousel-caption d-none d-md-block" style=".carousel-caption{text-align: center;">
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

<!--            Just for testing purposes-->
            <?php

            require_once ("projects.php");
            $projects = new ProjectsDB();

            $projects->getProjects();


            ?>
            <?php

            require_once ("projects.php");
            $projects = new ProjectsDB();

            $projects->getProjects();


            ?>



    </div>









        <footer class="page-footer">
        <div class="container">
            <div class="row">

                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Santhoshkrishnachaitanya Chelikavada
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
        </footer>




    </div>



</body>
</html>