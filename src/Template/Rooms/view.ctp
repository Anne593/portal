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

                    <?php if (!empty($room->people_rooms)): ?>

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

                        <?php foreach ($room->people_rooms as $room): ?>
                        <tr>

                            <td>
                                <?= h($room->id) ?>
                            </td>

                            <td>
                                <?= h($room->person_id) ?>
                            </td>

                            <td>
                                <?= h($room->room_id) ?>
                            </td>

                            <td>
                                <?= h($room->date_move_in) ?>
                            </td>

                            <td>
                                <?= h($room->date_move_out) ?>
                            </td>

                            <td>
                                <?= h($room->tenant_type) ?>
                            </td>

                            <td>
                                <?= h($room->comment) ?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'Rooms', 'action' => 'view', $room->room_id],
                                ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'Rooms', 'action' => 'edit', $room->room_id],
                                ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'Rooms', 'action' => 'delete',
                                $room->room_id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $room->id), 'title' => __('Delete'), 'class' => 'btn
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