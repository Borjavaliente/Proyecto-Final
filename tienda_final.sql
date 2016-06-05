-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2016 a las 19:33:50
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

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
drop database if exists tienda;
CREATE database tienda;
use tienda;

CREATE TABLE `aplicaciones` (
  `idApp` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `version` varchar(8) NOT NULL,
  `tipo` varchar(16) NOT NULL DEFAULT 'Aplicacion',
  `categoria` varchar(32) NOT NULL,
  `fechaLanz` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `disponible` varchar(8) NOT NULL DEFAULT 'Si',
  `precio` varchar(16) NOT NULL DEFAULT 'Gratis',
  `descripcion` varchar(8000) NOT NULL,
  `autor` varchar(64) NOT NULL,
  `imagenUno` varchar(64) DEFAULT 'img/',
  `imagenDos` varchar(64) DEFAULT 'img/',
  `imagenTres` varchar(64) DEFAULT 'img/',
  `imagenCuatro` varchar(64) DEFAULT 'img/'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aplicaciones`
--

INSERT INTO `aplicaciones` (`idApp`, `nombre`, `version`, `tipo`, `categoria`, `fechaLanz`, `disponible`, `precio`, `descripcion`, `autor`, `imagenUno`, `imagenDos`, `imagenTres`, `imagenCuatro`) VALUES
(1, 'TrollPong', '1.0', 'Juego', 'Arcade', '2016-06-05 17:16:43', 'Si', 'Gratis', 'Un juego muy divertido', 'Anonimo', 'img/trollpong1.jpg', 'img/trollpong2.jpg', 'img/trollpong3.jpg', 'img/trollpong4.jpg'),
(2, 'Pomodoro', '2.0', 'Aplicacion', 'Productividad', '2016-06-05 17:16:43', 'Si', 'Gratis', 'Permite organizar tu tiempo', 'Anonimo', 'img/pomodoro_1.jpg', 'img/pomodoro_2.jpg', 'img/pomodoro_3.jpg', 'img/pomodoro_4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentApp` int(11) NOT NULL,
  `idApp` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comentario` varchar(8000) NOT NULL,
  `inapropiado` varchar(8) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idComentApp`, `idApp`, `idUsuario`, `fecha`, `comentario`, `inapropiado`) VALUES
(1, 1, 3, '2016-06-05 17:17:19', 'Divertido', 'No'),
(2, 1, 2, '2016-06-05 17:17:19', 'No me gusto', 'No');

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
(1, '2016-04-06', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idNotica` int(11) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `contenido` varchar(8000) NOT NULL,
  `fechaPublicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idNotica`, `titulo`, `contenido`, `fechaPublicacion`) VALUES
(1, 'Microsoft compra Steam', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sapien erat, sollicitudin luctus egestas sed, lobortis non lacus. In hac habitasse platea dictumst. Proin varius dignissim arcu, aliquam congue enim fermentum id. Fusce vitae iaculis nisl. Mauris tempus, nisl condimentum fermentum rutrum, risus ex vestibulum risus, vitae vulputate turpis eros at quam. In tempor augue vel metus cursus, eu scelerisque tellus fringilla. Morbi ante augue, laoreet vitae orci at, euismod imperdiet lacus. Sed porta cursus tortor non vehicula. Quisque imperdiet quis elit eu hendrerit. Proin eget ligula efficitur, blandit tellus et, imperdiet ligula. Etiam venenatis, justo et luctus porta, massa magna ornare velit, eget sagittis mi augue in sem. Sed ut elit eleifend, viverra metus id, sollicitudin orci. Nullam luctus scelerisque metus pretium aliquet. Ut maximus ac dui vel euismod. Integer porttitor in leo rhoncus tincidunt.\r\n\r\nAliquam elit arcu, varius nec mi ac, feugiat accumsan sapien. Vivamus ornare sem quis mi luctus vulputate at ut nulla. Etiam condimentum facilisis dui, ut consectetur justo condimentum at. Ut blandit elit sed elit sodales sagittis. Nullam facilisis sed leo eu convallis. Vestibulum urna orci, ultrices quis varius et, molestie id est. Curabitur eget metus ac mauris euismod eleifend. Morbi sem massa, facilisis eget eros nec, elementum vulputate nunc.\r\n\r\nSed et massa nunc. Duis non nunc eget quam sagittis efficitur eu nec erat. Curabitur ornare pulvinar diam. Donec ac lacus neque. Etiam sagittis mattis dui, eget consectetur lacus fringilla non. Suspendisse non commodo orci. Praesent sit amet consectetur urna. Nullam iaculis dignissim sem, eget tincidunt nibh egestas bibendum. Fusce neque purus, malesuada non lorem ut, posuere venenatis quam. Nulla id enim scelerisque, tristique mauris condimentum, porttitor sapien. Suspendisse interdum ipsum non tellus finibus, et pulvinar justo posuere. Praesent gravida eu enim at hendrerit. Nam et massa est. Vivamus blandit ornare ullamcorper. Sed vel venenatis lorem, nec semper eros.\r\n\r\nPellentesque eget posuere neque. Vivamus arcu arcu, feugiat vel viverra nec, mollis eget diam. Vivamus interdum nibh eu augue gravida sollicitudin. Suspendisse vitae enim et purus tincidunt volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue at augue eu iaculis. Aliquam eu nisi fringilla, euismod nisl vel, consectetur urna. Suspendisse consequat varius erat eget aliquam. Phasellus ut imperdiet sem, non euismod magna. Fusce non sagittis nisi. Sed eget commodo nunc.\r\n\r\nEtiam fringilla in orci venenatis dapibus. Donec congue interdum laoreet. Pellentesque et risus quis neque consequat semper quis ac ipsum. Nulla facilisi. Etiam congue pharetra leo et porttitor. Suspendisse iaculis ante id odio congue tempor. Integer ultricies sem sed libero cursus, quis dictum eros tempus. Nullam pretium ante enim, eget consequat urna dapibus non. In lacinia nisl ac dui tempus ultricies.', '2016-06-05 17:19:22'),
(2, 'Apple cambia su logo por el de una pera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sapien erat, sollicitudin luctus egestas sed, lobortis non lacus. In hac habitasse platea dictumst. Proin varius dignissim arcu, aliquam congue enim fermentum id. Fusce vitae iaculis nisl. Mauris tempus, nisl condimentum fermentum rutrum, risus ex vestibulum risus, vitae vulputate turpis eros at quam. In tempor augue vel metus cursus, eu scelerisque tellus fringilla. Morbi ante augue, laoreet vitae orci at, euismod imperdiet lacus. Sed porta cursus tortor non vehicula. Quisque imperdiet quis elit eu hendrerit. Proin eget ligula efficitur, blandit tellus et, imperdiet ligula. Etiam venenatis, justo et luctus porta, massa magna ornare velit, eget sagittis mi augue in sem. Sed ut elit eleifend, viverra metus id, sollicitudin orci. Nullam luctus scelerisque metus pretium aliquet. Ut maximus ac dui vel euismod. Integer porttitor in leo rhoncus tincidunt.\r\n\r\nAliquam elit arcu, varius nec mi ac, feugiat accumsan sapien. Vivamus ornare sem quis mi luctus vulputate at ut nulla. Etiam condimentum facilisis dui, ut consectetur justo condimentum at. Ut blandit elit sed elit sodales sagittis. Nullam facilisis sed leo eu convallis. Vestibulum urna orci, ultrices quis varius et, molestie id est. Curabitur eget metus ac mauris euismod eleifend. Morbi sem massa, facilisis eget eros nec, elementum vulputate nunc.\r\n\r\nSed et massa nunc. Duis non nunc eget quam sagittis efficitur eu nec erat. Curabitur ornare pulvinar diam. Donec ac lacus neque. Etiam sagittis mattis dui, eget consectetur lacus fringilla non. Suspendisse non commodo orci. Praesent sit amet consectetur urna. Nullam iaculis dignissim sem, eget tincidunt nibh egestas bibendum. Fusce neque purus, malesuada non lorem ut, posuere venenatis quam. Nulla id enim scelerisque, tristique mauris condimentum, porttitor sapien. Suspendisse interdum ipsum non tellus finibus, et pulvinar justo posuere. Praesent gravida eu enim at hendrerit. Nam et massa est. Vivamus blandit ornare ullamcorper. Sed vel venenatis lorem, nec semper eros.\r\n\r\nPellentesque eget posuere neque. Vivamus arcu arcu, feugiat vel viverra nec, mollis eget diam. Vivamus interdum nibh eu augue gravida sollicitudin. Suspendisse vitae enim et purus tincidunt volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue at augue eu iaculis. Aliquam eu nisi fringilla, euismod nisl vel, consectetur urna. Suspendisse consequat varius erat eget aliquam. Phasellus ut imperdiet sem, non euismod magna. Fusce non sagittis nisi. Sed eget commodo nunc.\r\n\r\nEtiam fringilla in orci venenatis dapibus. Donec congue interdum laoreet. Pellentesque et risus quis neque consequat semper quis ac ipsum. Nulla facilisi. Etiam congue pharetra leo et porttitor. Suspendisse iaculis ante id odio congue tempor. Integer ultricies sem sed libero cursus, quis dictum eros tempus. Nullam pretium ante enim, eget consequat urna dapibus non. In lacinia nisl ac dui tempus ultricies.', '2016-06-05 17:19:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `idOferta` int(11) NOT NULL,
  `idApp` int(11) NOT NULL,
  `porcentaje` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`idOferta`, `idApp`, `porcentaje`, `fechaInicio`, `fechaFin`) VALUES
(1, 1, 100, '2016-06-15', '2016-06-30'),
(2, 2, 100, '2016-06-05', '2016-06-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `idApp` int(11) NOT NULL,
  `fechaCompra` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `importe` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `idApp`, `fechaCompra`, `importe`) VALUES
(1, 1, '2016-06-05 17:20:41', '0.00');

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
  `imgPerfil` varchar(128) NOT NULL DEFAULT 'fotos/',
  `correo` varchar(80) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `estado` varchar(64) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nick`, `nombre`, `apellidos`, `fechaNac`, `rol`, `imgPerfil`, `correo`, `pass`, `estado`) VALUES
(1, 'rolero', 'Borja', 'Valiente', '1990-09-22', 'admin', 'fotos/admin.jpg', 'fbvaliente22@gmail.com', 'rolero', 'activo'),
(2, 'spiderman', 'Peter', 'Parker', '1975-11-11', 'usuario', 'fotos/spiderman.jpg', 'spiderman@gmail.com', 'spiderman', 'activo'),
(3, 'hulk', 'Bruce ', 'Banner', '1982-03-03', 'usuario', 'fotos/hulk.jpg', 'hulk@gmail.com', 'hulk', 'activo'),
(4, 'batman', 'Bruce ', 'Wayne', '1979-10-10', 'usuario', 'fotos/batman.jpg', 'batman@gmail.com', 'batman', 'activo'),
(5, 'superman', 'Clark ', 'Kent', '1980-12-12', 'usuario', 'fotos/superman.jpg', 'superman@gmail.com', 'superman', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aplicaciones`
--
ALTER TABLE `aplicaciones`
  ADD PRIMARY KEY (`idApp`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentApp`),
  ADD KEY `idApp` (`idApp`),
  ADD KEY `idUsuario` (`idUsuario`);

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
  ADD PRIMARY KEY (`idNotica`);

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
  ADD KEY `idApp` (`idApp`);

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
  MODIFY `idApp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentApp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  MODIFY `idDonacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNotica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `idOferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

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
