<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        <div class="text-white">
            {{ __('Atualizar senha') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="text-white">
            {{ __('Certifique-se de que sua conta está usando uma senha longa e aleatória para permanecer segura.') }}
        </div>
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Senha atual') }}"/>
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full"
                         wire:model.defer="state.current_password" autocomplete="current-password"/>
            <x-jet-input-error for="current_password" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('Nova senha') }}"/>
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password"
                         autocomplete="new-password"/>
            <x-jet-input-error for="password" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirme a nova senha') }}"/>
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full"
                         wire:model.defer="state.password_confirmation" autocomplete="new-password"/>
            <x-jet-input-error for="password_confirmation" class="mt-2"/>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Salvo.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Salvar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
