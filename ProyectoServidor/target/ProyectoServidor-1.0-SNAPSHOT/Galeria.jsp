<%@ page import="com.proyectoservidor.contenido.Contenido" %>
<%@ include file="Header.jsp" %>

<div class="container mt-5">
    <h2 class="text-center mb-4">Galería de Proyectos y Soluciones</h2>
    <div class="row">
        <div class="col-md-4 mb-3">
            <img src="images/optimizacion.webp" class="img-fluid" alt="Optimización de Sistemas">
            <p class="text-center mt-2">Proyecto de Optimización de Sistemas: Implementamos un sistema para mejorar la eficiencia operativa.</p>
        </div>
        <div class="col-md-4 mb-3">
            <img src="images/seguridad.webp" class="img-fluid" alt="Ciberseguridad">
            <p class="text-center mt-2">Implementación de Soluciones de Seguridad para proteger los datos de la empresa contra amenazas digitales.</p>
        </div>
        <div class="col-md-4 mb-3">
            <img src="images/integracion.webp" class="img-fluid" alt="Integración de Software">
            <p class="text-center mt-2">Integración de Software Empresarial para mejorar la conectividad y eficiencia entre sistemas.</p>
        </div>
    </div>
</div>

<%@ include file="Footer.jsp" %>
