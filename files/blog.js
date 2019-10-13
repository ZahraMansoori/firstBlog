function isValidPhone(phone) {
    return !isNaN(parseFloat(phone)) && isFinite(phone);
}

$(".saveBtn").click(function () {
    var phone = $(".phone").val();
    if (phone.length == 11 && isValidPhone(phone) && phone.substr(0, 2) == '09') {
        alert("valid number !");
    } else {
        alert("Invalid number !");
        return false;

    }
});

$(".clearBtn").click(function () {
    $(".phone").val("");
    return false;

});

$(".searchCont").keyup(function(){
    $('.result').html("Loading ...")
    $.ajax({
        type:'GET',
        url:"searchContact.php",
        data:$("#searchForm").serialize(),
        success: function (response) {
            $('.result').html(response);
        }
    });
})