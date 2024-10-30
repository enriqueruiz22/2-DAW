Descripción del Proyecto
En este proyecto, he creado una serie de formularios que permiten probar diferentes métodos HTTP para simular operaciones CRUD (Crear, Leer, Actualizar y Eliminar) sobre una "entidad usuario". Cada formulario está diseñado para manejar un método específico y realizar las siguientes acciones:

GET: Consultar un usuario en el servidor.
POST: Crear un nuevo usuario.
PUT: Actualizar todos los datos de un usuario existente.
DELETE: Eliminar un usuario por su ID.
PATCH: Actualizar parcialmente los datos de un usuario, solo los campos especificados.
Estructura de Archivos
Todos los archivos del proyecto están organizados dentro de la carpeta Proyecto_HTTP:

index.html: Contiene los formularios para cada método HTTP.
procesar.php: Archivo PHP que procesa las solicitudes y devuelve respuestas simuladas en formato JSON.
script.js: Código JavaScript que gestiona las solicitudes asíncronas (AJAX) para los métodos PUT, DELETE y PATCH.
