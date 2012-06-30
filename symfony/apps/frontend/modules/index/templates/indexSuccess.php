<?php use_helper('I18N') ?>
<div class="login_form">
    <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
        <table>
            <tbody>
                <?php echo $login_form ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="<?php echo __('Signin', null, 'sf_guard') ?>" />

                        <?php $routes = $sf_context->getRouting()->getRoutes() ?>
                        <?php if (isset($routes['sf_guard_forgot_password'])): ?>
                            <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
                        <?php endif; ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</div>
<?php /*
<div class="register_form">
    <form action="<?php echo url_for('@sf_guard_register') ?>" method="post">
        <table>
            <?php echo $registration_form ?>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="register" value="<?php echo __('Register', null, 'sf_guard') ?>" />
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</div> */ ?>