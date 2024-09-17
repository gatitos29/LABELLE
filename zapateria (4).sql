-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-09-2024 a las 00:20:02
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
-- Base de datos: `zapateria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_Cliente` varchar(15) NOT NULL,
  `Nombre_Cliente` varchar(30) DEFAULT NULL,
  `Correo_Cliente` varchar(30) DEFAULT NULL,
  `Contacto_Cliente` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `Id_Color` varchar(20) NOT NULL,
  `N_Color` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id_Empleado` varchar(15) NOT NULL,
  `N_Empleado` varchar(30) DEFAULT NULL,
  `Contacto1_Empleado` varchar(13) DEFAULT NULL,
  `Contacto2_Empleado` varchar(13) DEFAULT NULL,
  `Direccion_Empleado` varchar(40) DEFAULT NULL,
  `Id_EPS` varchar(15) DEFAULT NULL,
  `Id_RH` varchar(5) DEFAULT NULL,
  `Contrasenia` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id_Empleado`, `N_Empleado`, `Contacto1_Empleado`, `Contacto2_Empleado`, `Direccion_Empleado`, `Id_EPS`, `Id_RH`, `Contrasenia`) VALUES
('1041691102', 'Diego Teran', '301 4739553', '301 4739553', 'Avenida Las Flores', '1', '2', '091705'),
('1041693272', 'Danna Quintero', '301 4769570', '301 4769570', 'Avenida Siempre Viva', '2', '3', 'Dannaycabrera4ever'),
('1042246394', 'Jeimy Paez', '305 7350986', '305 7350986', 'Carrera al para?so', '3', '5', 'ThomasyPimi123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `Id_Empresa` varchar(15) NOT NULL,
  `N_Empresa` varchar(30) DEFAULT NULL,
  `Direccion_Empresa` varchar(40) DEFAULT NULL,
  `Contacto_Empresa` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `Id_Eps` varchar(15) NOT NULL,
  `N_Eps` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`Id_Eps`, `N_Eps`) VALUES
('1', 'Compensar'),
('2', 'Sura'),
('3', 'Salud Total'),
('4', 'Colsanitas'),
('5', 'Famisanar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Id_Factura` varchar(15) NOT NULL,
  `Id_Proveedor` varchar(15) DEFAULT NULL,
  `Id_Cliente` varchar(15) DEFAULT NULL,
  `Id_Empleado` varchar(15) DEFAULT NULL,
  `P_Venta` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hombre`
--

CREATE TABLE `hombre` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` mediumint(9) DEFAULT NULL,
  `existencias` varchar(50) DEFAULT NULL,
  `talla1` varchar(30) DEFAULT NULL,
  `talla2` varchar(30) DEFAULT NULL,
  `talla3` varchar(30) DEFAULT NULL,
  `colores` varchar(150) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hombre`
--

INSERT INTO `hombre` (`id`, `nombre`, `precio`, `existencias`, `talla1`, `talla2`, `talla3`, `colores`, `imagen`) VALUES
(1, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/loultimo1.jpg'),
(2, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/loultimo2.jpg'),
(3, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/loultimo3.jpg'),
(4, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/loultimo4.jpg'),
(5, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/ultimas1.jpg'),
(6, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/ultimas2.jpg'),
(7, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/ultimas3.jpg'),
(8, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/ultimas4.jpg'),
(9, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/ultimas5.jpg'),
(10, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/ultimas6.jpg'),
(11, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/ultimas7.jpg'),
(12, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/ultimas8.jpg'),
(13, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal1.jpg'),
(14, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal2.jpg'),
(15, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal3.jpg'),
(16, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal4.jpg'),
(17, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal5.jpg'),
(18, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal6.jpg'),
(19, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal7.jpg'),
(20, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal8.jpg'),
(21, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal9.jpg'),
(22, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal10.jpg'),
(23, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal11.jpg'),
(24, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal12.jpg'),
(25, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal13.jpg'),
(26, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal14.jpg'),
(27, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal15.jpg'),
(28, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/formal16.jpg'),
(29, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual1.jpg'),
(30, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual2.jpg'),
(31, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual3.jpg'),
(32, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual4.jpg'),
(33, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual5.jpg'),
(34, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual6.jpg'),
(35, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual7.jpg'),
(36, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual8.jpg'),
(37, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual9.jpg'),
(38, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual10.jpg'),
(39, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual11.jpg'),
(40, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual12.jpg'),
(41, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual13.jpg'),
(42, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual14.jpg'),
(43, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual15.jpg'),
(44, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/casual16.jpg'),
(45, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo1.jpg'),
(46, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo2.jpg'),
(47, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo3.jpg'),
(48, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo4.jpg'),
(49, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo5.jpg'),
(50, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo6.jpg'),
(51, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo7.jpg'),
(52, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo8.jpg'),
(53, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo9.jpg'),
(54, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo10.jpg'),
(55, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo11.jpg'),
(56, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo12.jpg'),
(57, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo13.jpg'),
(58, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo14.jpg'),
(59, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo15.jpg'),
(60, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo16.jpg'),
(61, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo17.jpg'),
(62, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo18.jpg'),
(63, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo19.jpg'),
(64, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/deportivo20.jpg'),
(65, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/sandalias1.jpg'),
(66, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/sandalias2.jpg'),
(67, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/sandalias3.jpg'),
(68, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/hombre/sandalias4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interfaz`
--

CREATE TABLE `interfaz` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` mediumint(9) DEFAULT NULL,
  `existencias` varchar(50) DEFAULT NULL,
  `talla1` varchar(30) DEFAULT NULL,
  `talla2` varchar(30) DEFAULT NULL,
  `talla3` varchar(30) DEFAULT NULL,
  `colores` varchar(150) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `interfaz`
--

INSERT INTO `interfaz` (`id`, `nombre`, `precio`, `existencias`, `talla1`, `talla2`, `talla3`, `colores`, `imagen`) VALUES
(1, 'dark-tools', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/interfaz/interfaz1.jpg'),
(2, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/interfaz/interfaz2.jpg'),
(3, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/interfaz/interfaz3.jpg'),
(4, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/interfaz/interfaz4.jpg'),
(5, 'Blueberry Cannon', 250000, '100p ', 'T33', 'T40', 'T10', '|blanco|rojo', '../imagenes/interfaz/interfaz6.jpg'),
(6, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/interfaz/interfaz5.jpg'),
(7, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/interfaz/interfaz7.jpg'),
(8, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/interfaz/interfaz8.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `Id_Registro` varchar(15) NOT NULL,
  `Id_Producto` varchar(15) DEFAULT NULL,
  `Cantidad_Ingreso` mediumint(9) DEFAULT NULL,
  `Fecha_Ingreso` date DEFAULT NULL,
  `Cantidad_Salida` mediumint(9) DEFAULT NULL,
  `Fecha_Salida` date DEFAULT NULL,
  `Existencias` mediumint(9) DEFAULT NULL,
  `P_compra` mediumint(9) DEFAULT NULL,
  `P_venta` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `Id_Material` varchar(15) NOT NULL,
  `N_Material` varchar(30) DEFAULT NULL,
  `Desc_Material` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mujer`
--

CREATE TABLE `mujer` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` mediumint(9) DEFAULT NULL,
  `existencias` varchar(50) DEFAULT NULL,
  `talla1` varchar(30) DEFAULT NULL,
  `talla2` varchar(30) DEFAULT NULL,
  `talla3` varchar(30) DEFAULT NULL,
  `colores` varchar(150) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mujer`
--

INSERT INTO `mujer` (`id`, `nombre`, `precio`, `existencias`, `talla1`, `talla2`, `talla3`, `colores`, `imagen`) VALUES
(1, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/loultimo1.jpg'),
(2, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/loultimo2.jpg'),
(3, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/loultimo3.jpg'),
(4, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/loultimo4.jpg'),
(5, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/ultimas1.jpg'),
(6, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/ultimas2.jpg'),
(7, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/ultimas3.jpg'),
(8, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/ultimas4.jpg'),
(9, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/ultimas5.jpg'),
(10, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/ultimas6.jpg'),
(11, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/ultimas7.jpg'),
(12, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/ultimas8.jpg'),
(13, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal1.jpg'),
(14, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal2.jpg'),
(15, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal3.jpg'),
(16, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal4.jpg'),
(17, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal5.jpg'),
(18, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal6.jpg'),
(19, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal7.jpg'),
(20, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal8.jpg'),
(21, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal9.jpg'),
(22, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal10.jpg'),
(23, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal11.jpg'),
(24, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal12.jpg'),
(25, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal13.jpg'),
(26, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal14.jpg'),
(27, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal15.jpg'),
(28, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/formal16.jpg'),
(29, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual1.jpg'),
(30, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual2.jpg'),
(31, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual3.jpg'),
(32, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual4.jpg'),
(33, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual5.jpg'),
(34, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual6.jpg'),
(35, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual7.jpg'),
(36, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual8.jpg'),
(37, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual9.jpg'),
(38, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual10.jpg'),
(39, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual11.jpg'),
(40, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual12.jpg'),
(41, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual13.jpg'),
(42, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual14.jpg'),
(43, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual15.jpg'),
(44, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/casual16.jpg'),
(45, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo1.jpg'),
(46, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo2.jpg'),
(47, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo3.jpg'),
(48, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo4.jpg'),
(49, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo5.jpg'),
(50, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo6.jpg'),
(51, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo7.jpg'),
(52, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo8.jpg'),
(53, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo9.jpg'),
(54, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo10.jpg'),
(55, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo11.jpg'),
(56, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo12.jpg'),
(57, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo13.jpg'),
(58, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo14.jpg'),
(59, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo15.jpg'),
(60, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo16.jpg'),
(61, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo17.jpg'),
(62, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo18.jpg'),
(63, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo19.jpg'),
(64, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/deportivo20.jpg'),
(65, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/sandalias1.jpg'),
(66, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/sandalias2.jpg'),
(67, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/sandalias3.jpg'),
(68, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/mujer/sandalias4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninas`
--

CREATE TABLE `ninas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` mediumint(9) DEFAULT NULL,
  `existencias` varchar(50) DEFAULT NULL,
  `talla1` varchar(30) DEFAULT NULL,
  `talla2` varchar(30) DEFAULT NULL,
  `talla3` varchar(30) DEFAULT NULL,
  `colores` varchar(150) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ninas`
--

INSERT INTO `ninas` (`id`, `nombre`, `precio`, `existencias`, `talla1`, `talla2`, `talla3`, `colores`, `imagen`) VALUES
(1, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/loultimo1.jpg'),
(2, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/loultimo2.jpg'),
(3, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/loultimo3.jpg'),
(4, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/loultimo4.jpg'),
(5, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/ultimas1.jpg'),
(6, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/ultimas2.jpg'),
(7, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/ultimas3.jpg'),
(8, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/ultimas4.jpg'),
(9, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/ultimas5.jpg'),
(10, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/ultimas6.jpg'),
(11, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/ultimas7.jpg'),
(12, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/ultimas8.jpg'),
(13, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal1.jpg'),
(14, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal2.jpg'),
(15, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal3.jpg'),
(16, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal4.jpg'),
(17, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal5.jpg'),
(18, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal6.jpg'),
(19, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal7.jpg'),
(20, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal8.jpg'),
(21, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal9.jpg'),
(22, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal10.jpg'),
(23, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal11.jpg'),
(24, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal12.jpg'),
(25, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal13.jpg'),
(26, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal14.jpg'),
(27, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal15.jpg'),
(28, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/formal16.jpg'),
(29, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual1.jpg'),
(30, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual2.jpg'),
(31, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual3.jpg'),
(32, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual4.jpg'),
(33, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual5.jpg'),
(34, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual6.jpg'),
(35, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual7.jpg'),
(36, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual8.jpg'),
(37, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual9.jpg'),
(38, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual10.jpg'),
(39, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual11.jpg'),
(40, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual12.jpg'),
(41, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual13.jpg'),
(42, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual14.jpg'),
(43, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual15.jpg'),
(44, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/casual16.jpg'),
(45, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo1.jpg'),
(46, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo2.jpg'),
(47, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo3.jpg'),
(48, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo4.jpg'),
(49, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo5.jpg'),
(50, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo6.jpg'),
(51, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo7.jpg'),
(52, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo8.jpg'),
(53, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo9.jpg'),
(54, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo10.jpg'),
(55, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo11.jpg'),
(56, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo12.jpg'),
(57, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo13.jpg'),
(58, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo14.jpg'),
(59, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo15.jpg'),
(60, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo16.jpg'),
(61, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo17.jpg'),
(62, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo18.jpg'),
(63, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo19.jpg'),
(64, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/deportivo20.jpg'),
(65, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/sandalias1.jpg'),
(66, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/sandalias2.jpg'),
(67, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/sandalias3.jpg'),
(68, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninas/sandalias4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos`
--

CREATE TABLE `ninos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` mediumint(9) DEFAULT NULL,
  `existencias` varchar(50) DEFAULT NULL,
  `talla1` varchar(30) DEFAULT NULL,
  `talla2` varchar(30) DEFAULT NULL,
  `talla3` varchar(30) DEFAULT NULL,
  `colores` varchar(150) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ninos`
--

INSERT INTO `ninos` (`id`, `nombre`, `precio`, `existencias`, `talla1`, `talla2`, `talla3`, `colores`, `imagen`) VALUES
(1, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/loultimo1.jpg'),
(2, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/loultimo2.jpg'),
(3, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/loultimo3.jpg'),
(4, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/loultimo4.jpg'),
(5, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/ultimas1.jpg'),
(6, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/ultimas2.jpg'),
(7, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/ultimas3.jpg'),
(8, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/ultimas4.jpg'),
(9, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/ultimas5.jpg'),
(10, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/ultimas6.jpg'),
(11, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/ultimas7.jpg'),
(12, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/ultimas8.jpg'),
(13, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal1.jpg'),
(14, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal2.jpg'),
(15, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal3.jpg'),
(16, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal4.jpg'),
(17, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal5.jpg'),
(18, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal6.jpg'),
(19, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal7.jpg'),
(20, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal8.jpg'),
(21, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal9.jpg'),
(22, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal10.jpg'),
(23, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal11.jpg'),
(24, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal12.jpg'),
(25, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal13.jpg'),
(26, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal14.jpg'),
(27, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal15.jpg'),
(28, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/formal16.jpg'),
(29, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual1.jpg'),
(30, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual2.jpg'),
(31, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual3.jpg'),
(32, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual4.jpg'),
(33, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual5.jpg'),
(34, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual6.jpg'),
(35, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual7.jpg'),
(36, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual8.jpg'),
(37, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual9.jpg'),
(38, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual10.jpg'),
(39, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual11.jpg'),
(40, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual12.jpg'),
(41, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual13.jpg'),
(42, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual14.jpg'),
(43, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual15.jpg'),
(44, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/casual16.jpg'),
(45, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo1.jpg'),
(46, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo2.jpg'),
(47, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo3.jpg'),
(48, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo4.jpg'),
(49, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo5.jpg'),
(50, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo6.jpg'),
(51, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo7.jpg'),
(52, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo8.jpg'),
(53, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo9.jpg'),
(54, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo10.jpg'),
(55, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo11.jpg'),
(56, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo12.jpg'),
(57, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo13.jpg'),
(58, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo14.jpg'),
(59, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo15.jpg'),
(60, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo16.jpg'),
(61, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo17.jpg'),
(62, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo18.jpg'),
(63, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo19.jpg'),
(64, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/deportivo20.jpg'),
(65, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/sandalias1.jpg'),
(66, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/sandalias2.jpg'),
(67, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/sandalias3.jpg'),
(68, 'Clearcheck', 200000, '100p ', 'T38', 'T42', 'T44', '|azul|', '../imagenes/ninos/sandalias4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_Producto` varchar(15) NOT NULL,
  `N_Producto` varchar(30) DEFAULT NULL,
  `Talla` tinyint(4) DEFAULT NULL,
  `Id_Tipo` varchar(15) DEFAULT NULL,
  `Id_Color` varchar(15) DEFAULT NULL,
  `Id_material` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id_Proveedor` varchar(15) NOT NULL,
  `N_Proveedor` varchar(30) DEFAULT NULL,
  `Contacto_Proveedor` varchar(30) DEFAULT NULL,
  `Correo_Proveedor` varchar(30) DEFAULT NULL,
  `Id_Empresa` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rh`
--

CREATE TABLE `rh` (
  `Id_RH` varchar(5) NOT NULL,
  `N_RH` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rh`
--

INSERT INTO `rh` (`Id_RH`, `N_RH`) VALUES
('1', 'A+'),
('2', 'B+'),
('3', 'O+'),
('4', 'AB+'),
('5', 'A-'),
('6', 'B-'),
('7', 'O-'),
('8', 'AB-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `Id_Tipo` varchar(15) NOT NULL,
  `N_Tipo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `User_Usuarios` varchar(20) NOT NULL,
  `Email_Usuarios` varchar(50) DEFAULT NULL,
  `Contrasenia_Usuarios` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`User_Usuarios`, `Email_Usuarios`, `Contrasenia_Usuarios`) VALUES
('Danita_Morchis', 'DM@gmail.com', '123456'),
('ingri', 'ingris', ''),
('ingriS', 'I@', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_Cliente`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`Id_Color`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_Empleado`),
  ADD KEY `R5` (`Id_RH`),
  ADD KEY `R6` (`Id_EPS`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`Id_Empresa`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`Id_Eps`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Id_Factura`),
  ADD KEY `R8` (`Id_Proveedor`),
  ADD KEY `R9` (`Id_Cliente`),
  ADD KEY `R10` (`Id_Empleado`);

--
-- Indices de la tabla `hombre`
--
ALTER TABLE `hombre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `interfaz`
--
ALTER TABLE `interfaz`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`Id_Registro`),
  ADD KEY `R7` (`Id_Producto`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`Id_Material`);

--
-- Indices de la tabla `mujer`
--
ALTER TABLE `mujer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ninas`
--
ALTER TABLE `ninas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_Producto`),
  ADD KEY `R1` (`Id_Tipo`),
  ADD KEY `R2` (`Id_material`),
  ADD KEY `R3` (`Id_Color`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id_Proveedor`),
  ADD KEY `R4` (`Id_Empresa`);

--
-- Indices de la tabla `rh`
--
ALTER TABLE `rh`
  ADD PRIMARY KEY (`Id_RH`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`Id_Tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`User_Usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hombre`
--
ALTER TABLE `hombre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `interfaz`
--
ALTER TABLE `interfaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `mujer`
--
ALTER TABLE `mujer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `ninas`
--
ALTER TABLE `ninas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `ninos`
--
ALTER TABLE `ninos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `R5` FOREIGN KEY (`Id_RH`) REFERENCES `rh` (`Id_RH`),
  ADD CONSTRAINT `R6` FOREIGN KEY (`Id_EPS`) REFERENCES `eps` (`Id_Eps`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `R10` FOREIGN KEY (`Id_Empleado`) REFERENCES `empleados` (`Id_Empleado`),
  ADD CONSTRAINT `R8` FOREIGN KEY (`Id_Proveedor`) REFERENCES `proveedor` (`Id_Proveedor`),
  ADD CONSTRAINT `R9` FOREIGN KEY (`Id_Cliente`) REFERENCES `cliente` (`Id_Cliente`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `R7` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `R1` FOREIGN KEY (`Id_Tipo`) REFERENCES `tipo_producto` (`Id_Tipo`),
  ADD CONSTRAINT `R2` FOREIGN KEY (`Id_material`) REFERENCES `material` (`Id_Material`),
  ADD CONSTRAINT `R3` FOREIGN KEY (`Id_Color`) REFERENCES `color` (`Id_Color`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `R4` FOREIGN KEY (`Id_Empresa`) REFERENCES `empresa` (`Id_Empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
