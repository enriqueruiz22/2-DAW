<%@ page import="com.proyectoservidor.contenido.Contenido" %>
<%@ include file="Header.jsp" %>

<div class="container mt-5">
    <h2 class="text-center mb-4">Términos y Condiciones</h2>
    <p><%= Contenido.getTerminosYCondiciones() %></p>
</div>

<%@ include file="Footer.jsp" %>
