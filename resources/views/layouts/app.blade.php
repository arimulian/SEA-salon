<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/logo.png') }}" sizes="60X60"/>
        @vite('resources/css/app.css')
        {{-- font inter --}}
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <title>{{ $title ?? 'Page Title' }}</title>
        <style>
            #menu-toggle:checked+#menu {
                display: block;
            }

            #dropdown-toggle:checked+#dropdown {
                display: block;
            }

            a,
            span {
                position: relative;
                text-decoration: none;
                transition: all 0.3s ease;
            }

            a.arrow,
            span.arrow {
                display: flex;
                align-items: center;
                font-weight: 600;
                line-height: 1.5;
            }

            a.arrow .arrow_icon,
            span.arrow .arrow_icon {
                position: relative;
                margin-left: 0.5em;
            }

            a.arrow .arrow_icon svg,
            span.arrow .arrow_icon svg {
                transition: transform 0.3s 0.02s ease;
                margin-right: 1em;
            }

            a.arrow .arrow_icon::before,
            span.arrow .arrow_icon::before {
                content: "";
                display: block;
                position: absolute;
                top: 50%;
                left: 0;
                width: 0;
                height: 2px;
                background: #38b2ac;
                transform: translateY(-50%);
                transition: width 0.3s ease;
            }

            a.arrow:hover .arrow_icon::before,
            span.arrow:hover .arrow_icon::before {
                width: 1em;
            }

            a.arrow:hover .arrow_icon svg,
            span.arrow:hover .arrow_icon svg {
                transform: translateX(0.75em);
            }

            /* .cover {
              border-bottom-right-radius: 128px;
            } */

            .bg-blue-teal-gradient {
                background: rgb(49, 130, 206);
                background: linear-gradient(90deg, rgba(49, 130, 206, 1) 0%, rgba(56, 178, 172, 1) 100%);
            }

            /* @media (min-width: 1024px) {
              .cover {
                border-bottom-right-radius: 256px;
              }
            } */
        </style>
    </head>
    <body>
    <x-home.header/>
        {{ $slot }}
    <x-home.footer/>
    </body>
</html>
