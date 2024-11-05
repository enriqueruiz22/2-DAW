<%@ page import="com.proyectoservidor.contenido.Contenido" %>
<%@ include file="Header.jsp" %>

<div class="container mt-5">
    <h2 class="text-center mb-4">Testimonios de Clientes</h2>
    <ul>
        <% for (String testimonio : Contenido.getTestimonios()) { %>
            <li><%= testimonio %></li>
        <% } %>
    </ul>
</div>

<%@ include file="Footer.jsp" %>