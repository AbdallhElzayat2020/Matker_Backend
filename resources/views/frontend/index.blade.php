@extends('frontend.layouts.master')
@section('content')
    <!-- Swiper -->
    <div class="swiper-container">
        <h1>مجموعة تبييض الأسنان</h1>
        <div class="swiper-wrapper">
            @foreach ($products as $product)
                <div class="swiper-slide">
                    <div class="slide-content">
                        <a class="text-decoration-none" href="{{ route('product-details', ['id' => $product->id]) }}">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" />
                            <h3>{{ $product->title }}</h3>
                            <p>{{ $product->description }}</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Swiper -->

    <!-- Section 2 -->
    <div class="boxs">
        <div class="container">
            <h3 class="text-center my-4">شعارنا في العمل</h3>
            <div class="row">
                @foreach ($boxes as $key => $box)
                    <div class="col-lg-3 mb-2">
                        <img style="width: 100%; max-width: 100%; height: 150px" src="{{ asset($box->image) }}"
                            alt="" />
                        <h5 class="text-center">{{ $box->title }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Section 2 -->
    <!--Product  -->
    <div class="product">
        <div class="container">
            <h3 class="text-center my-4">الباقي في المخزون من احدث المنتجات</h3>
            <div class="row d-flex align-items-center justify-content-between gap-4">
                @foreach ($products->take(-4) as $key => $product)
                    <div class="col-lg-2 bg-dark rounded-lg">
                        <a class="text-decoration-none" href="{{ route('product-details', ['id' => $product->id]) }}">
                            <img style="width: 100%; max-width: 100%; height: 150px; margin: 10px 0"
                                src="{{ asset($product->image) }}" alt="" />
                            <p class="text-center text-white rounded-lg">متبقي في المخزون فقط <span class="text-warning">
                                    {{ $product->price }}
                                </span>قطعة
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="product_specification">
                <div class="roe">
                    <div class="col-lg-8">

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
        </div>
    </div>
    <!--Product  -->
    <!-- Testimonial -->
    {{-- <div class="swiper-container testimonial-swiper">
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
    </div> --}}
    <!-- Testimonial -->

    <!-- Timer -->
    {{-- <div class="timer-container">
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
    </div> --}}
    <!-- Timer -->
    <!-- Payment Form -->
    {{-- <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <h2 class="text-center mb-4">الدفع عند التسليم</h2>

        <form class="bg-white shadow-sm p-5 rounded-md" action="{{ route('send-form') }}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">الاسم كاملا *</label>
                <input type="text" name="name" class="form-control" id="name" />
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">الجوال *</label>
                <div class="input-group d-flex gap-2">
                    <select class="form-select" name="country_code" id="country_code">
                        <option value="+966">السعودية (+966)</option>
                        <option value="+971">الإمارات (+971)</option>
                        <option value="+973">البحرين (+973)</option>
                        <option value="+965">الكويت (+965)</option>
                        <option value="+968">عمان (+968)</option>
                        <option value="+974">قطر (+974)</option>
                    </select>
                    <input type="text" name="number" required class="form-control" id="number" placeholder="الجوال" />
                </div>
                <small>يرجى عدم ادخال كود الدولة وابدأ بالرقم 5 او 05</small>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">العنوا وطلبك *</label>
                <textarea class="form-control" name="address" id="address"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">اختر العرض:</label>
                <div class="form-check p-3 mb-2 border bg-light rounded">
                    <input class="form-check-input" type="radio" id="offer1" name="offer" value="offer1" />
                    <label class="form-check-label" for="offer1">اشترى 1 بسعر 199 ريال +25 رسوم توصيل</label>
                </div>
                <div class="form-check p-3 mb-2 border bg-light rounded">
                    <input class="form-check-input" type="radio" id="offer2" name="offer" value="offer2" />
                    <label class="form-check-label pl-3" for="offer2">اشترى 2 بسعر 329 ريال (توصيل مجاني)</label>
                </div>
                <div class="form-check p-3 mb-2 border bg-light rounded">
                    <input class="form-check-input" type="radio" id="offer3" name="offer" value="offer3" />
                    <label class="form-check-label" for="offer3">اشترى 3 بسعر 399 ريال (توصيل مجاني)</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">تأكيد الطلب</button>
        </form>

    </div> --}}

    <!-- Payment Form -->
    <!--company  -->
    {{-- <div class="company">
        <div class="container">
            <div class="title">نحن نشحن بضائعنا مع شركة</div>
            <div class="logos">
                <img src="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" alt="Quickship" />
                <img src="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" alt="Email" />
                <img src="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" alt="SMSA" />
            </div>
        </div>
    </div> --}}
    <!--company  -->
    <!-- Footer -->
    {{-- <div class="footer">
        <p>Developed by: <span>Abdallh Elzayat</span></p>
    </div> --}}
    <!-- Footer -->
@endsection

@section('js')
@endsection
