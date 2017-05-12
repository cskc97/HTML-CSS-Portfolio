<?php

class ProjectsDB
{
    // Projects will have names, and descriptions. Images later on.

    private $dbConnection;



    public function __construct()
    {
        $this->dbConnection=new mysqli("localhost","root","","projectsdb");


    }

    public function __destruct()
    {
        $this->dbConnection->close();
    }

    public function insertProject($name, $description)
    {
        $query = "INSERT INTO Projects VALUES ($name,$description);";
        $this->dbConnection->query($query);

    }

    public function getProjects()
    {
        $query = "SELECT * FROM Projects;";
        $result_set = $this->dbConnection->query($query);



        while($row=$result_set->fetch_assoc())
        {

           echo "
           <div class=\"col-md-3\"> 
                <div class=\"card blue-grey darken-1 small\">
                    <div class=\"card-content white-text\">
                    <span class=\"card-title\">".$row["name"]."</span>
                    <p>".$row["description"]."</p> 
                    </div>
                </div>
           </div>";
                    
                    
                    
                    
           
          
           

            

           
        }




        $result_set->close();


    }


}


/* <h1>\".$row[\"name\"].\"</h1>\".
               \"<h3>\".$row[\"description\"].\"</h3>
               </div>\"; */



?>