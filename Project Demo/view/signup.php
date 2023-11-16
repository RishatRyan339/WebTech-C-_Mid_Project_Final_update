<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="../controller/signupCheck.php" enctype="">
            <fieldset>
                <legend>Signup</legend>
                Username: <input type="text" name="Name" value="" /> <br>
                Password: <input type="password" name="Password" value="" /> <br>
                Email: <input type="email" name="Email" value="" /> <br>
        
                <label for="User_type">User Type:</label>
                  <select name="User_type">
                  <option value="FireFighter">FireFighter</option>
                  <option value="Medic">Medic</option>
        </select><br><br>
                <input type="submit" name="submit" value="Submit" />
            </fieldset>
        </form>
</body>
</html>