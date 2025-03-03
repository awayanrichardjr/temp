
    
        
            <div class="col-sm-4 p-3">
               
                  <h2>Assign Peers</h2>
                  
                  <form action="./addpeers.php" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="current" class="form-label">Employee</label>
                        <select class="form-select" name="empid">
                          
                          <?php foreach ($emps as $emp): ?>
                              <?= "<option value='".$emp["id"]."'>".$emp["fname"]." ".$emp["mname"]." ".$emp["lname"]."</option>" ?>
                          <?php endforeach ?>  
                        </select>    

                    </div>
                    <div class="mb-3">
                        <label for="current" class="form-label">Peer</label>
                        <select class="form-select" name="peerid">
                          
                          <?php foreach ($emps as $emp): ?>
                              <?= "<option value='".$emp["id"]."'>".$emp["fname"]." ".$emp["mname"]." ".$emp["lname"]."</option>" ?>
                          <?php endforeach ?>  
                        </select>  
                    </div>

                    <div class="mb-3">
                        <label for="current" class="form-label">School Year</label>
                        <select class="form-select" name="sy">
                          <?php foreach ($sys as $sy): ?>
                              <?= "<option value='".$sy["sy"]."'>".$sy["sy"]."</option>" ?>
                          <?php endforeach ?>  
                        </select>  
                    </div>

                    <div class="mb-3">
                        <label for="current" class="form-label">Semester</label>
                        <select class="form-select" name="sem">
                          <option value="1st">1st</option>
                          <option value="2nd">2nd</option>
                          <option value="3rd">Summer</option>
                        </select>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                 
                  
                
                  
            </div>
        </div>

        

          





