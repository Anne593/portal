<section class="content-header">
    <h1>
        <?php echo __('Permission'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-chevron-left"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
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
                                                                                                <dt><?= __('Model') ?></dt>
                        <dd>
                            <?= h($permission->model) ?>
                        </dd>
                                                                                                                        <dt><?= __('Field Name') ?></dt>
                        <dd>
                            <?= h($permission->field_name) ?>
                        </dd>
                                                                                                
                        
                                                                                                                                                <dt><?= __('Type') ?></dt>
                        <dd>
                            <?= $this->Number->format($permission->type) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['User Roles']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($permission->user_roles)): ?>

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

                        <?php foreach ($permission->user_roles as $userRoles): ?>
                        <tr>
                                                        
                            <td>
                                <?= h($userRoles->id) ?>
                            </td>
                                                        
                            <td>
                                <?= h($userRoles->title) ?>
                            </td>
                            
                                                        <td class="actions">
                                <?= $this->Html->link('', ['action' => 'view', $permission->id], ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['action' => 'edit', $permission->id], ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['action' => 'delete', $permission->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $permission->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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