<section class="content-header">
    <h1>
        <?php echo __('Room'); ?>
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
                        <dt><?= __('Comment') ?></dt>
                        <dd>
                            <?= h($room->comment) ?>
                        </dd>


                        <dt><?= __('Eth Port0') ?></dt>
                        <dd>
                            <?= $this->Number->format($room->eth_port0) ?>
                        </dd>
                        <dt><?= __('Eth Port1') ?></dt>
                        <dd>
                            <?= $this->Number->format($room->eth_port1) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Tenants']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($room->tenants)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>

                            <th>
                                Id
                            </th>


                            <th>
                                Person Id
                            </th>


                            <th>
                                Room Id
                            </th>


                            <th>
                                Date Move In
                            </th>


                            <th>
                                Date Move Out
                            </th>


                            <th>
                                Tenant Type
                            </th>


                            <th>
                                Comment
                            </th>


                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($room->tenants as $tenants): ?>
                        <tr>

                            <td>
                                <?= h($tenants->id) ?>
                            </td>

                            <td>
                                <?= h($tenants->person_id) ?>
                            </td>

                            <td>
                                <?= h($tenants->room_id) ?>
                            </td>

                            <td>
                                <?= h($tenants->date_move_in) ?>
                            </td>

                            <td>
                                <?= h($tenants->date_move_out) ?>
                            </td>

                            <td>
                                <?= h($tenants->tenant_type) ?>
                            </td>

                            <td>
                                <?= h($tenants->comment) ?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'tenants', 'action' => 'view', $tenants->id],
                                ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'tenants', 'action' => 'edit', $tenants->id],
                                ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'tenants', 'action' => 'delete',
                                $tenants->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $tenants->id), 'title' => __('Delete'), 'class' => 'btn
                                btn-default
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