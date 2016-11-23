<div class="row">
  	<div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <a href="<?=base_url()?>host_video/show_add" class="btn btn-xs btn-primary"><span class="fa fa-plus"></span> Add Data</a>
            </div>
            <div class="card-body no-padding">
                <table class="datatable table table-striped primary" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Host</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($records as $key):?>
                            <tr>
                                <td><?=$i?>.</td>
                                <td><?=$key->video_title?></td>
                                <td><?=$key->full_name?></td>
                                <td><?=$key->video_type?></td>
                                <td><?=($key->video_status == '0' ? '<span class="label label-default">InActive</span>' : '<span class="label label-info">Active</span>')?></td>
                                <td>
                                    <?=($key->video_status == '0' ? '<a href="'.base_url().'host_video/change_status/'.strEncrypt($key->video_id).'/1" onclick="return f_status(1, this, event)" class="btn btn-xs btn-default"><span class="fa fa-eye-slash"></span></a>' : '<a href="'.base_url().'host_video/change_status/'.strEncrypt($key->video_id).'/0" onclick="return f_status(1, this, event)" class="btn btn-xs btn-info"><span class="fa fa-eye"></span></a>')?>
                                    <a href="<?=base_url()?>host_video/show_edit/<?=strEncrypt($key->video_id)?>" class="btn btn-xs btn-success"><span class="fa fa-edit"></span></a>
                                    <a href="<?=base_url().'host_video/change_status/'.strEncrypt($key->video_id).'/99'?>" onclick="return f_status(2, this, event)" class="btn btn-xs btn-danger"><span class="fa fa-trash"></span></a>
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