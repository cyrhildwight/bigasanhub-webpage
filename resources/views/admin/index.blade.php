<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css') {{-- Tailwind via Vite --}}
</head>
<body class="bg-gray-100 font-sans antialiased">

    <!-- Header -->
    <header class="bg-[#2E6F40] shadow-md sticky top-0 z-10">
        <div class="max-w-[1200px] mx-auto px-6 py-5 flex justify-between items-center">
            <h1 class="text-2xl md:text-3xl font-extrabold text-white">Admin Dashboard</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg font-semibold shadow">
                    Logout
                </button>
            </form>
        </div>
    </header>

    <main class="pt-10">

        <!-- Franchise Applications Section -->
        <section class="py-[60px] bg-[#2E6F40]">
            <div class="mx-auto w-[92%] max-w-[1200px]">
                <h2 class="text-center text-3xl md:text-4xl font-extrabold text-white mb-8">Franchise Applications</h2>
                <div class="bg-[#0d2e1a] rounded-2xl shadow-2xl p-6 md:p-8">
                    <div class="overflow-x-auto rounded-lg border border-[#1a4a2a]">
                        <table class="min-w-full divide-y divide-gray-700">
                            <thead class="bg-[#1a4a2a]">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Name</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Email</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Phone</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Message</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Date</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-800 text-white/90">
                                @forelse($franchises as $franchise)
                                    <tr class="hover:bg-[#1a4a2a] transition">
                                        <td class="px-4 py-3">{{ $franchise->name }}</td>
                                        <td class="px-4 py-3">{{ $franchise->email }}</td>
                                        <td class="px-4 py-3">{{ $franchise->phone }}</td>
                                        <td class="px-4 py-3">{{ $franchise->message }}</td>
                                        <td class="px-4 py-3 text-xs text-gray-400">{{ $franchise->created_at->format('Y-m-d H:i') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-4 py-6 text-center text-gray-400 italic">No franchise applications found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Submissions Section -->
        <section class="py-[60px] bg-[#1a4a2a]">
            <div class="mx-auto w-[92%] max-w-[1200px]">
                <h2 class="text-center text-3xl md:text-4xl font-extrabold text-white mb-8">Contact Submissions</h2>
                <div class="bg-[#0d2e1a] rounded-2xl shadow-2xl p-6 md:p-8">
                    <div class="overflow-x-auto rounded-lg border border-[#2E6F40]">
                        <table class="min-w-full divide-y divide-gray-700">
                            <thead class="bg-[#2E6F40]">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Name</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Email</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Message</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Date</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-800 text-white/90">
                                @forelse($contacts as $contact)
                                    <tr class="hover:bg-[#2E6F40]/40 transition">
                                        <td class="px-4 py-3">{{ $contact->name }}</td>
                                        <td class="px-4 py-3">{{ $contact->email }}</td>
                                        <td class="px-4 py-3">{{ $contact->message }}</td>
                                        <td class="px-4 py-3 text-xs text-gray-400">{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-4 py-6 text-center text-gray-400 italic">No contact submissions found.</td>
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
