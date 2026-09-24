# Veladoras Santa María - Tema de WordPress

Tema personalizado para **Veladoras Santa María** (*Velas y Velones Santa María Plus S.A.S.*), desarrollado con la paleta de color oficial (#fdd400 y #011689), arquitectura multi-página y soporte nativo para WordPress.

## Características

- **Paleta oficial de marca:** Amarillo Flama (#fdd400) y Azul Mariano (#011689).
- **Accesibilidad y diseño:** Contraste tipográfico optimizado, diseño responsivo y estilo sobrio tradicional.
- **Sistema de variables de imagen:** Centralizado en `inc/placeholders.php` con fallback automático a gráficos vectoriales.
- **Navegación multi-página:**
  - `index.php` / `preview.html`: Portada comercial, vitrina de productos, banners B2B y catálogo de 8 líneas.
  - `page-nosotros.php` / `preview-nosotros.html`: Plantilla institucional con historia, Misión, Visión 2030 y fotografía panorámica de instalaciones.
  - `page.php`: Plantilla para páginas interiores genéricas de WordPress.
- **Activos de marca integrados en `assets/img/`:**
  - `favicon.ico`: Icono de pestaña del navegador.
  - `logopequeño.webp`: Logotipo de cabecera y menú móvil.
  - `logogrande.webp`: Logotipo corporativo completo en el pie de página.
  - `vela.webp`: Fotografía de producto para categorías y vitrina.
  - `empresa.webp`: Fotografía panorámica de instalaciones de la empresa.

## Instalación en WordPress

1. Copiar la carpeta del tema dentro de `wp-content/themes/veladorassantamaria/`.
2. Acceder al panel de administración de WordPress (`wp-admin`).
3. Ir a **Apariencia > Temas** y activar **Veladoras Santa María**.
4. Crear una página titulada "Nosotros" y asignar en atributos de página la plantilla "Página Nosotros / Quiénes Somos".

## Previsualización Estática

Para visualizar la maqueta sin necesidad de servidor PHP/WordPress local, abrir en el navegador:
- `preview.html` (Portada de la tienda)
- `preview-nosotros.html` (Página institucional Nosotros)
