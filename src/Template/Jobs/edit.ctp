<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $job->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $job->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($job); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Job']) ?></legend>
    <?php
    echo $this->Form->input('queue');
    echo $this->Form->input('data');
    echo $this->Form->input('priority');
    echo $this->Form->input('expires_at');
    echo $this->Form->input('delay_until');
    echo $this->Form->input('locked');
    echo $this->Form->input('attempts');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
