<div>
    <h2>Calcolatrice</h2>
    <div>
        <input type="number" wire:model="number1" placeholder="Number 1">
        <select name="operetor" wire:model= "action">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>%</option>
        </select>
        <input type="number" wire:model="number2" placeholder="Number 2">
        <button wire:click='calcola'>
            =
        </button>
        <h1>{{$result}}</h1>

    </div>

</div>