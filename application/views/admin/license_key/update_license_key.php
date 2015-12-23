<div class="panel panel-default">
    <div class="panel-heading">Update License key</div>
    <div class="panel-body">
        <div class="form-background top-bottom-padding">
            <div class="row">
                <div class ="col-md-8 margin-top-bottom">
                    <?php echo form_open("license_key/update_license_key", array('id' => 'form_update_license_key', 'class' => 'form-horizontal')); ?>
                    <div class ="row">
                        <div class="col-md-12"> </div>
                    </div>
                    <div class="form-group">
                        <label for="is_used" class="col-md-6 control-label requiredField">
                            Is Used : 
                        </label>
                        <div class ="col-md-6">
                            <input id="is_used" class="form-control" type="text" value="" name="is_used">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="created_on" class="col-md-6 control-label requiredField">
                            Created on : 
                        </label>
                        <div class ="col-md-6">
                            <input id="created_on" class="form-control" type="text" value="" name="created_on">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="modifed_on" class="col-md-6 control-label requiredField">
                            Modified on : 
                        </label>
                        <div class ="col-md-6">
                            <input id="modified_on" class="form-control" type="text" value="" name="modified_on">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="submit_update_license_key" class="col-md-6 control-label requiredField">
                        </label>
                        <div class ="col-md-3 pull-right">
                            <input id="submit_update_license_key" class="form-control button btn_custom_button" type="submit" value="update" name="submit_update_license_key">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>