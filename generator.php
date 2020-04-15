<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once './assets/php/db.php';
$id = $_GET['client'];
$query = $conn -> query ("SELECT * FROM brief WHERE id=$id");
$register = mysqli_fetch_array($query);

$html = '<body>

<div class="header">
    <div class="logo-derecha"><img class="logo-m" src="assets/img/logo.png" alt=""></div>
    <h4 class="subtitulo">BRIEFING MARKETING DIGITAL</h4>
</div>
<div class="container tamaño-pdf">
    <div>
        <br>
        <h3 class="titulo">DATOS DE LA EMPRESA</h3>
    </div>
    <div class="pt-5">
        <table>
            <thead>

                <tr>
                    <th class="font border pregunta">Pregunta</th>
                    <td class="font border respuesta">Respuesta</td>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <th class="pregunta">Nombre de la Empresa</th>
                    <td class="respuesta">'.$register['p0-1'].'</td>
                </tr>
                <tr>
                    <th class="pregunta">Nombre del Resposable</th>
                    <td class="respuesta">'.$register['p0-2'].'</td>
                </tr>
                <tr>
                    <th class="pregunta">Teléfono</th>
                    <td class="respuesta">'.$register['p0-3'].'</td>
                </tr>
                <tr>
                    <th class="pregunta">Correo Electrónico</th>
                    <td class="respuesta">'.$register['p0-4'].'</td>
                </tr>
                <tr>
                    <th class="pregunta">Dirección</th>
                    <td class="respuesta">'.$register['p0-5'].'</td>
                </tr>

            </tbody>
        </table>
    </div>
    <div>
        <h3 class="titulo">Información General</h3>
    </div>
    <div class="pt-5">
        <table>
            <thead>

                <tr>
                    <th class="font border pregunta">Pregunta</th>
                    <td class="font border respuesta">Respuesta</td>
                </tr>

            </thead>
            <tbody>

                <tr>
                    <th class="pregunta">Marca/Marcas</th>
                    <td class="respuesta">'.$register['p1-1'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Producto o Servicio</th>
                    <td class="respuesta">'.$register['p1-2'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Ambito Geográfico</th>
                    <td class="respuesta">'.$register['p1-3'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Nro de Trabajadores</th>
                    <td class="respuesta">'.$register['p1-4'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Años en el Mercado</th>
                    <td class="respuesta">'.$register['p1-5'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Misión</th>
                    <td class="respuesta">'.$register['p1-6'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Visión</th>
                    <td class="respuesta">'.$register['p1-7'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Valores</th>
                    <td class="respuesta">'.$register['p1-8'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Objetivos del Negocio</th>
                    <td class="respuesta">'.$register['p1-9'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Otros aspectos a destacar de la Empresa</th>
                    <td class="respuesta">'.$register['p1-10'].'</td>
                </tr>

            </tbody>
        </table>
    </div>
    <div>
        <h3 class="titulo">Estrategias de Marketing Actuales</h3>
    </div>
    <div class="pt-5">
        <table>
            <thead>

                <tr>
                    <th class="font border pregunta">Pregunta</th>
                    <td class="font border respuesta">Respuesta</td>
                </tr>

            </thead>
            <tbody>

                <tr>
                    <th class="pregunta">Objetivos que se persiguen con el Marketing</th>
                    <td class="respuesta">'.$register['p2-1'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Público objetivo Actual</th>
                    <td class="respuesta">'.$register['p2-2'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Precios de los Productos/Servicios</th>
                    <td class="respuesta">'.$register['p2-3'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Plan de promoción/comunicación actual</th>
                    <td class="respuesta">'.$register['p2-4'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Plan de Distribución anual</th>
                    <td class="respuesta">'.$register['p2-5'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Posicionamiento Web Actual</th>
                    <td class="respuesta">'.$register['p2-6'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Ventajas competitivas de la empresa</th>
                    <td class="respuesta">'.$register['p2-7'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">Hacen seguimientos de las Acciones</th>
                    <td class="respuesta">'.$register['p2-8'].'</td>
                </tr>

            </tbody>
        </table>
    </div>
    <div>
        <h3 class="titulo">Problemas y Oportunidades</h3>
    </div>
    <div class="pt-5">
        <table>
            <thead>

                <tr>
                    <th class="font border pregunta">Pregunta</th>
                    <td class="font border respuesta">Respuesta</td>
                </tr>

            </thead>
            <tbody>

                <tr>
                    <th class="pregunta">¿Qué problemas tienes en tus
                        actuales estrategias de marketing?</th>
                    <td class="respuesta">'.$register['p3-1'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">¿Han intentado solucionar este
                        problema? ¿Cómo?</th>
                    <td class="respuesta">'.$register['p3-2'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">¿Los resultados de sus estrategias
                        de marketing han sido positivos?</th>
                    <td class="respuesta">'.$register['p3-3'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">¿Qué repercusiones tienen estos
                        problemas en la empresa?</th>
                    <td class="respuesta">'.$register['p3-4'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">¿Qué oportunidades del mercado
                        creen que deberían aprovechar
                        actualmente?</th>
                    <td class="respuesta">'.$register['p3-5'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">¿Están dispuestos a invertir recursos
                        para solucionar estos problemas?</th>
                    <td class="respuesta">'.$register['p3-6'].'</td>
                </tr>

            </tbody>
        </table>
    </div>
    <div>
        <h3 class="titulo">Mercado y Competencias</h3>
    </div>
    <div class="pt-5">
        <table>
            <thead>

                <tr>
                    <th class="font border pregunta">Pregunta</th>
                    <td class="font border respuesta">Respuesta</td>
                </tr>

            </thead>
            <tbody>

                <tr>
                    <th class="pregunta">¿Quienes son tus principales
                        competidores?</th>
                    <td class="respuesta">'.$register['p4-1'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">¿Qué acciones de marketing
                        está haciendo tu competencia?
                    </th>
                    <td class="respuesta">'.$register['p4-2'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">¿Cuál es tu posición competitica
                        en ventas respecto a ellos?</th>
                    <td class="respuesta">'.$register['p4-3'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">¿Están posicionados en Google?
                        ¿Para qué palabras clave?</th>
                    <td class="respuesta">'.$register['p4-4'].'</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h3 class="titulo">Recursos Disponibles</h3>
    </div>
    <div class="pt-5">
        <table>
            <thead>

                <tr>
                    <th class="font border pregunta">Pregunta</th>
                    <td class="font border respuesta">Respuesta</td>
                </tr>

            </thead>
            <tbody>

                <tr>
                    <th class="pregunta">¿Cuánto presupuesto se ha
                        invertido hasta ahora en marketing?</th>
                    <td class="respuesta">'.$register['p5-1'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">¿Cuánto es el presupuesto que
                        disponen para marketing?
                    </th>
                    <td class="respuesta">'.$register['p5-2'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">¿Cuánto están dispuestos a invertir
                        para la creación de la estrategia?</th>
                    <td class="respuesta">'.$register['p5-3'].'</td>
                </tr>

                <tr>
                    <th class="pregunta">¿Cuánto están dispuestos a invertir
                        para las acciones e implementación?</th>
                    <td class="respuesta">'.$register['p5-4'].'</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</div>

</body>';
$stylesheet = file_get_contents('assets/pdf/css/style.css', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => [297,210],
    'orientation' => 'L',
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . './assets/font/',
    ]),
    'fontdata' => $fontData + [
        'poppins' => [
            'R' => 'Poppins-Regular.ttf',
            'I' => 'Poppins-Regular.ttf',
        ]
    ],
    'default_font' => 'poppins'
]);
$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output('Brief_'.$register['p0-1'].'.pdf', 'I');

?>