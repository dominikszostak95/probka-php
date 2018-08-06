<?php require('partials/panel.head.php'); ?>

<?php require('partials/checkPermission.php'); ?>

<?php ($_SESSION['role_id'] == 1) ? require('partials/nav.view.php') : require('partials/nav.u.view.php') ?>

    <div class="col col-lg-6">
        <h3>Dodaj firme</h3>
        <form method="POST" action="/companies/add">

            <div class="form-group">
                <label for="nazwa">Nazwa:</label>
                <input type="text" class="form-control" id="nazwa" name="nazwa" maxlength="50" required>
            </div>

            <div class="form-group">
                <label for="adres">Adres:</label>
                <input type="text" class="form-control" id="adres" name="adres" maxlength="100" required>
            </div>

            <div class="form-group">
                <label for="miasto">Miasto:</label>
                <input type="text" class="form-control" id="miasto" name="miasto" maxlength="50" required>
            </div>

            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="text" pattern="[0-9]+" class="form-control" id="nip" minlength="10" maxlength="10" name="nip" required>
            </div>

            <div class="form-group">
                <label for="kraj">Kraj:</label>
                <input type="text" class="form-control" id="kraj" name="kraj" maxlength="50" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" maxlength="60" placeholder="np. przykladowafirma@gmail.com" required>
            </div>

            <div class="form-group">
                <select name="handlowiec">
                    <?php if ($_SESSION['role_id'] == 1) : ?>
                        <?php foreach ($dane['handlowcy'] as $handlowiec) : ?>
                            <option value="<?= $handlowiec->id ?>"><?= $handlowiec->name ?></option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <option value="<?= $_SESSION['id'] ?>"><?= $_SESSION['name'] ?></option>
                    <?php endif; ?>
                </select>
            </div>

            <div class="form-group">
                <input type="checkbox" name="dane" value="tak">Zgoda na przetwarzanie danych osobowych<br>
                <input type="checkbox" name="reklamy" value="tak">Zgoda na otrzymywanie materiałów reklamowych
            </div>

            <hr>

            <?php require('questionnaire.view.php'); ?>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Dodaj firme</button>
            </div>

        </form>
    </div>

<?php require('partials/footer.php'); ?>