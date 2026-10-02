<x-guest-layout>
    <div class="mb-8">
        <p class="text-sm font-semibold text-indigo-600">WELCOME BACK</p>
        <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-900">Sign in to your account</h2>
        <p class="mt-2 text-slate-600">New here? <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Create an account</a></p>
    </div>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf
        <div>
            <label for="email" class="mb-2 block text-sm font-medium text-slate-700">Email address</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="block w-full rounded-lg border-slate-300 px-3 py-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
            <div class="mb-2 flex items-center justify-between">
                <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                @endif
            </div>
            <input id="password" name="password" type="password" required autocomplete="current-password" class="block w-full rounded-lg border-slate-300 px-3 py-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <label class="flex items-center gap-2 text-sm text-slate-600"><input id="remember" name="remember" type="checkbox" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500"> Remember me</label>
        <button type="submit" class="w-full rounded-lg bg-indigo-600 px-4 py-3 font-semibold text-white shadow-sm transition hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign in</button>
    </form>
</x-guest-layout>
