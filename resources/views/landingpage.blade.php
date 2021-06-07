<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page : ไทยเครดิต</title>

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

        <section class="content-wrapper">
            <div class="banner-wrapper">
                <ul class="list-slide">
                    <li>
                        <div class="item">
                            <img class="d" src="{{ asset('assets/images/banner/banner-01.jpg')}}" alt="banner">
                            <img class="m" src="{{ asset('assets/images/banner/banner-01-m.jpg')}}" alt="banner">
                            <div class="btn-link register-online">
                                <a href="javascript:void(0)">
                                    <div class="text">สมัครออนไลน์</div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <img class="d" src="{{ asset('assets/images/banner/banner-02.jpg')}}" alt="banner">
                            <img class="m" src="{{ asset('assets/images/banner/banner-02-m.jpg')}}" alt="banner">
                            <div class="btn-link register-online">
                                <a href="javascript:void(0)">
                                    <div class="text">สมัครออนไลน์</div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- <section class="register-online-m">
            <div class="btn-link register-online">
                <a href="javascript:void(0)">
                    <div class="text">สมัครออนไลน์</div>
                    <div class="icon">
                        <img src="{{ asset('assets/images/icon/icon-RegisterOnline-orange.svg')}}" alt="banner">
                    </div>
                </a>
            </div>
        </section> -->
        
        <section class="content-wrapper -cashexpress">
            <div class="container">
                <div class="cashexpress-wrapper">
                    <div class="cashexpress-main">
                        <ul class="list-main">
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-lg-stretch">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-cashexpress">
                                                <img src="{{ asset('assets/images/cashexpress/img01.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 2 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>
                                                </div>
                                                <div class="btn-link register-online">
                                                    <a href="javascript:void(0)">
                                                        <div class="text">สมัครออนไลน์</div>
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-lg-stretch">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-cashexpress">
                                                <img src="{{ asset('assets/images/cashexpress/img02.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 4 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>
                                                </div>
                                                <div class="btn-link register-online">
                                                    <a href="javascript:void(0)">
                                                        <div class="text">สมัครออนไลน์</div>
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-lg-stretch">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-cashexpress">
                                                <img src="{{ asset('assets/images/cashexpress/img03.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 2 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>
                                                </div>
                                                <div class="btn-link register-online">
                                                    <a href="javascript:void(0)">
                                                        <div class="text">สมัครออนไลน์</div>
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-lg-stretch">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-cashexpress">
                                                <img src="{{ asset('assets/images/cashexpress/img04.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 4 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>
                                                </div>
                                                <div class="btn-link register-online">
                                                    <a href="javascript:void(0)">
                                                        <div class="text">สมัครออนไลน์</div>
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-lg-stretch">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-cashexpress">
                                                <img src="{{ asset('assets/images/cashexpress/img05.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 4 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>
                                                </div>
                                                <div class="btn-link register-online">
                                                    <a href="javascript:void(0)">
                                                        <div class="text">สมัครออนไลน์</div>
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                                        </div>
                                                    </a>
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


        <section class="content-wrapper bg-loancalculation">
            <div class="container">
                <div class="loancalculation-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="title text-white text-center">Loan Calculation</div>
                        </div>
                    </div>
                    <div class="row-section">
                        <div class="row align-items-lg-center">
                            <div class="col-lg-4">
                                <div class="title-loancalculation text-white">เลือกความต้องการของคุณ</div>
                            </div>
                            <div class="col-lg-8">
                                <div class="type-loan">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <div class="box-type active" id="">
                                                <div class="icon-check"></div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/images/icon/icon-typeloan-1.png')}}" alt="icon">
                                                </div>
                                                <div class="text">ต้องการวงเงินพร้อมใช้</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <div class="box-type" id="">
                                                <div class="icon-check"></div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/images/icon/icon-typeloan-2.png')}}" alt="icon">
                                                </div>
                                                <div class="text">ต้องการรวมหนี้ไว้ที่เดียว</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-section">
                        <div class="row align-items-lg-center">
                            <div class="col-lg-4">
                                <div class="title-loancalculation text-white">กรอกรายได้ต่อเดือนของคุณ</div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-12">
                                        <div class="style-input">
                                            <input class="inp-style text-center text-large fm_money" type="text" value="60000">
                                            <span class="text-before-input">฿</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row-section">
                        <div class="row align-items-lg-center">
                            <div class="col-lg-4">
                                <div class="title-loancalculation text-white">กรุณากรอกอัตราดอกเบี้ยของภาระหนี้รวมในปัจจุบัน</div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-12">
                                        <div class="style-input">
                                            <input class="inp-style text-center text-large fm_money" type="text" value="24">
                                            <span class="text-before-input">%</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row-section">
                        <div class="row align-items-lg-center">
                            <div class="col-lg-4">
                                <div class="title-loancalculation text-white">เลือกรูปแบบการผ่อนชำระ</div>
                            </div>
                            <div class="col-lg-8">
                                <div class="type-installment">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <div class="box-type active" id="">
                                                <div class="icon-check"></div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/images/icon/icon-min-installment.png')}}" alt="icon">
                                                </div>
                                                <div class="text">ผ่อนขั้นต่ำ</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <div class="box-type" id="">
                                                <div class="icon-check"></div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/images/icon/icon-normal-installment.png')}}" alt="icon">
                                                </div>
                                                <div class="text">ผ่อนรายงวด </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-section">
                        <div class="row align-items-lg-center">
                            <div class="col-lg-4">
                                <div class="title-loancalculation text-white">
                                    สามารถเลื่อนเพื่อเลือกอัตราผ่อนขั้นต่ำ และวงเงินรีไฟแนนซ์ที่ต้องการ
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="content-installment">
                                            <div class="range">
                                                <div class="box-limit">
                                                    <div class="min">
                                                        <div class="text">Limit</div>
                                                        <div class="value-min">30,000</div>
                                                    </div>
                                                    <div class="max">
                                                        <div class="style-input nobg">
                                                            <input class="inp-style js-value-limit-max" type="text" value="200000" placeholder="0" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="style-input rang-slide">
                                                    <input class="inp-style text-center irs" type="text">
                                                </div>
                                                <div class="box-payment">
                                                    <div class="min">
                                                        <div class="text">Payment</div>
                                                        <div class="value-min">1,000</div>
                                                    </div>
                                                    <div class="max">
                                                        <div class="style-input nobg">
                                                            <input class="inp-style js-value-payment-max" type="text" value="6100" placeholder="0" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid bg-color-orange">
                <div class="total-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="text-privilege">
                                    <img src="{{ asset('assets/images/bg-gift-text.png')}}" alt="image">
                                </div>
                                <div class="remark">
                                    หมายเหตุ :<br>
                                    การคำนวณดังกล่าวเป็นการคำนวณ
                                    เบื้องต้น ในการอนุมัติสินเชื่อขึ้นอยูกับ
                                    การพิจารณาจากเอกสารสมัคร
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="on-top">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">200,000</div>
                                                    <div class="text">วงเงินอนุมัติสูงสุด</div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">19%</div>
                                                    <div class="text">อัตราดอกเบี้ย</div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="btn-link color-primary">
                                                        <a href="javascript:void(0)">
                                                            <div class="text">สมัครออนไลน์</div>
                                                            <div class="icon">
                                                                <img src="{{ asset('assets/images/icon/icon-RegisterOnline-orange.svg')}}" alt="banner">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="on-bottom" id="t1_t1">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">200,000</div>
                                                    <div class="text">วงเงินที่ต้องการ</div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">6,100</div>
                                                    <div class="text">อัตราผ่อนขั้นต่ำต่อเดือน</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="on-bottom" id="t2_t1" style="display: none;">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">200,000</div>
                                                    <div class="text">วงเงินรีไฟแนนซ์ที่ต้องการ</div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">6,100</div>
                                                    <div class="text">อัตราผ่อนขั้นต่ำต่อเดือน</div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">616</div>
                                                    <div class="text">ประหยัดดอกเบี้ยต่อเดือน</div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">7,397</div>
                                                    <div class="text">ประหยัดดอกเบี้ยต่อปี</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="on-bottom" id="t1_t2" style="display: none;">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">200,000</div>
                                                    <div class="text">วงเงินที่ต้องการ</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="on-bottom" id="t2_t2" style="display: none;">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">200,000</div>
                                                    <div class="text">วงเงินรีไฟแนนซ์ที่ต้องการ</div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">616</div>
                                                    <div class="text">ประหยัดดอกเบี้ยต่อเดือน</div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">7,397</div>
                                                    <div class="text">ประหยัดดอกเบี้ยต่อปี</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>เดือน</td>
                                                <td>12</td>
                                                <td>24</td>
                                                <td>36</td>
                                                <td>48</td>
                                                <td>60</td>
                                                <td>72</td>
                                            </tr>
                                            <tr>
                                                <td>รายงวด(บาท)</td>
                                                <td>3,600</td>
                                                <td>3,900</td>
                                                <td>4,500</td>
                                                <td>5,500</td>
                                                <td>7,600</td>
                                                <td>13,900</td>
                                            </tr>
                                            <tr>
                                                <td>ดอกเบี้ยต่อปี</td>
                                                <td>19%</td>
                                                <td>19%</td>
                                                <td>19%</td>
                                                <td>19%</td>
                                                <td>19%</td>
                                                <td>19%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-wrapper bg-interest-rate">
            <div class="interest-rate-wrapper">
                <div class="style-tab">
                    <ul class="nav nav-tabs content-tabs" id="interest-rate_tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="content-tab01" data-toggle="tab" href="#tab01" role="tab" aria-controls="tab01" aria-selected="true">อัตราดอกเบี้ย</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="content-tab02" data-toggle="tab" href="#tab02" role="tab" aria-controls="tab02" aria-selected="false">คุณสมบัติผู้สมัคร</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="content-tab03" data-toggle="tab" href="#tab03" role="tab" aria-controls="tab03" aria-selected="false">เอกสารการสมัคร</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="content-tab04" data-toggle="tab" href="#tab04" role="tab" aria-controls="tab04" aria-selected="false">เอกสารข้อมูลผลิตภัณฑ์</a>
                        </li>
                    </ul>
                    <div class="style-input">
                        <select class="selectpicker slc-style visible-xs" id="tab_selector">
                            <option value="0">อัตราดอกเบี้ย</option>
                            <option value="1">คุณสมบัติผู้สมัคร</option>
                            <option value="2">เอกสารการสมัคร</option>
                            <option value="3">เอกสารข้อมูลผลิตภัณฑ์</option>
                        </select>
                    </div>
                    
                    <div class="bg-tab-content">
                        <div class="tab-content tab-content-custom" id="Tab_Content">
                            <div class="tab-pane fade show active" id="tab01" role="tabpanel" aria-labelledby="content-tab01">
                                <div class="data-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="align-center vertical-middle bg-color-main">รายได้ประจำต่อเดือน</th>
                                                <th class="align-center bg-color-secondary">อัตราดอกเบี้ย (ต่อปี)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-center vertical-middle text-color-primary font-medium">30,000 - 49,999 บาท</td>
                                                <td class="align-center">17%-19% (MRR +8.20% - MRR +10.20%)</td>
                                            </tr>
                                            <tr>
                                                <td class="align-center vertical-middle text-color-primary font-medium">50,000 บาทขึ้นไป</td>
                                                <td class="align-center">15% (MRR +6.20%)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>
                                        หมายเหตุ : <br>
                                        - อัตราดอกเบี้ยข้างต้นเป็นอัตราดอกเบี้ย MRR ตามประกาศ บมจ.ธนาคารไทยเครดติเพื่อรายย่อยเท่ากับ 8.80% ต่อปีประกาศ ณ 13 เมษายน 2563 <br>
                                        - วงเงินอนุมัติสูงสุด 2 ล้านบาท การอนุมัติวงเงินกู้อัตราดอกเบย้ีเป็นไปตามหลักเกณฑ์และเงื่อนไขการพจิารณาสินเชื่อของธนาคาร
                                    </p>
                                </div>
                                <br>
                                <br>
                                <div class="btn-link register-online">
                                    <a href="javascript:void(0)">
                                        <div class="text">สมัครออนไลน์</div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab02" role="tabpanel" aria-labelledby="content-tab02">
                                <div class="list-group-wrapper">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <div class="icon">
                                                    <img class="d" src="{{ asset('assets/images/icon/icon-demo4.png')}}" alt="icon">
                                                </div>
                                                <div class="text">
                                                    <p class="title">1. บุคคลธรรมดา สัญชาติไทย</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <div class="icon">
                                                    <img class="d" src="{{ asset('assets/images/icon/icon-demo5.png')}}" alt="icon">
                                                </div>
                                                <div class="text">
                                                    <p class="title">2. อายุ 20 - 65ปี</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <div class="icon">
                                                    <img class="d" src="{{ asset('assets/images/icon/icon-demo6.png')}}" alt="icon">
                                                </div>
                                                <div class="text">
                                                    <p class="title">3. พนักงานบริษัทหรือพนักงานรัฐวิสาหกิจ</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <div class="icon">
                                                    <img class="d" src="{{ asset('assets/images/icon/icon-demo7.png')}}" alt="icon">
                                                </div>
                                                <div class="text">
                                                    <p class="title">4. รายได้ประจำตั้งแต่ 30,000บาทขึ้นไป</p>
                                                    <p class="desc">
                                                        (ประกอบด้วยเงินเดือน และสามารถรวมรายได้ประจำอื่นๆ ที่ได้รับเท่ากันทุกเดือน)
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <div class="icon">
                                                    <img class="d" src="{{ asset('assets/images/icon/icon-demo8.png')}}" alt="icon">
                                                </div>
                                                <div class="text">
                                                    <p class="title">5. อายุงานไม่ต่ำกว่า 4 เดือน</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="btn-link register-online">
                                    <a href="javascript:void(0)">
                                        <div class="text">สมัครออนไลน์</div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab03" role="tabpanel" aria-labelledby="content-tab03">
                                <div class="list-group-wrapper">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <div class="icon">
                                                    <img class="d" src="{{ asset('assets/images/icon/icon-demo1.png')}}" alt="icon">
                                                </div>
                                                <div class="text">
                                                    <p class="title">1. สำเนาบัตรประชาชนที่ยังไม่หมดอายุ </p>
                                                    <p class="desc">
                                                        (โดยต้องมีอายุคงเหลืออย่างน้อย 30 วัน นับจากวันที่ลงนามในใบสมัคร)
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <div class="icon">
                                                    <img class="d" src="{{ asset('assets/images/icon/icon-demo2.png')}}" alt="icon">
                                                </div>
                                                <div class="text">
                                                    <p class="title">2. สลิปเงินเดือน 1 เดือน หรือ หนังสือรับรองการทำงาน</p>
                                                    <p class="desc">
                                                        ตำแหน่ง เงินเดือน และ อายุงาน (อายุเอกสารย้อนหลังไม่เกิน 1 เดือน)
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <div class="icon">
                                                    <img class="d" src="{{ asset('assets/images/icon/icon-demo3.png')}}" alt="icon">
                                                </div>
                                                <div class="text">
                                                    <p class="title">3. สำเนาบัญชีเงินฝากที่เงินเดือนเข้าย้อนหลัง 4 เดือน</p>
                                                    <p class="desc">
                                                        ตำแหน่ง เงินเดือน และ อายุงาน (อายุเอกสารย้อนหลังไม่เกิน 1 เดือน)
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-link register-online">
                                    <a href="javascript:void(0)">
                                        <div class="text">สมัครออนไลน์</div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab04" role="tabpanel" aria-labelledby="content-tab04">
                                <div class="list-group-wrapper">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <div class="icon">
                                                    <img class="d" src="{{ asset('assets/images/icon/icon-demo9.png')}}" alt="icon">
                                                </div>
                                                <div class="text">
                                                    <p class="title">1. เอกสารข้อมูลสำคัญของผลิตภัณฑ์ (Product Sale Sheet) สินเชื่อหมุนเวียนส่วนบคุคล</p>
                                                    <div class="style-btn">
                                                        <div class="btn-link2">
                                                            <a href="#">
                                                                ดาวน์โหลดอัตราเบี้ย
                                                            </a>
                                                        </div>
                                                        <div class="btn-link2">
                                                            <a href="#">
                                                                ดูออนไลน์
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <div class="icon">
                                                    <img class="d" src="{{ asset('assets/images/icon/icon-demo10.png')}}" alt="icon">
                                                </div>
                                                <div class="text">
                                                    <p class="title">2. ตัวอย่างวิธีการคำนวณดอกเบี้ย/ยอดชำระสินเชื่อหมุนเวียนส่วนบุคคล</p>
                                                    <div class="style-btn">
                                                        <div class="btn-link2">
                                                            <a href="#">
                                                                ดาวน์โหลดอัตราเบี้ย
                                                            </a>
                                                        </div>
                                                        <div class="btn-link2">
                                                            <a href="#">
                                                                ดูออนไลน์
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-link register-online">
                                    <a href="javascript:void(0)">
                                        <div class="text">สมัครออนไลน์</div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-wrapper formcredit">
            <div class="container-fluid bg-formcredit">
                <div class="container formcredit-wrapper">
                    <div class="custom-progressbar">
                        <ul class="progressbar">
                            <li class="active">Step 1</li>
                            <li class="">Step 2</li>
                            <li>Step 3</li>
                        </ul>
                    </div>
                    
                    <div class="row row-custom-align-center">
                        <div class="col-lg-4 col-sm-12">
                            <div class="content-alert">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/icon/icon_smile.png')}}" alt="icon">
                                </div>
                                <div class="icon-quote -open">
                                    <img src="{{ asset('assets/images/icon/icon_quote.png')}}" alt="icon">
                                </div>
                                <div class="group-line">
                                    <div class="line1">สินเชื่อบุคคลไทยเครดิต สวัสดีค่ะ</div>
                                    <div class="line2">ลูกค้ากรอกข้อมูลเพื่อให้ธนาคารได้รู้จักคุณ</div>
                                </div>
                                <div class="icon-quote -close">
                                    <img src="{{ asset('assets/images/icon/icon_quote.png')}}" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                            <div class="form-wrapper">
                                <div class="box-form bg step1" style="display: block;">
                                    <form action="">
                                        <div class="title-sub text-blue icon icon-1">กรอกข้อมูลผู้สมัครสินเชื่อ</div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <input class="inp-style error" type="text" placeholder="ชื่อ*">
                                                    <div class="text-error">กรุณากรอกชื่อ</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="นามสกุล*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="เบอร์โทรศัพท์มือถือ*">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="LINE ID">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="อีเมล*">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <select id="slc_job" class="selectpicker slc-style error" title="เลือกอาชีพ*">
                                                        <option value="0">A</option>
                                                        <option value="1">B</option>
                                                        <option value="2">C</option>
                                                    </select>
                                                    <div class="text-error">กรุณาเลือกอาชีพ</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="ประสบการณ์การทำงาน (ปี)*">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="ระบุ (เดือน)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <select class="selectpicker slc-style" title="เลือกจังหวัด*">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="วงเงินที่ต้องการ*">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="group-btn">
                                        <button type="button" class="btn-type bg-main" id="next_step1">ถัดไป</button>
                                    </div>
                                </div>


                                <div class="box-form bg step2" style="display: none;">
                                    <form action="">
                                        <div class="title-sub text-blue in icon icon-2">รายได้</div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="รายได้ประจำต่อเดือน*">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="โบนัสประจำปี">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="รายได้ไม่ประจำต่อเดือน (อาทิ ค่าคอมมิชชั่น ค่าโอที )">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="title-sub text-blue in icon icon-3">ภาระหนี้ต่อเดือน</div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="สินเชื่อบ้าน/รถยนต์">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="สินเชื่อบุคคล">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="บัตรเครดิต">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="บัตรกดเงินสด">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="group-btn">
                                        <button type="button" class="btn-type bg-no" id="back_step1">ย้อนกลับ</button>
                                        <button type="button" class="btn-type bg-main" id="next_step2">ถัดไป</button>
                                    </div>
                                </div>

                                <div class="box-form bg step3" style="display: none;">
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
                                            <div class="title-sub text-blue in icon icon-4">วัตถุประสงค์การกู้ <span class="req">*</span></div>
                                            <div class="style-input">
                                                <ul class="list-item item01">
                                                    <li class="active">ต้องการวงเงินพร้อมใช้ </li>
                                                    <li>ต้องการรีไฟแนนซ์หนี้ </li>
                                                    <li>ต้องการทั้งสองข้อ</li>
                                                </ul>
                                            </div>
                                        </div>


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
                                        <button type="button" class="btn-type bg-main" id="regis" data-toggle="modal" data-target="#alert_Msg">สมัคร</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>


        <section class="content-wrapper information">
            <div class="container">
                <div class="information-wrapper">
                    <div class="title text-black">Other Information</div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="item-info">
                                <div class="hover-img">
                                    <div class="list" style="background-image: url('assets/images/information/img01.png');"></div>
                                </div>
                                <div class="content">
                                    <div class="title-info">เงินฝากแบบถอนได้ไม่จำกัด</div>
                                    <div class="desc-info">
                                        การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้
                                    </div>
                                    <div class="btn" data-toggle="modal" data-target="#modal_info">
                                        ดูเพิ่มเติม
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="item-info">
                                <div class="hover-img">
                                    <div class="list" style="background-image: url('assets/images/information/img02.png');"></div>
                                </div>
                                <div class="content">
                                    <div class="title-info">สินเชื่อไม่ใช้หลักประกัน</div>
                                    <div class="desc-info">
                                        การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้
                                    </div>
                                    <div class="btn">
                                        <a href="" target="_blank">
                                            ดูเพิ่มเติม
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="item-info">
                                <div class="hover-img">
                                    <div class="list" style="background-image: url('assets/images/information/img03.png');"></div>
                                </div>
                                <div class="content">
                                    <div class="title-info">บริการบัตรต่างๆ</div>
                                    <div class="desc-info">
                                        การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้
                                    </div>
                                    <div class="btn" data-toggle="modal" data-target="#modal_info">
                                        ดูเพิ่มเติม
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


        <!-- <section class="content-wrapper -menufooter m-0">
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
        </section> -->


        <footer class="footer-wrapper">
            <div class="container-fluid bg-footer">
                <div class="container">
                    <div class="contact-wrapper">
                        <div class="title text-white">ติดต่อ ธนาคารไทยเครดิต</div>
                        <div class="detail-contact">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 icon-path">
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
                                <div class="col-md-4 col-lg-3 icon-path">
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
                                <div class="col-md-4 col-lg-3 icon-path">
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


    <!-- Modal -->
    <div class="modal fade custom" id="alert_Msg" tabindex="-1" role="dialog" aria-labelledby="alertmessage" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="icon-close" data-dismiss="modal">
                    <img src="{{ asset('assets/images/icon/icon-close-modal.svg')}}" alt="icon close">
                </div>
                <div class="modal-body">
                    <div class="text-body">ขอบคุณที่สนใจสินเชื่อบุคคลไทยเครดิต</div>
                    <!-- <div class="text-body">ขออภัย<br>ข้อมูลของท่านไม่ตรงกับนโยบายของธนาคาร</div> -->
                    <p class="desc-body">ธนาคารได้รับข้อมูลของท่านเรียบร้อยแล้ว เจ้าหน้าที่จะติดต่อท่านกลับไปโดยเร็วที่สุด</p>
                    <!-- <p class="desc-body">ขอบคุณที่สนใจผลิตภัณฑ์ของไทยเครดิต ธนาคารหวังว่าจะมีโอกาสให้บริการท่านในโอกาสถัด</p> -->
                    <div class="btn-link color-primary">
                        <a href="javascript:void(0)">
                            <div class="text">ตกลง</div>
                            <!-- <div class="text">ย้อนกลับ</div> -->
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/icon-right.svg')}}" alt="banner">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal-infomation -->
    <div class="modal fade custom custom-info" id="modal_info" tabindex="-1" role="dialog" aria-labelledby="modalinfo" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="icon-close" data-dismiss="modal">
                    <img src="{{ asset('assets/images/icon/icon-close-modal.svg')}}" alt="icon close">
                </div>
                <div class="modal-body">
                    <div class="text-body">เงินฝากแบบถอนได้ไม่จำกัด</div>
                    <p class="desc-body">
                        บัญชีเงินฝากที่คล่องตัวสูง สะดวกสบายกับการใช้จ่ายประจำวันที่ให้คุณสะดวกในการฝาก-ถอนได้ทุกวัน ไม่จำกัดจำนวนครั้ง และจำนวนเงิน พร้อมเบิกถอนสะดวกผ่านบัตร ATM
                    </p>
                    
                </div>
            </div>
        </div>
    </div>


    <!-- Modal-consent -->
    <div class="modal fade custom custom-consent" id="modal_conset" tabindex="-1" role="dialog" aria-labelledby="modalinfo" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="icon-close" data-dismiss="modal">
                    <img src="{{ asset('assets/images/icon/icon-close-modal.svg')}}" alt="icon close">
                </div>
                <div class="modal-body">
                    <div class="text-body">ข้าพเจ้าตกลงและยินยอมให้ธนาคารเก็บรวบรวมใช้หรือเปิดเผยข้อมูลส่วนบุคคลของข้าพเจ้า</div>
                    <p class="desc-body">
                        เพื่อติดต่อ นำเสนอหรือประชาสัมพันธ์ผลิตภัณฑ์และบริการต่างๆ ให้คำปรึกษาทางการเงินหรือเพื่อวัตถุประสงค์ทางการตลาดของธนาคาร 
                    </p>
                    <div class="consent">
                        <div class="style-input checkbox">
                            <input class="chk" type="checkbox" id="consent" name="" value="">
                            <label for="consent"> ข้าพเจ้าตกลงและยินยอม</label><br>
                        </div>
                    </div>
                    <div class="btn-link color-primary" data-toggle="modal" href="#alert_Msg">
                        <a href="javascript:void(0)">
                            <div class="text">ตกลง</div>
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/icon-right.svg')}}" alt="banner">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


<script>
    $(document).ready(function () {

        var $range = $(".irs"),
            $from = $(".js-value-limit-max, .js-value-limit-max2"),
            range,
            min = 30000,
            max = 200000,
            from;

        var updateValues = function () {
            $from.prop("value", from);
        };
        $range.ionRangeSlider({
            min: min,
            max: max,
            grid: false,
            step: 1000,
            from: 200000,//ถ้าไม่fix ให้เอาออก
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
            step: 250,
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

        $('.list-slide').slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            autoplay: false,
            autoplaySpeed: 5000,
            speed: 2000,
        });

        $('.list-thumb').slick({
            infinite: false,
            slidesToShow: 4,
            asNavFor: '.list-main',
            focusOnSelect: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1025,//start device 768
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 769,//start device 768
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 576,//start device 575
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                    }
                },
            ]
        });
        $('.list-main').slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.list-thumb',
            arrows: true,
            autoplay: false,
            autoplaySpeed: 5000,
            speed: 2000,
            responsive: [
                {
                    breakpoint: 769,//start device 768
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
            ]
        });


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
            // $('.min-installment').slideDown();
            // $('.normal-installment').slideUp();
            $('.content-installment').find('.range .box-payment').show();
            $('.for_normal_installment').slideUp();
        });
        $('#normal_installment').click(function(){
            // $('.normal-installment').slideDown();
            // $('.min-installment').slideUp();
            $('.content-installment').find('.range .box-payment').hide();
            $('.for_normal_installment').slideDown();

        });

        $('.list-type .text-type').click(function(){
            $('.list-type .text-type').removeClass('active');
            $(this).addClass('active');

            $('.type-select').toggleClass('slide');
        });
        $('#type_1').click(function(){
            $('.for_type1').show();
            $('.for_type2').hide();
        });
        $('#type_2').click(function(){
            $('.for_type1').hide();
            $('.for_type2').show();
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

            $('.progressbar li').eq(1).addClass('active');

            $('.content-alert .group-line .line2').text('ลูกค้ากรอกข้อมูลเกี่ยวกับรายได้');
        });
        $('#back_step1').click(function(){
            $('.step1').slideDown('slow');
            $('.step2').slideUp('slow');

            $('.progressbar li').eq(1).removeClass('active');

            $('.content-alert .group-line .line2').text('ลูกค้ากรอกข้อมูลเพื่อให้ธนาคารได้รู้จักคุณ');
        });
        $('#next_step2').click(function(){
            $('.step3').slideDown('slow');
            $('.step2').slideUp('slow');

            $('.progressbar li').eq(2).addClass('active');
        });
        $('#back_step2').click(function(){
            $('.step2').slideDown('slow');
            $('.step3').slideUp('slow');

            $('.progressbar li').eq(2).removeClass('active');
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


        $("#slc_job").change(function () {
            if ($(this).val() == "0") {
                $('#modal_conset').modal('show');
            }
        })
        $(document).on('show.bs.modal', '.modal', function (event) {
            var zIndex = 1040 + (10 * $('.modal:visible').length);
            $(this).css('z-index', zIndex);
            setTimeout(function () {
                $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
            }, 0);
        });
    });
</script>
    
</body>
</html>