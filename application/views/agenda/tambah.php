        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">TAMBAH DATA AGENDA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('agenda/tambah');?>
                  <div class="box-body">
                    <div class="form-group">
                    </div>

                      <div class="form-group">
                      <label for="exampleInputPassword1">AGENDA</label>
                      <input type="text" name="agenda" required="" class="form-control" placeholder="Masukan Agenda"> 
                    </div>

                      <div class="form-group">
                      <label for="exampleInputPassword1">TANGGAL AGENDA</label>
                      <input type="date" name="tgl_agenda" required="" class="form-control" placeholder="Masukan Nama Karyawan">
                    </div>

                      <div class="form-group">
                      <label for="">KATEGORI AGENDA</label>
                        <select name="id_kat_agenda" class="form-control" required>
                          <option>--Pilih Kategori--</option>
                            <?php  
                              foreach ($kategori_agenda as $d) {
                                  echo "<option value='$d->id_kat_agenda'>$d->nama</option>";
                              }
                              ?>
                        </select> 
                    </div>

                     <div class="form-group">
                      <label for="exampleInputPassword1">KEPADA</label>
                      <input type="text" name="nama" required="" class="form-control" placeholder="Masukan Kepada"> 
                    </div>

                     <div class="form-group">
                      <label for="exampleInputPassword1">ALAMAT</label>
                      <input type="text" name="alamat" required="" class="form-control" placeholder="Masukan Alamat"> 
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