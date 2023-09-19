<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <!-- Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tab Title -->
    <title>{{ config('app.name') }}</title>

    <!-- CDN Style: Bootstrap 5.3.1-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link type="image/x-icon" href="/credentials/favicon.ico" rel="icon">

    @vite('resources/css/app.css')

    <!-- Tailwind Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 21;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            padding: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>

    <!-- Custom Styles -->
    <style>
        .custom-shape-divider-top-1694330345 {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1694330345 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 96px;
            transform: rotateY(180deg);
        }

        .custom-shape-divider-top-1694330345 .shape-fill {
            fill: #FFFFFF;
        }

        .custom-shape-divider-top-1694330585 {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1694330585 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 118px;
            transform: rotateY(180deg);
        }

        .custom-shape-divider-top-1694330585 .shape-fill {
            fill: #CBD5E1;
        }

        .custom-shape-divider-top-1694332668 {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1694332668 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 100px;
        }

        .custom-shape-divider-top-1694332668 .shape-fill {
            fill: #FFFFFF;
        }
    </style>

    <!-- CDN Script: Split Type 0.3.3 from Typescript-->
    <script src="https://unpkg.com/split-type"></script>

    <!-- CDN Script: GSAP 3.12.2-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <!-- CDN Script: Bootstrap 5.3.1-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Web: Navbar -->
    <nav
        class="sticky top-0 py-2 z-40 w-full backdrop-blur transition-colors duration-500 bg-white/85 supports-backdrop-blur:bg-white/85 ">
        <div class="container flex justify-between items-center">
            <!-- Web: Credential -->
            <a class="text-3xl font-bold leading-none" href="/">
                <svg width="64" height="32" viewBox="0 0 1080 480" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M169.6 384.2C162.667 387.4 154.667 389.933 145.6 391.8C136.533 393.933 127.333 395 118 395C102.533 395 90.1333 391.8 80.8 385.4C71.4667 379 64.6667 370.067 60.4 358.6C56.4 347.133 54.4 334.067 54.4 319.4V228.2H21.6V188.2H54.4V135.4H100.4V188.2H163.6V228.2H100.4V319.4C100.4 331.667 102.667 340.2 107.2 345C112 349.533 118.8 351.8 127.6 351.8C131.867 351.8 136.4 351.4 141.2 350.6C146.267 349.533 151.867 347.8 158 345.4L169.6 384.2ZM360.584 379.4C346.718 385 333.651 389 321.384 391.4C309.118 393.8 297.518 395 286.584 395C256.451 395 233.651 386.467 218.184 369.4C202.718 352.333 194.984 329.667 194.984 301.4V277.4C194.984 258.467 198.451 242.067 205.384 228.2C212.318 214.333 222.184 203.533 234.984 195.8C247.784 188.067 262.851 184.2 280.184 184.2C294.318 184.2 307.518 187.133 319.784 193C332.318 198.6 342.451 207.533 350.184 219.8C358.184 231.8 362.184 247.267 362.184 266.2C362.184 271.8 361.784 277.8 360.984 284.2C360.184 290.333 358.851 296.867 356.984 303.8H239.384C239.918 320.333 244.051 332.733 251.784 341C259.518 349.267 271.918 353.4 288.984 353.4C298.051 353.4 307.384 352.333 316.984 350.2C326.851 348.067 336.984 344.867 347.384 340.6L360.584 379.4ZM280.184 223C267.918 223 258.318 227 251.384 235C244.718 242.733 240.851 253.933 239.784 268.6H316.584C316.851 267.267 316.984 266.067 316.984 265C316.984 263.667 316.984 262.467 316.984 261.4C316.984 248.6 313.384 239 306.184 232.6C298.984 226.2 290.318 223 280.184 223ZM413.978 333.8V95H459.978V333.8C459.978 337.8 460.911 341.667 462.778 345.4C464.911 348.867 468.911 350.6 474.778 350.6H481.178V393H469.978C454.778 393 443.178 390.067 435.178 384.2C427.178 378.333 421.578 370.867 418.378 361.8C415.445 352.733 413.978 343.4 413.978 333.8ZM524.525 333.8V95H570.525V333.8C570.525 337.8 571.458 341.667 573.325 345.4C575.458 348.867 579.458 350.6 585.325 350.6H591.725V393H580.525C565.325 393 553.725 390.067 545.725 384.2C537.725 378.333 532.125 370.867 528.925 361.8C525.992 352.733 524.525 343.4 524.525 333.8ZM682.272 250.6V391H636.272V188.2H679.872V215C692.405 204.067 704.005 196.2 714.672 191.4C725.339 186.6 736.272 184.2 747.472 184.2C772.272 184.2 789.205 195.133 798.272 217C811.605 205.267 824.005 196.867 835.472 191.8C846.939 186.733 858.539 184.2 870.272 184.2C888.939 184.2 903.205 190.467 913.072 203C922.939 215.267 927.872 232.6 927.872 255V391H881.872V260.6C881.872 238.2 873.339 227 856.272 227C849.605 227 842.272 228.6 834.272 231.8C826.272 235 816.539 241.267 805.072 250.6V391H759.072V260.6C759.072 238.2 750.539 227 733.472 227C726.805 227 719.472 228.6 711.472 231.8C703.472 235 693.739 241.267 682.272 250.6Z"
                        fill="#2C3335" />
                    <rect x="972" y="391" width="200" height="78" rx="39"
                        transform="rotate(-90 972 391)" fill="url(#paint0_linear_110_23)" />
                    <circle cx="1010.5" cy="132.5" r="27" fill="#C20E1E" stroke="#C20E1E"
                        stroke-width="25" />
                    <defs>
                        <linearGradient id="paint0_linear_110_23" x1="1227.74" y1="391" x2="1011.47"
                            y2="437.016" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#C20E1E" />
                            <stop offset="1" stop-color="#AB3796" />
                        </linearGradient>
                    </defs>
                </svg>
            </a>

            <!-- Mobile: Hidden Navbar Burger -->
            @if (Route::has('login'))
                @auth
                    <div class="hidden">
                        <button class="navbar-burger flex items-center text-red-600 p-3">
                            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Mobile menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                            </svg>
                        </button>
                    </div>
                @else
                    <div class="lg:hidden">
                        <button class="navbar-burger flex items-center text-red-600 p-3">
                            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Mobile menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                            </svg>
                        </button>
                    </div>
                @endauth
            @endif

            <!-- Web: Parent Menu -->
            <ul
                class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
                <li class="nav-menu-tm">
                    <a class="flex menu-tm scroll-smooth" href="#txt-desc"><svg class="w-6 h-5 mr-1"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>Home</a>
                </li>
                <li class="nav-menu-tm">
                    <a class="flex menu-tm scroll-smooth" href="#about-us"><svg class="w-6 h-5 mr-1"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>About Us</a>
                </li>
                <li class="nav-menu-tm">
                    <a class="flex menu-tm" href="#services"><svg class="w-6 h-5 mr-1"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                        </svg>Services</a>
                </li>
            </ul>

            <!-- Web: Auth -->
            @if (Route::has('login'))
                @auth
                    <a class="font-semibold lg:inline-block py-2 px-6 text-red-500 hover:text-red-600  text-sm transition duration-200"
                        href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-200 hover:bg-gray-100 text-sm text-gray-700 font-bold rounded-xl transition duration-200"
                        href="{{ route('login') }}">Sign In</a>
                    @if (Route::has('register'))
                        <a class="hidden lg:inline-block py-2 px-6 bg-red-500 hover:bg-red-600 text-sm text-white font-bold rounded-xl transition duration-200"
                            href="{{ route('register') }}">Sign up</a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>

    <!-- Mobile: Navbar -->
    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav
            class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <!-- Mobile: Credential -->
                <a class="mr-auto text-3xl font-bold leading-none" href="#">
                    <svg width="64" height="32" viewBox="0 0 1080 480" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M169.6 384.2C162.667 387.4 154.667 389.933 145.6 391.8C136.533 393.933 127.333 395 118 395C102.533 395 90.1333 391.8 80.8 385.4C71.4667 379 64.6667 370.067 60.4 358.6C56.4 347.133 54.4 334.067 54.4 319.4V228.2H21.6V188.2H54.4V135.4H100.4V188.2H163.6V228.2H100.4V319.4C100.4 331.667 102.667 340.2 107.2 345C112 349.533 118.8 351.8 127.6 351.8C131.867 351.8 136.4 351.4 141.2 350.6C146.267 349.533 151.867 347.8 158 345.4L169.6 384.2ZM360.584 379.4C346.718 385 333.651 389 321.384 391.4C309.118 393.8 297.518 395 286.584 395C256.451 395 233.651 386.467 218.184 369.4C202.718 352.333 194.984 329.667 194.984 301.4V277.4C194.984 258.467 198.451 242.067 205.384 228.2C212.318 214.333 222.184 203.533 234.984 195.8C247.784 188.067 262.851 184.2 280.184 184.2C294.318 184.2 307.518 187.133 319.784 193C332.318 198.6 342.451 207.533 350.184 219.8C358.184 231.8 362.184 247.267 362.184 266.2C362.184 271.8 361.784 277.8 360.984 284.2C360.184 290.333 358.851 296.867 356.984 303.8H239.384C239.918 320.333 244.051 332.733 251.784 341C259.518 349.267 271.918 353.4 288.984 353.4C298.051 353.4 307.384 352.333 316.984 350.2C326.851 348.067 336.984 344.867 347.384 340.6L360.584 379.4ZM280.184 223C267.918 223 258.318 227 251.384 235C244.718 242.733 240.851 253.933 239.784 268.6H316.584C316.851 267.267 316.984 266.067 316.984 265C316.984 263.667 316.984 262.467 316.984 261.4C316.984 248.6 313.384 239 306.184 232.6C298.984 226.2 290.318 223 280.184 223ZM413.978 333.8V95H459.978V333.8C459.978 337.8 460.911 341.667 462.778 345.4C464.911 348.867 468.911 350.6 474.778 350.6H481.178V393H469.978C454.778 393 443.178 390.067 435.178 384.2C427.178 378.333 421.578 370.867 418.378 361.8C415.445 352.733 413.978 343.4 413.978 333.8ZM524.525 333.8V95H570.525V333.8C570.525 337.8 571.458 341.667 573.325 345.4C575.458 348.867 579.458 350.6 585.325 350.6H591.725V393H580.525C565.325 393 553.725 390.067 545.725 384.2C537.725 378.333 532.125 370.867 528.925 361.8C525.992 352.733 524.525 343.4 524.525 333.8ZM682.272 250.6V391H636.272V188.2H679.872V215C692.405 204.067 704.005 196.2 714.672 191.4C725.339 186.6 736.272 184.2 747.472 184.2C772.272 184.2 789.205 195.133 798.272 217C811.605 205.267 824.005 196.867 835.472 191.8C846.939 186.733 858.539 184.2 870.272 184.2C888.939 184.2 903.205 190.467 913.072 203C922.939 215.267 927.872 232.6 927.872 255V391H881.872V260.6C881.872 238.2 873.339 227 856.272 227C849.605 227 842.272 228.6 834.272 231.8C826.272 235 816.539 241.267 805.072 250.6V391H759.072V260.6C759.072 238.2 750.539 227 733.472 227C726.805 227 719.472 228.6 711.472 231.8C703.472 235 693.739 241.267 682.272 250.6Z"
                            fill="#2C3335" />
                        <rect x="972" y="391" width="200" height="78" rx="39"
                            transform="rotate(-90 972 391)" fill="url(#paint0_linear_110_23)" />
                        <circle cx="1010.5" cy="132.5" r="27" fill="#C20E1E" stroke="#C20E1E"
                            stroke-width="25" />
                        <defs>
                            <linearGradient id="paint0_linear_110_23" x1="1227.74" y1="391" x2="1011.47"
                                y2="437.016" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C20E1E" />
                                <stop offset="1" stop-color="#AB3796" />
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
                <!-- Mobile: Close Button -->
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-red-600 cursor-pointer hover:text-red-300"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <!-- Mobile: Parent Menu -->
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="flex p-4 text-sm font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                            href="#txt-desc"><svg class="w-6 h-5 mr-1" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="flex p-4 text-sm font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                            href="#about-us"><svg class="w-6 h-5 mr-1" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>About Us</a>
                    </li>
                    <li class="mb-1">
                        <a class="flex p-4 text-sm font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                            href="#services"><svg class="w-6 h-5 mr-1" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                            </svg>Services</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <!-- Mobile: Auth -->
                <div class="pt-6">
                    <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold bg-gray-200 hover:bg-gray-100 text-gray-700 rounded-xl"
                        href="{{ route('login') }}">Sign in</a>
                    <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-red-600 hover:bg-red-700 rounded-xl"
                        href="{{ route('register') }}">Sign Up</a>
                </div>

                <!-- Mobile: Copyright Credential -->
                <p class="my-4 text-xs text-center text-gray-400">
                    <span>Copyright © 2023, tellmi @ Setiajaya Toyota</span>
                </p>
            </div>
        </nav>
    </div>

    <!-- Main Area -->
    <main>
        <!-- Welcome Section -->
        <section id="txt-desc">
            <div class="container">
                <!-- Heading Section-->
                <div class="flex items-center h-screen justify-around">
                    <!-- Welcome Animation -->
                    <x-welcome-animation></x-welcome-animation>
                    <!-- Description -->
                    <div class="txt-desc container flex md:justify-between items-center md:px-0">
                        <x-application-logo-tagline class="flex-1"></x-application-logo-tagline>
                        <!-- Image -->
                        <x-computer-troubleshoot class="flex-1 lg:flex hidden"></x-computer-troubleshoot>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="bg-slate-300" id="about-us">
            <!-- Waves Opacity Divider Section -->
            <div class="custom-shape-divider-top-1694330345">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path class="shape-fill"
                        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                        opacity=".25"></path>
                    <path class="shape-fill"
                        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                        opacity=".5"></path>
                    <path class="shape-fill"
                        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z">
                    </path>
                </svg>
            </div>

            <!-- About and Form Area -->
            <div class="container md:flex md:justify-around py-16">
                <!-- About Column -->
                <div class="pb-4 md:flex-auto md:w-64 md:mr-2">
                    <h1 class="text-center font-bold text-[37px]">HELLO!</h1>
                    <h1 class="text-center font-bold text-[24px]">LET'S TALK ABOUT TELLMI</h1>
                    <figure>
                        <div class="grid justify-items-center py-14">
                            <h1 class="text-center font-bold text-9xl" data-text="i">tellm</h1>
                            <blockquote class="text-[26px]/[24px] italic tracking-wider justify-self-center">keep an
                                eye on
                                your
                                asset
                            </blockquote>
                        </div>
                        <figcaption class="text-justify">Tellmi is an application made to help any worker at Setiajaya
                            Toyota for maintenance their hardware or software or networks integrated for branch of
                            Setiajaya
                            Toyota. User must be taken ticket to report problems that associated with IT Infrastructure
                            then
                            it will send and claimed the ticket to receive client complaints by Division Information
                            Technology (IT), Setiajaya Toyota.</figcaption>
                    </figure>
                </div>
                <!-- Form Column -->
                <div class="py-4 md:flex-auto md:w-32 md:ml-2">
                    <aside>

                        <!-- Just Heading Area -->
                        <article>
                            <h1 class="text-center text-[22px]"> Please <strong class="text-[#991b1b]"> sign up
                                </strong>
                                before using this app
                            </h1>
                            <h1 class="text-center text-[17px] my-2">Thank you!<span
                                    style='font-size:20px;'>&#9786;</span>
                            </h1>
                        </article>

                        <!-- Horizontal Line -->
                        <div class="relative flex pt-2 pb-2 items-center">
                            <div class="flex-grow border-t-2 border-gray-400"></div>
                            <div class="flex-grow border-t-2 border-gray-400"></div>
                        </div>

                        <!-- Form Area -->
                        <div class="flex justify-center mt-8">
                            <form class="w-full max-w-lg" method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name Area -->
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input class="block mt-1 w-full" id="email" name="email"
                                            type="email" :value="old('email')" required autocomplete="username"
                                            placeholder="example@mail.com" />
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                    </div>
                                    <div class="w-full md:w-1/2 px-3">
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input class="block mt-1 w-full" id="name" name="name"
                                            type="text" :value="old('name')" required autocomplete="name"
                                            placeholder="Abimanyu Okysaputra" />
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    </div>
                                </div>

                                <!-- Password Area -->
                                <div class="flex flex-wrap -mx-3 mb-6">

                                    <!-- Password -->
                                    <div class="w-full md:w-1/2 px-3">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input class="block mt-1 w-full" id="password" name="password"
                                            type="password" required autocomplete="new-password"
                                            placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;" />

                                        <x-input-error class="mt-2" :messages="$errors->get('password')" />
                                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd
                                            like
                                        </p>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="w-full md:w-1/2 px-3">
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                        <x-text-input class="block mt-1 w-full" id="password_confirmation"
                                            name="password_confirmation" type="password" required
                                            autocomplete="new-password"
                                            placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;" />

                                        <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
                                    </div>
                                </div>

                                <!-- Employee Area -->
                                <div class="flex flex-wrap -mx-3 mb-2">

                                    <!-- Position Area -->
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-input-label for="position" :value="__('Position')" />
                                        <x-text-input class="block mt-1 w-full" id="position" name="position"
                                            type="text" :value="old('position')" required autocomplete="position"
                                            placeholder="Programmer" />
                                        <x-input-error class="mt-2" :messages="$errors->get('Position')" />
                                    </div>

                                    <!-- Branch Area -->
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-input-label for="email" :value="__('Branch')" />

                                        <div class="relative">
                                            <x-select class="block mt-1 w-full" id="select" name="field">
                                                <option value="" selected disabled hidden>
                                                    {{ __('Select Branch') }}</option>

                                                <option value="1">Bogor</option>
                                                <option value="2">Depok</option>
                                                <option value="3">Cibubur</option>
                                                <option value="4">Cimanggis</option>
                                                <option value="5">Parung</option>
                                                <option value="6">Pamulang</option>
                                            </x-select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Button Area -->
                                <div class="flex items-center justify-end mt-4">
                                    <x-secondary-button>
                                        {{ 'Sign Up' }}
                                    </x-secondary-button>
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section>
            <!-- Curve Asymmetrical Divider Section -->
            <div class="custom-shape-divider-top-1694330585">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path class="shape-fill"
                        d="M0,0V6c0,21.6,291,111.46,741,110.26,445.39,3.6,459-88.3,459-110.26V0Z">
                    </path>
                </svg>
            </div>
            <article class="container grid justify-items-center py-16 bg-white" id="services">
                <div class="title-section">
                    <h1 class="text-center text-[37px] font-bold">OUR SERVICES</h1>
                    <p class="text-center text-basic">Report to Maintenance Your Office Tools Self</p>
                </div>
                <div class="content md:flex md:justify-around items-start py-5">
                    <div class="card block my-4 border-none lg:m-10">
                        <caption class="max-w-sm overflow-hidden w-64">
                            <h1 class="text-center font-bold text-lg">Hardware Tools</h1>
                        </caption>
                        <figure class="bg-white my-2 md:my-3 rounded-xl shadow-lg max-w-sm overflow-hidden w-64">
                            <img class="mx-auto w-full" src="images/hardware-repair.jpg" alt="we-repair-hardware">
                        </figure>
                        <p class="text-justify text-basic">We repair hardware tools your Office</p>
                    </div>
                    <div class="card block my-4 border-none lg:m-10">
                        <caption class="max-w-sm overflow-hidden w-64">
                            <h1 class="text-center font-bold text-lg">Software Tools</h1>
                        </caption>
                        <figure class="bg-white my-2 md:my-3 rounded-xl shadow-lg max-w-sm overflow-hidden w-64">
                            <img class="mx-auto w-full" src="images/software-repair.jpg" alt="we-repair-hardware">
                        </figure>
                        <p class="text-justify text-basic">We repair software tools your Office</p>
                    </div>
                    <div class="card block my-4 border-none lg:m-10">
                        <caption class="max-w-sm overflow-hidden w-64">
                            <h1 class="text-center font-bold text-lg">Network Tools</h1>
                        </caption>
                        <figure class="bg-white my-2 md:my-3 rounded-xl shadow-lg max-w-sm overflow-hidden w-64">
                            <img class="mx-auto w-full" src="images/network-repair.jpg" alt="we-repair-hardware">
                        </figure>
                        <p class="text-justify text-basic">We repair network tools your Office</p>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <!-- Footer Area -->
    <footer class="block bg-slate-800 text-[#ddd]">
        <div class="custom-shape-divider-top-1694332668">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path class="shape-fill" d="M649.97 0L550.03 0 599.91 54.12 649.97 0z"></path>
            </svg>
        </div>
        <div class="container w-full flex justify-between">
            <div class="block w-80 items-center pb-24x">
                <div class="flex">
                    <div class="grid mb-2">
                        <h1 class="text-start font-bold text-5xl" data-text="i">tellm</h1>
                        <blockquote class="text-[10px] italic tracking-wider justify-self-start">keep an eye on your
                            asset
                        </blockquote>
                    </div>
                    <div class="sub-section flex items-center">
                        <h1 class="ps-5 text-justify text-[12px]">tellmi App has been made by Division IT to Improve
                            Operational Productivity at Setiajaya Toyota
                        </h1>
                    </div>
                </div>
                <div class="relative flex pt-4 pb-2 items-center">
                    <div class="flex-grow border-t border-gray-400"></div>
                    <div class="flex-grow border-t border-gray-400"></div>
                </div>
                <span class="text-xs">&copy; 2023, tellmi @ Setiajaya Toyota</span>
            </div>
            <div class="flex-1 w-64 text-center pb-5">
                <h1 class="font-bold text-[20px] pb-3">Group 1</h1>
                <ul class="list-none">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                </ul>
            </div>
            <div class="flex-1 w-32 text-center pb-5">
                <h1 class="font-bold text-[20px]] pb-3">Group 2</h1>
                <ul class="list-none ">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Vanilla Script: Humberger -->
    <script>
        // Burger menus
        document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
    </script>

    <!-- Vanilla Script: Split Type Welcome Letter using GSAP library -->
    <script>
        let txtWelcome = new SplitType('#txt-welcome')
        let charWelcome = document.querySelectorAll('.char')

        for (i = 0; i < charWelcome.length; i++) {
            charWelcome[i].classList.add('translate-y-full')
        }

        gsap.to('.char', {
            y: 0,
            stagger: 0.05,
            delay: 0.02,
            duration: 0.5,
        })
        gsap.to('.char', {
            opacity: 0,
            stagger: -0.05,
        }, '+=4')

        let txtTo = new SplitType('#txt-to')
        let charTo = document.querySelectorAll('.char')
        for (j = 0; j < charTo.length; j++) {
            charTo[j].classList.add('translate-y-full')
        }

        gsap.to('.char', {
            y: 0,
            stagger: -0.05,
            delay: 0.02,
            duration: 0.5,
        })
        gsap.to('.char', {
            opacity: 0,
            stagger: 0.05,
        }, '-=2')

        //Desc
        let tl = gsap.timeline({
            defaults: {
                ease: "none"
            }
        })

        tl.from(".txt-desc", {
            duration: 1,
            opacity: 0
        }, 3)
        tl.to(".txt-heading", {
            duration: 1,
            opacity: 0
        }, 2)
    </script>
</body>

</html>
