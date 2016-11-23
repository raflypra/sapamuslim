<div class="row">
  	<div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <a href="<?=base_url()?>viewer" class="btn btn-xs btn-default"><span class="fa fa-refresh"></span> Reload</a>
            </div>
            <div class="card-body no-padding">
                <table class="datatable table table-striped primary" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($records as $key):?>
                            <tr>
                                <td><?=$i?>.</td>
                                <td><?=$key->name?></td>
                                <td><?=$key->phone_number?></td>
                                <td><?=$key->email?></td>
                                <td><?=($key->active == '0' ? '<span class="label label-default">InActive</span>' : ($key->active == '2' ? '<span class="label label-danger">Banned</span>':'<span class="label label-info">Active</span>'))?></td>
                                <td>
                                    <?php 
                                        if($key->active == '0'){
                                            echo '<a href="'.base_url().'viewer/change_status/'.strEncrypt($key->user_id).'/1" onclick="f_status(1, this, event)" class="btn btn-xs btn-default"><span class="fa fa-eye-slash"></span></a>';
                                            echo '<a href="'.base_url().'viewer/change_status/'.strEncrypt($key->user_id).'/2" onclick="f_status(1, this, event)" class="btn btn-xs btn-primary"><span class="fa fa-user-times"></span></a>';
                                        }else{
                                            if($key->active == '1'){
                                                echo '<a href="'.base_url().'viewer/change_status/'.strEncrypt($key->user_id).'/0" onclick="f_status(1, this, event)" class="btn btn-xs btn-info"><span class="fa fa-eye"></span></a>';
                                            }else{
                                                echo '<a href="'.base_url().'viewer/change_status/'.strEncrypt($key->user_id).'/1" onclick="f_status(1, this, event)" class="btn btn-xs btn-default"><span class="fa fa-user"></span></a>';
                                            }
                                        }
                                    ?>
                                    <a href="<?=base_url().'viewer/change_status/'.strEncrypt($key->user_id).'/99'?>" onclick="f_status(2, this, event)" class="btn btn-xs btn-danger"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                            <?php $i++?>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>