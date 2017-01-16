<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Emailtext User'), ['action' => 'edit', $emailtextUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emailtext User'), ['action' => 'delete', $emailtextUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emailtext Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emailtext User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emailtexts'), ['controller' => 'Emailtexts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emailtext'), ['controller' => 'Emailtexts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emailtextUsers view large-9 medium-8 columns content">
    <h3><?= h($emailtextUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Emailtext') ?></th>
            <td><?= $emailtextUser->has('emailtext') ? $this->Html->link($emailtextUser->emailtext->id, ['controller' => 'Emailtexts', 'action' => 'view', $emailtextUser->emailtext->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($emailtextUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Id') ?></th>
            <td><?= $this->Number->format($emailtextUser->type_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Type') ?></h4>
        <?= $this->Text->autoParagraph(h($emailtextUser->type)); ?>
    </div>
</div>
