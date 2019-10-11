
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mempelai</h1>
            
          </div>

          <!-- Content Row -->
         

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Mempelai</h6>
                  <div class="dropdown no-arrow">
                    <!-- <a href="#" role="button"  class="btn btn-primary"> Add Data
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a> -->
                    <a href="<?=base_url()?>penduduk/formtambah" class="btn btn-primary btn-icon-split btn-sm">
		                <span class="icon text-white-50">
                      		<i class="fas fa-plus"></i>
                    	</span>
                    	<span class="text">Tambah</span>
		            </a>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Nama Lengkap</th>
                      <th>Alamat</th>
                      <th>Foto</th>
                      
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php
                    if(!empty($isi)){
                    	$no=1;
                    	foreach ($isi as $i) {
                    ?>
                    <tr>
                      <td><?=$no?></td>
                      <td><?=$i->nik?></td>
                      <td><?=$i->namalengkap?></td>
                      <td><?=$i->alamat?></td>
                      <td><img src="<?=base_url()?>assets/<?=$i->foto?>"></td>
                      <td>
                      	
                      	
                      	<a href="<?=base_url()?>penduduk/ubah/<?=$i->nik?>" class="btn btn-warning btn-icon-split btn-sm">
		                    <span class="icon text-white-50">
		                      <i class="fas fa-exclamation-triangle"></i>
		                    </span>
		                    <span class="text">Ubah</span>
		                </a>
		                <a href="<?=base_url()?>penduduk/hapus/<?=$i->nik?>" class="btn btn-danger btn-icon-split btn-sm" onclick="return confirm('yakin akan menghapus data ini?')">
		                    <span class="icon text-white-50">
                      			<i class="fas fa-trash"></i>
                    		</span>
                    		<span class="text">Hapus</span>
		                </a>
                      </td>
                    </tr>
                    <?php
                    	$no++;}
                    }
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
                </div>
              </div>
            </div>

            
          </div>

          

        </div>
        <!-- /.container-fluid -->

