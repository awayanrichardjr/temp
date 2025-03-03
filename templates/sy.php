
    
            <div class="col-sm-4 p-3">
               
                  <h2>School Year</h2>
                  
                 
                  <table class="table table-bordered table-sm">
                    
                    <tbody>
                        <?php foreach ($sy as $sy): ?>
                            <?= "<tr>" ?>
                                <?= "<td>".$sy["sy"]."</td>" ?>
                              
                            <?= "</tr>" ?> 
                        <?php endforeach ?>                              
                    </tbody>
                  </table>
                
                  <a class="btn btn-primary" href="addsy.php"><span class = 'glyphicon glyphicon-plus'> ADD NEW SY</span></a>

            </div>
        </div>

        

          





