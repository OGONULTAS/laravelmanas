@extends('layouts._default')
@section('title-page', '按钮组')

@section('sub_header_title1', '基础Base')
@section('sub_header_title2', 'Button Icon')

@section('link-css')

@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear">
                                </i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                Base Buttons
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand m-tabs-line--right m-tabs-line-danger" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_buttons_default" role="tab">
                                    Default Style
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_buttons_square" role="tab">
                                    Square Style
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Default Buttons Tab-->
                        <div class="tab-pane active" id="m_buttons_default" role="tabpanel">
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Basic example
                                </h3>
                                <span class="m-section__sub">
                                    Basic button group examples
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group" role="group">
                                                        <button class="btn btn-secondary" type="button">
                                                            Left
                                                        </button>
                                                        <button class="btn btn-secondary" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="btn btn-secondary" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group" role="group">
                                                        <button class="btn btn-brand" type="button">
                                                            Left
                                                        </button>
                                                        <button class="btn btn-brand" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="btn btn-brand" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group" role="group">
                                                        <button class="btn btn-primary" type="button">
                                                            Left
                                                        </button>
                                                        <button class="btn btn-primary" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="btn btn-primary" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group" role="group">
                                                        <button class="btn btn-success" type="button">
                                                            Left
                                                        </button>
                                                        <button class="btn btn-success" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="btn btn-success" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Buttons toolbar
                                </h3>
                                <span class="m-section__sub">
                                    Combine sets of
                                    <code>
                                        btn-group
                                    </code>
                                    into a
                                    <code>
                                        btn-toolbar
                                    </code>
                                    for more complex components.
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="..." class="btn-toolbar" role="toolbar">
                                                <div aria-label="..." class="btn-group mr-2" role="group">
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-file-text-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-bold">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-paperclip">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div aria-label="..." class="btn-group mr-2" role="group">
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-floppy-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-files-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-header">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div aria-label="..." class="btn-group" role="group">
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-scissors">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-unlink">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-italic">
                                                        </i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Toolbar with button groups" class="btn-toolbar mb-3" role="toolbar">
                                                <div aria-label="First group" class="btn-group mr-2" role="group">
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-file-text-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-floppy-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-header">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-italic">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="btnGroupAddon">
                                                        @
                                                    </span>
                                                    <input aria-describedby="btnGroupAddon" class="form-control" placeholder="Input group example" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                            <div aria-label="Toolbar with button groups" class="btn-toolbar justify-content-between" role="toolbar">
                                                <div aria-label="First group" class="btn-group" role="group">
                                                    <button class="m-btn btn btn-primary" type="button">
                                                        <i class="la la-file-text-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-success" type="button">
                                                        <i class="la la-paperclip">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-warning" type="button">
                                                        <i class="la la-files-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-info" type="button">
                                                        <i class="la la-scissors">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="btnGroupAddon2">
                                                        @
                                                    </span>
                                                    <input aria-describedby="btnGroupAddon2" class="form-control" placeholder="Input group example" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Sizing
                                </h3>
                                <span class="m-section__sub">
                                    Instead of applying button sizing classes to every button in a group, just add
                                    <code>
                                        .btn-group-*
                                    </code>
                                    to each
                                    <code>
                                        .btn-group
                                    </code>
                                    , including each one when nesting multiple groups.
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Large button group" class="btn-group btn-group-lg" role="group">
                                                <button class="btn btn-outline-success" type="button">
                                                    Left
                                                </button>
                                                <button class="btn btn-outline-success" type="button">
                                                    Middle
                                                </button>
                                                <button class="btn btn-outline-success" type="button">
                                                    Right
                                                </button>
                                            </div>
                                            <div class="m--space-10">
                                            </div>
                                            <div aria-label="Default button group" class="btn-group" role="group">
                                                <button class="btn btn-outline-warning" type="button">
                                                    Left
                                                </button>
                                                <button class="btn btn-outline-warning" type="button">
                                                    Middle
                                                </button>
                                                <button class="btn btn-outline-warning" type="button">
                                                    Right
                                                </button>
                                            </div>
                                            <div class="m--space-10">
                                            </div>
                                            <div aria-label="Small button group" class="btn-group btn-group-sm" role="group">
                                                <button class="btn btn-outline-info" type="button">
                                                    Left
                                                </button>
                                                <button class="btn btn-outline-info" type="button">
                                                    Middle
                                                </button>
                                                <button class="btn btn-outline-info" type="button">
                                                    Right
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Nesting
                                </h3>
                                <span class="m-section__sub">
                                    Place a .btn-group within another
                                    <code>
                                        .btn-group
                                    </code>
                                    when you want dropdown menus mixed with a series of buttons.
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Button group with nested dropdown" class="btn-group" role="group">
                                                <button class="m-btn btn btn-secondary" type="button">
                                                    <i class="la la-file-text-o">
                                                    </i>
                                                </button>
                                                <button class="m-btn btn btn-secondary" type="button">
                                                    <i class="la la-floppy-o">
                                                    </i>
                                                </button>
                                                <button class="m-btn btn btn-secondary" type="button">
                                                    <i class="la la-header">
                                                    </i>
                                                </button>
                                                <button class="m-btn btn btn-secondary" type="button">
                                                    <i class="la la-italic">
                                                    </i>
                                                </button>
                                                <div class="btn-group" role="group">
                                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupDrop1" type="button">
                                                        Dropdown
                                                    </button>
                                                    <div aria-labelledby="btnGroupDrop1" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Vertical
                                </h3>
                                <span class="m-section__sub">
                                    Make a set of buttons appear vertically stacked rather than horizontally
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Vertical button group" class="btn-group-vertical" role="group">
                                                <button class="btn btn-secondary" type="button">
                                                    Button
                                                </button>
                                                <div class="btn-group" role="group">
                                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop1" type="button">
                                                        Dropdown
                                                    </button>
                                                    <div aria-labelledby="btnGroupVerticalDrop1" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                    </div>
                                                </div>
                                                <button class="btn btn-secondary" type="button">
                                                    Button
                                                </button>
                                                <div class="btn-group" role="group">
                                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop2" type="button">
                                                        Dropdown
                                                    </button>
                                                    <div aria-labelledby="btnGroupVerticalDrop2" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Default Buttons Tab-->
                        <!--begin::Square Buttons Tab-->
                        <div class="tab-pane" id="m_buttons_square" role="tabpanel">
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Basic example
                                </h3>
                                <span class="m-section__sub">
                                    Basic button group examples
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group" role="group">
                                                        <button class="m-btn m-btn--square btn btn-secondary" type="button">
                                                            Left
                                                        </button>
                                                        <button class="m-btn m-btn--square btn btn-secondary" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="m-btn m-btn--square btn btn-secondary" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group" role="group">
                                                        <button class="m-btn m-btn--square btn btn-brand" type="button">
                                                            Left
                                                        </button>
                                                        <button class="m-btn m-btn--square btn btn-brand" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="m-btn m-btn--square btn btn-brand" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group" role="group">
                                                        <button class="m-btn m-btn--square btn btn-primary" type="button">
                                                            Left
                                                        </button>
                                                        <button class="m-btn m-btn--square btn btn-primary" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="m-btn m-btn--square btn btn-primary" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group" role="group">
                                                        <button class="m-btn m-btn--square btn btn-success" type="button">
                                                            Left
                                                        </button>
                                                        <button class="m-btn m-btn--square btn btn-success" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="m-btn m-btn--square btn btn-success" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Buttons toolbar
                                </h3>
                                <span class="m-section__sub">
                                    Combine sets of
                                    <code>
                                        btn-group
                                    </code>
                                    into a
                                    <code>
                                        btn-toolbar
                                    </code>
                                    for more complex components.
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="..." class="btn-toolbar" role="toolbar">
                                                <div aria-label="..." class="btn-group mr-2" role="group">
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-file-text-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-bold">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-paperclip">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div aria-label="..." class="btn-group mr-2" role="group">
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-floppy-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-files-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-header">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div aria-label="..." class="btn-group" role="group">
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-scissors">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-unlink">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-italic">
                                                        </i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Toolbar with button groups" class="btn-toolbar mb-3" role="toolbar">
                                                <div aria-label="First group" class="btn-group mr-2" role="group">
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-file-text-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-floppy-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-header">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                        <i class="la la-italic">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div class="input-group m-input-group--square">
                                                    <span class="input-group-addon" id="btnGroupAddon">
                                                        @
                                                    </span>
                                                    <input aria-describedby="btnGroupAddon" class="form-control" placeholder="Input group example" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                            <div aria-label="Toolbar with button groups" class="btn-toolbar justify-content-between" role="toolbar">
                                                <div aria-label="First group" class="btn-group" role="group">
                                                    <button class="m-btn m-btn m-btn--square btn btn-primary" type="button">
                                                        <i class="la la-file-text-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn m-btn m-btn--square btn btn-success" type="button">
                                                        <i class="la la-paperclip">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn m-btn m-btn--square btn btn-warning" type="button">
                                                        <i class="la la-files-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn m-btn m-btn--square btn btn-info" type="button">
                                                        <i class="la la-scissors">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div class="input-group m-input-group--square">
                                                    <span class="input-group-addon" id="btnGroupAddon2">
                                                        @
                                                    </span>
                                                    <input aria-describedby="btnGroupAddon2" class="form-control" placeholder="Input group example" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Sizing
                                </h3>
                                <span class="m-section__sub">
                                    Instead of applying button sizing classes to every button in a group, just add
                                    <code>
                                        .btn-group-*
                                    </code>
                                    to each
                                    <code>
                                        .btn-group
                                    </code>
                                    , including each one when nesting multiple groups.
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Large button group" class="btn-group btn-group-lg" role="group">
                                                <button class="m-btn m-btn--square btn btn-outline-success" type="button">
                                                    Left
                                                </button>
                                                <button class="m-btn m-btn--square btn btn-outline-success" type="button">
                                                    Middle
                                                </button>
                                                <button class="m-btn m-btn--square btn btn-outline-success" type="button">
                                                    Right
                                                </button>
                                            </div>
                                            <div class="m--space-10">
                                            </div>
                                            <div aria-label="Default button group" class="btn-group" role="group">
                                                <button class="m-btn m-btn--square btn btn-outline-warning" type="button">
                                                    Left
                                                </button>
                                                <button class="m-btn m-btn--square btn btn-outline-warning" type="button">
                                                    Middle
                                                </button>
                                                <button class="m-btn m-btn--square btn btn-outline-warning" type="button">
                                                    Right
                                                </button>
                                            </div>
                                            <div class="m--space-10">
                                            </div>
                                            <div aria-label="Small button group" class="btn-group btn-group-sm" role="group">
                                                <button class="m-btn m-btn--square btn btn-outline-info" type="button">
                                                    Left
                                                </button>
                                                <button class="m-btn m-btn--square btn btn-outline-info" type="button">
                                                    Middle
                                                </button>
                                                <button class="m-btn m-btn--square btn btn-outline-info" type="button">
                                                    Right
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Nesting
                                </h3>
                                <span class="m-section__sub">
                                    Place a .btn-group within another
                                    <code>
                                        .btn-group
                                    </code>
                                    when you want dropdown menus mixed with a series of buttons.
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Button group with nested dropdown" class="btn-group" role="group">
                                                <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                    <i class="la la-file-text-o">
                                                    </i>
                                                </button>
                                                <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                    <i class="la la-floppy-o">
                                                    </i>
                                                </button>
                                                <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                    <i class="la la-header">
                                                    </i>
                                                </button>
                                                <button class="m-btn m-btn m-btn--square btn btn-secondary" type="button">
                                                    <i class="la la-italic">
                                                    </i>
                                                </button>
                                                <div class="btn-group" role="group">
                                                    <button aria-expanded="false" aria-haspopup="true" class="m-btn m-btn--square btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupDrop1" type="button">
                                                        Dropdown
                                                    </button>
                                                    <div aria-labelledby="btnGroupDrop1" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Vertical
                                </h3>
                                <span class="m-section__sub">
                                    Make a set of buttons appear vertically stacked rather than horizontally
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Vertical button group" class="btn-group-vertical" role="group">
                                                <button class="m-btn m-btn--square btn btn-secondary" type="button">
                                                    Button
                                                </button>
                                                <div class="btn-group" role="group">
                                                    <button aria-expanded="false" aria-haspopup="true" class="m-btn m-btn--square btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop1" type="button">
                                                        Dropdown
                                                    </button>
                                                    <div aria-labelledby="btnGroupVerticalDrop1" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                    </div>
                                                </div>
                                                <button class="m-btn m-btn--square btn btn-secondary" type="button">
                                                    Button
                                                </button>
                                                <div class="btn-group" role="group">
                                                    <button aria-expanded="false" aria-haspopup="true" class="m-btn m-btn--square btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop2" type="button">
                                                        Dropdown
                                                    </button>
                                                    <div aria-labelledby="btnGroupVerticalDrop2" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Square Buttons Tab-->
                    </div>
                    <!--end::Tab content-->
                </div>
            </div>
            <!--end::Portlet-->
        </div>
        <div class="col-md-6">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear">
                                </i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                Custom Buttons
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand m-tabs-line--right m-tabs-line-danger" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_buttons_pill" role="tab">
                                    Pill Style
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_buttons_air" role="tab">
                                    Air Style
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Pill Buttons Tab-->
                        <div class="tab-pane active" id="m_buttons_pill" role="tabpanel">
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Basic example
                                </h3>
                                <span class="m-section__sub">
                                    Basic button group examples
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group m-btn-group--pill" role="group">
                                                        <button class="m-btn btn btn-secondary" type="button">
                                                            Left
                                                        </button>
                                                        <button class="m-btn btn btn-secondary" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="m-btn btn btn-secondary" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group m-btn-group--pill" role="group">
                                                        <button class="m-btn btn btn-brand" type="button">
                                                            Left
                                                        </button>
                                                        <button class="m-btn btn btn-brand" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="m-btn btn btn-brand" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group m-btn-group--pill" role="group">
                                                        <button class="m-btn btn btn-primary" type="button">
                                                            Left
                                                        </button>
                                                        <button class="m-btn btn btn-primary" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="m-btn btn btn-primary" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group m-btn-group--pill" role="group">
                                                        <button class="m-btn btn btn-success" type="button">
                                                            Left
                                                        </button>
                                                        <button class="m-btn btn btn-success" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="m-btn btn btn-success" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Buttons toolbar
                                </h3>
                                <span class="m-section__sub">
                                    Combine sets of
                                    <code>
                                        m-btn-group m-btn-group--pill btn-group
                                    </code>
                                    into a
                                    <code>
                                        btn-toolbar
                                    </code>
                                    for more complex components.
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="..." class="btn-toolbar" role="toolbar">
                                                <div aria-label="..." class="m-btn-group m-btn-group--pill btn-group mr-2" role="group">
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-file-text-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-bold">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-paperclip">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div aria-label="..." class="m-btn-group m-btn-group--pill btn-group mr-2" role="group">
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-floppy-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-files-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-header">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div aria-label="..." class="m-btn-group m-btn-group--pill btn-group" role="group">
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-scissors">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-unlink">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-italic">
                                                        </i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Toolbar with button groups" class="btn-toolbar mb-3" role="toolbar">
                                                <div aria-label="First group" class="m-btn-group m-btn-group--pill btn-group mr-2" role="group">
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-file-text-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-floppy-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-header">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-italic">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="btnGroupAddon">
                                                        @
                                                    </span>
                                                    <input aria-describedby="btnGroupAddon" class="form-control" placeholder="Input group example" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                            <div aria-label="Toolbar with button groups" class="btn-toolbar justify-content-between" role="toolbar">
                                                <div aria-label="First group" class="m-btn-group m-btn-group--pill btn-group" role="group">
                                                    <button class="m-btn btn btn-primary" type="button">
                                                        <i class="la la-file-text-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-success" type="button">
                                                        <i class="la la-paperclip">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-warning" type="button">
                                                        <i class="la la-files-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-info" type="button">
                                                        <i class="la la-scissors">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="btnGroupAddon2">
                                                        @
                                                    </span>
                                                    <input aria-describedby="btnGroupAddon2" class="form-control" placeholder="Input group example" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Sizing
                                </h3>
                                <span class="m-section__sub">
                                    Instead of applying button sizing classes to every button in a group, just add
                                    <code>
                                        .m-btn-group m-btn-group--pill btn-group-*
                                    </code>
                                    to each
                                    <code>
                                        .m-btn-group m-btn-group--pill btn-group
                                    </code>
                                    , including each one when nesting multiple groups.
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Large button group" class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-lg" role="group">
                                                <button class="btn btn-outline-success" type="button">
                                                    Left
                                                </button>
                                                <button class="btn btn-outline-success" type="button">
                                                    Middle
                                                </button>
                                                <button class="btn btn-outline-success" type="button">
                                                    Right
                                                </button>
                                            </div>
                                            <div class="m--space-10">
                                            </div>
                                            <div aria-label="Default button group" class="m-btn-group m-btn-group--pill btn-group" role="group">
                                                <button class="btn btn-outline-warning" type="button">
                                                    Left
                                                </button>
                                                <button class="btn btn-outline-warning" type="button">
                                                    Middle
                                                </button>
                                                <button class="btn btn-outline-warning" type="button">
                                                    Right
                                                </button>
                                            </div>
                                            <div class="m--space-10">
                                            </div>
                                            <div aria-label="Small button group" class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-sm" role="group">
                                                <button class="btn btn-outline-info" type="button">
                                                    Left
                                                </button>
                                                <button class="btn btn-outline-info" type="button">
                                                    Middle
                                                </button>
                                                <button class="btn btn-outline-info" type="button">
                                                    Right
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Nesting
                                </h3>
                                <span class="m-section__sub">
                                    Place a .m-btn-group m-btn-group--pill btn-group within another
                                    <code>
                                        .m-btn-group m-btn-group--pill btn-group
                                    </code>
                                    when you want dropdown menus mixed with a series of buttons.
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Button group with nested dropdown" class="m-btn-group m-btn-group--pill btn-group" role="group">
                                                <button class="m-btn btn btn-secondary" type="button">
                                                    <i class="la la-file-text-o">
                                                    </i>
                                                </button>
                                                <button class="m-btn btn btn-secondary" type="button">
                                                    <i class="la la-floppy-o">
                                                    </i>
                                                </button>
                                                <button class="m-btn btn btn-secondary" type="button">
                                                    <i class="la la-header">
                                                    </i>
                                                </button>
                                                <button class="m-btn btn btn-secondary" type="button">
                                                    <i class="la la-italic">
                                                    </i>
                                                </button>
                                                <div class="m-btn-group btn-group" role="group">
                                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary m-btn m-btn--pill-last dropdown-toggle" data-toggle="dropdown" id="btnGroupDrop1" type="button">
                                                        Dropdown1
                                                    </button>
                                                    <div aria-labelledby="btnGroupDrop1" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Pill Buttons Tab-->
                        <!--begin::Air Buttons Tab-->
                        <div class="tab-pane" id="m_buttons_air" role="tabpanel">
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Basic example
                                </h3>
                                <span class="m-section__sub">
                                    Basic button group examples
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group m-btn-group--pill m-btn-group--air" role="group">
                                                        <button class="m-btn btn btn-secondary" type="button">
                                                            Left
                                                        </button>
                                                        <button class="m-btn btn btn-secondary" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="m-btn btn btn-secondary" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group m-btn-group--pill m-btn-group--air" role="group">
                                                        <button class="m-btn btn btn-brand" type="button">
                                                            Left
                                                        </button>
                                                        <button class="m-btn btn btn-brand" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="m-btn btn btn-brand" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group m-btn-group--pill m-btn-group--air" role="group">
                                                        <button class="m-btn btn btn-primary" type="button">
                                                            Left
                                                        </button>
                                                        <button class="m-btn btn btn-primary" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="m-btn btn btn-primary" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div aria-label="..." class="btn-group m-btn-group m-btn-group--pill m-btn-group--air" role="group">
                                                        <button class="m-btn btn btn-success" type="button">
                                                            Left
                                                        </button>
                                                        <button class="m-btn btn btn-success" type="button">
                                                            Middle
                                                        </button>
                                                        <button class="m-btn btn btn-success" type="button">
                                                            Right
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Buttons toolbar
                                </h3>
                                <span class="m-section__sub">
                                    Combine sets of
                                    <code>
                                        btn-group m-btn-group m-btn-group--air
                                    </code>
                                    into a
                                    <code>
                                        btn-toolbar
                                    </code>
                                    for more complex components.
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="..." class="btn-toolbar" role="toolbar">
                                                <div aria-label="..." class="btn-group m-btn-group m-btn-group--air mr-2" role="group">
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-file-text-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-bold">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-paperclip">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div aria-label="..." class="btn-group m-btn-group m-btn-group--air mr-2" role="group">
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-floppy-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-files-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-header">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div aria-label="..." class="btn-group m-btn-group m-btn-group--air" role="group">
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-scissors">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-unlink">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-italic">
                                                        </i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Toolbar with button groups" class="btn-toolbar mb-3" role="toolbar">
                                                <div aria-label="First group" class="btn-group m-btn-group m-btn-group--air mr-2" role="group">
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-file-text-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-floppy-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-header">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-secondary" type="button">
                                                        <i class="la la-italic">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="btnGroupAddon">
                                                        @
                                                    </span>
                                                    <input aria-describedby="btnGroupAddon" class="form-control" placeholder="Input group example" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                            <div aria-label="Toolbar with button groups" class="btn-toolbar justify-content-between" role="toolbar">
                                                <div aria-label="First group" class="btn-group m-btn-group m-btn-group--air" role="group">
                                                    <button class="m-btn btn btn-primary" type="button">
                                                        <i class="la la-file-text-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-success" type="button">
                                                        <i class="la la-paperclip">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-warning" type="button">
                                                        <i class="la la-files-o">
                                                        </i>
                                                    </button>
                                                    <button class="m-btn btn btn-info" type="button">
                                                        <i class="la la-scissors">
                                                        </i>
                                                    </button>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="btnGroupAddon2">
                                                        @
                                                    </span>
                                                    <input aria-describedby="btnGroupAddon2" class="form-control" placeholder="Input group example" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Sizing
                                </h3>
                                <span class="m-section__sub">
                                    Instead of applying button sizing classes to every button in a group, just add
                                    <code>
                                        .btn-group m-btn-group m-btn-group--air-*
                                    </code>
                                    to each
                                    <code>
                                        .btn-group m-btn-group m-btn-group--air
                                    </code>
                                    , including each one when nesting multiple groups.
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Large button group" class="btn-group m-btn-group m-btn-group--air btn-group m-btn-group m-btn-group--air-lg" role="group">
                                                <button class="btn btn-outline-success" type="button">
                                                    Left
                                                </button>
                                                <button class="btn btn-outline-success" type="button">
                                                    Middle
                                                </button>
                                                <button class="btn btn-outline-success" type="button">
                                                    Right
                                                </button>
                                            </div>
                                            <div class="m--space-10">
                                            </div>
                                            <div aria-label="Default button group" class="btn-group m-btn-group m-btn-group--air" role="group">
                                                <button class="btn btn-outline-warning" type="button">
                                                    Left
                                                </button>
                                                <button class="btn btn-outline-warning" type="button">
                                                    Middle
                                                </button>
                                                <button class="btn btn-outline-warning" type="button">
                                                    Right
                                                </button>
                                            </div>
                                            <div class="m--space-10">
                                            </div>
                                            <div aria-label="Small button group" class="btn-group m-btn-group m-btn-group--air btn-group m-btn-group m-btn-group--air-sm" role="group">
                                                <button class="btn btn-outline-info" type="button">
                                                    Left
                                                </button>
                                                <button class="btn btn-outline-info" type="button">
                                                    Middle
                                                </button>
                                                <button class="btn btn-outline-info" type="button">
                                                    Right
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Nesting
                                </h3>
                                <span class="m-section__sub">
                                    Place a .btn-group m-btn-group m-btn-group--air within another
                                    <code>
                                        .btn-group m-btn-group m-btn-group--air
                                    </code>
                                    when you want dropdown menus mixed with a series of buttons.
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Button group with nested dropdown" class="btn-group m-btn-group m-btn-group--air" role="group">
                                                <button class="m-btn btn btn-secondary" type="button">
                                                    <i class="la la-file-text-o">
                                                    </i>
                                                </button>
                                                <button class="m-btn btn btn-secondary" type="button">
                                                    <i class="la la-floppy-o">
                                                    </i>
                                                </button>
                                                <button class="m-btn btn btn-secondary" type="button">
                                                    <i class="la la-header">
                                                    </i>
                                                </button>
                                                <button class="m-btn btn btn-secondary" type="button">
                                                    <i class="la la-italic">
                                                    </i>
                                                </button>
                                                <div class="btn-group m-btn-group " role="group">
                                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupDrop1" type="button">
                                                        Dropdown
                                                    </button>
                                                    <div aria-labelledby="btnGroupDrop1" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="m-section">
                                <h3 class="m-section__heading">
                                    Vertical
                                </h3>
                                <span class="m-section__sub">
                                    Make a set of buttons appear vertically stacked rather than horizontally
                                </span>
                                <div class="m-section__content">
                                    <!--begin::Demo-->
                                    <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                        <div class="m-demo__preview">
                                            <div aria-label="Vertical button group" class="btn-group btn-group-vertical m-btn-group m-btn-group--air" role="group">
                                                <button class="btn btn-secondary" type="button">
                                                    Button
                                                </button>
                                                <div class="btn-group" role="group">
                                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop1" type="button">
                                                        Dropdown
                                                    </button>
                                                    <div aria-labelledby="btnGroupVerticalDrop1" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                    </div>
                                                </div>
                                                <button class="btn btn-secondary" type="button">
                                                    Button
                                                </button>
                                                <div class="btn-group" role="group">
                                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop2" type="button">
                                                        Dropdown
                                                    </button>
                                                    <div aria-labelledby="btnGroupVerticalDrop2" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Dropdown link
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Air Buttons Tab-->
                    </div>
                    <!--end::Tab content-->
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>

@stop

@section('link-js')

@stop