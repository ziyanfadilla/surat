        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">EDIT DATA KATEGORI SURAT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('kategori_surat/edit');?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">Kode Surat</label>
                         <input type="text" class="form-control" name="kode" value="<?php echo $record['kode']?>" required>
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Nama Kategori Surat</label>
                      <input type="text" name="nama" required="" class="form-control" placeholder="Masukan Nama Surat" value="<?php echo $record['nama']?>">
                    </div>
                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('kategori_surat','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->