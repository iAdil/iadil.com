<a href="{{ route('posts.show', $post->slug) }}" @click="window.fathom?.trackGoal('OKJIR46O', 0)" class="block flex-shrink-0 overflow-hidden relative rounded-md snap-start sm:snap-center md:snap-normal scroll-ml-4 md:scroll-ml-0 w-[90%] sm:w-[70%] md:w-auto">
    <figure {{ $attributes->except('post') }}>
        <img
            @if (empty($first)) loading="lazy" @endif
            src="{{ str_replace('w_auto', 'w_600', $post->image) }}"
            alt="{{ $post->title }}"
            class="aspect-video object-cover w-full"
        />

        <figcaption class="absolute bottom-0 left-0 right-0 bg-gradient-to-b from-transparent to-black/75 flex items-center justify-between gap-4 font-bold px-4 py-3 text-white">
            <span class="truncate">{{ $post->title }}</span>
            <x-heroicon-o-arrow-right class="flex-shrink-0 opacity-75 w-3 h-3" />
        </figcaption>
    </figure>
</a>
