<?php
$this->load->view('cats/head');
$this->load->view('cats/nav');
?>
<!-- content utama -->
<div class="col-sm-9">
    <h2>USERS LIST</h2>
    <a href="<?=base_url()?>" class="btn btn-warning">< HOME</a>
    <hr>
    <?=$this->session->flashdata('msg');?><br>
    <a href="<?=site_url('user018/add')?>" class="btn btn-info" role="button">Add new user</a>
    <hr>
    <table class="table table-bordered table-striped table-primary">
        <tr>
            <th>No</th>     
            <th>Username</th>
            <th>Usertype</th>
            <th>Fullname</th>
            <th colspan="3">Action</th>
        </tr>
        <?php $i=1; foreach($users as $user) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$user->username_018?></td>
            <td><?=$user->usertype_018?></td>
            <td><?=$user->fullname_018?></td>
            <td><a href="<?=site_url('user018/edit/'.$user->userid_018)?>">Edit</a></td>
            <td><a href="<?=site_url('user018/delete/'.$user->userid_018)?>" onclick="return confirm('Are you sure?')">Delete</a></td>
            <td><a href="<?=site_url('user018/resetpass/'.$user->userid_018)?>" onclick="return confirm('Are you sure?')">Reset Password</a></td>
        </tr>
        <?php } ?>
    </table>
</div>  
</body>
</html>