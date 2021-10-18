(function($){$(function () {

    $(document).ready(function($) {
        // Init code mirror editor.
        $('.css-editor').each(function() {
            let field = $(this).find('textarea');
            let editor = wp.codeEditor.initialize( field, druo_simple.cm_settings );
            editor.codemirror.setCursor(1);
            $(document).on('keyup', '.CodeMirror-code', function(){
                field.html(editor.codemirror.getValue());
                field.trigger('change');
            });
        });

    });

});})(jQuery);