<section class="content-header">
    <h1>
        <?php echo __('Emailtext User'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-chevron-left"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-info"></i>
                    <h3 class="box-title"><?php echo __('Information'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                                                                                                <dt><?= __('Emailtext') ?></dt>
                        <dd>
                            <?= $emailtextUser->has('emailtext') ? $emailtextUser->emailtext->id : '' ?>
                        </dd>
                                                                        
                        
                                                                                                                                                <dt><?= __('Type Id') ?></dt>
                        <dd>
                            <?= $this->Number->format($emailtextUser->type_id) ?>
                        </dd>
                                                                        
                        
                        
                                                                        <dt><?= __('Type') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($emailtextUser->type)); ?>
                        </dd>
                                                                    </dl>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <!-- div -->

    </section>