<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="online,code,editor,html,css,php,javascript">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
     <title> GREAT Code Editor | Version 1.0 </title>
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
<style>
.footer{color:white;background:black;padding:9px;margin-top:5px;}
.footer a{color:white;}
</style> 

    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    </head>
<?php
$file = fopen("great.html" , "w");
$string = $_POST['text'];
fwrite($file,$string);
fclose($file);


?>
   
 <body>
<!-- code by kazi mohammed foysal. (kajimdfoysal06@gmail.com) -->
<center>		
<div class="container">
		<div class="row text-center">
			<h1 class="col-lg-12 col-md-12 col-sm-12 text-center font-weight-bolder m-2">Great Online Code Editor</h1>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 well">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<form style="margin:0px" action="index.php" method="post" target="view">
						<div class="form-group">
							<p><input style="font-family:verdana;" class="btn btn-success" name="ok" type="submit" value="Edit and Hit"> কোড লিখে "Edit and Hit" বাটনে ক্লিক করুন</p>
							<textarea class="form-control" width="100%" rows="18" height="400px" name="text"></textarea>
						</div>
						</center>
					</form>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<p class="text-info">Output:</p>
<br/>				
<?php include 'great.html' ; ?>
				</div>
<br/>
			</div>
		</div>
		<div class="row footer mt-2">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<p>Copyright &copy; <a href="/">GREAT</a><?php echo date("Y") ?> </p>
			</div>
		</div>
	</div>
    </body>
</html>
