<?php defined('ACCESS_GRANTED') or die('Accès interdit'); ?>
<?php require_once __DIR__ . '/../partials/head.php'; ?>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : DEFAULT_THEME; ?>-theme">
    <?php require_once __DIR__ . '/../partials/header.php'; ?>
    
    <main>
        <?php echo $content ?? ''; ?>
    </main>
    
    <?php require_once __DIR__ . '/../partials/footer.php'; ?>
    
    <!-- Scripts -->
    <script src="/assets/js/main.js"></script>
</body>
</html> 