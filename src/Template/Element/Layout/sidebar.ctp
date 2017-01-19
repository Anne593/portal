<?php

use App\Model\Entity\Person;
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Suchen...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>

        <ul class="sidebar-menu">
            <li><?php print $this->Html->link('EmailtextGroups', array('controller' => 'EmailtextGroups')); ?></li>
            <li><?php print $this->Html->link('EmailtextUsers', array('controller' => 'EmailtextUsers')); ?></li>
            <li><?php print $this->Html->link('Emailtexts', array('controller' => 'Emailtexts')); ?></li>
            <li><?php print $this->Html->link('FileserverUsers', array('controller' => 'FileserverUsers')); ?></li>
            <li><?php print $this->Html->link('Groups', array('controller' => 'Groups')); ?></li>
            <li><?php print $this->Html->link('Ips', array('controller' => 'Ips')); ?></li>
            <li><?php print $this->Html->link('Jobs', array('controller' => 'Jobs')); ?></li>
            <li><?php print $this->Html->link('Macs', array('controller' => 'Macs')); ?></li>
            <li><?php print $this->Html->link('Memberships', array('controller' => 'Memberships')); ?></li>
            <li><?php print $this->Html->link('ModelHistory', array('controller' => 'ModelHistory')); ?></li>
            <li><?php print $this->Html->link('People', array('controller' => 'People')); ?></li>
            <li><?php print $this->Html->link('PeopleMemberships', array('controller' => 'PeopleMemberships')); ?></li>
            <li><?php print $this->Html->link('PeopleUserRoles', array('controller' => 'PeopleUserRoles')); ?></li>
            <li><?php print $this->Html->link('Permissions', array('controller' => 'Permissions')); ?></li>
            <li><?php print $this->Html->link('Roomkeys', array('controller' => 'Roomkeys')); ?></li>
            <li><?php print $this->Html->link('RoomkeysPeople', array('controller' => 'RoomkeysPeople')); ?></li>
            <li><?php print $this->Html->link('Rooms', array('controller' => 'Rooms')); ?></li>
            <li><?php print $this->Html->link('Tenants', array('controller' => 'Tenants')); ?></li>
            <li><?php print $this->Html->link('UserRoles', array('controller' => 'UserRoles')); ?></li>
            <li><?php print $this->Html->link('UserRolesPermissions', array('controller' => 'UserRolesPermissions')); ?></li>
            <li><?php print $this->Html->link('WorkingGroups', array('controller' => 'WorkingGroups')); ?></li>
            <li><?php print $this->Html->link('WorkingGroupsPeople', array('controller' => 'WorkingGroupsPeople')); ?></li>
        </ul>
    </section>
</aside>