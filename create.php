<!---
   // if(count($_POST)>0){

        // store the information of the new POI into the JSON file


    $pois = json_decode(file_get_contents('pois.json'), true);

// add the data sent via post to the POIS array
    $pois[] = array('name' => $_POST['name'],
        'location' => $_POST['location'],
        'day' => $_POST['day'],
        'hour' => $_POST['hour'],
        'number' => $_POST['number'],
        'picture' => $_POST['picture'],
        'detail' => $_POST['detail']);

    // file_put_contents('pois.json', json_encode($pois, JSON_PRETTY_PRINT));


    $handle = fopen('pois.json', 'w+');
     fwrite($handle, json_encode($pois, JSON_PRETTY_PRINT));
     fclose($handle);

          // show a confirmation message or redirect to index.php

-->
<?php

if(isset($_POST["submit"])){
    if(file_exists('pois.json')){
        $pois = json_decode(file_get_contents('pois.json'), true);
        $pois[] = array('name' => $_POST['name'],
            'location' => $_POST['location'],
            'day' => $_POST['day'],
            'hour' => $_POST['hour'],
            'number' => $_POST['number'],
            'picture' => $_POST['picture'],
            'detail' => $_POST['detail']);

        $handle = fopen('pois.json', 'w+');
        fwrite($handle, json_encode($pois, JSON_PRETTY_PRINT));
        fclose($handle);
    }
        else{
            echo "File does not exist";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>forms</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
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

<div><h1 style="text-align: center; font-family: 'Comfortaa';"> Add Your Point of Interest</h1></div><hr /><br />

<div class="container">
    <form action="create.php" method="POST" >
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Name of Point of Interest</label>
                    <input type="text" id="form6Example1" name="name" class="form-control" required>


                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Location of Point of Interest</label>
                    <input type="text" id="form6Example2" name="location" class="form-control" required>

                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Latitude</label>
                    <input type="text" id="form6Example1" name="latitude" class="form-control" required>

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Longitude</label>
                    <input type="text" id="form6Example2" name="longitude" class="form-control" required>

                </div>
            </div>
        </div>

        <!-- Text input -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Open Days</label>
                    <input type="text" id="form6Example1" name="day" class="form-control" required>

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Open Hours</label>
                    <input type="text" id="form6Example2" name="hour" class="form-control" required>

                </div>
            </div>
        </div>
        <!-- Email input -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Phone Number</label>
                    <input type="text" id="form6Example1" name="number"  class="form-control" required>

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Image Link</label>
                    <input type="text" id="form6Example2" name="picture" class="form-control" required>

                </div>
            </div>
        </div>
        <!-- Message input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example7">Point of Interest Description</label>
            <textarea class="form-control" name="detail" rows="4"></textarea>

        </div>

        <!-- Submit button -->
        <div class="col-md-12 text-center">
            <button type="submit" name="submit" class="btn btn-contact-bg" >Submit</button>
        </div>
    </form>
</div>

</body>
</html>