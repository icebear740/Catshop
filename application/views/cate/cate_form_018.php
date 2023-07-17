<?php
$this->load->view('cats/head');
$this->load->view('cats/nav');
?>
<div class="col-sm-9">
    <h2>categori</h2>
    <br>
    <?php
    $name="";
    $description="";

    if(isset($cate)) {
        $name=$cate->cate_name_018;
        $description=$cate->description_018;
    }
    ?>
<form action="" method="post">
  <div class="form-group">
  <label for="nam">Name Categoies:</label>
  <input type="text" class="form-control" id="nam" name="cate_name_018" value="<?=$name?>" required>
</div>   
<div class="form-group">
  <label for="nam">Description:</label>
  <textarea class="form-control" id="nam" name="description_018" required><?=$description?></textarea>
</div>
<input type="submit" value="SAVE" name="submit" class="btn btn-success">
<a href="<?=site_url('cate018')?>" class="btn btn-danger">cancel</a>

</form>

<!---
        <div>
            <label> Name categories </label>
            <input type="text" class="form-control sm-a" name="cate_name_018" value="<?=$name?>" required>
</div>
<div>
            <label> Description </label>
            <textarea class="form-control sm-a" name="description_018" value="<?=$description?>" required></textarea>
</div>
    <div align="center">
        <button type="submit" class="btn-success" name="submit" value="submit">SAVE</button>
</div>
</form>
</div>