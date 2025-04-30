@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#E8F5E9] flex items-center justify-center px-4">
    <div class="w-full max-w-6xl flex items-center">
        <!-- Left side - Form -->
        <div class="w-full lg:w-1/2 space-y-8">
            <div>
                <h2 class="text-3xl font-bold text-gray-900">Get Started Now</h2>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf
                
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 @error('name') border-red-500 @enderror" required />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 @error('email') border-red-500 @enderror" required />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 @error('password') border-red-500 @enderror" required />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required />
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="terms" id="terms"
                        class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded" required />
                    <label for="terms" class="ml-2 block text-sm text-gray-700">
                        I agree to the terms & policy
                    </label>
                    @error('terms')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#2A5D3C] hover:bg-[#224830] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Signup
                </button>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-[#E8F5E9] text-gray-500">Or</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <a href="{{ route('login.google') }}"
                        class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5 mr-2" alt="Google logo" />
                        Sign in with Google
                    </a>
                    <a href="{{ route('login.apple') }}"
                        class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <img src="https://www.svgrepo.com/show/475656/apple-color.svg" class="w-5 h-5 mr-2" alt="Apple logo" />
                        Sign in with Apple
                    </a>
                </div>

                <div class="text-sm text-center">
                    Have an account?
                    <a href="{{ route('login') }}" class="font-medium text-green-600 hover:text-green-500">
                        Sign in
                    </a>
                </div>
            </form>
        </div>

        <!-- Right side - Image and Text -->
        <div class="hidden lg:flex lg:w-1/2 pl-12">
            <div class="space-y-6">
                <h2 class="text-4xl font-bold text-gray-900">
                    Reach your<br>
                    customers faster,<br>
                    <span class="text-[#2A5D3C]">With Us.</span>
                </h2>
                <img src="{{ asset('images/vegetables-illustration.png') }}"
                    alt="Fresh vegetables illustration"
                    class="w-full">
            </div>
        </div>
    </div>
</div>
@endsection