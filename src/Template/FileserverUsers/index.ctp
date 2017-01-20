
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
                                            <th><?= $this->Paginator->sort('username'); ?></th>
                                            <th><?= $this->Paginator->sort('password'); ?></th>
                                            <th><?= $this->Paginator->sort('vip'); ?></th>
                                            <th><?= $this->Paginator->sort('accepted'); ?></th>
                                            <th><?= $this->Paginator->sort('active'); ?></th>
                                        <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($fileserverUsers as $fileserverUser): ?>
                <tr>
                                        <td><?= $this->Number->format($fileserverUser->id) ?></td>
                                        <td>
                        <?= $fileserverUser->has('person') ? $this->Html->link($fileserverUser->person->id, ['controller' =>
                        'People', 'action' => 'view', $fileserverUser->person->id]) : '' ?>
                    </td>
                                        <td><?= h($fileserverUser->username) ?></td>
                                        <td><?= h($fileserverUser->password) ?></td>
                                        <td><?= h($fileserverUser->vip) ?></td>
                                        <td><?= h($fileserverUser->accepted) ?></td>
                                        <td><?= h($fileserverUser->active) ?></td>
                                        <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $fileserverUser->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $fileserverUser->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $fileserverUser->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $fileserverUser->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
