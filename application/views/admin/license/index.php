<div class="panel panel-default">
    <div class="panel-heading">License</div>
    <div class="panel-body">
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="row col-md-12" style="margin-left: 1px;">            
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table_row_style">
                                <th style="text-align: center;">Subscription date</th>
                                <th style="text-align: center;">Subscription date</th>
                                <th style="text-align: center;">Start date</th>
                                <th style="text-align: center;">Evolution period</th>
                                <th style="text-align: center;">Mac address</th>
                                <th style="text-align: center;">Cpu address</th>
                                <th style="text-align: center;">Processor address</th>
<!--                                <th style="text-align: center;">Edit</th>
                                <th style="text-align: center;">Delete</th>-->
                            </tr>
                            <?php foreach($license_list as $license_info){?>
                            <tr>
                                <th style="text-align: center;"><?php echo $license_info->key?></th>
                                <th style="text-align: center;"><?php echo $license_info->subscriptionDate?></th>
                                <th style="text-align: center;"><?php echo $license_info->startDate?></th>
                                <th style="text-align: center;"><?php echo $license_info->evolutionPeriod?></th>
                                <th style="text-align: center;"><?php echo $license_info->macAddress?></th>
                                <th style="text-align: center;"><?php echo $license_info->cpuAddress?></th>
                                <th style="text-align: center;"><?php echo $license_info->processorAddress?></th>
<!--                                <th style="text-align: center"><a href="<?php echo base_url() . "license/update_license"; ?>">Edit</a></th>
                                <th style="text-align: center; cursor: pointer;"><a onclick="open_modal_delete_license_confirm()"value="" class="">
                                        Delete </a></th>-->
                            </tr>
                            <?php } ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin/license/modal_delete_license_confirm");
