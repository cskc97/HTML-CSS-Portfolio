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
            /*echo
            "
            
      
                <div class=\"carousel-item\">
                <div class=\"carousel-caption d-none d-md-block\">
                
                
                <h1>".$row["name"]."</h1>
                <h3>".$row["description"]."</h3>
                </div>
      
                </div>
            ";

            */

           echo "
           <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#modal".$row["name
            "]."\">".$row["name"]."</button>";

           echo

           "
           <!-- Modal -->
<div id=\"modal".$row["name"]."\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Modal Header</h4>
      </div>
      <div class=\"modal-body\">
        <p>Some text in the modal.</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>

  </div>
</div>
           
           ";
            
            

           
        }




        $result_set->close();


    }


}




?>