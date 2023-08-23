<?php

use Livewire\Volt\Component;

new class extends Component
{
    public string $address = 'CA, Street 1';

    public string $password = 'Hello!';

    public string $money1 = '123456.78';

    public string $money2 = '123456.78';
}

?>
<div>
<x-markdown>
# Input

### Basic
</x-markdown>

<x-code class="grid gap-5">
@verbatim
<x-input label="Name" placeholder="Your name" icon="o-user" hint="Your full name" />

<x-input label="Right icon" wire:model="address" icon-right="o-map-pin" />  

<x-input label="Password" wire:model="password" icon="o-eye" type="password" />  
@endverbatim
</x-code>

<x-markdown>
### States
</x-markdown>

<x-code class="grid gap-5">
@verbatim
<x-input label="Disabled"  value="It is disabled" disabled />

<x-input label="Read only"  value="Read only" readonly />
@endverbatim
</x-code>

<x-markdown>
### Inline
</x-markdown>

<x-code class="grid gap-5">
@verbatim
<x-input label="Inline label" inline />

<x-input label="Inline label + placeholder" placeholder="Hi!" icon="o-envelope" hint="Awsome" inline />    
@endverbatim
</x-code>


<x-markdown>
### Currency

It uses Alpine `x-mask` plugin with `$money`. When wraped in a form  it submits an unmasked number value.

<br>

</x-markdown>

<x-code class="grid gap-8">
@verbatim
<x-input label="Default money" wire:model="money1" prefix="USD" money inline/>

<x-input 
    label="Custom money" 
    wire:model="money2" 
    sufix="R$" 
    money     
    inline
    thousands-separator="."  
    fraction-separator=","  />    
@endverbatim
</x-code>

<x-markdown>
### Slots
</x-markdown>

<x-code class="grid gap-8">
@verbatim
@php
    $users = App\Models\User::take(5)->get();        
@endphp

<x-input label="Prepend a select">
    <x-slot:prepend>
        <!-- Add `rounded-r-none` class -->
        <x-select icon="o-user" :options="$users" class="rounded-r-none bg-base-200"  /> 
    </x-slot:prepend>
</x-input>

<x-input label="Append a button">
    <x-slot:append>
        <!-- Add `rounded-l-none` class -->
        <x-button label="I am a button" icon="o-check" class="btn-primary rounded-l-none" /> 
    </x-slot:append>
</x-input>

@endverbatim
</x-code>


</div>