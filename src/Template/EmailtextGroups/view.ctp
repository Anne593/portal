<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Emailtext Group'), ['action' => 'edit', $emailtextGroup->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emailtext Group'), ['action' => 'delete', $emailtextGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextGroup->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emailtext Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emailtext Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emailtextGroups view large-9 medium-8 columns content">
    <h3><?= h($emailtextGroup->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Emailtext') ?></th>
            <td><?= $emailtextGroup->has('emailtext') ? $this->Html->link($emailtextGroup->emailtext->id, ['controller' => 'Emailtexts', 'action' => 'view', $emailtextGroup->emailtext->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $emailtextGroup->has('group') ? $this->Html->link($emailtextGroup->group->name, ['controller' => 'Groups', 'action' => 'view', $emailtextGroup->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($emailtextGroup->id) ?></td>
        </tr>
    </table>
</div>
