[PRODUCT_SPEC.md](https://github.com/user-attachments/files/34574582/PRODUCT_SPEC.md)
# INU AI — Product Requirements & MVP Specification

- Project ID: INU-001
- Product: INU AI — Your Personal AI Companion
- Version: 1.0.0
- Target: Android first; Vietnamese and English
- Budget baseline: 0 VND for prototype work; paid infrastructure and store fees excluded
- Client: HTML5/CSS/JavaScript + Capacitor
- Backend: PHP MVC-style REST API
- Database: MySQL

## Product vision

A friendly personal AI companion that helps people think, write, remember, and organize everyday tasks. INU is represented by a gentle spirit mascot. The product must remain useful even when AI services are unavailable.

## MVP personas and jobs

1. A user who wants to ask everyday questions and keep a conversation history.
2. A user who wants to save explicitly selected facts as personal memory.
3. A user who wants a private place to write and organize journal entries.
4. A user who wants reminders that do not depend on AI availability.

## MVP screens

### Home
- Greeting and date
- INU Spirit status
- Quick action to AI chat
- Today's journal and reminder summaries
- Bottom navigation: Home, AI, Journal, Tasks, Profile/settings

### AI Chat
- Message list, composer, send action
- Mock AI provider for offline development
- Conversation history in local storage
- Memory shortcut
- Clear indication that this is a demo provider

### Journal
- Create, view, edit, delete entries
- Search entries
- Store created/updated timestamps
- No automatic transfer of journal content to AI

### Reminder
- Create, edit, complete, delete reminders
- Date/time and priority
- Due reminder banner while app is open
- Local notification integration is a later Capacitor task; browser demo does not guarantee background notifications

## Memory principles

- Only save a memory after an explicit user action.
- Show saved memories in a dedicated list.
- Allow individual memory deletion.
- Do not infer sensitive attributes or automatically convert all chat messages into memory.

## Localization

- Vietnamese (`vi`) and English (`en`).
- Default to Vietnamese in the prototype; user can switch language in settings.
- All interface labels must use translation keys in `mobile/src/app.js`.

## Non-functional requirements

- Mobile-first responsive layout.
- Keyboard-accessible controls and visible focus states.
- No provider secrets in client code.
- Local data isolated by browser profile in prototype.
- API errors must not block journal/reminder access.

## MVP acceptance criteria

- User can navigate all four primary screens.
- User can send a chat message and receive a Mock AI response.
- User can add and delete a memory.
- User can create, edit, search and delete a journal entry.
- User can create, complete and delete a reminder.
- User can switch Vietnamese/English without reload.
- App layout remains usable at 360px width.
- `npm run build` completes successfully.

## Explicitly out of scope for MVP

Production account authentication, cloud sync, real AI provider, voice calling, subscription billing, tarot/astrology, analytics, remote push notifications and Google Play publication.
