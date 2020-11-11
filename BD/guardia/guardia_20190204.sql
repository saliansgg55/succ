-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2019 a las 16:20:09
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `guardia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `morosidad`
--

CREATE TABLE `morosidad` (
  `moro_id` mediumint(10) UNSIGNED NOT NULL,
  `moro_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `moro_error` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `moro_desc` varchar(5000) COLLATE utf8_spanish_ci NOT NULL,
  `moro_inst` varchar(5000) COLLATE utf8_spanish_ci NOT NULL,
  `moro_paso_a` varchar(2000) COLLATE utf8_spanish_ci DEFAULT 'Sin acciones',
  `moro_paso_b` varchar(2000) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL DEFAULT 'Sin acciones',
  `moro_paso_c` varchar(2000) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Sin acciones',
  `moro_paso_d` varchar(2000) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Sin acciones',
  `moro_paso_e` varchar(2000) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Sin acciones',
  `moro_tel_g` varchar(10) COLLATE utf8_spanish_ci NOT NULL DEFAULT '1525361795',
  `moro_tel_m` varchar(10) COLLATE utf8_spanish_ci NOT NULL DEFAULT '1130726517',
  `moro_tel_l` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `morosidad`
--

INSERT INTO `morosidad` (`moro_id`, `moro_nombre`, `moro_error`, `moro_desc`, `moro_inst`, `moro_paso_a`, `moro_paso_b`, `moro_paso_c`, `moro_paso_d`, `moro_paso_e`, `moro_tel_g`, `moro_tel_m`, `moro_tel_l`) VALUES
(1, 'CBMCBH', 'Queda ejecutando por mas de 1hs', 'Actualiza el paso en que se encuentra un proceso de morosidad, colocandolo en el paso siguiente una vez que las acciones de la actual ya fueron ejecutadas.', 'zaraza', 'Generar en DOIT una SGO indicando que maten desde la base BNPAIS el numero SID correspondiente al CBMCBH.\n\nAl matarlo pasado 5 minutos el proceso vuelve a ejecutar.', 'Entre las 17:00hs y las 21:00hs. Pedir RERUN. ', 'Tener en cuenta que si el llamado de operaciones es despues de las 24 hs, el job en cuestion se encuentra en la planificacion del dia anterior', 'Sin acciones', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(2, 'CBCAA', 'ERROR-MGA_efnRecolectarCandidatos-Recolectando Candidatos. Error: ORA-01555: snapshot too old: rollback segment number 16 with name \"RBS.\n', 'Toma los procesos de morosidad abiertos que se encuentran en los pasos de archivos(15,35,45,50) y graba las solicitudes de generacion de archivos, luego deja los pasos con estado de accion ejecutado (2) en la tabla BS_MOR_CLIA_ACCION', '', 'Verificar error, conectarse al equipo BSCS_CC.\nComando 1: cd $WORK/TMP\nComando 2: ls -ltr *CBCAA*\n\nmore archivo.log', 'Generar una (Ejecucion de proceso) en DOIT solicitando:\nDar rerun al job CBCAA del dia que cayo en error.\nRUTA: MORO --> DIARIA\nMuchas Gracias.\nSaludos.', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(3, 'CBCARTAS', 'ERROR-Al obtener informacion de propiedad del ESN para el contrato 107832640 del cliente 69166543.', 'Toma los procesos de morosidad que se encuentran en los pasos de cartas (10, 20, 25, 40, 55) y crea solicitudes de generacisn de cartas, Se genera los siguientes tipos de carta: Carta Documento Amba (para los clientes de AMBA). Carta Documento Norte (para los clientes de NORTE). Carta de Migracisn a Prepago. Carta de Devolucisn de Equipos. Carta de Envmo a Entidades Crediticias.', '', 'Conectarse al Equipo: BSCS_CC\nDirectorio: cd $WORK/LOG\nComando 1: ls -ltr *cartas*\nComando 2: grep ERROR-Al cbcartas_12983_20161026190738.log', 'Conectarse al Equipo: BSCS_CC\nDirectorio: cd $WORK/LOG  \nComando 1: ls -ltr *cartas*\nComando 2: grep ERROR-Al cbcartas_12983_20161026190738.log\n\nIdentificamos el error:\nERROR-Al obtener informacion de propiedad del ESN para el contrato 107832640 del cliente 69166543.\n', 'Una vez identificado el Error pasar a la \"ULTIMA INSTANCIA\"', 'Sin acciones', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(4, 'CBMSI', 'ERROR - Al cargar la tabla tmp en PCB_CBMSI.recolectar_candidatos. Error: ORA-01555: snapshot too old: rollback segment number 16 with \r\nERROR-No se pudo cargar la tabla tmp.\r\n', 'Selecciona los morosos que se encuentran en paso 1, con estado de la accion en 1 (listo para procesar). Busca todos los contratos de los cuales es responsable de pago y genera, por cada uno una solicitud para enviar mensaje de IVR.', '', 'Conectarse al Equipo: BSCS_CC\r\nDirectorio: cd $WORK/TMP\r\nComando 1: ls -ltr *MSI*\r\nComando 2: more CBMSI_20161025191013.log', 'Identificamos el error:\r\nERROR - Al cargar la tabla tmp en PCB_CBMSI.recolectar_candidatos. Error: ORA-01555: snapshot too old: rollback segment number 16 with \r\nERROR-No se pudo cargar la tabla tmp.', 'Generar (EJECUCION DE PROCESO) en DOIT.\nSe solicita dar rerun al job CBMSI del dia en que fallo.\nRUTA: MORO--> DIARIA\nMuchas Gracias.\nSaludos.', 'Sin acciones', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(5, 'CBMDH', 'ERROR @ MDH_efnPrepararCandidatos() @ 2016/10/14 20:52:50  Error: Buscando fecha ultima ejecucion -1405', 'este programa selecciona a los posibles candidatos de ser morosos, para cada uno verifica si tiene facturas reclamadas, calcula el monto de deuda y verifica el monto contra el monto de IVR, para poder realizar la respectivas inserciones.', 'ERROR @ MDH_efnPrepararCandidatos() @ 2016/10/14 20:52:50\r\nError: Buscando fecha ultima ejecucion -1405', 'Conectarse al Equipo: BSCS_CC\r\nDirectorio: cd $WORK/TMP\r\nComando 1: ls -ltr *MDH*\r\nComando 2: more MDH-FIN-20161026202428.log', 'Identificamos el error:\r\nERROR @ MDH_efnPrepararCandidatos() @ 2016/10/14 20:52:50  Error: Buscando fecha ultima ejecucion -1405', 'Debido al error hay que realizar una correccion de datos, aplicar ULTIMA INSTANCIA , comunicarse con los referentes de Morosidad.', 'Tener en cuenta que si el llamado de operaciones es despues de las 24 hs, el job en cuestion se encuentra en la planificacion del dia anterior.', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(6, 'CBMDH', 'Se presento el mensaje \"ERROR\" en el LOG /u07/PAIS/bscs/batch/WORK/TMP/MDH-INI-*.log o MDH-FIN-*.log', 'Handler de morosidad, levanta todos los morosos y los inserta en el universo datos', '', 'Despues de las 00:00hs. Dar Force OK.  Un vez que el job quedo forzado OK, ir al equipo BSCS_CC, ir la path: /usr/users/PAIS/bscs/batch/WORK/TMP y crear un archivo llamado MDH-FIN-FORCE_OK.log (esto sirve para que la alarma no siga activa).', 'Entre las 18:00hs y las 00:00hs. Dar RE-RUN. CBMDH en MORO--> DIARIA', 'Tener en cuenta que si el llamado de operaciones es despues de las 24 hs, el job en cuestion se encuentra en la planificacion del dia anterior.', 'Sin acciones', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(7, 'CBGAT1', 'Error-SELECT table Curr_co_device --> Error: ORA-01405: fetched column value is NULL', 'Generador de corte por mora', '', 'Obtener del sysout en moros_id en error como por ejemplo:\r\nERROR - No se pudo procesar el Moroso, MOROSO: 227108429, PASO: 30.\r\nBuscar en el sharepoint el archivo Arreglar_CBGAT.sql y seguir los pasos que se indican en el mismo', 'Sin acciones', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(8, 'CBGAT2', 'Error: Hay otra instancia del programa que se encuentra corriendo.', 'Generador de corte por mora', '', 'Obtener del sysout en moros_id en error como por ejemplo:\r\nERROR - No se pudo procesar el Moroso, MOROSO: 227108429, PASO: 30.\r\nBuscar en el sharepoint el archivo Arreglar_CBGAT.sql y seguir los pasos que se indican en el mismo', 'Sin acciones', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(9, 'CBRPOL', 'Existen atrasos en el directorio /u07/PAIS/bscs/batch/WORK/TMP/, el archivo mas reciente [/u07/PAIS/bscs/batch/WORK/TMP//CBRPOL_*.log] tiene xxxxx minutos de vida. Umbral configurado: xxxxxx minutos - Mascara monitoreada: [CBRPOL*]', 'Demonio de Saldo cero', '', 'Verificar en el sysout del control M que la alarma es correcta (se encuentra en ejecucion hace xxxx minutos), de ser asi ejecutar query Sesion_Activa_CBRPOL (que se encuentra en el sharepoint) en la base BNPAIS, obtener el SID de ejecucion y pedir a Operaciones matar el SID en la base BNPAIS. Si la alarma salta en la madrugada, verificar lo mismo en la cadena del dia anterior.', 'Nota: El query \"Sesion_Activa_CBRPOL\" se encuentra en la misma carpeta que esta planilla de acciones de GoCobranzas', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(11, 'CBMCBH', 'Se presento el mensaje \"ERROR\" en el LOG /u07/PAIS/bscs/batch/WORK/TMP/MCBH_Log_END_*.log o MCBH_Log_INI_*.log', 'Avance de Mora', '', 'Despues de las 20 hs. Pedir Force OK. Un vez que el job quedo forzado OK, ir al equipo BSCS_CC, ir la path: /usr/users/PAIS/bscs/batch/WORK/TMP y crear un archivo llamado MCBH_Log_END_FORCE_OK.log (esto sirve para que la alarma no siga activa)', 'Sin acciones', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(12, 'BNPAIS', 'Reinicio o Bajada de la Base BNPAIS', 'Reinicio o Bajada de la Base BNPAIS', '', 'Por este tema favor revisar / controlar en control-m \n1 - En la programacion del dia actual (PERSONAL)\\n\n\nMORO--> ABO_DEIMOS\\n\nINTERFAZ  --> INT_VARIOS\\n\nMORO --> MOR_DEMONIOS\\n\nMORO--> REPORTES\\n\nCOBRANZAS --> COB_RECAUDA\\n\nCOBRANZAS --> WONDER\\n\nLos domingos, la cadena COB_DIARIA se llama COB_DOMINGO\nVerificar que tengan recursos y que tengan algun job corriendo, si estan en error por la bajada darle rerun.', '2-En la programacion del  dia anterior revisa que la cadena COBRANZAS --> COB_DIARIA tambien  tenga recursos y algun Job corriendo o toda en verde (OK), si estan en error por la bajada darle rerun y condicion horaria si es necesario, siempre y cuando no se encuentre corriendo en la cadena del dia actual el mismo job.', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(13, 'CBSPM', 'ERROR @ SPM_efnPreparar_Candidatos @ 2016/10/29 16:34:50\r\nERROR: PKG_Morosidad.PMO_Candidatos_SPM. ---> -1555\r\nORA-01555: snapshot too old: rollback segment number 60 with name \"RBS.\r\n', '', '', 'En caso de presentarse el error donde el proceso cae por SNAPSHOT entre las 00:00 y las 06:00hs darle RERUN.', 'Sin acciones', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(14, 'CBDRZ', 'Error: Function DRZ_efnProcesarMorosos - Cliente Nro: 70246436\r\n', 'Cierra el proceso de Mora de un cliente que pags sus facturas y queda con saldo cero. Si el proceso de Mora se encuentra en un paso menor o igual a HOT2 (paso 3), se rehabilitara los servicios desactivados automaticamente, de lo contrario, el cliente debera solicitarla.', '', 'El proceso falla por que intenta rehabilitar un cliente y no puede. Ante este error dejar el job como esta y llamar a los Referentes de Morosidad para poder verificarlo y hacer el reclamo correspondiente.', 'Sin acciones', 'Sin acciones', 'Sin acciones', 'Sin acciones', '1156079413', '1156079413', 1156079413),
(17, 'CBMCBH ', 'ERROR-MCBH_efnEjecutarProceso-AL PROCESAR MOROSO: 271036516, PASO: 5. ', 'Avance de Mora', '', 'Si estas de guardia, desestimAR este Instructivo, lo vemos en horario de oficina-Gracias-\n\nSe debe recolectar todos los morosos del log \ngrep Moroso: MCBH*ultimodia*log |sort|uniq\n\nDe ahI recortar solo los nUmeros de morosos, y concatenarlos separados por coma\n', 'Copiar los Moros_id en el siguiente query\nselect distinct(prfl_profile_cd), moros_id, acci_paso_id,clia_estado_accion, \'UPDATE bs_mor_clia_accion\n   SET clia_estado_accion = 4\nWHERE moros_id = \'||moros_id||\'\n   AND acci_paso_id = 5\n   AND prfl_profile_cd = \'||prfl_profile_cd||\'\n   AND clia_estado_accion = 3;\nCOMMIT;\' as modif   from bs_mor_clia_accion\nwhere moros_id in (270906578,270906578) \nAND acci_paso_id = 5\nAND clia_estado_accion = 3;\n\nY copiar todo el contenido de la ultima columna, en un SQL en blanco, nombre GOB_FixMCBH_CHxxx.sql\n', 'Verificar que el proceso CBMCBH no este corriendo y generar CH a operaciones\nSolicito por favor ejecutar el script adjunto, en BNPAIS con usuario PAIS y copiar la salida del script en el CH\n', 'Si estuviera en ejecuciOn el CBMCBH, solicitar la siguiente \nSolicito por favor dar kill+hold al job CBMCBH de la cadena COBRANZAS->COB_DIARIA y ejecutar el script adjunto, en BNPAIS con usuario PAIS y copiar la salida del script en el CH\n', 'Verificar que haya impactado el script, y solicitar reiniciar el proceso, salvo que la cadena (MORO->DIARIA) ya se encuentre avanzada', '1156079413', '1156079413', 1156079413),
(18, 'CBDRZ', 'Termina con error varios dias seguidos', '', '', 'Instrucciones para la guardia: \r\nresponder: Se verÃ¡ en horario de oficina.', 'Moro.Admin. ejecutar el truncate de la temporal del DRZ:\r\n\r\ntruncate table bs_mor_cbdrz_tmp reuse storage;', '', '', '', '1156079413', '1156079413', 1156079413),
(19, 'CBMSI', 'Error al cargar la tabla temporal', 'Selecciona los morosos que se encuentran en paso 1, con estado de la accion en 1 (listo para procesar). Busca todos los contratos de los cuales es responsable de pago y genera, por cada uno una solicitud para enviar mensaje de IVR.', '', 'Antes de las 5 AM - Si cae por este error darle rerun al proceso. ', '', '', '', '', '1156079413', '1156079413', 1156079413),
(20, 'REP_PREVIEW', 'desconocido', 'genera un raaaporte', '', 'el usuario se queja', 'Revisamos: no encontramos causa', 'Ejecutamos la contingencia', 'Entregamos resultados al usuairo: y el vera si le gusta la contingencia o se queda con el original.', '', '1156079413', '1156079413', 1156079413);

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
  MODIFY `moro_id` mediumint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
