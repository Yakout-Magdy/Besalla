<?php
$users = \App\Models\User::all();
echo "<pre>";
print_r($users->toArray());
?>
