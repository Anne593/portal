<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Emailtexts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Emailtext Groups'), ['controller' => 'EmailtextGroups', 'action' => 'index'])
            ?>
        </li>
        <li><?= $this->Html->link(__('New Emailtext Group'), ['controller' => 'EmailtextGroups', 'action' => 'add'])
            ?>
        </li>
        <li><?= $this->Html->link(__('List Emailtext Users'), ['controller' => 'EmailtextUsers', 'action' => 'index'])
            ?>
        </li>
        <li><?= $this->Html->link(__('New Emailtext User'), ['controller' => 'EmailtextUsers', 'action' => 'add']) ?>
        </li>
    </ul>
</nav>
<div class="emailtexts form large-9 medium-8 columns content">
    <?= $this->Form->create($emailtext) ?>
    <fieldset>
        <legend><?= __('Add Emailtext') ?></legend>
        <?php
            echo $this->Form->input('topic');
        echo $this->Form->input('subject');
        echo $this->Form->input('text');
        echo $this->Form->input('resume_email');
        echo $this->Form->input('deadline');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
