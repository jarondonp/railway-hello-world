<?php
function timeline_academica_safeprotocol() {
    // Cargar fuente Google Fonts
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

    ob_start();
    ?>
    <style>
        /* Prefijo para evitar conflictos con el tema */
        .timeline-wrapper * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .timeline-wrapper {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            color: #333;
            padding: 60px 20px;
            line-height: 1.6;
        }

        .timeline-wrapper .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .timeline-wrapper .header {
            text-align: center;
            margin-bottom: 80px;
        }

        .timeline-wrapper .header h1 {
            font-size: 32px;
            font-weight: 600;
            color: #2E625C;
            margin-bottom: 10px;
            letter-spacing: -0.5px;
        }

        .timeline-wrapper .header .subtitle {
            font-size: 18px;
            font-weight: 300;
            color: #666;
            letter-spacing: 0.5px;
        }

        .timeline-wrapper .timeline {
            position: relative;
            padding: 40px 0;
        }

        /* Línea vertical central */
        .timeline-wrapper .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(180deg, #2E625C 0%, #5A8E88 100%);
            transform: translateX(-50%);
        }

        .timeline-wrapper .timeline-item {
            position: relative;
            margin-bottom: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .timeline-wrapper .timeline-item:last-child {
            margin-bottom: 0;
        }

        /* Tarjeta de contenido */
        .timeline-wrapper .timeline-content {
            background: #ffffff;
            border: 1px solid #e8e8e8;
            border-radius: 12px;
            padding: 30px;
            width: 420px;
            box-shadow: 0 4px 20px rgba(46, 98, 92, 0.08);
            transition: all 0.3s ease;
            position: relative;
        }

        .timeline-wrapper .timeline-content:hover {
            box-shadow: 0 8px 30px rgba(46, 98, 92, 0.15);
            transform: translateY(-4px);
        }

        /* Alternancia izquierda-derecha */
        .timeline-wrapper .timeline-item:nth-child(odd) .timeline-content {
            margin-right: auto;
            margin-left: 0;
            transform: translateX(-50px);
        }

        .timeline-wrapper .timeline-item:nth-child(even) .timeline-content {
            margin-left: auto;
            margin-right: 0;
            transform: translateX(50px);
        }

        .timeline-wrapper .timeline-item:nth-child(odd) .timeline-content:hover {
            transform: translateX(-50px) translateY(-4px);
        }

        .timeline-wrapper .timeline-item:nth-child(even) .timeline-content:hover {
            transform: translateX(50px) translateY(-4px);
        }

        /* Punto en la línea */
        .timeline-wrapper .timeline-dot {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background-color: #2E625C;
            border: 4px solid #ffffff;
            border-radius: 50%;
            box-shadow: 0 0 0 4px rgba(46, 98, 92, 0.2);
            z-index: 2;
        }

        /* Conector desde punto a tarjeta */
        .timeline-wrapper .timeline-connector {
            position: absolute;
            top: 50%;
            height: 2px;
            background: linear-gradient(90deg, #2E625C, rgba(46, 98, 92, 0.3));
            z-index: 1;
        }

        .timeline-wrapper .timeline-item:nth-child(odd) .timeline-connector {
            right: 50%;
            left: calc(50% - 420px - 50px);
            background: linear-gradient(-90deg, #2E625C, rgba(46, 98, 92, 0.3));
        }

        .timeline-wrapper .timeline-item:nth-child(even) .timeline-connector {
            left: 50%;
            right: calc(50% - 420px - 50px);
        }

        /* Ícono */
        .timeline-wrapper .timeline-icon {
            font-size: 32px;
            margin-bottom: 15px;
            display: block;
        }

        .timeline-wrapper .degree-title {
            font-size: 20px;
            font-weight: 600;
            color: #2E625C;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .timeline-wrapper .institution {
            font-size: 15px;
            font-weight: 400;
            color: #555;
            margin-bottom: 8px;
        }

        .timeline-wrapper .credential {
            font-size: 13px;
            font-weight: 300;
            color: #888;
            font-style: italic;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .timeline-wrapper .timeline::before {
                left: 30px;
            }

            .timeline-wrapper .timeline-dot {
                left: 30px;
            }

            .timeline-wrapper .timeline-item:nth-child(odd) .timeline-content,
            .timeline-wrapper .timeline-item:nth-child(even) .timeline-content {
                width: calc(100% - 80px);
                margin-left: 80px;
                transform: translateX(0);
            }

            .timeline-wrapper .timeline-item:nth-child(odd) .timeline-content:hover,
            .timeline-wrapper .timeline-item:nth-child(even) .timeline-content:hover {
                transform: translateY(-4px);
            }

            .timeline-wrapper .timeline-connector {
                display: none;
            }

            .timeline-wrapper .header h1 {
                font-size: 24px;
            }

            .timeline-wrapper .header .subtitle {
                font-size: 16px;
            }
        }
    </style>

    <div class="timeline-wrapper">
        <div class="container">
            <div class="header">
                <h1>Formación Académica</h1>
                <div class="subtitle">Dr. Alejandro Martínez del Alto</div>
            </div>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-connector"></div>
                    <div class="timeline-content">
                        <span class="timeline-icon">🎓</span>
                        <div class="degree-title">Post Doctorado en Ciencias e Investigación Transdisciplinaria</div>
                        <div class="institution">Instituto Superior de Estudios de Occidente</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-connector"></div>
                    <div class="timeline-content">
                        <span class="timeline-icon">🧠</span>
                        <div class="degree-title">Doctorado en Salud Mental</div>
                        <div class="institution">Instituto Superior de Estudios de Occidente</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-connector"></div>
                    <div class="timeline-content">
                        <span class="timeline-icon">📚</span>
                        <div class="degree-title">Maestría en Administración de Instituciones de Salud</div>
                        <div class="institution">Universidad IEU</div>
                        <div class="credential">Cédula Prof. 13813898</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-connector"></div>
                    <div class="timeline-content">
                        <span class="timeline-icon">🎓</span>
                        <div class="degree-title">Maestría en Ciencias Médicas</div>
                        <div class="institution">Universidad del Noreste</div>
                        <div class="credential">Cédula Prof. 12649844</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-connector"></div>
                    <div class="timeline-content">
                        <span class="timeline-icon">🧠</span>
                        <div class="degree-title">Licenciatura en Psicología</div>
                        <div class="institution">Universidad La Salle Victoria</div>
                        <div class="credential">Cédula Prof. 6315799</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-connector"></div>
                    <div class="timeline-content">
                        <span class="timeline-icon">📚</span>
                        <div class="degree-title">Advanced Master Program on the Treatment of Trauma</div>
                        <div class="institution">National Institute for the Clinical Applications of Behavioral Medicine</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-connector"></div>
                    <div class="timeline-content">
                        <span class="timeline-icon">🎓</span>
                        <div class="degree-title">Posgrado en Terapia Familiar y de Pareja</div>
                        <div class="institution">Universidad de Piura</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('timeline_academica', 'timeline_academica_safeprotocol');
