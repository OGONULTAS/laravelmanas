
<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
         data-menu-vertical="true" data-menu-scrollable="true" data-menu-dropdown-timeout="500">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item" aria-haspopup="true" id="sidebar">
                <a href="<?php echo e(url('/')); ?>" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                AnaSayfa
                            </span>
                        </span>
                    </span>
                </a>
            </li>
            <li class="m-menu__section">
                <h4 class="m-menu__section-text">
                    Sayfalar
                </h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>
         
            <li class="m-menu__item" aria-haspopup="true" id="sidebar">
                <a href="<?php echo e(url('empty')); ?>" class="m-menu__link">
                    <i class="m-menu__link-icon flaticon-suitcase"></i>
                    <span class="m-menu__link-text">
                       Boş Sayfa
                    </span>
                </a>
            </li>
            <li class="m-menu__item" aria-haspopup="true" id="sidebar">
                <a href="<?php echo e(url('dashboard')); ?>" class="m-menu__link">
                    <i class="m-menu__link-icon flaticon-dashboard"></i>
                    <span class="m-menu__link-text">
                       Dashboard
                    </span>
                </a>
            </li>
            <li class="m-menu__item" aria-haspopup="true" id="sidebar">
                <a href="<?php echo e(url('personel1')); ?>" class="m-menu__link">
                    <i class="m-menu__link-icon flaticon-users"></i>
                    <span class="m-menu__link-text">
                       Personel
                    </span>
                </a>
            </li>
            <li class="m-menu__item" aria-haspopup="true" id="sidebar">
                <a href="<?php echo e(url('cari')); ?>" class="m-menu__link">
                    <i class="m-menu__link-icon flaticon-network"></i>
                    <span class="m-menu__link-text">
                       Cari Sorgulama
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->