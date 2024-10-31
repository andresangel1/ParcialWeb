-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 09:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tu-shirt`
--

-- --------------------------------------------------------

--
-- Table structure for table `colores`
--

CREATE TABLE `colores` (
  `id_color` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colores_has_productos`
--

CREATE TABLE `colores_has_productos` (
  `colores_id_color` int(11) NOT NULL,
  `productos_id_producto` int(11) NOT NULL,
  `id_colores_has_productos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disenos`
--

CREATE TABLE `disenos` (
  `id_diseno` int(11) NOT NULL,
  `diseno` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `colores_has_productos_id_colores_has_productos` int(11) NOT NULL,
  `fk_id_productos_has_tallescol` int(11) NOT NULL,
  `fk_id_productos_has_diseno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fk_tipo_productos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `fk_tipo_productos`) VALUES
(1, 'algui', 1);

-- --------------------------------------------------------

--
-- Table structure for table `productos_has_diseno`
--

CREATE TABLE `productos_has_diseno` (
  `id_productos_has_diseno` int(11) NOT NULL,
  `fk_producto` int(11) NOT NULL,
  `fk_diseno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos_has_talles`
--

CREATE TABLE `productos_has_talles` (
  `fk_id_producto` int(11) NOT NULL,
  `fk_id_talle` int(11) NOT NULL,
  `id_productos_has_tallescol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `talles`
--

CREATE TABLE `talles` (
  `id_talle` int(11) NOT NULL,
  `talle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_productos`
--

CREATE TABLE `tipo_productos` (
  `id_tipo_productos` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tipo_productos`
--

INSERT INTO `tipo_productos` (`id_tipo_productos`, `tipo`) VALUES
(1, 'algo');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `tipo` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `mail` varchar(90) DEFAULT NULL,
  `contrasena` varchar(90) DEFAULT NULL,
  `fk_tipo_usuario` int(11) NOT NULL,
  `fk_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id_color`);

--
-- Indexes for table `colores_has_productos`
--
ALTER TABLE `colores_has_productos`
  ADD PRIMARY KEY (`id_colores_has_productos`),
  ADD KEY `id_color` (`colores_id_color`),
  ADD KEY `id_producto` (`productos_id_producto`);

--
-- Indexes for table `disenos`
--
ALTER TABLE `disenos`
  ADD PRIMARY KEY (`id_diseno`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_usuarios` (`fk_id_usuario`),
  ADD KEY `id_producto_has_diseno` (`fk_id_productos_has_diseno`),
  ADD KEY `id_producto_has_talle` (`fk_id_productos_has_tallescol`),
  ADD KEY `id_colores_has_productos` (`colores_has_productos_id_colores_has_productos`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_tipo_producto` (`fk_tipo_productos`);

--
-- Indexes for table `productos_has_diseno`
--
ALTER TABLE `productos_has_diseno`
  ADD PRIMARY KEY (`id_productos_has_diseno`),
  ADD KEY `id_diseño` (`fk_diseno`),
  ADD KEY `id_productoo` (`fk_producto`);

--
-- Indexes for table `productos_has_talles`
--
ALTER TABLE `productos_has_talles`
  ADD PRIMARY KEY (`id_productos_has_tallescol`),
  ADD KEY `id_productooo` (`fk_id_producto`),
  ADD KEY `id_talle` (`fk_id_talle`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indexes for table `talles`
--
ALTER TABLE `talles`
  ADD PRIMARY KEY (`id_talle`);

--
-- Indexes for table `tipo_productos`
--
ALTER TABLE `tipo_productos`
  ADD PRIMARY KEY (`id_tipo_productos`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `mail_UNIQUE` (`mail`),
  ADD KEY `id_tipo_usuario` (`fk_tipo_usuario`),
  ADD KEY `id_rol` (`fk_rol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colores`
--
ALTER TABLE `colores`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colores_has_productos`
--
ALTER TABLE `colores_has_productos`
  MODIFY `id_colores_has_productos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disenos`
--
ALTER TABLE `disenos`
  MODIFY `id_diseno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productos_has_diseno`
--
ALTER TABLE `productos_has_diseno`
  MODIFY `id_productos_has_diseno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productos_has_talles`
--
ALTER TABLE `productos_has_talles`
  MODIFY `id_productos_has_tallescol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_productos`
--
ALTER TABLE `tipo_productos`
  MODIFY `id_tipo_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `colores_has_productos`
--
ALTER TABLE `colores_has_productos`
  ADD CONSTRAINT `colores_has_productos_ibfk_1` FOREIGN KEY (`colores_id_color`) REFERENCES `colores` (`id_color`),
  ADD CONSTRAINT `id_producto` FOREIGN KEY (`productos_id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Constraints for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `id_colores_has_productos` FOREIGN KEY (`colores_has_productos_id_colores_has_productos`) REFERENCES `colores_has_productos` (`id_colores_has_productos`),
  ADD CONSTRAINT `id_producto_has_diseno` FOREIGN KEY (`fk_id_productos_has_diseno`) REFERENCES `productos_has_diseno` (`id_productos_has_diseno`),
  ADD CONSTRAINT `id_producto_has_talle` FOREIGN KEY (`fk_id_productos_has_tallescol`) REFERENCES `productos_has_talles` (`id_productos_has_tallescol`),
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `id_tipo_producto` FOREIGN KEY (`fk_tipo_productos`) REFERENCES `tipo_productos` (`id_tipo_productos`);

--
-- Constraints for table `productos_has_diseno`
--
ALTER TABLE `productos_has_diseno`
  ADD CONSTRAINT `id_diseño` FOREIGN KEY (`fk_diseno`) REFERENCES `disenos` (`id_diseno`),
  ADD CONSTRAINT `id_productoo` FOREIGN KEY (`fk_producto`) REFERENCES `productos` (`id_producto`);

--
-- Constraints for table `productos_has_talles`
--
ALTER TABLE `productos_has_talles`
  ADD CONSTRAINT `id_productooo` FOREIGN KEY (`fk_id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `id_talle` FOREIGN KEY (`fk_id_talle`) REFERENCES `talles` (`id_talle`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id_rol` FOREIGN KEY (`fk_rol`) REFERENCES `roles` (`id_rol`),
  ADD CONSTRAINT `id_tipo_usuario` FOREIGN KEY (`fk_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
