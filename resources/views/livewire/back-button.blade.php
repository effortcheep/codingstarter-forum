<a wire:click.prevent="$emit('toHome')" href="{{ url('/') }}" class="{{ ($show) ? 'block' : 'hidden' }} sm:hidden flex fill-current text-purple-600 opacity-60 text-xl mb-2 mt-6">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8">
	    <path fill="currentColor" d="M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42 -.39-.39-1.02-.39-1.41 0l-6.59 6.59c-.39.39-.39 1.02 0 1.41l6.59 6.59c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1Z"></path>
	</svg>
	<span class="relative top-0.5">Back</span>
</a>