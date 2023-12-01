<!-- markdownlint-disable no-inline-html -->
<p align="center">
  <br><br>
  <img src="https://leafphp.netlify.app/assets/img/leaf3-logo.png" height="100"/>
  <h1 align="center">Leaf Form Module</h1>
  <br><br>
</p>

# Leaf PHP

[![Latest Stable Version](https://poser.pugx.org/leafs/form/v/stable)](https://packagist.org/packages/leafs/form)
[![Total Downloads](https://poser.pugx.org/leafs/form/downloads)](https://packagist.org/packages/leafs/form)
[![License](https://poser.pugx.org/leafs/form/license)](https://packagist.org/packages/leafs/form)

Leaf's form validation functionality packaged as a serve-yourself module.

## Installation

You can easily install Leaf using the Leaf CLI:

```bash
leaf install form
```

Or via [Composer](https://getcomposer.org/).

```bash
composer require leafs/form
```

## Basic Usage

```php
<?php

$data = [
  'name' => 'Full Name',
  'email' => 'example@example.com',
  'password' => 'password1234',
];

$success = form()->validate($data, [
  'name' => 'required',
  'email' => 'required|email',
  'password' => 'required|min:8'
]);

if ($success) {
  // do something
} else {
  // get errors
  $errors = form()->errors();
}
```
