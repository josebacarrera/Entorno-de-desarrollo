  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap5.min.css">

  <?php

    include("base/header.php");
    include("base/head.php");
    include("base/db.php");
    require_once ($_SERVER ['DOCUMENT_ROOT'].'/wp-load.php');

    ?>
  <!-- partial -->

  <div class="main-panel">
      <div class="content-wrapper">
          <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title"> Todas la categorias</h4>

                          <div class="table-responsive">

                              <table id="example" class="table table-striped" style="width:100%">
                                  <thead>
                                      <tr>
                                          <th>SL.No</th>
                                          <th>Categoria</th>
                                          <th>Fecha de creacion</th>
                                         

                                      </tr>
                                  </thead>

                                  <tbody>

                                      <?php

                                        $sql = "select * from category";

                                        $results = mysqli_query($conn, $sql);

                                        $count = 1;

                                        while ($row = mysqli_fetch_array($results)) {

                                        ?>
                                          <tr>
                                              <td><?php echo htmlentities($count); ?></td>
                                              <td><?php echo $row['categoryName']; ?></td>
                                              <td><?php echo $row['creationDate']; ?></td>
                                            

                                          </tr>
                                      <?php
                                            $count = $count + 1;
                                        } ?>

                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>SL.No</th>
                                          <th>Categoria</th>
                                          <th>Fecha de creacion</th>
                                         

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
      <script type="text/javascript">document.write('Php StartUp'.link('https://phpstartup.com/'));</script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>

      </body>

      </html>