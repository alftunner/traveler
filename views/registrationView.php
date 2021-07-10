<div class="row">
    <form action="../controllers/registrationController.php" method="post" class="col-md-4 offset-4 mt-5">
        <div class="mb-3">
            <label for="inputLogin" class="form-label">Login</label>
            <input name="login" class="form-control" id="inputLogin">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input name="password" class="form-control" id="inputPassword1">
        </div>
        <div class="mb-3">
            <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
            <input name="confirm" class="form-control" id="inputConfirmPassword">
        </div>
        <button name="addNewUser" value="Добавить" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>