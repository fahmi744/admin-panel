<aside id="sidebar" class="w-64 bg-indigo-900 text-white flex flex-col transition-all duration-300">

    {{-- Logo --}}
    <div class="flex items-center gap-3 px-6 py-5 border-b border-indigo-700">
        <div class="w-8 h-8 bg-indigo-400 rounded-lg flex items-center justify-center">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
        </div>
        <span class="text-lg font-bold tracking-wide">AdminPanel</span>
    </div>

    {{-- Navigasi --}}
    <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">

        <p class="text-xs text-indigo-400 uppercase tracking-wider mb-2 px-2">Main Menu</p>

        <a href="/" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition
            {{ request()->is('/') ? 'bg-indigo-700 text-white font-medium' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            Dashboard
        </a>

        <a href="/users" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition
            {{ request()->is('users') ? 'bg-indigo-700 text-white font-medium' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
            </svg>
            Users
        </a>

        <a href="/orders" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition
            {{ request()->is('orders') ? 'bg-indigo-700 text-white font-medium' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
            </svg>
            Orders
            <span class="ml-auto bg-red-500 text-white text-xs rounded-full px-2 py-0.5">12</span>
        </a>

        <a href="/products" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition
            {{ request()->is('products') ? 'bg-indigo-700 text-white font-medium' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
            </svg>
            Products
        </a>

        <a href="/reports" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition
            {{ request()->is('reports') ? 'bg-indigo-700 text-white font-medium' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
            Reports
        </a>

        <div class="pt-4">
            <p class="text-xs text-indigo-400 uppercase tracking-wider mb-2 px-2">Settings</p>
        </div>

        <a href="/settings" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition
            {{ request()->is('settings') ? 'bg-indigo-700 text-white font-medium' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Settings
        </a>

        <a href="/logout" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-indigo-200 hover:bg-indigo-700 hover:text-white transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
            </svg>
            Logout
        </a>

    </nav>

    {{-- User di bawah sidebar --}}
    <div class="px-4 py-4 border-t border-indigo-700 flex items-center gap-3">
        <div class="w-9 h-9 rounded-full bg-indigo-400 flex items-center justify-center text-white font-bold text-sm">A</div>
        <div>
            <p class="text-sm font-semibold">Admin User</p>
            <p class="text-xs text-indigo-300">admin@example.com</p>
        </div>
    </div>

</aside>