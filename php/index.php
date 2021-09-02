<?php 
include("connect.php");

function getData(){
    $data = array();
    $data[2]=$_POST['firstName'];
    $data[3]=$_POST['lastName'];
    $data[4]=$_POST['email'];
    $data[5]=$_POST['dob'];
    $data[6]=$_POST['phNum'];
    $data[7]=$_POST['desgn'];
    $data[8]=$_POST['gender'];
    $data[9]=$_POST['hobby'];
    return $data;
}

if(isset($_POST['insert'])){
    $info=getData();
    $insert= "INSERT INTO [user_info] (
    [firstName]
    ,[lastName]
    ,[email]
    ,[dob]
    ,[phNum]
    ,[desgn]
    ,[gender]
    ,[hobby]) VALUES ('$info[2]', '$info[3]', '$info[4]', '$info[5]', '$info[6]', '$info[7]', '$info[8]', '$info[9]')";
    $result = odbc_exec($connection, $insert);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form method="POST" name="signin-form">
  <div class="form-element">
    <label>First Name</label>
    <input type="text" name="firstName" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Last Name</label>
    <input type="text" name="lastName" required />
  </div>
  <div class="form-element">
    <label>Email</label>
    <input type="email" name="email" required />
  </div>
  <div class="form-element">
    <label>Date of Birth</label><br />
    <input type="date" name="dob" required />
  </div>
  <div class="form-element">
    <label>Telephone/Mobile</label>
    <input type="tel" name="phNum"  pattern="[0-9]{4}[0-9]{3}[0-9]{3}" required />
  </div>
  <div class="form-element">
    <label>Designation</label>
    <input type="text" name="desgn"  />
  </div>
  <div class="form-element">
    <label>Gender</label><br />
    <input type="radio" name="gender" id="male" value="Male" required />
    <label for="male">Male</label>
    <input type="radio" name="gender" id="female" value="Female" required />
    <label for="female">Female</label>
  </div>
  <div class="form-element">
    <label>Hobbies</label><br />
    <input type="checkbox" name="hobby" id="hobby1" value="Reading Books" data-valuetwo="1"  />
    <label for="hobby1">Reading Books</label>
    <input type="checkbox" name="hobby" id="hobby2" value="Drawing"  />
    <label for="hobby2">Drawing</label><br >
    <input type="checkbox" name="hobby" id="hobby3" value="Singing"  />
    <label for="hobby3">Singing</label>
    <input type="checkbox" name="hobby" id="hobby4" value="Coding"  />
    <label for="hobby4">Coding</label>
  </div>
  <button type="submit" name="insert" value="login">Submit</button>
</form>
</body>
</html>
