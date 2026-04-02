<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['style']) ?>
    <?= $this->Html->css(['iou']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<body>

    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>

    <nav class="navbar">

        <?= $this->Html->image('home.svg', [
            'alt' => 'homepage', 
            'width' => '22', 
            'height' => '22',
            'url' => [
            'controller' => 'activities', 
            'action' => 'index']]) ?>

        <?= $this->Html->image('loupe.svg', [
            'alt' => 'homepage', 
            'width' => '22',             
            'height' => '22', 
            'url' => [
            'controller' => 'categories', 
            'action' => 'index']]) ?>

        <?= $this->Html->image('chat.svg', [
            'alt' => 'homepage', 
            'width' => '22', 
            'height' => '22', 
            'url' => [
            'controller' => '', 
            'action' => '']]) ?>

        <?= $this->Html->image('fav.svg', [
            'alt' => 'homepage', 
            'width' => '22', 
            'height' => '22', 
            'url' => [
            'controller' => 'favorites', 
            'action' => 'index']]) ?>

        <?= $this->Html->image('user.svg', [
            'alt' => 'homepage', 
            'width' => '22', 
            'height' => '22', 
            'url' => [
            'controller' => 'users', 
            'action' => 'view']]) ?>

    </nav>
</body>

</html>