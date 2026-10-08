<?php

it('performs sums', function () {
	helper('sum');

	expect(sum(1, 2))
		->toBe(3)
		->toBeInt()
		->not->toBeString();
});
