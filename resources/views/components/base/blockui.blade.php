@extends('layouts._default')
@section('title-page', '遮罩UI')

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
                                Basic Examples
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Click below buttons to block below content area:
                        </span>
                        <div class="m-section__content">
                            <p id="m_blockui_1_content" style="padding: 20px; margin: 10px 0 30px 0; border: 4px solid #efefef">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus. Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
                            </p>
                            <button class="btn btn-success" id="m_blockui_1_1" type="button">
                                Default
                            </button>
                            <button class="btn btn-brand" id="m_blockui_1_2" type="button">
                                Overlay color
                            </button>
                            <button class="btn btn-primary" id="m_blockui_1_3" type="button">
                                Custom spinner
                            </button>
                            <button class="btn btn-info" id="m_blockui_1_4" type="button">
                                Custom text 1
                            </button>
                            <button class="btn btn-danger" id="m_blockui_1_5" type="button">
                                Custom text 2
                            </button>
                        </div>
                    </div>
                    <!--end::Section-->
                    <div class="m-separator m-separator--dashed">
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
                                Modal Blocking
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Click below buttons to block modal content:
                        </span>
                        <div class="m-section__content">
                            <button class="btn btn-success" data-target="#m_blockui_4_1_modal" data-toggle="modal" type="button">
                                Default
                            </button>
                            <button class="btn btn-brand" data-target="#m_blockui_4_2_modal" data-toggle="modal" type="button">
                                Overlay color
                            </button>
                            <button class="btn btn-primary" data-target="#m_blockui_4_3_modal" data-toggle="modal" type="button">
                                Custom spinner
                            </button>
                            <button class="btn btn-info" data-target="#m_blockui_4_4_modal" data-toggle="modal" type="button">
                                Custom text 1
                            </button>
                            <button class="btn btn-danger" data-target="#m_blockui_4_5_modal" data-toggle="modal" type="button">
                                Custom text 2
                            </button>
                        </div>
                    </div>
                    <!--end::Section-->
                    <div class="m-separator m-separator--dashed">
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
        <div class="col-xl-6">
            <!--begin::Portlet-->
            <div class="m-portlet" id="m_blockui_2_portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Portlet Blocking
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Click below buttons to block this portlet:
                        </span>
                        <div class="m-section__content">
                            <button class="btn btn-success" id="m_blockui_2_1" type="button">
                                Default
                            </button>
                            <button class="btn btn-brand" id="m_blockui_2_2" type="button">
                                Overlay color
                            </button>
                            <button class="btn btn-primary" id="m_blockui_2_3" type="button">
                                Custom spinner
                            </button>
                            <button class="btn btn-info" id="m_blockui_2_4" type="button">
                                Custom text 1
                            </button>
                            <button class="btn btn-danger" id="m_blockui_2_5" type="button">
                                Custom text 2
                            </button>
                        </div>
                    </div>
                    <!--end::Section-->
                    <div class="m-separator m-separator--dashed">
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
                                Page Blocking
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            Click below buttons to block current page:
                        </span>
                        <div class="m-section__content">
                            <button class="btn btn-success" id="m_blockui_3_1" type="button">
                                Default
                            </button>
                            <button class="btn btn-brand" id="m_blockui_3_2" type="button">
                                Overlay color
                            </button>
                            <button class="btn btn-primary" id="m_blockui_3_3" type="button">
                                Custom spinner
                            </button>
                            <button class="btn btn-info" id="m_blockui_3_4" type="button">
                                Custom text 1
                            </button>
                            <button class="btn btn-danger" id="m_blockui_3_5" type="button">
                                Custom text 2
                            </button>
                        </div>
                    </div>
                    <!--end::Section-->
                    <div class="m-separator m-separator--dashed">
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>
    <!--begin::Modal-->
    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="m_blockui_4_1_modal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        New message
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="form-control-label" for="recipient-name">
                                Recipient:
                            </label>
                            <input class="form-control" id="recipient-name" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="message-text">
                                Message:
                            </label>
                            <textarea class="form-control" id="message-text">
                            </textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                        Close
                    </button>
                    <button class="btn btn-primary" id="m_blockui_4_1" type="button">
                        Block modal
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--begin::Modal-->
    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="m_blockui_4_2_modal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        New message
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="form-control-label" for="recipient-name">
                                Recipient:
                            </label>
                            <input class="form-control" id="recipient-name" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="message-text">
                                Message:
                            </label>
                            <textarea class="form-control" id="message-text">
                            </textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                        Close
                    </button>
                    <button class="btn btn-primary" id="m_blockui_4_2" type="button">
                        Block modal
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--begin::Modal-->
    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="m_blockui_4_3_modal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        New message
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="form-control-label" for="recipient-name">
                                Recipient:
                            </label>
                            <input class="form-control" id="recipient-name" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="message-text">
                                Message:
                            </label>
                            <textarea class="form-control" id="message-text">
                            </textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                        Close
                    </button>
                    <button class="btn btn-primary" id="m_blockui_4_3" type="button">
                        Block modal
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--begin::Modal-->
    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="m_blockui_4_4_modal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        New message
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="form-control-label" for="recipient-name">
                                Recipient:
                            </label>
                            <input class="form-control" id="recipient-name" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="message-text">
                                Message:
                            </label>
                            <textarea class="form-control" id="message-text">
                            </textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                        Close
                    </button>
                    <button class="btn btn-primary" id="m_blockui_4_4" type="button">
                        Block modal
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--begin::Modal-->
    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="m_blockui_4_5_modal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        New message
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="form-control-label" for="recipient-name">
                                Recipient:
                            </label>
                            <input class="form-control" id="recipient-name" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="message-text">
                                Message:
                            </label>
                            <textarea class="form-control" id="message-text">
                            </textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                        Close
                    </button>
                    <button class="btn btn-primary" id="m_blockui_4_5" type="button">
                        Block modal
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
@stop

@section('link-js')
    <script src="{{ url('assets/demo/default/custom/components/base/blockui.js') }}" type="text/javascript"></script>
@stop