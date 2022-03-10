<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    
    <div class="background">
        <div class="log-part">
            <form method="POST" action="save.php">
                <label class="name" for="name">Name: <input name="name" type="text" placeholder="Name..."></label>
                <label class="lastname" for="last-name">Last Name: <input name="lastname" type="text" placeholder="Last Name..."></label>
                <label class="email" for="email">Email: <input name="email" type="email" placeholder="Email    ..."></label>
                <label class="username" for="username">Username: <input name="username" type="text" placeholder="Username..."></label>
                <label class="password" for="password">Password: <input name="password" type="Password" placeholder="Password..."></label>

                <button id="b-submit" type="submit">REGISTER</button>
            </form>

        </div>
    </div>


    <script type="text/javascript" src="../src/arreglo.js"></script>

</body>
</html>



