<div class="row">
    <div class="col-sm-12">
        <div class="panel">
            <header class="panel-heading">

                <h2 class="panel-title">Nueva Empresa</h2>
           </header>
            <div class="panel-body">
                <?php echo form_open_multipart("companies/add",array('class'=>'form-horizontal'));?>
                  <div class="form-group">
                    <?php echo validation_errors(); ?>

                  </div>
                  <div class="form-group">
                    <label class="col-lg-2" for="">Nombre de Empresa</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'name','id'=>'name','class'=>'form-control','value' => set_value('name')));?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2" for="">Resumen</label>
                    <div class="col-lg-10">
                      <?php echo form_textarea(array('name'=>'overview','id'=>'overview','class'=>'form-control','rows'=>'4','value' => set_value('overview')));?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2" for="">Resumen</label>
                    <div class="col-lg-10">
                      <?php echo form_textarea(array('name'=>'description','id'=>'description','class'=>'form-control','value' => set_value('description')));?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2" for="">Dirección</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'address','id'=>'address','class'=>'form-control','value' => set_value('address')));?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2" for="">Dirección Alternativa</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'address_alt','id'=>'address_alt','class'=>'form-control','value' => set_value('address_alt')));?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2" for="">Teléfono</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'phone','id'=>'phone','class'=>'form-control','value' => set_value('phone')));?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2" for="">Email</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'email','id'=>'email','class'=>'form-control','value' => set_value('email')));?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2" for="">Ciudad</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'city','id'=>'city','class'=>'form-control','value' => set_value('city')));?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2" for="">Provincia</label>
                    <div class="col-lg-10">
                      <?php echo form_input(array('name'=>'state','id'=>'state','class'=>'form-control','value' => set_value('state')));?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2" for="">Imagen / Logo</label>
                    <div class="col-lg-10">
                      <?php echo form_upload(['type'=>'file','name' => 'image', 'id' => 'image', 'class' => 'form-control']); ?>

                    </div>
                  </div>
                  <button type="submit" >Guardar</button>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

</div>
