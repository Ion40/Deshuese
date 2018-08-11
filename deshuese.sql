/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 100131
Source Host           : localhost:3306
Source Database       : deshuese

Target Server Type    : MYSQL
Target Server Version : 100131
File Encoding         : 65001

Date: 2018-08-11 10:49:36
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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of deshuese
-- ----------------------------
INSERT INTO `deshuese` VALUES ('1', '8775', '86001', 'Grasa', '35.42', '35.74', '34', '10.72', '6.09', '299.64', '10187.76', '35.737', '10708.279638');
INSERT INTO `deshuese` VALUES ('2', '8775', '86002', 'Cuero', '35.38', '35.74', '34', '9.45', '5.37', '264.228', '8983.752', '35.735', '9442.276134');
INSERT INTO `deshuese` VALUES ('3', '8775', '86003', 'Posta de cerdo', '80.14', '80.89', '77', '35.04', '45.07', '979.732', '75439.364', '80.888', '79248.302674');
INSERT INTO `deshuese` VALUES ('4', '8775', '86004', 'Posta p/bacon', '80.13', '80.89', '77', '13.58', '17.46', '379.544', '29224.888', '80.888', '30700.584972');
INSERT INTO `deshuese` VALUES ('5', '8775', '86011', 'Recorte', '58.47', '58.1', '55.5', '0.65', '0.6', '18.16', '1007.88', '58.095', '1055.00292');
INSERT INTO `deshuese` VALUES ('6', '8775', '86013', 'Posta especial', '83.87', '84.65', '80.594', '18.89', '25.42', '528.002', '42553.793', '84.653', '44696.957044');
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
INSERT INTO `deshuese` VALUES ('37', '8785', '86001', 'Grasa', '38.42', '37.7', '34', '10.5', '6.33', '337.322', '11468.948', '37.702', '12717.7929');
INSERT INTO `deshuese` VALUES ('38', '8785', '86002', 'Cuero', '38.41', '37.66', '34', '6.93', '4.17', '222.46', '7563.64', '37.661', '8378.0721');
INSERT INTO `deshuese` VALUES ('39', '8785', '86003', 'Posta de cerdo', '86.99', '85.32', '77', '29.83', '40.68', '957.94', '73761.38', '85.32', '81731.40839999999');
INSERT INTO `deshuese` VALUES ('40', '8785', '86004', 'Posta p/bacon', null, '85.32', '77', '3.93', '5.36', '126.212', '9718.324', '85.324', '10768.936800000003');
INSERT INTO `deshuese` VALUES ('41', '8785', '86011', 'Recorte', '63.49', '61.46', '55.5', '0.51', '0.5', '16.344', '907.092', '61.464', '1004.5649999999999');
INSERT INTO `deshuese` VALUES ('42', '8785', '86013', 'Posta especial', '91.06', '89.32', '80.591', '8.48', '12.11', '272.4', '21952.988', '89.319', '24330.5643');
INSERT INTO `deshuese` VALUES ('43', '8785', '86108', 'Posta de paleta y pierna cerdo nacional/expo.', '79.63', '78.09', '70.486', '24.71', '30.85', '793.678', '55943.188', '78.094', '61981.660500000005');
INSERT INTO `deshuese` VALUES ('51', '8772', '86001', 'Grasa', '37.7', '35.42', '34', '9.22', '5.19', '270.13', '9184.42', '35.415', '9566.679252000002');
INSERT INTO `deshuese` VALUES ('52', '8772', '86002', 'Cuero', '37.66', '35.38', '34', '8.32', '4.68', '243.798', '8289.132', '35.384', '8626.600944');
INSERT INTO `deshuese` VALUES ('53', '8772', '86003', 'Posta de cerdo', '85.32', '80.14', '77', '33.21', '42.32', '973.376', '74949.952', '80.142', '78008.066656');
INSERT INTO `deshuese` VALUES ('54', '8772', '86004', 'Posta p/bacon', '85.32', '80.13', '77', '12.95', '16.5', '379.544', '29224.888', '80.134', '30414.2982');
INSERT INTO `deshuese` VALUES ('55', '8772', '86011', 'Recorte', '61.46', '58.47', '55.5', '0.39', '0.36', '11.35', '629.925', '58.466', '663.5846879999999');
INSERT INTO `deshuese` VALUES ('56', '8772', '86013', 'Posta especial', '89.32', '83.87', '80.591', '21.73', '28.98', '636.962', '51333.405', '83.865', '53418.567384');
INSERT INTO `deshuese` VALUES ('57', '8772', '86108', 'Posta de paleta y pierna cerdo nacional/expo.', '78.09', '79.98', '77', '1.55', '1.97', '45.4', '3495.8', '79.984', '3631.2828759999998');
INSERT INTO `deshuese` VALUES ('58', '8831', '86001', 'Grasa', '35.42', '37.05', '34', '11.25', '6.49', '350.942', '11932.028', '37.053', '13003.593097');
INSERT INTO `deshuese` VALUES ('59', '8831', '86002', 'Cuero', '35.38', '37.05', '34', '8.25', '4.76', '257.418', '8752.212', '37.05', '9537.304027999999');
INSERT INTO `deshuese` VALUES ('60', '8831', '86003', 'Posta de cerdo', '80.14', '83.91', '77', '35.38', '46.24', '1104.128', '85017.856', '83.911', '92648.096272');
INSERT INTO `deshuese` VALUES ('61', '8831', '86004', 'Posta p/bacon', '80.13', '83.92', '77', '12.7', '16.6', '396.342', '30518.334', '83.918', '33260.345980000006');
INSERT INTO `deshuese` VALUES ('62', '8831', '86011', 'Recorte', '58.47', '60.61', '55.5', '1.09', '1.03', '34.05', '1889.775', '60.609', '2063.7443590000003');
INSERT INTO `deshuese` VALUES ('63', '8831', '86013', 'Posta especial', '83.87', '87.81', '80.591', '15.64', '21.39', '488.05', '39332.438', '87.814', '42857.759067000006');
INSERT INTO `deshuese` VALUES ('64', '8831', '86108', 'Posta de paleta y pierna cerdo nacional/expo.', '79.98', '76.79', '70.486', '2.91', '3.48', '90.8', '6400.129', '76.791', '6972.650844');

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
-- Table structure for distribucion_contable
-- ----------------------------
DROP TABLE IF EXISTS `distribucion_contable`;
CREATE TABLE `distribucion_contable` (
  `Id_Dis_Rec` int(11) NOT NULL AUTO_INCREMENT,
  `Salario` double DEFAULT NULL,
  `Vacaciones` double DEFAULT NULL,
  `TreceavoMes` double DEFAULT NULL,
  `Inatec` double DEFAULT NULL,
  `Inss` double DEFAULT NULL,
  `Costo_MOD` double DEFAULT NULL,
  `Gasto_Indirecto_Libra` double DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  PRIMARY KEY (`Id_Dis_Rec`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of distribucion_contable
-- ----------------------------
INSERT INTO `distribucion_contable` VALUES ('1', '4000', '100', '100', '80', '760', '5040', '0.39', '2018-08-09');
INSERT INTO `distribucion_contable` VALUES ('2', '3935', '98.375', '98.375', '78.7', '747.65', '4958.1', '0.39', '2018-08-10');

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
  `Gasto_MOD` double DEFAULT NULL,
  `GI` double DEFAULT NULL,
  `Id_Dis_Cont` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of encabezado_deshuese
-- ----------------------------
INSERT INTO `encabezado_deshuese` VALUES ('1', '8775', '2018-07-31', 'descripcion', '2795.75', '175833.82', null, null, null);
INSERT INTO `encabezado_deshuese` VALUES ('2', '8798', '2018-07-12', 'Deshuese de cerdo y cortes especiales', '3432.29', '214707.18', null, null, null);
INSERT INTO `encabezado_deshuese` VALUES ('3', '8774', '2018-06-25', 'Deshuese de cerdo y cortes especiales', '2849.97', '179243.41', null, null, null);
INSERT INTO `encabezado_deshuese` VALUES ('11', '8784', '2018-07-04', 'xvxcvcxvcx', '2634.01', '164711.07', null, null, null);
INSERT INTO `encabezado_deshuese` VALUES ('12', '8785', '2018-07-05', 'pierna de cerdo con hueso importada', '3211.77', '200913', '5040', '1063.2788400000002', '1');
INSERT INTO `encabezado_deshuese` VALUES ('13', '8772', '2018-06-21', 'Liq pierna de cerdo con hueso importado', '2930.83', '184329.08', '5040', '998.6184000000001', '1');
INSERT INTO `encabezado_deshuese` VALUES ('14', '8831', '2018-08-07', 'Liq pierna de cerdo con hueso importado', '3120.84', '200363.53', '4958.1', '1061.4747000000002', '2');

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
-- Procedure structure for usp_ReportDeshFechas
-- ----------------------------
DROP PROCEDURE IF EXISTS `usp_ReportDeshFechas`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `usp_ReportDeshFechas`(fecha1 VARCHAR(50), fecha2 VARCHAR(50))
BEGIN
SELECT
	ed.No_DH,
	ed.Fecha,
	ed.Descripcion_DH,
	ed.Precio_Bruto,
	ed.Costo_Total,
  COUNT(*) as Cantidad_DH
FROM
	encabezado_deshuese ed
WHERE
	ed.Fecha BETWEEN fecha1
AND fecha2
GROUP BY ed.No_DH
ORDER BY ed.Fecha;
END
;;
DELIMITER ;

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
ed.Gasto_MOD,
ed.GI,
d.Materia_Prima,
d.Descripcion,
d.Prec_Ant_Kilo,
d.Prec_Act_Kilo,
(d.Prec_Act_Kilo - d.Prec_Ant_Kilo) as Dif,
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
