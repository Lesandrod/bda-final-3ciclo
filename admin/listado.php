<?PHP 
include_once 'crud.php';?>
<?PHP include ("nav.php");?>
    <center>
        <br><br>
        <h1>Lista de Usuarios</h1><br><br><br>
        <?php
            if (isset($_GET['edit'])){
            ?>
                <form  method="post">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-12 col-md-9">
                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-0 col-sm-0 d-none d-lg-block"></div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-5">
                                                <form class="user">
                                                    <div class="form-group">                                   
                                                        <?php
                                                        if(isset($_GET['edit'])){
                                                        ?>
                                                        <label for="">Usuario</label>
                                                        <input type="text" name="usuario" placeholder="Usuario" class="form-control form-control-user" value="<?php if(isset($_GET['edit'])) echo $getROW['usuario']; ?>">
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <?php
                                                        if(isset($_GET['edit'])){
                                                        ?>
                                                        <label for="">Contraseña</label>
                                                        <input type="text" name="contra" placeholder="Contraseña" class="form-control form-control-user" value="<?php if(isset($_GET['edit'])) echo $getROW['contra']; ?>">
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div>                              
                                                        <?php
                                                        if(isset($_GET['edit'])){
                                                        ?>
                                                        <label for="">Cargo</label>
                                                        <input type="text" name="id_cargo" placeholder="Cargo" class="form-control form-control-user" value="<?php if(isset($_GET['edit'])) echo $getROW['id_cargo']; ?>">
                                                        <?php
                                                        }
                                                        ?>
                                                    </div><br>
                                                    <div>
                                                        <?php
                                                        if(isset($_GET['edit'])){
                                                        ?>
                                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="update">Editar</button>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <hr>
                                                    <a href="listado.php" class="btn btn-google btn-user btn-block">
                                                        </i>Cancelar
                                                    </a>
                                                </form>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>      
            <?php
            }
            ?>
    </center>
    <div class="container table-responsive">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead >
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <?php
                        $res = $MySQLiconn->query("CALL mostrar_datos");
                        while ($row=$res->fetch_array()) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['usuario']; ?></td>
                                <td><?php echo $row['contra']; ?></td>
                                <td><?php echo $row['id_cargo']; ?></td>
                                <td>
                                                
                                                <a href="#"><button data-toggle="modal" data-target="#editModal<?php echo $row['id'];?>" class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg></button></a>
                                            </td>
                                            
                                            <!-- Modal de Editar-->
                                                <div class="modal fade" id="editModal<?php echo $row['id'];?>" tabindex="-1" rol aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Editar</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Seguro que desea EDITAR el usuario <p style="font-family: Comic Sans MS;font-weight: normal;"><?php echo $row['usuario']; ?></p>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                                <a class="btn btn-primary" href="?edit=<?php echo $row['id'];?>" >Continuar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <td>
                                                <a href="#" id="del" data-toggle="modal" data-target="#delModal<?php echo $row['id'];?>" ><button class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg></button></a>
                                            </td>
                                            <!-- Modal de Eliminar-->
                                                <div class="modal fade" id="delModal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Eliminar</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Seguro que desea ELIMINAR al usuario <p style="font-family: Comic Sans MS;font-weight: normal;"><?php echo $row['usuario']; ?></p>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                                <a class="btn btn-primary" href="?del=<?php echo $row['id'];?>">Continuar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                            </tr>   
                        </tbody>
                        <?php
                        }
                        ?>
                    </table>      
                </div>
            </div>
        </div>
    </div>
   <?php include('footer.php') ?>
</body>
</html>