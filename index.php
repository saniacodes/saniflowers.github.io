<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <h1 style="font-size: 40px;"><span style="color: red;">S</span>ania</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About Me</a></li>
                    <li><a href="qualification.html">Qualification</a></li>
                    <li><a href="hobbies.html">Hobbies</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>
            <div class="header-text">

                <h1 style="color: rgb(207, 208, 209);">Welcome to Sania's <br>Portfolio</h1>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>


    <?php

$count = file_get_contents("counter.txt");
echo "<h2>Total visitor count:</h2>" . $count;

file_put_contents("counter.txt",(int)$count+1);

?>
</body>

</html>