
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
                                            <th><?= $this->Paginator->sort('name'); ?></th>
                                            <th><?= $this->Paginator->sort('description'); ?></th>
                                            <th><?= $this->Paginator->sort('membership_fee'); ?></th>
                                        <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($memberships as $membership): ?>
                <tr>
                                        <td><?= $this->Number->format($membership->id) ?></td>
                                        <td><?= h($membership->name) ?></td>
                                        <td><?= h($membership->description) ?></td>
                                        <td><?= $this->Number->format($membership->membership_fee) ?></td>
                                        <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $membership->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $membership->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $membership->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $membership->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
