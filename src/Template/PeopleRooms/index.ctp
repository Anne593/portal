
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
                <?php foreach ($peopleRooms as $peopleRoom): ?>
                <tr>
                                        <td><?= $this->Number->format($peopleRoom->id) ?></td>
                                        <td>
                        <?= $peopleRoom->has('person') ? $this->Html->link($peopleRoom->person->id, ['controller' =>
                        'People', 'action' => 'view', $peopleRoom->person->id]) : '' ?>
                    </td>
                                        <td>
                        <?= $peopleRoom->has('room') ? $this->Html->link($peopleRoom->room->id, ['controller' =>
                        'Rooms', 'action' => 'view', $peopleRoom->room->id]) : '' ?>
                    </td>
                                        <td><?= h($peopleRoom->date_move_in) ?></td>
                                        <td><?= h($peopleRoom->date_move_out) ?></td>
                                        <td><?= h($peopleRoom->comment) ?></td>
                                        <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $peopleRoom->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $peopleRoom->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $peopleRoom->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $peopleRoom->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
