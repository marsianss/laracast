<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf 
        

    <div class="mt-2">
        <x-form-field>
            <x-form-label for="first_name">First Name</x-form-label>
            <x-form-input name="first_name" id="first_name" placeholder="John" required></x-form-input>
            <x-form-error name="first_name"/>
        </x-form-field>
    </div>

    <div class="mt-2">
        <x-form-field>
            <x-form-label for="last_name">Last Name</x-form-label>
            <x-form-input name="last_name" id="last_name" placeholder="Doe" required></x-form-input>
            <x-form-error name="last_name"/>
        </x-form-field>
    </div>

    <div class="mt-2">
        <x-form-field>
            <x-form-label for="email">Email</x-form-label>
            <x-form-input type="email" name="email" id="email" placeholder="john.doe@example.com" required></x-form-input>
            <x-form-error name="email"/>
        </x-form-field>
    </div>

    <div class="mt-2">
        <x-form-field>
            <x-form-label for="password">Password</x-form-label>
            <x-form-input type="password" name="password" id="password" required></x-form-input>
            <x-form-error name="password"/>
        </x-form-field>
    </div>

    <div class="mt-2">
        <x-form-field>
            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
            <x-form-input type="password" name="password_confirmation" id="password_confirmation" required></x-form-input>
            <x-form-error name="password_confirmation"/>
        </x-form-field>
    </div>

<div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
     <x-form-button>Register</x-form-button>
    </div>
  </form>
</x-layout>

