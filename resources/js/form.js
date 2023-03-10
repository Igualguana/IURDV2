$('#preview').hover(
    function() {
        $(this).find('a').fadeIn();
    },
    function() {
        $(this).find('a').fadeOut();
    }
)
$('#file-select').on('click', function(e) {
    e.preventDefault();

    $('#file').click();
})

$('input[type=file]').change(function() {
    var file = (this.files[0].name).toString();
    var reader = new FileReader();

    $('#file-info').text('');
    $('#file-info').text(file);

    reader.onload = function(e) {
        $('#preview img').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);
});