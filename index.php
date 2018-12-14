<?php
     include "include/templete/head.inc";
     include "connect.php";

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $stmt= $con->prepare('INSERT INTO contact (firstname, lastname, email, phone, issue) VALUES (:firstname, :lastname, :email, :phone ,:issue)');
    $stmt->execute(array('firstname' => $_POST['firstname'], 'lastname' => $_POST['lastname'], 'email' => $_POST['email'], 'phone' => $_POST['phone'],'issue' => $_POST['message']));
    $stmt->rowCount();


   ?>



    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo $_POST ['firstname'];?></strong> You success.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}

?>

    <header>
        <div class="overlay">
        <?php include "include/templete/nav.inc"?>
            <div class="text-center">
                <h1>POTENTI INTEGER DIGNISSIM</h1>
                <p>Pharetra dicta! Esse sapiente proident, ex occaecat nulla cupiditate odit! Aenean? Nulla nullam, unde volutpat.</p>
                <p>Pharetra dicta! Esse sapiente proident</p>
                <a class="btn btn-primary " href="#">More....</a>
            </div>
        </div>

    </header>

    <!--start About me-->
    <div class="about-me">
        <div class="container">
            <div class="image">
                <img src="layout/image/rest%201.jpg" alt="test">
            </div>
            <div class="info">
                <h2>About Me</h2>
                <p>Nostrud ullam vehicula.Quos magni mollitia repudiandae
                    pretium in interdum nunc! Eaque? Metus? Do, laboris.Quos magni mollitia repudiandae
                    pretium in interdum nunc! Eaque? Metus? Do, laboris. Eaque? Metus? Do, laboris.</p>
                <p>Nostrud ullam vehicula.Quos magni mollitia repudiandae
                    pretium in interdum nunc! Eaque? Metus? Do, laboris.Quos magni mollitia repudiandae
                    pretium in interdum nunc! Eaque? Metus? </p>
                <div class="hobbies">
                        <div class="text">
                            <h5><i class="fab fa-pied-piper"></i>  Web Design</h5>
                            <p>Nostrud ullam vehicula.Quos magni mollitia repudiandae</p></div>
                    <div>

                        <h5> <i class="fa fa-paint-brush"></i> Graphic Design</h5>
                        <p>Nostrud ullam vehicula.Quos magni mollitia repudiandae</p></div>
                    <div class="clearfix">
                        <h5><i class="fa fa-marker"></i>  Online Marketing</h5>
                        <p>Nostrud ullam vehicula.Quos magni mollitia repudiandae</p></div>
                    <div>
                        <h5><i class="fab fa-app-store"></i> Skills</h5>
                        <p>Nostrud ullam vehicula.Quos magni mollitia repudiandae</p></div>
                </div>
            </div>

        </div>
    </div>
    <!--End About me-->

    <!--start gallary-->
    <div class="gallery">
        <div class="container">
            <div class="heads">
                <h2>Category</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 photo-left">
                    <img src="layout/image/gallary.jpg" class="img-thumbnail">
                    <div class="middle">
                        <h5> Food </h5>
                    </div>
                </div>
                <div class="col-8 ">
                    <div class="row photo-right" >
                        <div class="col-lg-6 photo-left">
                            <img src="layout/image/gallary1.jpg" class="img-thumbnail">
                            <div class="middle">
                                <h5> Comfort Zone </h5>
                            </div>
                        </div>
                        <div class="col-lg-6 photo-left">
                            <img src="layout/image/gallary2.jpg" class="img-thumbnail">
                            <div class="middle">
                                <h5> Caffe </h5>
                            </div>
                        </div>
                        <div class="col-lg-6 photo-left">
                            <img src="layout/image/gallary3.jpg" class="img-thumbnail">
                            <div class="middle">
                                <h5> Meat </h5>
                            </div>
                        </div>
                        <div class="col-lg-6 photo-left">
                            <img src="layout/image/gallary4.jpg" class="img-thumbnail">
                            <div class="middle">
                                <h5> Bizza </h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end gallary-->

    <!--Start Contact Us-->
    <div class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Nostrud ullam vehicula. Quos magni mollitia repudiandae
                pretium in interdum nunc! Eaque? Metus? Do, laboris<br> retium in interdum nunc! Eaque? Metus? Do, laboris.</p>
            <a href="form.php" class="btn btn-success">Contact US</a>
        </div>
    </div>
    <!--End Contact Us-->



<?php
    include "include/templete/footer.inc";

?>