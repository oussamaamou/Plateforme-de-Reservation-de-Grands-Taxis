<script src="https://cdn.tailwindcss.com"></script>

@include('layouts.navigation')

<h1> Passager Dashboard</h1>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
        Logout
    </a>
</form>