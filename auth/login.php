<?php
session_start();
require_once __DIR__ . '/../config/database.php'; 

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login_input = trim($_POST['email'] ?? ''); 
    $password = $_POST['password'] ?? '';

    if (!empty($login_input) && !empty($password)) {
        // This checks BOTH the username and email columns in your database
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ? LIMIT 1");
        $stmt->execute([$login_input, $login_input]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role']; // 'admin' or 'employee'

            // Redirect based on role
            if ($user['role'] === 'admin') {
                header("Location: ../admin/dashboard.php");
                exit();
            } else {
                header("Location: ../employee/dashboard.php");
                exit();
            }
        } else {
            $error = "Invalid credentials.";
        }
    } else {
        $error = "Please fill in all fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRIS - Human Resources Information System</title>
    <!-- Tailwind CSS CDN for rapid styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hover-wave-text {
            display: inline-block;
        }
        .hover-wave-text span {
            display: inline-block;
            transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275), color 0.2s ease;
            cursor: default;
        }
        .hover-wave-text span:hover {
            transform: translateY(-8px) scale(1.2);
            color: #38bdf8;
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased selection:bg-blue-500 selection:text-white">

    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-12 w-full overflow-x-hidden">
        
        <div class="lg:col-span-7 bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 text-white p-8 sm:p-12 lg:p-16 flex flex-col justify-between relative overflow-hidden">
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl pointer-events-none"></div>

            <div class="flex items-center space-x-3 z-10">
                <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/20 shadow-inner">
                    <svg class="w-6 h-6 text-sky-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <span class="text-xl font-bold tracking-wider text-white">Human Resources <span class="text-xs uppercase px-2 py-0.5 bg-blue-500/30 border border-blue-400/30 rounded-full ml-1 text-sky-300">Enterprise</span></span>
            </div>

            <div class="my-auto py-12 z-10 max-w-xl">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight leading-tight mb-6">
                    <span class="hover-wave-text" id="title-line-1">Great things start with</span><br>
                    <span class="hover-wave-text" id="title-line-2">your passion.</span>
                </h1>
            </div>

            <div class="text-xs text-slate-400 z-10 flex items-center space-x-4">
                <span>&copy; 2026 Human Resources Portal</span>
            </div>
        </div>

        <!-- Right Login Panel -->
        <div class="lg:col-span-5 bg-white p-8 sm:p-12 lg:p-16 flex flex-col justify-center shadow-2xl relative">
            <div class="w-full max-w-md mx-auto">
                <div class="mb-8">
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">Welcome Back</h2>
                    <p class="text-sm text-slate-500 mt-2">Please enter your credentials</p>
                </div>

                <?php if (!empty($error)): ?>
                    <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-600 rounded-xl text-sm">
                        <?php echo htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>

                <form action="login.php" method="POST" class="space-y-5">
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Username or Email</label>
                        <input type="text" name="email" required placeholder="Enter username or email" 
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent text-slate-800 text-sm transition placeholder:text-slate-400 bg-slate-50/50">
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600">Password</label>
                            <a href="forgot_password.php" class="text-xs font-medium text-blue-600 hover:text-blue-500">Forgot password?</a>
                        </div>
                        <div class="relative">
                            <input type="password" name="password" id="password" required placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" 
                                class="w-full px-4 py-3 pr-12 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent text-slate-800 text-sm transition placeholder:text-slate-400 bg-slate-50/50">
                            <button type="button" onclick="togglePassword('password', 'eye-open-login', 'eye-closed-login')" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none">
                                <svg id="eye-open-login" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg id="eye-closed-login" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.05 10.05 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <button type="submit" 
                        class="w-full py-3.5 px-4 bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-semibold rounded-xl shadow-lg shadow-blue-600/30 transition duration-200 text-sm">
                        Sign In 
                    </button>
                </form>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            function setupAnimation(id) {
                const container = document.getElementById(id);
                if (container) {
                    const text = container.textContent;
                    container.innerHTML = ""; 
                    for (let char of text) {
                        const span = document.createElement("span");
                        if (char === " ") {
                            span.innerHTML = "&nbsp;";
                        } else {
                            span.textContent = char;
                        }
                        container.appendChild(span);
                    }
                }
            }
            setupAnimation("title-line-1");
            setupAnimation("title-line-2");
        });

        function togglePassword(fieldId, openIconId, closedIconId) {
            const inputField = document.getElementById(fieldId);
            const openIcon = document.getElementById(openIconId);
            const closedIcon = document.getElementById(closedIconId);

            if (inputField.type === "password") {
                inputField.type = "text";
                openIcon.classList.add("hidden");
                closedIcon.classList.remove("hidden");
            } else {
                inputField.type = "password";
                openIcon.classList.remove("hidden");
                closedIcon.classList.add("hidden");
            }
        }
    </script>
</body>
</html>