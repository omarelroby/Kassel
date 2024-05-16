<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us | KASSEL SOFT</title>
    <!-- font awesome icons -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <!-- title tag logo -->
    <link rel="shortcut icon" href="{{asset('frontStyle/img/logo.png')}}" type="image/x-icon" />

    <!-- CSS Files -->
     <link rel="stylesheet" href="{{asset('frontStyle/CSS/about.css')}}" />
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/style.css')}}" />
   </head>
<body>
<div class="section" id="top">
    <div class="navbar">
        <div class="animation-box">
            <div class="nav-logo">
                <a href="{{url('/')}}">KASSEL</a>
            </div>
            <!-- <span class="jet"></span> -->
        </div>

        <nav class="menu" id="nav">
          <span class="nav-item">
            <a href="{{url('/')}}" data-i18n="home">Home</a>
          </span>

            <span class="nav-item">
            <a href="{{url('/about')}}" data-i18n="about">about us</a>
          </span>
            <span class="nav-item">
            <a href="{{url('/services')}}" data-i18n="services">services</a>
          </span>
            <span class="nav-item">
            <a href="{{url('/jobs')}}" data-i18n="career">career</a>
          </span>
            <span class="nav-item">
            <a href="{{url('/contact')}}" data-i18n="contact">contact us</a>
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


        <label for="#check" class="nav-icon">
            <i class="fa-solid fa-bars" id="menu-icon" onclick="hideSlider()"></i>
            <i class="fa-solid fa-x" id="close-icon" onclick="showSlider()"></i>
        </label>
    </div>


    <div class="container">
        <div class="content">
            <h2>Information technology Company Since 2023</h2>
            <p>
                Kassel, a dynamic IT company, excels in delivering innovative
                solutions. With expertise spanning web and app development, digital
                marketing, and data analysis, Kassel empowers businesses to thrive
                in the ever-evolving technology landscape.
            </p>

            <p>
                Their commitment to precision, creativity, and client satisfaction
                positions Kassel as a trusted partner for those seeking cutting-edge
                IT solutions.
            </p>

            <div class="check-text">
                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <p>Create and manage any process for your business needs.</p>
                </div>

                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <p>
                        optimizing efficiency and productivity. From conceptualization
                        to execution.
                    </p>
                </div>

                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <p>Full functionality with affordable prices.</p>
                </div>
            </div>
        </div>

        <div class="img">
            <img src="{{asset('frontStyle/img/group-about.png')}}" alt="" />
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="content">
            <h4>Team Members</h4>
            <h2>Our Amazing Team</h2>
            <p>
                At Kassel, we're more than just a team; we're a family of innovative
                thinkers, creative problem solvers, and technology enthusiasts
                dedicated to transforming the digital landscape. Our strength lies
                in our diversity, expertise, and unwavering commitment to
                excellence.
            </p>
        </div>

        <div class="ceo-box">
            <div class="ceo-item">
                <h3 class="name">
                    <span class="primary">Khaled </span>
                    <span class="primary">Naser</span>
                </h3>

                <h4 class="job">Executive Director</h4>
                <h4 class="project">+70 Projects</h4>
            </div>

            <div class="ceo-item">
                <h3 class="name">
                    <span class="primary">Muneer </span>
                    <span class="primary">Shadid</span>
                </h3>

                <h4 class="job">CFO</h4>
                <h4 class="project">+100 Projects</h4>
            </div>

            <div class="ceo-item">
                <h3 class="name">
                    <span class="primary">Amro </span>
                    <span class="primary">Shadid</span>
                </h3>

                <h4 class="job">Co & Founder</h4>
                <h4 class="project">+80 Projects</h4>
            </div>

            <div class="ceo-item">
                <h3 class="name">
                    <span class="primary">Sanad </span>
                    <span class="primary">Al Majali</span>
                </h3>

                <h4 class="job">General Manager</h4>
                <h4 class="project">+100 Projects</h4>
            </div>
        </div>
    </div>
</div>

<div class="section successfully-products">
    <div class="heading">
        <h1>
            <span class="primary">Industries </span>
            <span class="primary">We Serve</span>
        </h1>

        <h2>
            <span class="primary">Successfully </span>
            <span class="primary">delivered digital</span>
            <span class="primary">products</span>
        </h2>
    </div>

    <div class="container-product">
        <div class="product-box">
            <img src="{{asset('frontStyle/img/game.png')}}" alt="" />
            <h3 class="primary">games</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/eCommerce.png')}}" alt="" />
            <h3 class="primary">e-Commerce</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Finance.png')}}" alt="" />
            <h3 class="primary">Finance</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Healthcare.png')}}" alt="" />
            <h3 class="primary">Healthcare</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Restaurant.png')}}" alt="" />
            <h3 class="primary">Restaurant</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Real estate.png')}}" alt="" />
            <h3 class="primary">Real estate</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Tour & Travels.png')}}" alt="" />
            <h3 class="">
                <span class="primary">Tour &</span>
                <span class="primary">Travels</span>
            </h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Education.png')}}" alt="" />
            <h3 class="primary">Education</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Transport.png')}}" alt="" />
            <h3 class="primary">Transport</h3>
        </div>

        <div class="product-box">
            <img src="{{asset('frontStyle/img/Event.png')}}" alt="" />
            <h3 class="primary">Event</h3>
        </div>
    </div>
</div>

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
