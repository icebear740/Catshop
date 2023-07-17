<?php
$this->load->view('cats/head');
$this->load->view('cats/nav');
?>
<body>
    <h1>Cats Sale Form</h1>
    <form action="" method="post">
    <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <table>
        <tr>
            <td>Cat Id</td>
            <td><?=$cat->id_018?></td>
        </tr>
        <tr>
            <td>Cat Name</td>
            <td><?=$cat->name_018?></td>
        </tr>
        <tr>
            <td>Cat Type</td>
            <td><?=$cat->type_018?></td>
        </tr>
        <tr>
            <td>Cat price</td>
            <td><?=$cat->price_018?></td>
        </tr>
        <tr>
            <td>Costumer Name</td>
            <td><input type="text" name="costumer_name_018"/></td>
        </tr>
        <hr>
        <tr>
            <td>Costumer Address</td>
            <td><textarea name="costumer_address_018"></textarea></td>
        </tr>
        <tr>
            <td>Costumer Phone</td>
            <td><input type="text" name="costumer_phone_018"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="SALE" name="submit" class="btn btn-success"></td>
        </tr>
    </table>
</div>
</form>