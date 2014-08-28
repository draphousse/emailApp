


$(document).ready(function(){
    var selected = "";

            //---------------------------------------------------------------
        // TinyMCE Wysiwyg declaration
        //---------------------------------------------------------------

    // Main content wysiwyg
    tinyMCE.init({
        selector: ".tinymce-editable",
        min_height: 110,
        height: 110,
        resize: false,
        /*setup: function (ed) {
            ed.on('change', function () {
                $("#btn_validate , #btn_cancel").prop("disabled", false);
            });
        },*/
        inline: true,
        plugins: [ " textcolor colorpicker emoticons "
        ],
        toolbar1: "undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent",
        toolbar2: "formatselect fontselect fontsizeselect | forecolor backcolor | emoticons",
        menubar: false
    });


    
    $(document).on("click" , ".trash  , .trash_titre" , function(){
        $(this).parent().parent().remove();
        return false;
    });
    
    $('#menu').mouseover(function(){
        $(this).toggleClass('active-param');
        $('#submenu').toggleClass('show-menu');
    });

    $(document).on("click" , "email-cover button" , function(){
        $("#uploader").dialog("show");
    });

    $("#add_content").click(function(){
        selected = $('#slct_type :selected').attr("value");
        var email = '<div class="email-text-area"><div class="text-area-content tinymce-editable">Zone de Texte d\'exemple - Cliquez pour modifier</div></div>';
        var titre = '<div class="email-title"><h2 class="text-area-content-titre tinymce-editable">Titre d\'exemple - cliquez pour modifier</h2></div>';
        var edit_delete ='<div class="edit-tools"><a href="#"><i class="fa fa-pencil"></i></a><a class="trash" href="#"><i class="fa fa-trash-o"></i></a></div>'; 
        if (selected == ""){
            return false;
        }
        if (selected == "texte"){
            $('.email-add-section').before(
                $(email).append(edit_delete));

            tinyMCE.init({
                    selector: ".tinymce-editable",
                    min_height: 110,
                    height: 110,
                    resize: false,
                    inline: true,
                    plugins: [ " textcolor colorpicker emoticons "
                    ],
                    toolbar1: "undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent",
                    toolbar2: "formatselect fontselect fontsizeselect | forecolor backcolor | emoticons",
                    menubar: false
                });
            return false;
        }
        else if(selected == "image"){
            return false;
        }
        if (selected == "titre"){
            $('.email-add-section').before(
                $(titre).append(edit_delete));

            tinyMCE.init({
                    selector: ".tinymce-editable",
                    min_height: 110,
                    height: 110,
                    resize: false,
                    inline: true,
                    plugins: [ " textcolor colorpicker emoticons "
                    ],
                    toolbar1: "undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent",
                    toolbar2: "formatselect fontselect fontsizeselect | forecolor backcolor | emoticons",
                    menubar: false
                });
            return false;
        }
    });
    $("#uploader").dialog({
        width : "800px",
        modal : true,

    });

    $("#uploader").plupload({
        // General settings
        runtimes: 'html5,flash,silverlight,html4',
        url: "#",
        max_file_size: '2mb',
        chunk_size: '1mb',
        resize: {
            width: 200,
            height: 200,
            quality: 90,
            crop: true
        },
        filters: [
            {title: "Image files", extensions: "jpg,gif,png,jpeg"}
        ],
        rename: true,
        sortable: true,
        dragdrop: true,
        views: {
            list: true,
            thumbs: true,
            active: 'thumbs'
        },
        flash_swf_url: 'http://rawgithub.com/moxiecode/moxie/master/bin/flash/Moxie.cdn.swf',
        silverlight_xap_url: 'http://rawgithub.com/moxiecode/moxie/master/bin/silverlight/Moxie.cdn.xap'
        // uploaded: function () {
        //     ajaxListeFichier();
        // }
    });

});
