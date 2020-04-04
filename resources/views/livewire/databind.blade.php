<div class="text-center bg-light mx-auto w-50 p-4">
    <label for="">Data Binding</label>
<form >
<input wire:model="text" type="text" placeholder="{{$text}}">
<input type="checkbox" wire:model="check">
</form>
<br>
<p>Input Text: {{$text}}</p>
<p>Checkbox: {{$check ? "Checked":"Not Checked"}}</p>
    <button wire:click="erase">reset</button>
</div>
