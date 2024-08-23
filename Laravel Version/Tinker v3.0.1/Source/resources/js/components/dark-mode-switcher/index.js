(function () {
    "use strict";

    // Dark mode switcher
    $(".dark-mode-switcher").on("click", function () {
        if ($(this).hasClass("dark-mode-switcher--active")) {
            $(this).removeClass("dark-mode-switcher--active");
        } else {
            $(this).addClass("dark-mode-switcher--active");
        }

        setTimeout(() => {
            const link = $(".dark-mode-switcher").data("url");
            window.location.href = link;
        }, 500);
    });
})();
