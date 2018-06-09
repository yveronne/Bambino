$(document).ready(function(){
    var link;
    $('#picturesThumbnail').find('img').hover(function(){
        link = $(this).attr('src');
        $('#picture').attr('src', link);

    });
});