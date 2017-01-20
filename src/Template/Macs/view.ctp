<section class="content-header">
    <h1>
        <?php echo __('Mac'); ?>
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
                                                                                                <dt><?= __('Person') ?></dt>
                        <dd>
                            <?= $mac->has('person') ? $mac->person->id : '' ?>
                        </dd>
                                                                                                <dt><?= __('Mac') ?></dt>
                        <dd>
                            <?= h($mac->mac) ?>
                        </dd>
                                                                                                                        <dt><?= __('Device Name') ?></dt>
                        <dd>
                            <?= h($mac->device_name) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Ips']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($mac->ips)): ?>

                    <table class="table table-hover">
                        <tbody>
                        <tr>
                                                        
                            <th>
                                Id
                            </th>

                                                        
                            <th>
                                Mac Id
                            </th>

                                                        
                            <th>
                                Ip
                            </th>

                                                        
                            <th>
                                Lease Start
                            </th>

                                                        
                            <th>
                                Lease End
                            </th>

                            
                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($mac->ips as $ips): ?>
                        <tr>
                                                        
                            <td>
                                <?= h($ips->id) ?>
                            </td>
                                                        
                            <td>
                                <?= h($ips->mac_id) ?>
                            </td>
                                                        
                            <td>
                                <?= h($ips->ip) ?>
                            </td>
                                                        
                            <td>
                                <?= h($ips->lease_start) ?>
                            </td>
                                                        
                            <td>
                                <?= h($ips->lease_end) ?>
                            </td>
                            
                                                        <td class="actions">
                                <?= $this->Html->link('', ['action' => 'view', $mac->id], ['title' => __('View'), 'class' =>
                                'btn btn-default glyphicon glyphicon-eye-open']) ?>
                                <?= $this->Html->link('', ['action' => 'edit', $mac->id], ['title' => __('Edit'), 'class' =>
                                'btn btn-default glyphicon glyphicon-pencil']) ?>
                                <?= $this->Form->postLink('', ['action' => 'delete', $mac->id], ['confirm' => __('Are you sure
                                you want to delete # {0}?', $mac->id), 'title' => __('Delete'), 'class' => 'btn btn-default
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