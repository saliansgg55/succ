-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2016 a las 20:32:59
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `guardia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `morosidad`
--

CREATE TABLE IF NOT EXISTS `morosidad` (
  `moro_id` mediumint(10) unsigned NOT NULL,
  `moro_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `moro_error` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `moro_desc` varchar(5000) COLLATE utf8_spanish_ci NOT NULL,
  `moro_inst` varchar(5000) COLLATE utf8_spanish_ci NOT NULL,
  `moro_paso_a` varchar(2000) COLLATE utf8_spanish_ci DEFAULT 'Sin acciones',
  `moro_paso_b` varchar(2000) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL DEFAULT 'Sin acciones',
  `moro_paso_c` varchar(2000) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Sin acciones',
  `moro_paso_d` varchar(2000) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Sin acciones',
  `moro_paso_e` varchar(2000) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Sin acciones',
  `moro_tel_g` varchar(10) COLLATE utf8_spanish_ci NOT NULL DEFAULT '1525361795',
  `moro_tel_m` varchar(10) COLLATE utf8_spanish_ci NOT NULL DEFAULT '1130726517'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `morosidad`
--

INSERT INTO `morosidad` (`moro_id`, `moro_nombre`, `moro_error`, `moro_desc`, `moro_inst`, `moro_paso_a`, `moro_paso_b`, `moro_paso_c`, `moro_paso_d`, `moro_paso_e`, `moro_tel_g`, `moro_tel_m`) VALUES
(1, 'CBMCBH', 'Queda ejecutando por mas de 1hs', 'Actualiza el paso en que se encuentra un proceso de morosidad, colocandolo en el paso siguiente una vez que las acciones de la actual ya fueron ejecutadas.', 'zaraza', 'Generar en DOIT una SGO indicando que maten desde la base BNPAIS el numero SID correspondiente al CBMCBH.\n\nAl matarlo pasado 5 minutos el proceso vuelve a ejecutar.', 'Entre las 17:00hs y las 21:00hs. Pedir RERUN. ', 'Tener en cuenta que si el llamado de operaciones es despues de las 24 hs, el job en cuestion se encuentra en la planificacion del dia anterior', 'Sin acciones', 'Sin acciones', '1525361795', '1130726517'),
(2, 'CBCAA', 'ERROR-MGA_efnRecolectarCandidatos-Recolectando Candidatos. Error: ORA-01555: snapshot too old: rollback segment number 16 with name "RBS.\n', 'Toma los procesos de morosidad abiertos que se encuentran en los pasos de archivos(15,35,45,50) y graba las solicitudes de generacion de archivos, luego deja los pasos con estado de accion ejecutado (2) en la tabla BS_MOR_CLIA_ACCION', '', 'Verificar error, conectarse al equipo BSCS_CC.\r\nComando 1: cd $WORK/TMP\r\nComando 2: ls -ltr *CBCAA*\r\n\r\nmore archivo.log', 'Generar una (Ejecucion de proceso) en DOIT solicitando:\r\nDar rerun al job CBCAA del dia que cayo en error.\r\nRUTA: COBRANZAS --> COB_DIARIA\r\nMuchas Gracias.\r\nSaludos.', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1525361795', '1130726517'),
(3, 'CBCARTAS', 'ERROR-Al obtener informacion de propiedad del ESN para el contrato 107832640 del cliente 69166543.', 'Toma los procesos de morosidad que se encuentran en los pasos de cartas (10, 20, 25, 40, 55) y crea solicitudes de generacisn de cartas, Se genera los siguientes tipos de carta: Carta Documento Amba (para los clientes de AMBA). Carta Documento Norte (para los clientes de NORTE). Carta de Migracisn a Prepago. Carta de Devolucisn de Equipos. Carta de Envmo a Entidades Crediticias.', '', 'Conectarse al Equipo: BSCS_CC\nDirectorio: cd $WORK/LOG\nComando 1: ls -ltr *cartas*\nComando 2: grep ERROR-Al cbcartas_12983_20161026190738.log', 'Conectarse al Equipo: BSCS_CC\nDirectorio: cd $WORK/LOG  \nComando 1: ls -ltr *cartas*\nComando 2: grep ERROR-Al cbcartas_12983_20161026190738.log\n\nIdentificamos el error:\nERROR-Al obtener informacion de propiedad del ESN para el contrato 107832640 del cliente 69166543.\n', 'Una vez identificado el Error pasar a la "ULTIMA INSTANCIA"', 'Sin acciones', 'Sin acciones', '1525361795', '1130726517'),
(4, 'CBMSI', 'ERROR - Al cargar la tabla tmp en PCB_CBMSI.recolectar_candidatos. Error: ORA-01555: snapshot too old: rollback segment number 16 with \r\nERROR-No se pudo cargar la tabla tmp.\r\n', 'Selecciona los morosos que se encuentran en paso 1, con estado de la accion en 1 (listo para procesar). Busca todos los contratos de los cuales es responsable de pago y genera, por cada uno una solicitud para enviar mensaje de IVR.', '', 'Conectarse al Equipo: BSCS_CC\r\nDirectorio: cd $WORK/TMP\r\nComando 1: ls -ltr *MSI*\r\nComando 2: more CBMSI_20161025191013.log', 'Identificamos el error:\r\nERROR - Al cargar la tabla tmp en PCB_CBMSI.recolectar_candidatos. Error: ORA-01555: snapshot too old: rollback segment number 16 with \r\nERROR-No se pudo cargar la tabla tmp.', 'Generar (EJECUCION DE PROCESO) en DOIT.\r\nSe solicita dar rerun al job CBMSI del dia en que fallo.\r\nRUTA: COBRANZAS --> COB_DIARIA\r\nMuchas Gracias.\r\nSaludos.', 'Sin acciones', 'Sin acciones', '1525361795', '1130726517'),
(5, 'CBMDH', 'ERROR @ MDH_efnPrepararCandidatos() @ 2016/10/14 20:52:50  Error: Buscando fecha ultima ejecucion -1405', 'este programa selecciona a los posibles candidatos de ser morosos, para cada uno verifica si tiene facturas reclamadas, calcula el monto de deuda y verifica el monto contra el monto de IVR, para poder realizar la respectivas inserciones.', 'ERROR @ MDH_efnPrepararCandidatos() @ 2016/10/14 20:52:50\r\nError: Buscando fecha ultima ejecucion -1405', 'Conectarse al Equipo: BSCS_CC\r\nDirectorio: cd $WORK/TMP\r\nComando 1: ls -ltr *MDH*\r\nComando 2: more MDH-FIN-20161026202428.log', 'Identificamos el error:\r\nERROR @ MDH_efnPrepararCandidatos() @ 2016/10/14 20:52:50  Error: Buscando fecha ultima ejecucion -1405', 'Debido al error hay que realizar una correccion de datos, aplicar ULTIMA INSTANCIA , comunicarse con los referentes de Morosidad.', 'Tener en cuenta que si el llamado de operaciones es despues de las 24 hs, el job en cuestion se encuentra en la planificacion del dia anterior.', 'Sin acciones', '1525361795', '1130726517'),
(6, 'CBMDH', 'Se presento el mensaje "ERROR" en el LOG /u07/PAIS/bscs/batch/WORK/TMP/MDH-INI-*.log o MDH-FIN-*.log', 'Handler de morosidad, levanta todos los morosos y los inserta en el universo datos', '', 'Despues de las 00:00hs. Dar Force OK.  Un vez que el job quedo forzado OK, ir al equipo BSCS_CC, ir la path: /usr/users/PAIS/bscs/batch/WORK/TMP y crear un archivo llamado MDH-FIN-FORCE_OK.log (esto sirve para que la alarma no siga activa).', 'Entre las 18:00hs y las 00:00hs. Dar RE-RUN. CBMDH en COBRANZAS --> COB_DIARIA', 'Tener en cuenta que si el llamado de operaciones es despues de las 24 hs, el job en cuestion se encuentra en la planificacion del dia anterior.', 'Sin acciones', 'Sin acciones', '1525361795', '1130726517'),
(7, 'CBGAT1', 'Error-SELECT table Curr_co_device --> Error: ORA-01405: fetched column value is NULL', 'Generador de corte por mora', '', 'Obtener del sysout en moros_id en error como por ejemplo:\r\nERROR - No se pudo procesar el Moroso, MOROSO: 227108429, PASO: 30.\r\nBuscar en el sharepoint el archivo Arreglar_CBGAT.sql y seguir los pasos que se indican en el mismo', 'Sin acciones', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1525361795', '1130726517'),
(8, 'CBGAT2', 'Error: Hay otra instancia del programa que se encuentra corriendo.', 'Generador de corte por mora', '', 'Obtener del sysout en moros_id en error como por ejemplo:\r\nERROR - No se pudo procesar el Moroso, MOROSO: 227108429, PASO: 30.\r\nBuscar en el sharepoint el archivo Arreglar_CBGAT.sql y seguir los pasos que se indican en el mismo', 'Sin acciones', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1525361795', '1130726517'),
(9, 'CBRPOL', 'Existen atrasos en el directorio /u07/PAIS/bscs/batch/WORK/TMP/, el archivo mas reciente [/u07/PAIS/bscs/batch/WORK/TMP//CBRPOL_*.log] tiene xxxxx minutos de vida. Umbral configurado: xxxxxx minutos - Mascara monitoreada: [CBRPOL*]', 'Demonio de Saldo cero', '', 'Verificar en el sysout del control M que la alarma es correcta (se encuentra en ejecucion hace xxxx minutos), de ser asi ejecutar query Sesion_Activa_CBRPOL (que se encuentra en el sharepoint) en la base BNPAIS, obtener el SID de ejecucion y pedir a Operaciones matar el SID en la base BNPAIS. Si la alarma salta en la madrugada, verificar lo mismo en la cadena del dia anterior.', 'Nota: El query "Sesion_Activa_CBRPOL" se encuentra en la misma carpeta que esta planilla de acciones de GoCobranzas', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1525361795', '1130726517'),
(11, 'CBMCBH', 'Se presento el mensaje "ERROR" en el LOG /u07/PAIS/bscs/batch/WORK/TMP/MCBH_Log_END_*.log o MCBH_Log_INI_*.log', 'Avance de Mora', '', 'Despues de las 20 hs. Pedir Force OK. Un vez que el job quedo forzado OK, ir al equipo BSCS_CC, ir la path: /usr/users/PAIS/bscs/batch/WORK/TMP y crear un archivo llamado MCBH_Log_END_FORCE_OK.log (esto sirve para que la alarma no siga activa)', 'Sin acciones', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1525361795', '1130726517'),
(12, 'BNPAIS', 'Reinicio o Bajada de la Base BNPAIS', 'Reinicio o Bajada de la Base BNPAIS', '', 'Por este tema favor revisar / controlar en control-m \n1 - En la programacion del dia actual (PERSONAL)\\n\n\nABOGADOS --> ABO_DEIMOS\\n\nINTERFAZ  --> INT_VARIOS\\n\nCOBRANZAS --> COB_DEMONIO\\n\nCOBRANZAS --> COB_FREC_HOR\\n\nCOBRANZAS --> COB_MOROREPORTES\\n\nCOBRANZAS --> COB_RECAUDA\\n\nCOBRANZAS --> WONDER\\n\nLos domingos, la cadena COB_DIARIA se llama COB_DOMINGO\nVerificar que tengan recursos y que tengan algun job corriendo, si estan en error por la bajada darle rerun.', '2-En la programacion del  dia anterior revisa que la cadena COBRANZAS --> COB_DIARIA tambien  tenga recursos y algun Job corriendo o toda en verde (OK), si estan en error por la bajada darle rerun y condicion horaria si es necesario, siempre y cuando no se encuentre corriendo en la cadena del dia actual el mismo job.', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1525361795', '1130726517'),
(13, 'CBSPM', 'ERROR @ SPM_efnPreparar_Candidatos @ 2016/10/29 16:34:50\r\nERROR: PKG_Morosidad.PMO_Candidatos_SPM. ---> -1555\r\nORA-01555: snapshot too old: rollback segment number 60 with name "RBS.\r\n', '', '', 'En caso de presentarse el error donde el proceso cae por SNAPSHOT entre las 00:00 y las 06:00hs darle RERUN.', 'Sin acciones', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1525361795', '1130726517'),
(14, 'CBDRZ', 'Error: Function DRZ_efnProcesarMorosos - Cliente Nro: 70246436\r\n', 'Cierra el proceso de Mora de un cliente que pags sus facturas y queda con saldo cero. Si el proceso de Mora se encuentra en un paso menor o igual a HOT2 (paso 3), se rehabilitara los servicios desactivados automaticamente, de lo contrario, el cliente debera solicitarla.', '', 'El proceso falla por que intenta rehabilitar un cliente y no puede. Ante este error dejar el job como esta y llamar a los Referentes de Morosidad para poder verificarlo y hacer el reclamo correspondiente.', 'Sin acciones', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1525361795', '1130726517');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `morosidad`
--
ALTER TABLE `morosidad`
  ADD PRIMARY KEY (`moro_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `morosidad`
--
ALTER TABLE `morosidad`
  MODIFY `moro_id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
