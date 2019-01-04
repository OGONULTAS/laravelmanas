<?php $__env->startSection('title-page'); ?>


<?php $__env->startSection('sub_header_title1'); ?>
<?php $__env->startSection('sub_header_title2'); ?>
<?php $__env->startSection('sub_header_title3'); ?>

<?php $__env->startSection('link-css'); ?>
    <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="m-portlet m-portlet--full-height  ">
                <div class="m-portlet__body">
                    <div class="m-card-profile">
                        <div class="m-card-profile__title leftPanel">
                            <i href="/personeldetay" class="fa fa-arrow-left" id="ui"><a class="text-info small_text" href="/personeldetay">Personel Listesi</a></i>
											</div>
                        <div class="m-card-profile__pic">
                            <div class="m-card-profile__pic-wrapper">
                                <?php if(empty($s1->BILGI)): ?>
                                <img src="/personel/blank.jpg" alt="" />
                                <?php else: ?>
                                <img src="/personel/<?php echo e($sicil); ?>.jpg" alt="" />
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="m-card-profile__details">
                            <span class="m-card-profile__name"><?php echo e($s1->ADI); ?> <?php echo e($s1->SOYADI); ?></span>
                            <a href="#" class="m-card-profile__email m-link"><?php echo e($s1->YAS); ?> Yaşında</a> <br>
                            <a href="#" class="m-card-profile__email">Kan Grubu: <?php echo e($s1->KANGRUBU); ?></a>
                        </div>
                    </div>

                    <div class="m-portlet__body-separator">

                    </div>


                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8">
            <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                    <i class="flaticon-share m--hide"></i>
                                    Personel Detay Bilgileri
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                    <div class="tab-pane active">

                            <div class="m-portlet__body">

                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center "style="color:blueviolet;" role="alert">
                                            <strong><?php echo e($s1->ADI); ?> <?php echo e($s1->SOYADI); ?></strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center" style="color:blueviolet;" role="alert">
                                            <strong><?php echo e($s1->YIL); ?> Yıl <?php echo e($s1->YILEKSIGUN); ?> Gün'dür Çalışıyor</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center "style="color:blueviolet;" role="alert">
                                            <strong><?php echo e($s1->ACIKLAMA); ?></strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center"style="color:blueviolet;" role="alert">
                                            <?php if( $s1->MEDENIHAL =='E'): ?>
                                            <strong>Evli</strong>
                                            <?php endif; ?>
                                                <?php if( $s1->MEDENIHAL =='B'): ?>
                                                    <strong>Bekar<strong>
                                                <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center "style="color:blueviolet;" role="alert">
                                            <strong> Doğum Tarihi: <?php echo e(\Carbon\Carbon::parse($s1->DOG_TARIH)->formatLocalized('%d %B %Y')); ?></strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center " style="color:blueviolet;"role="alert">
                                            <strong>Telefon : <?php echo e($s1->SAHSICEPTEL); ?></strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center"style="color:blueviolet;" role="alert">
                                            <strong> Adres : <?php echo e($s1->EVADRES); ?> </strong>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-1 col-form-label"></label>
                                                <div class="col-8">
                                                    <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center"style="color:blueviolet;" role="alert">
                                                        <strong> BRÜT MAAŞ <?php echo e(number_format($s1->SICUCRETI,2,',','.')); ?> ₺ </strong>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label"></label>
                                            <div class="col-8">
                                                <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center"style="color:blueviolet;" role="alert">
                                                    <strong> NET MAAŞ <?php echo e(number_format($s1->SICNETI,2,',','.')); ?> ₺ </strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-3 col-form-label"></label>
                                            <div class="col-9">
                                                <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center"style="color:blueviolet;" role="alert">
                                                    <strong>SON ZAM ORANI  %<?php echo e(number_format($h1,2,',','.')); ?></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-7">
                                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                                            <div class="portlet box green">
                                                <div class="portlet-title">
                                                    <div class="caption text-center">
                                                        <i class="fa fa-info"></i >                   Ücret Geçmişi </div>
                                                    <div class="tools">
                                                        <a href="javascript:;" class="collapse"> </a>
                                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                        <a href="javascript:;" class="reload"> </a>
                                                        <a href="javascript:;" class="remove"> </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="table-scrollable">
                                                        <table class="table table-striped table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th STYLE="text-align: center"> # </th>
                                                                <th STYLE="text-align: center"> First Name </th>
                                                                <th STYLE="text-align: center"> Last Name </th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php for($i=0;$i<count($u1);$i++): ?>

                                                                <tr>
                                                                    <?php if($i+1<count($u1) and  ($u1[$i]->NET-$u1[$i+1]->NET )/ $u1[$i+1]->NET*100 >0 ): ?>
                                                                        <td  STYLE="text-align: center;width: auto;color: green" >%<?php echo e(round(($u1[$i]->NET-$u1[$i+1]->NET )/ $u1[$i+1]->NET*100,2)); ?></td>
                                                                    <?php else: ?>
                                                                        <td  STYLE="text-align: center;width: auto ;color: red" >%0 </td>
                                                                    <?php endif; ?>
                                                                    <td STYLE="text-align: center;width: auto">₺<?php echo e(number_format($u1[$i]->NET,2,',','.')); ?></td>
                                                                    <td STYLE="text-align: center;width: auto"><?php echo e($u1[$i]->YIL); ?></td>
                                                                </tr>

                                                                <?php endfor; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END SAMPLE TABLE PORTLET-->
                                        </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
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
    <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../../../assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts._default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>