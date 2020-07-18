<?php
use Framework\Translator\SimpleTranslator as Translator;
?>

<div class='auth'>

    <div class='container'>

        <div class='row'>

            <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12 auth-register-form'>

                <h1 class='text-center'><?= ucwords($this->data['title']); ?></h1>

                <?php

                echo $this->data['form'];

                ?>

                <br />

                <a href='<?= Application['paths']['url'] . '/auth/login' ?>'><?= Translator::translate('Already have account! Login here')?></a>

            </div>

        </div>

    </div>

</div>