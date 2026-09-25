<?php
/**
 * Footer de la plantilla - Veladoras Santa María
 */
?>

<!-- ===========================================================================
     BOTONES FLOTANTES DE ACCIÓN RÁPIDA (WhatsApp & Chat Asistencia)
     =========================================================================== -->

<!-- Botón Flotante de WhatsApp (Izquierda) -->
<a href="https://wa.me/573144753682?text=Hola,%20quisiera%20asesor%C3%ADa%20sobre%20las%20Veladoras%20Santa%20Mar%C3%ADa" 
   class="vsm-floating-whatsapp" 
   target="_blank" 
   rel="noopener" 
   aria-label="Contactar por WhatsApp">
    <svg width="34" height="34" viewBox="0 0 24 24" fill="#ffffff">
        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.34C9.36 7.34 9.09 7.4 8.87 7.65C8.65 7.89 8.02 8.48 8.02 9.7C8.02 10.92 8.91 12.1 9.03 12.26C9.15 12.42 10.74 14.88 13.21 15.94C15.26 16.83 15.68 16.65 16.12 16.61C16.56 16.57 17.54 16.03 17.74 15.46C17.95 14.89 17.95 14.4 17.89 14.3C17.83 14.2 17.66 14.14 17.4 14.01C17.15 13.88 15.89 13.26 15.66 13.18C15.43 13.1 15.26 13.06 15.09 13.3C14.93 13.55 14.44 14.14 14.3 14.3C14.15 14.46 14 14.48 13.75 14.36C13.5 14.23 12.69 13.97 11.73 13.11C10.98 12.44 10.47 11.62 10.33 11.37C10.18 11.12 10.31 10.99 10.44 10.86C10.55 10.75 10.69 10.57 10.81 10.42C10.94 10.28 10.98 10.18 11.06 10.01C11.15 9.85 11.1 9.7 11.04 9.58C10.98 9.46 10.5 8.28 10.29 7.79C10.09 7.31 9.89 7.38 9.73 7.37C9.59 7.37 9.42 7.34 9.53 7.34Z"/>
    </svg>
    <span class="vsm-whatsapp-tooltip">¿Tienes dudas? Escríbenos</span>
</a>

<!-- Botón Flotante de Chat / Asistencia (Derecha) -->
<button type="button" class="vsm-floating-chat" id="chatAssistantBtn" aria-label="Abrir asistente de chat">
    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
    </svg>
</button>


<!-- ===========================================================================
     PIE DE PÁGINA PRINCIPAL (Footer Institucional)
     =========================================================================== -->
<footer class="site-footer-vsm" id="contacto">
    <div class="container-vsm">
        
        <div class="footer-grid-vsm">
            
            <!-- Columna 1: Identidad Corporativa -->
            <div class="footer-col footer-col-brand">
                <div class="footer-brand-header">
                    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logogrande.webp' ) ); ?>" alt="Velas y Velones Santa María Plus S.A.S." class="footer-logo-full" width="90" height="114">
                    <div class="footer-brand-info">
                        <span class="footer-brand-title">Santa María</span>
                        <span class="footer-brand-sub">Velas y Velones Plus S.A.S.</span>
                    </div>
                </div>
                <p class="footer-brand-desc">
                    Maestros fabricantes de velas, cirios y veladoras tradicionales. Elaboradas con cera de alta pureza y mecha de algodón para garantizar una llama limpia, solemne y duradera.
                </p>
                <div class="footer-trust-badges">
                    <span class="trust-badge">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>100% Cera de Calidad</span>
                    </span>
                    <span class="trust-badge">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Envíos a Nivel Nacional</span>
                    </span>
                </div>
            </div>

            <!-- Columna 2: Líneas de Productos -->
            <div class="footer-col">
                <h3 class="footer-title">Líneas de Productos</h3>
                <ul class="footer-links-list">
                    <li><a href="#velones">Velones Tradicionales</a></li>
                    <li><a href="#velas">Velas Blancas y de Colores</a></li>
                    <li><a href="#devocionales">Veladoras de Vaso Devocionales</a></li>
                    <li><a href="#cirios">Cirios Pascuales</a></li>
                    <li><a href="#aromas">Velas Aromáticas y Esencias</a></li>
                    <li><a href="#citronela">Línea Citronela Exterior</a></li>
                </ul>
            </div>

            <!-- Columna 3: Enlaces de Interés -->
            <div class="footer-col">
                <h3 class="footer-title">Enlaces Útiles</h3>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url( home_url( '/nosotros/' ) ); ?>">Nuestra Historia</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#distribuidores' ) ); ?>">Venta Mayorista (Distribuidores)</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#ofertas' ) ); ?>">Catálogo de Ofertas</a></li>
                    <li><a href="#preguntas-frecuentes">Preguntas Frecuentes</a></li>
                    <li><a href="#politicas">Políticas de Envío y Devolución</a></li>
                </ul>
            </div>

            <!-- Columna 4: Contacto y Atención al Cliente -->
            <div class="footer-col">
                <h3 class="footer-title">Atención al Cliente</h3>
                <p class="footer-contact-item">
                    <strong>Sede Cúcuta (Principal):</strong><br>
                    <a href="https://maps.app.goo.gl/WEqPBmxZDsdk9gb5A" target="_blank" rel="noopener">Av. 11 #14-45, Cúcuta</a><br>
                    <a href="tel:+573144753682" class="footer-phone-link">+57 (314) 475-3682</a>
                </p>
                <p class="footer-contact-item">
                    <strong>Sede Los Patios:</strong><br>
                    <a href="https://maps.google.com/?q=Calle+37+%237+-+80,+Los+Patios,+Norte+de+Santander" target="_blank" rel="noopener">Calle 37 #7 - 80, Los Patios</a><br>
                    <a href="tel:+573134616819" class="footer-phone-link">+57 (313) 461-6819</a>
                </p>
                <p class="footer-contact-item">
                    <strong>Teléfono / Pedidos:</strong><br>
                    <a href="tel:+573144753682" class="footer-phone-link">+57 (314) 475-3682</a>
                </p>
                <p class="footer-contact-item">
                    <strong>Correo Electrónico:</strong><br>
                    <a href="mailto:contacto@veladorassantamaria.com">contacto@veladorassantamaria.com</a>
                </p>
            </div>

        </div>

        <!-- Barra Inferior de Derechos Reservados -->
        <div class="footer-bottom-bar">
            <p>&copy; <?php echo date( 'Y' ); ?> <strong>Veladoras Santa María</strong>. Todos los derechos reservados.</p>
            <p class="footer-legal-links">
                <a href="#privacidad">Aviso de Privacidad</a> &bull; 
                <a href="#terminos">Términos y Condiciones</a>
            </p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
