<?php

test('can access home and see home title')->get('/')->assertSee('Home');
