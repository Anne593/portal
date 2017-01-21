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
                    <th><?= $this->Paginator->sort('person_id'); ?></th>
                    <th><?= $this->Paginator->sort('mac'); ?></th>
                    <th><?= $this->Paginator->sort('device_name'); ?></th>
                    <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($macs as $mac): ?>
                <tr>
                    <td><?= $this->Number->format($mac->id) ?></td>
                    <td>
                        <?= $mac->has('person') ? $this->Html->link($mac->person->full_name, ['controller' =>
                        'People', 'action' => 'view', $mac->person->id]) : '' ?>
                    </td>
                    <td><?= h($mac->mac) ?></td>
                    <td><?= h($mac->device_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $mac->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $mac->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $mac->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $mac->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
