<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <title><?=$title?></title>
</head>

<body data-bs-theme="light">
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">StudyHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link text-white hover-effect active" href="#questions">Questions</a></li>
                    <li class="nav-item"><a class="nav-link text-white hover-effect" href="#users">Users</a></li>
                    <li class="nav-item"><a class="nav-link text-white hover-effect" href="#modules">Modules</a></li>
                    <li class="nav-item"><a class="nav-link text-white hover-effect" href="#contact">Contact</a></li>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Information</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trophy me-2"></i>Achievements</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-outline-light" id="themeToggle" onclick="toggleTheme()">
                        <i class="bi bi-moon-stars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <main>
    <?=$output;?>
    </main>
    
    <footer class="footer mt-5 py-4 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; IJDB 2025. All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline mb-0 text-end">
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none hover-effect">About</a></li>
                        <li class="list-inline-item mx-3"><a href="#" class="text-white text-decoration-none hover-effect">Terms of Service</a></li>
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none hover-effect">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleTheme() {
            const body = document.body;
            const icon = document.querySelector('#themeToggle i');
            if (body.getAttribute('data-bs-theme') === 'light') {
                body.setAttribute('data-bs-theme', 'dark');
                icon.classList.remove('bi-moon-stars');
                icon.classList.add('bi-sun');
            } else {
                body.setAttribute('data-bs-theme', 'light');
                icon.classList.remove('bi-sun');
                icon.classList.add('bi-moon-stars');
            }
        }
    </script>
</body>
</html>
