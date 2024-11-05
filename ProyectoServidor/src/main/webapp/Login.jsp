<%@ page import="com.proyectoservidor.contenido.Contenido" %>
<%@ include file="Header.jsp" %>

<div class="container mt-5">
    <h2 class="text-center mb-4">Iniciar Sesión</h2>

    <form method="post" action="LoginServlet">
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Tu contraseña" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </div>
    </form>
</div>

<%@ include file="Footer.jsp" %>
