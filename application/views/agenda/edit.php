        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">EDIT DATA AGENDA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('agenda/edit');?>
                  <div class="box-body">
                      <input type="hidden" name="id" required="" class="form-control" placeholder="Masukan Angenda" value="<?php echo $record['id']?>">

                    <div class="form-group">
                      <label for="exampleInputPassword1">AGENDA</label>
                      <input type="text" name="agenda" required="" class="form-control" placeholder="Masukan Angenda" value="<?php echo $record['agenda']?>">
                    </div>

                      <div class="form-group">
                      <label for="exampleInputPassword1">TANGGAL AGENDA</label>
                      <input type="date" name="tgl_agenda" required="" class="form-control" placeholder="Masukan Nama Karyawan" value="<?php echo $record['tgl_agenda']?>">
                    </div>

                      <div class="form-group">
                     <label for="">KATEGORI AGENDA</label>
                        <select name="id_kat_agenda" class="form-control" required>
                            <?php
                            foreach ($kategori_agenda as $p)
                            {
                                echo "<option value='$p->id_kat_agenda'";
                                echo $record['nama']==$p->id_kat_agenda?'selected':'';
                                echo">$p->nama</option>";
                            }
                            ?>
                        </select> 
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">KEPADA</label>
                      <input type="text" name="nama" required="" class="form-control" placeholder="Masukan Angenda" value="<?php echo $record['nama']?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">ALAMAT</label>
                      <input type="text" name="alamat" required="" class="form-control" placeholder="Masukan Angenda" value="<?php echo $record['alamat']?>">
                    </div>
                      
                    <div class="form-group">
                          <label for="">Status</label>
                      <select name="status" class="form-control" required>
                          <option value="">--Status--</option>
                          <option value="Belum">Belum</option>
                          <option value="Terlaksana">Terlaksana</option>
                          <option value="Dibatalkan">Dibatalkan</option>
                        </select> 
                   </div>

                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('agenda','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->