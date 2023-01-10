<?php
$pois=json_decode(file_get_contents('pois.json'),true);
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <title>detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
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

<div><h1 style="text-align: center; font-family: 'Comfortaa';"> Library</h1></div><hr />


    <div class="container">
        <!-- POI -->
        <div class="product-content product-wrap clearfix product-deatil">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img class="prod-img" src=" <?php echo $pois[$_GET['poi']]['picture'] ?>"  ><br/><br/>
                        <img class="prod-img" src=" <?php echo $pois[$_GET['poi']]['picture'] ?>"  >
                    </div>
                </div>

                <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                    <h2 class="">
                        <?php echo $pois[$_GET['poi']]['name'] ?>
                    </h2>
                        <h6><?php echo $pois[$_GET['poi']]['location'] ?></h6>
                        <i class="fa fa-star fa-2x text-primary"></i>
                        <i class="fa fa-star fa-2x text-primary"></i>
                        <i class="fa fa-star fa-2x text-primary"></i>
                        <i class="fa fa-star fa-2x text-primary"></i>
                        <i class="fa fa-star fa-2x text-muted"></i>
                        <span class="fa fa-2x"><h5>Rating</h5></span>
                    <hr />

                    <div class="certified">
                        <ul>
                            <li>
                                <a >Open Hours: <span><?php echo $pois[$_GET['poi']]['hour'] ?></span></span></a>
                            </li>
                            <li>
                                <a>Open Days<span><?php echo $pois[$_GET['poi']]['day'] ?></span></a>
                            </li>
                        </ul>
                    </div>
                    <p>Phone: <?php echo $pois[$_GET['poi']]['number'] ?></p>
                    <hr />
                    <div class="description description-tabs">
                        <div id="myTabContent" class="tab-content">
                                <p>
                                    <?php echo $pois[$_GET['poi']]['detail'] ?>
                                </p>
                            <hr />
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <a class="btn btn-success btn-lg btn-warning">Add to Tour </a>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="btn-group pull-right">
                                    <button class="btn btn-white btn-default"><i class="fa fa-star"></i> Add to Bucketlist</button>
                                    <button class="btn btn-white btn-default"><i class="fa fa-envelope"></i><a href="https://inside.nku.edu/library.html">Visit Website</a> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


   <div class="container">
       <div class="row">
           <div class="col-6 "><h3>See the Nearby Buildings</h3>
               <div class="row py-4">
                 <img class="w-25 mx-3 " src="https://educationsnapshots.com/wp-content/uploads/sites/4/2020/10/northern-kentucky-university-health-innovation-center-and-founders-hall-renovation-700x420.jpg" ;>
                   <div class="">
                       <h5 class="font-weight-bold">
                           Founders Hall/HIC
                           <h6>Location: 0.3mi Northwest</h6>
                           <p><b>View Details</b></p>
                       </h5>
                   </div>
               </div>

               <div class="row py-4">
                   <img class="w-25 mx-3 " src="https://www.oclc.org/content/marketing/publish/en_us/member-stories/nku-law/_jcr_content/par/highlightbox_8cc8/highlightbox/parsyscolumncontrol_/col0/image_158f.img.jpg/1632239716660.jpg" ;>
                   <div class="">
                       <h5 class="font-weight-bold">
                           Chase College OF Law
                           <h6>Location: 0.3mi Northeast</h6>
                           <p><b>View Details</b></p>
                       </h5>
                   </div>

               </div>

               <div class="row py-4">
                   <img class="w-25 mx-3 " src="https://inside.nku.edu/content/inside/nkumagazine/2016/december/landrum-1976/_jcr_content/par/colctl/column-2/textimage/image.img.jpg/1289121054.jpg" ;>
                   <div class="">
                       <h5 class="font-weight-bold">
                           Landrum Hall
                           <h6>Location: 0.1mi East</h6>
                           <p><b>View Details</b></p>
                       </h5>
                   </div>

               </div>

           </div>


           <div class="col-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.5672200297317!2d-84.46475857877046!3d39.03158650319026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8841b072eaac1b4b%3A0x59663632552ce54b!2sW.%20Frank%20Steely%20Library!5e1!3m2!1sen!2sus!4v1657121209289!5m2!1sen!2sus"
                      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
              </iframe>
           </div>
       </div>
   </div>


</body>
</html>

