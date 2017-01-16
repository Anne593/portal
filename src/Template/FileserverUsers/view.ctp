<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fileserver User'), ['action' => 'edit', $fileserverUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fileserver User'), ['action' => 'delete', $fileserverUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileserverUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fileserver Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fileserver User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fileserverUsers view large-9 medium-8 columns content">
    <h3><?= h($fileserverUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $fileserverUser->has('person') ? $this->Html->link($fileserverUser->person->id, ['controller' => 'People', 'action' => 'view', $fileserverUser->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($fileserverUser->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($fileserverUser->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fileserverUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password Retrieval') ?></th>
            <td><?= $this->Number->format($fileserverUser->password_retrieval) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fileserverUser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vip') ?></th>
            <td><?= $fileserverUser->vip ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accepted') ?></th>
            <td><?= $fileserverUser->accepted ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $fileserverUser->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
