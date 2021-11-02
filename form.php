<!DOCTYPE html>
<html>

<head>
    <title>Formulaire de contact</title>
</head>

<body>
    <form action="thanks.php" method="post">
        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="user_lastname">
        </div>
        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="user_firstname">
        </div>
        <div>
            <label for="mail">E-mail :</label>
            <input type="email" id="mail" name="mail">
        </div>
        <div>
            <label for="tel">Téléphone :</label>
            <input type="text" id="tel" name="tel">
        </div>
        <div>
            <label for="subject">Sujet :</label>
            <select name="subject" id="subject-select">
                <option value="">--Veuillez sélectionner une option--</option>
                <option value="php">PHP</option>
                <option value="css">CSS</option>
                <option value="html">HTML</option>
                <option value="javascript">Javascript</option>
                <option value="sql">MySQL</option>
                <option value="angular">Angular</option>
            </select>
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </form>
</body>
</html>