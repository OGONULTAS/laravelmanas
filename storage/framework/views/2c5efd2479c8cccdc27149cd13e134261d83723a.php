<?php $__env->startSection('title-page'); ?>


<?php $__env->startSection('sub_header_title1'); ?>
<?php $__env->startSection('sub_header_title2'); ?>
<?php $__env->startSection('sub_header_title3'); ?>

<?php $__env->startSection('link-css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__body m-portlet__body--no-padding">
                <div class="m-invoice-1">
                    <div class="m-invoice__wrapper">
                        <div class="m-invoice__head" style="background-image: url(/assets/app/media/img/bg/bg-6.jpg);">
                            <div class="m-invoice__container m-invoice__container--centered">
                                <div class="m-invoice__logo">
                                    <a href="#">
                                        <h1>FATURA</h1>
                                    </a>
                                    <a href="#">
                                        <img src="<?php echo e(url('assets/demo/default/media/img/logo/manas.png')); ?>">
                                    </a>
                                </div>
                                <span class="m-invoice__desc">
													<span>1.Organize Sanayi Bölgesi Anadolu Cad. No: 25</span>
													<span>Sincan/ANKARA</span>
												</span>
                                <div class="m-invoice__items">
                                    <div class="m-invoice__item">
                                        <span class="m-invoice__subtitle">CARİ</span>
                                        <span class="m-invoice__text"><?php echo e($fgetir[0]->CARI_ISIM); ?><br></span>
                                    </div>
                                    <div class="m-invoice__item">
                                        <span class="m-invoice__subtitle">TARİH</span>
                                        <span class="m-invoice__text"><?php echo e(\Carbon\Carbon::parse($fgetir[0]->STHAR_TARIH)->format('d-m-Y')); ?></span>
                                    </div>
                                    <div class="m-invoice__item">
                                        <span class="m-invoice__subtitle ">FATURA NO</span>
                                        <span class="m-invoice__text"><?php echo e($fgetir[0]->FISNO); ?></span>
                                    </div>

                                    <div class="m-invoice__item">
                                        <span class="m-invoice__subtitle">PLASİYER</span>
                                        <span class="m-invoice__text"><?php echo e($plasiyer[0]->PLASIYER); ?><br></span>
                                    </div>
                                    <div class="m-invoice__item">
                                        <span class="m-invoice__subtitle">SİPARİŞ NO</span>
                                        <span class="m-invoice__text"><?php echo e($fgetir[0]->STHAR_SIPNUM); ?><br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-invoice__body m-invoice__body--centered">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>STOK KODU</th>
                                        <th style="text-align: left">STOK ADI</th>
                                        <th>MIKTAR</th>
                                        <th>DOVIZ FIYATI</th>
                                        <th>BRİM FİYATI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $fgetir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td ><?php echo e($data->STOK_KODU); ?></td>
                                            <td style="width: 400px;text-align: left" ><?php echo e($data->STOK_ADI); ?></td>
                                            <td ><?php echo e(number_format($data->STHAR_GCMIK,0,',','.')); ?></td>
                                            <?php if($data->STHAR_DOVFIAT>0 and $data->STHAR_DOVTIP=='DOLAR'): ?>
                                                <td ><?php echo e(number_format($data->STHAR_DOVFIAT,4,',','.')); ?> $</td>
                                            <?php elseif($data->STHAR_DOVFIAT>0 and $data->STHAR_DOVTIP=='EURO'): ?>
                                                <td ><?php echo e(number_format($data->STHAR_DOVFIAT,4,',','.')); ?> €</td>
                                            <?php else: ?>
                                                <td  >0</td>
                                            <?php endif; ?>
                                            <td >₺ <?php echo e(number_format($data->STHAR_BF,4,',','.')); ?></td>

                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="m-invoice__footer">
                            <div class="m-invoice__container m-invoice__container--centered">
                                <div class="m-invoice__content">
                                    <span>BANK TRANSFER</span>
                                    <span><span>Account Name:</span><span>Barclays UK</span></span>
                                    <span><span>Account Number:</span><span>1234567890934</span></span>
                                    <span><span>Code:</span><span>BARC0032UK</span></span>
                                </div>
                                <div class="m-invoice__content">
                                    <span>TOTAL AMOUNT</span>
                                    <span class="m-invoice__price">$20.600.00</span>
                                    <span>Taxes Included</span>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts._default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>