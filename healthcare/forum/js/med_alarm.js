window.setInterval(function() {
    var d = new Date();
    var weekday = new Array(7);
    weekday[0] = "SUNDAY";
    weekday[1] = "MONDAY";
    weekday[2] = "TUESDAY";
    weekday[3] = "WEDNESDAY";
    weekday[4] = "THURSDAY";
    weekday[5] = "FRIDAY";
    weekday[6] = "SATURDAY";
    var n = weekday[d.getDay()];
    var nhour = d.getHours(),
        nmin = d.getMinutes(),
        ap;
    if (nhour == 0) {
        ap = " AM";
        nhour = 12;
    } else if (nhour < 12) {
        ap = " AM";
    } else if (nhour == 12) {
        ap = " PM";
    } else if (nhour > 12) {
        ap = " PM";
        nhour -= 12;
    }
    if (nmin <= 9) nmin = "0" + nmin;
    var time = "" + nhour + ":" + nmin + ap + "";
    $.ajax({
        url: 'check_med.php',
        type: 'POST',
        data: {
            'weekday': n,
            'txt_account_no': time
        },
    }).done(function(response) {
        if (response.trim() == '1') {
            alert("Its time for medicine.");
        }
    }).fail(function() {
        console.log("error");
    }).always(function() {
        console.log("complete");
    });
}, 5000);