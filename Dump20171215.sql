-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-12-2017 a las 13:44:54
-- Versión del servidor: 5.1.73
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `misioncero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambits`
--

CREATE TABLE `ambits` (
  `id` int(11) NOT NULL,
  `ambit` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ambits`
--

INSERT INTO `ambits` (`id`, `ambit`) VALUES
(1, 'Proceso interno'),
(2, 'Recursos'),
(3, 'Personas'),
(4, 'Modelo negocio'),
(5, 'Comercial'),
(6, 'Organización'),
(7, 'Imagen/comunicación'),
(8, 'Producto'),
(9, 'Cliente/usuario'),
(10, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `challenges`
--

CREATE TABLE `challenges` (
  `id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `challenge` varchar(250) DEFAULT NULL,
  `ambit` int(11) DEFAULT NULL,
  `votes` tinyint(4) DEFAULT '0',
  `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `challenges`
--

INSERT INTO `challenges` (`id`, `team_id`, `challenge`, `ambit`, `votes`, `creation`) VALUES
(1, 6, NULL, 10, 3, '2017-12-14 16:22:33'),
(2, 6, NULL, 10, 5, '2017-12-14 16:22:33'),
(3, 6, NULL, 10, 2, '2017-12-14 16:22:33'),
(4, 8, NULL, 10, 4, '2017-12-14 16:22:34'),
(5, 8, NULL, 10, 4, '2017-12-14 16:22:34'),
(6, 8, NULL, 10, 3, '2017-12-14 16:22:34'),
(7, 7, NULL, 10, 4, '2017-12-14 16:22:34'),
(8, 7, NULL, 10, 2, '2017-12-14 16:22:34'),
(9, 7, NULL, 10, 0, '2017-12-14 16:22:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `sel` tinyint(4) DEFAULT NULL,
  `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `team_id`, `comment`, `sel`, `creation`) VALUES
(1, 7, 'Esta semanan ha sido muy activa', NULL, '2017-12-14 16:13:08'),
(2, 6, 'Necesitamos la ayuda de los de Crowdcube', NULL, '2017-12-14 16:13:09'),
(3, 7, '', NULL, '2017-12-14 16:13:11'),
(4, 6, 'Los partners tendrian que invertir', NULL, '2017-12-14 16:13:25'),
(5, 7, 'Hay otras campanas ', NULL, '2017-12-14 16:13:29'),
(6, 8, 'tenemos que convencer a nuevos inversores', NULL, '2017-12-14 16:13:35'),
(7, 7, 'La coyintura', NULL, '2017-12-14 16:13:43'),
(8, 8, 'esto esta parado', NULL, '2017-12-14 16:13:45'),
(9, 8, 'nadie invierte ', NULL, '2017-12-14 16:14:00'),
(10, 7, 'No somos tecnologicos', NULL, '2017-12-14 16:14:04'),
(11, 6, 'Actualizaciones funcionan pero son aburridas', NULL, '2017-12-14 16:14:08'),
(12, 8, 'tenemos que hablar ya con marcelo', NULL, '2017-12-14 16:14:09'),
(13, 7, 'Los inversores tardan en invertir', NULL, '2017-12-14 16:14:18'),
(14, 7, 'Dudas gamificavcion en empresa', NULL, '2017-12-14 16:14:32'),
(15, 7, 'Gastos navidad', NULL, '2017-12-14 16:14:41'),
(16, 6, 'Tendríamos que tener respuesta de los contactos que nos han pedido el BP!', NULL, '2017-12-14 16:14:47'),
(17, 7, 'Otras prioridades en esta fechas', NULL, '2017-12-14 16:14:53'),
(18, 8, 'invirtamos nosotros', NULL, '2017-12-14 16:15:06'),
(19, 7, 'No llegamos a inversores extranjeros', NULL, '2017-12-14 16:15:18'),
(20, 8, 'hay que buscar otras vias/personas de inversion', NULL, '2017-12-14 16:15:33'),
(21, 7, 'Otras campanas de cosas mas conocidas', NULL, '2017-12-14 16:15:39'),
(22, 7, '', NULL, '2017-12-14 16:15:44'),
(23, 7, 'Pedimos menos inversion que otros, proyecto pequeno', NULL, '2017-12-14 16:16:16'),
(24, 8, 'tenemos que publicarlo mas en redes', NULL, '2017-12-14 16:16:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feelings`
--

CREATE TABLE `feelings` (
  `id` int(11) NOT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `name` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `feelings`
--

INSERT INTO `feelings` (`id`, `type`, `name`) VALUES
(1, 1, 'Alegres'),
(2, 1, 'Comprometidos'),
(3, 1, 'Ilusionados'),
(4, 1, 'Optimistas '),
(5, 1, 'Curiosos'),
(6, 1, 'Orgullosos'),
(7, 1, 'Satisfechos'),
(8, 1, 'Tranquilos'),
(9, 2, 'Tristes'),
(10, 2, 'Desmotivados'),
(11, 2, 'Enfadados'),
(12, 2, 'Doloridos'),
(13, 2, 'Miedosos'),
(14, 2, 'Culpables'),
(15, 2, 'Preocupados'),
(16, 2, 'Pesimistas'),
(17, 1, 'Confiados'),
(18, 1, 'Agradecidos'),
(19, 1, 'Pacientes'),
(20, 1, 'Cómodos'),
(21, 2, 'Nerviosos'),
(22, 2, 'Inciertos'),
(23, 2, 'Críticos'),
(24, 2, 'Aburridos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feelings_teams`
--

CREATE TABLE `feelings_teams` (
  `id` int(11) NOT NULL,
  `feeling_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `feelings_teams`
--

INSERT INTO `feelings_teams` (`id`, `feeling_id`, `team_id`) VALUES
(4, 1, 32),
(5, 6, 32),
(6, 9, 32),
(7, 10, 32),
(8, 11, 32),
(9, 3, 55),
(10, 4, 55),
(11, 5, 55),
(12, 6, 55),
(13, 11, 56),
(14, 12, 56),
(15, 13, 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `code1` char(6) DEFAULT NULL,
  `code2` char(6) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `teams` int(11) DEFAULT NULL,
  `expiration` datetime DEFAULT NULL,
  `active` tinyint(4) DEFAULT '0',
  `trouble` varchar(500) DEFAULT NULL,
  `page` int(11) DEFAULT '1',
  `time1` datetime DEFAULT NULL,
  `score` int(11) DEFAULT '0',
  `ludico` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `games`
--

INSERT INTO `games` (`id`, `code1`, `code2`, `name`, `teams`, `expiration`, `active`, `trouble`, `page`, `time1`, `score`, `ludico`) VALUES
(1, 'MBZRG8', 'JUW9XF', 'Foo', NULL, '2018-05-09 00:00:00', 0, 'Como podríamos llegar al 105%?', NULL, NULL, NULL, NULL),
(2, '847TNH', 'K2XTJB', 'Fa', NULL, '2018-10-04 00:00:00', 0, 'Como jugar M0?', NULL, NULL, NULL, NULL),
(3, '847TNZ', 'K2XTJZ', NULL, NULL, '2018-10-04 00:00:00', 0, NULL, NULL, NULL, NULL, NULL),
(4, '12345', '34567', NULL, NULL, '2018-10-04 00:00:00', 1, 'Prueba Silvia', 41, '2017-12-15 10:11:22', 6, '11'),
(5, '847TNA', '847TNB', NULL, NULL, '2018-10-04 00:00:00', 0, NULL, NULL, NULL, NULL, NULL),
(6, 'WPKREA', 'LRCJTK', 'p', NULL, '2018-12-10 00:00:00', 0, NULL, NULL, NULL, NULL, NULL),
(7, 'BAWYK7', 'F8LGY4', 'p', NULL, '2018-12-10 00:00:00', 0, NULL, NULL, NULL, NULL, NULL),
(8, 'ABCDEF', 'GHIJKL', 'pepe', NULL, '2018-12-10 00:00:00', 0, NULL, NULL, NULL, NULL, NULL),
(9, '62AHJC', 'X3C2GN', 'test', NULL, '2018-02-11 00:00:00', 1, '¿cómo conseguir el 115%?', 71, '2017-12-14 17:48:54', 10, '24'),
(10, 'TY7EJL', 'ETH9R8', 'test', NULL, '2018-02-12 00:00:00', 0, NULL, 1, NULL, 0, NULL),
(11, 'MTE89F', 'XUHCWY', 'test', NULL, '2018-02-12 00:00:00', 0, NULL, 1, NULL, 0, NULL),
(12, 'BG7PRN', '93JWNX', 'test', NULL, '2018-02-12 00:00:00', 0, NULL, 1, NULL, 0, NULL),
(13, '92HNLT', '6B9EU3', 'test', NULL, '2018-02-12 00:00:00', 0, NULL, 1, NULL, 0, NULL),
(14, 'RMENJP', 'CR423J', 'test', NULL, '2018-02-12 00:00:00', 0, NULL, 1, NULL, 0, NULL),
(15, 'PFN3R8', 'K8W6M2', 'test', NULL, '2018-02-12 00:00:00', 0, NULL, 1, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interactions`
--

CREATE TABLE `interactions` (
  `id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motions`
--

CREATE TABLE `motions` (
  `id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `feeling` varchar(100) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  `sel` tinyint(4) DEFAULT '1',
  `ambit` int(11) DEFAULT '0',
  `votes` tinyint(4) DEFAULT '0',
  `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `motions`
--

INSERT INTO `motions` (`id`, `team_id`, `feeling`, `question`, `sel`, `ambit`, `votes`, `creation`) VALUES
(1, 60, 'Optimistas ', 'aa', 0, 6, 0, '2017-12-13 14:32:42'),
(2, 60, 'Satisfechos', 'bb', 0, 7, 0, '2017-12-13 14:32:42'),
(3, 60, 'Preocupados', 'cc', 0, 5, 0, '2017-12-13 14:32:42'),
(4, 1, 'Enfadados', 'Agiliscosos giroscopaban los limazones', 1, 0, 0, '2017-12-13 15:38:50'),
(5, 1, 'Doloridos', 'Agiliscosos giroscopaban los limazones', 1, 0, 0, '2017-12-13 15:38:50'),
(6, 1, 'Miedosos', 'Agiliscosos giroscopaban los limazones', 1, 0, 0, '2017-12-13 15:38:50'),
(7, 2, 'Curiosos', 'Agiliscosos giroscopaban los limazones', 1, 0, 0, '2017-12-13 15:38:55'),
(8, 2, 'Orgullosos', 'Agiliscosos giroscopaban los limazones', 1, 0, 0, '2017-12-13 15:38:55'),
(9, 2, 'Satisfechos', 'Agiliscosos giroscopaban los limazones', 1, 0, 0, '2017-12-13 15:38:55'),
(10, 6, 'Comprometidos', 'Como podemos hacer que los partners se sientan comprometidos?', 1, 3, 4, '2017-12-14 17:48:08'),
(11, 6, 'Optimistas ', 'Como trasladar este optimismo a los potenciales inversores?', 1, 7, 3, '2017-12-14 17:48:08'),
(12, 6, 'Confiados', 'Como no bajar el nivel de confianza?', 1, 3, 3, '2017-12-14 17:48:08'),
(13, 7, 'Comprometidos', 'Como hacer quetodos estencomprometidos', 1, 3, 1, '2017-12-14 17:48:31'),
(14, 7, 'Ilusionados', 'Como transmitir nuestrailusion a inversores potenciales', 1, 7, 7, '2017-12-14 17:48:31'),
(15, 7, 'Orgullosos', 'Como conseguir que los partners se sientan orgullosos de Binnakle', 1, 3, 4, '2017-12-14 17:48:31'),
(16, 8, 'Optimistas ', 'Cómo trasladar este optimismo al resto de mi equipo', 1, 6, 2, '2017-12-14 17:48:43'),
(17, 8, 'Satisfechos', 'Cómo cumplir del todo con esta satisfacción?', 1, 1, 1, '2017-12-14 17:48:43'),
(18, 8, 'Confiados', 'Cómo continuar con esta confianza hasta el final?', 1, 3, 2, '2017-12-14 17:48:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `names`
--

CREATE TABLE `names` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `names`
--

INSERT INTO `names` (`id`, `name`) VALUES
(1, 'Neil Armstrong'),
(2, 'Roald Amundsen'),
(3, 'Sacajawea'),
(4, 'Jacques Cousteau'),
(5, 'Lara Croft'),
(6, 'Marco Polo'),
(7, 'Amelia Earhart'),
(8, 'Daniel Boone'),
(9, 'Erik El Rojo'),
(10, 'Valentina Tereshkova'),
(11, 'Anne Bancroft'),
(12, 'Edmund Hillary'),
(13, 'Phileas Fogg'),
(14, 'Fernando de Magallanes'),
(15, 'Jeanne Baret'),
(16, 'Alexandra David-Néel'),
(17, 'Ulises'),
(18, 'Laura Dekker'),
(19, 'Simbad'),
(20, 'Howard Carter'),
(21, 'Amazonas'),
(22, 'Sherpa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objects`
--

CREATE TABLE `objects` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `texto` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `objects`
--

INSERT INTO `objects` (`id`, `name`, `texto`) VALUES
(1, 'ludica1.png', NULL),
(2, 'ludica2.png', NULL),
(3, 'ludica3.png', NULL),
(4, 'ludica4.png', NULL),
(5, 'ludica5.png', NULL),
(6, 'ludica6.png', NULL),
(7, 'ludica7.jpg', NULL),
(8, 'ludica8.jpg', NULL),
(9, 'ludica9.jpg', NULL),
(10, 'ludica10.jpg', NULL),
(11, 'ludica11.jpg', NULL),
(12, 'ludica12.jpg', NULL),
(13, 'ludica13.jpg', NULL),
(14, 'ludica14.jpg', NULL),
(15, 'ludica15.jpg', NULL),
(16, 'ludica16.jpg', NULL),
(17, 'ludica17.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `painpoints`
--

CREATE TABLE `painpoints` (
  `id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `interaction_id` int(11) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ppchallenges`
--

CREATE TABLE `ppchallenges` (
  `id` int(11) NOT NULL,
  `painpoint_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  `sel` tinyint(4) DEFAULT '0',
  `ambit` int(11) DEFAULT '0',
  `votes` tinyint(4) DEFAULT '0',
  `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practicals`
--

CREATE TABLE `practicals` (
  `id` int(11) NOT NULL,
  `trouble` varchar(400) DEFAULT NULL,
  `answer1` varchar(100) DEFAULT NULL,
  `answer2` varchar(100) DEFAULT NULL,
  `answer3` varchar(100) DEFAULT NULL,
  `answer4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `practicals`
--

INSERT INTO `practicals` (`id`, `trouble`, `answer1`, `answer2`, `answer3`, `answer4`) VALUES
(1, '<p>Una empresa que fabrica taladradoras quiere reinventarse. El Director General insiste en no limitarse a incrementar las ventas actuales: quiere abrir caminos muy novedosos.</p>\n<p>El DG pregunta al equipo sobre qué reto piensa trabajar:</p>', '¿Cómo aumentar las ventas de taladradoras?', '¿Cómo generar nuevos ingresos con taladradoras?', '¿Cómo encontrar nuevos ingresos en productos de bricolaje?', '¿Cómo ofrecer nuevos servicios al consumidor que quiere hacer agujeros?'),
(2, '<P>Una empresa de seguros quiere desarrollar nuevos productos y servicios para diferenciarse en el mercado</p>\n<p>Se plantea como posibles retos:</p>', 'Ideas de nuevos seguros', '¿Cómo diferenciarnos de los competidores en seguros?', 'Ideas para soprender con mis seguros', '¿Cómo ofrecer nuevas maneras de cubrir riesgos?'),
(3, '<p>Eres el propietario de una agencia de viajes “de las de toda la vida”. Tienes un local en la ciudad y ofreces viajes muy atractivos, tienes buenos precios, pero tu negocio se está resintiendo de la competencia del mundo digital. Necesitas reinventar tu negocio sin cambiar tu canal.</p>\n<p>Se plantea como posibles retos:</p>', '¿Cómo no bajar ventas?', 'Ideas para que el cliente deje de comprar por Internet', 'Ideas para conseguir sorprender en el escaparate para que la gente entre a preguntar', 'Ideas para vender experiencias y soluciones: de vender viajes  a vender viajar'),
(4, '<p>Como manager en el área de compras, tienes que liderar un equipo para “ahorrar costes en la empresa”. Como este equipo lleva 8 años funcionando y cada vez cuesta más encontrar mejoras, necesitas una manera nueva de enfocar el problema.</p>\n<p>Se plantea como posibles retos:</p>', '¿Cómo bajar el precio de compra a mis proveedores?', 'Ideas para optimizar recursos (no solo recortar)', 'Ideas para que los proveedores tengan ganas de darme mejores  condiciones', 'Ideas para que no nos importe comprar al precio que compramos'),
(5, '<p>Eres Director de Marketing y Comunicación de una empresa multinacional de productos de gran consumo. Desde la sede central, te acaban de mandar un mail con la nueva estrategia de posicionamiento de tu marca para los próximos 3 años: “queremos que nuestra imagen de marca para nuestros clientes sea comparable a la imagen de Apple para los suyos”. </p>\n<p>Como ves el reto ambicioso y poco concreto', '¿Cómo conseguir mejorar la imagen de mi marca para que sea más “Premium”? ', '¿Cómo conseguir que mi marca se parezca a Apple?', '¿ Cómo conseguir tener una relación con mis clientes comparable a la de Apple con los suyos?', '¿Cómo conseguir que mis clientes se conviertan en fans de mi marca?'),
(6, '<p>Eres responsable de ventas de máquinas industriales de un área importante del país. El director de ventas acaba de explicar, en la reunión de objetivos, que la empresa lleva un año perdiendo ventas en todo el país y en todos los canales. Ha marcado como objetivo “crecer en ventas para recuperar el nivel de hace 2 años” y ha pedido a cada responsable de área que trabaje con su equipo para enviar', 'Ideas para recuperar el nivel de ventas de hace 2 años', '¿Cómo conseguir volver al beneficio de hace 2 años?', '¿Cómo pasar de vender máquinas a vender soluciones a nuestros clientes?', '¿Cómo conseguir que nuestros clientes necesiten nuestras máquinas?'),
(7, '<p>Como responsable de Recursos Humanos, has ido a varias conferencias y ponencias sobre un tema que preocupa a todos los responsables de esta área en las empresas: ¿qué hacer con esta generación tan rara que tenemos que integrar en la empresa: los millenials?</p>\n<p>Has decidido planteare como posibles retos para atacar el problema:</p>', '¿Cómo conseguir que se adapten rápidamente a la empresa?', 'Ideas para conseguir entenderles', '¿Cómo conseguir que se sienten a gusto en la empresa?', '¿Cómo conseguir que las diferentes generaciones valoren lo que aportan los millenials y quieran ayud'),
(8, '<p>El director general te ha pedido ayudarle en impulsar la innovación en la empresa y en conseguir que la gente pueda reinventarse y proponer soluciones novedosas. Has oído hablar de “intraemprenduría” y en una charla te han convencido que necesitas aprovechar los puntos fuertes de las start ups para conseguirlo </p>\n<p>Te planteas como posibles retos:</p>', '¿Cómo transformar la empresa en una start up?', 'Ideas para identificar a emprendedores que podríamos fichar en la empresa', '¿cómo conseguir interactuar con start ups para aprender de ellas?', '¿Cómo conseguir integrar algunos valores de las start ups adaptándoles a una gran empresa?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puzzles`
--

CREATE TABLE `puzzles` (
  `id` int(11) NOT NULL,
  `puzzle` varchar(2000) DEFAULT NULL,
  `answer1` varchar(100) DEFAULT NULL,
  `answer2` varchar(100) DEFAULT NULL,
  `answer3` varchar(100) DEFAULT NULL,
  `answer4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `puzzles`
--

INSERT INTO `puzzles` (`id`, `puzzle`, `answer1`, `answer2`, `answer3`, `answer4`) VALUES
(1, '¿Quién dijo “La lógica te llevará de la A a la Z; la imaginación te llevará a todas partes”?', 'Albert Einstein', 'Steve Jobs', 'Mickey Mouse', 'Donald Trump'),
(2, '¿Quien es el autor de la frase “Siempre estoy haciendo lo que no puedo hacer, para poder aprender cómo hacerlo”?', 'Pablo Picasso', 'Steve Jobs', 'Julio Iglesias', 'Henry Ford'),
(3, '¿Quién dijo “Pasar la vida cometiendo errores no sólo es más honorable, sino más útil que pasar la vida sin hacer nada”.', 'Bernard Shaw', 'Steve Jobs', 'Kim Kardashian', 'Thomas Edison'),
(4, 'Completa la frase: “No se hará nunca un Shakespeare mediante el estudio de …”', 'Shakespeare', 'Quijote', 'La historia de la literatura', 'Técnicas literarias'),
(5, '¿Quién es el autor de la frase “lo probaré todo una vez, incluso el queso Limburger”?', 'Thomas Edison', 'Ferran Adrià', 'Steve Jobs', 'Mick Jagger'),
(6, '¿Quién es el autor de la frase “Los grandes espíritus siempre se han encontrado con la fuerte oposición de las mentes mediocres”? ', 'Albert Einstein', 'Winston Churchill', 'Steve Jobs', 'Cristiano Ronaldo'),
(7, 'Completa la frase de Bertrand Russell “El hecho de que una opinión ... no es prueba concluyente de que no sea completamente absurda”:', '... la comparta mucha gente', '... parezca lógica', '... sea del Director General', '... contradiga la mía'),
(8, '¿Cuál de estos inventos se comercializó primero?', 'El PC ', 'El teléfono móvil ', 'La WWW ', 'El Post-it '),
(9, '¿Cuántos años pasaron entre la invención del adhesivo del Post-it y su comercialización?:', 'Diez', 'Ninguno', 'Cinco', 'Veinte'),
(10, '¿Quién es el autor de la frase “Si tuviese solo una hora para salvar al mundo, dedicaría 55 minutos a definir el problema y 5 minutos en pensar en la solución”', 'Albert Einstein.', 'Abraham Lincoln.', 'Steve Jobs.', 'James Bond.'),
(11, '¿De cuáles de estos objetos NO fue 3M su primer fabricante industrial?', 'Bolígrafo', 'Clip de alambre', 'Cinta adhesiva', 'Post-it'),
(12, '¿Quién dijo la frase “todo lo que puede inventarse, ya se ha inventado”?:', 'Charles H. Duell', 'Graham Bell.', 'Steve Jobs.', 'Angela Merkel.'),
(13, 'Termina la frase de Dorothy Parker, “Ser creativo requiere de una mente libre y un ojo...”:', 'Disciplinado', 'Bizco', 'Imaginativo', 'Tapado'),
(14, 'Termina la frase de John Steinbeck, “Las ideas son como conejos. Una vez que tienes dos, ...”:', 'Enseguida te salen una docena', 'Te lo estropean todo', 'No sabes cuál es cual', 'Montas una granja'),
(15, '¿Quién dijo la frase “Tanto si crees que puedes hacerlo, como si crees que no, estás en lo cierto”?', 'Henry Ford', 'Steve Jobs', 'Usain Bolt', 'Marie Curie'),
(16, '¿Quién dijo la frase “No he fracasado, he encontrado mil formas que no funcionan”?', 'Thomas Edison', 'Guillermo Marconi', 'Steve Jobs', 'Mark  Zuckerberg'),
(17, '¿Quién dijo la frase “Si tienes suficiente información para hacer un plan de negocio de tu idea, es que ya es demasiado tarde”?', 'Bill Gates', 'Steve Jobs', 'Mark  Zuckerberg', 'Isabel Pantoja'),
(18, '¿Quién dijo la frase “El éxito consiste en ir de fracaso en fracaso sin desesperarse”?', 'Winston Churchill', 'José Luis Perales', 'Bill Gates', 'Steve Jobs'),
(19, 'Completa la frase de Mark Twain: “Lo consiguieron porque no sabían …', '…que era imposible.”', '…hacerlo”', '…a dónde tenían que ir”', '…que 2+2 son 4”'),
(20, '¿Quién es el autor de la frase “Es duro caer, pero es peor no haber intentado nunca subir”?', 'Theodore Roosevelt', 'Steve Jobs', 'Killian Jornet', 'Spiderman'),
(21, '¿Quién es el autor de la frase “Todo parece imposible hasta que se hace”?', 'Nelson Mandela', 'Steve Jobs', 'Ferran Adrià', 'Leo Messi'),
(22, '¿Quién es el autor de la frase “No podemos resolver problemas pensando de la misma manera que cuando los creamos”?', 'Albert Einstein', 'Sherlock Holmes', 'Steve Jobs', 'Graham Bell'),
(23, 'Completa el proverbio chino: “El fracaso más grande es…', '… nunca haberlo intentado”', '… el de los demás”', '… cuando te descubren” ', '… fracasar”'),
(24, 'Completa la frase de Abraham Lincoln “La mejor manera de predecir el futuro es…', '… inventándolo”', '… con una bola de cristal”', '… mirando el pasado”', '… leer el horóscopo”'),
(25, 'Completa la frase “Un adulto creativo es … ', '….un niño que ha sobrevivido”', '… una utopía”', '… un niño muy listo”', '… un niño que no quiere crecer”'),
(26, 'Completa la frase de Thomas Berger “\"La ciencia y el arte de … es la fuente de todo conocimiento.', '… hacer preguntas', '… tener ideas', '… preguntar', '… saber responder'),
(27, '¿Quién es el autor de la frase “Juzga más al hombre por sus preguntas que por sus respuestas”?', 'Voltaire', 'Baltasar Garzón', 'Steve Jobs', 'Perry Mason'),
(28, 'Completa la frase del coach británico  Simon Sinek \"La calidad de un líder no se puede juzgar por las respuestas que da, sino...', '… por las preguntas que hace', '… por cómo las da', '… por cuántas personas le siguen en facebook', '… por su dominio del power point'),
(29, '¿Quién es el autor de la frase “El hombre sabio no es el hombre que proporciona las respuestas correctas, es el que formula las preguntas correctas”', 'Claude Levi-Strauss', 'Steve Jobs', 'Jessica Fletcher', 'Jorge Javier Vázquez'),
(30, '¿Quién dijo “Si hubiera preguntado a mis clientes qué es lo que necesitaban, me hubieran dicho que un caballo más rápido”?', 'Henry Ford', 'Steve Jobs', 'Billy, el Niño', 'John D. Rockefeller');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  `sel` tinyint(4) DEFAULT '0',
  `ambit` int(11) DEFAULT '0',
  `votes` tinyint(4) DEFAULT '0',
  `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `team_id`, `question`, `sel`, `ambit`, `votes`, `creation`) VALUES
(2, 7, 'Como aprovechar el 90.', 0, 0, 0, '2017-12-14 17:08:00'),
(3, 8, 'Como conseguir que partners de LATAM inviertan?', 0, 0, 0, '2017-12-14 17:08:03'),
(4, 6, 'Como conseguir inversores en LATAM', 0, 0, 0, '2017-12-14 17:08:11'),
(5, 7, 'Como comunicar el 100%.?', 0, 0, 0, '2017-12-14 17:08:18'),
(6, 6, 'Como conseguir inversores en EU', 0, 0, 0, '2017-12-14 17:08:19'),
(7, 8, 'Como llegar al objetivo mañana?', 0, 0, 0, '2017-12-14 17:08:20'),
(8, 7, 'Como aprovechar familiares y amigos inverores.', 0, 0, 0, '2017-12-14 17:08:37'),
(9, 7, 'Como usar f&f partners?', 0, 0, 0, '2017-12-14 17:08:59'),
(10, 8, 'como hacernos ver mas en Crowdcube?', 0, 0, 0, '2017-12-14 17:09:13'),
(11, 7, ' Como aprovechar los partners para comunicar', 0, 0, 0, '2017-12-14 17:09:19'),
(12, 6, 'Como establecer alianzas con empresas tecnologicas', 0, 0, 0, '2017-12-14 17:09:29'),
(13, 7, 'Como comunicar mas alla de RRSS', 0, 0, 0, '2017-12-14 17:09:39'),
(14, 8, 'Como podríamos conseguir el objetivo lo antes posible?', 0, 0, 0, '2017-12-14 17:09:50'),
(15, 7, 'Como generar nuevos efectos reclamo', 0, 0, 0, '2017-12-14 17:09:55'),
(16, 6, 'Como conseguir reinversiones?', 0, 0, 0, '2017-12-14 17:10:03'),
(17, 6, 'Como conseguir que inviertan todos los que se han interesado?', 0, 0, 0, '2017-12-14 17:10:18'),
(18, 7, 'Como aprovechar los clientes', 0, 0, 0, '2017-12-14 17:10:27'),
(19, 7, 'Como utilizar nuestros amigos', 0, 0, 0, '2017-12-14 17:10:39'),
(20, 7, 'Como convertir el 100% de los q han pedido info', 0, 0, 0, '2017-12-14 17:10:58'),
(21, 8, 'Cómo podríamos conseguir másdesarrollos', 0, 0, 0, '2017-12-14 17:11:06'),
(22, 6, 'Como conseguir inversiones este fin de semana?', 0, 0, 0, '2017-12-14 17:11:07'),
(23, 7, 'Como conseguir inversor de cada cliente', 0, 0, 0, '2017-12-14 17:11:34'),
(24, 6, 'Como conseguir repercusión en medios de la campaña?', 0, 0, 0, '2017-12-14 17:11:35'),
(25, 6, 'Como hacer que los partners inviertan?', 0, 0, 0, '2017-12-14 17:11:56'),
(26, 7, 'Como conseguir inversores extranjeros', 0, 0, 0, '2017-12-14 17:12:00'),
(27, 7, 'Como aprovechar mas a crowdcube', 0, 0, 0, '2017-12-14 17:12:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stakes`
--

CREATE TABLE `stakes` (
  `id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  `sel` tinyint(4) DEFAULT '0',
  `ambit` int(11) DEFAULT '0',
  `votes` tinyint(4) DEFAULT '0',
  `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `game_id` int(11) DEFAULT NULL,
  `team` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `members` varchar(2000) DEFAULT NULL,
  `taken` tinyint(4) DEFAULT '0',
  `bikles` int(11) DEFAULT '0',
  `vc` tinyint(4) DEFAULT '0',
  `vq` tinyint(4) DEFAULT '0',
  `vs` tinyint(4) DEFAULT '0',
  `vp` tinyint(4) DEFAULT '0',
  `vm` tinyint(4) DEFAULT '0',
  `vt` tinyint(4) DEFAULT '0',
  `vo` tinyint(4) DEFAULT '0',
  `prac` tinyint(4) DEFAULT NULL,
  `puzz1` tinyint(4) DEFAULT NULL,
  `puzz2` tinyint(4) DEFAULT NULL,
  `img` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `teams`
--

INSERT INTO `teams` (`id`, `game_id`, `team`, `name`, `members`, `taken`, `bikles`, `vc`, `vq`, `vs`, `vp`, `vm`, `vt`, `vo`, `prac`, `puzz1`, `puzz2`, `img`) VALUES
(1, 4, 1, 'Sacajawea', 'Silvia, Javier, Raul', 1, 20, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(2, 2, 1, 'Sacajawea', 'Raquel, Marcos, Ana', 0, 20, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(3, 1, 1, 'Lara Croft', 'Lourdes,Pepe,Lucy', 1, 20, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(4, 1, 2, 'Marco Polo', 'Lourdes,Pepe,Lucy', 0, 20, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(5, 1, 3, 'Amelia Earhart', 'Lourdes, Pepe, Lucy', 0, 20, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(6, 9, 1, 'Sacajawea', 'Raul, Bea, Silvia', 1, 27, 1, 0, 0, 0, 1, 0, 1, 2, -1, NULL, NULL),
(7, 9, 2, 'Lara Croft', 'Lourdes,Pepe,Lucy', 1, 30, 1, 0, 0, 0, 1, 0, 1, 2, 0, NULL, NULL),
(8, 9, 3, 'Edmund Hillary', 'Carla, Marta, Raquel', 1, 29, 1, 0, 0, 0, 1, 0, 1, 0, -1, -1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tops`
--

CREATE TABLE `tops` (
  `id` int(11) NOT NULL,
  `game_id` int(11) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  `sel` tinyint(4) DEFAULT '0',
  `amb` tinyint(4) DEFAULT '0',
  `nor` tinyint(4) DEFAULT '0',
  `qui` tinyint(4) DEFAULT '0',
  `votes` tinyint(4) DEFAULT '0',
  `ambit` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tops`
--

INSERT INTO `tops` (`id`, `game_id`, `question`, `sel`, `amb`, `nor`, `qui`, `votes`, `ambit`) VALUES
(1, 9, NULL, 1, 0, 0, 0, 2, 10),
(2, 9, NULL, 1, 0, 0, 0, 0, 10),
(3, 9, NULL, 1, 0, 0, 0, 0, 10),
(4, 9, NULL, 1, 0, 0, 0, 1, 10),
(5, 9, NULL, 1, 0, 0, 0, 1, 10),
(6, 9, 'Como aprovechar el 90.', 2, 0, 0, 0, 1, 0),
(7, 9, 'Como conseguir que partners de LATAM inviertan?', 2, 0, 0, 0, 4, 0),
(8, 9, 'Como conseguir inversores en LATAM', 2, 0, 0, 0, 4, 0),
(9, 9, 'Como comunicar el 100%.?', 2, 0, 0, 0, 2, 0),
(10, 9, 'Como conseguir inversores en EU', 2, 0, 0, 0, 3, 0),
(11, 9, 'Como transmitir nuestrailusion a inversores potenciales', 5, 0, 0, 0, 7, 7),
(12, 9, 'Como podemos hacer que los partners se sientan comprometidos?', 5, 0, 0, 0, 3, 3),
(13, 9, 'Como conseguir que los partners se sientan orgullosos de Binnakle', 5, 0, 0, 0, 7, 3),
(14, 9, 'Como trasladar este optimismo a los potenciales inversores?', 5, 0, 0, 0, 7, 7),
(15, 9, 'Como no bajar el nivel de confianza?', 5, 0, 0, 0, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `texto` varchar(2000) DEFAULT NULL,
  `final` varchar(250) DEFAULT NULL,
  `solucion` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `url`, `texto`, `final`, `solucion`) VALUES
(1, 'https://www.youtube.com/embed/0PfbrsVexsE?&rel=0&end=3', 'Los Exploradores deberán contar las cartas rojas que va a mostrar el protagonista de nuestro vídeo (el audio no es importante \n<i class=\"fa fa-smile-o\"></i>)', 'https://www.youtube.com/embed/0PfbrsVexsE?&rel=0&start=3', 'Algunas cartas tienen en el dorso un gorila, un gatito, un cachorro, un hombre o una mujer. Es increíble lo que uno puede perderse teniéndolo justo delante! \n<i class=\"fa fa-smile-o\"></i>\n\nGanará 2 bikles el equipo que haya detectado algún elemento diferente en el dorso de las cartas\n\nGanará 4 bikles el equipo capaz de enumerar alguno de los elementos que aparecen'),
(2, 'https://www.youtube.com/embed/14Nb45CS9og?&rel=0&end=3', 'Pide a los Exploradores que observen con atención el siguiente truco de magia\n<span class=\"video_stop\">Para el vídeo en el segundo 50”</span>\nPregunta a los exploradores si son capaces de enumerar las cosas que han cambiado en la escena entre el inicio y el final del truco \n', 'https://www.youtube.com/embed/0PfbrsVexsE?&rel=0&start=3', 'Mientras Apollo Robbins hacía el truco de magia casi todos los elementos de la escena han cambiado! \nGanará 2 bikles el equipo capaz de enumerar 1 elemento que ha cambiado \nGanará 4 bikles el equipo capaz de enumerar más de 1 elemento que ha cambiado\nReproduce el video completo para finalizar la etapa. \n'),
(3, 'https://www.youtube.com/embed/_aSXE_xppME?&rel=0&end=3', 'Pide a los Exploradores que observen con atención el siguiente video\n<span class=\"video_stop\">Para el vídeo en el segundo 53”</span>\nPregunta a los exploradores si han observado algo extraño en la escena.', 'https://www.youtube.com/embed/0PfbrsVexsE?&rel=0&start=3', '(Puedes ayudar a los equipos preguntando si les ha parecido que algo de la escena ha cambiado durante la representación)\nMientras nuestro inspector interrogaba a los personajes, casi todos los elementos de la escena han cambiado! \nGanará 2 bikles el equipo que haya detectado que algo del decorado ha cambiado \nGanará 4 bikles el equipo capaz de enumerar elementos que han cambiado\nReproduce el video completo para finalizar la etapa. \n'),
(4, 'https://www.youtube.com/embed/hWqWL9SH09o?&rel=0&end=3', 'Pide a los Exploradores que cuenten los pases que realiza el equipo blanco\n<span class=\"video_stop\">Para el vídeo en el segundo 26”</span>\n', 'https://www.youtube.com/embed/0PfbrsVexsE?&rel=0&start=3', 'Los Exploradores habrán contado 13 pases correctamente, pero ganará bikles el equipo que haya visto algo extraño en la escena\nMientras se pasaban la pelota, un oso se ha marcado el baile moonwalking justo en el centro! \nGanará 2 bikles el equipo que haya detectado algún elemento diferente a los jugadores en la escena\nGanará 4 bikles el equipo capaz de describir al oso y a su baile moonwalking\nReproduce el video completo para finalizar la etapa. \n'),
(5, 'https://www.youtube.com/embed/kd2dQ26DdFQ?&rel=0&end=3', 'Pide a los Exploradores que cuenten los pases que realiza el equipo blanco\n<span class=\"video_stop\">Para el vídeo en el segundo 22”</span>\n', 'https://www.youtube.com/embed/0PfbrsVexsE?&rel=0&start=3', 'Los Exploradores habrán contado 13 pases correctamente, pero ganará bikles el equipo que haya visto algo extraño en la escena\nMientras se pasaban la pelota, una cheerleader ha pasado por detrás haciendo acrobacias!\nGanará 2 bikles el equipo que haya detectado algún elemento diferente a los jugadores en la escena\nGanará 4 bikles el equipo capaz de describir a la cheerleader y sus acrobacias\nReproduce el video completo para finalizar la etapa. \n'),
(6, 'https://www.youtube.com/embed/ULDusoZbzdY?&rel=0&end=3', 'Pide a los Exploradores que que observen con atención el siguiente video\n<span class=\"video_stop\">Para el vídeo en el segundo 28”</span>\nPregunta a los exploradores si han observado algo extraño en la escena. \n', 'https://www.youtube.com/embed/0PfbrsVexsE?&rel=0&start=3', 'La persona que atiende en el mostrador no es la misma al principio y al final de la escena !\nGanará 2 bikles el equipo que haya detectado que algo del decorado ha cambiado \nGanará 4 bikles el equipo que haya detectado que el vendedor ha cambiado\nReproduce el video completo para finalizar la etapa. \n'),
(7, 'https://www.youtube.com/embed/QgZVLMjhvMQ?&rel=0&end=3', 'Pide a los Exploradores que observen con atención el siguiente truco de magia\n<span class=\"video_stop\">Para el vídeo en el segundo  1’10”</span>\nPregunta a los exploradores si han observado algo extraño en la escena\n', 'https://www.youtube.com/embed/0PfbrsVexsE?&rel=0&start=3', 'Mientras Apollo Robbins hacía el truco de magia han pasado por detrás un conejo, un oso y un gorila!! \nGanará 2 bikles el equipo que haya detectado algunos personajes extraños en la escena \nGanará 4 bikles el equipo capaz de enumerar algunos de estos personajes\nReproduce el video completo para finalizar la etapa. \n'),
(8, 'https://www.youtube.com/embed/qpPYdMs97eE?&rel=0&end=3', 'Pide a los Exploradores que que observen con atención el siguiente video\n<span class=\"video_stop\">Para el vídeo en el segundo 40”</span>\nPregunta a los exploradores si han observado algo extraño en la escena. \n', 'https://www.youtube.com/embed/0PfbrsVexsE?&rel=0&start=3', 'La calle entera ha cambiado completamente! \nGanará 2 bikles el equipo que haya detectado que algo en la calle ha cambiado \nGanará 4 bikles el equipo capaz de enumerar elementos que han cambiado\nReproduce el video completo para finalizar la etapa. \n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambits`
--
ALTER TABLE `ambits`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `challenges`
--
ALTER TABLE `challenges`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `feelings`
--
ALTER TABLE `feelings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `feelings_teams`
--
ALTER TABLE `feelings_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `interactions`
--
ALTER TABLE `interactions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motions`
--
ALTER TABLE `motions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `objects`
--
ALTER TABLE `objects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `painpoints`
--
ALTER TABLE `painpoints`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ppchallenges`
--
ALTER TABLE `ppchallenges`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `practicals`
--
ALTER TABLE `practicals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puzzles`
--
ALTER TABLE `puzzles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stakes`
--
ALTER TABLE `stakes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tops`
--
ALTER TABLE `tops`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambits`
--
ALTER TABLE `ambits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `challenges`
--
ALTER TABLE `challenges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `feelings`
--
ALTER TABLE `feelings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `feelings_teams`
--
ALTER TABLE `feelings_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `interactions`
--
ALTER TABLE `interactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `motions`
--
ALTER TABLE `motions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `names`
--
ALTER TABLE `names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `objects`
--
ALTER TABLE `objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `painpoints`
--
ALTER TABLE `painpoints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ppchallenges`
--
ALTER TABLE `ppchallenges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `practicals`
--
ALTER TABLE `practicals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `puzzles`
--
ALTER TABLE `puzzles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `stakes`
--
ALTER TABLE `stakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tops`
--
ALTER TABLE `tops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
