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
            Metronic | AmCharts Charts
        </title>
        <meta name="description" content="Amcharts charts examples">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <!--begin::Page Vendors -->
        <link href="//www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors -->
        <link href="../../../assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../../../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="../../../assets/demo/default/media/img/logo/favicon.ico" />
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
                                    <a href="../../../index.html" class="m-brand__logo-wrapper">
                                        <img alt="" src="../../../assets/demo/default/media/img/logo/logo_default_dark.png"/>
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
                                                    <a  href="../../../header/actions.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-file"></i>
                                                        <span class="m-menu__link-text">
                                                            Create New Post
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="../../../header/actions.html" class="m-menu__link ">
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
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Latest Orders
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Pending Orders
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Processed Orders
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Delivery Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Payments
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
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
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Customer Feedbacks
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Supplier Feedbacks
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Reviewed Feedbacks
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Resolved Feedbacks
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Feedback Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="../../../header/actions.html" class="m-menu__link ">
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
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-map"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Annual Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-user"></i>
                                                                    <span class="m-menu__link-text">
                                                                        HR Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                                    <span class="m-menu__link-text">
                                                                        IPO Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-graphic-1"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Finance Margins
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
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
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Coca Cola CRM
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Delta Airlines Booking Site
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Malibu Accounting
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Vineseed Website Rewamp
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Zircon Mobile App
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
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
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Staff Directory
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Client Directory
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Salary Reports
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Staff Payslips
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                        <span></span>
                                                                    </i>
                                                                    <span class="m-menu__link-text">
                                                                        Corporate Expenses
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
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
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Report Adjusments
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Sources & Mediums
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Reporting Settings
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Conversions
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <span class="m-menu__link-text">
                                                                        Report Flows
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
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
                                                    <a  href="../../../header/actions.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-business"></i>
                                                        <span class="m-menu__link-text">
                                                            eCommerce
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
                                                    <a  href="../../../crud/datatable_v1.html" class="m-menu__link m-menu__toggle">
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
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-users"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Active Users
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-interface-1"></i>
                                                                    <span class="m-menu__link-text">
                                                                        User Explorer
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-lifebuoy"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Users Flows
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-graphic-1"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Market Segments
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
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
                                                    <a  href="../../../header/actions.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-map"></i>
                                                        <span class="m-menu__link-text">
                                                            Marketing
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="../../../header/actions.html" class="m-menu__link ">
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
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
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
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-signs-1"></i>
                                                                    <span class="m-menu__link-text">
                                                                        File Attributes
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-folder"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Folders
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                                <a  href="../../../header/actions.html" class="m-menu__link ">
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
                                                    <div class="m-dropdown__header m--align-center" style="background: url(../../../assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
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
                                                    <div class="m-dropdown__header m--align-center" style="background: url(../../../assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
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
                                                    <img src="../../../assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                                </span>
                                                <span class="m-topbar__username m--hide">
                                                    Nick
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center" style="background: url(../../../assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                        <div class="m-card-user m-card-user--skin-dark">
                                                            <div class="m-card-user__pic">
                                                                <img src="../../../assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
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
                                                                    <a href="../../../header/profile.html" class="m-nav__link">
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
                                                                    <a href="../../../header/profile.html" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Activity
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="../../../header/profile.html" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Messages
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__item">
                                                                    <a href="../../../header/profile.html" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">
                                                                            FAQ
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="../../../header/profile.html" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Support
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__item">
                                                                    <a href="../../../snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
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
                                <a  href="../../../index.html" class="m-menu__link ">
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
                                            <a  href="../../../components/base/state.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    State Colors
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/typography.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Typography
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/stack.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Stack
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/tables.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tables
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/progress.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Progress
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/modal.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Modal
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/alerts.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Alerts
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/popover.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Popover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/tooltip.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tooltip
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/blockui.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Block UI
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/spinners.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Spinners
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/scrollable.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Scrollable
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/dropdown.html" class="m-menu__link ">
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
                                                        <a  href="../../../components/base/tabs/bootstrap.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Bootstrap Tabs
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/base/tabs/line.html" class="m-menu__link ">
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
                                            <a  href="../../../components/base/navs.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Navs
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/lists.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Lists
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/treeview.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tree View
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/bootstrap-notify.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Bootstrap Notify
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/base/toastr.html" class="m-menu__link ">
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
                                            <a  href="../../../components/icons/flaticon.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Flaticon
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/icons/fontawesome.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Fontawesome
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/icons/lineawesome.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Lineawesome
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/icons/socicons.html" class="m-menu__link ">
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
                                                        <a  href="../../../components/buttons/base/default.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Default Style
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/buttons/base/square.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Square Style
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/buttons/base/pill.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Pill Style
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/buttons/base/air.html" class="m-menu__link ">
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
                                            <a  href="../../../components/buttons/group.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Button Group
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/buttons/dropdown.html" class="m-menu__link ">
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
                                                        <a  href="../../../components/buttons/icon/lineawesome.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Lineawesome Icons
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/buttons/icon/fontawesome.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Fontawesome Icons
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/buttons/icon/flaticon.html" class="m-menu__link ">
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
                                                        <a  href="../../../components/forms/controls/base.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Base Inputs
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/controls/checkbox-radio.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Checkbox & Radio
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/controls/switch.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Switch
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/controls/input-group.html" class="m-menu__link ">
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
                                                        <a  href="../../../components/forms/widgets/bootstrap-datepicker.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Datepicker
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/bootstrap-datetimepicker.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Datetimepicker
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/bootstrap-timepicker.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Timepicker
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/bootstrap-daterangepicker.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Daterangepicker
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/bootstrap-touchspin.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Touchspin
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/bootstrap-maxlength.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Maxlength
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/bootstrap-switch.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Switch
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/bootstrap-multipleselectsplitter.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Multiple Select Splitter
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/bootstrap-select.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Bootstrap Select
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/select2.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Select2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/typeahead.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Typeahead
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/nouislider.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                noUiSlider
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/ion-range-slider.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Ion Range Slider
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/input-mask.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Input Masks
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/summernote.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Summernote WYSIWYG
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/bootstrap-markdown.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Markdown Editor
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/autosize.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Autosize
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/clipboard.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Clipboard
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/dropzone.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Dropzone
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/widgets/recaptcha.html" class="m-menu__link ">
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
                                                        <a  href="../../../components/forms/layouts/default-forms.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Default Forms
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/layouts/multi-column-forms.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Multi Column Forms
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/layouts/action-bars.html" class="m-menu__link ">
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
                                                        <a  href="../../../components/forms/validation/states.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Validation States
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/validation/form-controls.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Form Controls
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/forms/validation/form-widgets.html" class="m-menu__link ">
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
                                                        <a  href="../../../components/datatables/base/data-local.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Local Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/base/data-json.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                JSON Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/base/data-ajax.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Ajax Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/base/html-table.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                HTML Table
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/base/record-selection.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Record Selection
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/base/local-sort.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Local Sort
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/base/column-rendering.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Column Rendering
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/base/column-width.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Column Width
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/base/responsive-columns.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Responsive Columns
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/base/translation.html" class="m-menu__link ">
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
                                                        <a  href="../../../components/datatables/scrolling/vertical.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Vertical Scrolling
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/scrolling/horizontal.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Horizontal Scrolling
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/scrolling/both.html" class="m-menu__link ">
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
                                                        <a  href="../../../components/datatables/locked/left.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Left Locked Columns
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/locked/right.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Right Locked Columns
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/locked/both.html" class="m-menu__link ">
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
                                                        <a  href="../../../components/datatables/child/data-local.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Local Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/child/data-ajax.html" class="m-menu__link ">
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
                                                        <a  href="../../../components/datatables/api/methods.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                API Methods
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/datatables/api/events.html" class="m-menu__link ">
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
                                            <a  href="../../../components/portlets/base.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Base Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/portlets/advanced.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Advanced Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/portlets/creative.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Creative Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/portlets/tabbed.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tabbed Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/portlets/draggable.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Draggable Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/portlets/tools.html" class="m-menu__link ">
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
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
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
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/widgets/general.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    General Widgets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/widgets/chart.html" class="m-menu__link ">
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
                                            <a  href="../../../components/calendar/basic.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Basic Calendar
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/calendar/list-view.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    List Views
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/calendar/google.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Google Calendar
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/calendar/external-events.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    External Events
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/calendar/background-events.html" class="m-menu__link ">
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
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--open m-menu__item--expanded" aria-haspopup="true"  data-menu-submenu-toggle="hover">
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
                                        <li class="m-menu__item  m-menu__item--submenu m-menu__item--open m-menu__item--expanded" aria-haspopup="true"  data-menu-submenu-toggle="hover">
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
                                                    <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                                                        <a  href="../../../components/charts/amcharts/charts.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                amCharts Charts
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/charts/amcharts/stock-charts.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                amCharts Stock Charts
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="../../../components/charts/amcharts/maps.html" class="m-menu__link ">
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
                                            <a  href="../../../components/charts/flotcharts.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Flot Charts
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/charts/google-charts.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Google Charts
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/charts/morris-charts.html" class="m-menu__link ">
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
                                            <a  href="../../../components/maps/google-maps.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Google Maps
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/maps/jqvmap.html" class="m-menu__link ">
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
                                            <a  href="../../../components/utils/session-timeout.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Session Timeout
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="../../../components/utils/idle-timer.html" class="m-menu__link ">
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
                                                        <a target="_blank" href="../../../snippets/pages/user/login-1.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 1
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../../snippets/pages/user/login-2.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../../snippets/pages/user/login-3.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 3
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../../snippets/pages/user/login-4.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 4
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../../snippets/pages/user/login-5.html" class="m-menu__link ">
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
                                                        <a target="_blank" href="../../../snippets/pages/errors/error-1.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 1
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../../snippets/pages/errors/error-2.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../../snippets/pages/errors/error-3.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 3
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../../snippets/pages/errors/error-4.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 4
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../../snippets/pages/errors/error-5.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 5
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="../../../snippets/pages/errors/error-6.html" class="m-menu__link ">
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
                                    amCharts Charts
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
                                                Charts
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__separator">
                                        -
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                amCharts
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__separator">
                                        -
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                amCharts Charts
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
                        <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
                            <div class="m-alert__icon m-alert__icon--top">
                                <i class="flaticon-exclamation m--font-accent"></i>
                            </div>
                            <div class="m-alert__text">
                                <p>
                                    You can download and use all
                                    <b>
                                        amCharts
                                    </b>
                                    products for free. The only limitation of the free version is that a small link to this web
            site will be displayed in the top left corner of your charts. If you would like to use charts without this link, or you appreciate
            the software and would like to support its creators,
                                    <a href="http://www.amcharts.com/online-store/" target="_blank">
                                        please purchase a commercial license
                                    </a>
                                </p>
                                <p>
                                    <span class="m-badge m-badge--danger m-badge--wide m-badge--rounded">
                                        Exclusively for Metronic users:
                                    </span>
                                    <br>
                                    After purchasing
                                    <b>
                                        Metronic
                                    </b>
                                    you will get a promo code for
                                    <span class="m-badge m-badge--accent m-badge--wide m-badge--rounded">
                                        15% DISCOUNT
                                    </span>
                                    for commercial license of
                                    <b>
                                        amChart
                                    </b>
                                    . To find the promo code please check the readme.txt file in the Metronic's purchased package.
                                </p>
                                <p>
                                    For more info please chech the plugin's official
                                    <a class="m-link" href="http://www.amcharts.com/demos/" target="_blank">
                                        demos & documentation
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Simple Column Chart
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_1" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Column and Line mix
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_2" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Layered Column Chart
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_3" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    3D Stacked Column Chart
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_4" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Bar and line chart mix
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_5" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Date Based Data
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_6" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Line Chart with Scroll and Zoom
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_7" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Duration on Value Axis
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_8" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Radar Chart
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_9" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Polar Chart
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_10" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Polar Scatter
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_11" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Simple Pie Chart
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_12" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                                <!--begin::Portlet-->
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Animated Time-Line Pie Chart
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div id="m_amcharts_13" style="height: 500px;"></div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                            </div>
                        </div>
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
                                        <img src="../../../assets/app/media/img//users/user3.jpg" alt=""/>
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
                                        <img src="../../../assets/app/media/img//users/user3.jpg" alt=""/>
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
                                        <img src="../../../assets/app/media/img//users/user3.jpg"  alt=""/>
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
                                        <img src="../../../assets/app/media/img//users/user3.jpg"  alt=""/>
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
        <script src="../../../assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="../../../assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Base Scripts -->
        <!--begin::Page Vendors -->
        <script src="//www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
        <script src="//www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
        <script src="//www.amcharts.com/lib/3/radar.js" type="text/javascript"></script>
        <script src="//www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
        <script src="//www.amcharts.com/lib/3/plugins/tools/polarScatter/polarScatter.min.js" type="text/javascript"></script>
        <script src="//www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
        <script src="//www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
        <script src="//www.amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>
        <!--end::Page Vendors -->
        <!--begin::Page Resources -->
        <script src="../../../assets/demo/default/custom/components/charts/amcharts/charts.js" type="text/javascript"></script>
        <!--end::Page Resources -->
    </body>
    <!-- end::Body -->
</html>