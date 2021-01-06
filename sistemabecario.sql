-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2021 a las 23:12:58
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemabecario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('alexsebas', '1234'),
('admin2', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_UnicoAlum` varchar(15) NOT NULL,
  `primerNomBeca` varchar(20) NOT NULL,
  `segundoNomBeca` varchar(20) NOT NULL,
  `apellidoPaterBeca` varchar(20) NOT NULL,
  `apellidoMaterBeca` varchar(20) NOT NULL,
  `celular` int(10) NOT NULL,
  `correoElec` varchar(40) NOT NULL,
  `id_UnicoPro` varchar(20) NOT NULL,
  `clavePlantel` varchar(20) NOT NULL,
  `fechaRegistro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_UnicoAlum`, `primerNomBeca`, `segundoNomBeca`, `apellidoPaterBeca`, `apellidoMaterBeca`, `celular`, `correoElec`, `id_UnicoPro`, `clavePlantel`, `fechaRegistro`) VALUES
('PRO14745', 'jesus', 'sebastian', 'aguayo', 'avila', 2147483647, 'jesusaviala@gmail.com', 'PRO98101', '344FDFT', 'Wed, 06 Jan 2021 15:55:41 -060');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `becariocuenta`
--

CREATE TABLE `becariocuenta` (
  `user_becario` varchar(50) NOT NULL,
  `pass_becario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `becariocuenta`
--

INSERT INTO `becariocuenta` (`user_becario`, `pass_becario`) VALUES
('alexis', 'alexarmandomdx@gmail.com'),
('sebastian', 'jesusaviala@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planteles`
--

CREATE TABLE `planteles` (
  `clavePlantel` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `localidad` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `nombrePlantel` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fechaRegistro` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planteles`
--

INSERT INTO `planteles` (`clavePlantel`, `localidad`, `nombrePlantel`, `fechaRegistro`) VALUES
('344FDFT', 't', 'CHILAM BALAM', 'Tue, 05 Jan 2021 21:35:06 -060'),
('SDET44FED', 'Tizimin Yucatan Mexico', 'UADY tizimin', 'Tue, 05 Jan 2021 21:35:17 -060'),
('eewas34', 'Tizimin Yucatan Mexico', 'TECNICA 4 ', 'Tue, 05 Jan 2021 21:35:31 -060'),
('wefwefewf', 'Cancun', 'Patria nueva', 'Tue, 05 Jan 2021 23:26:31 -060'),
('FGTWEW34', 'Cancun Mexico', 'TECNICA 31', 'Wed, 06 Jan 2021 15:59:43 -060');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id_UnicoPro` varchar(20) NOT NULL,
  `tipoProgra` varchar(30) NOT NULL,
  `horasCubrir` int(3) NOT NULL,
  `fechaInicioBeca` varchar(30) NOT NULL,
  `fechaFinBeca` varchar(30) NOT NULL,
  `clavePlantel` varchar(20) NOT NULL,
  `fechaRegistro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id_UnicoPro`, `tipoProgra`, `horasCubrir`, `fechaInicioBeca`, `fechaFinBeca`, `clavePlantel`, `fechaRegistro`) VALUES
('PRO98101', 'Practicas Profesionales', 1, '2021-01-14', '2021-01-14', '344FDFT', 'Tue, 05 Jan 2021 22:32:10 -060'),
('PRO36323', 'Residencia ', 30, '2021-01-06', '2021-02-24', 'wefwefewf', 'Tue, 05 Jan 2021 23:27:37 -060'),
('PRO11261', 'Residencia ', 400, '2021-01-13', '2021-01-14', 'FGTWEW34', 'Wed, 06 Jan 2021 16:00:01 -060'),
('PRO26912', 'Practicas Profesionales', 2, '2021-01-21', '2021-01-15', 'FGTWEW34', 'Wed, 06 Jan 2021 16:00:38 -060');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
