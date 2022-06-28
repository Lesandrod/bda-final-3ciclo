<?PHP
include_once 'crud.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Admin <?php echo $_SESSION['usuario'];?> </title>
</head>
  <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                  <div class="row">
                      <div class="col-lg-3 col-md-0 col-sm-0 d-none d-lg-block"></div>
                          <div class="col-lg-6 col-md-12 col-sm-12">
                             <div class="p-5">
                                <form  method="post">
                                    <h2>Registro de usuarios:</h2>
                                    <?php     
                                    if($SQL)
                                    { ?>
                                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            Usuario Registrado correctamente
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php   } ?>
                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-5 col-form-label">Usuario</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="staticEmail" name="usuario" placeholder="Ingrese nombre de usuario" require>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPassword" class="col-sm-5 col-form-label">Password</label>
                                  <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword" name="contra" placeholder="Password" require>
                                  </div>
                                </div>
                                <center>
                                <div class="form-check form-check-inline">
                                  <a href="index.php"><button type="submit" name="save" class="btn btn-primary" >Registrar</button></a>
                                </div>
                                </center>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <span>Proyecto &copy; Base de datos Avanzados</span>
            </div>
            </div>
        </div>
    </footer>

    <!--Dashboard Bootstrap JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Dashboard plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>