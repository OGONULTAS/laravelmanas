@extends('layouts._default')
@section('title-page', '线型')

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
                                Basic Examples
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Solid style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-primary m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-secondary m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Secondary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-success m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Solid style wide buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-success m-btn m-btn--icon m-btn--wide" href="#">
                                        <span>
                                            <i class="la la-heartbeat">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-secondary m-btn m-btn--icon m-btn--wide" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Secondary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon m-btn--wide" href="#">
                                        <span>
                                            <i class="la la-folder">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon m-btn--wide" href="#">
                                        <span>
                                            <i class="la la-map-marker">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon m-btn--wide" href="#">
                                        <span>
                                            <i class="la la-microphone">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-primary m-btn m-btn--icon m-btn--wide" href="#">
                                        <span>
                                            <i class="la la-history">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon m-btn--wide" href="#">
                                        <span>
                                            <i class="la la-power-off">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon m-btn--wide" href="#">
                                        <span>
                                            <i class="la la-sort">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon m-btn--wide" href="#">
                                        <span>
                                            <i class="la la-tint">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Icon only without label
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-success m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-secondary m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-primary m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
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
                                Outline Style Buttons
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Outline style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-outline-primary m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Outline 2x style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Icon only without label
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--icon-only" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
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
                                Pill Style Buttons
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Solid & pill style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-primary m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-secondary m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Secondary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-success m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Outline & pill style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Outline 2x & pill style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--outline-2x m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--outline-2x m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--outline-2x m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--outline-2x m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--outline-2x m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--outline-2x m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--outline-2x m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--outline-2x m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Icon only without label
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-success m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-primary m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
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
                                Air Style Buttons
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Solid, pill & air style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-primary m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-secondary m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Secondary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-success m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Outline, pill & air style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Outline 2x, pill & air style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Icon only without label1
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-success m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-primary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
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
                                Metronic Custom Buttons
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Solid style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-primary m-btn m-btn--custom m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-secondary m-btn m-btn--custom m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Secondary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-success m-btn m-btn--custom m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--custom m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--custom m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--custom m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--custom m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--custom m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--custom m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Solid, pill & air style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-secondary m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Secondary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Outline, pill & air style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-outline-primary m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Outline 2x, pill & air style buttons with icons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-outline-primary m-btn m-btn--custom m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success m-btn m-btn--custom m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--custom m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--custom m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--custom m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-diamond">
                                            </i>
                                            <span>
                                                Info
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--custom m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--custom m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--custom m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <span>
                                            <i class="la la-file-excel-o">
                                            </i>
                                            <span>
                                                Metal
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Icon only without label
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-success m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-primary m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-success m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-primary m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
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
                                Button Sizing
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Small size buttons:
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-primary btn-sm m-btn m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-secondary btn-sm m-btn m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Secondary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-success btn-sm m-btn m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-warning m-btn btn-sm m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-danger m-btn btn-sm m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-brand m-btn btn-sm m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-primary btn-sm m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent btn-sm m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success btn-sm m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning btn-sm m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn btn-sm m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn btn-sm m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent btn-sm m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn btn-sm m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn btn-sm m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-primary btn-sm m-btn m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-secondary btn-sm m-btn m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Secondary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-success btn-sm m-btn m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-warning m-btn btn-sm m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-danger m-btn btn-sm m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-brand m-btn btn-sm m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent btn-sm m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn btn-sm m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn btn-sm m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-success m-btn m-btn--icon btn-sm m-btn--icon-only" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon btn-sm m-btn--icon-only" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon btn-sm m-btn--icon-only" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon btn-sm m-btn--icon-only" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon btn-sm m-btn--icon-only" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon btn-sm m-btn--icon-only" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon btn-sm m-btn--icon-only" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-success m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-success m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-primary m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-success m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Large size buttons:
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn btn-primary btn-lg m-btn m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-secondary btn-lg m-btn m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Secondary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-success btn-lg m-btn m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-warning m-btn btn-lg m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-danger m-btn btn-lg m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-brand m-btn btn-lg m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-primary btn-lg m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent btn-lg m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success btn-lg m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning btn-lg m-btn m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn btn-lg m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn btn-lg m-btn--icon" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-primary btn-lg m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent btn-lg m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success btn-lg m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning btn-lg m-btn m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn btn-lg m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn btn-lg m-btn--icon m-btn--outline-2x" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-primary btn-lg m-btn m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-secondary btn-lg m-btn m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Secondary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-success btn-lg m-btn m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-warning m-btn btn-lg m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-danger m-btn btn-lg m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-brand m-btn btn-lg m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-primary btn-lg m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Primary
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-accent btn-lg m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-archive">
                                            </i>
                                            <span>
                                                Accent
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-success btn-lg m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-calendar-check-o">
                                            </i>
                                            <span>
                                                Success
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-warning btn-lg m-btn m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-cloud-download">
                                            </i>
                                            <span>
                                                Warning
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn btn-lg m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-warning">
                                            </i>
                                            <span>
                                                Danger
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn btn-lg m-btn--icon m-btn--pill" href="#">
                                        <span>
                                            <i class="la la-envelope-o">
                                            </i>
                                            <span>
                                                Brand
                                            </span>
                                        </span>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-success m-btn m-btn--icon btn-lg m-btn--icon-only" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon btn-lg m-btn--icon-only" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon btn-lg m-btn--icon-only" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon btn-lg m-btn--icon-only" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon btn-lg m-btn--icon-only" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-primary m-btn m-btn--icon btn-lg m-btn--icon-only" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon btn-lg m-btn--icon-only" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon btn-lg m-btn--icon-only" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon btn-lg m-btn--icon-only" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-success m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-primary m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-outline-success m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-warning m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-info m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-danger m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-primary m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-brand m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-accent m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-outline-metal m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
                                    <div class="m-separator m-separator--dashed m--margin-top-5">
                                    </div>
                                    <a class="btn btn-success m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-heartbeat">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-archive">
                                        </i>
                                    </a>
                                    <a class="btn btn-warning m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-map-marker">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-microphone">
                                        </i>
                                    </a>
                                    <a class="btn btn-primary m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-history">
                                        </i>
                                    </a>
                                    <a class="btn btn-brand m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-power-off">
                                        </i>
                                    </a>
                                    <a class="btn btn-accent m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-sort">
                                        </i>
                                    </a>
                                    <a class="btn btn-metal m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air" href="#">
                                        <i class="la la-tint">
                                        </i>
                                    </a>
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