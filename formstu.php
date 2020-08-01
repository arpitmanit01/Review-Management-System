<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <title>Student Form</title>
</head>


<body>
    
    <div class="container pt-3">
        <form action="savetodb.php" class="form-group" method="GET">

        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="3" class="text-center" >STUDENT FEEDBACK FORM(2019-2020)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
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
    
                <tr>
                    <td>
                            <label for="">Subject Name : </label>
                            <select class="custom-select" name="pre[]" required>
                                <option selected disabled value="">Select </option>
                                <option>Subject 1</option>
                                <option>Subject 2</option>
                                <option>Subject 3</option>
                            </select>
                    </td>
    
                    <td >
                            <label for="">Faculty : </label>
                            <select class="custom-select" name="pre[]" required>
                                <option selected disabled value="">Select</option>
                                <option>Prof A</option>
                                <option>Prof B</option>
                                <option>Prof C</option>
                            </select>
                    </td>
                    <td >   
                        <div class="form-group">
                            <label >Scholar No.</label>
                            <input type="text" class="form-control" name="scholarno" >
                            <small class="form-text text-muted">*Only to check Student Validity</small>
                        </div>
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
                    <th>5</th>
                    <th>4</th>
                    <th>3</th>
                    <th>2</th>
                    <th>1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="serial">1</td>
                    <td class="parameter">Ability to explain the concepts and principle of subject.</td>
                    <td class="point"><input type="radio" name="Q1" value=5></td>
                    <td class="point"><input type="radio" name="Q1" value=4></td>
                    <td class="point"><input type="radio" name="Q1" value=3></td>
                    <td class="point"><input type="radio" name="Q1" value=2></td>
                    <td class="point"><input type="radio" name="Q1" value=1></td>
                    
                </tr>
        
                <tr>
                    <td class="serial">2</td>
                    <td class="parameter">Knowledge Expertice and knowledge of teacher in teaching.</td>
                    <td class="point"><input type="radio" name="Q2" value=5></td>
                    <td class="point"><input type="radio" name="Q2" value=4></td>
                    <td class="point"><input type="radio" name="Q2" value=3></td>
                    <td class="point"><input type="radio" name="Q2" value=2></td>
                    <td class="point"><input type="radio" name="Q2" value=1></td>
                    
                </tr>
        
                
                <tr>
                    <td class="serial">3</td>
                    <td class="parameter">Ability to clear doubt in the class room and outside.</td>
                    <td class="point"><input type="radio" name="Q3" value=5></td>
                    <td class="point"><input type="radio" name="Q3" value=4></td>
                    <td class="point"><input type="radio" name="Q3" value=3></td>
                    <td class="point"><input type="radio" name="Q3" value=2></td>
                    <td class="point"><input type="radio" name="Q3" value=1></td>
                    
                </tr>
        
         
                <tr>
                    <td class="serial">4</td>
                    <td class="parameter">Ability to conclude concepts with examples.</td>
                    <td class="point"><input type="radio" name="Q4" value=5></td>
                    <td class="point"><input type="radio" name="Q4" value=4></td>
                    <td class="point"><input type="radio" name="Q4" value=3></td>
                    <td class="point"><input type="radio" name="Q4" value=2></td>
                    <td class="point"><input type="radio" name="Q4" value=1></td>
                    
                </tr>
        
         
                <tr>
                    <td class="serial">5</td>
                    <td class="parameter">Communication skills and clarity.</td>
                    <td class="point"><input type="radio" name="Q5" value=5></td>
                    <td class="point"><input type="radio" name="Q5" value=4></td>
                    <td class="point"><input type="radio" name="Q5" value=3></td>
                    <td class="point"><input type="radio" name="Q5" value=2></td>
                    <td class="point"><input type="radio" name="Q5" value=1></td>
                    
                </tr>
        
         
                <tr>
                    <td class="serial">6</td>
                    <td class="parameter">Punctuality and regularity in class.</td>
                    <td class="point"><input type="radio" name="Q6" value=5></td>
                    <td class="point"><input type="radio" name="Q6" value=4></td>
                    <td class="point"><input type="radio" name="Q6" value=3></td>
                    <td class="point"><input type="radio" name="Q6" value=2></td>
                    <td class="point"><input type="radio" name="Q6" value=1></td>
                    
                </tr>
        
         
                <tr>
                    <td class="serial">7</td>
                    <td class="parameter">Interaction and discussion with students.</td>
                    <td class="point"><input type="radio" name="Q7" value=5></td>
                    <td class="point"><input type="radio" name="Q7" value=4></td>
                    <td class="point"><input type="radio" name="Q7" value=3></td>
                    <td class="point"><input type="radio" name="Q7" value=2></td>
                    <td class="point"><input type="radio" name="Q7" value=1></td>
                    
                </tr>
        
         
                <tr>
                    <td class="serial">8</td>
                    <td class="parameter">Attitude towars students.</td>
                    <td class="point"><input type="radio" name="Q8" value=5></td>
                    <td class="point"><input type="radio" name="Q8" value=4></td>
                    <td class="point"><input type="radio" name="Q8" value=3></td>
                    <td class="point"><input type="radio" name="Q8" value=2></td>
                    <td class="point"><input type="radio" name="Q8" value=1></td>
                    
                </tr>
        
         
                <tr>
                    <td class="serial">9</td>
                    <td class="parameter">Monitoring students and creating interest on subject.</td>
                    <td class="point"><input type="radio" name="Q9" value=5></td>
                    <td class="point"><input type="radio" name="Q9" value=4></td>
                    <td class="point"><input type="radio" name="Q9" value=3></td>
                    <td class="point"><input type="radio" name="Q9" value=2></td>
                    <td class="point"><input type="radio" name="Q9" value=1></td>
                    
                </tr>
                <tr>
                    <td class="serial">10</td>
                    <td class="parameter">Timely evatualtion of internal assessment.</td>
                    <td class="point"><input type="radio" name="Q10" value=5></td>
                    <td class="point"><input type="radio" name="Q10" value=4></td>
                    <td class="point"><input type="radio" name="Q10" value=3></td>
                    <td class="point"><input type="radio" name="Q10" value=2></td>
                    <td class="point"><input type="radio" name="Q10" value=1></td>
                    
                </tr>
                <tr>    
                    <td colspan="7">
                        <p class="h5 text-center">Review and Comment for Overall Improvement</p>
                    
                    <div class="container d-flex justify-content-center">
                        <textarea name="review" cols="100" rows="5" ></textarea>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="7">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary">Submit</button>
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