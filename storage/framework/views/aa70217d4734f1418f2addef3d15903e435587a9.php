<?php $__env->startSection('title-page'); ?>


<?php $__env->startSection('sub_header_title1'); ?>
<?php $__env->startSection('sub_header_title2'); ?>
<?php $__env->startSection('sub_header_title3'); ?>

<?php $__env->startSection('link-css'); ?>

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


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div>

<?php if($datetime==2018): ?>
        <select id="select">
            <option value="2018">2018</option>
            <option value="2019">2019</option>
        </select>
<?php elseif($datetime==2019): ?>
            <select id="select">
                <option value="2019">2019</option>
                <option value="2018">2018</option>
            </select>
<?php endif; ?>
    </div>

    
    <div class="row widget-row">
        <div class="col-xl-12">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <!-- BEGIN WIDGET THUMB -->
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                <h4 class="widget-thumb-heading"> <?php echo e($datetime); ?> Satış</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-green fa fa-try"></i>
                    <div class="widget-thumb-body">
                         <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo e(number_format($q7)); ?>">0</span>
                    </div>
                </div>
            </div>
            <!-- END WIDGET THUMB -->
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <!-- BEGIN WIDGET THUMB -->
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                <h4 class="widget-thumb-heading"><?php echo e($ay); ?>.AY SATIŞ</h4>
                <div class="widget-thumb-wrap">
                    <a href="#" class="widget-thumb-icon bg-red fa fa-try"></a>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo e(number_format($q6)); ?>">0</span>
                    </div>
                </div>
            </div>
            <!-- END WIDGET THUMB -->
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <!-- BEGIN WIDGET THUMB -->
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                <h4 class="widget-thumb-heading"><?php echo e($datetime1); ?>. HAFTA SATIŞ</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-purple fa fa-try"></i>
                    <div class="widget-thumb-body">

                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo e(number_format($q5)); ?>">0</span>
                    </div>
                </div>
            </div>
            <!-- END WIDGET THUMB -->
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <!-- BEGIN WIDGET THUMB -->
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                <h4 class="widget-thumb-heading">GÜNLÜK SATIŞ</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-blue fa fa-try"></i>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-body-stat" data-counter="counterup"
                              data-value="<?php if(empty($q4[0]->TOPLAM)): ?>
                                      0
                                <?php else: ?>
                              <?php echo e(number_format($q4[0]->TOPLAM)); ?>

                              <?php endif; ?>">0</span>
                    </div>
                </div>
            </div>
            <!-- END WIDGET THUMB -->
        </div>
        </div>
    </div>
    



    
    <div class="row widget-row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-green-sharp">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q14[0]->UZUNKREDI)); ?>">0</span>
                        <small class="font-green-sharp">TL</small>
                    </h3>
                    <small>UZUN VADELİ KREDİLER</small>
                </div>
                <div class="icon">
                    <?php if($q17[0]->UZUN >0): ?>
                    <i style="color: green" class="icon-arrow-down"></i> <br>
                    <i style="color: green">%<?php echo e(number_format($q17[0]->UZUN,2,',','.')); ?></i>
                    <?php elseif($q17[0]->UZUN <0): ?>
                    <i style="color: red" class="icon-arrow-up"></i> <br>
                    <i style="color: red">%<?php echo e(number_format($q17[0]->UZUN,2,',','.')); ?></i>
                    <?php elseif($q17[0]->UZUN ==0): ?>
                    <i style="color: #b18d00" class="icon-arrow-right"></i> <br>
                    <i style="color: #b18d00">%<?php echo e(number_format($q17[0]->UZUN,2,',','.')); ?></i>
                    <?php endif; ?>
                    <br><small style="color: black;font-size: 85%">2 Hafta</small>
                </div>

            </div>

        </div>

    </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup" data-value="<?php echo e(number_format($q14[0]->KISAKREDI)); ?>">0</span>
                            <small class="font-green-sharp">TL</small>
                        </h3>
                        <small>KISA VADELİ KREDİLER</small>
                    </div>
                    <div class="icon">
                        <?php if($q17[0]->KISA >0): ?>
                            <i style="color: green" class="icon-arrow-down"></i> <br>
                            <i style="color: green">%<?php echo e(number_format($q17[0]->KISA,2,',','.')); ?></i>

                        <?php elseif($q17[0]->KISA <0): ?>
                            <i style="color: red" class="icon-arrow-up"></i> <br>
                            <i style="color: red">%<?php echo e(number_format($q17[0]->KISA,2,',','.')); ?></i>

                        <?php elseif($q17[0]->KISA ==0): ?>
                            <i style="color: #b18d00" class="icon-arrow-right"></i> <br>
                            <i style="color: #b18d00">%<?php echo e(number_format($q17[0]->KISA,2,',','.')); ?></i>

                        <?php endif; ?>
                            <br><small style="color: black;font-size: 85%">2 Hafta</small>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup" data-value="<?php echo e(number_format($q14[0]->UZUNKREDI+$q14[0]->KISAKREDI)); ?>">0</span>
                            <small class="font-green-sharp">TL</small>
                        </h3>
                        <small>TOPLAM KREDİLER</small>
                    </div>
                    <div class="icon">
                        <?php if($q17[0]->TOPLAM >0): ?>
                            <i style="color: green" class="icon-arrow-down"></i> <br>
                            <i style="color: green">%<?php echo e(number_format($q17[0]->TOPLAM,2,',','.')); ?></i>
                        <?php elseif($q17[0]->TOPLAM <0): ?>
                            <i style="color: red" class="icon-arrow-up"></i> <br>
                            <i style="color: red">%<?php echo e(number_format($q17[0]->TOPLAM,2,',','.')); ?></i>
                        <?php elseif($q17[0]->TOPLAM ==0): ?>
                            <i style="color: #b18d00" class="icon-arrow-right"></i> <br>
                            <i style="color: #b18d00">%<?php echo e(number_format($q17[0]->TOPLAM,2,',','.')); ?></i>
                        <?php endif; ?>
                            <br><small style="color: black;font-size: 85%">2 Hafta</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
    

    
    <div style="-webkit-column-break-before: 0" class="row widget-row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q12_1)); ?>">0</span> €</div>
                    <div class="desc"> Toplam Stok Durumu </div>
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
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q12_2)); ?>">0</span> $</div>
                    <div class="desc">Toplam Stok Durumu </div>
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q12)); ?>">0</span> ₺</div>
                    <div class="desc">Toplam Stok Durumu</div>
                </div>

            </div>
        </div>

    </div>
    

   

    
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-bar-chart font-green-haze"></i>
                <span class="caption-subject bold uppercase font-green-haze">AYLIK SATIŞLAR </span>
                <span class="caption-helper">2018 YILI AYLARA GÖRE SATIŞ DETAYI</span>
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>
                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                <a href="javascript:;" class="reload"> </a>
                <a href="javascript:;" class="fullscreen"> </a>
                <a href="javascript:;" class="remove"> </a>
            </div>
        </div>
        <div class="portlet-body">
            <div id="chart_2" class="chart" style="height: 500px;"> </div>
        </div>
    </div>
    
    
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-bar-chart font-green-haze"></i>
                <span class="caption-subject bold uppercase font-green-haze"> YILLIK SATIŞLAR </span>
                <span class="caption-helper"> Yıllara Göre Satış Detayları</span>
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>
                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                <a href="javascript:;" class="reload"> </a>
                <a href="javascript:;" class="fullscreen"> </a>
                <a href="javascript:;" class="remove"> </a>
            </div>
        </div>
        <div class="portlet-body">
            <div id="chart_1" class="chart" style="height: 500px;"> </div>
        </div>
    </div>
    
    <div class="row">
    <div class="col-md-12">
        <div class="col-md-8">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-notebook font-dark"></i>
                        <span class="caption-subject bold uppercase">Carilerdem Alacaklarımız</span>
                    </div>
                    <div class="tools"></div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                        <tr>
                            <th>CARİ İSİM</th>
                            <th>TOPLAM BORÇ(₺)</th>
                            <th>VADESİ GEÇEN(₺)</th>
                            <th>VADESİ GEÇMEYEN(₺)</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat yellow">
                <div class="visual">
                    <i class="fa fa-try fa-spin fa-2x fa-fw"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q8[0]->ALACAK)); ?>">0</span> ₺</div>
                    <div class="desc"> Toplam Alacak </div>
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat yellow">
                <div class="visual">
                    <i class="fa fa-try fa-spin fa-2x fa-fw"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q8[0]->VADE)); ?>">0</span> ₺</div>
                    <div class="desc"> Vadesi Geçmiş Alacak </div>
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat yellow">
                <div class="visual">
                    <i class="fa fa-try fa-spin fa-2x fa-fw"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q9[0]->ALACAK)); ?>">0</span> ₺</div>
                    <div class="desc"> Toplam Borç </div>
                </div>

            </div>
        </div>

    </div>
    </div>
   
<h3 class="page-title">Gider Detayları <small>Gider Detaylarını aşağıda görebilirsiniz</small></h3>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>

                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->FAIZBANKA)); ?>">0</span> ₺</div>
                    <div class="desc"> Banka Komisyon ve Faiz Giderleri</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->PERSONELUCRET)); ?>">0</span> ₺</div>
                    <div class="desc"> Personel Ücretleri</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->MESAI)); ?>">0</span> ₺</div>
                    <div class="desc"> Fazla Mesai</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->YEMEK)); ?>">0</span> ₺</div>
                    <div class="desc"> Yemek Giderleri</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->ARACKIRA)); ?>">0</span> ₺</div>
                    <div class="desc"> Araç Kiraları</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->AKARYAKIT)); ?>">0</span> ₺</div>
                    <div class="desc"> Araç Yakıtları</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->PSERVIS)); ?>">0</span> ₺</div>
                    <div class="desc"> Personel Servisleri </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->DOGALGAZ)); ?>">0</span> ₺</div>
                    <div class="desc"> Doğalgaz Giderleri</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->ELEKTRIK)); ?>">0</span> ₺</div>
                    <div class="desc"> Elektrik Giderleri</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->SU)); ?>">0</span> ₺</div>
                    <div class="desc"> Su Giderleri</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->HABERLESME)); ?>">0</span> ₺</div>
                    <div class="desc"> Haberleşme Giderleri</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->TAZMINAT)); ?>">0</span> ₺</div>
                    <div class="desc"> Personel Tazminatları</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->AGIRLAMA)); ?>">0</span> ₺</div>
                    <div class="desc"> Temsil ,Ağırlama</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->KIRA)); ?>">0</span> ₺</div>
                    <div class="desc"> Kira Giderleri</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->STJ)); ?>">0</span> ₺</div>
                    <div class="desc"> Stajyer Öğrenci Giderleri</div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-try"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo e(number_format($q15[0]->STJ)); ?>">0</span> ₺</div>
                    <div class="desc"> Stajyer Öğrenci Giderleri</div>
                </div>

            </div>
        </div>


    </div>
    <!--begin::Portlet-->


    <!--end::Form-->

    <div class="m--space-10"></div>


    <h3 class="page-title">Yıl içindeki Gelir - Gider  <small>Kar Zarar Detayı</small></h3>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup" data-value="<?php echo e(number_format($q16[0]->GELIR)); ?>">0</span>
                            <small class="font-green-sharp">TL</small>
                        </h3>
                        <small>TOPLAM GELİRLER</small>
                    </div>
                    <div class="icon">
                          <i style="color: green" class="fa fa-try"></i>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup" data-value="<?php echo e(number_format($q16[0]->GIDER600+$q16[0]->GIDER700)); ?>">0</span>
                            <small class="font-green-sharp">TL</small>
                        </h3>
                        <small>TOPLAM GİDERLER</small>
                    </div>
                    <div class="icon">
                        <i style="color: green" class="fa fa-try"></i>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup" data-value="<?php echo e(number_format($q16[0]->SMM)); ?>">0</span>
                            <small class="font-green-sharp">TL</small>
                        </h3>
                        <small>SATILAN MALIN MALIYETI</small>
                    </div>
                    <div class="icon">
                        <i style="color: green" class="fa fa-try"></i>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <?php if($q16[0]->GELIR-($q16[0]->GIDER600+$q16[0]->GIDER700+$q16[0]->SMM) < 0): ?>
                            <h3 class="font-red">
                                <span data-counter="counterup" data-value="<?php echo e(number_format($q16[0]->GELIR-($q16[0]->GIDER600+$q16[0]->GIDER700+$q16[0]->SMM))); ?>">0</span>
                                <small  class="font-red">TL</small>
                            </h3>
                            <small>KAR/ZARAR</small>
                    </div>
                    <div class="icon">
                        <i style="color: red" class="fa fa-try fa-spin fa-2x fa-fw"></i>
                    </div>
                        <?php else: ?>
                        <h3 class="font-green">
                            <span data-counter="counterup" data-value="<?php echo e(number_format($q16[0]->GELIR-($q16[0]->GIDER600+$q16[0]->GIDER700+$q16[0]->SMM))); ?>">0</span>
                            <small  class="font-green">TL</small>
                        </h3>
                        <small>KAR/ZARAR</small>
                </div>
                <div class="icon">
                    <i style="color: green" class="fa fa-try fa-spin fa-2x fa-fw"></i>
                </div>
                        <?php endif; ?>


                </div>

            </div>


    </div>

    </div>


    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('link-js'); ?>
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
    <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="../../../assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>


    <!-- Datatable javascript code -->
    <script>

        $(document).ready(function() {
            $('#sample_1').DataTable({
                "order": [[ 1, "desc" ]],

                buttons: [
                    'excel',
                    'pdf',
                    'print'
                ],
                processing: true,
                serverSide: true,
                ajax: '<?php echo e(url('datatables')); ?>',
                columns: [
                    { data: 'CARI_ISIM', name: 'CARI_ISIM',search:{value:"MANAS",regex:"true"} },
                    { data: 'BORC', name: 'BORC',
                        render: $.fn.dataTable.render.number(',', '.', 2, '₺')},
                    { data: 'VADESI_GELEN',name: 'VADESI_GELEN',
                        render: $.fn.dataTable.render.number(',', '.', 2, '₺')},
                    { data: 'VADESI_GELMEYEN',name: 'VADESI_GELMEYEN',
                        render: $.fn.dataTable.render.number(',', '.', 2, '₺')}
                ]
            });
        });
    </script>
    <!-- amCharts javascript code -->
   

    <!-- Chart 1-->
    <script type="text/javascript">
   AmCharts.makeChart("chart_1",{type:"serial",theme:"light",pathToImages:App.getGlobalPluginsPath(),autoMargins:!1,marginLeft:30,marginRight:8,marginTop:10,marginBottom:26,fontFamily:"Open Sans",color:"#888",
       dataProvider:[
               <?php $__currentLoopData = $q11; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           {
               "year": "<?php echo e($data2->YIL); ?>",
               "income": "<?php echo e($data2->TOPLAM); ?>"
           },
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          ],
       valueAxes:[{axisAlpha:0,position:"left"}],startDuration:1,graphs:[{alphaField:"alpha",
           balloonText:"<span style='font-size:13px;'>[[category]]:<b> [[value]]</b> [[additional]]</span>",
           dashLengthField:"dashLengthColumn",fillAlphas:1,title:"Income",type:"column",valueField:"income"},
           {balloonText:"<span style='font-size:10px;'>[[category]]:<b> [[value]]</b> [[additional]]</span>",
               bullet:"round",dashLengthField:"dashLengthLine",lineThickness:3,bulletSize:7,bulletBorderAlpha:1,bulletColor:"#FFFFFF",useLineColorForBulletBorder:!0,bulletBorderThickness:3,fillAlphas:0,lineAlpha:1,title:"Expenses",valueField:"expenses"}],
       categoryField:"year",categoryAxis:{gridPosition:"start",axisAlpha:0,tickLength:0}});
   $("#chart_1").closest(".portlet").find(".fullscreen").click(function(){e.invalidateSize()})

    </script>
    <script type="text/javascript">
        AmCharts.makeChart("chart_2",{type:"serial",theme:"light",pathToImages:App.getGlobalPluginsPath(),autoMargins:!1,marginLeft:30,marginRight:8,marginTop:10,marginBottom:26,fontFamily:"Open Sans",color:"#888",
            dataProvider:[
                    <?php $__currentLoopData = $q10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                {
                    "year": "<?php echo e($data2->TARIH); ?>",
                    "income": "<?php echo e($data2->Y2018); ?>",
                    "expenses": "<?php echo e($data2->Y2017); ?>"
                },
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
            valueAxes:[{axisAlpha:0,position:"left"}],startDuration:1,graphs:[{alphaField:"alpha",
                balloonText:"<span style='font-size:13px;'>2018 [[category]]:<b>[[value]]</b> [[additional]]</span>",
                dashLengthField:"dashLengthColumn",fillAlphas:1,title:"Income",type:"column",valueField:"income"},
                {balloonText:"<span style='font-size:10px;'>2017 [[category]]:<b>[[value]]</b> [[additional]]</span>",
                    bullet:"round",dashLengthField:"dashLengthLine",lineThickness:3,bulletSize:7,bulletBorderAlpha:1,bulletColor:"#FFFFFF",useLineColorForBulletBorder:!0,bulletBorderThickness:3,fillAlphas:0,lineAlpha:1,title:"Expenses",valueField:"expenses"}],
            categoryField:"year",categoryAxis:{gridPosition:"start",axisAlpha:0,tickLength:0}});
        $("#chart_1").closest(".portlet").find(".fullscreen").click(function(){e.invalidateSize()})

    </script>

   <script>
        $("#select").on('change',function(){

            console.log($("#select").val());

            if($("#select").val()==2018)
            {
                location.href = '/dashboard2018';
            }
            if($("#select").val()==2019)
            {
                location.href = '/dashboard';
            }
        });
   </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts._default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>