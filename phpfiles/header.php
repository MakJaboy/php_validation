 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafetrack - Coffee Landing Page</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --coffee-orange: #d29650;
            --coffee-dark: #1a0f0a;
            --coffee-brown: #2d1810;
            --coffee-light: #a08060;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--coffee-dark);
            color: white;
            overflow-x: hidden;
        }

        
        .navbar {
            background-color: transparent !important;
            padding: 20px 0;
        }

        .navbar-brand {
            font-weight: bold;
            color: var(--coffee-orange) !important;
            font-size: 24px;
            letter-spacing: 2px;
        }

        .nav-link {
            color: white !important;
            font-size: 16px;
            margin: 0 15px;
            transition: color 0.3s;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--coffee-orange) !important;
        }

        
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #0d0805 0%, #1a0f0a 40%, #2d1810 100%);
            display: flex;
            align-items: center;
            position: relative;
            padding: 80px 0;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 70% 50%, rgba(45, 24, 16, 0.5) 0%, transparent 70%);
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title-coffee {
            font-size: 80px;
            font-weight: 900;
            color: var(--coffee-orange);
            line-height: 1;
            margin-bottom: 0;
            letter-spacing: 3px;
        }

        .hero-title-landing {
            font-size: 60px;
            font-weight: 900;
            color: white;
            line-height: 1.1;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        .hero-divider {
            width: 100%;
            max-width: 500px;
            height: 2px;
            background-color: white;
            margin-bottom: 25px;
        }

        .hero-description {
            font-size: 16px;
            color: #c0a080;
            line-height: 1.8;
            max-width: 450px;
            margin-bottom: 30px;
        }

        .btn-learn-more {
            background-color: var(--coffee-orange);
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 2px;
            border-radius: 30px;
            text-transform: uppercase;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-learn-more:hover {
            background-color: #e0a860;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(210, 150, 80, 0.3);
        }

        
        .social-icons {
            margin-top: 40px;
        }

        .social-icons a {
            color: white;
            font-size: 24px;
            margin-right: 20px;
            transition: color 0.3s;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: var(--coffee-orange);
        }

        
        .hero-image-container {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .coffee-setup-img {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 20px 40px rgba(0,0,0,0.5));
        }

        
        .about-section {
            background: linear-gradient(135deg, #2d1810 0%, #1a0f0a 100%);
            padding: 80px 0;
            border-top: 1px solid rgba(210, 150, 80, 0.2);
        }

        .about-title {
            color: var(--coffee-orange);
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .about-text {
            color: #c0a080;
            font-size: 16px;
            line-height: 1.8;
        }

        .about-text strong {
            color: white;
        }

        .founder-card {
            background: rgba(30, 20, 15, 0.8);
            border: 1px solid rgba(210, 150, 80, 0.2);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
        }

        .founder-icon {
            font-size: 80px;
            color: var(--coffee-orange);
            margin-bottom: 15px;
        }

        .founder-name {
            color: white;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .founder-role {
            color: var(--coffee-orange);
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        
        .features-section {
            background-color: #0d0805;
            padding: 80px 0;
        }

        .section-title {
            color: var(--coffee-orange);
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 50px;
        }

        .feature-card {
            background: rgba(45, 24, 16, 0.5);
            border: 1px solid rgba(210, 150, 80, 0.15);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            height: 100%;
            transition: all 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: var(--coffee-orange);
            box-shadow: 0 10px 30px rgba(210, 150, 80, 0.1);
        }

        .feature-icon {
            font-size: 40px;
            color: var(--coffee-orange);
            margin-bottom: 20px;
        }

        .feature-title {
            color: white;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .feature-text {
            color: #a08060;
            font-size: 14px;
            line-height: 1.7;
        }

        
        .cta-section {
            background: linear-gradient(135deg, var(--coffee-orange) 0%, #a07030 100%);
            padding: 60px 0;
            text-align: center;
        }

        .cta-title {
            color: white;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .cta-text {
            color: rgba(255,255,255,0.9);
            font-size: 16px;
            margin-bottom: 25px;
        }

        .btn-cta {
            background-color: var(--coffee-dark);
            color: white;
            border: 2px solid white;
            padding: 12px 35px;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
        }

        .btn-cta:hover {
            background-color: white;
            color: var(--coffee-dark);
        }

        
        footer {
            background-color: #0a0604;
            color: #806040;
            padding: 30px 0;
            text-align: center;
            border-top: 1px solid rgba(210, 150, 80, 0.1);
        }

        footer a {
            color: var(--coffee-orange);
            text-decoration: none;
        }

        
        @media (max-width: 992px) {
            .hero-title-coffee {
                font-size: 60px;
            }
            .hero-title-landing {
                font-size: 45px;
            }
            .hero-image-container {
                margin-top: 40px;
            }
        }

        @media (max-width: 768px) {
            .hero-title-coffee {
                font-size: 48px;
            }
            .hero-title-landing {
                font-size: 36px;
            }
            .nav-link {
                margin: 5px 0;
            }
        }
    </style>