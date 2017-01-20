<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $peopleUserRole->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $peopleUserRole->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List People User Roles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleUserRoles form large-9 medium-8 columns content">
    <?= $this->Form->create($peopleUserRole) ?>
    <fieldset>
        <legend><?= __('Edit People User Role') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people]);
            echo $this->Form->input('user_role_id', ['options' => $userRoles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
