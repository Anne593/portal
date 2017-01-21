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
                    <th><?= $this->Paginator->sort('queue'); ?></th>
                    <th><?= $this->Paginator->sort('priority'); ?></th>
                    <th><?= $this->Paginator->sort('expires_at'); ?></th>
                    <th><?= $this->Paginator->sort('delay_until'); ?></th>
                    <th><?= $this->Paginator->sort('locked'); ?></th>
                    <th><?= $this->Paginator->sort('attempts'); ?></th>
                    <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($jobs as $job): ?>
                <tr>
                    <td><?= $this->Number->format($job->id) ?></td>
                    <td><?= h($job->queue) ?></td>
                    <td><?= $this->Number->format($job->priority) ?></td>
                    <td><?= h($job->expires_at) ?></td>
                    <td><?= h($job->delay_until) ?></td>
                    <td><?= $this->Number->format($job->locked) ?></td>
                    <td><?= h($job->attempts) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $job->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $job->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $job->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $job->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
