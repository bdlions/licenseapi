<div class="panel panel-default">
    <div class="panel-heading">Create License key</div>
    <div class="panel-body">
        <div class="form-background top-bottom-padding">
            <div class="row">
                <div class ="col-md-8 margin-top-bottom">
                    <?php echo form_open("license_key/create_license_key", array('id' => 'form_create_license_key', 'class' => 'form-horizontal')); ?>
                    <div class ="row">
                        <div class="col-md-12"></div>
                    </div>
                    <div class="form-group">
                        <label for="key" class="col-md-6 control-label requiredField">
                           Key : 
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($key + array('class' => 'form-control')); ?>
                        </div> 
                    </div>                    
                    <div class="form-group">
                        <label for="submit_create_license_key" class="col-md-6 control-label requiredField">
                        </label>
                        <div class ="col-md-3 pull-right">
                            <?php echo form_submit($submit_create_license_key + array('class' => 'form-control button')); ?>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>