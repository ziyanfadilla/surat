        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">Edit Data</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open_multipart('dashboard/edit_profile');?>
                  <div class="box-body">
                    <input type="hidden" name="id" value="<?php echo $record['id_anggota']?>">
                  <div class="form-group">
                      <label for="">Nama</label>
                        <input type="text" class="form-control" value="<?php echo $record['nama']?>"  name="nama" placeholder="Isikan nama" required>
                    </div>
                      <div class="form-group">
                      <label for="">NIM</label>
                        <input type="text" class="form-control" value="<?php echo $record['nim']?>"  name="nim" placeholder="Isikan nomer induk pegawai" required>
                    </div>
                      <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" value="<?php echo $record['tgl_lahir']?>"  name="tgl_lahir"  required>
                    </div>
                     <div class="form-group">
                      <label for="">HP</label>
                        <input type="text" class="form-control" value="<?php echo $record['no_telp']?>"  name="no_telp" placeholder="Isikan nomer handphone" required>
                    </div>
                    <div class="form-group">
                    <label for="">Email</label>
                        <input type="text" class="form-control" value="<?php echo $record['email']?>" name="email" placeholder="Isikan nomer handphone" required>
                    </div>
                    <div class="form-group">
                      <label for="">Alamat</label>
                        <textarea style="height:100px"  class="form-control"  name="alamat" placeholder="Masukan alamat"><?php echo $record['tgl_lahir']?></textarea>                
                    </div>
                    <div class="form-group">
                      <label for="">Username</label>
                        <input type="text" class="form-control" value="<?php echo $record['username']?>"  name="username" placeholder="Isikan nomer username" required>
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                        <input type="text" class="form-control" value=""  name="password" placeholder="Isikan password" required>
                    </div>
                    <input type="hidden" name="gambar" value="<?php echo $record['foto']?>">
                   
                    <div class="form-group">
                      <label for="">Foto</label>
                        <input type="file" class="form-control"  name="foto" placeholder="">
                                            
                    </div>
                      <div class="form-group">
                      <img src="<?php echo $record['foto'];?>"  width="200" /><br />
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('anggota','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->