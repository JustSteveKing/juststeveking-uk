<header x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-slate-50 dark:bg-slate-900">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="">
        </a>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5" @click="open = true">
                <span class="sr-only">Open main menu</span>
                <x-icons.menu class="h-6 w-6" />
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm font-semibold leading-6">Product</a>
            <a href="#" class="text-sm font-semibold leading-6">Features</a>
            <a href="#" class="text-sm font-semibold leading-6">Marketplace</a>
            <a href="#" class="text-sm font-semibold leading-6">Company</a>

            <a href="#" class="text-sm font-semibold leading-6">Log in <span aria-hidden="true">→</span></a>
        </div>
    </nav>
    <div class="lg:hidden" x-ref="dialog" x-show="open" aria-modal="true" x-cloak>
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-slate-50 dark:bg-slate-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-slate-900/10 dark:sm:ring-slate-50/10" @click.away="open = false">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5" @click="open = false">
                    <span class="sr-only">Close menu</span>
                    <x-icons.close class="h-6 w-6" />
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-slate-200/10 dark:divide-slate-700/10">
                    <div class="space-y-2 py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-slate-200 dark:hover:bg-slate-700">Product</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-slate-200 dark:hover:bg-slate-700">Features</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-slate-200 dark:hover:bg-slate-700">Marketplace</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-slate-200 dark:hover:bg-slate-700">Company</a>

                    </div>
                    <div class="py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 hover:bg-slate-200 dark:hover:bg-slate-700">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
