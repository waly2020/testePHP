<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>

<body>
    <form action="contact.php" method="POST">
        <input type="text" id="surname" name="surname" placeholder="surname">
        <input type="email" name="email" id="email" placeholder="email">
        <select name="sexe" id="sexe" value="Homme">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="message"></textarea>
        <button type="submit">send</button>
    </form>
</body>

</html>