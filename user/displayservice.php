<!DOCTYPE html>
<html lang="en">

<head>
<?php include('header2.php')?>
<!-- Page Header Start -->
&nbsp
<div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Our Services</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
</head>
    <!-- Navbar End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Services</h6>
                    <h1 class="mb-4">Services</h1>
                </div>
            </div>
    
            <div class="row">
                <div class="col-12 text-center mb-2">

                    <ul class="list-inline mb-4" id="portfolio-flters">
                        
                    </ul>
                </div>
            </div>

           



            <div class="row mx-1 portfolio-container">
            <?php

              $q="select * from service where status=1 ";

              $info=$dao->query($q);
              //print_r($info);

              $i=0;
              while($i<count($info))

              { $s=$info[$i]["image"];

  ?>
               
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src=<?php echo BASE_URL."upload/".$info[$i]["image"]; ?> alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Category Name : <?php echo $info[$i]["sname"]?></h4>
                            <div class="d-flex align-items-center justify-content-center">
                                

                                <a class="btn btn-outline-primary m-1" href="displaycategory.php?id=<?=$info[$i]["sid"]?>">
                                <i class="fa fa-link"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <h4><?php echo $info[$i]["sname"]?></h4> </a>
                </div>
                
                <?php
                $i++;

            }
              ?>


</div> 
        </div>
    </div>
    <!-- Projects End -->

<?php include('footer.php')
?>    

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>