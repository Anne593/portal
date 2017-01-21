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
                    <th><?= $this->Paginator->sort('model'); ?></th>
                    <th><?= $this->Paginator->sort('foreign_key'); ?></th>
                    <th><?= $this->Paginator->sort('user_id'); ?></th>
                    <th><?= $this->Paginator->sort('action'); ?></th>
                    <th><?= $this->Paginator->sort('context_type'); ?></th>
                    <th><?= $this->Paginator->sort('context_slug'); ?></th>
                    <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($modelHistory as $modelHistory): ?>
                <tr>
                    <td><?= h($modelHistory->id) ?></td>
                    <td><?= h($modelHistory->model) ?></td>
                    <td><?= h($modelHistory->foreign_key) ?></td>
                    <td><?= h($modelHistory->user_id) ?></td>
                    <td><?= h($modelHistory->action) ?></td>
                    <td><?= h($modelHistory->context_type) ?></td>
                    <td><?= h($modelHistory->context_slug) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $modelHistory->id], ['title' => __('View'),
                        'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $modelHistory->id], ['title' => __('Edit'),
                        'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $modelHistory->id], ['confirm' => __('Are
                        you sure
                        you want to delete # {0}?', $modelHistory->id), 'title' => __('Delete'), 'class' => 'btn
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
