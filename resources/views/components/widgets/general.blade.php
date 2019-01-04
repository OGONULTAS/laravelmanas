<!DOCTYPE html><!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 5.0.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            Metronic | General Widgets
        </title>
        <meta name="description" content="General widget examples">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script> -->
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <link href="../../assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="../../assets/demo/default/media/img/logo/favicon.ico" />
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- BEGIN: Header -->
            <header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
                <div class="m-container m-container--fluid m-container--full-height">
                    <div class="m-stack m-stack--ver m-stack--desktop">
                        <!-- BEGIN: Brand -->
                        <div class="m-stack__item m-brand  m-brand--skin-dark ">
                            <div class="m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                    <a href="../../index.html" class="m-brand__logo-wrapper">
                                        <img alt="" src="../../assets/demo/default/media/img/logo/logo_default_dark.png"/>
                                    </a>
                                </div>
                                <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                    <!-- BEGIN: Left Aside Minimize Toggle -->
                                    <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block
                     ">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                                    <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                    <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                                    <!-- BEGIN: Responsive Header Menu Toggler -->
                                    <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                                    <!-- BEGIN: Topbar Toggler -->
                                    <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                        <i class="flaticon-more"></i>
                                    </a>
                                    <!-- BEGIN: Topbar Toggler -->
                                </div>
                            </div>
                        </div>
                        <!-- END: Brand -->
                        <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                            <!-- BEGIN: Horizontal Menu -->
                            <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
                                <i class="la la-close"></i>
                            </button>
                            <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
                                <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                        <a  href="#" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-add"></i>
                                            <span class="m-menu__link-text">
                                                Actions
                                            </span>
                                            <i class="m-menu__hor-arrow la la-angle-down"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                            <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item "  aria-haspopup="true">
                                                    <a  href="../../header/actions.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-file"></i>
                                                        <span class="m-menu__link-text">
                                                            Create New Post
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="../../header/actions.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-diagram"></i>
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">
                                                                    Generate Reports
                                                                </span>
                                                                <span class="m-menu__link-badge">
                                                                    <span class="m-badge m-badge--success">
                                                                        2
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
                                                    <a  href="#" class="m-menu__link m-menu__toggle">
                                                        <i class="m-menu__link-icon flaticon-business"></i>
                                                        <span class="m-menu__link-text">
                                                            Manage Orders
                                                        </span>
                                                        <i class="m-menu__hor-arrow la la-angle-right"></i>
                                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                    </a>
                                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                                        <span class="m-menu__arrow "></span>
                                                        <ul class="m-menu__subnav">
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Latest Orders
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Pending Orders
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Processed Orders
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Delivery Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Payments
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Customers
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
                                                    <a  href="#" class="m-menu__link m-menu__toggle">
                                                        <i class="m-menu__link-icon flaticon-chat-1"></i>
                                                        <span class="m-menu__link-text">
                                                            Customer Feedbacks
                                                        </span>
                                                        <i class="m-menu__hor-arrow la la-angle-right"></i>
                                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                    </a>
                                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                                        <span class="m-menu__arrow "></span>
                                                        <ul class="m-menu__subnav">
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Customer Feedbacks
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Supplier Feedbacks
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Reviewed Feedbacks
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Resolved Feedbacks
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Feedback Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="../../header/actions.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-users"></i>
                                                        <span class="m-menu__link-text">
                                                            Register Member
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                        <a  href="#" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-line-graph"></i>
                                            <span class="m-menu__link-text">
                                                Reports
                                            </span>
                                            <i class="m-menu__hor-arrow la la-angle-down"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:1000px">
                                            <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                            <div class="m-menu__subnav">
                                                <ul class="m-menu__content">
                                                    <li class="m-menu__item">
                                                        <h3 class="m-menu__heading m-menu__toggle">
                                                            <span class="m-menu__link-text">
                                                                Finance Reports
                                                            </span>
                                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                        </h3>
                                                        <ul class="m-menu__inner">
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-map"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Annual Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-user"></i>
                                                                    <span class="m-menu__link-text">
                                                                        HR Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                                    <span class="m-menu__link-text">
                                                                        IPO Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-graphic-1"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Finance Margins
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-graphic-2"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Revenue Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="m-menu__item">
                                                        <h3 class="m-menu__heading m-menu__toggle">
                                                            <span class="m-menu__link-text">
                                                                Project Reports
                                                            </span>
                                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                        </h3>
                                                        <ul class="m-menu__inner">
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Coca Cola CRM
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Delta Airlines Booking Site
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Malibu Accounting
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Vineseed Website Rewamp
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Zircon Mobile App
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Mercury CMS
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="m-menu__item">
                                                        <h3 class="m-menu__heading m-menu__toggle">
                                                            <span class="m-menu__link-text">
                                                                HR Reports
                                                            </span>
                                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                        </h3>
                                                        <ul class="m-menu__inner">
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Staff Directory
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Client Directory
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Salary Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Staff Payslips
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Corporate Expenses
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Project Expenses
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="m-menu__item">
                                                        <h3 class="m-menu__heading m-menu__toggle">
                                                            <span class="m-menu__link-text">
                                                                Reporting Apps
                                                            </span>
                                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                        </h3>
                                                        <ul class="m-menu__inner">
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Report Adjusments
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Sources & Mediums
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Reporting Settings
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Conversions
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Report Flows
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Audit & Logs
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                        <a  href="#" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-paper-plane"></i>
                                            <span class="m-menu__link-title">
                                                <span class="m-menu__link-wrap">
                                                    <span class="m-menu__link-text">
                                                        Apps
                                                    </span>
                                                    <span class="m-menu__link-badge">
                                                        <span class="m-badge m-badge--brand m-badge--wide">
                                                            new
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                            <i class="m-menu__hor-arrow la la-angle-down"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                            <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="../../header/actions.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-business"></i>
                                                        <span class="m-menu__link-text">
                                                            eCommerce
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
                                                    <a  href="../../crud/datatable_v1.html" class="m-menu__link m-menu__toggle">
                                                        <i class="m-menu__link-icon flaticon-computer"></i>
                                                        <span class="m-menu__link-text">
                                                            Audience
                                                        </span>
                                                        <i class="m-menu__hor-arrow la la-angle-right"></i>
                                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                    </a>
                                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                                        <span class="m-menu__arrow "></span>
                                                        <ul class="m-menu__subnav">
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-users"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Active Users
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-interface-1"></i>
                                                                    <span class="m-menu__link-text">
                                                                        User Explorer
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-lifebuoy"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Users Flows
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-graphic-1"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Market Segments
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-graphic"></i>
                                                                    <span class="m-menu__link-text">
                                                                        User Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="../../header/actions.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-map"></i>
                                                        <span class="m-menu__link-text">
                                                            Marketing
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="../../header/actions.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-graphic-2"></i>
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">
                                                                    Campaigns
                                                                </span>
                                                                <span class="m-menu__link-badge">
                                                                    <span class="m-badge m-badge--success">
                                                                        3
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
                                                    <a  href="#" class="m-menu__link m-menu__toggle">
                                                        <i class="m-menu__link-icon flaticon-infinity"></i>
                                                        <span class="m-menu__link-text">
                                                            Cloud Manager
                                                        </span>
                                                        <i class="m-menu__hor-arrow la la-angle-right"></i>
                                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                    </a>
                                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                                        <span class="m-menu__arrow "></span>
                                                        <ul class="m-menu__subnav">
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-add"></i>
                                                                    <span class="m-menu__link-title">
                                                                        <span class="m-menu__link-wrap">
                                                                            <span class="m-menu__link-text">
                                                                                File Upload
                                                                            </span>
                                                                            <span class="m-menu__link-badge">
                                                                                <span class="m-badge m-badge--danger">
                                                                                    3
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-signs-1"></i>
                                                                    <span class="m-menu__link-text">
                                                                        File Attributes
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-folder"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Folders
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-cogwheel-2"></i>
                                                                    <span class="m-menu__link-text">
                                                                        System Settings
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- END: Horizontal Menu -->
                            <!-- BEGIN: Topbar -->
                            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-topbar__nav-wrapper">
                                    <ul class="m-topbar__nav m-nav m-nav--inline">
                                        <li class="
    m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light    m-list-search m-list-search--skin-light"
    data-dropdown-toggle="click" data-dropdown-persistent="true" id="m_quicksearch" data-search-type="dropdown">
                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                <span class="m-nav__link-icon">
                                                    <i class="flaticon-search-1"></i>
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                                <div class="m-dropdown__inner ">
                                                    <div class="m-dropdown__header">
                                                        <form  class="m-list-search__form">
                                                            <div class="m-list-search__form-wrapper">
                                                                <span class="m-list-search__form-input-wrapper">
                                                                    <input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
                                                                </span>
                                                                <span class="m-list-search__form-icon-close" id="m_quicksearch_close">
                                                                    <i class="la la-remove"></i>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-max-height="300" data-mobile-max-height="200">
                                                            <div class="m-dropdown__content"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center  m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
                                            <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                                <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                                <span class="m-nav__link-icon">
                                                    <i class="flaticon-music-2"></i>
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center" style="background: url(../../assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                                                        <span class="m-dropdown__header-title">
                                                            9 New
                                                        </span>
                                                        <span class="m-dropdown__header-subtitle">
                                                            User Notifications
                                                        </span>
                                                    </div>
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                                                <li class="nav-item m-tabs__item">
                                                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
                                                                        Alerts
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item m-tabs__item">
                                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">
                                                                        Events
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item m-tabs__item">
                                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">
                                                                        Logs
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                                                    <div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                                        <div class="m-list-timeline m-list-timeline--skin-light">
                                                                            <div class="m-list-timeline__items">
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        12 new users registered
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        Just now
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        System shutdown
                                                                                        <span class="m-badge m-badge--success m-badge--wide">
                                                                                            pending
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        14 mins
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        New invoice received
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        20 mins
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        DB overloaded 80%
                                                                                        <span class="m-badge m-badge--info m-badge--wide">
                                                                                            settled
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        1 hr
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        System error -
                                                                                        <a href="#" class="m-link">
                                                                                            Check
                                                                                        </a>
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        2 hrs
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        Production server down
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        3 hrs
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        Production server up
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        5 hrs
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span href="" class="m-list-timeline__text">
                                                                                        New order received
                                                                                        <span class="m-badge m-badge--danger m-badge--wide">
                                                                                            urgent
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        7 hrs
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                                                    <div class="m-scrollable" m-scrollabledata-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                                        <div class="m-list-timeline m-list-timeline--skin-light">
                                                                            <div class="m-list-timeline__items">
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                    <a href="" class="m-list-timeline__text">
                                                                                        New order received
                                                                                    </a>
                                                                                    <span class="m-list-timeline__time">
                                                                                        Just now
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                                    <a href="" class="m-list-timeline__text">
                                                                                        New invoice received
                                                                                    </a>
                                                                                    <span class="m-list-timeline__time">
                                                                                        20 mins
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                    <a href="" class="m-list-timeline__text">
                                                                                        Production server up
                                                                                    </a>
                                                                                    <span class="m-list-timeline__time">
                                                                                        5 hrs
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                    <a href="" class="m-list-timeline__text">
                                                                                        New order received
                                                                                    </a>
                                                                                    <span class="m-list-timeline__time">
                                                                                        7 hrs
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                    <a href="" class="m-list-timeline__text">
                                                                                        System shutdown
                                                                                    </a>
                                                                                    <span class="m-list-timeline__time">
                                                                                        11 mins
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                    <a href="" class="m-list-timeline__text">
                                                                                        Production server down
                                                                                    </a>
                                                                                    <span class="m-list-timeline__time">
                                                                                        3 hrs
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                                    <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                                        <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                            <span class="">
                                                                                All caught up!
                                                                                <br>
                                                                                No new logs.
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  data-dropdown-toggle="click">
                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                                <span class="m-nav__link-icon">
                                                    <i class="flaticon-share"></i>
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center" style="background: url(../../assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                                                        <span class="m-dropdown__header-title">
                                                            Quick Actions
                                                        </span>
                                                        <span class="m-dropdown__header-subtitle">
                                                            Shortcuts
                                                        </span>
                                                    </div>
                                                    <div class="m-dropdown__body m-dropdown__body--paddingless">
                                                        <div class="m-dropdown__content">
                                                            <div class="m-scrollable" data-scrollable="false" data-max-height="380" data-mobile-max-height="200">
                                                                <div class="m-nav-grid m-nav-grid--skin-light">
                                                                    <div class="m-nav-grid__row">
                                                                        <a href="#" class="m-nav-grid__item">
                                                                            <i class="m-nav-grid__icon flaticon-file"></i>
                                                                            <span class="m-nav-grid__text">
                                                                                Generate Report
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="m-nav-grid__item">
                                                                            <i class="m-nav-grid__icon flaticon-time"></i>
                                                                            <span class="m-nav-grid__text">
                                                                                Add New Event
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="m-nav-grid__row">
                                                                        <a href="#" class="m-nav-grid__item">
                                                                            <i class="m-nav-grid__icon flaticon-folder"></i>
                                                                            <span class="m-nav-grid__text">
                                                                                Create New Task
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="m-nav-grid__item">
                                                                            <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                                                            <span class="m-nav-grid__text">
                                                                                Completed Tasks
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                <span class="m-topbar__userpic">
                                                    <img src="../../assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                                </span>
                                                <span class="m-topbar__username m--hide">
                                                    Nick
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center" style="background: url(../../assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                        <div class="m-card-user m-card-user--skin-dark">
                                                            <div class="m-card-user__pic">
                                                                <img src="../../assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
                                                            </div>
                                                            <div class="m-card-user__details">
                                                                <span class="m-card-user__name m--font-weight-500">
                                                                    Mark Andre
                                                                </span>
                                                                <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                                    mark.andre@gmail.com
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
                                                                <li class="m-nav__item">
                                                                    <a href="../../header/profile.html" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                        <span class="m-nav__link-title">
                                                                            <span class="m-nav__link-wrap">
                                                                                <span class="m-nav__link-text">
                                                                                    My Profile
                                                                                </span>
                                                                                <span class="m-nav__link-badge">
                                                                                    <span class="m-badge m-badge--success">
                                                                                        2
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="../../header/profile.html" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Activity
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="../../header/profile.html" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Messages
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__item">
                                                                    <a href="../../header/profile.html" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">
                                                                            FAQ
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="../../header/profile.html" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Support
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__item">
                                                                    <a href="../../snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                        Logout
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li id="m_quick_sidebar_toggle" class="m-nav__item">
                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                <span class="m-nav__link-icon">
                                                    <i class="flaticon-grid-menu"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END: Topbar -->
                        </div>
                    </div>
                </div>
            </header>
            <!-- END: Header -->
            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                <!-- BEGIN: Left Aside -->
                <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                    <i class="la la-close"></i>
                </button>
                <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
                    <!-- BEGIN: Aside Menu -->
                    <div
        id="m_ver_menu"
        class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
        data-menu-vertical="true"
         data-menu-scrollable="false" data-menu-dropdown-timeout="500"
        >
                        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                            <li class="m-menu__item " aria-haspopup="true" >
                                <a  href="../../index.html" class="m-menu__link ">
                                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Dashboard
                                            </span>
                                            <span class="m-menu__link-badge">
                                                <span class="m-badge m-badge--danger">
                                                    2
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-menu__section">
                                <h4 class="m-menu__section-text">
                                    Components
                                </h4>
                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-layers"></i>
                                    <span class="m-menu__link-text">
                                        Base
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <a  href="#" class="m-menu__link ">
                                                <span class="m-menu__link-text">
                                                    Base
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/state.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    State Colors
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/typography.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Typography
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/stack.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Stack
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/tables.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tables
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/progress.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Progress
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/modal.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Modal
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/alerts.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Alerts
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/popover.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Popover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/tooltip.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tooltip
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/blockui.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Block UI
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/spinners.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Spinners
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/scrollable.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Scrollable
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/dropdown.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Dropdown
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tabs
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/base/tabs/bootstrap.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Bootstrap Tabs
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/base/tabs/line.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Line Tabs
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/navs.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Navs
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/lists.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Lists
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/treeview.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tree View
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/bootstrap-notify.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Bootstrap Notify
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/base/toastr.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Toastr
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-share"></i>
                                    <span class="m-menu__link-text">
                                        Icons
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/icons/flaticon.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Flaticon
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/icons/fontawesome.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Fontawesome
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/icons/lineawesome.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Lineawesome
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/icons/socicons.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Socicons
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-multimedia-1"></i>
                                    <span class="m-menu__link-text">
                                        Buttons
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <a  href="#" class="m-menu__link ">
                                                <span class="m-menu__link-text">
                                                    Buttons
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Button Base
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/buttons/base/default.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Default Style
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/buttons/base/square.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Square Style
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/buttons/base/pill.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Pill Style
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/buttons/base/air.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Air Style
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/buttons/group.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Button Group
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/buttons/dropdown.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Button Dropdown
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Button Icon
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/buttons/icon/lineawesome.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Lineawesome Icons
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/buttons/icon/fontawesome.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Fontawesome Icons
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/buttons/icon/flaticon.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Flaticon Icons
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-interface-7"></i>
                                    <span class="m-menu__link-text">
                                        Forms
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <a  href="#" class="m-menu__link ">
                                                <span class="m-menu__link-text">
                                                    Forms
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Form Controls
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/controls/base.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Base Inputs
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/controls/checkbox-radio.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Checkbox & Radio
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/controls/switch.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Switch
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/controls/input-group.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Input Groups
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Form Widgets
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/bootstrap-datepicker.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Datepicker
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/bootstrap-datetimepicker.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Datetimepicker
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/bootstrap-timepicker.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Timepicker
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/bootstrap-daterangepicker.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Daterangepicker
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/bootstrap-touchspin.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Touchspin
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/bootstrap-maxlength.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Maxlength
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/bootstrap-switch.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Switch
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/bootstrap-multipleselectsplitter.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Multiple Select Splitter
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/bootstrap-select.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Bootstrap Select
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/select2.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Select2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/typeahead.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Typeahead
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/nouislider.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                noUiSlider
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/ion-range-slider.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Ion Range Slider
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/input-mask.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Input Masks
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/summernote.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Summernote WYSIWYG
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/bootstrap-markdown.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Markdown Editor
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/autosize.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Autosize
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/clipboard.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Clipboard
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/dropzone.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Dropzone
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/widgets/recaptcha.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Google reCaptcha
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Form Layouts
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/layouts/default-forms.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Default Forms
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/layouts/multi-column-forms.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Multi Column Forms
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/layouts/action-bars.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Action Bars
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Form Validation
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/validation/states.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Validation States
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/validation/form-controls.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Form Controls
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/forms/validation/form-widgets.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Form Widgets
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-tabs"></i>
                                    <span class="m-menu__link-text">
                                        Datatables
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <a  href="#" class="m-menu__link ">
                                                <span class="m-menu__link-text">
                                                    Datatables
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Base
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/base/data-local.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Local Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/base/data-json.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                JSON Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/base/data-ajax.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Ajax Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/base/html-table.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                HTML Table
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/base/record-selection.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Record Selection
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/base/local-sort.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Local Sort
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/base/column-rendering.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Column Rendering
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/base/column-width.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Column Width
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/base/responsive-columns.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Responsive Columns
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/base/translation.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Translation
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Scrolling
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/scrolling/vertical.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Vertical Scrolling
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/scrolling/horizontal.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Horizontal Scrolling
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/scrolling/both.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Both Scrolling
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Locked Columns
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/locked/left.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Left Locked Columns
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/locked/right.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Right Locked Columns
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/locked/both.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Both Locked Columns
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Child Datatables
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/child/data-local.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Local Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/child/data-ajax.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Remote Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    API
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/api/methods.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                API Methods
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/datatables/api/events.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Events
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-interface-1"></i>
                                    <span class="m-menu__link-text">
                                        Portlets
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <a  href="#" class="m-menu__link ">
                                                <span class="m-menu__link-text">
                                                    Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/portlets/base.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Base Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/portlets/advanced.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Advanced Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/portlets/creative.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Creative Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/portlets/tabbed.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tabbed Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/portlets/draggable.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Draggable Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/portlets/tools.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Portlet Tools
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--open m-menu__item--expanded" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-network"></i>
                                    <span class="m-menu__link-text">
                                        Widgets
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <a  href="#" class="m-menu__link ">
                                                <span class="m-menu__link-text">
                                                    Widgets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                                            <a  href="../../components/widgets/general.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    General Widgets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/widgets/chart.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Chart Widgets
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-calendar"></i>
                                    <span class="m-menu__link-text">
                                        Calendar
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <a  href="#" class="m-menu__link ">
                                                <span class="m-menu__link-text">
                                                    Calendar
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/calendar/basic.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Basic Calendar
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/calendar/list-view.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    List Views
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/calendar/google.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Google Calendar
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/calendar/external-events.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    External Events
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/calendar/background-events.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Background Events
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-diagram"></i>
                                    <span class="m-menu__link-text">
                                        Charts
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <a  href="#" class="m-menu__link ">
                                                <span class="m-menu__link-text">
                                                    Charts
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    amCharts
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/charts/amcharts/charts.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                amCharts Charts
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/charts/amcharts/stock-charts.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                amCharts Stock Charts
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../components/charts/amcharts/maps.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                amCharts Maps
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/charts/flotcharts.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Flot Charts
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/charts/google-charts.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Google Charts
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/charts/morris-charts.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Morris Charts
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-placeholder-1"></i>
                                    <span class="m-menu__link-text">
                                        Maps
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <a  href="#" class="m-menu__link ">
                                                <span class="m-menu__link-text">
                                                    Maps
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/maps/google-maps.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Google Maps
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/maps/jqvmap.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    JQVMap
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-signs-2"></i>
                                    <span class="m-menu__link-text">
                                        Utils
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <a  href="#" class="m-menu__link ">
                                                <span class="m-menu__link-text">
                                                    Utils
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/utils/session-timeout.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Session Timeout
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../components/utils/idle-timer.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Idle Timer
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__section">
                                <h4 class="m-menu__section-text">
                                    Snippets
                                </h4>
                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-suitcase"></i>
                                    <span class="m-menu__link-text">
                                        Custom Pages
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <a  href="#" class="m-menu__link ">
                                                <span class="m-menu__link-text">
                                                    Custom Pages
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    User Pages
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../snippets/pages/user/login-1.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 1
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../snippets/pages/user/login-2.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../snippets/pages/user/login-3.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 3
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../snippets/pages/user/login-4.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 4
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../snippets/pages/user/login-5.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 5
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Error Pages
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../snippets/pages/errors/error-1.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 1
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../snippets/pages/errors/error-2.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../snippets/pages/errors/error-3.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 3
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../snippets/pages/errors/error-4.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 4
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../snippets/pages/errors/error-5.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 5
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../snippets/pages/errors/error-6.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 6
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END: Aside Menu -->
                </div>
                <!-- END: Left Aside -->
                <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    <!-- BEGIN: Subheader -->
                    <div class="m-subheader ">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title m-subheader__title--separator">
                                    General Widgets
                                </h3>
                                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                    <li class="m-nav__item m-nav__item--home">
                                        <a href="#" class="m-nav__link m-nav__link--icon">
                                            <i class="m-nav__link-icon la la-home"></i>
                                        </a>
                                    </li>
                                    <li class="m-nav__separator">
                                        -
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                Widgets
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__separator">
                                        -
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                General Widgets
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-plus m--hide"></i>
                                        <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__section m-nav__section--first m--hide">
                                                            <span class="m-nav__section-text">
                                                                Quick Actions
                                                            </span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">
                                                                    Activity
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">
                                                                    Messages
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">
                                                                    FAQ
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">
                                                                    Support
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                        <li class="m-nav__item">
                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                Submit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Subheader -->
                    <div class="m-content">
                        <!--begin:: Widgets/Stats-->
                        <div class="m-portlet ">
                            <div class="m-portlet__body  m-portlet__body--no-padding">
                                <div class="row m-row--no-padding m-row--col-separator-xl">
                                    <div class="col-md-12 col-lg-6 col-xl-3">
                                        <!--begin::Total Profit-->
                                        <div class="m-widget24">
                                            <div class="m-widget24__item">
                                                <h4 class="m-widget24__title">
                                                    Total Frofit
                                                </h4>
                                                <br>
                                                <span class="m-widget24__desc">
                                                    All Customs Value
                                                </span>
                                                <span class="m-widget24__stats m--font-brand">
                                                    $17,800
                                                </span>
                                                <div class="m--space-10"></div>
                                                <div class="progress m-progress--sm">
                                                    <div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="m-widget24__change">
                                                    Change
                                                </span>
                                                <span class="m-widget24__number">
                                                    78%
                                                </span>
                                            </div>
                                        </div>
                                        <!--end::Total Profit-->
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-3">
                                        <!--begin::New Feedbacks-->
                                        <div class="m-widget24">
                                            <div class="m-widget24__item">
                                                <h4 class="m-widget24__title">
                                                    New Feedbacks
                                                </h4>
                                                <br>
                                                <span class="m-widget24__desc">
                                                    Customer Review
                                                </span>
                                                <span class="m-widget24__stats m--font-info">
                                                    1349
                                                </span>
                                                <div class="m--space-10"></div>
                                                <div class="progress m-progress--sm">
                                                    <div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="m-widget24__change">
                                                    Change
                                                </span>
                                                <span class="m-widget24__number">
                                                    84%
                                                </span>
                                            </div>
                                        </div>
                                        <!--end::New Feedbacks-->
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-3">
                                        <!--begin::New Orders-->
                                        <div class="m-widget24">
                                            <div class="m-widget24__item">
                                                <h4 class="m-widget24__title">
                                                    New Orders
                                                </h4>
                                                <br>
                                                <span class="m-widget24__desc">
                                                    Fresh Order Amount
                                                </span>
                                                <span class="m-widget24__stats m--font-danger">
                                                    567
                                                </span>
                                                <div class="m--space-10"></div>
                                                <div class="progress m-progress--sm">
                                                    <div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="m-widget24__change">
                                                    Change
                                                </span>
                                                <span class="m-widget24__number">
                                                    69%
                                                </span>
                                            </div>
                                        </div>
                                        <!--end::New Orders-->
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-3">
                                        <!--begin::New Users-->
                                        <div class="m-widget24">
                                            <div class="m-widget24__item">
                                                <h4 class="m-widget24__title">
                                                    New Users
                                                </h4>
                                                <br>
                                                <span class="m-widget24__desc">
                                                    Joined New User
                                                </span>
                                                <span class="m-widget24__stats m--font-success">
                                                    276
                                                </span>
                                                <div class="m--space-10"></div>
                                                <div class="progress m-progress--sm">
                                                    <div class="progress-bar m--bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="m-widget24__change">
                                                    Change
                                                </span>
                                                <span class="m-widget24__number">
                                                    90%
                                                </span>
                                            </div>
                                        </div>
                                        <!--end::New Users-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Stats-->
                        <!--Begin::Main Portlet-->
                        <div class="m-portlet">
                            <div class="m-portlet__body m-portlet__body--no-padding">
                                <div class="row m-row--no-padding m-row--col-separator-xl">
                                    <div class="col-md-12 col-lg-12 col-xl-4">
                                        <!--begin:: Widgets/Stats2-1 -->
                                        <div class="m-widget1">
                                            <div class="m-widget1__item">
                                                <div class="row m-row--no-padding align-items-center">
                                                    <div class="col">
                                                        <h3 class="m-widget1__title">
                                                            Member Profit
                                                        </h3>
                                                        <span class="m-widget1__desc">
                                                            Awerage Weekly Profit
                                                        </span>
                                                    </div>
                                                    <div class="col m--align-right">
                                                        <span class="m-widget1__number m--font-brand">
                                                            +$17,800
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget1__item">
                                                <div class="row m-row--no-padding align-items-center">
                                                    <div class="col">
                                                        <h3 class="m-widget1__title">
                                                            Orders
                                                        </h3>
                                                        <span class="m-widget1__desc">
                                                            Weekly Customer Orders
                                                        </span>
                                                    </div>
                                                    <div class="col m--align-right">
                                                        <span class="m-widget1__number m--font-danger">
                                                            +1,800
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget1__item">
                                                <div class="row m-row--no-padding align-items-center">
                                                    <div class="col">
                                                        <h3 class="m-widget1__title">
                                                            Issue Reports
                                                        </h3>
                                                        <span class="m-widget1__desc">
                                                            System bugs and issues
                                                        </span>
                                                    </div>
                                                    <div class="col m--align-right">
                                                        <span class="m-widget1__number m--font-success">
                                                            -27,49%
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end:: Widgets/Stats2-1 -->
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-4">
                                        <!--begin:: Widgets/Stats2-2 -->
                                        <div class="m-widget1">
                                            <div class="m-widget1__item">
                                                <div class="row m-row--no-padding align-items-center">
                                                    <div class="col">
                                                        <h3 class="m-widget1__title">
                                                            IPO Margin
                                                        </h3>
                                                        <span class="m-widget1__desc">
                                                            Awerage IPO Margin
                                                        </span>
                                                    </div>
                                                    <div class="col m--align-right">
                                                        <span class="m-widget1__number m--font-accent">
                                                            +24%
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget1__item">
                                                <div class="row m-row--no-padding align-items-center">
                                                    <div class="col">
                                                        <h3 class="m-widget1__title">
                                                            Payments
                                                        </h3>
                                                        <span class="m-widget1__desc">
                                                            Yearly Expenses
                                                        </span>
                                                    </div>
                                                    <div class="col m--align-right">
                                                        <span class="m-widget1__number m--font-info">
                                                            +$560,800
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget1__item">
                                                <div class="row m-row--no-padding align-items-center">
                                                    <div class="col">
                                                        <h3 class="m-widget1__title">
                                                            Logistics
                                                        </h3>
                                                        <span class="m-widget1__desc">
                                                            Overall Regional Logistics
                                                        </span>
                                                    </div>
                                                    <div class="col m--align-right">
                                                        <span class="m-widget1__number m--font-warning">
                                                            -10%
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin:: Widgets/Stats2-2 -->
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-4">
                                        <!--begin:: Widgets/Stats2-3 -->
                                        <div class="m-widget1">
                                            <div class="m-widget1__item">
                                                <div class="row m-row--no-padding align-items-center">
                                                    <div class="col">
                                                        <h3 class="m-widget1__title">
                                                            Orders
                                                        </h3>
                                                        <span class="m-widget1__desc">
                                                            Awerage Weekly Orders
                                                        </span>
                                                    </div>
                                                    <div class="col m--align-right">
                                                        <span class="m-widget1__number m--font-success">
                                                            +15%
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget1__item">
                                                <div class="row m-row--no-padding align-items-center">
                                                    <div class="col">
                                                        <h3 class="m-widget1__title">
                                                            Transactions
                                                        </h3>
                                                        <span class="m-widget1__desc">
                                                            Daily Transaction Increase
                                                        </span>
                                                    </div>
                                                    <div class="col m--align-right">
                                                        <span class="m-widget1__number m--font-danger">
                                                            +80%
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget1__item">
                                                <div class="row m-row--no-padding align-items-center">
                                                    <div class="col">
                                                        <h3 class="m-widget1__title">
                                                            Revenue
                                                        </h3>
                                                        <span class="m-widget1__desc">
                                                            Overall Revenue Increase
                                                        </span>
                                                    </div>
                                                    <div class="col m--align-right">
                                                        <span class="m-widget1__number m--font-primary">
                                                            +60%
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin:: Widgets/Stats2-3 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::Main Portlet-->
                        <!--Begin::Main Portlet-->
                        <div class="row">
                            <div class="col-xl-6">
                                <!--begin:: Widgets/Tasks -->
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Tasks
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
                                                        Today
                                                    </a>
                                                </li>
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content1" role="tab">
                                                        Week
                                                    </a>
                                                </li>
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab3_content1" role="tab">
                                                        Month
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="m_widget2_tab1_content">
                                                <div class="m-widget2">
                                                    <div class="m-widget2__item m-widget2__item--primary">
                                                        <div class="m-widget2__checkbox">
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                        <div class="m-widget2__desc">
                                                            <span class="m-widget2__text">
                                                                Make Metronic Great  Again.Lorem Ipsum Amet
                                                            </span>
                                                            <br>
                                                            <span class="m-widget2__user-name">
                                                                <a href="#" class="m-widget2__link">
                                                                    By Bob
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <div class="m-widget2__actions">
                                                            <div class="m-widget2__actions-nav">
                                                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                                                    <a href="#" class="m-dropdown__toggle">
                                                                        <i class="la la-ellipsis-h"></i>
                                                                    </a>
                                                                    <div class="m-dropdown__wrapper">
                                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                        <div class="m-dropdown__inner">
                                                                            <div class="m-dropdown__body">
                                                                                <div class="m-dropdown__content">
                                                                                    <ul class="m-nav">
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Activity
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Messages
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    FAQ
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Support
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget2__item m-widget2__item--warning">
                                                        <div class="m-widget2__checkbox">
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                        <div class="m-widget2__desc">
                                                            <span class="m-widget2__text">
                                                                Prepare Docs For Metting On Monday
                                                            </span>
                                                            <br>
                                                            <span class="m-widget2__user-name">
                                                                <a href="#" class="m-widget2__link">
                                                                    By Sean
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <div class="m-widget2__actions">
                                                            <div class="m-widget2__actions-nav">
                                                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                                                    <a href="#" class="m-dropdown__toggle">
                                                                        <i class="la la-ellipsis-h"></i>
                                                                    </a>
                                                                    <div class="m-dropdown__wrapper">
                                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                        <div class="m-dropdown__inner">
                                                                            <div class="m-dropdown__body">
                                                                                <div class="m-dropdown__content">
                                                                                    <ul class="m-nav">
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Activity
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Messages
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    FAQ
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Support
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget2__item m-widget2__item--brand">
                                                        <div class="m-widget2__checkbox">
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                        <div class="m-widget2__desc">
                                                            <span class="m-widget2__text">
                                                                Make Widgets Great Again.Estudiat Communy Elit
                                                            </span>
                                                            <br>
                                                            <span class="m-widget2__user-name">
                                                                <a href="#" class="m-widget2__link">
                                                                    By Aziko
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <div class="m-widget2__actions">
                                                            <div class="m-widget2__actions-nav">
                                                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                                                    <a href="#" class="m-dropdown__toggle">
                                                                        <i class="la la-ellipsis-h"></i>
                                                                    </a>
                                                                    <div class="m-dropdown__wrapper">
                                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                        <div class="m-dropdown__inner">
                                                                            <div class="m-dropdown__body">
                                                                                <div class="m-dropdown__content">
                                                                                    <ul class="m-nav">
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Activity
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Messages
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    FAQ
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Support
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget2__item m-widget2__item--success">
                                                        <div class="m-widget2__checkbox">
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                        <div class="m-widget2__desc">
                                                            <span class="m-widget2__text">
                                                                Make Metronic Great Again.Lorem Ipsum
                                                            </span>
                                                            <br>
                                                            <span class="m-widget2__user-name">
                                                                <a href="#" class="m-widget2__link">
                                                                    By James
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <div class="m-widget2__actions">
                                                            <div class="m-widget2__actions-nav">
                                                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                                                    <a href="#" class="m-dropdown__toggle">
                                                                        <i class="la la-ellipsis-h"></i>
                                                                    </a>
                                                                    <div class="m-dropdown__wrapper">
                                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                        <div class="m-dropdown__inner">
                                                                            <div class="m-dropdown__body">
                                                                                <div class="m-dropdown__content">
                                                                                    <ul class="m-nav">
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Activity
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Messages
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    FAQ
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Support
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget2__item m-widget2__item--danger">
                                                        <div class="m-widget2__checkbox">
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                        <div class="m-widget2__desc">
                                                            <span class="m-widget2__text">
                                                                Completa Financial Report For Emirates Airlines
                                                            </span>
                                                            <br>
                                                            <span class="m-widget2__user-name">
                                                                <a href="#" class="m-widget2__link">
                                                                    By Bob
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <div class="m-widget2__actions">
                                                            <div class="m-widget2__actions-nav">
                                                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                                                    <a href="#" class="m-dropdown__toggle">
                                                                        <i class="la la-ellipsis-h"></i>
                                                                    </a>
                                                                    <div class="m-dropdown__wrapper">
                                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                        <div class="m-dropdown__inner">
                                                                            <div class="m-dropdown__body">
                                                                                <div class="m-dropdown__content">
                                                                                    <ul class="m-nav">
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Activity
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Messages
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    FAQ
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Support
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget2__item m-widget2__item--info">
                                                        <div class="m-widget2__checkbox">
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                        <div class="m-widget2__desc">
                                                            <span class="m-widget2__text">
                                                                Completa Financial Report For Emirates Airlines
                                                            </span>
                                                            <br>
                                                            <span class="m-widget2__user-name">
                                                                <a href="#" class="m-widget2__link">
                                                                    By Sean
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <div class="m-widget2__actions">
                                                            <div class="m-widget2__actions-nav">
                                                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                                                    <a href="#" class="m-dropdown__toggle">
                                                                        <i class="la la-ellipsis-h"></i>
                                                                    </a>
                                                                    <div class="m-dropdown__wrapper">
                                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                        <div class="m-dropdown__inner">
                                                                            <div class="m-dropdown__body">
                                                                                <div class="m-dropdown__content">
                                                                                    <ul class="m-nav">
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Activity
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Messages
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    FAQ
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                                <span class="m-nav__link-text">
                                                                                                    Support
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="m_widget2_tab2_content"></div>
                                            <div class="tab-pane" id="m_widget2_tab3_content"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Tasks -->
                            </div>
                            <div class="col-xl-6">
                                <!--begin:: Widgets/Support Tickets -->
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Support Tickets
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                                    <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                                    </a>
                                                    <div class="m-dropdown__wrapper">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="m-nav">
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Activity
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Messages
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    FAQ
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Support
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="m-widget3">
                                            <div class="m-widget3__item">
                                                <div class="m-widget3__header">
                                                    <div class="m-widget3__user-img">
                                                        <img class="m-widget3__img" src="../../assets/app/media/img/users/user1.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget3__info">
                                                        <span class="m-widget3__username">
                                                            Melania Trump
                                                        </span>
                                                        <br>
                                                        <span class="m-widget3__time">
                                                            2 day ago
                                                        </span>
                                                    </div>
                                                    <span class="m-widget3__status m--font-info">
                                                        Pending
                                                    </span>
                                                </div>
                                                <div class="m-widget3__body">
                                                    <p class="m-widget3__text">
                                                        Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="m-widget3__item">
                                                <div class="m-widget3__header">
                                                    <div class="m-widget3__user-img">
                                                        <img class="m-widget3__img" src="../../assets/app/media/img/users/user4.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget3__info">
                                                        <span class="m-widget3__username">
                                                            Lebron King James
                                                        </span>
                                                        <br>
                                                        <span class="m-widget3__time">
                                                            1 day ago
                                                        </span>
                                                    </div>
                                                    <span class="m-widget3__status m--font-brand">
                                                        Open
                                                    </span>
                                                </div>
                                                <div class="m-widget3__body">
                                                    <p class="m-widget3__text">
                                                        Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="m-widget3__item">
                                                <div class="m-widget3__header">
                                                    <div class="m-widget3__user-img">
                                                        <img class="m-widget3__img" src="../../assets/app/media/img/users/user5.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget3__info">
                                                        <span class="m-widget3__username">
                                                            Deb Gibson
                                                        </span>
                                                        <br>
                                                        <span class="m-widget3__time">
                                                            3 weeks ago
                                                        </span>
                                                    </div>
                                                    <span class="m-widget3__status m--font-success">
                                                        Closed
                                                    </span>
                                                </div>
                                                <div class="m-widget3__body">
                                                    <p class="m-widget3__text">
                                                        Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Support Tickets -->
                            </div>
                        </div>
                        <!--End::Main Portlet-->
                        <!--Begin::Main Portlet-->
                        <div class="row">
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Download Files-->
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Download Files
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                                    <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                        Today
                                                    </a>
                                                    <div class="m-dropdown__wrapper">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="m-nav">
                                                                        <li class="m-nav__section m-nav__section--first">
                                                                            <span class="m-nav__section-text">
                                                                                Quick Actions
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Activity
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Messages
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    FAQ
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Support
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                        <li class="m-nav__item">
                                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                                Cancel
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <!--begin::m-widget4-->
                                        <div class="m-widget4">
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__img m-widget4__img--icon">
                                                    <img src="../../assets/app/media/img/files/doc.svg" alt="">
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__text">
                                                        Metronic Documentation
                                                    </span>
                                                </div>
                                                <div class="m-widget4__ext">
                                                    <a href="#" class="m-widget4__icon">
                                                        <i class="la la-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__img m-widget4__img--icon">
                                                    <img src="../../assets/app/media/img/files/jpg.svg" alt="">
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__text">
                                                        Make JPEG Great Again
                                                    </span>
                                                </div>
                                                <div class="m-widget4__ext">
                                                    <a href="#" class="m-widget4__icon">
                                                        <i class="la la-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__img m-widget4__img--icon">
                                                    <img src="../../assets/app/media/img/files/pdf.svg" alt="">
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__text">
                                                        Full Deeveloper Manual For 4.7
                                                    </span>
                                                </div>
                                                <div class="m-widget4__ext">
                                                    <a href="#" class="m-widget4__icon">
                                                        <i class="la la-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__img m-widget4__img--icon">
                                                    <img src="../../assets/app/media/img/files/javascript.svg" alt="">
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__text">
                                                        Make JS Great Again
                                                    </span>
                                                </div>
                                                <div class="m-widget4__ext">
                                                    <a href="#" class="m-widget4__icon">
                                                        <i class="la la-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__img m-widget4__img--icon">
                                                    <img src="../../assets/app/media/img/files/zip.svg" alt="">
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__text">
                                                        Download Ziped version OF 5.0
                                                    </span>
                                                </div>
                                                <div class="m-widget4__ext">
                                                    <a href="#" class="m-widget4__icon">
                                                        <i class="la la-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__img m-widget4__img--icon">
                                                    <img src="../../assets/app/media/img/files/pdf.svg" alt="">
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__text">
                                                        Finance Report 2016/2017
                                                    </span>
                                                </div>
                                                <div class="m-widget4__ext">
                                                    <a href="#" class="m-widget4__icon">
                                                        <i class="la la-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Widget 9-->
                                    </div>
                                </div>
                                <!--end:: Widgets/Download Files-->
                            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/New Users-->
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    New Users
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                                                        Today
                                                    </a>
                                                </li>
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                                                        Month
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="m_widget4_tab1_content">
                                                <!--begin::Widget 14-->
                                                <div class="m-widget4">
                                                    <!--begin::Widget 14 Item-->
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_4.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Anna Strong
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Visual Designer,Google Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#"  class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Widget 14 Item-->
                                                    <!--begin::Widget 14 Item-->
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_14.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Milano Esco
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Product Designer, Apple Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Widget 14 Item-->
                                                    <!--begin::Widget 14 Item-->
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_11.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Nick Bold
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Web Developer, Facebook Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Widget 14 Item-->
                                                    <!--begin::Widget 14 Item-->
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_1.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Wiltor Delton
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Project Manager, Amazon Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Widget 14 Item-->
                                                    <!--begin::Widget 14 Item-->
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_5.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Nick Stone
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Visual Designer, Github Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#"  class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Widget 14 Item-->
                                                </div>
                                                <!--end::Widget 14-->
                                            </div>
                                            <div class="tab-pane" id="m_widget4_tab2_content">
                                                <!--begin::Widget 14-->
                                                <div class="m-widget4">
                                                    <!--begin::Widget 14 Item-->
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_2.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Kristika Bold
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Product Designer,Apple Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#"  class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Widget 14 Item-->
                                                    <!--begin::Widget 14 Item-->
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_13.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Ron Silk
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Release Manager, Loop Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Widget 14 Item-->
                                                    <!--begin::Widget 14 Item-->
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_9.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Nick Bold
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Web Developer, Facebook Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Widget 14 Item-->
                                                    <!--begin::Widget 14 Item-->
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_2.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Wiltor Delton
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Project Manager, Amazon Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Widget 14 Item-->
                                                    <!--end::Widget 14 Item-->
                                                    <!--begin::Widget 14 Item-->
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_8.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Nick Bold
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Web Developer, Facebook Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Widget 14 Item-->
                                                </div>
                                                <!--end::Widget 14-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/New Users-->
                            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Last Updates-->
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Latest Updates
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                                    <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                        Today
                                                    </a>
                                                    <div class="m-dropdown__wrapper">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="m-nav">
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Activity
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Messages
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    FAQ
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Support
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <!--begin::widget 12-->
                                        <div class="m-widget4">
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__ext">
                                                    <span class="m-widget4__icon m--font-brand">
                                                        <i class="flaticon-interface-3"></i>
                                                    </span>
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__text">
                                                        Make Metronic Great Again
                                                    </span>
                                                </div>
                                                <div class="m-widget4__ext">
                                                    <span class="m-widget4__number m--font-info">
                                                        +500
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__ext">
                                                    <span class="m-widget4__icon m--font-brand">
                                                        <i class="flaticon-folder-4"></i>
                                                    </span>
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__text">
                                                        Green Maker Team
                                                    </span>
                                                </div>
                                                <div class="m-widget4__ext">
                                                    <span class="m-widget4__number m--font-info">
                                                        -64
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__ext">
                                                    <span class="m-widget4__icon m--font-brand">
                                                        <i class="flaticon-line-graph"></i>
                                                    </span>
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__text">
                                                        Make Apex Great Again
                                                    </span>
                                                </div>
                                                <div class="m-widget4__ext">
                                                    <span class="m-widget4__number m--font-info">
                                                        +1080
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__ext">
                                                    <span class="m-widget4__icon m--font-brand">
                                                        <i class="flaticon-diagram"></i>
                                                    </span>
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__text">
                                                        A Programming Language
                                                    </span>
                                                </div>
                                                <div class="m-widget4__ext">
                                                    <span class="m-widget4__number m--font-info">
                                                        +19
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget4__item m-widget4__item-border">
                                                <div class="m-widget4__ext">
                                                    <span class="m-widget4__icon m--font-brand">
                                                        <i class="flaticon-music"></i>
                                                    </span>
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__text">
                                                        Red Painted Truck
                                                    </span>
                                                </div>
                                                <div class="m-widget4__ext">
                                                    <span class="m-widget4__number m--font-info">
                                                        +134
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget4__item m-widget4__item-border">
                                                <div class="m-widget4__ext">
                                                    <span class="m-widget4__icon m--font-brand">
                                                        <i class="flaticon-user"></i>
                                                    </span>
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__text">
                                                        New Customer
                                                    </span>
                                                </div>
                                                <div class="m-widget4__ext">
                                                    <span class="m-widget4__number m--font-info">
                                                        +13%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Widget 12-->
                                    </div>
                                </div>
                                <!--end:: Widgets/Last Updates-->
                            </div>
                        </div>
                        <!--End::Main Portlet-->
                        <!--Begin::Main Portlet-->
                        <div class="row">
                            <div class="col-xl-8">
                                <!--begin:: Widgets/Best Sellers-->
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Best Sellers
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget5_tab1_content" role="tab">
                                                        Last Month
                                                    </a>
                                                </li>
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab2_content" role="tab">
                                                        last Year
                                                    </a>
                                                </li>
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab3_content" role="tab">
                                                        All time
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <!--begin::Content-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">
                                                <!--begin::m-widget5-->
                                                <div class="m-widget5">
                                                    <div class="m-widget5__item">
                                                        <div class="m-widget5__pic">
                                                            <img class="m-widget7__img" src="../../assets/app/media/img//products/product6.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget5__content">
                                                            <h4 class="m-widget5__title">
                                                                Great Logo Designn
                                                            </h4>
                                                            <span class="m-widget5__desc">
                                                                Make Metronic Great  Again.Lorem Ipsum Amet
                                                            </span>
                                                            <div class="m-widget5__info">
                                                                <span class="m-widget5__author">
                                                                    Author:
                                                                </span>
                                                                <span class="m-widget5__info-label">
                                                                    author:
                                                                </span>
                                                                <span class="m-widget5__info-author-name">
                                                                    Fly themes
                                                                </span>
                                                                <span class="m-widget5__info-label">
                                                                    Released:
                                                                </span>
                                                                <span class="m-widget5__info-date m--font-info">
                                                                    23.08.17
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget5__stats1">
                                                            <span class="m-widget5__number">
                                                                19,200
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__sales">
                                                                sales
                                                            </span>
                                                        </div>
                                                        <div class="m-widget5__stats2">
                                                            <span class="m-widget5__number">
                                                                1046
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__votes">
                                                                votes
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__item">
                                                        <div class="m-widget5__pic">
                                                            <img class="m-widget7__img" src="../../assets/app/media/img//products/product10.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget5__content">
                                                            <h4 class="m-widget5__title">
                                                                Branding Mockup
                                                            </h4>
                                                            <span class="m-widget5__desc">
                                                                Make Metronic Great  Again.Lorem Ipsum Amet
                                                            </span>
                                                            <div class="m-widget5__info">
                                                                <span class="m-widget5__author">
                                                                    Author:
                                                                </span>
                                                                <span class="m-widget5__info-author m--font-info">
                                                                    Fly themes
                                                                </span>
                                                                <span class="m-widget5__info-label">
                                                                    Released:
                                                                </span>
                                                                <span class="m-widget5__info-date m--font-info">
                                                                    23.08.17
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget5__stats1">
                                                            <span class="m-widget5__number">
                                                                24,583
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__sales">
                                                                sales
                                                            </span>
                                                        </div>
                                                        <div class="m-widget5__stats2">
                                                            <span class="m-widget5__number">
                                                                3809
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__votes">
                                                                votes
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__item">
                                                        <div class="m-widget5__pic">
                                                            <img class="m-widget7__img" src="../../assets/app/media/img//products/product11.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget5__content">
                                                            <h4 class="m-widget5__title">
                                                                Awesome Mobile App
                                                            </h4>
                                                            <span class="m-widget5__desc">
                                                                Make Metronic Great  Again.Lorem Ipsum Amet
                                                            </span>
                                                            <div class="m-widget5__info">
                                                                <span class="m-widget5__author">
                                                                    Author:
                                                                </span>
                                                                <span class="m-widget5__info-author m--font-info">
                                                                    Fly themes
                                                                </span>
                                                                <span class="m-widget5__info-label">
                                                                    Released:
                                                                </span>
                                                                <span class="m-widget5__info-date m--font-info">
                                                                    23.08.17
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget5__stats1">
                                                            <span class="m-widget5__number">
                                                                10,054
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__sales">
                                                                sales
                                                            </span>
                                                        </div>
                                                        <div class="m-widget5__stats2">
                                                            <span class="m-widget5__number">
                                                                1103
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__votes">
                                                                votes
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::m-widget5-->
                                            </div>
                                            <div class="tab-pane" id="m_widget5_tab2_content" aria-expanded="false">
                                                <!--begin::m-widget5-->
                                                <div class="m-widget5">
                                                    <div class="m-widget5__item">
                                                        <div class="m-widget5__pic">
                                                            <img class="m-widget7__img" src="../../assets/app/media/img//products/product11.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget5__content">
                                                            <h4 class="m-widget5__title">
                                                                Branding Mockup
                                                            </h4>
                                                            <span class="m-widget5__desc">
                                                                Make Metronic Great  Again.Lorem Ipsum Amet
                                                            </span>
                                                            <div class="m-widget5__info">
                                                                <span class="m-widget5__author">
                                                                    Author:
                                                                </span>
                                                                <span class="m-widget5__info-author m--font-info">
                                                                    Fly themes
                                                                </span>
                                                                <span class="m-widget5__info-label">
                                                                    Released:
                                                                </span>
                                                                <span class="m-widget5__info-date m--font-info">
                                                                    23.08.17
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget5__stats1">
                                                            <span class="m-widget5__number">
                                                                24,583
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__sales">
                                                                sales
                                                            </span>
                                                        </div>
                                                        <div class="m-widget5__stats2">
                                                            <span class="m-widget5__number">
                                                                3809
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__votes">
                                                                votes
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__item">
                                                        <div class="m-widget5__pic">
                                                            <img class="m-widget7__img" src="../../assets/app/media/img//products/product6.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget5__content">
                                                            <h4 class="m-widget5__title">
                                                                Great Logo Designn
                                                            </h4>
                                                            <span class="m-widget5__desc">
                                                                Make Metronic Great  Again.Lorem Ipsum Amet
                                                            </span>
                                                            <div class="m-widget5__info">
                                                                <span class="m-widget5__author">
                                                                    Author:
                                                                </span>
                                                                <span class="m-widget5__info-author m--font-info">
                                                                    Fly themes
                                                                </span>
                                                                <span class="m-widget5__info-label">
                                                                    Released:
                                                                </span>
                                                                <span class="m-widget5__info-date m--font-info">
                                                                    23.08.17
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget5__stats1">
                                                            <span class="m-widget5__number">
                                                                19,200
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__sales">
                                                                sales
                                                            </span>
                                                        </div>
                                                        <div class="m-widget5__stats2">
                                                            <span class="m-widget5__number">
                                                                1046
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__votes">
                                                                votes
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__item">
                                                        <div class="m-widget5__pic">
                                                            <img class="m-widget7__img" src="../../assets/app/media/img//products/product10.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget5__content">
                                                            <h4 class="m-widget5__title">
                                                                Awesome Mobile App
                                                            </h4>
                                                            <span class="m-widget5__desc">
                                                                Make Metronic Great  Again.Lorem Ipsum Amet
                                                            </span>
                                                            <div class="m-widget5__info">
                                                                <span class="m-widget5__author">
                                                                    Author:
                                                                </span>
                                                                <span class="m-widget5__info-author m--font-info">
                                                                    Fly themes
                                                                </span>
                                                                <span class="m-widget5__info-label">
                                                                    Released:
                                                                </span>
                                                                <span class="m-widget5__info-date m--font-info">
                                                                    23.08.17
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget5__stats1">
                                                            <span class="m-widget5__number">
                                                                10,054
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__sales">
                                                                sales
                                                            </span>
                                                        </div>
                                                        <div class="m-widget5__stats2">
                                                            <span class="m-widget5__number">
                                                                1103
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__votes">
                                                                votes
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::m-widget5-->
                                            </div>
                                            <div class="tab-pane" id="m_widget5_tab3_content" aria-expanded="false">
                                                <!--begin::m-widget5-->
                                                <div class="m-widget5">
                                                    <div class="m-widget5__item">
                                                        <div class="m-widget5__pic">
                                                            <img class="m-widget7__img" src="../../assets/app/media/img//products/product10.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget5__content">
                                                            <h4 class="m-widget5__title">
                                                                Branding Mockup
                                                            </h4>
                                                            <span class="m-widget5__desc">
                                                                Make Metronic Great  Again.Lorem Ipsum Amet
                                                            </span>
                                                            <div class="m-widget5__info">
                                                                <span class="m-widget5__author">
                                                                    Author:
                                                                </span>
                                                                <span class="m-widget5__info-author m--font-info">
                                                                    Fly themes
                                                                </span>
                                                                <span class="m-widget5__info-label">
                                                                    Released:
                                                                </span>
                                                                <span class="m-widget5__info-date m--font-info">
                                                                    23.08.17
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget5__stats1">
                                                            <span class="m-widget5__number">
                                                                10.054
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__sales">
                                                                sales
                                                            </span>
                                                        </div>
                                                        <div class="m-widget5__stats2">
                                                            <span class="m-widget5__number">
                                                                1103
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__votes">
                                                                votes
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__item">
                                                        <div class="m-widget5__pic">
                                                            <img class="m-widget7__img" src="../../assets/app/media/img//products/product11.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget5__content">
                                                            <h4 class="m-widget5__title">
                                                                Great Logo Designn
                                                            </h4>
                                                            <span class="m-widget5__desc">
                                                                Make Metronic Great  Again.Lorem Ipsum Amet
                                                            </span>
                                                            <div class="m-widget5__info">
                                                                <span class="m-widget5__author">
                                                                    Author:
                                                                </span>
                                                                <span class="m-widget5__info-author m--font-info">
                                                                    Fly themes
                                                                </span>
                                                                <span class="m-widget5__info-label">
                                                                    Released:
                                                                </span>
                                                                <span class="m-widget5__info-date m--font-info">
                                                                    23.08.17
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget5__stats1">
                                                            <span class="m-widget5__number">
                                                                24,583
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__sales">
                                                                sales
                                                            </span>
                                                        </div>
                                                        <div class="m-widget5__stats2">
                                                            <span class="m-widget5__number">
                                                                3809
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__votes">
                                                                votes
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__item">
                                                        <div class="m-widget5__pic">
                                                            <img class="m-widget7__img" src="../../assets/app/media/img//products/product6.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget5__content">
                                                            <h4 class="m-widget5__title">
                                                                Awesome Mobile App
                                                            </h4>
                                                            <span class="m-widget5__desc">
                                                                Make Metronic Great  Again.Lorem Ipsum Amet
                                                            </span>
                                                            <div class="m-widget5__info">
                                                                <span class="m-widget5__author">
                                                                    Author:
                                                                </span>
                                                                <span class="m-widget5__info-author m--font-info">
                                                                    Fly themes
                                                                </span>
                                                                <span class="m-widget5__info-label">
                                                                    Released:
                                                                </span>
                                                                <span class="m-widget5__info-date m--font-info">
                                                                    23.08.17
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget5__stats1">
                                                            <span class="m-widget5__number">
                                                                19,200
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__sales">
                                                                1046
                                                            </span>
                                                        </div>
                                                        <div class="m-widget5__stats2">
                                                            <span class="m-widget5__number">
                                                                1046
                                                            </span>
                                                            <br>
                                                            <span class="m-widget5__votes">
                                                                votes
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::m-widget5-->
                                            </div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                </div>
                                <!--end:: Widgets/Best Sellers-->
                            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Authors Profit-->
                                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Authors Profit
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                                    <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                        All
                                                    </a>
                                                    <div class="m-dropdown__wrapper">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="m-nav">
                                                                        <li class="m-nav__section m-nav__section--first">
                                                                            <span class="m-nav__section-text">
                                                                                Quick Actions
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Activity
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Messages
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    FAQ
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Support
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                        <li class="m-nav__item">
                                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                                Cancel
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="m-widget4">
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__img m-widget4__img--logo">
                                                    <img src="../../assets/app/media/img/client-logos/logo5.png" alt="">
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__title">
                                                        Trump Themes
                                                    </span>
                                                    <br>
                                                    <span class="m-widget4__sub">
                                                        Make Metronic Great Again
                                                    </span>
                                                </div>
                                                <span class="m-widget4__ext">
                                                    <span class="m-widget4__number m--font-brand">
                                                        +$2500
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__img m-widget4__img--logo">
                                                    <img src="../../assets/app/media/img/client-logos/logo4.png" alt="">
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__title">
                                                        StarBucks
                                                    </span>
                                                    <br>
                                                    <span class="m-widget4__sub">
                                                        Good Coffee & Snacks
                                                    </span>
                                                </div>
                                                <span class="m-widget4__ext">
                                                    <span class="m-widget4__number m--font-brand">
                                                        -$290
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__img m-widget4__img--logo">
                                                    <img src="../../assets/app/media/img/client-logos/logo3.png" alt="">
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__title">
                                                        Phyton
                                                    </span>
                                                    <br>
                                                    <span class="m-widget4__sub">
                                                        A Programming Language
                                                    </span>
                                                </div>
                                                <span class="m-widget4__ext">
                                                    <span class="m-widget4__number m--font-brand">
                                                        +$17
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__img m-widget4__img--logo">
                                                    <img src="../../assets/app/media/img/client-logos/logo2.png" alt="">
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__title">
                                                        GreenMakers
                                                    </span>
                                                    <br>
                                                    <span class="m-widget4__sub">
                                                        Make Green Great Again
                                                    </span>
                                                </div>
                                                <span class="m-widget4__ext">
                                                    <span class="m-widget4__number m--font-brand">
                                                        -$2.50
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="m-widget4__item">
                                                <div class="m-widget4__img m-widget4__img--logo">
                                                    <img src="../../assets/app/media/img/client-logos/logo1.png" alt="">
                                                </div>
                                                <div class="m-widget4__info">
                                                    <span class="m-widget4__title">
                                                        FlyThemes
                                                    </span>
                                                    <br>
                                                    <span class="m-widget4__sub">
                                                        A Let's Fly Fast Again Language
                                                    </span>
                                                </div>
                                                <span class="m-widget4__ext">
                                                    <span class="m-widget4__number m--font-brand">
                                                        +$200
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Authors Profit-->
                            </div>
                        </div>
                        <!--End::Main Portlet-->
                        <!--Begin::Main Portlet-->
                        <div class="row">
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Announcements 1-->
                                <div class="m-portlet m--bg-accent m-portlet--bordered-semi m-portlet--skin-dark m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Announcements
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                                    <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                                        <i class="la la-ellipsis-h m--font-light"></i>
                                                    </a>
                                                    <div class="m-dropdown__wrapper">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="m-nav">
                                                                        <li class="m-nav__section m-nav__section--first">
                                                                            <span class="m-nav__section-text">
                                                                                Quick Actions
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Activity
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Messages
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    FAQ
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Support
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                        <li class="m-nav__item">
                                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                                Cancel
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <!--begin::Widget 7-->
                                        <div class="m-widget7 m-widget7--skin-dark">
                                            <div class="m-widget7__desc">
                                                Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy euismod tinciduntut laoreet doloremagna
                                            </div>
                                            <div class="m-widget7__user">
                                                <div class="m-widget7__user-img">
                                                    <img class="m-widget7__img" src="../../assets/app/media/img//users/100_3.jpg" alt="">
                                                </div>
                                                <div class="m-widget7__info">
                                                    <span class="m-widget7__username">
                                                        Dan Bold
                                                    </span>
                                                    <br>
                                                    <span class="m-widget7__time">
                                                        3 days ago
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget7__button">
                                                <a class="m-btn m-btn--pill btn btn-danger" href="#" role="button">
                                                    All Feeds
                                                </a>
                                            </div>
                                        </div>
                                        <!--end::Widget 7-->
                                    </div>
                                </div>
                                <!--end:: Widgets/Announcements 1-->
                            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Blog-->
                                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-action">
                                                <button type="button" class="btn btn-sm m-btn--pill  btn-brand">
                                                    Blog
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">
                                                <img src="../../assets/app/media/img//blog/blog1.jpg" alt="">
                                                <h3 class="m-widget19__title m--font-light">
                                                    Introducing New Feature
                                                </h3>
                                                <div class="m-widget19__shadow"></div>
                                            </div>
                                            <div class="m-widget19__content">
                                                <div class="m-widget19__header">
                                                    <div class="m-widget19__user-img">
                                                        <img class="m-widget19__img" src="../../assets/app/media/img//users/user1.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget19__info">
                                                        <span class="m-widget19__username">
                                                            Anna Krox
                                                        </span>
                                                        <br>
                                                        <span class="m-widget19__time">
                                                            UX/UI Designer, Google
                                                        </span>
                                                    </div>
                                                    <div class="m-widget19__stats">
                                                        <span class="m-widget19__number m--font-brand">
                                                            18
                                                        </span>
                                                        <span class="m-widget19__comment">
                                                            Comments
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="m-widget19__body">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry scrambled it to make text of the printing and typesetting industry scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
                                                </div>
                                            </div>
                                            <div class="m-widget19__action">
                                                <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
                                                    Read More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Blog-->
                            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Announcements 2-->
                                <div class="m-portlet m--bg-danger m-portlet--bordered-semi m-portlet--skin-dark m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Announcements
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                                    <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                                        <i class="la la-ellipsis-h m--font-light"></i>
                                                    </a>
                                                    <div class="m-dropdown__wrapper">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="m-nav">
                                                                        <li class="m-nav__section m-nav__section--first">
                                                                            <span class="m-nav__section-text">
                                                                                Quick Actions
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Activity
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Messages
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    FAQ
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Support
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                        <li class="m-nav__item">
                                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                                Cancel
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <!--begin::Widget 7-->
                                        <div class="m-widget7 m-widget7--skin-dark">
                                            <div class="m-widget7__desc">
                                                Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy euismod tinciduntut laoreet doloremagna
                                            </div>
                                            <div class="m-widget7__user">
                                                <div class="m-widget7__user-img">
                                                    <img class="m-widget7__img" src="../../assets/app/media/img//users/100_5.jpg" alt="">
                                                </div>
                                                <div class="m-widget7__info">
                                                    <span class="m-widget7__username">
                                                        Nick Mana
                                                    </span>
                                                    <br>
                                                    <span class="m-widget7__time">
                                                        6 hours ago
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget7__button">
                                                <a class="m-btn m-btn--pill btn btn-accent" href="#" role="button">
                                                    All Feeds
                                                </a>
                                            </div>
                                        </div>
                                        <!--end::Widget 7-->
                                    </div>
                                </div>
                                <!--end:: Widgets/Announcements 2-->
                            </div>
                        </div>
                        <!--End::Main Portlet-->
                        <!--Begin::Main Portlet-->
                        <div class="row">
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Sales States-->
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Sales Stats
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                                    <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                                        <i class="fa fa-genderless m--font-brand"></i>
                                                    </a>
                                                    <div class="m-dropdown__wrapper">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 17px;"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="m-nav">
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Activity
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Messages
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    FAQ
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Support
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="m-widget6">
                                            <div class="m-widget6__head">
                                                <div class="m-widget6__item">
                                                    <span class="m-widget6__caption">
                                                        Sceduled
                                                    </span>
                                                    <span class="m-widget6__caption">
                                                        Count
                                                    </span>
                                                    <span class="m-widget6__caption m--align-right">
                                                        Amount
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget6__body">
                                                <div class="m-widget6__item">
                                                    <span class="m-widget6__text">
                                                        16/13/17
                                                    </span>
                                                    <span class="m-widget6__text">
                                                        67
                                                    </span>
                                                    <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                                                        $14,740
                                                    </span>
                                                </div>
                                                <div class="m-widget6__item">
                                                    <span class="m-widget6__text">
                                                        02/28/17
                                                    </span>
                                                    <span class="m-widget6__text">
                                                        120
                                                    </span>
                                                    <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                                                        $11,002
                                                    </span>
                                                </div>
                                                <div class="m-widget6__item">
                                                    <span class="m-widget6__text">
                                                        03/06/17
                                                    </span>
                                                    <span class="m-widget6__text">
                                                        32
                                                    </span>
                                                    <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                                                        $10,900
                                                    </span>
                                                </div>
                                                <div class="m-widget6__item">
                                                    <span class="m-widget6__text">
                                                        10/21/17
                                                    </span>
                                                    <span class="m-widget6__text">
                                                        130
                                                    </span>
                                                    <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                                                        $14,740
                                                    </span>
                                                </div>
                                                <div class="m-widget6__item">
                                                    <span class="m-widget6__text">
                                                        01/02/17
                                                    </span>
                                                    <span class="m-widget6__text">
                                                        5
                                                    </span>
                                                    <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                                                        $18,540
                                                    </span>
                                                </div>
                                                <div class="m-widget6__item">
                                                    <span class="m-widget6__text">
                                                        03/06/17
                                                    </span>
                                                    <span class="m-widget6__text">
                                                        32
                                                    </span>
                                                    <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                                                        $10,900
                                                    </span>
                                                </div>
                                                <div class="m-widget6__item">
                                                    <span class="m-widget6__text">
                                                        12/31/17
                                                    </span>
                                                    <span class="m-widget6__text">
                                                        201
                                                    </span>
                                                    <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                                                        $25,609
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget6__foot">
                                                <div class="m-widget6__action m--align-right">
                                                    <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
                                                        Export
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Sales States-->
                            </div>
                            <div class="col-xl-8">
                                <!--begin:: Widgets/User Progress -->
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    User Progress
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                                                        Today
                                                    </a>
                                                </li>
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                                                        Week
                                                    </a>
                                                </li>
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
                                                        Month
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="m_widget4_tab1_content">
                                                <div class="m-widget4 m-widget4--progress">
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_4.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Anna Strong
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Visual Designer,Google Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__progress">
                                                            <div class="m-widget4__progress-wrapper">
                                                                <span class="m-widget17__progress-number">
                                                                    63%
                                                                </span>
                                                                <span class="m-widget17__progress-label">
                                                                    London
                                                                </span>
                                                                <div class="progress m-progress--sm">
                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 63%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="63"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_14.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Milano Esco
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Product Designer, Apple Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__progress">
                                                            <div class="m-widget4__progress-wrapper">
                                                                <span class="m-widget17__progress-number">
                                                                    33%
                                                                </span>
                                                                <span class="m-widget17__progress-label">
                                                                    Paris
                                                                </span>
                                                                <div class="progress m-progress--sm">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 33%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="33"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_11.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Nick Bold
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Web Developer, Facebook Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__progress">
                                                            <div class="m-widget4__progress-wrapper">
                                                                <span class="m-widget17__progress-number">
                                                                    13%
                                                                </span>
                                                                <span class="m-widget17__progress-label">
                                                                    London
                                                                </span>
                                                                <div class="progress m-progress--sm">
                                                                    <div class="progress-bar bg-brand" role="progressbar" style="width: 13%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="13"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_1.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Wiltor Delton
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Project Manager, Amazon Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__progress">
                                                            <div class="m-widget4__progress-wrapper">
                                                                <span class="m-widget17__progress-number">
                                                                    93%
                                                                </span>
                                                                <span class="m-widget17__progress-label">
                                                                    New York
                                                                </span>
                                                                <div class="progress m-progress--sm">
                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 93%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="93"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget4__item">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="../../assets/app/media/img/users/100_6.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                Sam Stone
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                                Project Manager, Kilpo Inc
                                                            </span>
                                                        </div>
                                                        <div class="m-widget4__progress">
                                                            <div class="m-widget4__progress-wrapper">
                                                                <span class="m-widget17__progress-number">
                                                                    50%
                                                                </span>
                                                                <span class="m-widget17__progress-label">
                                                                    New York
                                                                </span>
                                                                <div class="progress m-progress--sm">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-widget4__ext">
                                                            <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary">
                                                                Follow
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="m_widget4_tab2_content"></div>
                                            <div class="tab-pane" id="m_widget4_tab3_content"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/User Progress -->
                            </div>
                        </div>
                        <!--End::Main Portlet-->
                        <!--Begin::Main Portlet-->
                        <div class="row">
                            <div class="col-xl-6">
                                <!--begin:: Widgets/Finance Summary-->
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Finance Summary
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                                    <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-danger">
                                                        Today
                                                    </a>
                                                    <div class="m-dropdown__wrapper">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 34.5px;"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="m-nav">
                                                                        <li class="m-nav__section m-nav__section--first">
                                                                            <span class="m-nav__section-text">
                                                                                Quick Actions
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Activity
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Messages
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    FAQ
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Support
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                        <li class="m-nav__item">
                                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                                Cancel
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="m-widget12">
                                            <div class="m-widget12__item">
                                                <span class="m-widget12__text1">
                                                    Annual Companies Taxes EMS
                                                    <br>
                                                    <span>
                                                        $500,000
                                                    </span>
                                                </span>
                                                <span class="m-widget12__text2">
                                                    Next Tax Review Date
                                                    <br>
                                                    <span>
                                                        July 24,2017
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="m-widget12__item">
                                                <span class="m-widget12__text1">
                                                    Total Annual Profit Before Tax
                                                    <br>
                                                    <span>
                                                        $3,800,000
                                                    </span>
                                                </span>
                                                <span class="m-widget12__text2">
                                                    Type Of Market Share
                                                    <br>
                                                    <span>
                                                        Grossery
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="m-widget12__item">
                                                <span class="m-widget12__text1">
                                                    Avarage Product Price
                                                    <br>
                                                    <span>
                                                        $60,70
                                                    </span>
                                                </span>
                                                <div class="m-widget12__text2">
                                                    <div class="m-widget12__desc">
                                                        Satisfication Rate
                                                    </div>
                                                    <br>
                                                    <div class="m-widget12__progress">
                                                        <div class="m-widget12__progress-sm progress m-progress--sm">
                                                            <div class="m-widget12__progress-bar progress-bar bg-brand" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="m-widget12__stats">
                                                            63%
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Finance Summary-->
                            </div>
                            <div class="col-xl-6">
                                <!--begin:: Widgets/Company Summary-->
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Company Summary
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                                    <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-primary">
                                                        Today
                                                    </a>
                                                    <div class="m-dropdown__wrapper">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 34.5px;"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="m-nav">
                                                                        <li class="m-nav__section m-nav__section--first">
                                                                            <span class="m-nav__section-text">
                                                                                Quick Actions
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Activity
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Messages
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    FAQ
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Support
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                        <li class="m-nav__item">
                                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                                Cancel
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="m-widget13">
                                            <div class="m-widget13__item">
                                                <span class="m-widget13__desc m--align-right">
                                                    Company Name
                                                </span>
                                                <span class="m-widget13__text m-widget13__text-bolder">
                                                    Stuad Deportive
                                                </span>
                                            </div>
                                            <div class="m-widget13__item">
                                                <span class="m-widget13__desc m--align-right">
                                                    Anual Taxes:
                                                </span>
                                                <span class="m-widget13__text m-widget13__text-bolder">
                                                    $520,000
                                                </span>
                                            </div>
                                            <div class="m-widget13__item">
                                                <span class="m-widget13__desc m--align-right">
                                                    Business Description:
                                                </span>
                                                <span class="m-widget13__text">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </span>
                                            </div>
                                            <div class="m-widget13__item">
                                                <span class="m-widget13__desc m--align-right">
                                                    Employee Amount:
                                                </span>
                                                <span class="m-widget13__text m-widget13__text-bolder">
                                                    1,300
                                                </span>
                                            </div>
                                            <div class="m-widget13__item">
                                                <span class="m-widget13__desc m--align-right">
                                                    Emal:
                                                </span>
                                                <span class="m-widget13__text">
                                                    supporet@keenthemes.com
                                                </span>
                                            </div>
                                            <div class="m-widget13__item">
                                                <span class="m-widget13__desc m--align-right">
                                                    Phone:
                                                </span>
                                                <span class="m-widget13__text m-widget13__number-bolder m--font-brand">
                                                    (0) 123 456 78 90
                                                </span>
                                            </div>
                                            <div class="m-widget13__action m--align-right">
                                                <button type="button" class="m-widget__detalis  btn m-btn--pill  btn-accent">
                                                    Detalis
                                                </button>
                                                <button type="button" class="btn m-btn--pill    btn-secondary">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Company Summary-->
                            </div>
                        </div>
                        <!--End::Main Portlet-->
                        <!--Begin::Main Portlet-->
                        <div class="row">
                            <div class="col-xl-6">
                                <!--begin:: Widgets/Sale Reports-->
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Sales Reports
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget11_tab1_content" role="tab">
                                                        Last Month
                                                    </a>
                                                </li>
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget11_tab2_content" role="tab">
                                                        All Time
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <!--Begin::Tab Content-->
                                        <div class="tab-content">
                                            <!--begin::tab 1 content-->
                                            <div class="tab-pane active" id="m_widget11_tab1_content">
                                                <!--begin::Widget 11-->
                                                <div class="m-widget11">
                                                    <div class="table-responsive">
                                                        <!--begin::Table-->
                                                        <table class="table">
                                                            <!--begin::Thead-->
                                                            <thead>
                                                                <tr>
                                                                    <td class="m-widget11__label">
                                                                        #
                                                                    </td>
                                                                    <td class="m-widget11__app">
                                                                        Application
                                                                    </td>
                                                                    <td class="m-widget11__sales">
                                                                        Sales
                                                                    </td>
                                                                    <td class="m-widget11__price">
                                                                        Avg Price
                                                                    </td>
                                                                    <td class="m-widget11__total m--align-right">
                                                                        Total
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <!--end::Thead-->
                                                            <!--begin::Tbody-->
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <span class="m-widget11__title">
                                                                            Vertex 2.0
                                                                        </span>
                                                                        <span class="m-widget11__sub">
                                                                            Vertex To By Again
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        19,200
                                                                    </td>
                                                                    <td>
                                                                        $63
                                                                    </td>
                                                                    <td class="m--align-right m--font-brand">
                                                                        $14,740
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <span class="m-widget11__title">
                                                                            Metronic
                                                                        </span>
                                                                        <span class="m-widget11__sub">
                                                                            Powerful Admin Theme
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        24,310
                                                                    </td>
                                                                    <td>
                                                                        $39
                                                                    </td>
                                                                    <td class="m--align-right m--font-brand">
                                                                        $16,010
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <span class="m-widget11__title">
                                                                            Apex
                                                                        </span>
                                                                        <span class="m-widget11__sub">
                                                                            The Best Selling App
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        9,076
                                                                    </td>
                                                                    <td>
                                                                        $105
                                                                    </td>
                                                                    <td class="m--align-right m--font-brand">
                                                                        $37,200
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <span class="m-widget11__title">
                                                                            Cascades
                                                                        </span>
                                                                        <span class="m-widget11__sub">
                                                                            Design Tool
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        11,094
                                                                    </td>
                                                                    <td>
                                                                        $16
                                                                    </td>
                                                                    <td class="m--align-right m--font-brand">
                                                                        $8,520
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <!--end::Tbody-->
                                                        </table>
                                                        <!--end::Table-->
                                                    </div>
                                                    <div class="m-widget11__action m--align-right">
                                                        <button type="button" class="btn m-btn--pill btn-outline-brand m-btn m-btn--custom">
                                                            Import Report
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--end::Widget 11-->
                                            </div>
                                            <!--end::tab 1 content-->
                                            <!--begin::tab 2 content-->
                                            <div class="tab-pane" id="m_widget11_tab2_content">
                                                <!--begin::Widget 11-->
                                                <div class="m-widget11">
                                                    <div class="table-responsive">
                                                        <!--begin::Table-->
                                                        <table class="table">
                                                            <!--begin::Thead-->
                                                            <thead>
                                                                <tr>
                                                                    <td class="m-widget11__label">
                                                                        #
                                                                    </td>
                                                                    <td class="m-widget11__app">
                                                                        Application
                                                                    </td>
                                                                    <td class="m-widget11__sales">
                                                                        Sales
                                                                    </td>
                                                                    <td class="m-widget11__change">
                                                                        Change
                                                                    </td>
                                                                    <td class="m-widget11__price">
                                                                        Avg Price
                                                                    </td>
                                                                    <td class="m-widget11__total m--align-right">
                                                                        Total
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <!--end::Thead-->
                                                            <!--begin::Tbody-->
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <span class="m-widget11__title">
                                                                            Loop
                                                                        </span>
                                                                        <span class="m-widget11__sub">
                                                                            CRM System
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        19,200
                                                                    </td>
                                                                    <td>
                                                                        $63
                                                                    </td>
                                                                    <td>
                                                                        $11,300
                                                                    </td>
                                                                    <td class="m--align-right m--font-brand">
                                                                        $34,740
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <span class="m-widget11__title">
                                                                            Selto
                                                                        </span>
                                                                        <span class="m-widget11__sub">
                                                                            Powerful Website Builder
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        24,310
                                                                    </td>
                                                                    <td>
                                                                        $39
                                                                    </td>
                                                                    <td>
                                                                        $14,700
                                                                    </td>
                                                                    <td class="m--align-right m--font-brand">
                                                                        $46,010
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <span class="m-widget11__title">
                                                                            Jippo
                                                                        </span>
                                                                        <span class="m-widget11__sub">
                                                                            The Best Selling App
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        9,076
                                                                    </td>
                                                                    <td>
                                                                        $105
                                                                    </td>
                                                                    <td>
                                                                        $8,400
                                                                    </td>
                                                                    <td class="m--align-right m--font-brand">
                                                                        $67,800
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <span class="m-widget11__title">
                                                                            Verto
                                                                        </span>
                                                                        <span class="m-widget11__sub">
                                                                            Web Development Tool
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        11,094
                                                                    </td>
                                                                    <td>
                                                                        $16
                                                                    </td>
                                                                    <td>
                                                                        $12,500
                                                                    </td>
                                                                    <td class="m--align-right m--font-brand">
                                                                        $18,520
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <!--end::Tbody-->
                                                        </table>
                                                        <!--end::Table-->
                                                    </div>
                                                    <div class="m-widget11__action m--align-right">
                                                        <button type="button" class="btn m-btn--pill btn-outline-brand m-btn m-btn--custom">
                                                            Generate Report
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--end::Widget 11-->
                                            </div>
                                            <!--end::tab 2 content-->
                                            <!--begin::tab 3 content-->
                                            <div class="tab-pane" id="m_widget11_tab3_content"></div>
                                            <!--end::tab 3 content-->
                                        </div>
                                        <!--End::Tab Content-->
                                    </div>
                                </div>
                                <!--end:: Widgets/Sale Reports-->
                            </div>
                            <div class="col-xl-6">
                                <!--begin:: Widgets/Product Sales-->
                                <div class="m-portlet m-portlet--bordered-semi m-portlet--space m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Product Sales
                                                    <span class="m-portlet__head-desc">
                                                        Total Sales By Products
                                                    </span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                                    <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                        Filter
                                                    </a>
                                                    <div class="m-dropdown__wrapper">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="m-nav">
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Activity
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Messages
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    FAQ
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Support
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="m-widget25">
                                            <span class="m-widget25__price m--font-brand">
                                                $237,650
                                            </span>
                                            <span class="m-widget25__desc">
                                                Total Revenue This Month
                                            </span>
                                            <div class="m-widget25--progress">
                                                <div class="m-widget25__progress">
                                                    <span class="m-widget25__progress-number">
                                                        63%
                                                    </span>
                                                    <div class="m--space-10"></div>
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar m--bg-danger" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="m-widget25__progress-sub">
                                                        Sales Growth
                                                    </span>
                                                </div>
                                                <div class="m-widget25__progress">
                                                    <span class="m-widget25__progress-number">
                                                        39%
                                                    </span>
                                                    <div class="m--space-10"></div>
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar m--bg-accent" role="progressbar" style="width: 39%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="m-widget25__progress-sub">
                                                        Product Growth
                                                    </span>
                                                </div>
                                                <div class="m-widget25__progress" >
                                                    <span class="m-widget25__progress-number">
                                                        54%
                                                    </span>
                                                    <div class="m--space-10"></div>
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar m--bg-warning" role="progressbar" style="width: 54%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="m-widget25__progress-sub">
                                                        Community Growth
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Product Sales-->
                            </div>
                        </div>
                        <!--End::Main Portlet-->
                    </div>
                </div>
            </div>
            <!-- end:: Body -->
            <!-- begin::Footer -->
            <footer class="m-grid__item     m-footer ">
                <div class="m-container m-container--fluid m-container--full-height m-page__container">
                    <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                        <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                            <span class="m-footer__copyright">
                                2017 &copy; Metronic theme by
                                <a href="#" class="m-link">
                                    Keenthemes
                                </a>
                            </span>
                        </div>
                        <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                            <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                                <li class="m-nav__item">
                                    <a href="#" class="m-nav__link">
                                        <span class="m-nav__link-text">
                                            About
                                        </span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="#"  class="m-nav__link">
                                        <span class="m-nav__link-text">
                                            Privacy
                                        </span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="#" class="m-nav__link">
                                        <span class="m-nav__link-text">
                                            T&C
                                        </span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="#" class="m-nav__link">
                                        <span class="m-nav__link-text">
                                            Purchase
                                        </span>
                                    </a>
                                </li>
                                <li class="m-nav__item m-nav__item">
                                    <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                                        <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end::Footer -->
        </div>
        <!-- end:: Page -->
        <!-- begin::Quick Sidebar -->
        <div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
            <div class="m-quick-sidebar__content m--hide">
                <span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
                    <i class="la la-close"></i>
                </span>
                <ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
                            Messages
                        </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link"        data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
                            Settings
                        </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
                            Logs
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
                        <div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
                            <div class="m-messenger__messages">
                                <div class="m-messenger__message m-messenger__message--in">
                                    <div class="m-messenger__message-pic">
                                        <img src="../../assets/app/media/img//users/user3.jpg" alt=""/>
                                    </div>
                                    <div class="m-messenger__message-body">
                                        <div class="m-messenger__message-arrow"></div>
                                        <div class="m-messenger__message-content">
                                            <div class="m-messenger__message-username">
                                                Megan wrote
                                            </div>
                                            <div class="m-messenger__message-text">
                                                Hi Bob. What time will be the meeting ?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__message m-messenger__message--out">
                                    <div class="m-messenger__message-body">
                                        <div class="m-messenger__message-arrow"></div>
                                        <div class="m-messenger__message-content">
                                            <div class="m-messenger__message-text">
                                                Hi Megan. It's at 2.30PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__message m-messenger__message--in">
                                    <div class="m-messenger__message-pic">
                                        <img src="../../assets/app/media/img//users/user3.jpg" alt=""/>
                                    </div>
                                    <div class="m-messenger__message-body">
                                        <div class="m-messenger__message-arrow"></div>
                                        <div class="m-messenger__message-content">
                                            <div class="m-messenger__message-username">
                                                Megan wrote
                                            </div>
                                            <div class="m-messenger__message-text">
                                                Will the development team be joining ?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__message m-messenger__message--out">
                                    <div class="m-messenger__message-body">
                                        <div class="m-messenger__message-arrow"></div>
                                        <div class="m-messenger__message-content">
                                            <div class="m-messenger__message-text">
                                                Yes sure. I invited them as well
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__datetime">
                                    2:30PM
                                </div>
                                <div class="m-messenger__message m-messenger__message--in">
                                    <div class="m-messenger__message-pic">
                                        <img src="../../assets/app/media/img//users/user3.jpg"  alt=""/>
                                    </div>
                                    <div class="m-messenger__message-body">
                                        <div class="m-messenger__message-arrow"></div>
                                        <div class="m-messenger__message-content">
                                            <div class="m-messenger__message-username">
                                                Megan wrote
                                            </div>
                                            <div class="m-messenger__message-text">
                                                Noted. For the Coca-Cola Mobile App project as well ?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__message m-messenger__message--out">
                                    <div class="m-messenger__message-body">
                                        <div class="m-messenger__message-arrow"></div>
                                        <div class="m-messenger__message-content">
                                            <div class="m-messenger__message-text">
                                                Yes, sure.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__message m-messenger__message--out">
                                    <div class="m-messenger__message-body">
                                        <div class="m-messenger__message-arrow"></div>
                                        <div class="m-messenger__message-content">
                                            <div class="m-messenger__message-text">
                                                Please also prepare the quotation for the Loop CRM project as well.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__datetime">
                                    3:15PM
                                </div>
                                <div class="m-messenger__message m-messenger__message--in">
                                    <div class="m-messenger__message-no-pic m--bg-fill-danger">
                                        <span>
                                            M
                                        </span>
                                    </div>
                                    <div class="m-messenger__message-body">
                                        <div class="m-messenger__message-arrow"></div>
                                        <div class="m-messenger__message-content">
                                            <div class="m-messenger__message-username">
                                                Megan wrote
                                            </div>
                                            <div class="m-messenger__message-text">
                                                Noted. I will prepare it.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__message m-messenger__message--out">
                                    <div class="m-messenger__message-body">
                                        <div class="m-messenger__message-arrow"></div>
                                        <div class="m-messenger__message-content">
                                            <div class="m-messenger__message-text">
                                                Thanks Megan. I will see you later.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__message m-messenger__message--in">
                                    <div class="m-messenger__message-pic">
                                        <img src="../../assets/app/media/img//users/user3.jpg"  alt=""/>
                                    </div>
                                    <div class="m-messenger__message-body">
                                        <div class="m-messenger__message-arrow"></div>
                                        <div class="m-messenger__message-content">
                                            <div class="m-messenger__message-username">
                                                Megan wrote
                                            </div>
                                            <div class="m-messenger__message-text">
                                                Sure. See you in the meeting soon.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-messenger__seperator"></div>
                            <div class="m-messenger__form">
                                <div class="m-messenger__form-controls">
                                    <input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
                                </div>
                                <div class="m-messenger__form-tools">
                                    <a href="" class="m-messenger__form-attachment">
                                        <i class="la la-paperclip"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
                        <div class="m-list-settings">
                            <div class="m-list-settings__group">
                                <div class="m-list-settings__heading">
                                    General Settings
                                </div>
                                <div class="m-list-settings__item">
                                    <span class="m-list-settings__item-label">
                                        Email Notifications
                                    </span>
                                    <span class="m-list-settings__item-control">
                                        <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                            <label>
                                                <input type="checkbox" checked="checked" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </span>
                                </div>
                                <div class="m-list-settings__item">
                                    <span class="m-list-settings__item-label">
                                        Site Tracking
                                    </span>
                                    <span class="m-list-settings__item-control">
                                        <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </span>
                                </div>
                                <div class="m-list-settings__item">
                                    <span class="m-list-settings__item-label">
                                        SMS Alerts
                                    </span>
                                    <span class="m-list-settings__item-control">
                                        <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </span>
                                </div>
                                <div class="m-list-settings__item">
                                    <span class="m-list-settings__item-label">
                                        Backup Storage
                                    </span>
                                    <span class="m-list-settings__item-control">
                                        <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </span>
                                </div>
                                <div class="m-list-settings__item">
                                    <span class="m-list-settings__item-label">
                                        Audit Logs
                                    </span>
                                    <span class="m-list-settings__item-control">
                                        <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                            <label>
                                                <input type="checkbox" checked="checked" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="m-list-settings__group">
                                <div class="m-list-settings__heading">
                                    System Settings
                                </div>
                                <div class="m-list-settings__item">
                                    <span class="m-list-settings__item-label">
                                        System Logs
                                    </span>
                                    <span class="m-list-settings__item-control">
                                        <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </span>
                                </div>
                                <div class="m-list-settings__item">
                                    <span class="m-list-settings__item-label">
                                        Error Reporting
                                    </span>
                                    <span class="m-list-settings__item-control">
                                        <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </span>
                                </div>
                                <div class="m-list-settings__item">
                                    <span class="m-list-settings__item-label">
                                        Applications Logs
                                    </span>
                                    <span class="m-list-settings__item-control">
                                        <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </span>
                                </div>
                                <div class="m-list-settings__item">
                                    <span class="m-list-settings__item-label">
                                        Backup Servers
                                    </span>
                                    <span class="m-list-settings__item-control">
                                        <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                            <label>
                                                <input type="checkbox" checked="checked" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </span>
                                </div>
                                <div class="m-list-settings__item">
                                    <span class="m-list-settings__item-label">
                                        Audit Logs
                                    </span>
                                    <span class="m-list-settings__item-control">
                                        <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
                        <div class="m-list-timeline">
                            <div class="m-list-timeline__group">
                                <div class="m-list-timeline__heading">
                                    System Logs
                                </div>
                                <div class="m-list-timeline__items">
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            12 new users registered
                                            <span class="m-badge m-badge--warning m-badge--wide">
                                                important
                                            </span>
                                        </a>
                                        <span class="m-list-timeline__time">
                                            Just now
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            System shutdown
                                        </a>
                                        <span class="m-list-timeline__time">
                                            11 mins
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                        <a href="" class="m-list-timeline__text">
                                            New invoice received
                                        </a>
                                        <span class="m-list-timeline__time">
                                            20 mins
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Database overloaded 89%
                                            <span class="m-badge m-badge--success m-badge--wide">
                                                resolved
                                            </span>
                                        </a>
                                        <span class="m-list-timeline__time">
                                            1 hr
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            System error
                                        </a>
                                        <span class="m-list-timeline__time">
                                            2 hrs
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Production server down
                                            <span class="m-badge m-badge--danger m-badge--wide">
                                                pending
                                            </span>
                                        </a>
                                        <span class="m-list-timeline__time">
                                            3 hrs
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Production server up
                                        </a>
                                        <span class="m-list-timeline__time">
                                            5 hrs
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-list-timeline__group">
                                <div class="m-list-timeline__heading">
                                    Applications Logs
                                </div>
                                <div class="m-list-timeline__items">
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            New order received
                                            <span class="m-badge m-badge--info m-badge--wide">
                                                urgent
                                            </span>
                                        </a>
                                        <span class="m-list-timeline__time">
                                            7 hrs
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            12 new users registered
                                        </a>
                                        <span class="m-list-timeline__time">
                                            Just now
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            System shutdown
                                        </a>
                                        <span class="m-list-timeline__time">
                                            11 mins
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                        <a href="" class="m-list-timeline__text">
                                            New invoices received
                                        </a>
                                        <span class="m-list-timeline__time">
                                            20 mins
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Database overloaded 89%
                                        </a>
                                        <span class="m-list-timeline__time">
                                            1 hr
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            System error
                                            <span class="m-badge m-badge--info m-badge--wide">
                                                pending
                                            </span>
                                        </a>
                                        <span class="m-list-timeline__time">
                                            2 hrs
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Production server down
                                        </a>
                                        <span class="m-list-timeline__time">
                                            3 hrs
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-list-timeline__group">
                                <div class="m-list-timeline__heading">
                                    Server Logs
                                </div>
                                <div class="m-list-timeline__items">
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Production server up
                                        </a>
                                        <span class="m-list-timeline__time">
                                            5 hrs
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            New order received
                                        </a>
                                        <span class="m-list-timeline__time">
                                            7 hrs
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            12 new users registered
                                        </a>
                                        <span class="m-list-timeline__time">
                                            Just now
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            System shutdown
                                        </a>
                                        <span class="m-list-timeline__time">
                                            11 mins
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                        <a href="" class="m-list-timeline__text">
                                            New invoice received
                                        </a>
                                        <span class="m-list-timeline__time">
                                            20 mins
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Database overloaded 89%
                                        </a>
                                        <span class="m-list-timeline__time">
                                            1 hr
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            System error
                                        </a>
                                        <span class="m-list-timeline__time">
                                            2 hrs
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Production server down
                                        </a>
                                        <span class="m-list-timeline__time">
                                            3 hrs
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Production server up
                                        </a>
                                        <span class="m-list-timeline__time">
                                            5 hrs
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            New order received
                                        </a>
                                        <span class="m-list-timeline__time">
                                            1117 hrs
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::Quick Sidebar -->
        <!-- begin::Scroll Top -->
        <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end::Scroll Top -->
        <!-- begin::Quick Nav -->
        <ul class="m-nav-sticky" style="margin-top: 30px;">
            <!--
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
                <a href="">
                    <i class="la la-eye"></i>
                </a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
                <a href="" >
                    <i class="la la-comments-o"></i>
                </a>
            </li>
            -->
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">
                    <i class="la la-cart-arrow-down"></i>
                </a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
                <a href="http://keenthemes.com/metronic/documentation.html" target="_blank">
                    <i class="la la-code-fork"></i>
                </a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
                <a href="http://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
                    <i class="la la-life-ring"></i>
                </a>
            </li>
        </ul>
        <!-- begin::Quick Nav -->
        <!--begin::Base Scripts -->
        <script src="../../assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="../../assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Base Scripts -->
    </body>
    <!-- end::Body -->
</html>
