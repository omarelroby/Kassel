@extends('web.layouts.master')
@section('content')
    <div class="container-contact">
        <div class="contact">
            <form action="#" id="contact-form">
                <div class="input-box">
                    <div class="input-field field">
                        <input
                            type="text"
                            placeholder="الاسم بالكامل"
                            id="name"
                            class="item"
                            autocomplete="off"
                        />
                        <div class="error-txt">لا يمكن ترك الاسم فارغا</div>
                    </div>

                    <div class="input-field field">
                        <input
                            type="email"
                            placeholder="البريد الالكترونى"
                            id="email"
                            class="item"
                            autocomplete="off"
                        />
                        <div class="error-txt">لا يمكن ترك العنوان فارغا</div>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field field">
                        <input
                            type="number"
                            placeholder="رقم الهاتف"
                            id="phone"
                            class="item"
                            autocomplete="off"
                        />
                        <div class="error-txt">لا يمكن ترك رقم التليفون فارغاً</div>
                    </div>

                    <div class="input-field field">
                        <input
                            type="text"
                            placeholder="الموضوع"
                            id="subject"
                            class="item"
                            autocomplete="off"
                        />
                        <div class="error-txt">لا يمكن ترك الموضوع فارغا</div>
                    </div>
                </div>

                <div class="textarea-field field">
              <textarea
                  name=""
                  id="message"
                  cols="30"
                  rows="10"
                  placeholder="اترك رسالتك"
                  class="item"
                  autocomplete="off"
              ></textarea>
                    <div class="error-txt">لا يمكن ترك الرساله فارغه</div>
                </div>

                <button type="submit">ارسل الرسالة</button>
            </form>
        </div>

        <div class="contact-info">
            <div class="info">
                <div class="info-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <h4>العنوان</h4>
                    <p>شارع الملكه رانيا</p>
                </div>

                <div class="info-item">
                    <i class="fa-solid fa-envelope"></i>
                    <h4>البريد الالكترونى</h4>
                    <p>info@kasselsoft.com</p>
                </div>

                <div class="info-item">
                    <i class="fa-solid fa-phone"></i>
                    <h4>رقم التليفون</h4>
                    <p>+962 790039555</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="section">
        <div class="box">
            <div class="map">
                <!-- <img src="img/Event.png" alt=""> -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3383.693129186798!2d35.8850833!3d31.996333299999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzHCsDU5JzQ2LjgiTiAzNcKwNTMnMDYuMyJF!5e0!3m2!1sar!2seg!4v1711834053429!5m2!1sar!2seg"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3383.7432174110627!2d35.88453542563072!3d31.99497577400023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d31.994248799999998!2d35.8884788!4m5!1s0x151ca13d1331d42f%3A0xe04c250b2e016ae0!2skasselsoft%2C%20Queen%20Rania%20St%2C%20Amman%2011831!3m2!1d31.996213299999997!2d35.8850835!5e0!3m2!1sen!2seg!4v1711828704041!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>     -->
            </div>

            <a href="https://maps.app.goo.gl/qrAcKSQf1f1QqxY89" target="_blank">
                <span></span>
            </a>
        </div>
    </div>
 @endsection
