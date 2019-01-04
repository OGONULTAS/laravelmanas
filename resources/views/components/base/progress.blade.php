@extends('layouts._default')
@section('title-page', '进度条')

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
                                基础进度条
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section m-section--last">
                        <span class="m-section__sub">
                            Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.
                        </span>
                        <div class="m-section__content">
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar" role="progressbar">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar" role="progressbar" style="width: 25%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar" role="progressbar" style="width: 50%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar" role="progressbar" style="width: 75%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="progress-bar" role="progressbar" style="width: 100%">
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
                                这里自定义
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                尺寸
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            不同尺寸
                        </h3>
                        <span class="m-section__sub">
                            使用类
                            <code>
                                .m-progress--sm
                            </code>
                            使进度条变小
                        </span>
                        <div class="m-section__content">
                            <div class="progress m-progress--sm">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar m--bg-primary" role="progressbar" style="width: 25%;">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress m-progress--sm">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar m--bg-accent" role="progressbar" style="width: 50%;">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress m-progress--sm">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar m--bg-warning" role="progressbar" style="width: 75%;">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress m-progress--sm">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="progress-bar m--bg-danger" role="progressbar" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                        <div class="m-separator m-separator--dashed">
                        </div>
                        <span class="m-section__sub">
                            使用类
                            <code>
                                .m-progress--lg
                            </code>
                            使进度条变得大些
                        </span>
                        <div class="m-section__content">
                            <div class="progress m-progress--lg">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar m--bg-primary" role="progressbar" style="width: 25%;">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress m-progress--lg">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar m--bg-accent" role="progressbar" style="width: 50%;">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress m-progress--lg">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar m--bg-warning" role="progressbar" style="width: 75%;">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress m-progress--lg">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="progress-bar m--bg-danger" role="progressbar" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                        <div class="m-separator m-separator--dashed">
                        </div>
                        <h3 class="m-section__heading">
                            自定义高度
                        </h3>
                        <span class="m-section__sub">
                            在
                            <code>
                                .progress-bar
                            </code>
                            类上设置一个高度height，如果改变这个值，
                            <code>
                                .progress
                            </code>
                            会自动调整大小
                        </span>
                        <div class="m-section__content">
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar m--bg-info" role="progressbar" style="width: 65%; height: 1px;">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar m--bg-success" role="progressbar" style="width: 65%; height: 5px;">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar m--bg-accent" role="progressbar" style="width: 65%; height: 10px;">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar m--bg-brand" role="progressbar" style="width: 65%; height: 20px;">
                                </div>
                            </div>
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
                                进度条状态
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <h3 class="m-section__heading">
                            Backgrounds
                        </h3>
                        <span class="m-section__sub">
                            Use state utility classes to change the appearance of individual progress bars.
                        </span>
                        <div class="m-section__content">
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar bg-success" role="progressbar" style="width: 25%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info" role="progressbar" style="width: 50%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar bg-warning" role="progressbar" style="width: 75%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="progress-bar bg-danger" role="progressbar" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section m-section--last">
                        <h3 class="m-section__heading">
                            Multiple bars
                        </h3>
                        <span class="m-section__sub">
                            Include multiple progress bars in a progress component if you need.
                        </span>
                        <div class="m-section__content">
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar" role="progressbar" style="width: 15%">
                                </div>
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" class="progress-bar bg-success" role="progressbar" style="width: 30%">
                                </div>
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar bg-info" role="progressbar" style="width: 20%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar" role="progressbar" style="width: 35%">
                                </div>
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" class="progress-bar bg-warning" role="progressbar" style="width: 10%">
                                </div>
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar bg-danger" role="progressbar" style="width: 40%">
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
                                条纹
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section ">
                        <span class="m-section__sub">
                            Add
                            <code>
                                .progress-bar-striped
                            </code>
                            to any
                            <code>
                                .progress-bar
                            </code>
                            to apply a stripe via CSS gradient over the progress bar’s background color.
                        </span>
                        <div class="m-section__content">
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section m-section--last">
                        <span class="m-section__sub">
                            The striped gradient can also be animated. Add
                            <code>
                                .progress-bar-animated
                            </code>
                            to
                            <code>
                                .progress-bar
                            </code>
                            to animate the stripes right to left via CSS3 animations.
                        </span>
                        <div class="m-section__content">
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" style="width: 75%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 35%">
                                </div>
                            </div>
                            <div class="m--space-10">
                            </div>
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 65%">
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