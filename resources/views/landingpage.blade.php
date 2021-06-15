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

    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">
    <script src="{{ asset('js/aos.js') }}"></script>

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
                                    <div class="text">สมัคร</div>
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
                                    <div class="text">สมัคร</div>
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
                                                        <div class="text">สมัคร</div>
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
                                                        <div class="text">สมัคร</div>
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
                                                        <div class="text">สมัคร</div>
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
                                                        <div class="text">สมัคร</div>
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
                                                        <div class="text">สมัคร</div>
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
                            <div class="title text-white text-center">คำนวณวงเงินสินเชื่อเบื้องต้น</div>
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
                                            <div class="box-type need active" id="t1_1">
                                                <label>
                                                    <div class="icon-check"></div>
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/icon/icon-typeloan-1.svg')}}" alt="icon">
                                                    </div>
                                                    <div class="text">ต้องการวงเงินพร้อมใช้</div>
                                                    <input type="radio" name="loan_loan_type" value="cash" checked="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <div class="box-type need" id="t1_2">
                                                <label>
                                                    <div class="icon-check"></div>
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/icon/icon-typeloan-2.svg')}}" alt="icon">
                                                    </div>
                                                    <div class="text">ต้องการรวมหนี้ไว้ที่เดียว</div>
                                                    <input type="radio" name="loan_loan_type" value="refinace">
                                                </label>
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
                    <div class="row-section" id="field_interest" style="display: none;">
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
                                            <div class="box-type format" id="t2_1">
                                                <label>
                                                    <div class="icon-check"></div>
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/icon/icon-min-installment.svg')}}" alt="icon">
                                                    </div>
                                                    <div class="text">ผ่อนขั้นต่ำ</div>
                                                    <input type="radio" name="loan_istm_type" value="min_istn" checked="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <div class="box-type format" id="t2_2">
                                                <label>
                                                    <div class="icon-check"></div>
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/icon/icon-normal-installment.svg')}}" alt="icon">
                                                    </div>
                                                    <div class="text">ผ่อนรายงวด </div>
                                                    <input type="radio" name="loan_istm_type" value="istn">
                                                </label>
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
                                    สามารถเลื่อนเพื่อเลือกอัตราผ่อนขั้นต่ำ และวงเงินสินเชื่อที่ต้องการ
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
                                <div class="remark" id="remark_1">
                                    หมายเหตุ :<br>
                                    การคำนวณดังกล่าวเป็นการคำนวณ
                                    เบื้องต้น ในการอนุมัติสินเชื่อขึ้นอยูกับ
                                    การพิจารณาจากเอกสารสมัคร
                                </div>
                                <div class="remark" id="remark_2" style="display: none;">
                                    หมายเหตุ :<br>
                                    <ul>
                                        <li>
                                            การคำนวณดังกล่าวเป็นการคำนวณเบื้องต้น ในการอนุมัติสินเชื่อขึ้นอยู่กับการพิจารณาจากเอกสารการสมัคร
                                        </li>
                                        <li>
                                            การคำนวณอัตราดอกเบี้ยเบื้องต้น โดยเปรียบเทียบกับอัตรดอกเบี้ยของภาระหนี้ปัจจุบันที่ลูกค้ากรอกกับอัตราดอกเบี้ยของธนาคารที่นำเสนอในครั้งนี้
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="on-top">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">200,000</div>
                                                    <div class="text">วงเงินอนุมัติสูงสุด/บาท</div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">19%</div>
                                                    <div class="text">อัตราดอกเบี้ย/ต่อปี</div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="btn-link register-online color-primary ">
                                                        <a href="javascript:void(0)">
                                                            <div class="text">สมัคร</div>
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
                                                    <div class="text">วงเงินที่ต้องการ/บาท </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">6,100</div>
                                                    <div class="text">อัตราผ่อนขั้นต่ำต่อเดือน/บาท </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="on-bottom" id="t2_t1" style="display: none;">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">200,000</div>
                                                    <div class="text">วงเงินรีไฟแนนซ์ที่ต้องการ/บาท </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">6,100</div>
                                                    <div class="text">อัตราผ่อนขั้นต่ำต่อเดือน/บาท </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">616</div>
                                                    <div class="text">ประหยัดดอกเบี้ยต่อเดือน/บาท </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">7,397</div>
                                                    <div class="text">ประหยัดดอกเบี้ยต่อปี/บาท </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="on-bottom" id="t1_t2" style="display: none;">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">200,000</div>
                                                    <div class="text">วงเงินที่ต้องการ/บาท </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="on-bottom" id="t2_t2" style="display: none;">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">200,000</div>
                                                    <div class="text">วงเงินรีไฟแนนซ์ที่ต้องการ/บาท </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">616</div>
                                                    <div class="text">ประหยัดดอกเบี้ยต่อเดือน/บาท </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="value">7,397</div>
                                                    <div class="text">ประหยัดดอกเบี้ยต่อปี/บาท </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive" id="table_total" style="display: none;">
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
                                <div class="data-table ck-content">
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

                                <div class="data-table ck-content">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="align-center vertical-middle bg-color-main">รายได้ประจำต่อเดือน</td>
                                                <td class="align-center bg-color-secondary">อัตราดอกเบี้ย (ต่อปี)</td>
                                            </tr>
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
                                </div>
                                <br>
                                <br>
                                <div class="btn-link register-online">
                                    <a href="javascript:void(0)">
                                        <div class="text">สมัคร</div>
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
                                        <div class="text">สมัคร</div>
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
                                        <div class="text">สมัคร</div>
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
                                        <div class="text">สมัคร</div>
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
                            <li class="active">Step</li>
                            <li class="">Step</li>
                            <li>Step</li>
                        </ul>
                    </div>
                    
                    <div class="row row-custom-align-center" data-aos-delay="2000">
                        <div class="col-lg-4 col-sm-12">
                            <div class="content-alert" id="content_alert" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500" data-aos-once="true">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/icon/icon_smile.png')}}" alt="icon">
                                </div>
                                <div class="icon-quote -open">
                                    <img src="{{ asset('assets/images/icon/icon_quote.png')}}" alt="icon">
                                </div>
                                <div class="group-line group-line-loop" id="popup_step1">
                                    <div class="group-line" id="popup_step1_1">
                                        <div class="line1">ธนาคารไทยเครดิต สวัสดีค่ะ</div>
                                        <div class="line2">ลูกค้ากรอกข้อมูลเพื่อให้ธนาคารได้รู้จักคุณ</div>
                                    </div>
                                    <div class="group-line" id="popup_step1_2">
                                        <div class="line1">กรุณาตรวจสอบความถูกต้อง</div>
                                        <div class="line2">
                                        <span style="color: #013CA6; text-decoration: underline;">ของเบอร์โทรศัพท์อีกครั้ง</span><br>ก่อนกดถัดไป
                                        </div>
                                    </div>
                                </div>
                                <div class="group-line" id="popup_step2" style="display: none;">
                                    <div class="line1">ลูกค้ากรอกข้อมูลเพิ่มเติม</div>
                                    <div class="line2">เพื่อให้ธนาคารได้เข้าใจ<br>ความต้องการของคุณเพิ่มขึ้น</div>
                                </div>
                                <div class="group-line" id="popup_step3" style="display: none;">
                                    <div class="line1">ธนาคารขอนำเสนอวงเงินสินเชื่อเบื้องต้นแก่คุณ</div>
                                    <div class="line2">กดสมัครได้เลยค่ะ</div>
                                </div>
                                <div class="icon-quote -close">
                                    <img src="{{ asset('assets/images/icon/icon_quote.png')}}" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                            <div class="form-wrapper" data-aos="fade-left" data-aos-anchor="#content_alert" data-aos-delay="2000" data-aos-duration="500" data-aos-once="true">
                                <div class="box-form bg step1" style="display: block;">
                                    <form action="">
                                        <div class="title-sub text-blue icon icon-1">กรอกข้อมูลผู้สมัครสินเชื่อ</div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <input class="inp-style error" type="text" placeholder="ชื่อ*">
                                                    <div class="text-error">กรุณากรอกชื่อ</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                            <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="นามสกุล*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="เบอร์โทรศัพท์มือถือ*">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="LINE ID">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="อีเมล*">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <select id="slc_job" class="selectpicker slc-style error" title="เลือกอาชีพ*" data-size="5">
                                                        <option value="0">A</option>
                                                        <option value="1">B</option>
                                                        <option value="2">C</option>
                                                        <option value="3">D</option>
                                                        <option value="4">E</option>
                                                        <option value="5">F</option>
                                                    </select>
                                                    <div class="text-error">กรุณาเลือกอาชีพ</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="ประสบการณ์การทำงาน (ปี)*">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="ระบุ (เดือน)*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <select class="selectpicker slc-style" title="เลือกจังหวัด*" data-size="8">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
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
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="รายได้ประจำต่อเดือน*">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                            <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="โบนัสต่อปี">
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
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="ค่างวดผ่อนบ้าน/รถยนต์">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="ค่างวดสินเชื่อบุคคล">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="ยอดใช้จ่ายบัตรเครดิต">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="style-input">
                                                    <input class="inp-style" type="text" placeholder="ยอดใช้จ่ายบัตรกดเงินสด">
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
                                                    <li class="active">
                                                        <label for="">
                                                            ต้องการวงเงินพร้อมใช้
                                                            <input type="radio" name="type" value="0" checked>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label for="">
                                                            ต้องการรีไฟแนนซ์หนี้
                                                            <input type="radio" name="type" value="1">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label for="">
                                                            ต้องการทั้งสองข้อ
                                                            <input type="radio" name="type" value="2">
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="consent">
                                            <div class="style-input checkbox">
                                                <input class="chk" type="checkbox" id="accept_step3" name="" value="">
                                                <label for="accept_step3"> ยอมรับ</label><br>
                                            </div>
                                            <div class="text">
                                                “ตามที่ ท่านได้ให้ข้อมูลข้างต้นเพื่อให้เจ้าหน้าที่ของธนาคารติดต่อกลับ ท่านรับรองว่าข้อมูล
                                                ดังกล่าวเป็นของท่านจริง และยินยอมให้ธนาคารเก็บรวบรวมและใช้ข้อมูลนั้นในการติดต่อท่าน
                                                เพื่อให้คำปรึกษาทางการเงิน และนำเสนอผลิตภัณฑ์หรือบริการของธนาคาร ที่ท่านอาจสนใจ 
                                                และธนาคารเห็นว่าเหมาะสมและเป็นประโยชน์กับท่าน โปรดศึกษารายละเอียดเพิ่มเติมเกี่ยวกับ
                                                การคุ้มครองข้อมูลส่วนบุคคลของธนาคาร เพื่อที่ท่านจะได้ทราบและเข้าใจถึงวิธีการที่ธนาคาร
                                                เก็บรวบรวม ใช้ และเปิดเผยข้อมูล ตลอดจนสิทธิของท่านในฐานะเจ้าของข้อมูลส่วนบุคคลได้ที่ 
                                                <a href="https://www.tcrbank.com/th/privacypolicy" target="_blank">นโยบายความเป็นส่วนตัว (Privacy Policy)</a>”
                                            </div>
                                        </div>
                                    </form>

                                    <div class="group-btn">
                                        <button type="button" class="btn-type bg-no" id="back_step2">ย้อนกลับ</button>
                                        <button type="button" disabled class="btn-type bg-main" id="btn_submit" data-toggle="modal" data-target="#alert_Msg">สมัคร</button>
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
                                            123 ชั้น 1 อาคารไทยประกันชีวิต ถ.รัชดาภิเษก แขวงดินแดง เขตดินแดง กทม. 10400
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 icon-path">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icon/icon-customer.svg')}}" alt="icon customer">
                                    </div>
                                    <div class="text">
                                        <div class="title text-white">
                                            <a href="tel:02 697 5454">02 697 5454</a>
                                        </div>
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
                            <!-- <div class="list-menu -left">
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
                            </div> -->
                            <div class="list-menu -right">
                                <ul>
                                    <li>
                                        <a href="https://www.tcrbank.com/th/privacypolicy" target="_blank">
                                            นโยบายความเป็นส่วนตัว
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.tcrbank.com/th/cookiepolicy" target="_blank">
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


        <div class="loading">
            <div class="d-flex justify-content-center align-items-center">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>

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
                    <!-- <p class="desc-body">ขอบคุณที่สนใจผลิตภัณฑ์ของไทยเครดิต ธนาคารหวังว่าจะมีโอกาสให้บริการท่านในโอกาสถัดไป</p> -->
                    <div class="btn-link color-primary">
                        <a href="javascript:void(0)">
                            <div class="text">หน้าหลัก</div>
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
                    <!-- <div class="text-body"></div> -->
                    <p class="desc-body">
                    "ตามที่ ท่านได้ให้ข้อมูลข้างต้นเพื่อให้เจ้าหน้าที่ของธนาคารติดต่อกลับ ท่านรับรองว่าข้อมูลดังกล่าวเป็นของท่านจริงและยินยอมให้ธนาคารเก็บรวบรวมและใช้ข้อมูลนั้นในการติดต่อท่านเพื่อให้คำปรึกษาทางการเงิน และนำเสนอผลิตภัณฑ์หรือบริการของธนาคาร ที่ท่านอาจสนใจ และธนาคารเห็นว่าเหมาะสมและเป็นประโยชน์กับท่าน โปรดศึกษารายละเอียดเพิ่มเติมเกี่ยวกับการคุ้มครองข้อมูลส่วนบุคคลของธนาคาร
                    เพื่อที่ท่านจะได้ทราบและเข้าใจถึงวิธีการที่ธนาคารเก็บรวบรวม ใช้ และเปิดเผยข้อมูล ตลอดจนสิทธิของท่านในฐานะเจ้าของข้อมูลส่วนบุคคล ได้ที่ <a href="https://www.tcrbank.com/th/privacypolicy" target="_blank">นโยบายความเป็นส่วนตัว (Privacy Policy)</a>"
                    </p>
                    <div class="consent">
                        <div class="style-input checkbox">
                            <input class="chk" type="checkbox" id="consent_step1" name="" value="">
                            <label for="consent_step1">ยอมรับ</label><br>
                        </div>
                    </div>
                    <div class="group-btn">
                        <button type="button" disabled class="btn-type bg-main icon" id="btn_submit_consent" data-toggle="modal" href="#alert_Msg">ตกลง</button>
                    </div>
                </div>


                

            </div>
        </div>
    </div>




<script>
    AOS.init({
        duration: 5000,
        easing: 'linear'
    });
</script>

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
                {
                    breakpoint: 576,//start device 575
                    settings: {
                        dots: true,
                    }
                },
            ]
        });

        $(".register-online").click(function() {
            $('html,body').animate({
                scrollTop: $(".formcredit").offset().top - 50},
                1500);
        });

        $('.need').click(function(){
            $('.need').removeClass('active');
            $(this).addClass('active')
        });
        $('.format').click(function(){
            $('.format').removeClass('active');
            $(this).addClass('active')
        });
        
        $('.need').click(function(){
            $('.format').removeClass('active');
            $('.bg-color-orange').removeClass('show');
        });
        $('#t1_1').click(function(){
            $('#field_interest').hide();
            $('#remark_1').show();
            $('#remark_2').hide();
        });
        $('#t1_2').click(function(){
            $('#field_interest').show();
            $('#remark_1').hide();
            $('#remark_2').show();
        });
        $('#t2_1').click(function(){
            if($('#t1_1').hasClass('active')){
                $('#t1_t1').show();
                $('#t1_t2').hide();
                $('#t2_t1').hide();
                $('#t2_t2').hide();

                $('#table_total').hide();
                $('.bg-color-orange').addClass('show');
            }else{
                $('#t1_t1').hide();
                $('#t1_t2').hide();
                $('#t2_t1').show();
                $('#t2_t2').hide();

                $('#table_total').hide();
                $('.bg-color-orange').addClass('show');
            }
        });
        $('#t2_2').click(function(){
            if($('#t1_1').hasClass('active')){
                $('#t1_t1').hide();
                $('#t1_t2').show();
                $('#t2_t1').hide();
                $('#t2_t2').hide();

                $('#table_total').show();
                $('.bg-color-orange').addClass('show');
            }else{
                $('#t1_t1').hide();
                $('#t1_t2').hide();
                $('#t2_t1').hide();
                $('#t2_t2').show();

                $('#table_total').show();
                $('.bg-color-orange').addClass('show');
            }
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



        setInterval(function(){
            if ($("#popup_step1_2").is(":visible") == true){
                $("#popup_step1_2").fadeOut();
                $("#popup_step1_1").fadeIn();
            }
            else{
                $("#popup_step1_1").fadeOut();
                $("#popup_step1_2").fadeIn();
            }
        }, 6000);
        
        $('#next_step1').click(function(){
            $('.step2').slideDown('slow');
            $('.step1').slideUp('slow');

            $('.progressbar li').eq(1).addClass('active');

            $('.content-alert .group-line#popup_step1').fadeOut().next('.group-line#popup_step2').delay(500).fadeIn();
        });
        $('#back_step1').click(function(){
            $('.step1').slideDown('slow');
            $('.step2').slideUp('slow');

            $('.progressbar li').eq(1).removeClass('active');

            $('.content-alert .group-line#popup_step2').fadeOut().prev('.group-line#popup_step1, #popup_step1_1').delay(500).fadeIn();
        });
        $('#next_step2').click(function(){
            $('.step3').slideDown('slow');
            $('.step2').slideUp('slow');

            $('.progressbar li').eq(2).addClass('active');

            $('.content-alert .group-line#popup_step2').fadeOut().next('.group-line#popup_step3').delay(500).fadeIn();
        });
        $('#back_step2').click(function(){
            $('.step2').slideDown('slow');
            $('.step3').slideUp('slow');

            $('.progressbar li').eq(2).removeClass('active');
            $('.content-alert .group-line#popup_step3').fadeOut().prev('.group-line#popup_step2').delay(500).fadeIn();
        });

        //Consent
        $('#accept_step3').click(function(event) {
            if (this.checked) {
                $('#btn_submit').removeAttr('disabled', 'disabled');
            } else {
                $('#btn_submit').attr('disabled', 'disabled');
            }
        });
        $('#consent_step1').click(function(event) {
            if (this.checked) {
                $('#btn_submit_consent').removeAttr('disabled', 'disabled');
            } else {
                $('#btn_submit_consent').attr('disabled', 'disabled');
            }
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