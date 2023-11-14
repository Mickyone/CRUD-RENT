<?php include 'partials/header.php'

?>

<body>
    <h1>Formulaire</h1>
    <form action="./formulaire.php" method="POST">
        <input type="file" name="image" accept="image/*">
        <label for="id_card">ID_card :
        <input type="text" name="id_card" placeholder="Your ID card">
        </label>
        <label for="firstname">Firstname :
        <input type="text" name="firstname" placeholder="Your firstname">
        </label>
        <label for="lastname">Lastname :
        <input type="text" name="lastname" placeholder="Your lastname">
        </label>
        <label for="email">Email :
        <input type="email" name="email">
        </label>
        <label for="adress">Adress :
        <input type="adress" name="adress">
        </label>
        <label for="level">
            How long have you had your driving license?
            <input type="radio" name="level" value="newbie">less than two years
            <input type="radio" name="level" value="confirmed">more than two years
        </label>
        <label for="license">
            Select the licenses:
            License B <input type="checkbox" name="License[]" value="License B">
            License C <input type="checkbox" name="License[]" value="License C">
            License E <input type="checkbox" name="License[]" value="License E">
        </label>
        <input type="submit" name="submitted" value="submit">
    </form>
</body>

</html>