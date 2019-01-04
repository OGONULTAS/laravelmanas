@extends('layouts._default')
@section('title-page', '警告框')

@section('sub_header_title1', '基础Base')

@section('link-css')

@stop

@section('content')

    <div class="row">
        <div class="col-xl-6">
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                基础的上下文Alerts
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section__content">
                        <div class="alert m-alert--default" role="alert">
                            <strong>
                                Hello World!
                            </strong>
                            This is default alert message box style.
                        </div>
                        <div class="alert alert-success" role="alert">
                            <strong>
                                Well done!
                            </strong>
                            You successfully read this important alert message.
                        </div>
                        <div class="alert alert-info" role="alert">
                            <strong>
                                Heads up!
                            </strong>
                            This alert needs your attention, but it's not super important.
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <strong>
                                Warning!
                            </strong>
                            Better check yourself, you're not looking too good.
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <strong>
                                Oh snap!
                            </strong>
                            Change a few things up and try submitting again.
                        </div>
                        <div class="alert alert-brand" role="alert">
                            <strong>
                                Brand!
                            </strong>
                            You successfully read this important alert message.
                        </div>
                        <div class="alert alert-primary" role="alert">
                            <strong>
                                Heads up!
                            </strong>
                            This alert needs your attention, but it's not super important.
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
                                可主动关闭的Alerts
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section__content">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            </button>
                            <strong>
                                Well done!
                            </strong>
                            You successfully read this important alert message.
                        </div>
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            </button>
                            <strong>
                                Heads up!
                            </strong>
                            This alert needs your attention, but it's not super important.
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            </button>
                            <strong>
                                Warning!
                            </strong>
                            Better check yourself, you're not looking too good.
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            </button>
                            <strong>
                                Oh snap!
                            </strong>
                            Change a few things up and try submitting again.
                        </div>
                        <div class="alert alert-brand alert-dismissible fade show" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            </button>
                            <strong>
                                Brand!
                            </strong>
                            You successfully read this important alert message.
                        </div>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            </button>
                            <strong>
                                Heads up!
                            </strong>
                            This alert needs your attention, but it's not super important.
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
                                带图标Icon和按钮Button
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-alert m-alert--icon m-alert--outline alert alert-success alert-dismissible fade show" role="alert">
                        <div class="m-alert__icon">
                            <i class="la la-warning">
                            </i>
                        </div>
                        <div class="m-alert__text">
                            <strong>
                                Well done!
                            </strong>
                            You successfully read this message.
                        </div>
                        <div class="m-alert__close">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            </button>
                        </div>
                    </div>
                    <div class="m-alert m-alert--icon m-alert--outline alert alert-primary" role="alert">
                        <div class="m-alert__icon">
                            <i class="la la-warning">
                            </i>
                        </div>
                        <div class="m-alert__text">
                            <strong>
                                Well done!
                            </strong>
                            You successfully read this message.
                        </div>
                        <div class="m-alert__actions" style="width: 200px;">
                            <button class="btn btn-brand btn-sm m-btn m-btn--pill m-btn--wide" type="button">
                                Fix
                            </button>
                            <button aria-label="Close" class="btn btn-danger btn-sm m-btn m-btn--pill m-btn--wide" data-dismiss="alert" type="button">
                                Dismiss
                            </button>
                        </div>
                    </div>
                    <div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-brand alert-dismissible fade show" role="alert">
                        <div class="m-alert__icon">
                            <i class="flaticon-exclamation-1">
                            </i>
                            <span>
                            </span>
                        </div>
                        <div class="m-alert__text">
                            <strong>
                                Well done!
                            </strong>
                            You successfully read this message.
                        </div>
                        <div class="m-alert__close">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            </button>
                        </div>
                    </div>
                    <div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-danger alert-dismissible fade show" role="alert">
                        <div class="m-alert__icon">
                            <i class="flaticon-exclamation-1">
                            </i>
                            <span>
                            </span>
                        </div>
                        <div class="m-alert__text">
                            <strong>
                                Well done!
                            </strong>
                            You successfully read this message.
                        </div>
                        <div class="m-alert__close">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            </button>
                        </div>
                    </div>
                    <div class="m-alert m-alert--icon alert alert-accent" role="alert">
                        <div class="m-alert__icon">
                            <i class="la la-warning">
                            </i>
                        </div>
                        <div class="m-alert__text">
                            <strong>
                                Well done!
                            </strong>
                            Dismiss will remove it permanently!
                        </div>
                        <div class="m-alert__close">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            </button>
                        </div>
                    </div>
                    <div class="m-alert m-alert--icon alert alert-warning" role="alert">
                        <div class="m-alert__icon">
                            <i class="la la-warning">
                            </i>
                        </div>
                        <div class="m-alert__text">
                            <strong>
                                Well done! Dismiss will just hide me, i will not be removed!
                            </strong>
                        </div>
                        <div class="m-alert__close">
                            <button aria-label="Hide" class="close" data-close="alert" type="button">
                            </button>
                        </div>
                    </div>
                    <div class="m-alert m-alert--icon alert alert-primary" role="alert">
                        <div class="m-alert__icon">
                            <i class="la la-warning">
                            </i>
                        </div>
                        <div class="m-alert__text">
                            <strong>
                                Well done!
                            </strong>
                            You successfully read this message.
                        </div>
                        <div class="m-alert__actions" style="width: 160px;">
                            <button class="btn btn-warning btn-sm m-btn m-btn--pill m-btn--wide" type="button">
                                Fix
                            </button>
                        </div>
                    </div>
                    <div class="m-alert m-alert--icon alert alert-danger" role="alert">
                        <div class="m-alert__icon">
                            <i class="flaticon-danger">
                            </i>
                        </div>
                        <div class="m-alert__text">
                            <strong>
                                Well done!
                            </strong>
                            You successfully read this message.
                        </div>
                        <div class="m-alert__actions" style="width: 220px;">
                            <button aria-label="Close" class="btn btn-outline-light btn-sm m-btn m-btn--hover-brand" data-dismiss="alert1" type="button">
                                Dismiss
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
        <div class="col-xl-6">
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Alert Styles
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            轮廓风格
                        </h3>
                        <div class="m-section__content">
                            <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Well done!
                                </strong>
                                You successfully read this important alert message.
                            </div>
                            <div class="m-alert m-alert--outline alert alert-info alert-dismissible fade show" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Heads up!
                                </strong>
                                This alert needs your attention, but it's not super important.
                            </div>
                            <div class="m-alert m-alert--outline alert alert-warning alert-dismissible fade show" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Warning!
                                </strong>
                                Better check yourself, you're not looking too good.
                            </div>
                            <div class="m-alert m-alert--outline alert alert-accent alert-dismissible fade show" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Warning!
                                </strong>
                                Better check yourself, you're not looking too good.
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            2倍粗的外框
                        </h3>
                        <div class="m-section__content">
                            <div class="m-alert m-alert--outline m-alert--outline-2x alert alert-success alert-dismissible fade show" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Well done!
                                </strong>
                                You successfully read this important alert message.
                            </div>
                            <div class="m-alert m-alert--outline m-alert--outline-2x alert alert-info alert-dismissible fade show" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Heads up!
                                </strong>
                                This alert needs your attention, but it's not super important.
                            </div>
                            <div class="m-alert m-alert--outline m-alert--outline-2x alert alert-warning alert-dismissible fade show" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Warning!
                                </strong>
                                Better check yourself, you're not looking too good.
                            </div>
                            <div class="m-alert m-alert--outline m-alert--outline-2x alert alert-accent alert-dismissible fade show" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Warning!
                                </strong>
                                Better check yourself, you're not looking too good.
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            方形
                        </h3>
                        <div class="m-section__content">
                            <div class="m-alert m-alert--square alert alert-brand alert-dismissible fade show" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Well done!
                                </strong>
                                You successfully read this important alert message.
                            </div>
                            <div class="m-alert m-alert--outline m-alert--square m-alert--outline-2x alert alert-success alert-dismissible fade show" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Well done!
                                </strong>
                                You successfully read this important alert message.
                            </div>
                            <div class="m-alert m-alert--outline m-alert--square m-alert--outline-2x alert alert-accent alert-dismissible fade show" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Well done!
                                </strong>
                                You successfully read this important alert message.
                            </div>
                            <div class="m-alert m-alert--outline m-alert--square alert alert-info alert-dismissible fade show" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Heads up!
                                </strong>
                                This alert needs your attention, but it's not super important.
                            </div>
                            <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-success alert-dismissible fade show" role="alert">
                                <div class="m-alert__icon">
                                    <i class="la la-warning">
                                    </i>
                                </div>
                                <div class="m-alert__text">
                                    <strong>
                                        Well done!
                                    </strong>
                                    You successfully read this message.
                                </div>
                                <div class="m-alert__close">
                                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    </button>
                                </div>
                            </div>
                            <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible fade show" role="alert">
                                <div class="m-alert__icon">
                                    <i class="la la-warning">
                                    </i>
                                </div>
                                <div class="m-alert__text">
                                    <strong>
                                        Well done!
                                    </strong>
                                    You successfully read this message.
                                </div>
                                <div class="m-alert__close">
                                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            Air Style
                        </h3>
                        <div class="m-section__content">
                            <div class="alert alert-dismissible fade show m-alert m-alert--outline m-alert--air" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Heads up!
                                </strong>
                                This alert needs your attention, but it's not super important.
                            </div>
                            <div class="alert alert-brand alert-dismissible fade show m-alert m-alert--square m-alert--air" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Well done!
                                </strong>
                                You successfully read this important alert message.
                            </div>
                            <div class="alert alert-accent alert-dismissible fade show m-alert m-alert--square m-alert--air" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Well done!
                                </strong>
                                You successfully read this important alert message.
                            </div>
                            <div class="alert alert-danger alert-dismissible fade show m-alert m-alert--air" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Well done!
                                </strong>
                                You successfully read this important alert message.
                            </div>
                            <div class="alert alert-warning alert-dismissible fade show m-alert m-alert--air m-alert--outline m-alert--outline-2x" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Well done!
                                </strong>
                                You successfully read this important alert message.
                            </div>
                            <div class="alert alert-metal alert-dismissible fade show m-alert m-alert--air m-alert--outline m-alert--outline-2x" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Well done!
                                </strong>
                                You successfully read this important alert message.
                            </div>
                            <div class="alert alert-primary alert-dismissible fade show m-alert m-alert--air m-alert--outline" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                </button>
                                <strong>
                                    Well done!
                                </strong>
                                You successfully read this important alert message.
                            </div>
                            <div class="m-alert m-alert--icon m-alert--air alert alert-success alert-dismissible fade show" role="alert">
                                <div class="m-alert__icon">
                                    <i class="la la-warning">
                                    </i>
                                </div>
                                <div class="m-alert__text">
                                    <strong>
                                        Well done!
                                    </strong>
                                    You successfully read this message.
                                </div>
                                <div class="m-alert__close">
                                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    </button>
                                </div>
                            </div>
                            <div class="m-alert m-alert--icon m-alert--air alert alert-dismissible fade show" role="alert">
                                <div class="m-alert__icon">
                                    <i class="la la-warning">
                                    </i>
                                </div>
                                <div class="m-alert__text">
                                    <strong>
                                        Well done!
                                    </strong>
                                    You successfully read this message.
                                </div>
                                <div class="m-alert__close">
                                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    </button>
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