<script src="{{ asset('admin-assets/plugins/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea.tinymce-editor-full-rtl', // Replace this CSS selector to match the placeholder element for TinyMCE
        directionality : 'rtl',
        plugins: 'print preview paste importcss searchreplace autolink directionality code visualblocks visualchars fullscreen image link media codesample table charmap hr nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        height : "600",
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image imagetools table',
        skin: 'oxide',
        content_css:'default',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        file_picker_callback (callback, value, meta) {
            let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
            let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

            tinymce.activeEditor.windowManager.openUrl({
                url : '/file-manager/tinymce5',
                title : 'File manager',
                width : x * 0.8,
                height : y * 0.8,
                onMessage: (api, message) => {
                    callback(message.content, { text: message.text })
                }
            })
        }
    });
    tinymce.init({
        selector: 'textarea.tinymce-editor-full', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'print preview paste importcss searchreplace autolink directionality code visualblocks visualchars fullscreen image link media codesample table charmap hr nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        height : "600",
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image imagetools table',
        skin: 'oxide',
        content_css:'default',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        file_picker_callback (callback, value, meta) {
            let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
            let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

            tinymce.activeEditor.windowManager.openUrl({
                url : '/file-manager/tinymce5',
                title : 'File manager',
                width : x * 0.8,
                height : y * 0.8,
                onMessage: (api, message) => {
                    callback(message.content, { text: message.text })
                }
            })
        }
    });
window.addEventListener("message", function(event) {
    if (typeof(event.data) === "string") {
        editorObject.then((result)=>{
            result[0].insertContent(event.data)
        });
    }
});

</script>
