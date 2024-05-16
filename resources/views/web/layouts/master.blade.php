<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KASSEL SOFT</title>
    <!-- font awesome icons -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <!-- title tag logo -->
    <!-- <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"> -->
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/career.css')}}" />
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/contact.css')}}" />

    <!--google-font-->
    <!-- title tag logo -->
    <!-- <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"> -->

    <!-- CSS Files -->
     <link rel="stylesheet" href="{{asset('frontStyle/CSS/style-ar2.css')}}" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/style.css')}}" />
</head>
<body class="cairo-uniquifier">
<div class="section" id="top">
    <div class="navbar" @if(app()->getLocale()=='ar')dir="rtl"@else dir="ltr" @endif>
        <div class="animation-box">
            <div class="nav-logo">
                <a href="{{url('/')}}">@lang('front.KASSEL')</a>
            </div>
            <!-- <span class="jet"></span> -->
        </div>

        <nav class="menu"  >
          <span class="nav-item">
            <a href="{{url('/')}}" data-i18n="home">@lang('front.Home')</a>
          </span>

            <span class="nav-item">
            <a href="{{url('/about')}}" data-i18n="about">@lang('front.About Us')</a>
          </span>
            <span class="nav-item">
            <a href="{{url('/services')}}" data-i18n="services">@lang('front.Services')</a>
          </span>
            <span class="nav-item">
            <a href="{{url('/jobs')}}" data-i18n="career">@lang('front.Career')</a>
          </span>
            <span class="nav-item">
            <a href="{{url('/contact')}}" data-i18n="contact">@lang('front.Contact Us')</a>
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
    <div class="nav-toggle">
        <a href="{{url('/')}}"> home </a>
        <a href="{{url('/about')}}"> about us </a>
        <a href="{{url('/services')}}"> services </a>
        <a href="{{url('/jobs')}}"> career </a>
        <a href="{{url('/contact')}}"> contact us </a>
    </div>





@yield('content')

<!--------------- FOOTER -------->

<div class="section footer">
    <div class="container-footer">
        <div class="contact-section">
            <div class="contact-item name">
                <a href="{{url('/')}}">KASSEL</a>
            </div>
            <div class="contact-item">
                <p>
                    rapid and maintainabie product development bring your startup idea
                    to life, or solve a business problem
                </p>
            </div>

            <!-- <div class="contact-item">
                      <input type="email" placeholder="E-mail">
                      <button type="submit"></button>
                  </div> -->

            <div class="contact-item">
                <form action="#" id="footer-form">
                    <div class="input-field field">
                        <input
                            type="email"
                            placeholder="E-mail"
                            id="footer-email"
                            class="f-item"
                            autocomplete="off"
                        />
                        <div class="error-txt">E-mail Address can't be blank</div>
                    </div>
                    <button type="submit">Send Email</button>
                </form>
            </div>

            <div class="contact-item">
                <h4>follow us</h4>

                <a
                    href="https://www.facebook.com/profile.php?id=61555183182719&mib
                        extid=PlNXYD
                        "
                    target="_blank"
                >
                    <div class="iconDiv">
                        <i class="fa-brands fa-facebook-f icon"></i>
                    </div>
                </a>

                <a
                    href="https://www.instagram.com/_kassel_?igsh=cTY1dmtxd29nODF3&u
                        tm_source=qr
                        "
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

        <div class="nav-section">
            <div class="nav-heading">
                <h3 class="">Company</h3>
            </div>
            <div class="nav-link">
                <a href="{{url('/about')}}"> about us </a>
            </div>

            <div class="nav-link">
                <a href="{{url('/services')}}"> Services </a>
            </div>
            <div class="nav-link">
                <a href="{{url('/jobs')}}"> Career </a>
            </div>
        </div>

        <div class="support-section">
            <div class="support-heading">
                <h3 class="">support</h3>
            </div>

            <div class="support-link">
                <a href="conditions.html" target="_blank"> terms & conditions </a>
            </div>

            <div class="support-link">
                <a href="privacy.html" target="_blank"> privacy policy </a>
            </div>

            <div class="support-link">
                <a href="{{url('/contact')}}"> contact us </a>
            </div>
        </div>

        <div class="location-section">
            <div class="location-heading">
                <h3 class="">get in touch</h3>
            </div>

            <div class="location-item">
                <i class="fa-solid fa-globe"></i>
                <p>http://www.kasselsoft.com</p>
            </div>

            <div class="location-item">
                <i class="fa-solid fa-envelope"></i>
                <p>info@kasselsoft.com</p>
            </div>

            <div class="location-item">
                <i class="fa-solid fa-location-dot"></i>
                <p>Queen Rania Street</p>
            </div>
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
    <script src="{{asset('frontStyle/JS/job.js')}}"></script>
    <script src="{{asset('frontStyle/JS/float-button.js')}}"></script>
</body>
</html>
