-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-02-2021 a las 17:17:21
-- Versión del servidor: 8.0.23-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_fabiola2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercancia`
--

CREATE TABLE `mercancia` (
  `ID_MERCANCIA` int NOT NULL,
  `NOMBRE` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mercancia`
--

INSERT INTO `mercancia` (`ID_MERCANCIA`, `NOMBRE`) VALUES
(1, 'Manzana'),
(2, 'Cambur'),
(3, 'Naranja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_PRODUCTOS` int NOT NULL,
  `NOMBRE_ID` int NOT NULL,
  `CANTIDAD` int NOT NULL,
  `CODIGO` varchar(80) NOT NULL,
  `FECHA` varchar(80) NOT NULL,
  `PROVEEDOR_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_PRODUCTOS`, `NOMBRE_ID`, `CANTIDAD`, `CODIGO`, `FECHA`, `PROVEEDOR_ID`) VALUES
(1, 1, 100, '5689 ', '2021-01-19', 1),
(3, 3, 200, '2367 ', '2021-01-24', 1),
(8, 2, 244, '000003244 ', '2021-01-19', 1),
(9, 2, 123, '24324', '2021-01-25', 1),
(10, 1, 3000, '24324 ', '2021-01-25', 2),
(12, 2, 344, '324', '2021-01-28', 1),
(13, 3, 500, '7878', '2021-02-01', 2),
(14, 1, 200, '3232', '2021-01-24', 1),
(15, 2, 300, '24324', '2021-01-23', 2),
(16, 1, 200, '324', '2021-01-26', 1),
(17, 2, 324, '0000', '2021-02-04', 2),
(18, 1, 5646, '0000', '2021-02-04', 2),
(19, 1, 5345345, '345345', '2021-02-04', 2),
(20, 2, 567567, '0000', '2021-02-04', 2),
(21, 3, 435345, '4354', '2021-02-03', 1),
(22, 3, 435, '345435', '2021-02-03', 2),
(23, 2, 567567, '567567', '2021-02-03', 2),
(24, 2, 5, '345345', '2021-02-04', 2),
(25, 1, 54646, '4646', '2021-02-04', 2),
(26, 1, 234234, '243234', '2021-02-04', 2),
(27, 1, 567567567, '567567', '2021-02-03', 2),
(28, 1, 567, '345345', '2021-02-03', 1),
(29, 1, 567567, '567567', '2021-02-02', 2),
(30, 3, 567567, '56756', '2021-02-03', 2),
(31, 1, 2, '345345', '2021-02-04', 2),
(32, 1, 10, '00000000000000', '2021-02-04', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `ID_PROVEEDORA` int NOT NULL,
  `NOMBRE` varchar(80) NOT NULL,
  `DESCRIPCION` varchar(250) NOT NULL,
  `CORREO` varchar(100) NOT NULL,
  `RIT` varchar(80) NOT NULL,
  `TELEFONO` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`ID_PROVEEDORA`, `NOMBRE`, `DESCRIPCION`, `CORREO`, `RIT`, `TELEFONO`) VALUES
(1, 'proveeTodos', 'empresa proveedora de alimentos   ', 'proveetodo@gmail.com', 'J-3242432 ', '04146754329'),
(2, 'proveeCenter ', 'empresa proveedora de medicinas ', 'proveecenter@gmail.com', 'J-658412 ', '04267593421');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID_ROL` int NOT NULL,
  `ROL` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID_ROL`, `ROL`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int NOT NULL,
  `NOMBRE` varchar(80) NOT NULL,
  `CLAVE` varchar(80) NOT NULL,
  `ROL_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRE`, `CLAVE`, `ROL_ID`) VALUES
(1, 'Fabiola', '1234', 1),
(2, 'Pedro', '1234', 1),
(3, 'Juan   ', '12345  ', 2),
(4, 'Cristian', '1234', 2),
(5, 'Carlos', '1234', 2),
(8, 'prueba', 'prueba', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID_VENTA` int NOT NULL,
  `NOMBRE_VENDEDOR` varchar(80) NOT NULL,
  `NOMBRE_CLIENTE` varchar(80) NOT NULL,
  `FECHA_VENTA` varchar(80) NOT NULL,
  `NOMBRE_PRODUCTO` int NOT NULL,
  `CODIGO_PRODUCTO` varchar(80) NOT NULL,
  `MONTO_VENTA` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID_VENTA`, `NOMBRE_VENDEDOR`, `NOMBRE_CLIENTE`, `FECHA_VENTA`, `NOMBRE_PRODUCTO`, `CODIGO_PRODUCTO`, `MONTO_VENTA`) VALUES
(1, 'Juan ', 'Jose ', '2021-01-06', 1, '5689 ', 60000),
(2, 'Pepe', 'Maria', '2021-01-05', 2, '1313', 80000),
(4, 'Pedro ', 'Marta ', '2021-01-25', 3, '231321 ', 100000),
(5, 'Juan ', 'Maria ', '2021-01-26', 1, '3213 ', 50000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mercancia`
--
ALTER TABLE `mercancia`
  ADD PRIMARY KEY (`ID_MERCANCIA`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_PRODUCTOS`),
  ADD KEY `NOMBRE_ID` (`NOMBRE_ID`),
  ADD KEY `PROVEEDOR_ID` (`PROVEEDOR_ID`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID_PROVEEDORA`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD KEY `ROL` (`ROL_ID`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID_VENTA`),
  ADD KEY `NOMBRE_PRODUCTO` (`NOMBRE_PRODUCTO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mercancia`
--
ALTER TABLE `mercancia`
  MODIFY `ID_MERCANCIA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_PRODUCTOS` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `ID_PROVEEDORA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_ROL` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID_VENTA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`NOMBRE_ID`) REFERENCES `mercancia` (`ID_MERCANCIA`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`PROVEEDOR_ID`) REFERENCES `proveedores` (`ID_PROVEEDORA`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ROL_ID`) REFERENCES `rol` (`ID_ROL`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`NOMBRE_PRODUCTO`) REFERENCES `mercancia` (`ID_MERCANCIA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
