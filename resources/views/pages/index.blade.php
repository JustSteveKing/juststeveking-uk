<x-layouts.page title="{{ config('site.title') }}" description="{{ config('site.description') }}">
    <section id="hero" aria-labelledby="home page hero">
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                 aria-hidden="true">
                <div
                    class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%);"></div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm leading-6 ring-1 ring-slate-900/10 dark:ring-slate-50/10 hover:ring-slate-900/20 dark:hover:ring-slate-50/20">
                        Announcing our next round of funding.
                        <a href="#" class="font-semibold text-indigo-600">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Read more <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight sm:text-6xl">
                        {{ config('site.title') }}
                    </h1>
                    <p class="mt-6 text-lg leading-8">
                        {{ config('site.description') }}
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <div class="flex gap-6"><a class="group -m-1 p-1.5" title="Follow Steve on Twitter"
                                                   aria-label="Follow Steve on Twitter"
                                                   href="https://twitter.com/JustSteveKing" target="_blank"
                                                   rel="noopener nofollow">
                                <svg viewBox="0 0 24 24" aria-hidden="true"
                                     class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                    <title>X</title>
                                    <path
                                        d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"></path>
                                </svg>
                            </a> <a class="group -m-1 p-1.5" title="Subscribe to Steve on YouTube"
                                    aria-label="Subscribe to Steve on YouTube"
                                    href="https://www.youtube.com/c/JustSteveKing" target="_blank"
                                    rel="noopener nofollow">
                                <svg viewBox="0 0 24 24" aria-hidden="true"
                                     class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                    <title>YouTube</title>
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path>
                                </svg>
                            </a> <a class="group -m-1 p-1.5" aria-label="Follow Steve on GitHub"
                                    href="https://github.com/JustSteveKing">
                                <svg viewBox="0 0 24 24" aria-hidden="true"
                                     class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                    <title>GitHub</title>
                                    <path
                                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                                </svg>
                            </a> <a class="group -m-1 p-1.5" aria-label="Follow Steve on LinkedIn"
                                    href="https://www.linkedin.com/in/steve-mcdougall/">
                                <svg viewBox="0 0 24 24" aria-hidden="true"
                                     class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                    <title>LinkedIn</title>
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                </svg>
                            </a></div>
                    </div>
                </div>
            </div>
            <div
                class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div
                    class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%);"></div>
            </div>
        </div>
    </section>

    <section id="logo_cloud" aria-labelledby="home page logo cloud">
        <div class="py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:max-w-none">
                    <h2 class="text-lg font-semibold leading-8">
                        Trusted by the world’s most innovative teams
                    </h2>
                    <div
                        class="mx-auto mt-10 grid grid-cols-4 items-start gap-x-8 gap-y-10 sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:grid-cols-5">
                        <img class="col-span-2 max-h-12 w-full object-contain object-left lg:col-span-1"
                             src="https://tailwindui.com/img/logos/transistor-logo-gray-900.svg" alt="Transistor"
                             width="158" height="48">
                        <img class="col-span-2 max-h-12 w-full object-contain object-left lg:col-span-1"
                             src="https://tailwindui.com/img/logos/reform-logo-gray-900.svg" alt="Reform" width="158"
                             height="48">
                        <img class="col-span-2 max-h-12 w-full object-contain object-left lg:col-span-1"
                             src="https://tailwindui.com/img/logos/tuple-logo-gray-900.svg" alt="Tuple" width="158"
                             height="48">
                        <img class="col-span-2 max-h-12 w-full object-contain object-left lg:col-span-1"
                             src="https://tailwindui.com/img/logos/savvycal-logo-gray-900.svg" alt="SavvyCal"
                             width="158" height="48">
                        <img class="col-span-2 max-h-12 w-full object-contain object-left lg:col-span-1"
                             src="https://tailwindui.com/img/logos/statamic-logo-gray-900.svg" alt="Statamic"
                             width="158" height="48">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-24 sm:py-32">
            <div class="grid grid-cols-1 gap-y-6 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12">
                <div class="lg:pl-20">
                    <div class="max-w-xs px-2.5 lg:max-w-none">
                        <img src="https://juststeveking.uk/_astro/laracon-eu.CB3OZLe8_Z19OxeN.webp"
                                                                    alt="JustSteveKing"
                                                                    class="aspect-auto rotate-3 rounded-2xl bg-zinc-100 object-cover dark:bg-zinc-800"
                                                                    width="800" height="800" loading="lazy"
                                                                    decoding="async"></div>
                </div>
                <div class="lg:order-first lg:row-span-2"><h2 class="text-4xl font-heading font-bold tracking-tight">
                        Who is Steve?
                    </h2>
                    <div class="mt-6 space-y-6 md:space-y-12 text-base"><p class="undefined text-lg leading-7">
                            Hey there! I'm Steve McDougall, but in the tech community, I'm often known as JustSteveKing.
                            I'm a tech enthusiast from the scenic Welsh Valleys who loves diving into the complexities
                            of software engineering, especially PHP and Laravel.
                        </p>
                        <p class="undefined text-lg leading-7">
                            My day-to-day role as a Developer Advocate at Treblle has me exploring the intricacies of
                            REST-based APIs. It's a space where I get to blend my technical skills with my passion for
                            making complex things simple for other engineers and DevOps teams.
                        </p>
                        <p class="undefined text-lg leading-7">
                            But that's just one side of the coin. In the digital realm, I'm also deeply engaged in
                            sharing knowledge and experiences. Whether it's through my writings, my YouTube channel, or
                            speaking at various tech events, I'm all about demystifying technology and empowering fellow
                            developers.
                        </p>
                        <p class="undefined text-lg leading-7">
                            I believe in the power of community and continual learning. For me, it's not just about
                            writing code; it's about connecting, sharing, and growing together. So, join me on this
                            journey of exploration and discovery in the world of tech!
                        </p></div>
                </div>
                <ul role="list" class="lg:pl-20 space-y-4">
                    <li class="flex"><a target="_blank" rel="noopener nofollow" title="Visit the Treblle website"
                                        class="group flex text-sm font-medium transition hover:underline"
                                        href="https://www.treblle.com/?utm_campaign=juststeveking&amp;utm_medium=&amp;utm_source=juststeveking.uk&amp;utm_type=work&amp;utm_term=juststeveking+website">
                            <img src="/_astro/treblle.YIPQ_-aM_Z3nQef.svg" alt="Treblle"
                                 class="h-6 w-6 flex-none transition" width="24" height="24" loading="lazy"
                                 decoding="async"> <span class="ml-4">Developer Relations at Treblle</span> </a></li>
                    <li class="flex"><a target="_blank" rel="noopener nofollow" title="Visit my YouTube Channel"
                                        class="group flex text-sm font-medium transition hover:underline"
                                        href="https://www.youtube.com/c/juststeveking?utm_campaign=juststeveking&amp;utm_medium=&amp;utm_source=juststeveking.uk&amp;utm_type=work&amp;utm_term=juststeveking+website">
                            <img src="/_astro/youtube.ZHIfgOAL_1VzvrU.svg" alt="YouTube"
                                 class="h-6 w-6 flex-none transition" width="24" height="24" loading="lazy"
                                 decoding="async"> <span class="ml-4">Content Creator on YouTube</span> </a></li>
                    <li class="flex"><a target="_blank" rel="noopener nofollow" title="Visit Laravel News"
                                        class="group flex text-sm font-medium transition hover:underline"
                                        href="https://laravel-news.com/@juststeveking?utm_campaign=juststeveking&amp;utm_medium=&amp;utm_source=juststeveking.uk&amp;utm_type=work&amp;utm_term=juststeveking+website">
                            <img src="/_astro/laravelnews.T41xGT6f_yhfcJ.svg" alt="Laravel News"
                                 class="h-6 w-6 flex-none transition" width="24" height="24" loading="lazy"
                                 decoding="async"> <span class="ml-4">Writer at Laravel News</span> </a></li>
                    <li class="flex"><a target="_blank" rel="noopener nofollow" title="Visit Laravel News"
                                        class="group flex text-sm font-medium transition hover:underline"
                                        href="https://www.phparch.com/community/steve-mcdougall/?utm_campaign=juststeveking&amp;utm_medium=&amp;utm_source=juststeveking.uk&amp;utm_type=work&amp;utm_term=juststeveking+website">
                            <img src="/_astro/phparch.Czk-Iwqb_oVvjX.svg" alt="PHP Architect"
                                 class="h-6 w-6 flex-none transition" width="24" height="24" loading="lazy"
                                 decoding="async"> <span class="ml-4">Columnist at PhpArchitect</span> </a></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="latest_articles" aria-labelledby="Latest Articles">
        <livewire:components.latest-articles />
    </section>

    <section id="cta" aria-labelledby="call to action">
        <div class="bg-indigo-100">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:justify-between lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Ready to dive in?<br>Start your
                    free trial today.</h2>
                <div class="mt-10 flex items-center gap-x-6 lg:mt-0 lg:flex-shrink-0">
                    <a href="#"
                       class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                        started</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </section>

    <section id="latest_videos" aria-labelledby="Latest Videos">
        <div class="py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
                    From YouTube
                </h2>
                <p class="mt-2 text-lg leading-8">
                    Learn how to grow your business with our expert advice.
                </p>
                <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
                    <article class="relative isolate flex flex-col gap-8 lg:flex-row">
                        <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                            <img
                                src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                                alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div>
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="">Mar 16, 2020</time>
                                <a href="#"
                                   class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                            </div>
                            <div class="group relative max-w-xl">
                                <h3 class="mt-3 text-lg font-semibold leading-6 group-hover:text-slate-200 dark:group-hover:text-slate-700">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Boost your conversion rate
                                    </a>
                                </h3>
                                <p class="mt-5 text-sm leading-6">Illo sint voluptas. Error voluptates culpa eligendi.
                                    Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                                    exercitationem placeat consectetur nulla deserunt vel iusto corrupti dicta laboris
                                    incididunt.</p>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </div>

    </section>

    <section id="testimonials" aria-labelledby="testimonials">
        <div class="relative isolate pb-32 pt-24 sm:pt-32">
            <div
                class="absolute inset-x-0 top-1/2 -z-10 -translate-y-1/2 transform-gpu overflow-hidden opacity-30 blur-3xl"
                aria-hidden="true">
                <div
                    class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div
                class="absolute inset-x-0 top-0 -z-10 flex transform-gpu overflow-hidden pt-32 opacity-25 blur-3xl sm:pt-40 xl:justify-end"
                aria-hidden="true">
                <div
                    class="ml-[-22rem] aspect-[1313/771] w-[82.0625rem] flex-none origin-top-right rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] xl:ml-0 xl:mr-[calc(50%-12rem)]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">Testimonials</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl">We have worked with thousands of amazing
                    people</p>
                <div
                    class="mx-auto mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm leading-6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
                    <figure
                        class="rounded-2xl bg-white shadow-lg ring-1 ring-gray-900/5 sm:col-span-2 xl:col-start-2 xl:row-end-1">
                        <blockquote
                            class="p-6 text-lg font-semibold leading-7 tracking-tight text-gray-900 sm:p-12 sm:text-xl sm:leading-8">
                            <p>“Integer id nunc sit semper purus. Bibendum at lacus ut arcu blandit montes vitae auctor
                                libero. Hac condimentum dignissim nibh vulputate ut nunc. Amet nibh orci mi venenatis
                                blandit vel et proin. Non hendrerit in vel ac diam.”</p>
                        </blockquote>
                        <figcaption
                            class="flex flex-wrap items-center gap-x-4 gap-y-4 border-t border-gray-900/10 px-6 py-4 sm:flex-nowrap">
                            <img class="h-10 w-10 flex-none rounded-full bg-gray-50"
                                 src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=1024&h=1024&q=80"
                                 alt="">
                            <div class="flex-auto">
                                <div class="font-semibold">Brenna Goyette</div>
                                <div class="text-gray-600">@brennagoyette</div>
                            </div>
                            <img class="h-10 w-auto flex-none"
                                 src="https://tailwindui.com/img/logos/savvycal-logo-gray-900.svg" alt="">
                        </figcaption>
                    </figure>
                    <div class="space-y-8 xl:contents xl:space-y-0">
                        <div class="space-y-8 xl:row-span-2">
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut
                                        enim doloremque et ipsam.”</p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="h-10 w-10 rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="">
                                    <div>
                                        <div class="font-semibold">Leslie Alexander</div>
                                        <div class="text-gray-600">@lesliealexander</div>
                                    </div>
                                </figcaption>
                            </figure>

                            <!-- More testimonials... -->
                        </div>
                        <div class="space-y-8 xl:row-start-1">
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>“Aut reprehenderit voluptatem eum asperiores beatae id. Iure molestiae ipsam ut
                                        officia rem nulla blanditiis.”</p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="h-10 w-10 rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="">
                                    <div>
                                        <div class="font-semibold">Lindsay Walton</div>
                                        <div class="text-gray-600">@lindsaywalton</div>
                                    </div>
                                </figcaption>
                            </figure>

                            <!-- More testimonials... -->
                        </div>
                    </div>
                    <div class="space-y-8 xl:contents xl:space-y-0">
                        <div class="space-y-8 xl:row-start-1">
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>“Voluptas quos itaque ipsam in voluptatem est. Iste eos blanditiis repudiandae.
                                        Earum deserunt enim molestiae ipsum perferendis recusandae saepe corrupti.”</p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="h-10 w-10 rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="">
                                    <div>
                                        <div class="font-semibold">Tom Cook</div>
                                        <div class="text-gray-600">@tomcook</div>
                                    </div>
                                </figcaption>
                            </figure>

                            <!-- More testimonials... -->
                        </div>
                        <div class="space-y-8 xl:row-span-2">
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>“Molestias ea earum quos nostrum doloremque sed. Quaerat quasi aut velit incidunt
                                        excepturi rerum voluptatem minus harum.”</p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="h-10 w-10 rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="">
                                    <div>
                                        <div class="font-semibold">Leonard Krasner</div>
                                        <div class="text-gray-600">@leonardkrasner</div>
                                    </div>
                                </figcaption>
                            </figure>

                            <!-- More testimonials... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-24 sm:py-32">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
                <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8 space-y-4"><h2
                        class="text-4xl font-heading font-bold tracking-tight">
                        Want to work with me?
                    </h2>
                    <p class="undefined text-lg leading-7">
                        I regularly work with others giving talks, mentoring, and consulting. Feel free to reach out on
                        any of my social channels if you want to work together.
                    </p>
                    <p class="undefined text-lg leading-7">
                        If you are interested, I have made my website analytics open on Fathom Analytics, you can see it
                        <a href="https://app.usefathom.com/share/sgjkewor/juststeveking.uk?utm_campaign=juststeveking-website&amp;utm_source=juststeveking&amp;utm_medium=textlink&amp;utm_term=social+share"
                           class="text-md font-semibold text-transparent bg-clip-text bg-gradient-to-tr from-indigo-500 to-pink-600"
                           title="View my website Analytics" aria-label="View my website Analytics" target="_blank"
                           rel="noopener nofollow"> <span class="sr-only">View my website Analytics</span> here. </a>
                    </p></div>
                <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
                    <div
                        class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
                        <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto"><img
                                src="/_astro/talking.BjWmZgFo_Z1EnGmq.webp"
                                class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl object-cover object-top"
                                alt="Speaking" width="1024" height="1024" loading="lazy" decoding="async"></div>
                        <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none"><img
                                src="/_astro/youtube.BdR-4Idk_2gtULo.webp" alt="YouTube"
                                class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl object-cover object-center"
                                width="1024" height="1024" loading="lazy" decoding="async"></div>
                        <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none"><img
                                src="/_astro/writing.I_JJrJ0d_Z1G7zhM.webp" alt="Writing"
                                class="aspect-[4/3] w-[24rem] max-w-none rounded-2xl object-cover object-top"
                                width="1024" height="1024" loading="lazy" decoding="async"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.page>
