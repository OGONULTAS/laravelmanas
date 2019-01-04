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
    <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
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
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-notebook font-dark"></i>
                <span class="caption-subject bold uppercase">Personel Bilgileri</span>
            </div>
            <div class="tools"></div>
        </div>
        <div class="portlet-body center">

            <table  class="table-light table-bordered table-responsive " id="personeldetay" >
                <thead>
                <tr>
                    <th></th>
                    <th > ADISOYADI</th>
                    <th > ÜNVANI</th>
                    <th > TOPLAM ÇALIŞMA </th>
                    <th ></th>
                    <th> YAŞ</th>
                    <th> BİRİM </th>
                    <th > DETAY</th>
                </tr>
                </thead>
            </table>

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
    <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>





    <script>

        $(document).ready(function() {
            $('#personeldetay2').DataTable({
                "order": [[ 4, "desc" ]],
                dom: 'Bfrtip',
                buttons: [
                    'pdf',
                    'print'
                ],
                processing: true,
                serverSide: true,
                ajax: '{{ url('personeldetaytable') }}',
                columns: [
                    { data: 'image',name:'image',searchable:false},
                    { data: 'ADI',name:'ADI'},
                    { data: 'SOYADI',name:'SOYADI'},
                    { data: 'ACIKLAMA', name: 'ACIKLAMA'},
                    { data: 'YIL',name: 'YIL'},
                    { data: 'YAS',name: 'YAS'},
                    { data: 'action', name: 'action',searchable :false}
                ]
            });
        });
    </script>
    <script>

        $(document).ready(function() {
            $('#personeldetay').DataTable({
                buttons: [
                    'pdf',
                    'print'
                ],
                processing: true,

                "ajax": {
                    "url": '{{  url('personeldetaytable')  }}'
                },
                "order": [[ 4, "desc" ]],
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
                    { data: 'image',name:'image',searchable :false,orderable: false},
                    { data: 'ADSOYAD',name:'ADSOYAD'},
                    { data: 'ACIKLAMA', name: 'ACIKLAMA'},
                    { data: 'yıleksigun',name: 'yıleksigun',searchable :false,orderable: false},
                    { data: 'GUN',name: 'GUN',visible:false},
                    { data: 'YAS',name: 'YAS'},
                    { data: 'KOD4ACIKLAMA',name: 'KOD4ACIKLAMA'},
                    { data: 'action', name: 'action',searchable :false,orderable: false}
                ]
            });
        });
    </script>
    <script>
        $(document).on('click', '#button', function() {

            $.blockUI({
                message: 'Lütfen Bekleyiniz...',
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: '.5',
                    color: '#fff',
                    fontSize: '18px',
                    fontFamily: 'Verdana,Arial',
                    fontWeight: 200,
                } });});

    </script>
@stop