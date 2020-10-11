<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
</head>
<body>

<form  action="thanks.php"  method="post">
    <div>
        <label  for="lastname">Nom :</label>
        <input  type="text"  id="lastname"  name="lastname" required>
    </div>
    <div>
        <label  for="firstname">Prénom :</label>
        <input  type="text"  id="firstname"  name="firstname" required>
    </div>
    <div>
        <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="email" required>
    </div>
    <div>
        <label  for="phone">N° Télephone :</label>
        <input  type="number"  id="phone"  name="phone" required>
    </div>
    <div>
        <label for="select">Object du contact</label>
        <select name="subject-select" id="select"> Objet du contact
            <option value='' >Selectionnez un sujet
            <option>Ouvrir un compte
            <option>Demande de financement
            <option>Contacter votre conseiller
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message" required></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>

</form>

</body>
</html>



