        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">EDIT DATA KATEGORI AGENDA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('karyawan/edit');?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputPassword1">NIP</label>
                      <input type="text" name="id" required="" class="form-control" placeholder="Masukan NIP" value="<?php echo $record['nip']?>">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Nama Karyawan</label>
                      <input type="text" name="nama" required="" class="form-control" placeholder="Masukan Nama Karyawan" value="<?php echo $record['nama']?>">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Jabatan</label>
                      <input type="text" name="jabatan" required="" class="form-control" placeholder="Masukan Jabatan" value="<?php echo $record['jabatan']?>">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Unit</label>
                      <input type="text" name="unit" required="" class="form-control" placeholder="Masukan Unit" value="<?php echo $record['unit']?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Golongan</label>
                      <input type="text" name="golongan" required="" class="form-control" placeholder="Masukan Golongan" value="<?php echo $record['golongan']?>">
                    </div>
                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('karyawan','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->