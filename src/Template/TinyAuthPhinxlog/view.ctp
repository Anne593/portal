<section class="content-header">
    <h1>
        <?php echo __('Tiny Auth Phinxlog'); ?>
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
                                                                                                <dt><?= __('Migration Name') ?></dt>
                        <dd>
                            <?= h($tinyAuthPhinxlog->migration_name) ?>
                        </dd>
                                                                                                
                        
                                                                                                                        
                                                                                                <dt><?= __('Start Time') ?></dt>
                        <dd>
                            <?= h($tinyAuthPhinxlog->start_time) ?>
                        </dd>
                                                                                                <dt><?= __('End Time') ?></dt>
                        <dd>
                            <?= h($tinyAuthPhinxlog->end_time) ?>
                        </dd>
                                                                        
                                                                        <dt><?= __('Breakpoint') ?></dt>
                        <dd>
                            <?= $tinyAuthPhinxlog->breakpoint ? __('Yes') : __('No'); ?>
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