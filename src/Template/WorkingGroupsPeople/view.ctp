<section class="content-header">
    <h1>
        <?php echo __('Working Groups Person'); ?>
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
                        <dt><?= __('Person') ?></dt>
                        <dd>
                            <?= $workingGroupsPerson->has('person') ? $workingGroupsPerson->person->id : '' ?>
                        </dd>
                        <dt><?= __('Working Group') ?></dt>
                        <dd>
                            <?= $workingGroupsPerson->has('working_group') ? $workingGroupsPerson->working_group->name :
                            '' ?>
                        </dd>


                        <dt><?= __('Member Since') ?></dt>
                        <dd>
                            <?= h($workingGroupsPerson->member_since) ?>
                        </dd>
                        <dt><?= __('Member Until') ?></dt>
                        <dd>
                            <?= h($workingGroupsPerson->member_until) ?>
                        </dd>

                        <dt><?= __('Mailing List Enabled') ?></dt>
                        <dd>
                            <?= $workingGroupsPerson->mailing_list_enabled ? __('Yes') : __('No'); ?>
                        </dd>

                        <dt><?= __('Type') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($workingGroupsPerson->type)); ?>
                        </dd>
                        <dt><?= __('Comment') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($workingGroupsPerson->comment)); ?>
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