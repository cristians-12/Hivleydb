<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hivley - Start page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" href="img/THUMBNAIL.png">
    
    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='css/styles.css'>
    <link rel="stylesheet" href="css/movil.css">
</head>

<body>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "forms";

        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: ".$conn->connect_error);
            // echo "Conexión fallida.";
        }

        $sql = "SELECT * FROM hivley WHERE categoria='design' ORDER BY id DESC LIMIT 3";
        $datos = $conn->query($sql);
        $sql1 = $conn->query("SELECT * FROM hivley WHERE categoria='hobbies' ORDER BY id DESC LIMIT 3")
        //echo $sql;
        //exit();
    ?>

    <div class="container main">
        <div class="row ml-2">
            <input type="text" id="buscar" title="o">
        </div>

        <div class="row mt-3">
            <div class="col-6"><h4>Featured</h4></div>
            <div class="col-6 text-end mt-1"><h5>See all (17)</h5></div>
        </div>

        <div class="row mt-3 text-center">
            <div class="col-4 position-relative">
                <img src="img/img1.png" alt="">
                <h6>Amy’s mock Interviews</h6>
                <div class="figura d-flex"> 
                    <img src="img/estrella.png" alt="estrella" class="estrella">
                    <h6>4.7</h6>
                </div>
            </div>
            <div class="col-4 position-relative">
                <img src="img/img2.png" alt="">
                <h6>Lion Tutors</h6>
                <div class="figura d-flex">
                    <img src="img/estrella.png" alt="estrella" class="estrella">
                    <h6>4.5</h6>
                </div>
            </div>
            <div class="col-4 position-relative">
                <img src="img/img3.png" alt="">
                <h6>Jacob’s resume tips</h6>
                <div class="figura d-flex">
                    <img src="img/estrella.png" alt="estrella" class="estrella">
                    <h6>4.8</h6>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-8"><h4>Graphics and Design</h4></div>
            <div class="col-4 text-end"><h5>See all (33)</h5></div>
        </div>

        <div class="row mt-3 text-center"> <!-- meter aqui -->
            <?php
            if ($datos->num_rows > 0) {
                    while($row = $datos->fetch_assoc()){
                        echo "<div class='col-4 seccion'>
                                <img src='img/".$row["imagen"]."' class='imagenpop'>           
                                <h6>".$row["titulo"]."</h6>
                                <input type='hidden' id='ide' value='".$row["id"]."'>
                            </div>
                        ";
                    }
                }
            ?>
        </div>

        <div class="row mt-3">
            <div class="col">
                <h4>Hobbies</h4>         
            </div>
            <div class="col mt-2 text-end">
                <h5>See all (29)</h5>
            </div>
        </div>

        <div class="row mt-3 text-center">

            <?php
                if($sql1->num_rows>0){
                    while($row = $sql1->fetch_assoc()){
                        echo"
                            <div class='col-4 seccion'>
                                <img src='img/".$row["imagen"]."' class='imagenpop'>
                                <h6>".$row["titulo"]."</h6>
                                <input type='hidden' id='ide' value='".$row["id"]."'>
                            </div>
                        ";
                    }
                }
            ?>
        </div>

        <div class="row text-center">
            <button>
                Show more categories
            </button>
        </div>

    </div>


    <div class="container main2">

        <div class="row mt-5">
            <div class="col-12 ms-2">
                <img src="img/figura.png" alt="fig">
            </div>

            <div class="col-12 text-center mt-2">
                <img src="img/studio.png" alt="">
                <h4 class="text-start mt-2">Gabriel’s studio</h4>
                <div class="com">
                    <h5 class="mt-2" id="comt">$20/Commision</h5>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <h4>Description</h4>
            </div>
            <div class="col-12">
                <p>Hi I’m Gabriel, I’m a rising sophmore. I can make these for you:</p>
                <p>1.Posters</p>
                <p>2.Vector Illustrations</p>
                <p>3.Photoshop Composites</p>
                <p>4.Book Covers</p>
                <p>5.Social Media Banners</p>
                    
                <p class="mt-3">Please note: 
                Other services may be available on request (prices may vary)</p>
            </div>
        </div>

        <div class="row mt-5">
            
                <div class="col-12 mb-3">
                    <h4>Reviews</h4>
                </div>
                <div class="col-3">
                    <img src="img/icon1.png" alt="" class="img-fluid">
                </div>
                <div class="col-5 position-relative">
                    <h5>Lisa Markov</h5>
                    <img src="img/estrella.png" alt="" class="estrella">
                    <img src="img/estrella.png" alt="" class="estrella" id="edos">
                    <img src="img/estrella.png" alt="" class="estrella" id="etres">
                    <img src="img/estrella.png" alt="" class="estrella" id="ecuatro">
                </div>
                <div class="col-4 text-end">
                    <h6>23rd January 2022</h6>
                </div>
                <div class="col-12 mt-4 mb-5 coment">
                    <p>Gabriel is amazing,
                    he helped me with my project even though I came to 
                    him last minute. He’s amazing at his work, I would highly 
                    recommend him for any graphic related work you may have.</p>
                    <a href="" id="see" class="mt-3">See all (23)</a>
                </div>
            
        </div>

    </div>


    <div class="popupadd" id="popupadd">
        <div class="popup1 text-center">
            <form action="guardar.php" method="POST">
                <select name="opcionesc" id="opcionesc">
                    <option value="hobbies">Hobbies</option>
                    <option value="design">Design</option>
                </select>
                <!-- <input type="text" name="categoria" id="categoria" class="categoria" required>
                <label for="categoria" class="text-light">Categoria</label> -->
                <input type="text" name="servicio" id="servicio" class="servicio" autocomplete="OFF" required>
                <label for="servicio" class="text-light" id="lservicio">Servicio</label>
                <input type="text" name="imagen" id="imagen" required>
                <label for="imagen" class="text-light">Imagen</label><br>
                <input type="text" name="descripcion" id="descripcion">
                <label for="descripcion" class="text-light" required>Descripción</label><br><br>
                <button type="submit" id="btnsub">Enviar</button>
            </form><br>
            <button onclick="close()" id="btnclose">Close</button>
        </div>
    </div>


    <div class="popupadd1">
        <div class="popup2" id="popup2">              
        </div>
        <button id="btncerrar">Cerrar</button> 
        <button id="btnborserv">Borrar servicio</button>
    </div>



    <!-- ------------------inicio menu flotante------------------------- -->

    <div class="floatmenu container fixed-bottom">
        <div class="row d-flex align-items-baseline">
            <div class="col text-center mt-2">
                <a href="index.php"><img src="img/home.png" alt="" class=""></a>
                <h5 class="text-center">Home</h5>
            </div>
            <div class="col mt-2 text-center fw-600">
                <a href="#"><img src="img/lupa.png" alt=""></a>
                <h5>Search</h5>
            </div>
            <div class="col mt-2 text-center">
                <a href="#" id="abrir"><img src="img/plus.png" alt=""></a>
                <h5>Create</h5>
            </div>
            <div class="col mt-2 text-center"><img src="img/tacometro.png" alt="">
                <h5>Dashboard</h5>
            </div>
            <div class="col mt-2 text-center"><img src="img/me.png" alt="">
                <h5>Profile</h5>
            </div>
        </div>
    </div>
    <script src="js/index2.js"></script>
    <script>

    </script>
</body>
</html>