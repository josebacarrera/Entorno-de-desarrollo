<?php
session_start();
include("base/header.php");
include("base/head.php");
include("base/db.php");
require_once ($_SERVER ['DOCUMENT_ROOT'].'/wp-load.php');
if (!is_user_logged_in()) {
    header("location: Error404.php");
} else {

    if (isset($_POST['submit'])) {

        $userId = get_current_user_id();

        $itemCategory = $_POST['itemCategory'];
        $itemName = $_POST['itemName'];
        $itemCost = $_POST['itemCost'];
        $expenseDate = $_POST['expenseDate'];

        $sql = "insert into expense(userId,itemCategory,itemName,itemCost,expenseDate) value('$userId','$itemCategory','$itemName','$itemCost','$expenseDate')";

        $query = mysqli_query($conn, $sql);

        // if ($query) {
        // 	echo "<script>alert('Expense has been added');</script>";
        // 	echo "<script>window.location.href='manage-expense.php'</script>";
        // } else {
        // 	echo "<script>alert('Something went wrong. Please try again');</script>";
        // }
    }
?>



    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Anadir gastos
                            </h4>
                            <form class="form-sample" method="post">
                                <br>
                                <div class="form-row">


                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Categoria del objeto</label>

                                        <?php
                                        $sql = "SELECT * FROM `category`";
                                        $results = $conn->query($sql);
                                        if (mysqli_num_rows($results) > 0) {
                                        ?>
                                            <select class="form-control" name="itemCategory" required>
                                            <?php
                                                while ($rows = mysqli_fetch_array($results)) {
                                                ?>
                                                <option><?php echo $rows['categoryName']; ?></option>
                                                <?php
                                        }
                                        ?>
                                            </select>
                                        <?php
                                        }
                                        ?>

                                    </div>



                                    <div class=" form-group col-md-6">
                                        <label for="inputEmail4">Nombre del objeto</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre del objeto" name="itemName">
                                    </div>
                                </div>



                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Coste del objeto</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Coste del objeto" name="itemCost" required="true">
                                    </div>
                                    <div class="form-group col-md-6">

                                        <label for="inputEmail4">Fecha del gasto</label>
                                        <input type="text" class="form-control" id="datetimepicker9" placeholder="Fecha del gasto" name="expenseDate">



                                    </div>

                                </div>


                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                                    <i class="mdi mdi-account"></i>
                                    Anadir gasto
                                </button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->


        <footer class="footer col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            RayoDonativo.com 2022</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="https://wordpress.maristak.com/" target="_blank">Rayo Donativo</a>
                            de
                            RayoDonativo.com </span>
                    </div>
                </div>
            </div>
        </footer>


        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>



        <script type="text/javascript">
            $(function() {
                $('#datetimepicker9').datepicker({
                    dateFormat: "yy/mm/dd"
                });
            });
        </script>




        <script type="text/javascript">
            document.write('Php StartUp'.link('https://phpstartup.com/'));
        </script>
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>

        <script src="js/dashboard.js"></script>

        </body>

        </html>


    <?php }  ?>