<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fusion Energy</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans">
        <x-sections.header />
        <main>
            <x-sections.hero /> 
            <x-sections.servicos id="servicos" />
            <x-sections.projeto-fotovoltaico id="fotovoltaico" />
            <x-sections.limpeza-paineis id="limpeza" />
            <x-sections.instagram-feed id="instagram" /> 
            <x-sections.contato id="contato" />
        </main>
        <x-sections.footer />
        <x-sections.popup-whatsapp />
    </body>
</html>
