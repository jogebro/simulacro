CREATE TABLE empleados(
  id INT PRIMARY KEY AUTO_INCREMENT,
  usuario VARCHAR(60),
  password VARCHAR(80)
);

CREATE TABLE constructoras(
  id_constructora INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(60),
  direccion VARCHAR(80)
);