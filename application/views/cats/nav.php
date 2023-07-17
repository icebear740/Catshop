<div>
        <div class="header-blue">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
<img class="text-center" src="<?= base_url('./uploads/users/' . $this->session->userdata('photo')) ?>" style="border-radius:50%" width="70" height="60">
<h6 class="text-center"> <?=$this->session->userdata('fullname')?> login as <?=$this->session->userdata('usertype')?></h6>

                <div class="container"><a class="navbar-brand" href="#">Cats shop</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="<?=site_url()?>">Home</a></li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Menu </a>
                                <div class="dropdown-menu" role="menu">
                                <?php if($this->session->userdata('usertype') == 'Manager'){ ?>
                                    <a class="dropdown-item" role="presentation" href="<?=site_url('User018')?>">Manage List</a>
                                    <a class="dropdown-item" role="presentation" href="<?=site_url('cats018/sales')?>">Report</a><?php } ?>
                                    <a class="dropdown-item" role="presentation" href="<?=site_url('cats018')?>">Manage Cats</a>
                                    <a class="dropdown-item" role="presentation" href="<?=site_url('cate018')?>">Manage Category</a>
                                <div class="spinner-border">
                                <a class="dropdown-item" role="presentation" href="<?=site_url('auth018/changephoto')?>">change photo</a>
                                </div>
                                <a class="dropdown-item" href="<?=site_url('auth018/changepass')?>">Change Password</span></a>
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                        </form><span class="navbar-text"> <a href="#" class="login"></a></span><a class="btn btn-light action-button" role="button" href="<?=site_url('auth018/logout')?>"">Logout</a></div>
                </div>
            </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
