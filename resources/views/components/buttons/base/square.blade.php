@extends('layouts._default')
@section('title-page', '方形')

@section('sub_header_title1', '基础Base')
@section('sub_header_title2', '基础按钮')

@section('link-css')

@stop

@section('content')

    <div class="row">
        <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Base Buttons
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Bootstrap state buttons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-primary" type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square btn-secondary" type="button">
                                        Secondary
                                    </button>
                                    <button class="btn m-btn--square btn-success" type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square btn-info" type="button">
                                        Info
                                    </button>
                                    <button class="btn m-btn--square btn-warning" type="button">
                                        Warning
                                    </button>
                                    <button class="btn m-btn--square btn-danger" type="button">
                                        Danger
                                    </button>
                                    <button class="btn m-btn--square btn-link" type="button">
                                        Link
                                    </button>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Bootstrap gradient state buttons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square m-btn m-btn--gradient-from-primary m-btn--gradient-to-info" type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square m-btn m-btn--gradient-from-success m-btn--gradient-to-accent" type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning" type="button">
                                        Danger
                                    </button>
                                    <button class="btn m-btn--square m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger" type="button">
                                        Warning
                                    </button>
                                    <button class="btn m-btn--square m-btn m-btn--gradient-from-info m-btn--gradient-to-accent" type="button">
                                        Info
                                    </button>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Metronic custom state buttons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-brand" type="button">
                                        Brand
                                    </button>
                                    <button class="btn m-btn--square btn-metal" type="button">
                                        Metal
                                    </button>
                                    <button class="btn m-btn--square btn-accent" type="button">
                                        Accent
                                    </button>
                                    <button class="btn m-btn--square btn-focus" type="button">
                                        Focus
                                    </button>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Metronic gradient state buttons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square m-btn m-btn--gradient-from-brand m-btn--gradient-to-info" type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square m-btn m-btn--gradient-from-metal m-btn--gradient-to-accent" type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square m-btn m-btn--gradient-from-accent m-btn--gradient-to-success" type="button">
                                        Danger
                                    </button>
                                    <button class="btn m-btn--square m-btn m-btn--gradient-from-focus m-btn--gradient-to-danger" type="button">
                                        Warning
                                    </button>
                                    <button class="btn m-btn--square m-btn m-btn--gradient-from-info m-btn--gradient-to-warning" type="button">
                                        Info
                                    </button>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            The
                            <code>
                                .btn
                            </code>
                            classes are designed to be used with
                            <code>
                                <button>
                            </code>
                            ,
                            <code>
                                <a>
                            </code>
                            and
                            <code>
                                <input>
                            </code>
                            elements.
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <a class="btn m-btn--square btn-primary" href="#" role="button">
                                        Link
                                    </a>
                                    <button class="btn m-btn--square btn-success" type="submit">
                                        Button
                                    </button>
                                    <input class="btn m-btn--square btn-warning" type="button" value="Input">
                                        <input class="btn m-btn--square btn-info" type="submit" value="Submit">
                                            <input class="btn m-btn--square btn-danger" type="reset" value="Reset">
                                                <a class="btn m-btn--square btn-metal" href="#">
                                                    Metal
                                                </a>
                                                <button class="btn m-btn--square btn-brand" type="button">
                                                    Brand
                                                </button>
                                            </input>
                                        </input>
                                    </input>
                                </div>
                            </div>
                        </div>
                        <span class="m-section__sub">
                            Wide bootstrap buttons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-primary m-btn--wide" type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn--wide" type="button">
                                        Secondary
                                    </button>
                                    <button class="btn m-btn--square btn-success m-btn--wide" type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square btn-info m-btn--wide" type="button">
                                        Info
                                    </button>
                                    <button class="btn m-btn--square btn-warning m-btn--wide" type="button">
                                        Warning
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Outline Buttons
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Bootstrap outline buttons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-outline-primary" type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success" type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square btn-outline-info" type="button">
                                        Info
                                    </button>
                                    <button class="btn m-btn--square btn-outline-warning" type="button">
                                        Warning
                                    </button>
                                    <button class="btn m-btn--square btn-outline-danger" type="button">
                                        Danger
                                    </button>
                                    <div class="m--space-10">
                                    </div>
                                    <button class="btn m-btn--square btn-outline-brand" type="button">
                                        Brand
                                    </button>
                                    <button class="btn m-btn--square btn-outline-metal" type="button">
                                        Metal
                                    </button>
                                    <button class="btn m-btn--square btn-outline-accent" type="button">
                                        Accent
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Bootstrap outline 2x buttons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-outline-primary m-btn m-btn--outline-2x " type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success m-btn m-btn--outline-2x " type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square btn-outline-info m-btn m-btn--outline-2x " type="button">
                                        Info
                                    </button>
                                    <button class="btn m-btn--square btn-outline-warning m-btn m-btn--outline-2x " type="button">
                                        Warning
                                    </button>
                                    <button class="btn m-btn--square btn-outline-danger m-btn m-btn--outline-2x " type="button">
                                        Danger
                                    </button>
                                    <div class="m--space-10">
                                    </div>
                                    <button class="btn m-btn--square btn-outline-brand m-btn m-btn--outline-2x " type="button">
                                        Brand
                                    </button>
                                    <button class="btn m-btn--square btn-outline-metal m-btn m-btn--outline-2x " type="button">
                                        Metal
                                    </button>
                                    <button class="btn m-btn--square btn-outline-accent m-btn m-btn--outline-2x " type="button">
                                        Accent
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Metronic Buttons
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Metronic style solid buttons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-primary m-btn m-btn--custom" type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square btn-brand m-btn m-btn--custom" type="button">
                                        Brand
                                    </button>
                                    <button class="btn m-btn--square btn-success m-btn m-btn--custom" type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square btn-info m-btn m-btn--custom" type="button">
                                        Info
                                    </button>
                                    <button class="btn m-btn--square btn-warning m-btn m-btn--custom" type="button">
                                        Warning
                                    </button>
                                    <button class="btn m-btn--square btn-danger m-btn m-btn--custom" type="button">
                                        Danger
                                    </button>
                                    <button class="btn m-btn--square btn-accent m-btn m-btn--custom" type="button">
                                        Accent
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom" type="button">
                                        Secondary
                                    </button>
                                    <div class="m-separator m-separator--dashed">
                                    </div>
                                    <button class="btn m-btn--square btn-primary m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square btn-brand m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Brand
                                    </button>
                                    <button class="btn m-btn--square btn-success m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square btn-info m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Info
                                    </button>
                                    <button class="btn m-btn--square btn-warning m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Warning
                                    </button>
                                    <button class="btn m-btn--square btn-danger m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Danger
                                    </button>
                                    <button class="btn m-btn--square btn-accent m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Accent
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Secondary
                                    </button>
                                    <div class="m-separator m-separator--dashed">
                                    </div>
                                    <button class="btn m-btn--square btn-primary m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square btn-brand m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Brand
                                    </button>
                                    <button class="btn m-btn--square btn-success m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square btn-info m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Info
                                    </button>
                                    <button class="btn m-btn--square btn-warning m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Warning
                                    </button>
                                    <button class="btn m-btn--square btn-danger m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Danger
                                    </button>
                                    <button class="btn m-btn--square btn-accent m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Accent
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--bolder m-btn--uppercase" type="button">
                                        Secondary
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Metronic style outline buttons
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-outline-primary m-btn m-btn--custom" type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square btn-outline-brand m-btn m-btn--custom" type="button">
                                        Brand
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success m-btn m-btn--custom" type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square btn-outline-info m-btn m-btn--custom" type="button">
                                        Info
                                    </button>
                                    <button class="btn m-btn--square btn-outline-warning m-btn m-btn--custom" type="button">
                                        Warning
                                    </button>
                                    <button class="btn m-btn--square btn-outline-danger m-btn m-btn--custom" type="button">
                                        Danger
                                    </button>
                                    <button class="btn m-btn--square btn-outline-metal m-btn m-btn--custom" type="button">
                                        Metal
                                    </button>
                                    <button class="btn m-btn--square btn-outline-accent m-btn m-btn--custom" type="button">
                                        Accent
                                    </button>
                                    <div class="m-separator m-separator--dashed">
                                    </div>
                                    <button class="btn m-btn--square btn-outline-primary m-btn m-btn--custom m-btn--outline-2x" type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square btn-outline-brand m-btn m-btn--custom m-btn--outline-2x" type="button">
                                        Brand
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success m-btn m-btn--custom m-btn--outline-2x" type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square btn-outline-info m-btn m-btn--custom m-btn--outline-2x" type="button">
                                        Info
                                    </button>
                                    <button class="btn m-btn--square btn-outline-warning m-btn m-btn--custom m-btn--outline-2x" type="button">
                                        Warning
                                    </button>
                                    <button class="btn m-btn--square btn-outline-danger m-btn m-btn--custom m-btn--outline-2x" type="button">
                                        Danger
                                    </button>
                                    <button class="btn m-btn--square btn-outline-metal m-btn m-btn--custom m-btn--outline-2x" type="button">
                                        Metal
                                    </button>
                                    <button class="btn m-btn--square btn-outline-accent m-btn m-btn--custom m-btn--outline-2x" type="button">
                                        Accent
                                    </button>
                                    <div class="m-separator m-separator--dashed">
                                    </div>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-primary" type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-brand" type="button">
                                        Brand
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-success" type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-info" type="button">
                                        Info
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-warning" type="button">
                                        Warning
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-danger" type="button">
                                        Danger
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-metal" type="button">
                                        Metal
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-accent" type="button">
                                        Accent
                                    </button>
                                    <div class="m-separator m-separator--dashed">
                                    </div>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-primary m-btn--bolder" type="button">
                                        Primary
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" type="button">
                                        Brand
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-success m-btn--bolder" type="button">
                                        Success
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-info m-btn--bolder" type="button">
                                        Info
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-warning m-btn--bolder m-btn--uppercase" type="button">
                                        Warning
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-danger m-btn--bolder m-btn--uppercase" type="button">
                                        Danger
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-metal m-btn--bolder m-btn--uppercase" type="button">
                                        Metal
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-accent m-btn--bolder m-btn--uppercase" type="button">
                                        Accent
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
        <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Button Sizes
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Add
                            <code>
                                .btn-lg
                            </code>
                            or
                            <code>
                                .btn-sm
                            </code>
                            for additional sizes.
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-primary btn-lg" type="button">
                                        Large button
                                    </button>
                                    <button class="btn m-btn--square btn-secondary btn-lg" type="button">
                                        Large button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success btn-lg" type="button">
                                        Large button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-info btn-lg" type="button">
                                        Large button
                                    </button>
                                </div>
                            </div>
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-primary" type="button">
                                        Default button
                                    </button>
                                    <button class="btn m-btn--square btn-secondary" type="button">
                                        Default button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success" type="button">
                                        Default button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-info" type="button">
                                        Default button
                                    </button>
                                </div>
                            </div>
                            <div class="m-demo m-demo--last" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-primary btn-sm" type="button">
                                        Small button
                                    </button>
                                    <button class="btn m-btn--square btn-secondary btn-sm" type="button">
                                        Small button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success btn-sm" type="button">
                                        Small button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-info btn-sm" type="button">
                                        Small button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-brand btn-sm" type="button">
                                        Small button
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Metronic style buttons sizing
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-primary btn-lg m-btn m-btn--custom" type="button">
                                        Large button
                                    </button>
                                    <button class="btn m-btn--square btn-secondary btn-lg m-btn m-btn--custom m-btn--label-accent" type="button">
                                        Large button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success btn-lg m-btn m-btn--custom" type="button">
                                        Large button
                                    </button>
                                </div>
                            </div>
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-primary m-btn m-btn--custom" type="button">
                                        Default button
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom m-btn--label-accent" type="button">
                                        Default button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success m-btn m-btn--custom" type="button">
                                        Default button
                                    </button>
                                </div>
                            </div>
                            <div class="m-demo m-demo--last" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-primary btn-sm m-btn m-btn--custom" type="button">
                                        Small button
                                    </button>
                                    <button class="btn m-btn--square btn-secondary btn-sm m-btn m-btn--custom m-btn--label-accent" type="button">
                                        Small button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success btn-sm m-btn m-btn--custom" type="button">
                                        Small button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-info btn-sm m-btn m-btn--custom" type="button">
                                        Small button
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Button States
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section m-section--last">
                        <span class="m-section__sub">
                            Add
                            <code>
                                .active
                            </code>
                            for active state and
                            <code>
                                .disabled
                            </code>
                            class or
                            <code>
                                disabled="disabled"
                            </code>
                            attribute
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-outline-primary" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-outline-brand" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-outline-info" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-outline-warning" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-outline-danger" type="button">
                                        Default
                                    </button>
                                    <div class="m--space-10">
                                    </div>
                                    <button class="btn m-btn--square btn-outline-primary active" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-outline-brand active" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success active" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-outline-info active" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-outline-metal active" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-outline-warning active" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-outline-danger active" type="button">
                                        Active
                                    </button>
                                    <div class="m--space-10">
                                    </div>
                                    <button class="btn m-btn--square btn-outline-primary" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-outline-brand" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-outline-info" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-outline-warning" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-outline-danger" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                </div>
                            </div>
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-primary" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-secondary" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-success" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-info" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-warning" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-danger" type="button">
                                        Default
                                    </button>
                                    <div class="m--space-10">
                                    </div>
                                    <button class="btn m-btn--square btn-primary active" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-secondary active" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-success active" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-info active" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-outline-metal active" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-warning active" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-danger active" type="button">
                                        Active
                                    </button>
                                    <div class="m--space-10">
                                    </div>
                                    <button class="btn m-btn--square btn-primary" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-secondary" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-success" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-info" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-warning" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-danger" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                </div>
                            </div>
                            <div class="m-demo m-demo--last" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview m-demo__preview--btn">
                                    <button class="btn m-btn--square btn-primary m-btn m-btn--custom" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-success m-btn m-btn--custom" type="button">
                                        Default
                                    </button>
                                    <button class="btn m-btn--square btn-info m-btn m-btn--custom" type="button">
                                        Default
                                    </button>
                                    <div class="m--space-10">
                                    </div>
                                    <button class="btn m-btn--square btn-primary active m-btn m-btn--custom" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-secondary active m-btn m-btn--custom" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-success active m-btn m-btn--custom" type="button">
                                        Active
                                    </button>
                                    <button class="btn m-btn--square btn-info active m-btn m-btn--custom" type="button">
                                        Active
                                    </button>
                                    <div class="m--space-10">
                                    </div>
                                    <button class="btn m-btn--square btn-primary m-btn m-btn--custom" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-secondary m-btn m-btn--custom" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-success m-btn m-btn--custom" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                    <button class="btn m-btn--square btn-info m-btn m-btn--custom" disabled="disabled" type="button">
                                        Disabled
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Block Buttons
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Bootstrap block buttons span the full width of a parent
                        </span>
                        <div class="m-section__content">
                            <div class="m-demo m-demo--last" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview">
                                    <button class="btn m-btn--square btn-primary btn-block" type="button">
                                        Block level button
                                    </button>
                                    <button class="btn m-btn--square btn-secondary btn-block" type="button">
                                        Block level button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-success btn-block" type="button">
                                        Block level button
                                    </button>
                                    <button class="btn m-btn--square btn-outline-warning btn-block" type="button">
                                        Block level button
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Checkbox and radio buttons
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section m-section--last">
                        <div class="m-section__content">
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview">
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn m-btn--square btn-success active">
                                            <input autocomplete="off" checked="" type="checkbox">
                                                Checkbox 1
                                            </input>
                                        </label>
                                        <label class="btn m-btn--square btn-success">
                                            <input autocomplete="off" type="checkbox">
                                                Checkbox 2
                                            </input>
                                        </label>
                                        <label class="btn m-btn--square btn-success">
                                            <input autocomplete="off" type="checkbox">
                                                Checkbox 3
                                            </input>
                                        </label>
                                        <label class="btn m-btn--square btn-success">
                                            <input autocomplete="off" type="checkbox">
                                                Checkbox 4
                                            </input>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="m-demo" data-code-html="true" data-code-js="false" data-code-preview="true">
                                <div class="m-demo__preview">
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn m-btn--square btn-warning active">
                                            <input autocomplete="off" checked="" id="option1" name="options" type="radio">
                                                Radio 1
                                            </input>
                                        </label>
                                        <label class="btn m-btn--square btn-warning">
                                            <input autocomplete="off" id="option2" name="options" type="radio">
                                                Radio 2
                                            </input>
                                        </label>
                                        <label class="btn m-btn--square btn-warning">
                                            <input autocomplete="off" id="option3" name="options" type="radio">
                                                Radio 3
                                            </input>
                                        </label>
                                        <label class="btn m-btn--square btn-warning">
                                            <input autocomplete="off" id="option3" name="options" type="radio">
                                                Radio 4
                                            </input>
                                        </label>
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