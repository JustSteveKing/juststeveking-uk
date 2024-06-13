<?php

use App\Models\Video;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    #[Computed]
    public function videos(): Collection
    {
        return Video::query()->latest('published_at')->take(3)->get();
    }
}; ?>

<div class="py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
            From YouTube
        </h2>
        <p class="mt-2 text-lg leading-8">
            Learn how to grow your business with our expert advice.
        </p>
        <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
            @foreach($this->videos as $video)
                <article class="relative isolate flex flex-col gap-8 lg:flex-row">
                    <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                        <img
                            src="{{ $video->thumbnail }}"
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
                                    {{ $video->title }}
                                </a>
                            </h3>
                            <p class="mt-5 text-sm leading-6">
                                {!! $video->description !!}
                            </p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</div>
