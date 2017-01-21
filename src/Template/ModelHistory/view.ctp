<section class="content-header">
    <h1>
        <?php echo __('Model History'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-chevron-left"></i> ' . __('Back'), ['action' => 'index'], ['escape'
            => false])?>
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
                        <dt><?= __('Id') ?></dt>
                        <dd>
                            <?= h($modelHistory->id) ?>
                        </dd>
                        <dt><?= __('Model') ?></dt>
                        <dd>
                            <?= h($modelHistory->model) ?>
                        </dd>
                        <dt><?= __('Foreign Key') ?></dt>
                        <dd>
                            <?= h($modelHistory->foreign_key) ?>
                        </dd>
                        <dt><?= __('User Id') ?></dt>
                        <dd>
                            <?= h($modelHistory->user_id) ?>
                        </dd>
                        <dt><?= __('Action') ?></dt>
                        <dd>
                            <?= h($modelHistory->action) ?>
                        </dd>
                        <dt><?= __('Context Type') ?></dt>
                        <dd>
                            <?= h($modelHistory->context_type) ?>
                        </dd>
                        <dt><?= __('Context Slug') ?></dt>
                        <dd>
                            <?= h($modelHistory->context_slug) ?>
                        </dd>


                        <dt><?= __('Revision') ?></dt>
                        <dd>
                            <?= $this->Number->format($modelHistory->revision) ?>
                        </dd>


                        <dt><?= __('Data') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($modelHistory->data)); ?>
                        </dd>
                        <dt><?= __('Context') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($modelHistory->context)); ?>
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