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
<div class="p display-4 text-center">STUDENT FEEDBACK REPORT SYSTEM</div>
<div class="container pt-0">
<div class="jumbotron pt-3 pb-2 mt-4">
    <div class="container pt-0 ">
        
        <form action="report.php" class="form-group" method="GET">
    
             <p class="h3 text-center">FACULTY REPORT</p>       
            <table class="table table-bordered text-center">
                
                
                    <tr class="table-light">
                        <td>
                                <label for="">Department : </label>
                                <select class="custom-select" name="pre[]" required>
                                    <option selected disabled>Select Department</option>
                                    <option>CSE</option>
                                    <option>ECE</option>
                                    <option>ELEC</option>
                                </select>
                        </td>
                        <td>
                                <label for="">Course : </label>
                                <select class="custom-select" name="pre[]" required>
                                    <option selected disabled value="">Select Course</option>
                                    <option>BTECH</option>
                                    <option>MTECH</option>
                                    <option>Phd</option>
                                </select>
                        </td>
        
                        <td>
                                <label for="">Semester : </label>
                                <select class="custom-select" name="pre[]" required>
                                    <option selected disabled value="">Select Semester</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                        </td>
                    </tr>
        
                    <tr class="table-light">
                        <td>
                                <label for="">Subject Name : </label>
                                <select class="custom-select" name="pre[]" required>
                                    <option selected disabled value="">Select </option>
                                    <option>SubA</option>
                                    <option>SubB</option>
                                    <option>SubC</option>
                                </select>
                        </td>
        
                        <td colspan="2">
                                
                                
                        </td>
                    </tr>
        
                
            </table>
          <button class="btn btn-primary btn-block btn-lg">GET DETAILS</button>
        </form>
    </div>
    </div>



    <form action="remainingstudentreport.php" METHOD="GET">
    <div class="jumbotron pt-3 pb-3">
    <p class="h3 text-center">REMAINING STUDENT REPORT</p>
    <button class="btn btn-primary btn-block btn-lg" type="submit">GET REPORT</button>
    </div>
    </div> 
    </form>   
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