[API_SPEC.md](https://github.com/user-attachments/files/34574572/API_SPEC.md)
# INU AI API Specification — Draft 1.0

Base path: `/api/v1` (planned). All requests and responses use JSON over HTTPS in production.

## Health
- `GET /api/health`
- Response: `{ "ok": true, "service": "inu-ai-api" }`

## Planned endpoints

| Method | Endpoint | Purpose |
|---|---|---|
| POST | `/api/v1/auth/register` | Create account |
| POST | `/api/v1/auth/login` | Authenticate |
| POST | `/api/v1/auth/logout` | Revoke session/token |
| POST | `/api/v1/ai/chat` | Send a chat message |
| GET | `/api/v1/ai/memories` | List current user's memories |
| POST | `/api/v1/ai/memories` | Explicitly save a memory |
| DELETE | `/api/v1/ai/memories/{id}` | Delete one memory |
| GET/POST | `/api/v1/journal` | List/create journal entries |
| GET/PATCH/DELETE | `/api/v1/journal/{id}` | Read/update/delete entry |
| GET/POST | `/api/v1/reminders` | List/create reminders |
| PATCH/DELETE | `/api/v1/reminders/{id}` | Update/delete reminder |

## Planned chat request

```json
{
  "conversation_id": "optional-id",
  "message": "Help me plan my day",
  "language": "en"
}
```

## Planned chat response

```json
{
  "conversation_id": "conversation-id",
  "message": {
    "role": "assistant",
    "content": "Let's choose three priorities..."
  },
  "provider": "mock"
}
```

## Security requirements before production

- Authenticate every user-owned resource request.
- Enforce ownership at query level (`user_id` scope).
- Validate and normalize all inputs server-side.
- Rate-limit chat and authentication endpoints.
- Keep provider API keys in server-side environment variables or a secret manager.
- Use parameterized SQL queries.
- Define strict CORS allowlist and HTTPS-only deployment.
- Implement account deletion and retention policy.
