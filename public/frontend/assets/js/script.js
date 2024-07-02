// StartToggle the Sidebar
function toggleMenu() {
  var sidebar = document.getElementById("mySidebar");
  if (sidebar.style.width === "250px") {
    sidebar.style.width = "0";
  } else {
    sidebar.style.width = "250px";
  }
}
// EndToggle the Sidebar

// Start Home-swiper
document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".swiper-container", {
    slidesPerView: 1, // عرض شريحة واحدة على الهواتف (mobile)
    spaceBetween: 30, // المسافة بين الشرائح
    loop: true, // تكرار الشرائح
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      576: {
        slidesPerView: 2, // عرض 2 شريحة على الأجهزة اللوحية (tablet screen)
        spaceBetween: 30, // المسافة بين الشرائح على الأجهزة اللوحية
      },
      992: {
        slidesPerView: 3, // عرض 3 شرائح كحد أقصى على الشاشات الكبيرة
        spaceBetween: 30, // المسافة بين الشرائح على الشاشات الكبيرة
      },
    },
  });
});
// End Home-swiper

// Start testimonial-swiper
document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".testimonial-swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      // Disable bullets
      type: 'custom',
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    direction: "horizontal",
    grabCursor: true,
    allowTouchMove: false,
    autoplay: {
      delay: 2000,
    },
  });
});
// End testimonial-swiper
// Start Timer
function startTimer(duration, display) {
  var timer = duration,
    days,
    hours,
    minutes,
    seconds;
  setInterval(function () {
    days = parseInt(timer / (60 * 60 * 24), 10);
    hours = parseInt((timer % (60 * 60 * 24)) / (60 * 60), 10);
    minutes = parseInt((timer % (60 * 60)) / 60, 10);
    seconds = parseInt(timer % 60, 10);

    days = days < 10 ? "0" + days : days;
    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.days.textContent = days;
    display.hours.textContent = hours;
    display.minutes.textContent = minutes;
    display.seconds.textContent = seconds;

    if (--timer < 0) {
      timer = duration;
    }
  }, 1000);
}

window.onload = function () {
  var countdownTime = 60 * 60 * 24 * 3; // 3 أيام
  var display = {
    days: document.getElementById("days"),
    hours: document.getElementById("hours"),
    minutes: document.getElementById("minutes"),
    seconds: document.getElementById("seconds"),
  };
  startTimer(countdownTime, display);
};
// End Timer
