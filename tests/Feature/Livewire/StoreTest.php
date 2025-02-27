<?php

use App\Livewire\Store;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Store::class)
        ->assertStatus(200)
        ->assertSeeInOrder([
            'How can we',
            'Discover, try, and create AI chat agents...',
            'LLMs',
            'Llama 3 8B', 'Free',
            'Mistral Large', 'Pro',
            'GPT-4', 'Pro',
            'Command-R', 'Free',
            'Satoshi 7B', 'Free',
        ]);
});
