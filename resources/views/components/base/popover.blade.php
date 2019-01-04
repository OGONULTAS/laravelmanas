@extends('layouts._default')
@section('title-page', '弹出框')

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
                            Click below button to toggle popover:
                        </span>
                        <div class="m-section__content">
                            <button class="btn btn-danger" data-content="And here's some amazing content. It's very engaging. Right?" data-toggle="m-popover" title="Popover title" type="button">
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
                            不同方向
                        </h3>
                        <span class="m-section__sub">
                            Four direction options are available: top, right, bottom, and left aligned:
                        </span>
                        <div class="m-section__content m-demo-buttons">
                            <button class="btn btn-brand" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-toggle="m-popover" type="button">
                                Popover on top
                            </button>
                            <button class="btn btn-primary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" data-toggle="m-popover" type="button">
                                Popover on right
                            </button>
                            <button class="btn btn-warning" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-toggle="m-popover" type="button">
                                Popover on bottom
                            </button>
                            <button class="btn btn-success" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="left" data-toggle="m-popover" type="button">
                                Popover on left
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
                            Use the focus trigger to dismiss popovers on the next click that the user makes.
                        </span>
                        <div class="m-section__content">
                            <a class="btn btn-success" data-content="And here's some amazing content. It's very engaging. Right?" data-toggle="m-popover" data-trigger="focus" role="button" tabindex="0" title="Dismissible popover">
                                Dismissible popover
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
                                高级示例
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
                            Insert HTML into the popover:
                        </span>
                        <div class="m-section__content">
                            <button class="btn btn-primary" data-content="And here's some amazing <b>HTML</b> content. It's very <code>engaging</code>. Right?" data-html="true" data-toggle="m-popover" data-trigger="focus" title="Popover title" type="button">
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
                            偏移
                        </h3>
                        <span class="m-section__sub">
                            Offset of the popover relative to its target. For more information refer to
                            <a class="m-link" href="http://tether.io/#offset" target="_blank">
                                Tether's offset docs.
                            </a>
                        </span>
                        <div class="m-section__content">
                            <button class="btn btn-brand" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-offset="20px 20px" data-placement="top" data-toggle="m-popover" data-trigger="focus" type="button">
                                Example 1
                            </button>
                            <button class="btn btn-success" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-offset="-20px -20px" data-placement="top" data-toggle="m-popover" data-trigger="focus" type="button">
                                Example 2
                            </button>
                            <button class="btn btn-danger" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-offset="60px 0px" data-placement="top" data-toggle="m-popover" data-trigger="focus" type="button">
                                Example 3
                            </button>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            皮肤
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
                            parameters to set popover skin. Default skin is light.
                        </span>
                        <div class="m-section__content">
                            <button class="btn btn-brand" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-toggle="m-popover" data-trigger="focus" title="Default light skin" type="button">
                                Light skin
                            </button>
                            <button class="btn btn-success" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-skin="dark" data-toggle="m-popover" data-trigger1="focus" title="Dark skin" type="button">
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