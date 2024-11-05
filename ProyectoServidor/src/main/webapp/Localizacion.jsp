<%@ page import="com.proyectoservidor.contenido.Contenido" %>
<%@ include file="Header.jsp" %>

<div class="container mt-5">
    <h2 class="text-center mb-4">Nuestra Localización</h2>
  
    <p>Nos encontramos en:</p>
    <address>
        <%= Contenido.getDireccion() %><br>
        Teléfono: <%= Contenido.getTelefono() %><br>
        Correo Electrónico: <%= Contenido.getEmail() %>
    </address>
</div>

<%@ include file="Footer.jsp" %>