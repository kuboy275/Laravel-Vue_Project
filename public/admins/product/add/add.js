$(function() {

    $(".select-tags").select2({
        tags: true,
        tokenSeparators: [',']
    })
    $(".select-init").select2({
        placeholder: "Chọn danh mục",
        allowClear: true
    });

    let editor_config = {
        path_absolute: "/",
        selector: "textarea.tinymce-editor",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link  | color",
    };
    tinymce.init(editor_config)
});