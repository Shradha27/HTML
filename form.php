<!doctype html>
<html>
<head>
<title> Appointment Page </title>
<link rel="stylesheet" type= " text/css" href = "style.css" >
</head>
<body>
<div class = "header" >
<h2> Form Page </h2>
</div>
<form method = "post" action = "form.php">
<div class = "input-group" >
<label>Patient's Name </label>
<input type = "text" name= "name">
</div>
<div class = "input-group" >
<label>Location </label>
<input type = "text" name= "Location" >
</div>
<div class = "input-group" >
<label>Age </label>
<input type = "integer" name= "Age" >
</div>
<div class = "input-group" >
<label>Symptom 1 </label>
<input type = "text" name= "symptom" >
</div>
<div class = "input-group" >
<label>Symptom 2 </label>
<input type = "text" name= "symptom" >
</div>
<div class = "input-group" >
<label>Symptom 3 </label>
<input type = "text" name= "symptom" >
</div>
<div class = "input-group" >
<button type = "submit" name = "login" class = "btn"> Submit </button>
</div>
<p>
Not yet a member? <a href = "register.php"> signup </a>
</p>



</form>
</body>
</html>
