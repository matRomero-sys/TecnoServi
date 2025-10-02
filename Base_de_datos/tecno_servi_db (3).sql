-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2025 a las 19:09:33
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
-- Base de datos: `tecno_servi_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dni` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `tipo_cliente` varchar(255) NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `dni`, `nombre`, `direccion`, `tipo_cliente`, `contacto`, `password`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'activo', 'ABC123', 'Itaembe Miní', 'basico', '3764111222', '12341234', 1, '2025-10-02 18:50:58', '2025-10-02 18:50:58'),
(2, 'activo', 'CDE123', 'B° Los Lapachos', 'premium', '3764123412', '12121212', 1, '2025-10-02 18:50:58', '2025-10-02 18:50:58'),
(3, 'inactivo', 'FGH123', 'B° Malvinas', 'basico', '3755998899', '15915915', 1, '2025-10-02 18:50:58', '2025-10-02 18:50:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `dni` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `rol` varchar(255) NOT NULL,
  `cantidad_tareas` int(11) NOT NULL,
  `rendimiento` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `id_grupo_trabajo` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`dni`, `nombre`, `fecha_ingreso`, `rol`, `cantidad_tareas`, `rendimiento`, `activo`, `id_grupo_trabajo`, `password`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'jefe', '2000-01-01', 'jefe', 3, 3, 1, 1, '$2y$10$mcHkZf2t.XFAOYBn1NyvEuDvXQ3tidDCQJ9oOxEnCBV3AeEK8ed7.', 1, '2025-10-02 19:15:23', '2025-10-02 19:15:23'),
(3, 'admin', '2000-01-01', 'admin', 3, 3, 1, 1, '$2y$10$4DMoB3/T6jmfmrK4hfRCpuqpHNdzkt6PeKRcTlisJoJ/n1ubsJLsm', 1, '2025-10-02 19:16:06', '2025-10-02 19:16:06'),
(40111222, 'Juan Pérez', '2020-03-15', 'Técnico', 25, 80, 1, 1, '12312312', 1, '2025-10-02 18:50:58', '2025-10-02 18:50:58'),
(40222333, 'María Gómez', '2021-07-10', 'Administrativo', 15, 90, 1, 1, '12341234', 1, '2025-10-02 18:50:58', '2025-10-02 18:50:58'),
(40333444, 'Carlos López', '2019-11-05', 'Supervisor', 30, 85, 1, 2, '12345123', 1, '2025-10-02 18:50:58', '2025-10-02 18:50:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_trabajos`
--

CREATE TABLE `grupo_trabajos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(255) NOT NULL,
  `patente_vehiculo` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grupo_trabajos`
--

INSERT INTO `grupo_trabajos` (`id`, `estado`, `patente_vehiculo`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'activo', 'ABC123', 1, '2025-10-02 18:50:58', '2025-10-02 18:50:58'),
(2, 'activo', 'CDE123', 1, '2025-10-02 18:50:58', '2025-10-02 18:50:58'),
(3, 'inactivo', 'FGH123', 1, '2025-10-02 18:50:58', '2025-10-02 18:50:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2025_09_23_135034_create_vehiculos_table', 1),
(17, '2025_09_23_135042_create_grupo_trabajos_table', 1),
(18, '2025_09_23_143804_create_empleados_table', 1),
(19, '2025_09_25_204733_create_clientes_table', 1),
(20, '2025_09_25_204738_create_orden_trabajos_table', 1),
(21, '2025_09_28_022710_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Empleado', 1),
(2, 'App\\Models\\Empleado', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_trabajos`
--

CREATE TABLE `orden_trabajos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `motivo_inacabado` varchar(255) DEFAULT NULL,
  `id_grupo_trabajo` bigint(20) UNSIGNED DEFAULT NULL,
  `id_cliente` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'ver vehiculos', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(2, 'registrar vehiculos', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(3, 'editar vehiculos', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(4, 'borrar vehiculos', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(5, 'ver empleados', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(6, 'registrar empleados', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(7, 'editar empleados', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(8, 'borrar empleados', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(9, 'ver grupo_trabajos', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(10, 'registrar grupo_trabajos', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(11, 'editar grupo_trabajos', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(12, 'borrar grupo_trabajos', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(13, 'ver clientes', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(14, 'registrar clientes', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(15, 'editar clientes', 'empleados', '2025-10-02 18:51:01', '2025-10-02 18:51:01'),
(16, 'borrar clientes', 'empleados', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(17, 'registrar clientes', 'web', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(18, 'editar clientes', 'web', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(19, 'borrar clientes', 'web', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(20, 'ver orden_trabajos', 'empleados', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(21, 'editar orden_trabajos', 'empleados', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(22, 'registrar orden_trabajos', 'empleados', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(23, 'borrar orden_trabajos', 'empleados', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(24, 'ver orden_trabajos', 'web', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(25, 'registrar orden_trabajos', 'web', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(26, 'editar orden_trabajos', 'web', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(27, 'borrar orden_trabajos', 'web', '2025-10-02 18:51:02', '2025-10-02 18:51:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'jefe', 'empleados', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(2, 'admin', 'empleados', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(3, 'empleado', 'empleados', '2025-10-02 18:51:02', '2025-10-02 18:51:02'),
(4, 'cliente', 'web', '2025-10-02 18:51:02', '2025-10-02 18:51:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(15, 1),
(16, 1),
(17, 4),
(18, 4),
(19, 4),
(20, 1),
(20, 2),
(20, 3),
(21, 1),
(21, 2),
(22, 1),
(23, 1),
(24, 4),
(25, 4),
(26, 4),
(27, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `patente` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `vencimiento_vtv` date NOT NULL,
  `estado_neumaticos` int(11) NOT NULL,
  `mantenimiento` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`patente`, `marca`, `modelo`, `vencimiento_vtv`, `estado_neumaticos`, `mantenimiento`, `is_active`, `created_at`, `updated_at`) VALUES
('ABC123', 'Toyota', 'Corolla', '2026-03-10', 80, 'Completo', 1, '2025-10-02 18:50:58', '2025-10-02 18:50:58'),
('CDE123', 'Ford', 'Focus', '2025-12-20', 60, 'Básico', 1, '2025-10-02 18:50:58', '2025-10-02 18:50:58'),
('FGH123', 'Chevrolet', 'Cruze', '2026-01-15', 90, 'Completo', 1, '2025-10-02 18:50:58', '2025-10-02 18:50:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `empleados_id_grupo_trabajo_foreign` (`id_grupo_trabajo`);

--
-- Indices de la tabla `grupo_trabajos`
--
ALTER TABLE `grupo_trabajos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupo_trabajos_patente_vehiculo_foreign` (`patente_vehiculo`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `orden_trabajos`
--
ALTER TABLE `orden_trabajos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orden_trabajos_id_grupo_trabajo_foreign` (`id_grupo_trabajo`),
  ADD KEY `orden_trabajos_id_cliente_foreign` (`id_cliente`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`patente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `grupo_trabajos`
--
ALTER TABLE `grupo_trabajos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `orden_trabajos`
--
ALTER TABLE `orden_trabajos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_id_grupo_trabajo_foreign` FOREIGN KEY (`id_grupo_trabajo`) REFERENCES `grupo_trabajos` (`id`);

--
-- Filtros para la tabla `grupo_trabajos`
--
ALTER TABLE `grupo_trabajos`
  ADD CONSTRAINT `grupo_trabajos_patente_vehiculo_foreign` FOREIGN KEY (`patente_vehiculo`) REFERENCES `vehiculos` (`patente`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `orden_trabajos`
--
ALTER TABLE `orden_trabajos`
  ADD CONSTRAINT `orden_trabajos_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `orden_trabajos_id_grupo_trabajo_foreign` FOREIGN KEY (`id_grupo_trabajo`) REFERENCES `grupo_trabajos` (`id`);

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
