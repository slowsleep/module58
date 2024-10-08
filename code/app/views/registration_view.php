<div class="main-content">
    <h1>Регистрация</h1>
    <form class="form" method="post" action="/registration/register" id="registration-form">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?? '' ?>">
        <div class="form__row">
            <label for="reg-username">
                Username:
            </label>
            <input type="text" name="username" id="reg-username">
        </div>
        <div class="form__row">
            <label for="reg-email">
                Email:
            </label>
            <input type="email" name="email" id="reg-email" required>
        </div>
        <div class="form__row">
            <label for="reg-password">
                Пароль:
            </label>
            <input type="password" name="password" id="reg-password" required>
        </div>
        <div class="form__row">
            <label for="reg-password-repeat">
                Повтор пароля:
            </label>
            <input type="password" name="password-repeat" id="reg-password-repeat" required>
        </div>
        <input type="submit" value="Зарегестрироваться">
    </form>

    <?php if (!empty($data['message'])) echo $data['message']; ?>

    <?php if (!empty($data['errors'])): ?>
        <?php foreach ($data['errors'] as $key => $value): ?>
            <p><?= $value ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<script src="/app/assets/js/checkRegistrationFields.js"></script>
