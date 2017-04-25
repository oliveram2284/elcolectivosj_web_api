<div class="row">
    <div class="col-sm-12">
        <div class="panel">
            <header class="panel-heading">
              <div class="panel-actions">
								<?php echo anchor('companies/add', 'Agregar')?>
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
                        <td><?php echo $company['name']?></td>
                        <td><?php echo $company['address']?></td>
                        <td><?php echo $company['phone']?></td>
                        <td><?php echo $company['email']?></td>
                        <td><?php echo ($company['status']==1)? anchor("companies/deactivate/".$company['id'],'Desactivar') : anchor("companies/activate/".$company['id'], 'Activar');?></td>
                        <td>
                          <?php echo anchor('companies/edit/'.$company['id'], 'Editar')?>|
                          <?php echo anchor('companies/delete/'.$company['id'], 'Eliminar')?>
                        </td>

                      </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
