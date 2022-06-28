<?PHP
include_once 'crud.php';?>
<?PHP include ("nav.php");?>
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
                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-5 col-form-label">Usuario</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="staticEmail" name="usuario" placeholder="Ingrese nombre de usuario">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPassword" class="col-sm-5 col-form-label">Password</label>
                                  <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword" name="contra" placeholder="Password">
                                  </div>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="id_cargo"value="1">
                                  <label class="form-check-label" for="inlineRadio1">Administrador</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="id_cargo" value="2">
                                  <label class="form-check-label" for="inlineRadio2">Vendedor</label>
                                </div><br><br>
                                <center>
                                <div class="form-check form-check-inline">
                                  <a href="" data-toggle="modal" data-target="#addModal"><button type="submit" name="save" class="btn btn-primary" >Registrar</button></a>
                                </div>
                                <!-- Modal de Agregar-->
                                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Añadir</h5>
                                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">×</span>
                                                  </button>
                                            </div>
                                            <div class="modal-body">Esta seguro que desea REGISTRAR al nuevo usuario<br><br>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary" name="save">Registrar<a href="registros.php"></button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                  <a href="" data-toggle="modal" data-target="#listaModal"><button type="submit" name="save" class="btn btn-primary" >Ver Registros</button></a>
                                </div>
                                <!-- Modal de Agregar-->
                                  <div class="modal fade" id="listaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ver Registros</h5>
                                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">×</span>
                                                  </button>
                                            </div>
                                            <div class="modal-body">Esta por ir a la tabla de REGISTROS<br><br>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                    <a class="btn btn-primary" href="listado.php">Continuar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<?php include('footer.php') ?>