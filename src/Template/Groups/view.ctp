<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emailtext Groups'), ['controller' => 'EmailtextGroups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emailtext Group'), ['controller' => 'EmailtextGroups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groups view large-9 medium-8 columns content">
    <h3><?= h($group->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conditions') ?></th>
            <td><?= h($group->conditions) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Emailtext Groups') ?></h4>
        <?php if (!empty($group->emailtext_groups)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Emailtext Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($group->emailtext_groups as $emailtextGroups): ?>
            <tr>
                <td><?= h($emailtextGroups->id) ?></td>
                <td><?= h($emailtextGroups->emailtext_id) ?></td>
                <td><?= h($emailtextGroups->group_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmailtextGroups', 'action' => 'view', $emailtextGroups->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmailtextGroups', 'action' => 'edit', $emailtextGroups->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmailtextGroups', 'action' => 'delete', $emailtextGroups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextGroups->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
