<?php

if($model->hasErrors()) {
    var_dump($model->getErrors());
} ?>


<h1>Welcome to our Company!!!</h1>

<form method="post">
    
    <p>First Name</p>
    <input name="firstName" type="text">
    <br><br>
    
    <p>Last Name</p>
    <input name="lastName" type="text">
    <br><br>
    
    <p>Middle Name</p>
    <input name="middleName" type="text">
    <br><br>
    
    <p>Email</p>
    <input name="email" type="text">
    <br><br>
    
    <input type="submit">
   
</form>
