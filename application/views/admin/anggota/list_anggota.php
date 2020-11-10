<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Anggota PLUGIN</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row"><div class="col-sm-12 col-md-6">
              </div><div class="col-sm-12 col-md-6">
              </div>
              </div>
              <div class="row">
              <div class="col-sm-12">
              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">No</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama">Nama</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Divisi">Divisi</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Kelas">Kelas</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Alamat">Alamat</th>
                </tr>
                </thead>
            <tbody>
                <?php 
                    $no = 1; 
            
                ?>

                <?php foreach ($data_anggota as $da): ?>
                <tr role="row" class="odd">
                  <td><?php echo $no++;?></td>
                  <td><?php echo $da->nama ?></td>
                  <td><?php echo $da->divisi ?></td>
                  <td><?php echo $da->kelas ?></td>
                  <td><?php echo $da->alamat ?></td>
                  </tr>
                <?php endforeach; ?>
            </tbody>
              </table>
              </div>
              </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
            </div>
              </div>
              </div>
              </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
    </section>
    </div>
    