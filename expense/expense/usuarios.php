<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap5.min.css">

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
            echo 'No eres administrador <script language="javascript">window.location.replace("https://wordpress.maristak.com/wp-content/expense/index.php")</script>';
        } else {


if (isset($_REQUEST['delete'])) {
    $ids = $_REQUEST['id'];
    $sql = "DELETE FROM expense WHERE id = $ids";
    $result = $conn->query($sql);
            }
        }
    }
}
?>
<!-- partial -->

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Usuarios registrados</h4>

                        <div class="table-responsive">

                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL.No</th>
                                        <th>Id Usuario</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Fecha de registro</th>
                                        <th>Ultima conexion</th>
                                        <th>Movil</th>
                                        <th>Accion</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    $uId = get_current_user_id();
                                    $sql = "select ID, user_login, user_email, user_registered, ultima_conexion, mobile from wp_users";

                                    $results = mysqli_query($conn, $sql);

                                    $count = 1;

                                    while ($row = mysqli_fetch_array($results)) {

                                    ?>

                                        <tr>
                                            <td><?php echo htmlentities($count); ?></td>
                                            <td><?php echo $row['ID']; ?></td>
                                            <td><?php echo $row['user_login']; ?></td>
                                            <td><?php echo $row['user_email']; ?></td>
                                            <td><?php echo $row['user_registered']; ?></td>
                                            <td><?php echo $row['ultima_conexion']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                            <td>

                                                <form action="" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete"><i class="mdi mdi-delete"></i></button>
                                                </form>
                                            </td>

                                        </tr>
                                    <?php $count = $count + 1;
                                    }
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>SL.No</th>
                                        <th>Id Usuario</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Fecha de registro</th>
                                        <th>Ultima conexion</th>
                                        <th>Movil</th>
                                        <th>Accion</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include("base/footer.php"); ?>


    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>

    </body>

    </html>
    <?php } ?>