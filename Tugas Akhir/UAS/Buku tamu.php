<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BENQ Dog Care</title>
    <!--CSS EKSTERNAL-->
    <link rel="stylesheet" href="bukutamu.css">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
</head>

<body>
    <header class="header">
        <nav class="navcontainer">
            <!--BENQ Animal Care-->
            <a href="index.html" class="navBENQ">BENQ Dog Care</a>

            <div class="navtombol">
                <ul class="navlisttombol">
                    <li class="navitemtombol">
                        <a href="home.html" class="nav_link">Home</a>
                    </li>
                    <li class="navitemtombol">
                        <a href="about.html" class="nav_link">About</a>
                    </li>
                    <li class="navitemtombol">
                        <a href="services.html" class="nav_link">Services</a>
                    </li>
                    <li class="navitemtombol">
                        <a href="#" class="nav_link">Guest Book</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <fieldset>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <h3>Guest Book</h3><br>
                    <div class="form">
                        <div >
                            <label>Name : </label>
                            <input type="text" name="fname" class="input1"> 
                        </div>
                        <br>
                        <div>
                            <label>Phone Number : </label>
                            <input type="number" name="fnomertlp" class="input2">
                        </div>
                        <br>
                        <div>
                            <label>Address : </label>
                            <input type="text" name="falamat" class="input3">
                        </div>
                        <br>
                        <div>
                            <label>Email : </label>
                            <input type="text" name="femail" class="input4">
                        </div>
                        <br>
                        <div>
                            <label>Message : </label>
                            <input type="text" name="fmessage" class="input5">
                        </div>
                        <br>
                        <div>
                            <input type="submit" value="Send" class="send">
                        </div>
                        
                </form>
                <div class="php">
                    <?php
                        if(isset($_POST['fname'])){
                            $name = $_POST['fname'];
                            $nomertlp = $_POST['fnomertlp'];
                            $alamat = $_POST['falamat'];
                            $email = $_POST['femail'];
                            $message = $_POST['fmessage'];
                            echo "Name : $name  <br> Phone number : $nomertlp 
                            <br> Address : $alamat <br> Email : $email <br> Pesan : $message <br>";
                        }
                    ?>
                </div>
            </fieldset>
        </section>
    </main>
</body>
</html>
