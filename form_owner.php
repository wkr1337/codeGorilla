<!DOCTYPE html>

<html>
    <head>
        <title>Mis Casa Es Su Casa</title>
        <?php include('./navigationBar.php'); ?>
</head>
     
    <body>
    </body>

<div id="form">
   <h2>Register form</h2>
        <p>Please fill out this form</p>
   
        <form class="phpform" action=form_mailer.php  method="post">
            First name:<br> <input class="phpform2" type="text" name="firstname"><br></br>
            Surname:<br> <input class="phpform2" type="text" name="surname"><br></br>
            Email:<br> <input class="phpform2" type="text" name="email"><br></br>
            Country:<br> <input class="phpform2" type="text" name="country"><br></br>
            City:<br> <input class="phpform2" type="text" name="city"><br></br>
            Address:<br> <input class="phpform2" type="text" name="address"><br></br>
            Telephone:<br> <input class="phpform2" type="text" name="telephone"><br></br>
            Gender:<br> <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <br>
            Do you have pets:<br> <input type="radio" name="pets" value="Yes">Yes    
            <input type="radio" name="pets" value="No">No
            <br>
            Do you allow pets?:<br> <input type="radio" name="pets_allowed" value="Yes">Yes    
            <input type="radio" name="pets_allowed" value="No">No
            <br>
            Do you smoke?:<br> <input type="radio" name="smoke" value="Yes">Yes    
            <input type="radio" name="smoker" value="No">No
            <br>
            Do you allow smokers?:<br> <input type="radio" name="smoker_allowed" value="Yes">Yes    
            <input type="radio" name="smoker_allowed" value="No">No
            <br>
            When do you want to rent out a room?
            <br>
            <textarea class="phpform2" name="stay" rows="5" cols="40" placeholder="From .. until .. " resize: none;></textarea><br></br>
            Do you have something else to add?
            <br>
            <textarea class="phpform2" name="comment" rows="5" cols="40"resize: none;></textarea><br></br>
           <input class="phpform2" type="hidden" name="form" value="owner"><br></br>
            <input type="submit">
        </form>
        </div>
    <br></br>  

    </body>
</html>
