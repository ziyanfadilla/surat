 <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-book"></i>
                  <h3 class="box-title">Menu Data Surat Keluar</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                  <div class="form-group"></div>
                  <?php echo anchor('surat_keluar/tambah','<i class="fa fa-file-word-o"></i> Tambah Data</a>',array('class'=>'btn btn-danger btn-sm')); ?>
                  <div class="form-group"></div>
                  <table id="" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="1">NO</th>
                        <th>NOMOR SURAT</th>
                        <th>KATEGORI SURAT</th>
                        <th>TANGGAL</th>
                        <th>ALAMAT PENERIMA</th>
                        <th>PERIHAL</th>
                        <th>DISPOSISI</th>
                        <th>ADMIN</th>
                        <th width="40" >FOTO</th>
                        <?php if($user['role'] == 's'): ?>
                        <th width="120">AKSI</th>
                        <?php endif; ?>
                      </tr>
                    </thead>
                    
                    
                    
                    <tbody>
                     
                    <?php
                    if($record->num_rows() == 0)
                    {
                        echo "<tr><td colspan='9'>TIDAK ADA DATA</td></tr>";
                    }else 
                    {
                        $no=1;
                        foreach ($record->result() as $r)
                        {
                            echo "<tr>
                                <td>".$no++."</td>
                                <td>$r->nomer_surat</td>
                                <td>$r->kategori</td>
                                <td>$r->tgl_keluar</td>
                                <td>$r->alamat_penerima</td>
                                <td>$r->disposisi</td> 
                                <td>$r->perihal</td>
                                <td>$r->user</td>
                                <td><a href='$r->foto'> <img src='$r->foto' width='70'></a></td>";
                            if($user['role'] == 's'):
                            echo "<td>
                                ".anchor('surat_keluar/edit/'.$r->id,'<i class="fa fa-pencil-square-o"></i> Edit',array('class'=>'btn btn-danger btn-sm'))."
                                ".anchor('surat_keluar/hapus/'.$r->id,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm'))."
                                </td>
                            </tr>";
                            endif;
                        }
                    }
                    
                    ?>  
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->