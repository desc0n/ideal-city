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

function removeProjectImg(id){
    $.ajax({type: 'POST', url: '/ajax/remove_project_img', async: true, data:{id: id},
        success: function(data) {
            $('#rowProjectImg' + id).remove();
        }
    });
}

function hideProjectImg(id){
    $.ajax({type: 'POST', url: '/ajax/hide_project_img', async: true, data:{id: id},
        success: function() {
            var html =
            '<button class="btn btn-success" onclick="showProjectImg(' + id + ');">' +
                '<span class="glyphicon glyphicon-eye-open"></span> Показать изображение' +
            '</button>';

            $('#rowProjectImg' + id + ' .rowBtn1').html(html);
        }
    });
}

function showProjectImg(id){
    $.ajax({type: 'POST', url: '/ajax/show_project_img', async: true, data:{id: id},
        success: function() {
            var html =
            '<button class="btn btn-warning" onclick="hideProjectImg(' + id + ');">' +
                '<span class="glyphicon glyphicon-eye-close"></span> Скрыть изображение' +
            '</button>';

            $('#rowProjectImg' + id + ' .rowBtn1').html(html);
        }
    });
}

function hideProjectGalleryImg(id){
    $.ajax({type: 'POST', url: '/ajax/hide_project_gallery_img', async: true, data:{id: id},
        success: function() {
            var html =
            '<button class="btn btn-info" onclick="showProjectGalleryImg(' + id + ');">' +
                '<span class="glyphicon glyphicon-eye-open"></span> Показать в галерее' +
            '</button>';

            $('#rowProjectImg' + id + ' .rowBtn3').html(html);
        }
    });
}

function showProjectGalleryImg(id){
    $.ajax({type: 'POST', url: '/ajax/show_project_gallery_img', async: true, data:{id: id},
        success: function() {
            var html =
            '<button class="btn btn-primary" onclick="hideProjectGalleryImg(' + id + ');">' +
                '<span class="glyphicon glyphicon-eye-close"></span> Скрыть в галерее' +
            '</button>';

            $('#rowProjectImg' + id + ' .rowBtn3').html(html);
        }
    });
}

function downloadNews(id){
    $('#downloadNewsBtn' + id)
        .attr({"class":"btn btn-danger", "disabled":"disabled"})
        .html('<span class="fa fa-refresh fa-spin"></span> Скачать')
    ;

    $.ajax({type: 'POST', url: '/ajax/download_news', async: true, data:{id: id},
        success: function() {
            $('#downloadNewsBtn' + id)
                .removeAttr('disabled')
                .attr({"class":"btn btn-success"})
                .html('<span class="glyphicon glyphicon-download"></span> Скачать')
            ;
        }
    });
}

function removeNews(id){
    $.ajax({type: 'POST', url: '/ajax/remove_news', async: true, data:{id: id},
        success: function(data) {
            $('#rowNews' + id).remove();
        }
    });
}

function hideNews(id){
    $.ajax({type: 'POST', url: '/ajax/hide_news', async: true, data:{id: id},
        success: function() {
            var html =
                '<button class="btn btn-success" onclick="showNews(' + id + ');">' +
                '<span class="glyphicon glyphicon-eye-open"></span> Показать в правом блоке' +
                '</button>';

            $('#rowNews' + id + ' .rowBtn1').html(html);
        }
    });
}

function showNews(id){
    $.ajax({type: 'POST', url: '/ajax/show_news', async: true, data:{id: id},
        success: function() {
            var html =
                '<button class="btn btn-warning" onclick="hideNews(' + id + ');">' +
                '<span class="glyphicon glyphicon-eye-close"></span> Скрыть в правом блоке' +
                '</button>';

            $('#rowNews' + id + ' .rowBtn1').html(html);
        }
    });
}

function hideListNews(id){
    $.ajax({type: 'POST', url: '/ajax/hide_list_news', async: true, data:{id: id},
        success: function() {
            var html =
                '<button class="btn btn-info" onclick="showListNews(' + id + ');">' +
                '<span class="glyphicon glyphicon-eye-open"></span> Показать на странице новостей' +
                '</button>';

            $('#rowNews' + id + ' .rowBtn3').html(html);
        }
    });
}

function showListNews(id){
    $.ajax({type: 'POST', url: '/ajax/show_list_news', async: true, data:{id: id},
        success: function() {
            var html =
                '<button class="btn btn-primary" onclick="hideListNews(' + id + ');">' +
                '<span class="glyphicon glyphicon-eye-close"></span> Скрыть на странице новостей' +
                '</button>';

            $('#rowNews' + id + ' .rowBtn3').html(html);
        }
    });
}

$(document).ready(function(){
    $('.project-link').blur(function(){
        var id = $(this).data('id');
        var link = $(this).val();

        $.ajax({type: 'POST', url: '/ajax/change_project_link', async: true, data:{id: id, link: link}});
    });
});