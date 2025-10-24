 # Laravel Breeze with Passport JWT Authentication

Project Laravel yang mengintegrasikan Laravel Breeze untuk authentication web dengan Laravel Passport untuk JWT token API, termasuk refresh token dan logout revoke.

## Setup Project

### 1. Install Dependencies
```bash
composer install
npm install
```

### 2. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Database Setup
```bash
# Configure database in .env file
php artisan migrate

```

### 4. Passport Setup
```bash
php artisan passport:install
php artisan passport:keys
```

### 5. Build Assets
```bash
npm run build
# or for development
npm run dev
```

### 6. Run Server
```bash
php artisan serve
```

## Testing API dengan Postman

### 1. Login (Get Access Token)
- **Method:** POST
- **URL:** http://127.0.0.1:8000/oauth/token
- **Headers:**
  - Content-Type: application/json
- **Body:**
```json
{
  "grant_type": "password",
  "client_id": 2,
  "client_secret": "xMNtrWYauWG5KALR8lqcgHC1c9kJnIFt9y1DYneb",
  "username": "user@example.com",
  "password": "password",
  "scope": "*"
}
```

### 2. Access Protected API
- **Method:** GET
- **URL:** http://127.0.0.1:8000/api/user
- **Headers:**
  - Authorization: Bearer {access_token}

### 3. Refresh Token
- **Method:** POST
- **URL:** http://127.0.0.1:8000/oauth/token
- **Headers:**
  - Content-Type: application/json
- **Body:**
```json
{
  "grant_type": "refresh_token",
  "client_id": 2,
  "client_secret": "xMNtrWYauWG5KALR8lqcgHC1c9kJnIFt9y1DYneb",
  "refresh_token": "{refresh_token}"
}
```

### 4. Logout (Revoke Tokens)
- **Method:** POST
- **URL:** http://127.0.0.1:8000/api/logout
- **Headers:**
  - Authorization: Bearer {access_token}
  - Content-Type: application/json

## Fitur

- ✅ Laravel Breeze untuk web authentication
- ✅ Laravel Passport untuk JWT API authentication
- ✅ Refresh token support
- ✅ Token expiration: Access (15 hari), Refresh (30 hari)
- ✅ Logout dengan revoke semua tokens
- ✅ Password grant untuk mobile/SPA apps

## Catatan

- Client ID 2 digunakan untuk password grant
- Pastikan user sudah terdaftar via web interface 
- Token akan otomatis expire sesuai konfigurasi
- Logout akan revoke semua active tokens user
