@extends('layouts._default')
@section('title-page', '按钮下拉框')

@section('sub_header_title1', '基础Base')
@section('sub_header_title2', 'Button Icon')

@section('link-css')

@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear">
                                </i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                Dropdown Button
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            Basic Example
                        </h3>
                        <span class="m-section__sub">
                            Single button dropdowns
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo">
                                <div class="m-demo__preview">
                                    <div class="row">
                                        <div class="col">
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" type="button">
                                                    Dropdown button
                                                </button>
                                                <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Something else here
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-brand dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" type="button">
                                                    Dropdown button
                                                </button>
                                                <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Something else here
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" type="button">
                                                    Dropdown button
                                                </button>
                                                <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Something else here
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Dropdown menu with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo">
                                <div class="m-demo__preview">
                                    <div class="row">
                                        <div class="col">
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-accent dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" type="button">
                                                    Lineawesome
                                                </button>
                                                <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="la la-bell">
                                                        </i>
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="la la-cloud-upload">
                                                        </i>
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="la la-cog">
                                                        </i>
                                                        Something else
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-brand dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" type="button">
                                                    Fontawesome
                                                </button>
                                                <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-bell">
                                                        </i>
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-cloud-upload">
                                                        </i>
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-cog">
                                                        </i>
                                                        Something else
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" type="button">
                                                    Metronic Icons
                                                </button>
                                                <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="flaticon-share">
                                                        </i>
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="flaticon-settings">
                                                        </i>
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="flaticon-graphic-2">
                                                        </i>
                                                        Something else
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Button state dropdowns
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo">
                                <div class="m-demo__preview">
                                    <div class="btn-group">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                                            Primary
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /btn-group -->
                                    <div class="btn-group">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
                                            Secondary
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /btn-group -->
                                    <div class="btn-group">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button">
                                            Success
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /btn-group -->
                                    <div class="btn-group">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-brand dropdown-toggle" data-toggle="dropdown" type="button">
                                            Info
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /btn-group -->
                                    <div class="btn-group">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
                                            Danger
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /btn-group -->
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Single button dropdowns
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo">
                                <div class="m-demo__preview">
                                    <div class="btn-group">
                                        <button class="btn btn-primary" type="button">
                                            Primary
                                        </button>
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" type="button">
                                            <span class="sr-only">
                                                Toggle Dropdown
                                            </span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /btn-group -->
                                    <div class="btn-group">
                                        <button class="btn btn-brand" type="button">
                                            Secondary
                                        </button>
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" type="button">
                                            <span class="sr-only">
                                                Toggle Dropdown
                                            </span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /btn-group -->
                                    <div class="btn-group">
                                        <button class="btn btn-success" type="button">
                                            Success
                                        </button>
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" type="button">
                                            <span class="sr-only">
                                                Toggle Dropdown
                                            </span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /btn-group -->
                                    <div class="btn-group">
                                        <button class="btn btn-warning" type="button">
                                            Warning
                                        </button>
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" type="button">
                                            <span class="sr-only">
                                                Toggle Dropdown
                                            </span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /btn-group -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            Sizing
                        </h3>
                        <span class="m-section__sub">
                            Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo">
                                <div class="m-demo__preview">
                                    <div class="btn-group">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary btn-lg dropdown-toggle" data-toggle="dropdown" type="button">
                                            Large button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-lg btn-secondary" type="button">
                                            Large split button
                                        </button>
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" type="button">
                                            <span class="sr-only">
                                                Toggle Dropdown
                                            </span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m--space-10">
                                    </div>
                                    <div class="btn-group">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" type="button">
                                            Small button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-brand" type="button">
                                            Small split button
                                        </button>
                                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-sm btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" type="button">
                                            <span class="sr-only">
                                                Toggle Dropdown
                                            </span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            Dropup variation
                        </h3>
                        <span class="m-section__sub">
                            Trigger dropdown menus above elements by adding
                            <code>
                                .dropup
                            </code>
                            to the parent element.
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo">
                                <div class="m-demo__preview">
                                    <div class="row">
                                        <div class="col">
                                            <div class="btn-group dropup">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Dropup button
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Something else here
                                                    </a>
                                                    <div class="dropdown-divider">
                                                    </div>
                                                    <a class="dropdown-item" href="#">
                                                        Separated link
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group dropup">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Dropup button
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Something else here
                                                    </a>
                                                    <div class="dropdown-divider">
                                                    </div>
                                                    <a class="dropdown-item" href="#">
                                                        Separated link
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group dropup">
                                                <button class="btn btn-outline-success" type="button">
                                                    Split dropup button
                                                </button>
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" type="button">
                                                    <span class="sr-only">
                                                        Toggle Dropdown
                                                    </span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Something else here
                                                    </a>
                                                    <div class="dropdown-divider">
                                                    </div>
                                                    <a class="dropdown-item" href="#">
                                                        Separated link
                                                    </a>
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
        <div class="col-md-6">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear">
                                </i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                Dropdown Button
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            Menu items
                        </h3>
                        <span class="m-section__sub">
                            You can optionally use
                            <code>
                                button
                            </code>
                            elements in your dropdowns instead
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview">
                                    <div class="row">
                                        <div class="col">
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2" type="button">
                                                    Dropdown menu
                                                </button>
                                                <div aria-labelledby="dropdownMenu2" class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">
                                                        Action
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        Another action
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        Something else here
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2" type="button">
                                                    Dropdown menu
                                                </button>
                                                <div aria-labelledby="dropdownMenu2" class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">
                                                        Action
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        Another action
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        Something else here
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-brand dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2" type="button">
                                                    Dropdown menu
                                                </button>
                                                <div aria-labelledby="dropdownMenu2" class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">
                                                        Action
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        Another action
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        Something else here
                                                    </button>
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
                        <h3 class="m-section__heading">
                            Menu alignment
                        </h3>
                        <span class="m-section__sub">
                            Add
                            <code>
                                .dropdown-menu-right
                            </code>
                            to a
                            <code>
                                .dropdown-menu
                            </code>
                            to right align the dropdown menu.
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview">
                                    <div class="row">
                                        <div class="col">
                                            <div class="btn-group">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-brand dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Right Aligned
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button">
                                                        Action
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        Another action
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        Something else here
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Left Aligned
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-left">
                                                    <button class="dropdown-item" type="button">
                                                        Action
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        Another action
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        Something else here
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Right Aligned
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button">
                                                        Action
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        Another action
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        Something else here
                                                    </button>
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
                        <h3 class="m-section__heading">
                            Menu headers
                        </h3>
                        <span class="m-section__sub">
                            Add a header to label sections of actions in any dropdown menu.
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview">
                                    <div class="row">
                                        <div class="col">
                                            <div class="btn-group">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Dropup button
                                                </button>
                                                <div class="dropdown-menu">
                                                    <h6 class="dropdown-header">
                                                        Dropdown header
                                                    </h6>
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Something else here
                                                    </a>
                                                    <div class="dropdown-divider">
                                                    </div>
                                                    <a class="dropdown-item" href="#">
                                                        Separated link
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-brand dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Dropup button
                                                </button>
                                                <div class="dropdown-menu">
                                                    <h6 class="dropdown-header">
                                                        Dropdown header
                                                    </h6>
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Something else here
                                                    </a>
                                                    <div class="dropdown-divider">
                                                    </div>
                                                    <a class="dropdown-item" href="#">
                                                        Separated link
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group">
                                                <button class="btn btn-outline-success" type="button">
                                                    Split dropup button
                                                </button>
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" type="button">
                                                    <span class="sr-only">
                                                        Toggle Dropdown
                                                    </span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <h6 class="dropdown-header">
                                                        Dropdown header
                                                    </h6>
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Something else here
                                                    </a>
                                                    <div class="dropdown-divider">
                                                    </div>
                                                    <a class="dropdown-item" href="#">
                                                        Separated link
                                                    </a>
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
                        <h3 class="m-section__heading">
                            Menu dividers
                        </h3>
                        <span class="m-section__sub">
                            Separate groups of related menu items with a divider.
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview">
                                    <div class="row">
                                        <div class="col">
                                            <div class="btn-group">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-brand dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Dropup button
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Something else here
                                                    </a>
                                                    <div class="dropdown-divider">
                                                    </div>
                                                    <a class="dropdown-item" href="#">
                                                        Separated link
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Dropup button
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Something else here
                                                    </a>
                                                    <div class="dropdown-divider">
                                                    </div>
                                                    <a class="dropdown-item" href="#">
                                                        Separated link
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Dropup button
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Something else here
                                                    </a>
                                                    <div class="dropdown-divider">
                                                    </div>
                                                    <a class="dropdown-item" href="#">
                                                        Separated link
                                                    </a>
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
                        <h3 class="m-section__heading">
                            Disabled Menu Items
                        </h3>
                        <span class="m-section__sub">
                            Add
                            <code>
                                .disabled
                            </code>
                            to items in the dropdown to style them as disabled.
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview">
                                    <div class="row">
                                        <div class="col">
                                            <div class="btn-group">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Dropup button
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        Regular link
                                                    </a>
                                                    <a class="dropdown-item disabled" href="#">
                                                        Disabled link
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another link
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-brand dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Dropup button
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        Regular link
                                                    </a>
                                                    <a class="dropdown-item disabled" href="#">
                                                        Disabled link
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another link
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
                                                    Dropup button
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        Regular link
                                                    </a>
                                                    <a class="dropdown-item disabled" href="#">
                                                        Disabled link
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another link
                                                    </a>
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

@stop