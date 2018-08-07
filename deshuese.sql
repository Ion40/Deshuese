/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 100131
Source Host           : localhost:3306
Source Database       : deshuese

Target Server Type    : MYSQL
Target Server Version : 100131
File Encoding         : 65001

Date: 2018-08-07 07:51:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for deshuese
-- ----------------------------
DROP TABLE IF EXISTS `deshuese`;
CREATE TABLE `deshuese` (
  `IdDeshuese` int(11) NOT NULL AUTO_INCREMENT,
  `No_DH` int(11) DEFAULT NULL,
  `Materia_Prima` varchar(255) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Prec_Ant_Kilo` double DEFAULT NULL,
  `Prec_Act_Kilo` double DEFAULT NULL,
  `Calculo_Base` double DEFAULT NULL,
  `Rendimiento_B` double DEFAULT NULL,
  `Rendimiento_D` double DEFAULT NULL,
  `Kilos` double DEFAULT NULL,
  `Valor_Total_Mercado` double DEFAULT NULL,
  `Costo_Unitario` double DEFAULT NULL,
  `Total_Actual` double DEFAULT NULL,
  PRIMARY KEY (`IdDeshuese`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of deshuese
-- ----------------------------
INSERT INTO `deshuese` VALUES ('1', '8775', '86001', 'Grasa', null, '35.74', '34', '10.72', '6.09', '299.64', '10187.76', '35.737', '10708.279638');
INSERT INTO `deshuese` VALUES ('2', '8775', '86002', 'Cuero', null, '35.74', '34', '9.45', '5.37', '264.228', '8983.752', '35.735', '9442.276134');
INSERT INTO `deshuese` VALUES ('3', '8775', '86003', 'Posta de cerdo', null, '80.89', '77', '35.04', '45.07', '979.732', '75439.364', '80.888', '79248.302674');
INSERT INTO `deshuese` VALUES ('4', '8775', '86004', 'Posta p/bacon', null, '80.89', '77', '13.58', '17.46', '379.544', '29224.888', '80.888', '30700.584972');
INSERT INTO `deshuese` VALUES ('5', '8775', '86011', 'Recorte', null, '58.1', '55.5', '0.65', '0.6', '18.16', '1007.88', '58.095', '1055.00292');
INSERT INTO `deshuese` VALUES ('6', '8775', '86013', 'Posta especial', null, '84.65', '80.594', '18.89', '25.42', '528.002', '42553.793', '84.653', '44696.957044');
INSERT INTO `deshuese` VALUES ('7', '8798', '86001', 'Grasa', null, '37.46', '34', '10.94', '6.55', '375.458', '12765.572', '37.456', '14063.320289999998');
INSERT INTO `deshuese` VALUES ('8', '8798', '86002', 'Cuero', null, '37.45', '34', '9.54', '5.71', '327.334', '11129.356', '37.453', '12259.779978');
INSERT INTO `deshuese` VALUES ('9', '8798', '86003', 'Posta de cerdo', null, '84.8', '77', '19.82', '26.86', '680.092', '52367.084', '84.798', '57670.348548');
INSERT INTO `deshuese` VALUES ('10', '8798', '86004', 'Posta p/bacon', null, '84.83', '77', '3.85', '5.22', '132.114', '10172.778', '84.834', '11207.714795999998');
INSERT INTO `deshuese` VALUES ('11', '8798', '86011', 'Recorte', null, '61.05', '55.5', '0.73', '0.71', '24.97', '1385.835', '61.05', '1524.4209779999999');
INSERT INTO `deshuese` VALUES ('12', '8798', '86013', 'Posta especial', null, '88.75', '80.591', '7.94', '11.26', '272.4', '21952.988', '88.752', '24176.028467999997');
INSERT INTO `deshuese` VALUES ('13', '8798', '86108', 'Posta de paleta y pierna cerdo nacional/expo.', null, '77.64', '70.486', '35.2', '43.69', '1208.202', '85161.326', '77.641', '93805.56694199999');
INSERT INTO `deshuese` VALUES ('14', '8774', '86001', 'Grasa', null, '36.46', '34', '12.08', '7', '344.132', '11700.488', '36.46', '12547.038700000001');
INSERT INTO `deshuese` VALUES ('15', '8774', '86002', 'Cuero', null, '36.48', '34', '8.81', '5.11', '251.062', '8536.108', '36.482', '9159.338251000001');
INSERT INTO `deshuese` VALUES ('16', '8774', '86003', 'Posta de cerdo', null, '82.62', '77', '39.03', '51.27', '1112.3', '85647.1', '82.62', '91898.09630700003');
INSERT INTO `deshuese` VALUES ('17', '8774', '86011', 'Recorte', null, '59.22', '55.5', '0.54', '0.51', '15.436', '856.698', '59.221', '914.141391');
INSERT INTO `deshuese` VALUES ('18', '8774', '86013', 'Posta especial', null, '86.48', '80.591', '26.25', '36.1', '748.192', '60297.541', '86.484', '64706.87101');
INSERT INTO `deshuese` VALUES ('31', '8784', '86001', 'Grasa', '36.46', '38.42', '34', '11.1', '6.82', '292.376', '9940.784', '38.421', '11233.294974');
INSERT INTO `deshuese` VALUES ('32', '8784', '86002', 'Cuero', '36.48', '38.41', '34', '9.12', '5.6', '240.166', '8165.644', '38.406', '9223.81992');
INSERT INTO `deshuese` VALUES ('33', '8784', '86003', 'Posta de cerdo', '82.62', '86.99', '77', '29.3', '40.76', '771.8', '59428.6', '86.987', '67136.23213199999');
INSERT INTO `deshuese` VALUES ('34', '8784', '86011', 'Recorte', '59.22', '63.49', '55.5', '0.28', '0.28', '7.264', '403.152', '63.49', '461.1909960000001');
INSERT INTO `deshuese` VALUES ('35', '8784', '86013', 'Posta especial', '86.48', '91.06', '80.591', '5.17', '7.53', '136.2', '10976.494', '91.063', '12402.743571000003');
INSERT INTO `deshuese` VALUES ('36', '8784', '86108', 'Posta de paleta y pierna cerdo nacional/expo.', null, '79.63', '70.486', '30.64', '39.01', '806.957', '56879.171', '79.625', '64253.78840699999');

-- ----------------------------
-- Table structure for distribucionrecursos
-- ----------------------------
DROP TABLE IF EXISTS `distribucionrecursos`;
CREATE TABLE `distribucionrecursos` (
  `Id_Distribucion` int(11) NOT NULL AUTO_INCREMENT,
  `Masa_Obtenida` double DEFAULT NULL,
  `Materia_Prima` varchar(255) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Valor_Kg` double DEFAULT NULL,
  `Porcentaje_Apli` double DEFAULT NULL,
  `Fecha_Distribucion` date DEFAULT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_Distribucion`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of distribucionrecursos
-- ----------------------------
INSERT INTO `distribucionrecursos` VALUES ('1', '300', '86001', 'Grasa', '55', '0.06', '2018-08-04', '2018-08-04 00:00:00');
INSERT INTO `distribucionrecursos` VALUES ('2', '300', '86002', 'Cuero', '25', '0.03', '2018-08-04', '2018-08-04 00:00:00');
INSERT INTO `distribucionrecursos` VALUES ('3', '300', '86003', 'Posta de cerdo', '45', '0.05', '2018-08-04', '2018-08-04 00:00:00');
INSERT INTO `distribucionrecursos` VALUES ('4', '300', '86004', 'Posta p/bacon', '25', '0.03', '2018-08-04', '2018-08-04 00:00:00');
INSERT INTO `distribucionrecursos` VALUES ('5', '300', '86011', 'Recorte', '50', '0.06', '2018-08-04', '2018-08-04 00:00:00');
INSERT INTO `distribucionrecursos` VALUES ('6', '300', '86013', 'Posta especial', '50', '0.06', '2018-08-04', '2018-08-04 00:00:00');
INSERT INTO `distribucionrecursos` VALUES ('7', '300', '86015', 'Pierna fresca(c/h y s/cuero)', '25', '0.03', '2018-08-04', '2018-08-04 00:00:00');
INSERT INTO `distribucionrecursos` VALUES ('8', '300', '86055', 'Pierna fresca(s/h)p/ahumar', '25', '0.03', '2018-08-04', '2018-08-04 00:00:00');

-- ----------------------------
-- Table structure for encabezado_deshuese
-- ----------------------------
DROP TABLE IF EXISTS `encabezado_deshuese`;
CREATE TABLE `encabezado_deshuese` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `No_DH` varchar(255) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Descripcion_DH` varchar(255) DEFAULT NULL,
  `Precio_Bruto` double DEFAULT NULL,
  `Costo_Total` double DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of encabezado_deshuese
-- ----------------------------
INSERT INTO `encabezado_deshuese` VALUES ('1', '8775', '2018-07-31', 'descripcion', '2795.75', '175833.82');
INSERT INTO `encabezado_deshuese` VALUES ('2', '8798', '2018-07-12', 'Deshuese de cerdo y cortes especiales', '3432.29', '214707.18');
INSERT INTO `encabezado_deshuese` VALUES ('3', '8774', '2018-06-25', 'Deshuese de cerdo y cortes especiales', '2849.97', '179243.41');
INSERT INTO `encabezado_deshuese` VALUES ('11', '8784', '2018-07-04', 'xvxcvcxvcx', '2634.01', '164711.07');

-- ----------------------------
-- Table structure for materiaprima
-- ----------------------------
DROP TABLE IF EXISTS `materiaprima`;
CREATE TABLE `materiaprima` (
  `Id_MP` int(11) NOT NULL AUTO_INCREMENT,
  `Materia_prima` int(11) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Estado` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Id_MP`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of materiaprima
-- ----------------------------
INSERT INTO `materiaprima` VALUES ('1', '86001', 'Grasa', '');
INSERT INTO `materiaprima` VALUES ('2', '86002', 'Cuero', '');
INSERT INTO `materiaprima` VALUES ('3', '86003', 'Posta de cerdo', '');
INSERT INTO `materiaprima` VALUES ('4', '86004', 'Posta p/bacon', '');
INSERT INTO `materiaprima` VALUES ('5', '86011', 'Recorte', '');
INSERT INTO `materiaprima` VALUES ('6', '86013', 'Posta especial', '');
INSERT INTO `materiaprima` VALUES ('7', '86015', 'Pierna fresca(c/h y s/cuero)', '');
INSERT INTO `materiaprima` VALUES ('8', '86055', 'Pierna fresca(s/h)p/ahumar', '');
INSERT INTO `materiaprima` VALUES ('9', '86056', 'Pierna fresca(s/h)p/ahumar', '');
INSERT INTO `materiaprima` VALUES ('10', '86108', 'Posta de paleta y pierna cerdo nacional/expo.', '');
INSERT INTO `materiaprima` VALUES ('11', null, 'Desperdicio', '');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(255) DEFAULT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Permiso` int(11) DEFAULT NULL,
  `FechaRegistro` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Estado` bit(1) DEFAULT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'sa', 'Administrador', 'abe6db4c9f5484fae8d79f2e868a673c', '0', '2018-07-24 11:25:29', '');

-- ----------------------------
-- View structure for view_deshuese
-- ----------------------------
DROP VIEW IF EXISTS `view_deshuese`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`  VIEW `view_deshuese` AS SELECT
	ed.No_DH,
	ed.Fecha,
	ed.Descripcion_DH,
	ed.Precio_Bruto as Masa_Deshuesada,
	ed.Costo_Total
FROM
	encabezado_deshuese ed
GROUP BY ed.No_DH
ORDER BY Fecha desc ;

-- ----------------------------
-- View structure for view_distribucion
-- ----------------------------
DROP VIEW IF EXISTS `view_distribucion`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`  VIEW `view_distribucion` AS SELECT
	Fecha_Distribucion,
	Masa_Obtenida,
	SUM(Valor_Kg) AS Valor_Kg,
	SUM(Porcentaje_Apli) AS Porcentaje_Apli
FROM
	distribucionrecursos
GROUP BY
	Fecha_Distribucion
ORDER BY
	Fecha_Distribucion DESC ;

-- ----------------------------
-- View structure for view_ultimodeshuese
-- ----------------------------
DROP VIEW IF EXISTS `view_ultimodeshuese`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`  VIEW `view_ultimodeshuese` AS SELECT
	No_DH,
	Materia_Prima,
  Prec_Ant_Kilo,
	Prec_Act_Kilo
FROM
	deshuese
WHERE
	No_DH = (select No_DH from deshuese GROUP BY No_DH ORDER BY IdDeshuese Desc limit 1,1)
ORDER BY
	IdDeshuese ,Materia_Prima DESC ;

-- ----------------------------
-- Procedure structure for usp_ReporteDistRecursos
-- ----------------------------
DROP PROCEDURE IF EXISTS `usp_ReporteDistRecursos`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `usp_ReporteDistRecursos`(fecha VARCHAR(50))
BEGIN
SELECT
	Masa_Obtenida,
	Materia_Prima,
	Descripcion,
	Valor_Kg,
	Porcentaje_Apli,
	Fecha_Distribucion,
	Fecha_Creacion,
  (SELECT SUM(Valor_Kg) from distribucionrecursos) as ValorKg,
  ROUND((SELECT SUM(Porcentaje_Apli) from distribucionrecursos),2)as Porcentaje
FROM
	distribucionrecursos
WHERE
	Fecha_Distribucion = fecha
GROUP BY
Materia_Prima;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for usp_ReporteXNoDH
-- ----------------------------
DROP PROCEDURE IF EXISTS `usp_ReporteXNoDH`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `usp_ReporteXNoDH`(Num VARCHAR(10))
BEGIN
SELECT
	ed.No_DH,
ed.Fecha,
ed.Descripcion_DH,
ed.Precio_Bruto,
ed.Costo_Total,
d.Materia_Prima,
d.Descripcion,
d.Prec_Ant_Kilo,
d.Prec_Act_Kilo,
d.Calculo_Base,
d.Rendimiento_B,
d.Rendimiento_D,
d.Kilos,
d.Valor_Total_Mercado,
d.Costo_Unitario,
d.Total_Actual
FROM
	encabezado_deshuese ed
INNER JOIN deshuese d ON ed.No_DH = d.No_DH
WHERE
	ed.No_DH = Num;
END
;;
DELIMITER ;
