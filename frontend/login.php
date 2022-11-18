<?php require('includes/header.inc'); ?>

<h1>
    Login account
</h1>
<form action="/backend/authentication/login.php" method="post">
    <table>
        <tr>
            <td>
                <label for="">Email</label>
            </td>
            <td>
                <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </td>
        </tr>
        <tr>
            <td>
                <label for="">Password</label>
            </td>
            <td>
                <input type="password" name="password" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary">Submit</button>
    <p>Don't have an account,
        <a href="/frontend/register.php">Register</a>
    </p>
</form>
<?php require('includes/footer.inc'); ?>