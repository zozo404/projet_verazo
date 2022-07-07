<?php
// try {

//     $connexion = new PDO("mysql:host=$servername;dbname=$dbname;port=3306;charset=utf8", $username);    
//     $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
// } catch(PDOException $e){

//     echo 'Echec de connexion : ' . $e->getMessage(); 

// }
//envoie de mail   
if (isset($_POST["formText"])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= "From: verazosengo@gmail.com" . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h2>Message envoyé depuis le formulaire contact de verazo island</h2>
        <p style="font-size:17px;"><b>Nom: </b>'. $_POST['name'].'<br>
        <p style="font-size:17px;"><b>Email: </b>' . $_POST['email'] . '<br>
        <br>
        <b style="font-size:17px;">Message: </b><br><br><p style="font-size:18px;">' . ($_POST['formText']) . '</p>';

    $retour = mail("zozoydev@gmail.com", 'Envoi depuis formulaire Contact', $message,$entete);
       // echo "<p>Votre mail à bien été envoyé";
       header('Location: index.php#footer_container');
       exit;
    
    }
    
?>
