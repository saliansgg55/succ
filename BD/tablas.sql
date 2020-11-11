

CREATE TABLE usuarios (
id_user INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
go_nombre VARCHAR(30) NOT NULL,
go_apellido VARCHAR(30) NOT NULL,
go_u VARCHAR(10),
go_pass VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)


CREATE TABLE pm (
id_pm 				INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
go_pm 				VARCHAR(30) NOT NULL,
go_im 				VARCHAR(30) NOT NULL,
go_correctivo 		VARCHAR(10),
go_asignado 		VARCHAR(30) NOT NULL,
go_u 				VARCHAR(30) NOT NULL,
go_titulo 			VARCHAR(30) NOT NULL,
go_detalle 			VARCHAR(300) NOT NULL,
go_estado 			VARCHAR(30) NOT NULL,
go_u_ultmodif 		VARCHAR(30) NOT NULL,
go_alta 			TIMESTAMP,
go_fecha_umodif 	TIMESTAMP
)


CREATE TABLE procesos (
id_pro 				INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
go_npro				VARCHAR(30) NOT NULL,
go_cadena			VARCHAR(30) NOT NULL,
go_desc				VARCHAR(900) NOT NULL,
go_alta 			TIMESTAMP
)


			


DELETE FROM bs_cob_tips_tick_pendsiebel
      WHERE tick_seq in  (1224493029,1224493030,1224495056,1224495057,1224495771,1224494125,1224494126,1224494128,1224494129,1224490975);
COMMIT;


UPDATE bs_cob_tick_coll_tickets
   SET tick_estado_proceso = tick_estado_anterior
 WHERE tick_seq in (1224493029,1224493030,1224495056,1224495057,1224495771,1224494125,1224494126,1224494128,1224494129,1224490975);

 COMMIT;

