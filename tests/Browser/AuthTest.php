<?php

it('can access login page and submit form', function () {
	visit(url_to('auth.index'))
  ->assertSee('Login')
  ->type('email', 'meuemail@email.com.br')
  ->type('password', '123')
  ->press('Entrars');
});
