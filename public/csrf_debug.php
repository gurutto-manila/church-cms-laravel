<html>
<head>
    <title>CSRF Debug Test</title>
</head>
<body>
    <h2>Test 1: Check Session Cookie</h2>
    <pre>
Session Cookie Name: <?php echo config('session.cookie'); ?>
Session Driver: <?php echo config('session.driver'); ?>
APP_KEY Set: <?php echo env('APP_KEY') ? '✓ Yes' : '✗ No'; ?>
    </pre>

    <h2>Test 2: Session Data</h2>
    <form method="GET" action="">
        <button type="submit">Check Session</button>
    </form>

    <?php if (isset($_GET['check'])): ?>
    <pre>
Session ID: <?php echo session()->getId(); ?>
Has CSRF Token: <?php echo session()->has('_token') ? '✓ Yes' : '✗ No'; ?>
CSRF Token Value: <?php echo session()->token(); ?>
Session Data: <?php echo json_encode(session()->all(), JSON_PRETTY_PRINT); ?>
    </pre>
    <?php endif; ?>

    <h2>Test 3: Login Form with CSRF</h2>
    <form method="POST" action="<?php echo route('login'); ?>">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login Test</button>
    </form>
</body>
</html>
