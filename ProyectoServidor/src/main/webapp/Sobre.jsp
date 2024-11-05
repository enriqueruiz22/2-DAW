<%@ page import="com.proyectoservidor.contenido.Contenido" %>
<%@ include file="Header.jsp" %>

<div class="container mt-5">
    <h2 class="text-center mb-4">Sobre Nosotros</h2>
  
    <p><%= Contenido.getDescripcion() %></p>
  
    <h3>Misión</h3>
    <p><%= Contenido.getMision() %></p>
  
    <h3>Visión</h3>
    <p><%= Contenido.getVision() %></p>
  
    <h3>Valores</h3>
    <ul>
        <% for (String valor : Contenido.getValores()) { %>
            <li><%= valor %></li>
        <% } %>
    </ul>
</div>

<%@ include file="Footer.jsp" %>