@extends('frontend.layouts.master')
@section('content')
    <!-- Swiper -->
    <div class="swiper-container">
        <h1>مجموعة تبييض الاسنان</h1>
        <div class="swiper-wrapper">
            @foreach ($products as $product)
                <div class="swiper-slide">
                    <div class="slide-content">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" />
                        <h3>{{ $product->title }}</h3>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
    </div>
    <!-- Swiper -->

    <!-- Section 2 -->
    <div class="boxs">
        <div class="box">
            <img src="{{ asset('frontend/assets/images/Ar-icone-bar.jpg.webp') }}" alt="" />
        </div>
    </div>
    <!-- Section 2 -->
    <!--Product  -->
    <div class="product">
        <div class="container">
            <h1>متبقي في المخزون فقط <span>13</span> قطعة</h1>
            <div class="product_specification">
                <h2>مواصفات المنتج:</h2>
                <ul>
                    <li>-مجموعة تبييض الأسنان</li>
                    <li>- -مجموعة متكاملة توفر العناية التامة بالأسنان</li>
                    <li>--تقنية جديدة و آمنة تما لتبييض الأسنان في المنزل</li>
                    <li>-مجموعة تبييض الأسنان</li>
                    <li>-يساعد في إزالة التصبغات و يسرع من عملية التبييض</li>
                    <li>-سهل الاستخدام و يبييض الأسنان حتى ثمان درجات</li>
                </ul>
                <span>– تتكون المجموعة من : </span>
                <p style="margin-top: 20px; width: 200px">
                    -جل التبييض : يساعد الجل على إزالة التصبغات الناتجة عن القهوة و
                    السجائر . نتائج مذهلة و ملحوظة من أول استخدام
                </p>
                <p style="margin-top: 20px; width: 200px">
                    -جهاز التبييض : يعمل جهاز الضوء على تسريع عملية التفتيح يقوم بتبييض
                    الأسنان حتى ثمان درجات
                </p>
                <p style="margin-top: 20px; width: 400px">
                    -معجون التبييض : معجون الأسنان المبيض الأكثر فعالية لإزالة البقع آمن
                    و لا يسبب أي حساسية فهو مصنوع من مستخلصات الأعشاب يحتوي على تركيبة
                    جل فريدة مصممة للحصول على عناية و نظافة فائقة
                </p>
            </div>
        </div>
    </div>
    <!--Product  -->
    <!-- Testimonial -->
    <div class="swiper-container testimonial-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="testimonial-content">
                    <p>استخدمت منتجين منها والنتائج رهيبة كيف لو استخدمها كلها</p>
                    <div class="testimonial-author">
                        <span>اربح الزهراني</span>
                        <div class="rating">
                            <span>★★★★★</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonial-content">
                    <p>استخدمت منتجين منها والنتائج رهيبة كيف لو استخدمها كلها</p>
                    <div class="testimonial-author">
                        <span>اربح الزهراني</span>
                        <div class="rating">
                            <span>★★★★★</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonial-content">
                    <p>استخدمت منتجين منها والنتائج رهيبة كيف لو استخدمها كلها</p>
                    <div class="testimonial-author">
                        <span>اربح الزهراني</span>
                        <div class="rating">
                            <span>★★★★★</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more slides as needed -->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- Testimonial -->

    <!-- Timer -->
    <div class="timer-container">
        <h2>باقي على انتهاء الخصم</h2>
        <div class="timer">
            <div class="time-unit">
                <span id="days">0</span>
                <div>أيام</div>
            </div>
            <div class="time-unit">
                <span id="hours">0</span>
                <div>ساعات</div>
            </div>
            <div class="time-unit">
                <span id="minutes">0</span>
                <div>دقائق</div>
            </div>
            <div class="time-unit">
                <span id="seconds">0</span>
                <div>ثواني</div>
            </div>
        </div>
    </div>
    <!-- Timer -->
    <!-- Payment Form -->
    <div class="order-form">
        <div class="payment-methods">
            <button class="payment-method active">الدفع عند التسليم</button>
            <button class="payment-method">الدفع اون لاين</button>
        </div>
        <h2>الدفع عند التسليم</h2>
        <form>
            <div class="form-group">
                <label for="name">الاسم الثاني *</label>
                <input type="text" class="form-control" id="name" required />
            </div>
            <div class="form-group">
                <label for="phone">الجوال *</label>
                <input type="text" class="form-control" id="phone" placeholder="+966" required />
                <small>يرجى عدم ادخال كود الدولة وابدأ بالرقم 5 او 05</small>
            </div>
            <div class="form-group">
                <label for="address">العنوان *</label>
                <textarea class="form-control" id="address" required></textarea>
            </div>
            <div class="form-group">
                <label>اختر العرض:</label>
                <div class="form-check">
                    <input readonly class="form-check-input" type="radio" id="offer1" name="offer" value="offer1"
                        required />
                    <label class="form-check-label" for="offer1">اشترى 1 بسعر 199 ريال +25 رسوم توصيل</label>
                </div>
                <div class="form-check">
                    <input readonly class="form-check-input" type="radio" id="offer2" name="offer" value="offer2" />
                    <label class="form-check-label" for="offer2">اشترى 2 بسعر 329 ريال (توصيل مجاني)</label>
                </div>
                <div class="form-check">
                    <input readonly class="form-check-input" type="radio" id="offer3" name="offer" value="offer3" />
                    <label class="form-check-label" for="offer3">اشترى 3 بسعر 399 ريال (توصيل مجاني)</label>
                </div>
            </div>
            <div class="form-group form-check">
                <input readonly type="checkbox" class="form-check-input" id="fast-delivery" />
                <label class="form-check-label" for="fast-delivery">مشاركة الموقع لتوصيل سريع</label>
            </div>
            <button type="submit" class="btn submit-btn">تأكيد الطلب</button>
        </form>
    </div>
    <!-- Payment Form -->
    <!--company  -->
    <div class="company">
        <div class="container">
            <div class="title">نحن نشحن بضائعنا مع شركة</div>
            <div class="logos">
                <img src="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" alt="Quickship" />
                <img src="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" alt="Email" />
                <img src="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" alt="SMSA" />
            </div>
        </div>
    </div>
    <!--company  -->
    <!-- Footer -->
    <div class="footer">
        <p>Developed by: <span>Abdallh Elzayat</span></p>
    </div>
    <!-- Footer -->
@endsection
