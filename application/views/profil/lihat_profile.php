

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Chat box -->
              <div class="box box-success">
                <div class="box-header">
                  <i class="fa fa-user"></i>
                  <h3 class="box-title">Profil Pengguna</h3>
                </div>
                <div class="form-group">
                  <table class="table table-condensed" border='0'>
                      <tr>
                          <td rowspan="7" width='250'><center><img style="width:210px;height:210px" src="<?php echo $profil['foto'];?>"  alt="User Image"></center></td>
                          <td width='250'>Nama</td>
                          <td>:</td>
                          <td><?php echo $profil['nama'];?></td>
                      </tr>
                      <tr>
                          <td>USERNAME</td>
                          <td>:</td>
                          <td><?php echo $profil['username'];?></td>
                      </tr>
                      <tr>
                          <td>STATUS</td>
                          <td>:</td>
                          <td><?php 
                                    if($profil['role']=='s'){
                                        echo "Super Admin";
                                    }  else {
                                        echo "Admin";
                                    }
                               ?></td>
                      </tr>
                      <tr>
                      </tr>
                      
                  </table>
                </div>
                    <?php //<td><a href='<?= base_url("dashboard_user/edit/$record[id_user]") ' class="btn btn-primary btn-block btn-flat"><i class="fa fa-pencil-square-o"></i>Edit</a></td>
                ?>
                <td><a href='<?= base_url("profil/edit_profile/$profil[id_user]") ?>' class="btn btn-primary btn-block btn-flat"><i class="fa fa-pencil-square-o"></i>Edit</a></td>
                </div><!-- /.chat -->
              </div><!-- /.box (chat box) -->
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
