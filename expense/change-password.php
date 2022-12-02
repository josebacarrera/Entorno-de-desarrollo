<?php
session_start();
require_once ($_SERVER ['DOCUMENT_ROOT'].'/wp-load.php');
include("base/header.php");
include("base/head.php");
include("base/db.php");

if (!is_user_logged_in()) {
    header('location:logout.php');
} else {

    if (isset($_POST['submit'])) {

        $userId = get_current_user_id();

        $cpassword = $_POST['currentpassword'];
        $newpassword = $_POST['newpassword'];

        $sql = "select ID from wp_users where ID='$userId' and user_pass='$cpassword'";

        $query = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($query);

        if ($row > 0) {
            $sql2 = "update wp_users set user_pass='$newpassword' where ID='$userId'";
            $query2 = mysqli_query($conn, $sql2);
            $msg = "La contrasena ha sido actualizada";
        } else {

            $msg = "La contrasena insertada es incorrecta";
        }
    }


?>


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Cambiar contrasena de administracion </h4>

                            <br><br>

                            <form class="form-sample" method="post" onsubmit="return validation()">

                                <div class="form-group">
                                    <label for="inputAddress">Contrasena actual</label>
                                    <input type="password" class="form-control" id="currentpassword" placeholder="Created Date" name="currentpassword" required>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nueva contrasena</label>
                                        <input type="password" class="form-control" id="npass" placeholder="Admin Name" name="newpassword" required>
                                        <span class="text-danger font-weight-bold"> </span>

                                    </div>

                                    <div class=" form-group col-md-6">
                                        <label for="inputEmail4">Confirma la contrasena</label>
                                        <input type="password" class="form-control" id="cpass" placeholder="User Name" name="confirmpassword" required>
                                        <span id="confrmpass" class="text-danger font-weight-bold"> </span>

                                    </div>

                                </div>


                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                                    <i class="mdi mdi-account"></i>
                                    Cambiar contrasena
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

        <!--  password match query start-->
        <script>
            function validation() {


                var pass = document.getElementById('npass').value;
                var confirmpass = document.getElementById('cpass').value;

                if (pass != confirmpass) {
                    document.getElementById('confrmpass').innerHTML = "password not match"
                    return false;
                }
            }
        </script>

        <!--  password match query end-->

        <?php include("base/footer.php"); ?>

    <?php }  ?>