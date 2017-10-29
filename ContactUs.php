<?php

include("Header.php");


?>


<html>
<head>
<title>Contact Us</title>
<link href="csscontact/style.css" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/1.css" type="text/css" media="screen,projection" />
<script src="csscontact/jquery.min.js"></script>
<script>
$(function(){
    $('.green_button').click(function(){
        var status = false;
        $('.contactForm input,.contactForm select,.contactForm textarea').each(function(){
            var me = $(this);
            if($(this).val()==''){
                me.css('border','1px solid red');
                status = true;
            }else{
                me.css('border','1px solid #eee');
            }
        });
        console.log(status);
        if(status){
            $('.error').html('<span style="color:red">Alert: All fields are mandatory</span>');
        }else{
            $('.error').html('<span style="color:green">Form submited sucessfully</span>');
            /*$.ajax({
                url: "sendMail.php",
                method:"POST",
                type:'JSON',
                data:$('.contactForm').serializeArray(),
                success: function(result){
                    console.log(result);
                }}
            );*/
        }
    });
});
</script>
</head>
<body id="global_page_condo-info-contact" >
<header>
	<nav class="nav-top inner-page">
	</nav>
</header>
<div class="container">
    <form method="post" class="contactForm"><div><div>
        <p class="form-description">If you want to ask us a question directly, please submit your message with the following form.</p>
        <p class="error"><p>
<div class="form-elements">
<div id="name-wrapper" class="form-wrapper"><div id="name-label" class="form-label"><label for="name" class="required">Name</label></div>
<div id="name-element" class="form-element">
<input type="text" name="name" id="name" value="" notempty="1"></div></div>
<div id="email-wrapper" class="form-wrapper"><div id="email-label" class="form-label"><label for="email" class="required">Email Address</label></div>
<div id="email-element" class="form-element">
<input type="text" name="email" id="email" value="" notempty="1"></div></div>
<div id="about-wrapper" class="form-wrapper"><div id="about-label" class="form-label"><label for="about" class="required">What is your query about?</label></div>
<div id="about-element" class="form-element">
<select name="about" id="about">
    <option value="1" label="TTC" selected="selected">TTC</option>
    <option value="2" label="MUNICIPALITY">MUNICIPALITY</option>
    <option value="3" label="TORONTO POLICE">TORONTO POLICE</option>
    <option value="4" label="CITY FEEDBACK">CITY FEEDBACK</option>
</select></div></div>
<div id="body-wrapper" class="form-wrapper"><div id="body-label" class="form-label"><label for="body" class="required">Message</label></div>
<div id="body-element" class="form-element">
<textarea name="body" id="body" cols="33" rows="6" notempty="1"></textarea></div></div>
<div id="submit-wrapper" class="form-wrapper"><div id="submit-label" class="form-label">&nbsp;</div><div id="submit-element" class="form-element">
<button name="submit" id="submit" type="button" class="green_button">Send Message</button></div></div></div></div></div></form>
<p>
    <b>Contact Information:</b><br>
    Enrolment Service Centennial College<br>
    P.O Box 631, Station A<br>
    Toronto, ON,M1K 5E9<br>
    <a href="mailto:sucess@centennialcollege.ca">sucess@centennialcollege.ca</a><br>
    [416-289-5279]<br>
    <b>Tel:</b><br>
    416-289-5000(Mon. to Fri. 9:00am to 4:30pm Est)<br>
    toll-free in Ontario 1-800-268-4419  
</p>
</div>
</body>
</html>