-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2019 a las 16:19:02
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `morosidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_doc` int(11) NOT NULL,
  `doc_casuis` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `doc_contenido` longblob,
  `doc_fecha` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `doc_go_u` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `doc_im` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `doc_nombre` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id_doc`, `doc_casuis`, `doc_contenido`, `doc_fecha`, `doc_go_u`, `doc_im`, `doc_nombre`) VALUES
(1, 'Documento de Ejemplo', 0x433a78616d7070096d70706870393446452e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Ejemplo.pdf'),
(2, 'CBCAA  Error: ORA-01555: snapshot', 0x433a78616d7070096d70706870343432422e746d702e6170706c69636174696f6e2f706466, '23-08-2018', 'u584580', 'CH00719986', 'CBCAA-Snapshot.pdf'),
(6, 'CBDCE Error', 0x433a78616d7070096d70706870373944352e746d702e6170706c69636174696f6e2f706466, '23-08-2018', 'u584580', 'CH00720062', 'CBDCE.pdf'),
(7, 'CBCAA Error fecha vacia', 0x433a78616d7070096d70706870394541362e746d702e6170706c69636174696f6e2f706466, '23-08-2018', 'u584580', '', 'CBCAA-Error-Obtener-lineas-fecha.pdf'),
(8, 'Cambio nombre Gerencia', 0x433a78616d7070096d70706870324434462e746d702e6170706c69636174696f6e2f706466, '23-08-2018', 'u584580', 'CH00719304', 'CAMBIO-NOMBRE-GERENCIAS.pdf'),
(9, 'IPAGOS NO LLEGAN A BSCS', 0x433a78616d7070096d70706870394233412e746d702e6170706c69636174696f6e2f706466, '24-08-2018', 'u584580', '', 'IPAGO NO LLEGA A BSCS.pdf'),
(10, 'Error Abrir convenio de pago - IPAGO Pend- Mora Susp', 0x433a78616d7070096d70706870413935392e746d702e6170706c69636174696f6e2f706466, '24-08-2018', 'u584580', 'IM02382249 ', 'ERRO AL ABRIR CONVENIO CON MORA SUSPENDIDA IPAGO PENDIENTE.pdf'),
(12, 'VERAZ Error ARCHIVO ALIANZA', 0x433a78616d7070096d707068703933422e746d702e6170706c69636174696f6e2f706466, '06-09-2018', 'u584580', '', 'CBMVER_GEN_MIER_ARCHIVOALIANZA.pdf'),
(13, 'CBRPOL PASO A PASO ', 0x433a78616d7070096d70706870353439452e746d702e6170706c69636174696f6e2f706466, '19-10-2018', 'u584580', '', 'CBRPOL.pdf'),
(14, 'CBMDH PASO A PASO', 0x433a78616d7070096d70706870373933442e746d702e6170706c69636174696f6e2f706466, '22-10-2018', 'u584580', '', 'CBMDH PASO A PASO.pdf'),
(17, 'CBCTRLREHAB PASO A PASO', 0x433a78616d7070096d70706870363441302e746d702e6170706c69636174696f6e2f706466, '24-10-2018', 'u584580', '', 'CBCTRLREHAB.pdf'),
(20, 'CBCAA PASO A PASO', 0x433a78616d7070096d70706870323136392e746d702e6170706c69636174696f6e2f706466, '24-10-2018', 'u584580', '', 'CBCAA.pdf'),
(21, 'CBCFP PASO A PASO', 0x433a78616d7070096d70706870314135302e746d702e6170706c69636174696f6e2f706466, '24-10-2018', 'u584580', '', 'CBCFP.pdf'),
(22, 'CBDFR PASO A PASO', 0x433a78616d7070096d70706870463238312e746d702e6170706c69636174696f6e2f706466, '24-10-2018', 'u584580', '', 'CBDFR.pdf'),
(23, 'CBDCE PASO A PASO', 0x433a78616d7070096d70706870423932392e746d702e6170706c69636174696f6e2f706466, '24-10-2018', 'u584580', '', 'CBDCE.pdf'),
(24, 'CBDESIPAGO PASO A PASO', 0x433a78616d7070096d70706870383330312e746d702e6170706c69636174696f6e2f706466, '24-10-2018', 'u584580', '', 'CBDESIPAGO.pdf'),
(25, 'CBDRZ PASO A PASO', 0x433a78616d7070096d70706870423544412e746d702e6170706c69636174696f6e2f706466, '24-10-2018', 'u584580', '', 'CBDRZ.pdf'),
(26, 'CBGAT PASO A PASO', 0x2e, '24-10-2018', 'u584580', '', 'CBGAT.pdf'),
(27, 'DAR DE BAJA CONTRATO CON DEUDA VENCIDA', 0x433a78616d7070096d70706870394535372e746d702e6170706c69636174696f6e2f706466, '06-11-2018', 'u584580', '', 'DAR_DE_BAJA_CONTRATO_CON_DEUDA_VENCIDA.pdf'),
(28, 'QUIERE SUSPENDER SERV CON LINEA PORTADA', 0x433a78616d7070096d70706870333136452e746d702e6170706c69636174696f6e2f706466, '06-11-2018', 'u584580', '', 'QUIERE_SUSPENDER_SERVICIO_CON_LINEA_PORTADA.pdf'),
(29, 'ARCHIVO PAIS VERAZ (DOM Y MIER)', 0x2e, '07-11-2018', 'u584580', '', 'ARCHIVOS_PAIS_VERAZ.pdf'),
(30, 'NUEVA TASA DE INTERES POR MORA', 0x433a78616d7070096d70706870323633422e746d702e6170706c69636174696f6e2f706466, '07-11-2018', 'u584580', '', 'NUEVA_TASA_DE_INTERES_POR_MORA.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_fija`
--

CREATE TABLE `documentos_fija` (
  `id_doc_f` int(11) NOT NULL,
  `doc_casuis_f` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `doc_contenido_f` longblob,
  `doc_fecha_f` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `doc_go_u_f` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `doc_im_f` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `doc_nombre_f` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `documentos_fija`
--

INSERT INTO `documentos_fija` (`id_doc_f`, `doc_casuis_f`, `doc_contenido_f`, `doc_fecha_f`, `doc_go_u_f`, `doc_im_f`, `doc_nombre_f`) VALUES
(5, 'TYR Basico', 0x433a78616d7070096d70706870453332372e746d702e6170706c69636174696f6e2f706466, '21-08-2018', 'u584580', '', 'TYR_Basico.pdf'),
(6, 'Transmision de datos a terceros CTRL-M', 0x433a78616d7070096d70706870363631362e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Transmision de datos a terceros CONTROL-M.pdf'),
(7, 'Procedimiento - Archivos CyQ para IIBB', 0x433a78616d7070096d70706870333934322e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', 'IM02322208', 'Procedimiento - Archivos CyQ para IIBB.pdf'),
(9, 'Problemas con la Facturacion', 0x433a78616d7070096d70706870433535392e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Problemas con la facturacion.pdf'),
(10, 'PM_ALTA  ERROR_REGISTRACION', 0x433a78616d7070096d707068703833452e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'PM_ALTA  ERROR_REGISTRACION.pdf'),
(11, 'Pedidos en estado Enviado', 0x433a78616d7070096d707068704144352e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Pedidos en estado Enviado.pdf'),
(12, 'Pedidos completados no instanciados', 0x433a78616d7070096d70706870313031382e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', 'IM02363266', 'Pedidos completados no instanciados.pdf'),
(13, 'Para revivir un pedido mal cancelado', 0x433a78616d7070096d70706870443046332e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Para revivir un pedido mal cancelado.pdf'),
(14, 'Inconsistencia de parque SBL (assets repetidos)', 0x433a78616d7070096d70706870413931462e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', 'IM02369376', 'Inconsistencia de parque SBL (assets repetidos).pdf'),
(15, 'Incidente VERAZ', 0x433a78616d7070096d70706870413033442e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', 'IM02375688', 'Incidente VERAZ.pdf'),
(16, 'GEO parque inconsistente', 0x433a78616d7070096d70706870363538442e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', 'IM02371329 ', 'GEO parque inconsistente.pdf'),
(17, 'Documentacion - Cadena de Morosidad Masiva', 0x433a78616d7070096d70706870323532312e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Documentacion - Cadena de Morosidad Masiva.pdf'),
(18, 'Consultar el asset en point por numero de cliente', 0x433a78616d7070096d70706870363837302e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Consultar el asset en point por numero de cliente.pdf'),
(19, 'Consulta oficina girafe (SQL y Porta Siebel)', 0x433a78616d7070096d70706870383437462e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Consulta oficina girafe (SQL y Porta Siebel).pdf'),
(20, 'configurar el proxy en el mediador para que MIB sea mas rapido', 0x433a78616d7070096d70706870464131392e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'configurar el proxy en el mediador para que MIB sea mas rapido.pdf'),
(21, 'Completar a mano pedido de Siebel (de a uno por vez)', 0x433a78616d7070096d70706870333532412e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Completar a mano pedido de siebel (de a uno por vez).pdf'),
(22, 'Como rehabilitar una lÃ­nea en CCIP', 0x433a78616d7070096d70706870464538312e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Como rehabilitar una lÃ­nea en ccip.pdf'),
(23, 'Cancelar un pedido (Pendiente Cancelacion)', 0x433a78616d7070096d70706870463538302e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Cancelar un pedido (pendiente cancelacion).pdf'),
(24, 'Activar PM sin Request', 0x433a78616d7070096d70706870324436352e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Activar PM sin request.pdf'),
(25, 'OTRA(S) SOLICITUD(ES) PENDIENTE(S) ASOCIADA(S) A ESTE NUMERO', 0x433a78616d7070096d70706870333638392e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', '0105-OTRA(S) SOLICITUD(ES) PENDIENTE(S) ASOCIADA(S) A ESTE NUMERO.pdf'),
(26, 'Modificar la marca de popup en siebel', 0x433a78616d7070096d70706870394644392e746d702e6170706c69636174696f6e2f706466, '22-08-2018', 'u584580', '', 'Modificar la marca de popup en siebel.pdf'),
(29, 'Pedidos completados no instanciados', 0x433a78616d7070096d70706870393544462e746d702e6170706c69636174696f6e2f706466, '05-09-2018', 'u584580', 'IM02363266', 'Pedidos completados no instanciados.pdf'),
(30, 'IMs Popup paso a paso', 0x433a78616d7070096d70706870464637302e746d702e6170706c69636174696f6e2f706466, '07-09-2018', 'u584580', '', 'IMs Popup paso a paso.pdf'),
(31, 'Contingencia de la configuracion de la promo', 0x433a78616d7070096d70706870413145332e746d702e6170706c69636174696f6e2f706466, '14-09-2018', 'u584580', '', 'Contingencia de la configuracion de la promo.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gcm_devices`
--

CREATE TABLE `gcm_devices` (
  `id` int(11) NOT NULL,
  `gcm_regid` text,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `go_ctrl_hs`
--

CREATE TABLE `go_ctrl_hs` (
  `go_ctrl_id` int(10) UNSIGNED NOT NULL,
  `go_ctrl_u` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_ctrl_fran` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_ctrl_comp` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_ctrl_dia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_ctrl_cant` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_ctrl_cantfranco` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_ctrl_umodif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `go_hsextras`
--

CREATE TABLE `go_hsextras` (
  `go_h_id` int(10) UNSIGNED NOT NULL,
  `go_h_u` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `go_h_fi` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_h_ff` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_h_cod` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `go_h_cant` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_h_tarea` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_h_motivo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `go_h_tp` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_h_ch` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_ctrl_mes` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `go_h_fechacarga` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `go_hspendientes`
--

CREATE TABLE `go_hspendientes` (
  `go_hp_id` int(10) UNSIGNED NOT NULL,
  `go_hp_u` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_hp_cod` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `go_hp_cantidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_hp_fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `go_id` int(11) NOT NULL,
  `go_aplicativo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `go_doit` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `go_serv_af` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `go_ci_af` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `go_mail` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `go_fm` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `go_go` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `go_mail_user` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `go_soporte` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `go_desarrollo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `go_fecha` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`go_id`, `go_aplicativo`, `go_doit`, `go_serv_af`, `go_ci_af`, `go_mail`, `go_fm`, `go_go`, `go_mail_user`, `go_soporte`, `go_desarrollo`, `go_fecha`) VALUES
(1, 'GEO', 'GO_MOROSIDAD', '', '', 'Go_morosidad', 'Fija', 'MOROSIDAD', 'aviso_suspensiones', 'SLA - Sandra Ruiz - Ines Brandan', '', '10-08-2018'),
(46, 'ICE', 'APLF_COR_GO_ICE', '', '', 'Go_cobranzas', 'Fija', NULL, '', 'Walter Morales', '', '10-08-2018'),
(47, 'MIC', 'APLF_COR_GO_COBROS', '', '', 'Go_cobranzas', 'Fija', NULL, '', 'Walter Morales', '', '10-08-2018'),
(48, 'SHIVA', 'APLF_COR_GO_SHIVA', '', '', 'Go_cobranzas', 'Fija', NULL, '', 'Walter Morales', '', '22-08-2018'),
(49, 'DEIMOS', 'GO_COBRANZAS', '', '', 'Go_cobranzas', 'Fija/Movil', NULL, 'Abaco-Deimos-des', 'Walter Morales', '', '03-09-2018'),
(50, 'EVA', '', '', '', 'abaco-morosidad-go', 'Fija', NULL, '', '', 'APLF_COR_GO_EVA', '10-08-2018'),
(52, 'SIEBEL', 'APLF_COR_SIEBEL', '', '', '', 'Fija', NULL, 'SIEBEL-SWF-WLN@teco.com.ar', 'Molaroni', '', '10-08-2018'),
(53, 'JANO', 'GO_BUSINESS_INTELLIGENCE', '', '', 'SA BI PLATAFORMA JANO', 'Fija', NULL, '', 'Juan ortiz - Cristian Planes', '', '28-08-2018'),
(54, 'CONTROL M', 'OYT_SOP_PRODUCCION_OPEN', '', '', '', 'Fija', NULL, 'aip-ctm@teco.com.ar', 'Gustavo Bonafina - Lorena Gallelli - Leonardo Nicolas Nunez Ramos', '', '13-08-2018'),
(55, 'GIRAFE', '', '', '', 'APLF_COR_GIRAFE_PROV / ADMF_COR_GIRAFE\"', 'Fija', NULL, 'SoporteAplicativosUV@teco.com.ar', 'Marcelo Alberto Ballesteros', '', '03-09-2018'),
(56, 'OPERACIONES', 'OYT_GO_OPEN', '', '', '', 'Fija', NULL, '', '', '', '22-08-2018'),
(66, 'SLA FIJA', 'APLF_COR_GO_GEO', '', '', '', 'Fija', NULL, 'abaco-morosidad-go@teco.com.ar', '', '', '22-08-2018'),
(67, 'ADM  Windows', 'OYT_ADMINISTRACION_WINDOWS', '', '', '', 'Fija', NULL, '', '', '', '27-08-2018'),
(88, 'GEO EVA GUC PROV', 'APLF_COR_GEO_EVA_GUC_PROV', '', '', '', 'Fija', NULL, 'abaco-morosidad-evo@teco.com.ar', '', '', '03-09-2018'),
(89, 'POSVENT', 'aplf_cor_go_posventa', '', '', '', 'Fija', NULL, '', '', '', '05-09-2018'),
(90, 'Desarrollo FIJA', 'abaco-morosidad-evo', '', '', '', 'Fija', NULL, '', '', '', '05-09-2018'),
(91, 'Cerrar PMS resueltos', '', '', '', '', 'Fija', NULL, 'Abaco-morosidad-corr', '', '', '17-10-2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pm`
--

CREATE TABLE `pm` (
  `id_pm` int(6) UNSIGNED NOT NULL,
  `go_pm` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_im` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_correctivo` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `go_asignado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_u` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_titulo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `go_detalle` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `go_estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_u_ultmodif` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `go_fecha_umodif` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pm`
--

INSERT INTO `pm` (`id_pm`, `go_pm`, `go_im`, `go_correctivo`, `go_asignado`, `go_u`, `go_titulo`, `go_detalle`, `go_estado`, `go_u_ultmodif`, `go_alta`, `go_fecha_umodif`) VALUES
(20, 'PM00600627 ', 'SS 600627', 'TT 59263 ', 'DESARROLLO', 'u584580', ' Problemas SPM', 'PM00600627 \nSS 600627\nTT 59263 \n\nCH00637545 - Redistribucion Rangos SPM (TT 59263) a implementar Martes 14/03/2017\n15/03/2017 - ImpactÃ³ OK el update de rangos SPM\nAl monitorear se observa que bajo los tiempos de ejecucion un 30% promedio.\n\nCH00637546: Migrar nuevo Pkg del SPM\nSe migrara el finde del 1-2 abril \nrequiere MR\n\nEl CH debe ser reportado en planilla el Jueves 4/5 para ser implementado en la ventana de el dÃ­a 7/5\nSe adelantÃ² y se migro el dia Miercoles 3 de Mayo(CH00637546).\nLos horarios del proceso no se aceleraron.. pero almenos no volvio a caer en error.\n\nMantenemos la vista sobre el proceso y debemos seguir reportando que no se acortaron los tiempos de ejecucion.', 'Resuelto', 'u584580', '2017-05-09 13:53:27', '0000-00-00 00:00:00'),
(25, 'PM00600758 ', 'IM02159136', 'N/A', 'DESARROLLO', 'u584580', 'Error en SIEBEL', 'LÃ­nea afectada: 1168569052 //  1168569052//1153752080\nâ€¢Usuarios afectados: u553191/U563505/u581519\nâ€¢ DescripciÃ³n del error: imposibilidad de consultas Acciones de C&C.\nâ€¢ Print de Pantalla.\nSE CIERRA PM POR MIGRACION EXITOSA Y NO SE VUELVE A PRESENTAR EL INCONVENIENTE EN CONSULTA C&C\n', 'Cerrado', 'u584580', '2018-08-14 13:59:30', '0000-00-00 00:00:00'),
(26, '', '', 'SS2N 60098', 'DESARROLLO', 'u583489', 'Error convenio de pago', 'Se encuentra en la determinacion de un Plan de accion para poder ver la posibilidad de poder modificar el proceso en cuanto a sus validaciones. Requiere por el momento otro convenio con el mismo inconveniente.', 'Pendiente', 'u583489', '2017-03-17 19:10:10', '0000-00-00 00:00:00'),
(27, 'PM00601045', 'IM02182947', 'SS 601045', 'DESARROLLO', 'u584580', 'IVR Registros Duplicados', 'Se estan recibiendo en la generacion de archivos IVR la duplicacion de datos.\nArchivos con datos duplicados:  1758707  |  1758500\nPor favor verificar cual puede ser la causa  de por que se puede estar generando datos duplicados y que acciones se podrian tomar para que no vuelva a generarlos.', 'Pendiente', 'u584580', '2017-03-15 18:49:02', '0000-00-00 00:00:00'),
(28, 'IM02184995', 'IM02184995', 'N/A', 'POSVENTA', 'u584580', 'Rehabilitacion de cuentas', 'Buenas Tardes,\nSe genera este incidente con el motivo de priorizar la rehabitacion de las siguientes cuentas:\nSe encuentran con el servicio 3027 activo.\n\n5.37724.00.00.100596\n5.37724.00.00.100120\n5.37724.00.00.100321\n5.37724.00.00.100264\n5.37724.00.00.100272\n\nMuchas Gracias', 'Pendiente', 'u584580', '2018-08-22 20:02:05', '0000-00-00 00:00:00'),
(31, 'CH00639098', 'CH00639098', 'Hecho', 'DESARROLLO', 'u583489', 'FTP_CBMIIV_3', 'se genera el IM para sortear un problema del windows de origen del FTP que arroja error de WILDCARD.. automatizacion dice que corresponde a windows.. windows dice que ve todo bien.. pero el job sigue fallando.. \n\nDescubrimos que al reejecutar mas tarde.. procesa OK.. \nTransfer file P3l_0318_1759378.OUT failed\nFTP_transfer_wildcard Error in transfer \n\nDescripcion de la solicitud\nCOBRANZAS COB_DOMINGO FTP_CBMIIV_D3 planifica Domingos\nCOBRANZAS COB_DIARIA FTP_CBMIIV_3 planifica de lun a sab\n\nPara ambos jobs se solicita configurar un rerun automatico, cada 2hs, cada vez que finaliza en rojo y en el sysout se encuentra la frase wildcard Error\nReruns maximos 10\n', 'Cerrado', 'u583489', '2018-08-22 14:06:13', '0000-00-00 00:00:00'),
(32, 'PM00601006 ', 'IM02180024', 'SS2N 60704', 'DESARROLLO', 'u584580', 'Quita de Marca de ExcepciÃ³n de VerificaciÃ³n ', 'Esta siendo trabajado por Desarrollo, ya se enviaron los diseÃ±os, resta saber si se va a migrar algo.\n\n\nSe crea CH00643028 para crear los jobs y configurar un fileWatcher\n\nEs porque no estaba detectanto todos los clientes que debia traer con el dni ingresdo', 'En proceso', 'u584580', '2017-08-09 19:00:38', '0000-00-00 00:00:00'),
(33, 'PM00601092 ', 'SD02196619 ', 'SS 601092', 'DESARROLLO', 'u584580', 'ASOCIACION ISRAELITA', 'Por fv se podrÃ¡ generar un ticket por cuit 30542068740  ASOCIACION ISRAELITA?.\n\nLas lÃ­neas de ASOCIACION cuando se cortan por  mora y el cliente cancelas los pagos no se activan automÃ¡ticamente y no nos permite informar el pago. Si buscamos en el sistema por nÃºmero de cuenta no figuran los abonados e incluso no nos permite en algunos casos modificar el limite.\n\nEjemplo de  LÃ­neas que no  se habilitaron por mora\n\n1162745813\n1130414358\n1130515007\n\nAbonado   5.37724.00.00.100022', 'Resuelto', 'u584580', '2018-05-29 15:13:53', '0000-00-00 00:00:00'),
(34, 'PM00601127', '', '', 'DESARROLLO', 'u583489', 'Seguimiento COB_DIARIA', 'Se genera PM para seguimiento y mejora sobre los procesos de la cadena de Morosidad WS, reclamado vÃ­a los siguientes IMs:	@@\n@@\nIM02182169		m Pais - Cadena Nocturna Morosidad | Proceso CBMDH \"Nuevos Morosos\"  @@\nIM02182178		m Pais - Cadena Nocturna Morosidad | Proceso CBMCBH \"Avance Paso Mora\" @@\nIM02182180		m Pais - Cadena Nocturna Morosidad | Proceso CBMSI \"Archivos p / SMS\"	@@\nIM02182185		 m Pais - Cadena Nocturna Morosidad | Proceso CBGAT \"Pedidos de Red\"	@@\nIM02182187		m Pais - Cadena Nocturna Morosidad | Proceso CBSPM \"Estado de SituaciÃ³n\"	@@\nIM02182194		m Pais - Cadena Nocturna Morosidad | Proceso CBREPSPM \"Reporte Estado de SituaciÃ³n\"	@@', 'En proceso', 'u583489', '2017-04-04 14:03:24', '0000-00-00 00:00:00'),
(35, '-', '-', 'SSCO 57310', 'DESARROLLO', 'u584580', 'Error OHGLAR 112102', 'Esta pendiente del lado de dllo, armar el ambiente de TS para realizar las prueba.\r\n', 'Pendiente', 'u584580', '2017-04-11 12:59:00', '0000-00-00 00:00:00'),
(36, 'CH00643253', 'IM02132224', '', 'DESARROLLO', 'u583489', 'MORO->VERAZ (OK)', 'La cadena de cobranzas->COB_Veraz, se mueve a \nMORO->VERAZ y en vez de confirmacion manual, tendra un fileWatcher\n\nSe probo con un archivo vacio!\nTEMA RESULETO Y CERRADO', 'Resuelto', 'u583489', '2017-04-20 19:32:10', '0000-00-00 00:00:00'),
(37, 'PM00601213', 'SS 601213', '', 'DESARROLLO', 'u583489', 'CBMCBH Unique Constraint', 'MCBH falla por UNique constraint al intentar avanzar un moroso del paso 5 a paso 10 cuando ya tiene el paso 10 creado y tiene ambos pasos abiertos:\r\n\r\nSe verificaron 363 casos con esta query\r\nSelect moros_id from bs_mor_clia_accion\r\nwhere acci_paso_id = 10\r\nAnd moros_id in(Select moros_id from bs_mor_clia_accion \r\n                            where acci_paso_id = 5\r\n                            And clia_estado_accion = 3)', 'En proceso', 'u583489', '2017-04-20 19:26:12', '0000-00-00 00:00:00'),
(38, 'PM00601276 ', '', 'SS2N 60127', 'DESARROLLO', 'u584580', ' Convenio financiacion', 'No se puede realizar financiacion en convenio de pago.\r\n', 'Pendiente', 'u584580', '2017-05-04 17:44:37', '0000-00-00 00:00:00'),
(39, 'PM00601281 ', '', ' SS2N 6012', 'DESARROLLO', 'u584580', 'Demora cbmver_veraz', 'Demoras en la generacion de reportes demora cbmver_veraz.', 'Pendiente', 'u584580', '2018-03-14 13:37:40', '0000-00-00 00:00:00'),
(40, 'PM00601283 ', '', 'SS2N 60128', 'DESARROLLO', 'u584580', 'Mejora CBDFR', 'Mejora en la performance del proceso CBDFR.', 'Pendiente', 'u584580', '2017-05-16 17:51:05', '0000-00-00 00:00:00'),
(41, 'PM00601288', '', '', 'DESARROLLO', 'u584580', 'CBMSI', 'No termina de recolectar los datos, queda pegado o y debemos matarlo para que comience el resto de la cadena.', 'Pendiente', 'u584580', '2017-05-04 18:03:17', '0000-00-00 00:00:00'),
(42, 'PM00601325', 'IM02200930 ', '-', 'DESARROLLO', 'u583489', 'cbcomies - Info duplicada', 'ULTIMA ACTUALIZACION 24/05/2017 --> Se realizo la VA completa y luego el proceso cbcomies ejecuto sin inconvenientes generando los archivos sin informacion duplicada.', 'Resuelto', 'u583489', '2017-05-24 18:26:30', '0000-00-00 00:00:00'),
(45, 'CBREPSPM', '', '601341 ', 'DESARROLLO', 'u584580', 'Performance CBREPSPM', 'Reporte del Estado de Situacion de los Morosos. Lo estamos viendo con desarrollo. ', 'Pendiente', 'u584580', '2017-05-29 12:54:22', '0000-00-00 00:00:00'),
(46, 'SS2N 601344', '', 'CO en Need', 'DESARROLLO', 'u583489', 'Performance cbMDH', 'Emi mando un doc con problemas/propuestas para que Â¿aprobemos?\n\nCO en Needit: Pedido 63059  - Performance cbMDH ', 'Pendiente', 'u583489', '2017-05-29 13:40:18', '0000-00-00 00:00:00'),
(47, 'PM00601603', '', '8978 ', 'DESARROLLO', 'u584580', 'Optimizar deuda clientes morosos', ' Optimizar deuda clientes morosos , Error en funciÃ³n FMO_DEUDA_CLIENTE del pkg MOROSIDAD', 'En proceso', 'u584580', '2017-06-26 14:19:35', '0000-00-00 00:00:00'),
(48, 'PM00601611', '0', '0', 'DESARROLLO', 'u583489', 'CBDCE - No finaliza', 'Se Genera el PM para encontrar la causa y solucionar el problema, y si es para largo generar una contingencia.\n\nEl proceso CBDCE, no finaliza OK ni en error.\npermanece corriendo por mas de 12hs.. sin llegar a finalizar.. y debe matarse por alarmas de que estÃ¡ lockeando otros procesos.\n\nNormalmente demoraba unos 5  minutos, y reinicia a los 15 minutos de haber finalizado.\n\n\nSe adjuntan Ãºltimos logs del proceso [CBDCE_logs.zip]\n\n12-09-2017 Se detecto el inconveniente por el cual no terminaba el proceso y se ejecuto la contingencia correspondiente, la misma impacto ok y el proceso finaliza correctamente.', 'Pendiente', 'u583489', '2017-09-13 16:59:09', '0000-00-00 00:00:00'),
(49, 'PM00601627', 'IM02221647', '', 'DESARROLLO', 'u584580', ' Acciones de Morosidad enviÃ³ de IVR', 'Se estan procesando menos de lo que indica cada archivo Pm1.\nLo raro es que al procesarse menos deberia a parecer la parte no procesada como NO RECIBIDO. Se envio mail a desarrollo para que nos pueda dar una mano.\nPROCESA MENOS DE LO INDICADO', 'Pendiente', 'u584580', '2017-07-04 14:05:13', '0000-00-00 00:00:00'),
(50, 'PM00601666', '', '', 'DESARROLLO', 'Lo abriÃ³ Eli', 'DepuraciÃ³n coll_tickets', 'se depurarÃ¡ coll_Tickets para que todo suceda', 'Pendiente', 'u583489', '2017-07-06 14:41:46', '0000-00-00 00:00:00'),
(51, 'PM00601670', '', '64366', 'DESARROLLO', 'u583489', 'CbCAA', 'Task Force - EstabilizaciÃ³n cadena de morosidad mÃ³vil // cbcaa\n\n-No se de que trata este PM pero existe y acÃ¡ lo documentamos-\n(Mariano)', 'Pendiente', 'u583489', '2017-07-10 13:12:02', '0000-00-00 00:00:00'),
(52, 'PM00601679 ', '', '', 'DESARROLLO', 'u584580', 'CBDRZ Performance', 'Mejora de performance del proceso.', 'Pendiente', 'u584580', '2018-02-05 17:19:53', '0000-00-00 00:00:00'),
(53, 'PM00601867', '', '', 'DESARROLLO', 'u584580', 'convenios viejos 2k', 'Se levanta PM para cerrar de forma masiva los convenios que fueron abonados la cuota del anticipo y no se rehabilitaron, aproximada mente hay 2k de registros. Se evaluara las diferentes casuisticas para aplicar la contingencia correspondiente.', 'Pendiente', 'u584580', '2017-08-09 20:47:51', '0000-00-00 00:00:00'),
(54, 'PM00601875', 'IM02235556', '', 'DESARROLLO', 'u584580', 'Resp. de Pago con Proceso Mora \"activo\" con Deuda CERO o Menor', 'de Resp. de Pagos que posee Proceso de Mora â€œactivoâ€ â€“ cuyo Monto de Deuda es CERO O Menor a Cero.\r\nRegularizacion', 'Pendiente', 'u584580', '2017-08-10 12:25:33', '0000-00-00 00:00:00'),
(55, 'PM00601980', '', '', 'DESARROLLO', 'u584580', 'Script KILL', 'Script KILL a ciertos procesos de Morosidad.', 'Pendiente', 'u584580', '2017-08-28 19:26:25', '0000-00-00 00:00:00'),
(56, 'PM00601988', 'IM02235573', '', 'DESARROLLO', 'u584580', 'Error Migracion Deimos', 'Se detectaron clientes dados de baja con saldo en bscs que no fueron migrados a deimos, se adjunta informe con los casos detectados. Necesitamos que se analice el proceso que identifica los clientes dados de baja con saldo en BSCS y los pone a disposiciÃ³n para migrar a Deimos, a fin de detectar cual es la instancia donde falla y no concreta la migraciÃ³n, es decir si BSCS no genera el lote/archivo de clientes a migrar en forma completa, si falla la transmisiÃ³n o si llegan a Deimos pero este sistema no los incorpora.\nAdjuntamos el listado de casos detectados hasta el momento (analÃ­tico) 53.204	$21.150.575, es decir no se estÃ¡n realizando gestiones de cobranza a todos estas cuentas.', 'Cerrado', 'u584580', '2018-11-09 12:51:46', '0000-00-00 00:00:00'),
(57, 'PM00602065', 'IM02244438', '', 'DESARROLLO', 'u584580', 'NEGOCIO 2000', 'No se estaria visualizando las Nominas de abogados en NEGOCIO 2000, actualmente esta analizandolo desarrollo.\n\nSe realizaron los UPDATE correspondiente para que los gestores puedan ver las nominas, (Resuelto)', 'Cerrado', 'u584580', '2017-09-25 13:24:20', '0000-00-00 00:00:00'),
(58, 'PM00602086', '', '67535', 'DESARROLLO', 'u584580', 'cbrepmor ', 'No genera reporte, si bien llegÃ³ a cargar la tabla temporal luego no finaliza y queda en error.', 'Pendiente', 'u584580', '2017-10-30 12:33:59', '0000-00-00 00:00:00'),
(59, 'PM00602195', 'IM02264668', '602195', 'DESARROLLO', 'u584580', 'No asignacion Dia de Gracia', 'Se genera PM para Desarrollo pueda darnos una mano por la no Asignacion de Dias de gracia desde el Modulo On-line.\nSSCO 67541 - No AsignaciÃ³n de DÃ­as de Gracia', 'Pendiente', 'u584580', '2017-10-30 14:14:23', '0000-00-00 00:00:00'),
(60, 'PM00602287', 'IM02273946', '', 'DESARROLLO', 'u584580', 'CBREPMOR - NO generacion reporte', 'Se vuelve a parametrizar un reporte que no salio completo y hasta el momento no finaliza el reporte parametrizado (27520).\r\nPor favor darle prioridad estÃ¡ ejecutando desde hace mas de 10 horas, vemos que esta leyendo de roolbacks.', 'Pendiente', 'u584580', '2017-11-06 14:40:53', '0000-00-00 00:00:00'),
(61, 'PM00602369', 'IM02283738', '', 'DESARROLLO', 'u584580', 'Liquidacion Comisiones', 'No se estarÃ­an visualizando los Pliegos de abogados en la interface Negocio, por lo que no podrÃ­an solicitar los reportes de liquidaciÃ³n de comisiones\nSe detallan los  pliegos que no se estÃ¡n pudiendo ver:\n\n13137_41 â€“ Ana Maya\n13137_42 â€“ BML\n13137_43 â€“ Martinez de Alzaga\n13137_44 â€“ Recaudadora\n13137_37 â€“ Martinez de Alzaga\n13137_38 â€“ Recaudadora\n13137_39 â€“ BML\n13137_40 â€“ Ana Maya\n\nSe genera PM para la priorizacion de Desarrollo.\n\nNEGOCIO 2000 lo ve GO Ventas. Bonanote', 'Resuelto', 'u584580', '2017-11-29 19:18:32', '0000-00-00 00:00:00'),
(62, 'PM00602628 ', '', '', 'DESARROLLO', 'u584580', 'Automatizacion de tareas', 'Automatizacion de tareas:\r\nCierre de gestion\r\nComandos pendientes y dormidos\r\nQuita marca fin de ciclo', 'Pendiente', 'u584580', '2018-01-29 19:48:31', '0000-00-00 00:00:00'),
(63, 'PM00602680', '', '', 'DESARROLLO', 'u584580', 'CBCTRLREHA Mejora de performance', 'Mejora del rendimiento y procesamiento del job CBCTRLREHA ', 'Pendiente', 'u584580', '2018-02-06 18:10:21', '0000-00-00 00:00:00'),
(64, 'PM00602803', 'IM02318833', '', 'DESARROLLO', 'u584580', 'CBSUSBA Errores', 'Errores en CBSUSBA, regularizacion y en caso de tener una contingencia, crear un proceso debajo del CBSUSBA que posterior a la ejecucion tome datos del LOG y aplique la contingencia para que en la proxima ejecucion los errores no se vuelvan a repetir.', 'Pendiente', 'u584580', '2018-03-08 20:12:44', '0000-00-00 00:00:00'),
(65, 'PM00602831', 'IM02313121', '601988', 'DESARROLLO', 'u584580', 'DEIMOS no viaja pago', 'Se deriva a desarrollo para que pueda analizar si es un problema del proceso que por algun motivo no detecta y agarra el pago para enviarlo a deimos o si es por otra inconsistencia diferente.', 'Pendiente', 'u584580', '2018-10-18 19:39:58', '0000-00-00 00:00:00'),
(66, 'PM00602848', 'IM02315919', '', 'DESARROLLO', 'u584580', 'PortOut no ingresa en Mora', 'Se genera PM para que desarollo analice por que los clientes con porout no ingresan a proceso de mora.', 'Pendiente', 'u584580', '2018-03-16 18:03:37', '0000-00-00 00:00:00'),
(67, 'PM00602908', '', '', 'DESARROLLO', 'u584580', 'MODIF PKG CBPOGEST_CE', 'Modificacion de PKG en CBPOGEST_CE para que busque el numero  maximo secuencial PKG_CBPO_UTIL.BuscaConvenioPrevio: ', 'Pendiente', 'u584580', '2018-04-04 14:23:43', '0000-00-00 00:00:00'),
(68, 'PM00602947', '', '', 'DESARROLLO', 'u584580', 'Modif PKG CBDFR', 'Se solicita la modificaciÃ³n del PKG para que en el Cursor  p_cursor\r\nBusque por THIS_FECHA_HORA_CREACION .\r\n\r\nActualmente busca por : ct.tick_fecha_hora_actualizacion', 'Pendiente', 'u584580', '2018-04-12 13:12:52', '0000-00-00 00:00:00'),
(69, 'PM00603041', '', '', 'DESARROLLO', 'u584580', 'PROCEDURE recolectar_candidatos de pkg', 'Mejora Performance de los procesos que recolectan candidatos levantando toda la tabla bs_cob_tick_coll_tickets.\r\nCambios en PKG para mejorar el rendimiento de los querys.', 'Pendiente', 'u584580', '2018-05-02 17:20:51', '0000-00-00 00:00:00'),
(70, 'PM00603207', 'IM02347902', '', 'DESARROLLO', 'u584580', ' LÃ­nea NO Suspendida x Mora', 'La Linea se porto, pero fue rechazada dejando inconsistencias en las tablas impidiendo de estar forma cualquier accion de morosidad.', 'Pendiente', 'u584580', '2018-06-04 13:59:42', '0000-00-00 00:00:00'),
(71, 'PM00603380', 'IM02363005', '', 'DESARROLLO', 'u584580', 'Revision tabla PORTOUT', 'Revision de tablas Portabilidad.', 'Pendiente', 'u584580', '2018-07-10 15:08:48', '0000-00-00 00:00:00'),
(72, 'PM00603750', 'IM02237496', '', 'DESARROLLO', 'u584580', 'Finactele URg otro caso sin habilitacion', 'Les remito dos casos que no estan llegando reclamos por email donde se ha ingresado el convenio de pago el 17/09 pero no se han habilitado las lineas y esto genera reclamos por parte de los clientes. (Se adjunta mail)', 'Pendiente', 'u584580', '2018-09-20 17:35:13', '0000-00-00 00:00:00'),
(73, 'PM00603857', 'IM02397305', '', 'DESARROLLO', 'u584580', 'Error en PKG al Rehabilitar', 'Lo esta viendo desarrollo, Error en PKG al intentar rehabilitar cuenta. ', 'Resuelto', 'u584580', '2018-10-17 17:53:03', '0000-00-00 00:00:00'),
(74, 'PM00603874Â ', 'IM02402998', '', 'DESARROLLO', 'u584580', 'error en nominatividad', 'Inconveniente en la Nominacion de lÃ­neas a traves de canal IVR/USSD , al faltar algunos codigos postales en las tablas de morosidad no impacta en Siebel la Nominacion .', 'Pendiente', 'u584580', '2018-10-23 13:49:59', '0000-00-00 00:00:00'),
(75, 'PM00603887', '', '', 'DESARROLLO', 'u584580', 'Inconsistencia en HOT 1 y HOT 2', '', 'Pendiente', 'u584580', '2018-10-23 18:18:55', '0000-00-00 00:00:00'),
(76, 'PM00603989', 'IM02410080', '', 'DESARROLLO', 'u584580', 'DRZ Longitud campo 3', 'cambiar la longitud del campo por 4 digitos', 'Pendiente', 'u584580', '2018-11-13 12:36:34', '0000-00-00 00:00:00'),
(77, 'PM00604161', '', '604158', 'POSVENTA', 'u584580', 'Customer_id con 9 digitos', 'Buscar customer con 9 digitos', 'Pendiente', 'u584580', '2018-12-20 17:56:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `id_pro` int(6) UNSIGNED NOT NULL,
  `go_npro` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_cadena` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_desc` varchar(900) COLLATE utf8_spanish_ci NOT NULL,
  `go_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id_pro`, `go_npro`, `go_cadena`, `go_desc`, `go_alta`) VALUES
(1, 'CBCAA', 'COB_DIARIA', 'toma los procesos de morosidad abiertos que se encuentran en los pasos de archivos(15,35,45,50) y graba las solicitudes de generacion de archivos, luego deja los pasos con estado de accion ejecutado (2) en la tabla BS_MOR_CLIA_ACCION', '2017-03-21 17:55:37'),
(6, 'CBCARTAS', 'COB_DIARIA', 'Toma los procesos de morosidad que se encuentran en los pasos de cartas (10, 20, 25, 40, 55) y crea solicitudes de generacisn de cartas.Se genera los siguientes tipos de carta:\r\n Carta Documento Amba (para los clientes de AMBA).\r\n Carta Documento Norte (para los clientes de NORTE).\r\n Carta de Migracisn a Prepago.\r\n Carta de Devolucisn de Equipos.\r\n Carta de Envmo a Entidades Crediticias.', '2017-03-21 18:04:58'),
(11, 'CBCFP', 'COB_DIARIA', 'Cierra todos los procesos de morosidad en los que fueron ejecutadas las acciones del ultimo paso.', '2017-03-21 18:06:11'),
(16, 'CBDRZ', 'COB_DIARIA', 'Cierra el proceso de Mora de un cliente que pags sus facturas y queda con saldo cero. Si el proceso de Mora se encuentra en un paso menor o igual a HOT2 (paso 3), se rehabilitara los servicios desactivados automaticamente, de lo contrario, el cliente debera solicitarla.', '2017-03-21 18:07:19'),
(21, 'CBGAT1', 'COB_DIARIA', 'Toma todos los procesos de morosidad que se encuentran en paso de HOT1(2), HOT2(3) o BAJA(35) con el estado de accion en 1(tabla BS_MOR_CLIA_ACCION) y genera los pedidos de las acciones de red correspondientes. Deja el paso con estado de accion en 2.', '2017-03-21 18:08:47'),
(26, 'CBGAT2', 'COB_DIARIA', 'Toma todos los procesos de morosidad que se encuentran en paso de HOT1(2), HOT2(3) o BAJA(35) con el estado de accion en 1(tabla BS_MOR_CLIA_ACCION) y genera los pedidos de las acciones de red correspondientes. Deja el paso con estado de accion en 2.', '2017-03-21 18:09:31'),
(31, 'CBLTH', 'COB_DIARIA', 'Cierre de tickets por pagos pendientes de imputar. Seguimiento de lotes vencidos, por la falta de recepcion cierto(s) banco(s).', '2017-03-21 18:11:20'),
(36, 'CBMCBH', 'COB_DIARIA', 'Actualiza el paso en que se encuentra un proceso de morosidad, colocandolo en el paso siguiente una vez que las acciones de la actual ya fueron ejecutadas.', '2017-03-21 18:12:11'),
(41, 'CBMDH', 'COB_DIARIA', 'Este programa selecciona a los posibles candidatos de ser morosos, para cada uno verifica si tiene facturas reclamadas, calcula el monto de deuda y verifica el monto contra el monto de IVR, para poder realizar la respectivas inserciones.', '2017-03-21 18:12:49'),
(46, 'CBMIIV', 'COB_DIARIA', 'Lee los archivos de respuesta de IVR y actualiza el estado de las solicitudes de mensaje respondidas. Una vez procesados los archivos de entrada, se les agrega fecha y hora de procesamiento y se los mueve al directorio de salida. Para morosidad, si llegs la respuesta deja el paso en estado 3.', '2017-03-21 18:13:31'),
(51, 'CBMSI', 'COB_DIARIA', 'Selecciona los morosos que se encuentran en paso 1, con estado de la accion en 1 (listo para procesar). Busca todos los contratos de los cuales es responsable de pago y genera, por cada uno una solicitud para enviar mensaje de IVR.', '2017-03-21 18:13:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(6) UNSIGNED NOT NULL,
  `go_nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `go_u` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `go_mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `go_pass` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `go_nombre`, `go_apellido`, `go_u`, `go_mail`, `go_pass`, `reg_date`) VALUES
(1, 'Gabriel', 'Salinas', 'u584580', 'gsalinas@teco.com.ar', '5555', '2018-08-21 19:20:07'),
(2, 'Mariano', 'De Zan', 'u583489', '', 'u583489', '2017-03-14 18:41:15'),
(3, 'Elisabet', 'Benegas', 'u585785', '', 'u585785', '2017-03-17 18:34:17'),
(4, 'Pablo', 'Correa', 'u580124', '', '123', '2018-01-24 18:03:01'),
(5, 'Flavia', 'Aimar', 'u558650', '', '123', '2018-08-10 13:48:29'),
(6, 'Alejandro', 'Alvarez', 'u594824', '', '123', '2018-08-14 20:00:29'),
(7, 'Leonardo', 'Peralta', 'u580127', '', '123', '2018-08-14 20:00:29'),
(8, 'Julian', 'Piquin', 'u526333', '', '123', '2018-08-23 15:08:18'),
(9, 'Emiliano', 'Reynoso', 'U611395', '', '123', '2018-09-06 13:49:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_doc`);

--
-- Indices de la tabla `documentos_fija`
--
ALTER TABLE `documentos_fija`
  ADD PRIMARY KEY (`id_doc_f`);

--
-- Indices de la tabla `gcm_devices`
--
ALTER TABLE `gcm_devices`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `go_ctrl_hs`
--
ALTER TABLE `go_ctrl_hs`
  ADD PRIMARY KEY (`go_ctrl_id`);

--
-- Indices de la tabla `go_hsextras`
--
ALTER TABLE `go_hsextras`
  ADD PRIMARY KEY (`go_h_id`);

--
-- Indices de la tabla `go_hspendientes`
--
ALTER TABLE `go_hspendientes`
  ADD PRIMARY KEY (`go_hp_id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`go_id`);

--
-- Indices de la tabla `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`id_pm`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `documentos_fija`
--
ALTER TABLE `documentos_fija`
  MODIFY `id_doc_f` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `gcm_devices`
--
ALTER TABLE `gcm_devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `go_ctrl_hs`
--
ALTER TABLE `go_ctrl_hs`
  MODIFY `go_ctrl_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `go_hsextras`
--
ALTER TABLE `go_hsextras`
  MODIFY `go_h_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `go_hspendientes`
--
ALTER TABLE `go_hspendientes`
  MODIFY `go_hp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `go_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT de la tabla `pm`
--
ALTER TABLE `pm`
  MODIFY `id_pm` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id_pro` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
