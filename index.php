<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
    </head>
    <body>
        <h1>PHP/MySQL POC</h1>
        <h2>Registration Form</h2>
        <form action="connect.php" method="POST">
            <label for="name">Name:</label><br>
            <input type='text' name='name' id='name' required /><br><br>

            <input type='submit' name='submit' id='submit' value='Register' />
        </form>
    </body>
</html>