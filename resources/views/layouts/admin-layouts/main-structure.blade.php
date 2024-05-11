<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_css/dashboard.css') }}">
    <title>Admin Dashboard</title>
</head>
<body>
    @include('layouts.admin-layouts.navigationbar')
    


    <script>
        function changeColor(element) {
            // Remove 'active' class from all links
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                link.style.backgroundColor = ''; // Remove background color
            });
    
            // Add 'active' class to the clicked link
            element.classList.add('active');
            element.style.backgroundColor = 'black'; // Set background color

        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
