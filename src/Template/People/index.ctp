
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
                                        <th><?= $this->Paginator->sort('surname'); ?></th>
                                        <th><?= $this->Paginator->sort('forename'); ?></th>
                                        <th><?= $this->Paginator->sort('email'); ?></th>
                                        <th><?= $this->Paginator->sort('birthday'); ?></th>
                                        <th><?= $this->Paginator->sort('matriculation_number'); ?></th>
                                        <th><?= $this->Paginator->sort('studentenwerk_identification'); ?></th>
                                        <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($people as $person): ?>
                <tr>
                                        <td><?= $this->Number->format($person->id) ?></td>
                                        <td><?= h($person->surname) ?></td>
                                        <td><?= h($person->forename) ?></td>
                                        <td><?= h($person->email) ?></td>
                                        <td><?= h($person->birthday) ?></td>
                                        <td><?= h($person->matriculation_number) ?></td>
                                        <td><?= $this->Number->format($person->studentenwerk_identification) ?></td>
                                        <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $person->id], ['title' => __('View'), 'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $person->id], ['title' => __('Edit'), 'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $person->id], ['confirm' => __('Are you sure
                        you want to delete # {0}?', $person->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
