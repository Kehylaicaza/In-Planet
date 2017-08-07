-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2017 a las 21:36:02
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inplanet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `time_appointments` time NOT NULL,
  `day` date NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `state` varchar(150) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `appointments`
--

INSERT INTO `appointments` (`id`, `time_appointments`, `day`, `description`, `state`, `client_id`, `employee_id`) VALUES
(1, '11:10:00', '2017-07-03', 'Firma de Contrato', 'Cancelado', 1, 1),
(2, '11:30:00', '2017-07-03', 'Firma de Contrato', 'Confirmada', 2, 2),
(3, '11:50:00', '2017-07-03', 'Firma de Contrato', 'Realizada', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `province` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id`, `name`, `province`) VALUES
(1, 'La Troncal', 'Cañar'),
(2, 'Milagro', 'Guayas'),
(3, 'Durán', 'Guayas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_status` varchar(30) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `client_status`, `user_id`) VALUES
(1, 'Activo', 4),
(2, 'Activo', 2),
(3, 'Inactivo', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contracts`
--

CREATE TABLE `contracts` (
  `id` int(11) NOT NULL,
  `contract` varchar(30) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contracts`
--

INSERT INTO `contracts` (`id`, `contract`, `dates`, `client_id`) VALUES
(1, 'contract', '2017-01-01', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `salary` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departments`
--

INSERT INTO `departments` (`id`, `name`, `salary`) VALUES
(1, 'Operacional', 380),
(2, 'Instalaciones', 378);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `date_recruiting` date NOT NULL,
  `department_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type_employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `date_recruiting`, `department_id`, `user_id`, `type_employee_id`) VALUES
(1, '2013-07-07', 1, 1, 1),
(2, '2012-07-07', 2, 2, 1),
(3, '2015-07-07', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instalations`
--

CREATE TABLE `instalations` (
  `id` int(11) NOT NULL,
  `date_instalation` date DEFAULT NULL,
  `date_time` time DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `modem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `internet_services`
--

CREATE TABLE `internet_services` (
  `id` int(11) NOT NULL,
  `active_date` date DEFAULT NULL,
  `date_expiry` date DEFAULT NULL,
  `internet_status` varchar(10) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `modem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `internet_services`
--

INSERT INTO `internet_services` (`id`, `active_date`, `date_expiry`, `internet_status`, `client_id`, `modem_id`) VALUES
(1, '2016-03-03', '2016-03-04', 'On', 1, 1),
(2, '2016-04-03', '2016-05-04', 'On', 2, 2),
(3, '2016-05-03', '2016-06-04', 'On', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modems`
--

CREATE TABLE `modems` (
  `id` int(11) NOT NULL,
  `model` varchar(30) DEFAULT NULL,
  `serial` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modems`
--

INSERT INTO `modems` (`id`, `model`, `serial`) VALUES
(1, 'fb36', 'x24qewqecg5'),
(2, 'fa86', 'xwasfr458'),
(3, 'fb28', 'x25qexwuqjl5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `options` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `options`
--

INSERT INTO `options` (`id`, `options`) VALUES
(1, 'Crear'),
(2, 'Modificar'),
(3, 'Actualizar'),
(4, 'Borrar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `option_profiles`
--

CREATE TABLE `option_profiles` (
  `id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `option_profiles`
--

INSERT INTO `option_profiles` (`id`, `option_id`, `profile_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payements`
--

CREATE TABLE `payements` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `dates` date DEFAULT NULL,
  `credit_card` varchar(30) DEFAULT NULL,
  `limit_date` date DEFAULT NULL,
  `internet_service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `payements`
--

INSERT INTO `payements` (`id`, `plan_id`, `client_id`, `dates`, `credit_card`, `limit_date`, `internet_service_id`) VALUES
(1, 1, 1, '2017-02-02', '12312312381238', NULL, 3),
(2, 1, 2, '2017-03-02', '88888888884', NULL, 2),
(3, 1, 3, '2017-04-02', '4747484845242', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `ci` varchar(30) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `people`
--

INSERT INTO `people` (`id`, `name`, `last_name`, `ci`, `city_id`, `address`, `email`) VALUES
(1, 'Manuel', 'Peralta', '0977874321', 1, 'Av. Los chillos', 'manuquir@espol.edu.ec'),
(2, 'Agatha', 'Jimenez', '0987123511', 2, 'Av.Pacifico', 'ajime@espol.edu.ec'),
(3, 'Andres', 'Sosa', '09726666321', 2, 'Av. Los chillos', 'andreso@espol.edu.ec'),
(4, 'Laura', 'Bastidas', '099991264227', 3, 'Floresta', 'lorar@espol.edu.ec'),
(5, 'Kathy', 'Segovia', '0900984321', 3, 'Av. Los chillos', 'kathyy@espol.edu.ec');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `price` double DEFAULT NULL,
  `rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plans`
--

INSERT INTO `plans` (`id`, `price`, `rank`) VALUES
(1, 24, 4),
(2, 30, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `profiles` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profiles`
--

INSERT INTO `profiles` (`id`, `profiles`) VALUES
(1, 'admin'),
(2, 'client'),
(3, 'employee');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeofemployees`
--

CREATE TABLE `typeofemployees` (
  `id` int(11) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `typeofemployees`
--

INSERT INTO `typeofemployees` (`id`, `description`) VALUES
(1, 'Operador'),
(2, 'Call Center'),
(3, 'Técnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `person_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `person_id`, `profile_id`) VALUES
(1, 'PaolaO', '12345', 1, 1),
(2, 'KeilaC', '0h77g', 2, 1),
(3, 'WalterF', '1ggdfg5', 3, 2),
(4, 'KimmyM', '0mkv7g', 4, 2),
(5, 'YanderS', '1goodfg5', 5, 3),
(6, 'as', 'as', 1, 2),
(7, 'casa', '$2y$10$fl/1sXD8/gKxOdHXhZr.VeZp.deXpcVRWKDsqkYu60TGgp.C4kCIS', 2, 2),
(8, 'mama', '$2y$10$4p1evxDP8QGlHsSkcIAi3OKClOj3fkdCoapZT48AyjzwjWSj/LBp.', 4, 1),
(9, 'papa', '$2y$10$YwuFMnkC38SoXsjhxOU0seUA7JXayF558s/obZzIHJwoqAer0EJHi', 5, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `fk_Employee_Appointment_` (`employee_id`);

--
-- Indices de la tabla `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Clients_Users` (`user_id`);

--
-- Indices de la tabla `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_employee_id` (`type_employee_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `instalations`
--
ALTER TABLE `instalations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Client_instalation` (`client_id`),
  ADD KEY `fk_employee_instalation` (`employee_id`),
  ADD KEY `fk_modem_instalation` (`modem_id`);

--
-- Indices de la tabla `internet_services`
--
ALTER TABLE `internet_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Internet_Services_Client` (`client_id`),
  ADD KEY `fk_Internet_Services_Modem` (`modem_id`);

--
-- Indices de la tabla `modems`
--
ALTER TABLE `modems`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `option_profiles`
--
ALTER TABLE `option_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Option_Profiles_options` (`option_id`),
  ADD KEY `fk_Option_Profiles_profiles` (`profile_id`);

--
-- Indices de la tabla `payements`
--
ALTER TABLE `payements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Plan_Payement_` (`plan_id`),
  ADD KEY `fk_internet_Payement_` (`internet_service_id`);

--
-- Indices de la tabla `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `typeofemployees`
--
ALTER TABLE `typeofemployees`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_id` (`person_id`),
  ADD KEY `fk_Users_Profiles` (`profile_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `instalations`
--
ALTER TABLE `instalations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `internet_services`
--
ALTER TABLE `internet_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `modems`
--
ALTER TABLE `modems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `option_profiles`
--
ALTER TABLE `option_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `payements`
--
ALTER TABLE `payements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `typeofemployees`
--
ALTER TABLE `typeofemployees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `fk_Employee_Appointment_` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Filtros para la tabla `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `fk_Clients_Users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`type_employee_id`) REFERENCES `typeofemployees` (`id`),
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `instalations`
--
ALTER TABLE `instalations`
  ADD CONSTRAINT `fk_Client_instalation` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `fk_employee_instalation` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `fk_modem_instalation` FOREIGN KEY (`modem_id`) REFERENCES `modems` (`id`);

--
-- Filtros para la tabla `internet_services`
--
ALTER TABLE `internet_services`
  ADD CONSTRAINT `fk_Internet_Services_Client` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `fk_Internet_Services_Modem` FOREIGN KEY (`modem_id`) REFERENCES `modems` (`id`);

--
-- Filtros para la tabla `option_profiles`
--
ALTER TABLE `option_profiles`
  ADD CONSTRAINT `fk_Option_Profiles_options` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`),
  ADD CONSTRAINT `fk_Option_Profiles_profiles` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`);

--
-- Filtros para la tabla `payements`
--
ALTER TABLE `payements`
  ADD CONSTRAINT `fk_Plan_Payement_` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`),
  ADD CONSTRAINT `fk_internet_Payement_` FOREIGN KEY (`internet_service_id`) REFERENCES `internet_services` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_Users_Profiles` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`),
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
