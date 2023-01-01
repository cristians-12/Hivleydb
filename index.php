<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hivley - Main page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" href="img/THUMBNAIL.png">
    
    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link rel='stylesheet' type='text/css' media='screen' href='css/styles.css'>
    <link rel="stylesheet" href="css/movil.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <div class="col-xs-12 text-center">
                <button class="boton">
                    Let’s get buzzin’
                </button>
            </div>
        </div>

        <div class="popup text-center">

            <h2 class="">
                Welcome to the Hive!
            </h2>
            <h3>
                Let’s get you started.
            </h3>

            <form action="register.php" id="form1">
                <div class="col-12">
                    <input type="text" placeholder="Enter your name" 
                    class="nombre" name="name" pattern="^[A-Za-z]+$" maxlength="20" id="campo" required>
                </div>
                <div class="col-12">
                    <input type="email" placeholder="Enter your email"
                    name="email" id="campo1" required>
                </div>
                <div class="col-12">
                    <input type="password" placeholder="Enter your password"
                    name="password" required>
                </div>
                
                <input class="boton1" type="submit" value="Register" onclick="validar('campo')">
                <!-- <a href="">Register</a> -->
                </input>

            </form>


        
            <div class="d-flex align-items-baseline justify-content-center">
                <h2 id="textlog">Already have an account?</h2>
                <a href="#" class="mt-3 login">Sign in</a>
            </div>
        </div>

    </div>

    <script src="js/index.js"></script>

</body>
</html>