<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('cats/head');
$this->load->view('cats/nav');
?>
<body>
<style>
.pagination {
	display: flex;
  justify-content: center;
	padding: 1em 0;
  color:white;
}

.pagination a,
.pagination strong {
	border: 1px solid silver;
	border-radius: 8px;
	color: black;
  width: 63px;
  height: 40px;
  background-color: white;
	padding: 0.5em;
	margin-right: 0.5em;
	text-decoration: none;
}

.pagination a:hover,
.pagination strong {
	border: 1px solid #008cba;
	background-color: #008cba;
	color: white;
}
</style>
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-8">
    <br>
  </div>
</div> 

    <div class="row">
  <div class="col-sm-4"><?=$this->session->flashdata('msg')?></div>
  <div class="col-sm-8">
  <h4>List Cats</h4>
 
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-1">
    <a href="<?=site_url('cats018/add')?>" ><button type="button" class="btn btn-primary">add <i class="fas fa-plus"></i></button></a>
</div>
</div>
<br>
    <div class="container">
         <table class="table table-borderless">
            <thead>
        <tr>
    <th>No</th>
    <th>Name</th>
    <th>Type</th>
    <th>Gender</th>
    <th>Age(Month)</th>
    <th>Price($)</th>
    <th>Photo</th>
    <th colspan="3">action</th>
</tr>
</div>
<?php foreach($cats as $cat) { ?>
    <tr>
        <td><?=$i++?></td>
        <td><?=$cat->name_018?></td>
        <td><?=$cat->type_018?></td>
        <td><?=$cat->gender_018?></td>
        <td><?=$cat->age_018?></td>
        <td><?=$cat->price_018?></td>
        <td><img class="text-center" src="<?= base_url('./uploads/cats/' . $cat->photo_cats_018) ?>" style="border-radius:50%" width="70" height="60"><br><a href="<?=site_url('cats018/changephoto/'.$cat->id_018)?>">change photo</a></td>
        <td><a href="<?=site_url('cats018/edit/'.$cat->id_018)?>"><button type="button" class="btn btn-success"> <i class="fas fa-pen"></i></button></a></td>
        <td><a href="<?=site_url('cats018/delete/'.$cat->id_018)?>" onclick="return confirm('are u sure?')"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></td>
        <td><?php if($cat->sold_018==1) echo 'SOLD'; else { ?><a href="<?=site_url('cats018/sale/'.$cat->id_018)?>"><button type="button" class="btn btn-info">SALE</button></a><?php } ?></td>
      </tr><?php }?>

    </table>
    
    
<h6><?=$this->pagination->create_links();?></></h6>
</ul>
</body>
</html>