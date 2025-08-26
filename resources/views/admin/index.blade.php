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
        .sidebar-item { transition: all 0.2s ease; }
        .sidebar-item:hover { background-color: rgba(59, 130, 246, 0.1); }
        .sidebar-item.active { background-color: rgba(59, 130, 246, 0.2); border-right: 3px solid #3b82f6; }
        .section-content { display: none; }
        .section-content.active { display: block; }
        /* THEME OVERRIDES - Green brand palette */
        body { background-color: #0b2a17; }
        .bg-slate-800 { background-color: #0d2e1a !important; }
        .bg-slate-700 { background-color: #1a4a2a !important; }
        .border-slate-700 { border-color: #2E6F40 !important; }
        .text-slate-300 { color: #d6f3df !important; }
        .text-slate-400 { color: #bfe7cb !important; }
        .text-slate-100 { color: #ffffff !important; }
        header.bg-slate-800 { background-color: #0d2e1a !important; }
        /* Welcome gradient */
        .welcome-gradient { background: linear-gradient(135deg, #0d2e1a 0%, #1a4a2a 100%) !important; }
        /* Tables */
        thead.bg-slate-700\/50 { background-color: rgba(46,111,64,0.5) !important; }
        /* File inputs background */
        input[type="file"].bg-slate-700 { background-color: #163b22 !important; }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen">

    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 z-50 w-64 bg-slate-800 border-r border-slate-700">
        <div class="flex items-center justify-center h-16 border-b border-slate-700">
            <div class="flex space-x-3">
                    <img src="/images/logo.png" alt="Bigasan Hub" class="w-10 h-10 object-contain">      
                <div>
                    <h1 class="text-lg font-bold text-white">Bigasan Hub</h1>
                    <p class="text-xs text-slate-400">Admin Panel</p>
                </div>
            </div>
        </div>
        
        <nav class="mt-6">
            <div class="px-4 space-y-2">
                <a href="#dashboard" class="sidebar-item active flex items-center px-4 py-3 text-sm font-medium text-white rounded-lg" onclick="showSection('dashboard')">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="#franchise" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-slate-300 rounded-lg" onclick="showSection('franchise')">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    Franchise Applications
                </a>
                <a href="#contact" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-slate-300 rounded-lg" onclick="showSection('contact')">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    Contact Submissions
                </a>
                <a href="#features" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-slate-300 rounded-lg" onclick="showSection('features')">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    About Page Features
                </a>
                <a href="#faqs" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-slate-300 rounded-lg" onclick="showSection('faqs')">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    FAQs
                </a>
                <a href="#products" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-slate-300 rounded-lg" onclick="showSection('products')">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    Product Varieties
                </a>
                <a href="#featured" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-slate-300 rounded-lg" onclick="showSection('featured')">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                    Featured Varieties
                </a>
            </div>
        </nav>

        <div class="absolute bottom-4 left-4 right-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200 flex items-center justify-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="ml-64">
        <!-- Top Header -->
        <header class="bg-slate-800 border-b border-slate-700">
            <div class="px-6 py-4">
                <h1 class="text-2xl font-bold text-white">Admin Dashboard</h1>
                <p class="text-slate-400">Manage your Bigasan Hub content and applications</p>
            </div>
        </header>

        <main class="p-6">
            <!-- Success Messages -->
            @if(session('success'))
                <div class="mb-6 bg-green-600 border border-green-500 text-white px-4 py-3 rounded-lg flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ session('success') }}
                </div>
            @endif
            <!-- Dashboard Section -->
            <section id="dashboard" class="section-content active">
                <!-- Welcome Message -->
                <div class="mb-8 text-center py-8 bg-gradient-to-r from-slate-800 to-slate-700 rounded-xl border border-slate-600">
                    <div class="max-w-2xl mx-auto">
                        <!-- Welcome Logo -->
                        <div class="mb-6">
                            <!-- Replace this with your actual logo image -->
                            <img src="/images/logo.png" alt="Bigasan Hub" class="w-25 h-25 mx-auto object-contain">
                        </div>
                        <h2 class="text-3xl font-bold text-white mb-4">Welcome to Bigasan Hub Admin</h2>
                        <p class="text-slate-300 text-lg mb-6">Your comprehensive dashboard for managing rice business operations</p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <div class="bg-slate-700/50 rounded-lg px-4 py-2">
                                <span class="text-sm text-slate-300">📊 {{ $franchises->count() + $contacts->count() }} Total Interactions</span>
                            </div>
                            <div class="bg-slate-700/50 rounded-lg px-4 py-2">
                                <span class="text-sm text-slate-300">🚀 {{ $features->count() }} Active Features</span>
                            </div>
                            <div class="bg-slate-700/50 rounded-lg px-4 py-2">
                                <span class="text-sm text-slate-300">📦 {{ $varieties->count() }} Product Varieties</span>
                            </div>
                        </div>
                    </div>
                </div>

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

                <!-- Quick Actions -->
                <div class="mb-8">
                    <div class="bg-slate-800 rounded-xl border border-slate-700 overflow-hidden">
                        <div class="px-6 py-4 border-b border-slate-700">
                            <h3 class="text-lg font-semibold text-white flex items-center">
                                <svg class="w-5 h-5 mr-2 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Quick Actions
                            </h3>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <button onclick="showSection('franchise')" class="bg-blue-600 hover:bg-blue-700 rounded-lg p-4 text-center transition-colors duration-200">
                                    <svg class="w-8 h-8 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <p class="text-sm font-medium text-white">View Applications</p>
                                </button>
                                <button onclick="showSection('products')" class="bg-orange-600 hover:bg-orange-700 rounded-lg p-4 text-center transition-colors duration-200">
                                    <svg class="w-8 h-8 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    <p class="text-sm font-medium text-white">Add Product</p>
                                </button>
                                <button onclick="showSection('features')" class="bg-purple-600 hover:bg-purple-700 rounded-lg p-4 text-center transition-colors duration-200">
                                    <svg class="w-8 h-8 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    <p class="text-sm font-medium text-white">Add Feature</p>
                                </button>
                                <button onclick="showSection('faqs')" class="bg-indigo-600 hover:bg-indigo-700 rounded-lg p-4 text-center transition-colors duration-200">
                                    <svg class="w-8 h-8 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    <p class="text-sm font-medium text-white">Add FAQ</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-slate-800 rounded-xl border border-slate-700 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-700">
                        <h3 class="text-lg font-semibold text-white flex items-center">
                            <svg class="w-5 h-5 mr-2 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Recent Activity
                        </h3>
                    </div>
                    <div class="p-6 overflow-y-auto">
                        <div class="space-y-4">
                            @forelse($activityLogs as $activity)
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-{{ $activity->color }}-400 rounded-full mt-2"></div>
                                    <div class="flex-1">
                                        <p class="text-sm text-white">{{ $activity->description }}</p>
                                        <p class="text-xs text-slate-400">{{ $activity->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-8">
                                    <svg class="w-12 h-12 text-slate-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-slate-400">No recent activity</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>

            <!-- Franchise Applications Section -->
            <section id="franchise" class="section-content">
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
            <section id="contact" class="section-content">
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

            <!-- Features Management Section -->
            <section id="features" class="section-content">
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

            <!-- FAQ Management Section -->
            <section id="faqs" class="section-content">
                <div class="bg-slate-800 rounded-xl border border-slate-700 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-700">
                        <h2 class="text-lg font-semibold text-white flex items-center">
                            <svg class="w-5 h-5 mr-2 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Frequently Asked Questions
                        </h2>
                    </div>
                    <div class="p-6">
                        <form method="POST" action="{{ route('admin.faqs.store') }}" class="grid md:grid-cols-12 gap-4 items-end mb-6">
                            @csrf
                            <div class="md:col-span-4">
                                <label class="block text-sm font-medium text-slate-300 mb-1">Question</label>
                                <input name="question" placeholder="e.g., Do you deliver outside Cebu?" class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                            </div>
                            <div class="md:col-span-6">
                                <label class="block text-sm font-medium text-slate-300 mb-1">Answer</label>
                                <input name="answer" placeholder="e.g., Yes. We primarily serve Cebu but can arrange logistics to nearby provinces for wholesale orders." class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
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
                            <div class="md:col-span-12">
                                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">Add FAQ</button>
                            </div>
                        </form>

                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-slate-700">
                                <thead class="bg-slate-700/50">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Order</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Question</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Answer</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-slate-300 uppercase tracking-wider">Status</th>
                                        <th class="px-4 py-3"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-700">
                                    @forelse(($faqs ?? []) as $faq)
                                        <tr class="hover:bg-slate-700/30 transition-colors">
                                            <td class="px-4 py-3 text-sm text-slate-300">{{ $faq->position }}</td>
                                            <td class="px-4 py-3 text-sm font-medium text-white">{{ $faq->question }}</td>
                                            <td class="px-4 py-3 text-sm text-slate-300 max-w-xs truncate">{{ $faq->answer }}</td>
                                            <td class="px-4 py-3">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $faq->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ $faq->is_active ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 flex gap-2 justify-end">
                                                <form method="POST" action="{{ route('admin.faqs.update', $faq) }}" class="flex gap-2">
                                                    @csrf
                                                    @method('PUT')
                                                    <input name="question" value="{{ $faq->question }}" class="hidden" />
                                                    <input name="answer" value="{{ $faq->answer }}" class="hidden" />
                                                    <input name="position" value="{{ $faq->position }}" class="hidden" />
                                                    <input name="is_active" value="{{ $faq->is_active ? '1' : '0' }}" class="hidden" />
                                                </form>
                                                <form method="POST" action="{{ route('admin.faqs.delete', $faq) }}" onsubmit="return confirm('Delete this FAQ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="px-3 py-1 rounded-md bg-red-600 text-white text-sm hover:bg-red-700 transition-colors">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="px-4 py-6 text-center text-slate-400 italic">No FAQs yet.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Product Varieties Management Section -->
            <section id="products" class="section-content">
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
                        <form method="POST" action="{{ route('admin.varieties.store') }}" enctype="multipart/form-data" class="grid md:grid-cols-12 gap-4 items-end mb-6">
                            @csrf
                            <div class="md:col-span-4">
                                <label class="block text-sm font-medium text-slate-300 mb-1">Name</label>
                                <input name="name" class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                            </div>
                            <div class="md:col-span-3">
                                <label class="block text-sm font-medium text-slate-300 mb-1">Image</label>
                                <input type="file" name="image" accept="image/*" class="w-full h-10 px-3 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:font-medium file:bg-blue-600 file:text-white hover:file:bg-blue-700 file:h-8 file:my-1" required />
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
                                                    <input name="position" value="{{ $variety->position }}" class="hidden" />
                                                    <input name="is_active" value="{{ $variety->is_active ? '1' : '0' }}" class="hidden" />
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

            <!-- Featured Varieties Management Section -->
            <section id="featured" class="section-content">
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
                        <form method="POST" action="{{ route('admin.featured-varieties.store') }}" enctype="multipart/form-data" class="grid md:grid-cols-12 gap-4 items-end mb-6">
                            @csrf
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-slate-300 mb-1">Name</label>
                                <input name="name" class="w-full px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                            </div>
                            <div class="md:col-span-3">
                                <label class="block text-sm font-medium text-slate-300 mb-1">Image</label>
                                <input type="file" name="image" accept="image/*" class="w-full h-10 px-3 bg-slate-700 border border-slate-600 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:font-medium file:bg-blue-600 file:text-white hover:file:bg-blue-700 file:h-8 file:my-1" required />
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
                                                    <input name="description" value="{{ $variety->description }}" class="hidden" />
                                                    <input name="position" value="{{ $variety->position }}" class="hidden" />
                                                    <input name="is_active" value="{{ $variety->is_active ? '1' : '0' }}" class="hidden" />
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
    </div>

    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.section-content').forEach(function(content) {
                content.classList.remove('active');
            });
            
            // Show the selected section
            document.getElementById(sectionId).classList.add('active');
            
            // Update sidebar active state
            document.querySelectorAll('.sidebar-item').forEach(function(item) {
                item.classList.remove('active');
                item.classList.add('text-slate-300');
                item.classList.remove('text-white');
            });
            
            // Find and activate the clicked sidebar item
            const clickedItem = document.querySelector(`[onclick="showSection('${sectionId}')"]`);
            if (clickedItem) {
                clickedItem.classList.add('active');
                clickedItem.classList.add('text-white');
                clickedItem.classList.remove('text-slate-300');
            }
        }

        // Handle URL hash navigation
        document.addEventListener('DOMContentLoaded', function() {
            // Check if there's a hash in the URL
            const hash = window.location.hash.substring(1);
            if (hash) {
                showSection(hash);
            }

            // Add form submission handlers with alerts and redirects
            // Features form
            const featuresForm = document.querySelector('form[action*="features.store"]');
            if (featuresForm) {
                featuresForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (confirm('Are you sure you want to add this feature?')) {
                        this.submit();
                    }
                });
            }

            // FAQs form
            const faqsForm = document.querySelector('form[action*="faqs.store"]');
            if (faqsForm) {
                faqsForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (confirm('Are you sure you want to add this FAQ?')) {
                        this.submit();
                    }
                });
            }

            // Product Varieties form
            const productsForm = document.querySelector('form[action*="varieties.store"]');
            if (productsForm) {
                productsForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (confirm('Are you sure you want to add this product variety?')) {
                        this.submit();
                    }
                });
            }

            // Featured Varieties form
            const featuredForm = document.querySelector('form[action*="featured-varieties.store"]');
            if (featuredForm) {
                featuredForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (confirm('Are you sure you want to add this featured variety?')) {
                        this.submit();
                    }
                });
            }

            // Auto-hide success messages after 5 seconds
            const successMessage = document.querySelector('.bg-green-600');
            if (successMessage) {
                setTimeout(() => {
                    successMessage.style.opacity = '0';
                    setTimeout(() => {
                        successMessage.remove();
                    }, 300);
                }, 5000);
            }
        });
    </script>
</body>
</html>
