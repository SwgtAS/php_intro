<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application form</title>
    <style>
        body{
            font-size: 20px;
            background: #000;
        }
        #boxExtern{
            position: relative;
            margin: 10% 40% 0% 40%;

            border: 2px solid black;
            border-radius: 5px;

            background-color: rgb(0, 191, 255);
            color: rgb(255, 255, 255);
            padding: 0 0 0 40px;
        }
        
    </style>
</head>
<body>
    <div id="boxExtern">
        <p>COMPETITORS REGISTRATION FORM</p>
        <form action="script.php" method="post">
            <p>Your name: <input type="text" name="name"/></p>
            <p>Your age: <input type="text" name="age"></p>
            <p><input type="submit" value="Submit competitor data"></p>
        </form>
    </div>
</body>
</html>