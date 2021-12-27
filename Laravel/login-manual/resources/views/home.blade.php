{{ auth()->check() ? 'saya udah login' : 'saya belum login' }}
<br>
<br>
Email Saya : {{ auth()->check() ? auth()->user()->email  : '-'}}
<br>
<br>
<form action="{{ url('/logout') }}" method="post">
    @csrf
    <button type="hidden">
        Logout

    </button>

</form>