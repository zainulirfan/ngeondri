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

      <?php foreach ($user_detail as $user) {?>

        <form data-validate="parsley" action="index.php/admin/ex_edit_data" method="post">
          <section class="panel panel-default">
            <header class="panel-heading">
              <span class="h4">Contact</span>
            </header>
            <div class="panel-body">
              <p class="text-muted">Need support? please fill the fields below.</p>                        
              <div class="form-group pull-in clearfix">
                <div class="col-sm-6">
                  <label>Nama Perusahaan</label>
                  <input class="form-control parsley-validated" placeholder="Name" data-required="true" type="text" name="inp[user_perusahaan]" value="<?=$user->user_perusahaan?>">
                  <input type="hidden" name="id" value="<?=$user->user_id;?>">
                </div>
                <div class="col-sm-6">
                  <label>Nama CIO</label>
                  <input class="form-control parsley-validated" placeholder="Tuliskan nama CIO" data-required="true" type="text" name="inp[user_pemilik]" value="<?=$user->user_pemilik;?>">
                </div>
              </div>
              <div class="form-group">
                <label>Alamat Perusahaan</label>
                <textarea class="form-control parsley-validated" rows="6" data-required="true" placeholder="Type your message" name="inp[user_alamat]"><?=$user->user_alamat?></textarea>
              </div>
            </div>
            <footer class="panel-footer text-right bg-light lter">
              <button type="submit" class="btn btn-success btn-s-xs">Submit</button>
            </footer>
          </section>
        </form>
        <?php }?>

      </section>
      <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
    </section>