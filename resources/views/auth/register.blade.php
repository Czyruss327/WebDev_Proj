<x-guest-layout>
    <div class="mb-8">
        <p class="text-sm font-semibold text-indigo-600">GET STARTED</p>
        <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-900">Create your account</h2>
        <p class="mt-2 text-slate-600">Already have an account? <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign in</a></p>
    </div>
    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf
        <div>
            <label for="name" class="mb-2 block text-sm font-medium text-slate-700">Full name</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name" class="block w-full rounded-lg border-slate-300 px-3 py-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <label for="email" class="mb-2 block text-sm font-medium text-slate-700">Email address</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="username" class="block w-full rounded-lg border-slate-300 px-3 py-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
            <label for="password" class="mb-2 block text-sm font-medium text-slate-700">Password</label>
            <input id="password" name="password" type="password" required autocomplete="new-password" class="block w-full rounded-lg border-slate-300 px-3 py-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div>
            <label for="password_confirmation" class="mb-2 block text-sm font-medium text-slate-700">Confirm password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" class="block w-full rounded-lg border-slate-300 px-3 py-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
        </div>
        <button type="submit" class="w-full rounded-lg bg-indigo-600 px-4 py-3 font-semibold text-white shadow-sm transition hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create account</button>
    </form>
</x-guest-layout>
