function validate() {
    return !!(
        validateEmpty("txtFullName", "spanFullName") &
        validateEmpty("txtTitle", "spanTitle") &
        validateEmpty("txtprofileimg", "spanprofileimg") &
        validateEmpty("captchacode", "capspan")
    );
}
function validateEmpty(t, a) {
    return 0 != jQuery("#" + t).val().length
        ? (jQuery("#" + a).addClass("validated"),
          jQuery("#" + a).removeClass("notvalidated"),
          jQuery("#" + a)
              .fadeIn("slow")
              .fadeOut(3e3),
          jQuery("#" + a).text(""),
          !0)
        : (jQuery("#" + a).addClass("notvalidated"),
          jQuery("#" + a).removeClass("validated"),
          jQuery("#" + a)
              .fadeIn("slow")
              .fadeOut(3e3),
          jQuery("#" + a).text("This field can not be empty"),
          !1);
}
$(document).ready(function () {
    jQuery("#txtFullName").blur(function () {
        validateEmpty("txtFullName", "spanFullName");
    }),
        jQuery("#txtTitle").blur(function () {
            validateEmpty("txtTitle", "spanTitle");
        }),
        jQuery("#txtprofileimg").blur(function () {
            validateEmpty("txtprofileimg", "spanprofileimg");
        }),
        jQuery("#captchacode").blur(function () {
            validateEmpty("captchacode", "capspan");
        }),
        $("#btnSubmit").click(function (t) {
            if ((t.preventDefault(), validate())) {
                jQuery("#checking").show();
                var a = new FormData($("#guestcomment")[0]);
                $.ajax({
                    url: "ajax/create-guest-comment.php",
                    type: "POST",
                    data: a,
                    async: !1,
                    dataType: "json",
                    success: function (t) {
                        swal({
                            title: "Success",
                            text: "Your comment has been posted successful.",
                            type: "success",
                            timer: 2e3,
                            showConfirmButton: !1,
                        }),
                            setTimeout(function () {
                                location.reload();
                            }, 1e3);
                    },
                    cache: !1,
                    contentType: !1,
                    processData: !1,
                });
            }
        });
});
