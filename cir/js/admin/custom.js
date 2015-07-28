$('.delete_category').on('click', function (e) {
    e.preventDefault();
    var href = $(this).attr("href");
    var answer = confirm("Are you sure you want to delete?");
    var result = this;
    if (answer) {
        $.ajax({
            type: "GET",
            url: href,
            success: function (response) {
                if (response == "Success") {
                    alert('success');
                    $(result).find("tr").fadeOut("slow");
                }
                else {
                    alert("Delete error!!!");
                }
            }
        });
    } else {
        return false;
    }
})