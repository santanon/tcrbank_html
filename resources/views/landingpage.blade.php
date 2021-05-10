<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page : ไทยเครดิตsasas</title>

    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <link rel="canonical" href=""/>
    <!-- <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon"> -->

    <!-- Jquery -->
    <script src="{{ asset('js/jquery-1.12.3.js') }}"></script>
    <script src="{{ asset('js/jquery-ui-1.11.4.custom.js') }}"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;1,300&display=swap">

    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('slick/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css')}}">
    <script src="{{ asset('slick/slick.min.js') }}"></script>

    <!-- Range Slide -->
    <link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.min.css')}}">
    <script src="{{ asset('js/ion.rangeSlider.min.js') }}"></script>

    <!-- bootstrap-select -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css')}}">
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/content/landingpage.css')}}">

</head>
<body>
    <div class="wrapper-site">
        <header class="header-wrapper landingPage">
            <div class="container -custom">
                <div class="logo">
                    <a href="#" title="ไทยเครดิต">
                        <img src="{{ asset('assets/images/logo/logo.svg')}}" alt="logo thaicredit">
                    </a>
                </div>
            </div>
            
        </header>

        <section class="content-wrapper -banner">
            <div class="banner-wrapper">
                <ul class="list-slide">
                    <li>
                        <div class="item">
                            <img class="d" src="{{ asset('assets/images/banner/banner-01.jpg')}}" alt="banner">
                            <img class="m" src="{{ asset('assets/images/banner/banner-01-m.jpg')}}" alt="banner">
                            <div class="btn-link btn-link-banner color-primary register-online">
                                <a href="javascript:void(0)">
                                    <div class="text">สมัครออนไลน์</div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icon/icon-right.svg')}}" alt="banner">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <img class="d" src="{{ asset('assets/images/banner/banner-02.jpg')}}" alt="banner">
                            <img class="m" src="{{ asset('assets/images/banner/banner-02-m.jpg')}}" alt="banner">
                            <div class="btn-link btn-link-banner color-primary register-online">
                                <a href="javascript:void(0)">
                                    <div class="text">สมัครออนไลน์</div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icon/icon-right.svg')}}" alt="banner">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="register-online-m">
            <div class="btn-link btn-link-banner color-primary register-online">
                <a href="javascript:void(0)">
                    <div class="text">สมัครออนไลน์</div>
                    <div class="icon">
                        <img src="{{ asset('assets/images/icon/icon-right.svg')}}" alt="banner">
                    </div>
                </a>
            </div>
        </section>
        

        <section class="content-wrapper -cashexpress">
            <div class="container">
                <div class="cashexpress-wrapper">
                    <div class="cashexpress-main">
                        <ul class="list-main">
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="img-cashexpress">
                                                <img src="{{ asset('assets/images/cashexpress/img01.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 2 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>

                                                    ศูนย์ลูกค้าสัมพันธ์ โทร.0-2697-5454<br>
                                                    เวลา 08.00 – 22.00 น.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="img-cashexpress">
                                                <img src="{{ asset('assets/images/cashexpress/img02.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 4 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>

                                                    ศูนย์ลูกค้าสัมพันธ์ โทร.0-2697-5454<br>
                                                    เวลา 08.00 – 22.00 น.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="img-cashexpress">
                                                <img src="{{ asset('assets/images/cashexpress/img03.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 2 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>

                                                    ศูนย์ลูกค้าสัมพันธ์ โทร.0-2697-5454<br>
                                                    เวลา 08.00 – 22.00 น.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="img-cashexpress">
                                                <img src="{{ asset('assets/images/cashexpress/img04.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 4 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>

                                                    ศูนย์ลูกค้าสัมพันธ์ โทร.0-2697-5454<br>
                                                    เวลา 08.00 – 22.00 น.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="img-cashexpress">
                                                <img src="{{ asset('assets/images/cashexpress/img05.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 4 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>

                                                    ศูนย์ลูกค้าสัมพันธ์ โทร.0-2697-5454<br>
                                                    เวลา 08.00 – 22.00 น.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="cashexpress-thumb">
                        <ul class="list-thumb">
                            <li>
                                <div class="img-thumb">
                                    <img src="{{ asset('assets/images/cashexpress/img01-thumb.png')}}" alt="images">
                                </div>
                            </li>
                            <li>
                                <div class="img-thumb">
                                    <img src="{{ asset('assets/images/cashexpress/img02-thumb.png')}}" alt="images">
                                </div>
                            </li>
                            <li>
                                <div class="img-thumb">
                                    <img src="{{ asset('assets/images/cashexpress/img03-thumb.png')}}" alt="images">
                                </div>
                            </li>
                            <li>
                                <div class="img-thumb">
                                    <img src="{{ asset('assets/images/cashexpress/img04-thumb.png')}}" alt="images">
                                </div>
                            </li>
                            <li>
                                <div class="img-thumb">
                                    <img src="{{ asset('assets/images/cashexpress/img05-thumb.png')}}" alt="images">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section class="content-wrapper -loancalculation">
            <div class="container-fluid bg-loancalculation">
                <div class="container">
                    <div class="loancalculation-wrapper">
                        <div class="row">
                            <div class="col-sm-12 col-lg-4 head">
                                <div class="title text-white title-loancal">Loan Calculation</div>
                                <div class="btn-link color-primary register-online">
                                    <a href="javascript:void(0)">
                                        <div class="text">สมัครออนไลน์</div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon/icon-right.svg')}}" alt="banner">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-8">
                                <div class="caculate-wrapper">
                                    <div class="revenue">
                                        <div class="title text-white">กรอกรายได้ต่อเดือนของคุณ</div>
                                        <div class="style-input">
                                            <input class="inp-style text-center text-large fm_money" type="text" value="50000" placeholder="0">
                                        </div>
                                        
                                    </div>

                                    <div class="initial-maximum">
                                        <div class="title text-white">วงเงินอนุมัติสูงสุดเบื้องต้น</div>

                                        <div class="financial-amount">
                                            <div class="style-input nobg">
                                                <input class="inp-style text-center text-large js-value fm_money" type="text" placeholder="250000" readonly>
                                            </div>
                                        </div>

                                        <div class="range">
                                            <div class="style-input">
                                                <input class="inp-style text-center irs" type="text">
                                            </div>
                                        </div>

                                        <div class="installment">
                                            <div class="title text-white">เลือกรูปแบบการผ่อนชำระ</div>
                                            <div class="type-installment">
                                                <div class="box-type active" id="min_installment">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/icon/icon-min-installment.svg')}}" alt="icon">
                                                    </div>
                                                    <div class="text">ผ่อนชำระ<br>ขั้นต่ำ</div>
                                                </div>
                                                <div class="box-type" id="normal_installment">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/icon/icon-normal-installment.svg')}}" alt="icon">
                                                    </div>
                                                    <div class="text">ผ่อน<br>รายงวด </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="min-installment">
                                <div class="col-12">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-8 col-sm-12">
                                            <div class="detail">
                                                <div class="item">
                                                    <div class="top">อัตราดอกเบี้ยพิเศษ</div>
                                                    <div class="middle">15%</div>
                                                    <div class="bottom">(MRR +6.20%)</div>
                                                </div>
                                                <div class="item">
                                                    <div class="top">ผ่อนชำระขั้นต่ำเพียง</div>
                                                    <div class="middle">39,800</div>
                                                    <div class="bottom">บาท/เดือน</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="normal-installment" style="display: none;">
                                <div class="col-12">
                                    <div class="data-table">
                                        <div class="table-responsive">
                                            <table class="table table-custom">
                                                <thead>
                                                    <tr>
                                                        <th class="align-center bg-color-main">Period</th>
                                                        <th class="align-center bg-color-main">Interest Rate</th>
                                                        <th class="align-center bg-color-secondary">Monthly Payment</th>
                                                        <th class="align-center bg-color-secondary">Minimum Payment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-color-primary font-medium">6 เดือน</td>
                                                        <td class="align-center">15%</td>
                                                        <td class="align-center">139,000</td>
                                                        <td class="align-center">139,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-color-primary font-medium">12 เดือน</td>
                                                        <td class="align-center">15%</td>
                                                        <td class="align-center">76,400</td>
                                                        <td class="align-center">76,400</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-color-primary font-medium">24 เดือน</td>
                                                        <td class="align-center">15%</td>
                                                        <td class="align-center">39,800</td>
                                                        <td class="align-center">39,800</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="remark text-white">หมายเหตุ : XXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div>
                </div>
            </div>
        </section>

        <section class="content-wrapper">
            <div class="container">
                <div class="interest-rate-wrapper">
                    <div class="style-tab">
                        <ul class="nav nav-tabs content-tabs" id="interest-rate_tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="interest-tab" data-toggle="tab" href="#interest" role="tab" aria-controls="interest" aria-selected="true">อัตราดอกเบี้ย</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="applicant-tab" data-toggle="tab" href="#applicant" role="tab" aria-controls="applicant" aria-selected="false">คุณสมบัติผู้สมัคร</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="documents-tab" data-toggle="tab" href="#documents" role="tab" aria-controls="documents" aria-selected="false">เอกสารการสมัคร</a>
                            </li>
                        </ul>
                        <div class="style-input">
                            <select class="selectpicker slc-style visible-xs" id="tab_selector">
                                <option value="0">อัตราดอกเบี้ย</option>
                                <option value="1">คุณสมบัติผู้สมัคร</option>
                                <option value="2">เอกสารการสมัคร</option>
                            </select>
                        </div>
                        
                        <div class="tab-content" id="Tab_Content">
                            <div class="tab-pane fade show active" id="interest" role="tabpanel" aria-labelledby="interest-tab">
                                <div class="data-table">
                                    <div class="table-responsive">
                                        <table class="table table-custom border-custom">
                                            <thead>
                                                <tr>
                                                    <th class="align-center vertical-middle bg-color-main" rowspan="2">วงเงินอนุมัติ (บาท)</th>
                                                    <th class="align-center vertical-middle bg-color-main" rowspan="2">ระยะเวลาผ่อนชำระ (เดือน)</th>
                                                    <th class="align-center bg-color-secondary" colspan="3">อัตราดอกเบี้ย (ต่อปี)</th>
                                                </tr>
                                                <tr>
                                                    <th class="align-center" style="background-color: #6DBCF0;">ผู้มีบัญชีเงินเดือนผ่าน</th>
                                                    <th class="align-center" style="background-color: #FAA560;">ผู้มีเงินเดือน/รายได้ประจำ</th>
                                                    <th class="align-center" style="background-color: #FCA5B7;">เจ้าของกิจการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="vertical-middle text-color-primary font-medium" rowspan="3">ตั้งแต่ 200,000 บาทขึ้นไป</td>
                                                    <td class="align-center">12</td>
                                                    <td class="align-center">ดอกเบี้ยพิเศษ 15%</td>
                                                    <td class="align-center">ดอกเบี้ยพิเศษ 17%</td>
                                                    <td class="align-center vertical-middle" rowspan="3">20%</td>
                                                </tr>
                                                <tr>
                                                    <td class="align-center">18 24 36 48 60</td>
                                                    <td class="align-center">ดอกเบี้ยพิเศษ 16%</td>
                                                    <td class="align-center">ดอกเบี้ยพิเศษ 18%</td>
                                                </tr>
                                                <tr>
                                                    <td class="align-center">12 18 24 36 48 60</td>
                                                    <td class="align-center">ดอกเบี้ยพิเศษ 17%</td>
                                                    <td class="align-center">ดอกเบี้ยพิเศษ 19%</td>
                                                </tr>


                                                <tr>
                                                    <td class="vertical-middle text-color-primary font-medium">80,001 - 240,000</td>
                                                    <td class="align-center">12 18 24 36 48 60</td>
                                                    <td class="align-center">21%</td>
                                                    <td class="align-center">22%</td>
                                                    <td class="align-center">24%</td>
                                                </tr>

                                                <tr>
                                                    <td class="vertical-middle text-color-primary font-medium">20,001 - 80,000</td>
                                                    <td class="align-center">12 18 24 36 48 60</td>
                                                    <td class="align-center vertical-middle" rowspan="2">21%</td>
                                                    <td class="align-center vertical-middle" rowspan="2">22%</td>
                                                    <td class="align-center vertical-middle" rowspan="2">24%</td>
                                                </tr>
                                                <tr>
                                                    <td class="vertical-middle text-color-primary font-medium">6,001 - 20,000</td>
                                                    <td class="align-center" style="border-bottom-right-radius: 0;">12 18 24</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br><br>
                                <div class="remark text-black">หมายเหตุ : XXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div>
                                <br><br>
                                <div class="btn-link2">
                                    <a href="#">
                                        <div class="text">ดาวน์โหลดอัตราเบี้ย</div>
                                    </a>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="applicant" role="tabpanel" aria-labelledby="applicant-tab">...</div>
                            <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-wrapper formcredit">
            <div class="container-fluid bg-formcredit">
                <div class="container formcredit-wrapper">
                    <div class="custom-progressbar">
                        <div class="progress">
                            <div class="progress-bar step-progress-1">
                                <div class="status-bar">0%</div>
                            </div>
                        </div>
                        <div class="text-status">Status</div>
                    </div>
                    <div class="custom-title-sub">
                        <div class="title-sub text-white">ข้อมูลส่วนตัว</div>
                    </div>
                    
                    <div class="row row-custom-align-center">
                        <div class="col-lg-4 col-sm-12">
                            <div class="content-alert">
                                <div class="group-line">
                                    <div class="line1">สินเชื่อบุคคลไทยเครดิต สวัสดีค่ะ</div>
                                    <div class="line2">ลูกค้ากรอกข้อมูลเพื่อให้ธนาคารได้รู้จักคุณ</div>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/images/icon/icon-msg.svg')}}" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                            <div class="form-wrapper">
                                <div class="title-sub text-white text-center icon">กรอกข้อมูลผู้สมัครสินเชื่อ</div>
                                <div class="box-form bg-white step1" style="display: block;">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">ชื่อ <span class="req">*</span></label>
                                                    <input class="inp-style" type="text" placeholder="ชื่อ">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="style-input">
                                                    <label for="" class="title-field">นามสกุล <span class="req">*</span></label>
                                                    <input class="inp-style" type="text" placeholder="นามสกุล">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">เบอร์โทรศัพท์มือถือ <span class="req">*</span></label>
                                                    <input class="inp-style" type="text" placeholder="เบอร์โทรศัพท์มือถือ">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">LINE ID <span class="req">*</span></label>
                                                    <input class="inp-style" type="text" placeholder="LINE ID">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">อีเมล <span class="req">*</span></label>
                                                    <input class="inp-style" type="text" placeholder="อีเมล">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">อาชีพ <span class="req">*</span></label>
                                                    <select class="selectpicker slc-style" title="เลือก">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">ประสบการณ์การทำงาน <span class="req">*</span></label>
                                                    <input class="inp-style" type="text" placeholder="ระบุ (ปี)">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field no-title"></label>
                                                    <input class="inp-style" type="text" placeholder="ระบุ (เดือน)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">จังหวัด <span class="req">*</span></label>
                                                    <select class="selectpicker slc-style" title="เลือก">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">วงเงินที่ต้องการ <span class="req">*</span></label>
                                                    <input class="inp-style" type="text" placeholder="ระบุ">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="group-btn">
                                        <button type="button" class="btn-type bg-main" id="next_step1">ถัดไป</button>
                                    </div>
                                </div>


                                <div class="box-form bg-white step2" style="display: none;">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">รายได้ประจำต่อเดือน <span class="req">*</span></label>
                                                    <input class="inp-style" type="text" placeholder="ระบุ">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="style-input">
                                                    <label for="" class="title-field">โบนัสประจำปี</label>
                                                    <input class="inp-style" type="text" placeholder="ระบุ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="style-input">
                                                    <label for="" class="title-field">รายได้ไม่ประจำต่อเดือน (อาทิ ค่าคอมมิชชั่น ค่าโอที)</label>
                                                    <input class="inp-style" type="text" placeholder="ระบุ">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="title-sub in text-blue">ภาระหนี้ต่อเดือน</div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">สินเชื่อบ้าน/รถยนต์</label>
                                                    <input class="inp-style" type="text" placeholder="ระบุภาระผ่อนต่อเดือน">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">สินเชื่อบุคคล</label>
                                                    <input class="inp-style" type="text" placeholder="ระบุภาระผ่อนต่อเดือน">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">บัตรเครดิต</label>
                                                    <input class="inp-style" type="text" placeholder="ยอดใช้จ่ายต่อเดือน">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <label for="" class="title-field">บัตรกดเงินสด</label>
                                                    <input class="inp-style" type="text" placeholder="ยอดใช้จ่ายต่อเดือน">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="group-btn">
                                        <button type="button" class="btn-type bg-no" id="back_step1">ย้อนกลับ</button>
                                        <button type="button" class="btn-type bg-main" id="next_step2">ถัดไป</button>
                                    </div>
                                </div>

                                <div class="box-form bg-white step3" style="display: none;">
                                    <form action="">
                                        <div class="result-initial">
                                            <div class="title-sub text-black text-center">วงเงินอนุมัติสูงสุดเบื้องต้น</div>
                                            <div class="financial-amount">
                                                <div class="style-input nobg">
                                                    <input class="inp-style text-center text-large js-value2" type="text" value="250000" placeholder="0" readonly>
                                                </div>
                                            </div>
                                            <div class="range">
                                                <div class="style-input">
                                                    <input class="inp-style text-center irs2" type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="group-result-initial">
                                            <div class="result-initial">
                                                <div class="title-sub text-black text-center">อัตราดอกเบี้ยพิเศษ</div>
                                                <div class="result-main">15% ต่อปี</div>
                                                <div class="result-mmr">(MRR +6.2%)</div>
                                            </div>
                                            <div class="result-initial">
                                                <div class="title-sub text-black text-center">ผ่อนชำระขั้นต่ำเพียง</div>
                                                <div class="result-main">500</div>
                                                <div class="result-mmr">บาท/เดือน</div>
                                            </div>
                                        </div>

                                        
                                        <div class="group-list">
                                            <div class="style-input">
                                                <label for="" class="title-field">วัตถุประสงค์การกู้ <span class="req">*</span></label>
                                                <ul class="list-item item01">
                                                    <li class="active">ต้องการวงเงินพร้อมใช้ </li>
                                                    <li>ต้องการรีไฟแนนซ์หนี้ </li>
                                                    <li>ต้องการทั้งสองข้อ</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- <div class="group-list">
                                            <div class="style-input">
                                                <label for="" class="title-field">รูปแบบการผ่อนชำระ <span class="req">*</span></label>
                                                <ul class="list-item item02">
                                                    <li>ชำระขั้นต่ำ</li>
                                                    <li>ชำระรายงวด</li>
                                                </ul>
                                            </div>
                                        </div> -->

                                        <div class="consent">
                                            <div class="style-input checkbox">
                                                <input class="chk" type="checkbox" id="accept" name="" value="">
                                                <label for="accept"> ยอมรับ</label><br>
                                            </div>

                                            <div class="text">
                                                “ตามที่ ท่านได้ให้ข้อมูลข้างต้นเพื่อให้เจ้าหน้าที่ของธนาคารติดต่อกลับ ท่านรับรองว่าข้อมูล
                                                ดังกล่าวเป็นของท่านจริง และยินยอมให้ธนาคารเก็บรวบรวมและใช้ข้อมูลนั้นในการติดต่อท่าน
                                                เพื่อให้คำปรึกษาทางการเงิน และนำเสนอผลิตภัณฑ์หรือบริการของธนาคาร ที่ท่านอาจสนใจ 
                                                และธนาคารเห็นว่าเหมาะสมและเป็นประโยชน์กับท่าน โปรดศึกษารายละเอียดเพิ่มเติมเกี่ยวกับ
                                                การคุ้มครองข้อมูลส่วนบุคคลของธนาคาร เพื่อที่ท่านจะได้ทราบและเข้าใจถึงวิธีการที่ธนาคาร
                                                เก็บรวบรวม ใช้ และเปิดเผยข้อมูล ตลอดจนสิทธิของท่านในฐานะเจ้าของข้อมูลส่วนบุคคลได้ที่ 
                                                นโยบายความเป็นส่วนตัว (Privacy Policy)”
                                            </div>
                                        </div>
                                        
                                    </form>

                                    <div class="group-btn">
                                        <button type="button" class="btn-type bg-no" id="back_step2">ย้อนกลับ</button>
                                        <button type="button" class="btn-type bg-main" id="regis">สมัคร</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>


        <section class="content-wrapper -information">
            <div class="container">
                <div class="information-wrapper">
                    <div class="title text-black">Other Information</div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="item-info">
                                <div class="hover-img">
                                    <div class="list" style="background-image: url('assets/images/information/img01.png');"></div>
                                </div>
                                <div class="content">
                                    <div class="title-info">เงินฝากแบบถอนได้ไม่จำกัด</div>
                                    <div class="desc-info">
                                        การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="item-info">
                                <div class="hover-img">
                                    <div class="list" style="background-image: url('assets/images/information/img02.png');"></div>
                                </div>
                                <div class="content">
                                    <div class="title-info">สินเชื่อไม่ใช้หลักประกัน</div>
                                    <div class="desc-info">
                                        การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="item-info">
                                <div class="hover-img">
                                    <div class="list" style="background-image: url('assets/images/information/img03.png');"></div>
                                </div>
                                <div class="content">
                                    <div class="title-info">บริการบัตรต่างๆ</div>
                                    <div class="desc-info">
                                        การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


        <section class="content-wrapper -menufooter m-0">
            <div class="container-fluid bg-color-primary">
                <div class="container">
                    <div class="menu-footer-wrapper">
                        <div class="accordion" id="menufooter">
                            <div class="card">
                                <div class="card-header" id="headfooter">
                                    <h2 class="mb-0">
                                        <div class="head-collapse icon-left" data-toggle="collapse" data-target="#collapsemenufooter" aria-expanded="true" aria-controls="collapsemenufooter">
                                            เมนูเพิ่มเติม
                                        </div>
                                    </h2>
                                </div>

                                <div id="collapsemenufooter" class="collapse" aria-labelledby="headfooter" data-parent="#menufooter">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer class="footer-wrapper">
            <div class="container-fluid bg-footer">
                <div class="container">
                    <div class="contact-wrapper">
                        <div class="title text-white">ติดต่อ ธนาคารไทยเครดิต</div>
                        <div class="detail-contact">
                            <div class="row">
                                <div class="col-sm-4 col-lg-3 icon-path">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icon/icon-location.svg')}}" alt="icon location">
                                    </div>
                                    <div class="text">
                                        <div class="title text-white">ที่อยู่</div>
                                        <div class="desc">
                                            123 ชั้น 1 อาคารไทยประกันชีวิต ถ.รัชดาภิเษกแขวงดินแดง เขตดินแดง กทม. 10400
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-3 icon-path">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icon/icon-customer.svg')}}" alt="icon customer">
                                    </div>
                                    <div class="text">
                                        <div class="title text-white">02 697 5454</div>
                                        <div class="desc">
                                            ศูนย์ลูกค้าสัมพันธ์
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-3 icon-path">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icon/icon-opening.svg')}}" alt="icon opening">
                                    </div>
                                    <div class="text">
                                        <div class="title text-white">08.00-22.00 น.</div>
                                        <div class="desc">
                                            เปิดทำการทุกวัน
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="list-menu -left">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets/images/icon/icon-job.svg')}}" alt="icon"> สมัครงาน
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets/images/icon/icon-faq.svg')}}" alt="icon"> FAQ
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="list-menu -right">
                                <ul>
                                    <li>
                                        <a href="#">
                                            นโยบายความเป็นส่วนตัว
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            นโยบายความเป็นส่วนตัวในการใช้คุกกี้
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>


    </div>





<script>
    $(document).ready(function () {

        $('.list-slide').slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 2000,
        });

        $('.list-thumb').slick({
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.list-main',
            focusOnSelect: true,
            arrows: true,
            responsive: [
                {
                    breakpoint: 769,//start device 768
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 426,//start device 425
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 376,//start device 375
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.list-main').slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.list-thumb',
            arrows: false,
        });


        var $range = $(".irs"),
            $from = $(".js-value"),
            range,
            min = 0,
            max = 250000,
            from;

        var updateValues = function () {
            $from.prop("value", from);
        };
        $range.ionRangeSlider({
            min: min,
            max: max,
            grid: true,
            from: 250000,//ถ้าไม่fix ให้เอาออก
            onChange: function (data) {
                from = data.from;
                updateValues();
            },
            onFinish: function (data) {
                from = data.from;     
                updateValues();
            },
            prettify: function (num) {
                var n = num.toString();
                n = n.replace(".", ",");
                return n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1\,");
            }
        });

        range = $range.data("ionRangeSlider");

        var updateRange = function () {
            range.update({
                from: from,
            });
        };
        $from.on("change", function () {
            from = +$(this).prop("value");
            if (from < min) {
                from = min;
            }
            updateValues();    
            updateRange();
        });            
    });
</script>

<script>
    $(document).ready(function () {
        var $range2 = $(".irs2"),
            $from2 = $(".js-value2"),
            range,
            min = 0,
            max = 250000,
            from;

        var updateValues = function () {
            $from2.prop("value", from);
        };
        $range2.ionRangeSlider({
            min: min,
            max: max,
            from: 250000,//ถ้าไม่fix ให้เอาออก
            grid: true,
            onChange: function (data) {
                from = data.from;
                updateValues();
            },
            onFinish: function (data) {
                from = data.from;     
                updateValues();
            },
            prettify: function (num) {
                var n = num.toString();
                n = n.replace(".", ",");
                return n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1\,");
            }
        });

        range = $range2.data("ionRangeSlider");

        var updateRange = function () {
            range.update({
                from: from,
            });
        };
        $from2.on("change", function () {
            from = +$(this).prop("value");
            if (from < min) {
                from = min;
            }
            updateValues();    
            updateRange();
        });
    });
</script>


<script>
    $(document).ready(function () {

        $('.selectpicker').selectpicker();


        $(".register-online").click(function() {
            $('html,body').animate({
                scrollTop: $(".formcredit").offset().top},
                1500);
        });

        $('.box-type').click(function(){
            $('.box-type').removeClass('active');
            $(this).addClass('active')
        });
        $('#min_installment').click(function(){
            $('.min-installment').slideDown();
            $('.normal-installment').slideUp();
        });
        $('#normal_installment').click(function(){
            $('.normal-installment').slideDown();
            $('.min-installment').slideUp();
        });


        $('.item01 li').click(function(){
            $('.item01 li').removeClass('active');
            $(this).addClass('active');
        });
        // $('.item02 li').click(function(){
        //     $('.item02 li').removeClass('active');
        //     $(this).addClass('active');
        // });


        $('#tab_selector').on('change', function (e) {
            $('.content-tabs li a').eq($(this).val()).tab('show');
        });


        $('#next_step1').click(function(){
            $('.step2').slideDown('slow');
            $('.step1').slideUp('slow');

            $('.progress-bar').removeClass('step-progress-1').addClass('step-progress-2');
            $('.status-bar').text('50%');
        });
        $('#back_step1').click(function(){
            $('.step1').slideDown('slow');
            $('.step2').slideUp('slow');

            $('.progress-bar').removeClass('step-progress-2').addClass('step-progress-1');
            $('.status-bar').text('0%');
        });
        $('#next_step2').click(function(){
            $('.step3').slideDown('slow');
            $('.step2').slideUp('slow');

            $('.progress-bar').removeClass('step-progress-2').addClass('step-progress-3');
            $('.status-bar').text('100%');
        });
        $('#back_step2').click(function(){
            $('.step2').slideDown('slow');
            $('.step3').slideUp('slow');

            $('.progress-bar').removeClass('step-progress-3').addClass('step-progress-2');
            $('.status-bar').text('50%');
        });


        // Comma thousand
        $('.fm_money').keyup(function (event) {
            // skip for arrow keys
            if (event.which >= 37 && event.which <= 40) return;
            // format number
            $(this).val(function (index, value) {
                return value
                .replace(/\D/g, "")
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                ;
            });
        });


    });
</script>
    
</body>
</html>