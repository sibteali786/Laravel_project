<h1>Users Login</h1>
<form action="user" method="POST">
    @csrf {{-- making sure user information is sent from same site we are on --}}
    <input type="text" name='user' placeholder="please enter username"> <br /> <br />
    <input type="password" name='password' placeholder="please enter password"> <br /> <br />
    <button type="submit">Login</button>
</form>
