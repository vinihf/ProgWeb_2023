<?php

declare(strict_types=1);

use Leaf\Form;

test('can perform inline validation', function () {
    $value = '';
    expect(Form::test('required', $value))->toBe(false);
});

test('can validate array', function () {
    $itemsToValidate = ['test' => ''];
    expect(Form::validate($itemsToValidate, ['test' => 'required']))->toBe(false);
});

test('can validate array with multiple rules', function () {
    $itemsToValidate = ['test' => ''];
    expect(Form::validate($itemsToValidate, ['test' => 'required|email']))->toBe(false);
});

test('array validation returns validated items on success', function () {
    $itemsToValidate = ['test' => 'mail@example.com'];

    $validatedData = Form::validate($itemsToValidate, ['test' => 'required|email']);

    expect($validatedData)->toBe($itemsToValidate);
});

test('array validation returns false on failure', function () {
    $itemsToValidate = ['test2' => 'wrong'];

    $validatedData = Form::validate($itemsToValidate, ['test2' => 'required|email']);

    expect($validatedData)->toBe(false);
});

test('errors are collected on failure', function () {
    $itemsToValidate = ['test3' => 'wrong'];

    Form::validate($itemsToValidate, ['test3' => 'required|email']);

    expect(Form::errors())->toHaveKey('test3');
});
