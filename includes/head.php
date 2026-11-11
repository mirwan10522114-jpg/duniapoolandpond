<?php

declare(strict_types=1);

$pageTitle = $pageTitle ?? 'Dunia Pool & Pond | The Pool Specialist - Sejak 1997';
$htmlClass = $htmlClass ?? 'scroll-smooth';
$bodyClass = $bodyClass ?? 'bg-bg-canvas text-text-body font-body-default antialiased selection:bg-primary-fixed selection:text-on-primary-fixed';
$extraHeadStyles = $extraHeadStyles ?? '';
?>
<!DOCTYPE html>
<html class="<?= e($htmlClass) ?>" lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?= e($pageTitle) ?></title>
    <link href="<?= e(app_url('/images/brand/favicon-dpp.png')) ?>" rel="icon" type="image/png" />
    <!-- Google Fonts: Inter (Formal Corporate Neo-Grotesk) -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <!-- Material Symbols Outlined -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <!-- Tailwind CSS with Forms and Container Queries -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-bright": "#f9f9ff",
                        "primary-fixed": "#cfe5ff",
                        "error-container": "#ffdad6",
                        "border-hairline": "#D5E2EC",
                        "background": "#f9f9ff",
                        "tertiary-container": "#006f88",
                        "inverse-primary": "#98cbff",
                        "on-secondary-fixed": "#001d33",
                        "on-tertiary": "#ffffff",
                        "action-hover": "#055887",
                        "tertiary": "#005569",
                        "secondary-fixed": "#cee5ff",
                        "on-surface": "#001c3b",
                        "text-body": "#142D46",
                        "on-tertiary-fixed": "#001f28",
                        "surface-tint": "#00639d",
                        "on-error": "#ffffff",
                        "primary-container": "#076aa7",
                        "inverse-surface": "#0B2545",
                        "on-primary": "#ffffff",
                        "on-secondary-fixed-variant": "#004a76",
                        "secondary": "#00639b",
                        "on-tertiary-container": "#bbecff",
                        "surface-dim": "#c7dbff",
                        "tertiary-fixed-dim": "#5bd5fb",
                        "surface-container-high": "#dee8ff",
                        "tertiary-fixed": "#b6eaff",
                        "feedback-success": "#146C43",
                        "secondary-container": "#63b7fe",
                        "surface-container-highest": "#d5e3ff",
                        "on-secondary": "#ffffff",
                        "surface-container-low": "#f0f3ff",
                        "on-primary-container": "#d2e6ff",
                        "on-surface-variant": "#404750",
                        "surface-blue": "#E9F4FB",
                        "outline-variant": "#c0c7d1",
                        "primary": "#005182",
                        "outline": "#717881",
                        "surface": "#f9f9ff",
                        "on-primary-fixed": "#001d33",
                        "surface-variant": "#d5e3ff",
                        "text-muted": "#526274",
                        "on-error-container": "#93000a",
                        "primary-fixed-dim": "#98cbff",
                        "on-tertiary-fixed-variant": "#004e60",
                        "secondary-fixed-dim": "#96cbff",
                        "border-control": "#6D8298",
                        "surface-secondary": "#F3F8FC",
                        "on-secondary-container": "#004771",
                        "on-background": "#001c3b",
                        "surface-container": "#e7eeff",
                        "on-primary-fixed-variant": "#004a77",
                        "surface-container-lowest": "#ffffff",
                        "error": "#ba1a1a",
                        "inverse-on-surface": "#ebf1ff",
                        "bg-canvas": "#FFFFFF",
                        "feedback-error": "#B42318"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "space-xs": "0.25rem",
                        "space-xl": "2rem",
                        "gutter-desktop": "3rem",
                        "space-sm": "0.5rem",
                        "gutter": "1.5rem",
                        "gutter-mobile": "1.25rem",
                        "margin-tablet": "2rem",
                        "margin": "1.25rem",
                        "gutter-tablet": "2rem",
                        "space-lg": "1.5rem",
                        "margin-desktop": "3rem",
                        "space-md": "1rem"
                    },
                    "fontFamily": {
                        "sans": ["Inter", "system-ui", "-apple-system", "Segoe UI", "Roboto", "sans-serif"],
                        "serif": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "mono": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "headline-lg-mobile": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "headline-md": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "display-hero": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "body-default": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "headline-sm-mobile": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "body-lead-mobile": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "headline-md-mobile": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "headline-lg": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "headline-sm": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "action-button": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "label-ui": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "display-hero-mobile": ["Inter", "system-ui", "-apple-system", "sans-serif"],
                        "body-lead": ["Inter", "system-ui", "-apple-system", "sans-serif"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["32px", { "lineHeight": "1.15", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-md": ["34px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "display-hero": ["54px", { "lineHeight": "1.08", "letterSpacing": "-0.025em", "fontWeight": "800" }],
                        "body-default": ["16px", { "lineHeight": "26px", "letterSpacing": "-0.005em", "fontWeight": "400" }],
                        "headline-sm-mobile": ["20px", { "lineHeight": "1.3", "letterSpacing": "-0.015em", "fontWeight": "700" }],
                        "body-lead-mobile": ["17px", { "lineHeight": "26px", "letterSpacing": "-0.005em", "fontWeight": "400" }],
                        "headline-md-mobile": ["28px", { "lineHeight": "1.22", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-lg": ["46px", { "lineHeight": "1.12", "letterSpacing": "-0.025em", "fontWeight": "800" }],
                        "headline-sm": ["22px", { "lineHeight": "1.3", "letterSpacing": "-0.015em", "fontWeight": "700" }],
                        "action-button": ["15px", { "lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "600" }],
                        "label-ui": ["14px", { "lineHeight": "20px", "letterSpacing": "0.005em", "fontWeight": "500" }],
                        "display-hero-mobile": ["36px", { "lineHeight": "1.14", "letterSpacing": "-0.02em", "fontWeight": "800" }],
                        "body-lead": ["18px", { "lineHeight": "28px", "letterSpacing": "-0.005em", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
    <style>
        html, body, button, input, select, textarea {
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
            text-rendering: optimizeLegibility;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
            letter-spacing: -0.02em;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
            line-height: 1;
        }
        input:focus, select:focus, textarea:focus {
            outline: none;
            box-shadow: 0 0 0 3px #076aa7;
            border-color: #076aa7;
        }
        :focus-visible {
            outline: 3px solid #076AA7;
            outline-offset: 2px;
        }
        .grid-architectural {
            background-image:
                linear-gradient(to right, rgba(7, 106, 167, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(7, 106, 167, 0.05) 1px, transparent 1px);
            background-size: 56px 56px;
        }
        .pattern-halftone-tr {
            background-image: radial-gradient(rgba(7, 106, 167, 0.24) 1.75px, transparent 1.75px);
            background-size: 14px 14px;
            -webkit-mask-image: radial-gradient(ellipse 85% 85% at 100% 0%, #000 15%, rgba(0, 0, 0, 0.4) 55%, transparent 85%);
            mask-image: radial-gradient(ellipse 85% 85% at 100% 0%, #000 15%, rgba(0, 0, 0, 0.4) 55%, transparent 85%);
        }
        .pattern-halftone-bl {
            background-image: radial-gradient(rgba(7, 106, 167, 0.22) 1.75px, transparent 1.75px);
            background-size: 14px 14px;
            -webkit-mask-image: radial-gradient(ellipse 85% 85% at 0% 100%, #000 15%, rgba(0, 0, 0, 0.4) 55%, transparent 85%);
            mask-image: radial-gradient(ellipse 85% 85% at 0% 100%, #000 15%, rgba(0, 0, 0, 0.4) 55%, transparent 85%);
        }
        .pattern-diagonal-grid {
            background-image: repeating-linear-gradient(
                -45deg,
                rgba(7, 106, 167, 0.035) 0px,
                rgba(7, 106, 167, 0.035) 1px,
                transparent 1px,
                transparent 18px
            );
        }
        .text-balance {
            text-wrap: balance;
        }
        [id="beranda"],
        [id="tentang-kami"],
        [id="layanan"],
        [id="proyek"],
        [id="manajemen-proyek"],
        [id="produk"],
        [id="faq"],
        [id="konsultasi"],
        [id="kontak"] {
            scroll-margin-top: 84px;
        }
        .reveal-item {
            transition: opacity 0.32s ease-out, transform 0.32s ease-out;
        }
        .reveal-item.is-hidden-reveal {
            opacity: 0;
            transform: translateY(8px);
        }
        .reveal-item.is-visible-reveal {
            opacity: 1;
            transform: translateY(0);
        }
        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto !important;
            }
            .reveal-item,
            .reveal-item.is-hidden-reveal {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }
        <?= $extraHeadStyles ?>
    </style>
</head>
<body class="<?= e($bodyClass) ?>">

