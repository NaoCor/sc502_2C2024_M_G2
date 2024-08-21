-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2024 a las 19:52:10
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `safezonedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canton`
--

CREATE TABLE `canton` (
  `idCanton` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `idProvincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `canton`
--

INSERT INTO `canton` (`idCanton`, `nombre`, `idProvincia`) VALUES
(1, 'San Jos?', 1),
(2, 'Escaz?', 1),
(3, 'Desamparados', 1),
(4, 'Puriscal', 1),
(5, 'Tarraz?', 1),
(6, 'Aserr?', 1),
(7, 'Mora', 1),
(8, 'Goicoechea', 1),
(9, 'Santa Ana', 1),
(10, 'Alajuelita', 1),
(11, 'V?zquez de Coronado', 1),
(12, 'Acosta', 1),
(13, 'Tib?s', 1),
(14, 'Moravia', 1),
(15, 'Montes de Oca', 1),
(16, 'Turrubares', 1),
(17, 'Dota', 1),
(18, 'Curridabat', 1),
(19, 'P?rez Zeled?n', 1),
(20, 'Le?n Cort?s', 1),
(21, 'Alajuela', 2),
(22, 'San Ram?n', 2),
(23, 'Grecia', 2),
(24, 'San Mateo', 2),
(25, 'Atenas', 2),
(26, 'Naranjo', 2),
(27, 'Palmares', 2),
(28, 'Po?s', 2),
(29, 'Orotina', 2),
(30, 'San Carlos', 2),
(31, 'Zarcero', 2),
(32, 'Valverde Vega', 2),
(33, 'Upala', 2),
(34, 'Los Chiles', 2),
(35, 'Guatuso', 2),
(36, 'R?o Cuarto', 2),
(37, 'Cartago', 3),
(38, 'Para?so', 3),
(39, 'La Uni?n', 3),
(40, 'Jim?nez', 3),
(41, 'Turrialba', 3),
(42, 'Alvarado', 3),
(43, 'Oreamuno', 3),
(44, 'El Guarco', 3),
(45, 'Heredia', 4),
(46, 'Barva', 4),
(47, 'Santo Domingo', 4),
(48, 'Santa B?rbara', 4),
(49, 'San Rafael', 4),
(50, 'San Isidro', 4),
(51, 'Bel?n', 4),
(52, 'Flores', 4),
(53, 'San Pablo', 4),
(54, 'Sarapiqu?', 4),
(55, 'Liberia', 5),
(56, 'Nicoya', 5),
(57, 'Santa Cruz', 5),
(58, 'Bagaces', 5),
(59, 'Carrillo', 5),
(60, 'Ca?as', 5),
(61, 'Abangares', 5),
(62, 'Tilar?n', 5),
(63, 'Nandayure', 5),
(64, 'La Cruz', 5),
(65, 'Hojancha', 5),
(66, 'Puntarenas', 6),
(67, 'Esparza', 6),
(68, 'Buenos Aires', 6),
(69, 'Montes de Oro', 6),
(70, 'Osa', 6),
(71, 'Quepos', 6),
(72, 'Golfito', 6),
(73, 'Coto Brus', 6),
(74, 'Parrita', 6),
(75, 'Corredores', 6),
(76, 'Garabito', 6),
(77, 'Lim?n', 7),
(78, 'Pococ?', 7),
(79, 'Siquirres', 7),
(80, 'Talamanca', 7),
(81, 'Matina', 7),
(82, 'Gu?cimo', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `charla`
--

CREATE TABLE `charla` (
  `idCharla` int(11) NOT NULL,
  `idPresentador` int(11) NOT NULL,
  `nombreCharla` varchar(100) NOT NULL,
  `lugar` varchar(100) DEFAULT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `costo` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `duracion` time NOT NULL,
  `formato` varchar(100) NOT NULL,
  `objetivo` varchar(100) NOT NULL,
  `descripcionCorta` varchar(100) NOT NULL,
  `consiste` varchar(200) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `charla`
--

INSERT INTO `charla` (`idCharla`, `idPresentador`, `nombreCharla`, `lugar`, `fecha`, `hora`, `costo`, `tipo`, `duracion`, `formato`, `objetivo`, `descripcionCorta`, `consiste`, `foto`) VALUES
(1, 1, 'Superar el Acoso: Una Experiencia Personal', 'Auditorio Central', '2024-09-01', '10:00:00', 1000, 'Experiencias', '02:00:00', 'Presencial', 'Compartir experiencias de superación del acoso', 'Una charla donde sobrevivientes de acoso comparten sus historias y procesos de recuperación.', 'Se enfoca en la resiliencia y apoyo entre pares.', 'foto_experiencia1.jpg'),
(2, 2, 'Educación en Derechos: Protegiéndote del Acoso', 'Sala de Conferencias A', '2024-09-05', '14:00:00', 1000, 'Educativa', '03:00:00', 'Online', 'Educar sobre los derechos frente al acoso', 'Taller educativo sobre los derechos de las personas frente al acoso y cómo protegerse.', 'Incluye información legal y recursos disponibles.', 'foto_educativa1.jpg'),
(3, 3, 'Apoyo Integral a Víctimas de Abuso', 'Sala de Reuniones B', '2024-09-10', '09:00:00', 2000, 'Ayuda', '02:00:00', 'Presencial', 'Proporcionar apoyo integral a víctimas', 'Charla sobre los diferentes tipos de apoyo disponibles para víctimas de abuso, incluyendo psicológic', 'Se enfoca en la intervención temprana y acompañamiento.', 'foto_ayuda1.jpg'),
(4, 4, 'Educación para la Prevención del Acoso en Escuelas', 'Auditorio Sur', '2024-09-15', '11:00:00', 2000, 'Educativa', '01:30:00', 'Presencial', 'Prevenir el acoso en entornos escolares', 'Conferencia educativa dirigida a maestros y padres sobre cómo prevenir y manejar el acoso escolar.', 'Incluye estrategias de intervención y recursos educativos.', 'foto_educativa2.jpg'),
(5, 5, 'Historias de Esperanza: Recuperarse del Abuso', 'Sala de Conferencias C', '2024-09-20', '13:00:00', 3000, 'Experiencias', '03:30:00', 'Online', 'Compartir historias de recuperación y esperanza', 'Un espacio donde sobrevivientes de abuso comparten sus historias de recuperación y las lecciones apr', 'Se centra en la fortaleza y la reconstrucción personal.', 'foto_experiencia2.jpg'),
(33, 118600311, 'Prevención y Respuesta al Acoso Sexual', 'Salon Comunal', '2024-09-07', '13:50:00', 1000, 'Educativa', '02:00:00', 'virtual', '1000', 'Salon Comunal', 'Instrucción sobre políticas internas, recursos disponibles y cómo denunciar', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `idConsulta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `pregunta` varchar(250) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`idConsulta`, `idUsuario`, `pregunta`, `estado`) VALUES
(1, 1, '¿Cómo denunciar un caso de acoso laboral?', 1),
(2, 1, '¿Qué debo hacer si soy víctima de abuso verbal en el trabajo?', 0),
(3, 1, '¿Cómo puedo reconocer señales de acoso sexual?', 0),
(4, 1, '¿Cuáles son mis derechos si sufro acoso en línea?', 0),
(5, 1, '¿Qué es el abuso emocional y cómo puedo protegerme?', 0),
(6, 1, '¿Dónde puedo buscar ayuda si soy víctima de acoso escolar?', 0),
(7, 1, '¿Cuáles son los pasos para denunciar un caso de abuso físico?', 0),
(8, 1, '¿Cómo puedo apoyar a alguien que sufre acoso?', 0),
(9, 1, '¿Qué debo hacer si soy testigo de un caso de acoso?', 0),
(10, 1, '¿Cómo identificar un ambiente laboral tóxico?', 0),
(11, 1, '¿Qué medidas legales existen contra el acoso sexual?', 0),
(12, 1, '¿Qué hacer si el acoso proviene de un superior en el trabajo?', 0),
(13, 1, '¿Cómo lidiar con el abuso psicológico en una relación?', 0),
(14, 1, '¿Cuáles son las consecuencias legales del acoso cibernético?', 0),
(15, 1, '¿Qué organizaciones brindan apoyo a víctimas de abuso sexual?', 0),
(16, 1, '¿Cómo proteger mi privacidad en línea contra acosadores?', 0),
(17, 1, '¿Qué hacer si el abuso se produce dentro de la familia?', 0),
(18, 1, '¿Cómo puedo documentar pruebas de acoso en el trabajo?', 0),
(19, 1, '¿Qué hacer si el acosador es un compañero de clase?', 0),
(20, 1, '¿Cuáles son los recursos disponibles para víctimas de acoso?', 0),
(21, 1, '¿Las charlas son para todo publico?', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denuncia`
--

CREATE TABLE `denuncia` (
  `idDenuncia` int(11) NOT NULL,
  `idDenunciado` int(11) NOT NULL,
  `idDenunciante` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `lugar` varchar(100) DEFAULT NULL,
  `relacion_agresor` varchar(100) DEFAULT NULL,
  `documentacion` varchar(100) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `denuncia`
--

INSERT INTO `denuncia` (`idDenuncia`, `idDenunciado`, `idDenunciante`, `tipo`, `fecha`, `lugar`, `relacion_agresor`, `documentacion`, `estado`) VALUES
(1, 1, 1, 'Acoso laboral', '2024-08-01', 'Oficina', 'Compañero de trabajo', 'documento', 1),
(2, 2, 2, 'Acoso sexual', '2024-08-02', 'Parque', 'Desconocido', 'foto', 0),
(3, 3, 3, 'Acoso verbal', '2024-08-03', 'Calle', 'Vecino', 'audio', 1),
(4, 4, 4, 'Acoso cibernético', '2024-08-04', 'Internet', 'Desconocido', 'captura', 0),
(5, 5, 5, 'Acoso físico', '2024-08-05', 'Escuela', 'Compañero de clase', 'informe', 1),
(6, 6, 6, 'Acoso psicológico', '2024-08-06', 'Trabajo', 'Supervisor', 'testimonio', 0),
(7, 7, 7, 'Acoso laboral', '2024-08-07', 'Oficina', 'Subordinado', 'documento', 1),
(8, 8, 8, 'Acoso sexual', '2024-08-08', 'Fiesta', 'Desconocido', 'foto', 0),
(9, 9, 9, 'Acoso verbal', '2024-08-09', 'Centro comercial', 'Desconocido', 'audio', 1),
(10, 10, 10, 'Acoso cibernético', '2024-08-10', 'Red social', 'Desconocido', 'captura', 0),
(11, 11, 11, 'Acoso físico', '2024-08-11', 'Gimnasio', 'Instructor', 'informe', 1),
(12, 12, 12, 'Acoso psicológico', '2024-08-12', 'Universidad', 'Profesor', 'testimonio', 0),
(13, 13, 13, 'Acoso laboral', '2024-08-13', 'Fábrica', 'Compañero de trabajo', 'documento', 1),
(14, 14, 14, 'Acoso sexual', '2024-08-14', 'Cine', 'Desconocido', 'foto', 0),
(15, 15, 15, 'Acoso verbal', '2024-08-15', 'Restaurante', 'Cliente', 'audio', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denunciado`
--

CREATE TABLE `denunciado` (
  `idDenunciado` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `primer_apellido` varchar(100) NOT NULL,
  `segundo_apellido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `denunciado`
--

INSERT INTO `denunciado` (`idDenunciado`, `nombre`, `primer_apellido`, `segundo_apellido`) VALUES
(1, 'Carlos', 'Martínez', 'Pérez'),
(2, 'María', 'Rodríguez', 'López'),
(3, 'José', 'García', 'Fernández'),
(4, 'Laura', 'Hernández', 'Gómez'),
(5, 'Pedro', 'López', 'Martínez'),
(6, 'Ana', 'Sánchez', 'Morales'),
(7, 'Luis', 'Ramírez', 'Torres'),
(8, 'Carmen', 'Díaz', 'Núñez'),
(9, 'Miguel', 'Jiménez', 'Ruiz'),
(10, 'Elena', 'Pérez', 'Hernández'),
(11, 'Jorge', 'Fernández', 'González'),
(12, 'Sofía', 'Muñoz', 'Sánchez'),
(13, 'Ricardo', 'Castro', 'Ortiz'),
(14, 'Patricia', 'Morales', 'Jiménez'),
(15, 'Raúl', 'Gómez', 'Vega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denunciante`
--

CREATE TABLE `denunciante` (
  `idDenunciante` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `primer_apellido` varchar(100) NOT NULL,
  `segundo_apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `numero_telefonico` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `denunciante`
--

INSERT INTO `denunciante` (`idDenunciante`, `nombre`, `primer_apellido`, `segundo_apellido`, `correo`, `numero_telefonico`) VALUES
(1, 'Ana', 'González', 'Soto', 'ana.gonzalez@example.com', '1234589'),
(2, 'Luis', 'Fernández', 'Ramírez', 'luis.fernandez@example.com', '9874321'),
(3, 'Marta', 'Díaz', 'López', 'marta.diaz@example.com', '2345890'),
(4, 'Pablo', 'Hernández', 'García', 'pablo.hernandez@example.com', '3478901'),
(5, 'Lucía', 'García', 'Mendoza', 'lucia.garcia@example.com', '4567892'),
(6, 'Raquel', 'Martínez', 'Sánchez', 'raquel.martinez@example.com', '5678123'),
(7, 'Tomás', 'Gómez', 'Ruiz', 'tomas.gomez@example.com', '6789234'),
(8, 'Isabel', 'López', 'Núñez', 'isabel.lopez@example.com', '7892345'),
(9, 'Sergio', 'Santos', 'Díaz', 'sergio.santos@example.com', '8901456'),
(10, 'Andrea', 'Ruiz', 'Martínez', 'andrea.ruiz@example.com', '1234567'),
(11, 'Mario', 'Vega', 'Pérez', 'mario.vega@example.com', '0123456'),
(12, 'Teresa', 'Castro', 'Ortega', 'teresa.castro@example.com', '1234780'),
(13, 'Roberto', 'Ramírez', 'González', 'roberto.ramirez@example.com', '4567890'),
(14, 'Alicia', 'Muñoz', 'Molina', 'alicia.munoz@example.com', '3456789'),
(15, 'Fernando', 'Núñez', 'Castro', 'fernando.nunez@example.com', '4567890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `idDistrito` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `idCanton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`idDistrito`, `nombre`, `idCanton`) VALUES
(1, 'Carmen', 1),
(2, 'Merced', 1),
(3, 'Hospital', 1),
(4, 'Catedral', 1),
(5, 'Zapote', 1),
(6, 'San Francisco de Dos R?os', 1),
(7, 'Uruca', 1),
(8, 'Mata Redonda', 1),
(9, 'Pavas', 1),
(10, 'Hatillo', 1),
(11, 'San Sebasti?n', 1),
(12, 'Escaz?', 2),
(13, 'San Rafael', 2),
(14, 'San Antonio', 2),
(15, 'Desamparados', 3),
(16, 'San Miguel', 3),
(17, 'San Juan de Dios', 3),
(18, 'San Rafael Arriba', 3),
(19, 'San Rafael Abajo', 3),
(20, 'Gravilias', 3),
(21, 'Damas', 3),
(22, 'Alajuela', 4),
(23, 'San Jos?', 4),
(24, 'Carrizal', 4),
(25, 'San Antonio', 4),
(26, 'Gu?cima', 4),
(27, 'San Isidro', 4),
(28, 'Sabanilla', 4),
(29, 'San Rafael', 4),
(30, 'R?o Segundo', 4),
(31, 'Desamparados', 4),
(32, 'Grecia', 5),
(33, 'San Isidro', 5),
(34, 'San Jos?', 5),
(35, 'San Roque', 5),
(36, 'Tacares', 5),
(37, 'Puente de Piedra', 5),
(38, 'Bol?var', 5),
(39, 'Oriental', 6),
(40, 'Occidental', 6),
(41, 'Carmen', 6),
(42, 'San Nicol?s', 6),
(43, 'Aguacaliente', 6),
(44, 'Guadalupe', 6),
(45, 'Corralillo', 6),
(46, 'Tierra Blanca', 6),
(47, 'Dulce Nombre', 6),
(48, 'Llano Grande', 6),
(49, 'Quebradilla', 6),
(50, 'Heredia', 7),
(51, 'Mercedes', 7),
(52, 'San Francisco', 7),
(53, 'Ulloa', 7),
(54, 'Vara Blanca', 7),
(55, 'Liberia', 8),
(56, 'Ca?as Dulces', 8),
(57, 'Mayorga', 8),
(58, 'Nacascolo', 8),
(59, 'Curuband?', 8),
(60, 'Nicoya', 9),
(61, 'Mansi?n', 9),
(62, 'San Antonio', 9),
(63, 'Quebrada Honda', 9),
(64, 'S?mara', 9),
(65, 'Nosara', 9),
(66, 'Bel?n de Nosarita', 9),
(67, 'Puntarenas', 10),
(68, 'Pitahaya', 10),
(69, 'Chomes', 10),
(70, 'Lepanto', 10),
(71, 'Paquera', 10),
(72, 'Manzanillo', 10),
(73, 'Guacimal', 10),
(74, 'Barranca', 10),
(75, 'Monte Verde', 10),
(76, 'Isla del Coco', 10),
(77, 'Lim?n', 11),
(78, 'Valle La Estrella', 11),
(79, 'R?o Blanco', 11),
(80, 'Matama', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugaresseguros`
--

CREATE TABLE `lugaresseguros` (
  `idLugarSeguro` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `iframe` text NOT NULL,
  `datosContacto` varchar(100) NOT NULL,
  `idProvincia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lugaresseguros`
--

INSERT INTO `lugaresseguros` (`idLugarSeguro`, `nombre`, `direccion`, `iframe`, `datosContacto`, `idProvincia`) VALUES
(1, 'Centro de Patrimonios del Ministerio de Cultura y Juventud', 'Calle 1, Avenida 4, San Jos ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15720.003003359056!2d-84.08941534461475!3d9.933894601808053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e360d6b76dfd%3A0x746cb2e873d40d2b!2sCentro%20de%20Investigaci%C3%B3n%20y%20Conservaci%C3%B3n%20del%20Patrimonio%20Cultural!5e0!3m2!1ses-419!2scr!4v1722657571180!5m2!1ses-419!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>\r\n', 'tel:22553190', 1),
(2, 'McDonald\'s Banco Central', 'Avenida Central, San Jos ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.0010662147947!2d-84.08169051479149!3d9.933868348834899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3612e2b6805%3A0x7e0ba5c370a26f5b!2sMcDonald&#39;s!5e0!3m2!1ses-419!2scr!4v1722655646736!5m2!1ses-419!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel:9052860101', 1),
(3, 'Pizza Hut Avenida', 'Avenida 3, San Jos ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15719.965377443783!2d-84.0877225!3d9.9346776!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e360c9ca56df%3A0x192e748d48855a96!2sPizza%20Hut%20%E2%80%A2%20San%20Jos%C3%A9%20Centro!5e0!3m2!1ses!2scr!4v1722554759623!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel:22909595', 1),
(4, 'Hotel Balmoral', 'Avenida Central, San Jos ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.0022464634812!2d-84.07551430000001!3d9.9337701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e361541d6c9b%3A0x2466d4cde909dfe6!2sHotel%20Balmoral!5e0!3m2!1ses!2scr!4v1722554743509!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel:22225022', 1),
(5, 'McDonald\'s Plaza de la Cultura', 'Avenida 2, San Jos ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3930.0021839969418!2d-84.0803852!3d9.9337753!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3612e2b6805%3A0x7e0ba5c370a26f5b!2sMcDonald&#39;s!5e0!3m2!1ses!2scr!4v1722554719316!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel:9052860101', 1),
(6, 'Tienda La Gloria', 'Avenida 2, San Jos ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3929.9965402517896!2d-84.0859412!3d9.9342451!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e35e14062633%3A0x465478e5b9b31491!2sTienda%20La%20Gloria!5e0!3m2!1ses!2scr!4v1722554697733!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel:22222224', 1),
(7, 'Municipalidad Barva', '2VCG+63P, Heredia, Barva', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.9547976349054!2d-84.1247953!3d10.020589000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fa98ff25592f%3A0xb0657c7fa2cea765!2sMunicipalidad%20Barva!5e0!3m2!1ses!2scr!4v1722557887681!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel:22603292', 2),
(8, 'Biblioteca P blica de Heredia', 'Biblioteca P blica, Heredia Province, Heredia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.183377238308!2d-84.11648468974181!3d10.001706572964792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fac6659f1895%3A0xc11a572d657811cc!2sBiblioteca%20P%C3%BAblica%20de%20Heredia!5e0!3m2!1ses!2scr!4v1722558088645!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel:22378043', 2),
(9, 'Taco Bell Heredia Centro', 'Mercado Central, Heredia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1964.6260291094732!2d-84.12028402084366!3d9.99602609988378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fac35be05ba5%3A0xeebbf5c99db849f6!2sTaco%20Bell%20Heredia%20Centro!5e0!3m2!1ses!2scr!4v1722558215717!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel:23456789', 2),
(10, 'Plaza Heredia', 'Heredia, 40101', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1964.6219773860234!2d-84.11333061836655!3d9.99669648678667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fb7e10fe0bb5%3A0xb44137a23495cee8!2sPlaza%20Heredia!5e0!3m2!1ses!2scr!4v1722558424950!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel:34567890', 2),
(11, 'La Fortina - Mercado Gastronomico', '40101 Heredia, Heredia, 40101', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.214357221662!2d-84.1217290897418!3d9.999144673008912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fbd3f673810d%3A0x949ff5d2f8ea9964!2sLa%20Fortina%20-%20Mercado%20Gastron%C3%B3mico!5e0!3m2!1ses!2scr!4v1722658169200!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel:83499161', 2),
(12, 'Centro Cultural Heredia', 'Cubujuqui Heredia, Heredia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.2245193246163!2d-84.12222278974184!3d9.998304173023396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fac67918dad9%3A0xf5c78cd6f4740d7b!2sCentro%20Cultural%20Heredia%20-%20Nueva%20Acr%C3%B3polis!5e0!3m2!1ses!2scr!4v1722558495687!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 83743577', 2),
(13, 'Municipalidad de Alajuela', 'Avenida Central Juan Lopez, Alajuela Centro', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.9947423589047!2d-84.2102219!3d10.0172918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f9c3101a85c7%3A0x3f2159b5e8ab5359!2sMunicipalidad%20de%20Alajuela!5e0!3m2!1ses!2scr!4v1722561528149!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 24362300', 3),
(14, 'Pizza Hut   Alajuela Centro', '2Q8Q+M53, Av. Central Juan L pez del Corral, Provincia de Alajuela, Alajuela', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.0019737986304!2d-84.21478158974162!3d10.016694772706606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f951cc13ecf1%3A0x787735cc51757964!2sPizza%20Hut%20%E2%80%A2%20Alajuela%20Centro!5e0!3m2!1ses!2scr!4v1722561662463!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 22909595', 3),
(15, 'Biblioteca P blica de Alajuela', '2QCM+8VX, Av. 11, Provincia de Alajuela, Alajuela', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.948249919505!2d-84.2177300897416!3d10.02112937263016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f9ce29b38f0b%3A0xd7e3327137d6dcd3!2sBiblioteca%20P%C3%BAblica%20de%20Alajuela!5e0!3m2!1ses!2scr!4v1722561926230!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'NULL', 3),
(16, 'McDonald\'s', 'Av. Central Juan L pez del Corral, Provincia de Alajuela, Alajuela', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1964.5030992560698!2d-84.21510420710888!3d10.016345964275951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f9c45dcf9ca7%3A0x2cdef2c14d4183e8!2sMcDonald%27s!5e0!3m2!1ses!2scr!4v1722562021931!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 9052860101', 3),
(17, 'Pops   Alajuela Centro', 'Diagonal a la Esquina Noreste del Parque, C. Central, Provincia de Alajuela, Alajuela', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982.2496181248736!2d-84.2151404169278!3d10.016983844182064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f9c4f28bdfc9%3A0x2d739ff3fd9885a2!2sPops%20%E2%80%A2%20Alajuela%20Centro!5e0!3m2!1ses!2scr!4v1722562098554!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 40007677', 3),
(18, 'Musmanni Tuasa', '2Q8M+97Q, Al frente de Pal  la parada, Provincia de Alajuela, Alajuela', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982.2527802356138!2d-84.21799605712295!3d10.015939534523751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f9b6eea2ecbd%3A0x3f18c871bb570b2c!2sMusmanni%20Tuasa!5e0!3m2!1ses!2scr!4v1722562187554!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'NULL', 3),
(19, 'Municipalidad de Oreamuno', 'Costado sur del Parque de San Rafael, Avenida 9A, C. 35, Provincia de Cartago, Cartago', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7861.561832918794!2d-83.9130508!3d9.8687393!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0df9622038da9%3A0x525199d6493f795e!2sMunicipalidad%20de%20Oreamuno!5e0!3m2!1ses!2scr!4v1722562649137!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 25510730', 4),
(20, 'Pizza Hut   Cartago Centro', 'V38H+2X3 Costado este de la Municipalidad de Cartago, C. 0, Provincia de Cartago, Cartago', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.8255339999687!2d-83.92484780321043!3d9.865000200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0dfe8c3da4b71%3A0xbe2bd715abcc3836!2sPizza%20Hut%20%E2%80%A2%20Cartago%20Centro!5e0!3m2!1ses!2scr!4v1722562852897!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 22909595', 4),
(21, 'Fischel Cartago', '300 Oeste Bas lica, Provincia de Cartago, Cartago', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.8314613666575!2d-83.92354961466903!3d9.864503361137459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0dfe96a7d45ad%3A0xd7722578085f9806!2sFischel%20Cartago!5e0!3m2!1ses!2scr!4v1722562943127!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 8008004000', 4),
(22, 'Farmacias Mas x Menos', 'V399+6R3, Provincia de Cartago, Cartago', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.7896262551803!2d-83.93520430321043!3d9.868009500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0dfe041631459%3A0xc90dea68d8fd9bc9!2sFarmacias%20Mas%20x%20Menos!5e0!3m2!1ses!2scr!4v1722563129213!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 25915056', 4),
(23, 'Ekono Cartago Centro', '100m este del Mercado Municipal, Av. 1 del Comercio, Provincia de Cartago, Cartago', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1965.4156972460173!2d-83.92095108834373!3d9.864508966786143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0dfe8ea0f166f%3A0x62b66b5e9795468a!2sEkono%20Cartago%20Centro!5e0!3m2!1ses!2scr!4v1722563253287!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 25919015', 4),
(24, 'Subway', 'Costado Sureste de la Municipalidad de, Provincia de Cartago, Cartago', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1965.4161701240607!2d-83.92112811413875!3d9.86442969014887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0dfe8c7a18ed3%3A0xb136abd25518b106!2sSubway!5e0!3m2!1ses!2scr!4v1722563380951!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 40529541', 4),
(25, 'Ministerio de Trabajo y Seguridad Social', 'Costado sur de la Iglesia Santo Cristo de Esquipulas, Avenida 4, C. 1, Provincia de Guanacaste, Sant', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2010163.615759874!2d-86.2290416!3d10.2534528!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fcac3cff8f0e5%3A0xefde7d7f07202e7e!2sMinisterio%20de%20Trabajo%20y%20Seguridad%20Social!5e0!3m2!1ses!2scr!4v1722563724929!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 26800195', 5),
(26, 'Delicias Do a Ruth', '150 mts Sur del Pani, Provincia de Guanacaste, Santa Cruz', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1388.0570451134035!2d-85.58082992150527!3d10.260115673529011!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fcae9d65487c3%3A0x4506dd32214d1b38!2sDelicias%20Do%C3%B1a%20Ruth!5e0!3m2!1ses!2scr!4v1722658984994!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 26806068', 5),
(27, 'Municipalidad de Nicoya', 'Frente al Parque Recaredo Brice o, Avenida 2, C. Central, Provincia de Guanacaste, Nicoya', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.477147491465!2d-85.453756!3d10.141814700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fb74b9d1849d9%3A0x27d28df7f75141ae!2sMunicipalidad%20de%20Nicoya!5e0!3m2!1ses!2scr!4v1722563910026!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 26858700', 5),
(28, 'McDonald\'s Liberia', 'Ctra. Interamericana N, Provincia de Guanacaste, Liberia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.3841097646505!2d-85.44606772410998!3d10.627238361926063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f757d2944e58b23%3A0x17f624ca05545df9!2sMcDonald&#39;s%20Liberia!5e0!3m2!1ses!2scr!4v1722659038014!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 9052860123', 5),
(29, 'Pizza Hut   Santa Cruz', 'Provincia de Guanacaste, Santa Cruz', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7851.917043441388!2d-85.58607977777072!3d10.26492581564945!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fcac35106dac7%3A0xa707d837798d207b!2sPizza%20Hut%20%E2%80%A2%20Santa%20Cruz!5e0!3m2!1ses!2scr!4v1722658850440!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 47005874', 5),
(30, 'FarmaValue | Santa Cruz', 'Plaza Diria, local #6, Provincia de Guanacaste, Santa Cruz, 50301', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1388.0166162794849!2d-85.58927470519995!3d10.269330916167078!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fcbda8dd21a1f%3A0x230325bce7592ca3!2sFarmaValue%20%7C%20Santa%20Cruz!5e0!3m2!1ses!2scr!4v1722659096539!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 40367171', 5),
(31, 'Policia de Garabito', 'J9GG+PPQ, Provincia de Puntarenas, Jac , Barrio Copey', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3933.6330438748396!2d-84.623153!3d9.626830000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa1c7726c9ec471%3A0x5ff622c271261406!2sPolicia%20de%20Garabito!5e0!3m2!1ses!2scr!4v1722659243463!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 26433011', 6),
(32, 'Municipalidad de Coto Brus', 'Municipalidad de Coto Brus, Ruta Nacional Treciaria 613, Provincia de Puntarenas, San Vito, 60801', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.639965514141!2d-82.9703275!3d8.819853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa4344a18a799c1%3A0x74abba04a15da9e7!2sMunicipalidad%20de%20Coto%20Brus!5e0!3m2!1ses-419!2scr!4v1722659416401!5m2!1ses-419!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 27733128', 6),
(33, 'Pal ', 'Chacarita ruta 17 carretera principal hacia Esparza, Provincia de Puntarenas, Chacarita', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7858.906080523675!2d-84.76148530827943!3d9.979384871410442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa031c6b9555555%3A0xfe7a190e30983551!2zUGFsw60!5e0!3m2!1ses!2scr!4v1722565553424!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'NULL', 6),
(34, 'Farmacia La Bomba El Roble, Puntarenas', 'Dentro de, 500 metros Este de Pal  el Roble, Carretera Puntarenas Barranca, Provincia de Puntarenas,', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.463929667918!2d-84.73439413299465!3d9.978482448647712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa031eac80ee49d%3A0xb452fae3d7171f9c!2sFarmacia%20La%20Bomba%20El%20Roble%2C%20Puntarenas!5e0!3m2!1ses!2scr!4v1722565638208!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 8005226622', 6),
(35, 'Musmanni El Roble', 'X7J8+8CJ, Provincia de Puntarenas, El Roble, El Roble 3', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15717.522024069453!2d-84.73372405280452!3d9.985393842216634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa031a7ab71ae7d%3A0x51211ebd02173435!2sMusmanni%20El%20Roble!5e0!3m2!1ses!2scr!4v1722565707759!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 26639032', 6),
(36, 'Municipalidad de Garabito', 'J95H+X4Q, Av. Pastor D az, Provincia de Puntarenas, Jac ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7867.538313686574!2d-84.6270934!3d9.6151346!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa1c7414446f6e1%3A0x82f365c227db797c!2sMunicipalidad%20de%20Garabito!5e0!3m2!1ses!2scr!4v1722565844004!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 24592800', 6),
(37, 'INAMU', 'XXVC+JX3, Lim n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15717.477507479272!2d-83.043046!3d9.9863155!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa70585fa834b45%3A0x537cf87c1abde24a!2sINAMU!5e0!3m2!1ses!2scr!4v1722566139244!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 60967137', 7),
(38, 'Farmacia La Bomba Lim n, Centro', 'Dentro de Ekono, Mercado Municipal, Lim n Centro, costado norte, Lim n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1964.6433717057973!2d-83.03013864374131!3d9.993156139036001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa70551d6b16fab%3A0xe41fe4cd16129a5e!2sFarmacia%20La%20Bomba%20Lim%C3%B3n%2C%20Centro!5e0!3m2!1ses!2scr!4v1722566301033!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 8005226622', 7),
(39, 'Plaza Puerto Lim n', 'XXV9+MGX, Av. 5, Lim n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1964.636853966976!2d-83.03351864218713!3d9.994234830729217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa7059c8133125b%3A0x32f1a82f1ee42cf1!2sPlaza%20Puerto%20Lim%C3%B3n!5e0!3m2!1ses!2scr!4v1722566259450!5m2!1ses!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 22312220', 7),
(40, 'IAFA Gu piles - Instituto de Alcoholismo y Farmacodependencia', '150 m este y 15 m sur del cementerio de Gu piles, Lim n Province, Guapiles', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.5581900616617!2d-83.7951892!3d10.216487599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa7058447e12965%3A0xab139572e513ac8!2sIAFA%20Gu%C3%A1piles%20-%20Instituto%20de%20Alcoholismo%20y%20Farmacodependencia!5e0!3m2!1ses-419!2scr!4v1722659700558!5m2!1ses-419!2scr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tel: 27100122', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntasfrecuentes`
--

CREATE TABLE `preguntasfrecuentes` (
  `idPreguntaF` int(11) NOT NULL,
  `idRespuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentador`
--

CREATE TABLE `presentador` (
  `idPresentador` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `primerApellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `numero_telefonico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `presentador`
--

INSERT INTO `presentador` (`idPresentador`, `nombre`, `primerApellido`, `correo`, `numero_telefonico`) VALUES
(1, 'Naomi', 'Corella', 'n.corella@example.com', 87542145),
(2, 'Kerlin', 'Cruz', 'k.cruz@example.com', 87545474),
(3, 'Carlos', 'Pérez', 'carlos.perez@example.com', 123456789),
(4, 'María', 'García', 'maria.garcia@example.com', 987654321),
(5, 'Luis', 'Rodríguez', 'luis.rodriguez@example.com', 1122334455),
(118600311, 'kerlin', 'cruz', 'kerlinfercb@gmail.com', 86422630);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `idProvincia` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `mapa` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`idProvincia`, `nombre`, `mapa`) VALUES
(1, 'San Jos ', '<iframe src=\"https://www.google.com.qa/maps/d/u/5/embed?mid=1On_elZL-YStOczDPkaEMFO9ysOEuHZc&ehbc=2E312F\" width=\"640\" height=\"480\"></iframe>'),
(2, 'Heredia', '<iframe src=\"https://www.google.com.qa/maps/d/u/5/embed?mid=1mVZyM00JYviQMCYECMlLl9BiSSJhXmg&ehbc=2E312F\" width=\"640\" height=\"480\"></iframe>'),
(3, 'Alajuela', '<iframe src=\"https://www.google.com.qa/maps/d/u/5/embed?mid=1m9rgYFmY4EU7edzyFE4cusSwkN-yS-w&ehbc=2E312F\" width=\"640\" height=\"480\"></iframe>'),
(4, 'Cartago', '<iframe src=\"https://www.google.com.qa/maps/d/u/5/embed?mid=1zPi6ipaGmYPHoiji43d3OBvtMQs27pw&ehbc=2E312F\" width=\"640\" height=\"480\"></iframe>'),
(5, 'Guanacaste', '<iframe src=\"https://www.google.com.qa/maps/d/u/5/embed?mid=1l55RBskLP4YZyRN4EML9ncPlnn84BxE&ehbc=2E312F\" width=\"640\" height=\"480\"></iframe>'),
(6, 'Puntarenas', '<iframe src=\"https://www.google.com.qa/maps/d/u/5/embed?mid=1hU28Hyrsp_1xm89xI-PTybyLDGKzJMw&ehbc=2E312F\" width=\"640\" height=\"480\"></iframe>'),
(7, 'Lim n', '<iframe src=\"https://www.google.com.qa/maps/d/u/5/embed?mid=1yxtzQmkO6wr0kfzzjgb4D4jO_57wnW4&ehbc=2E312F\" width=\"640\" height=\"480\"></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `idReserva` int(11) NOT NULL,
  `idCharla` int(11) NOT NULL,
  `primerApellido` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `metodoPago` varchar(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`idReserva`, `idCharla`, `primerApellido`, `nombre`, `cedula`, `correo`, `metodoPago`, `cantidad`, `total`) VALUES
(1, 1, 'López', 'Andrea', '123456789', 'andrea.lopez@example.com', 'SinpeMovil', 1, 1000),
(2, 2, 'Rodríguez', 'Juan', '987654321', 'juan.rodriguez@example.com', 'SinpeMovil', 2, 2000),
(3, 3, 'Martínez', 'Luisa', '112233445', 'luisa.martinez@example.com', 'SinpeMovil', 1, 2000),
(4, 4, 'González', 'Carlos', '223344556', 'carlos.gonzalez@example.com', 'SinpeMovil', 3, 6000),
(5, 5, 'Pérez', 'María', '334455667', 'maria.perez@example.com', 'SinpeMovil', 1, 3000),
(12, 1, 'cruz', 'kerlin', '118600331', 'kerlinfercb@gmail.com', 'SinpeMovil', 1, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idRespuesta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idConsulta` int(11) NOT NULL,
  `respuesta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`idRespuesta`, `idUsuario`, `idConsulta`, `respuesta`) VALUES
(1, 1, 1, 'Para denunciar un caso de acoso laboral, puedes dirigirte al departamento de recursos humanos de tu empresa o presentar una queja formal ante las autoridades laborales de tu país.'),
(2, 1, 2, 'Si eres víctima de abuso verbal en el trabajo, es importante documentar los incidentes, hablar con un superior de confianza y considerar buscar apoyo legal si es necesario.'),
(3, 1, 3, 'Las señales de acoso sexual pueden incluir comentarios inapropiados, insinuaciones, toques no deseados, y cualquier comportamiento que te haga sentir incómodo.'),
(4, 1, 4, 'Tienes derecho a protegerte contra el acoso en línea. Puedes denunciar los incidentes a la plataforma correspondiente y, en algunos casos, a las autoridades.'),
(5, 1, 5, 'El abuso emocional puede manifestarse en manipulación, aislamiento y desvalorización. Busca apoyo en amigos, familiares o profesionales de la salud mental.'),
(6, 1, 6, 'Si eres víctima de acoso escolar, habla con un profesor o consejero de confianza. Muchas escuelas tienen políticas para lidiar con estos casos.'),
(7, 1, 7, 'Para denunciar un caso de abuso físico, acude a la policía y busca apoyo médico. Es crucial contar con pruebas y testigos, si es posible.'),
(8, 1, 8, 'Puedes apoyar a alguien que sufre acoso escuchándolos, validando sus sentimientos y ayudándoles a buscar recursos o apoyo profesional.'),
(9, 1, 9, 'Si eres testigo de un caso de acoso, documenta lo que ves y reporta el incidente a la autoridad adecuada en tu entorno.'),
(10, 1, 10, 'Un ambiente laboral tóxico se caracteriza por falta de respeto, acoso, falta de comunicación efectiva y altos niveles de estrés. Es importante hablar sobre estos problemas con recursos humanos.'),
(11, 1, 11, 'Las medidas legales contra el acoso sexual pueden incluir órdenes de restricción, multas y, en casos graves, prisión para el acosador.'),
(12, 1, 12, 'Si el acoso proviene de un superior, documenta los incidentes y considera hablar con recursos humanos o buscar apoyo externo.'),
(13, 1, 13, 'Para lidiar con el abuso psicológico en una relación, busca apoyo en un terapeuta y considera establecer límites claros o distanciarte del abusador.'),
(14, 1, 14, 'El acoso cibernético puede tener consecuencias legales como multas y prisión, dependiendo de la gravedad del caso y las leyes locales.'),
(15, 1, 15, 'Organizaciones como centros de atención a víctimas, líneas de ayuda y grupos de apoyo pueden brindar asistencia a víctimas de abuso sexual.'),
(16, 1, 16, 'Para proteger tu privacidad en línea, utiliza contraseñas seguras, activa la verificación en dos pasos y mantén la información personal privada.'),
(17, 1, 17, 'Si el abuso ocurre dentro de la familia, busca apoyo en un consejero familiar o contacta a las autoridades si estás en peligro.'),
(18, 1, 18, 'Para documentar pruebas de acoso en el trabajo, guarda correos, mensajes y cualquier otra evidencia que respalde tu caso.'),
(19, 1, 19, 'Si el acosador es un compañero de clase, informa a un maestro o consejero. Es importante que la escuela tome medidas para protegerte.'),
(20, 1, 20, 'Existen recursos como líneas de ayuda, asesoría legal gratuita y grupos de apoyo que pueden asistirte si eres víctima de acoso.'),
(21, 1, 21, 'Las charlas son para todas las edades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nombreRol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombreRol`) VALUES
(1, 'Administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `primer_apellido` varchar(100) NOT NULL,
  `segundo_apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `numero_telefonico` int(11) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `idRol` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `primer_apellido`, `segundo_apellido`, `correo`, `numero_telefonico`, `contrasena`, `foto`, `idRol`, `estado`) VALUES
(1, 'Kerlin', 'Cruz', 'Blas', 'kerlinfercb@gmail.com', 86422630, '12345', '', 1, 0),
(2, 'karol', 'cruz', 'blas', 'karolcb@gmail.com', 8888888, '123', '', 1, 1),
(3, 'Rosa', 'Pérez', 'Gómez', 'rosa.perez@example.com', 12345678, 'password123', '', 2, 1),
(4, 'María', 'López', 'Hernández', 'maria.lopez@example.com', 2147483647, 'password123', '', 2, 1),
(5, 'Ale', 'Martínez', 'García', 'ale.martinez@example.com', 2147483647, 'password123', '', 2, 0),
(6, 'Ana', 'Torres', 'Rodríguez', 'ana.torres@example.com', 2147483647, 'password123', '', 2, 1),
(7, 'Luis', 'Fernández', 'Vázquez', 'luis.fernandez@example.com', 2147483647, 'password123', '', 2, 0),
(8, 'Laura', 'Ramírez', 'Morales', 'laura.ramirez@example.com', 2147483647, 'password123', '', 2, 1),
(9, 'Carlos', 'Gómez', 'Jiménez', 'carlos.gomez@example.com', 2147483647, 'password123', '', 2, 1),
(10, 'Sofía', 'Mendoza', 'Castro', 'sofia.mendoza@example.com', 2147483647, 'password123', '', 2, 0),
(11, 'Javier', 'Paredes', 'Alonso', 'javier.paredes@example.com', 2147483647, 'password123', 'javier_paredes.jpg', 2, 1),
(12, 'Valeria', 'Ortega', 'Castillo', 'valeria.ortega@example.com', 1122334455, 'password123', '', 2, 0),
(14, 'Naomi', 'Corella', 'F', 'corellanaomi@gmail.com', 87458525, '123456', NULL, 1, 0),
(15, 'Rosa', 'Blas', 'Potoy', 'roblas@gmail.com', 85971872, '123456789', NULL, 2, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canton`
--
ALTER TABLE `canton`
  ADD PRIMARY KEY (`idCanton`),
  ADD KEY `idProvincia` (`idProvincia`);

--
-- Indices de la tabla `charla`
--
ALTER TABLE `charla`
  ADD PRIMARY KEY (`idCharla`),
  ADD KEY `idPresentador` (`idPresentador`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idConsulta`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`idDenuncia`),
  ADD KEY `idDenunciado` (`idDenunciado`),
  ADD KEY `idDenunciante` (`idDenunciante`);

--
-- Indices de la tabla `denunciado`
--
ALTER TABLE `denunciado`
  ADD PRIMARY KEY (`idDenunciado`);

--
-- Indices de la tabla `denunciante`
--
ALTER TABLE `denunciante`
  ADD PRIMARY KEY (`idDenunciante`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`idDistrito`),
  ADD KEY `idCanton` (`idCanton`);

--
-- Indices de la tabla `lugaresseguros`
--
ALTER TABLE `lugaresseguros`
  ADD PRIMARY KEY (`idLugarSeguro`);

--
-- Indices de la tabla `preguntasfrecuentes`
--
ALTER TABLE `preguntasfrecuentes`
  ADD PRIMARY KEY (`idPreguntaF`),
  ADD KEY `idRespuesta` (`idRespuesta`);

--
-- Indices de la tabla `presentador`
--
ALTER TABLE `presentador`
  ADD PRIMARY KEY (`idPresentador`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`idProvincia`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idReserva`),
  ADD KEY `idCharla` (`idCharla`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idRespuesta`),
  ADD KEY `idConsulta` (`idConsulta`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idRol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canton`
--
ALTER TABLE `canton`
  MODIFY `idCanton` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `charla`
--
ALTER TABLE `charla`
  MODIFY `idCharla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idConsulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `idDenuncia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `denunciado`
--
ALTER TABLE `denunciado`
  MODIFY `idDenunciado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `denunciante`
--
ALTER TABLE `denunciante`
  MODIFY `idDenunciante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `idDistrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `lugaresseguros`
--
ALTER TABLE `lugaresseguros`
  MODIFY `idLugarSeguro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `preguntasfrecuentes`
--
ALTER TABLE `preguntasfrecuentes`
  MODIFY `idPreguntaF` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `idProvincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canton`
--
ALTER TABLE `canton`
  ADD CONSTRAINT `canton_ibfk_1` FOREIGN KEY (`idProvincia`) REFERENCES `provincia` (`idProvincia`);

--
-- Filtros para la tabla `charla`
--
ALTER TABLE `charla`
  ADD CONSTRAINT `charla_ibfk_4` FOREIGN KEY (`idPresentador`) REFERENCES `presentador` (`idPresentador`);

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `denuncia`
--
ALTER TABLE `denuncia`
  ADD CONSTRAINT `denuncia_ibfk_1` FOREIGN KEY (`idDenunciado`) REFERENCES `denunciado` (`idDenunciado`),
  ADD CONSTRAINT `denuncia_ibfk_2` FOREIGN KEY (`idDenunciante`) REFERENCES `denunciante` (`idDenunciante`);

--
-- Filtros para la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD CONSTRAINT `distrito_ibfk_1` FOREIGN KEY (`idCanton`) REFERENCES `canton` (`idCanton`);

--
-- Filtros para la tabla `preguntasfrecuentes`
--
ALTER TABLE `preguntasfrecuentes`
  ADD CONSTRAINT `preguntasfrecuentes_ibfk_1` FOREIGN KEY (`idRespuesta`) REFERENCES `respuesta` (`idRespuesta`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`idCharla`) REFERENCES `charla` (`idCharla`);

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`idConsulta`) REFERENCES `consulta` (`idConsulta`),
  ADD CONSTRAINT `respuesta_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
