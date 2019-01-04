@extends('layouts._default')
@section('title-page', '表格')

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
                                基础表格
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            这里使用最基本的表标记展示了如何在Metronic中显示表格。
                        </span>
                        <div class="m-section__content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            名
                                        </th>
                                        <th>
                                            姓
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            也可以使用类
                            <code>
                                .table-inverse
                            </code>
                            反转颜色，在深色背景下显示浅色文字。
                        </span>
                        <div class="m-section__content">
                            <table class="table table-inverse">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                表头选项
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            类似于默认和反转的表格样式修饰&lt;table&gt;标签，也可以使用以上两种修饰符之一来修饰&lt;thead&gt;。
                        </span>
                        <div class="m-section__content">
                            <table class="table">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table">
                                <thead class="thead-default">
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table m-table m-table--head-no-border">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                                Small Table
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <span class="m-section__sub">
                            还可以通过添加类
                            <code>
                                .table-sm
                            </code>
                            将单元格的padding减半，来使表格看起来更紧密。
                        </span>
                        <div class="m-section__content">
                            <table class="table table-sm m-table m-table--head-bg-brand">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                                条纹行
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table table-striped m-table">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                带边框线
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table table-bordered m-table">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                鼠标hover，背景改变
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Form-->
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
                                不同的表头状态
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table m-table m-table--head-bg-success">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table m-table m-table--head-bg-brand">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table m-table m-table--head-separator-primary">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table m-table m-table--head-separator-danger">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                不同的表边框状态
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table table-bordered m-table m-table--border-success">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table table-bordered m-table m-table--border-danger m-table--head-bg-primary">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                表格每行不同的状态
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <table class="table m-table">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="m-table__row--active">
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>
                                    </tr>
                                    <tr class="m-table__row--primary">
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Lisa
                                        </td>
                                        <td>
                                            Nilson
                                        </td>
                                        <td>
                                            @lisa
                                        </td>
                                    </tr>
                                    <tr class="m-table__row--success">
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                    <tr class="m-table__row--brand">
                                        <th scope="row">
                                            4
                                        </th>
                                        <td>
                                            Nick
                                        </td>
                                        <td>
                                            looper
                                        </td>
                                        <td>
                                            @king
                                        </td>
                                    </tr>
                                    <tr class="m-table__row--warning">
                                        <th scope="row">
                                            5
                                        </th>
                                        <td>
                                            Joan
                                        </td>
                                        <td>
                                            thestar
                                        </td>
                                        <td>
                                            @joan
                                        </td>
                                    </tr>
                                    <tr class="m-table__row--danger">
                                        <th scope="row">
                                            6
                                        </th>
                                        <td>
                                            Sean
                                        </td>
                                        <td>
                                            coder
                                        </td>
                                        <td>
                                            @coder
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                响应式表格
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__sub">
                            可以向任何带
                            <code>
                                .table
                            </code>的表格添加类
                            <code>
                                .table-responsive
                            </code>，使其在小设备上（768px以下）可以水平滚动
                        </div>
                        <div class="m-section__content">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Table heading
                                        </th>
                                        <th>
                                            Table heading
                                        </th>
                                        <th>
                                            Table heading
                                        </th>
                                        <th>
                                            Table heading
                                        </th>
                                        <th>
                                            Table heading
                                        </th>
                                        <th>
                                            Table heading
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                        <td>
                                            Table cell
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>

@stop

@section('link-js')

@stop