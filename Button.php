
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularz</title>
</head>
<body>
    <form action="form_radio.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="CSS" name="fav_language" value="CSS">
        <label for="CSS">CSS</label><br>
        <input type="radio" id="JS" name="fav_language" value="JS">
        <label for="JS">JS</label><br>
        <input type="submit">
    </form>
</body>
</html>
