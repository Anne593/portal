
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
                                            <th><?= $this->Paginator->sort('roomkey_id'); ?></th>
                                            <th><?= $this->Paginator->sort('person_id'); ?></th>
                                            <th><?= $this->Paginator->sort('comment'); ?></th>
                                        <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($roomkeysPeople as $roomkeysPerson): ?>
                <tr>
                                        <td><?= $this->Number->format($roomkeysPerson->id) ?></td>
                                        <td>
                        <?= $roomkeysPerson->has('roomkey') ? $this->Html->link($roomkeysPerson->roomkey->name, ['controller' =>
                        'Roomkeys', 'action' => 'view', $roomkeysPerson->roomkey->id]) : '' ?>
                    </td>
                                        <td>
                        <?= $roomkeysPerson->has('person') ? $this->Html->link($roomkeysPerson->person->full_name, ['controller' =>
                        'People', 'action' => 'view', $roomkeysPerson->person->id]) : '' ?>
                    </td>
                                        <td><?= h($roomkeysPerson->comment) ?></td>
                                        <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $roomkeysPerson->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $roomkeysPerson->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $roomkeysPerson->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $roomkeysPerson->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
