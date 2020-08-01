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

    $db=new mysqli("localhost","root","","assignment3");
    if($db->connect_errno){ 
        die("Connect nahi hua");
    }

    $result=mysqli_query($db,"SELECT schno from schdb") or die(mysqli_error($db));
    
?>
<p class="h3 text-center display-3">REMAINING STUDENT REPORT</p>
<div class="container">

    <div class="jumbotron">
        <table class="table">
            <thead>
                <th class="thead-dark">Sr.No</th>
                <th>Scholar Number</th>
            </thead>
            <tbody>
                <?php
                $i=1;
                while($row=$result->fetch_object()){

                    echo("
                        <tr>
                        <th class=\"thead-dark\">
                        $i.
                        </th>
                        <td>
                        $row->schno 
                        </td>
                    </tr>

                    "
                    );
                    $i++;

                }
                
                ?>
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