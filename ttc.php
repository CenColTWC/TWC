<?php
include("Header.php");
include("connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Together We Can </title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/1.css" type="text/css" media="screen,projection" />

</head>
<body>
<div id="content">
	<h2><Strong>TTC</Strong></h2>
	<p>In association with �Together we can� we are here to serve you better. Your comfort and convenience with TTC is our priority. Let us know if you witnessed any issue or experienced any inconvenience with our services.
Our motive is to provide you efficient and comfortable journey within confined time constraints. Report your issues or suggest your ideas, anonymously or by becoming a registered user of this website. With your cooperation we will be able to perform better and serve you better.
 <br>
Contact Details in case of Emergency:    </br>
Contact Numbers:       </br>
Email:       </br>
Emergency Contact:    </br>
</p>

<section class="container">		
        
<div id="login">
<form action="" method="post" name="ttcUser" onsubmit='return validated()'> 
<center>                                 
<caption>
 <table border="0" cellpadding="1" width="90%">
   <tr>
     	<td width="200"><h4><b>Subject</td>
     	<td><div class="col-md-11">
		   <select name="ttcIssueSubject" class="form-control">
			 <option value="0">Select the subject</option>         
		   </select></td>
   	</tr>
	<tr>		
     	<td><h4><b>Region</td>
     	<td><div class="col-md-11">			
		   <select name="region" class="form-control">
			   <option value="0">Select the Region of the issue</option> 
			   <?php
				//execute the SQL query and return records
				$result = @mysql_query("SELECT * FROM region");

				//fetch tha data from the database 
				while ($row = @mysql_fetch_array($result)) 
				{
				?>			
			 		<option value="<?= $row{'Region_ID'}?>"><?= $row{'Region_Name'}?></option>
			    <?php
				}
			    ?>
		   </select></td>
   	</tr>
	<tr>
	  	<td><h4><b>City</td>
	  	<td><div class="col-md-11">
		   <select name="city" class="form-control">
			 <option value="0">Select the city</option>         
		   </select></td>
	</tr>
	<tr>
		 <td width="260"><h4><b>Date</td>
		 <td><div class="col-md-11"> <input name="ttcDate" type="date" value="2017-01-01"  class="form-control"/></td>
	</tr>
 	<tr>
		 <td width="260"><h4><b>Time</td>
		 <td><div class="col-md-11"> <input name="ttcTime" type="time" value="2017-01-01"  class="form-control"/></td>
	</tr>
	 <tr>
		 <td><h4><b>TTC Type</td>
		 <td><div class="col-md-11">
		   <select name="ttcType" class="form-control">
			 <option value="0">Select the TTC type</option>         
		   </select></td>
	 </tr>
	 <tr>
		 <td><h4><b>TTC Route</td>
		 <td><div class="col-md-11">
		   <select name="city" class="form-control">
			 <option value="0">Select the route</option>         
		   </select></td>
	 </tr>
	 <tr>
		 <td><h4><b>TTC Stop Name</td>
		 <td><div class="col-md-11">  <input type="text" name="ttcstopname" maxlength="10" placeholder="TTC Stop Name" class="form-control"></td>
	 </tr>
	 <tr>
		 <td><h4><b>TTC Transport Number</td>
		 <td><div class="col-md-11">  <input type="text" name="ttctransno" maxlength="10" class="form-control"></td>
	 </tr>
	 <tr>
		 <td><h4><b>Description</td>
		 <td><div class="col-md-11"><textarea rows="4" cols="50">Detailed Description</textarea></td>
	 </tr>
	 <tr align="center">
			<td colspan=2 align="center"><input type="submit" name="btnSubmit" 
value="Report" class="btn btn-two" width="200">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="btnReset" value="Reset" class="btn btn-two"></td>
	 </tr> 
</table>

 </form>

</div> 
    
</section>
</body>
	 </html>
<?php 
	//close the connection
	@mysql_close($con);
?>