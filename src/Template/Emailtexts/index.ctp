
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
                                            <th><?= $this->Paginator->sort('topic'); ?></th>
                                            <th><?= $this->Paginator->sort('subject'); ?></th>
                                            <th><?= $this->Paginator->sort('resume_email'); ?></th>
                                            <th><?= $this->Paginator->sort('deadline'); ?></th>
                                        <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($emailtexts as $emailtext): ?>
                <tr>
                                        <td><?= $this->Number->format($emailtext->id) ?></td>
                                        <td><?= h($emailtext->topic) ?></td>
                                        <td><?= h($emailtext->subject) ?></td>
                                        <td><?= h($emailtext->resume_email) ?></td>
                                        <td><?= $this->Number->format($emailtext->deadline) ?></td>
                                        <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $emailtext->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $emailtext->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $emailtext->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $emailtext->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
