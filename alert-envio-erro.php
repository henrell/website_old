<?php ob_start() ?> 
<html>
    <head>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.12/dist/sweetalert2.all.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.css" type="text/css" rel="stylesheet"/>
    </head>
    <style>
        body {
            font-family:'Tahoma';
        }
    </style>
    <body>
        <script type="text/javascript">
            swal({
                type: "error",
                title: "Ops!",
                text: "Ocorreu um erro. Tente novamente"
            }).then(function(){
                window.history.back();
            })
        </script>
    </body>
</html>