<nav class="hidden md:flex items-center justify-between text-gray-400 text-xs">
    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
        <li><a wire:click.prevent="setStatus('All')"   href="#" class="border-b-4 pb-3 hover:border-blue @if($status === 'All')border-blue text-gray-900 @endif">All Ideas (87)</a></li>
        <li><a wire:click.prevent="setStatus('Considering')"  href="#" class="@if($status === 'Considering')border-blue text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering
                (6)</a></li>
        <li><a wire:click.prevent="setStatus('In Progress')" href="#" class="@if($status === 'In Progress')border-blue text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In
                Progress (1)</a></li>
    </ul>

    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
        <li><a wire:click.prevent="setStatus('Implemented')" href="#" class="@if($status === 'Implemented')border-blue text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented
                (10)</a></li>
        <li><a wire:click.prevent="setStatus('Closed')" href="#" class="@if($status === 'Closed')border-blue text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed
                (55)</a></li>
    </ul>
</nav>

