
    
        
            <div class="col-sm-4 p-3">
               
                  <h2>New Student</h2>
                  
                  <form action="./addstudent.php" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="fname" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                    </div>
                    <div class="mb-3">
                        <label for="mname" class="form-label">Middle Name:</label>
                        <input type="text" class="form-control" id="mname" placeholder="Enter Middle Name" name="mname">
                  
                    </div>
                    <div class="mb-3">
                        <label for="mname" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                  
                    </div>

                    
                    <div class="mb-3">
                        <label for="program" class="form-label">Program and Year Level:</label>
                        <select class="form-select" name="program">
                          <?php foreach ($programs as $program): ?>
                              <?= "<option value='".$program["program"]."'>".$program["program"]."</option>" ?>
                          <?php endforeach ?>  
                        </select> 
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                 
                  
                
                  
            </div>
        </div>

        

          





