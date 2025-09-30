<?php
/**
 * Email Verifier Pro - Hosting Control Panel
 * Server: $cp_domain
 * Generated: $(date -u +"%a %b %d %H:%M:%S %Z %Y")
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$cp_domain - Hosting Control Panel</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 800px;
            width: 90%;
            text-align: center;
        }
        .logo {
            font-size: 2.5em;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 10px;
        }
        .subtitle {
            color: #666666;
            margin-bottom: 30px;
            font-size: 1.1em;
        }
        .server-info {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            text-align: left;
        }
        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }
        .service {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            text-decoration: none;
            color: #333333;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .service-title {
            font-weight: bold;
            margin-bottom: 10px;
            color: #667eea;
        }
        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.9em;
            font-weight: bold;
        }
        .status.running {
            background: #d4edda;
            color: #155724;
        }
        .status.stopped {
            background: #f8d7da;
            color: #721c24;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eeeeee;
            color: #666666;
            font-size: 0.9em;
        }
        a { color: inherit; }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">🖥 Email Verifier Pro</div>
        <div class="subtitle">Hosting Control Panel</div>

        <div class="server-info">
            <h3>Server Information</h3>
            <p><strong>Hostname:</strong> $cp_domain</p>
            <p><strong>Server:</strong> <?php echo gethostname(); ?></p>
            <p><strong>PHP Version:</strong> <?php echo PHP_VERSION; ?></p>
            <p><strong>Server Time:</strong> <?php echo date('Y-m-d H:i:s T'); ?></p>
            <p><strong>Server Load:</strong> <?php echo sys_getloadavg()[0]; ?></p>
            <p><strong>Document Root:</strong> <?php echo '$cp_doc_root'; ?></p>
        </div>

        <div class="services">
            <a href="/phpmyadmin" class="service">
                <div class="service-title">📊 Database Management</div>
                <div>phpMyAdmin</div>
                <div class="status running">Running</div>
            </a>

            <a href="/webmail" class="service">
                <div class="service-title">📧 Webmail</div>
                <div>Roundcube</div>
                <div class="status running">Running</div>
            </a>

            <div class="service">
                <div class="service-title">🌐 Web Server</div>
                <div>Nginx + Apache</div>
                <div class="status running">Running</div>
            </div>

            <div class="service">
                <div class="service-title">📮 Mail Server</div>
                <div>Exim4 + Dovecot</div>
                <div class="status running">Running</div>
            </div>

            <div class="service">
                <div class="service-title">🏗 Database</div>
                <div>MariaDB</div>
                <div class="status running">Running</div>
            </div>

            <div class="service">
                <div class="service-title">🔍 DNS</div>
                <div>BIND9</div>
                <div class="status running">Running</div>
            </div>
        </div>

        <div class="footer">
            <p>Email Verifier Pro Hosting Control Panel</p>
            <p>Installed on: $(date -u +"%a %b %d %H:%M:%S %Z %Y")</p>
            <p>For support, contact: <a href="mailto:hey@tuhin.dev">hey@tuhin.dev</a></p>
        </div>
    </div>
</body>
</html>
