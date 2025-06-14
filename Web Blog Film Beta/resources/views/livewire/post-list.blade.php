<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div>
            @if ($this->activeCategory || $search)
                <button class="gray-500 font-bold mr-3" wire:click="clearFilters()">X</button>
            @endif
            @if ($this->activeCategory)
                <x-badge wire:navigate href="{{ route('posts.index', ['category' => $this->activeCategory->slug]) }}"
                    :textColor="$this->activeCategory->text_color" :bgColor="$this->activeCategory->bg_color">
                    {{ $this->activeCategory->title }}
                </x-badge>
            @endif
            @if ($search)
                <span class="ml-2">
                    {{ __('blog.containing') }} : <span class="font-semibold">{{ $search }}</</span>
                </span>
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light ">
            <x-checkbox wire:model.live="popular" />
            <x-label> {{ __('blog.popular') }}  </x-label>
            <button class="{{ $sort == 'desc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4"
                wire:click="setSort('desc')">{{ __('blog.latest') }} </button>
            <button class="{{ $sort == 'asc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4"
                wire:click="setSort('asc')">{{ __('blog.oldest') }} </button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-posts.post-item wire:key="{{ $post->id }}" :post="$post" />
        @endforeach
    </div>

    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>

</div>
