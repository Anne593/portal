
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
                                            <th><?= $this->Paginator->sort('emailtext_id'); ?></th>
                                            <th><?= $this->Paginator->sort('group_id'); ?></th>
                                        <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($emailtextGroups as $emailtextGroup): ?>
                <tr>
                                        <td><?= $this->Number->format($emailtextGroup->id) ?></td>
                                        <td>
                        <?= $emailtextGroup->has('emailtext') ? $this->Html->link($emailtextGroup->emailtext->subject, ['controller' =>
                        'Emailtexts', 'action' => 'view', $emailtextGroup->emailtext->id]) : '' ?>
                    </td>
                                        <td>
                        <?= $emailtextGroup->has('group') ? $this->Html->link($emailtextGroup->group->name, ['controller' =>
                        'Groups', 'action' => 'view', $emailtextGroup->group->id]) : '' ?>
                    </td>
                                        <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $emailtextGroup->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $emailtextGroup->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $emailtextGroup->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $emailtextGroup->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
