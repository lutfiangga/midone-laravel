(function () {
    "use strict";

    // Show code or preview
    $(".preview-component").each(function () {
        const previewComponent = this;
        $(this)
            .find('input[type="checkbox"]')
            .first()
            .on("click", function () {
                if ($(this).is(":checked")) {
                    $(previewComponent).find(".preview").hide();
                    $(previewComponent).find(".source").fadeIn(200);
                } else {
                    $(previewComponent).find(".preview").fadeIn(200);
                    $(previewComponent).find(".source").hide();
                }
            });
    });
})();
