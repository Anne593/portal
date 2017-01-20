<section class="content-header">
    <h1>
        <?php echo __('Job'); ?>
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
                                                                                                <dt><?= __('Queue') ?></dt>
                        <dd>
                            <?= h($job->queue) ?>
                        </dd>
                                                                                                                        <dt><?= __('Attempts') ?></dt>
                        <dd>
                            <?= h($job->attempts) ?>
                        </dd>
                                                                                                
                        
                                                                                                                                                <dt><?= __('Priority') ?></dt>
                        <dd>
                            <?= $this->Number->format($job->priority) ?>
                        </dd>
                                                                                                <dt><?= __('Locked') ?></dt>
                        <dd>
                            <?= $this->Number->format($job->locked) ?>
                        </dd>
                                                                        
                                                                                                <dt><?= __('Expires At') ?></dt>
                        <dd>
                            <?= h($job->expires_at) ?>
                        </dd>
                                                                                                <dt><?= __('Delay Until') ?></dt>
                        <dd>
                            <?= h($job->delay_until) ?>
                        </dd>
                                                                        
                        
                                                                        <dt><?= __('Data') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($job->data)); ?>
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