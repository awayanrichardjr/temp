
    
        
            <div class="col-sm-4 p-3">
               
                  <h2>Courses</h2>
                  
                 
                  <table class="table table-bordered table-sm">
                    <thead>
                        <th>CODE</td>
                        <th>TITLE</td>
                    </thead>
                    <tbody>
                        <?php foreach ($courses as $course): ?>
                            <?= "<tr>" ?>
                                <?= "<td>".$course["code"]."</td>" ?>
                                <?= "<td>".$course["title"]."</td>" ?>
                            <?= "</tr>" ?> 
                        <?php endforeach ?>                              
                    </tbody>
                  </table>
                
                  <a class="btn btn-primary" href="addcourse.php"><span class = 'glyphicon glyphicon-plus'> ADD NEW COURSE</span></a>

            </div>
        </div>

        

          





