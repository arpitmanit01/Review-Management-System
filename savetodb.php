<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <title>Output</title>
</head>


<body >
    <?php
    $pre=$_GET["pre"];
    $Q1=$_GET["Q1"];$Q1=(int)$Q1;
    $Q2=$_GET["Q2"];$Q2=(int)$Q2;
    $Q3=$_GET["Q3"];$Q3=(int)$Q3;
    $Q4=$_GET["Q4"];$Q4=(int)$Q4;
    $Q5=$_GET["Q5"];$Q5=(int)$Q5;
    $Q6=$_GET["Q6"];$Q6=(int)$Q6;
    $Q7=$_GET["Q7"];$Q7=(int)$Q7;
    $Q8=$_GET["Q8"];$Q8=(int)$Q8;
    $Q9=$_GET["Q9"];$Q9=(int)$Q9;
    $Q10=$_GET["Q10"];$Q10=(int)$Q10;
    $review=$_GET["review"];
    $scholarno=$_GET["scholarno"];



$db=new mysqli("localhost","root","","assignment3");
if($db->connect_errno){
    die("Connect nahi hua");
}
$check=mysqli_query($db,"SELECT COUNT(schno) as C FROM schdb where schno='$scholarno'") or die(mysqli_error($db));
$avar=($check->fetch_object());
if($avar->C==0){
    echo("<div class=\"container text-center py-5\"><p class=\" display-3\">INVALID USER/ALREADY FILLED</p></div>");
    die();
}
mysqli_query($db,"DELETE FROM schdb WHERE schno='$scholarno'") or die(mysqli_error($db));
mysqli_query($db,"INSERT INTO newtb VALUES('$pre[0]','$pre[1]','$pre[2]','$pre[3]','$pre[4]','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$review')") or die(mysqli_error($db));

?>
    <div class="container pt-3">
       

        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="3" class="text-center" >STUDENT FEEDBACK FORM(2019-2020)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                       Department:<?php echo($pre[0]);?>
                    </td>
                    <td>
                        Course:<?php echo($pre[1]);?>
                    </td>
    
                    <td>
                        Semester:<?php echo($pre[2]);?>
                    </td>
                </tr>
    
                <tr>
                    <td>
                        Subject Name:<?php echo($pre[3]);?>
                    </td>
    
                    <td colspan="2">
                        Faculty:<?php echo($pre[4]);?>
                    </td>
                </tr>
    
            </tbody>
        </table>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sr.No.</th>
                    <th>Parameter</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="serial">1</td>
                    <td class="parameter">Ability to explain the concepts and principle of subject.</td>
                    <td><?php echo($Q1);?></td>
                    
                </tr>
        
                <tr>
                    <td class="serial">2</td>
                    <td class="parameter">Knowledge Expertice and knowledge of teacher in teaching.</td>
                    <td><?php echo($Q2);?></td>
                    
                </tr>
        
                
                <tr>
                    <td class="serial">3</td>
                    <td class="parameter">Ability to clear doubt in the class room and outside.</td>
                    <td><?php echo($Q3);?></td>
                    
                </tr>
        
         
                <tr>
                    <td class="serial">4</td>
                    <td class="parameter">Ability to conclude concepts with examples.</td>
                    <td><?php echo($Q4);?></td>
                    
                </tr>
        
         
                <tr>
                    <td class="serial">5</td>
                    <td class="parameter">Communication skills and clarity.</td>
                    <td><?php echo($Q5);?></td>
                    
                </tr>
        
         
                <tr>
                    <td class="serial">6</td>
                    <td class="parameter">Punctuality and regularity in class.</td>
                    <td><?php echo($Q6);?></td>
                    
                </tr>
        
         
                <tr>
                    <td class="serial">7</td>
                    <td class="parameter">Interaction and discussion with students.</td>
                    <td><?php echo($Q7);?></td>
                    
                </tr>
        
         
                <tr>
                    <td class="serial">8</td>
                    <td class="parameter">Attitude towars students.</td>
                    <td><?php echo($Q8);?></td>
                    
                </tr>
        
         
                <tr>
                    <td class="serial">9</td>
                    <td class="parameter">Monitoring students and creating interest on subject.</td>
                    <td><?php echo($Q9);?></td>
                    
                </tr>
                <tr>
                    <td class="serial">10</td>
                    <td class="parameter">Timely evatualtion of internal assessment.</td>
                    <td><?php echo($Q10);?></td>
                    
                </tr>
                <tr>    
                    <td colspan="7">
                        <p class="h5 text-center">Review and Comment for Overall Improvement</p>
                    <div class="div d-flex justify-content-center">
                        <p><?php echo($review);?></p>
                    </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    </div>
    




    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>