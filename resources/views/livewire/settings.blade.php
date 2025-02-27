<div class="p-12 mx-auto flex flex-col justify-center w-full items-center" x-data="{ dropdown: false }">
    <div class="max-w-3xl min-w-[600px]">
        <h3 class="mb-16 font-bold text-3xl text-center select-none">Settings</h3>
        <x-pane title="Default model for new chats">
            <livewire:model-dropdown :selected-agent="[]" :selected-model="$this->selectedModel" :models="$models"
                                     action="setDefaultModel"/>
        </x-pane>

        <div class="my-12"/>

        <x-pane title="Autoscroll to bottom in chats">
            <div class="flex items-center justify-between cursor-pointer" wire:click="toggleAutoscroll">
                <span>Autoscroll</span>
                <div class="{{ $autoscroll ? 'bg-green-500' : 'bg-gray-200' }} rounded-full p-2">
                    {{ $autoscroll ? 'ENABLED' : 'DISABLED' }}
                </div>
            </div>
        </x-pane>

        <div class="my-12"/>

        <x-pane title="Lightning Address">
            <p class="mt-1 mb-4">Add a <a href="https://lightningaddress.com/"
                                          target="_blank" class="text-white underline">Lightning Address</a> so you can
                get paid.</p>
            <div class="flex flex-col">
                <x-chat.input type="text" class="form-input" placeholder="example@getalby.com"
                              wire:model.defer="lightning_address"/>
                <button class="btn mt-4" wire:click="updateLightningAddress">Save</button>
            </div>
        </x-pane>

    </div>
</div>
