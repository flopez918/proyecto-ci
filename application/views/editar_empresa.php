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
                <?php
                    foreach($empresa_data->result() as $row)
                    { ?>
                <form method="post" action="<?php echo base_url(); ?>empresa/actualizar_empresa">
                  <div class="box-body">
                    <div class="form-group">
                      <label >Empresa</label>
                      <input type="text" class="form-control" id="id_empresa" name="id_empresa" readonly value="<?php echo $row->id_empresa; ?>">
                    </div>
                    <div class="form-group">
                      <label>Razon Social</label>
                      <input type="text" class="form-control" id="razon_social" name="razon_social" value="<?php echo $row->razon_social ?>">
                    </div>
                    <div class="form-group">
                      <label>Ubicación</label>
                      <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="<?php echo $row->ubicacion ?>">
                    </div>
                    <div class="form-group">
                      <label>Teléfono</label>
                      <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $row->telefono ?>">
                    </div>
                    
                  </div>
                <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                  </div>
                </form>
                <?php } ?>
                
              
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

