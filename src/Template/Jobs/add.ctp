<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="jobs form large-9 medium-8 columns content">
    <?= $this->Form->create($job) ?>
    <fieldset>
        <legend><?= __('Add Job') ?></legend>
        <?php
            echo $this->Form->input('queue');
        echo $this->Form->input('data');
        echo $this->Form->input('priority');
        echo $this->Form->input('expires_at', ['empty' => true]);
        echo $this->Form->input('delay_until', ['empty' => true]);
        echo $this->Form->input('locked');
        echo $this->Form->input('attempts');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
