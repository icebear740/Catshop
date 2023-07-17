<!-- R3G)!P^cpNLFI!(JEBXM -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CATSHOP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<style>
    /* ////////////// CARD /////////// */

    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,900;1,400;1,900&display=swap');
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Playfair Display', serif;
}
body{ background:url(asset/image/bg2.jpeg);
  background-size:cover;
  background-position:right;
  background-attachment:fixed;
}
#header{
  margin:1px;
}
#header>h1{
  text-align:center;
  font-size:3rem;
}
#header>p{
  text-align:center;
  font-size:1.5rem;
  font-style:italic;
}

.container{
  width:100vw;
  display:flex;
  justify-content:space-around;
  flex-wrap:wrap;
  padding:1px 20px;
}
.card{
  display:flex;
  flex-direction:column;
  width:400px;
  margin-bottom:60px;
}
.card>div{
  box-shadow:0 15px 20px 0 rgba(0,0,0,0.5);
}
.card-image{
  width:400px;
  height:250px;
}
.card-image>img{
  width:100%;
  height:100%;
  object-fit:cover;
  object-position:bottom;
}
.card-text{
  margin:-30px auto;
  margin-bottom:-50px;
  height:300px;
  width:300px;
  background:linear-gradient(135deg, #172a74, #21a9af);
  color:#fff;
  padding:20px;
}
.card-meal-type{
  font-style:italic;
}
.card-title{
  font-size:2.2rem;
  margin-bottom:20px;
  margin-top:5px;
}
.card-body{
  font-size:1.25rem;
}
.card-price{
  width:100px;
  height:100px;
  background-color:#970C0A;
  color:#fff;
  margin-left:auto;
  font-size:2rem;
  display:flex;
  justify-content:center;
  align-items:center;
}


    /* ////////////// CARD /////////// */
    
    
    .konten{
    }
      .carousel-inner img {
        
    width: 100%;
    height: 100%;
  }
		.header-blue {
    background:linear-gradient(135deg, #172a74, #21a9af);
    background-color:#184e8e;
    padding-bottom:80px;
    font-family:'Source Sans Pro', sans-serif;
  }
  
  @media (min-width:768px) {
    .header-blue {
      padding-bottom:0px;
    }
  }
  
  .header-blue .navbar {
    background:transparent;
    padding-top:.75rem;
    padding-bottom:.75rem;
    color:#fff;
    border-radius:0;
    box-shadow:none;
    border:none;
  }
  
  @media (min-width:768px) {
    .header-blue .navbar {
      padding-top:1rem;
      padding-bottom:1rem;
    }
  }
  
  .header-blue .navbar .navbar-brand {
    font-weight:bold;
    color:inherit;
  }
  
  .header-blue .navbar .navbar-brand:hover {
    color:#f0f0f0;
  }
  
  .header-blue .navbar .navbar-collapse {
    border-top:1px solid rgba(255,255,255,0.3);
    margin-top:.5rem;
  }
  
  @media (min-width:768px) {
    .header-blue .navbar .navbar-collapse {
      border-color:transparent;
      margin:0;
    }
  }
  
  .header-blue .navbar .navbar-collapse span .login {
    color:#d9d9d9;
    margin-right:.5rem;
    text-decoration:none;
  }
  
  .header-blue .navbar .navbar-collapse span .login:hover {
    color:#fff;
  }
  
  .header-blue .navbar .navbar-toggler {
    border-color:rgba(255,255,255,0.3);
  }
  
  .header-blue .navbar .navbar-toggler:hover, .header-blue .navbar-toggler:focus {
    background:none;
  }
  
  .header-blue .navbar .navbar-nav a.active, .header-blue .navbar .navbar-nav > .show .dropdown-item {
    background:none;
    box-shadow:none;
  }
  
  @media (min-width: 768px) {
    .header-blue .navbar-nav .nav-link {
      padding-left:.7rem;
      padding-right:.7rem;
    }
  }
  
  @media (min-width: 992px) {
    .header-blue .navbar-nav .nav-link {
      padding-left:1.2rem;
      padding-right:1.2rem;
    }
  }
  
  .header-blue .navbar .navbar-nav > li > .dropdown-menu {
    margin-top:-5px;
    box-shadow:0 4px 8px rgba(0,0,0,.1);
    background-color:#fff;
    border-radius:2px;
  }
  
  .header-blue .navbar .dropdown-menu .dropdown-item:focus, .header-blue .navbar .dropdown-menu .dropdown-item {
    line-height:2;
    color:#37434d;
  }
  
  .header-blue .navbar .dropdown-menu .dropdown-item:focus, .header-blue .navbar .dropdown-menu .dropdown-item:hover {
    background:#ebeff1;
  }
  
  .header-blue .action-button, .header-blue .action-button:not(.disabled):active {
    border:1px solid rgba(255,255,255,0.7);
    border-radius:40px;
    color:#ebeff1;
    box-shadow:none;
    text-shadow:none;
    padding:.3rem .8rem;
    background:transparent;
    transition:background-color 0.25s;
    outline:none;
  }
  
  .header-blue .action-button:hover {
    color:#fff;
  }
  
  .header-blue .navbar .form-inline label {
    color:#d9d9d9;
  }
  
  .header-blue .navbar .form-inline .search-field {
    display:inline-block;
    width:80%;
    background:none;
    border:none;
    border-bottom:1px solid transparent;
    border-radius:0;
    color:#ccc;
    box-shadow:none;
    color:inherit;
    transition:border-bottom-color 0.3s;
  }
  
  .header-blue .navbar .form-inline .search-field:focus {
    border-bottom:1px solid #ccc;
  }
  
  .header-blue .hero {
    margin-top:20px;
    text-align:center;
  }
  
  @media (min-width:768px) {
    .header-blue .hero {
      margin-top:60px;
      text-align:left;
    }
  }
  
  .header-blue .hero h1 {
    color:#fff;
    font-size:40px;
    margin-top:0;
    margin-bottom:15px;
    font-weight:300;
    line-height:1.4;
  }
  
  @media (min-width:992px) {
    .header-blue .hero h1 {
      margin-top:190px;
      margin-bottom:24px;
      line-height:1.2;
    }
  }
  
  .header-blue .hero p {
    color:rgba(255,255,255,0.8);
    font-size:20px;
    margin-bottom:30px;
    font-weight:300;
  }
  
  .header-blue .phone-holder {
    text-align:right;
  }
  
  .header-blue div.iphone-mockup {
    position:relative;
    max-width:300px;
    margin:20px;
    display:inline-block;
  }
  
  .header-blue .iphone-mockup img.device {
    width:100%;
    height:auto;
  }
  
  .header-blue .iphone-mockup .screen {
    position:absolute;
    width:88%;
    height:77%;
    top:12%;
    border-radius:2px;
    left:6%;
    border:1px solid #444;
    background-color:#aaa;
    overflow:hidden;
    background:url(../../assets/img/screen-content-iphone-6.jpg);
    background-size:cover;
    background-position:center;
  }
  
  .header-blue .iphone-mockup .screen:before {
    content:'';
    background-color:#fff;
    position:absolute;
    width:70%;
    height:140%;
    top:-12%;
    right:-60%;
    transform:rotate(-19deg);
    opacity:0.2;
  }
  
  
		</style>
</head>