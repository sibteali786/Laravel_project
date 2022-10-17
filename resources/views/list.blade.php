<h1>List of Accounts</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Username</td>
        <td>Address</td>
        <td>Avatar</td>
    </tr>
    @foreach ($accounts as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['username'] }}</td>
            <td>{{ $user['address'] }}</td>
            <td><img src={{ $user['image'] }} alt=""></td>
        </tr>
    @endforeach
</table>


<span>{{ $accounts->links() }}</span>
<style>
    .w-5 {
        display: none;
    }
</style>
