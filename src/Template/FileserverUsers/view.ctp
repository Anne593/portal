<section class="content-header">
    <h1>
        <?php echo __('Fileserver User'); ?>
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
                            <?= $fileserverUser->has('person') ? $fileserverUser->person->id : '' ?>
                        </dd>
                                                                                                <dt><?= __('Username') ?></dt>
                        <dd>
                            <?= h($fileserverUser->username) ?>
                        </dd>
                                                                                                                                                                        
                        
                                                                                                                                                <dt><?= __('Password Retrieval') ?></dt>
                        <dd>
                            <?= $this->Number->format($fileserverUser->password_retrieval) ?>
                        </dd>
                                                                        
                                                                                                                        
                                                                        <dt><?= __('Vip') ?></dt>
                        <dd>
                            <?= $fileserverUser->vip ? __('Yes') : __('No'); ?>
                        </dd>
                                                <dt><?= __('Accepted') ?></dt>
                        <dd>
                            <?= $fileserverUser->accepted ? __('Yes') : __('No'); ?>
                        </dd>
                                                <dt><?= __('Active') ?></dt>
                        <dd>
                            <?= $fileserverUser->active ? __('Yes') : __('No'); ?>
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