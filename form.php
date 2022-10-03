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

    <h1>Contact</h1>

    <form action="thanks.php" method="POST">
        <div class="form-label-input">
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="user_lastname" size="32" placeholder="Dupont">
        </div>
        <div class="form-label-input">
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="user_firstname" size="32" placeholder="Bernard">
        </div>
        <div class="form-label-input">
            <label for="mail">E-mail&nbsp;:</label>
            <input type="email" id="mail" name="user_mail" size="32" placeholder="bernard@gmail.com">
        </div>
        <div class="form-label-input">
            <label for="tel">Téléphone&nbsp;:</label>
            <input type="tel" id="tel" name="user_tel" size="32" placeholder="0655112288">
        </div>
        <div class="form-label-input">
            <label for="music-select">Votre style de musique:</label>
            <select name="user_music" id="music-select">
                <option value="">--Merci de choisir une option--</option>
                <option value="Rock">Rock</option>
                <option value="Jazz">Jazz</option>
                <option value="Pop">Pop</option>
                <option value="Soul">Soul</option>
                <option value="Reggae">Reggae</option>
                <option value="Classique">Classique</option>
            </select>
        </div>
        <div class="form-label-input">
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" rows="5" cols="27"></textarea>
        </div>
        <div class="button" class="form-label-input">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>

</body>

</html>