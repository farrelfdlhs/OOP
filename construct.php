<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Form Login</legend>
        <form action="form.php" method="POST">
            <label for="">Username</label>
            <input type="text" name="user" required>
            <label for="">Password</label>
            <input type="password" name="pass" required>
            <input type="submit" value="Proses" name="sbmt">
        </form>
    </fieldset>
</body>
</html>