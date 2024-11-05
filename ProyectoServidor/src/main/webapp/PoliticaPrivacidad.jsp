<%@ page import="com.proyectoservidor.contenido.Contenido" %>
<%@ include file="Header.jsp" %>

<div class="container mt-5">
    <h2 class="text-center mb-4">Política de Privacidad</h2>
    <p><%= Contenido.getPoliticaPrivacidad() %></p>
</div>

<%@ include file="Footer.jsp" %>
