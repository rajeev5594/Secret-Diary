<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Secret Diary</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<style>
.login-form {
    width: 340px;
    margin: 120px auto;
  	font-size: 15px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
body {
    background-image: url('img.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}
h2,p{
    color: #ffffff;
}
.clearfix,.sign{
   text-align: center; 
   margin-top: 10px;
   padding: 5px;
}
h4 {
  border: 1px solid green;
  padding: 5px;
}
#diary{
width: 100%;
margin-top: 20px;
}
</style>
<style>
.input-group-addon{color:#ff0000; background-color: #ffffff;}
</style>
</head>
<body>
    <!-- header section-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
                <h2 style="color: black;font-size:30px">Secret Diary</h2>
            </div>
             <a href="logout.php"><h4 style="color: green;font-size:15px ;float: right;">Logout</h4></a>
            </div>
    </nav>
    <!-- end header section -->
    <div class="container-fluid">
<div class="form-group">
    <textarea  class="form-control" rows="22" id="diary"></textarea>
</div>
</div>

<script type="text/javascript">
$('#diary').bind('input propertychange', function() {

$.ajax({
  method: "POST",
  url: "save_post.php",
  data: { content: $("#diary").val()}
})
  // .done(function( msg ) {
  //   alert( "Data Saved: " + msg );
  // });


});
</script>
</body>
</html> -->