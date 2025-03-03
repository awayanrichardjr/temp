
    
       
       
            <div class="col-sm-9 p-3">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(function() {
                  $('input[type="radio"]').click(function() {
                    var x = $('input[name="optradio1"]:checked').val()*1;
                      $('#total').text(x);
                  });
                });
            </script>
               
                  <h2>PERFORMANCE EVALUATION SYSTEM (PES)</h2>
                  <h4>(PEER as RATER) 25%</h4>
                  
                 
                  <form action="pes.php" method="POST">
                    <div class="row">
                      <div class="col">
                        <select class="form-select" name="sy">
                          <?= "<option value='".$cur["sy"]."'>".$cur["sy"]."</option>" ?>
                          <?php foreach ($sy as $sy): ?>
                              <?= "<option value='".$sy["sy"]."'>".$sy["sy"]."</option>" ?>
                          <?php endforeach ?>  
                        </select>
                        
                      </div>
                      <div class="col">
                        <select class="form-select" name="sem">
                          <option value="1st">1st</option>
                          <option value="2nd">2nd</option>
                          <option value="3rd">Summer</option>
                          
                        </select>
                      </div>
                      <div class="col">
                        <select class="form-select" name="peers">
                          <?php foreach ($peers as $peer): ?>
                              <?= "<option value='".$peer["peerid"]."'>".$peer["fname"]." ".$peer["mname"]." ".$peer["lname"]."</option>" ?>
                          <?php endforeach ?>  
                        </select>
                      </div>
                      <div hidden class="col">
                        <button class="btn btn-primary" onclick="document.getElementById('myDiv').style.display='block'">Go</button>
                      </div>
                      
                    </div>

                  
                    <div id="myDiv">
                 
                        <!-- Directions -->
                      <div class="row" style="padding-top:20px">

                        <h6>Direction:</h6>
                        <p>Rate your peer on the items below according to the following scale. (Click the button which corresponds to your answer.)</p>           
                        
                        <div class="col">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Numerical Scale</th>
                                <th>Descriptive Rating</th>
                                <th>Qualitative Description</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>5</td>
                                <td>Most Frequently</td>
                                <td>Exhibits the behavior describes 95-100% of the time</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Frequently</td>
                                <td>Exhibits the behavior describes 76-94%% of the time</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Sometimes</td>
                                <td>Exhibits the behavior describes 51-75% of the time</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Seldom</td>
                                <td>Exhibits the behavior describes 26-50% of the time</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Rarely</td>
                                <td>Exhibits the behavior describes 1-25% of the time - ALMOST NEVER</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <!-- Table 1 -->
                      <div class="row" style="padding-top:20px">
                        <div class="col">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th colspan="7">Scholarship</th>
                                
                              </tr>
                            </thead>
                            <thead>
                              <tr>
                                <th colspan="2">Items</th>
                                <th>Most Frequently</th>
                                <th>Frequently</th>
                                <th>Sometimes</th>
                                <th>Seldom</th>
                                <th>Rarely</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Upgrades knowledge in one's field of specialization</td>
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio1" value="5">                           
                                  </div>
                                </td> 
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio1" value="4">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio1" value="3">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio1" value="2">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio1" value="1">                           
                                  </div>
                                </td>                           
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Contributes new innovative ideas for the development of instruction, research and extension</td>
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio2" value="5">                           
                                  </div>
                                </td> 
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio2" value="4">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio2" value="3">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio2" value="2">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio2" value="1">                           
                                  </div>
                                </td>  
                              </tr>

                              

                              <tr>
                                <td>3</td>
                                <td>Exposes oneself to new trends in other fields</td>
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio3" value="5">                           
                                  </div>
                                </td> 
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio3" value="4">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio3" value="3">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio3" value="2">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio3" value="1">                           
                                  </div>
                                </td>  
                              </tr>

                              <tr>
                                <td>4</td>
                                <td>Stimulates intellectual discussion with colleagues</td>
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio4" value="5">                           
                                  </div>
                                </td> 
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio4" value="4">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio4" value="3">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio4" value="2">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio4" value="1">                           
                                  </div>
                                </td>  
                              </tr>

                              <tr>
                                <td>5</td>
                                <td>Performs competently assigned scholarly tasks</td>
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio5" value="5">                           
                                  </div>
                                </td> 
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio5" value="4">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio5" value="3">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio5" value="2">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio5" value="1">                           
                                  </div>
                                </td>  
                              </tr>

                              <tr>
                                <td>6</td>
                                <td>Keeps abreast with issues/concerns of local/national and international significance</td>
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio6" value="5">                           
                                  </div>
                                </td> 
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio6" value="4">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio6" value="3">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio6" value="2">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio6" value="1">                           
                                  </div>
                                </td>  
                              </tr>

                              <tr>
                                <td>7</td>
                                <td>Shows evidence of professional and cultural growth</td>
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio7" value="5">                           
                                  </div>
                                </td> 
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio7" value="4">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio7" value="3">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio7" value="2">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio7" value="1">                           
                                  </div>
                                </td>  
                              </tr>

                              <tr>
                                <td>8</td>
                                <td>Possesses a good command of the medium of instruction</td>
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio8" value="5">                           
                                  </div>
                                </td> 
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio8" value="4">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio8" value="3">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio8" value="2">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio8" value="1">                           
                                  </div>
                                </td>  
                              </tr>

                              <tr>
                                <td>9</td>
                                <td>Demontrates intellectual honesty</td>
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio9" value="5">                           
                                  </div>
                                </td> 
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio9" value="4">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio9" value="3">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio9" value="2">                           
                                  </div>
                                </td>  
                                <td>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio9" value="1">                           
                                  </div>
                                </td>  
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                      
                        <!-- Table 2 -->      
                        <div class="row" style="padding-top:20px">
                          <div class="col">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th colspan="7">Professionalism</th>
                                  
                                </tr>
                              </thead>
                              <thead>
                                <tr>
                                  <th colspan="2">Items</th>
                                  <th>Most Frequently</th>
                                  <th>Frequently</th>
                                  <th>Sometimes</th>
                                  <th>Seldom</th>
                                  <th>Rarely</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Maintains effective relationship with colleagues.</td>
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio10" value="5">                           
                                    </div>
                                  </td> 
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio10" value="4">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio10" value="3">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio10" value="2">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio10" value="1">                           
                                    </div>
                                  </td>                           
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Welcomes suggestions from colleagues.</td>
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio11" value="5">                           
                                    </div>
                                  </td> 
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio11" value="4">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio11" value="3">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio11" value="2">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio11" value="1">                           
                                    </div>
                                  </td>  
                                </tr>

                                

                                <tr>
                                  <td>3</td>
                                  <td>Respects rights of others</td>
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio12" value="5">                           
                                    </div>
                                  </td> 
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio12" value="4">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio12" value="3">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio12" value="2">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio12" value="1">                           
                                    </div>
                                  </td>  
                                </tr>

                                <tr>
                                  <td>4</td>
                                  <td>Behaves within the bounds of accepted norms.</td>
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio13" value="5">                           
                                    </div>
                                  </td> 
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio13" value="4">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio13" value="3">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio13" value="2">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio13" value="1">                           
                                    </div>
                                  </td>  
                                </tr>

                                <tr>
                                  <td>5</td>
                                  <td>Handles work related pressures pleasantly with grace.</td>
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio14" value="5">                           
                                    </div>
                                  </td> 
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio14" value="4">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio14" value="3">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio14" value="2">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio14" value="1">                           
                                    </div>
                                  </td>  
                                </tr>

                                <tr>
                                  <td>6</td>
                                  <td>Demonstrates leadership qualities</td>
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio15" value="5">                           
                                    </div>
                                  </td> 
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio15" value="4">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio15" value="3">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio15" value="2">                           
                                    </div>
                                  </td>  
                                  <td>
                                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="optradio15" value="1">                           
                                    </div>
                                  </td>  
                                </tr>

                                
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                        

                          <!-- Table 3 -->
                          <div class="row" style="padding-top:20px">
                            <div class="col">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th colspan="7">COMMITMENTS AND DEDICATIONS TO SERVICE</th>
                                    
                                  </tr>
                                </thead>
                                <thead>
                                  <tr>
                                    <th colspan="2">Items</th>
                                    <th>Most Frequently</th>
                                    <th>Frequently</th>
                                    <th>Sometimes</th>
                                    <th>Seldom</th>
                                    <th>Rarely</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Shows enthusiasm in his job</td>
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio16" value="5">                           
                                      </div>
                                    </td> 
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio16" value="4">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio16" value="3">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio16" value="2">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio16" value="1">                           
                                      </div>
                                    </td>                           
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Devotes official time in the accomplishment of one's official functions and research.</td>
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio17" value="5">                           
                                      </div>
                                    </td> 
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio17" value="4">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio17" value="3">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio17" value="2">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio17" value="1">                           
                                      </div>
                                    </td>  
                                  </tr>

                                  

                                  <tr>
                                    <td>3</td>
                                    <td>Observes administrative protocol</td>
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio18" value="5">                           
                                      </div>
                                    </td> 
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio18" value="4">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio18" value="3">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio18" value="2">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio18" value="1">                           
                                      </div>
                                    </td>  
                                  </tr>

                                  <tr>
                                    <td>4</td>
                                    <td>Upholds the ideals of the institution.</td>
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio19" value="5">                           
                                      </div>
                                    </td> 
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio19" value="4">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio19" value="3">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio19" value="2">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio19" value="1">                           
                                      </div>
                                    </td>  
                                  </tr>

                                                          
                                </tbody>
                              </table>
                            </div>
                          </div>
                          
                          <!-- Total Score -->
                          <div class="row" style="padding-top:20px">
                            <div class="col">
                                <h5>Total Score: <span id="totalScore">0</span></h5>
                            </div>
                          </div>

                          <button type="submit" class="btn btn-primary">Submit</button>

                          </form>
                      
                      
                       </div>
                      <script>
                        const radioButtons = document.querySelectorAll('input[type="radio"]');
                        let totalScore = 0;

                        radioButtons.forEach(function(radioButton) {
                            radioButton.addEventListener("click", function() {
                                // Calculate the total score when a radio button is clicked
                                totalScore = 0;
                                radioButtons.forEach(function(radio) {
                                    if (radio.checked) {
                                        totalScore += parseInt(radio.value);
                                    }
                                });

                                // Display the updated total score
                                document.getElementById("totalScore").textContent = totalScore;
                            });
                        });

                        
                          function show() {
                            var x = document.getElementById("myDIV");
                            x.style.display = "block";
                           
                          }

                         

                    </script>    

            </div>  
        </div>

        

          





