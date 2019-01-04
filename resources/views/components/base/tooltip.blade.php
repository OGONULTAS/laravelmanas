@extends('layouts._default')
@section('title-page', '工具提示')

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
                                基础示例
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            基本用法
                        </h3>
                        <span class="m-section__sub">
                            Click below button to toggle tooltip:
                        </span>
                        <div class="m-section__content">
                            <button class="btn btn-danger" data-toggle="m-tooltip" title="Tooltip title" type="button">
                                Click me
                            </button>
                        </div>
                    </div>
                    <!--end::Section-->
                    <div class="m-separator m-separator--dashed">
                    </div>
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            Directions
                        </h3>
                        <span class="m-section__sub">
                            Four direction options are available: top, right, bottom, and left aligned:
                        </span>
                        <div class="m-section__content">
                            <button class="btn btn-brand" data-container="body" data-placement="top" data-toggle="m-tooltip" title="Tooltip title" type="button">
                                Tooltip on top
                            </button>
                            <div class="m--space-10">
                            </div>
                            <button class="btn btn-primary" data-container="body" data-placement="right" data-toggle="m-tooltip" title="Tooltip title" type="button">
                                Tooltip on right
                            </button>
                            <div class="m--space-10">
                            </div>
                            <button class="btn btn-warning" data-container="body" data-placement="bottom" data-toggle="m-tooltip" title="Tooltip title" type="button">
                                Tooltip on bottom
                            </button>
                            <div class="m--space-10">
                            </div>
                            <button class="btn btn-success" data-container="body" data-placement="left" data-toggle="m-tooltip" title="Tooltip title" type="button">
                                Tooltip on left
                            </button>
                        </div>
                    </div>
                    <!--end::Section-->
                    <div class="m-separator m-separator--dashed">
                    </div>
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            Dismiss on next click
                        </h3>
                        <span class="m-section__sub">
                            Use the focus trigger to dismiss tooltips on the next click that the user makes.
                        </span>
                        <div class="m-section__content">
                            <a class="btn btn-success" data-content="And here's some amazing content. It's very engaging. Right?" data-toggle="m-tooltip" data-trigger="focus" role="button" tabindex="0" title="Dismissible tooltip">
                                Dismissible tooltip
                            </a>
                        </div>
                    </div>
                    <!--end::Section-->
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
                                Advanced Examples
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            HTML Content
                        </h3>
                        <span class="m-section__sub">
                            Insert HTML into the tooltip:
                        </span>
                        <div class="m-section__content">
                            <button class="btn btn-primary" data-content="And here's some amazing <b>HTML</b> content. It's very <code>engaging</code>. Right?" data-html="true" data-toggle="m-tooltip" title="Tooltip <b>with</b> <code>HTML</code>" type="button">
                                Click me
                            </button>
                        </div>
                    </div>
                    <!--end::Section-->
                    <div class="m-separator m-separator--dashed">
                    </div>
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            Offset
                        </h3>
                        <span class="m-section__sub">
                            Offset of the tooltip relative to its target. For more information refer to
                            <a class="m-link" href="http://tether.io/#offset" target="_blank">
                                Tether's offset docs.
                            </a>
                        </span>
                        <div class="m-section__content">
                            <button class="btn btn-brand" data-offset="20px 20px" data-placement="top" data-toggle="m-tooltip" title="Tooltip title" type="button">
                                Example 1
                            </button>
                            <button class="btn btn-success" data-offset="-20px -20px" data-placement="top" data-toggle="m-tooltip" title="Tooltip title" type="button">
                                Example 2
                            </button>
                            <button class="btn btn-danger" data-offset="60px 0px" data-placement="top" data-toggle="m-tooltip" title="Tooltip title" type="button">
                                Example 3
                            </button>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            Skin
                        </h3>
                        <span class="m-section__sub">
                            Use
                            <code>
                                data-skin="light"
                            </code>
                            or
                            <code>
                                data-skin="dark"
                            </code>
                            parameters to set tooltip skin. Default skin is light.
                        </span>
                        <div class="m-section__content">
                            <button class="btn btn-brand" data-placement="top" data-toggle="m-tooltip" title="Default light skin" type="button">
                                Light skin
                            </button>
                            <button class="btn btn-success" data-placement="top" data-skin="dark" data-toggle="m-tooltip" title="Dark skin" type="button">
                                Dark skin
                            </button>
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