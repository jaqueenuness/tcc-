<!DOCTYPE html>
<html>
<head>
    <title>Contatos</title>
    <style>
        /* Estilo personalizável */
        .social-link {
            display: inline-block;
            padding: 10px;
            background-color: #27ff4bd2;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
        }
        
        /* Modifique o estilo abaixo conforme necessário */
        .social-link.custom {
            background-color: #ff002b62;
            color: #000000;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Acessem ao WhatsApp ou Instagram</h1>
    
    <a class="social-link" href="https://wa.me/qr/GYC6C37WRSDPA1">WhatsApp</a>
    <a class="social-link custom" href="https://www.instagram.com/mcglp_oficial?r=nametag">Instagram</a>

    <!-- O JavaScript abaixo é opcional. Ele pode ser usado para abrir os links em uma nova aba. -->
    <script>
        var socialLinks = document.getElementsByClassName('social-link');
        for (var i = 0; i < socialLinks.length; i++) {
            socialLinks[i].addEventListener('click', function(event) {
                event.preventDefault();
                window.open(this.getAttribute('href'), '_blank');
            });
        }
    </script>
</body>
</html>