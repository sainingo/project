/**
 * Created by kantush on 01/22/2019.
 */

$(document).ready(function () {
    //this prevents the default cut copy behavior
    $('.nopaste').bind("cut copy paste", function (e) {
        e.preventDefault();
        //alert('Copy paste is not allowed');
        sweetAlert("Oops...", "Copy and paste is not allowed for this field. Please type the value", "error");
    });

    //Change card tab class to indicate if active or not
    $(".btn-pref .btn").click(function () {
        $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
        // $(".tab").addClass("active"); // instead of this do the below
        $(this).removeClass("btn-default").addClass("btn-primary");
    });
});

//handle checkbox event to show/hide password changing fields
function togglePassFields() {
    var isChecked = $('#APPAPPLICANTUSER_CHANGE_PASS').is(":checked");

    var defaultPassword = $('#ORIG_PASS').val();
    var passwordField = $('#APPAPPLICANTUSER_PASSWORD');

    if (isChecked) {
        //show the password fields
        $("#APPAPPLICANTUSER_PASSWORD").val(null);
        $("#APPAPPLICANTUSER_CONFIRM_PASSWORD").val(null);

        $('.passRow').fadeIn("slow", function () {
            $("#APPAPPLICANTUSER_PASSWORD").removeAttr('readonly');
            $("#APPAPPLICANTUSER_CONFIRM_PASSWORD").removeAttr('readonly');
        });
    } else {
        //hide the password fields and re-assign the default password
        $('.passRow').fadeOut("slow", function () {
            $("#APPAPPLICANTUSER_PASSWORD").val(defaultPassword);
            $("#APPAPPLICANTUSER_CONFIRM_PASSWORD").val(defaultPassword);

        });
    }
}
