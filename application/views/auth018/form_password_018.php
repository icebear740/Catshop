<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CATSHOP 018</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url('asset/css/nav.css')?>"/>
<body>

    <div class="container">
    <?=$this->session->flashdata('msg')?>
    <div style="color:red;"><?=validation_errors()?></div>
    <form action="" method="post">
    <div class="group">      
      <input type="password" name="oldpassword" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>OLD PASSWORD</label>
    </div>
      
    <div class="group">      
      <input type="password" name="newpassword" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>NEW PASSWORD</label>
    </div>
    <input type="submit" name="change" value="CHANGE PASSWORD" class="btn btn-success">
    <a href="<?=site_url()?>" class="btn btn-danger">HOMES</a>
  </form>
      
  
<!-- </div> 
    <?=$this->session->flashdata('msg')?>
    <div style="color:red;"><?=validation_errors()?></div>
    <form action="" method="post">
        <table>
            <tr>
                <td>OLD PASSWORD</td>
                <td><input type="password" name="oldpassword" required></td>
            </tr>
            <tr>
                <td>NEW PASSWORD</td>
                <td><input type="password" name="newpassword" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="change" value="CHANGE PASSWORD">
                </td>
            </tr>
        </table>
    </form>
    <hr>
    <a href="<?=base_url()?>">< HOME</a>
    -->
</body>
</html>