<div class="panel panel-default">
    <div class="panel-heading">Update License</div>
    <div class="panel-body">
        <div class="form-background top-bottom-padding">
            <div class="row">
                <div class ="col-md-8 margin-top-bottom">
                    <?php echo form_open("license/update_license_info/" . $license_info->key, array('id' => 'form_update_license', 'class' => 'form-horizontal')); ?>
                    <div class ="row">
                        <div class="col-md-12"> </div>
                    </div>
                    <div class="form-group">
                        <label for="subscription_date" class="col-md-6 control-label requiredField">
                            Subscription Id :

                        </label>
                        <div class ="col-md-6">
                            <?php echo $license_info->key; ?>
                            <!--<input id="datepicker-example1" class="form-control" type="text" style="z-index: 9999">-->
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="subscription_date" class="col-md-6 control-label requiredField">
                            Subscription date :
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($subscription_date + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="start_date" class="col-md-6 control-label requiredField">
                            Start date :
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($start_date + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="evolution_period" class="col-md-6 control-label requiredField">
                            Evolution period :
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($evolution_period + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="mac_address" class="col-md-6 control-label requiredField">
                            MAC address:
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($mac_address + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="cpu_address" class="col-md-6 control-label requiredField">
                            CPU address :
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($cpu_address + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="processor_address" class="col-md-6 control-label requiredField">
                            Processor_address :
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($processor_address + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="submit_update_license" class="col-md-6 control-label requiredField">
                        </label>
                        <div class ="col-md-3 pull-right">
                            <?php echo form_input($submit_update_license + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

