
    
        
            <div class="col-sm-6 p-3">
               
                  <h2>Peers</h2>
                  
                 
                  <table class="table table-bordered table-sm">
                    
                    <tbody>
                        <thead>
                            <th>Employee</th>
                            <th>Peers</th>
                            <th>SY</th>
                            <th>Sem</th>
                        <thead>
                        <?php foreach ($peers as $peer): ?>
                            <?= "<tr>" ?>
                                <?= "<td>".$peer["emp_fname"]." ".$peer["emp_lname"]."</td>" ?>
                                <?= "<td>".$peer["peer_fname"]." ".$peer["peer_lname"]."</td>" ?>
                                <?= "<td>".$peer["sy"]."</td>" ?>
                                <?= "<td>".$peer["sem"]."</td>" ?>
                            <?= "</tr>" ?> 
                        <?php endforeach ?>                              
                    </tbody>
                  </table>
                
                  <a class="btn btn-primary" href="addpeers.php"><span class = 'glyphicon glyphicon-plus'> ADD NEW PEERS</span></a>

            </div>
        </div>

        

          





