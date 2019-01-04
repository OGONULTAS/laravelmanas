@extends('layouts._default')
@section('title-page', '特色通知框')

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
                        Toastr Notifications Examples
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right">
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group m-form__group">
                            <label for="title">
                                Title
                            </label>
                            <input class="form-control" id="title" placeholder="Enter a title ..." type="text"/>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="message">
                                Message
                            </label>
                            <textarea class="form-control" id="message" placeholder="Enter a message ..." rows="3">
                            </textarea>
                        </div>
                        <div class="form-group m-form__group">
                            <div class="m-checkbox-list">
                                <label class="m-checkbox">
                                    <input id="closeButton" type="checkbox" value="checked"/>
                                    Close Button
                                    <span>
                                    </span>
                                </label>
                                <label class="m-checkbox">
                                    <input id="addBehaviorOnToastClick" type="checkbox" value="checked"/>
                                    Add behavior on toast click
                                    <span>
                                    </span>
                                </label>
                                <label class="m-checkbox">
                                    <input id="debugInfo" type="checkbox" value="checked"/>
                                    Debug
                                    <span>
                                    </span>
                                </label>
                                <label class="m-checkbox">
                                    <input id="progressBar" type="checkbox" value="checked"/>
                                    Progress Bar
                                    <span>
                                    </span>
                                </label>
                                <label class="m-checkbox">
                                    <input id="preventDuplicates" type="checkbox" value="checked"/>
                                    Prevent Duplicates
                                    <span>
                                    </span>
                                </label>
                                <label class="m-checkbox">
                                    <input id="addClear" type="checkbox" value="checked"/>
                                    Add button to force clearing a toast, ignoring focus
                                    <span>
                                    </span>
                                </label>
                                <label class="m-checkbox">
                                    <input id="newestOnTop" type="checkbox" value="checked"/>
                                    Newest on top
                                    <span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group m-form__group">
                            <label>
                                Toast Type
                            </label>
                            <div class="m-radio-list" id="toastTypeGroup">
                                <label class="m-radio">
                                    <input checked="" name="toasts" type="radio" value="success"/>
                                    Success
                                    <span>
                                    </span>
                                </label>
                                <label class="m-radio">
                                    <input name="toasts" type="radio" value="info"/>
                                    Info
                                    <span>
                                    </span>
                                </label>
                                <label class="m-radio">
                                    <input name="toasts" type="radio" value="warning"/>
                                    Warning
                                    <span>
                                    </span>
                                </label>
                                <label class="m-radio">
                                    <input name="toasts" type="radio" value="error"/>
                                    Error
                                    <span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group m-form__group">
                            <label>
                                Position
                            </label>
                            <div class="m-radio-list" id="positionGroup">
                                <label class="m-radio">
                                    <input checked="" name="positions" type="radio" value="toast-top-right"/>
                                    Top Right
                                    <span>
                                    </span>
                                </label>
                                <label class="m-radio">
                                    <input name="positions" type="radio" value="toast-bottom-right"/>
                                    Bottom Right
                                    <span>
                                    </span>
                                </label>
                                <label class="m-radio">
                                    <input name="positions" type="radio" value="toast-bottom-left"/>
                                    Bottom Left
                                    <span>
                                    </span>
                                </label>
                                <label class="m-radio">
                                    <input name="positions" type="radio" value="toast-top-left"/>
                                    Top Left
                                    <span>
                                    </span>
                                </label>
                                <label class="m-radio">
                                    <input name="positions" type="radio" value="toast-top-full-width"/>
                                    Top Full Width
                                    <span>
                                    </span>
                                </label>
                                <label class="m-radio">
                                    <input name="positions" type="radio" value="toast-bottom-full-width"/>
                                    Bottom Full Width
                                    <span>
                                    </span>
                                </label>
                                <label class="m-radio">
                                    <input name="positions" type="radio" value="toast-top-center"/>
                                    Top Center
                                    <span>
                                    </span>
                                </label>
                                <label class="m-radio">
                                    <input name="positions" type="radio" value="toast-bottom-center"/>
                                    Bottom Center
                                    <span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group m-form__group">
                            <label for="showEasing">
                                Show Easing
                            </label>
                            <input class="form-control" id="showEasing" placeholder="swing, linear" type="text" value="swing"/>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="hideEasing">
                                Hide Easing
                            </label>
                            <input class="form-control" id="hideEasing" placeholder="swing, linear" type="text" value="linear"/>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="showMethod">
                                Show Method
                            </label>
                            <input class="form-control" id="showMethod" placeholder="show, fadeIn, slideDown" type="text" value="fadeIn"/>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="hideMethod">
                                Hide Method
                            </label>
                            <input class="form-control" id="hideMethod" placeholder="hide, fadeOut, slideUp" type="text" value="fadeOut"/>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group m-form__grou">
                            <label for="showDuration">
                                Show Duration
                            </label>
                            <input class="form-control" id="showDuration" placeholder="ms" type="text" value="300"/>
                        </div>
                        <div class="form-group m-form__grou">
                            <label for="hideDuration">
                                Hide Duration
                            </label>
                            <input class="form-control" id="hideDuration" placeholder="ms" type="text" value="1000"/>
                        </div>
                        <div class="form-group m-form__grou">
                            <label for="timeOut">
                                Time out
                            </label>
                            <input class="form-control" id="timeOut" placeholder="ms" type="text" value="5000"/>
                        </div>
                        <div class="form-group m-form__grou">
                            <label for="extendedTimeOut">
                                Extended time out
                            </label>
                            <input class="form-control" id="extendedTimeOut" placeholder="ms" type="text" value="1000"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group m-form__group">
                            <pre id="toastrOptions" style="border:4px solid #efefef;padding:15px; margin:20px 0;">
                                Output:
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-4">
                            <a class="btn btn-primary" href="javascript:;" id="showtoast">
                                Show Toast
                            </a>
                            <a class="btn btn-danger" href="javascript:;" id="cleartoasts">
                                Clear Toasts
                            </a>
                            <a class="btn btn-danger" href="javascript:;" id="clearlasttoast">
                                Clear Last Toast
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Portlet-->

@stop

@section('link-js')
<script src="{{ url('assets/demo/default/custom/components/base/toastr.js') }}" type="text/javascript"></script>
@stop