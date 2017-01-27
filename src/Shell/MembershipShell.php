<?php

namespace App\Shell;

use Cake\Console\Shell;

class MembershipShell extends Shell
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Memberships','PeopleMemberships');
    }

    public function main()
    {
        debug($this->PeopleMemberships);
        $user = $this->PeopleMemberships->get(1);
        $membership = $this->Memberships->find('all');
        debug($membership);
    }
}