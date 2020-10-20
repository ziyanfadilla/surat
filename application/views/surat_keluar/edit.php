        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">EDIT DATA SURAT KELUAR</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open_multipart('surat_keluar/edit');?>
                  <div class="box-body">
                    
                  <div class="form-group">
                      <label for="">Nomor Surat</label>
                        <input type="text" class="form-control" value="<?php echo $record['nomer_surat']?>"  name="nomer_surat" placeholder="Isikan nama" required>
                    </div>

                      <div class="form-group">
                     <label for="">Kategori</label>
                        <select name="id_kat_surat" class="form-control" required>
                            <?php
                            foreach ($kategori_surat as $p)
                            {
                                echo "<option value='$p->id_kat_surat'";
                                echo $record['id_kat_surat']==$p->id_kat_surat?'selected':'';
                                echo">$p->kode</option>";
                            }
                            ?>
                        </select> 
                    </div>
                      <div class="form-group">
                      <label for="">Tanggal Keluar</label>
                        <input type="date" class="form-control" value="<?php echo $record['tgl_keluar']?>"  name="tgl_keluar"  required>
                    </div>

                     <div class="form-group">
                      <label for="">Alamat Pengirim</label>
                        <textarea style="height:100px"  class="form-control"  name="alamat_penerima" placeholder="Masukan alamat"><?php echo $record['alamat_penerima']?></textarea>                
                    </div>

                      <div class="form-group">
                      <label for="">Perihal</label>
                        <textarea style="height:100px"  class="form-control"  name="perihal" placeholder="Masukan alamat"><?php echo $record['perihal']?></textarea>                
                    </div>

                    <div class="form-group">
                      <label for="">Disposisi</label>
                        <input type="text" class="form-control"  name="disposisi" placeholder="Masukan Disposisi"><?php echo $record['disposisi']?></textarea>                
                    </div>
                      
                      <?php if($user['role'] == 's'): ?>
                      
                      <div class="form-group">
                     <label for="">Admin Tujuan</label>
                        <select name="id_user" class="form-control" required>
                            <?php
                            foreach ($admin as $p)
                            {
                                echo "<option value='$p->id_user'";
                                echo $record['id_user']==$p->id_user?'selected':'';
                                echo">$p->nama</option>";
                            }
                            ?>
                        </select> 
                    </div>
                    
                        <?php else : ?>
                        
                            <input type="hidden" class="form-control"  name="id_user" value="<?php echo $record['id_user']?>"  required>
                            
                        <?php endif; ?>  
                      
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
                    <?php echo anchor('surat_keluar','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->