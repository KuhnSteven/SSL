<?
?><!-- <form id="loginForm" action="/home/login" method="POST" enctype="">
<form id="loginForm" action="/auth/upload" method="POST" enctype="multipart/formdata"> -->
<form id="loginForm" action="/auth/login" method="POST" enctype="">
    <!-- <input type="file" name="myFile"> -->
    <label for="email">Email Address:</label>
    <input type="text" name="email" id="email" placeholder="Enter email">
    <label for="pass">Password:</label>
    <input type="password" name="pass" id="pass" placeholder="Enter password">
    
    <!-- <div>
        <label for="exampleInputEmail1">Enter Captcha </label>
        <input name="captcha" type="captcha" id="captcha" placeholder="">
    </div> -->
    <input type="submit" name=""> 
</form>