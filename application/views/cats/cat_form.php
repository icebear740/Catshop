<?php
$this->load->view('cats/head');
$this->load->view('cats/nav');
?>
<body>
    <h1>form Cats</h1>
    <br>
    <?php
        $name='';
        $type='';
        $gender='';
        $age='';
        $price='';
    
    if(isset($cat)){
        $name=$cat->name_018;
        $type=$cat->type_018;
        $gender=$cat->gender_018;
        $age=$cat->age_018;
        $price=$cat->price_018;
    }
    ?>
    <form action="" method="post">
    <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
  <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr" name="name_018" value="<?=$name?>" required>
</div>   
    <div class="form-group">
    <label for="sel1">choose type</label>
    <select class="form-control" id="sel1" name="type_018" required>
    <?php foreach($category as $cate) { ?>
        <option value="<?=$cate->cate_name_018?>" <?=set_select('type_018',$cate->cate_name_018,$type==$cate->cate_name_018?TRUE:FALSE)?>><?=$cate->cate_name_018?></option>
                    <?php } ?>
  </div>
  <br>
  <div class="form-group">
                <label for="ge">gender</label>
                <input type="radio" name="gender_018" id="ge" value="Male" <?=$gender=='Male'?'checked':''?> required>Male
                <input type="radio" name="gender_018" id="ge" value="Female" <?=$gender=='Female'?'checked':''?> required>Female
            <br>
    </div>
            <div class="form-group">
            <label for="ag">Age:</label>
  <input type="number" class="form-control" id="ag" name="age_018" value="<?=$age?>" required>
    </div>
            <div class="form-group">
            <label for="pr">Price:</label>
  <input type="number" class="form-control" id="pr" name="price_018" value="<?=$price?>" required>
</div>   
<input type="submit" value="SAVE" name="submit" class="btn btn-success">
<a href="<?=site_url('cats018')?>" class="btn btn-danger">cancel</a>
</div> 

    
                <!--
                <td>Type</td>
                <td><select name="type_018" id="" required>
                    <option value="">choose type</option>
                    <?php foreach($category as $cate) { ?>
                    <option value="<?=$cate->cate_name_018?>" <?=set_select('type_018',$cate->cate_name_018,$type==$cate->cate_name_018?TRUE:FALSE)?>><?=$cate->cate_name_018?></option>
                    <?php } ?>
                    <!--
                    <option value="domestic" <?=$type=='domestic'?'selected':''?>>domestic</option>
                    <option value="anggora" <?=$type=='anggora'?'selected':''?>>anggora</option>
                    <option value="persia" <?=$type=='persia'?'selected':''?>>persia</option>
                </select></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                <input type="radio" name="gender_018" id="" value="Male" <?=$gender=='Male'?'checked':''?> required>Male
                <input type="radio" name="gender_018" id="" value="Female" <?=$gender=='Female'?'checked':''?> required>Female
            </td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age_018" id="" value="<?=$age?>" required></td>
            </tr>
            <tr>
                <td>price</td>
                <td><input type="number" name="price_018" id="" value="<?=$price?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="<?=site_url('cats018/index')?>">cancel</td>

            </tr>
        </table>
    </form>
