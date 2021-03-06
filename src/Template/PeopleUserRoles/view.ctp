<section class="content-header">
    <h1>
        <?php echo __('People User Role'); ?>
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
                        <dt><?= __('Person') ?></dt>
                        <dd>
                            <?= $peopleUserRole->has('person') ? $peopleUserRole->person->id : '' ?>
                        </dd>
                        <dt><?= __('User Role') ?></dt>
                        <dd>
                            <?= $peopleUserRole->has('user_role') ? $peopleUserRole->user_role->title : '' ?>
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

</section>