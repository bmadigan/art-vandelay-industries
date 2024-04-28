<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') ?? 'Art Vandelay Industries'}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
    <div class="bg-white">

        <div class="relative">
            <div class="mx-auto max-w-7xl">
                <div class="relative z-10 pt-4 lg:w-full lg:max-w-2xl">

                    <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                        <polygon points="0,0 90,0 50,100 0,100" />
                    </svg>

                    <div class="relative px-6 py-16 sm:py-40 lg:px-8 lg:py-14 lg:pr-0">
                        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">

                            <div class="hidden sm:mb-10 sm:flex">
                                <div class="relative flex items-center rounded-full px-3 py-1 text-sm leading-6 text-slate-500 ring-1 ring-slate-900/10 hover:ring-slate-900/20 hover:bg-indigo-50">
                                    <x-icon.github class="w-6 h-6 mr-1" />
                                    View Code on Github.
                                    <a href="#" class="whitespace-nowrap ml-2 font-semibold text-neutral-600"><span class="absolute inset-0" aria-hidden="true"></span>View Code <span aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div>

                            <div class="mt-18 mb-12">
                            <x-application-logo class="h-18 w-full text-slate-900" />
                            </div>

                            <h1 class="text-4xl font-bold tracking-tight text-slate-900 sm:text-6xl">
                                Importer/Exporter of Latext & Latext-Related Goods
                            </h1>
                            <p class="mt-6 text-lg leading-8 text-slate-600">
                                Delivering your latex products with precision and flexibility, from raw materials to finished goods - smoothly and efficiently. Our specialized supply chain solutions stretch to meet your unique needs in the latex industry.
                            </p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="{{ route('login') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Operator Login
                                </a>
                                <div class="text-sm italic leading-6 text-slate-600">(Not a real company)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-slate-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full"
                     src="https://cdn.britannica.com/34/242834-050-2F145226/Jason-Alexander-George-Seinfeld-TV-Show.jpg" alt="">
            </div>
        </div>


        <!-- Feature Section -->
        <div class="overflow-hidden bg-white py-14 sm:py-18">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8 lg:pt-4">
                        <div class="lg:max-w-lg px-6 py-8 bg-stone-100 rounded-md">
                            <h2 class="text-base font-semibold leading-2 text-indigo-600">
                                What is this thing?
                            </h2>
                            <p class="mt-2 text-xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                                The Art of Crafting a Seamless Supply Chain Solution
                            </p>

                            <div class="mt-6 text-lg text-sm space-y-4 leading-6 text-slate-600">
                                <p>Alright, listen up folks. I'm about to lay down some serious truth bombs about this supply chain Laravel app I've been cooking up.</p>
                                <p>First off, let's address the elephant in the room - the name "Art Vandelay Industries." Yeah, it's a nod to that classic Seinfeld episode where George pretends to be an import/export guy. But hey, if you can't have a little fun with your work, what's the point?</p>
                            </div>

                            <dl class="mt-10 max-w-xl space-y-8 text-sm leading-2 text-slate-600 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold mr-1 text-slate-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                                        </svg>
                                        TALL Stack
                                    </dt>
                                    <dd class="inline">
                                        Now, let's talk tech. I've gone all-in on the TALL Stack - Tailwind CSS, Alpine.js, Laravel, and Livewire. This bad boy is a lean, mean, reactive machine. Livewire is the secret sauce that lets me whip up dynamic interfaces without all the JavaScript bloat. It's like having a direct line to the server!
                                    </dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold mr-1 text-slate-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                        </svg>
                                        Testing 1...2...3
                                    </dt>
                                    <dd class="inline">
                                        But I'm not just slapping code together willy-nilly (sort-of). Oh no, my friends. I'm a firm believer in testing, testing, and more testing. That's why I'm <em>planning on having</em> a full suite of PHPUnit tests locked and loaded, covering most of every nook and cranny of this app's features. We all want to sleep at night right?
                                    </dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold mr-1 text-slate-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                            <path fill-rule="evenodd" d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z" clip-rule="evenodd" />
                                        </svg>
                                        Open Source
                                    </dt>
                                    <dd class="inline">
                                        But here's the real kicker: I'm not just building this thing for kicks. Nope, this bad boy is going open source. That's right, I'm putting my code out there for the world to see. Why? Because I'm not just a developer, I'm a showman. I want potential employers to see my coding style, my attention to detail, and hopefully both help other developers learn and help me learn a few things along the way.
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <img src="/img/screenshot-order-details.png" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-slate-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white">
            <div class="mx-auto max-w-7xl overflow-hidden px-6 py-8 sm:py-14 lg:px-8">
                <div class="mt-2 flex justify-center space-x-10">
                    <a href="#" class="text-slate-400 hover:text-slate-500">
                        <span class="sr-only">X</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-slate-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-slate-500">
                        <span class="sr-only">YouTube</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"  viewBox="0 0 512 512">
                            <path fill="currentColor" d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32m-273.3 373.43h-64.18V205.88h64.18ZM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43c0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43m264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44c-17.74 0-28.24 12-32.91 23.69c-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44c42.13 0 74 27.77 74 87.64Z"/>
                        </svg>
                    </a>

                </div>
                <div class="mt-10 text-center space-y-1.5 text-xs leading-5 text-slate-500">
                    <div>&copy; {{ date('Y') }} (No One Really Cares)</div>
                    <div>Built with ☕ and 🍺 in Ontario, Canada</div>
                </div>
            </div>
        </footer>
    </div>
    </body>
</html>
