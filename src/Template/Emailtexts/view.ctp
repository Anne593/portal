<section class="content-header">
    <h1>
        <?php echo __('Emailtext'); ?>
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
                                                                                                <dt><?= __('Topic') ?></dt>
                        <dd>
                            <?= h($emailtext->topic) ?>
                        </dd>
                                                                                                                        <dt><?= __('Subject') ?></dt>
                        <dd>
                            <?= h($emailtext->subject) ?>
                        </dd>
                                                                                                                        <dt><?= __('Resume Email') ?></dt>
                        <dd>
                            <?= h($emailtext->resume_email) ?>
                        </dd>
                                                                                                
                        
                                                                                                                                                <dt><?= __('Deadline') ?></dt>
                        <dd>
                            <?= $this->Number->format($emailtext->deadline) ?>
                        </dd>
                                                                        
                        
                        
                                                                        <dt><?= __('Text') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($emailtext->text)); ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Emailtext Groups']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($emailtext->emailtext_groups)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>
                                                        
                            <th>
                                Id
                            </th>

                                                        
                            <th>
                                Emailtext Id
                            </th>

                                                        
                            <th>
                                Group Id
                            </th>

                            
                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($emailtext->emailtext_groups as $emailtextGroups): ?>
                        <tr>
                                                        
                            <td>
                                <?= h($emailtextGroups->id) ?>
                            </td>
                                                        
                            <td>
                                <?= h($emailtextGroups->emailtext_id) ?>
                            </td>
                                                        
                            <td>
                                <?= h($emailtextGroups->group_id) ?>
                            </td>
                            
                                                        <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'emailtextGroups', 'action' => 'view', $emailtextGroups->id], ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'emailtextGroups', 'action' => 'edit', $emailtextGroups->id], ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'emailtextGroups', 'action' => 'delete', $emailtextGroups->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $emailtextGroups->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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
                    <h3 class="box-title"><?= __('Related {0}', ['Emailtext Users']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($emailtext->emailtext_users)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>
                                                        
                            <th>
                                Id
                            </th>

                                                        
                            <th>
                                Emailtext Id
                            </th>

                                                        
                            <th>
                                Type
                            </th>

                                                        
                            <th>
                                Type Id
                            </th>

                            
                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($emailtext->emailtext_users as $emailtextUsers): ?>
                        <tr>
                                                        
                            <td>
                                <?= h($emailtextUsers->id) ?>
                            </td>
                                                        
                            <td>
                                <?= h($emailtextUsers->emailtext_id) ?>
                            </td>
                                                        
                            <td>
                                <?= h($emailtextUsers->type) ?>
                            </td>
                                                        
                            <td>
                                <?= h($emailtextUsers->type_id) ?>
                            </td>
                            
                                                        <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'emailtextUsers', 'action' => 'view', $emailtextUsers->id], ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['controller' => 'emailtextUsers', 'action' => 'edit', $emailtextUsers->id], ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['controller' => 'emailtextUsers', 'action' => 'delete', $emailtextUsers->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $emailtextUsers->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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