<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/app.css">
</head>
<body class="bg-dark text-white">
<div style="margin: 0 auto;
            max-width: 1240px;">
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom text-white bg-dark">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none text-white bg-dark">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">My progect</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item text-white"><a href="/review" class="nav-link text-white">Request</a></li>
        <li class="nav-item text-white"><a href="/about" class="nav-link text-white">About</a></li>
      </ul>
    </header>
@yield('other_content')



</div>   



</body>
</html>