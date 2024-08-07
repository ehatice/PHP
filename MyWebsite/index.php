<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="formhandler.php" method="POST">
            <label for="number">number:</label>
            <input required id="number" type="integer" name="number" placeholder="Number...">
            <br>
            <label for="firstname">First Name:</label>
            <input  id="firstname" type="text" name="firstname" placeholder="First Name...">
            <br>

            <label for="lastname">Last Name:</label>
            <input id="lastname" type="text" name="lastname" placeholder="Last Name...">
            <br>

            <label for="favouritepet">Favourite Pet:</label>
            <select id="favouritepet" name="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
            <br>

            <button type="submit" name="submit">Submit</button>
        </form>
    </main>
</body>
</html>
