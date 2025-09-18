<?php

$nombre = "Christian Alejandro Brioso Jimenez";
$profesion = "Estudiante y Desarrollador en Formación";
$descripcion = "Soy una persona sincera, honesta, amigable, responsable y organizada. Me gusta trabajar en equipo y aprender cosas nuevas.
No suelo competir con los demás, solo conmigo mismo para mejorar y dar lo mejor de mí.";

$foto = "mi_foto.jpg";

$datos_personales = [
    "📍 Ubicación" => "Atlacomulco, Estado de México",
    "🎂 Fecha de nacimiento" => "14 de Diciembre de 2006 (18 años)",
    "🌎 Nacionalidad" => "Mexicano",
    "🗣 Idiomas" => "Español (nativo), Inglés (intermedio-avanzado)"
];

$contacto = [
    "📧 Email" => "cristianelcrak7w7@gmail.com",
    "📱 Teléfono" => "+52 712 160 4720",
    "📸 Instagram" => "https://www.instagram.com/christian_brioso._?igsh=MTA1a3NkazE0M2lrcA==",
    "🔵 Facebook" => "https://www.facebook.com/cristianalejandro.briosojimenez.9",
    "🐙 GitHub" => "https://github.com/TR1CHRIS69"
];

$habilidades = [
    "Comunicación efectiva",
    "Trabajo en equipo",
    "Responsabilidad y puntualidad",
    "Adaptabilidad y aprendizaje rápido",
    "Resolución de problemas",
    "Organización y planificación",
    "PHP, HTML, CSS, JavaScript",
    "Manejo básico de bases de datos"
];

$experiencia = [
    ["empresa" => "Museo de Cultura Lic. Isidro Fabela", "puesto" => "Prácticas/Voluntariado", "años" => "2023"],
    ["empresa" => "Varios negocios", "puesto" => "Empleado", "años" => "2020 - 2023"]
];

$educacion = [
    ["institucion" => "Secundaria Isidro Fabela", "titulo" => "Secundaria", "años" => "2014 - 2017"],
    ["institucion" => "CBT Lic. Mario Colín", "titulo" => "Bachillerato", "años" => "2017 - 2020"],
    ["institucion" => "Escuela Vicente Guerrero", "titulo" => "Educación adicional / cursos", "años" => "2016 - 2018"],
    ["institucion" => "Universidad Politécnica de Atlacomulco", "titulo" => "Tecnologías de la Información e Innovación Digital", "años" => "2024 - Actualidad (1 año)"]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Currículum de <?= $nombre ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <img src="<?= $foto ?>" alt="Foto de <?= $nombre ?>" class="foto-cv">
        <h1><?= $nombre ?></h1>
        <p><strong><?= $profesion ?></strong></p>
        <p><?= $descripcion ?></p>
    </div>

    <div class="section">
        <h2>Datos Personales</h2>
        <ul>
            <?php foreach ($datos_personales as $clave => $valor): ?>
                <li><b><?= $clave ?>:</b> <?= $valor ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="section">
        <h2>Contacto</h2>
        <ul>
            <?php foreach ($contacto as $clave => $valor): ?>
                <li><b><?= $clave ?>:</b> <a href="<?= $valor ?>" target="_blank"><?= $valor ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="section">
        <h2>Habilidades</h2>
        <ul>
            <?php foreach ($habilidades as $hab): ?>
                <li>✅ <?= $hab ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="section">
        <h2>Experiencia</h2>
        <ul>
            <?php foreach ($experiencia as $exp): ?>
                <li><b><?= $exp["empresa"] ?></b> - <?= $exp["puesto"] ?> (<?= $exp["años"] ?>)</li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="section">
        <h2>Educación</h2>
        <ul>
            <?php foreach ($educacion as $edu): ?>
                <li><b><?= $edu["institucion"] ?></b> - <?= $edu["titulo"] ?> (<?= $edu["años"] ?>)</li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</body>
</html>