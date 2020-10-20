

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $tot_surat_masuk; ?></h3>
                  <p><b>TOTAL SURAT MASUK</b></p>
                </div>
                <div class="icon">
                  <i class="fa fa-comments-o"></i>
                </div>
                <a href="<?php echo base_url()?>surat_masuk" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $tot_surat_keluar; ?></h3>
                  <p><b>TOTAL SURAT KELUAR</b></p>
                </div>
                <div class="icon">
                  <i class="fa fa-comments-o"></i>
                </div>
                <a href="<?php echo base_url()?>surat_keluar" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $tot_agenda; ?></h3>
                  <p><b>TOTAL AGENDA</b></p>
                </div>
                <div class="icon">
                  <i class="fa fa-folder"></i>
                </div>
                <a href="<?php echo base_url()?>agenda" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $tot_karyawan; ?></h3>
                  <p><b>TOTAL KARYAWAN</b></p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?php echo base_url()?>karyawan" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
