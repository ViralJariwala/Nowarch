<html>

<head>
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
</head>
<br>
<br>
<div class="cont">
    <div class="form sign-in">
    <form name="login_form" method="POST" action="login.php">
        <h2>Welcome</h2>
        <label>
            <span>Email</span>
            <input type="email" name="email" />
        </label>
        <label>
            <span>Password</span>
            <input type="password"  name="pass" />
        </label>
        <p class="forgot-pass">Forgot password?</p>
        <button type="submit" name="login" class="submit">Sign In</button>
</form>

    </div>
    <div class="sub-cont">
        <div class="img">
            <div class="img__text m--up">

                <h3>Don't have an account? Please Sign up!<h3>
            </div>
            <div class="img__text m--in">

                <h3>If you already has an account, just sign in.<h3>
            </div>
            <div class="img__btn">
                <span class="m--up">Sign Up</span>
                <span class="m--in">Sign In</span>
            </div>
        </div>
        <div class="form sign-up">
            <form name="reg_form" method="POST" action="reg.php" onsubmit="return validate()">
                <h2>Create your Account</h2>
                <label>
                    <span>Name</span>
                    <input type="text" name="name" />
                </label>
                <label>
                    <span>Phone No</span>
                    <input type="int" name="phno" maxlength="10" minlength="10" />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" id="pass" name="pass" />
                </label>

                <button type="submit" name="submit" class="submit">Sign Up</button>
            </form>

        </div>
    </div>
</div>

<script>
    document.querySelector('.img__btn').addEventListener('click', function() {
        document.querySelector('.cont').classList.toggle('s--signup');
    });
</script>
<script>
    function validate() {
        var fname = document.reg_form.name;
        var phno = document.reg_form.phno;
        var pass = document.reg_form.pass;
        if (fname.value.length <= 0) {
            alert("Name is required");
            fname.focus();
            return false;
        }
        if (phno.value.length < 0) {
            alert("Phone No is required");
            phno.focus();
            return false;
        }
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(reg_form.email.value)) {
            return (true)
        }
        alert("Enter Valid Email !")
        return (false)

        if (pass.value.length < 0) {
            alert("Password is required");
            pass.focus();
            return false;
        }
    }
</script>