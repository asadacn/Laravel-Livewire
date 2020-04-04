<div style="text-align: center" class="bg-light my-3 mx-auto p-2 w-50">
    <h5 >Counter</h4>
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <button wire:click="decrement">-</button>
</div>