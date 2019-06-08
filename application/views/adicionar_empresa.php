<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url();?>/empresa">Empresa</a></li>
        <li class="active">Listar</li>
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
                <form method="post" action="<?php echo base_url(); ?>empresa/adicionar_empresa">
                  <div class="box-body">
                    <div class="form-group">
                      <label >Nit Empresa</label>
                      <input type="text" class="form-control" id="id_empresa" name="id_empresa">
                    </div>
                    <div class="form-group">
                      <label>Razon Social</label>
                      <input type="text" class="form-control" id="razon_social" name="razon_social">
                    </div>
                    <div class="form-group">
                      <label>Ubicación</label>
                      <input type="text" class="form-control" id="ubicacion" name="ubicacion">
                    </div>
                    <div class="form-group">
                      <label>Teléfono</label>
                      <input type="text" class="form-control" id="telefono" name="telefono" >
                    </div>
                    
                  </div>
                <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                  </div>
                </form>
                
                
              
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

