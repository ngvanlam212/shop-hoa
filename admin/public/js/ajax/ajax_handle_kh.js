function blockAjax(id) {
    $.ajax({
        type: 'post',
        url: 'khach_hang.php',
        data: {
            ma_khach_hang: id,
            action: 'block'
        },
        success: function (response) {
          location.reload();
        },
    });
}

function unblockAjax(id) {
    $.ajax({
        type: 'post',
        url: 'khach_hang.php',
        data: {
            ma_khach_hang: id,
            action: 'unblock'
        },
        success: function (response) {
          location.reload();
        },
    });
}