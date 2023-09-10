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
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
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
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center text-red-600 p-3">
                    <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>

            <!-- Web: Parent Menu -->
            <ul
                class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
                <li class="nav-menu-tm">
                    <a class="menu-tm scroll-smooth flex" href="#txt-desc"><svg class="w-6 h-5 mr-1"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>Home</a>
                </li>
                <li class="nav-menu-tm">
                    <a class="menu-tm scroll-smooth flex" href="#about-us"><svg class="w-6 h-5 mr-1"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>About Us</a>
                </li>
                <li class="nav-menu-tm">

                    <a class="menu-tm flex" href="#services"><svg class="w-6 h-5 mr-1"
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
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold lg:inline-block py-2 px-6 bg-red-500 hover:bg-red-600 text-sm text-white rounded-xl transition duration-200">Back
                        to Dashboard</a>
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
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                            href="#txt-desc">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                            href="#about-us">About Us</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                            href="#services">Services</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <!-- Mobile: Auth -->
                <div class="pt-6">
                    <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold bg-gray-200 hover:bg-gray-100 text-gray-700 rounded-xl"
                        href="#">Sign in</a>
                    <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-red-600 hover:bg-red-700 rounded-xl"
                        href="#">Sign Up</a>
                </div>

                <!-- Mobile: Copyright Credential -->
                <p class="my-4 text-xs text-center text-gray-400">
                    <span>Copyright © 2023, tellmi @ Setiajaya Toyota</span>
                </p>
            </div>
        </nav>
    </div>

    <!-- Welcome Section -->
    <section id="txt-desc">
        <div class="relative container">
            <!-- Heading Section-->
            <div class="flex items-center h-screen justify-center">
                <!-- Heading -->
                <div class="absolute txt-heading grid justify-items-center">
                    <h1 class="font-bold text-7xl" id="txt-welcome"
                        style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);">WELCOME</h1>
                    <h1 class="font-bold text-7xl" id="txt-to"
                        style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);">CLIENT</h1>
                </div>
                <!-- Description -->
                <div class="absolute txt-desc container justify-items-start flex justify-between items-center">
                    <div class="grid">
                        <h1 class="font-bold text-9xl" data-text="i">tellm</h1>
                        <blockquote class="text-2xl italic tracking-wider justify-self-center">keep an eye on your
                            asset
                        </blockquote>
                    </div>
                    <!-- Image -->
                    <svg class="transform -scale-x-100" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3710 3710" width="50%">
                        <style type="text/css">
                            .st0 {
                                fill: #FFFFFF;
                            }

                            .st1 {
                                fill: #FCEDED;
                            }

                            .st2 {
                                fill: url(#SVGID_1_);
                            }

                            .st3 {
                                clip-path: url(#SVGID_00000056423532554370684650000001640239841020955039_);
                            }

                            .st4 {
                                opacity: 0.5;
                            }

                            .st5 {
                                opacity: 0.3;
                            }

                            .st6 {
                                fill: url(#SVGID_00000045579952847524216520000017580535373135017088_);
                            }

                            .st7 {
                                clip-path: url(#SVGID_00000052825026606388821240000005381723809931175317_);
                            }

                            .st8 {
                                fill: #C1CAD4;
                            }

                            .st9 {
                                clip-path: url(#SVGID_00000060746046636829983500000003086775934017662893_);
                            }

                            .st10 {
                                fill: #841515;
                            }

                            .st11 {
                                fill: #D8DEE8;
                            }

                            .st12 {
                                fill: #8E2020;
                            }

                            .st13 {
                                fill: #841C1C;
                            }

                            .st14 {
                                opacity: 0.27;
                                fill: #FFFFFF;
                                enable-background: new;
                            }

                            .st15 {
                                opacity: 0.5;
                                fill: #FFFFFF;
                                enable-background: new;
                            }

                            .st16 {
                                fill: url(#SVGID_00000041278960314577816430000007264373870959346575_);
                            }

                            .st17 {
                                fill: url(#SVGID_00000145761781338997916050000008725080611141513097_);
                            }

                            .st18 {
                                fill: url(#SVGID_00000152950883949032477540000017441057200398590355_);
                            }

                            .st19 {
                                fill: url(#SVGID_00000018949075941831447940000003624473740033351337_);
                            }

                            .st20 {
                                fill: url(#SVGID_00000134951619387835326400000005534412687343434371_);
                            }

                            .st21 {
                                fill: url(#SVGID_00000010286652639741358430000003878136551900415380_);
                            }

                            .st22 {
                                fill: url(#SVGID_00000044144977568628663660000018345082594263086983_);
                            }

                            .st23 {
                                opacity: 0.4;
                                fill: url(#SVGID_00000031192050386570536870000012048916796566002313_);
                                enable-background: new;
                            }

                            .st24 {
                                fill: url(#SVGID_00000078749245573637377610000014521042389749702045_);
                            }

                            .st25 {
                                fill: url(#SVGID_00000016785650439168615860000010400775064664450740_);
                            }

                            .st26 {
                                fill: url(#SVGID_00000042720305040193005520000009527483271030993066_);
                            }

                            .st27 {
                                fill: url(#SVGID_00000018920124649438699960000005643040994238232995_);
                            }

                            .st28 {
                                fill: url(#SVGID_00000106147197474059099570000015078170449732806049_);
                            }

                            .st29 {
                                fill: url(#SVGID_00000159456178179324885000000016553711264196912560_);
                            }

                            .st30 {
                                fill: url(#SVGID_00000046329442915372785600000011158854272113114277_);
                            }

                            .st31 {
                                fill: url(#SVGID_00000050623999884954856510000002990852085602108604_);
                            }

                            .st32 {
                                opacity: 0.3;
                                fill: url(#SVGID_00000183232257341285766250000012768283539245934495_);
                                enable-background: new;
                            }

                            .st33 {
                                fill: url(#SVGID_00000008133583798095030220000008494821534001055638_);
                            }

                            .st34 {
                                fill: url(#SVGID_00000069373321941012317760000004670212112829006727_);
                            }

                            .st35 {
                                fill: url(#SVGID_00000143597851122372733530000000161045902957422225_);
                            }

                            .st36 {
                                fill: url(#SVGID_00000021103220147337743720000004216891718896969874_);
                            }

                            .st37 {
                                fill: url(#SVGID_00000039824686742501739290000018070632816698895755_);
                            }

                            .st38 {
                                fill: url(#SVGID_00000108296475234561895450000012585192926105318583_);
                            }

                            .st39 {
                                fill: url(#SVGID_00000155848817725489652940000008330714282395715988_);
                            }

                            .st40 {
                                fill: url(#SVGID_00000022544401289843213050000017706158571468714152_);
                            }

                            .st41 {
                                opacity: 0.53;
                                fill: #FFFFFF;
                                enable-background: new;
                            }

                            .st42 {
                                fill: url(#SVGID_00000083802949728964769540000010845110247101841569_);
                            }
                        </style>
                        <g>
                            <g id="Illustration">
                                <g>
                                    <path class="st1"
                                        d="M1894.4,455.6C1159.4,433.9,522.8,967.2,426.6,1667C321.4,2432,896.3,3150,1612.4,3230.7
				        c1585.3,178.6,1745.1-656.2,1667.9-1516.9C3222.2,1065.3,2641.5,477.7,1894.4,455.6L1894.4,455.6z" />
                                    <g>

                                        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="2791.6138"
                                            y1="2100.3186" x2="2374.2336" y2="979.9986"
                                            gradientTransform="matrix(1 0 0 -1 0 3710)">
                                            <stop offset="0" style="stop-color:#FFC444" />
                                            <stop offset="1" style="stop-color:#F36F56" />
                                        </linearGradient>
                                        <path class="st2"
                                            d="M1879.7,2820.3c179,21.5,410,23.3,639.8-50.9c58.7-18.9,421-135.9,398.1-297.5
                        c-8.1-56.9-57.2-71.3-69.3-147.2c-14.4-90,45.3-127.3,95.6-231.8c30-62.3,117.7-244.6,15.9-362.6
                        c-60.9-70.5-186.7-114.8-287.6-103c-148,17.4-213.5,152.1-320.3,382c-94.7,203.8-82.4,257.9-153.1,403.5
                        C2146.2,2520.9,2053.8,2667.4,1879.7,2820.3L1879.7,2820.3z" />
                                        <g>
                                            <defs>
                                                <path id="SVGID_00000022538472561850070350000002643462308191675050_"
                                                    d="M1879.7,2820.3c179,21.5,410,23.3,639.8-50.9
                                c58.7-18.9,421-135.9,398.1-297.5c-8.1-56.9-57.2-71.3-69.3-147.2c-14.4-90,45.3-127.3,95.6-231.8
                                c30-62.3,117.7-244.6,15.9-362.6c-60.9-70.5-186.7-114.8-287.6-103c-148,17.4-213.5,152.1-320.3,382
                                c-94.7,203.8-82.4,257.9-153.1,403.5C2146.2,2520.9,2053.8,2667.4,1879.7,2820.3L1879.7,2820.3z" />
                                            </defs>
                                            <clipPath id="SVGID_00000127031899760864623100000000883129634562618251_">
                                                <use xlink:href="#SVGID_00000022538472561850070350000002643462308191675050_"
                                                    style="overflow:visible;" />
                                            </clipPath>
                                            <g
                                                style="clip-path:url(#SVGID_00000127031899760864623100000000883129634562618251_);">
                                                <g class="st4">
                                                    <path class="st0"
                                                        d="M1854.1,2827.4c-58.1,18.4-117.6,31.4-178.5,38.9c-186.5,23.3-378.2-2.9-569.6-77.8l3.4-8.6
                                    c190,74.3,380.2,100.3,565.1,77.2c661.9-82.6,978.5-787.9,1059.8-1002.1c46.1-121.5,55.6-260.7,28.2-413.8l9.1-1.6
                                    c27.7,154.8,18,295.6-28.7,418.7c-66.9,176.4-189.8,432-395.1,648C2198.7,2663.3,2033.2,2770.8,1854.1,2827.4L1854.1,2827.4z
                                    " />
                                                    <path class="st0"
                                                        d="M2572.5,2203.4l-2.2-3.5c-1.7-2.7-172-274.6-68.4-541.5l8.6,3.3c-95.6,246.2,45.9,497.1,65.4,529.6
                                    c406.5-203.8,434.6-486,433.5-567.8c0-2.3,0-3.7,0.1-4.2l9.2,1c0,0.5,0,1.5,0,3.1c1.1,83.4-27.5,371.7-442.4,578
                                    L2572.5,2203.4L2572.5,2203.4z" />
                                                    <path class="st0"
                                                        d="M2781,2508.2c-96.6,30.5-240.5,47.1-434.4-4.2l-2.4-0.6l-0.8-2.3c-0.8-2.3-78.3-233.8-22.1-530.2
                                    l56.7-298.7l9.1,1.7l-56.7,298.7c-52.8,278.1,13.1,498.4,21,523.2c227.3,59.6,384.5,24.9,476.5-14.8
                                    c99.7-43,145.9-100.7,146.4-101.3l7.2,5.7c-1.9,2.4-48.2,60.1-150,104.1C2816.5,2496,2799.6,2502.4,2781,2508.2L2781,2508.2z
                                    " />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g>
                                        <g class="st5">

                                            <linearGradient
                                                id="SVGID_00000033350637724485586140000009367054966716290462_"
                                                gradientUnits="userSpaceOnUse" x1="2091.937" y1="3197.4041"
                                                x2="1140.8768" y2="444.3442"
                                                gradientTransform="matrix(1 0 0 -1 0 3710)">
                                                <stop offset="0" style="stop-color:#FF9085" />
                                                <stop offset="1" style="stop-color:#FB6FBB" />
                                            </linearGradient>
                                            <path
                                                style="fill:url(#SVGID_00000033350637724485586140000009367054966716290462_);"
                                                d="M2115.2,2742.7
                            c-85.8-100-196-259.3-230.7-471.3c-45.5-278.1,78.9-402.6,116.2-861c23.6-289.8,37.1-492.3-96.9-616
                            c-105-96.9-288-133.8-408.7-67.6c-100.3,55-169.3,187.6-196.6,284.7c-22.2,79.1-17.8,138.8-68.8,176.2
                            c-52.2,38.2-100.8,8.1-148.6,35.4c-97.1,55.4-68.4,276.9-63.8,312.7c51.6,398.2,380.7,698.7,525.8,828.1
                            C1663.2,2470.9,1851,2616.4,2115.2,2742.7L2115.2,2742.7z" />
                                            <g>
                                                <defs>
                                                    <path
                                                        id="SVGID_00000015350997620400229620000001167805797654223291_"
                                                        d="M2115.2,2742.7c-85.8-100-196-259.3-230.7-471.3
                                    c-45.5-278.1,78.9-402.6,116.2-861c23.6-289.8,37.1-492.3-96.9-616c-105-96.9-288-133.8-408.7-67.6
                                    c-100.3,55-169.3,187.6-196.6,284.7c-22.2,79.1-17.8,138.8-68.8,176.2c-52.2,38.2-100.8,8.1-148.6,35.4
                                    c-97.1,55.4-68.4,276.9-63.8,312.7c51.6,398.2,380.7,698.7,525.8,828.1C1663.2,2470.9,1851,2616.4,2115.2,2742.7
                                    L2115.2,2742.7z" />
                                                </defs>
                                                <clipPath
                                                    id="SVGID_00000123407137779078737520000013882494782706083739_">
                                                    <use xlink:href="#SVGID_00000015350997620400229620000001167805797654223291_"
                                                        style="overflow:visible;" />
                                                </clipPath>
                                                <g
                                                    style="clip-path:url(#SVGID_00000123407137779078737520000013882494782706083739_);">
                                                    <g>
                                                        <path class="st0"
                                                            d="M2215.4,2828.6c-159.9-81.5-295.2-172.7-402.3-271.1c-158.7-145.9-250.3-303.6-272.2-469
                                        c-17.1-129.2,9.1-264.1,42.2-434.9c27.5-141.5,59.7-239.2,88.1-325.5c36.7-111.4,65.7-199.3,66.5-330.8
                                        c0.8-133.7-28.5-269.8-87.2-404.8l12.2-5.3c59.4,136.7,89.1,274.7,88.3,410.2c-0.8,133.6-30.1,222.4-67.2,334.9
                                        c-28.3,85.8-60.4,183.1-87.7,323.8c-34.2,176.2-58.9,303.5-42.1,430.6c21.5,162.1,111.7,317.2,268,460.9
                                        c106.2,97.6,240.5,188.1,399.3,269L2215.4,2828.6L2215.4,2828.6z" />
                                                        <path class="st0"
                                                            d="M1607.2,1559.4l-1.4-7.4c-48.7-265.8-168.9-441.7-261.2-542.6c-99.8-109.1-188.9-155.9-189.8-156.4
                                        l6.1-11.8c0.9,0.5,92.1,48.4,193.5,159.2c92.5,101.2,212.8,276.9,263,541.5c24.3-8.9,107.5-42.4,195-114.9
                                        c95.4-79.1,215.5-222.2,246.4-454.6l13.2,1.8c-31.4,237-154.1,382.9-251.5,463.5c-105.5,87.4-205.2,119.2-206.2,119.5
                                        L1607.2,1559.4L1607.2,1559.4z" />
                                                        <path class="st0"
                                                            d="M1546.9,1941.8l-4.5-1.9c-122.2-50.8-249.5-211.2-378.3-476.8c-95.6-197.2-156.4-382-157-383.8
                                        l12.7-4.1c2.4,7.3,240.6,726.7,523.4,850.6c19-21.7,119.7-134.6,241.1-230.2c57-44.9,146.2-78.3,265.2-99.3
                                        c88.3-15.6,161-18.1,161.7-18.1l0.4,13.3c-2.9,0.1-287.2,10.5-419.1,114.5c-133.2,105-241.3,230.9-242.4,232.1
                                        L1546.9,1941.8L1546.9,1941.8z" />
                                                        <path class="st0"
                                                            d="M1777.2,2519.4l-12.9-3c-1.4-0.3-141-33-318.6-117.4c-164-78-395.2-217.3-564.8-438.3L554,1534.8
                                        l10.6-8.1l326.8,425.9c167.9,218.8,397,356.9,559.6,434.3c145.5,69.2,265.2,103.4,303.4,113.4
                                        c-55.1-137.1-26.2-276.4,83.9-403.7c85.2-98.4,190.2-155.8,191.2-156.3l6.3,11.7c-1,0.6-104.2,57-187.7,153.6
                                        c-111.3,128.7-136.9,263.8-76.3,401.7L1777.2,2519.4L1777.2,2519.4z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="st5">
                                            <path class="st8"
                                                d="M1816.5,2189.7c-181.1,45.1-418.3,76.8-664,30.2c-62.7-11.9-450.1-85.3-447.4-254.4
                            c1-59.5,49.5-80.7,52.2-160.2c3.2-94.3-63-125-128-225.8c-38.8-60.2-152.5-236.2-63.1-370.5c53.5-80.3,177-142,282.2-142.9
                            c154.3-1.2,238.9,128.8,378.3,351.3c123.6,197.2,117.9,254.4,209.3,394.8C1504,1916.4,1617.8,2055,1816.5,2189.7L1816.5,2189.7
                            z" />
                                            <g>
                                                <defs>
                                                    <path
                                                        id="SVGID_00000050633059010974272060000010421419958864818327_"
                                                        d="M1816.5,2189.7c-181.1,45.1-418.3,76.8-664,30.2
                                    c-62.7-11.9-450.1-85.3-447.4-254.4c1-59.5,49.5-80.7,52.2-160.2c3.2-94.3-63-125-128-225.8
                                    c-38.8-60.2-152.5-236.2-63.1-370.5c53.5-80.3,177-142,282.2-142.9c154.3-1.2,238.9,128.8,378.3,351.3
                                    c123.6,197.2,117.9,254.4,209.3,394.8C1504,1916.4,1617.8,2055,1816.5,2189.7L1816.5,2189.7z" />
                                                </defs>
                                                <clipPath
                                                    id="SVGID_00000053534698346659063580000004887689387426503566_">
                                                    <use xlink:href="#SVGID_00000050633059010974272060000010421419958864818327_"
                                                        style="overflow:visible;" />
                                                </clipPath>
                                                <g
                                                    style="clip-path:url(#SVGID_00000053534698346659063580000004887689387426503566_);">
                                                    <g>
                                                        <path class="st0"
                                                            d="M2031.5,2214.1c-260,0-508.4-95.5-738.6-284c-239.2-195.8-398.7-443.1-490.3-616
                                        c-64.1-121-92.3-265.1-83.8-428.3l16.4,0.9c-8.4,160.2,19.2,301.4,81.9,419.7c91,171.6,249.2,416.8,486.2,610.9
                                        c227.1,186,472.2,280.3,728.2,280.3h0.7c192.5-0.1,383.9-51.2,569.1-151.8l7.8,14.4c-187.6,101.9-381.7,153.6-576.9,153.8
                                        L2031.5,2214.1L2031.5,2214.1z" />
                                                        <path class="st0"
                                                            d="M1026.8,1649.4l-7-2.4c-454.9-159.2-521.8-453.4-531.4-539.8c-0.2-1.4-0.3-2.4-0.4-2.9l16-3.7
                                        c0.1,0.6,0.4,2.2,0.7,4.8c9.3,83.5,74,367,513.4,523.6c19.5-45.6,123.9-313.2-2.2-546.7l14.4-7.8
                                        c141.7,262.4,1.1,565.3-0.4,568.3L1026.8,1649.4L1026.8,1649.4z" />
                                                        <path class="st0"
                                                            d="M964.1,1998.7c-68.7,0-125.4-10.2-169.4-23c-111.1-32.3-166.7-86.2-169-88.4l11.5-11.7
                                        c0.5,0.5,55.6,53.7,163,84.7c98.7,28.4,263,43.5,486.5-45.7c6.1-33.9,41.9-264.2-46.1-536.8l-96.8-299.6l15.6-5.1
                                        l96.8,299.6c96.3,298.2,46.3,547,45.8,549.4l-0.9,4.3l-4.1,1.6C1166.1,1981,1054.6,1998.7,964.1,1998.7L964.1,1998.7z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="st10"
                                                d="M3258.9,2853.5l-2778-24.2v71.6c0,19.4,12.1,35.9,28.5,38.9l785.5,141c9.3,1.7,18.8,2.1,28.2,1.3
                            l1905.6-160.7c17-1.4,30.2-18,30.2-38V2853.5L3258.9,2853.5z" />
                                            <path class="st10"
                                                d="M2364.6,2737.4l-1853.2,131c-33.2,2.3-60.1-22.6-60.1-55.6V1487.9c0-33.1,27-59.9,60.1-59.9h1853.2
                            c27.3,0,49.4,24.2,49.4,54.1v1197.6C2414.1,2709.7,2392,2735.5,2364.6,2737.4L2364.6,2737.4z" />
                                            <path class="st10"
                                                d="M2394.2,2737.4L541,2868.4c-33.2,2.3-60.1-22.6-60.1-55.6V1487.9c0-33.1,27-59.9,60.1-59.9h1853.2
                            c27.3,0,49.4,24.2,49.4,54.1v1197.6C2443.6,2709.7,2421.5,2735.5,2394.2,2737.4L2394.2,2737.4z" />
                                            <path class="st11"
                                                d="M2336.5,2653l-1726,113.8c-27,1.8-48.9-18.7-48.9-45.6V1561.2c0-27,21.9-49,48.9-49.1l1726-7.1
                            c22.5-0.1,40.8,19.8,40.8,44.3v1056.4C2377.2,2630.4,2359,2651.5,2336.5,2653L2336.5,2653z" />
                                            <path class="st12"
                                                d="M2348,2731.5L480.9,2869.3l814.1,146.1c9.3,1.7,18.8,2.1,28.2,1.3l1935.8-163.3l-881.3-121.1
                            C2367.8,2731.1,2357.9,2730.7,2348,2731.5L2348,2731.5z" />
                                            <polygon class="st13"
                                                points="753.3,2872.8 2307.7,2756.3 2788.8,2821.9 1247.8,2946.4 					" />
                                            <path class="st14"
                                                d="M1947.7,2374.1c-142.9-76.9-255.2,20.5-363.6-75.6c-65.7-58.3-33.5-101.7-114.3-188.8
                            c-89.6-96.4-147.9-64-237.9-150.8c-113.8-109.7-56.9-195.1-154.9-273.9c-118.9-95.6-247.2-7.1-360.4-98.8
                            c-48.8-39.5-75.6-97-89.6-158.2H516.1c-19.4,0-35.2,15.7-35.2,35.1v1373.3c0,19.4,15.8,34,35.2,32.6l1888.7-134.1
                            c9.3-0.7,17.5-6.1,22.8-13.9c-138.3-5-223.2-51.4-277.5-99.3C2043.8,2528.1,2062.3,2435.7,1947.7,2374.1L1947.7,2374.1z" />
                                        </g>
                                        <g>
                                            <path class="st15"
                                                d="M1561.3,2496.5c-74,1.3-147.7-15.7-212.9-49.6c-70.5-36.5-129.6-91.1-170.5-158.1
                            c-39.7-64.9-60.7-139.4-60.7-215.1c0-237.5,201.8-425.5,444.2-419.2c236.4,6.2,424.4,195.7,424.4,422.7
                            S1797.7,2492.3,1561.3,2496.5L1561.3,2496.5z" />
                                            <path class="st0"
                                                d="M1949,2077.1c0,207.7-171.6,378.8-387.7,382.2c-69.9,1.1-136.1-15.4-193.9-45.5
                            c-64.2-33.3-117.9-83.3-155.1-144.2c-35-57.4-55.1-124.3-55.1-195.7c0-216.4,183-387.5,404.1-382.2
                            C1777.4,1696.9,1949,1869.4,1949,2077.1L1949,2077.1z" />

                                            <linearGradient
                                                id="SVGID_00000110456082566933695750000001110487446484569774_"
                                                gradientUnits="userSpaceOnUse" x1="1668.1692" y1="1839.1456"
                                                x2="1163.2692" y2="776.8657"
                                                gradientTransform="matrix(1 0 0 -1 0 3710)">
                                                <stop offset="0" style="stop-color:#444B8C" />
                                                <stop offset="1" style="stop-color:#26264F" />
                                            </linearGradient>
                                            <path
                                                style="fill:url(#SVGID_00000110456082566933695750000001110487446484569774_);"
                                                d="M1809.2,2015.6l-0.1,110.3
                            c0,10.6-4.3,20.7-11.9,28.1l-96.1,94.2c-7.7,7.6-18.3,11.9-29.2,11.9h-145.4c0,0-99.8,96.4-159.1,153.8
                            c-64.2-33.3-117.9-83.3-155.1-144.2c59.8-57.4,162.2-156.1,162.2-156.1l-0.6-143c0-10.8,4.4-21.2,12.5-28.8l99.2-94.1
                            c7.9-7.4,18.5-11.5,29.6-11.3l115.1,2c9.5,0.2,18.1,5.9,21.7,14.5c3.6,8.6,1.6,18.4-5.1,24.9l-109.7,105.1
                            c-9.8,9.3-9.8,24.7,0,34.2l39.3,38.4l10.8,10.6l39.1,38.2c9.7,9.4,25.3,9.5,35,0.1l108.3-105.1c6.6-6.4,16.6-8.3,25.3-4.7
                            C1803.6,1998,1809.2,2006.4,1809.2,2015.6L1809.2,2015.6z" />
                                        </g>
                                    </g>
                                    <g>

                                        <linearGradient id="SVGID_00000132801990489031177760000000258247592916244123_"
                                            gradientUnits="userSpaceOnUse" x1="1293.0977" y1="1459.13"
                                            x2="1256.6677" y2="820.7001"
                                            gradientTransform="matrix(1 0 0 -1 0 3710)">
                                            <stop offset="0" style="stop-color:#AA80F9" />
                                            <stop offset="1" style="stop-color:#6165D7" />
                                        </linearGradient>
                                        <path
                                            style="fill:url(#SVGID_00000132801990489031177760000000258247592916244123_);"
                                            d="M1395,2537.2
                        c30.1-16.7,21.3-111.3-19.5-177.8c-57.9-94.4-184.9-139.5-211-111.4c-26.6,28.8,50.1,136.8,62.5,154.3
                        C1272.2,2466.1,1359.4,2556.9,1395,2537.2z" />

                                        <linearGradient id="SVGID_00000127004589587396275060000000484870847367515541_"
                                            gradientUnits="userSpaceOnUse" x1="2748.9875" y1="692.3358"
                                            x2="2840.0444" y2="692.3358"
                                            gradientTransform="matrix(-0.9642 0.2651 -0.2651 -0.9642 4585.6372 3078.2004)">
                                            <stop offset="0" style="stop-color:#444B8C" />
                                            <stop offset="1" style="stop-color:#26264F" />
                                        </linearGradient>
                                        <path
                                            style="fill:url(#SVGID_00000127004589587396275060000000484870847367515541_);"
                                            d="M1667.1,3140.2
                        c-5.6,6.2-6.9,17.6-2,23.2c4.8,5.5,12,1.4,32.5,2c21.9,0.7,27.7,5.8,42.6,1.7c6-1.7,16.7-5.7,16.4-10c-0.1-3-5.6-4.6-23.6-10.6
                        c-25.7-8.6-25.6-9.1-31-10C1688.2,3134.3,1674.5,3132,1667.1,3140.2L1667.1,3140.2z" />

                                        <linearGradient id="SVGID_00000048486576303576149320000013405890758026359424_"
                                            gradientUnits="userSpaceOnUse" x1="2677.7292" y1="647.843"
                                            x2="2716.1194" y2="727.3229"
                                            gradientTransform="matrix(-0.9802 0.1978 -0.1978 -0.9802 4450.1709 3258.4302)">
                                            <stop offset="0" style="stop-color:#FFC444" />
                                            <stop offset="1" style="stop-color:#F36F56" />
                                        </linearGradient>
                                        <path
                                            style="fill:url(#SVGID_00000048486576303576149320000013405890758026359424_);"
                                            d="M1681.1,3104.4l11,36.6
                        c-0.8,2-12,8.5-21.6,4.4l-16.3-35.5L1681.1,3104.4L1681.1,3104.4z" />

                                        <linearGradient id="SVGID_00000142872759558690892070000011055494989738064567_"
                                            gradientUnits="userSpaceOnUse" x1="2891.6274" y1="698.1921"
                                            x2="2982.6853" y2="698.1921"
                                            gradientTransform="matrix(-0.9642 0.2651 -0.2651 -0.9642 4585.6372 3078.2004)">
                                            <stop offset="0" style="stop-color:#444B8C" />
                                            <stop offset="1" style="stop-color:#26264F" />
                                        </linearGradient>
                                        <path
                                            style="fill:url(#SVGID_00000142872759558690892070000011055494989738064567_);"
                                            d="M1528,3172.4c-5.6,6.2-6.9,17.6-2,23.2
                        c4.8,5.5,12,1.4,32.5,2c21.9,0.7,27.7,5.8,42.6,1.7c6-1.7,16.7-5.7,16.4-10c-0.1-3-5.6-4.6-23.6-10.6c-25.7-8.6-25.6-9.1-31-10
                        C1549.1,3166.5,1535.4,3164.2,1528,3172.4L1528,3172.4z" />

                                        <linearGradient id="SVGID_00000132063541530359639720000012478140350761635006_"
                                            gradientUnits="userSpaceOnUse" x1="2820.4436" y1="643.851"
                                            x2="2858.8435" y2="723.3209"
                                            gradientTransform="matrix(-0.9802 0.1978 -0.1978 -0.9802 4450.1709 3258.4302)">
                                            <stop offset="0" style="stop-color:#FFC444" />
                                            <stop offset="1" style="stop-color:#F36F56" />
                                        </linearGradient>
                                        <path
                                            style="fill:url(#SVGID_00000132063541530359639720000012478140350761635006_);"
                                            d="M1542,3136.6l11,36.6
                        c-0.8,2-12,8.5-21.6,4.4l-16.3-35.5L1542,3136.6L1542,3136.6z" />

                                        <linearGradient id="SVGID_00000173121290546862208610000009942092546267893901_"
                                            gradientUnits="userSpaceOnUse" x1="1133.2969" y1="1468.2501"
                                            x2="1096.8668" y2="829.8202"
                                            gradientTransform="matrix(1 0 0 -1 0 3710)">
                                            <stop offset="0" style="stop-color:#AA80F9" />
                                            <stop offset="1" style="stop-color:#6165D7" />
                                        </linearGradient>
                                        <path
                                            style="fill:url(#SVGID_00000173121290546862208610000009942092546267893901_);"
                                            d="M923.2,2254.2
                        c34.9-11.9,88.2-25.7,153.9-25.7c74,0,133.4,0,174.4,35c99.5,84.8-11.9,288.1,45.2,438.5c6.2,16.5,24.4,68.7,8.6,125.1
                        c-2.9,10.4-8.9,19.4-19.2,34.6c-60.3,89.4-229.7,96.8-307.2,19.2c-41-41-77.9-33.5-78.8-80.2
                        C896.2,2616.1,924.8,2431.9,923.2,2254.2z" />

                                        <linearGradient id="SVGID_00000130616032955762152960000012787388303550573202_"
                                            gradientUnits="userSpaceOnUse" x1="948.9396" y1="962.2403"
                                            x2="1168.6697" y2="1240.4703"
                                            gradientTransform="matrix(1 0 0 -1 0 3710)">
                                            <stop offset="0" style="stop-color:#AA80F9" />
                                            <stop offset="1" style="stop-color:#6165D7" />
                                        </linearGradient>

                                        <path
                                            style="opacity:0.4;fill:url(#SVGID_00000130616032955762152960000012787388303550573202_);enable-background:new    ;"
                                            d="
                        M966.2,2476.4c-14.1-38.6,0.5-82.8-30.9-102.1c-11.5-7.1-25.8-10.1-41.4-9.7c1.9,135.7,4.5,271.2,7.8,412.9
                        c1.1,46.8,6.9,49.1,52.3,90.1c52.5,47.5,143.1,63,220.7,47.5c-101.7-62.5-174.2-127.3-163.8-182.8
                        c12.1-64.7,130.5-83.8,125.8-129.7C1131.5,2553.7,997,2560.8,966.2,2476.4L966.2,2476.4z" />

                                        <linearGradient id="SVGID_00000119100476792337674550000000355245199325921190_"
                                            gradientUnits="userSpaceOnUse" x1="919.7104" y1="1480.4393"
                                            x2="883.2804" y2="841.9994"
                                            gradientTransform="matrix(1 0 0 -1 0 3710)">
                                            <stop offset="0" style="stop-color:#AA80F9" />
                                            <stop offset="1" style="stop-color:#6165D7" />
                                        </linearGradient>
                                        <path
                                            style="fill:url(#SVGID_00000119100476792337674550000000355245199325921190_);"
                                            d="M955.6,2258.4
                        c-34.2-23.1-116.5,35.1-162.2,86.4c-21.2,23.8-95.1,106.7-76.8,218.1c3,18.1,16.8,103,89.4,144.6c65,37.2,152.8,27.6,223.2-25.1
                        c9.6-8.5,19.2-17.1,28.8-25.6c9.5-10.2,18.9-20.4,28.4-30.7c-14.9-12.4-40.1-30.2-75.6-41.7c-54.1-17.4-89.6,8.4-102.5-8.6
                        c-15.9-21,32.5-60.1,45.3-149C957,2402.8,993.8,2284.1,955.6,2258.4L955.6,2258.4z" />

                                        <linearGradient id="SVGID_00000089555559272759058050000005053626317454728100_"
                                            gradientUnits="userSpaceOnUse" x1="1263.6354" y1="627.9778"
                                            x2="1569.5616" y2="1015.3357"
                                            gradientTransform="matrix(1 0 0 -1 0 3710)">
                                            <stop offset="0" style="stop-color:#FF9085" />
                                            <stop offset="1" style="stop-color:#FB6FBB" />
                                        </linearGradient>
                                        <path
                                            style="fill:url(#SVGID_00000089555559272759058050000005053626317454728100_);"
                                            d="M1011.6,2839.1
                        c-22.6,73.5,19.2,43.6,104.4,1.7c89.7-44.2,285.8-107.7,370.3-24.5c62.9,61.9,18.4,159.8,115.8,267.6
                        c17.2,19,33.4,32.2,43.6,39.9c17.6-7.3,35.1-14.5,52.7-21.8c6.9-40.2,28.6-195.2-69-334c-23.6-33.6-68.4-98-145.2-125.3
                        C1276.7,2569,1032.5,2771.3,1011.6,2839.1L1011.6,2839.1z" />

                                        <linearGradient id="SVGID_00000123399508641949323040000016702831200336750985_"
                                            gradientUnits="userSpaceOnUse" x1="1445.7977" y1="985.743"
                                            x2="1090.8777" y2="592.6132"
                                            gradientTransform="matrix(1 0 0 -1 0 3710)">
                                            <stop offset="0" style="stop-color:#FF9085" />
                                            <stop offset="1" style="stop-color:#FB6FBB" />
                                        </linearGradient>
                                        <path
                                            style="fill:url(#SVGID_00000123399508641949323040000016702831200336750985_);"
                                            d="M928.8,2770.5
                        c-14.6,42.2-1.5,90.8,22.4,120.9c53,66.9,172.1,59.9,246.5,35.2c90.5-30.1,110.7-84.9,146.3-71.4
                        c55.3,20.9,16,157.1,115.8,267.6c17.2,19,33.4,32.2,43.6,39.9c17.6-7.3,35.1-14.5,52.7-21.8c13.2-93.6,3.6-168.6-6.5-216.6
                        c-11.6-54.9-21.9-104.2-60.7-151.6c-48.1-59-111-79.7-147-91.1C1189.3,2633.5,966.8,2660.8,928.8,2770.5L928.8,2770.5z" />
                                        <g>

                                            <linearGradient
                                                id="SVGID_00000165956059803849680010000016117245770830731398_"
                                                gradientUnits="userSpaceOnUse" x1="1278.7992" y1="883.3896"
                                                x2="1228.9691" y2="1024.5797"
                                                gradientTransform="matrix(1 0 0 -1 0 3710)">
                                                <stop offset="0" style="stop-color:#311944" />
                                                <stop offset="1" style="stop-color:#893976" />
                                            </linearGradient>
                                            <polygon
                                                style="fill:url(#SVGID_00000165956059803849680010000016117245770830731398_);"
                                                points="1423.6,2656.3 1011.6,2650.2
                            1121.2,2703 1424.6,2683.2 					" />

                                            <linearGradient
                                                id="SVGID_00000144308613530866178420000013490207862898221498_"
                                                gradientUnits="userSpaceOnUse" x1="1061.1111" y1="1087.9501"
                                                x2="1079.3811" y2="961.7101"
                                                gradientTransform="matrix(1 0 0 -1 0 3710)">
                                                <stop offset="0" style="stop-color:#311944" />
                                                <stop offset="1" style="stop-color:#893976" />
                                            </linearGradient>
                                            <path
                                                style="fill:url(#SVGID_00000144308613530866178420000013490207862898221498_);"
                                                d="M997.1,2661.1L997.1,2661.1
                            c0,7.7,4.8,14.6,12.1,17.2l131.6,51.6l0.6-35.8l-129.8-44C1004.4,2648.1,997.1,2653.5,997.1,2661.1L997.1,2661.1z" />
                                        </g>

                                        <linearGradient id="SVGID_00000176724967372182366090000016174862755856983961_"
                                            gradientUnits="userSpaceOnUse" x1="1055.6254" y1="1060.2937"
                                            x2="1158.89" y2="1060.2937"
                                            gradientTransform="matrix(1 0 0 -1 0 3710)">
                                            <stop offset="0" style="stop-color:#FFC444" />
                                            <stop offset="1" style="stop-color:#F36F56" />
                                        </linearGradient>
                                        <path
                                            style="fill:url(#SVGID_00000176724967372182366090000016174862755856983961_);"
                                            d="M1055.9,2644.6
                        c-2.5-0.6,12.3-30.1,24-26.7s68.7,36.4,73.8,50.1l5.2,13.6c0,0-24.9,1.9-40.3-3.2S1076.5,2649.2,1055.9,2644.6L1055.9,2644.6z" />
                                        <g>
                                            <g>

                                                <linearGradient
                                                    id="SVGID_00000106147445402956646670000015482041956679072147_"
                                                    gradientUnits="userSpaceOnUse" x1="1423.1512" y1="1076.8907"
                                                    x2="1326.0012" y2="1214.851"
                                                    gradientTransform="matrix(1 0 0 -1 0 3710)">
                                                    <stop offset="0" style="stop-color:#444B8C" />
                                                    <stop offset="1" style="stop-color:#26264F" />
                                                </linearGradient>
                                                <path
                                                    style="fill:url(#SVGID_00000106147445402956646670000015482041956679072147_);"
                                                    d="M1152.3,2443.1l-29,264.4
                                c-1,9.1,11.8,22.7,20.9,22.3l426-26.1c7-0.3,12.8-5.5,14-12.4l53.5-255.3c1.6-9.3-15.1-18.9-24.5-18.6l-446.4,12.6
                                C1159.3,2430.1,1153.1,2435.7,1152.3,2443.1L1152.3,2443.1z" />

                                                <linearGradient
                                                    id="SVGID_00000125560399827797845740000016750724009252199575_"
                                                    gradientUnits="userSpaceOnUse" x1="1236.7878" y1="848.5812"
                                                    x2="1449.4078" y2="1280.451"
                                                    gradientTransform="matrix(1 0 0 -1 0 3710)">
                                                    <stop offset="0" style="stop-color:#311944" />
                                                    <stop offset="1" style="stop-color:#893976" />
                                                </linearGradient>
                                                <path
                                                    style="fill:url(#SVGID_00000125560399827797845740000016750724009252199575_);"
                                                    d="M1162.1,2450.9l-29,264.4
                                c-1,9.1,6.4,17,15.6,16.6l431.3-20.4c7-0.3,12.8-5.5,14-12.4l44.1-256.5c1.6-9.3-5.7-17.7-15.1-17.5l-446.4,12.6
                                C1169,2437.8,1162.9,2443.5,1162.1,2450.9L1162.1,2450.9z" />
                                            </g>

                                            <linearGradient
                                                id="SVGID_00000116917571660477947240000009174274912269479098_"
                                                gradientUnits="userSpaceOnUse" x1="1132.9291" y1="1125.7717"
                                                x2="1600.0099" y2="1125.7717"
                                                gradientTransform="matrix(1 0 0 -1 0 3710)">
                                                <stop offset="0" style="stop-color:#311944" />
                                                <stop offset="1" style="stop-color:#893976" />
                                            </linearGradient>

                                            <path
                                                style="opacity:0.3;fill:url(#SVGID_00000116917571660477947240000009174274912269479098_);enable-background:new    ;"
                                                d="
                            M1415.3,2649.4c-37.7-16-24.4-46.4-68.8-84.3c-58.7-50-118.5-28.3-139.4-67.1c-6.5-12.1-9.6-30.9,1.7-61.3l-32.3,0.9
                            c-7.4,0.2-13.6,5.9-14.4,13.3l-29,264.4c-1,9.1,6.4,17,15.6,16.6l431.3-20.4c7-0.3,12.8-5.5,14-12.4l6.1-35.4
                            c-13.1-7.3-28.7-13.9-47-17.6C1489.7,2633.1,1458.7,2667.8,1415.3,2649.4L1415.3,2649.4z" />
                                        </g>
                                        <g>

                                            <linearGradient
                                                id="SVGID_00000125593704649175246280000009752325298084068538_"
                                                gradientUnits="userSpaceOnUse" x1="1144.5505" y1="1182.9604"
                                                x2="1154.8306" y2="1456.9506"
                                                gradientTransform="matrix(0.9171 0.3987 0.3987 -0.9171 -481.1728 2969.5884)">
                                                <stop offset="0" style="stop-color:#FFC444" />
                                                <stop offset="1" style="stop-color:#F36F56" />
                                            </linearGradient>
                                            <path
                                                style="fill:url(#SVGID_00000125593704649175246280000009752325298084068538_);"
                                                d="M1084.1,2127.4
                            c0.2,27.4-2.8,49.2-5.7,64.1c-3.3,17.1-5.7,21.5-8.8,25.1c-4.6,5.4-11.5,9.9-50.8,19.6c-21.4,5.3-24.1,5.2-24.6,7.3
                            c-2.3,10.4,56,45.6,116.2,37.1c36.9-5.2,70.4-26.2,68.3-37.3c-2.1-11.1-38.9-5.1-49.9-25.3c-7.6-14,0.9-33.9,11-50.3
                            C1130.1,2149.4,1093.9,2145.8,1084.1,2127.4L1084.1,2127.4z" />
                                            <g>

                                                <linearGradient
                                                    id="SVGID_00000137099824929697611730000012902876746741933485_"
                                                    gradientUnits="userSpaceOnUse" x1="3014.6592" y1="1315.9515"
                                                    x2="2944.9192" y2="1493.0717"
                                                    gradientTransform="matrix(-0.9686 -0.2485 0.2485 -0.9686 3622.9033 4284.5967)">
                                                    <stop offset="0" style="stop-color:#311944" />
                                                    <stop offset="1" style="stop-color:#6B3976" />
                                                </linearGradient>
                                                <path
                                                    style="fill:url(#SVGID_00000137099824929697611730000012902876746741933485_);"
                                                    d="M1161.4,2162.3
                                c11.3-9,16.9-28.4,10.4-43.2c-5.6-12.8-18.3-17.7-25.9-20.7c-22.1-8.6-53.3-6.5-68.8,11.8c-9.2,10.9-3.1,40.1-2.3,45.2
                                c0.9,5.8,4.6,8.7,7.3,13.7c3.8,6.9,9.8,17.8,19.5,35.9c2.2-4.1,5.2-9,9.2-14.1c1.6-2,7.7-9.7,15.6-15.4
                                C1142.1,2164.2,1150.7,2170.8,1161.4,2162.3L1161.4,2162.3z" />

                                                <linearGradient
                                                    id="SVGID_00000064325844041025116240000001941358417454186150_"
                                                    gradientUnits="userSpaceOnUse" x1="289.4034" y1="1529.8378"
                                                    x2="286.1934" y2="1271.4277"
                                                    gradientTransform="matrix(0.982 0.1888 0.1888 -0.982 547.8053 3600.0754)">
                                                    <stop offset="0" style="stop-color:#FFC444" />
                                                    <stop offset="1" style="stop-color:#F36F56" />
                                                </linearGradient>
                                                <path
                                                    style="fill:url(#SVGID_00000064325844041025116240000001941358417454186150_);"
                                                    d="M1085.7,2187.7
                                c0,0,8.6,28.5,38.9,34.3c27.2,5.2,46.7-53.7,32.9-70.8c-4.6-5.7-15.5-10.4-25.5-10.3c-5.9,0.1-8.3,1.9-17.9,1.9
                                c-8.9,0-11-1.5-14-0.1c-3.8,1.8-7.8,7.7-7.1,26.6c-3.8-6.5-9.3-10.1-14.2-9.1c-0.8,0.1-2.9,0.9-4.5,2.5
                                C1068.8,2168.6,1072.7,2179,1085.7,2187.7L1085.7,2187.7z" />

                                                <linearGradient
                                                    id="SVGID_00000054983263154866856670000004336243355116930188_"
                                                    gradientUnits="userSpaceOnUse" x1="2993.3528" y1="1307.473"
                                                    x2="2923.5527" y2="1484.7631"
                                                    gradientTransform="matrix(-0.9686 -0.2485 0.2485 -0.9686 3622.9033 4284.5967)">
                                                    <stop offset="0" style="stop-color:#311944" />
                                                    <stop offset="1" style="stop-color:#6B3976" />
                                                </linearGradient>
                                                <path
                                                    style="fill:url(#SVGID_00000054983263154866856670000004336243355116930188_);"
                                                    d="M1099.8,2138.9
                                c1,1.3-4.2,5.1-6.2,11.8c-4,13.1,5.2,32.4,18.5,37.3c7.8,2.9,11.3-1.4,25,0.7c8.5,1.3,15.1,4.1,19.1,6.2
                                c0.4,15.6-7.3,29-18.7,33.2c-12.3,4.5-24.5-3.3-29.6-6.6c-3.4-2.2-14.3-9.2-17.7-21.8c-3.5-13.1,4.6-18.3-0.8-28
                                c-2.7-4.9-7.2-7.8-10.1-16.6c-0.8-2.4-1.2-4.4-1.4-5.8C1086.8,2143.7,1098.3,2137,1099.8,2138.9L1099.8,2138.9z" />

                                                <linearGradient
                                                    id="SVGID_00000116204635577971186180000001342947094245879950_"
                                                    gradientUnits="userSpaceOnUse" x1="2925.0559" y1="1414.3234"
                                                    x2="2928.6858" y2="1381.9532"
                                                    gradientTransform="matrix(-0.9686 -0.2485 0.2485 -0.9686 3622.9033 4284.5967)">
                                                    <stop offset="0" style="stop-color:#FFC444" />
                                                    <stop offset="1" style="stop-color:#F36F56" />
                                                </linearGradient>
                                                <path
                                                    style="fill:url(#SVGID_00000116204635577971186180000001342947094245879950_);"
                                                    d="M1145.2,2197.6c0,0-6.6,1.5-16.4-1.6
                                c-0.5-0.2-1.1-0.1-1.2,0.1c-0.5,0.9,4.8,6.8,11.1,6.7c4.5-0.1,8.8-3.2,8.5-4.4C1147.1,2197.9,1146.2,2197.7,1145.2,2197.6
                                L1145.2,2197.6z" />
                                            </g>
                                        </g>
                                    </g>
                                    <g>
                                        <g>

                                            <linearGradient
                                                id="SVGID_00000183949534495082133040000006478711168309615251_"
                                                gradientUnits="userSpaceOnUse" x1="1137.8401" y1="2559.5913"
                                                x2="2013.5801" y2="2559.5913"
                                                gradientTransform="matrix(1 0 0 -1 918.71 3710)">
                                                <stop offset="0" style="stop-color:#444B8C" />
                                                <stop offset="1" style="stop-color:#26264F" />
                                            </linearGradient>
                                            <path
                                                style="fill:url(#SVGID_00000183949534495082133040000006478711168309615251_);"
                                                d="M2932.3,1179.9
                            c0,236.9-185.3,423.3-422.1,416c-246.4-7.6-453.7-220.4-453.7-475.1s207.2-439.6,453.7-413.9
                            C2747,731.7,2932.3,943,2932.3,1179.9z" />

                                            <linearGradient
                                                id="SVGID_00000173142575511017145100000010927539427524942268_"
                                                gradientUnits="userSpaceOnUse" x1="1838.7672" y1="3019.8914"
                                                x2="1382.827" y2="2014.0012"
                                                gradientTransform="matrix(1 0 0 -1 918.71 3710)">
                                                <stop offset="0" style="stop-color:#AA80F9" />
                                                <stop offset="1" style="stop-color:#6165D7" />
                                            </linearGradient>
                                            <path
                                                style="fill:url(#SVGID_00000173142575511017145100000010927539427524942268_);"
                                                d="M2996.3,1159.5
                            c0,236.9-185.3,423.3-422.1,416c-246.4-7.6-453.7-220.4-453.7-475.1s207.2-439.6,453.7-413.9
                            C2811,711.2,2996.3,922.6,2996.3,1159.5z" />

                                            <linearGradient
                                                id="SVGID_00000103267106374489521300000003039952879993726602_"
                                                gradientUnits="userSpaceOnUse" x1="1356.9049" y1="2129.127"
                                                x2="1594.4548" y2="2506.407"
                                                gradientTransform="matrix(1 0 0 -1 918.71 3710)">
                                                <stop offset="0" style="stop-color:#AA80F9" />
                                                <stop offset="1" style="stop-color:#6165D7" />
                                            </linearGradient>
                                            <path
                                                style="fill:url(#SVGID_00000103267106374489521300000003039952879993726602_);"
                                                d="M2977.7,1158.3
                            c0,226.5-177.3,404.4-403.5,397.1c-235-7.6-432.3-210.7-432.3-453.4s197.3-419.2,432.3-395.1
                            C2800.4,730,2977.7,931.8,2977.7,1158.3L2977.7,1158.3z" />
                                            <path class="st41"
                                                d="M2958.1,1156.9c0,198.9-143.7,358.2-334.9,376.1c-16.1,1.5-32.5,2-49.2,1.5
                            c-223.3-7.5-410.6-200.6-410.6-431.1c0-200.4,141.6-353.5,325.4-375.1c27.5-3.2,56.1-3.6,85.2-0.6
                            C2789.2,749.4,2958.1,941.3,2958.1,1156.9L2958.1,1156.9z" />

                                            <linearGradient
                                                id="SVGID_00000059990639787557969300000003198919051544850827_"
                                                gradientUnits="userSpaceOnUse" x1="1461.8707" y1="2684.5503"
                                                x2="1816.0907" y2="1932.6204"
                                                gradientTransform="matrix(1 0 0 -1 918.71 3710)">
                                                <stop offset="0" style="stop-color:#AA80F9" />
                                                <stop offset="1" style="stop-color:#6165D7" />
                                            </linearGradient>
                                            <path
                                                style="fill:url(#SVGID_00000059990639787557969300000003198919051544850827_);"
                                                d="M2623.2,1533
                            c-16.1,1.5-32.5,2-49.2,1.5c-223.3-7.5-410.6-200.6-410.6-431.1c0-200.4,141.6-353.5,325.4-375.1
                            c62.1,48.5,117.6,110.5,127.2,184c15.6,119.8-104,174.9-117.2,305.1C2487.9,1324.7,2539.4,1444.3,2623.2,1533L2623.2,1533z" />
                                        </g>
                                        <g>
                                            <path id="gearLtr" class="st0"
                                                d="M2673.4,1236.4l-22-4.3c0.1-10.1-0.7-20.3-2.3-30.3l21.2-7.4c5.7-2,8.7-8.3,6.7-14.1l-12.5-36.4
                            c-2-5.8-8.3-8.9-14-6.9l-21.3,7.4c-4.9-8.8-10.6-17.3-17.1-25.3l14.8-17.3c4-4.7,3.4-11.7-1.2-15.8l-29-25.6
                            c-4.6-4.1-11.6-3.6-15.6,1l-14.8,17.4c-8.8-5.4-17.9-10-27.3-13.7l4.1-22.6c1.1-6.1-2.9-12.1-8.9-13.3l-37.9-7.7
                            c-6.1-1.2-11.9,2.7-13,8.9l-4.1,22.7c-10.2-0.2-20.4,0.4-30.5,1.9l-7.7-21.9c-2.1-5.9-8.5-9.1-14.3-7.1l-36.5,12.5
                            c-5.9,2-8.9,8.4-6.8,14.4l7.7,21.7c-8.9,4.9-17.3,10.7-25.4,17.2l-17.4-15.1c-4.8-4.1-11.9-3.7-15.9,1l-25.1,29.4
                            c-4,4.7-3.4,11.9,1.4,16l17.3,14.9c-5.3,9-9.8,18.3-13.3,27.9l-22.1-4.3c-6.1-1.2-12,2.8-13.1,8.9l-6.8,38.2
                            c-1.1,6.1,3,12,9.1,13.2l22,4.2c0,10.4,0.9,20.8,2.6,31l-20.9,7.3c-5.8,2-8.9,8.4-6.7,14.3l13.3,36.5c2.1,5.8,8.6,8.9,14.4,6.9
                            l20.7-7.2c5.1,8.9,11.1,17.5,17.8,25.6L2329,1357c-4,4.7-3.4,11.7,1.4,15.7l29.5,25c4.7,4,11.7,3.4,15.7-1.2l14.1-16.6
                            c9,5.3,18.3,9.8,27.9,13.4l-3.9,21.4c-1.1,6,2.9,11.8,8.9,12.9l37.6,7c6,1.1,11.8-2.8,12.9-8.8l3.9-21.5
                            c10.2,0.1,20.4-0.7,30.4-2.4l7.3,20.6c2,5.7,8.3,8.7,14.1,6.7l35.8-12.7c5.7-2,8.7-8.3,6.7-14l-7.3-20.7
                            c8.7-4.9,17-10.7,24.9-17.3l16.7,14.4c4.6,4,11.5,3.4,15.4-1.2l24.6-28.8c3.9-4.6,3.4-11.6-1.2-15.5l-16.8-14.6
                            c5.2-8.8,9.5-17.9,13-27.3l21.7,4.2c5.9,1.2,11.6-2.8,12.8-8.8l7-37.5C2683.2,1243.4,2679.3,1237.6,2673.4,1236.4
                            L2673.4,1236.4z M2562.8,1303.1c-39.9,46.8-110.4,52.1-157.6,11.6c-47.6-40.7-53.7-112.2-13.4-159.5s111.4-52,158.6-10.8
                            C2597.3,1185.4,2602.7,1256.3,2562.8,1303.1L2562.8,1303.1z" />
                                            <path id="gearRtl" class="st0"
                                                d="M2813.7,942.1l-12.2-2.4c-0.1-5.5-0.6-11-1.7-16.4l11.6-3.9c3.1-1.1,4.7-4.5,3.5-7.6l-7.4-19.7
                            c-1.2-3.2-4.7-4.9-7.9-3.8l-11.7,3.9c-2.8-4.8-6.1-9.4-9.8-13.7l7.9-9.3c2.1-2.5,1.7-6.3-0.9-8.5l-16.4-13.9
                            c-2.6-2.2-6.5-2-8.6,0.5l-7.9,9.3c-4.9-2.9-10-5.4-15.3-7.5l2-12.2c0.5-3.3-1.8-6.5-5.1-7.2l-21-4.3c-3.4-0.7-6.5,1.4-7.1,4.7
                            l-2,12.2c-5.6-0.2-11.2,0.2-16.8,0.9l-4.5-11.8c-1.2-3.2-4.8-4.9-8-3.9l-19.9,6.6c-3.2,1.1-4.8,4.5-3.5,7.7l4.5,11.7
                            c-4.8,2.6-9.4,5.7-13.7,9.2l-9.8-8.2c-2.7-2.2-6.6-2-8.7,0.5l-13.4,15.8c-2.1,2.5-1.7,6.4,0.9,8.6l9.7,8.1
                            c-2.8,4.8-5.1,9.8-7,15l-12.2-2.4c-3.4-0.7-6.6,1.5-7.1,4.8l-3.3,20.6c-0.5,3.3,1.8,6.5,5.2,7.2l12.1,2.4
                            c0.1,5.6,0.7,11.2,1.8,16.7l-11.4,3.8c-3.2,1.1-4.8,4.5-3.5,7.7l7.8,19.8c1.2,3.2,4.8,4.8,8,3.8l11.3-3.8
                            c2.9,4.9,6.3,9.5,10.1,13.9l-7.6,8.9c-2.1,2.5-1.7,6.3,0.9,8.5l16.6,13.7c2.6,2.2,6.5,1.9,8.6-0.6l7.6-8.9
                            c5,2.9,10.2,5.4,15.6,7.4l-1.9,11.6c-0.5,3.2,1.8,6.4,5.1,7l20.9,4c3.3,0.6,6.5-1.5,7-4.7l1.9-11.6c5.6,0.1,11.3-0.3,16.8-1.2
                            l4.3,11.2c1.2,3.1,4.7,4.8,7.9,3.7l19.6-6.7c3.1-1.1,4.7-4.5,3.5-7.6l-4.3-11.3c4.8-2.6,9.3-5.7,13.6-9.2l9.4,7.9
                            c2.6,2.2,6.4,1.9,8.5-0.6l13.2-15.5c2.1-2.5,1.7-6.3-0.9-8.4l-9.5-8c2.7-4.8,5-9.7,6.8-14.8l12.1,2.4c3.3,0.7,6.4-1.5,7-4.7
                            l3.4-20.3C2819.2,945.9,2817,942.8,2813.7,942.1L2813.7,942.1z M2753.4,977.8c-21.4,25.2-60.3,27.7-86.9,5.6
                            c-26.7-22.2-31-60.8-9.4-86.2c21.6-25.4,60.8-27.7,87.3-5.3C2770.9,914.2,2774.8,952.6,2753.4,977.8z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
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
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" class="shape-fill"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" class="shape-fill"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <div class="container flex justify-between py-16">
            <!-- About Column -->
            <div class="flex-auto w-64 mr-2">
                <h1 class="text-center font-bold text-[37px]">HELLO!</h1>
                <h1 class="text-center font-bold text-[24px]">LET'S TALK ABOUT TELLMI</h1>
                <figure>
                    <div class="grid py-14">
                        <h1 class="text-center font-bold text-9xl" data-text="i">tellm</h1>
                        <blockquote class="text-[26px]/[24px] italic tracking-wider justify-self-center">keep an eye on
                            your
                            asset
                        </blockquote>
                    </div>
                    <figcaption class="text-justify">Tellmi is an application made to help any worker at Setiajaya
                        Toyota for maintenance their hardware or software or networks integrated for branch of Setiajaya
                        Toyota. User must be taken ticket to report problems that associated with IT Infrastructure then
                        it will send and claimed the ticket to receive client complaints by Division Information
                        Technology (IT), Setiajaya Toyota.</figcaption>
                </figure>
            </div>
            <!-- Form Column -->
            <div class="flex-auto w-32 ml-2">
                <aside>
                    <article>
                        <h1 class="text-center text-[22px]"> Please <strong class="text-[#991b1b]"> sign up </strong>
                            before using this app
                        </h1>
                        <h1 class="text-center text-[17px] my-2">Thank you!<span
                                style='font-size:20px;'>&#9786;</span>
                        </h1>
                    </article>
                    <div class="relative flex pt-2 pb-2 items-center">
                        <div class="flex-grow border-t-2 border-gray-400"></div>
                        <div class="flex-grow border-t-2 border-gray-400"></div>
                    </div>
                    <div class="flex justify-center mt-8">
                        <form class="w-full max-w-lg">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-first-name">
                                        First Name
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        id="grid-first-name" type="text" placeholder="Abimanyu">
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        Last Name
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="text" placeholder="Okysaputra">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password">
                                        Password
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-password" type="password" placeholder="******************">
                                    <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-city">
                                        Position
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-city" type="text" placeholder="Web Programmer">
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-state">
                                        Branch
                                    </label>
                                    <div class="relative">
                                        <select
                                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="grid-state">
                                            <option>Bogor</option>
                                            <option>Depok</option>
                                            <option>Cibubur</option>
                                            <option>Cimanggis</option>
                                            <option>Parung</option>
                                            <option>Pamulang</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-zip">
                                        Zip
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-zip" type="text" placeholder="16424">
                                </div>
                            </div>
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
                <path d="M0,0V6c0,21.6,291,111.46,741,110.26,445.39,3.6,459-88.3,459-110.26V0Z" class="shape-fill">
                </path>
            </svg>
        </div>
        <article class="container block py-16 bg-white" id="services">
            <div class="title-section">
                <h1 class="text-center text-[37px] font-bold">OUR SERVICES</h1>
                <p class="text-center text-basic">Report to Maintenance Your Office Tools Self</p>
            </div>
            <div class="content flex justify-between items-start py-5">
                <div class="card block border-none">
                    <caption class="max-w-sm overflow-hidden w-64">
                        <h1 class="text-center font-bold text-lg">Hardware Tools</h1>
                    </caption>
                    <figure class="bg-white my-3 rounded-xl shadow-lg max-w-sm overflow-hidden w-64">
                        <img class="mx-auto w-full" src="images/hardware-repair.jpg" alt="we-repair-hardware">
                    </figure>
                    <p class="text-justify text-basic">We repair hardware tools your Office</p>
                </div>
                <div class="card block border-none">
                    <caption class="max-w-sm overflow-hidden w-64">
                        <h1 class="text-center font-bold text-lg">Software Tools</h1>
                    </caption>
                    <figure class="bg-white my-3 rounded-xl shadow-lg max-w-sm overflow-hidden w-64">
                        <img class="mx-auto w-full" src="images/software-repair.jpg" alt="we-repair-hardware">
                    </figure>
                    <p class="text-justify text-basic">We repair software tools your Office</p>
                </div>
                <div class="card block border-none">
                    <caption class="max-w-sm overflow-hidden w-64">
                        <h1 class="text-center font-bold text-lg">Network Tools</h1>
                    </caption>
                    <figure class="bg-white my-3 rounded-xl shadow-lg max-w-sm overflow-hidden w-64">
                        <img class="mx-auto w-full" src="images/network-repair.jpg" alt="we-repair-hardware">
                    </figure>
                    <p class="text-justify text-basic">We repair network tools your Office</p>
                </div>
            </div>
        </article>
    </section>

    <footer class="block bg-slate-800 text-[#ddd]">
        <div class="custom-shape-divider-top-1694332668">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M649.97 0L550.03 0 599.91 54.12 649.97 0z" class="shape-fill"></path>
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