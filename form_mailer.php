    <?php
    
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
        $comment = htmlspecialchars($_POST["comment"]);            
        $gender = htmlspecialchars($_POST["gender"]);
        $pets = htmlspecialchars($_POST["pets"]);
        $pets_allowed = htmlspecialchars($_POST["pets_allowed"]);
        $smoker = htmlspecialchars($_POST["smoker"]);
        $smoker_allowed = htmlspecialchars($_POST["smoker_allowed"]);
        $stay = htmlspecialchars($_POST["stay"]);
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
        $msg .= "Smokers allowed: " .$smoker_allowed . $br;;
        $msg .= "Duration of stay: " .$stay . $br;;
        $msg .= "Comment: " .$comment;
        
       mail("wro1986@live.nl", "Nieuwe woning beschikbaar!:  "  . $name, $msg);
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
            $comment = htmlspecialchars($_POST["comment"]);            
            $gender = htmlspecialchars($_POST["gender"]);
            $pets = htmlspecialchars($_POST["pets"]);
            $pets_allowed = htmlspecialchars($_POST["pets_allowed"]);
            $smoker = htmlspecialchars($_POST["smoker"]);
            $smoker_allowed = htmlspecialchars($_POST["smoker_allowed"]);
            $stay = htmlspecialchars($_POST["stay"]);
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
            $msg .= "Smokers allowed: " .$smoker_allowed . $br;;
            $msg .= "Duration of stay: " .$stay . $br;;
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
