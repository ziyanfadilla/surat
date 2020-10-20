 <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-book"></i>
                  <h3 class="box-title">Menu Data Surat Masuk</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                  <div class="form-group"></div>
                  <?php echo anchor('surat_masuk/tambah','<i class="fa fa-file-word-o"></i> Tambah Data</a>',array('class'=>'btn btn-danger btn-sm')); ?>
                  <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="1">NO</th>
                        <th>NOMOR SURAT</th>
                        <th>KATEGORI SURAT</th>
                        <th>TANGGAL</th>
                        <th>ALAMAT PENGIRIM</th>
                        <th>PERIHAL</th>
                        <th>DISPOSISI</th>
                        <th>ADMIN</th>
                        <th width="40" >FOTO</th>
                        <?php if($user['role'] == 's'): ?>
                        <th width="120">AKSI</th>
                        <?php endif; ?>
                      </tr>
                    </thead>
                    
                    <?php
                    if($record->num_rows()<1)
                    {
                        echo "<tr><td colspan='3'>TIDAK ADA DATA</td></tr>";
                    }else 
                    {
                        $no=1;
                        foreach ($record->result() as $r)
                        {
                            echo "<tr>
                                <td>".$no++."</td>
                                <td>$r->nomer_surat</td>
                                <td>$r->kategori</td>
                                <td>$r->tgl_masuk</td>
                                <td>$r->alamat_pengirim</td>
                                <td>$r->perihal</td>
                                <td>$r->disposisi</td>
                                <td>$r->user</td>
                                <td><a href='$r->foto'> <img src='$r->foto' width='70'></a></td>";
                            if($user['role'] == 's'):
                            echo "<td>
                                ".anchor('surat_masuk/edit/'.$r->id,'<i class="fa fa-pencil-square-o"></i> Edit',array('class'=>'btn btn-danger btn-sm'))."
                                ".anchor('surat_masuk/hapus/'.$r->id,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm'))."
                                </td>
                            </tr>";
                            endif;
                        }
                    }
                    
                    ?>
                    
                    <tbody>
                     
                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          
        </section><!-- /.content -->