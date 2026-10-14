<!DOCTYPE html>
<html lang="es" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía Interactiva de Preparación para Entrevistas Laborales</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                        },
                        darkbg: '#0f172a',
                        cardbg: 'rgba(30, 41, 59, 0.7)',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .glass {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .glass-light {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 0, 0, 0.08);
        }
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: rgba(15, 23, 42, 0.6);
        }
        ::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #475569;
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col transition-colors duration-300">

    <header class="sticky top-0 z-50 glass border-b border-slate-800/80 px-4 lg:px-8 py-3 transition-colors duration-300">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-emerald-500 to-teal-400 flex items-center justify-center text-slate-950 font-bold text-xl shadow-lg shadow-emerald-500/20">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <div>
                    <h1 class="font-bold text-lg leading-tight bg-gradient-to-r from-white via-slate-200 to-emerald-400 bg-clip-text text-transparent">JobPrep Pro</h1>
                    <p class="text-xs text-slate-400">Guía Interactiva de Entrevistas</p>
                </div>
            </div>

            <!-- Global Actions & Theme Toggle -->
            <div class="flex items-center gap-3">
                <button id="themeToggle" onclick="toggleTheme()" class="p-2.5 rounded-xl bg-slate-800/80 hover:bg-slate-700 text-slate-300 transition-all border border-slate-700/50" title="Cambiar tema">
                    <i class="fa-solid fa-moon text-amber-400" id="themeIcon"></i>
                </button>
                <a href="#simulator" onclick="switchTab('simulator')" class="hidden sm:flex items-center gap-2 bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-semibold px-4 py-2 rounded-xl text-sm transition-all shadow-md shadow-emerald-500/20">
                    <i class="fa-solid fa-bolt"></i> Simular Entrevista
                </a>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto w-full flex-grow p-4 lg:p-8 flex flex-col lg:flex-row gap-8">
        
        <!-- Sidebar Navigation -->
        <aside class="w-full lg:w-64 flex-shrink-0">
            <div class="sticky top-20 glass rounded-2xl p-4 border border-slate-800/80">
                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3 px-3">Módulos de Aprendizaje</p>
                <nav class="space-y-1.5" id="navigationTabs">
                    <button onclick="switchTab('intro')" data-tab="intro" class="nav-btn active w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 transition-all text-left">
                        <i class="fa-solid fa-compass w-5 text-center"></i> ¿Qué es la Entrevista?
                    </button>
                    <button onclick="switchTab('presentation')" data-tab="presentation" class="nav-btn w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-200 hover:bg-slate-800/50 transition-all text-left">
                        <i class="fa-solid fa-shirt w-5 text-center"></i> Imagen y Presentación
                    </button>
                    <button onclick="switchTab('communication')" data-tab="communication" class="nav-btn w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-200 hover:bg-slate-800/50 transition-all text-left">
                        <i class="fa-solid fa-comments w-5 text-center"></i> Lenguaje Verbal y Corporal
                    </button>
                    <button onclick="switchTab('faqs')" data-tab="faqs" class="nav-btn w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-200 hover:bg-slate-800/50 transition-all text-left">
                        <i class="fa-solid fa-circle-question w-5 text-center"></i> Preguntas Frecuentes
                    </button>
                    <button onclick="switchTab('candidateQuestions')" data-tab="candidateQuestions" class="nav-btn w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-200 hover:bg-slate-800/50 transition-all text-left">
                        <i class="fa-solid fa-clipboard-question w-5 text-center"></i> Preguntas para Hacer
                    </button>
                    <button onclick="switchTab('mistakes')" data-tab="mistakes" class="nav-btn w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-200 hover:bg-slate-800/50 transition-all text-left">
                        <i class="fa-solid fa-triangle-exclamation w-5 text-center"></i> Errores Frecuentes
                    </button>

                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider pt-4 mb-2 px-3">Herramientas Prácticas</p>
                    <button onclick="switchTab('pitch')" data-tab="pitch" class="nav-btn w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-200 hover:bg-slate-800/50 transition-all text-left">
                        <i class="fa-solid fa-wand-magic-sparkles w-5 text-center text-amber-400"></i> Generator Pitch 1 Min.
                    </button>
                    <button onclick="switchTab('simulator')" data-tab="simulator" class="nav-btn w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-200 hover:bg-slate-800/50 transition-all text-left">
                        <i class="fa-solid fa-stopwatch w-5 text-center text-emerald-400"></i> Simulador de Entrevista
                    </button>
                    <button onclick="switchTab('quiz')" data-tab="quiz" class="nav-btn w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-200 hover:bg-slate-800/50 transition-all text-left">
                        <i class="fa-solid fa-graduation-cap w-5 text-center text-teal-400"></i> Test de Preparación
                    </button>
                </nav>
            </div>
        </aside>

        <main class="flex-1 min-w-0">

            <!-- TAB 1: INTRO -->
            <section id="tab-intro" class="tab-content space-y-6">
                <div class="glass rounded-2xl p-6 lg:p-8 border border-slate-800/80">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 mb-3">Módulo 1</span>
                    <h2 class="text-2xl lg:text-3xl font-bold mb-4">¿Qué es una Entrevista Laboral?</h2>
                    <p class="text-slate-300 leading-relaxed mb-6">
                        La entrevista de trabajo es un diálogo bidireccional estructurado donde la empresa evalúa la idoneidad del candidato y este analiza si el puesto y la organización se alinean con sus aspiraciones profesionales.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-6">
                        <div class="p-5 rounded-xl bg-slate-800/40 border border-slate-700/50 hover:border-emerald-500/30 transition-all">
                            <div class="w-10 h-10 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center mb-3">
                                <i class="fa-solid fa-building text-lg"></i>
                            </div>
                            <h3 class="font-semibold text-lg mb-2">Para el Empleador</h3>
                            <ul class="text-sm text-slate-300 space-y-2">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-emerald-400 mt-1"></i> Validar experiencia y habilidades técnicas (*hard skills*).</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-emerald-400 mt-1"></i> Evaluar encaje cultural y competencias blandas (*soft skills*).</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-emerald-400 mt-1"></i> Predecir el desempeño del profesional en el equipo.</li>
                            </ul>
                        </div>

                        <div class="p-5 rounded-xl bg-slate-800/40 border border-slate-700/50 hover:border-emerald-500/30 transition-all">
                            <div class="w-10 h-10 rounded-lg bg-teal-500/20 text-teal-400 flex items-center justify-center mb-3">
                                <i class="fa-solid fa-user-check text-lg"></i>
                            </div>
                            <h3 class="font-semibold text-lg mb-2">Para el Postulante</h3>
                            <ul class="text-sm text-slate-300 space-y-2">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-teal-400 mt-1"></i> Demostrar el valor único que puede aportar.</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-teal-400 mt-1"></i> Conocer el ambiente laboral y las expectativas reales.</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-teal-400 mt-1"></i> Evaluar si la propuesta económica y cultural satisface sus metas.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Interactive Phase Stepper -->
                    <h3 class="text-xl font-bold mt-8 mb-4">Las 3 Fases Clave del Proceso</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-800">
                            <div class="text-emerald-400 font-bold text-sm mb-1">FASE 1</div>
                            <h4 class="font-semibold mb-2">Investigación Previa</h4>
                            <p class="text-xs text-slate-400">Investigar la empresa, repasar el CV y preparar la narrativa propia.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-800">
                            <div class="text-emerald-400 font-bold text-sm mb-1">FASE 2</div>
                            <h4 class="font-semibold mb-2">Ejecución y Diálogo</h4>
                            <p class="text-xs text-slate-400">Demostrar seguridad, escucha activa y usar metodologías concretas (STAR).</p>
                        </div>
                        <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-800">
                            <div class="text-emerald-400 font-bold text-sm mb-1">FASE 3</div>
                            <h4 class="font-semibold mb-2">Seguimiento</h4>
                            <p class="text-xs text-slate-400">Enviar agradecimiento en 24h y mantener comunicación profesional.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tab-presentation" class="tab-content hidden space-y-6">
                <div class="glass rounded-2xl p-6 lg:p-8 border border-slate-800/80">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 mb-3">Módulo 2</span>
                    <h2 class="text-2xl lg:text-3xl font-bold mb-4">Presentación e Imagen Profesional</h2>
                    
                    <!-- Presencial vs Virtual Switch -->
                    <div class="flex gap-2 p-1.5 bg-slate-900/80 rounded-xl mb-6 w-fit border border-slate-800">
                        <button id="btnPresencial" onclick="toggleModalType('presencial')" class="px-4 py-2 rounded-lg text-sm font-medium bg-emerald-500 text-slate-950 transition-all">
                            <i class="fa-solid fa-building-user mr-2"></i> Modalidad Presencial
                        </button>
                        <button id="btnVirtual" onclick="toggleModalType('virtual')" class="px-4 py-2 rounded-lg text-sm font-medium text-slate-400 hover:text-slate-200 transition-all">
                            <i class="fa-solid fa-laptop-code mr-2"></i> Modalidad Virtual
                        </button>
                    </div>

                    <!-- Presencial Content -->
                    <div id="contentPresencial" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="p-4 rounded-xl bg-slate-800/30 border border-slate-700/50">
                                <h4 class="font-semibold text-emerald-400 mb-2"><i class="fa-solid fa-clock mr-2"></i> Puntualidad Estratégica</h4>
                                <p class="text-sm text-slate-300">Llegar entre 10 y 15 minutos antes. Llegar demasiado temprano (30+ min) puede incomodar; llegar tarde destruye la credibilidad.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-800/30 border border-slate-700/50">
                                <h4 class="font-semibold text-emerald-400 mb-2"><i class="fa-solid fa-user-check mr-2"></i> Código de Vestimenta</h4>
                                <p class="text-sm text-slate-300">Investiga el código (*Business Casual* o Formal). Regla de oro: viste un escalón por encima del día a día de la empresa.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Virtual Content (hidden by default) -->
                    <div id="contentVirtual" class="space-y-4 hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="p-4 rounded-xl bg-slate-800/30 border border-slate-700/50">
                                <h4 class="font-semibold text-teal-400 mb-2"><i class="fa-solid fa-wifi mr-2"></i> Entorno Técnico</h4>
                                <p class="text-sm text-slate-300">Prueba conexión, micrófono y cámara 15 min antes. Asegúrate de tener buena iluminación frontal y un fondo ordenado.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-800/30 border border-slate-700/50">
                                <h4 class="font-semibold text-teal-400 mb-2"><i class="fa-solid fa-eye mr-2"></i> Contacto a la Cámara</h4>
                                <p class="text-sm text-slate-300">Para simular contacto visual directo, mira hacia el lente de la cámara cuando hables, no solo a la pantalla.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Interactive Checklist -->
                    <div class="mt-8 pt-6 border-t border-slate-800">
                        <h3 class="text-lg font-bold mb-4 flex items-center justify-between">
                            <span>Checklist Interactivo para el Día de la Entrevista</span>
                            <span id="checkProgress" class="text-xs text-emerald-400 font-mono bg-emerald-500/10 px-2.5 py-1 rounded-full">0/5 Completado</span>
                        </h3>
                        <div class="space-y-2.5" id="checklistContainer">
                            <label class="flex items-center gap-3 p-3 rounded-xl bg-slate-900/40 border border-slate-800 cursor-pointer hover:bg-slate-900/80 transition-all">
                                <input type="checkbox" onchange="updateChecklist()" class="check-item w-4 h-4 rounded text-emerald-500 focus:ring-emerald-500 bg-slate-800 border-slate-700">
                                <span class="text-sm text-slate-300">Investigué la historia, productos y cultura de la empresa.</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-xl bg-slate-900/40 border border-slate-800 cursor-pointer hover:bg-slate-900/80 transition-all">
                                <input type="checkbox" onchange="updateChecklist()" class="check-item w-4 h-4 rounded text-emerald-500 focus:ring-emerald-500 bg-slate-800 border-slate-700">
                                <span class="text-sm text-slate-300">Tengo preparadas 2 o 3 preguntas clave para el entrevistador.</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-xl bg-slate-900/40 border border-slate-800 cursor-pointer hover:bg-slate-900/80 transition-all">
                                <input type="checkbox" onchange="updateChecklist()" class="check-item w-4 h-4 rounded text-emerald-500 focus:ring-emerald-500 bg-slate-800 border-slate-700">
                                <span class="text-sm text-slate-300">Imprimí copias de mi CV o tengo el archivo PDF listo y accesible.</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-xl bg-slate-900/40 border border-slate-800 cursor-pointer hover:bg-slate-900/80 transition-all">
                                <input type="checkbox" onchange="updateChecklist()" class="check-item w-4 h-4 rounded text-emerald-500 focus:ring-emerald-500 bg-slate-800 border-slate-700">
                                <span class="text-sm text-slate-300">Elegí y preparé mi vestimenta con anticipación.</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-xl bg-slate-900/40 border border-slate-800 cursor-pointer hover:bg-slate-900/80 transition-all">
                                <input type="checkbox" onchange="updateChecklist()" class="check-item w-4 h-4 rounded text-emerald-500 focus:ring-emerald-500 bg-slate-800 border-slate-700">
                                <span class="text-sm text-slate-300">Verifiqué la dirección exacta/enlace de conexión y el tiempo de viaje.</span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tab-communication" class="tab-content hidden space-y-6">
                <div class="glass rounded-2xl p-6 lg:p-8 border border-slate-800/80">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 mb-3">Módulo 3</span>
                    <h2 class="text-2xl lg:text-3xl font-bold mb-4">Lenguaje Verbal y Corporal</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Lenguaje Verbal -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-bold text-emerald-400 flex items-center gap-2">
                                <i class="fa-solid fa-microphone"></i> Comunicación Verbal
                            </h3>
                            <div class="p-4 rounded-xl bg-slate-900/50 border border-slate-800 space-y-3">
                                <div>
                                    <h4 class="font-semibold text-sm">Tono y Ritmo</h4>
                                    <p class="text-xs text-slate-400">Habla con calma y articulación clara. Evita hablar muy rápido debido a los nervios.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-sm">Evitar Muletillas</h4>
                                    <p class="text-xs text-slate-400">Sustituye los *"ehhh...", "este...", "o sea"* por breves pausas de silencio para pensar.</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-sm">Vocabulario Positivo</h4>
                                    <p class="text-xs text-slate-400">Enfócate en soluciones, aprendizajes y logros en lugar de problemas pasados.</p>
                                </div>
                            </div>

                            <!-- Voice Meter Simulation -->
                            <div class="p-4 rounded-xl bg-slate-900/80 border border-slate-800">
                                <h4 class="text-xs font-semibold uppercase text-slate-400 mb-2">Simulador de Tono de Voz</h4>
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-xs">Lento</span>
                                    <input type="range" id="voiceRange" min="1" max="100" value="50" oninput="updateVoiceMeter()" class="w-full accent-emerald-500">
                                    <span class="text-xs">Rápido</span>
                                </div>
                                <div id="voiceFeedback" class="text-xs text-emerald-400 font-medium text-center py-1 bg-emerald-500/10 rounded-lg">
                                    ¡Ritmo Óptimo! Muestra serenidad y profesionalismo.
                                </div>
                            </div>
                        </div>

                        <!-- Lenguaje Corporal -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-bold text-teal-400 flex items-center gap-2">
                                <i class="fa-solid fa-child-reaching"></i> Lenguaje Corporal
                            </h3>
                            <div class="p-4 rounded-xl bg-slate-900/50 border border-slate-800 space-y-3">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 rounded bg-emerald-500/10 text-emerald-400"><i class="fa-solid fa-eye"></i></div>
                                    <div>
                                        <h4 class="font-semibold text-sm">Contacto Visual (60-70%)</h4>
                                        <p class="text-xs text-slate-400">Demuestra confianza y sinceridad. Mirar abajo transmite inseguridad.</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="p-2 rounded bg-emerald-500/10 text-emerald-400"><i class="fa-solid fa-chair"></i></div>
                                    <div>
                                        <h4 class="font-semibold text-sm">Postura Erguida y Abierta</h4>
                                        <p class="text-xs text-slate-400">Siéntate derecho apoyando la espalda en la silla. Evita cruzar los brazos (defensivo).</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="p-2 rounded bg-emerald-500/10 text-emerald-400"><i class="fa-solid fa-hands"></i></div>
                                    <div>
                                        <h4 class="font-semibold text-sm">Gesticulación Moderada</h4>
                                        <p class="text-xs text-slate-400">Usa las manos para enfatizar puntos clave, manteniéndolas visibles sobre la mesa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tab-faqs" class="tab-content hidden space-y-6">
                <div class="glass rounded-2xl p-6 lg:p-8 border border-slate-800/80">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 mb-3">Módulo 4</span>
                    <h2 class="text-2xl lg:text-3xl font-bold mb-2">Preguntas Frecuentes y Método STAR</h2>
                    <p class="text-slate-300 text-sm mb-6">El **Método STAR** (Situación, Tarea, Acción, Resultado) es la técnica más efectiva para estructurar tus respuestas.</p>

                    <!-- STAR breakdown card -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-8">
                        <div class="p-3 rounded-xl bg-emerald-500/10 border border-emerald-500/20">
                            <span class="font-bold text-emerald-400 text-lg">S</span>
                            <h4 class="font-semibold text-xs uppercase text-slate-300">Situación</h4>
                            <p class="text-xs text-slate-400 mt-1">Contexto breve del problema o reto.</p>
                        </div>
                        <div class="p-3 rounded-xl bg-teal-500/10 border border-teal-500/20">
                            <span class="font-bold text-teal-400 text-lg">T</span>
                            <h4 class="font-semibold text-xs uppercase text-slate-300">Tarea</h4>
                            <p class="text-xs text-slate-400 mt-1">Cuál era tu responsabilidad específica.</p>
                        </div>
                        <div class="p-3 rounded-xl bg-cyan-500/10 border border-cyan-500/20">
                            <span class="font-bold text-cyan-400 text-lg">A</span>
                            <h4 class="font-semibold text-xs uppercase text-slate-300">Acción</h4>
                            <p class="text-xs text-slate-400 mt-1">Qué pasos exactos realizaste tú.</p>
                        </div>
                        <div class="p-3 rounded-xl bg-indigo-500/10 border border-indigo-500/20">
                            <span class="font-bold text-indigo-400 text-lg">R</span>
                            <h4 class="font-semibold text-xs uppercase text-slate-300">Resultado</h4>
                            <p class="text-xs text-slate-400 mt-1">El impacto cuantificable u obtenido.</p>
                        </div>
                    </div>

                    <!-- Accordion Flashcards -->
                    <h3 class="text-lg font-bold mb-4">Preguntas Frecuentes Desglosadas</h3>
                    <div class="space-y-3" id="faqAccordion">
                        <!-- Card 1 -->
                        <div class="border border-slate-800 rounded-xl bg-slate-900/50 overflow-hidden">
                            <button onclick="toggleAccordion('faq1')" class="w-full p-4 text-left font-semibold flex justify-between items-center hover:bg-slate-800/40 transition-all">
                                <span>1. "¿Háblame de ti?"</span>
                                <i class="fa-solid fa-chevron-down text-xs text-slate-400" id="icon-faq1"></i>
                            </button>
                            <div id="faq1" class="hidden p-4 pt-0 text-sm text-slate-300 border-t border-slate-800/50 space-y-2 mt-2">
                                <p><strong class="text-emerald-400">Objetivo:</strong> Evaluar tu capacidad de síntesis y enfoque profesional.</p>
                                <p><strong class="text-slate-200">Estructura ideal:</strong> Presente (rol actual) + Pasado (experiencia clave) + Futuro (por qué este puesto).</p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="border border-slate-800 rounded-xl bg-slate-900/50 overflow-hidden">
                            <button onclick="toggleAccordion('faq2')" class="w-full p-4 text-left font-semibold flex justify-between items-center hover:bg-slate-800/40 transition-all">
                                <span>2. "¿Cuáles son tus debilidades?"</span>
                                <i class="fa-solid fa-chevron-down text-xs text-slate-400" id="icon-faq2"></i>
                            </button>
                            <div id="faq2" class="hidden p-4 pt-0 text-sm text-slate-300 border-t border-slate-800/50 space-y-2 mt-2">
                                <p><strong class="text-emerald-400">Objetivo:</strong> Medir tu autoconocimiento y capacidad de mejora continua.</p>
                                <p><strong class="text-slate-200">Consejo:</strong> Menciona un área real de mejora y explica las acciones concretas que estás tomando para superarla (ej: tomar un curso, usar herramientas de gestión de tiempo).</p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="border border-slate-800 rounded-xl bg-slate-900/50 overflow-hidden">
                            <button onclick="toggleAccordion('faq3')" class="w-full p-4 text-left font-semibold flex justify-between items-center hover:bg-slate-800/40 transition-all">
                                <span>3. "Cuéntame de un conflicto que hayas resuelto ( STAR )"</span>
                                <i class="fa-solid fa-chevron-down text-xs text-slate-400" id="icon-faq3"></i>
                            </button>
                            <div id="faq3" class="hidden p-4 pt-0 text-sm text-slate-300 border-t border-slate-800/50 space-y-2 mt-2">
                                <p class="text-xs bg-slate-800 p-3 rounded-lg font-mono">
                                    <span class="text-emerald-400">S:</span> En mi último empleo hubo un retraso importante en una entrega.<br>
                                    <span class="text-teal-400">T:</span> Yo debía coordinar al equipo para cumplir el plazo.<br>
                                    <span class="text-cyan-400">A:</span> Organicé reuniones breves diarias y redistribuí tareas críticas.<br>
                                    <span class="text-indigo-400">R:</span> Entregamos a tiempo y mejoramos la comunicación futura.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tab-candidateQuestions" class="tab-content hidden space-y-6">
                <div class="glass rounded-2xl p-6 lg:p-8 border border-slate-800/80">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 mb-3">Módulo 5</span>
                    <h2 class="text-2xl lg:text-3xl font-bold mb-2">Preguntas que Puedes Hacer Tú</h2>
                    <p class="text-slate-300 text-sm mb-6">Hacer preguntas inteligentes demuestra interés, preparación y pensamiento crítico.</p>

                    <!-- Filter Buttons -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        <button onclick="filterQuestions('all')" class="filter-btn active bg-emerald-500 text-slate-950 px-3.5 py-1.5 rounded-lg text-xs font-semibold">Todas</button>
                        <button onclick="filterQuestions('equipo')" class="filter-btn bg-slate-800 hover:bg-slate-700 text-slate-300 px-3.5 py-1.5 rounded-lg text-xs font-semibold">Equipo y Rol</button>
                        <button onclick="filterQuestions('cultura')" class="filter-btn bg-slate-800 hover:bg-slate-700 text-slate-300 px-3.5 py-1.5 rounded-lg text-xs font-semibold">Cultura y Empresa</button>
                        <button onclick="filterQuestions('proceso')" class="filter-btn bg-slate-800 hover:bg-slate-700 text-slate-300 px-3.5 py-1.5 rounded-lg text-xs font-semibold">Siguientes Pasos</button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="questionsGrid">
                        <!-- Q1 -->
                        <div class="q-card equipo p-4 rounded-xl bg-slate-900/50 border border-slate-800 flex justify-between items-start gap-3">
                            <div>
                                <span class="text-[10px] font-semibold text-emerald-400 uppercase bg-emerald-500/10 px-2 py-0.5 rounded">Equipo y Rol</span>
                                <p class="text-sm font-medium mt-2">"¿Cómo es un día típico en esta posición?"</p>
                            </div>
                            <button onclick="copyText('¿Cómo es un día típico en esta posición?')" class="p-2 text-slate-400 hover:text-emerald-400 transition-colors" title="Copiar"><i class="fa-regular fa-copy"></i></button>
                        </div>
                        <!-- Q2 -->
                        <div class="q-card cultura p-4 rounded-xl bg-slate-900/50 border border-slate-800 flex justify-between items-start gap-3">
                            <div>
                                <span class="text-[10px] font-semibold text-teal-400 uppercase bg-teal-500/10 px-2 py-0.5 rounded">Cultura</span>
                                <p class="text-sm font-medium mt-2">"¿Cuáles son los retos más grandes que enfrenta el área actualmente?"</p>
                            </div>
                            <button onclick="copyText('¿Cuáles son los retos más grandes que enfrenta el área actualmente?')" class="p-2 text-slate-400 hover:text-emerald-400 transition-colors" title="Copiar"><i class="fa-regular fa-copy"></i></button>
                        </div>
                        <!-- Q3 -->
                        <div class="q-card proceso p-4 rounded-xl bg-slate-900/50 border border-slate-800 flex justify-between items-start gap-3">
                            <div>
                                <span class="text-[10px] font-semibold text-cyan-400 uppercase bg-cyan-500/10 px-2 py-0.5 rounded">Siguientes Pasos</span>
                                <p class="text-sm font-medium mt-2">"¿Cuáles son los siguientes pasos dentro de este proceso de selección?"</p>
                            </div>
                            <button onclick="copyText('¿Cuáles son los siguientes pasos dentro de este proceso de selección?')" class="p-2 text-slate-400 hover:text-emerald-400 transition-colors" title="Copiar"><i class="fa-regular fa-copy"></i></button>
                        </div>
                        <!-- Q4 -->
                        <div class="q-card equipo p-4 rounded-xl bg-slate-900/50 border border-slate-800 flex justify-between items-start gap-3">
                            <div>
                                <span class="text-[10px] font-semibold text-emerald-400 uppercase bg-emerald-500/10 px-2 py-0.5 rounded">Equipo y Rol</span>
                                <p class="text-sm font-medium mt-2">"¿Qué oportunidades de capacitación o crecimiento profesional ofrecen?"</p>
                            </div>
                            <button onclick="copyText('¿Qué oportunidades de capacitación o crecimiento profesional ofrecen?')" class="p-2 text-slate-400 hover:text-emerald-400 transition-colors" title="Copiar"><i class="fa-regular fa-copy"></i></button>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tab-mistakes" class="tab-content hidden space-y-6">
                <div class="glass rounded-2xl p-6 lg:p-8 border border-slate-800/80">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-red-500/10 text-red-400 border border-red-500/20 mb-3">Módulo 6</span>
                    <h2 class="text-2xl lg:text-3xl font-bold mb-4">Errores Frecuentes (Qué EVITAR)</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="p-4 rounded-xl bg-red-500/5 border border-red-500/20 space-y-2">
                            <div class="text-red-400 font-bold flex items-center gap-2 text-sm">
                                <i class="fa-solid fa-xmark"></i> Hablar mal de trabajos pasados
                            </div>
                            <p class="text-xs text-slate-300">Genera desconfianza y demuestra falta de profesionalismo o lealtad.</p>
                        </div>

                        <div class="p-4 rounded-xl bg-red-500/5 border border-red-500/20 space-y-2">
                            <div class="text-red-400 font-bold flex items-center gap-2 text-sm">
                                <i class="fa-solid fa-xmark"></i> Desconocer la empresa
                            </div>
                            <p class="text-xs text-slate-300">Proyecta desinterés y falta de iniciativa previa.</p>
                        </div>

                        <div class="p-4 rounded-xl bg-red-500/5 border border-red-500/20 space-y-2">
                            <div class="text-red-400 font-bold flex items-center gap-2 text-sm">
                                <i class="fa-solid fa-xmark"></i> Respuestas monosilábicas
                            </div>
                            <p class="text-xs text-slate-300">Responder solo "sí" o "no" impide al entrevistador evaluar tus capacidades.</p>
                        </div>

                        <div class="p-4 rounded-xl bg-red-500/5 border border-red-500/20 space-y-2">
                            <div class="text-red-400 font-bold flex items-center gap-2 text-sm">
                                <i class="fa-solid fa-xmark"></i> Preguntar solo por salario al inicio
                            </div>
                            <p class="text-xs text-slate-300">Da la impresión de que no te importa la posición o el valor que aportarás.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tab-pitch" class="tab-content hidden space-y-6">
                <div class="glass rounded-2xl p-6 lg:p-8 border border-slate-800/80">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/10 text-amber-400 border border-amber-500/20 mb-3">Herramienta Interactiva</span>
                    <h2 class="text-2xl lg:text-3xl font-bold mb-2">Generador de Elevator Pitch (1 Minuto)</h2>
                    <p class="text-slate-300 text-sm mb-6">Completa los campos a continuación para generar tu discurso de presentación profesional estructurado para responder a *"Háblame de ti"*.</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <label class="block text-xs font-medium text-slate-300 mb-1">Nombre y Especialidad</label>
                            <input type="text" id="pitchName" placeholder="Ej: María, Diseñadora UX/UI" class="w-full bg-slate-900 border border-slate-700 rounded-xl px-3.5 py-2 text-sm text-slate-100 focus:outline-none focus:border-emerald-500">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-slate-300 mb-1">Años de Experiencia / Formación</label>
                            <input type="text" id="pitchExp" placeholder="Ej: 3 años de experiencia en productos digitales" class="w-full bg-slate-900 border border-slate-700 rounded-xl px-3.5 py-2 text-sm text-slate-100 focus:outline-none focus:border-emerald-500">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-slate-300 mb-1">Logro Principal o Habilidad Clave</label>
                            <input type="text" id="pitchSkill" placeholder="Ej: rediseñar plataformas e incrementar conversión un 25%" class="w-full bg-slate-900 border border-slate-700 rounded-xl px-3.5 py-2 text-sm text-slate-100 focus:outline-none focus:border-emerald-500">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-slate-300 mb-1">Objetivo en esta Empresa</label>
                            <input type="text" id="pitchGoal" placeholder="Ej: aportar soluciones innovadoras de diseño en su equipo" class="w-full bg-slate-900 border border-slate-700 rounded-xl px-3.5 py-2 text-sm text-slate-100 focus:outline-none focus:border-emerald-500">
                        </div>
                    </div>

                    <button onclick="generatePitch()" class="w-full bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-2.5 rounded-xl transition-all shadow-md">
                        <i class="fa-solid fa-wand-magic-sparkles mr-2"></i> Generar mi Pitch
                    </button>

                    <!-- Pitch Output Card -->
                    <div id="pitchOutputContainer" class="mt-6 hidden">
                        <div class="p-5 rounded-xl bg-slate-900/90 border border-amber-500/30 space-y-3 relative">
                            <div class="flex justify-between items-center border-b border-slate-800 pb-2">
                                <span class="text-xs font-semibold text-amber-400 uppercase">Tu Discurso Generado</span>
                                <button onclick="copyPitch()" class="text-xs text-slate-400 hover:text-amber-400 flex items-center gap-1">
                                    <i class="fa-regular fa-copy"></i> Copiar
                                </button>
                            </div>
                            <p id="pitchResultText" class="text-sm text-slate-200 leading-relaxed italic"></p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tab-simulator" class="tab-content hidden space-y-6">
                <div class="glass rounded-2xl p-6 lg:p-8 border border-slate-800/80">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 mb-3">Simulador de Práctica</span>
                    <h2 class="text-2xl lg:text-3xl font-bold mb-2">Simulador de Entrevista en Tiempo Real</h2>
                    <p class="text-slate-300 text-sm mb-6">Obtén una pregunta aleatoria y responde en voz alta antes de que termine el temporizador de 60 segundos.</p>

                    <div class="bg-slate-900/80 rounded-2xl p-6 border border-slate-800 text-center space-y-6">
                        <!-- Timer display -->
                        <div class="inline-flex items-center justify-center w-24 h-24 rounded-full bg-slate-800 border-4 border-emerald-500/40 text-2xl font-bold text-emerald-400 font-mono shadow-inner" id="simTimer">
                            01:00
                        </div>

                        <!-- Dynamic Question -->
                        <div class="max-w-md mx-auto">
                            <span class="text-xs uppercase text-slate-400 tracking-wider">Pregunta Aleatoria</span>
                            <p id="simQuestionText" class="text-lg font-semibold text-slate-100 mt-2">Haz clic en "Iniciar Pregunta" para comenzar la simulación.</p>
                        </div>

                        <!-- Simulator Controls -->
                        <div class="flex justify-center gap-3">
                            <button id="btnStartSim" onclick="startSimulation()" class="bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-bold px-6 py-2.5 rounded-xl text-sm transition-all">
                                <i class="fa-solid fa-play mr-2"></i> Iniciar Pregunta
                            </button>
                            <button id="btnResetSim" onclick="resetSimulation()" class="bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold px-4 py-2.5 rounded-xl text-sm transition-all" disabled>
                                <i class="fa-solid fa-rotate-right mr-1"></i> Reiniciar
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tab-quiz" class="tab-content hidden space-y-6">
                <div class="glass rounded-2xl p-6 lg:p-8 border border-slate-800/80">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-3">Evaluación</span>
                    <h2 class="text-2xl lg:text-3xl font-bold mb-2">Test de Preparación para Entrevistas</h2>
                    <p class="text-slate-300 text-sm mb-6">Pone a prueba tus conocimientos sobre las mejores prácticas en una entrevista laboral.</p>

                    <div id="quizContainer" class="space-y-6">
                        <!-- Dynamic Quiz Content renders here -->
                    </div>
                </div>
            </section>

        </main>
    </div>

    <!-- Notification Toast -->
    <div id="toast" class="fixed bottom-5 right-5 bg-emerald-500 text-slate-950 px-4 py-3 rounded-xl font-semibold shadow-xl flex items-center gap-2 transform translate-y-20 opacity-0 transition-all duration-300 z-50">
        <i class="fa-solid fa-circle-check"></i>
        <span id="toastMsg">Texto copiado al portapapeles</span>
    </div>

    <script>
        let currentTheme = 'dark';
        let timerInterval = null;
        let timeLeft = 60;

        const questionsList = [
            "¿Por qué estás interesado en trabajar específicamente en nuestra empresa?",
            "Háblame de una ocasión en la que cometiste un error y cómo lo solucionaste.",
            "¿Cuáles son tus principales fortalezas y cómo se aplican a este puesto?",
            "¿Dónde te ves profesionalmente dentro de los próximos 3 a 5 años?",
            "¿Cómo manejas las situaciones de alto estrés o presión en el trabajo?"
        ];

        /* TAB SWITCHING SYSTEM */
        function switchTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.nav-btn').forEach(btn => {
                btn.classList.remove('active', 'text-emerald-400', 'bg-emerald-500/10', 'border', 'border-emerald-500/20');
                btn.classList.add('text-slate-400');
            });

            const activeContent = document.getElementById('tab-' + tabId);
            const activeBtn = document.querySelector(`[data-tab="${tabId}"]`);

            if (activeContent) activeContent.classList.remove('hidden');
            if (activeBtn) {
                activeBtn.classList.add('active', 'text-emerald-400', 'bg-emerald-500/10', 'border', 'border-emerald-500/20');
                activeBtn.classList.remove('text-slate-400');
            }

            if(tabId === 'quiz') renderQuiz();
        }

        function toggleTheme() {
            const html = document.documentElement;
            const icon = document.getElementById('themeIcon');
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                icon.classList.replace('fa-moon', 'fa-sun');
                icon.classList.replace('text-amber-400', 'text-amber-500');
            } else {
                html.classList.add('dark');
                icon.classList.replace('fa-sun', 'fa-moon');
                icon.classList.replace('text-amber-500', 'text-amber-400');
            }
        }

        function toggleModalType(type) {
            const btnP = document.getElementById('btnPresencial');
            const btnV = document.getElementById('btnVirtual');
            const contentP = document.getElementById('contentPresencial');
            const contentV = document.getElementById('contentVirtual');

            if (type === 'presencial') {
                btnP.className = "px-4 py-2 rounded-lg text-sm font-medium bg-emerald-500 text-slate-950 transition-all";
                btnV.className = "px-4 py-2 rounded-lg text-sm font-medium text-slate-400 hover:text-slate-200 transition-all";
                contentP.classList.remove('hidden');
                contentV.classList.add('hidden');
            } else {
                btnV.className = "px-4 py-2 rounded-lg text-sm font-medium bg-emerald-500 text-slate-950 transition-all";
                btnP.className = "px-4 py-2 rounded-lg text-sm font-medium text-slate-400 hover:text-slate-200 transition-all";
                contentV.classList.remove('hidden');
                contentP.classList.add('hidden');
            }
        }

        function updateChecklist() {
            const items = document.querySelectorAll('.check-item');
            let checked = 0;
            items.forEach(item => { if (item.checked) checked++; });
            document.getElementById('checkProgress').innerText = `${checked}/${items.length} Completado`;
        }

        /* Voice Tone Meter Simulation */
        function updateVoiceMeter() {
            const val = document.getElementById('voiceRange').value;
            const feedback = document.getElementById('voiceFeedback');
            if (val < 35) {
                feedback.innerText = "Demasiado Lento: Puede transmitir falta de energía o duda.";
                feedback.className = "text-xs text-amber-400 font-medium text-center py-1 bg-amber-500/10 rounded-lg";
            } else if (val > 65) {
                feedback.innerText = "Demasiado Rápido: Puede denotar nerviosismo o prisa.";
                feedback.className = "text-xs text-red-400 font-medium text-center py-1 bg-red-500/10 rounded-lg";
            } else {
                feedback.innerText = "¡Ritmo Óptimo! Muestra serenidad y profesionalismo.";
                feedback.className = "text-xs text-emerald-400 font-medium text-center py-1 bg-emerald-500/10 rounded-lg";
            }
        }

        function toggleAccordion(id) {
            const el = document.getElementById(id);
            const icon = document.getElementById('icon-' + id);
            if (el.classList.contains('hidden')) {
                el.classList.remove('hidden');
                icon.classList.replace('fa-chevron-down', 'fa-chevron-up');
            } else {
                el.classList.add('hidden');
                icon.classList.replace('fa-chevron-up', 'fa-chevron-down');
            }
        }

        /* Filter Questions to Ask */
        function filterQuestions(category) {
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.className = "filter-btn bg-slate-800 hover:bg-slate-700 text-slate-300 px-3.5 py-1.5 rounded-lg text-xs font-semibold";
            });
            event.target.className = "filter-btn active bg-emerald-500 text-slate-950 px-3.5 py-1.5 rounded-lg text-xs font-semibold";

            document.querySelectorAll('.q-card').forEach(card => {
                if (category === 'all' || card.classList.contains(category)) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }

        function generatePitch() {
            const name = document.getElementById('pitchName').value || '[Tu Nombre/Especialidad]';
            const exp = document.getElementById('pitchExp').value || '[tu experiencia principal]';
            const skill = document.getElementById('pitchSkill').value || '[tu mayor logro o competencia]';
            const goal = document.getElementById('pitchGoal').value || '[tu objetivo en el rol]';

            const pitch = `"Hola, soy ${name}. Cuento con ${exp}. A lo largo de mi trayectoria me he especializado en ${skill}. Me entusiasma esta oportunidad en su empresa porque busco ${goal} y aportar valor inmediato a su equipo."`;

            document.getElementById('pitchResultText').innerText = pitch;
            document.getElementById('pitchOutputContainer').classList.remove('hidden');
        }

        function copyPitch() {
            const text = document.getElementById('pitchResultText').innerText;
            copyText(text);
        }

        function startSimulation() {
            clearInterval(timerInterval);
            timeLeft = 60;
            const randomQ = questionsList[Math.floor(Math.random() * questionsList.length)];
            document.getElementById('simQuestionText').innerText = `"${randomQ}"`;
            document.getElementById('btnStartSim').disabled = true;
            document.getElementById('btnResetSim').disabled = false;

            timerInterval = setInterval(() => {
                timeLeft--;
                const sec = timeLeft < 10 ? '0' + timeLeft : timeLeft;
                document.getElementById('simTimer').innerText = `00:${sec}`;

                if (timeLeft <= 0) {
                    clearInterval(timerInterval);
                    showToast("¡Tiempo concluido!");
                    document.getElementById('btnStartSim').disabled = false;
                }
            }, 1000);
        }

        function resetSimulation() {
            clearInterval(timerInterval);
            document.getElementById('simTimer').innerText = "01:00";
            document.getElementById('simQuestionText').innerText = 'Haz clic en "Iniciar Pregunta" para comenzar la simulación.';
            document.getElementById('btnStartSim').disabled = false;
            document.getElementById('btnResetSim').disabled = true;
        }

        const quizData = [
            {
                q: "¿Con cuánta anticipación es recomendable llegar a una entrevista presencial?",
                options: ["30 minutos antes", "10 a 15 minutos antes", "Exactamente a la hora", "5 minutos tarde"],
                correct: 1
            },
            {
                q: "¿Qué significa la sigla 'STAR' en la metodología de respuestas?",
                options: ["Situación, Tarea, Acción, Resultado", "Sabiduría, Trabajo, Ambición, Rendimiento", "Solución, Tiempo, Actitud, Resumen"],
                correct: 0
            },
            {
                q: "Si te preguntan por tus debilidades, ¿cuál es la mejor estrategia?",
                options: ["Decir que no tienes ninguna debilidad", "Mencionar un fallo personal grave", "Mencionar un área de mejora real y cómo trabajas en ella", "Evitar responder la pregunta"],
                correct: 2
            }
        ];

        function renderQuiz() {
            const container = document.getElementById('quizContainer');
            container.innerHTML = quizData.map((item, index) => `
                <div class="p-4 rounded-xl bg-slate-900/50 border border-slate-800 space-y-3">
                    <p class="font-semibold text-sm">${index + 1}. ${item.q}</p>
                    <div class="space-y-2">
                        ${item.options.map((opt, optIndex) => `
                            <label class="flex items-center gap-3 p-2.5 rounded-lg bg-slate-800/40 hover:bg-slate-800 cursor-pointer text-xs text-slate-300">
                                <input type="radio" name="q${index}" value="${optIndex}" class="text-emerald-500 focus:ring-emerald-500">
                                ${opt}
                            </label>
                        `).join('')}
                    </div>
                </div>
            `).join('') + `
                <button onclick="evaluateQuiz()" class="w-full bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-bold py-2.5 rounded-xl transition-all">
                    Evaluar Mis Respuestas
                </button>
                <div id="quizResult" class="hidden text-center p-4 rounded-xl bg-slate-800 font-semibold text-emerald-400"></div>
            `;
        }

        function evaluateQuiz() {
            let score = 0;
            quizData.forEach((item, index) => {
                const selected = document.querySelector(`input[name="q${index}"]:checked`);
                if (selected && parseInt(selected.value) === item.correct) score++;
            });
            const resultDiv = document.getElementById('quizResult');
            resultDiv.classList.remove('hidden');
            resultDiv.innerText = `Obtuviste ${score} de ${quizData.length} respuestas correctas.`;
        }

       function copyText(text) {
            document.execCommand('copy');
            showToast("Texto copiado al portapapeles");
        }

        function showToast(msg) {
            const toast = document.getElementById('toast');
            document.getElementById('toastMsg').innerText = msg;
            toast.classList.remove('translate-y-20', 'opacity-0');
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 3000);
        }
    </script>
</body>
</html>