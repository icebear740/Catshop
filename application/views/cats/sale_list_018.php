<?php
$this->load->view('cats/head');
$this->load->view('cats/nav');
?>
<body>
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-8">
    <br>
  </div>
</div> 

    <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-8">
  <h4>sale List Cats</h4>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-1">
</div>
</div>
<br>
    <div class="container">
         <table class="table table-borderless">
            <thead>
        <tr>
    <th>No</th>
    <th>Sale Id</th>
    <th>Sale Data</th>
    <th>Cat Name</th>
    <th>Costumer Name</th>
    <th>Costumer Address</th>
    <th>Costumer Phone</th>
</tr>
</div>
<?php $i=1; foreach($sales as $sale) { ?>
    <tr>
        <td><?=$i++?></td>
        <td><?=$sale->sale_id_018?></td>
        <td><?=tgl($sale->sale_date_018)?></td>
        <td><?=$sale->name_018?></td>
        <td><?=$sale->costumer_name_018?></td>
        <td><?=$sale->costumer_address_018?></td>
        <td><?=$sale->costumer_phone_018?></td>
      </tr><?php }?>

    </table>
</body>
</html>