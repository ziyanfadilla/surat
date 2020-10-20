        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-stethoscope"></i>
                  <h3 class="box-title">Laporan Data Surat Masuk</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                    <table border="0">
                        <tr><td width="500">
                  <?php echo form_open_multipart('laporan/cetak_masuk');?>
                  <table class="table table-condensed" border='0' width="200px">
                    <tr>
                        <td width="10">BULAN MASUK</td>
                        <td width="5">:</td>
                        <td width="10">
                            <select name="bulan" class="form-control" required>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td >TAHUN MASUK</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tahun" required="" class="form-control" placeholder="Masukan Tahun"> 
                        </td>
                    </tr>
                    </table>
                    
                    </td></tr>
                    </table>
                  <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Cetak</button>
                  </form>
                  <div class="form-group"></div>
                  <div class="form-group"></div>
                  <div class="form-group"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          
       
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-stethoscope"></i>
                  <h3 class="box-title">Laporan Data Surat Keluar</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                    <table border="0">
                        <tr><td width="500">
                  <?php echo form_open_multipart('laporan/cetak_keluar');?>
                  <table class="table table-condensed" border='0' width="200px">
                    <tr>
                        <td width="10">BULAN KELUAR</td>
                        <td width="5">:</td>
                        <td width="10">
                            <select name="bulan" class="form-control" required>
                          <option value="01">Januari</option>
                          <option value="02">Februari</option>
                          <option value="03">Maret</option>
                          <option value="04">April</option>
                          <option value="05">Mei</option>
                          <option value="06">Juni</option>
                          <option value="07">Juli</option>
                          <option value="08">Agustus</option>
                          <option value="09">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                        </select> 
                        </td>
                    </tr>
                    <tr>
                        <td >TAHUN KELUAR</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tahun" required="" class="form-control" placeholder="Masukan Tahun"> 
                        </td>
                    </tr>
                    </table>
                    
                    </td></tr>
                    </table>
                  <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Cetak</button>
                  </form>
                  <div class="form-group"></div>
                  <div class="form-group"></div>
                  <div class="form-group"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          
        </section><!-- /.content -->