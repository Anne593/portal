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
                    <th><?= $this->Paginator->sort('semester'); ?></th>
                    <th><?= $this->Paginator->sort('person_id'); ?></th>
                    <th><?= $this->Paginator->sort('membership_id'); ?></th>
                    <th><?= $this->Paginator->sort('payment'); ?></th>
                    <th><?= $this->Paginator->sort('social_service'); ?></th>
                    <th><?= $this->Paginator->sort('social_service_comment'); ?></th>
                    <th class="actions"><?= __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($peopleMemberships as $peopleMembership): ?>
                <tr>
                    <td><?= $this->Number->format($peopleMembership->id) ?></td>
                    <td><?= $this->Number->format($peopleMembership->semester) ?></td>
                    <td>
                        <?= $peopleMembership->has('person') ? $this->Html->link($peopleMembership->person->full_name,
                        ['controller' =>
                        'People', 'action' => 'view', $peopleMembership->person->id]) : '' ?>
                    </td>
                    <td>
                        <?= $peopleMembership->has('membership') ?
                        $this->Html->link($peopleMembership->membership->name, ['controller' =>
                        'Memberships', 'action' => 'view', $peopleMembership->membership->id]) : '' ?>
                    </td>
                    <td><?= h($peopleMembership->payment) ?></td>
                    <td><?= $this->Number->format($peopleMembership->social_service) ?></td>
                    <td><?= h($peopleMembership->social_service_comment) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $peopleMembership->id], ['title' => __('View'),
                        'class' =>
                        'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $peopleMembership->id], ['title' => __('Edit'),
                        'class' =>
                        'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $peopleMembership->id], ['confirm' =>
                        __('Are you sure
                        you want to delete # {0}?', $peopleMembership->id), 'title' => __('Delete'), 'class' => 'btn
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
