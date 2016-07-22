<section id="content">
  <section class="vbox">
    <section class="scrollable padder">
      <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">UI kit</a></li>
        <li><a href="#">Table</a></li>
        <li class="active">Datatable</li>
      </ul>
      <div class="m-b-md">
        <h3 class="m-b-none">Datatable</h3>
      </div>
      <section class="panel panel-default">
        <header class="panel-heading">
          Details 
        </header>
        <div class="table-responsive">
          <table class="table table-striped m-b-none">
            <thead>
              <tr>
                <th width="10%">No</th>
                <th>Nama Perusahaan</th>
                <th>Pemilik</th>
                <th>Bergabung sejak</th>
                <th>Riwayat Transaksi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $no =1;
            foreach ($user_detail as $user) {?>
              <tr>
                <td><?=$no++?></td>
                <td><?=$user->user_perusahaan?></td>
                <td><?=$user->user_pemilik?></td>
                <td><?=$user->user_bergabung?></td>
                <td>Belum ada transaksi</td>
                <td>Lihat | Ubah | Hapus</td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
</section>