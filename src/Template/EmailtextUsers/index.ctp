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
                    <th><?= $this->Paginator->sort('type_id'); ?></th>
                    <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($emailtextUsers as $emailtextUser): ?>
                <tr>
                    <td><?= $this->Number->format($emailtextUser->id) ?></td>
                    <td>
                        <?= $emailtextUser->has('emailtext') ? $this->Html->link($emailtextUser->emailtext->subject,
                        ['controller' =>
                        'Emailtexts', 'action' => 'view', $emailtextUser->emailtext->id]) : '' ?>
                    </td>
                    <td><?= $this->Number->format($emailtextUser->type_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $emailtextUser->id], ['title' => __('View'),
                        'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $emailtextUser->id], ['title' => __('Edit'),
                        'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $emailtextUser->id], ['confirm' => __('Are
                        you sure
                        you want to delete # {0}?', $emailtextUser->id), 'title' => __('Delete'), 'class' => 'btn
                        btn-default
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
