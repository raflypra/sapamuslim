<div class="row">
  	<div class="col-xs-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body no-padding">
                <table class="datatable table table-striped primary" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Date Reg</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($records as $key):?>
                            <tr>
                                <td><?=$i?>.</td>
                                <td><?=$key->name?></td>
                                <td><?=$key->gender?></td>
                                <td><?=$key->phone_number?></td>
                                <td><?=$key->email?></td>
                                <td><?=tgl_format($key->time_created)?></td>
                                <td><?=($key->active == '0' ? '<span class="label label-default">InActive</span>' : ($key->active == '2' ? '<span class="label label-danger">Banned</span>':'<span class="label label-info">Active</span>'))?></td>
                                <td>
                                    <?=($key->active == '0' ? '<a href="'.base_url().'viewer/change_status/'.strEncrypt($key->user_id).'/1" class="btn btn-xs btn-default"><span class="fa fa-eye-slash"></span></a>' : '<a href="'.base_url().'viewer/change_status/'.strEncrypt($key->user_id).'/0" class="btn btn-xs btn-info"><span class="fa fa-eye"></span></a>')?>
                                    <a href="<?=base_url()?>viewer/show_edit/<?=strEncrypt($key->user_id)?>" class="btn btn-xs btn-success"><span class="fa fa-edit"></span></a>
                                    <a href="<?=base_url().'viewer/change_status/'.strEncrypt($key->user_id).'/99'?>" class="btn btn-xs btn-danger"><span class="fa fa-trash"></span></a>
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