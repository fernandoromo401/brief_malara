SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `brief` (
  `id` int(11) NOT NULL,
  `p0-1` varchar(400) NOT NULL,
  `p0-2` varchar(400) NOT NULL,
  `p0-3` varchar(400) NOT NULL,
  `p0-4` varchar(400) NOT NULL,
  `p0-5` varchar(400) NOT NULL,
  `p1-1` varchar(400) NOT NULL,
  `p1-2` varchar(400) NOT NULL,
  `p1-3` varchar(400) NOT NULL,
  `p1-4` varchar(400) NOT NULL,
  `p1-5` varchar(400) NOT NULL,
  `p1-6` varchar(400) NOT NULL,
  `p1-7` varchar(400) NOT NULL,
  `p1-8` varchar(400) NOT NULL,
  `p1-9` varchar(400) NOT NULL,
  `p1-10` varchar(400) NOT NULL,
  `p2-1` varchar(400) NOT NULL,
  `p2-2` varchar(400) NOT NULL,
  `p2-3` varchar(400) NOT NULL,
  `p2-4` varchar(400) NOT NULL,
  `p2-5` varchar(400) NOT NULL,
  `p2-6` varchar(400) NOT NULL,
  `p2-7` varchar(400) NOT NULL,
  `p2-8` varchar(400) NOT NULL,
  `p3-1` varchar(400) NOT NULL,
  `p3-2` varchar(400) NOT NULL,
  `p3-3` varchar(400) NOT NULL,
  `p3-4` varchar(400) NOT NULL,
  `p3-5` varchar(400) NOT NULL,
  `p3-6` varchar(400) NOT NULL,
  `p4-1` varchar(400) NOT NULL,
  `p4-2` varchar(400) NOT NULL,
  `p4-3` varchar(400) NOT NULL,
  `p4-4` varchar(400) NOT NULL,
  `p5-1` varchar(400) NOT NULL,
  `p5-2` varchar(400) NOT NULL,
  `p5-3` varchar(400) NOT NULL,
  `p5-4` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `brief`
--

INSERT INTO `brief` (`id`, `p0-1`, `p0-2`, `p0-3`, `p0-4`, `p0-5`, `p1-1`, `p1-2`, `p1-3`, `p1-4`, `p1-5`, `p1-6`, `p1-7`, `p1-8`, `p1-9`, `p1-10`, `p2-1`, `p2-2`, `p2-3`, `p2-4`, `p2-5`, `p2-6`, `p2-7`, `p2-8`, `p3-1`, `p3-2`, `p3-3`, `p3-4`, `p3-5`, `p3-6`, `p4-1`, `p4-2`, `p4-3`, `p4-4`, `p5-1`, `p5-2`, `p5-3`, `p5-4`) VALUES
(7, 'Mercado Pago', 'Responsable', 'telefono', 'correo', 'direccion', 'marca', 'produc/serv', 'ambito geo', 'nro trab', 'años en el merc', 'mision', 'vision', 'valores', 'objetivo', 'otros aspectos', 'obj marketin', 'publico actual', 'precios grales', 'plan de comunicacion', 'plan anual', 'poscicionamiento', 'ventaja competitiva', 'segumiento accion', 'probleman actuales', 'solucion', 'resultado', 'repercusiones', 'oportunidades', 'inversion', 'competidores', 'acciones de marketing', 'posicion competitiva', 'posicionamiento en google', 'presupuesto invertido', 'presu disponible', 'dispuesto a invertir', 'dispuesto implementacion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brief`
--
ALTER TABLE `brief`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brief`
--
ALTER TABLE `brief`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

