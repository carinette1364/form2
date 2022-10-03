<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="form.css" rel="stylesheet">
    <title>Ex-form-php</title>
</head>

<body>

    <?php
    var_dump($_POST); 

    $errors = [];
    $user_lastname = $user_firstname = $user_mail = $user_tel = $user_music = $user_message = '';

    function cleanPost($datapost) {
        $datapost = trim($datapost);
        $datapost = stripslashes($datapost);
        return htmlspecialchars($datapost);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $user_lastname = cleanPost($_POST['user_lastname']);
        $user_firstname = cleanPost($_POST['user_firstname']);
        $user_mail = cleanPost($_POST['user_mail']);
        $user_tel = cleanPost($_POST['user_tel']);
        $user_music = cleanPost($_POST['user_music']);
        $user_message = cleanPost($_POST['user_message']);
        
        if(preg_match("/^[A-Z][a-zA-Z -]+$/", $user_lastname) == false) 
            $errors[] = '<p>ce nom : ' . $user_lastname . ' n\'est pas valide.</p>';
        if(preg_match("/^[A-Z][a-zA-Z -]+$/", $user_firstname) == false) 
            $errors[] = '<p>ce prénom : ' . $user_firstname . ' n\'est pas valide.</p>';
        if(filter_var($user_mail, FILTER_VALIDATE_EMAIL) == false) 
            $errors[] = '<p>cet email : ' . $user_mail . ' n\'est pas valide.</p>';
        if(preg_match("/^[0-9]{10}+$/", $user_tel) == false) 
            $errors[] = '<p>ce numéro : ' . $user_tel . ' n\'est pas valide.</p>';
        if(empty($user_music)) 
            $errors[] = '<p>vous n\'avez pas choisi d\'options.</p>';
        if(empty($user_message)) 
            $errors[] = '<p>vous n\'avez pas écrit de message.</p>';
        if (empty($errors)) {
            echo '<p>Félicitations, le formulaire est bien rempli!</p>';
            ?>
            <p>
                Merci <span><?= $_POST['user_firstname'] ?></span> <span><?= $_POST['user_lastname'] ?></span> de nous avoir contacté
                à propos de <span><?= $_POST['user_music'] ?></span>, votre style de musique préféré.</br>
                Un de nos conseillers musique vous contactera soit à l'adresse <span><?= $_POST['user_mail'] ?></span> soit par téléphone
                au <span><?= $_POST['user_tel'] ?></span> dans les plus brefs délais pour traiter votre demande :</br>
                <span>"<?= $_POST['user_message'] ?>"</span>
            </p>
            <?php
        }else{
            // var_dump($errors);
            var_dump(($_POST));
            echo '<p>Le formulaire n\'est pas correctement renseigné!<br>
            Veuillez prendre connaissance des champs incorrects: </p><br>' . PHP_EOL;
            echo '<ul>';
            foreach ($errors as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '</ul>';
        }
    };

    ?>



       



</body>

</html>