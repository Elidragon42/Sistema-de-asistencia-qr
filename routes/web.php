<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebcamController;

Route::get('webcam', [WebcamController::class, 'index']);

Route::post('webcam', [WebcamController::class, 'store'])->name('webcam.capture');

// Registro de Usuarios 
// Implementar un sistema de registro Nombre,Apellido,Cargo,Hora,grado,Nivel

// generacion de codigos qr
// Posibles bibliotecas WebCodeCam,QrcodeLib,bacon/bacon-qr-code

// Controlador de asistencias 
// Crea un controlador que maneje el registro de asistencias.
// Al escanear el código QR, el sistema debe registrar la asistencia del usuario y la fecha/hora correspondiente.

// Tablero de administracion
// Desarrolla un panel de administración donde los administradores puedan ver las asistencias registradas, generar informes y realizar un seguimiento del rendimiento.

// Historial de asistencias
// implementar un historia de asistencia de los anteriores meses

// Escabilidad
// diseño
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// Diseño de la pagina:
// Página de Inicio (Home):
// Bienvenida al sistema.
// Breve descripción del propósito del sistema de control de asistencias.

// Registro/Login:
// Página para que los usuarios se registren o inicien sesión.

// Panel de Usuario:
// Vista principal después del inicio de sesión.
// Muestra información básica del usuario y enlaces,tablas,infroamcion.

// Generación de QR:
// Página para que los usuarios vean,crean y/o descarguen su código QR único.

// Escaneo de QR:
// Página o sección dedicada al escaneo de códigos QR para registrar asistencias.
// Puede incluir funciones de cámara si estás desarrollando una aplicación móvil.

// Historial de Asistencias:
// Vista donde los usuarios pueden revisar su historial de asistencias.
// Muestra detalles como fecha, hora y cualquier información adicional.

// Panel de Administración:
// Área reservada para los administradores.
// Incluye herramientas para gestionar usuarios, ver informes y estadísticas.

// Configuración de Cuenta:
// Sección donde los usuarios pueden cambiar su información personal, configurar preferencias y actualizar contraseñas.

// Informe y Estadísticas:(Avanzado)
// Página que muestra informes y estadísticas sobre las asistencias.
// Gráficos y tablas para representar datos de manera visual.