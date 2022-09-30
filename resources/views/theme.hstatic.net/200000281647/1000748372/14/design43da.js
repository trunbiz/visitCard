$(document).ready(function() {
    "use strict";
    window.customizeCard.template && ($(".design-frame-bg img").attr("src", window.customizeCard.frame), $(".design-frame-logo img").attr("src", window.customizeCard.logo));
    var o, e = function() {
        var o = 0;
        $.each(window.productData.variants, function(e, t) {
            if (t.title.toLowerCase().indexOf("standard") > -1) return o = t.price, !1
        }), window.customizeCard.form.logo && $.each(window.productData.variants, function(e, t) {
            return o = t.price;
        }), $(".new-product-action-price b").html(Haravan.formatMoney(o, window.formatMoney))
    };
    e(), $("body").on("keyup", "#design-name", function(o) {
        var e = $(this).val();
        $(".design-frame-name span").text(e), window.customizeCard.form.name = e
    }), $("body").on("change", "#design-qr", function(o) {
        $("#design-qr").is(":checked") ? ($(".design-frame-qrcode").removeClass("hidden"), window.customizeCard.form.qr = !0) : ($(".design-frame-qrcode").addClass("hidden"), window.customizeCard.form.qr = !1)
    }), $("body").on("change", "#design-logo", function(e) {
        var t = document.getElementById("design-logo-image");
        t.src = URL.createObjectURL(e.target.files[0]), t.onload = function() {
            var e = this.width,
                a = this.height;
            $(".design-logo-frame-tools").removeClass("hidden"), $('label[for="design-logo"]').addClass("hidden"), o = new Cropper(t, {
                aspectRatio: e / a,
                crop: function(e) {
                    $(".design-frame-logo").html(o.getCroppedCanvas({
                        width: 400
                    }))
                }
            })
        }
    }), $("body").on("click", ".trigger-frame-tool", function() {
        switch ($(this).attr("data-type")) {
            case "rotate-left":
            case "rotate-right":
                o.rotate(-45);
                break;
            case "zoom-in":
                o.zoom(.1);
                break;
            case "zoom-out":
                o.zoom(-.1);
                break;
            case "remove":
                $('label[for="design-logo"]').removeClass("hidden"), o.destroy(), $(".design-frame-logo").html('<img class="img-responsive" src="' + window.customizeCard.logo + '">'), $("#design-logo-image").removeAttr("src"), $(".design-logo-frame-done-wrap img").removeAttr("src"), $(".design-logo-frame-done").addClass("hidden"), $(".design-logo-frame, .design-logo-frame-tools").addClass("hidden"), window.customizeCard.form.logo = null, e();
                break;
            case "resolve":
                $(".design-logo-frame, .design-logo-frame-tools").addClass("hidden"), o.getCroppedCanvas({
                    width: 400
                }).toBlob(function(o) {
                    window.customizeCard.form.logo = o, e()
                }), $(".design-logo-frame-done-wrap img").attr("src", o.getCroppedCanvas({
                    width: 400
                }).toDataURL()), $(".design-logo-frame-done").removeClass("hidden");
                break;
            case "edit":
                $(".design-logo-frame, .design-logo-frame-tools").removeClass("hidden"), $(".design-logo-frame-done-wrap img").removeAttr("src"), $(".design-logo-frame-done").addClass("hidden")
        }
    });
    var t = function(o) {
        var e = null;
        return $.ajax({
            url: window.customizeCard.host,
            type: "POST",
            data: o,
            contentType: !1,
            processData: !1,
            async: !1,
            success: function(o) {
                e = o.secure_url
            },
            error: function(o) {
                console.log(o)
            }
        }), e
    };
    $("body").on("click", "#add-cart-design", function() {
        window.customizeCard.template && ($("#add-cart-design").addClass("dis").html('<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>'), new Promise(function(o, e) {
            html2canvas(document.querySelector("#design-frame"), {
                scale: 1,
                allowTaint: !0,
                useCORS: !0
            }).then(function(e) {
                e.toBlob(function(e) {
                    window.customizeCard.form.design = e, o(!0)
                })
            }).catch(function(e) {
                o(null)
            })
        }).then(function(o) {
            var e;
            o ? (e = {
                qr: window.customizeCard.form.qr ? "Yes" : "No",
                name: window.customizeCard.form.name
            }, (o = new FormData).append("file", window.customizeCard.form.design), o.append("upload_preset", window.customizeCard.key), e.design = t(o), null, $.each(window.productData.variants, function(o, e) {
                if ("standard" == e.title.toLowerCase()) return e.id, !1
            }), window.customizeCard.form.logo && ((o = new FormData).append("file", window.customizeCard.form.logo), o.append("upload_preset", window.customizeCard.key), e.logo = t(o), $.each(window.productData.variants, function(o, e) {
                if ("customize" == e.title.toLowerCase()) return e.id, !1
            })), $.ajax({
                url: "/cart/add.js",
                async: !1,
                type: "POST",
                data: {
                    id: window.productData.variants[0].id,
                    properties: e,
                    quantity: $("#quantity").val()
                },
                success: function() {
                    $("#add-cart-design").removeClass("dis").html("Thêm vào giỏ"), window.location.href = "/cart"
                },
                error: function() {
                    alert("Có lối xãy ra, vui lòng thử lại sau!")
                }
            })) : alert("Vui lòng thử lại sau!")
        }))
    }), $("body").on("click", "#design-now", function(o) {
        o.preventDefault(), $("#add-cart-design").removeClass("dis").html("Thêm vào giỏ"), o = 1, $(window).width() < 1200 && (o = 1200 / $(window).width(), $(".design-frame-name span").css("font-size", 4 / o + "em")), $("body").addClass("modal-design-show")
    }), $("body").on("click", "#product-design-close", function(o) {
        o.preventDefault(), $("body").removeClass("modal-design-show")
    }), $("body").on("click", ".new-product-quantity button", function() {
        var o = $(this).attr("data-type"),
            e = $(this).siblings("input"),
            t = parseInt(e.val());
        "minus" == o ? t > 1 && (t -= 1) : t += 1, e.val(t).trigger("change")
    }), $("body").on("click", ".new-product-content-item-title", function(o) {
        o.preventDefault();
        var e = $(this).siblings(".new-product-content-item-detail");
        $(".new-product-content-item-detail").not(e).slideUp(400), $(".new-product-content-item-title").not($(this)).removeClass("active"), $(this).toggleClass("active"), $(this).siblings(".new-product-content-item-detail").slideToggle(400)
    }), $("body").on("click", ".new-product-thumb a", function(o) {
        o.preventDefault();
        $(this).attr("data-id")
    }), $("body").on("click", ".new-product-image a", function(o) {
        o.preventDefault();
        var e = $(this).attr("data-id");
        $(".modal-zoom-image").removeClass("delayed"), $(".modal-zoom-image").addClass("delayed"), $("body").addClass("modal-zoom-show"), $("#modal-zoom").animate({
            scrollTop: $('.modal-zoom-image[data-id="' + e + '"]').offset().top
        }, 0)
    }), $("body").on("click", "#modal-zoom-close", function(o) {
        o.preventDefault(), $("body").removeClass("modal-zoom-show")
    })
});