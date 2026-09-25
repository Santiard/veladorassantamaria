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

    // 4. Buscador, Filtrado y Carga Progresiva del Catálogo de Productos
    const filterButtons = document.querySelectorAll('.catalog-filter-btn');
    const productCards = Array.from(document.querySelectorAll('.product-card-minimal'));
    const emptyNotice = document.getElementById('catalogEmptyNotice');
    const resetFiltersBtn = document.getElementById('btnResetFilters');
    const catalogSearchInput = document.getElementById('catalogSearchInput');
    const catalogSearchClearBtn = document.getElementById('catalogSearchClearBtn');

    // Elementos de carga progresiva
    const loadMoreWrapper = document.getElementById('catalogLoadMoreWrapper');
    const btnLoadMore = document.getElementById('btnLoadMoreProducts');
    const countShownEl = document.getElementById('catalogCountShown');
    const countTotalEl = document.getElementById('catalogCountTotal');
    const progressBarEl = document.getElementById('catalogProgressBar');

    const BATCH_SIZE = 8;
    let visibleLimit = BATCH_SIZE;
    let currentCategory = 'todos';
    let currentSearchTerm = '';

    function updateCatalogDisplay(resetLimit) {
        if (resetLimit) {
            visibleLimit = BATCH_SIZE;
        }

        const term = currentSearchTerm.trim().toLowerCase();
        const matchedCards = [];

        productCards.forEach(function (card) {
            const cardCat = (card.getAttribute('data-category') || '').toLowerCase();
            const cardTitleEl = card.querySelector('.product-card-title');
            const cardCatEl = card.querySelector('.product-card-cat') || card.querySelector('.product-card-category');
            
            const titleText = cardTitleEl ? cardTitleEl.textContent.toLowerCase() : '';
            const catText = cardCatEl ? cardCatEl.textContent.toLowerCase() : '';

            const matchesCategory = (currentCategory === 'todos' || cardCat === currentCategory);
            const matchesSearch = !term || titleText.includes(term) || catText.includes(term);

            if (matchesCategory && matchesSearch) {
                matchedCards.push(card);
            } else {
                card.style.display = 'none';
            }
        });

        const totalMatched = matchedCards.length;
        const countToShow = Math.min(visibleLimit, totalMatched);

        matchedCards.forEach(function (card, index) {
            if (index < countToShow) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });

        if (countShownEl) countShownEl.textContent = countToShow;
        if (countTotalEl) countTotalEl.textContent = totalMatched;

        if (progressBarEl && totalMatched > 0) {
            const pct = Math.round((countToShow / totalMatched) * 100);
            progressBarEl.style.width = pct + '%';
        }

        if (loadMoreWrapper) {
            if (totalMatched === 0 || countToShow >= totalMatched) {
                if (btnLoadMore) btnLoadMore.style.display = 'none';
                if (totalMatched === 0) {
                    loadMoreWrapper.style.display = 'none';
                } else {
                    loadMoreWrapper.style.display = 'flex';
                }
            } else {
                loadMoreWrapper.style.display = 'flex';
                if (btnLoadMore) {
                    btnLoadMore.style.display = 'inline-flex';
                    btnLoadMore.disabled = false;
                }
            }
        }

        if (emptyNotice) {
            emptyNotice.style.display = (totalMatched === 0) ? 'block' : 'none';
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
        updateCatalogDisplay(true);
    }

    if (btnLoadMore) {
        btnLoadMore.addEventListener('click', function () {
            visibleLimit += BATCH_SIZE;
            updateCatalogDisplay(false);
        });
    }

    if (filterButtons.length > 0 || catalogSearchInput || productCards.length > 0) {
        // Inicializar display con lote de 8 al cargar
        updateCatalogDisplay(true);

        filterButtons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const targetFilter = this.getAttribute('data-filter');
                applyCategoryFilter(targetFilter);
            });
        });

        if (catalogSearchInput) {
            catalogSearchInput.addEventListener('input', function () {
                currentSearchTerm = this.value;
                updateCatalogDisplay(true);
            });

            if (catalogSearchClearBtn) {
                catalogSearchClearBtn.addEventListener('click', function () {
                    catalogSearchInput.value = '';
                    currentSearchTerm = '';
                    updateCatalogDisplay(true);
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

    // =========================================================================
    // 6. Carrusel Horizontal Interactivo de Reels de Instagram (Loop Continuo Circular)
    // =========================================================================
    const reelsCarousel = document.getElementById('reelsCarousel');
    const reelsViewport = document.getElementById('reelsViewport');
    const reelsTrack = document.getElementById('reelsTrack');
    const reelCards = Array.from(document.querySelectorAll('.reel-card'));
    const reelPrevBtn = document.getElementById('reelPrevBtn');
    const reelNextBtn = document.getElementById('reelNextBtn');
    const reelDots = Array.from(document.querySelectorAll('.reel-dot'));

    if (reelsCarousel && reelsViewport && reelsTrack && reelCards.length > 0) {
        let currentReelIndex = 0;
        let isMutedGlobal = true; // Por políticas de navegador inicia en silencio

        // Registrar posición relativa inicial de cada tarjeta: [-2, 2]
        const previousDiffs = reelCards.map(function (card, i) {
            let diff = (i - 0) % reelCards.length;
            if (diff > 2) diff -= reelCards.length;
            if (diff < -2) diff += reelCards.length;
            return diff;
        });

        function syncSoundButtons(muted) {
            reelCards.forEach(function (card) {
                const mutedIcon = card.querySelector('.icon-muted');
                const unmutedIcon = card.querySelector('.icon-unmuted');
                if (mutedIcon && unmutedIcon) {
                    mutedIcon.style.display = muted ? 'block' : 'none';
                    unmutedIcon.style.display = muted ? 'none' : 'block';
                }
            });
        }

        function updateCarousel(newIndex, autoPlay) {
            if (autoPlay === undefined) autoPlay = true;

            // Pausar y reiniciar video anterior
            const prevCard = reelCards[currentReelIndex];
            if (prevCard) {
                const prevVideo = prevCard.querySelector('.reel-video');
                if (prevVideo) {
                    prevVideo.pause();
                    prevVideo.currentTime = 0;
                }
                const prevFill = prevCard.querySelector('.reel-progress-fill');
                if (prevFill) prevFill.style.width = '0%';
                const prevIndicator = prevCard.querySelector('.reel-center-play-indicator');
                if (prevIndicator) prevIndicator.classList.remove('is-visible');
            }

            // Normalizar índice cíclico en rango [0, total - 1]
            const total = reelCards.length;
            newIndex = ((newIndex % total) + total) % total;
            currentReelIndex = newIndex;

            // Actualizar posiciones circulares en las 5 tarjetas (siempre hay a izquierda y derecha)
            const wrappingCards = [];
            reelCards.forEach(function (card, i) {
                let diff = (i - currentReelIndex) % total;
                if (diff > 2) diff -= total;
                if (diff < -2) diff += total;

                const oldDiff = previousDiffs[i];
                const isWrap = Math.abs(diff - oldDiff) > 2;

                if (isWrap) {
                    // Desactivar temporalmente la animación de traslación para evitar cruces visibles
                    card.style.transition = 'none';
                    wrappingCards.push(card);
                }

                card.classList.remove('is-active', 'is-prev', 'is-next', 'is-far-prev', 'is-far-next');

                if (diff === 0) {
                    card.classList.add('is-active');
                } else if (diff === 1) {
                    card.classList.add('is-next');
                } else if (diff === -1) {
                    card.classList.add('is-prev');
                } else if (diff === 2) {
                    card.classList.add('is-far-next');
                } else if (diff === -2) {
                    card.classList.add('is-far-prev');
                }

                previousDiffs[i] = diff;
            });

            // Si alguna tarjeta saltó de extremo a extremo, forzar reflujo y reactivar transiciones
            if (wrappingCards.length > 0) {
                void reelsTrack.offsetHeight;
                requestAnimationFrame(function () {
                    wrappingCards.forEach(function (c) {
                        c.style.transition = '';
                    });
                });
            }

            // Actualizar indicadores de paginación
            reelDots.forEach(function (dot, i) {
                if (i === currentReelIndex) {
                    dot.classList.add('is-active');
                } else {
                    dot.classList.remove('is-active');
                }
            });

            // Reproducir el video central activo
            const activeCard = reelCards[currentReelIndex];
            const activeVideo = activeCard ? activeCard.querySelector('.reel-video') : null;
            if (activeVideo) {
                activeVideo.muted = isMutedGlobal;
                if (autoPlay) {
                    const playPromise = activeVideo.play();
                    if (playPromise !== undefined) {
                        playPromise.catch(function () {
                            activeVideo.muted = true;
                            isMutedGlobal = true;
                            syncSoundButtons(true);
                            activeVideo.play().catch(function () {});
                        });
                    }
                }
            }
        }

        // Configurar eventos individuales por cada tarjeta y video
        reelCards.forEach(function (card, index) {
            const video = card.querySelector('.reel-video');
            const progressFill = card.querySelector('.reel-progress-fill');
            const soundBtn = card.querySelector('.reel-sound-toggle');
            const playIndicator = card.querySelector('.reel-center-play-indicator');

            // 1. Barra de progreso dinámica
            if (video && progressFill) {
                video.addEventListener('timeupdate', function () {
                    if (card.classList.contains('is-active') && video.duration) {
                        const pct = (video.currentTime / video.duration) * 100;
                        progressFill.style.width = pct + '%';
                    }
                });
            }

            // 2. Transición automática al finalizar el video
            if (video) {
                video.addEventListener('ended', function () {
                    if (card.classList.contains('is-active')) {
                        updateCarousel(currentReelIndex + 1, true);
                    }
                });
            }

            // 3. Botón de silenciar / reactivar sonido
            if (soundBtn) {
                soundBtn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    isMutedGlobal = !isMutedGlobal;
                    reelCards.forEach(function (c) {
                        const v = c.querySelector('.reel-video');
                        if (v) v.muted = isMutedGlobal;
                    });
                    syncSoundButtons(isMutedGlobal);
                });
            }

            // 4. Clic en la tarjeta: si es lateral centra el reel; si es central alterna pausa/play
            card.addEventListener('click', function (e) {
                if (e.target.closest('.reel-sound-toggle') || e.target.closest('.reel-caption-link')) {
                    return; // No interferir con botones específicos
                }

                if (index !== currentReelIndex) {
                    updateCarousel(index, true);
                } else if (video) {
                    if (video.paused) {
                        video.play();
                        if (playIndicator) playIndicator.classList.remove('is-visible');
                    } else {
                        video.pause();
                        if (playIndicator) playIndicator.classList.add('is-visible');
                    }
                }
            });
        });

        // Botones de navegación Anterior / Siguiente
        if (reelPrevBtn) {
            reelPrevBtn.addEventListener('click', function () {
                updateCarousel(currentReelIndex - 1, true);
            });
        }

        if (reelNextBtn) {
            reelNextBtn.addEventListener('click', function () {
                updateCarousel(currentReelIndex + 1, true);
            });
        }

        // Puntos indicadores
        reelDots.forEach(function (dot) {
            dot.addEventListener('click', function () {
                const targetSlide = parseInt(this.getAttribute('data-slide'), 10);
                if (!isNaN(targetSlide)) {
                    updateCarousel(targetSlide, true);
                }
            });
        });

        // Soporte para gestos táctiles (Swipe en móviles)
        let touchStartX = 0;
        let touchEndX = 0;

        reelsViewport.addEventListener('touchstart', function (e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        reelsViewport.addEventListener('touchend', function (e) {
            touchEndX = e.changedTouches[0].screenX;
            const diffX = touchEndX - touchStartX;
            if (Math.abs(diffX) > 40) {
                if (diffX < 0) {
                    // Deslizamiento izquierda -> siguiente
                    updateCarousel(currentReelIndex + 1, true);
                } else {
                    // Deslizamiento derecha -> anterior
                    updateCarousel(currentReelIndex - 1, true);
                }
            }
        }, { passive: true });


        // Reproducir solo cuando la sección entra en el campo visual del usuario
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    const activeVideo = reelCards[currentReelIndex] ? reelCards[currentReelIndex].querySelector('.reel-video') : null;
                    if (activeVideo) {
                        if (entry.isIntersecting) {
                            activeVideo.play().catch(function () {});
                        } else {
                            activeVideo.pause();
                        }
                    }
                });
            }, { threshold: 0.35 });

            observer.observe(reelsCarousel);
        }

        // Inicializar carrusel en posición 0 al cargar
        updateCarousel(0, false);
        syncSoundButtons(true);
    }

    // =========================================================================
    // 7. Página Dinámica de Detalle de Producto (preview-producto.html)
    // =========================================================================
    const productDetailPage = document.getElementById('productDetailPage');
    if (productDetailPage) {
        const standardDescription = 'Producto elaborado con materiales de alta calidad y tradición cerera Santa María. Ideal para el hogar, templos y momentos de oración o ambientación.';

        const catalogProductsData = [
            { id: 1, nombre: 'Velón envase de vidrio – Virgen del Carmen', categoria_slug: 'devocionales', categoria_nombre: 'DEVOCIONALES', precio_formato: '$ 9.480', imagen: 'assets/img/vela.webp', etiqueta: 'Más Vendido', sku: 'DEV-VC-001' },
            { id: 2, nombre: 'Encendedor Eléctrico Recargable para velones', categoria_slug: 'accesorios', categoria_nombre: 'ACCESORIOS', precio_formato: '$ 13.800', imagen: 'assets/img/vela.webp', etiqueta: 'Práctico & Seguro', sku: 'ACC-ENC-002' },
            { id: 3, nombre: 'Velón envase de vidrio – Virgen Milagrosa', categoria_slug: 'devocionales', categoria_nombre: 'DEVOCIONALES', precio_formato: '$ 9.480', imagen: 'assets/img/vela.webp', etiqueta: 'Devoción', sku: 'DEV-VM-003' },
            { id: 4, nombre: 'Velón envase de vidrio – Señor de los Milagros', categoria_slug: 'devocionales', categoria_nombre: 'DEVOCIONALES', precio_formato: '$ 9.480', imagen: 'assets/img/vela.webp', etiqueta: 'Fe & Tradición', sku: 'DEV-SM-004' },
            { id: 5, nombre: 'Velón #22 Blanco – Cera pura para decoraciones', categoria_slug: 'velones', categoria_nombre: 'VELONES', precio_formato: '$ 31.900', imagen: 'assets/img/vela.webp', etiqueta: 'Larga Duración', sku: 'VEL-B22-005' },
            { id: 6, nombre: 'Velón Santa María #15 Amarillo Tradicional', categoria_slug: 'velones', categoria_nombre: 'VELONES', precio_formato: '$ 15.200', imagen: 'assets/img/vela.webp', etiqueta: 'Clásico', sku: 'VEL-A15-006' },
            { id: 7, nombre: 'Velón #18 Blanco con etiqueta decorativa', categoria_slug: 'velones', categoria_nombre: 'VELONES', precio_formato: '$ 18.500', imagen: 'assets/img/vela.webp', etiqueta: 'Especial', sku: 'VEL-B18-007' },
            { id: 8, nombre: '12 Velones Pequeños Blancos – 2.8 cm de diámetro', categoria_slug: 'velones', categoria_nombre: 'VELONES', precio_formato: '$ 7.450', imagen: 'assets/img/vela.webp', etiqueta: 'Paquete x 12', sku: 'VEL-PX12-008' },
            { id: 9, nombre: 'Cirio Pascual Litúrgico Ceremonial 50 cm', categoria_slug: 'cirios', categoria_nombre: 'CIRIOS PASCUALES', precio_formato: '$ 48.000', imagen: 'assets/img/vela.webp', etiqueta: 'Artesanal', sku: 'CIR-PAS-009' },
            { id: 10, nombre: 'Velas Blancas Tradicionales – Paquete x 20 unidades', categoria_slug: 'velas', categoria_nombre: 'VELAS TRADICIONALES', precio_formato: '$ 11.500', imagen: 'assets/img/vela.webp', etiqueta: 'Hogar y Templo', sku: 'VELA-TRAD-010' },
            { id: 11, nombre: 'Vela Aromática en Vaso – Lavanda y Flor de Azahar', categoria_slug: 'aromas', categoria_nombre: 'AROMAS & ESENCIAS', precio_formato: '$ 14.900', imagen: 'assets/img/vela.webp', etiqueta: 'Relajante', sku: 'ARO-LAV-011' },
            { id: 12, nombre: 'Velón de Citronela Especial Exterior con Tapa', categoria_slug: 'citronela', categoria_nombre: 'CITRONELA', precio_formato: '$ 16.500', imagen: 'assets/img/vela.webp', etiqueta: 'Repelente', sku: 'CIT-EXT-012' }
        ];

        // Leer parámetro ?id=X de la URL
        const urlParams = new URLSearchParams(window.location.search);
        const requestedId = parseInt(urlParams.get('id'), 10) || 1;
        const prod = catalogProductsData.find(function (p) { return p.id === requestedId; }) || catalogProductsData[0];

        // Actualizar título y cabecera de la página
        document.title = prod.nombre + ' – Veladoras Santa María';

        const breadcrumbCat = document.getElementById('prodDetailBreadcrumbCat');
        const breadcrumbCurrent = document.getElementById('prodDetailBreadcrumbCurrent');
        const headingEl = document.getElementById('prodDetailHeading');
        const catTagEl = document.getElementById('prodDetailCatTag');
        const skuTagEl = document.getElementById('prodDetailSkuTag');
        const badgeEl = document.getElementById('prodDetailBadge');
        const mainImgEl = document.getElementById('prodDetailMainImg');
        const priceValEl = document.getElementById('prodDetailPriceVal');
        const descEl = document.getElementById('prodDetailDesc');

        const whatsappOrderBtn = document.getElementById('prodDetailWhatsappBtn');

        if (breadcrumbCat) {
            breadcrumbCat.textContent = prod.categoria_nombre;
            breadcrumbCat.href = 'preview-catalogo.html?cat=' + prod.categoria_slug;
        }
        if (breadcrumbCurrent) breadcrumbCurrent.textContent = prod.nombre;
        if (headingEl) headingEl.textContent = prod.nombre;
        if (catTagEl) catTagEl.textContent = prod.categoria_nombre;
        if (skuTagEl) skuTagEl.textContent = 'Ref: ' + prod.sku;
        if (priceValEl) priceValEl.textContent = prod.precio_formato;
        if (descEl) descEl.textContent = standardDescription;

        if (badgeEl) {
            if (prod.etiqueta) {
                badgeEl.textContent = prod.etiqueta;
                badgeEl.style.display = 'inline-block';
            } else {
                badgeEl.style.display = 'none';
            }
        }

        if (mainImgEl) {
            mainImgEl.src = prod.imagen;
            mainImgEl.alt = prod.nombre;
        }

        // Configurar botón de WhatsApp
        const waMsgOrder = encodeURIComponent('Hola Veladoras Santa María, deseo pedir el producto: ' + prod.nombre + ' (' + prod.precio_formato + '). ¿Tienen disponibilidad y envíos?');

        if (whatsappOrderBtn) {
            whatsappOrderBtn.href = 'https://wa.me/573144753682?text=' + waMsgOrder;
        }
    }
});
