<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Yönetim Paneli
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>
              <?php if(isset($tasksCount)) { echo $tasksCount; } else { echo '0'; } ?>
            </h3>
            <p>Görevler</p>
          </div>
          <div class="icon">
            <i class="fa fa-tasks"></i>
          </div>
          <a href="<?php echo base_url(); ?><?php  if($role != ROLE_EMPLOYEE) {echo 'tasks';}else{echo 'etasks';} ?>" class="small-box-footer">Tümünü gör
            <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
              <?php if(isset($finishedTasksCount)) { echo $finishedTasksCount; } else { echo '0'; } ?>
            </h3>
            <p>Bitirilmiş Görevler</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="<?php echo base_url(); ?><?php  if($role != ROLE_EMPLOYEE) {echo 'tasks';}else{echo 'etasks';} ?>" class="small-box-footer">Daha fazla bilgi
            <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>
              <?php if(isset($usersCount)) { echo $usersCount; } else { echo '0'; } ?>
            </h3>
            <p>Kullanıcı</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="<?php echo base_url(); ?>userListing" class="small-box-footer">Daha fazla bilgi
            <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>
              <?php if(isset($logsCount)) { echo $logsCount; } else { echo '0'; } ?>
            </h3>
            <p>Log</p>
          </div>
          <div class="icon">
            <i class="fa fa-archive"></i>
          </div>
          <a href="<?php echo base_url(); ?>log-history" class="small-box-footer">Daha fazla bilgi
            <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </section>
</div>