<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Roles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userRoles form large-9 medium-8 columns content">
    <?= $this->Form->create($userRole) ?>
    <fieldset>
        <legend><?= __('Add User Role') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('people._ids', ['options' => $people]);
            echo $this->Form->input('permissions._ids', ['options' => $permissions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
