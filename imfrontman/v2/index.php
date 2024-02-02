<?php
header('Content-Type: text/html; charset=utf-8');
?>
<html>

<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">
    <script src="https://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>
</head>
<style>
    * {
        font-family: Arial;
    }

    .half {
        width: 47%;
        float: left;
        margin: 0 1%;
    }

    .half:first-of-type {
        border-right: 2px solid #CDCDCD;
    }

    input {
        margin: 5px;
        padding: 10px;
        font-size: 14px;
    }

    label {
        min-width: 140px;
        display: inline-block;
        text-align: right;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"] {
        min-width: 320px;
    }

    button {
        border: 1px solid #02960d;
        background: #02960d;
        color: #fff;
        font-size: 17px;
        text-transform: uppercase;
        font-family: tahoma, sans-serif;
        letter-spacing: 2px;
        padding: 0.5em 1em;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background: #025d08;
        transition: all .3s ease;
    }

    .uploader-wrapper {
        display: flex;
        padding-left: 144px;
        flex-direction: column;
        max-width: 330px;
        position: relative;
        top: -30px;
    }

    #fileuploader .ajax-file-upload {
        border: 1px solid #fdc601;
        background: #fdc601;
        color: #000;
        font-size: 12px;
        text-transform: uppercase;
        font-family: tahoma, sans-serif;
        letter-spacing: 2px;
        padding: 0.5em 1em;
        border-radius: 4px;
        cursor: pointer;
        font-weight: normal;
        line-height: 1.8;
        box-shadow: none;
    }

    .generate {
        margin-left: 145px;
        margin-bottom: 25px;
    }

    .uploader-wrapper input.floated-left {
    float: left;
    max-width: 320px;
}

.uploader-wrapper small.floated-left {
    float: left;
    clear: none;
    display: inline-block;
    width: 135px;
}

.uploader-wrapper {
    max-width: 475px;
    display: block;
}

.uploader-wrapper small {
    clear: both;
    width: 100%;
    display: block;
    padding-top: 15px;
}

    @media only screen {
        html {
            min-height: 100%;
        }
    }

    @media only screen and (max-width:596px) {
        .small-float-center {
            margin: 0 auto !important;
            float: none !important;
            text-align: center !important
        }

        .small-text-center {
            text-align: center !important
        }

        .small-text-left {
            text-align: left !important
        }

        .small-text-right {
            text-align: right !important
        }
    }

    @media only screen and (max-width:596px) {
        .hide-for-large {
            display: block !important;
            width: auto !important;
            overflow: visible !important;
            max-height: none !important;
            font-size: inherit !important;
            line-height: inherit !important
        }
    }

    @media only screen and (max-width:596px) {

        table.body table.container .hide-for-large,
        table.body table.container .row.hide-for-large {
            display: table !important;
            width: 100% !important
        }
    }

    @media only screen and (max-width:596px) {
        table.body table.container .callout-inner.hide-for-large {
            display: table-cell !important;
            width: 100% !important
        }
    }

    @media only screen and (max-width:596px) {
        table.body table.container .show-for-large {
            display: none !important;
            width: 0;
            mso-hide: all;
            overflow: hidden
        }
    }

    @media only screen and (max-width:596px) {
        table.body img {
            width: auto;
            height: auto
        }

        table.body center {
            min-width: 0 !important
        }

        table.body .container {
            width: 95% !important
        }

        table.body .column,
        table.body .columns {
            height: auto !important;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding-left: 16px !important;
            padding-right: 16px !important
        }

        table.body .column .column,
        table.body .column .columns,
        table.body .columns .column,
        table.body .columns .columns {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        table.body .collapse .column,
        table.body .collapse .columns {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        td.small-1,
        th.small-1 {
            display: inline-block !important;
            width: 8.33333% !important
        }

        td.small-2,
        th.small-2 {
            display: inline-block !important;
            width: 16.66667% !important
        }

        td.small-3,
        th.small-3 {
            display: inline-block !important;
            width: 25% !important
        }

        td.small-4,
        th.small-4 {
            display: inline-block !important;
            width: 33.33333% !important
        }

        td.small-5,
        th.small-5 {
            display: inline-block !important;
            width: 41.66667% !important
        }

        td.small-6,
        th.small-6 {
            display: inline-block !important;
            width: 50% !important
        }

        td.small-7,
        th.small-7 {
            display: inline-block !important;
            width: 58.33333% !important
        }

        td.small-8,
        th.small-8 {
            display: inline-block !important;
            width: 66.66667% !important
        }

        td.small-9,
        th.small-9 {
            display: inline-block !important;
            width: 75% !important
        }

        td.small-10,
        th.small-10 {
            display: inline-block !important;
            width: 83.33333% !important
        }

        td.small-11,
        th.small-11 {
            display: inline-block !important;
            width: 91.66667% !important
        }

        td.small-12,
        th.small-12 {
            display: inline-block !important;
            width: 100% !important
        }

        .column td.small-12,
        .column th.small-12,
        .columns td.small-12,
        .columns th.small-12 {
            display: block !important;
            width: 100% !important
        }

        table.body td.small-offset-1,
        table.body th.small-offset-1 {
            margin-left: 8.33333% !important;
            Margin-left: 8.33333% !important
        }

        table.body td.small-offset-2,
        table.body th.small-offset-2 {
            margin-left: 16.66667% !important;
            Margin-left: 16.66667% !important
        }

        table.body td.small-offset-3,
        table.body th.small-offset-3 {
            margin-left: 25% !important;
            Margin-left: 25% !important
        }

        table.body td.small-offset-4,
        table.body th.small-offset-4 {
            margin-left: 33.33333% !important;
            Margin-left: 33.33333% !important
        }

        table.body td.small-offset-5,
        table.body th.small-offset-5 {
            margin-left: 41.66667% !important;
            Margin-left: 41.66667% !important
        }

        table.body td.small-offset-6,
        table.body th.small-offset-6 {
            margin-left: 50% !important;
            Margin-left: 50% !important
        }

        table.body td.small-offset-7,
        table.body th.small-offset-7 {
            margin-left: 58.33333% !important;
            Margin-left: 58.33333% !important
        }

        table.body td.small-offset-8,
        table.body th.small-offset-8 {
            margin-left: 66.66667% !important;
            Margin-left: 66.66667% !important
        }

        table.body td.small-offset-9,
        table.body th.small-offset-9 {
            margin-left: 75% !important;
            Margin-left: 75% !important
        }

        table.body td.small-offset-10,
        table.body th.small-offset-10 {
            margin-left: 83.33333% !important;
            Margin-left: 83.33333% !important
        }

        table.body td.small-offset-11,
        table.body th.small-offset-11 {
            margin-left: 91.66667% !important;
            Margin-left: 91.66667% !important
        }

        table.body table.columns td.expander,
        table.body table.columns th.expander {
            display: none !important
        }

        table.body .right-text-pad,
        table.body .text-pad-right {
            padding-left: 10px !important
        }

        table.body .left-text-pad,
        table.body .text-pad-left {
            padding-right: 10px !important
        }

        table.menu {
            width: 100% !important
        }

        table.menu td,
        table.menu th {
            width: auto !important;
            display: inline-block !important
        }

        table.menu.small-vertical td,
        table.menu.small-vertical th,
        table.menu.vertical td,
        table.menu.vertical th {
            display: block !important
        }

        table.menu[align=center] {
            width: auto !important
        }

        table.button.small-expand,
        table.button.small-expanded {
            width: 100% !important
        }

        table.button.small-expand table,
        table.button.small-expanded table {
            width: 100%
        }

        table.button.small-expand table a,
        table.button.small-expanded table a {
            text-align: center !important;
            width: 100% !important;
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        table.button.small-expand center,
        table.button.small-expanded center {
            min-width: 0
        }
    }

    @media screen and (max-width:460px) {
        p.under-logo {
            margin: 0
        }
    }

    /*new*/
    select {min-width: 320px;margin-left: 5px;height: 40px;padding-left: 10px;}
</style>
<section class="half">
    <h2>Formulář</h2>
    <form action="" method="POST">
       <p> <label>Firma</label>
        <select>
            <option value="Frontman" selected="selected">Frontman</option>
             <option value="GFF">GFF</option>
        </select></p>
        <label>Jméno</label>
        <input id="name" type="text" name="name" value="" placeholder="Vložte své jméno" required></br>
        <label>Pozice</label>
        <input type="text" name="position" value="" placeholder="Vložte pracovní pozici" required></br>
        <label>Telefon</label>
        <input class="phone" type="tel" name="phone" value="" placeholder="Zadejte vaše telefonní číslo" required></br>
        <label>Email</label>
        <input type="email" name="email" value="" placeholder="Zadejte váš email" required></br>
        <label style="padding-top:15px;">Fotografie</label>
        <div class="uploader-wrapper">
            <input class="floated-left" type="text" name="file-url" value="" placeholder="Zadejte adresu obrázku" required><small class="floated-left"><em>&nbsp;&nbsp;(rozměry 153x159px)</em></small></br><small><strong>nebo</strong></small><br>
            <div id="fileuploader">Nahrát fotku</div>

            <div id="eventsmessage"></div>
        </div>


    </form>
    <button type="submit" class="generate">Generovat</button>


    <script>
        var companies = [
            {
                'name' : 'Frontman',
                'address' : 'Vídeňská 101/119, 619 Brno',
                'address_link' : 'https://g.page/frontman_sro?share',
                'logosquare' : '/assets/logo-frontman-ctverec.jpg',
                'logorect' : '/assets/logo-frontman-obdelnik.jpg',
                'web' : 'https://www.imfrontman.com',
                'linkedin' : 'https://cz.linkedin.com/company/frontmancz',
                'facebook' : 'https://www.facebook.com/imfrontman/',
                'instagram' : 'https://www.instagram.com/WeAreFrontman/',
                'youtube' : 'https://www.youtube.com/channel/UCtnFjsxiqlFI2JmpCtiLAfA'
            },
            {
                'name' : 'GFF',
                'address' : 'Vídeňská 188/119d, 619 00 Brno',
                'address_link' : 'https://goo.gl/maps/xsx2fHU5aEfmZ8nE7',
                'logosquare' : '/assets/logo-frontman-ctverec.jpg',
                'logorect' : '/assets/logo-frontman-obdelnik.jpg',
                'web' : 'https://gffgroup.cz',
                'linkedin' : 'https://www.linkedin.com/company/gff-s-r-o/about/',
                'facebook' : 'https://www.facebook.com/imfrontman/',
                'instagram' : 'https://www.instagram.com/ImFrontman/',
                'youtube' : 'https://www.youtube.com/channel/UCz7nxcHgZoJwkYSt9OEKjrw'
            }
        ];


        $(document).ready(function() {

            function phoneFormatter() {
                $('.phone').on('input', function() {
                    
                    var number = $(this).val();
            
                    if (number.length == 13) {
                    number = number.replace(/(.{4})(\d{3})(\d{3})(\d{3})/, "$1 $2 $3 $4");
                    } else if (number.length == 9) {
                    number = number.replace(/(\d{3})(\d{3})(\d{3})/, "$1 $2 $3");
                    }
                    $(this).val(number)
                });
                }
            phoneFormatter();

            $(".generate").click(function() {
                var name = $.trim($("input[name='name']").val());
                var position = $.trim($("input[name='position']").val());
                var phone = $.trim($("input[name='phone']").val());
                var email = $.trim($("input[name='email']").val());
                var file_url = $.trim($("input[name='file-url']").val());
                var selected_company = $.trim($("select option:checked").val());


                console.log(name, position, phone,selected_company);

                $(".preview").load('generator-sign.php', {
                    'name': name,
                    'position': position,
                    'phone': phone,
                    'email': email,
                    'file_url': file_url,
                    'company' : selected_company
                }, function() {
                    var signature = $(".preview").html();
                    $("#content").val(signature);
                    console.log(signature);
                });

            });
            var extraObj = $("#fileuploader").uploadFile({
                url: "https://podpis.imfrontman.com/v2/upload.php",
                fileName: "myfile",
                showFileSize: true,
                showDelete: true,
                showPreview: true,
                multiple: false,
                dragDrop: false,
                previewWidth: 153,
                returnType: "json",
                maxFileCount: 1,
                dragDropStr: "Drag Drop",
                abortStr: "Abort",
                deleteStr: "Smazat fotku",
                cancelStr: "Cancel",
                uploadErrorStr: "upload error",
                acceptFiles: "image/*",
                uploadStr: "Vybrat soubor",
                doneStr: "Fail",
                autoSubmit: true,
                deleteCallback: function (data, pd) {
                    for (var i = 0; i < data.length; i++) {
                        $.post("delete.php", {op: "delete",name: data[i]},
                            function (resp,textStatus, jqXHR) {
                                //Show Message	
                                alert("Fotka smazána");
                            });
                    }
                    $("input[name='file-url']").val('');
                    pd.statusbar.hide(); //You choice.

                },
                onSuccess: function(files, data, xhr, pd) {
                    $("input[name='file-url']").val('https://podpis.imfrontman.com/v2/uploads/' + data.toString());

                },
                onError: function(files, status, errMsg, pd) {
                    $("#eventsmessage").html($("#eventsmessage").html() + "<br/>Error for: " + JSON.stringify(files));
                },
                onCancel: function(files, pd) {
                    $("#eventsmessage").html($("#eventsmessage").html() + "<br/>Canceled  files: " + JSON.stringify(files));
                }
            });
            $("#upload-file").click(function(e) {
                e.preventDefault();
                extraObj.startUpload();
            });
        });
    </script>

</section>
<section class="half">
    <h2>Náhled</h2>
    <div class="preview">
        <br></br>
<table class="body" data-made-with-foundation="" style="Margin:0;border-collapse:collapse;border-spacing:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;width:100%"><tbody><tr style="font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top"><td class="float-left" align="left" valign="top" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table class="container" style="Margin:0 auto;background:#fefefe;border-collapse:collapse;border-spacing:0;font-family:Verdana,sans-serif;margin:0 auto;margin-left:0;max-width:760px!important;padding:0;text-align:inherit;vertical-align:top;width:680px"><tbody><tr style="font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top"><td class="p-top-30" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table class="row" style="border-collapse:collapse;border-spacing:0;display:table;font-family:Verdana,sans-serif;padding:0;position:relative;text-align:left;vertical-align:top;width:100%"><tbody><tr style="font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top"><th class="small-12 columns first" style="Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:0px;padding-right:27px;text-align:left;width:200px"><table class="profile-photo" style="border-collapse:collapse;border-spacing:0;font-family:Verdana,sans-serif;padding:0;padding-right:30px;text-align:left;vertical-align:top;width:100%"><tbody><tr style="font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top"><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><img src="assets/frontman-logo-ctverec.jpg" width="200" alt="fotka" style="-ms-interpolation-mode:bicubic;clear:both;display:block;font-family:Verdana,sans-serif;max-width:200px;outline:0;text-decoration:none;width:200px;"></td></tr></tbody></table></th><th class="small-12 large-8 columns" style="Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:8px;padding-right:8px;text-align:left;width:448px;vertical-align: middle;"><p class="name" style="Margin:0;Margin-bottom:10px;color:#000;font-family:Verdana,sans-serif;font-size:24px;font-weight:700;line-height:1;margin:0;margin-bottom:5px;margin-top:7px;padding:0;text-align:left">Eva Vlachynská Ringlová</p><p class="position" style="Margin:0;Margin-bottom:10px;color:#000;font-family:Verdana,sans-serif;font-size:16px;font-weight:300;line-height:1.3;margin:0;margin-bottom:20px;margin-top:0;padding:0;text-align:left">Obchodní konzultant a ekonomický analytik</p><table class="contact-details" style="border-collapse:collapse;border-spacing:0;font-family:Verdana,sans-serif;margin-bottom:20px;padding:0;text-align:left;vertical-align:top;width:100%"><tbody><tr style="font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top"><td class="contact-details__icon" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#454545;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;hyphens:auto;line-height:20px;margin:0;margin-bottom:0;padding:0;text-align:left;text-decoration:none;vertical-align:middle;width:27px;word-wrap:break-word"><img src="assets/ico-tel.jpg" width="12" height="12" style="-ms-interpolation-mode:bicubic;clear:both;display:block;font-family:Verdana,sans-serif;max-width:100%;outline:0;text-decoration:none;width:auto"></td><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#454545;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;hyphens:auto;line-height:20px;margin:0;margin-bottom:0;padding:0;text-align:left;text-decoration:none;vertical-align:top;word-wrap:break-word"><a href="tel:+420907663776" target="_blank" style="Margin:0;color:#454545;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;line-height:20px;margin:0;margin-bottom:0;padding:0;text-align:left;text-decoration:none">+420 907 663 776</a></td></tr><tr style="font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top"><td class="contact-details__icon" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#454545;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;hyphens:auto;line-height:20px;margin:0;margin-bottom:0;padding:0;text-align:left;text-decoration:none;vertical-align:middle;width:27px;word-wrap:break-word"><img src="assets/ico-mail.jpg" width="12" style="-ms-interpolation-mode:bicubic;clear:both;display:block;font-family:Verdana,sans-serif;max-width:100%;outline:0;text-decoration:none;width:auto"></td><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#454545;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;hyphens:auto;line-height:20px;margin:0;margin-bottom:0;padding:0;text-align:left;text-decoration:none;vertical-align:top;word-wrap:break-word"><a href="mailto:mruskovicova@imfrontman.com" target="_blank" style="Margin:0;color:#454545;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;line-height:20px;margin:0;margin-bottom:0;padding:0;text-align:left;text-decoration:none">mruskovicova@imfrontman.com</a></td></tr><tr style="font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top"><td class="contact-details__icon" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#454545;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;hyphens:auto;line-height:20px;margin:0;margin-bottom:0;padding:0;text-align:left;text-decoration:none;vertical-align:middle;width:27px;word-wrap:break-word"><img src="assets/ico-marker.jpg" width="12" style="-ms-interpolation-mode:bicubic;clear:both;display:block;font-family:Verdana,sans-serif;max-width:100%;outline:0;text-decoration:none;width:auto"></td><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#454545;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;hyphens:auto;line-height:20px;margin:0;margin-bottom:0;padding:0;text-align:left;text-decoration:none;vertical-align:top;word-wrap:break-word"><a href="https://imfrontman.com" target="_blank" style="Margin:0;color:#454545;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;line-height:20px;margin:0;margin-bottom:0;padding:0;text-align:left;text-decoration:none">www.imfrontman.com</a></td></tr></tbody></table><table class="contact-company" style="border-collapse:collapse;border-spacing:0;font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top;"><tbody><tr style="font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top"><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;padding-right:15px;text-align:left;vertical-align:top;width:24px;word-wrap:break-word"><a href="https://imfrontman.com" target="_blank" style="Margin:0;color:#2199e8;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none"><img src="assets/ico-web.jpg" style="-ms-interpolation-mode:bicubic;border:none;clear:both;display:block;font-family:Verdana,sans-serif;max-width:100%;outline:0;text-decoration:none;width:auto"></a></td><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;padding-right:15px;text-align:left;vertical-align:top;width:24px;word-wrap:break-word"><a href="https://imfrontman.com" target="_blank" style="Margin:0;color:#2199e8;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none"><img src="assets/ico-lin.jpg" style="-ms-interpolation-mode:bicubic;border:none;clear:both;display:block;font-family:Verdana,sans-serif;max-width:100%;outline:0;text-decoration:none;width:auto"></a></td><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;padding-right:15px;text-align:left;vertical-align:top;width:24px;word-wrap:break-word"><a href="https://imfrontman.com" target="_blank" style="Margin:0;color:#2199e8;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none"><img src="assets/ico-fb.jpg" style="-ms-interpolation-mode:bicubic;border:none;clear:both;display:block;font-family:Verdana,sans-serif;max-width:100%;outline:0;text-decoration:none;width:auto"></a></td><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;padding-right:15px;text-align:left;vertical-align:top;width:24px;word-wrap:break-word"><a href="https://imfrontman.com" target="_blank" style="Margin:0;color:#2199e8;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none"><img src="assets/ico-insta.jpg" style="-ms-interpolation-mode:bicubic;border:none;clear:both;display:block;font-family:Verdana,sans-serif;max-width:100%;outline:0;text-decoration:none;width:auto"></a></td><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;padding-right:15px;text-align:left;vertical-align:top;width:24px;word-wrap:break-word"><a href="https://imfrontman.com" target="_blank" style="Margin:0;color:#2199e8;font-family:Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none"><img src="assets/ico-yt.jpg" style="-ms-interpolation-mode:bicubic;border:none;clear:both;display:block;font-family:Verdana,sans-serif;max-width:100%;outline:0;text-decoration:none;width:auto"></a></td></tr></tbody></table></th><th class="expander" style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;visibility:hidden;width:0"></th></tr></tbody></table></td></tr><tr style="font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top"><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table class="separator" style="border-collapse:collapse;border-spacing:0;font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top;width:100%"><tbody><tr style="font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top"><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-bottom:.5px solid #454545;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:0;margin:0;padding:0;padding-bottom:10px;padding-top:10px;text-align:left;vertical-align:top;width:100%;word-wrap:break-word">&nbsp;</td></tr></tbody></table><table class="row" style="border-collapse:collapse;border-spacing:0;display:table;font-family:Verdana,sans-serif;padding:0;position:relative;text-align:left;vertical-align:top;width:100%"><tbody><tr style="font-family:Verdana,sans-serif;padding:0;text-align:left;vertical-align:top"><th class="columns first last small-12 footer" style="Margin:0 auto;color:#454545;font-family:Helvetica,Arial,sans-serif;font-size:12px;font-weight:300;line-height:15px;margin:0 auto;padding:0;padding-bottom:16px;padding-top:11px;text-align:left">Právní informace: tento e-mail a všechny připojené soubory jsou důvěrné a mohou být chráněny zákonem. Tento e-mail je určen pouze uvedenému příjemci a dalším osobám, které jsou jmenovitě uvedeny jako příjemci.</th><th class="expander" style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;visibility:hidden;width:0"></th></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></body>
    </div>
    <div class="down">

    </div>
    <form action="download-signature.php" method="POST">
        <input style="visibility:hidden;" type="text" name="content" id="content" value="" />
        <button type="submit" id="download" style="margin:20px;margin-left:auto;margin-right:auto;">
            Stáhnout podpis
        </button>
    </form>
</section>

<h2 style="clear:both;">Návod k použití</h2>
<ol>
    <li>Do formuláře vlevo zadejte všechny potřebné údaje</li>
    <li>Kliknout na tlačítko generovat pod formulářem</li>
    <li>Stáhnout tlačítkem "Stáhnout podpis"</li>
    <li>Stažený soubor otevřít v prohlížeči</li>
    <li>V otevřeném okně s podpisem stistkněte CONTROL + A (označit všechen obsah) a poté CONTROL + C (kopírovat)</li>
    <li>Otevřete Gmail.</li>
    <li>Vpravo nahoře klikněte na ozubené kolečko > Nastavení.</li>
    <li>V sekci Podpis zadejte do příslušného pole text podpisu. Pokud chcete, můžete si podpis přizpůsobit přidáním obrázku nebo změnou stylu textu.</li>
    <li>Dole na stránce klikněte na Uložit změny.</li>
</ol>


</html>