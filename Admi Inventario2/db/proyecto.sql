-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2022 a las 23:58:20
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `IdCliente` bigint(11) NOT NULL COMMENT 'Numero del documento de Identificacion Cliente',
  `Tipodocumento` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Tipo de Documento del Cliente ',
  `Nombre` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Primer nombre del Cliente',
  `Apellido` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Segundo nombre del Cliente',
  `Direccion` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Direccion del Cliente',
  `Email` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Email del Cliente',
  `telefono` bigint(11) NOT NULL COMMENT 'Numero de telefono de el Cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT=' Clientes';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleentrada`
--

CREATE TABLE `detalleentrada` (
  `id_Entrada` int(11) NOT NULL COMMENT 'Codigo de Entrada',
  `Codigo_Producto` int(11) NOT NULL COMMENT 'Codigo del Producto',
  `CantidadEntradaProducto` int(11) NOT NULL,
  `PrecioEntradaProducto` int(11) NOT NULL,
  `ValorEntradaProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `detalleentrada`
--

INSERT INTO `detalleentrada` (`id_Entrada`, `Codigo_Producto`, `CantidadEntradaProducto`, `PrecioEntradaProducto`, `ValorEntradaProducto`) VALUES
(36, 85, 50, 1500, 75000);

--
-- Disparadores `detalleentrada`
--
DELIMITER $$
CREATE TRIGGER `PRODUCTOS_AU` AFTER INSERT ON `detalleentrada` FOR EACH ROW UPDATE productos SET EntradaProducto = EntradaProducto + new.CantidadEntradaProducto,existencias = existencias + new.CantidadEntradaProducto WHERE Codigo_Producto = new.Codigo_Producto
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesalida`
--

CREATE TABLE `detallesalida` (
  `IdSalidas` int(11) NOT NULL,
  `Codigo_Producto` int(11) NOT NULL,
  `CantidadSalidaProductos` int(11) NOT NULL,
  `PrecioSalidaProductos` int(11) NOT NULL,
  `ValorSalidaProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Disparadores `detallesalida`
--
DELIMITER $$
CREATE TRIGGER `PRODUCTOS_AUS` AFTER INSERT ON `detallesalida` FOR EACH ROW UPDATE productos SET SalidaProducto = SalidaProducto + new.CantidadSalidaProductos, existencias = existencias - new.CantidadSalidaProductos WHERE Codigo_Producto = new.Codigo_Producto
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Codigo` int(11) NOT NULL COMMENT 'Codigo o el ID del empleado',
  `ID` bigint(11) NOT NULL COMMENT 'Identificacion del empleado ',
  `Tipodocumento` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Tipo de Documento (C.C - C.E - T.I)',
  `Nombre` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Primer nombre del empleado',
  `Apellido` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Primer apellido del empleado',
  `Cargo` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Cargo de el empleado',
  `celular` bigint(11) NOT NULL COMMENT 'Numero de Celular de el empleado',
  `Email` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Email/ Correo de el empleado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Empleados';

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Codigo`, `ID`, `Tipodocumento`, `Nombre`, `Apellido`, `Cargo`, `celular`, `Email`) VALUES
(129, 1025520831, 'Cedula', 'Yadi', 'Pinilla', 'Cocinero', 3223790461, 'Pinilla@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id_Entrada` int(11) NOT NULL COMMENT 'Numero de la factura de Entrada',
  `FacturaEntrada` int(11) NOT NULL,
  `FechaEntrada` date NOT NULL,
  `HoraEntrada` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Entrada, Schema';

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id_Entrada`, `FacturaEntrada`, `FechaEntrada`, `HoraEntrada`) VALUES
(251, 25, '2022-03-28', '03:38:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `Nivel` int(3) NOT NULL,
  `Nombre_Nivel` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`Nivel`, `Nombre_Nivel`) VALUES
(1, 'Administrador '),
(2, 'Almacenista'),
(3, 'Jefe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Codigo_Producto` int(11) NOT NULL COMMENT 'Codigo del producto',
  `Nombre_Productos` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Nombre de el producto',
  `Detalle_Productos` varchar(45) COLLATE utf8_bin DEFAULT NULL COMMENT 'Detalle , descripcion del producto',
  `EntradaProducto` int(11) NOT NULL,
  `SalidaProducto` int(11) NOT NULL,
  `valor_unitario` int(11) NOT NULL COMMENT 'Precio de cada producto',
  `existencias` int(11) NOT NULL COMMENT 'Existencias de productos',
  `idproveedor` int(11) NOT NULL,
  `Vencimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='productos';

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Codigo_Producto`, `Nombre_Productos`, `Detalle_Productos`, `EntradaProducto`, `SalidaProducto`, `valor_unitario`, `existencias`, `idproveedor`, `Vencimiento`) VALUES
(85, 'Pollo Asado', 'Pollo', 50, 10, 22000, 40, 24021210, '2022-03-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idproveedor` int(11) NOT NULL COMMENT 'Identificacion de el proveddor',
  `Cod_Proveedor` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Codigo de el proveedor',
  `Nombre` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Primer nombre de el proveedor',
  `Apellido` varchar(45) COLLATE utf8_bin DEFAULT NULL COMMENT 'Segundo nombre de el proveedor',
  `telefono` varchar(11) COLLATE utf8_bin NOT NULL COMMENT 'Numero de contacto de el proveedor',
  `email` varchar(45) COLLATE utf8_bin DEFAULT NULL COMMENT 'Email de el proveedor ',
  `Nombre_Empresa` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Nombre de la Empresa',
  `direccion_Empresa` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Direccion de la Empresa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT=' proveedores';

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idproveedor`, `Cod_Proveedor`, `Nombre`, `Apellido`, `telefono`, `email`, `Nombre_Empresa`, `direccion_Empresa`) VALUES
(24021210, '16', 'Katerin', 'Ortiz', '10225', 'sannuher30@gmail.com', 'Pollosxd22', 'calle 54 f sur 93'),
(1013100632, '15', 'Esteban', 'Triana', '34156AAA', 'dilansj@gmail.com', 'mac pollo 237', 'calle 546 #134');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `IdSalidas` int(11) NOT NULL,
  `FacturaSalidas` int(11) NOT NULL,
  `FechaSalidas` int(11) NOT NULL,
  `HoraSalidas` int(11) NOT NULL,
  `Estado` varchar(45) COLLATE utf8_bin NOT NULL,
  `IdCliente` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT=' salidas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `password` varchar(200) COLLATE utf8_bin NOT NULL,
  `Nivel` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `Nivel`) VALUES
(7, 'sannuher@gmail.com', '$2y$10$MOW2/ixoSzkwvpF7ocsx3OfdERhlcf/aQ77i9aWaNuVWXT66T3B..', 1),
(9, 'stefinuher@gmail.com', '$2y$10$ghdxDPrnOxExBw/WXSYIQOIwFUhgWjRD9Mb7ndvyI7VsiVai6ECwq', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indices de la tabla `detalleentrada`
--
ALTER TABLE `detalleentrada`
  ADD KEY `CodigoEntrada` (`id_Entrada`),
  ADD KEY `CodigoProducto` (`Codigo_Producto`);

--
-- Indices de la tabla `detallesalida`
--
ALTER TABLE `detallesalida`
  ADD KEY `CodigoSalida` (`IdSalidas`),
  ADD KEY `CodigoProducto` (`Codigo_Producto`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id_Entrada`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`Nivel`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Codigo_Producto`),
  ADD KEY `fk_Productos_proveedores1_idx` (`idproveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`IdSalidas`),
  ADD KEY `IdCliente` (`IdCliente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Nivel` (`Nivel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo o el ID del empleado', AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id_Entrada` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numero de la factura de Entrada', AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `Nivel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Codigo_Producto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo del producto', AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idproveedor` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificacion de el proveddor', AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `IdSalidas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalleentrada`
--
ALTER TABLE `detalleentrada`
  ADD CONSTRAINT `detalleentrada_ibfk_1` FOREIGN KEY (`Codigo_Producto`) REFERENCES `productos` (`Codigo_Producto`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detallesalida`
--
ALTER TABLE `detallesalida`
  ADD CONSTRAINT `detallesalida_ibfk_1` FOREIGN KEY (`Codigo_Producto`) REFERENCES `productos` (`Codigo_Producto`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idproveedor`) REFERENCES `proveedores` (`idproveedor`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
