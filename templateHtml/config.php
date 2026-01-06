<?php
// config.php
// Configuración global para rutas y URL base

// Detectar protocolo
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Detectar host
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

// Definir URL Base
// Lógica: Si estamos en localhost, asumimos una estructura /public
// Si estamos en producción (app.gepetrol-seguros.com), asumimos /public si el usuario lo sube ahí, 
// o raíz si el subdominio apunta directamente a la carpeta.
// Dado el requerimiento "subdominio por ejemplo; https://app.gepetrol-seguros.com/public",
// asumiremos que la carpeta es "/public".

if (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
    // Entorno Local (ajusta si tu carpeta raíz es diferente)
    // Se asume que en MAMP htdocs/public se accede como localhost:8888/public
    $baseUrl = "/public"; 
} else {
    // Entorno Producción
    // Si el subdominio apunta a la capeta public: $baseUrl = "" o "/";
    // Si el subdominio apunta a la raíz y entra en /public: $baseUrl = "/public";
    // Basado en el ejemplo del usuario:
    $baseUrl = "/public"; 
}

// Helper para generar URLs absolutas o relativas a la base
function url($path = '') {
    global $baseUrl;
    return rtrim($baseUrl, '/') . '/' . ltrim($path, '/');
}

// Helper para assets (css, img, js)
function asset($path = '') {
    return url('assets/' . ltrim($path, '/'));
}
?>
