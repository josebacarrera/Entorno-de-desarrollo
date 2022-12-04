<?php
session_start();

include("base/header.php");
include("base/head.php");
include("base/db.php");
require_once ($_SERVER ['DOCUMENT_ROOT'].'/wp-load.php');
if (!is_user_logged_in()) {
    echo 'No has iniciado sesion <script language="javascript">window.location.replace("https://wordpress.maristak.com/error-404/")</script>';
} else {


    if (isset($_POST['update'])) {

        $uId = get_current_user_id();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];


        $sql = "update wp_users set user_login ='$name', user_nicename ='$name', display_name ='$name', user_email='$email', mobile='$mobile' where ID='$uId'";

        $query = mysqli_query($conn, $sql);
    }




?>


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Detalles del usuario</h4>

                            <br><br>
                            <?php
                            $userId = get_current_user_id();

                            $sql = "select user_login, user_email, user_registered, mobile from wp_users where id='$userId'";

                            $query = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($query)) {

                            ?>
                                <form class="form-sample" method="post">



                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombre</label>
                                            <input type="text" class="form-control"  placeholder="Nombre" value="<?php echo $row['user_login']; ?>" name="name" required="true">
                                        </div>

                                        <div class=" form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $row['user_email'];  ?>" name="email" required="true">
                                        </div>
                                    </div>



                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Movil</label>
                                            <input type="text" class="form-control" placeholder="Movil" name="mobile" value="<?php echo $row['mobile']; ?>" name="mobile"  required="true">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Fecha de registro</label>
                                            <input type="email" class="form-control"  placeholder="Fecha De Registro" value="<?php echo $row['user_registered']; ?>" readonly>
                                        </div>

                                    </div>


                                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="update">
                                        <i class="mdi mdi-account"></i>
                                        Actualizar
                                    </button>

                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

        <?php include("base/footer.php"); ?>
    <?php }  ?>