<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registracija</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-card {
            max-width: 400px;
            width: 100%;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
            background: #fff;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #2575fc;
        }
        .btn-primary {
            background: #2575fc;
            border: none;
        }
        .btn-primary:hover {
            background: #1b5ed7;
        }
    </style>
</head>
<body>

<div class="register-card">
    <h3 class="text-center mb-4">Registracija</h3>
    <form method="POST" action="decisionMaker.php">

        <input type="hidden" name="register">

        <div class="mb-3">
            <label for="username" class="form-label">Korisničko ime</label>
            <input type="text" name="username" class="form-control" placeholder="Unesite korisničko ime" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Lozinka</label>
            <input type="password" name="password" class="form-control" placeholder="Unesite lozinku" required>
        </div>

        <div class="mb-3">
            <label for="confirm_password" class="form-label">Potvrdi lozinku</label>
            <input type="password" name="confirm_password" class="form-control" placeholder="Ponovo unesite lozinku" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Registruj se</button>
        </div>

        <p class="text-center mt-3">
            Već imaš nalog? <a href="login.html">Prijavi se</a>
        </p>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
