<section class="content-header">
    <h1>
        <?php echo __('User Roles Permission'); ?>
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
                        <dt><?= __('User Role') ?></dt>
                        <dd>
                            <?= $userRolesPermission->has('user_role') ? $userRolesPermission->user_role->title : '' ?>
                        </dd>
                        <dt><?= __('Permission') ?></dt>
                        <dd>
                            <?= $userRolesPermission->has('permission') ? $userRolesPermission->permission->id : '' ?>
                        </dd>


                        <dt><?= __('Can View') ?></dt>
                        <dd>
                            <?= $userRolesPermission->can_view ? __('Yes') : __('No'); ?>
                        </dd>
                        <dt><?= __('Can Edit') ?></dt>
                        <dd>
                            <?= $userRolesPermission->can_edit ? __('Yes') : __('No'); ?>
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