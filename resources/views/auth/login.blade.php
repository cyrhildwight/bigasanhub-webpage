
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .login-bg {
            background: linear-gradient(135deg, #2E6F40 60%, #256233 100%);
        }
        .login-card {
            box-shadow: 0 8px 32px 0 rgba(46, 111, 64, 0.2);
        }
        .login-title {
            letter-spacing: 1px;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center relative" style="background: linear-gradient(135deg, #183D2B 70%, #256233 100%); overflow: hidden;">
    <!-- Decorative SVG background pattern -->
    <svg class="absolute inset-0 w-full h-full opacity-20" style="z-index:0;" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" fill="none" viewBox="0 0 1440 900">
        <circle cx="200" cy="200" r="180" fill="#256233"/>
        <circle cx="1300" cy="700" r="220" fill="#2E6F40"/>
        <circle cx="1200" cy="100" r="90" fill="#1B4D32"/>
        <circle cx="300" cy="800" r="120" fill="#183D2B"/>
    </svg>
    <div class="w-full max-w-md p-10 bg-white/90 rounded-3xl shadow-2xl login-card relative z-10 backdrop-blur-md border border-[#256233]/20">
        <div class="flex flex-col items-center mb-8">
            <img src="/images/logo.v2.png" alt="Logo" class="mb-4 w-50 h-20 object-contain drop-shadow-lg">
            <h2 class="login-title text-3xl font-extrabold text-center text-[#256233] tracking-wide">Admin Login</h2>
            <p class="text-[#2E6F40] text-sm mt-2">Sign in to access the admin dashboard</p>
        </div>
        <form method="POST" action="{{ url('/login') }}" class="space-y-6">
            @csrf
            <div>
                <label class="block text-[#256233] text-sm font-semibold mb-2" for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full px-4 py-3 border-2 border-[#2E6F40] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#256233] bg-[#F6FFF8] placeholder-[#256233]/60">
                @error('email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-[#256233] text-sm font-semibold mb-2" for="password">Password</label>
                <input id="password" type="password" name="password" required class="w-full px-4 py-3 border-2 border-[#2E6F40] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#256233] bg-[#F6FFF8] placeholder-[#256233]/60">
                @error('password')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="w-full py-3 rounded-lg bg-gradient-to-r from-[#256233] to-[#183D2B] text-white font-bold text-lg shadow-lg hover:scale-105 hover:shadow-2xl transition-transform duration-200">Login</button>
        </form>
    </div>
</body>
</html>
