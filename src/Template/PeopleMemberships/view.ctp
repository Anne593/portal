<section class="content-header">
    <h1>
        <?php echo __('People Membership'); ?>
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
                                                                                                <dt><?= __('Person') ?></dt>
                        <dd>
                            <?= $peopleMembership->has('person') ? $peopleMembership->person->id : '' ?>
                        </dd>
                                                                                                <dt><?= __('Membership') ?></dt>
                        <dd>
                            <?= $peopleMembership->has('membership') ? $peopleMembership->membership->name : '' ?>
                        </dd>
                                                                                                <dt><?= __('Social Service Comment') ?></dt>
                        <dd>
                            <?= h($peopleMembership->social_service_comment) ?>
                        </dd>
                                                                                                                        <dt><?= __('Comment') ?></dt>
                        <dd>
                            <?= h($peopleMembership->comment) ?>
                        </dd>
                                                                                                
                        
                                                                                                                                                <dt><?= __('Semester') ?></dt>
                        <dd>
                            <?= $this->Number->format($peopleMembership->semester) ?>
                        </dd>
                                                                                                <dt><?= __('Social Service') ?></dt>
                        <dd>
                            <?= $this->Number->format($peopleMembership->social_service) ?>
                        </dd>
                                                                        
                        
                                                                        <dt><?= __('Payment') ?></dt>
                        <dd>
                            <?= $peopleMembership->payment ? __('Yes') : __('No'); ?>
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