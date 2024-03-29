<div id="logsignModal" class="modal">
    <span class="closeBtn" onclick="closeModal()">&times;</span>
    <div class="signupPanel-container">
        <div class="panelMain">
            <input type="checkbox" id="chk" aria-hidden="true">

            <div class="signup">
                <form class="signupPanel" action="process/process-signup.php" method="post" id="signup" novalidate>
                    <label for="chk" aria-hidden="true">Sign up</label>
                    <p class="signupPanel-moreInfo">Click Login if you have already signed up</p>
                    <?php if (!empty($_SESSION['form_errors']['name'])): ?>
                        <span class="warning-message"><?= $_SESSION['form_errors']['name'] ?></span>
                    <?php endif; ?>
                    <input type="text" name="name" id="name" placeholder="Name" autocomplete="off" required>

                    <?php if (!empty($_SESSION['form_errors']['email'])): ?>
                        <span class="warning-message"><?= $_SESSION['form_errors']['email'] ?></span>
                    <?php endif; ?>
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>

                    <?php if (!empty($_SESSION['form_errors']['password'])): ?>
                        <span class="warning-message"><?= $_SESSION['form_errors']['password'] ?></span>
                    <?php endif; ?>
                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>

                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password" autocomplete="off" required>
                    <button>Sign up</button>
                </form>
            </div>
            <div class="login">
                <form class="loginPanel" action="process/process-login.php" method="post" id="login">
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" placeholder="Email" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    <button>Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
