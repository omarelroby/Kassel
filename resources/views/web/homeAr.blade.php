<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>كاسل سوفت</title>
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
    <!-- <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"> -->

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/style.css')}}" />

    <link rel="stylesheet" href="{{asset('frontStyle/CSS/style-ar2.css')}}" />
</head>
<body class="cairo-uniquifier">
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
            <span class="nav-item">
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
        <div class="content" style="margin-right: 100px">
            <h2>أقوى الحلول</h2>
            <h1>
                <span> تجربة رقمية </span>
                <span> مع كاسل </span>
            </h1>
            <p style="padding-right: 0; width: 70%">
                تقوم كاسل بصناعة مواقع الويب وتطبيقات عالية الجودة، مزجًا بين
                الإبداع والوظائف. يثق العملاء في حلولهم الرقمية المبتكرة، التي تبرز
                خبرتها في الصناعة. باستخدام الذكاء الاصطناعي والتسويق الرقمي، تضمن
                كاسل الرؤية القصوى والمشاركة، مما يدفع نجاحها في السوق الإلكتروني.
            </p>

            <div class="primary-btn">
                <a href="{{url('/contact')}}" target="_blank">ابدأ مشروعك</a>
            </div>
        </div>

        <div class="animation">
          <span style="--i: 1">
            <img src="{{asset('frontStyle/img/web-design.png')}}" alt="" />
              <!-- <span class="jet"></span> -->
            <h2>تصميم المواقع</h2>
          </span>
            <span style="--i: 2">
            <img src="{{asset('frontStyle/img/web-development.png')}}" alt="" />
                <!-- <span class="jet"></span> -->
            <h2>تطوير المواقع</h2>
          </span>
            <span style="--i: 3">
            <img src="{{asset('frontStyle/img/app-design.png')}}" alt="" />
                <!-- <span class="jet"></span> -->
            <h2>تصميم التطبيقات</h2>
          </span>
            <span style="--i: 4">
            <img src="{{asset('frontStyle/img/app-development.png')}}" alt="" />
                <!-- <span class="jet"></span> -->
            <h2>تطوير التطبيقات</h2>
          </span>
            <span style="--i: 5">
            <img src="{{asset('frontStyle/img/digital-marketing.png')}}" alt="" />
                <!-- <span class="jet"></span> -->
            <h2>التسويق الالكترونى</h2>
          </span>
            <span style="--i: 6">
            <img src="{{asset('frontStyle/img/logo-design.png')}}" alt="" />
                <!-- <span class="jet"></span> -->
            <h2>تصميم الشعارات</h2>
          </span>
            <span style="--i: 7">
            <img src="{{asset('frontStyle/img/social-media-ads.png')}}" alt="" />
                <!-- <span class="jet"></span> -->
            <h2>اعلانات التواصل الاجتماعى</h2>
          </span>
        </div>
    </div>


<!-- SERVICES SECTION -->

<div class="section">
    <div class="heading">
        <h1>
            <span class="primary"> التطوير السريع والقوى للمنتجات</span>
        </h1>
    </div>
    <div class="services-section">
        <div class="service-box">
            <div class="img-section">
                <img src="img/web-development.png" alt="" />
            </div>
            <div class="hedding-section">
                <h2 class="heading-text-1">
                    <!-- تصميم و تطوير المواقع الالكترونيه -->
                    <span class="primary">تصميم و تطوير المواقع الالكترونيه</span>
                </h2>
            </div>
        </div>

        <div class="service-box">
            <div class="img-section">
                <img src="img/app-development.png" alt="" />
            </div>
            <div class="hedding-section">
                <h2 class="">
              <span class="primary"
              >تصميم و تطوير <br />
                التطبيقات</span
              >
                </h2>
            </div>
        </div>

        <div class="service-box">
            <div class="img-section">
                <img src="img/digital-marketing2.png" alt="" />
            </div>
            <div class="hedding-section">
                <h2 class="">
                    <span class="primary">التسويق الالكترونى</span>
                </h2>
            </div>
        </div>

        <div class="service-box">
            <div class="img-section">
                <img src="img/media production.png" alt="" />
            </div>
            <div class="hedding-section">
                <h2 class="">
                    <span class="primary">الإعلام و الانتاج</span>
                </h2>
            </div>
        </div>

        <div class="service-box">
            <div class="img-section">
                <img src="img/design & branding.png" alt="" />
            </div>
            <div class="hedding-section">
                <h2 class="primary">
                    <span class="primary">التصميم و العلامه التجاريه</span>
                </h2>
            </div>
        </div>

        <div class="service-box">
            <div class="img-section">
                <img src="img/chatbot.png" alt="" />
            </div>
            <div class="hedding-section">
                <h2 class="primary">
                    <span class="primary">تطوير روبوتات الدردشه</span>
                </h2>
            </div>
        </div>

        <div class="service-box">
            <div class="img-section">
                <img src="img/blockchain.png" alt="" />
            </div>
            <div class="hedding-section">
                <h2 class="">
                    <span class="primary">تطوير تقنية البلوكتشين</span>
                </h2>
            </div>
        </div>

        <div class="service-box">
            <div class="img-section">
                <img src="img/maintenance.png" alt="" />
            </div>
            <div class="hedding-section">
                <h2 class="">
                    <span class="primary">صيانة تطبيقات الويب</span>
                </h2>
            </div>
        </div>
    </div>
</div>

<!-- WHY CHOOSE US SECTION  -->

<div class="section why-us">
    <div class="heading">
        <h5>أسباب اختيارنا</h5>
        <h1 class="">
          <span class="primary"
          >تجرب الفارق مع حلولنا في تكنولوجيا المعلومات</span
          >
        </h1>
    </div>
    <div class="why-us-container">
        <!-- <div class="content">
                <h2 class="primary">
                    We help you to make work easy
                </h2>
                <p class="description">
                    At Kassel Company, we understand what your business means to you. Our commitment is to simplify your work, delivering innovative solutions that enhance efficiency and allow you to concentrate effortlessly on your core objectives.

                </p>
                <div class="primary-btn">
                    <a href="#">view more</a>
                </div>
            </div> -->

        <div class="item-box">
            <!-- test border -->
            <div class="box">
                <div class="box-content">
                    <img src="img/solution.png" alt="" />

                    <p class="description">حلول مخصصة لجميع الأعمال</p>
                </div>
            </div>

            <div class="box">
                <div class="box-content">
                    <img src="img/skilled team.png" alt="" />

                    <p class="description">فريق ماهر بخبرة سنوات</p>
                </div>
            </div>

            <div class="box">
                <div class="box-content">
                    <img src="img/innovative problem.png" alt="" />

                    <p class="description">
                        حلول مبتكرة لحل المشاكل باستخدام أحدث التقنيات
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="box-content">
                    <img src="img/modern design.png" alt="" />

                    <p class="description">تصميمات حديثة وجذابة</p>
                </div>
            </div>

            <div class="box">
                <div class="box-content">
                    <img src="img/quality.png" alt="" />

                    <p class="description">معايير الجودة الصارمة لجميع المشاريع</p>
                </div>
            </div>

            <div class="box">
                <div class="box-content">
                    <img src="img/cost&value.png" alt="" />

                    <p class="description">
                        حلول فعالة من حيث التكلفة ذات قيمة عالية
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="box-content">
                    <img src="img/open communication.png" alt="" />

                    <p class="description">التواصل المفتوح لتحقيق رضا العملاء</p>
                </div>
            </div>

            <div class="box">
                <div class="box-content">
                    <img src="img/ongoing support.png" alt="" />

                    <p class="description">دعم مستمر لتلبية احتياجاتك المتغيرة</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- HOW WE WORK SECTION -->

<div class="section work">
    <div class="heading">
        <h1 class="primary">كيف نعمل</h1>
        <h4>
            في كاسل، نعزز التعاون ومزج الخبرة والإبداع لتقديم حلول مبتكرة مصممة
            خصيصًا لاحتياجاتك الفريدة
        </h4>
    </div>
    <div class="work-container">
        <div class="box" dir="rtl">
            <img src="img/Competitor Research.png" alt="" />
            <h2 class="">
                <span class="primary"> بحث </span>
                <span class="primary">المنافسين</span>
            </h2>

            <p class="description">
                تتفوق كاسل في مجال بحث المنافسين، حيث تقوم بتحليل ديناميكيات السوق
                بشكل استراتيجي لتعزيز موقع عملك. استفد من الرؤى التي تقدمها كاسل،
                وابقَ متقدمًا على المنافسة، وتحقيق النجاح بفضل خبرتها
            </p>
        </div>

        <div class="box" dir="rtl">
            <img src="img/Making Strategy.png" alt="" />
            <h2 class="">
                <span class="primary"> تقديم استراتيجية وظيفية </span>
            </h2>

            <p class="description">
                تصنع كاسل استراتيجيات وظيفية فعالة، وذلك بمواءمة أهداف العمل مع حلول
                مبتكرة. ارتقِ بمستوى عملياتك وتنافسيتك من خلال استراتيجيات مصممة
                خصيصًا لتحقيق النجاح
            </p>
        </div>

        <div class="box" dir="rtl">
            <img src="img/Project Outline.png" alt="" />
            <h2 class="">
                <span class="primary"> مخطط المشروع </span>
            </h2>

            <p class="description">
                في كاسل، يتم وضع مخططات المشروع بدقة متناهية، حيث ترسم خريطة طريق
                واضحة للنجاح. يحدد الدقة والوضوح منهجنا، مما يضمن التنفيذ السلس
                لمشروعك
            </p>
        </div>

        <div class="box" dir="rtl">
            <img src="img/planing.png" alt="" />
            <h2 class="">
                <span class="primary"> الاكتشاف </span>
                <span class="primary">والتخطيط </span>
            </h2>

            <p class="description">
                في كاسل، يعتبر الاكتشاف والتخطيط مرحلة محورية. نكشف بدقة عن احتياجات
                العميل، ثم نخطط بدقة وعناية، ونضمن النجاح في كل مرحلة
            </p>
        </div>

        <div class="box" dir="rtl">
            <img src="img/Solution design.png" alt="" />
            <h2 class="">
                <span class="primary"> تصميم </span>
                <span class="primary">الحلول</span>
            </h2>

            <p class="description">
                في كاسل، تمتد عمليتنا لتشمل تصميم الحلول، حيث نصنع استراتيجيات
                مبتكرة مصممة خصيصًا لتحديات عملائنا الفريدة، مما يضمن تحقيق نتائج
                مثالية
            </p>
        </div>

        <div class="box" dir="rtl">
            <img src="img/final discovry.png" alt="" />
            <h2 class="">
                <span class="primary"> التسليم </span>
                <span class="primary">النهائى</span>
            </h2>

            <p class="description">
                في كاسل، نضمن لك تسليمًا نهائيًا لا تشوبه شائبة، ونتجاوز توقعاتك من
                خلال الدقة والابتكار. ثق بنا لنحقق رؤيتك إلى حيز الوجود، بسلاسة
                وإرضاء
            </p>
        </div>
    </div>
</div>

<div class="section experience">
    <div class="heading">
        <h1>
          <span class="primary" style="font-size: 35px">
            استمتع بتطوير منتجات عالمية المستوى بأسلوب سريع ومتجدد مع كاسيل
          </span>
        </h1>
    </div>
    <div class="experience-section">
        <!-- <div class="box">
                <div class="img-section">
                    <img src="img/client.png" alt="">
                </div>
                <div class="hedding-section">
                    <h2 class="">
                        <span class="primary">
                            100% satisfaction guaranteed
                        </span>
                        <span class="primary">satisfaction</span>
                        <span class="primary">guaranteed</span>
                    </h2>
                </div>
                <p class="description">
                    Your satisfaction is our very first priority. If you have any concern about your game, we are here to solve them in every possible manner with flexibility.                </p>
            </div> -->

        <!-- 3D Card  -->

        <div class="cards-wrapper">
            <div class="card-container">
                <div class="card">
                    <div class="card-contents card-front">
                        <div class="card-depth">
                            <div class="img-section">
                                <img src="img/client.png" alt="" />
                            </div>
                            <h2>
                                <span class="primary"> 100% </span>
                                <span class="primary">الرضا </span>
                                <span class="primary">التام</span>
                            </h2>
                        </div>
                    </div>
                    <div class="card-contents card-back">
                        <div class="card-depth">
                            <p>
                                تتربع كاسل على قمة مجال تطوير الويب، حيث تقدم حلولاً شاملة
                                مصممة خصيصًا لتلبية احتياجات العملاء
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cards-wrapper">
            <div class="card-container">
                <div class="card">
                    <div class="card-contents card-front">
                        <div class="card-depth">
                            <div class="img-section">
                                <img src="img/Communication.png" alt="" />
                            </div>
                            <h2>
                                <span class="primary"> التواصل </span>
                            </h2>
                        </div>
                    </div>
                    <div class="card-contents card-back">
                        <div class="card-depth">
                            <p>
                                سواء كنت تفضل التواصل عبر البريد الإلكتروني أو الاتصال بنا،
                                نحن هنا دائمًا لخدمتك. نجاحك يعد أولويتنا، والتواصل معك أمر
                                أساسي
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cards-wrapper">
            <div class="card-container">
                <div class="card">
                    <div class="card-contents card-front">
                        <div class="card-depth">
                            <div class="img-section">
                                <img src="img/start-project.png" alt="" />
                            </div>
                            <h2>
                                <span class="primary"> ابدأ </span>
                                <span class="primary">مشروعك</span>
                            </h2>
                        </div>
                    </div>
                    <div class="card-contents card-back">
                        <div class="card-depth">
                            <p>
                                حل يحقق حلمك. مع فريق يتمتع بالخبرة والموهبة، يمكنك بناء ما
                                تحتاجه بالضبط
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cards-wrapper">
            <div class="card-container">
                <div class="card">
                    <div class="card-contents card-front">
                        <div class="card-depth">
                            <div class="img-section">
                                <img src="img/idea.png" alt="" />
                            </div>
                            <h2>
                                <span class="primary"> التفكير الجماعي والتصور </span>
                            </h2>
                        </div>
                    </div>
                    <div class="card-contents card-back">
                        <div class="card-depth">
                            <p>
                                We build and strategize solutions based on your vision so
                                that you have all the options before moving forward with
                                your project.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--------------- FOOTER -------->
<div dir="rtl">
    <div class="foot">
        <div style="text-align: right" class="title-res">
            <a href="index-ar.html" class="kassel-footer">كاسل</a>
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
                    <a href="about-us-ar.html">من نحن</a>
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
                    <span>http://www.kasselsoft.com</span>
                    <i class="fa-solid fa-globe contact-icon"></i>
                </li>
                <li>
                    <span>info@kasselsoft.com</span>
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
              href="https://www.facebook.com/profile.php?id=61555183182719&mibextid=PlNXYD"
              target="_blank"
          >
            <i class="fa-brands fa-facebook-f"></i>
          </a>
        </span>
        <span class="instagram">
          <a
              href="https://www.instagram.com/_kassel_?igsh=cTY1dmtxd29nODF3&utm_source=qr"
              target="_blank"
          >
            <i class="fa-brands fa-instagram"></i>
          </a>
        </span>
        <span>
          <a href="https://pin.it/6CI41cw0A" target="_blank">
            <i class="fa-brands fa-pinterest-p"></i>
          </a>
        </span>
        <span>
          <a
              href="https://x.com/kasselsoft/status/1751659476862537793?s=20"
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
