function removeImg(id){
    $.ajax({type: 'POST', url: '/ajax/remove_img', async: true, data:{id: id},
        success: function(data) {
            $('#rowImg' + id).remove();
        }
    });
}

function hideImg(id){
    $.ajax({type: 'POST', url: '/ajax/hide_img', async: true, data:{id: id},
        success: function() {
            var html =
            '<button class="btn btn-success" onclick="showImg(' + id + ');">' +
                '<span class="glyphicon glyphicon-eye-open"></span> Показать изображение' +
            '</button>';

            $('#rowImg' + id + ' .rowBtn1').html(html);
        }
    });
}

function showImg(id){
    $.ajax({type: 'POST', url: '/ajax/show_img', async: true, data:{id: id},
        success: function() {
            var html =
            '<button class="btn btn-warning" onclick="hideImg(' + id + ');">' +
                '<span class="glyphicon glyphicon-eye-close"></span> Скрыть изображение' +
            '</button>';

            $('#rowImg' + id + ' .rowBtn1').html(html);
        }
    });
}
