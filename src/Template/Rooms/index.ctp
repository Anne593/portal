
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">
            <?= __('users.index.title') ?>
        </h3>
        <div class="box-tools pull-right">
            <?= $this->CkTools->addButton(__('users.add'), [
            'class' => 'btn btn-default btn-add btn-xs'
            ]) ?>
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive">
                        <table class="table table-striped" cellpadding="0" cellspacing="0">
                <thead>
                <tr>
                                            <th><?= $this->Paginator->sort('id'); ?></th>
                                            <th><?= $this->Paginator->sort('eth_port0'); ?></th>
                                            <th><?= $this->Paginator->sort('eth_port1'); ?></th>
                                            <th><?= $this->Paginator->sort('comment'); ?></th>
                                        <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($rooms as $room): ?>
                <tr>
                                        <td><?= $this->Number->format($room->id) ?></td>
                                        <td><?= $this->Number->format($room->eth_port0) ?></td>
                                        <td><?= $this->Number->format($room->eth_port1) ?></td>
                                        <td><?= h($room->comment) ?></td>
                                        <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $room->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $room->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $room->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $room->id), 'title' => __('Delete'), 'class' => 'btn btn-default
                        glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->Paginator->numbers() ?>
