/**
 * JavaScript Principal - Veladoras Santa María
 * Manejo de interacciones del header, menú drawer móvil y widgets.
 */

document.addEventListener('DOMContentLoaded', function () {
    // 1. Elementos del Menú Móvil / Drawer
    const menuToggleBtn = document.getElementById('menuToggleBtn');
    const drawerCloseBtn = document.getElementById('drawerCloseBtn');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const drawerOverlay = document.getElementById('drawerOverlay');

    function openDrawer() {
        if (mobileDrawer && drawerOverlay) {
            mobileDrawer.classList.add('active');
            drawerOverlay.classList.add('active');
            mobileDrawer.setAttribute('aria-hidden', 'false');
            if (menuToggleBtn) menuToggleBtn.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden'; // Evita scroll de fondo
        }
    }

    function closeDrawer() {
        if (mobileDrawer && drawerOverlay) {
            mobileDrawer.classList.remove('active');
            drawerOverlay.classList.remove('active');
            mobileDrawer.setAttribute('aria-hidden', 'true');
            if (menuToggleBtn) menuToggleBtn.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }
    }

    if (menuToggleBtn) {
        menuToggleBtn.addEventListener('click', openDrawer);
    }

    if (drawerCloseBtn) {
        drawerCloseBtn.addEventListener('click', closeDrawer);
    }

    if (drawerOverlay) {
        drawerOverlay.addEventListener('click', closeDrawer);
    }

    // Cerrar con tecla Escape
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && mobileDrawer && mobileDrawer.classList.contains('active')) {
            closeDrawer();
        }
    });

    // Cerrar el drawer al pulsar en cualquier enlace interno
    const drawerLinks = document.querySelectorAll('.drawer-nav-list a');
    drawerLinks.forEach(function (link) {
        link.addEventListener('click', closeDrawer);
    });

    // 2. Botón de Asistente de Chat Flotante
    const chatAssistantBtn = document.getElementById('chatAssistantBtn');
    if (chatAssistantBtn) {
        chatAssistantBtn.addEventListener('click', function () {
            // Abre WhatsApp con mensaje predefinido o salta al contacto
            window.open('https://wa.me/573000000000?text=Hola,%20me%20gustar%C3%ADa%20recibir%20asesor%C3%ADa%20personalizada%20de%20Veladoras%20Santa%20Mar%C3%ADa', '_blank');
        });
    }

    // 3. Sombra dinámica en Cabecera al hacer scroll
    const siteHeader = document.getElementById('siteHeader');
    window.addEventListener('scroll', function () {
        if (siteHeader) {
            if (window.scrollY > 20) {
                siteHeader.style.boxShadow = '0 4px 20px rgba(1, 22, 137, 0.10)';
            } else {
                siteHeader.style.boxShadow = '0 2px 10px rgba(1, 22, 137, 0.04)';
            }
        }
    });
});
