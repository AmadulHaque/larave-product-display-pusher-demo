# Application Configuration
APP_NAME="Product Real-Time App"
APP_ENV=local
APP_KEY=base64:your_app_key_here
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=product_real_time_app
DB_USERNAME=root
DB_PASSWORD=

# Pusher Configuration for Real-Time Updates
PUSHER_APP_ID=your_pusher_app_id
PUSHER_APP_KEY=your_pusher_app_key
PUSHER_APP_SECRET=your_pusher_app_secret
PUSHER_APP_CLUSTER=your_pusher_cluster

# Broadcast Driver Configuration
BROADCAST_DRIVER=pusher

# Cache and Session Configurations
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync

# Logging Configuration
LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

# Mail Configuration (Optional)
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

# HTTP Client Pool Configuration
HTTP_CLIENT_POOL_MAX_CLIENTS=5

# API Endpoints
FAKE_STORE_API_BASE_URL=https://fakestoreapi.com

# External Services Configuration
EXTERNAL_API_TIMEOUT=10
EXTERNAL_API_CONNECT_TIMEOUT=5