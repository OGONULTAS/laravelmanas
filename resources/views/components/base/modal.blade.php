@extends('layouts._default')
@section('title-page', '模态框')

@section('sub_header_title1', '基础Base')

@section('link-css')

@stop

@section('content')

    <!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Modal Demos
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <table class="table table-bordered">
                <tr>
                    <td style="width: 30%">
                        基础Demo
                    </td>
                    <td>
                        <button class="btn btn-primary" data-target="#m_modal_1" data-toggle="modal" type="button">
                            Launch Modal
                        </button>
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%">
                        可滚动的固定文本
                    </td>
                    <td>
                        <button class="btn btn-metal" data-target="#m_modal_1_2" data-toggle="modal" type="button">
                            Launch Modal
                        </button>
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%">
                        可滚动的长文本
                    </td>
                    <td>
                        <button class="btn btn-brand" data-target="#m_modal_2" data-toggle="modal" type="button">
                            Launch Modal
                        </button>
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%">
                        Tooltips and popovers
                    </td>
                    <td>
                        <button class="btn btn-success" data-target="#m_modal_3" data-toggle="modal" type="button">
                            Launch Modal
                        </button>
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%">
                        Large modal
                    </td>
                    <td>
                        <button class="btn btn-warning" data-target="#m_modal_4" data-toggle="modal" type="button">
                            Launch Modal
                        </button>
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%">
                        Small modal
                    </td>
                    <td>
                        <button class="btn btn-danger" data-target="#m_modal_5" data-toggle="modal" type="button">
                            Launch Modal
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!--end::Portlet-->
    <!--begin::Modal-->
    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="m_modal_1" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Modal title
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                        Close
                    </button>
                    <button class="btn btn-primary" type="button">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--begin::Modal-->
    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="m_modal_1_2" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Modal title
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="m-scrollable" data-max-height="200" data-scrollable="true" data-scrollbar-shown="true">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                        Close
                    </button>
                    <button class="btn btn-primary" type="button">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--begin::Modal-->
    <div aria-hidden="true" aria-labelledby="exampleModalLongTitle" class="modal fade" id="m_modal_2" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        Modal title
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    </p>
                    <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    </p>
                    <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    </p>
                    <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    </p>
                    <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    </p>
                    <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    </p>
                    <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                        Close
                    </button>
                    <button class="btn btn-primary" type="button">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--begin::Modal-->
    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="m_modal_3" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Modal title
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>
                        Popover in a modal
                    </h5>
                    <p>
                        This
                        <a class="btn btn-secondary popover-test" data-content="Popover body content is set in this attribute." data-toggle="m-popover" href="#" role="button" title="Popover title">
                            button
                        </a>
                        triggers a popover on click.
                    </p>
                    <hr>
                        <h5>
                            Tooltips in a modal
                        </h5>
                        <p>
                            <a class="tooltip-test" data-toggle="m-tooltip" href="#" title="Tooltip">
                                This link
                            </a>
                            and
                            <a class="tooltip-test" data-toggle="m-tooltip" href="#" title="Tooltip">
                                that link
                            </a>
                            have tooltips on hover.
                        </p>
                    </hr>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                        Close
                    </button>
                    <button class="btn btn-primary" type="button">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--begin::Modal-->
    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="m_modal_4" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
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
                    <button class="btn btn-primary" type="button">
                        Send message
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--begin::Modal-->
    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="m_modal_5" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-sm" role="document">
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
                    <button class="btn btn-primary" type="button">
                        Send message
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

@stop

@section('link-js')

@stop