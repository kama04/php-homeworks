<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Резюме</title>
</head>
<body>
<form action="/form.php" method="post" enctype="multipart/form-data">


    <label for="fname">Фамилия:</label><br>
    <input type="text" id="fname" name="fname"><br>

    <label for="lname">Имя:</label><br>
    <input type="text" id="lname" name="lname"><br>

    <label for="oname">Отчество:</label><br>
    <input type="text" id="oname" name="oname"><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>

    <label for="telefon">Телефон:</label><br>
    <input type="number" id="telefon" name="telefon"><br>

    <p>О себе: <br>
        <textarea name="info" maxlength="400"></textarea>
    </p>

    <p><input type="file" name="photo" multiple accept="image/*,image/jpeg">
    <p>Skils</p>
    <input type="checkbox" id="html" name="fav_language" value="HTML">
    <label for="html">HTML</label><br>
    <input type="checkbox" id="css" name="fav_language" value="CSS">
    <label for="css">CSS</label><br>
    <input type="checkbox" id="javascript" name="fav_language" value="JavaScript">
    <label for="javascript">JavaScript</label><br>
    <input type="checkbox" id="PHP" name="fav_language" value="PHP">
    <label for="PHP">PHP</label><br>

    <p>English Skils</p>
    <input type="radio" id="basic" name="language" value="Basic">
    <label for="basic">Basic (базовый)</label><br>
    <input type="radio" id="intermediate" name="language" value="Intermediate">
    <label for="intermediate">Intermediate (средний)</label><br>
    <input type="radio" id="advanced" name="language" value="Advanced">
    <label for="advanced">Advanced (продвинутый)</label><br>
    <input type="radio" id="fluent" name="language" value="Fluent">
    <label for="fluent">Fluent (свободное владение)</label><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>