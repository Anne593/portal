<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Emailtext'), ['action' => 'edit', $emailtext->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emailtext'), ['action' => 'delete', $emailtext->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtext->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emailtexts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emailtext'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emailtext Groups'), ['controller' => 'EmailtextGroups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emailtext Group'), ['controller' => 'EmailtextGroups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emailtext Users'), ['controller' => 'EmailtextUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emailtext User'), ['controller' => 'EmailtextUsers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emailtexts view large-9 medium-8 columns content">
    <h3><?= h($emailtext->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Topic') ?></th>
            <td><?= h($emailtext->topic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= h($emailtext->subject) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resume Email') ?></th>
            <td><?= h($emailtext->resume_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($emailtext->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deadline') ?></th>
            <td><?= $this->Number->format($emailtext->deadline) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($emailtext->text)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Emailtext Groups') ?></h4>
        <?php if (!empty($emailtext->emailtext_groups)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Emailtext Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($emailtext->emailtext_groups as $emailtextGroups): ?>
            <tr>
                <td><?= h($emailtextGroups->id) ?></td>
                <td><?= h($emailtextGroups->emailtext_id) ?></td>
                <td><?= h($emailtextGroups->group_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmailtextGroups', 'action' => 'view', $emailtextGroups->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmailtextGroups', 'action' => 'edit', $emailtextGroups->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmailtextGroups', 'action' => 'delete', $emailtextGroups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextGroups->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Emailtext Users') ?></h4>
        <?php if (!empty($emailtext->emailtext_users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Emailtext Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($emailtext->emailtext_users as $emailtextUsers): ?>
            <tr>
                <td><?= h($emailtextUsers->id) ?></td>
                <td><?= h($emailtextUsers->emailtext_id) ?></td>
                <td><?= h($emailtextUsers->type) ?></td>
                <td><?= h($emailtextUsers->type_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmailtextUsers', 'action' => 'view', $emailtextUsers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmailtextUsers', 'action' => 'edit', $emailtextUsers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmailtextUsers', 'action' => 'delete', $emailtextUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailtextUsers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
