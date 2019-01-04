@extends('layouts._default')
@section('title-page', '下拉框')

@section('sub_header_title1', '基础Base')

@section('link-css')

@stop

@section('content')

    <div class="row">
        <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Basic Examples
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Metronic Dropdown component allows to build rubost dropdown menus:
                        </span>
                        <div class="m-section__content">
                            <div class="row">
                                <div class="col">
                                    <!--begin: Dropdown-->
                                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow" data-dropdown-toggle="click">
                                        <a class="m-dropdown__toggle btn btn-success dropdown-toggle" href="#">
                                            Dropdown
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--left">
                                            </span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav">
                                                            <li class="m-nav__section m-nav__section--first">
                                                                <span class="m-nav__section-text">
                                                                    Section
                                                                </span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-share">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Activity
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-chat-1">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Messages
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-info">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        FAQ
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-lifebuoy">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Support
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit">
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                                    Logout
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Dropdown-->
                                </div>
                                <div class="col">
                                    <!--begin: Dropdown-->
                                    <div aria-expanded="true" class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" data-dropdown-toggle="click">
                                        <a class="m-portlet__nav-link m-dropdown__toggle btn m-btn m-btn--link" href="#">
                                            <i class="la la-ellipsis-v">
                                            </i>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust">
                                            </span>
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
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-share">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Activity
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-chat-1">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Messages
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-info">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        FAQ
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-lifebuoy">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Support
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit">
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                                    Cancel
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Dropdown-->
                                    <!--begin: Dropdown-->
                                    <div aria-expanded="true" class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="click">
                                        <a class="m-portlet__nav-link m-dropdown__toggle btn m-btn m-btn--link" href="#">
                                            <i class="la la-ellipsis-h">
                                            </i>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust">
                                            </span>
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
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-share">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Activity
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-chat-1">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Messages
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-info">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        FAQ
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-lifebuoy">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Support
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit">
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                                    Cancel
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Dropdown-->
                                </div>
                                <div class="col">
                                    <!--begin: Dropdown-->
                                    <div aria-expanded="true" class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="click">
                                        <a class="m-portlet__nav-link m-dropdown__toggle btn btn-secondary m-btn m-btn--icon m-btn--pill" href="#">
                                            <i class="la la-ellipsis-v">
                                            </i>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust">
                                            </span>
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
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-share">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Activity
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-chat-1">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Messages
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-info">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        FAQ
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-lifebuoy">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Support
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit">
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                                    Cancel
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Dropdown-->
                                </div>
                                <div class="col">
                                    <!--begin: Dropdown-->
                                    <div aria-expanded="true" class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" data-dropdown-toggle="click">
                                        <a class="m-portlet__nav-link m-dropdown__toggle btn btn-secondary m-btn m-btn--icon m-btn--pill" href="#">
                                            <i class="la la-ellipsis-h">
                                            </i>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust">
                                            </span>
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
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-share">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Activity
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-chat-1">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Messages
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-info">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        FAQ
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="m-nav__link" href="">
                                                                    <i class="m-nav__link-icon flaticon-lifebuoy">
                                                                    </i>
                                                                    <span class="m-nav__link-text">
                                                                        Support
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit">
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                                    Cancel
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Dropdown-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <div class="m-separator m-separator--dashed">
                    </div>
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Dropdowns can be toggled via click or hover by setting
                            <code>
                                data-dropdown-toggle="hover"
                            </code>
                            and
                            <code>
                                data-dropdown-toggle="click"
                            </code>
                            :
                        </span>
                        <div class="m-section__content m-demo-dropdowns">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-brand dropdown-toggle" href="#">
                                    Dropdown - Hover
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--left">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow" data-dropdown-toggle="click">
                                <a class="m-dropdown__toggle btn btn-primary dropdown-toggle" href="#">
                                    Dropdown - Click
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--left">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
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
                    <!--end::Section-->
                    <div class="m-separator m-separator--dashed">
                    </div>
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Dropdowns can be shown persistent when toggled by click to avoid closing on mouse click on it
                            <code>
                                data-dropdown-persistent="true"
                            </code>
                            :
                        </span>
                        <div class="m-section__content">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow" data-dropdown-persistent="true" data-dropdown-toggle="click">
                                <a class="m-dropdown__toggle btn btn-danger dropdown-toggle" href="#">
                                    Dropdown - Persistent
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--left">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
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
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Dropdown API
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Metronic Dropdown component allows to build rubost dropdown menus:
                        </span>
                        <div class="m-section__content m-demo-dropdowns">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow" data-dropdown-toggle="hover" id="m_dropdown_api_1">
                                <a class="m-dropdown__toggle btn btn-primary dropdown-toggle" href="#">
                                    Dropdown 1
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--left">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow" data-dropdown-toggle="click" id="m_dropdown_api_2">
                                <a class="m-dropdown__toggle btn btn-brand dropdown-toggle" href="#">
                                    Dropdown 2
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--left">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-separator m-separator--dashed">
                            </div>
                            <div class="m-demo" style1="margin-top: 150px;">
                                <div class="m-demo__preview" id="m_dropdown_api_output">
                                    <b>
                                        API console:
                                    </b>
                                    <p>
                                        .............................
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <div class="m-separator m-separator--dashed">
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
        <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Advance Examples
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Dropdowns can be aligned to
                            <code>
                                left
                            </code>
                            ,
                            <code>
                                center
                            </code>
                            and
                            <code>
                                right
                            </code>
                            :
                        </span>
                        <div class="m-section__content m-demo-dropdowns">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-info dropdown-toggle" href="#">
                                    Dropdown - Left
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--left">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-warning dropdown-toggle" href="#">
                                    Dropdown - Right
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-center" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-brand dropdown-toggle" href="#">
                                    Dropdown - Center
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--center">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
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
                    <!--end::Section-->
                    <div class="m-separator m-separator--dashed">
                    </div>
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Dropdowns support
                            <code>
                                small
                            </code>
                            ,
                            <code>
                                medium
                            </code>
                            ,
                            <code>
                                large
                            </code>
                            and
                            <code>
                                huge
                            </code>
                            sizes:
                        </span>
                        <div class="m-section__content m-demo-dropdowns">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--small m-dropdown--arrow m-dropdown--align-left" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-brand dropdown-toggle" href="#">
                                    Dropdown - Default
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--left">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-dropdown m-dropdown--inline m-dropdown--small m-dropdown--arrow m-dropdown--align-right" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-success dropdown-toggle" href="#">
                                    Dropdown - Small
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-danger dropdown-toggle" href="#">
                                    Dropdown - Medium
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--left">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-dropdown m-dropdown--inline m-dropdown--large m-dropdown--arrow m-dropdown--align-left" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-warning dropdown-toggle" href="#">
                                    Dropdown - Large
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--left">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="m-dropdown m-dropdown--inline m-dropdown--huge m-dropdown--arrow m-dropdown--align-right" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-primary dropdown-toggle" href="#">
                                    Dropdown - Huge
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right">
                                    </span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
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
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Apply
                            <code>
                                m-dropdown--up
                            </code>
                            to display dropdown in opposite mode:
                        </span>
                        <div class="m-section__content">
                            <div class="m-dropdown m-dropdown--up m-dropdown--inline m-dropdown--small m-dropdown--arrow m-dropdown--align-left" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-brand dropdown-toggle" href="#">
                                    Dropdown - Default
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="m-dropdown__arrow m-dropdown__arrow--left">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            To display dropdowns without arrow just remove the arrow element from the HTML markup:
                        </span>
                        <div class="m-section__content m-demo-dropdowns">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--align-left" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-success dropdown-toggle" href="#">
                                    Dropdown - No arrow
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-dropdown m-dropdown--up m-dropdown--inline m-dropdown--align-left" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-primary dropdown-toggle" href="#">
                                    Dropup - No arrow
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Section
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-share">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-chat-1">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-info">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="m-nav__link" href="">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy">
                                                            </i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                            Logout
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
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Dropdowns can contain scrollable long contents:
                        </span>
                        <div class="m-section__content">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--align-left" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-warning dropdown-toggle" href="#">
                                    Dropdown - Scrollable
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <div class="m-scrollable" data-max-height="200" data-scrollable="true">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__section m-nav__section--first">
                                                            <span class="m-nav__section-text">
                                                                Section
                                                            </span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a class="m-nav__link" href="">
                                                                <i class="m-nav__link-icon flaticon-share">
                                                                </i>
                                                                <span class="m-nav__link-text">
                                                                    Activity
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a class="m-nav__link" href="">
                                                                <i class="m-nav__link-icon flaticon-chat-1">
                                                                </i>
                                                                <span class="m-nav__link-text">
                                                                    Messages
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a class="m-nav__link" href="">
                                                                <i class="m-nav__link-icon flaticon-info">
                                                                </i>
                                                                <span class="m-nav__link-text">
                                                                    FAQ
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__section m-nav__section--first">
                                                            <span class="m-nav__section-text">
                                                                Section
                                                            </span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a class="m-nav__link" href="">
                                                                <i class="m-nav__link-icon flaticon-share">
                                                                </i>
                                                                <span class="m-nav__link-text">
                                                                    Activity
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a class="m-nav__link" href="">
                                                                <i class="m-nav__link-icon flaticon-chat-1">
                                                                </i>
                                                                <span class="m-nav__link-text">
                                                                    Messages
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a class="m-nav__link" href="">
                                                                <i class="m-nav__link-icon flaticon-info">
                                                                </i>
                                                                <span class="m-nav__link-text">
                                                                    FAQ
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a class="m-nav__link" href="">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy">
                                                                </i>
                                                                <span class="m-nav__link-text">
                                                                    Support
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">
                                                                Logout
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
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Dropdowns can contain free content such as text, elements or components:
                        </span>
                        <div class="m-section__content m-demo-dropdowns">
                            <div class="m-dropdown m-dropdown--up m-dropdown--inline m-dropdown--align-left" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-danger dropdown-toggle" href="#">
                                    Dropdown - Free content
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry.
                                                <div class="m-separator m-separator--dashed">
                                                </div>
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-dropdown m-dropdown--up m-dropdown--inline m-dropdown--align-left" data-dropdown-toggle="hover">
                                <a class="m-dropdown__toggle btn btn-primary dropdown-toggle" href="#">
                                    Dropdown - Scrollable free content
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <div class="m-scrollable" data-max-height="200" data-scrollable="true">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    <div class="m-separator m-separator--dashed">
                                                    </div>
                                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>

@stop

@section('link-js')
<script src="{{ url('assets/demo/default/custom/components/base/dropdown.js') }}" type="text/javascript"></script>
@stop