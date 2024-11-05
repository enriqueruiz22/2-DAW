<%@ page import="com.proyectoservidor.contenido.Contenido" %>
<%@ include file="Header.jsp" %>

<div class="container mt-5">
    <h2 class="text-center mb-4">Preguntas Frecuentes</h2>
    <% 
        String[] preguntas = Contenido.getPreguntasFrecuentes();
        String[] respuestas = Contenido.getRespuestasFrecuentes();
        for (int i = 0; i < preguntas.length; i++) { 
    %>
        <div class="faq-item mb-4">
            <h5 class="question"><%= preguntas[i] %></h5>
            <p class="answer"><%= respuestas[i] %></p>
        </div>
    <% } %>
</div>

<%@ include file="Footer.jsp" %>
