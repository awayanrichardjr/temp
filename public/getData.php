<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$sy = $_POST['sy'];
$sem = $_POST['sem'];

 // configuration
 require("../includes/config.php");

 //total for students

 $rows = query("SELECT AVG(c1) as c1,AVG(c2) as c2,AVG(c3) as c3,AVG(c4) as c4,AVG(c5) as c5,AVG(c6) as c6,AVG(i1) as i1,AVG(i2) as i2,AVG(i3) as i3,AVG(i4) as i4,AVG(i5) as i5,AVG(i6) as i6,AVG(e1) as e1,AVG(e2) as e2,AVG(e3) as e3,AVG(e4) as e4,AVG(e5) as e5,AVG(e6) as e6,AVG(a1) as a1,AVG(a2) as a2,AVG(a3) as a3,AVG(a4) as a4,AVG(a5) as a5,AVG(a6) as a6,AVG(g1) as g1 From pes_student Where sy=? and sem=? and fid=?", $sy, $sem, $_SESSION["id"]);
 $row=$rows[0];
$stotal = ($row["c1"] + $row["c2"] + $row["c3"] + $row["c4"] + $row["c5"] + $row["c6"]) * 0.15;
$stotal = $stotal + ($row["i1"] + $row["i2"] + $row["i3"] + $row["i4"] + $row["i5"] + $row["i6"])*0.25;
$stotal = $stotal + ($row["e1"] + $row["e2"] + $row["e3"] + $row["e4"] + $row["e5"] + $row["e6"])*0.15; 
 $stotal = $stotal + ($row["a1"] + $row["a2"] + $row["a3"] + $row["a4"] + $row["a5"] + $row["a6"])*0.25; 
$stotal = $stotal + ($row["g1"])*0.2;

//total for peers
$peers = query("SELECT AVG(s1) as s1,AVG(s2) as s2,AVG(s3) as s3,AVG(s4) as s4,AVG(s5) as s5,AVG(s6) as s6,AVG(s7) as s7,AVG(s8) as s8,AVG(s9) as s9,AVG(p1) as p1,AVG(p2) as p2,AVG(p3) as p3,AVG(p4) as p4,AVG(p5) as p5,AVG(p6) as p6,AVG(c1) as c1,AVG(c2) as c2,AVG(c3) as c3,AVG(c4) as c4 From pes_peer Where sy=? and sem=? and empid=?", "2023-2024", "1st", $_SESSION["id"]);
$peer=$peers[0];

$ptotal = (($peer["s1"] + $peer["s2"] + $peer["s3"] + $peer["s4"] + $peer["s5"] + $peer["s6"]+ $peer["s7"]+ $peer["s8"]+ $peer["s9"]+ $peer["p1"]+ $peer["p2"]+ $peer["p3"]+ $peer["p4"]+ $peer["p5"]+ $peer["p6"]+ $peer["c1"]+ $peer["c2"]+ $peer["c3"]+ $peer["c4"]) / 95) * 100 *0.25;

//total for supervisor
$super=query("SELECT i1, i2, i3, i4, i5,i6,i7,i8,i9,i10,i11,i12,i13,i14,i15,i16, i17,i18,i19,i20,i21 From pes_super Where sy=? and sem=? and fid=?", "2023-2024", "1st", 29);



if (count($super) == 1)
{
    $sup=$super[0];
    $suptotal = (($sup["i1"] + $sup["i2"] + $sup["i3"] + $sup["i4"] + $sup["i5"] + $sup["i6"]+ $sup["i7"]+ $sup["i8"]+ $sup["i9"]+ $sup["i10"]+ $sup["i11"]+ $sup["i12"]+ $sup["i13"]+ $sup["i14"]+ $sup["i15"]+ $sup["i16"]+ $sup["i17"]+ $sup["i18"]+ $sup["i19"]+ $sup["i20"]+ $sup["i21"]) / 105) * 100 *0.25;
}
else
    $suptotal = 0;

//total of self
$self = query("SELECT s1,s2,s3,s4,s5,s6,s7,s8,s9,p1,p2,p3,p4,p5,p6,c1,c2,c3,c4 From pes_self Where sy=? and sem=? and empid=?", "2023-2024", "1st", $_SESSION["id"]);
$se=$self[0];
$selftotal = (($se["s1"] + $se["s2"] + $se["s3"] + $se["s4"] + $se["s5"] + $se["s6"]+ $se["s7"]+ $se["s8"]+ $se["s9"]+ $se["p1"]+ $se["p2"]+ $se["p3"]+ $se["p4"]+ $se["p5"]+ $se["p6"]+ $se["c1"]+ $se["c2"]+ $se["c3"]+ $se["c4"]) / 95) * 100 *0.25;

//total
$total = $stotal + $ptotal + $suptotal + $selftotal;

//adjectival
if ($total >=95)
    $adjectival = "Outstanding";
else if ($total >=85)
    $adjectival = "Very Satisfactory";
else if ($total >=75)
    $adjectival = "Satisfactory";
else if ($total >=65)
    $adjectival = "Fair";
else
    $adjectival = "Poor";

$com1 = query("SELECT com1, com2, com3,com4 from pes_student where fid = ? and sem=? and sy=? and courseid=?",31,"1st","2023-2024",1);
 $sem = "SUM";
 $sy = "2023-2024";
 $faculty = "Aiza Romano";



// Send the data as a response
echo '<h5 class="text-center">NORTHLINK TECHNOLOGIAL COLLEE</h5>
        <h6 class="text-center"><b>PES SUMMARY</b></h6>
        <h6 class="text-center"><b>STUDENT AS RATER</b></h6>
        <h6 class="text-center">'. ($sem=="1st"?"First Semester":($sem=="2nd"?"Second Semester":"Summer")) .
            ' S.Y. '.$sy.
        
        '</h6>
        <h6 class="text-center">Date Printed: '. date("F d, Y") .
        '<h6>'.$faculty.
        '<table class="table table-bordered table-sm">
        <thead>
            <th>Student</th>
            <th>Peer</th>
            <th>Supervisor</th>
            <th>Self</th>
            <th>Total</th>
            <th>Adjectival Rating</th>
        </thead>
        <tbody>
        <tr>
            <td>'.$stotal.'</td>
            <td>'.$ptotal.'</td>
            <td>'.$suptotal.'</td>
            <td>'.$selftotal.'</td>
            <td>'.$total.'</td>
            <td>'.$adjectival.'</td>    
        </tr>

        </tbody>
        </table>

        <table class="table table-bordered table-sm">
        <thead>
            <th class="text-center">Communication and Informaton 15%</th>
            <th class="text-center">Average</td>
        </thead>
        <tbody>
                        <tr>
                            <td>1. The course syllabus was explained/distributed/made available for access/reference.</td>
                            <td>'.$row["c1"].'</td>
                        </tr>
                      
                        <tr>
                            <td>2. Makeup classes were conducted/announced for interrupted meetings.</td>
                            <td>'.$row["c2"].'</td>
                        </tr>
                      
                        <tr>
                            <td>3. An online platform was utilized to inform/remind us of any course tasks.</td>
                            <td>'.$row["c3"].'</td>
                        </tr>

                        
                        <tr>
                            <td>4. I was aware of/had attended synchronous or its equivalent asynchronous teaching activity.</td>
                            <td>'.$row["c4"].'</td>
                        </tr>

                        
                        <tr>
                            <td>5. I was guided with the technology support/module instruction that I needed.</td>
                            <td>'.$row["c5"].'</td>
                        </tr>

                        
                        <tr>
                            <td>6. I know my instructor in this course because we were communicating as a group/individually.</td>
                            <td>'.$row["c6"].'</td>
                        </tr>
                        
                        <thead>
                            <th class="text-center">Instruction & Learning (25%)</th>
                            <th class="text-center">Average</td>
                        </thead>
                        
                        <tr>
                            <td>1. Course content/materials updates and requirements were discussed and/or posted on various platforms for dissemination.</td>
                            <td>'.$row["i1"].'</td>
                        </tr>
                        
                        <tr>
                            <td>2. Lectures were supplemented with learning activities and follow up/inputs from my instructor.</td>
                            <td>'.$row["i2"].'</td>
                        </tr>
                        
                        <tr>
                            <td>3. Accomplishment/submission of assignments/course requirements was reasonable & flexible.</td>
                            <td>'.$row["i3"].'</td>
                        </tr>
                        
                        <tr>
                            <td>4. The subject matter was explained well to the level of my understanding.</td>
                            <td>'.$row["i4"].'</td>
                        </tr>
                        
                        <tr>
                            <td>5. I was able to access learning materials/resources (courier, LMS, group chat, fb, etc.) within the timeframe.</td>
                            <td>'.$row["i5"].'</td>
                        </tr>
                        
                        <tr>
                            <td>6. I was provided with access and clear instruction on the submission of course requirements.</td>
                            <td>'.$row["i6"].'</td>
                        </tr>
                        
                        <thead>
                            <th class="text-center">Engagement & Consultation (15%)</th>
                            <th class="text-center">Average</td>
                        </thead>

                        <tr>
                            <td>1. The schedule of virtual office hours with the consultation of my instructor had been posted/announced.</td>
                            <td>'.$row["e1"].'</td>
                        </tr>
                        
                        <tr>
                            <td>2. Discussion boards and platforms (LMS,FB,etc) were provided for class and/or group interaction.</td>
                            <td>'.$row["e2"].'</td>
                        </tr>
                        
                        <tr>
                            <td>3. Group/class interaction was properly guided with worksheets and other learning resources.</td>
                            <td>'.$row["e3"].'</td>
                        </tr>
                        
                        <tr>
                            <td>4. The different forms of online/offline interaction allowed me to engage and enjoy learning.</td>
                            <td>'.$row["e4"].'</td>
                        </tr>
                        
                        <tr>
                            <td>5. I was able to consult with my instructor through the information given on how to reach her/him (virtual office hours, consultation, announcement, etc.).</td>
                            <td>'.$row["e5"].'</td>
                        </tr>

                        
                        <tr>
                            <td>6. Class interaction/discussion encouraged me to contribute knowledge/experience towards a better understanding of the subject matter.</td>
                            <td>'.$row["e6"].'</td>
                        </tr>
                        
                        <thead>
                            <th class="text-center">Assessment & Academic Integrity (25%)</th>
                            <th class="text-center">Average</td>
                        </thead>

                        <tr>
                            <td>1. Online/offline assessment tasks and requirements were given/explained with a reasonable timeframe to accomplish.</td>
                            <td>'.$row["a1"].'</td>
                        </tr>
                        
                        <tr>
                            <td>2. The assessment tools such as test questionnnaire and/or rubrics used in our class were stated /explained clearly.</td>
                            <td>'.$row["a2"].'</td>
                        </tr>
                        
                        <tr>
                            <td>3. Proctored online exam/test was conducted with utmost care to preserve academic integrity/honesty.</td>
                            <td>'.$row["a3"].'</td>
                        </tr>
                        
                        <tr>
                            <td>4. Varied assessments through online/offline drills, exercises, and assignments motivated me to perform better.</td>
                            <td>'.$row["a4"].'</td>
                        </tr>
                        
                        <tr>
                            <td>5. The timely feedback on my learning assessments (taken remotely) helped me improve in the succeeding assessments/tests.</td>
                            <td>'.$row["a5"].'</td>
                        </tr>

                        <tr>
                            <td>6. I learned to uphold academic integrity in the assessment or test-taking activity in this course.</td>
                            <td>'.$row["a6"].'</td>
                        </tr>

                        <thead>
                            <th class="text-center">General Assessment (20%)</th>
                            <th class="text-center">Average</td>
                        </thead>
                        
                        <tr>
                            <td>1. Will you recommend this faculty/instructor to other students?</td>
                            <td>'.$row["g1"].'</td>
                        </tr>


                        </tbody>
                </table>
                
                <table class="table table-bordered table-sm">
                <thead>
                    <th class="text-center">DESIRABLE STRATEGIES/CHARACTERISTICS OF THE INSTRUCTOR/PROFESSOR THAT MOTIVATED THE STUDENT\'S COURSE PARTICIPATION</th>
                    
                </thead>

                <tbody>';
                    foreach ($com1 as $com):
                        echo '<tr>
                                    <td>'.$com["com1"].'</td>
                                </tr>';

                    endforeach;

                        echo '<th class="text-center">LEARNING EXPERIENCES THAT ALLOWED THE STUDENTS TO UPHOLD ACADEMIC INTEGRITY AND TO BE HONEST DESPITE DIFFICULTY IN THE COURSE</th>';
                 
                    foreach ($com1 as $com):
                        echo '<tr>
                                    <td>'.$com["com2"].'</td>
                                </tr>';

                    endforeach;
                          echo '<th class="text-center">COURSE REQUIREMENTS THAT THE STUDENTS FIND RELEVANT</th>';
                 
                    foreach ($com1 as $com):
                        echo '<tr>
                                    <td>'.$com["com3"].'</td>
                                </tr>';

                    endforeach;
                        echo '<th class="text-center">OVERALL COMMENTS</th>';
                 
                    foreach ($com1 as $com):
                        echo '<tr>
                                    <td>'.$com["com4"].'</td>
                                </tr>';

                    endforeach;
                echo ' </tbody>
                </table>

                <table class="table table-borderless">
                

                    <tbody>
                        <tr>
                            <td>Shown to:</td>
                            
                            <td>Approved by:</td>
                            
                        </tr>
                        <tr>
                            
                            <td class="text-center"><u>'.$faculty.'</u><br>Faculty Concerned</td>
                            
                            <td class="text-center">_________________________<br>Supervisor</td>
                            
                        </tr>
                    </tbody>
                </table>
                ';

   
}
else
 // Handle GET requests or other methods here
 echo "Invalid request method.";

?>