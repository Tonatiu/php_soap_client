insert into asignatura(nombre, creditos, id_carrera)
	values("Ingeniería de software", 3.5, 1);
insert into asignatura(nombre, creditos, id_carrera)
	values("Liderazgo y desarrollo profesional", 4.5, 1);
insert into asignatura(nombre, creditos, id_carrera)
	values("Sistemas Distribuidos", 3.5, 1);
insert into asignatura(nombre, creditos, id_carrera)
	values("Cálculo aplicado", 3.5, 1);
insert into asignatura(nombre, creditos, id_carrera)
	values("Matemáticas avanzadas", 3.5, 1);
insert into asignatura(nombre, creditos, id_carrera)
	values("Teoria de comunicaciones y señales", 3.5, 1);

insert into examen(fecha, id_parcial, idAsignatura)
	values(CURDATE(), 2, 2);
insert into examen(fecha, id_parcial, idAsignatura)
	values(CURDATE(), 3, 3);
insert into examen(fecha, id_parcial, idAsignatura)
	values(CURDATE(), 2, 4);
insert into examen(fecha, id_parcial, idAsignatura)
	values(CURDATE(), 1, 6);
insert into examen(fecha, id_parcial, idAsignatura)
	values(CURDATE(), 1, 7);
insert into examen(fecha, id_parcial, idAsignatura)
	values(CURDATE(), 3, 5);

insert into pregunta(nombre)
	values("¿Qué es un objeto?");
insert into pregunta(nombre)
	values("¿Que frase define mejor la herencia?");
insert into pregunta(nombre)
	values("¿Qué es la agregación?");
insert into pregunta(nombre)
	values("¿Qué es la encapsulación?");

insert into pregunta(nombre)
	values("¿Qué es SCRUM?");
insert into pregunta(nombre)
	values("¿Cual de las siguientes es una metodología de desarrollo?");
insert into pregunta(nombre)
	values("¿Cual es el ciclo de vida del software?");
insert into pregunta(nombre)
	values("¿Qué es una metodología ágil?");

insert into pregunta(nombre)
	values("¿Qué es una aplicación distribuída?");
insert into pregunta(nombre)
	values("¿Qué es un wsdl?");
insert into pregunta(nombre)
	values("¿Qué es REST");
insert into pregunta(nombre)
	values("¿Qué es SOAP?");

insert into respuesta(nombre)
	values("Es un concepto abstracto que define a un objeto del universo que percibimos, contiene métodos y atributos que definene su comportamiento");
insert into pregunta(nombre)
	values("La herencia es la adquisición de las características que una clase obtiene al hacer referencia a otra");
insert into pregunta(nombre)
	values("La agregación se refiere a la inclusión de un objeto dentro de otro pasando a formar parte de sus atributos");
insert into pregunta(nombre)
	values("Método que permite mantener protegidos los atributos de un objeto");


insert into respuesta(nombre)
	values("Metodología ágil que incluye sprints, reuniones constantes y requiere definir roles de usuario");
insert into pregunta(nombre)
	values("RUP");
insert into pregunta(nombre)
	values("Diseño, implementación, mantenimiento, muerte");
insert into pregunta(nombre)
	values("SCRUMBAN");

insert into respuesta(nombre)
	values("Aplicación cuyos módulos se definen en distintos ordenadores y que al final cumplen con un fin en específico");
insert into pregunta(nombre)
	values("Un descriptor de lenguajes que permite la invocación remota de métodos");
insert into pregunta(nombre)
	values("Protocolo de transferencia por texto plano, definido para realizar rpc a un servidor");
insert into pregunta(nombre)
	values("Protocolo de transferencia por medio de XML para realizar rpc a un servidor");

insert into pregunta_examen_respuesta(id_pregunta, id_respuesta, id_examen)
	values(1, 1, 1);
insert into pregunta_examen_respuesta(id_pregunta, id_respuesta, id_examen)
	values(2, 2, 1);
insert into pregunta_examen_respuesta(id_pregunta, id_respuesta, id_examen)
	values(3, 3, 1);
insert into pregunta_examen_respuesta(id_pregunta, id_respuesta, id_examen)
	values(4, 4, 1);

insert into pregunta_examen_respuesta(id_pregunta, id_respuesta, id_examen)
	values(5, 5, 2);
insert into pregunta_examen_respuesta(id_pregunta, id_respuesta, id_examen)
	values(6, 6, 2);
insert into pregunta_examen_respuesta(id_pregunta, id_respuesta, id_examen)
	values(7, 7, 2);
insert into pregunta_examen_respuesta(id_pregunta, id_respuesta, id_examen)
	values(8, 8, 2);

insert into pregunta_examen_respuesta(id_pregunta, id_respuesta, id_examen)
	values(9, 9, 4);
insert into pregunta_examen_respuesta(id_pregunta, id_respuesta, id_examen)
	values(10, 10, 4);
insert into pregunta_examen_respuesta(id_pregunta, id_respuesta, id_examen)
	values(11, 11, 4);
insert into pregunta_examen_respuesta(id_pregunta, id_respuesta, id_examen)
	values(12, 12, 4);

