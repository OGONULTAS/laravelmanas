@extends('layouts._default')
@section('title-page')


@section('sub_header_title1')
@section('sub_header_title2')
@section('sub_header_title3')

@section('link-css')
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
@stop

@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="m-portlet m-portlet--full-height  ">
                <div class="m-portlet__body">
                    <div class="m-card-profile">
                        <div class="m-card-profile__title">
                            <i href="/personeldetay" class="fa fa-arrow-left"  id="ui"><a class="text-info small_text" href="/personeldetay">Personel Listesi</a></i>
											</div>
                        <div class="m-card-profile__pic">
                            <div class="m-card-profile__pic-wrapper">
                                @if(empty($s1->BILGI))
                                <img src="/personel/blank.jpg" alt="" />
                                @else
                                <img src="/personel/{{$sicil}}.jpg" alt="" />
                                @endif
                            </div>
                        </div>
                        <div class="m-card-profile__details">
                            <span class="m-card-profile__name">{{$s1->ADI}} {{$s1->SOYADI}}</span>
                            <a href="#" class="m-card-profile__email m-link">{{$s1->YAS}} Yaşında</a> <br>
                            <a href="#" class="m-card-profile__email">Kan Grubu: {{$s1->KANGRUBU}}</a>
                        </div>
                    </div>

                    <div class="m-portlet__body-separator">

                    </div>
                    <div class="login">
                        <div class="heading">
                            <h6 style="font-style: oblique;font-size: 10px">Ücret Detaylarını Görüntülemek İçin Giriş Yapınız.</h6>
                            <form action="/personelpost2" method="post">
                                {{csrf_field()}}
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="hidden" class="form-control" id="sicil" name="sicil" value={{$s1->OZLUKID}}>
                                    <input type="text" class="form-control" id="kadi" name="kadi" minlength="1" required placeholder="Kullanıcı Adı ">
                                </div>


                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" id="pass" name="pass" minlength="4" required placeholder="Şifre">
                                </div>
                                <BR>

                                <button type="submit" id="button" class="btn m-btn--pill m-btn--air btn-outline-success btn-block">Giriş</button>
                            </form>
                        </div>
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
                                            <strong>{{$s1->ADI}} {{$s1->SOYADI}}</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center" style="color:blueviolet;" role="alert">
                                            <strong>{{$s1->YIL}} Yıl {{$s1->YILEKSIGUN}} Gün'dür Çalışıyor</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center "style="color:blueviolet;" role="alert">
                                            <strong>{{$s1->ACIKLAMA}}</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center"style="color:blueviolet;" role="alert">
                                            @if ( $s1->MEDENIHAL =='E')
                                            <strong>Evli</strong>
                                            @endif
                                                @if ( $s1->MEDENIHAL =='B')
                                                    <strong>Bekar<strong>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center "style="color:blueviolet;" role="alert">
                                            <strong> Doğum Tarihi: {{\Carbon\Carbon::parse($s1->DOG_TARIH)->formatLocalized('%d %B %Y')}}</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center " style="color:blueviolet;"role="alert">
                                            <strong>Telefon : {{$s1->SAHSICEPTEL}}</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label"></label>
                                    <div class="col-7">
                                        <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show text-center"style="color:blueviolet;" role="alert">
                                            <strong> Adres : {{$s1->EVADRES}} </strong>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
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
    <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../../../assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>

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