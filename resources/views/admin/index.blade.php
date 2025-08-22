<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Bigasan Hub</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .glass-effect { backdrop-filter: blur(10px); background: rgba(15, 23, 42, 0.8); }
        .gradient-bg { background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-2px); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3); }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen">

    <!-- Header -->
    <header class="glass-effect border-b border-slate-700 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-emerald-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-white">Bigasan Hub</h1>
                        <p class="text-sm text-slate-400">Admin Dashboard</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200 flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-slate-800 rounded-xl p-6 card-hover border border-slate-700">
                <div class="flex items-center">
                    <div class="p-2 bg-blue-500/20 rounded-lg">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-slate-400">Franchise Applications</p>
                        <p class="text-2xl font-bold text-white">{{ $franchises->count() }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-slate-800 rounded-xl p-6 card-hover border border-slate-700">
                <div class="flex items-center">
                    <div class="p-2 bg-green-500/20 rounded-lg">
                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-slate-400">Contact Messages</p>
                        <p class="text-2xl font-bold text-white">{{ $contacts->count() }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-slate-800 rounded-xl p-6 card-hover border border-slate-700">
                <div class="flex items-center">
                    <div class="p-2 bg-purple-500/20 rounded-lg">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-slate-400">Features</p>
                        <p class="text-2xl font-bold text-white">{{ $features->count() }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-slate-800 rounded-xl p-6 card-hover border border-slate-700">
                <div class="flex items-center">
                    <div class="p-2 bg-orange-500/20 rounded-lg">
                        <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-slate-400">Product Varieties</p>
                        <p class="text-2xl font-bold text-white">{{ $varieties->count() }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Franchise Applications Section -->
        <section class="mb-8">
            <div class="bg-slate-800 rounded-xl border border-slate-700 overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700">
                    <h2 class="text-lg font-semibold text-white flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        Franchise Applications
                    </h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-700">
                        <thead class="bg-slate-700/50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Phone</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Message</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Date</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-700">
                            @forelse($franchises as $franchise)
                                <tr class="hover:bg-slate-700/30 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $franchise->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">{{ $franchise->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">{{ $franchise->phone }}</td>
                                    <td class="px-6 py-4 text-sm text-slate-300 max-w-xs truncate">{{ $franchise->message }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-xs text-slate-400">{{ $franchise->created_at->format('M d, Y g:i A') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-8 text-center text-slate-400 italic">No franchise applications found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Contact Submissions Section -->
        <section class="mb-8">
            <div class="bg-slate-800 rounded-xl border border-slate-700 overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700">
                    <h2 class="text-lg font-semibold text-white flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        Contact Submissions
                    </h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-700">
                        <thead class="bg-slate-700/50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Message</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Date</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-700">
                            @forelse($contacts as $contact)
                                <tr class="hover:bg-slate-700/30 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $contact->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">{{ $contact->email }}</td>
                                    <td class="px-6 py-4 text-sm text-slate-300 max-w-xs truncate">{{ $contact->message }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-xs text-slate-400">{{ $contact->created_at->format('M d, Y g:i A') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-8 text-center text-slate-400 italic">No contact submissions found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Features Management -->
        <section class="mb-8">
            <div class="bg-slate-800 rounded-xl border border-slate-700 overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700">
                    <h2 class="text-lg font-semibold text-white flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        About Page Features
                    </h2>
                </div>
                <div class="p-6">
                    <form method="POST" action="{{ route('admin.features.store') }}" class="grid md:grid-cols-12 gap-4 items-end mb-6">
                        @csrf
                        <div class="md:col-span-4">
                            <label class="block text-sm font-medium text-slate-300 mb-1">Title</label>
                            <input name="title" class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                        </div>
                        <div class="md:col-span-6">
                            <label class="block text-sm font-medium text-slate-300 mb-1">Description</label>
                            <input name="description" class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        </div>
                        <div class="md:col-span-1">
                            <label class="block text-sm font-medium text-slate-300 mb-1">Order</label>
                            <input type="number" name="position" min="0" value="0" class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        </div>
                        <div class="md:col-span-1">
                            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">Add</button>
                        </div>
                    </form>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-700">
                            <thead class="bg-slate-700/50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Order</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Title</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Description</th>
                                    <th class="px-4 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-700">
                                @forelse(($features ?? []) as $feature)
                                    <tr class="hover:bg-slate-700/30 transition-colors">
                                        <td class="px-4 py-3 text-sm text-slate-300">{{ $feature->position }}</td>
                                        <td class="px-4 py-3 text-sm font-medium text-white">{{ $feature->title }}</td>
                                        <td class="px-4 py-3 text-sm text-slate-300">{{ $feature->description }}</td>
                                        <td class="px-4 py-3 flex gap-2 justify-end">
                                            <form method="POST" action="{{ route('admin.features.update', $feature) }}" class="flex gap-2">
                                                @csrf
                                                @method('PUT')
                                                <input name="title" value="{{ $feature->title }}" class="hidden" />
                                                <input name="description" value="{{ $feature->description }}" class="hidden" />
                                                <input name="position" value="{{ $feature->position }}" class="hidden" />
                                                <button class="px-3 py-1 rounded-md bg-blue-600 text-white text-sm hover:bg-blue-700 transition-colors">Save</button>
                                            </form>
                                            <form method="POST" action="{{ route('admin.features.delete', $feature) }}" onsubmit="return confirm('Delete this feature?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="px-3 py-1 rounded-md bg-red-600 text-white text-sm hover:bg-red-700 transition-colors">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-4 py-6 text-center text-slate-400 italic">No features yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Varieties Management -->
        <section class="mb-8">
            <div class="bg-slate-800 rounded-xl border border-slate-700 overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700">
                    <h2 class="text-lg font-semibold text-white flex items-center">
                        <svg class="w-5 h-5 mr-2 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                        Product Varieties
                    </h2>
                </div>
                <div class="p-6">
                    <form method="POST" action="{{ route('admin.varieties.store') }}" class="grid md:grid-cols-12 gap-4 items-end mb-6">
                        @csrf
                        <div class="md:col-span-3">
                            <label class="block text-sm font-medium text-slate-300 mb-1">Name</label>
                            <input name="name" class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                        </div>
                        <div class="md:col-span-4">
                            <label class="block text-sm font-medium text-slate-300 mb-1">Image Filename</label>
                            <input name="image" placeholder="e.g., hasmin.png" class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-slate-300 mb-1">Order</label>
                            <input type="number" name="position" min="0" value="0" class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        </div>
                        <div class="md:col-span-2">
                            <label class="flex items-center">
                                <input type="checkbox" name="is_active" value="1" checked class="rounded border-slate-600 text-blue-500 focus:ring-blue-500 bg-slate-700">
                                <span class="ml-2 text-sm text-slate-300">Active</span>
                            </label>
                        </div>
                        <div class="md:col-span-1">
                            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">Add</button>
                        </div>
                    </form>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-700">
                            <thead class="bg-slate-700/50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Order</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Image</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Name</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Status</th>
                                    <th class="px-4 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-700">
                                @forelse(($varieties ?? []) as $variety)
                                    <tr class="hover:bg-slate-700/30 transition-colors">
                                        <td class="px-4 py-3 text-sm text-slate-300">{{ $variety->position }}</td>
                                        <td class="px-4 py-3">
                                            <img src="/images/{{ $variety->image }}" alt="{{ $variety->name }}" class="h-12 w-12 object-contain rounded bg-slate-700" />
                                        </td>
                                        <td class="px-4 py-3 text-sm font-medium text-white">{{ $variety->name }}</td>
                                        <td class="px-4 py-3">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $variety->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                {{ $variety->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 flex gap-2 justify-end">
                                            <form method="POST" action="{{ route('admin.varieties.update', $variety) }}" class="flex gap-2">
                                                @csrf
                                                @method('PUT')
                                                <input name="name" value="{{ $variety->name }}" class="hidden" />
                                                <input name="image" value="{{ $variety->image }}" class="hidden" />
                                                <input name="position" value="{{ $variety->position }}" class="hidden" />
                                                <input name="is_active" value="{{ $variety->is_active ? '1' : '0' }}" class="hidden" />
                                                <button class="px-3 py-1 rounded-md bg-blue-600 text-white text-sm hover:bg-blue-700 transition-colors">Save</button>
                                            </form>
                                            <form method="POST" action="{{ route('admin.varieties.delete', $variety) }}" onsubmit="return confirm('Delete this variety?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="px-3 py-1 rounded-md bg-red-600 text-white text-sm hover:bg-red-700 transition-colors">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-4 py-6 text-center text-slate-400 italic">No varieties yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Varieties Management -->
        <section class="mb-8">
            <div class="bg-slate-800 rounded-xl border border-slate-700 overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700">
                    <h2 class="text-lg font-semibold text-white flex items-center">
                        <svg class="w-5 h-5 mr-2 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        Homepage Featured Varieties
                    </h2>
                </div>
                <div class="p-6">
                    <form method="POST" action="{{ route('admin.featured-varieties.store') }}" class="grid md:grid-cols-12 gap-4 items-end mb-6">
                        @csrf
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-slate-300 mb-1">Name</label>
                            <input name="name" class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                        </div>
                        <div class="md:col-span-3">
                            <label class="block text-sm font-medium text-slate-300 mb-1">Image Filename</label>
                            <input name="image" placeholder="e.g., dinorado.png" class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                        </div>
                        <div class="md:col-span-4">
                            <label class="block text-sm font-medium text-slate-300 mb-1">Description</label>
                            <input name="description" placeholder="e.g., Fragrant, soft grain—perfect for everyday meals." class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                        </div>
                        <div class="md:col-span-1">
                            <label class="block text-sm font-medium text-slate-300 mb-1">Order</label>
                            <input type="number" name="position" min="0" value="0" class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        </div>
                        <div class="md:col-span-1">
                            <label class="flex items-center">
                                <input type="checkbox" name="is_active" value="1" checked class="rounded border-slate-600 text-blue-500 focus:ring-blue-500 bg-slate-700">
                                <span class="ml-2 text-sm text-slate-300">Active</span>
                            </label>
                        </div>
                        <div class="md:col-span-1">
                            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">Add</button>
                        </div>
                    </form>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-700">
                            <thead class="bg-slate-700/50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Order</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Image</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Name</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Description</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Status</th>
                                    <th class="px-4 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-700">
                                @forelse(($featuredVarieties ?? []) as $variety)
                                    <tr class="hover:bg-slate-700/30 transition-colors">
                                        <td class="px-4 py-3 text-sm text-slate-300">{{ $variety->position }}</td>
                                        <td class="px-4 py-3">
                                            <img src="/images/{{ $variety->image }}" alt="{{ $variety->name }}" class="h-12 w-12 object-contain rounded bg-slate-700" />
                                        </td>
                                        <td class="px-4 py-3 text-sm font-medium text-white">{{ $variety->name }}</td>
                                        <td class="px-4 py-3 text-sm text-slate-300 max-w-xs truncate">{{ $variety->description }}</td>
                                        <td class="px-4 py-3">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $variety->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                {{ $variety->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 flex gap-2 justify-end">
                                            <form method="POST" action="{{ route('admin.featured-varieties.update', $variety) }}" class="flex gap-2">
                                                @csrf
                                                @method('PUT')
                                                <input name="name" value="{{ $variety->name }}" class="hidden" />
                                                <input name="image" value="{{ $variety->image }}" class="hidden" />
                                                <input name="description" value="{{ $variety->description }}" class="hidden" />
                                                <input name="position" value="{{ $variety->position }}" class="hidden" />
                                                <input name="is_active" value="{{ $variety->is_active ? '1' : '0' }}" class="hidden" />
                                                <button class="px-3 py-1 rounded-md bg-blue-600 text-white text-sm hover:bg-blue-700 transition-colors">Save</button>
                                            </form>
                                            <form method="POST" action="{{ route('admin.featured-varieties.delete', $variety) }}" onsubmit="return confirm('Delete this featured variety?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="px-3 py-1 rounded-md bg-red-600 text-white text-sm hover:bg-red-700 transition-colors">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-4 py-6 text-center text-slate-400 italic">No featured varieties yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </main>
</body>
</html>
