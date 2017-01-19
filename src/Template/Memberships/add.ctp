<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Memberships'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="memberships form large-9 medium-8 columns content">
    <?= $this->Form->create($membership) ?>
    <fieldset>
        <legend><?= __('Add Membership') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('type');
            echo $this->Form->input('description');
            echo $this->Form->input('membership_fee');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
