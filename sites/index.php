<?php
// Sample website for $domain
\$domain = '$domain';
\$db_host = 'localhost';
\$db_name = '$database_name';
\$db_user = '$database_user';
\$email = '$email_account';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to <?php echo \$domain; ?></title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; background: #f5f5f5; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .header { text-align: center; margin-bottom: 30px; }
        .info-box { background: #e8f4f8; padding: 15px; border-radius: 5px; margin: 15px 0; }
        .success { background: #d4edda; border-left: 4px solid #28a745; }
        .warning { background: #fff3cd; border-left: 4px solid #ffc107; }
        .footer { text-align: center; margin-top: 30px; color: #666; }
        h1 { color: #333; }
        h2 { color: #0066cc; }
        .credential { font-family: monospace; background: #f8f9fa; padding: 5px; border-radius: 3px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🎉 Welcome to <?php echo \$domain; ?>!</h1>
            <p>Your domain has been successfully configured!</p>
        </div>
        
        <div class="info-box success">
            <h2>[SUCCESS] Domain Configuration Complete</h2>
            <p>Your website is now live and ready for your content!</p>
        </div>
        
        <div class="info-box">
            <h2>📊 Server Information</h2>
            <p><strong>Domain:</strong> <?php echo \$domain; ?></p>
            <p><strong>Document Root:</strong> <span class="credential">$domain_dir/public_html</span></p>
            <p><strong>System User:</strong> <span class="credential">$system_user</span></p>
            <p><strong>Database:</strong> <span class="credential"><?php echo \$db_name; ?></span></p>
            <p><strong>DB User:</strong> <span class="credential"><?php echo \$db_user; ?></span></p>
            <?php if (!empty('$email_account')): ?>
            <p><strong>Email Account:</strong> <span class="credential"><?php echo \$email; ?></span></p>
            <?php endif; ?>
            <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
            <p><strong>Server Time:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
        </div>
        
        <div class="info-box warning">
            <h2>🔒 Security Notice</h2>
            <p><strong>Important:</strong> This is a sample page. Please replace it with your actual website content.</p>
            <p>Database credentials and other sensitive information are stored securely in:</p>
            <p><span class="credential">/opt/emailverifierpro/domains/$domain/</span></p>
        </div>
        
        <div class="info-box">
            <h2>🚀 Next Steps</h2>
            <ul>
                <li>Upload your website files to: <span class="credential">$domain_dir/public_html/</span></li>
                <li>Configure your application with the database credentials</li>
                <?php if (!empty('$email_account')): ?>
                <li>Access webmail at: <a href="$protocol://$domain/webmail">$protocol://$domain/webmail</a></li>
                <?php endif; ?>
                <li>Monitor logs in: <span class="credential">$domain_dir/logs/</span></li>
                <li>Backups are automatically created in: <span class="credential">$domain_dir/backups/</span></li>
            </ul>
        </div>
        
        <div class="footer">
            <p>Powered by Email Verifier Pro Server Stack</p>
            <p>For support, contact: <a href="mailto:hey@tuhin.dev">hey@tuhin.dev</a></p>
        </div>
    </div>
</body>
</html>
