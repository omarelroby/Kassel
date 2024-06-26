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
    <link rel="stylesheet" href="{{asset('frontStyle/CSS/services.css')}}" />

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








    <div class="container-service">
        <div class="content-service">
            <h2 class="">
                <span class="primary"> Apps </span>
                <span class="primary"> development </span>
            </h2>
            <div class="description">
                <p>
                    Kassel excels in app development, crafting tailored solutions for
                    optimal user experiences on both iOS and Android platforms. Our
                    skilled team ensures seamless deployment, marrying innovation with
                    functionality. From ideation to execution, Kassel delivers
                    reliable, cutting-edge apps, meeting diverse business needs with a
                    commitment to excellence on both major mobile platforms.
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

<div class="section">
    <div class="container-service reverse">
        <div class="content-service">
            <h2 class="">
                <span class="primary"> Websites </span>
                <span class="primary"> Development </span>
            </h2>
            <div class="description">
                <p>
                    Kassel excels in website development, creating visually stunning
                    and functional sites tailored to diverse user needs. Our expert
                    team ensures seamless experiences, optimizing responsiveness for
                    all devices. From concept to launch, Kassel delivers innovative
                    and reliable web solutions, empowering businesses with a strong
                    online presence.
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

<div class="section">
    <div class="container-service">
        <div class="content-service">
            <h2 class="">
                <span class="primary"> Web App </span>
                <span class="primary"> Maintenance </span>
            </h2>
            <div class="description">
                <p>
                    Kassel Company goes beyond development, providing tailor-made web
                    app maintenance services. Our dedicated team ensures uninterrupted
                    reliability and peak performance by expertly managing updates,
                    troubleshooting, and scaling. Trust Kassel for proactive and
                    efficient maintenance, ensuring seamless operation of your digital
                    assets and empowering your business to thrive in the ever-evolving
                    digital landscape.
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

<div class="section">
    <div class="container-service reverse">
        <div class="content-service">
            <h2 class="">
                <span class="primary"> Search </span>
                <span class="primary"> Engine </span>
                <span class="primary"> Optimization </span>
            </h2>
            <div class="description">
                <p>
                    Kassel Company specializes in Search Engine Optimization (SEO)
                    services, optimizing online visibility for businesses. With a
                    focus on strategic keyword placement, on-page optimization, and
                    effective link building, their dedicated team ensures improved
                    search engine rankings and increased organic traffic. Kassel
                    Company's tailored approach empowers businesses to thrive in the
                    digital landscape, driving sustainable growth and enhancing their
                    online presence.
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

<div class="section">
    <div class="container-service">
        <div class="content-service">
            <h2 class="">
                <span class="primary"> Social </span>
                <span class="primary"> Media </span>
                <span class="primary"> Marketing </span>
            </h2>
            <div class="description">
                <p>
                    Kassel Company excels in Social Media Marketing (SMM), with a
                    focus on platforms like Facebook, Twitter, and Instagram.
                    Tailoring strategies for each platform's unique strengths, they
                    drive brand visibility and engagement through compelling content
                    and targeted campaigns. Kassel Company's expertise ensures
                    businesses effectively connect with their audience, fostering
                    brand loyalty and staying competitive in the digital realm.
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

<div class="section">
    <div class="container-service reverse">
        <div class="content-service">
            <h2 class="primary">SAP</h2>
            <div class="description">
                <p>
                    Kassel Company excels in SAP services, tailoring solutions for
                    businesses of all sizes and industries. Specializing in
                    implementation, customization, and ongoing support, our dedicated
                    team ensures seamless integration and maximum efficiency. Focused
                    on optimizing processes, data management, and advanced analytics,
                    Kassel empowers organizations to stay ahead in today's competitive
                    landscape while driving sustainable growth and innovation.
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

<div class="section">
    <div class="container-service">
        <div class="content-service">
            <h2 class="primary">ORACLE</h2>
            <div class="description">
                <p>
                    Kassel Company is a premier provider of Oracle services,
                    delivering comprehensive solutions to empower businesses with
                    cutting-edge technologies. Specializing in Oracle database
                    management, implementation, and support, Kassel Company ensures
                    optimal performance and scalability for its clients. With a focus
                    on harnessing the full potential of Oracle's suite of
                    applications, Kassel Company tailors solutions to meet the unique
                    needs of each organization, promoting efficiency and innovation.
                    Whether it's database optimization, cloud migration, or
                    application development, Kassel Company's Oracle services are
                    designed to elevate businesses, enabling them to thrive in the
                    rapidly evolving digital landscape.
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

<div class="section">
    <div class="container-service reverse">
        <div class="content-service">
            <h2 class="primary">Odoo</h2>
            <div class="description">
                <p>
                    Kassel Company excels in providing Odoo services, leveraging years
                    of experience to offer seamless implementation, customization, and
                    ongoing support. With a deep understanding of Odoo's capabilities,
                    our expert team ensures businesses harness its full potential
                    across integrated management software. From optimizing accounting
                    processes to enhancing CRM and e-commerce functionalities, Kassel
                    Company tailors solutions to meet the unique needs of each
                    organization. Our holistic approach empowers businesses to not
                    only enhance efficiency but also foster collaboration and achieve
                    overall business productivity. With Kassel as your partner, you
                    can confidently navigate the complexities of Odoo implementation
                    and unlock its transformative benefits for your organization.
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

<div class="section">
    <div class="container-service">
        <div class="content-service">
            <h2 class="">
                <span class="primary"> Our </span>
                <span class="primary"> Shop </span>
            </h2>
            <div class="description">
                <p>
                    Kassel Company excels in hardware selling, offering a diverse
                    range of solutions to meet various business needs. Their hardware
                    services include End User Devices, providing cutting-edge
                    technology for individual users; Network and Infrastructure
                    solutions, ensuring reliable and scalable connectivity for
                    seamless operations; and CCTV Solutions, offering state-of-the-art
                    security measures. Whether clients require updated end-user
                    devices, a robust network setup, or advanced surveillance
                    solutions, Kassel Company delivers high-quality hardware products
                    tailored to their specifications. With a commitment to
                    technological excellence, Kassel Company's hardware selling
                    services contribute to building a secure, efficient, and
                    integrated business environment for their clients.
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
