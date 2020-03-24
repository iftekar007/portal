<?php
/**
 * Created by PhpStorm.
 * User: soumi
 * Date: 20-03-2020
 * Time: 12:07
 */?>
<form method="POST" action="submit">
    <label>User name : </label>
    <input type="text" name="username" value="">
    <label>Password : </label>
    <input type="password" name="password" value="">
   {{@csrf_field()}}
    <br><br>
    <button type="submit" value="Submit">Submit</button>

</form>
