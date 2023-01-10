<?php
$pois=json_decode(file_get_contents('pois.json'),true);
?>
    <!DOCTYPE html>
    <html lang="en">


    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <title>NKUtour</title>

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="style.css">

    </head>


    <body class="create">

    <nav class="navbar navbar-expand bg-light navbar-light">
        <div class="container">
            <a class="navbar-brand">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/02/Northern_Kentucky_University_seal.svg/1200px-Northern_Kentucky_University_seal.svg.png" >
                NKU Voice-Guided Tour
            </a>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="create.php">Forms</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php">Contact </a>
                    </li>
                    <li class="nav-item">
                        <a href="home.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br />

    <div><h1 style="text-align: center; font-family: 'Comfortaa';"> Select your Point of Interests</h1></div><hr /><br />

    <div class="container">
        <div class="row">
<?php
$counter=0;
foreach($pois as $poi){
    echo '<div class="col-12 col-lg-3 mb-3">
                <div class="card h-100 shadow-sm">
                    <img src="'.$poi['picture'].'" class="card-img-top bg-light mb-3 img-responsive" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">'.$poi['name'].'</h2>
                        <div class="text-center my-4">
                            <a href="#" class="btn btn-warning">Add To Tour</a>
                        </div>
                        <div class="text-center my-4">
                            <a href="detail.php?poi='.$counter.'" class="btn btn-warning">View Details</a>
                        </div>
                    </div>
                </div>
            </div>';
    $counter++;

}

?>



        </div>
    </div>


    </body>
</html>

