
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
                                            <th><?= $this->Paginator->sort('mac_id'); ?></th>
                                            <th><?= $this->Paginator->sort('ip'); ?></th>
                                            <th><?= $this->Paginator->sort('lease_start'); ?></th>
                                            <th><?= $this->Paginator->sort('lease_end'); ?></th>
                                        <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($ips as $ip): ?>
                <tr>
                                        <td><?= $this->Number->format($ip->id) ?></td>
                                        <td>
                        <?= $ip->has('mac') ? $this->Html->link($ip->mac->mac, ['controller' =>
                        'Macs', 'action' => 'view', $ip->mac->id]) : '' ?>
                    </td>
                                        <td><?= h($ip->ip) ?></td>
                                        <td><?= h($ip->lease_start) ?></td>
                                        <td><?= h($ip->lease_end) ?></td>
                                        <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $ip->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $ip->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $ip->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $ip->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
