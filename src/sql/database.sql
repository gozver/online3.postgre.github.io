DROP DATABASE IF EXISTS db_e03;
CREATE DATABASE db_e03 WITH OWNER = postgres ENCODING = 'UTF8' CONNECTION LIMIT = -1;

DROP TABLE IF EXISTS usuarios;

CREATE TABLE usuarios (
    usr VARCHAR(100) NOT NULL,    
    pwd VARCHAR(100) NOT NULL,
    CONSTRAINT PK_usuarios PRIMARY KEY (usr)
);

DROP TABLE IF EXISTS balances;

CREATE TABLE balances (
    id_bal SERIAL NOT NULL,
    usr_id VARCHAR(100) NOT NULL,    
    fech_ing DATE DEFAULT CURRENT_DATE,
    fech_gas DATE DEFAULT CURRENT_DATE,
    desc_ing VARCHAR(255) NOT NULL,
    desc_gas VARCHAR(255) NOT NULL,
    cant_ing INT NOT NULL,
    cant_gas INT NOT NULL,     
    CONSTRAINT PK_balances PRIMARY KEY (id_bal)
);

ALTER TABLE balances ADD FOREIGN KEY (usr_id) REFERENCES usuarios (usr);

INSERT INTO usuarios (usr, pwd) VALUES
('admin', '$2y$10$S7sOc.5U1qRdvJUyLrp4fe80zlqlsesUt7PNsSKnEHqYg9od.WlRy');

INSERT INTO balances (usr_id, fech_ing, fech_gas, desc_ing, desc_gas, cant_ing, cant_gas) VALUES
('admin', '03-01-2019', '04-03-2019', 'Aportacion inicial', 'Nomina', 1500, 1500),
('admin', '12-21-2019', '05-30-2019', 'Intereses', 'Prestamo', 250, 500),
('admin', '07-16-2019', '07-26-2019', 'Dividendos', 'Seguro', 500, 250),
('admin', '06-14-2019', '09-17-2019', 'Subvencion', 'Alquiler', 750, 500),
('admin', '10-22-2019', '11-13-2019', 'Donacion', 'Luz y agua', 1000, 100);