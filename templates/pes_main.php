
    
       
       
            <div class="col-sm-8 p-3">
           
               
                  
                  
                 
           <form id="myForm">
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
               
               </div>

               <div class="row" style="padding-top:10px">
               <div class="btn-group col-sm-4 p-3" >
                   <button type="submit" class="btn btn-primary">Student</button>
                   <button type="button" class="btn btn-primary">Peer</button>
                   <button type="button" class="btn btn-primary">Supervisor</button>
                   <button type="button" class="btn btn-primary">Summary</button>
                   </div>
               </div>
           </form>
             
           <div id="result"></div>
             
           
           <script>
            document.getElementById("myForm").addEventListener("submit", function(e) {
                e.preventDefault(); // Prevent the form from submitting normally
                
                // Get form data
                var formData = new FormData(this);

                // Create a new XMLHttpRequest object
                var xhr = new XMLHttpRequest();

                // Configure the request
                xhr.open("POST", "getData.php", true);

                // Set up a callback function to handle the response
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Update the result div with the response from PHP
                        document.getElementById("result").innerHTML = xhr.responseText;
                    }
                };

                // Send the form data as the request body
                xhr.send(formData);
            });
        </script>



   </div>  
</div>



 





