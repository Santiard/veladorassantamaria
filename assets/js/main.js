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
            window.open('https://wa.me/573144753682?text=Hola,%20me%20gustar%C3%ADa%20recibir%20asesor%C3%ADa%20personalizada%20de%20Veladoras%20Santa%20Mar%C3%ADa', '_blank');
        
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

// 4. Buscador y Filtrado Interactivo del Catálogo de Productos
    const filterButtons = document.querySelectorAll('.catalog-filter-btn');
    const productCards = document.querySelectorAll('.product-card-minimal');
    const emptyNotice = document.getElementById('catalogEmptyNotice');
    const resetFiltersBtn = document.getElementById('btnResetFilters');
    const catalogSearchInput = document.getElementById('catalogSearchInput');
    const catalogSearchClearBtn = document.getElementById('catalogSearchClearBtn');

    let currentCategory = 'todos';
    let currentSearchTerm = '';

    function updateCatalogDisplay() {
        let visibleCount = 0;
        const term = currentSearchTerm.trim().toLowerCase();

        productCards.forEach(function (card) {
            const cardCat = (card.getAttribute('data-category') || '').toLowerCase();
            const cardTitleEl = card.querySelector('.product-card-title');
            const cardCatEl = card.querySelector('.product-card-category');
            
            const titleText = cardTitleEl ? cardTitleEl.textContent.toLowerCase() : '';
            const catText = cardCatEl ? cardCatEl.textContent.toLowerCase() : '';

            const matchesCategory = (currentCategory === 'todos' || cardCat === currentCategory);
            const matchesSearch = !term || titleText.includes(term) || catText.includes(term);

            if (matchesCategory && matchesSearch) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        
});

        if (emptyNotice) {
            emptyNotice.style.display = (visibleCount === 0) ? 'block' : 'none';
        }

        if (catalogSearchClearBtn) {
            catalogSearchClearBtn.style.display = term ? 'flex' : 'none';
        }
    }

    function applyCategoryFilter(category) {
        currentCategory = category;
        filterButtons.forEach(function (btn) {
            if (btn.getAttribute('data-filter') === category) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        
});
        updateCatalogDisplay();
    }

    if (filterButtons.length > 0 || catalogSearchInput) {
        filterButtons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const targetFilter = this.getAttribute('data-filter');
                applyCategoryFilter(targetFilter);
            
});
        
});

        if (catalogSearchInput) {
            catalogSearchInput.addEventListener('input', function () {
                currentSearchTerm = this.value;
                updateCatalogDisplay();
            
});

            if (catalogSearchClearBtn) {
                catalogSearchClearBtn.addEventListener('click', function () {
                    catalogSearchInput.value = '';
                    currentSearchTerm = '';
                    updateCatalogDisplay();
                    catalogSearchInput.focus();
                
});
            }
        }

        if (resetFiltersBtn) {
            resetFiltersBtn.addEventListener('click', function () {
                if (catalogSearchInput) catalogSearchInput.value = '';
                currentSearchTerm = '';
                applyCategoryFilter('todos');
            
});
        }

        // Revisar parámetros en URL (?cat=velones o ?s=termino o ?focus=search)
        const urlParams = new URLSearchParams(window.location.search);
        const catParam = urlParams.get('cat');
        const sParam = urlParams.get('s');
        const focusParam = urlParams.get('focus');

        if (catParam) {
            applyCategoryFilter(catParam);
        }

        if (sParam && catalogSearchInput) {
            catalogSearchInput.value = sParam;
            currentSearchTerm = sParam;
            updateCatalogDisplay();
        }

        if (focusParam === 'search' && catalogSearchInput) {
            setTimeout(function() {
                catalogSearchInput.scrollIntoView({ behavior: 'smooth', block: 'center' 
});
                catalogSearchInput.focus();
            }, 300);
        }
    }

    // 5. Botón Lupa en Header y Desplegable de Búsqueda Rápida
    const headerSearchToggleBtn = document.getElementById('headerSearchToggleBtn');
    const headerSearchDropdown = document.getElementById('headerSearchDropdown');
    const headerDropdownClose = document.getElementById('headerDropdownClose');
    const headerDropdownInput = document.getElementById('headerDropdownInput');

    if (headerSearchToggleBtn) {
        headerSearchToggleBtn.addEventListener('click', function (e) {
            e.preventDefault();
            if (catalogSearchInput) {
                // Si ya estamos en el catálogo, desplazar y enfocar el buscador
                catalogSearchInput.scrollIntoView({ behavior: 'smooth', block: 'center' 
});
                catalogSearchInput.focus();
                catalogSearchInput.select();
            } else if (headerSearchDropdown) {
                // En otras páginas, alternar el desplegable superior
                const isOpen = headerSearchDropdown.style.display === 'block';
                headerSearchDropdown.style.display = isOpen ? 'none' : 'block';
                if (!isOpen && headerDropdownInput) {
                    headerDropdownInput.focus();
                }
            }
        
});
    }

    if (headerDropdownClose && headerSearchDropdown) {
        headerDropdownClose.addEventListener('click', function () {
            headerSearchDropdown.style.display = 'none';
        
});
    }

});
