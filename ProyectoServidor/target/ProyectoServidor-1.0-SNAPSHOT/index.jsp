<%@ page import="com.proyectoservidor.contenido.Contenido" %>
<%@ include file="Header.jsp" %>

<div class="container mt-5">
  <div class="jumbotron text-center">
    <h1 class="display-4">Bienvenido a TechSolutions</h1>
    <p class="lead"><%= Contenido.getPresentacion() %></p>
    <hr class="my-4">
    <p>En TechSolutions nos dedicamos a ofrecer servicios tecnológicos innovadores que ayudan a empresas de todos los tamaños a mejorar sus procesos y seguridad. Descubre cómo podemos optimizar tus sistemas, proteger tus datos y proporcionarte soluciones a medida. Además, conoce más sobre nuestro equipo, nuestra misión y cómo podemos colaborar juntos para alcanzar tus objetivos tecnológicos.</p>
  </div>
</div>

<%@ include file="Footer.jsp" %>