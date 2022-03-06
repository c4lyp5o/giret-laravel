<h1>Adding Member</h1><br>
<form action="add" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="text" name="email" placeholder="Email"><br><br>
    <input type="text" name="address" placeholder="Address"><br><br>
    <input type="checkbox" name="sex" value="Male">
    <label for="male">Male</label><br>
    <input type="checkbox" name="sex" value="Female">
    <label for="female">Female</label><br><br>
    <button type="submit">Add member</button>
</form>
