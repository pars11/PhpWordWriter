<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Php Word Writer
        <small>Ayar Ekleme İşlemi</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Dosya yükleme işlemi için doc veya docx dosyasınızı seçiniz</h3>
                        <div class="box-tools">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <div class="panel-body">
                            <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $this->session->flashdata('error'); ?>
                                </div>
                                <?php } ?>
                                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                                <?php } ?>
                                <form role="form" action="<?php echo base_url() ?>insertSettings" method="post" id="insertSettings" role="form" enctype="multipart/form-data"
                                    accept-charset="utf-8">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="fileup">Dosya seç</label>
                                                        <input type="file" id="fileup" name="fileup" class="form-control-file">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="settingname">Ayar Adı</label>
                                                        <input type="text" class="form-control required" id="settingname" name="settingname" maxlength="20">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="areaid">Alan ID</label>
                                                        <input type="text" class="form-control required" id="areaid" name="areaid" maxlength="20">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="areaid2">Alan ID</label>
                                                        <input type="text" class="form-control required" id="areaid2" name="areaid2" maxlength="20">
                                                    </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <input type="submit" class="btn btn-primary" value="Yükle" />
                                        <input type="reset" class="btn btn-default" value="Sıfırla" />
                                    </div>
                                </form>

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>