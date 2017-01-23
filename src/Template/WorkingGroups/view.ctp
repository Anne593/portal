<section class="content-header">
    <h1>
        <?php echo __('Working Group'); ?>
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
                        <dt><?= __('Name') ?></dt>
                        <dd>
                            <?= h($workingGroup->name) ?>
                        </dd>


                        <dt><?= __('Description') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($workingGroup->description)); ?>
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

                    <?php if (!empty($workingGroup->people)): ?>

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
                                Status
                            </th>


                            <th>
                                <?php echo __('Actions'); ?>
                            </th>
                        </tr>

                        <?php foreach ($workingGroup->people as $people): ?>
                        <tr>

                            <td>
                                <?= h($people->id) ?>
                            </td>

                            <td>
                                <?= h($people->full_name) ?>
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
                                <?= h($people->status) ?>
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
</section>