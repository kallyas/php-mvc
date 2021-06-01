<?php

echo "Contact page!";

?>

<form action="" method="post" style="display: flex; flex-direction: column; width: 30%;">
    <label for="subject">Subject</label>
    <input type="text" name="subject">
    <label for="email">Email</label>
    <input type="email" name="email">
    <label for="body">Body</label>
    <textarea name="body" cols="30" rows="10"></textarea>
    <input type="submit" value="submit" style="width: 100px; height: 2rem; margin-top: 5px;">
</form>