<?php
use App\Model\Entity\User;

?>
<header class="main-header">
    <a href="<?= $this->Url->build(['controller' => 'dashboard', 'action' => 'index']) ?>" class="logo">
        <span class="logo-lg">hilton<b>portal</b></span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <?= $this->LanguageSwitcher->renderLanguageSwitcher(); ?>
                <?php if ($this->AuthUser->user()): ?>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/img/avatar5.png" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?= h($this->AuthUser->user('full_name')) ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="/img/avatar5.png" class="img-circle" alt="User Image">
                                <p>
                                    <?= h($this->AuthUser->user('full_name')) ?>
                                    <small>Placeholder <?= User::getTypeDescription(1) ?></small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/profile/index" class="btn btn-default btn-flat"><?= __('my_profile'); ?></a>
                                </div>
                                <div class="pull-right">
                                    <a href="/login/logout" class="btn btn-default btn-flat"><?= __('logout'); ?></a>
                                </div>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>
