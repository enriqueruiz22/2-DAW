<%@ page import="com.proyectoservidor.contenido.Contenido" %>
<%@ include file="Header.jsp" %>

<div class="container mt-5">
    <h2 class="text-center mb-4">Nuestra Localizaci�n</h2>
  
    <p>Nos encontramos en:</p>
    <address>
        <%= Contenido.getDireccion() %><br>
        Tel�fono: <%= Contenido.getTelefono() %><br>
        Correo Electr�nico: <%= Contenido.getEmail() %>
    </address>
</div>

<%@ include file="Footer.jsp" %>