<section class="content-header">
    <h1>
        <?php echo __('Person'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-chevron-left"></i> ' . __('Back'), ['action' => 'index'], ['escape'
            => false])?>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-info"></i>
                    <h3 class="box-title"><?php echo __('Information'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt><?= __('Surname') ?></dt>
                        <dd>
                            <?= h($person->surname) ?>
                        </dd>
                        <dt><?= __('Forename') ?></dt>
                        <dd>
                            <?= h($person->forename) ?>
                        </dd>
                        <dt><?= __('Email') ?></dt>
                        <dd>
                            <?= h($person->email) ?>
                        </dd>
                        <dt><?= __('Matriculation Number') ?></dt>
                        <dd>
                            <?= h($person->matriculation_number) ?>
                        </dd>
                        <dt><?= __('Nationality') ?></dt>
                        <dd>
                            <?= h($person->nationality) ?>
                        </dd>
                        <dt><?= __('Status') ?></dt>
                        <dd>
                            <?= h($person->status) ?>
                        </dd>


                        <dt><?= __('Studentenwerk Identification') ?></dt>
                        <dd>
                            <?= $this->Number->format($person->studentenwerk_identification) ?>
                        </dd>
                        <dt><?= __('Eth Unlocked Primary') ?></dt>
                        <dd>
                            <?= $this->Number->format($person->eth_unlocked_primary) ?>
                        </dd>
                        <dt><?= __('Password Retrieval') ?></dt>
                        <dd>
                            <?= $this->Number->format($person->password_retrieval) ?>
                        </dd>
                        <dt><?= __('Failed Login Count') ?></dt>
                        <dd>
                            <?= $this->Number->format($person->failed_login_count) ?>
                        </dd>

                        <dt><?= __('Birthday') ?></dt>
                        <dd>
                            <?= h($person->birthday) ?>
                        </dd>
                        <dt><?= __('Failed Login Timestamp') ?></dt>
                        <dd>
                            <?= h($person->failed_login_timestamp) ?>
                        </dd>


                        <dt><?= __('Sex') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($person->sex)); ?>
                        </dd>
                        <dt><?= __('Last Passwords') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($person->last_passwords)); ?>
                        </dd>
                    </dl>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <!-- div -->

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Fileserver Users']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($person->fileserver_users)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>

                            <th>
                                Id
                            </th>


                            <th>
                                Person
                            </th>


                            <th>
                                Username
                            </th>


                            <th>
                                Password
                            </th>


                            <th>
                                Vip
                            </th>


                            <th>
                                Accepted
                            </th>


                            <th>
                                Active
                            </th>


                            <th>
                                Password Retrieval
                            </th>


                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($person->fileserver_users as $fileserverUsers): ?>
                        <tr>

                            <td>
                                <?= h($fileserverUsers->id) ?>
                            </td>

                            <td>
                                <?= h($person->full_name) ?>
                            </td>

                            <td>
                                <?= h($fileserverUsers->username) ?>
                            </td>

                            <td>
                                <?= h($fileserverUsers->password) ?>
                            </td>

                            <td>
                                <?= h($fileserverUsers->vip) ?>
                            </td>

                            <td>
                                <?= h($fileserverUsers->accepted) ?>
                            </td>

                            <td>
                                <?= h($fileserverUsers->active) ?>
                            </td>

                            <td>
                                <?= h($fileserverUsers->password_retrieval) ?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'fileserverUsers', 'action' => 'view',
                                $fileserverUsers->id], ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'fileserverUsers', 'action' => 'edit',
                                $fileserverUsers->id], ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'fileserverUsers', 'action' => 'delete',
                                $fileserverUsers->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $fileserverUsers->id), 'title' => __('Delete'), 'class' =>
                                'btn btn-default
                                glyphicon glyphicon-trash']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Macs']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($person->macs)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>

                            <th>
                                Id
                            </th>


                            <th>
                                Person
                            </th>


                            <th>
                                Mac
                            </th>


                            <th>
                                Device Name
                            </th>


                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($person->macs as $macs): ?>
                        <tr>

                            <td>
                                <?= h($macs->id) ?>
                            </td>

                            <td>
                                <?= h($person->full_name) ?>
                            </td>

                            <td>
                                <?= h($macs->mac) ?>
                            </td>

                            <td>
                                <?= h($macs->device_name) ?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'macs', 'action' => 'view', $macs->id],
                                ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'macs', 'action' => 'edit', $macs->id],
                                ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'macs', 'action' => 'delete', $macs->id],
                                ['confirm' => __('Are you sure
                                you want to delete # {0}?', $macs->id), 'title' => __('Delete'), 'class' => 'btn
                                btn-default
                                glyphicon glyphicon-trash']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Tenants']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($person->tenants)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>

                            <th>
                                Id
                            </th>


                            <th>
                                Person
                            </th>


                            <th>
                                Room Id
                            </th>


                            <th>
                                Date Move In
                            </th>


                            <th>
                                Date Move Out
                            </th>


                            <th>
                                Tenant Type
                            </th>


                            <th>
                                Comment
                            </th>


                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($person->tenants as $tenants): ?>
                        <tr>

                            <td>
                                <?= h($tenants->id) ?>
                            </td>

                            <td>
                                <?= h($person->full_name) ?>
                            </td>

                            <td>
                                <?= h($tenants->room_id) ?>
                            </td>

                            <td>
                                <?= h($tenants->date_move_in) ?>
                            </td>

                            <td>
                                <?= h($tenants->date_move_out) ?>
                            </td>

                            <td>
                                <?= h($tenants->tenant_type) ?>
                            </td>

                            <td>
                                <?= h($tenants->comment) ?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'tenants', 'action' => 'view', $tenants->id],
                                ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'tenants', 'action' => 'edit', $tenants->id],
                                ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'tenants', 'action' => 'delete',
                                $tenants->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $tenants->id), 'title' => __('Delete'), 'class' => 'btn
                                btn-default
                                glyphicon glyphicon-trash']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Memberships']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($person->memberships)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>

                            <th>
                                Id
                            </th>


                            <th>
                                Name
                            </th>


                            <th>
                                Type
                            </th>


                            <th>
                                Description
                            </th>


                            <th>
                                Membership Fee
                            </th>


                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($person->memberships as $memberships): ?>
                        <tr>

                            <td>
                                <?= h($memberships->id) ?>
                            </td>

                            <td>
                                <?= h($memberships->name) ?>
                            </td>

                            <td>
                                <?= h($memberships->type) ?>
                            </td>

                            <td>
                                <?= h($memberships->description) ?>
                            </td>

                            <td>
                                <?= h($memberships->membership_fee) ?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'memberships', 'action' => 'view',
                                $memberships->id], ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'memberships', 'action' => 'edit',
                                $memberships->id], ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'memberships', 'action' => 'delete',
                                $memberships->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $memberships->id), 'title' => __('Delete'), 'class' => 'btn
                                btn-default
                                glyphicon glyphicon-trash']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['User Roles']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($person->user_roles)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>

                            <th>
                                Id
                            </th>


                            <th>
                                Title
                            </th>


                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($person->user_roles as $userRoles): ?>
                        <tr>

                            <td>
                                <?= h($userRoles->id) ?>
                            </td>

                            <td>
                                <?= h($userRoles->title) ?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'userRoles', 'action' => 'view',
                                $userRoles->id], ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'userRoles', 'action' => 'edit',
                                $userRoles->id], ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'userRoles', 'action' => 'delete',
                                $userRoles->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $userRoles->id), 'title' => __('Delete'), 'class' => 'btn
                                btn-default
                                glyphicon glyphicon-trash']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Roomkeys']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($person->roomkeys)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>

                            <th>
                                Id
                            </th>


                            <th>
                                Name
                            </th>


                            <th>
                                Discription
                            </th>


                            <th>
                                Amount
                            </th>


                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($person->roomkeys as $roomkeys): ?>
                        <tr>

                            <td>
                                <?= h($roomkeys->id) ?>
                            </td>

                            <td>
                                <?= h($roomkeys->name) ?>
                            </td>

                            <td>
                                <?= h($roomkeys->discription) ?>
                            </td>

                            <td>
                                <?= h($roomkeys->amount) ?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'roomkeys', 'action' => 'view',
                                $roomkeys->id], ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'roomkeys', 'action' => 'edit',
                                $roomkeys->id], ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'roomkeys', 'action' => 'delete',
                                $roomkeys->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $roomkeys->id), 'title' => __('Delete'), 'class' => 'btn
                                btn-default
                                glyphicon glyphicon-trash']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Working Groups']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($person->working_groups)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>

                            <th>
                                Id
                            </th>


                            <th>
                                Name
                            </th>


                            <th>
                                Description
                            </th>


                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($person->working_groups as $workingGroups): ?>
                        <tr>

                            <td>
                                <?= h($workingGroups->id) ?>
                            </td>

                            <td>
                                <?= h($workingGroups->name) ?>
                            </td>

                            <td>
                                <?= h($workingGroups->description) ?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'workingGroups', 'action' => 'view',
                                $workingGroups->id], ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'workingGroups', 'action' => 'edit',
                                $workingGroups->id], ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'workingGroups', 'action' => 'delete',
                                $workingGroups->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $workingGroups->id), 'title' => __('Delete'), 'class' =>
                                'btn btn-default
                                glyphicon glyphicon-trash']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>