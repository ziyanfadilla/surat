<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>AdmSurat- Administrasi Persutan</title>
<link rel="shortcut icon" type="image/icon" href="<?php //echo base_url()?>assets/img/logofavicxon.png"/>
<link href="<?php echo base_url(); 
            ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); 
            ?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(); 
            ?>assets/css/styles.css" rel="stylesheet">
<link href="<?php echo base_url(); 
            ?>assets/css/font-awesome.css" rel="stylesheet" />

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

    <script type="text/javascript">
        function cekform()
        {
            if(!$("#username").val())
            {
                alert('maaf username tidak boleh kosong');
                $("#username").focus();
                return false;
            }
            if(!$("#password").val())
            {
                alert('maaf password tidak boeh kosong');
                $("#password").focus();
                return false;
            }
        }
    </script>

</head>

<body>
    <div class=""></div>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <img src="">
                <h4>Login Adm Surat</h4>
                <br>
                <br>  
                </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div onsubmit="return cekform();" class="panel-body">
                                <?php
                                    echo form_open('login/login');
                                ?>
                                <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name= "username" id="nip" class="form-control" placeholder="Username " />
                                        </div>
                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name= "password" id="password" class="form-control"  placeholder="Password" />
                                        </div>  
                                <button name="submit" type="submit" class="btn btn-primary form-control">Login Now</button>                                 <hr />
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url(); 
   ?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url(); 
   ?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url(); 
   ?>assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url(); 
   ?>assets/js/custom.js"></script>

   
</body>

</html>
