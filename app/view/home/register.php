<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ; ?></title>
</head>
<body>
    <form action="registeration" method="post">
        <input type="text" name="username" placeholder="your name">
        <input type="email" name="email" placeholder="your email">
        <input type="password" name="password" placeholder="your password">
        <input type="submit" value="submit">
    </form>
</body>
</html>