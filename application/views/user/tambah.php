        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">TAMBAH DATA USER</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('user/tambah');?>
                  <div class="box-body">
                    <div class="form-group">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Nama</label>
                      <input type="text" name="nama" required="" class="form-control" placeholder="Masukan Nama">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Username</label>
                      <input type="text" name="username" required="" class="form-control" placeholder="Masukan Username">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" required="" class="form-control" placeholder="Masukan Password">
                    </div>
                    <div class="form-group">
                          <label for="">Role</label>
                      <select name="role" class="form-control" required>
                          <option value="s">Super Admin</option>
                          <option value="a">Admin 1</option>
                          <option value="b">Admin 2</option>
                          <option value="c">Admin 3</option>
                        </select> 
                   </div> 
                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('user','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->