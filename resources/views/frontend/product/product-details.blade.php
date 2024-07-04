@extends('frontend.layouts.master')
@section('content')
    <div class="container mt-5">
        <h2 class="my-3 text-center">معلومات المنتج</h2>
        <div class="row d-flex align-items-center justify-content-center gap-1">
            <div class="col-lg-8">
                <img class="img-fluid rounded shadow-lg"
                     src="{{ asset($product->image) }}" alt="{{ $product->title }}"/>
            </div>
        </div>
        <div class="text_info w-100 text-right mt-5">
            <p class="mb-2 text-bold">
                <span class="text-primary text-bold" style="font-size: 16px;">اسم المنتج:</span>
                <span>{{ $product->title }}</span>
            </p>
            <p class="mb-2 text-bold">
                <span class="text-primary text-bold" style="font-size: 16px;">وصف المنتج:</span>
                <span class="description">{{ $product->description }}</span>
            </p>
            <p class="mb-2 text-bold">
                <span class="text-primary text-bold" style="font-size: 16px;">السعر:</span>
                <span>{{ $product->price }} ريال</span>
            </p>
            <p class="mb-2 text-bold">
                <span class="text-primary text-bold" style="font-size: 16px;">المتبقي بالمخزون:</span>
                <span>{{ $product->product }}</span>
            </p>
        </div>
        <h2 class="text-center mt-4">الدفع عند التسليم</h2>
        <form class="order-form bg-white shadow-sm p-5 rounded-md" action="{{ route('send-form') }}"
              method="post">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
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
                <input type="number" name="number" required class="form-control" id="number"
                       placeholder="رقم الجوال"
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
                    <input class="form-check-input ml-2" type="radio" id="offer1" name="offer"
                           value="اشترى 1 بسعر 199 ريال +25 رسوم توصيل"/>
                </div>

                <div
                    class="form-check d-flex align-items-center justify-content-between p-3 mb-2 border bg-light rounded">
                    <label class="form-check-label mr-auto" for="offer2">اشترى 2 بسعر 329 ريال (توصيل مجاني)</label>
                    <input class="form-check-input ml-2" type="radio" id="offer2" name="offer"
                           value="اشترى 2 بسعر 329 ريال (توصيل مجاني)"/>
                </div>

                <div
                    class="form-check d-flex align-items-center justify-content-between p-3 mb-2 border bg-light rounded">
                    <label class="form-check-label mr-auto" for="offer3">اشترى 3 بسعر 399 ريال (توصيل مجاني)</label>
                    <input class="form-check-input ml-2" type="radio" id="offer3" name="offer"
                           value="اشترى 3 بسعر 399 ريال (توصيل مجاني)"/>
                </div>

            </div>
            <button type="submit" class="submit-btn btn btn-primary w-100">تأكيد الطلب</button>
        </form>
    </div>
@endsection
