<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               
                   @auth
                    <div class="d-flex">
                    <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard" wire:navigate="dashboard">Dashboard</a>
                    </li>
                   
                    </ul>
                    <livewire:logout/>
                  
                    </div>
                    @endauth
                   
                    @guest
                    <div class="d-flex">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/login" wire:navigate="login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register" wire:navigate="register">Register</a>
                            </li>
                           
                        </ul>
                      
                    </div>
                    @endguest
            </div>
        </div>
    </nav>
    @if (session('message'))       
       <div class="row justify-content-center text-center mt-3">
        <div class="col-8">
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        </div>
       </div>
     
    @endif
    

    {{ $slot }}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>