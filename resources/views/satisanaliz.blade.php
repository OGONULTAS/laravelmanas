@extends('layouts._default')
@section('title-page')


@section('sub_header_title1')
@section('sub_header_title2')
@section('sub_header_title3')

@section('link-css')

    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->

@stop

@section('content')

        <div class="col-md-6">

            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-notebook font-dark"></i>
                        <span class="caption-subject bold ">Satış Geçmişi <small>({{$scari4->ISIM}})</small></span>
                    </div>
                    <div class="tools"></div>
                </div>
                <div class="portlet-body">
                    <input type="hidden" class="form-control" id="carikod" name="carikod" value="{{$scari1[0]->STHAR_CARIKOD}}">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                        <tr>
                            <th> FATURA NO </th>
                            <th > TARIH </th>
                            <th>  STOK ADI </th>
                            <th> MIKTAR </th>
                            <th> TUTAR </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-lg-6 col-md-6">
        <div style="-webkit-column-break-before: 0" class="widget-row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="dashboard-stat green">
                    <div class="visual">
                        <i class="flaticon-network"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{number_format($scari2->BORC)}}">0</span> ₺</div>
                        <div class="desc"> Carinin Borç Bakiyesi </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="dashboard-stat green">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{number_format($satis2018)}}">0</span> ₺</div>
                        <div class="desc">Bu Yıl Satış Tutarı </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="dashboard-stat green">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{number_format($satis)}}">0</span> ₺</div>
                        <div class="desc">Toplam Satış Tutarı</div>
                    </div>

                </div>
            </div>

        </div>
        </div>


                <div class="col-md-6 ">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-notebook font-dark"></i>
                                <span class="caption-subject bold ">Açık Siparişleri <small>({{$scari4->ISIM}})</small></span>
                            </div>
                            <div class="tools"></div>
                        </div>
                        <div class="portlet-body">
                            <input type="hidden" class="form-control" id="carikod" name="carikod" value="{{$scari1[0]->STHAR_CARIKOD}}">
                            <table class="table table-striped table-bordered table-hover" id="aciksip">
                                <thead>
                                <tr>
                                    <th> FATURA NO </th>
                                    <th > TARIH </th>
                                    <th>  STOK ADI </th>
                                    <th> MIKTAR </th>
                                    <th> TUTAR </th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>







@stop

@section('link-js')
    <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->


    <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>


    <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>



    <script>

        $(document).ready(function() {
            $('#sample_1').DataTable({

                buttons: [
                    'excel',
                    'pdf',
                    'print'
                ],
                processing: true,
                serverSide: true,
                    "ajax": {
                        "url": '{{  url('tablecarilist')  }}'+'/' + '{{$scari1[0]->STHAR_CARIKOD}}'
                            },


                columns: [
                    { data: 'fatura',name: 'fatura'},
                    { data: 'STHAR_TARIH', name: 'STHAR_TARIH'},
                    { data: 'STOK_ADI', name: 'STOK_ADI'},
                    { data: 'STHAR_GCMIK',name: 'STHAR_GCMIK',render: $.fn.dataTable.render.number('.', ',', 0, '')},
                    { data: 'TOPLAM',name: 'TOPLAM',render: $.fn.dataTable.render.number('.', ',', 2, '₺')}
                ]
            });
        });
    </script>
    <script>

        $(document).ready(function() {
            $('#aciksip').DataTable({
                buttons: [
                    'excel',
                    'pdf',
                    'print'
                ],
                processing: true,
                serverSide: true,
                "ajax": {
                    "url": '{{  url('tablecariaciklist')  }}'+'/' + '{{$scari1[0]->STHAR_CARIKOD}}'
                },
                "lengthMenu": [[6, 25, 50, -1], [6, 25, 50, "All"]],
                "language": {
                    "lengthMenu": "Ekranda _MENU_ Kayıt Gösterilmektedir.",
                    "zeroRecords": "Kayıt Bulunamadı",
                    "info": "Sayfa _PAGE_ / _PAGES_",
                    "infoEmpty": "Kayıt Yok",
                    "processing": "Veriler Getiriliyor",
                    "search":"Ara:",
                    "paginate": {
                        "first": "İlk Sayfa",
                        "next": "İleri",
                        "previous": "Geri",
                        "last": "Son Sayfa"
                    },
                    "infoFiltered": "(filtered from _MAX_ total records)"
                },
                columns: [
                    { data: 'fatura1',name: 'fatura1'},
                    { data: 'TARIH', name: 'TARIH'},
                    { data: 'STOKISIM', name: 'STOKISIM'},
                    { data: 'SIPARISMIKTARI',name: 'SIPARISMIKTARI',render: $.fn.dataTable.render.number('.', ',', 0, '')},
                    { data: 'TESLIMMIKTARI',name: 'TESLIMMIKTARI',render: $.fn.dataTable.render.number('.', ',', 0, '')}
                ]
            });
        });
    </script>
@stop