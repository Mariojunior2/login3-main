<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TydraPI - Plataforma Educacional</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <script src="https://cdn.gpteng.co/gptengineer.js" type="module"></script>
    <meta name="description" content="Plataforma educacional para aprendizado interativo e colaborativo">
    <meta name="keywords" content="educação, aprendizado, recursos educacionais, tecnologia">
</head>
<body class="bg-tydrapi-black text-white font-inter">
    <div class="tydrapi-container mx-auto max-w-4xl p-6">
        <header class="mb-12 text-center">
            <h1 class="text-4xl font-bold text-tydrapi-red mb-4">TydraPI Educacional</h1>
            <p class="text-xl text-tydrapi-gray">Aprenda, Colabore, Evolua</p>
        </header>

        <main>
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-6 text-white">Recursos Educacionais</h2>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="tydrapi-card hover:border-tydrapi-red transition-all">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-tydrapi-red mr-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                            <h3 class="text-xl font-medium">Materiais de Estudo</h3>
                        </div>
                        <p class="text-tydrapi-gray">Documentos, artigos e resumos para aprofundamento.</p>
                    </div>

                    <div class="tydrapi-card hover:border-tydrapi-red transition-all">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-tydrapi-red mr-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                            <h3 class="text-xl font-medium">Vídeo Aulas</h3>
                        </div>
                        <p class="text-tydrapi-gray">Conteúdo visual e interativo para diferentes níveis.</p>
                    </div>

                    <div class="tydrapi-card hover:border-tydrapi-red transition-all">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-tydrapi-red mr-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                <path d="M8 14h.01"></path>
                                <path d="M12 14h.01"></path>
                                <path d="M16 14h.01"></path>
                                <path d="M8 18h.01"></path>
                                <path d="M12 18h.01"></path>
                                <path d="M16 18h.01"></path>
                            </svg>
                            <h3 class="text-xl font-medium">Exercícios</h3>
                        </div>
                        <p class="text-tydrapi-gray">Pratique e teste seus conhecimentos.</p>
                    </div>
                </div>
            </section>

            <section class="bg-tydrapi-darkgray rounded-lg p-6 mt-8">
                <h2 class="text-2xl font-semibold mb-4 text-white">Próximos Eventos</h2>
                <ul class="space-y-4">
                    <li class="flex justify-between items-center border-b border-tydrapi-gray/20 pb-4">
                        <div>
                            <h3 class="font-medium text-lg">Workshop de Programação</h3>
                            <p class="text-tydrapi-gray">21 de Junho, 19:00</p>
                        </div>
                        <span class="bg-tydrapi-red text-white px-3 py-1 rounded-full text-sm">Inscreva-se</span>
                    </li>
                    <li class="flex justify-between items-center border-b border-tydrapi-gray/20 pb-4">
                        <div>
                            <h3 class="font-medium text-lg">Seminário de IA</h3>
                            <p class="text-tydrapi-gray">05 de Julho, 20:00</p>
                        </div>
                        <span class="bg-tydrapi-red text-white px-3 py-1 rounded-full text-sm">Inscreva-se</span>
                    </li>
                </ul>
            </section>
        </main>

        <footer class="mt-12 text-center text-tydrapi-gray">
            <p>&copy; 2025 TydraPI - Todos os direitos reservados</p>
        </footer>
    </div>
</body>
</html>
