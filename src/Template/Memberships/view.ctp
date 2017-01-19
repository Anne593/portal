<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Membership'), ['action' => 'edit', $membership->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Membership'), ['action' => 'delete', $membership->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membership->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Memberships'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Membership'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="memberships view large-9 medium-8 columns content">
    <h3><?= h($membership->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($membership->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($membership->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($membership->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Membership Fee') ?></th>
            <td><?= $this->Number->format($membership->membership_fee) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Type') ?></h4>
        <?= $this->Text->autoParagraph(h($membership->type)); ?>
    </div>
</div>
