hsextras
--------------
go_h_u
go_h_fi calendario
go_h_ff calendario
go_h_cod  listamenu
go_h_cant
go_h_tarea listameni
go_h_motivo 
go_h_ch 
go_h_tp (total pendientes)



hspendientes
--------------
go_hp_u
go_hp_cod
go_hp_cantidad



go_ctrl_hs
--------------
go_chs_u
go_hs_fran
go_compensatorio
go_dia
go_ht_cant

Al cargarse en go_hsextras, se actualiza o inserta dependiende de la situacion en go_hspendientes
Luego en go_ctrl_hs se agregan las horas tomadas.

CREATE TABLE go_hsextras (
go_h_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
go_h_u VARCHAR(10) NOT NULL,
go_h_fi VARCHAR(30) NOT NULL,
go_h_ff VARCHAR(30) NOT NULL,
go_h_cod VARCHAR(5) NOT NULL,
go_h_cant VARCHAR(30) NOT NULL,
go_h_tarea VARCHAR(30) NOT NULL,
go_h_motivo VARCHAR(300) NOT NULL,
go_h_tp VARCHAR(30) NOT NULL,
go_h_ch VARCHAR(30) NOT NULL,
go_h_fechacarga TIMESTAMP
);

CREATE TABLE go_hspendientes (
go_hp_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
go_hp_u VARCHAR(30) NOT NULL,
go_hp_cod VARCHAR(5) NOT NULL,
go_hp_cantidad VARCHAR(30) NOT NULL,
go_hp_fecha TIMESTAMP
);



CREATE TABLE go_ctrl_hs (
go_ctrl_id  INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
go_ctrl_u VARCHAR(30) NOT NULL,
go_ctrl_fran VARCHAR(30) NOT NULL,
go_ctrl_comp VARCHAR(30) NOT NULL,
go_ctrl_dia VARCHAR(30) NOT NULL,
go_ctrl_cant VARCHAR(30) NOT NULL,
go_ctrl_cantfranco VARCHAR(30) NOT NULL,
go_ctrl_umodif TIMESTAMP
);

