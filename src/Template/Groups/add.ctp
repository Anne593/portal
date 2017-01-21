<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Emailtext Groups'), ['controller' => 'EmailtextGroups', 'action' => 'index'])
            ?>
        </li>
        <li><?= $this->Html->link(__('New Emailtext Group'), ['controller' => 'EmailtextGroups', 'action' => 'add'])
            ?>
        </li>
    </ul>
</nav>
<div class="groups form large-9 medium-8 columns content">
    <?= $this->Form->create($group) ?>
    <fieldset>
        <legend><?= __('Add Group') ?></legend>
        <?php
            echo $this->Form->input('name');
        echo $this->Form->input('conditions');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
