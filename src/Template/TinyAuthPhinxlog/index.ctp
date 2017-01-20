
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
                                            <th><?= $this->Paginator->sort('version'); ?></th>
                                            <th><?= $this->Paginator->sort('migration_name'); ?></th>
                                            <th><?= $this->Paginator->sort('start_time'); ?></th>
                                            <th><?= $this->Paginator->sort('end_time'); ?></th>
                                            <th><?= $this->Paginator->sort('breakpoint'); ?></th>
                                        <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tinyAuthPhinxlog as $tinyAuthPhinxlog): ?>
                <tr>
                                        <td><?= $this->Number->format($tinyAuthPhinxlog->version) ?></td>
                                        <td><?= h($tinyAuthPhinxlog->migration_name) ?></td>
                                        <td><?= h($tinyAuthPhinxlog->start_time) ?></td>
                                        <td><?= h($tinyAuthPhinxlog->end_time) ?></td>
                                        <td><?= h($tinyAuthPhinxlog->breakpoint) ?></td>
                                        <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $tinyAuthPhinxlog->version], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $tinyAuthPhinxlog->version], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $tinyAuthPhinxlog->version], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $tinyAuthPhinxlog->version), 'title' => __('Delete'), 'class' => 'btn btn-default
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
