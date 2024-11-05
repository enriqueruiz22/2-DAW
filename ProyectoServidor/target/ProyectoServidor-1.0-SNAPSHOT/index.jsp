<%@ page import="com.proyectoservidor.contenido.Contenido" %>
<%@ include file="Header.jsp" %>

<div class="container mt-5">
  <div class="jumbotron text-center">
    <h1 class="display-4">Bienvenido a TechSolutions</h1>
    <p class="lead"><%= Contenido.getPresentacion() %></p>
    <hr class="my-4">
    <p>En TechSolutions nos dedicamos a ofrecer servicios tecnol�gicos innovadores que ayudan a empresas de todos los tama�os a mejorar sus procesos y seguridad. Descubre c�mo podemos optimizar tus sistemas, proteger tus datos y proporcionarte soluciones a medida. Adem�s, conoce m�s sobre nuestro equipo, nuestra misi�n y c�mo podemos colaborar juntos para alcanzar tus objetivos tecnol�gicos.</p>
  </div>
</div>

<%@ include file="Footer.jsp" %>