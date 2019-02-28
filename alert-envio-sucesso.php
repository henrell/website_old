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
                type: "success",
                title: "Obrigado",
                text: "sua mensagem foi enviada com sucesso"
            }).then(function(){
                window.location.href = 'index.php'
            })
        </script>
    </body>
</html>