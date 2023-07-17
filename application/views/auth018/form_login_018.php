<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CATSHOP 018</title>
</head>
<link rel="stylesheet" href="<?=base_url('asset/css/login.css')?>"/>
<body>
    <div class="container">
	<div class="screen">
    <?=$this->session->flashdata('msg')?>
		<div class="screen__content">
        <div style="color:red;"><?=validation_errors()?></div>
			<form class="login" action="" method="post">
            <h2>Login</h2>
            <h2>To</h2>
            <h2>Catshop 018</h2>
            <br>
			
				<div class="login__field">
					<?=$this->session->flashdata('msg')?>
					<div style="color:red;"><?=validation_errors()?></div>
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="username" placeholder="Username" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="password" placeholder="Password">
				</div>
				<div>
				
                <input type="submit" class="button login__submit" name="login" value="LOGIN NOW">
					<i class="button__icon fas fa-chevron-right"></i>
</div>				
			</form>
			<div class="social-login">
				<h3></h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

<!-- 
    <?=$this->session->flashdata('msg')?>
    <div style="color:red;"><?=validation_errors()?></div>
    <form action="" method="post">
        <table>
            <tr>
                <td>USERNAME</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="LOGIN"></td>
            </tr>
        </table>
    </form>
     -->
</body>
</html>