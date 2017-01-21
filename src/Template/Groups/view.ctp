<section class="content-header">
    <h1>
        <?php echo __('Group'); ?>
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
                        <dt><?= __('Name') ?></dt>
                        <dd>
                            <?= h($group->name) ?>
                        </dd>
                        <dt><?= __('Conditions') ?></dt>
                        <dd>
                            <?= h($group->conditions) ?>
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

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Emailtext Groups']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($group->emailtext_groups)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>

                            <th>
                                Id
                            </th>


                            <th>
                                Emailtext Id
                            </th>


                            <th>
                                Group Id
                            </th>


                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($group->emailtext_groups as $emailtextGroups): ?>
                        <tr>

                            <td>
                                <?= h($emailtextGroups->id) ?>
                            </td>

                            <td>
                                <?= h($emailtextGroups->emailtext_id) ?>
                            </td>

                            <td>
                                <?= h($emailtextGroups->group_id) ?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'emailtextGroups', 'action' => 'view',
                                $emailtextGroups->id], ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'emailtextGroups', 'action' => 'edit',
                                $emailtextGroups->id], ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'emailtextGroups', 'action' => 'delete',
                                $emailtextGroups->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $emailtextGroups->id), 'title' => __('Delete'), 'class' =>
                                'btn btn-default
                                glyphicon glyphicon-trash']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>