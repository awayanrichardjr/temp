
    
       
       

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
                  <h4>(STUDENT as RATER) 25%</h4>
                  
                 
                  <form action="pes_student.php" method="POST">
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
                        <select class="form-select" name="courseid">
                         
                          <?php foreach ($courses as $course): ?>
                              <?= "<option value='".$course["id"]."'>".$course["courseid"]."</option>" ?>
                          <?php endforeach ?>  
                        </select>
                        
                      </div>

                      <div class="col">
                           <input type="text" class="form-control" id="faculty" placeholder=" <?php echo("Faculty Name");?>" name="faculty">
                      </div>
                      
                      
                      
                      <div hidden class="col">
                        <button class="btn btn-primary" onclick="document.getElementById('myDiv').style.display='block'">Go</button>
                      </div>
                      
                    </div>

                  
                    <div id="myDiv">
                 
                        <!-- Directions -->
                      <div class="row" style="padding-top:20px">

                        <h6>Direction:</h6>
                        <p>Rate your teacher on the items below according to the following scale. (Click the button which corresponds to your answer.)</p>           
                        
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
                                <th colspan="7">Communication and Information (15%)</th>
                                
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
                                <td>The course syllabus was explained/distributed/made available for access/reference.</td>
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
                                <td>Makeup classes were conducted/announced for interrupted meetings.</td>
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
                                <td>An online platform was utilized to inform/remind us of any course tasks.</td>
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
                                <td>I was aware of/had attended synchronous or its equivalent asynchronous teaching activity.</td>
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
                                <td>I was guided with the technology support/module instruction that I needed.</td>
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
                                <td>I know my instructor in this course because we were communicating as a group/individually.</td>
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
                                  <th colspan="7">Instruction and Learning (25%)</th>
                                  
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
                                  <td>Course content/materials updates and requirements were discussed and/or posted on various platforms for dissemination.</td>
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
                                  <td>2</td>
                                  <td>Lectures were supplemented with learning activities and follow up/inputs from my instructor.</td>
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
                                  <td>3</td>
                                  <td>Accomplishment/submission of assignments/course requirements was reasonable & flexible.</td>
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

                                <tr>
                                  <td>4</td>
                                  <td>The subject matter was explained well to the level of my understanding.</td>
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
                                  <td>5</td>
                                  <td> I was able to access learning materials/resources (courier, LMS, group chat, fb, etc.) within the timeframe.</td>
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
                                  <td>6</td>
                                  <td>I was provided with access and clear instruction on the submission of course requirements.</td>
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
                                    <th colspan="7">Engagement & Consultation (15%)</th>
                                    
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
                                    <td>The schedule of virtual office hours with the consultation of my instructor had been posted/announced.</td>
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
                                    <td>2</td>
                                    <td>Discussion boards and platforms (LMS,FB,etc) were provided for class and/or group interaction.</td>
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
                                    <td>3</td>
                                    <td>Group/class interaction was properly guided with worksheets and other learning resources.</td>
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

                                  <tr>
                                    <td>4</td>
                                    <td>The different forms of online/offline interaction allowed me to engage and enjoy learning.</td>
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
                                    <td>5</td>
                                    <td> I was able to consult with my instructor through the information given on how to reach her/him (virtual office hours, consultation, announcement, etc.).</td>
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
                                    <td>6</td>
                                    <td>Class interaction/discussion encouraged me to contribute knowledge/experience towards a better understanding of the subject matter.</td>
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
                                                          
                                </tbody>
                              </table>
                            </div>
                          </div>
                          
                           <!-- Table 4 -->
                           <div class="row" style="padding-top:20px">
                            <div class="col">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th colspan="7">Assessment & Academic Integrity (25%)</th>
                                    
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
                                    <td>Online/offline assessment tasks and requirements were given/explained with a reasonable timeframe to accomplish.</td>
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
                                  <tr>
                                    <td>2</td>
                                    <td> The assessment tools such as test questionnnaire and/or rubrics used in our class were stated /explained clearly.</td>
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio20" value="5">                           
                                      </div>
                                    </td> 
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio20" value="4">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio20" value="3">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio20" value="2">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio20" value="1">                           
                                      </div>
                                    </td>  
                                  </tr>

                                  

                                  <tr>
                                    <td>3</td>
                                    <td>Proctored online exam/test was conducted with utmost care to preserve academic integrity/honesty.</td>
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio21" value="5">                           
                                      </div>
                                    </td> 
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio21" value="4">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio21" value="3">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio21" value="2">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio21" value="1">                           
                                      </div>
                                    </td>  
                                  </tr>

                                  <tr>
                                    <td>4</td>
                                    <td>Varied assessments through online/offline drills, exercises, and assignments motivated me to perform better.</td>
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio22" value="5">                           
                                      </div>
                                    </td> 
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio22" value="4">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio22" value="3">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio22" value="2">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio22" value="1">                           
                                      </div>
                                    </td>  
                                  </tr>

                                  <tr>
                                    <td>5</td>
                                    <td>The timely feedback on my learning assessments (taken remotely) helped me improve in the succeeding assessments/tests.</td>
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio23" value="5">                           
                                      </div>
                                    </td> 
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio23" value="4">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio23" value="3">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio23" value="2">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio23" value="1">                           
                                      </div>
                                    </td>  
                                  </tr>

                                  <tr>
                                    <td>6</td>
                                    <td> I learned to uphold academic integrity in the assessment or test-taking activity in this course.</td>
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio24" value="5">                           
                                      </div>
                                    </td> 
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio24" value="4">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio24" value="3">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio24" value="2">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio24" value="1">                           
                                      </div>
                                    </td>  
                                  </tr>
                                                          
                                </tbody>
                              </table>
                            </div>
                          </div>

                           <!-- Table 5-->
                           <div class="row" style="padding-top:20px">
                            <div class="col">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th colspan="7">General Assessment (20%)</th>
                                    
                                  </tr>
                                </thead>
                                <thead>
                                  <tr>
                                    <th colspan="2">Items</th>
                                    <th>Strongly Agree</th>
                                    <th>Agree</th>
                                    <th>Uncertain</th>
                                    <th>Disagree</th>
                                    <th>Strongly Disagree</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Will you recommend this faculty/instructor to other students?</td>
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio25" value="5">                           
                                      </div>
                                    </td> 
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio25" value="4">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio25" value="3">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio25" value="2">                           
                                      </div>
                                    </td>  
                                    <td>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio25" value="1">                           
                                      </div>
                                    </td>                           
                                  </tr>
                                 
                                                          
                                </tbody>
                              </table>
                            </div>
                          </div>


                          
                          
                          <div class="mb-3">
                              <label for="com1" class="form-label">DESIRABLE STRATEGIES/CHARACTERISTICS OF THE INSTRUCTOR/PROFESSOR THAT MOTIVATED THE STUDENT'S COURSE PARTICIPATION</label>
                              <textarea class="form-control" name="com1" id="com1" rows="3"></textarea>
                          </div>
                          
                          <div class="mb-3">
                              <label for="com2" class="form-label">LEARNING EXPERIENCES THAT ALLOWED THE STUDENTS TO UPHOLD ACADEMIC INTEGRITY AND TO BE HONEST DESPITE DIFFICULTY IN THE COURSE</label>
                              <textarea class="form-control" name="com2" id="com2" rows="3"></textarea>
                          </div>

                          <div class="mb-3">
                              <label for="com3" class="form-label">COURSE REQUIREMENTS THAT THE STUDENTS FIND RELEVANT</label>
                              <textarea class="form-control" name="com3" id="com3" rows="3"></textarea>
                          </div>

                          <div class="mb-3">
                              <label for="com4" class="form-label">OVERALL COMMENTS</label>
                              <textarea class="form-control" name="com4" id="com4" rows="3"></textarea>
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

        

          





