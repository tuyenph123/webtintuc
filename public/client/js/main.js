let current = 0;
const slides = document.querySelectorAll('.banner__slide');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
    });
}

function nextSlide() {
    current = (current + 1) % slides.length;
    showSlide(current);
}

function prevSlide() {
    current = (current - 1 + slides.length) % slides.length;
    showSlide(current);
}
// Show the first slide

const slider = document.querySelector(".slider");
let currentIndex = 0;
const maxVisible = 5;
const totalSlides = document.querySelectorAll(".slide").length;

function updateSlider() {
    const offset = -(currentIndex * (100 / maxVisible));
    slider.style.transform = `translateX(${offset}%)`;
}

document.getElementById("prevBtn").addEventListener("click", () => {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = totalSlides - maxVisible;
    }
    updateSlider();
});

document.getElementById("nextBtn").addEventListener("click", () => {
    if (currentIndex < totalSlides - maxVisible) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    updateSlider();
});



document.querySelectorAll(".menu-item").forEach(item => {
    item.addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelectorAll(".menu-item").forEach(i => i.classList.remove("active"));
        this.classList.add("active");
        document.querySelectorAll(".news-container").forEach(news => news.classList.remove("active"));
        document.getElementById(this.dataset.target).classList.add("active");
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".header__menu-toggle");
    const menu = document.querySelector(".header__menu");

    menuToggle.addEventListener("click", function () {
        menu.classList.toggle("active");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const submenuToggles = document.querySelectorAll(".submenu-toggle");

    submenuToggles.forEach(toggle => {
        toggle.addEventListener("click", function () {
            const parent = this.closest(".has-submenu");
            parent.classList.toggle("open");

            this.textContent = parent.classList.contains("open") ? "-" : "+";
        });
    });
});


// đăng kí
function toggleForm(type) {
    const personalForm = document.getElementById('personal-form');
    const businessForm = document.getElementById('business-form');

    if (type === 'business') {
        personalForm.style.display = "none";
        businessForm.style.display = "block";
    } else {
        personalForm.style.display = "block";
        businessForm.style.display = "none";
    }
}



document.addEventListener("DOMContentLoaded", function () {
    const menuItems = document.querySelectorAll(".menu-item");
    const newsSections = document.querySelectorAll(".news-section");

    // Mặc định hiển thị danh mục đầu tiên
    if (menuItems.length > 0) {
        let firstCategory = menuItems[0].getAttribute("data-category");
        document.querySelector(`.news-section[data-category='${firstCategory}']`).style.display = "block";
    }

    menuItems.forEach(item => {
        item.addEventListener("click", function (e) {
            e.preventDefault();
            let category = this.getAttribute("data-category");

            // Ẩn tất cả tin tức
            newsSections.forEach(section => {
                section.style.display = "none";
            });

            // Hiển thị tin tức của danh mục được chọn
            document.querySelector(`.news-section[data-category='${category}']`).style.display = "block";
        });
    });
});


function toggleLogout() {
    const logoutForm = document.querySelector('.logout-form');
    if (logoutForm.style.display === 'none' || logoutForm.style.display === '') {
        logoutForm.style.display = 'block';
    } else {
        logoutForm.style.display = 'none';
    }
}

// Ẩn form khi click ra ngoài
document.addEventListener('click', function(event) {
    const userMenu = document.querySelector('.user-menu');
    const logoutForm = document.querySelector('.logout-form');
    if (!userMenu.contains(event.target)) {
        logoutForm.style.display = 'none';
    }
});




