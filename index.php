<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            
            background-image: url('img/bg4.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
           

            
            
        }
        div.bg {
                background: rgba(250, 250, 250, 0.6);
        }
      }
    </style>
</head>
<body>          
    <div class="container-fluid" >

                        
        <div class="row">
            <div class="col-sm-4">
                 
            </div>
            <div class="col-sm-7 bg">
                <form action="output.php" method="post">
                        <div class="card-header text center text-center btn-outline-info">
                            <h3>REGISTRATION FORM</h3>
                            <h5>Please fill up the form correctly</h5>
                
                        </div>  
                        <label >Full Name</label>
                        <!-- 1st row of form -->
                        <div class="form-row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name" name="fname" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Middle Name" name="mname" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
                                </div>
                            </div>
                        </div>

                        <!-- 2nd row of form -->
                        <div class="form-row">
                            <div class="col-sm-9">
                                <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Street Brgy City" 
                                name="address" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Civil status</label>
                                    <input type="text" class="form-control" placeholder="single" name="cvstatus" required>
                                </div>
                            </div>
                        </div>
                        <!-- 1st row of form -->
                        <div class="form-row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                <label for="">Date of Birth</label>
                                <input type="date" class="form-control" name="dob" required>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="">Place of Birth</label>       
                                    <input type="text" class="form-control" placeholder="Brgy. City" name="pob" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label>Gender</label>
                                <div class="form-group">
                                    <input type="radio" name="gender" value="male" required >male
                                    <input type="radio" name="gender" value="female" required>female
                                </div>
                            </div>
                        </div>
                        <!-- 3rd row of form -->
                        <div class="form-row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label for="">Email Address</label>
                                        <input type="email" class="form-control" placeholder="Name@mail.com" name="email"  required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label for="">Contact No.</label>
                                            <input type="text" class="form-control" placeholder="+63" name="contact"  required>
                                        </div>
                                    </div>
                                        <div class="col-sm-5">
                                        <div class="form-group">
                                        <label for="">Guardian</label>
                                            <input type="text" class="form-control" placeholder="Full Name of Guardian"
                                             name="guardian"  required>
                                        </div>
                                    </div>
                                </div>
                                <!-- 4th row of form -->
                                <div class="form-row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <label for="">Year Level</label>
                                                <select class="custom-select"name="yrlevel" required>
                                                    <option selected value="1styear">1st Year</option>
                                                    <option value="2ndyear">2nd Year</option>
                                                    <option value="3rdyear">3rd Year</option>
                                                    <option value="4thyear">4th Year</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <label for="">Course</label>
                                                <select class="custom-select"name="course" required>
                                                    <option selected value="BSIT">BSIT</option>
                                                    <option value="EMT">EMT</option>
                                                    <option value="TCM">TCM</option>
                                                    <option value="CPE">CPE</option>
                                                </select>
                                                </div>
                                                     <button type="submit" class="btn btn-info btn-lg btn-block" >REGISTER</button>
                                                   
                                            </div>
                                                <div class="col-sm-4">
                                                <div class="form-group">
                                                <label for="">School Year</label>
                                                    <input type="text" class="form-control" placeholder="yyyy-yyyy"
                                                    name="sy" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                             
                </form>

           </div>
            <div class="col-sm-1">
             
            </div>
        </div>
    </div>



     
  
</body>
</html>