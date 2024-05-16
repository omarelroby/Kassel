<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>من نحن | كاسل سوفت</title>
    <!-- font awesome icons -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap"
        rel="stylesheet"
    />
    <!--google-font-->
    <!-- title tag logo -->
    <link rel="shortcut icon" href="{{asset('frontStyle/img/logo.png')}}" type="image/x-icon" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/about.css')}}" />
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/style-ar2.css')}}" />
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/aboutAr.css')}}" />
</head>
<body class="cairo-uniquifier">
<div class="section" id="top">
    <div class="navbar" dir="rtl">
        <div class="animation-box">
            <div class="nav-logo">
                <a href="{{url('/')}}">كاسل</a>
            </div>
            <!-- <span class="jet"></span> -->
        </div>

        <nav class="menu" id="nav">
          <span class="nav-item" style="border-right: none !important">
            <a href="{{url('/')}}" data-i18n="home">الرئيسية</a>
          </span>
            <span class="nav-item">
            <a href="{{url('/about')}}" data-i18n="about">من نحن</a>
          </span>
            <span class="nav-item">
            <a href="{{url('/services')}}" data-i18n="services">الخدمات</a>
          </span>
            <span class="nav-item">
            <a href="{{url('/jobs')}}" data-i18n="career">الوظائف</a>
          </span>
            <span class="nav-item" style="border: none !important">
            <a href="{{url('/contact')}}" data-i18n="contact">اتصل بنا</a>
          </span>
        </nav>

        @php
            $currentLocale = app()->getLocale();
            // Retrieve the language name from language files
            $languageNames = [
                'en' => 'English',
                'ar' => 'العربية',
                // Add other languages as needed
            ];

            $currentLanguageName = $languageNames[$currentLocale] ?? '';
        @endphp
        <div class="language-btn dropdown"   onclick="toggleDropdown()">
            <button class="dropbtn"  >
                <i class="fa-solid fa-globe"></i>
                <i class="fa-solid fa-caret-down arrow-down"></i>
                {{$currentLanguageName}}

            </button>
            <div id="myDropdown" class="dropdown-content">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                    <a   hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>

                @endforeach
            </div>
        </div>


        <input type="checkbox" id="check" />
        <label for="#check" class="nav-icon">
            <i class="fa-solid fa-bars" id="menu-icon" onclick="hideSlider()"></i>
            <i class="fa-solid fa-x" id="close-icon" onclick="showSlider()"></i>
        </label>
    </div>


    <div class="container" dir="rtl">
        <div class="content">
            <h2>رائدة في عالم تكنولوجيا المعلومات منذ عام 2023</h2>
            <p>
                كاسيل شركة تكنولوجيا معلومات ديناميكية، تتفوق في تقديم حلول مبتكرة.
                بخبرتها الواسعة في تطوير الويب والتطبيقات والتسويق الرقمي وتحليل
                البيانات، تمكّن كاسيل الشركات من الازدهار في المشهد التكنولوجي
                المتطور باستمرار
            </p>

            <p>
                التزامهم بالدقة والإبداع ورضا العملاء يضع شركة كاسل كشريك موثوق به
                لأولئك الذين يبحثون عن حلول تكنولوجية متطورة
            </p>

            <div class="check-text">
                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <p>قم بإنشاء وإدارة أي عملية تلبي احتياجات عملك</p>
                </div>

                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <p>تحسين الكفاءة والإنتاجية. من التصور إلى التنفيذ</p>
                </div>

                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <p>وظائف كاملة بأسعار معقولة</p>
                </div>
            </div>
        </div>

        <div class="img img-about">
            <img src="{{asset('frontStyle/img/group-about.png')}}" alt="" />
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="content">
            <h4>أعضاء الفريق</h4>
            <h2>فريقنا المذهل</h2>
            <p>
                في كاسل، نحن أكثر من مجرد فريق؛ نحن عائلة من المبتكرين وحل المشكلات
                الإبداعية وعشاق التكنولوجيا الملتزمين بتحويل المنظر الرقمي. قوتنا
                تكمن في تنوعنا وخبرتنا والتزامنا الثابت بالتميز
            </p>
        </div>

        <div class="ceo-box">
            <div class="ceo-item" style="text-align: right">
                <h3 class="name">
                    <span class="primary">خالد </span>
                    <span class="primary">ناصر</span>
                </h3>

                <h4 class="job">المدير التنفيذي</h4>
                <h4 class="project">+70 مشروع</h4>
            </div>

            <div class="ceo-item" style="text-align: right">
                <h3 class="name">
                    <span class="primary">منير </span>
                    <span class="primary">شديد</span>
                </h3>

                <h4 class="job">مدير المالية</h4>
                <h4 class="project">+100 مشروع</h4>
            </div>

            <div class="ceo-item" style="text-align: right">
                <h3 class="name">
                    <span class="primary">عمرو </span>
                    <span class="primary">شديد</span>
                </h3>

                <h4 class="job">الشريك المؤسس</h4>
                <h4 class="project">+80 مشروع</h4>
            </div>

            <div class="ceo-item" style="text-align: right">
                <h3 class="name">
                    <span class="primary">سند </span>
                    <span class="primary">المجالى</span>
                </h3>

                <h4 class="job">المدير العام</h4>
                <h4 class="project">+100 مشروع</h4>
            </div>
        </div>
    </div>
</div>

<div class="section successfully-products">
    <div class="heading">
        <h1>
            <span class="primary">الخدمات </span>
            <span class="primary">التى نقدمها</span>
        </h1>

        <h2>
            <span class="primary">نجاح في تقديم المنتجات الالكترونيه</span>
        </h2>
    </div>

    <div class="container-product">
        <div class="product-box">
            <img src="{{asset('frontStyle/img/game.png')}}" alt="" />
            <h3 class="primary">العاب</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/eCommerce.png')}}" alt="" />
            <h3 class="primary">تجارة إلكترونية</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Finance.png')}}" alt="" />
            <h3 class="primary">التمويل</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Healthcare.png')}}" alt="" />
            <h3 class="primary">الرعاية الصحية</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Restaurant.png')}}" alt="" />
            <h3 class="primary">المطاعم</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Real estate.png')}}" alt="" />
            <h3 class="primary">العقارات</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Tour & Travels.png')}}" alt="" />
            <h3 class="primary">السياحه والسفر</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Education.png')}}" alt="" />
            <h3 class="primary">التعليم</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Transport.png')}}" alt="" />
            <h3 class="primary">النقل</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Event.png')}}" alt="" />
            <h3 class="primary">الفعاليات</h3>
        </div>
    </div>
</div>

<!--------------- FOOTER -------->
<div dir="rtl">
    <div class="foot">
        <div style="text-align: right" class="title-res">
            <a href="{{url('/')}}" class="kassel-footer">كاسل</a>
            <p class="title-kassel">
                تطوير المنتجات بسرعة وبشكلٍ قابل للصيانة يُحقق حلمك في بدء شركتك
                الناشئة، أو حتى حل مشكلة في عملك
            </p>
            <form action="" class="form">
                <input
                    type="text"
                    placeholder="البريد الالكترونى"
                    class="footer-input"
                />
                <input
                    type="submit"
                    value="ارسال بريد الكترونى"
                    class="footer-btn"
                />
            </form>
            <div class="footer-social" dir="">
                <h4>تابعنا</h4>
                <a
                    href="https://www.facebook.com/profile.php?id=61555183182719&mibextid=PlNXYD"
                    target="_blank"
                >
                    <div class="iconDiv">
                        <i class="fa-brands fa-facebook-f icon"></i>
                    </div>
                </a>
                <a
                    href="https://www.instagram.com/_kassel_?igsh=cTY1dmtxd29nODF3&utm_source=qr"
                    target="_blank"
                >
                    <div class="iconDiv">
                        <i class="fa-brands fa-instagram icon"></i>
                    </div>
                </a>
                <a href="https://pin.it/6CI41cw0A" target="_blank">
                    <div class="iconDiv">
                        <i class="fa-brands fa-pinterest-p icon"></i>
                    </div>
                </a>
                <a
                    href="https://x.com/kasselsoft/status/1751659476862537793?s=20"
                    target="_blank"
                >
                    <div class="iconDiv">
                        <i class="fa-brands fa-x-twitter icon"></i>
                    </div>
                </a>
                <a href="https://wa.me/message/74Q6F22FDGNYN1" target="_blank">
                    <div class="iconDiv">
                        <i class="fa-brands fa-whatsapp icon"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="company-title">
            <p>الشركة</p>
            <ul>
                <li>
                    <a href="{{url('/about')}}">من نحن</a>
                </li>
                <li>
                    <a href="{{url('/services')}}">الخدمات</a>
                </li>
                <li>
                    <a href="{{url('/jobs')}}">وظائف</a>
                </li>
            </ul>
        </div>
        <div class="company-title">
            <p>الدعم</p>
            <ul>
                <li>
                    <a href="conditionsAR.html" target="_blank">الشروط والاحكام</a>
                </li>
                <li>
                    <a href="privacyAr.Html" target="_blank">سياسة الخصوصية</a>
                </li>
                <li>
                    <a href="{{url('/contact')}}">اتصل بنا</a>
                </li>
            </ul>
        </div>
        <div class="company-title">
            <p>تواصل معنا</p>
            <ul>
                <li>
                    <span>info@kasselsoft.com</span>
                    <i class="fa-solid fa-globe contact-icon"></i>
                </li>
                <li>
                    <span>kasselsoft@kasselsoft.com</span>
                    <i class="fa-solid fa-envelope contact-icon"></i>
                </li>
                <li>
                    <span>شارع الملكة رانيا</span>
                    <i class="fa-solid fa-location-dot contact-icon"></i>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Float Button  -->
<div class="floating-container">
    <div class="floating-button" id="floating-button">
        <i class="fa-solid fa-headset"></i>
    </div>

    <div class="element-container" id="element-container">
        <span>
          <a
              href="
                https://www.facebook.com/profile.php?id=61555183182719&mib
                        extid=PlNXYD"
              target="_blank"
          >
            <i class="fa-brands fa-facebook-f"></i>
          </a>
        </span>
        <span class="instagram">
          <a
              href="
                https://www.instagram.com/_kassel_?igsh=cTY1dmtxd29nODF3&u
                        tm_source=qr"
              target="_blank"
          >
            <i class="fa-brands fa-instagram"></i>
          </a>
        </span>
        <span>
          <a
              href="https://pin.it/6CI41cw0A
                "
              target="_blank"
          >
            <i class="fa-brands fa-pinterest-p"></i>
          </a>
        </span>
        <span>
          <a
              href="https://x.com/kasselsoft/status/1751659476862537793?s=20
                "
              target="_blank"
          >
            <i class="fa-brands fa-x-twitter"></i>
          </a>
        </span>
        <span>
          <a
              href="https://wa.me/message/74Q6F22FDGNYN1
                "
              target="_blank"
          >
            <i class="fa-brands fa-whatsapp"></i>
          </a>
        </span>
    </div>
</div>

<!-- Back to Top Button  -->

<div class="back-top-button">
    <a href="#top">
        <i class="fa-solid fa-chevron-up"></i>
    </a>
</div>

<div class="cursor"></div>
<div class="cursor2"></div>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('frontStyle/JS/script.js')}}"></script>
<script src="{{asset('frontStyle/JS/float-button.js')}}"></script>
</body>
</html>
