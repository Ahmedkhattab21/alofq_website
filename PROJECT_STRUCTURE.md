# Project Structure

The project follows Laravel's standard structure, with application code grouped
by responsibility.

## Application

- `app/Http/Controllers/Web`: controllers that render website pages.
- `app/Http/Controllers/Api/V1`: version 1 API controllers.
- `app/Models`: Eloquent database models.
- `app/Http/Middleware`: HTTP middleware.

## Routes

- `routes/web.php`: website routes.
- `routes/api.php`: shared API routes and API version registration.
- `routes/api/v1.php`: version 1 API endpoints.

New API development should use `/api/v1`. The original `/api/welcome` and
`/api/user` endpoints remain available as temporary compatibility aliases.

## Frontend

- `resources/views/pages`: complete website pages.
- `resources/views/layouts`: reusable Blade layouts.
- `resources/views/components`: reusable Blade components.
- `resources/views/partials`: shared page fragments.
- `resources/css`: source stylesheets.
- `resources/js`: source JavaScript.

## Data and Tests

- `database/migrations`: database schema changes.
- `database/seeders`: database seed data.
- `database/factories`: test model factories.
- `tests/Feature`: application and endpoint tests.
- `tests/Unit`: isolated unit tests.

## Public and Runtime Files

- `public`: publicly accessible compiled assets and the application entry point.
- `storage`: logs, cache, sessions, and generated files.
- `config`: application configuration.
