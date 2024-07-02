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
                            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}"/>
                            <h3>{{ Str::limit($product->title, 20 ,'Read More') }}</h3>
                            {{--                            <h3>{{ $product->title, 50) }}</h3>--}}
                            <p>{{ Str::limit($product->description,30) }}</p>
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
                             alt=""/>
                        <h5 class="text-center">{{$box->title}}</h4>
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
                @foreach ($products->take(6) as $key => $product)
                    <div
                        class="col-lg-3 d-flex mx-auto align-items-center justify-content-between col-md-4 col-sm-6 bg-dark rounded-lg">
                        <div class="text w-100">
                            <a class="text-decoration-none d-flex flex-column align-items-center"
                               href="{{ route('product-details', ['id' => $product->id]) }}">
                                <img class="img-fluid" style="width: 100%; height: 150px; margin: 10px 0"
                                     src="{{ asset($product->image) }}" alt=""/>
                                <p class="text-center text-white rounded-lg">متبقي في المخزون فقط <span
                                        class="text-warning">{{ $product->price }}</span> قطعة</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--Product  -->
    <!-- Testimonial -->
    <div id="testimonialCarousel" class="carousel slide mt-5" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="testimonial-content text-center">
                        <p class="mx-auto" style="max-width: 100%;">استخدمت منتجين منها والنتائج رهيبة كيف لو استخدمها
                            كلها</p>
                        <div class="testimonial-author">
                            <span>اربح الزهراني</span>
                            <div class="rating">
                                <span>★★★★★</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="testimonial-content text-center">
                        <p class="mx-auto" style="max-width: 100%;">استخدمت منتجين منها والنتائج رهيبة كيف لو استخدمها
                            كلها</p>
                        <div class="testimonial-author">
                            <span>اربح الزهراني</span>
                            <div class="rating">
                                <span>★★★★★</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="testimonial-content text-center">
                        <p class="mx-auto" style="max-width: 100%;">استخدمت منتجين منها والنتائج رهيبة كيف لو استخدمها
                            كلها</p>
                        <div class="testimonial-author">
                            <span>اربح الزهراني</span>
                            <div class="rating">
                                <span>★★★★★</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more slides as needed -->
        </div>
        <!-- Controls -->
        <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
    <div class="container mt-5">
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

        <h2 class="text-center ">الدفع عند التسليم</h2>
        <form class="order-form bg-white shadow-sm p-5 rounded-md" action="{{ route('send-form') }}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3 form-group">
                <label for="name" class="form-label">الاسم كاملا *</label>
                <input type="text" id="name" name="name" required class="form-control" dir="rtl"
                       placeholder="الاسم كاملا"/>
            </div>
            <div class="mb-3 form-group">
                <label for="number" class="form-label">الجوال *</label>
                <div class="input-group">
                    <select class="form-select" name="country_code" id="country_code" dir="rtl">
                        <option value="+966">السعودية (+966)</option>
                        <option value="+971">الإمارات (+971)</option>
                        <option value="+973">البحرين (+973)</option>
                        <option value="+965">الكويت (+965)</option>
                        <option value="+968">عمان (+968)</option>
                        <option value="+974">قطر (+974)</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 form-group">
                <label for="number" class="form-label">رقم الجوال *</label>
                <input type="number" name="number" required class="form-control" id="number" placeholder="رقم الجوال"
                       dir="rtl"/>
            </div>
            <div class="mb-3 form-group">
                <label for="address" class="form-label">العنوان وطلبك *</label>
                <textarea class="form-control" name="address" id="address" dir="rtl"></textarea>
            </div>
            <div class="mb-3 form-group">
                <label class="form-label">اختر العرض:</label>
                <div
                    class="form-check p-3 d-flex align-items-center justify-content-between mb-2 border bg-light rounded">
                    <label class="form-check-label mr-auto" for="offer1">اشترى 1 بسعر 199 ريال +25 رسوم توصيل</label>
                    <input class="form-check-input ml-2" type="radio" id="offer1" name="offer" value="offer1"/>
                </div>

                <div
                    class="form-check d-flex align-items-center justify-content-between p-3 mb-2 border bg-light rounded">
                    <label class="form-check-label mr-auto" for="offer2">اشترى 2 بسعر 329 ريال (توصيل مجاني)</label>
                    <input class="form-check-input ml-2" type="radio" id="offer2" name="offer" value="offer2"/>
                </div>

                <div
                    class="form-check d-flex align-items-center justify-content-between p-3 mb-2 border bg-light rounded">
                    <label class="form-check-label mr-auto" for="offer3">اشترى 3 بسعر 399 ريال (توصيل مجاني)</label>
                    <input class="form-check-input ml-2" type="radio" id="offer3" name="offer" value="offer3"/>
                </div>

            </div>
            <button type="submit" class="submit-btn btn btn-primary w-100">تأكيد الطلب</button>
        </form>

    </div>

    <!-- Payment Form -->
    <!--company  -->
    <div class="company my-4">
        <div class="container">
            <h4 class="title text-center mb-3">نحن نشحن بضائعنا مع شركة</h4>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" alt="Quickship"/>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" alt="Quickship"/>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" alt="Quickship"/>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" alt="Quickship"/>
                </div>
            </div>
        </div>
    </div> --}}
    <!--company  -->
    <!-- Footer -->
    <div class="footer">
        <p>Developed by: <span>Abdallh Elzayat</span></p>
    </div>
    <!-- Footer -->
@endsection

@section('js')
@endsection
