<?php
$this->load->view('cats/head');
$this->load->view('cats/nav');
?>
<div class="col-sm-9">
    <h2>categories</h2>
    <br>
    <?=$this->session->flashdata("msg");?>
    <a href="<?=site_url("cate018/add")?>" class="btn btn-success" role="button">add categories</a>
    <br>
    <div class="container">&nbsp;
    <table class="table table-borderless">
        <tr>
            <th>NO</th>
            <th>Name</th>
            <th>Description</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $i=1; foreach ($categories018 as $cate) { ?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$cate->cate_name_018?></td>
                <td><?=$cate->description_018?></td>
                <td><a href="<?=site_url('cate018/edit/'.$cate->cate_id_018)?>"><button type="button" class="btn btn-success"> <i class="fas fa-pen"></i></button></a></td>
                <td><a href="<?=site_url('cate018/delete/'.$cate->cate_id_018)?>" onclick="return confirm('are u sure?')"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></td>
            </tr>
            <?php } ?>
        </table>
        </div>