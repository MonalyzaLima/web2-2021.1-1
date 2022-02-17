<html lang="en" style="background-color: #f3f4f6;">
    <title>Cadastro</title>
    <x-guest-layout>
        <img src="{{asset('img/homem.jpg')}}" style=" position: relative;  height: 980px; object-fit: cover;   width: 55%; float:left; ">
        <x-auth-card>
            <x-slot name="logo">
                <img src="{{asset('img/homem.jpg')}}" alt="" style="width: 90%; margin: auto; position: relative;">
            </x-slot>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Name')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>
                <!-- CPF -->
                <div class="mt-4">
                    <x-label for="cpf" :value="__('CPF')" />
                    <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required autofocus />
                </div>
                <!-- Endereço -->
                <div class="mt-4">
                    <x-label for="endereco" :value="__('Endereco')" />
                    <x-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autofocus />
                </div>
                <!-- Telefone -->
                <div class="mt-4">
                    <x-label for="telefone" :value="__('Telefone')" />
                    <x-input id="telefone" class="block mt-1 w-full" type="text" name="telefone" :value="old('telefone')" required autofocus />
                </div>                 
                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Senha')" />
                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirme a senha')" />
                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Já possui uma conta?') }}
                    </a>
                    <x-button class="ml-4">
                        {{ __('Cadastre-se') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
</html> 

