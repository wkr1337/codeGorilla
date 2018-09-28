<!DOCTYPE html>

<html>
    <head>
        <title>Mis Casa Es Su Casa</title>
        <link rel="stylesheet"  href="style.css" type="text/css" media="all">
</head>
     
    <body>
    </body>
    <h2>Register form</h2>
        <p>Please fill out this form</p>
<div id="form1">
         <form class="phpform" action=form_mailer.php  method="post">
            First name:<br> <input class="phpform2" type="text" name="firstname"><br><br>
            Surname:<br> <input class="phpform2" type="text" name="surname"><br><br>
            Email:<br> <input class="phpform2" type="text" name="email"><br><br>
            Country:<br> <input class="phpform2" type="text" name="country"><br><br>
            City:<br> <input class="phpform2" type="text" name="city"><br><br>
            Address:<br> <input class="phpform2" type="text" name="address"><br><br>
            Telephone:<br> <input class="phpform2" type="text" name="telephone"><br><br>
            </div>
<div id="form2">
            Gender:<br>
            <select id="gender" name="gender">
            <option value="female" selected>Female</option>
            <option value="male" selected>Male</option>
            <option value="other" selected>Other</option>
</select>
            <br><br>
            Do you have pets:<br><select id="pets" name="pets">
            <option value="Yes" selected>Yes</option>
            <option value="No" selected>No</option>
            </select>
            <br><br>

            Do you mind pets in the house?<br> <select id="pets_allowed" name="pets_allowed">
            <option value="Yes" selected>Yes</option>
            <option value="No" selected>No</option>
            </select>
            <br><br>
            
            Do you smoke?:<br> 
            <select id="smoker" name="smoker">
            <option value="Yes" selected>Yes</option>
            <option value="No" selected>No</option>
            </select>
            <br><br>

            Do you mind smokers in the house?<br> 
            <select id="smoking" name="smoking_allowed">
            <option value="Yes" selected>Yes</option>
            <option value="No" selected>No</option>
            </select>
            <br><br>

            Which period you would like te rent a room in Groningen?
            <br>
            Start date:<br><input type="date" name="stay" width=50%><br>
            End date:<br><input type="date" name="stay_end" width=50%>
           <!-- <textarea class="phpform2" name="stay" rows="5" cols="40" placeholder="From .. until .. " resize: none;></textarea> --><br></br>
           
            Do you have something else to add?
            <br>
            <textarea class="phpform2" name="comment" rows="5" cols="40"resize: none;></textarea><br></br>
           <input class="phpform2" type="hidden" name="form" value="tenant"><br></br>
            <input type="submit">
        </form>
</div>
    <br></br>  

    </body>
</html>
