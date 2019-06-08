<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-striped table-bordered">
                    <tr>
                     <th>Nit</th>
                     <th>Nombre</th>
                     <th>Ubicación</th>
                     <th>Teléfono</th> 
                     <th>Editar</th> 
                     <th>Eliminar</th>
                    </tr>
                    <?php
                    foreach($empresa_data as $row)
                    {
                     echo '
                     <tr>
                          <td>'.$row->id_empresa.'</td>
                          <td>'.$row->razon_social.'</td>
                          <td>'.$row->ubicacion.'</td>
                          <td>'.$row->telefono.'</td>  
                          <td><a href='.base_url().'empresa/editar_empresa/'.$row->id_empresa.'><i class="fa fa-fw fa-edit"></i></a></td>
                          <td><a href='.base_url().'empresa/eliminar_empresa/'.$row->id_empresa.'><i class="fa fa-trash"></li></a></td>
                     </tr>
                     ';
                    }
                    ?>
                </table>
                <table align="right">
                    <tr>
                        <td><div >
                                <a href="<?php echo base_url();?>empresa/vista_adicionar"><button type="button" class="btn btn-block btn-primary">Adicionar</button></a>
                            </div>
                        </td>
                        
                    </tr>
                </table>
                
                
                
                
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

