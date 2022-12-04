<?php
session_start();
include("base/header.php");
include("base/head.php");
include("base/db.php");
require_once ($_SERVER ['DOCUMENT_ROOT'].'/wp-load.php');
if (!is_user_logged_in()) {
    echo 'No has iniciado sesion <script language="javascript">window.location.replace("https://wordpress.maristak.com/error-404/")</script>';
} else {



?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap5.min.css">

<!-- partial -->





<div class="main-panel">


    <div class="content-wrapper">



        <div class="row">

            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Reporte de gastos anuales (Fecha)</h4>

                        <br><br>

                        <form class="form-sample" method="post" action="yearwise-reports-details.php">



                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Desde</label>
                                    <input type="text" class="form-control" id="datetimepicker9" placeholder="yyyy/mm/dd" name="fdate">
                                </div>

                                <div class=" form-group col-md-6">
                                    <label for="inputEmail4">Hasta</label>
                                    <input type="text" class="form-control" id="datetimepicker10" placeholder="yyyy/mm/dd" name="tdate">
                                </div>
                            </div>



                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                                <i class="mdi mdi-account"></i>
                                Buscar
                            </button>

                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="main-panel">


<div class="content-wrapper">



    <div class="row">

        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Reporte de gastos anuales (€)</h4>

                    <br><br>

                    <form class="form-sample" method="post" action="reporte_anual.php">



                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Desde</label>
                                <input type="text" class="form-control" id="datetimepicker9" placeholder="~€" name="feuro">
                            </div>

                            <div class=" form-group col-md-6">
                                <label for="inputEmail4">Hasta</label>
                                <input type="text" class="form-control" id="datetimepicker10" placeholder="~€" name="teuro">
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                            <i class="mdi mdi-account"></i>
                            Buscar
                        </button>

                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
    <?php include("base/footer.php"); ?>




    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>



    <script type="text/javascript">
        $(function() {
            $('#datetimepicker9').datepicker({
                dateFormat: "yy/mm/dd"
            });
        });

        $(function() {
            $('#datetimepicker10').datepicker({
                dateFormat: "yy/mm/dd"
            });
        });
    </script>

    </body>

    </html>

    <?php }  ?>