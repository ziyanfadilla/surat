        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-stethoscope"></i>
                  <h3 class="box-title">Menu Data Agenda</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                  <div class="form-group"></div>
                  <?php if($user['role'] == 's'):?>
                  <?php echo anchor('agenda/tambah','<i class="fa fa-file-word-o"></i> Tambah Data</a>',array('class'=>'btn btn-danger btn-sm')); ?>
                  <?php endif; ?> 
                  <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="1">NO</th>
                        <th>AGENDA</th>
                        <th>TGL_AGENDA</th>
                        <th>KATEGORI</th>
                        <th>KEPADA</th>
                        <th>ALAMAT</th>
                        <th>STATUS</th>
                        <?php if($user['role'] == 's'): ?>
                        <th width="95">PROSES</th>
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
                                <td>$r->agenda</td>
                                <td>$r->tgl_agenda</td>
                                <td>$r->kategori</td>
                                <td>$r->nama</td>
                                <td>$r->alamat</td>
                                <td>$r->status</td>";
                            if($user['role'] == 's'):
                                
                            echo "<td>";
                                if($r->status == 'Belum'):
                            echo"    
                                ".anchor('agenda/terlaksana/'.$r->id,' Proses',array('class'=>'btn btn-primary btn-sm'))."
                                ".anchor('agenda/dibatalkan/'.$r->id,' Batal',array('class'=>'btn btn-primary btn-sm'))."";
                                    endif;
                                "</td>"; 
                                
                            echo "<td>
                                ".anchor('agenda/edit/'.$r->id,'<i class="fa fa-pencil-square-o"></i> Edit',array('class'=>'btn btn-danger btn-sm'))."
                                ".anchor('agenda/hapus/'.$r->id,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm'))."
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