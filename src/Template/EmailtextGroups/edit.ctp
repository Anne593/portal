<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $emailtextGroup->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextGroup->id)]
            )
            ?>
        </li>
        <li><?= $this->Html->link(__('List Emailtext Groups'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emailtextGroups form large-9 medium-8 columns content">
    <?= $this->Form->create($emailtextGroup) ?>
    <fieldset>
        <legend><?= __('Edit Emailtext Group') ?></legend>
        <?php
            echo $this->Form->input('emailtext_id', ['options' => $emailtexts]);
        echo $this->Form->input('group_id', ['options' => $groups]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
