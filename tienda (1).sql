-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2016 a las 02:49:44
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicaciones`
--

CREATE TABLE `aplicaciones` (
  `idApp` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `version` varchar(8) NOT NULL,
  `tipo` varchar(32) NOT NULL DEFAULT 'Aplicacion',
  `categoria` varchar(32) NOT NULL,
  `fechaLanz` date NOT NULL,
  `disponible` varchar(8) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(8000) NOT NULL,
  `autor` varchar(64) NOT NULL,
  `portada` varchar(32) NOT NULL,
  `imagen` varchar(32) NOT NULL,
  `ficheros` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aplicaciones`
--

INSERT INTO `aplicaciones` (`idApp`, `idUsuario`, `nombre`, `version`, `tipo`, `categoria`, `fechaLanz`, `disponible`, `precio`, `descripcion`, `autor`, `portada`, `imagen`, `ficheros`) VALUES
(1, 1, 'Whatsapp', '1.0', 'Aplicacion', 'Mensajes', '2016-06-06', 'Si', 0, 'Mandar mensajes de texto', 'Admin', 'img/love2d.jpg', 'img/Game.jpg', 'admin/trollPong.rar'),
(2, 1, 'Aplicacion1', '1.0', 'Aplicacion', 'Prueba', '2016-06-07', 'Si', 1, 'Pruebas', 'Admin', 'img/cerebro.png', 'img/cerebro.png', 'admin/config.txt'),
(3, 1, 'Aplicacion2', '1.0', 'Aplicacion', 'Prueba', '2016-06-07', 'Si', 2, 'Aplicacion de Prueba', 'Admin', 'img/oragami_s.png', 'img/oragami_s.png', 'admin/config.txt'),
(7, 1, 'Aplicacion7', '1.0', 'Aplicacion', 'Pruebas', '2016-06-08', 'Si', 1, 'Pruebas', 'Admin', 'img/fondo2.jpg', 'img/fondo2.jpg', 'admin/'),
(8, 1, 'Aplicacion 8', '1.0', 'Aplicacion', 'Descripcion', '2016-06-08', 'Si', 2, 'Pruebas', 'ADmin', 'img/flapy.jpg', 'img/flapy.jpg', 'admin/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentario` int(11) NOT NULL,
  `idApp` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idComentario`, `idApp`, `idUsuario`, `fecha`, `comentario`) VALUES
(1, 3, 6, '2016-06-12', 'hola que tal'),
(2, 7, 6, '2016-06-12', 'como estas?'),
(3, 2, 2, '2016-06-12', 'jajajajajajajajujujuas'),
(4, 3, 2, '2016-06-12', 'que mala es\r\n'),
(5, 3, 2, '2016-06-12', 'vaya kaka');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `idComentario` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `asunto` varchar(64) NOT NULL,
  `mensaje` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`idComentario`, `nombre`, `email`, `asunto`, `mensaje`) VALUES
(1, 'holis', 'flqsa@gmail.es', 'melillastreet', 'todo se quema'),
(2, 'olis', 'ftfhfthhfh@gmail.es', 'sssssssssssss', 'jajajajjaaj'),
(3, 'juanito', 'agapito@gmail.com', 'tortilla', 'sljfnksfjnksjfbksfbje'),
(4, 'jajajaj', 'ajajaj@jajaja.es', 'lksnlcksnlken', 'ñcmsñlkfmnslkvndlknd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

CREATE TABLE `donaciones` (
  `idDonacion` int(11) NOT NULL,
  `fechaDonacion` date DEFAULT NULL,
  `importe` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `donaciones`
--

INSERT INTO `donaciones` (`idDonacion`, `fechaDonacion`, `importe`, `idUsuario`) VALUES
(1, '0000-00-00', 5, 2),
(11, '2016-06-06', 50, 2),
(12, '2016-06-06', 25, 2),
(13, '2016-06-13', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idNoticia` int(11) NOT NULL,
  `titulo` varchar(160) NOT NULL,
  `portada` varchar(64) NOT NULL,
  `contenido` varchar(10000) NOT NULL,
  `fechaPublicacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `titulo`, `portada`, `contenido`, `fechaPublicacion`) VALUES
(9, 'Dogma de fe', 'portadas/nadella.jpg', 'jgvkhgvjhgcygvjygyiytfi', '2016-06-06'),
(10, 'Microsoft compra Apple', 'portadas/tim.jpg', 'Vestibulum consectetur tortor dignissim maximus iaculis. Maecenas nulla augue, euismod eget diam sed, viverra molestie lectus. Etiam vitae dapibus quam. Mauris faucibus, erat sit amet lacinia pharetra, ex dui vulputate est, vitae porttitor felis mauris id tellus. Vestibulum sit amet dui consequat, iaculis ligula at, facilisis est. Mauris tristique venenatis mauris, nec tincidunt lorem venenatis eget. Etiam velit tortor, maximus quis nisi eget, ornare tincidunt orci. Nulla fermentum ipsum sed justo semper, vitae varius dui ornare.\n\nPellentesque eu justo vitae turpis imperdiet ultricies. Nulla malesuada, magna ut faucibus auctor, nisi neque mollis odio, sit amet consequat augue nisi nec tortor. Maecenas sed odio sit amet mauris interdum blandit a eget nibh. Ut dignissim, augue nec viverra accumsan, massa magna tempus dolor, vulputate ultricies augue ipsum ut magna. Suspendisse tempus erat id dui iaculis, rhoncus laoreet libero tristique. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec vitae tincidunt libero, sit amet suscipit lectus. Maecenas rutrum imperdiet volutpat. Pellentesque ut facilisis tortor, vitae rutrum dui.\n\nPellentesque eget justo sed quam bibendum vestibulum id sed libero. Mauris vulputate semper diam, vitae vulputate mi. Mauris risus mauris, pulvinar sed odio et, viverra blandit magna. Curabitur sit amet mauris et ipsum porta pretium ut at mi. Phasellus bibendum at felis a mollis. Phasellus cursus lorem erat. In mattis mattis arcu a condimentum. Nullam varius malesuada tellus id finibus. In convallis dolor et diam dignissim mattis. Duis sed magna nec sem aliquam tempus. Proin et pulvinar lectus, et convallis turpis. Curabitur porta accumsan porttitor. Aenean scelerisque quis orci eget finibus.\n\nMaecenas metus mauris, ultricies in aliquet nec, interdum ultricies lorem. Nullam pulvinar et orci ac tempus. Phasellus sit amet diam aliquam, luctus metus ac, egestas lectus. Sed mauris orci, hendrerit et velit iaculis, sodales fringilla metus. Nullam convallis sollicitudin porta. Curabitur varius nisl ut orci mattis finibus. Quisque nulla nunc, tincidunt id suscipit sit amet, elementum venenatis massa.\n\nMorbi eu tempus lacus. Vestibulum ornare sem libero, dapibus tempus mauris sagittis ut. Curabitur purus turpis, venenatis hendrerit aliquet non, iaculis non turpis. Aenean dapibus consectetur iaculis. Praesent urna tellus, mattis vel tellus at, condimentum gravida ante. Sed pulvinar sem vitae nisl tincidunt condimentum. Phasellus non interdum mauris. Maecenas a velit nisl. Vivamus in faucibus nibh, sit amet laoreet nunc. Nunc egestas, ipsum vel volutpat elementum, odio urna volutpat justo, fermentum congue felis odio nec arcu. Suspendisse finibus ac lacus eu tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin consequat turpis risus, vitae accumsan magna finibus id. Quisque egestas felis mauris, sed aliquet erat ornare at.\n\nQuisque ac viverra arcu. Nam nulla sapien, sodales eu tincidunt a, posuere id orci. Integer eu lorem at enim sollicitudin varius. Praesent lacinia lectus sed mollis feugiat. In consequat eu sem eget pulvinar. Nam consectetur augue nec dui scelerisque congue. Praesent rhoncus, justo eget facilisis iaculis, urna purus ornare erat, sit amet cursus urna nunc nec ligula. Maecenas vehicula nisl ac nulla egestas vestibulum. Maecenas vestibulum a quam ut accumsan. Donec risus velit, interdum ac neque non, aliquet hendrerit ipsum. Duis vehicula condimentum odio vitae ullamcorper. Duis imperdiet urna vel est dignissim, ut feugiat risus lacinia.', '2016-06-06'),
(14, 'lkfjdlknldknvgdl', 'portadas/nadella.jpg', 'ajjajajaaj', '2016-06-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `idOferta` int(11) NOT NULL,
  `idApp` int(11) NOT NULL,
  `precioOferta` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`idOferta`, `idApp`, `precioOferta`, `fechaInicio`, `fechaFin`) VALUES
(2, 1, 10, '2016-06-12', '2016-06-17'),
(3, 2, 5, '2016-06-09', '2016-06-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `idApp` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fechaCompra` date NOT NULL,
  `importe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `idApp`, `idUsuario`, `fechaCompra`, `importe`) VALUES
(30, 2, 2, '2016-06-13', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nick` varchar(64) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `apellidos` varchar(64) NOT NULL,
  `fechaNac` date NOT NULL,
  `rol` varchar(16) DEFAULT 'usuario',
  `imgPerfil` varchar(128) NOT NULL DEFAULT 'fotos/invitado.jpg',
  `correo` varchar(80) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `estado` varchar(64) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nick`, `nombre`, `apellidos`, `fechaNac`, `rol`, `imgPerfil`, `correo`, `pass`, `estado`) VALUES
(1, 'rolero', 'Borja', 'Valiente', '1990-09-22', 'admin', 'fotos/admin.jpg', 'fbvaliente@gmail.com', 'rolero', 'activo'),
(2, 'spiderman', 'Peter', 'Parker', '1990-12-22', 'usuario', 'fotos/spiderman.jpg', 'spiderman@gmail.com', 'spiderman', 'activo'),
(6, 'paloma', 'Paloma', 'Lopez', '1985-12-12', 'admin', 'fotos/invitado.jpg', 'paloma@gmail.com', 'paloma', 'activo'),
(7, 'rasalgul', 'rash', 'alghul', '1980-12-12', 'usuario', 'fotos/invitado.jpg', 'rassalgul@gmail.com', 'ras123', 'activo'),
(8, 'user1', 'Usuario1', 'Prueba1', '1990-11-11', 'usuario', 'fotos/invitado.jpg', 'user1@gmail.com', 'user1231', 'activo'),
(9, 'tortilla', 'Juanito', 'agapito', '2016-06-14', 'admin', 'fotos/ironman.jpg', 'juanito@gmail.com', '123', 'bloqueado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aplicaciones`
--
ALTER TABLE `aplicaciones`
  ADD PRIMARY KEY (`idApp`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `idApp` (`idApp`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idComentario`);

--
-- Indices de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD PRIMARY KEY (`idDonacion`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`idOferta`),
  ADD KEY `idApp` (`idApp`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `idApp` (`idApp`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aplicaciones`
--
ALTER TABLE `aplicaciones`
  MODIFY `idApp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  MODIFY `idDonacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `idOferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aplicaciones`
--
ALTER TABLE `aplicaciones`
  ADD CONSTRAINT `aplicaciones_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`idApp`) REFERENCES `aplicaciones` (`idApp`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD CONSTRAINT `donaciones_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `ofertas_ibfk_1` FOREIGN KEY (`idApp`) REFERENCES `aplicaciones` (`idApp`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`idApp`) REFERENCES `aplicaciones` (`idApp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
