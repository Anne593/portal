
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
                                            <th><?= $this->Paginator->sort('room_id'); ?></th>
                                            <th><?= $this->Paginator->sort('date_move_in'); ?></th>
                                            <th><?= $this->Paginator->sort('date_move_out'); ?></th>
                                            <th><?= $this->Paginator->sort('comment'); ?></th>
                                        <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tenants as $tenant): ?>
                <tr>
                                        <td><?= $this->Number->format($tenant->id) ?></td>
                                        <td>
                        <?= $tenant->has('person') ? $this->Html->link($tenant->person->full_name, ['controller' =>
                        'People', 'action' => 'view', $tenant->person->id]) : '' ?>
                    </td>
                                        <td>
                        <?= $tenant->has('room') ? $this->Html->link($tenant->room->id, ['controller' =>
                        'Rooms', 'action' => 'view', $tenant->room->id]) : '' ?>
                    </td>
                                        <td><?= h($tenant->date_move_in) ?></td>
                                        <td><?= h($tenant->date_move_out) ?></td>
                                        <td><?= h($tenant->comment) ?></td>
                                        <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $tenant->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $tenant->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $tenant->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $tenant->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
