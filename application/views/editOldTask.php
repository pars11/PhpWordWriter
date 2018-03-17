<?php

$id = '';
$title = '';
$comment = '';
$priorityId = '';
$statusId = '';


if(!empty($taskInfo))
{
    foreach ($taskInfo as $uf)
    {
        $id = $uf->id;
        $title = $uf->title;
        $comment = $uf->comment;
        $priorityId = $uf->priorityId;
        $statusId = $uf->statusId;
    }
}


?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-users"></i> Görev Yönetimi
                <small>Görev Ekle / Düzenle</small>
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Görev bilgilerini giriniz</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <?php $this->load->helper("form"); ?>
                        <form role="form" id="addNewTask" action="<?php echo base_url() ?>editTask" method="post" role="form">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fname">Görev Başlığı</label>
                                            <input type="hidden" name="taskId" id="taskId" value="<?php echo $id; ?>">
                                            <input type="text" class="form-control required" value="<?php echo $title; ?>" id="fname" name="fname">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="role">Öncelik</label>
                                            <select class="form-control required" id="priority" name="priority">
                                                <option value="0">Öncelik seçiniz</option>
                                                <?php
                                            if(!empty($tasks_prioritys))
                                            {
                                                foreach ($tasks_prioritys as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->priorityId ?>" <?php if($rl->priorityId == $priorityId) {echo "selected=selected";} ?>>
                                                        <?php echo $rl->priority ?>
                                                    </option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="comment">Görev Açıklama</label>
                                            <textarea class="form-control" id="comment" name="comment" rows="4">
                                                <?php echo $comment; ?>
                                            </textarea>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="status">Durum</label>
                                                    <select class="form-control required" id="status" name="status">
                                                        <option value="0">Durum seçiniz</option>
                                                        <?php
                                            if(!empty($tasks_situations))
                                            {
                                                foreach ($tasks_situations as $rl)
                                                {
                                                    ?>
                                                            <option value="<?php echo $rl->statusId ?>" <?php if($rl->statusId == $statusId) {echo "selected=selected";} ?>>
                                                                <?php echo $rl->status ?>
                                                            </option>
                                                            <?php
                                                }
                                            }
                                            ?>
                                                    </select>
                                                </div>


                                            </div>
                                            <!-- /.box-body -->

                                            <div class="box-footer">
                                                <input type="submit" class="btn btn-primary" value="Gönder" />
                                                <input type="reset" class="btn btn-default" value="Sıfırla" />
                                            </div>
                                        </div>
                                    </div>
                        </form>
                        </div>
                        </div>
                        <div class="col-md-4">
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

                                <div class="row">
                                    <div class="col-md-12">
                                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                                    </div>
                                </div>
                        </div>
                    </div>
        </section>

        </div>