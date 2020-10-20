        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">TAMBAH DATA KATEGORI AGENDA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('kategori_agenda/tambah');?>
                  <div class="box-body">
                    <div class="form-group">
                    <label for="">Kode Agenda</label>
                    <input type="text" class="form-control"  name="id" placeholder="Isikan Kode Agenda" required>
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Nama Kategori</label>
                      <input type="text" name="nama" required="" class="form-control" placeholder="Masukan Nama Kategori">
                    </div>
                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('kategori_agenda','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->