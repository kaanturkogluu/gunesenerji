<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni İletişim Mesajı</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #0066cc 0%, #00a651 100%);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 0 0 8px 8px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: bold;
            color: #0066cc;
            margin-bottom: 5px;
        }
        .field-value {
            background: white;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #e0e0e0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>🔔 Yeni İletişim Formu Mesajı</h2>
        <p>UKPower Web Sitesi</p>
    </div>
    
    <div class="content">
        <p>İletişim formundan yeni bir mesaj aldınız:</p>
        
        <div class="field">
            <div class="field-label">📝 Ad Soyad:</div>
            <div class="field-value">{{ $data['name'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">📧 E-posta:</div>
            <div class="field-value">
                <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
            </div>
        </div>
        
        @if(!empty($data['phone']))
        <div class="field">
            <div class="field-label">📞 Telefon:</div>
            <div class="field-value">
                <a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a>
            </div>
        </div>
        @endif
        
        @if(!empty($data['subject']))
        <div class="field">
            <div class="field-label">💼 Konu:</div>
            <div class="field-value">{{ $data['subject'] }}</div>
        </div>
        @endif
        
        <div class="field">
            <div class="field-label">💬 Mesaj:</div>
            <div class="field-value">{{ $data['message'] }}</div>
        </div>
        
        <p style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd;">
            <strong>👉 Yanıtlamak için:</strong><br>
            <a href="mailto:{{ $data['email'] }}" style="color: #0066cc;">{{ $data['email'] }}</a> adresine email gönderin.
        </p>
    </div>
    
    <div class="footer">
        <p>Bu email <strong>UKPower</strong> web sitesinden otomatik olarak gönderilmiştir.</p>
        <p>© {{ date('Y') }} UKPower - Tüm hakları saklıdır.</p>
    </div>
</body>
</html>

