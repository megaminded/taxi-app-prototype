<?php require('includes/header.inc'); ?>

<h1>
    Register an account
</h1>
<form action="/backend/authentication/register.php" method="post">
    <table>
        <tr>
            <td>
                <label for="">Full name</label>
            </td>
            <td>
                <input type="text" name="full_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </td>
        </tr>
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
    <p>Already have an account,
        <a href="/frontend/login.php">Login</a>
    </p>
</form>
<?php require('includes/footer.inc'); ?>