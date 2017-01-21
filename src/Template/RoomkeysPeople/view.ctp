<section class="content-header">
    <h1>
        <?php echo __('Roomkeys Person'); ?>
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
                        <dt><?= __('Roomkey') ?></dt>
                        <dd>
                            <?= $roomkeysPerson->has('roomkey') ? $roomkeysPerson->roomkey->name : '' ?>
                        </dd>
                        <dt><?= __('Person') ?></dt>
                        <dd>
                            <?= $roomkeysPerson->has('person') ? $roomkeysPerson->person->id : '' ?>
                        </dd>
                        <dt><?= __('Comment') ?></dt>
                        <dd>
                            <?= h($roomkeysPerson->comment) ?>
                        </dd>


                        <dt><?= __('Type') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($roomkeysPerson->type)); ?>
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