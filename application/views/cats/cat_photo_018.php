<?php
$this->load->view('cats/head');
$this->load->view('cats/nav');
?>
<body>
<?=$this->session->flashdata('msg')?>
    <div style="color: red;"><?=$error?></div>
    <form action="" method="post" enctype="multipart/form-data">

  <div class="container">
<div class="card" style="width:400px">
<label for="usr" class="text-center">current photo:</label>
  <img class="card-img-top" src="<?= base_url('uploads/cats/' . $cat->photo_cats_018) ?>">
  <label for="n" class="text-center">New :</label>
  <input type="file" name="photo" id="n" required>
  <input type="submit" name="upload" class="btn btn-success" value="UPLOAD PHOTO">
  <div class="card-body">
  </div>
  </div>  
</div>
</div>
        