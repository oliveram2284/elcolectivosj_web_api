<div class="row">
    <div class="col-sm-12">
        <div class="panel">
            <header class="panel-heading">
              <div class="panel-actions">
								<?php echo anchor('companies/add', 'Agregar','class="btn btn-info btn-sm"')?>
							</div>
                <h2 class="panel-title">Empresas</h2>
           </header>
            <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td>#</td>
                      <td>Nombre</td>
                      <td>Dirección</td>
                      <td>Teléfono</td>
                      <td>Email</td>
                      <td>Estado</td>
                      <td>Acción</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($companies as $key => $company):?>
                      <tr>
                        <td><input type="checkbox" name="" value=""></td>
                        <td>
                          <?php echo $company['name']?>
                        </td>
                        <td><?php echo $company['address']?></td>
                        <td><?php echo $company['phone']?></td>
                        <td><?php echo $company['email']?></td>
                        <td><?php echo ($company['status']==1)? anchor("companies/deactivate/".$company['id'],'Desactivar','class="btn btn-danger btn-xs rounded"') : anchor("companies/activate/".$company['id'], 'Activar','class="btn btn-success btn-xs rounded"');?></td>
                        <td>
                          <?php echo anchor('companies/edit/'.$company['id'], '<i class="fa fa-pencil"></i>','class="btn btn-success btn-circle btn-icon"')?>
                          <?php echo anchor('companies/delete/'.$company['id'],'<i class="fa fa-trash"></i>','class="btn btn-danger btn-circle btn-icon"')?>
                        </td>

                      </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
