<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GalauBase - Your Music Memories</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Fira Mono', 'Consolas', 'Menlo', 'Monaco', 'Courier New', monospace;
            background: linear-gradient(135deg, #0c0c0c 0%, #1a1a2e 50%, #16213e 100%);
            color: #fff;
            overflow: hidden;
            height: 100vh;
        }

        .app-container {
            display: flex;
            height: 100vh;
            position: relative;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.1;
        }

        .floating-notes {
            position: absolute;
            font-size: 20px;
            color: #1db954;
            animation: float 15s infinite linear;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Sidebar */
        .sidebar {
            width: 280px;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(20px);
            padding: 24px 16px;
            display: flex;
            flex-direction: column;
            gap: 24px;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.3);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 12px;
            margin-bottom: 12px;
        }

        .logo i {
            font-size: 36px;
            background: linear-gradient(45deg, #1db954, #1ed760, #00d4ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }

        @keyframes pulse-glow {
            0% {
                filter: drop-shadow(0 0 5px rgba(29, 185, 84, 0.5));
            }

            100% {
                filter: drop-shadow(0 0 20px rgba(29, 185, 84, 0.8));
            }
        }

        .logo h1 {
            font-size: 28px;
            font-weight: 800;
            background: linear-gradient(45deg, #1db954, #1ed760, #00d4ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.5px;
        }

        .nav-section {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 14px 16px;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            color: #b3b3b3;
            position: relative;
            overflow: hidden;
        }

        .nav-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, #1db954, #1ed760);
            transition: width 0.3s ease;
            z-index: -1;
        }

        .nav-item:hover::before {
            width: 100%;
        }

        .nav-item:hover {
            color: #fff;
            transform: translateX(4px);
            box-shadow: 0 4px 20px rgba(29, 185, 84, 0.3);
        }

        .nav-item.active {
            color: #fff;
            background: linear-gradient(135deg, #1db954, #1ed760);
            box-shadow: 0 4px 20px rgba(29, 185, 84, 0.4);
        }

        .nav-item i {
            width: 24px;
            text-align: center;
            font-size: 18px;
        }

        .playlist-section {
            flex: 1;
            overflow-y: auto;
            padding-right: 8px;
        }

        .playlist-section h3 {
            color: #888;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 16px;
            padding: 0 16px;
        }

        .playlist-item {
            padding: 12px 16px;
            cursor: pointer;
            border-radius: 8px;
            transition: all 0.3s ease;
            color: #b3b3b3;
            font-size: 14px;
            font-weight: 500;
        }

        .playlist-item:hover {
            color: #fff;
            background: rgba(29, 185, 84, 0.1);
            transform: translateX(4px);
        }

        /* Main Content */
        .main-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: rgba(18, 18, 18, 0.8);
            backdrop-filter: blur(20px);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 32px;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-buttons {
            display: flex;
            gap: 12px;
        }

        .nav-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: #b3b3b3;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .nav-btn:hover {
            color: #fff;
            background: rgba(29, 185, 84, 0.8);
            transform: scale(1.1);
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 16px 8px 8px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .user-profile:hover {
            background: rgba(29, 185, 84, 0.2);
            transform: scale(1.05);
        }

        .user-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(45deg, #1db954, #1ed760);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 2px 10px rgba(29, 185, 84, 0.4);
        }

        .username {
            font-weight: 600;
            font-size: 14px;
        }

        .content-area {
            flex: 1;
            padding: 32px;
            overflow-y: auto;
        }

        .welcome-section {
            text-align: center;
            margin-bottom: 48px;
            padding: 40px 20px;
            background: linear-gradient(135deg, rgba(29, 185, 84, 0.1), rgba(30, 215, 96, 0.05));
            border-radius: 20px;
            border: 1px solid rgba(29, 185, 84, 0.2);
            position: relative;
            overflow: hidden;
        }

        .welcome-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(29, 185, 84, 0.05), transparent);
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%) translateY(-100%) rotate(30deg);
            }

            100% {
                transform: translateX(100%) translateY(100%) rotate(30deg);
            }
        }

        .welcome-section h2 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 12px;
            background: linear-gradient(45deg, #fff, #1ed760);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            z-index: 1;
        }

        .welcome-section p {
            color: #b3b3b3;
            font-size: 18px;
            font-weight: 400;
            position: relative;
            z-index: 1;
        }

        .section {
            margin-bottom: 48px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
        }

        .section-title {
            font-size: 28px;
            font-weight: 700;
            background: linear-gradient(45deg, #fff, #b3b3b3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .view-all {
            color: #1db954;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 20px;
            border: 1px solid #1db954;
            transition: all 0.3s ease;
        }

        .view-all:hover {
            background: #1db954;
            color: #000;
            transform: scale(1.05);
        }

        .song-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 24px;
        }

        .song-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            padding: 20px;
            border-radius: 16px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .song-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(29, 185, 84, 0.1), rgba(30, 215, 96, 0.05));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .song-card:hover::before {
            opacity: 1;
        }

        .song-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3), 0 0 20px rgba(29, 185, 84, 0.2);
            border-color: rgba(29, 185, 84, 0.5);
        }

        .song-image {
            width: 100%;
            height: 180px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #1db954 100%);
            border-radius: 12px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: rgba(255, 255, 255, 0.9);
            position: relative;
            overflow: hidden;
        }

        .song-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .song-card:hover .song-image::after {
            transform: translateX(100%);
        }

        .play-button {
            position: absolute;
            bottom: 12px;
            right: 12px;
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #1db954, #1ed760);
            border: none;
            border-radius: 50%;
            color: #000;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateY(20px) scale(0.8);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 25px rgba(29, 185, 84, 0.4);
        }

        .song-card:hover .play-button {
            transform: translateY(0) scale(1);
            opacity: 1;
        }

        .play-button:hover {
            transform: scale(1.1);
            box-shadow: 0 12px 30px rgba(29, 185, 84, 0.6);
        }

        .song-info {
            margin-bottom: 16px;
        }

        .song-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 6px;
            color: #fff;
            line-height: 1.3;
        }

        .song-artist {
            font-size: 14px;
            color: #b3b3b3;
            font-weight: 500;
        }

        .memory-preview {
            font-size: 13px;
            color: #888;
            font-style: italic;
            background: rgba(0, 0, 0, 0.3);
            padding: 8px 12px;
            border-radius: 8px;
            border-left: 3px solid #1db954;
            margin-top: 12px;
            line-height: 1.4;
        }

        .memory-indicator {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 24px;
            height: 24px;
            background: linear-gradient(45deg, #1db954, #1ed760);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #000;
            font-weight: bold;
            box-shadow: 0 2px 10px rgba(29, 185, 84, 0.4);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        .song-card.has-memory .memory-indicator {
            opacity: 1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 240px;
                position: fixed;
                left: -240px;
                top: 0;
                height: 100vh;
                z-index: 1000;
                transition: left 0.3s ease;
            }

            .sidebar.active {
                left: 0;
            }

            .content-area {
                padding: 20px;
            }

            .welcome-section h2 {
                font-size: 32px;
            }

            .song-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 16px;
            }
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #1db954, #1ed760);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #1ed760, #00d4ff);
        }

        /* Floating Action Button */
        .fab {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #1db954, #1ed760);
            border: none;
            border-radius: 50%;
            color: #000;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 8px 25px rgba(29, 185, 84, 0.4);
            transition: all 0.3s ease;
            z-index: 100;
        }

        .fab:hover {
            transform: scale(1.1) rotate(90deg);
            box-shadow: 0 12px 30px rgba(29, 185, 84, 0.6);
        }
    </style>
</head>

<body>
    <!-- Animated Background -->
    <div class="bg-animation">
        <div class="floating-notes" style="left: 10%; animation-delay: 0s;">♪</div>
        <div class="floating-notes" style="left: 20%; animation-delay: 2s;">♫</div>
        <div class="floating-notes" style="left: 30%; animation-delay: 4s;">♪</div>
        <div class="floating-notes" style="left: 40%; animation-delay: 6s;">♫</div>
        <div class="floating-notes" style="left: 50%; animation-delay: 8s;">♪</div>
        <div class="floating-notes" style="left: 60%; animation-delay: 10s;">♫</div>
        <div class="floating-notes" style="left: 70%; animation-delay: 12s;">♪</div>
        <div class="floating-notes" style="left: 80%; animation-delay: 14s;">♫</div>
        <div class="floating-notes" style="left: 90%; animation-delay: 16s;">♪</div>
    </div>

    <div class="app-container">
        <!-- Sidebar -->
        @include('components.sidebar')

        <!-- Main Content -->
        <div class="main-container">
            <!-- Header -->
            @include('components.header')

            <!-- Content Area -->
            <div class="content-area">
                <!-- Welcome Section -->
                <div class="welcome-section">
                    <h2 id="typing-title"></h2>
                    <p>Nikmati kenangan lewat lagu-lagu favoritmu dan rasakan setiap momen yang tersimpan </p>
                </div>

                @yield('content')
            </div>
        </div>
    </div>

    <!-- Floating Action Button -->
    <button class="fab">
        <i class="fas fa-plus"></i>
    </button>

    <script>
        // Add interactive features
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover sound effect simulation
            const songCards = document.querySelectorAll('.song-card');
            songCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
                });
            });

            // Play button click animation
            const playButtons = document.querySelectorAll('.play-button');
            playButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1.1)';
                    }, 100);
                });
            });

            // Navigation items click effect
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => {
                item.addEventListener('click', function() {
                    navItems.forEach(nav => nav.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // FAB click animation
            const fab = document.querySelector('.fab');
            fab.addEventListener('click', function() {
                this.style.transform = 'scale(0.9) rotate(90deg)';
                setTimeout(() => {
                    this.style.transform = 'scale(1.1) rotate(90deg)';
                }, 100);
            });

            // Dynamic gradient animation
            let gradientAngle = 0;
            setInterval(() => {
                gradientAngle += 1;
                document.body.style.background =
                    `linear-gradient(${gradientAngle}deg, #0c0c0c 0%, #1a1a2e 50%, #16213e 100%)`;
            }, 100);
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Typing effect
            const typingText = "Selamat datang di Galau Base❤️";
            const typingTarget = document.getElementById('typing-title');
            let typingIndex = 0;

            function typeWriter() {
                if (typingIndex < typingText.length) {
                    typingTarget.innerHTML += typingText.charAt(typingIndex);
                    typingIndex++;
                    setTimeout(typeWriter, 60);
                }
            }
            typeWriter();
        });
    </script>
</body>

</html>
