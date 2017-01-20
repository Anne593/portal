<section class="content-header">
    <h1>
        <?php echo __('Ip'); ?>
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
                                                                                                <dt><?= __('Mac') ?></dt>
                        <dd>
                            <?= $ip->has('mac') ? $ip->mac->id : '' ?>
                        </dd>
                                                                                                <dt><?= __('Ip') ?></dt>
                        <dd>
                            <?= h($ip->ip) ?>
                        </dd>
                                                                                                
                        
                                                                                                                        
                                                                                                <dt><?= __('Lease Start') ?></dt>
                        <dd>
                            <?= h($ip->lease_start) ?>
                        </dd>
                                                                                                <dt><?= __('Lease End') ?></dt>
                        <dd>
                            <?= h($ip->lease_end) ?>
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