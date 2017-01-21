<section class="content-header">
    <h1>
        <?php echo __('User Role'); ?>
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
                        <dt><?= __('Title') ?></dt>
                        <dd>
                            <?= h($userRole->title) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['People']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($userRole->people)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>

                            <th>
                                Id
                            </th>


                            <th>
                                Surname
                            </th>


                            <th>
                                Forename
                            </th>


                            <th>
                                Email
                            </th>


                            <th>
                                Birthday
                            </th>


                            <th>
                                Matriculation Number
                            </th>


                            <th>
                                Studentenwerk Identification
                            </th>


                            <th>
                                Nationality
                            </th>


                            <th>
                                Sex
                            </th>


                            <th>
                                Eth Unlocked Primary
                            </th>


                            <th>
                                Password
                            </th>


                            <th>
                                Password Retrieval
                            </th>


                            <th>
                                Status
                            </th>


                            <th>
                                Failed Login Count
                            </th>


                            <th>
                                Failed Login Timestamp
                            </th>


                            <th>
                                Last Passwords
                            </th>


                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($userRole->people as $people): ?>
                        <tr>

                            <td>
                                <?= h($people->id) ?>
                            </td>

                            <td>
                                <?= h($people->surname) ?>
                            </td>

                            <td>
                                <?= h($people->forename) ?>
                            </td>

                            <td>
                                <?= h($people->email) ?>
                            </td>

                            <td>
                                <?= h($people->birthday) ?>
                            </td>

                            <td>
                                <?= h($people->matriculation_number) ?>
                            </td>

                            <td>
                                <?= h($people->studentenwerk_identification) ?>
                            </td>

                            <td>
                                <?= h($people->nationality) ?>
                            </td>

                            <td>
                                <?= h($people->sex) ?>
                            </td>

                            <td>
                                <?= h($people->eth_unlocked_primary) ?>
                            </td>

                            <td>
                                <?= h($people->password) ?>
                            </td>

                            <td>
                                <?= h($people->password_retrieval) ?>
                            </td>

                            <td>
                                <?= h($people->status) ?>
                            </td>

                            <td>
                                <?= h($people->failed_login_count) ?>
                            </td>

                            <td>
                                <?= h($people->failed_login_timestamp) ?>
                            </td>

                            <td>
                                <?= h($people->last_passwords) ?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'people', 'action' => 'view', $people->id],
                                ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'people', 'action' => 'edit', $people->id],
                                ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'people', 'action' => 'delete',
                                $people->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $people->id), 'title' => __('Delete'), 'class' => 'btn
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
                    <h3 class="box-title"><?= __('Related {0}', ['Permissions']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($userRole->permissions)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>

                            <th>
                                Id
                            </th>


                            <th>
                                Type
                            </th>


                            <th>
                                Model
                            </th>


                            <th>
                                Field Name
                            </th>


                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($userRole->permissions as $permissions): ?>
                        <tr>

                            <td>
                                <?= h($permissions->id) ?>
                            </td>

                            <td>
                                <?= h($permissions->type) ?>
                            </td>

                            <td>
                                <?= h($permissions->model) ?>
                            </td>

                            <td>
                                <?= h($permissions->field_name) ?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link('', ['action' => 'view', $userRole->id], ['title' => __('View'),
                                'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['action' => 'edit', $userRole->id], ['title' => __('Edit'),
                                'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['action' => 'delete', $userRole->id], ['confirm' =>
                                __('Are you sure
                                you want to delete # {0}?', $userRole->id), 'title' => __('Delete'), 'class' => 'btn
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
</section>