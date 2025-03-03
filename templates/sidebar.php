 <div class="row">
            <div class="col-sm-3 p-3">
              <div class="card">
                <div style="padding:20px 50px">

                  <img class="card-img-top" src="./img/profilepic.jpg" alt="Card image">
                </div>
                
                <div class="card-body">
                  <h4 class="card-title"><?php echo $_SESSION["lname"].", ".$_SESSION["fname"]." ".$_SESSION["mname"]; ?></h4>
                  <p class="card-text">Employee Number: <?php echo $_SESSION["employeenum"]; ?></p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                
                </div>
              </div>
              <div id="accordion">

                <div class="card">
                  <!-- <div class="card-header">
                    <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                      NTC Official Documents
                    </a>
                  </div>
                  <div id="collapseOne" class="collapse show" data-bs-parent="#accordion"> -->
                    <div class="card-body">
                        
                          <ul class="nav nav-pills flex-column">
                            
                            <li class="nav-item">
                              <a class="nav-link" href="#">Downloadable Forms</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Advisories</a>
                            </li>
                             
                            <li class="nav-item">
                              <a class="nav-link" href="#">Faculty Load</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Request for Leave</a>
                            </li>
                          </ul>
                            
                    </div>

<!--                     
                  </div> -->
                </div>

                <!-- <div class="card">
                  <div class="card-header">
                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                    <<Name>>
                    </a>
                  </div>
                  <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        
                          <ul class="nav nav-pills flex-column">
                            
                            <li class="nav-item">
                              <a class="nav-link" href="#">Faculty Load</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">PES</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Request for Leave</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Clearance</a>
                            </li>
                            
                          </ul>
                            
                    </div>
                  </div>
                </div> -->

               
  
              </div>
            </div>