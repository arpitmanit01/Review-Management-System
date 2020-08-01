<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
     crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="lead">
<?php
$p=array("","","","","");
$p[0]=$_SESSION["depart"];
$p[1]=$_SESSION["course"];
$p[2]=$_SESSION["semester"];
$p[3]=$_SESSION["subject"];
$p[4]=$_GET["fac"];
    $db=new mysqli("localhost","root","","assignment3");
    if($db->connect_errno){ 
        die("Connect nahi hua");
    }

    
?>

<div class="jumbotron">
    <div class="container">
    <table class="table table-bordered text-center">
                <thead>
                    <tr class="table-secondary">
                        <th colspan="3" class="text-center" > DETAILS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                    <td >
                        <?php echo "Faculty Name : $p[4]";?>      
                        </td>
                        <td>
                            <?php echo "DEPARTMENT : $p[0]";?>
                                
                        </td>
                        <td>
                        <?php echo "COURSE : $p[1]";?>
                        </td>
        
                        
                    </tr>
        
                    <tr class="table-light">
                        <td>
                        <?php echo "SUBJECT NAME : $p[3]";?>
                        </td>
                        
                        <td>
                        <?php echo "SEMESTER : $p[2]";?>
                        </td>   
                        <td>
                        <?php 
                        $temp=mysqli_query($db,"SELECT COUNT(*) as C FROM newtb where pre0='$p[0]' and pre1='$p[1]' and pre2='$p[2]' and pre4='$p[4]'");
                        $t21=$temp->fetch_object();
                        $total2=$t21->C;
                        echo "Total Feedback : $total2";
                        ?>      
                        </td>
                    </tr>
        
                </tbody>
            </table>
    <hr>
    
    <table class="table table-bordered text-center">
    <thead>
        <th>Student No.</th>
        <th>R-Q1</th>
        <th>R-Q2</th>
        <th>R-Q3</th>
        <th>R-Q4</th>
        <th>R-Q5</th>
        <th>R-Q6</th>
        <th>R-Q7</th>
        <th>R-Q8</th>
        <th>R-Q9</th>
        <th>R-Q10</th>
        <th>Total</th>
    </thead>
    <tbody>
        
    <?php 
    $i=1; 
    $result=mysqli_query($db,"SELECT q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,(q1+q2+q3+q4+q5+q6+q7+q8+q9+q10) as S,((q1+q2+q3+q4+q5+q6+q7+q8+q9+q10)*2) as P FROM newtb where pre0='$p[0]' and pre1='$p[1]' and pre2='$p[2]' and pre3='$p[3]' and pre4='$p[4]'"); 
    $t=mysqli_query($db,"SELECT COUNT(*) as C,AVG((q1+q2+q3+q4+q5+q6+q7+q8+q9+q10)*2) as S FROM newtb where pre0='$p[0]' and pre1='$p[1]' and pre2='$p[2]' and pre3='$p[3]' and pre4='$p[4]'");
        $t2=$t->fetch_object();
        $total=$t2->C;
        $average=$t2->S; 
    while($row=$result->fetch_object()){
        echo("<tr>
        <td>Student-$i</td>
        <td>$row->q1</td>
        <td>$row->q2</td>
        <td>$row->q3</td>
        <td>$row->q4</td>
        <td>$row->q5</td>
        <td>$row->q6</td>
        <td>$row->q7</td>
        <td>$row->q8</td>
        <td>$row->q9</td>
        <td>$row->q10</td>
        <td>$row->S/50=$row->P%</td>
        </tr> 
        ");  
        $i=$i+1;
    }
    ?>
       <tr>
           <td colspan="12"><?php echo("Average Feedback Score : $average%");?></td>
       </tr>
    </tbody>
    </table>
    
    </div>
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