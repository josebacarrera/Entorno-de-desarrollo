<?php
session_start();
require_once ($_SERVER ['DOCUMENT_ROOT'].'/wp-load.php');
include("base/header.php");
include("base/head.php");
include("base/db.php");
if (!is_user_logged_in()) {
    echo 'No has iniciado sesion <script language="javascript">window.location.replace("https://wordpress.maristak.com/error-404/")</script>';
} else {
    global $current_user;

    if( !empty($current_user->roles) ){
      foreach ($current_user->roles as $key => $value) {
        if( $value != 'administrator' ){
            echo 'No has iniciado sesion <script language="javascript">window.location.replace("https://wordpress.maristak.com/wp-content/expense/index.php")</script>';
        } else {

    if (isset($_POST['submit'])) {

        $category = $_POST['category'];

        $sql="insert into category(categoryName) value('$category')";

        $query = mysqli_query($conn, $sql);

      
        // if ($query) {
        //     echo "<script>window.location.href='manage-expense.php'</script>";
        // } else {
        //     echo "<script>alert('Something went wrong. Please try again');</script>";
        // }
                }
            }
        }
    }
?>



    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Anadir categoria
                            </h4>
                            <form class="form-sample" method="post">
                                <br>




                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Anadir categoria</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Nombre de categoria" name="category" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                                    <i class="mdi mdi-account"></i>
                                    Anadir
                                </button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <?php include("base/footer.php"); ?>

    <?php }  ?>