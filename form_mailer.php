    <?php
    $root = dirname(__FILE__);
   include("$root/logInSql/register.php");
    $form =  ($_POST["form"]);

if ($form == 'owner') {
    if (!empty($_POST)) {
         // email bericht:
        $br = "\r\n";
        $firstname = htmlspecialchars($_POST["firstname"]);
        $surname = htmlspecialchars($_POST["surname"]);
        $email = htmlspecialchars($_POST["email"]);
        $city  = htmlspecialchars($_POST["city"]);
        $country = htmlspecialchars($_POST["country"]);
        $address = htmlspecialchars($_POST["address"]);
        $telephone = htmlspecialchars($_POST["telephone"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $pets = htmlspecialchars($_POST["pets"]);
        $pets_allowed = htmlspecialchars($_POST["pets_allowed"]);
        $smoker = htmlspecialchars($_POST["smoker"]);
        $smoking_allowed = htmlspecialchars($_POST["smoking_allowed"]);
        $stay = htmlspecialchars($_POST["stay"]);
        $stay_end = htmlspecialchars($_POST["stay_end"]);
        $comment = htmlspecialchars($_POST["comment"]);

        //Dit is het bericht dat je ontvangt.
        $msg = date('Y-m-d H:i:s') . $br;    
        $msg .= "Form: Tenant" . $br;        
        $msg .= "Name: " . $firstname . " " . $surname . $br;
        $msg .= "Email: " .$email . $br;
        $msg .= "Country: " .$country . $br;
        $msg .= "City: " .$city . $br;
        $msg .= "Address: " .$address . $br;
        $msg .= "Telephone: " .$telephone . $br;
        $msg .= "Comment: " .$comment . $br;
        $msg .= "Gender: " .$gender . $br;;
        $msg .= "Pets: " .$pets . $br;;
        $msg .= "Pets allowed: " .$pets_allowed . $br;;
        $msg .= "Smoker: " .$smoker . $br;;
        $msg .= "Smoking allowed: " .$smoking_allowed . $br;;
        $msg .= "Begin date: " .$stay . $br;;
        $msg .= "End date: " .$stay_end . $br;;
        $msg .= "Comment: " .$comment;
        
       mail("wro1986@live.nl", "Nieuwe woning beschikbaar!:  "  . $msg);
       // mail($email,"Your room is received!  . $name, $msg");
       echo "Thanks, your room is placed!";
       
    }

    }
    
    else if ($form=='tenant'){
        if (!empty($_POST)) {
            // email bericht:
            $br = "\r\n";
            $firstname = htmlspecialchars($_POST["firstname"]);
            $surname = htmlspecialchars($_POST["surname"]);
            $email = htmlspecialchars($_POST["email"]);
            $city  = htmlspecialchars($_POST["city"]);
            $country = htmlspecialchars($_POST["country"]);
            $address = htmlspecialchars($_POST["address"]);
            $telephone = htmlspecialchars($_POST["telephone"]);
            $gender = htmlspecialchars($_POST["gender"]);
            $pets = htmlspecialchars($_POST["pets"]);
            $pets_allowed = htmlspecialchars($_POST["pets_allowed"]);
            $smoker = htmlspecialchars($_POST["smoker"]);
            $smoking_allowed = htmlspecialchars($_POST["smoking_allowed"]);
            $stay = htmlspecialchars($_POST["stay"]);
            $stay_end = htmlspecialchars($_POST["stay_end"]);
            $comment = htmlspecialchars($_POST["comment"]);
    
            //Dit is het bericht dat je ontvangt.
            $msg = date('Y-m-d H:i:s') . $br;    
            $msg .= "Form: Tenant" . $br;        
            $msg .= "Name: " . $firstname . " " . $surname . $br;
            $msg .= "Email: " .$email . $br;
            $msg .= "Country: " .$country . $br;
            $msg .= "City: " .$city . $br;
            $msg .= "Address: " .$address . $br;
            $msg .= "Telephone: " .$telephone . $br;
            $msg .= "Comment: " .$comment . $br;
            $msg .= "Gender: " .$gender . $br;;
            $msg .= "Pets: " .$pets . $br;;
            $msg .= "Pets allowed: " .$pets_allowed . $br;;
            $msg .= "Smoker: " .$smoker . $br;;
            $msg .= "Smoking allowed: " .$smoking_allowed . $br;;
            $msg .= "Begin date: " .$stay . $br;;
            $msg .= "End date: " .$stay_end . $br;;
            $msg .= "Comment: " .$comment;
            
           echo "Thanks, your request is placed!<br>";
    
            mail("wro1986@live.nl", "Nieuwe woning beschikbaar!:  "  . $name, $msg);
           // mail($email,"Your room is received!  . $name, $msg");
    }
}
    else {
        echo "Error!";
    }

    ?>
<br>
<a href="index.php">Back to the homepage</a>
