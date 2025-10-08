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
    <body class="font-sans overflow-x-hidden" x-data="{ activeSection: 'hero' }">
        <x-sections.header />
        <main>
            <section x-intersect.threshold.0.5="activeSection = 'hero'">
                <x-sections.hero /> 
            </section>
            <section x-intersect.threshold.0.5="activeSection = 'servicos'">
                <x-sections.servicos id="servicos" />
            </section>
            <section x-intersect.threshold.0.5="activeSection = 'fotovoltaico'">
                <x-sections.projeto-fotovoltaico id="fotovoltaico" />
            </section>
            <section x-intersect.threshold.0.5="activeSection = 'limpeza'">
                <x-sections.limpeza-paineis id="limpeza" />
            </section>
            <section x-intersect.threshold.0.5="activeSection = 'instagram'">
                <x-sections.instagram-feed id="instagram" /> 
            </section>
            <section x-intersect.threshold.0.5="activeSection = 'contato'">
                <x-sections.contato id="contato" />
            </section>
        </main>
        <x-sections.footer />
        <x-sections.popup-whatsapp />
        <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
        
    </body>
</html>
