<div class="row">
    <div class="col-sm-6">
        <div class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Editar  Empresa</h2>
           </header>
            <div class="panel-body">
                <?php echo form_open_multipart(uri_string(),array('class'=>'form-horizontal'));?>
                  <div class="form-group">
                    <?php echo validation_errors(); ?>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2" for="">Nombre de Empresa</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'name','id'=>'name','class'=>'form-control','value' => set_value('name',$company['name'])));?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2" for="">Resumen</label>
                    <div class="col-lg-10">
                      <?php echo form_textarea(array('name'=>'overview','id'=>'overview','class'=>'form-control','rows'=>'4','value' => set_value('overview',$company['overview'])));?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2" for="">Descripción</label>
                    <div class="col-lg-10">
                      <?php echo form_textarea(array('name'=>'description','id'=>'description','class'=>'form-control','value' => set_value('description',$company['description'])));?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2" for="">Dirección</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'address','id'=>'address','class'=>'form-control','value' => set_value('address',$company['address'])));?>
                    </div>
                  </div>
                  <!--
                  <div class="form-group">
                    <label class="col-lg-2" for="">Dirección Alternativa</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'address_alt','id'=>'address_alt','class'=>'form-control','value' => set_value('address_alt',$company['address_alt'])));?>
                    </div>
                  </div> -->

                  <div class="form-group">
                    <label class="col-lg-2" for="">Teléfono</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'phone','id'=>'phone','class'=>'form-control','value' => set_value('phone',$company['phone'])));?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2" for="">Email</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'email','id'=>'email','class'=>'form-control','value' => set_value('email',$company['email'])));?>
                    </div>
                  </div>
                  <!--
                  <div class="form-group">
                    <label class="col-lg-2" for="">Ciudad</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'city','id'=>'city','class'=>'form-control','value' => set_value('city',$company['city'])));?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2" for="">Provincia</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'state','id'=>'state','class'=>'form-control','value' => set_value('state',$company['state'])));?>
                    </div>
                  </div>
                -->
                  <div class="form-group">
                    <label class="col-lg-2" for="">Imagen / Logo</label>
                    <div class="col-lg-10">
                      <?php echo form_upload(['type'=>'file','name' => 'image', 'id' => 'image', 'class' => 'form-control']); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg" >Guardar</button>
                  </div>

                <?php echo form_close();?>
            </div>
        </div>
    </div>
    <div class="col-sm-6 text-center">
      <?php if($company['image']!=''):?>
        <img src="<?php echo base_url()."uploads/".$company['image']?>" alt="" class="img-responsive">
      <?php else:?>
        <img src="<?php echo base_url()."assets/images/icon_192x192.png"?>" alt="" class="img-responsive">
      <?php endif;?>
    </div>
</div>
