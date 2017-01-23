<section class="content-header">
    <h1>
        <?php echo __('People Room'); ?>
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
                            <?= $peopleRoom->has('person') ? $peopleRoom->person->id : '' ?>
                        </dd>
                                                                                                <dt><?= __('Room') ?></dt>
                        <dd>
                            <?= $peopleRoom->has('room') ? $peopleRoom->room->id : '' ?>
                        </dd>
                                                                                                <dt><?= __('Comment') ?></dt>
                        <dd>
                            <?= h($peopleRoom->comment) ?>
                        </dd>
                                                                                                
                        
                                                                                                                        
                                                                                                <dt><?= __('Date Move In') ?></dt>
                        <dd>
                            <?= h($peopleRoom->date_move_in) ?>
                        </dd>
                                                                                                <dt><?= __('Date Move Out') ?></dt>
                        <dd>
                            <?= h($peopleRoom->date_move_out) ?>
                        </dd>
                                                                        
                        
                                                                        <dt><?= __('Tenant Type') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($peopleRoom->tenant_type)); ?>
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