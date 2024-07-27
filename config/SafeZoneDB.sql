/*DatabaseName: SafeZoneDB
*/

CREATE TABLE Rol (
    idRol INT AUTO_INCREMENT PRIMARY KEY,
    nombreRol VARCHAR(100) NOT NULL
);

CREATE TABLE Usuario (
    idUsuario INT AUTO_INCREMENT PRIMARY KEY, 
    nombre VARCHAR(100) NOT NULL,
    primer_apellido VARCHAR(100) NOT NULL,
    segundo_apellido VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    numero_telefonico INT NOT NULL,
    contraseña VARCHAR(100) NOT NULL,
    foto VARCHAR(100),
    idRol INT NOT NULL,
    FOREIGN KEY (idRol) REFERENCES Rol(idRol)
);

CREATE TABLE Denunciante (
    idDenunciante INT AUTO_INCREMENT PRIMARY KEY, 
    nombre VARCHAR(100) NOT NULL,
    primer_apellido VARCHAR(100) NOT NULL,
    segundo_apellido VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    numero_telefonico INT NOT NULL
);

CREATE TABLE Denunciado (
    idDenunciado INT AUTO_INCREMENT PRIMARY KEY, 
    nombre VARCHAR(100) NOT NULL,
    primer_apellido VARCHAR(100) NOT NULL,
    segundo_apellido VARCHAR(100) NOT NULL
);

CREATE TABLE Denuncia (
    idDenuncia INT AUTO_INCREMENT PRIMARY KEY, 
    idDenunciado INT NOT NULL, 
    idDenunciante INT NOT NULL,
    tipo VARCHAR(100) NOT NULL, 
    fecha DATE, 
    lugar VARCHAR(100),
    relacion_agresor VARCHAR(100),
    documentacion VARCHAR(100),
    FOREIGN KEY (idDenunciado) REFERENCES Denunciado(idDenunciado),
    FOREIGN KEY (idDenunciante) REFERENCES Denunciante(idDenunciante)
);

CREATE TABLE LugaresSeguros (
    idLugarSeguro INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL, 
    direccion VARCHAR(100) NOT NULL,
    linkGoogle VARCHAR(200) NOT NULL, 
    datosContacto VARCHAR(100) NOT NULL
);

CREATE TABLE Presentador (
    idPresentador INT AUTO_INCREMENT PRIMARY KEY, 
    nombre VARCHAR(100) NOT NULL, 
    correo VARCHAR(100) NOT NULL,
    numero_telefonico INT NOT NULL
);

CREATE TABLE Provincia (
    idProvincia INT PRIMARY KEY AUTO_INCREMENT, 
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE Canton (
    idCanton INT PRIMARY KEY AUTO_INCREMENT, 
    nombre VARCHAR(100) NOT NULL,
    idProvincia INT NOT NULL, 
    FOREIGN KEY (idProvincia) REFERENCES Provincia(idProvincia)
);

CREATE TABLE Distrito (
    idDistrito INT PRIMARY KEY AUTO_INCREMENT, 
    nombre VARCHAR(100) NOT NULL,
    idCanton INT NOT NULL,
    FOREIGN KEY (idCanton) REFERENCES Canton(idCanton)
);

CREATE TABLE Charla (
    idCharla INT AUTO_INCREMENT PRIMARY KEY, 
    idPresentador INT NOT NULL, 
    fecha DATE NOT NULL, 
    hora TIME NOT NULL, 
    costo INT NOT NULL, 
    idProvincia INT NOT NULL, 
    idCanton INT NOT NULL, 
    idDistrito INT NOT NULL, 
    tipo VARCHAR(100) NOT NULL,
    duracion TIME NOT NULL, 
    formato VARCHAR(100) NOT NULL,
    objetivo VARCHAR(100) NOT NULL,
    descripcionCorta VARCHAR(100) NOT NULL,
    consiste VARCHAR(200) NOT NULL,
    foto VARCHAR(100) NOT NULL,
    FOREIGN KEY (idProvincia) REFERENCES Provincia(idProvincia),
    FOREIGN KEY (idCanton) REFERENCES Canton(idCanton),
    FOREIGN KEY (idDistrito) REFERENCES Distrito(idDistrito),
    FOREIGN KEY (idPresentador) REFERENCES Presentador(idPresentador)
);

CREATE TABLE Reserva (
    idReserva INT AUTO_INCREMENT PRIMARY KEY, 
    idCharla INT NOT NULL, 
    primerApellido VARCHAR(100) NOT NULL, 
    nombre VARCHAR(100) NOT NULL, 
    cedula VARCHAR(100) NOT NULL, 
    correo VARCHAR(100) NOT NULL,
    metodoPago VARCHAR(100) NOT NULL, 
    total INT NOT NULL, 
    FOREIGN KEY (idCharla) REFERENCES Charla(idCharla)
);

CREATE TABLE Consulta (
    idConsulta INT AUTO_INCREMENT PRIMARY KEY, 
    idUsuario INT NOT NULL, 
    pregunta VARCHAR(250),
    FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario)
);

CREATE TABLE Respuesta (
    idRespuesta INT AUTO_INCREMENT PRIMARY KEY, 
    idUsuario INT NOT NULL, 
    idConsulta INT NOT NULL, 
    respuesta VARCHAR(200) NOT NULL, 
    FOREIGN KEY (idConsulta) REFERENCES Consulta(idConsulta),
    FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario)
);

CREATE TABLE PreguntasFrecuentes (
    idPreguntaF INT AUTO_INCREMENT PRIMARY KEY,
    idRespuesta INT NOT NULL,
    FOREIGN KEY (idRespuesta) REFERENCES Respuesta(idRespuesta)
);
