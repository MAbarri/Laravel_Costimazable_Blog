<script src="{{ url( 'packages/tinymce/tinymce.min.js' ) }}" type="text/javascript"></script>
<script>
  fixNewLines = function(content)
    {
      content = content.replace(/<br>/g, "");
      content = content.replace(/&lt;/g, "<");
      content = content.replace(/&gt;/g, ">");
      content = content.replace(/&quot;/g, "\"");
      return content;
    }
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        menubar : false,
        relative_urls: false,
        forced_root_block: false, // Start tinyMCE without any paragraph tag
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars media nonbreaking",
            "table contextmenu directionality paste textcolor code localautosave"
        ],
        toolbar1: "localautosave | bold italic underline hr | link unlink image media | styleselect forecolor backcolor paste | bullist numlist outdent indent | code preview ",
        entity_encoding: "raw",
        file_picker_callback : elFinderBrowser,
        setup: function(editor) {
          editor.on('BeforeSetContent', function(e) {
            e.content = fixNewLines(e.content);
          });
          editor.on('SaveContent', function(e) {
            e.content = fixNewLines(e.content);
          });
      }
    });

    function elFinderBrowser(callback, value, meta) {
        tinymce.activeEditor.windowManager.open({
            title: '{{  trans('admin.elfinder') }}',
            url: '{{ route('elfinder.tinymce4') }}',
            width: 900,
            height: 450,
            resizable: 'yes'
        }, {
            setUrl: function (url) {
                callback(url);
            }
        });
        return false;
    }
</script>
