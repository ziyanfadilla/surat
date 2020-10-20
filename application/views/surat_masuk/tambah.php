        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">TAMBAH DATA SURAT MASUK</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open_multipart('surat_masuk/tambah');?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">Nomor Surat</label>
                        <input type="text" class="form-control"  name="nomer_surat" placeholder="Isikan Nomor Surat" required>
                    </div>
                    <div class="form-group">
                      <label for="">Kategori</label>
                        <select name="id_kat_surat" class="form-control" required>
                          <option>--Pilih Kategori--</option>
                            <?php  
                              foreach ($kategori_surat as $d) {
                                  echo "<option value='$d->id_kat_surat'>$d->kode</option>";
                              }
                              ?>
                        </select> 
                    </div>
                    <div class="form-group">
                      <label for="">Tanggal Masuk</label>
                        <input type="date" class="form-control"  name="tgl_masuk" placeholder="Isikan tanggal Masuk" required>
                    </div>

                      <div class="form-group">
                      <label for="">Alamat</label>
                        <textarea style="height:100px"  class="form-control" name="alamat_pengirim" placeholder="Masukan alamat"></textarea>                
                    </div>

                      <div class="form-group">
                      <label for="">Perihal</label>
                        <textarea style="height:100px"  class="form-control" name="perihal" placeholder="Masukan Perihal"></textarea>                
                    </div>

                    <div class="form-group">
                      <label for="">Disposisi</label>
                        <input type="text" class="form-control" name="disposisi" placeholder="Masukan Perihal"></textarea>                
                    </div>
                      
                      <?php if($user['role'] == 's'): ?>
                      <div class="form-group">
                      <label for="">Admin Tujuan</label>
                        <select name="id_user" class="form-control" required>
                          <option>--Pilih Admin--</option>
                            <?php  
                              foreach ($admin as $d) {
                                  echo "<option value='$d->id_user'>$d->nama</option>";
                              }
                              ?>
                        </select> 
                    </div>
                      
                        <?php else : ?>
                        
                            <input type="hidden" class="form-control"  name="id_user" value="<?php echo $user['id_user']?>"  required>
                            
                        <?php endif; ?>
                      
                    <div class="form-group">
                      <label for="">Foto</label>
                        <input type="file" class="form-control" value="" id="" name="foto" placeholder="isikan foto">
                                             
                    </div>
                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('surat_masuk','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->