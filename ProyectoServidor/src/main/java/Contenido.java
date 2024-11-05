
package com.proyectoservidor.contenido;

public class Contenido {
    
    // Métodos existentes

    public static String getPresentacion() {
        return "Bienvenido a Mi Empresa. Ofrecemos soluciones innovadoras para tus necesidades.";
    }

    public static String getMision() {
        return "Nuestra misión es proporcionar productos y servicios de alta calidad que mejoren la vida de las personas.";
    }

    public static String getVision() {
        return "Aspiramos a ser líderes en el sector tecnológico a nivel global, con un enfoque en la innovación continua.";
    }

    public static String[] getValores() {
        return new String[] { "Compromiso", "Innovación", "Responsabilidad", "Trabajo en equipo" };
    }

    public static String[] getTestimonios() {
        return new String[] {
            "¡Excelente servicio! Muy profesionales.",
            "Productos de alta calidad.",
            "La atención al cliente es fantástica."
        };
    }

    public static String[][] getServicios() {
        return new String[][] {
            {"Servicio 1", "Optimización de Sistemas de Información. Ayudamos a mejorar la eficiencia de tus sistemas de información, asegurando un rendimiento óptimo y una integración fluida con otros sistemas.", "$50"},
            {"Servicio 2", "Implementación de Soluciones de Seguridad. Proporcionamos servicios de implementación de seguridad cibernética para proteger los datos y activos de tu empresa contra amenazas digitales.", "$100"},
            {"Servicio 3", "Integración de Software Empresarial. Nos encargamos de la integración de software empresarial, ayudando a mejorar la conectividad entre los diferentes sistemas y plataformas de tu negocio.", "$150"}
        };
    }

    public static String[] getPreguntasFrecuentes() {
        return new String[] {
            "¿Cómo puedo contactar con ustedes?",
            "¿Cuáles son sus horarios de atención?",
            "¿Ofrecen servicios personalizados?"
        };
    }

    public static String[] getRespuestasFrecuentes() {
        return new String[] {
            "Puede contactarnos a través del formulario de contacto o al teléfono (123) 456-7890.",
            "Nuestro horario de atención es de lunes a viernes de 9:00 a 18:00.",
            "Sí, ofrecemos servicios personalizados según las necesidades del cliente."
        };
    }

    public static String getPoliticaPrivacidad() {
        return "Nos comprometemos a proteger la privacidad de nuestros usuarios. No compartimos información personal sin consentimiento.";
    }

    public static String getTerminosYCondiciones() {
        return "Al utilizar este sitio, usted acepta nuestros términos y condiciones. Lea atentamente antes de proceder.";
    }

    // Método getDireccion agregado
    public static String getDireccion() {
        return "Calle Real 1, Huelva, España.";
    }

    public static String getTelefono() {
        return "(123) 456-7890";
    }

    public static String getEmail() {
        return "contacto@miempresa.com";
    }

    // Método getDescripcion agregado
    public static String getDescripcion() {
        return "Somos una empresa dedicada a ofrecer soluciones tecnológicas innovadoras.";
    }

    // Método getGaleria agregado
    public static String[] getGaleria() {
        return new String[] {
            "images/galeria1.jpg",
            "images/galeria2.jpg",
            "images/galeria3.jpg"
        };
    }
}