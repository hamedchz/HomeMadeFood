"use strict";

// Class definition
var KTImageInputDemo = (function () {
    // Private functions
    var initDemos = function () {
        // Example 1

        // Example 5
        var avatar5 = new KTImageInput("kt_image_5");

        // avatar5.on("cancel", function (imageInput) {
        //     swal.fire({
        //         title: trans.Image_changed,
        //         type: "success",
        //         buttonsStyling: false,
        //         confirmButtonText: trans.Ok,
        //         confirmButtonClass: "btn btn-primary font-weight-bold",
        //     });
        // });

        avatar5.on("cancel", function (imageInput) {
            swal.fire({
                title: trans.Image_removed,
                type: "error",
                buttonsStyling: false,
                confirmButtonText: trans.Ok,
                confirmButtonClass: "btn btn-primary font-weight-bold",
            });
        });
    };

    return {
        // public functions
        init: function () {
            initDemos();
        },
    };
})();

KTUtil.ready(function () {
    KTImageInputDemo.init();
});
