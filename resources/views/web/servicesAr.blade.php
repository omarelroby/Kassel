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
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/services.css')}}" />
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/responAr.css')}}" />
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/style-ar2.css')}}" />
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
{{--    content--}}
    <div class="container-service" dir="rtl">
        <div class="content-service">
            <h2 class="">
                <span class="primary"> تطوير تطبيقات </span>
            </h2>
            <div class="description">
                <p>
                    تتفوق كاسل في مجال تطوير التطبيقات، حيث تصمم حلولاً مخصصة لتجارب
                    مستخدم مثالية على كل من نظامي التشغيل iOS و Android. يضمن فريقنا
                    الماهر نشرًا سلسًا، يجمع بين الابتكار والوظيفية. ومن مرحلة الأفكار
                    إلى التنفيذ، تقدم كاسل تطبيقات متطورة وموثوقة، تلبي احتياجات
                    الأعمال المتنوعة مع الالتزام بالتميز على كلا النظامين الأساسيين
                    للهواتف المحمولة.
                </p>
            </div>
        </div>

        <div class="animation-service">
            <div class="animation-img">
                <img src="{{asset('frontStyle/img/app-development.png')}}" alt="" />
            </div>
            <span class="jet"></span>
        </div>
    </div>
</div>

<div class="section" dir="rtl">
    <div class="container-service reverse">
        <div class="content-service">
            <h2 class="">
                <span class="primary"> تطوير </span>
                <span class="primary"> المواقع </span>
            </h2>
            <div class="description">
                <p>
                    تتفوق كاسل في مجال تطوير المواقع الإلكترونية، حيث تنشئ مواقع مميزة
                    بصريًا ووظيفية مصممة لتلائم احتياجات المستخدمين المتنوعة. يضمن
                    فريقنا الخبير تجارب سلسة، مع تحسين الاستجابة لجميع الأجهزة. ومن
                    مرحلة الأفكار إلى الإطلاق، تقدم كاسل حلولاً مبتكرة وموثوقة على
                    شبكة الإنترنت، مما يمكّن الشركات من التواجد القوي عبر الإنترنت.
                </p>
            </div>
        </div>

        <div class="animation-service">
            <div class="animation-img">
                <img src="{{asset('frontStyle/img/web-development.png')}}" alt="" />
            </div>
            <span class="jet"></span>
        </div>
    </div>
</div>

<div class="section" dir="rtl">
    <div class="container-service">
        <div class="content-service">
            <h2 class="">
                <span class="primary"> دعم تطبيقات الويب </span>
            </h2>
            <div class="description">
                <p>
                    تتجاوز شركة كاسل مجال التطوير لتقدم خدمات صيانة تطبيقات الويب
                    المصممة خصيصًا لتلائم احتياجاتك. يضمن فريقنا المتخصص موثوقية لا
                    تنقطع وأداءً متفوقًا من خلال إدارة التحديثات وإصلاح الأخطاء
                    والتوسع بمهارة. ثق في كاسل لصيانة استباقية وفعالة، تضمن التشغيل
                    السلس لأصولك الرقمية وتمكن عملك من الازدهار في عالم رقمي دائم
                    التطور.
                </p>
            </div>
        </div>

        <div class="animation-service">
            <div class="animation-img">
                <img src="{{asset('frontStyle/img/maintenance.png')}}" alt="" />
            </div>
            <span class="jet"></span>
        </div>
    </div>
</div>

<div class="section" dir="rtl">
    <div class="container-service reverse">
        <div class="content-service">
            <h2 class="">
                <span class="primary"> تحسين </span>
                <span class="primary"> محركات </span>
                <span class="primary"> البحث </span>
            </h2>
            <div class="description">
                <p>
                    تتخصص شركة كاسل في خدمات تحسين محركات البحث (SEO)، حيث تعمل على
                    تعزيز الرؤية الإلكترونية للشركات. يضمن فريقها المتخصص تحسين ترتيب
                    المواقع في نتائج البحث وزيادة عدد الزيارات العضوية من خلال التركيز
                    على وضع الكلمات المفتاحية الاستراتيجي وتحسين عناصر الصفحات وبناء
                    روابط فعالة. يتيح نهج كاسل المخصص للشركات الازدهار في المجال
                    الرقمي، وتعزيز النمو المستدام، وتحسين حضورها على الإنترنت.
                </p>
            </div>
        </div>

        <div class="animation-service">
            <div class="animation-img">
                <img src="{{asset('frontStyle/img/SEO.png')}}" alt="" />
            </div>
            <span class="jet"></span>
        </div>
    </div>
</div>

<div class="section" dir="rtl">
    <div class="container-service">
        <div class="content-service">
            <h2 class="">
                <span class="primary"> التسويق </span>
                <span class="primary"> عبر وسائل </span>
                <span class="primary"> التواصل الاجتماعي </span>
            </h2>
            <div class="description">
                <p>
                    تتفوق شركة كاسل في مجال التسويق عبر وسائل التواصل الاجتماعي (SMM)،
                    حيث تركز على منصات مثل فيسبوك وتويتر وإنستقرام. تعمل كاسل على
                    صياغة استراتيجيات مُخصصة لكل منصة، مستفيدة من نقاط قوتها الفريدة،
                    لتعزيز رؤية العلامة التجارية والتفاعل من خلال محتوى مُقنع وحملات
                    مُستهدفة. تضمن خبرة شركة كاسل اتصال الشركات بشكل فعال مع جمهورها،
                    وتعزيز ولاء العلامة التجارية، والحفاظ على قدرتها التنافسية في
                    المجال الرقمي.
                </p>
            </div>
        </div>

        <div class="animation-service">
            <div class="animation-img">
                <img src="{{asset('frontStyle/img/digital-marketing2.png')}}" alt="" />
            </div>
            <span class="jet"></span>
        </div>
    </div>
</div>

<div class="section" dir="rtl">
    <div class="container-service reverse">
        <div class="content-service">
            <h2 class="primary">نظام تخطيط موارد المؤسسات</h2>
            <div class="description">
                <p>
                    تتفوق شركة كاسل في خدمات SAP، حيث تقدم حلولاً مصممة خصيصًا للشركات
                    بمختلف الأحجام والمجالات. يركز فريقنا المتخصص على التنفيذ والتخصيص
                    والدعم المستمر، ويضمن التكامل السلس والفعالية القصوى. تتمحور خدمات
                    كاسل حول تحسين العمليات وإدارة البيانات والتحليلات المتقدمة، مما
                    يمكّن المؤسسات من الحفاظ على ريادتها في بيئة العمل التنافسية
                    الحالية مع تعزيز النمو المستدام والابتكار.
                </p>
            </div>
        </div>

        <div class="animation-service">
            <div class="animation-img">
                <img src="{{asset('frontStyle/img/SAP.png')}}" alt="" />
            </div>
            <span class="jet"></span>
        </div>
    </div>
</div>

<div class="section" dir="rtl">
    <div class="container-service">
        <div class="content-service">
            <h2 class="primary">نظام إدارة قواعد البيانات</h2>
            <div class="description">
                <p>
                    شركة كاسل هي مزود رئيسي بخدمات أوراكل، حيث تقدم حلولاً شاملة
                    لتمكين الشركات من خلال التقنيات المتطورة. تتميز كاسل بخبراتها
                    الواسعة في إدارة قواعد بيانات أوراكل، والتطبيق، والدعم، مما يضمن
                    الأداء الأمثل وقابلية التوسع لعملائها. تركز كاسل على الاستفادة
                    الكاملة من إمكانات مجموعة تطبيقات أوراكل، حيث تصمم حلولاً تلبي
                    الاحتياجات الفريدة لكل مؤسسة، وتعزز الكفاءة والابتكار. سواء كان
                    الأمر يتعلق بتحسين قواعد البيانات، أو نقل البيانات إلى السحابة، أو
                    تطوير التطبيقات، فإن خدمات أوراكل التي تقدمها شركة كاسل مصممة لرفع
                    مستوى الشركات، وتمكينها من الازدهار في عالم رقمي سريع التطور.
                </p>
            </div>
        </div>

        <div class="animation-service">
            <div class="animation-img">
                <img src="{{asset('frontStyle/img/ORACLE.png')}}" alt="" />
            </div>
            <span class="jet"></span>
        </div>
    </div>
</div>

<div class="section" dir="rtl">
    <div class="container-service reverse">
        <div class="content-service">
            <h2 class="primary">Odoo - نظام إدارة موارد المؤسسات</h2>
            <div class="description">
                <p>
                    شركة كاسل تتفوق في تقديم خدمات Odoo، حيث تستفيد من خبرتها التي
                    تمتد لسنوات لتوفير تنفيذ سلس، وتخصيص، ودعم مستمر. بفضل فهمها
                    العميق لقدرات Odoo، يضمن فريقنا الخبير للشركات الاستفادة من
                    إمكاناته الكاملة عبر برنامج إدارة متكامل. سواء أكان ذلك عن طريق
                    تحسين العمليات المحاسبية أو تعزيز وظائف إدارة علاقات العملاء (CRM)
                    والتجارة الإلكترونية، فإن شركة كاسل تصمم حلولًا تلبي الاحتياجات
                    الفريدة لكل مؤسسة. نهجنا الشامل يُمكِّن الشركات ليس فقط من تحسين
                    الكفاءة ولكن أيضًا تعزيز التعاون وتحقيق الإنتاجية الكلية للعمل. مع
                    شركة كاسل كشريك لك، يمكنك التنقل بثقة في تعقيدات تنفيذ Odoo
                    واكتشاف فوائده التحويلية لمؤسستك.
                </p>
            </div>
        </div>

        <div class="animation-service">
            <div class="animation-img">
                <img src="{{asset('frontStyle/img/Odoo.png')}}" alt="" />
            </div>
            <span class="jet"></span>
        </div>
    </div>
</div>

<div class="section" dir="rtl">
    <div class="container-service">
        <div class="content-service">
            <h2 class="">
                <span class="primary"> متجرنا </span>
            </h2>
            <div class="description">
                <p>
                    شركة كاسل متخصصة في بيع الأجهزة العتادية، وتقدم مجموعة متنوعة من
                    الحلول لتلبية احتياجات الأعمال المختلفة. تتضمن خدمات الأجهزة
                    العتادية لديهم أجهزة المستخدم النهائي، حيث يوفرون تقنية متطورة
                    للمستخدمين الفرديين؛ وحلول الشبكات والبنية التحتية، لضمان الاتصال
                    الموثوق والقابل للتوسع لتشغيل سلس؛ وحلول نظام الكاميرات المغلقة،
                    التي تقدم إجراءات أمنية متطورة. سواء كان العملاء بحاجة إلى تحديث
                    أجهزة المستخدم النهائي، أو إعداد شبكة قوية، أو حلول مراقبة متقدمة،
                    تقدم شركة كاسل منتجات عتادية عالية الجودة مصممة خصيصًا لمواصفاتهم.
                    من خلال التزامها بالتميز التقني، تساهم خدمات بيع الأجهزة العتادية
                    لشركة كاسل في بناء بيئة عمل آمنة وفعالة ومتكاملة لعملائها.
                </p>
            </div>
        </div>

        <div class="animation-service">
            <div class="animation-img">
                <img src="{{asset('frontStyle/img/shop.png')}}" alt="" />
            </div>
            <span class="jet"></span>
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
