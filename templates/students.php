
    
       

            <div class="col-sm-7 p-3">
               
                  <h2>Students</h2>
                  
                 
                  <table class="table table-bordered table-sm">
                    <thead>
                        <th>Student ID</td>
                        <th>Name</td>
                        <th>Birthday</td>
                        <th>Program</td>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $student): ?>
                            <?= "<tr>" ?>
                                <?= "<td>".$student["sid"]."</td>" ?>
                                <?= "<td>".$student["fname"]." ".$student["mname"]." ".$student["lname"]."</td>" ?>
                                
                                <?= "<td>".$student["bday"]."</td>" ?>
                                <?= "<td>".$student["program"]."</td>" ?>
                        <?= "</tr>" ?> 
                        <?php endforeach ?>                              
                    </tbody>
                  </table>
                
                  <a class="btn btn-primary" href="addstudent.php"><span class = 'glyphicon glyphicon-plus'> ADD NEW STUDENT</span></a>

            </div>
        </div>

        

          





