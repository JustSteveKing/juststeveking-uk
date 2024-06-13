<?php

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    #[Computed]
    public function testimonials(): Collection
    {
        return Testimonial::query()->get();
    }
}; ?>

<div class="py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">Testimonials</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl">We have worked with thousands of amazing people</p>
        <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
            <div class="-mt-8 sm:-mx-4 sm:columns-3 sm:text-[0] lg:columns-3">

                @foreach ($this->testimonials as $testimonial)
                    <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                        <figure class="rounded-2xl bg-slate-100 dark:bg-slate-800 border-2 border-slate-300 dark:border-slate-700 p-8 text-sm leading-6">
                            <blockquote class="">
                                <x-markdown>"{!! $testimonial->content !!}"</x-markdown>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <img class="h-10 w-10 rounded-full bg-slate-50 dark:bg-slate-900" src="{{ $testimonial->avatar }}" alt="{{ $testimonial->name }}" />
                                <div>
                                    <div class="font-semibold">{{ $testimonial->name }}</div>
                                    <div class="">{{ $testimonial->role }} @ {{ $testimonial->company }}</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach

                <!-- More testimonials... -->
            </div>
        </div>
    </div>
</div>

