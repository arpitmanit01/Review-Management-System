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
$p=$_GET["pre"];
$_SESSION["depart"]=$p[0];
$_SESSION["course"]=$p[1];
$_SESSION["semester"]=$p[2];
$_SESSION["subject"]=$p[3];

    $db=new mysqli("localhost","root","","assignment3");
    if($db->connect_errno){ 
        die("Connect nahi hua");
    }

    $result=mysqli_query($db,"SELECT DISTINCT pre4 FROM newtb where pre0='$p[0]' and pre1='$p[1]' and pre2='$p[2]' and pre3='$p[3]'") or die(mysqli_error($db));
    
?>

<div class="jumbotron">
    <div class="container">
    <table class="table table-bordered text-center">
                <thead>
                    <tr class="table-secondary">
                        <th colspan="3" class="text-center" >GETTING DETAILS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <td>
                            <?php echo "DEPARTMENT : $p[0]";?>
                                
                        </td>
                        <td>
                        <?php echo "COURSE : $p[1]";?>
                        </td>
        
                        <td>
                        <?php echo "SEMESTER : $p[2]";?>
                        </td>
                    </tr>
        
                    <tr class="table-light">
                        <td>
                        <?php echo "SUBJECT NAME : $p[3]";?>
                        </td>
        
                        <td colspan="2">
                                
                                
                        </td>
                    </tr>
        
                </tbody>
            </table>
    <hr>
    <form action="further.php" method="GET">
    <table class="table table-bordered text-center">
    <?php    
     while($row=$result->fetch_object()){
        $fac=$row->pre4;
        $t=mysqli_query($db,"SELECT COUNT(*) as C,AVG((q1+q2+q3+q4+q5+q6+q7+q8+q9+q10)*2) as S FROM newtb where pre0='$p[0]' and pre1='$p[1]' and pre2='$p[2]' and pre3='$p[3]' and pre4='$fac'");
        $t2=$t->fetch_object();
        $total=$t2->C;
        $average=$t2->S;
        echo("
        <tr class=\"table-light\">
            <td>$fac</td>
            <td>Total Feedback : $total</td>
            <td>Average Feedback Score : $average%</td>
            <td class=\"d-flex justify-content-center\"><button class=\"btn btn-primary mx-auto\" type=\"submit\" name=\"fac\"value='$fac'>Click for Details</button></td>
            
        </tr>
        ");
    }
    ?>
    </table>
    </form>
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