<!-- BEGIN: Topbar -->
<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
    <div class="m-stack__item m-topbar__nav-wrapper">
        <?php if(auth()->guard()->guest()): ?>
            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
        <?php else: ?>
        <ul class="m-topbar__nav m-nav m-nav--inline">

           <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                <a href="#" class="m-nav__link m-dropdown__toggle">
                    <span class="m-topbar__userpic">
                        <img src="<?php echo e(url('assets/app/media/img/users/user4.jpg')); ?>" class="img-circle m--marginless m--img-centered" alt=""/>
                    </span>
                    <span class="m-topbar__username m--hide">
                        Nick
                    </span>
                </a>
                <div class="m-dropdown__wrapper">
                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                    <div class="m-dropdown__inner">
                        <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                            <div class="m-card-user m-card-user--skin-dark">
                                <div class="m-card-user__pic">
                                    <img src="<?php echo e(url('assets/app/media/img/users/user4.jpg')); ?>" class="img-rounded img-circle" alt=""/>
                                </div>
                                <div class="m-card-user__details">
                                    <span class="m-card-user__name m--font-weight-500">
                                        <?php echo e(Auth::user()->name); ?>

                                    </span>
                                    <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                       <?php echo e(\Illuminate\Support\Facades\Request::ip()); ?>

                                    </a>

                                    <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                     <?php echo e(Auth::user()->email); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                                <ul class="m-nav m-nav--skin-light">
                                    <li class="m-nav__section m--hide">
                                        <span class="m-nav__section-text">
                                            Section
                                        </span>
                                    </li>


                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                    <li class="m-nav__item">
                                        <a href="<?php echo e(url('/logout')); ?>" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder"
                                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            Çıkış
                                        </a>
                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" >
                                            <?php echo e(csrf_field()); ?>

                                            <input type="submit" value="logout" style="display: none;">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<!-- END: Topbar -->