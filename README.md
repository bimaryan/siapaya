# Register Controller

This Laravel controller handles the registration of new users in the application. It includes methods for displaying the registration form and storing new user data in the database.

---

## Features

-   Validates user input to ensure data integrity.
-   Hashes passwords securely using Laravel's built-in `Hash` facade.
-   Prevents duplicate phone numbers in the `users` table.
-   Redirects users to the login page upon successful registration.
-   Provides success feedback to users.

---

## Controller Methods

### **index()**

-   Displays the registration form.
-   Returns the `Pages.Auth.Daftar.index` view.

```php
public function index()
{
    return view('Pages.Auth.Daftar.index');
}
```

### **store(Request \$request)**

-   Handles the registration process.
-   Validates the following fields:
    -   `name`: Required, string, max length 255.
    -   `password`: Required, string, confirmed, min length 6.
    -   `phone`: Required, string, max length 15, unique in the `users` table.
-   Creates a new user record in the `users` table with hashed password.
-   Redirects to the login page with a success message.

```php
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'password' => 'required|string|confirmed|min:6',
        'phone' => 'required|string|max:15|unique:users,phone',
    ]);

    User::create([
        'name' => $request->name,
        'password' => Hash::make($request->password),
        'phone' => $request->phone,
    ]);

    return redirect()->route('masuk.index')->with('berhasil', 'Selamat, Anda berhasil mendaftar!');
}
```

---

## Prerequisites

-   **Laravel Framework**: Ensure the Laravel framework is installed and configured.
-   **Database Migration**: Confirm the `users` table includes the following columns:
    -   `name`
    -   `password`
    -   `phone` (unique column)

Add the `phone` column if not present:

```php
Schema::table('users', function (Blueprint $table) {
    $table->string('phone')->unique()->nullable();
});
```

-   **Password Confirmation Input**: Ensure the registration form includes a field for confirming the password.

---

## Validation Rules

| Field      | Rules                                   |
| ---------- | --------------------------------------- |
| `name`     | Required, string, max:255               |
| `password` | Required, string, confirmed, min:6      |
| `phone`    | Required, string, max:15, unique\:users |

---

## Routes

Add the following routes to handle registration:

```php
use App\Http\Controllers\WEb\Auth\RegisterController;

Route::get('/register', [RegisterController::class, 'index'])->name('daftar.index');
Route::post('/register', [RegisterController::class, 'store'])->name('daftar.store');
```

---

## Usage

1. Navigate to the registration page using `/register`.
2. Fill in the registration form fields (name, password, phone).
3. Submit the form.
4. If successful, you will be redirected to the login page with a success message.

---

## Example Success Message

Upon successful registration, users will see:

```
Selamat, Anda berhasil mendaftar!
```
