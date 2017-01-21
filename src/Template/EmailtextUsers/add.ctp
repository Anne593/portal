<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Emailtext Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emailtextUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($emailtextUser) ?>
    <fieldset>
        <legend><?= __('Add Emailtext User') ?></legend>
        <?php
            echo $this->Form->input('emailtext_id', ['options' => $emailtexts]);
        echo $this->Form->input('type');
        echo $this->Form->input('type_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
