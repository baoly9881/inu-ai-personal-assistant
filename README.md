# INU AI — Personal AI Companion

**Project:** INU-001  
**Version:** 1.0.0 (MVP foundation)  
**Status:** Prototype / local-first demo

INU AI is a bilingual (Vietnamese/English) personal assistant prototype built with HTML, CSS, JavaScript and Capacitor. The first build uses a local Mock AI provider so the app can be tested without a paid AI API.

## MVP features

- Home dashboard with INU Spirit mascot
- AI chat with deterministic Mock AI responses
- User-controlled AI Memory (view/add/delete)
- Journal CRUD (create/read/update/delete)
- Reminder CRUD and in-app due reminder checks
- Vietnamese / English language toggle
- Responsive mobile-first UI
- PHP MVC-style API foundation and MySQL schema

## Project structure

```text
mobile/                 Capacitor web app
  src/index.html
  src/styles.css
  src/app.js
backend/                PHP API foundation
  public/index.php
  app/Core/Router.php
  app/Controllers/HealthController.php
  config/database.php
database/schema.sql     MySQL schema
docs/                   Product and API specifications
.github/workflows/      Basic source validation workflow
```

## Run the web prototype

Requirements: Node.js 20+ and npm.

```bash
cd mobile
npm install
npm run dev
```

Open the local Vite URL shown in the terminal.

## Add Android platform

Requirements: Node.js, Java 17, Android SDK and Android Studio (or a compatible cloud build environment).

```bash
cd mobile
npm install
npx cap add android
npm run build
npx cap sync android
npx cap open android
```

The Android project is generated locally after `cap add android`; it is not committed in this starter archive. Build an APK/AAB from Android Studio or a configured CI runner.

## PHP API foundation

Requirements: PHP 8.2+ and MySQL 8+.

1. Create a database and import `database/schema.sql`.
2. Copy `backend/config/database.example.php` to `backend/config/database.php` and set local credentials.
3. From `backend`, run:

```bash
php -S 127.0.0.1:8080 -t public
```

Health check: `GET /api/health`.

The API foundation deliberately does not yet implement production authentication, cloud synchronization or a paid AI provider. Those are follow-on tasks. Never put AI provider keys in the mobile app.

## GitHub setup from a phone

1. Create a **new empty private repository** named `inu-ai-personal-assistant` under your GitHub account.
2. Upload the contents of this archive (not the enclosing `inu-ai-mvp` folder) to the repository root using GitHub's web interface.
3. Open `mobile/` and `backend/` files in GitHub to review them. For browser editing, use `github.dev`.

## Privacy and security notes

- The prototype stores demo data in browser localStorage on the device/browser profile.
- Do not enter sensitive personal information into the Mock AI demo.
- The PHP sample is a development foundation, not production-hardened.
- Before public release, implement authentication, authorization, rate limits, CSRF/CORS policy as appropriate, secure secrets management, account/data deletion, privacy disclosures and Google Play policy checks.
