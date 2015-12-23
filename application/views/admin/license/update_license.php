<div class="panel panel-default">
    <div class="panel-heading">Update License</div>
    <div class="panel-body">
        <div class="form-background top-bottom-padding">
            <div class="row">
                <div class ="col-md-8 margin-top-bottom">
                    <?php echo form_open("license/update_license", array('id' => 'form_update_license', 'class' => 'form-horizontal')); ?>
                    <div class ="row">
                        <div class="col-md-12"> </div>
                    </div>
                    <div class="form-group">
                        <label for="subscription_date" class="col-md-6 control-label requiredField">
                            Subscription date :
                        </label>
                        <div class ="col-md-6">
                            <input id="datepicker-example1" class="form-control" type="text" style="z-index: 9999">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="start_date" class="col-md-6 control-label requiredField">
                            Start date :
                        </label>
                        <div class ="col-md-6">
                            <input id="datepicker-example2" class="form-control" type="text" style="z-index: 9999">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="evolution_period" class="col-md-6 control-label requiredField">
                            Evolution period :
                        </label>
                        <div class ="col-md-6">
                            <input id="evolution_period" class="form-control" type="text" value="" name="evolution_period">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="mac_address" class="col-md-6 control-label requiredField">
                            MAC address:
                        </label>
                        <div class ="col-md-6">
                            <input id="mac_address" class="form-control" type="text" value="" name="mac_address">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="cpu_address" class="col-md-6 control-label requiredField">
                            CPU address :
                        </label>
                        <div class ="col-md-6">
                            <input id="cpu_address" class="form-control" type="text" value="" name="cpu_address">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="processor_address" class="col-md-6 control-label requiredField">
                            Processor_address :
                        </label>
                        <div class ="col-md-6">
                            <input id="processor_address" class="form-control" type="text" value="" name="processor_address">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="submit_update_license" class="col-md-6 control-label requiredField">
                        </label>
                        <div class ="col-md-3 pull-right">
                            <input id="submit_update_license" class="form-control button btn_custom_button" type="submit" value="update" name="submit_update_license">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

