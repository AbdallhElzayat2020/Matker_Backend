<div class="navbar">
    <div class="container">
        <i class="fas fa-bars menu-icon" onclick="toggleMenu()"></i>
        <div class="logo">
            <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Logo" />
            <span>MATAJER</span>
        </div>
        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="بحث..." />
        </div>
        <div class="language-icon">
            <img src="{{ asset('frontend/assets/images/flag.jpg') }}" alt="Language" />
        </div>
    </div>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleMenu()">&times;</a>
        <a href="#">الرئيسية</a>
        <a href="#">خدماتنا</a>
        <a href="#">حول</a>
        <a href="#">اتصل بنا</a>
    </div>
</div>
