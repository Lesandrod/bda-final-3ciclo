conn = new Mongo();
db = conn.getDB("Estudiantes");
db.Estudiantes.insert([

   {  
     Nombre:    'Lennard',
     Apellido:    'Idone',
	  Edad:    '18',
     Sexo:    'Masculino',
	  Email:   'lentrix12345@gmail.com',
      
   } 
   
 ] );
