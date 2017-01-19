<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?> </li>
<li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?> </li>
<li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($job->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Queue') ?></td>
            <td><?= h($job->queue) ?></td>
        </tr>
        <tr>
            <td><?= __('Attempts') ?></td>
            <td><?= h($job->attempts) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($job->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Priority') ?></td>
            <td><?= $this->Number->format($job->priority) ?></td>
        </tr>
        <tr>
            <td><?= __('Locked') ?></td>
            <td><?= $this->Number->format($job->locked) ?></td>
        </tr>
        <tr>
            <td><?= __('Expires At') ?></td>
            <td><?= h($job->expires_at) ?></td>
        </tr>
        <tr>
            <td><?= __('Delay Until') ?></td>
            <td><?= h($job->delay_until) ?></td>
        </tr>
        <tr>
            <td><?= __('Data') ?></td>
            <td><?= $this->Text->autoParagraph(h($job->data)); ?></td>
        </tr>
    </table>
</div>

