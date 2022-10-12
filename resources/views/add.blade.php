<h1>Add Member</h1>
@if (session('user'))
    <h3 style="color:green">{{ session('user') }} user has been added</h3>
@endif
<form action="addmember" method="POST">
    @csrf {{-- making sure user information is sent from same site we are on --}}
    <input type="text" name='user' placeholder="please enter username"> <br /> <br />
    <input type="password" name='password' placeholder="please enter password"> <br /> <br />
    <input type="email" name='email' placeholder="please enter email"> <br /> <br />
    <button type="submit">Add Memeber</button>
</form>
