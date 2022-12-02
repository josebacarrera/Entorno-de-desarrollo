<?php
session_start();
error_reporting(0);
require_once ($_SERVER ['DOCUMENT_ROOT'].'/wp-load.php');
include("base/header.php");
include("base/head.php");
include("base/db.php");
if (!is_user_logged_in()) {
    header('location:logout.php');
} else {




?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap5.min.css">

    <!-- partial -->





    <div class="main-panel">


        <div class="content-wrapper">



            <div class="row">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Reporte de gastos anuales</h4>

                            <div class="table-responsive">
                                <?php
                                $fdate = $_POST['fdate'];
                                $tdate = $_POST['tdate'];
                                // $rtype = $_POST['requesttype'];
                                ?>
                                <table id="example" class="table table-striped " style="width:100%">
                                    <thead>
                                        <tr>
                                        <tr>
                                            <th>S.NO</th>
                                            <th>Fecha</th>
                                            <th>Cantida Gastada</th>
                                        </tr>
                                        </tr>
                                    </thead>

                                    <?php
                                    $userId = get_current_user_id();
                                    $sql = "SELECT year(expenseDate) as rptyear,SUM(expenseDate) as totalyear FROM expense where (expenseDate BETWEEN '$fdate' and '$tdate') && (userId='$userId') group by year(expenseDate)";
                                    $query = mysqli_query($conn, $sql);
                                    $count = 1;
                                    while ($row = mysqli_fetch_array($query)) {

                                    ?>
                                        <tr class="tblpad">
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $row['rptyear']; ?></td>
                                            <td><?php echo $ttlsl = $row['totalyear']; ?></td>
                                        </tr>
                                    <?php
                                      $totalsexp += $ttlsl;
                                      $count = $count + 1;
                                    } ?>

                                    <tr>
                                        <th colspan="2" style="text-align:center">Total</th>
                                        <td><?php echo $totalsexp; ?></td>
                                    </tr>


                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include("base/footer.php"); ?>

        </body>

        </html>
    <?php }  ?>