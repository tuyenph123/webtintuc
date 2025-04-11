document.addEventListener("DOMContentLoaded", function () {
    const menuLinks = document.querySelectorAll(".side-nav-link");

    menuLinks.forEach(link => {
        link.addEventListener("click", function () {
            // Đóng tất cả các menu khác trước khi mở menu mới
            document.querySelectorAll(".collapse.show").forEach(openMenu => {
                if (openMenu.id !== this.getAttribute("href").substring(1)) {
                    new bootstrap.Collapse(openMenu, { toggle: false }).hide();
                }
            });
        });
    });
});
