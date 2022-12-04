<?php
session_start();
require_once ($_SERVER ['DOCUMENT_ROOT'].'/wp-load.php');
include("base/header.php");
include("base/head.php");
include("base/db.php");
if (!is_user_logged_in()) {
    echo 'No has iniciado sesion <script language="javascript">window.location.replace("https://wordpress.maristak.com/login/")</script>';
} else {




?>


    <!-- partial -->
    <div class="main-panel">

        <?php
        $currentDateTime = date('Y-m-d H:i:s');
        ?>
        
        <?php
        $uId = get_current_user_id();
        $sql = "update wp_users set ultima_conexion='$currentDateTime' where ID='$uId'";
        $query = mysqli_query($conn, $sql);
        ?>
        <?php
        $uId = get_current_user_id();
        $query1 = mysqli_query($conn, "select concat(format(sum(itemCost),'fr_FR'),' €') as totalexpense from expense where userId='$uId';");
        $result1 = mysqli_fetch_array($query1);
        $total_expenses = $result1['totalexpense'];
        ?>
        <div class="row ml-3 mr-3 mt-5">
            <div class="col">
                <div class="card bg-gradient-success d-flex align-items-center">
                    <div class="card-body py-5">
                        <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                            <i class="mdi mdi-account text-white icon-lg"></i>
                            <div class="ml-3 ml-md-0 ml-xl-3">
                                <h5 class="text-white font-weight-bold font-dash">Gastos totales</h5>
                                <h2 class="mt-2 text-white card-text text-center"><?php echo $total_expenses; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <?php
        $uId = get_current_user_id();
        $tdate = date('Y-m-d');
        $query = mysqli_query($conn, "select concat(format(sum(itemCost),'fr_FR'),' €')  as todaysexpense from expense where (expenseDate)='$tdate' && (userId='$uId');");
        $result = mysqli_fetch_array($query);
        $today_expense = $result['todaysexpense'];
        ?>
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-2 grid-margin stretch-card">
                    <div class="card bg-facebook d-flex align-items-center">
                        <div class="card-body py-5">
                            <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                                <i class="mdi mdi-account text-white icon-lg"></i>
                                <div class="ml-3 ml-md-0 ml-xl-3">
                                    <h5 class="text-white font-weight-bold font-dash">Gasto de hoy</h5>
                                    <h2 class="mt-2 text-white card-text text-center"><?php echo $total_expenses; ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- yesterdays visitors -->


                <?php
                $uId = get_current_user_id();
                $ydate = date('Y-m-d', strtotime("-1 days"));
                $query1 = mysqli_query($conn, "select concat(format(sum(itemCost),'fr_FR'),' €')  as yesterdayexpense from expense where (expenseDate)='$ydate' && (userId='$uId');");
                $result1 = mysqli_fetch_array($query1);
                $yesterday_expense = $result1['yesterdayexpense'];
                ?>
                <div class="col-md-2 grid-margin stretch-card">
                    <div class="card bg-github d-flex align-items-center">
                        <div class="card-body py-5">
                            <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                                <i class="mdi mdi-account-settings text-white icon-lg"></i>
                                <div class="ml-3 ml-md-0 ml-xl-3">
                                    <h5 class="text-white font-weight-bold font-dash">Gastos de ayer</h5>
                                    <h2 class="mt-2 text-white card-text text-center">
                                        <?php echo $yesterday_expense; ?> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $uId = get_current_user_id();
                $pastdate =  date("Y-m-d", strtotime("-1 week"));
                $crrntdte = date("Y-m-d");
                $query2 = mysqli_query($conn, "select concat(format(sum(itemCost),'fr_FR'),' €')  as weeklyexpense from expense where ((expenseDate) between '$pastdate' and '$crrntdte') && (userId='$uId');");
                $result2 = mysqli_fetch_array($query2);
                $weekly_expense = $result2['weeklyexpense'];
                ?>
                <div class="col-md-2 grid-margin stretch-card">
                    <div class="card bg-google d-flex align-items-center">
                        <div class="card-body py-5">
                            <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                                <i class="mdi mdi-account-settings text-white icon-lg"></i>
                                <div class="ml-3 ml-md-0 ml-xl-3">
                                    <h5 class="text-white font-weight-bold font-dash">Gastos de los ultimos 7 dias</h5>
                                    <h2 class="mt-2 text-white card-text text-center">
                                        <?php echo $weekly_expense; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                $uId = get_current_user_id();
                $monthdate =  date("Y-m-d", strtotime("-1 month"));
                $crrntdte = date("Y-m-d");
                $query3 = mysqli_query($conn, "select concat(format(sum(itemCost),'fr_FR'),' €')  as monthlyexpense from expense where ((expenseDate) between '$monthdate' and '$crrntdte') && (userId='$uId');");
                $result3 = mysqli_fetch_array($query3);
                $monthly_expense = $result3['monthlyexpense'];
                ?>
                <div class="col-md-2 grid-margin stretch-card">
                    <div class="card bg-twitter d-flex align-items-center">
                        <div class="card-body py-5">
                            <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                                <i class="mdi mdi-account-multiple text-white icon-lg"></i>
                                <div class="ml-3 ml-md-0 ml-xl-3">
                                    <h5 class="text-white font-weight-bold font-dash">Gastos de los ultimos 30 dias</h5>
                                    <h2 class="mt-2 text-white card-text text-center">
                                        <?php echo $monthly_expense; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                $uId = get_current_user_id();
                $cyear = date("Y");
                $query4 = mysqli_query($conn, "select concat(format(sum(itemCost),'fr_FR'),' €')  as yearlyexpense from expense where (year(expenseDate)='$cyear') && (userId='$uId');");
                $result4 = mysqli_fetch_array($query4);
                $yearly_expense = $result4['yearlyexpense'];
                ?>
                <div class="col-md-2 grid-margin stretch-card">
                    <div class="card bg-pinterest d-flex align-items-center">
                        <div class="card-body py-5">
                            <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                                <i class="mdi mdi-account-multiple text-white icon-lg"></i>
                                <div class="ml-3 ml-md-0 ml-xl-3">
                                    <h5 class="text-white font-weight-bold font-dash">Gastos del año actual</h5>
                                    <h2 class="mt-2 text-white card-text text-center">
                                        <?php echo $yearly_expense; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php


                $query4 = mysqli_query($conn, "select count(id) as allcategory from category;");
                $result4 = mysqli_fetch_array($query4);
                $categoryName = $result4['allcategory'];
                ?>

                <div class="col-md-2 grid-margin stretch-card">
                    <div class="card bg-dribbble d-flex align-items-center">
                        <div class="card-body py-5">
                            <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                                <i class="mdi mdi-account-multiple text-white icon-lg"></i>
                                <div class="ml-3 ml-md-0 ml-xl-3">
                                    <h5 class="text-white font-weight-bold font-dash">Todas las categorias</h5>
                                    <h2 class="mt-2 text-white card-text text-center">
                                        <?php echo $categoryName; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>

    </div>

    <?php include("base/footer.php"); ?>

<?php } ?>