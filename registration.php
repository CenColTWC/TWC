<?php

include("Header.php");


?>
<!DOCTYPE html>
<html lang="en">
<script language="JavaScript">
        function validated(){
            var name = document.s.name.value;
            var add = document.s.add.value;
            var city = document.s.city.value;
            var email = document.s.email.value;
            var mobno = document.s.mobno.value;
            var sq = document.s.sq.value;
            var sa = document.s.sa.value;
            var username = document.s.username.value;
            var pass = document.s.pass.value;
            var pass2 = document.s.pass2.value;
                        
            if(name=="")
            {   window.alert("Name is blank!");       document.s.name.focus(); return false;   }
            if(add=="")
            {   window.alert("Address is blank!");       document.s.add.focus(); return false;   }
            if(city=="")
            {   window.alert("City is blank!");       document.s.city.focus(); return false;   }
            if(email=="")
            {   window.alert("Email is blank!");       document.s.email.focus(); return false;   }
            if(mobno=="")
            {   window.alert("Mobile no is blank!");       document.s.mobno.focus(); return false;   }
            if(sq=="")
            {   window.alert("Security question is blank!");       document.s.sq.focus(); return false;   }
            if(sa=="")
            {   window.alert("Security answer is blank!");       document.s.sa.focus(); return false;   }
            if(username=="")
            {   window.alert("User name is blank!");       document.s.username.focus(); return false;   }
            if(pass=="")
            {   window.alert("Password is blank!");       document.s.pass.focus(); return false;   }
            if(pass2=="")
            {   window.alert("Confirm password is blank!");       document.s.pass2.focus(); return false;   }
            if(pass !=pass2){    
                window.alert("Password esdonot match!");
                return false;
            }
}
</script>
<body>

<section class="container">		
        
<div id="login">
<form action="" method="post" name="s" onsubmit='return validated()'>
 
<center>   
                               
<caption>
 <table border="0" cellpadding="1" width="50%">

<tr>
 <td width="260"><h4><b>Full Name</td>
 <td><div class="col-md-11">  <input type="text" name="name" maxlength="60" placeholder="Your Full Name" class="form-control"></td>
 </tr>
 <tr>
 <td><h4><b>Address</td>
 <td><div class="col-md-11">  <input type="text" name="add" maxlength="60" placeholder="Your Address" class="form-control"></td>
 </tr>
 <tr>
 <td><h4><b>City</td>
 <td><div class="col-md-11">  <input type="text" name="city" maxlength="20" placeholder="Your City" class="form-control"></td>
 </tr>
 <tr>
 <td><h4><b>Email Id</td>
 <td><div class="col-md-11">  <input type="text" name="email" maxlength="40" placeholder="Your Email Id" class="form-control"></td>
 </tr>
 <tr>
 <td><h4><b>Mobile Number</td>
 <td><div class="col-md-11">  <input type="text" name="mobno" maxlength="10" placeholder="Your Mob No" class="form-control"></td>
 </tr>
 <tr>
 <td>  <h4><b>Security Question</td>
 <td>
                                 <div class="col-md-11">  
                                <select name="sq" class="form-control">
                                        <option value="What is your child hood name?">What is your child hood name?</option>
                                        <option value="What is your uncle name?">What is your uncle name?</option>
                                        <option value="What is your native place?">What is your native place?</option>
                                        <option value="What is your pat name?">What is your pet name?</option>
                                        <option value="What is your favorite cricketer?">Who is your favorite author?</option>
                                        <option value="Who is your first teacher?">Who is your first teacher?</option>
                                        
                                </select>

                             
 </td>
 </tr>
 <tr>
 <td><h4><b>Security Answer</td>
 <td><div class="col-md-11">  <input type="text" name="sa" maxlength="10" placeholder="Your Security Answer" class="form-control"></td>
 </tr>
 <tr>
 <td><h4><b>User Name</td>
 <td><div class="col-md-11">  <input type="text" name="username" maxlength="60" placeholder="Your User Name" class="form-control"></td>
 </tr>
 <tr><td><h4><b>Password</td><td>
 <div class="col-md-11">  
 <input type="password" name="pass" maxlength="10" placeholder="Your Password" class="form-control" size="50">

 </td></tr>

 <tr><td><h4><b>Confirm Password</td><td>
 <div class="col-md-11">  
 <input type="password" name="pass2" maxlength="10" placeholder="Confirm Password" class="form-control">

 </td></tr>

 <tr align="center"><td colspan=2 align="center"><input type="submit" name="submit" 
value="Register" class="btn btn-two"></td></tr> 
</table>

 </form>

</div> 
    
</section>
</body>