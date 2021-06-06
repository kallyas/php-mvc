<?php
echo "Register page"
?>
<form action="" method="post" style="display: flex; flex-direction: column; width: 30%;">
    <label for="firstname">Firstname</label>
    <input type="text" name="firstname">
    <label for="last">Lastname</label>
    <input type="text" name="lastname">
    <label for="email">Email</label>
    <input type="email" name="email">
    <label for="password">Password</label>
    <input type="password" name="password">
    <label for="subject">confirm password</label>
    <input type="password" name="confirmPassword">
    <input type="submit" value="submit" style="width: 100px; height: 2rem; margin-top: 5px;">
</form>