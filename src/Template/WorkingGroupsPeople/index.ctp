
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
                                            <th><?= $this->Paginator->sort('working_group_id'); ?></th>
                                            <th><?= $this->Paginator->sort('member_since'); ?></th>
                                            <th><?= $this->Paginator->sort('member_until'); ?></th>
                                            <th><?= $this->Paginator->sort('mailing_list_enabled'); ?></th>
                                        <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($workingGroupsPeople as $workingGroupsPerson): ?>
                <tr>
                                        <td><?= $this->Number->format($workingGroupsPerson->id) ?></td>
                                        <td>
                        <?= $workingGroupsPerson->has('person') ? $this->Html->link($workingGroupsPerson->person->id, ['controller' =>
                        'People', 'action' => 'view', $workingGroupsPerson->person->id]) : '' ?>
                    </td>
                                        <td>
                        <?= $workingGroupsPerson->has('working_group') ? $this->Html->link($workingGroupsPerson->working_group->name, ['controller' =>
                        'WorkingGroups', 'action' => 'view', $workingGroupsPerson->working_group->id]) : '' ?>
                    </td>
                                        <td><?= h($workingGroupsPerson->member_since) ?></td>
                                        <td><?= h($workingGroupsPerson->member_until) ?></td>
                                        <td><?= h($workingGroupsPerson->mailing_list_enabled) ?></td>
                                        <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $workingGroupsPerson->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $workingGroupsPerson->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $workingGroupsPerson->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $workingGroupsPerson->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
