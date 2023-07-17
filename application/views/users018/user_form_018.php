<?php
$this->load->view('cats/head');
$this->load->view('cats/nav');
?>
<!-- content utama -->
<div class="col-sm-9">
    <h2>USER FORM</h2>
    <hr>
    <?php 
        $username='';
        $usertype='';
        $fullname='';

        if(isset($user)) {
            $username=$user->username_018;
            $usertype=$user->usertype_018;
            $fullname=$user->fullname_018;
        }
    ?>
    <form action="" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control input-sm" name="username_018" value="<?=$username?>" required>
            </div>
            <div class="form-group">
                <label>Usertype</label>
            <div class="radio">
                <label><input type="radio" name="usertype_018" value="Manager" <?=$usertype=='Manager'?'checked':''?> required>Manager </label>
                <label><input type="radio" name="usertype_018" value="Cashier" <?=$usertype=='Cashier'?'checked':''?> required>Cashier </label>
            </div>
            <div class="form-group">
                <label>Fullname</label>
                <input type="text" class="form-control input-sm" name="fullname_018" value="<?=$fullname?>" required>
            </div>
            <div align="center">
            <button type="submit" class="btn btn-success" name="submit" value="submit">SAVE</button>
            <a href="<?=site_url('user018')?>" class="btn btn-danger" role="button">CANCEL</a>
            </div>
    </form>
</div>
</body>
</html>